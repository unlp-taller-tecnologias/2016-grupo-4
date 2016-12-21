<?php

namespace AppBundle\Controller;

use AppBundle\Entity\FichaHijo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Fichahijo controller.
 *
 * @Route("fichahijo")
 */
class FichaHijoController extends Controller
{
    /**
     * Lists all fichaHijo entities.
     *
     * @Route("/", name="fichahijo_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $fichaHijos = $em->getRepository('AppBundle:FichaHijo')->findAll();

        return $this->render('fichahijo/index.html.twig', array(
            'fichaHijos' => $fichaHijos,
        ));
    }

    /**
     * Creates a new fichaHijo entity.
     *
     * @Route("/new", name="fichahijo_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $fichaHijo = new Fichahijo();
        $form = $this->createForm('AppBundle\Form\FichaHijoType', $fichaHijo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($fichaHijo);
            $em->flush($fichaHijo);

            return $this->redirectToRoute('fichahijo_show', array('id' => $fichaHijo->getId()));
        }

        return $this->render('fichahijo/new.html.twig', array(
            'fichaHijo' => $fichaHijo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a fichaHijo entity.
     *
     * @Route("/{id}", name="fichahijo_show")
     * @Method("GET")
     */
    public function showAction(FichaHijo $fichaHijo)
    {
        $deleteForm = $this->createDeleteForm($fichaHijo);

        return $this->render('fichahijo/show.html.twig', array(
            'fichaHijo' => $fichaHijo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing fichaHijo entity.
     *
     * @Route("/{id}/edit", name="fichahijo_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, FichaHijo $fichaHijo)
    {
        $deleteForm = $this->createDeleteForm($fichaHijo);
        $editForm = $this->createForm('AppBundle\Form\FichaHijoType', $fichaHijo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('fichahijo_edit', array('id' => $fichaHijo->getId()));
        }

        return $this->render('fichahijo/edit.html.twig', array(
            'fichaHijo' => $fichaHijo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a fichaHijo entity.
     *
     * @Route("/{id}", name="fichahijo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, FichaHijo $fichaHijo)
    {
        $form = $this->createDeleteForm($fichaHijo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($fichaHijo);
            $em->flush($fichaHijo);
        }

        return $this->redirectToRoute('fichahijo_index');
    }

    /**
     * Creates a form to delete a fichaHijo entity.
     *
     * @param FichaHijo $fichaHijo The fichaHijo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(FichaHijo $fichaHijo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fichahijo_delete', array('id' => $fichaHijo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
