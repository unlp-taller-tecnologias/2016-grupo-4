<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Ficha;
use AppBundle\Entity\FichaHijo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

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
			$nombreUsuario = $user->getNombre();			
				
		$ficha->setUsuarioModificacion($nombreUsuario);
		$ficha->setUsuarioCreacion($nombreUsuario);
				
		
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
						//seteo el usuario que modificó
		
		$user = $this->container->get('security.context')->getToken()->getUser();
		
		if ($user == "anon")
			$nombreUsuario = "Anonimo";				
		else
			$nombreUsuario = $user->getNombre();
	
		$ficha->setUsuarioModificacion($nombreUsuario);
		
        $deleteForm = $this->createDeleteForm($ficha);
        $editForm = $this->createForm('AppBundle\Form\FichaType', $ficha);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ficha_edit', array('id' => $ficha->getId()));
        }

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
}
