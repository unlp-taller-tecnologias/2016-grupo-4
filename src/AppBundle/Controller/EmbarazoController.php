<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Embarazo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Embarazo controller.
 *
 * @Route("embarazo")
 */
class EmbarazoController extends Controller
{
    /**
     * Lists all embarazo entities.
     *
     * @Route("/", name="embarazo_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $embarazos = $em->getRepository('AppBundle:Embarazo')->findAll();

        return $this->render('embarazo/index.html.twig', array(
            'embarazos' => $embarazos,
        ));
    }

    /**
     * Creates a new embarazo entity.
     *
     * @Route("/new", name="embarazo_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $embarazo = new Embarazo();
		
		//seteo el usuario que creó y modificó
		
		$user = $this->container->get('security.context')->getToken()->getUser();	
		if ($user == "anon")
			$nombreUsuario = "Anonimo";				
		else
			$nombreUsuario = $user->getNombre();			
				
		$embarazo->setUsuarioModificacion($nombreUsuario);
		$embarazo->setUsuarioCreacion($nombreUsuario);
		
		
        $form = $this->createForm('AppBundle\Form\EmbarazoType', $embarazo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($embarazo);
            $em->flush($embarazo);

            return $this->redirectToRoute('embarazo_show', array('id' => $embarazo->getId()));
        }

        return $this->render('embarazo/new.html.twig', array(
            'embarazo' => $embarazo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a embarazo entity.
     *
     * @Route("/{id}", name="embarazo_show")
     * @Method("GET")
     */
    public function showAction(Embarazo $embarazo)
    {
        $deleteForm = $this->createDeleteForm($embarazo);

        return $this->render('embarazo/show.html.twig', array(
            'embarazo' => $embarazo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing embarazo entity.
     *
     * @Route("/{id}/edit", name="embarazo_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Embarazo $embarazo)
    {
		
				//seteo el usuario que modificó
		
		$user = $this->container->get('security.context')->getToken()->getUser();
		
		if ($user == "anon")	
			$nombreUsuario = "Anonimo";				
		else
			$nombreUsuario = $user->getNombre();
		
		$embarazo->setUsuarioModificacion($nombreUsuario);
		
        $deleteForm = $this->createDeleteForm($embarazo);
        $editForm = $this->createForm('AppBundle\Form\EmbarazoType', $embarazo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('embarazo_edit', array('id' => $embarazo->getId()));
        }

        return $this->render('embarazo/edit.html.twig', array(
            'embarazo' => $embarazo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a embarazo entity.
     *
     * @Route("/{id}", name="embarazo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Embarazo $embarazo)
    {
        $form = $this->createDeleteForm($embarazo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($embarazo);
            $em->flush($embarazo);
        }

        return $this->redirectToRoute('embarazo_index');
    }

    /**
     * Creates a form to delete a embarazo entity.
     *
     * @param Embarazo $embarazo The embarazo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Embarazo $embarazo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('embarazo_delete', array('id' => $embarazo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
