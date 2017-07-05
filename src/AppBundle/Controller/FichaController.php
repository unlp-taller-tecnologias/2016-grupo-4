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

		
        $deleteForm = $this->createDeleteForm($ficha);
        $editForm = $this->createForm('AppBundle\Form\FichaType', $ficha);
        $editForm->handleRequest($request);
		$em = $this->getDoctrine()->getManager();

		if ($editForm->isSubmitted() && $editForm->isValid()) {
			
	
            
			foreach($ficha->getFichasHijos() as $hijo)
			{
				
				if((empty($hijo->getAgregar())) or ($hijo->getAgregar()==0))
				{
					$ficha->getFichasHijos()->removeElement($hijo);						
				}	
				else 
				{ 
					$hijo->setFicha($ficha);
					$hijo->setUsuarioModificacion($userid);
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
	
	
		function FalseTrueToZeroOne($boolean)
		{
			if(is_null($boolean))
				return "s.d.";
			if($boolean == true)
				return 1;
			else 
				return 0;
			
			
		}
	
	
			$phpExcelObject = $this->get('phpexcel')->createPHPExcelObject();

			$phpExcelObject->getProperties()->setCreator("Grupo4")
           ->setLastModifiedBy("grupo 4")
           ->setTitle("Exportacion de Fichas")
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
				->leftJoin('ficha.fichasHijos','hijos')
			->where($query->expr()->eq('paciente.unidadCarga',':id'))
			->setParameters(['id' => $id_unidad_carga])
			->orderBy('ficha.id', 'ASC')
			->getQuery()->getResult();			
		}
	
	
	   //seteo encabezados
			$phpExcelObject->setActiveSheetIndex(0)		

			// datos del paciente			
			->setCellValue('A1', 'id Ficha') 
			->setCellValue('B1', 'id Paciente')
			->setCellValue('C1', 'Fecha de Nacimiento')			
			->setCellValue('D1', 'Fecha de Registro')
			
			// cobertura
			->setCellValue('E1', 'Cobertura Privado')
			->setCellValue('F1', 'Cobertura Obra Social')
			->setCellValue('G1', 'Cobertura No Posee')
			
			// Diagnóstico
			->setCellValue('H1', 'Hipertension Cronica')
			->setCellValue('I1', 'Obesidad')
			->setCellValue('J1', 'Tabaquismo')
			
			// Exploraciones
			->setCellValue('K1', 'TAS')
			->setCellValue('L1', 'Glucemia')
			->setCellValue('M1', 'Colesterol LDL')
			->setCellValue('N1', 'TAD')
			->setCellValue('O1', 'Fructosamina')
			->setCellValue('P1', 'Trigliceridos')
			->setCellValue('Q1', 'Talla')
			->setCellValue('R1', 'Hba1c')
			->setCellValue('S1', 'Creatinina')
			->setCellValue('T1', 'Peso')
			->setCellValue('U1', 'Colesterol total')
			->setCellValue('V1', 'Proteinuria')
			->setCellValue('W1', 'Colesterol HDL')
			->setCellValue('X1', 'Urocultivo')
			
			// Educación adquirida durante el proyecto
			->setCellValue('Y1',  'Realiza actividad fisica')
			->setCellValue('Z1',  'Numero de veces por semana')
			->setCellValue('AA1', 'Minutos')
			->setCellValue('AB1', 'Conoce metas de tratamiento')
			->setCellValue('AC1', "Cumple plan de alimentacion")
			->setCellValue('AD1', 'Numero de porciones de fruta por dia')
			->setCellValue('AE1', 'Sabe identificar o tratar hipoglucemias')
			->setCellValue('AF1', 'Automonitoreo glucemico')
			->setCellValue('AG1', 'Numero de veces por dia')
			
			// tabaquismo
			->setCellValue('AH1', 'Fuma actualmente')
			->setCellValue('AI1', 'Fumo anteriormente')
			->setCellValue('AJ1', 'Cigarrillos por dia')
			
			// Hospitalizaciones en los últimos 6 meses
			->setCellValue('AK1', 'Causa de hospitalizaciones 1')
			->setCellValue('AL1', 'Cantidad de dias 1')
			->setCellValue('AM1', 'Causa de hospitalizaciones 2')
			->setCellValue('AN1', 'Cantidad de dias 2')
			->setCellValue('AO1', 'Causa de hospitalizaciones 3')
			->setCellValue('AP1', 'Cantidad de dias 3')
			
			// Tratamiento después del diagnóstico de diabetes gestacional
			->setCellValue('AQ1', 'HIPERTENSION-Atenolol')
			->setCellValue('AR1', 'HIPERTENSION-AAS')
			->setCellValue('AS1', 'HIPERTENSION-Bloqueantes calcicos')
			->setCellValue('AT1', 'HIPERTENSION-Furosemida')
			->setCellValue('AU1', 'HIPERTENSION-Otro')
			->setCellValue('AV1', 'HIPERTENSION-Cual')
			->setCellValue('AW1', 'INSULINA-NPH')
			->setCellValue('AX1', 'INSULINA-Detemir')
			->setCellValue('AY1', 'INSULINA-Corriente')
			->setCellValue('AZ1', 'INSULINA-Aspartica')
			->setCellValue('BA1', 'INSULINA-Numero de inyecciones por dia')
			
			// Recien Nacido(s)
			->setCellValue('BB1', 'Numero de hijos')
			//->setCellValue('BC1', 'Forma de Terminacion del Embarazo: Parto normal')
			//->setCellValue('BD1', 'Forma de Terminacion del Embarazo: Parto prematuro')
			//->setCellValue('BE1', 'Forma de Terminacion del Embarazo: Parto cesarea')
			->setCellValue('BF1', 'Complicaciones Durante el Embarazo:HIE')
			->setCellValue('BG1', 'Complicaciones Durante el Embarazo:Preclampsia')
			->setCellValue('BH1', 'Complicaciones Durante el Embarazo:Otras')
			->setCellValue('BI1', 'Complicaciones Durante el Embarazo:Cuales')

			
			//hijo 1
			
			->setCellValue('BH1', 'Hijo 1 RCIU')
			->setCellValue('BI1', 'Hijo 1 Macrosomia')
			->setCellValue('BJ1', 'Hijo 1 Sind Distress Prematuro')
			->setCellValue('BK1', 'Hijo 1 Hipoglucemia')
			->setCellValue('BL1', 'Hijo 1 Malformaciones fetales')
			->setCellValue('BM1', 'Hijo 1 Mortalidad prenatal')
			->setCellValue('BN1', 'Hijo 1 Otras')
			->setCellValue('BO1', 'Hijo 1 Cuales')
			->setCellValue('BP1', 'Hijo 1 Peso')
			->setCellValue('BQ1', 'Hijo 1 Capurro')

			//hijo 2
			
			->setCellValue('BR1', 'Hijo 2 RCIU')
			->setCellValue('BS1', 'Hijo 2 Macrosomia')
			->setCellValue('BT1', 'Hijo 2 Sind Distress Prematuro')
			->setCellValue('BU1', 'Hijo 2 Hipoglucemia')
			->setCellValue('BV1', 'Hijo 2 Malformaciones fetales')
			->setCellValue('BW1', 'Hijo 2 Mortalidad prenatal')
			->setCellValue('BX1', 'Hijo 2 Otras')
			->setCellValue('BY1', 'Hijo 2 Cuales')
			->setCellValue('BZ1', 'Hijo 2 Peso')
			->setCellValue('CA1', 'Hijo 2 Capurro')
			
			;

			
			
	   			//seteo los valores de las fichas

	   $f = 2;
	   $c='A';
	   
	   
	   
		foreach($fichas as $fi) {
			
			// datos del paciente			
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getId());$c ++;	
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getPaciente()->getId()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getPaciente()->getFechaNacimiento()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getFechaRegistro()); $c ++;
			
			//cobertura
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, FalseTrueToZeroOne($fi->getCoberturaPrivado())); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, FalseTrueToZeroOne($fi->getCoberturaObraSocial())); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, FalseTrueToZeroOne($fi->getCoberturaNinguna())); $c ++;
			
			//diagnostico
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, FalseTrueToZeroOne($fi->getHipertensionCronica())); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, FalseTrueToZeroOne($fi->getObesidad())); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, FalseTrueToZeroOne($fi->getTabaquismo())); $c ++;
			
			//Exploraciones
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getTas()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getGlucemia()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getColesterolLdl()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getTad()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getFructosamina()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getTrigliceridos()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getTalla()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getHba1c()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getCreatinina()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getPeso()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getColesterolTotal()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getProteinuria()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getColesterolHdl()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, FalseTrueToZeroOne($fi->getUrocultivo())); $c ++;
			
			//Educación adquirida durante el proyecto
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, FalseTrueToZeroOne($fi->getRealizaActividadFisica())); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getNumeroDeVecesPorSemana()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getMinutos()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, FalseTrueToZeroOne($fi->getConoceMetasDeTratamiento())); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, FalseTrueToZeroOne($fi->getCumplePlanDeAlimentacion())); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getNumerodePorcionesDeFrutaPorDia()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, FalseTrueToZeroOne($fi->getSabeIdentificarOTratarHipoglucemias())); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, FalseTrueToZeroOne($fi->getAutomonitoreoGlucemico())); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getNumeroDeVecesPorDia()); $c ++;
	
			//tabaquismo
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f,FalseTrueToZeroOne($fi->getFumaActualmente())); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f,FalseTrueToZeroOne($fi->getFumoAnteriorMente())); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getCigarrillosAlDia()); $c ++;
			
			//Hospitalizaciones en los últimos 6 meses
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getCausaHospitalizacion1()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getDiasHospitalizacion1()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getCausaHospitalizacion2()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getDiasHospitalizacion2()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getCausaHospitalizacion3()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getDiasHospitalizacion3()); $c ++;
			
			//Tratamiento después del diagnóstico de diabetes gestacional
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getHipertensionAtenolol()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getAas()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getHipertensionBloqueantesCalcicos()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getHipertensionFurosemida()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getHipertensionOtro()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getHipertensionCual()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getInsulinaNph()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getInsulinaDetemir()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getInsulinaCorriente()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getInsulinaAspartica()); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getNumeroInyeccionesDia()); $c ++;
			
			//Recien Nacido(s)
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getNumeroHijos()); $c ++;
			//$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, FalseTrueToZeroOne($fi->getPartoNormal())); $c ++;
			//$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, FalseTrueToZeroOne($fi->getPartoPrematuro())); $c ++;
			//$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, FalseTrueToZeroOne($fi->getPartoCesarea())); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, FalseTrueToZeroOne($fi->getCmHie())); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, FalseTrueToZeroOne($fi->getCmPreclampsia())); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, FalseTrueToZeroOne($fi->getCmOtras())); $c ++;
			$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getCmCuales()); $c ++;			

			//hijo 1
			if ($fi->tieneHijo1())
			{
				$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, FalseTrueToZeroOne($fi->getHijo1()->getComplicacionesRciu())); $c ++;
				$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, FalseTrueToZeroOne($fi->getHijo1()->getComplicacionesMacrosomia())); $c ++;
				$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, FalseTrueToZeroOne($fi->getHijo1()->getComplicacionesSindDistressPrematuro())); $c ++;
				$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, FalseTrueToZeroOne($fi->getHijo1()->getComplicacionesHipoglucemia())); $c ++;
				$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, FalseTrueToZeroOne($fi->getHijo1()->getComplicacionesMalformacionesFetales())); $c ++;
				$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, FalseTrueToZeroOne($fi->getHijo1()->getComplicacionesMortalidadPrenatal())); $c ++;
				$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, FalseTrueToZeroOne($fi->getHijo1()->getComplicacionesOtras())); $c ++;
				$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getHijo1()->getComplicacionesCuales()); $c ++;
				$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getHijo1()->getPeso()); $c ++;
				$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, $fi->getHijo1()->getCapurro()); $c ++;

			}
			

			if ($fi->tieneHijo2())
			{
				$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, FalseTrueToZeroOne($fi->getHijo2()->getComplicacionesRciu())); $c ++;
				$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, FalseTrueToZeroOne($fi->getHijo2()->getComplicacionesMacrosomia())); $c ++;
				$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, FalseTrueToZeroOne($fi->getHijo2()->getComplicacionesSindDistressPrematuro())); $c ++;
				$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, FalseTrueToZeroOne($fi->getHijo2()->getComplicacionesHipoglucemia())); $c ++;
				$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, FalseTrueToZeroOne($fi->getHijo2()->getComplicacionesMalformacionesFetales())); $c ++;
				$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, FalseTrueToZeroOne($fi->getHijo2()->getComplicacionesMortalidadPrenatal())); $c ++;
				$phpExcelObject->setActiveSheetIndex(0)->setCellValue($c.$f, FalseTrueToZeroOne($fi->getHijo2()->getComplicacionesOtras())); $c ++;
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
			$response->headers->set('Content-Type', 'text/vnd.ms-excel;');
			$response->headers->set('Pragma', 'public');
			$response->headers->set('Cache-Control', 'maxage=1');
			$response->headers->set('Content-Disposition', $dispositionHeader);

			return $response;	
		}
		
}
