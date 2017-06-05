<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Paciente;
use AppBundle\Entity\Ficha;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

/**
 * Paciente controller.
 *
 * @Route("paciente")
 */
class PacienteController extends Controller
{
    /**
     * Lists all paciente entities.
     *
     * @Route("/", name="paciente_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $user = $this->container->get('security.context')->getToken()->getUser();

        if ($user->hasRole('ROLE_ADMIN')) { 
            $pacientes = $em->getRepository('AppBundle:Paciente')->findAll();
        }else{
            if ($user->hasRole('ROLE_COORDINADOR') || $user->hasRole('ROLE_DATAENTRY')) { 
                $idUnidad = $user->getUnidades()->getId();
                $repository = $this->getDoctrine()->getRepository('AppBundle:Paciente');
                $pacientes = $repository->findByUnidadCarga($idUnidad);
            }
        }

        return $this->render('paciente/index.html.twig', array(
            'pacientes' => $pacientes,
        ));
    }

    /**
     * Creates a new paciente entity.
     *
     * @Route("/new", name="paciente_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $paciente = new Paciente();		
		$user = $this->container->get('security.context')->getToken()->getUser();	
		if ($user == "anon")
			$nombreUsuario = "Anonimo";				
		else
			$userid = $user->getId();			
		
		$paciente->setUsuarioModificacion($userid);
		$paciente->setUsuarioCreacion($userid);
	
/* 		$ficha = new Ficha();
		$ficha ->setUsuarioModificacion($userid);
		$ficha ->setUsuarioCreacion($userid);	
		
		$paciente ->setFichas($ficha);
		$ficha->setPaciente($paciente);		 */
	
        $form = $this->createForm('AppBundle\Form\PacienteType', $paciente);
        $form->handleRequest($request);
		/*if($form->isSubmitted() && $form->get('cancel')->isClicked()){
			return $this->redirectToRoute('paciente_index', array('id' => $paciente->getId()));
		}*/
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($paciente);
            $em->flush($paciente);

            return $this->redirectToRoute('paciente_show', array('id' => $paciente->getId()));
        }

        return $this->render('paciente/new.html.twig', array(
            'paciente' => $paciente,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a paciente entity.
     *
     * @Route("/{id}", name="paciente_show")
     * @Method("GET")
     */
    public function showAction(Paciente $paciente)
    {
        $deleteForm = $this->createDeleteForm($paciente);

        return $this->render('paciente/show.html.twig', array(
            'paciente' => $paciente,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing paciente entity.
     *
     * @Route("/{id}/edit", name="paciente_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Paciente $paciente)
    {
		
		$user = $this->container->get('security.context')->getToken()->getUser();
		
		if ($user == "anon")
			$nombreUsuario = "Anonimo";				
		else
			$userid = $user->getId();
	
		$paciente->setUsuarioModificacion($userid);
		
		
        $deleteForm = $this->createDeleteForm($paciente);
        $editForm = $this->createForm('AppBundle\Form\PacienteType', $paciente);
        $editForm->handleRequest($request);
		if($editForm->get('cancel')->isClicked()){
			return $this->redirectToRoute('paciente_index', array('id' => $paciente->getId()));
		}
        if ($editForm->isSubmitted() && $editForm->isValid()) {
			$this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('paciente_show', array('id' => $paciente->getId()));
        }

        return $this->render('paciente/edit.html.twig', array(
            'paciente' => $paciente,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a paciente entity.
     *
     * @Route("/{id}", name="paciente_delete")
	 * @Method({"DELETE", "POST"})
     */
    public function deleteAction(Request $request, Paciente $paciente)
    {
		// exit("nada");
		$form = $this->createDeleteForm($paciente);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$em->remove($paciente);
			$em->flush($paciente);
		}

        return $this->redirectToRoute('paciente_index');
    }

    /**
     * Creates a form to delete a paciente entity.
     *
     * @param Paciente $paciente The paciente entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Paciente $paciente)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('paciente_delete', array('id' => $paciente->getId())))
            ->setMethod('DELETE')
			->add('delete', SubmitType::class, array('label' => 'Eliminar', 
			'attr' => array('onClick' => 'javascript: return confirm("¿Estas seguro?");')))
            ->getForm()
        ;
    }
	
}
