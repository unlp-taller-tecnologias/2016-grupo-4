<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Ficha;
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
			$nombreUsuario = $user->getUsername();
	
		$ficha->setUsuarioModificacion($nombreUsuario);
		$ficha->setUsuarioCreacion($nombreUsuario);
		
        $deleteForm = $this->createDeleteForm($ficha);
        $editForm = $this->createForm('AppBundle\Form\FichaType', $ficha);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            
			foreach($ficha->getFichasHijos() as $hijo)
			{
				$hijo->setUsuarioModificacion($nombreUsuario);
				$hijo->setUsuarioCreacion($nombreUsuario);									
				/*
				if( $hijo->getAgregar() == 1)
				{
					$hijo->setFicha($ficha);
					$em->persist($hijo);
					$em->flush($hijo);	
				}
				*/
			}	

			$this->getDoctrine()->getManager()->flush($ficha);
			$em = $this->getDoctrine()->getManager();
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
		$nombreUsuario = $user->getUsername();

				
		$ficha->setUsuarioModificacion($nombreUsuario);
		$ficha->setUsuarioCreacion($nombreUsuario);
			
	
		//seteo el paciente
		$p = $this->getDoctrine()
        ->getRepository('AppBundle:Paciente')
        ->find($id);		
		
		$p->setFichas($ficha);
		$ficha->setPaciente($p);
		
		$fh1 = new FichaHijo();
		$fh2 = new FichaHijo();
		
		$fh1->setUsuarioModificacion($nombreUsuario);
		$fh1->setUsuarioCreacion($nombreUsuario);
		
		$fh2->setUsuarioModificacion($nombreUsuario);
		$fh2->setUsuarioCreacion($nombreUsuario);
		
		$ficha->setFichasHijos($fh1);
		$ficha->setFichasHijos($fh2);
		
		//seteo los hijos solo si estan cargados
		
		//$hijos = $ficha->getFichasHijos();
		
		//$ficha->getFichasHijos()
		
		
		// seteo el embarazo
		
		$ue = $p->getUltimoEmbarazo();
		print_r($ue);
		die;
		
		
		//fin del seteo embarazo
		
		
        $form = $this->createForm('AppBundle\Form\FichaType', $ficha);
        $form->handleRequest($request);
		
        if ($form->isSubmitted() && $form->isValid()) {

			$em = $this->getDoctrine()->getManager();
			$em->persist($ficha);
			$em->flush($ficha);		
		
			foreach($ficha->getFichasHijos() as $hijo)
			{
				if( $hijo->getAgregar() == 1)
				{
					$hijo->setFicha($ficha);
					$em->persist($hijo);
					$em->flush($hijo);	
				}			
			}	

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
			$fichas = $em->getRepository('AppBundle:Ficha')->findAll();	
			$query = $em->createQueryBuilder();
 
			$fichas = $query->select(['ficha','paciente'])
			->from('AppBundle:Ficha', 'ficha')
				->innerJoin('ficha.paciente','paciente')
			->where($query->expr()->eq('paciente.unidadCarga',':id'))
			->setParameters(['id' => $id_unidad_carga])
			->getQuery()->getResult();			
		}
		

		
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
			->setCellValue('BE1', 'Complicaciones Maternas Cuales');

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
