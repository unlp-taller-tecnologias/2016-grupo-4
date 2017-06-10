<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Ficha;
use AppBundle\Entity\Embarazo;
use AppBundle\Entity\FichaHijo;
use AppBundle\Entity\Paciente;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;


/**
 * Ficha controller.
 *
 * @Route("ficha")
 */
class FichaController extends Controller
{
    /**
     * Lists all ficha entities.
     *
     * @Route("/", name="ficha_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $fichas = $em->getRepository('AppBundle:Ficha')->findAll();


        return $this->render('ficha/index.html.twig', array(
            'fichas' => $fichas,
        ));
    }

    /**
     * Creates a new ficha entity.
     *
     * @Route("/new", name="ficha_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
		$ficha = new Ficha();	
				
		//seteo el usuario que creó y modificó
		
		$user = $this->container->get('security.context')->getToken()->getUser();	
		if ($user == "anon")
			$nombreUsuario = "Anonimo";				
		else
			$nombreUsuario = $user->getUsername();			
				
		$ficha->setUsuarioModificacion($nombreUsuario);
		$ficha->setUsuarioCreacion($nombreUsuario);
			

		$p = $this->getDoctrine()
        ->getRepository('AppBundle:Paciente')
        ->find('1');		
		
		$ficha->setPaciente($p);
		
		
        $form = $this->createForm('AppBundle\Form\FichaType', $ficha);
        $form->handleRequest($request);
        $hijo = new FichaHijo();
        $hijo->setFicha($ficha->getId());
        $ficha->getFichasHijos()->add($hijo);
		

        if ($form->isSubmitted() && $form->isValid()) {

		
			foreach($ficha->getFichasHijos() as $hijo)
			{
				if( empty($hijo->getAgregar()) or $hijo->getAgregar()==0)
					$ficha->getFichasHijos()->removeElement($hijo);		
				else 
					$hijo->setFicha($ficha);
			}

			$em = $this->getDoctrine()->getManager();
            $em->persist($ficha);
            $em->flush($ficha);

            return $this->redirectToRoute('ficha_show', array('id' => $ficha->getId()));
        }

        return $this->render('ficha/new.html.twig', array(
            'ficha' => $ficha,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ficha entity.
     *
     * @Route("/{id}", name="ficha_show")
     * @Method("GET")
     */
    public function showAction(Ficha $ficha)
    {
        $deleteForm = $this->createDeleteForm($ficha);

        return $this->render('ficha/show.html.twig', array(
            'ficha' => $ficha,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ficha entity.
     *
     * @Route("/{id}/edit", name="ficha_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Ficha $ficha)
    {
		
		if (sizeof($ficha->getFichasHijos()) == 0) 
		{
			$fh1 = new FichaHijo();
			$fh1->setFicha($ficha);
			$fh2 = new FichaHijo();
			$fh2->setFicha($ficha);
			$ficha->setFichasHijos($fh1);
			$ficha->setFichasHijos($fh2);
			
		}
		
		if (sizeof($ficha->getFichasHijos()) == 1) 
		{
			$fh2 = new FichaHijo();	
			$fh2->setFicha($ficha);	
			$ficha->setFichasHijos($fh2);
			
		}
		//seteo el usuario que modificó
		$user = $this->container->get('security.context')->getToken()->getUser();
		
		if ($user == "anon")
			$nombreUsuario = "Anonimo";				
		else
			$userid = $user->getId();
	
		$ficha->setUsuarioModificacion($userid);
		$ficha->setUsuarioCreacion($userid);
		
        $deleteForm = $this->createDeleteForm($ficha);
        $editForm = $this->createForm('AppBundle\Form\FichaType', $ficha);
        $editForm->handleRequest($request);
		$em = $this->getDoctrine()->getManager();

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            
			foreach($ficha->getFichasHijos() as $hijo)
			{
				
				if( (empty($hijo->getAgregar())) or ($hijo->getAgregar()==0))
				{
					$em->remove($hijo);
					$em->flush();
				}	
				else { 
					$hijo->setFicha($ficha);
					$hijo->setUsuarioModificacion($userid);
					$hijo->setUsuarioCreacion($userid);	
				}
			}
			
			$em->persist($ficha);
			$em->flush();
			return $this->redirectToRoute('ficha_show', array('id' => $ficha->getId()));
        }

	
		//fin modificado
		
		
		
		return $this->render('ficha/edit.html.twig', array(
            'ficha' => $ficha,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ficha entity.
     *
     * @Route("/{id}", name="ficha_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Ficha $ficha)
    {
        $form = $this->createDeleteForm($ficha);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ficha);
            $em->flush($ficha);
        }

        return $this->redirectToRoute('ficha_index');
    }

    /**
     * Creates a form to delete a ficha entity.
     *
     * @param Ficha $ficha The ficha entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Ficha $ficha)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ficha_delete', array('id' => $ficha->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

	/**
	*@Route("/add/{id}", name="ficha_add")
	*@Method({"GET", "POST"})
	*/	
	public function addFichaAction(Request $request, $id)
	{	
		$ficha = new Ficha();	
				
		//seteo el usuario que creó y modificó
		
		$user = $this->container->get('security.context')->getToken()->getUser();	
		$userId = $user->getId();

				
		$ficha->setUsuarioModificacion($userId);
		$ficha->setUsuarioCreacion($userId);
			
	
		//seteo el paciente
		$p = $this->getDoctrine()
        ->getRepository('AppBundle:Paciente')
        ->find($id);		
		
		$p->setFichas($ficha);
		$ficha->setPaciente($p);

		//seteo hijos		
		$fh1 = new FichaHijo();
		$fh2 = new FichaHijo();
		
		$fh1->setUsuarioModificacion($userId);
		$fh1->setUsuarioCreacion($userId);
		
		$fh2->setUsuarioModificacion($userId);
		$fh2->setUsuarioCreacion($userId);

		$ficha->setFichasHijos($fh1);
		$ficha->setFichasHijos($fh2);
		
		$form = $this->createForm('AppBundle\Form\FichaType', $ficha);
        $form->handleRequest($request);
		
        if ($form->isSubmitted() && $form->isValid()) {

			//seteo el embarazo
			$ue = $p->getUltimoEmbarazo();		
		
			//si no hay ultimo embarazo
			if ($ue==null) {
				echo "entró por el null";
				$ue = new Embarazo();			
				$p->setEmbarazos($ue);
				$ue->setPaciente($p);
				$ue->setFechaInicio($ficha->getFechaRegistro());
			}
		
			//si transcurrieron más de 12 meses del ultimo embarazo		
			$fecha_embarazo = $ue->getFechaInicio();
			$fecha_registro = $ficha->getFechaRegistro();
			
			$intervalo=$fecha_embarazo->diff($fecha_registro);
			$diferencia_meses = $intervalo->format("%m");

			//creo un nuevo embarazo y seteo la ficha con él
			if ($diferencia_meses > 12) {
				echo "entró por el 12";
				$ue = new Embarazo();
				$p->setEmbarazos($ue);
				$ue->setPaciente($p);
				$ue->setFechaInicio($ficha->getFechaRegistro());
			}
			
			$ue->setFichas($ficha);
			$ue->setUsuarioModificacion($ficha->getUsuarioModificacion());
			$ue->setUsuarioCreacion($ficha->getUsuarioCreacion());
			$ficha->setEmbarazo($ue);
				
			//fin seteo embarazo
			$em = $this->getDoctrine()->getManager();	
			
			foreach($ficha->getFichasHijos() as $hijo)
			{
				if( empty($hijo->getAgregar()) or $hijo->getAgregar()==0)
					$ficha->getFichasHijos()->removeElement($hijo);		
				else 
					$hijo->setFicha($ficha);
			}
			
			$em = $this->getDoctrine()->getManager();
			$em->persist($ficha);
			$em->flush($ficha);		
		
			return $this->redirectToRoute('ficha_show', array('id' => $ficha->getId()));
        }

        return $this->render('ficha/new.html.twig', array(
            'ficha' => $ficha,
            'form' => $form->createView(),
        ));
	}
	
	/**
	* @Route("/buscar/{id}", name="ficha_buscar")
	*@Method({"GET", "POST"})
	*/	
	
	public function getFichasByPaciente($id)
	{
		$fichas = new ArrayCollection();		
		$em = $this->getDoctrine()->getManager();        
		$paciente = $em->getRepository('AppBundle:Paciente')->findById($id);
		$paciente = $paciente[0];
		$fichas = $paciente->getFichas();
        return $this->render('ficha/index.html.twig', array(
            'fichas' => $fichas,
        ));	
		
	}
	
		
	/**
	*@Route("/exportar/fichas", name="ficha_exportar")
	*@Method({"GET", "POST"})
	*/	
	
	public function exportarAction(Request $request)
	{	   
			$phpExcelObject = $this->get('phpexcel')->createPHPExcelObject();

			$phpExcelObject->getProperties()->setCreator("Grupo4")
           ->setLastModifiedBy("Admin")
           ->setTitle("Exportación de Fichas")
           ->setSubject("Office 2005 XLSX Test Document")
           ->setDescription("Test document for Office 2005 XLSX, generated using PHP classes.")
           ->setKeywords("office 2005 openxml php")
           ->setCategory("Test result file");

		$em = $this->getDoctrine()->getManager();
		
	   // obtengo el usuario
		$user = $this->container->get('security.context')->getToken()->getUser();	
		$roles = $user->getRoles();
		$rol = $roles[0];
		
		if ($rol == 'ROLE_ADMIN' ) 
		{
			$fichas = $em->getRepository('AppBundle:Ficha')->findAll();			
		}
		
		if ($rol == 'ROLE_COORDINADOR' ) 			
		{
			
			$id_unidad_carga = $user->getUnidades()->getId();
			//$fichas = $em->getRepository('AppBundle:Ficha')->findAll();	
			$query = $em->createQueryBuilder(); 
			$fichas = $query->select(['ficha','paciente'])
			->from('AppBundle:Ficha', 'ficha')
				->innerJoin('ficha.paciente','paciente')
				->innerJoin('ficha.fichasHijos','hijos')
			->where($query->expr()->eq('paciente.unidadCarga',':id'))
			->setParameters(['id' => $id_unidad_carga])
			->getQuery()->getResult();			
		}
		
/*
		foreach($fichas as $fi)
		{
			echo "nro ficha ".$fi->getId();
			echo "tiene hijos :".$fi->getId();
			
		}
		die;
		


		   foreach($fichas as $fi) {	

				echo "<br/> ficha nro ".$fi->getId()."<br/>";
				
				
				if ($fi->tieneHijo1()) {
					echo "tiene hijo 1: ";
					print_r($fi->getHijo1()->getId());
				}	

				if ($fi->tieneHijo2()) {
					echo "tiene hijo 2: ";
					print_r($fi->getHijo2()->getId());
				}
			}
	   
	   die;
*/		
		
	   //seteo encabezados
	   		$phpExcelObject->setActiveSheetIndex(0)		
			->setCellValue('A1', 'id')
			->setCellValue('B1', 'Fecha de Registro')
			->setCellValue('C1', 'medico')
			->setCellValue('D1', 'TAS')
			->setCellValue('D1', 'TAD')
			->setCellValue('E1', 'Talla')
			->setCellValue('F1', 'Peso')
			->setCellValue('G1', 'Glucemia')
			->setCellValue('I1', 'hba1c')
			->setCellValue('J1', 'Colesterol Total')
			->setCellValue('K1', 'Colesterol HDL')
			->setCellValue('L1', 'Colesterol LDL')
			->setCellValue('M1', 'Trigliceridos')
			->setCellValue('N1', 'Creatinina')
			->setCellValue('O1', 'Proteinuria')
			->setCellValue('P1', 'Urocultivo')
			->setCellValue('Q1', 'Hipertension Cronica')
			->setCellValue('R1', 'Obesidad')
			->setCellValue('S1', 'Tabaquismo')
			->setCellValue('T1', 'Realiza Actividad Fisica')
			->setCellValue('U1', 'Cantidad de veces por semana')
			->setCellValue('V1', 'Minutos')
			->setCellValue('W1', 'Conoce Metas De Tratamiento')
			->setCellValue('X1', 'Cumple Plan De Alimentacion')
			->setCellValue('Y1', 'Cantidad de Porciones De Fruta Por Dia')
			->setCellValue('Z1', 'Sabe Identificar O Tratar Hipoglucemias')
			->setCellValue('AA1', 'Automonitoreo Glucemico')
			->setCellValue('AB1', 'Cantidad de Veces Por Dia')
			->setCellValue('AC1', 'Fuma Actualmente')
			->setCellValue('AD1', 'Fumo Anteriormente')
			->setCellValue('AE1', 'Cigarrillos Al Dia')
			->setCellValue('AF1', 'Causa Hospitalizacion 1')
			->setCellValue('AG1', 'Causa Hospitalizacion 2')
			->setCellValue('AH1', 'Causa Hospitalizacion 3')
			->setCellValue('AI1', 'Dias Hospitalizacion 1')
			->setCellValue('AJ1', 'Dias Hospitalizacion 2')
			->setCellValue('AK1', 'Dias Hospitalizacion 3')
			->setCellValue('AL1', 'Hipertension Atenolol l')
			->setCellValue('AM1', 'Hipertension Bloqueantes Calcicos')
			->setCellValue('AN1', 'Hipertension Furosemida')
			->setCellValue('AO1', 'Hipertension Otro')
			->setCellValue('AP1', 'Hipertension Cual')
			->setCellValue('AQ1', 'aas')
			->setCellValue('AR1', 'Insulina Nph')
			->setCellValue('AS1', 'Insulina Detemir')
			->setCellValue('AT1', 'Insulina Corriente')
			->setCellValue('AU1', 'Insulina Aspartica')
			->setCellValue('AV1', 'Cantidad de Inyecciones al Dia')
			->setCellValue('AW1', 'Cobertura Privado')
			->setCellValue('AX1', 'Cobertura Obra Social')
			->setCellValue('AY1', 'Cobertura Ninguna')
			->setCellValue('AZ1', 'Cantidad de Hijos')
			->setCellValue('BA1', 'Parto Normal')
			->setCellValue('BB1', 'Parto Prematuro')
			->setCellValue('BC1', 'Parto Cesarea')
			->setCellValue('BD1', 'Complicaciones Maternas Hie')
			->setCellValue('BE1', 'Complicaciones Maternas Preclampsia')
			->setCellValue('BF1', 'Complicaciones Maternas Otras')
			->setCellValue('BG1', 'Complicaciones Maternas Cuales')
			
			//hijo 1
			
			->setCellValue('BH1', 'Hijo 1: RCIU')
			->setCellValue('BI1', 'Hijo 1: Macrosomia')
			->setCellValue('BJ1', 'Hijo 1: Sind Distress Prematuro')
			->setCellValue('BK1', 'Hijo 1: Hipoglucemia')
			->setCellValue('BL1', 'Hijo 1: Malformaciones fetales')
			->setCellValue('BM1', 'Hijo 1: Mortalidad prenatal')
			->setCellValue('BN1', 'Hijo 1: Otras')
			->setCellValue('BO1', 'Hijo 1: Cuales')
			->setCellValue('BP1', 'Hijo 1: Peso')
			->setCellValue('BQ1', 'Hijo 1: Capurro')

			//hijo 2
			
			->setCellValue('BR1', 'Hijo 2: RCIU')
			->setCellValue('BS1', 'Hijo 2: Macrosomia')
			->setCellValue('BT1', 'Hijo 2: Sind Distress Prematuro')
			->setCellValue('BU1', 'Hijo 2: Hipoglucemia')
			->setCellValue('BV1', 'Hijo 2: Malformaciones fetales')
			->setCellValue('BW1', 'Hijo 2: Mortalidad prenatal')
			->setCellValue('BX1', 'Hijo 2: Otras')
			->setCellValue('BY1', 'Hijo 2: Cuales')
			->setCellValue('BZ1', 'Hijo 2: Peso')
			->setCellValue('CA1', 'Hijo 2: Capurro');

			
			
	   			//seteo los valores de las fichas

	   $f = 2;
	   $c='A';
	   
	   
		foreach($fichas as $fi) {
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getId());$c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getFechaRegistro()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getMedico()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getTas()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getTad()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getTalla()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getPeso()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getGlucemia()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getHba1c()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getColesterolTotal()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getColesterolHdl()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getColesterolLdl()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getTrigliceridos()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getCreatinina()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getProteinuria()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getUrocultivo()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getHipertensionCronica()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getObesidad()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getTabaquismo()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getRealizaActividadFisica()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getNumeroDeVecesPorSemana()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getMinutos()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getConoceMetasDeTratamiento()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getCumplePlanDeAlimentacion()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getNumerodePorcionesDeFrutaPorDia()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getSabeIdentificarOTratarHipoglucemias()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getAutomonitoreoGlucemico()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getNumeroDeVecesPorDia()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getFumaActualmente()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getFumoAnteriorMente()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getCigarrillosAlDia()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getCausaHospitalizacion1()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getCausaHospitalizacion2()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getCausaHospitalizacion3()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getDiasHospitalizacion1()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getDiasHospitalizacion2()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getDiasHospitalizacion3()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getHipertensionAtenolol()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getHipertensionBloqueantesCalcicos()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getHipertensionFurosemida()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getHipertensionOtro()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getHipertensionCual()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getAas()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getInsulinaNph()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getInsulinaDetemir()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getInsulinaCorriente()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getInsulinaAspartica()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getNumeroInyeccionesDia()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getCoberturaPrivado()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getCoberturaObraSocial()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getCoberturaNinguna()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getNumeroHijos()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getPartoNormal()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getPartoPrematuro()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getPartoCesarea()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getCmHie()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getCmPreclampsia()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getCmOtras()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getCmCuales()); $c ++;
			
			//hijo 1
			if ($fi->tieneHijo1())
			{
				$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getHijo1()->getComplicacionesRciu()); $c ++;
				$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getHijo1()->getComplicacionesMacrosomia()); $c ++;
				$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getHijo1()->getComplicacionesSindDistressPrematuro()); $c ++;
				$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getHijo1()->getComplicacionesHipoglucemia()); $c ++;
				$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getHijo1()->getComplicacionesMalformacionesFetales()); $c ++;
				$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getHijo1()->getComplicacionesMortalidadPrenatal()); $c ++;
				$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getHijo1()->getComplicacionesOtras()); $c ++;
				$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getHijo1()->getComplicacionesCuales()); $c ++;
				$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getHijo1()->getPeso()); $c ++;
				$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getHijo1()->getCapurro()); $c ++;

			}
			

			if ($fi->tieneHijo2())
			{
				$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getHijo2()->getComplicacionesRciu()); $c ++;
				$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getHijo2()->getComplicacionesMacrosomia()); $c ++;
				$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getHijo2()->getComplicacionesSindDistressPrematuro()); $c ++;
				$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getHijo2()->getComplicacionesHipoglucemia()); $c ++;
				$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getHijo2()->getComplicacionesMalformacionesFetales()); $c ++;
				$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getHijo2()->getComplicacionesMortalidadPrenatal()); $c ++;
				$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getHijo2()->getComplicacionesOtras()); $c ++;
				$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getHijo2()->getComplicacionesCuales()); $c ++;
				$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getHijo2()->getPeso()); $c ++;
				$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getHijo2()->getCapurro()); $c ++;

			}
			
			$f++;			
			$c='A';			
		}   
		
	   //fin seteo valores
		   
		   $phpExcelObject->getActiveSheet()->setTitle('Cenexa');
		   // Set active sheet index to the first sheet, so Excel opens this as the first sheet

		   $phpExcelObject->setActiveSheetIndex(0);

				  // create the writer
			$writer = $this->get('phpexcel')->createWriter($phpExcelObject, 'Excel2007');
			// create the response
			$response = $this->get('phpexcel')->createStreamedResponse($writer);
			// adding headers
			$dispositionHeader = $response->headers->makeDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT,'cenexa.xlsx');
			$response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
			$response->headers->set('Pragma', 'public');
			$response->headers->set('Cache-Control', 'maxage=1');
			$response->headers->set('Content-Disposition', $dispositionHeader);

			return $response;	
		}
}
