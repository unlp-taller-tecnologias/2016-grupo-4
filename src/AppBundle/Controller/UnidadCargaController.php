<?php

namespace AppBundle\Controller;

use AppBundle\Entity\UnidadCarga;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Unidadcarga controller.
 *
 * @Route("unidadcarga")
 */
class UnidadCargaController extends Controller
{
    /**
     * Lists all unidadCarga entities.
     *
     * @Route("/", name="unidadcarga_index")
     * @Method("GET")
     */
    public function indexAction()
	{
		$em = $this->getDoctrine()->getManager();
        $unidadCargas = $em->getRepository('AppBundle:UnidadCarga')->findAll();

        return $this->render('unidadcarga/index.html.twig', array(
            'unidadCargas' => $unidadCargas,
        ));
    }

    /**
     * Creates a new unidadCarga entity.
     *
     * @Route("/new", name="unidadcarga_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $unidadCarga = new Unidadcarga();
		
		//seteo el usuario que creó y modificó
		
		$user = $this->container->get('security.context')->getToken()->getUser();	
		if ($user == "anon")
			$nombreUsuario = "Anonimo";				
		else
			$nombreUsuario = $user->getUsername();		

		
		$unidadCarga->setUsuarioModificacion($nombreUsuario);
		$unidadCarga->setUsuarioCreacion($nombreUsuario);
		$form = $this->createForm('AppBundle\Form\UnidadCargaType', $unidadCarga);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($unidadCarga);
            $em->flush($unidadCarga);

            return $this->redirectToRoute('unidadcarga_show', array('id' => $unidadCarga->getId()));
        }

        return $this->render('unidadcarga/new.html.twig', array(
            'unidadCarga' => $unidadCarga,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a unidadCarga entity.
     *
     * @Route("/{id}", name="unidadcarga_show")
     * @Method("GET")
     */
    public function showAction(UnidadCarga $unidadCarga)
    {
		$deleteForm = $this->createDeleteForm($unidadCarga);

        return $this->render('unidadcarga/show.html.twig', array(
            'unidadCarga' => $unidadCarga,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing unidadCarga entity.
     *
     * @Route("/{id}/edit", name="unidadcarga_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, UnidadCarga $unidadCarga)
    {
		//seteo el usuario que modificó
		
		$user = $this->container->get('security.context')->getToken()->getUser();

		if ($user == "anon")	
			$nombreUsuario = "Anonimo";				
		else
			$nombreUsuario = $user->getUsername();

		$unidadCarga->setUsuarioModificacion($nombreUsuario);
		
		
		
        $deleteForm = $this->createDeleteForm($unidadCarga);
        $editForm = $this->createForm('AppBundle\Form\UnidadCargaType', $unidadCarga);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('unidadcarga_show', array('id' => $unidadCarga->getId()));
        }

        return $this->render('unidadcarga/edit.html.twig', array(
            'unidadCarga' => $unidadCarga,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Logical erasure a unidadCarga entity.
     *
     * @Route("/{id}/delete", name="unidadcarga_delete")
     * @Method({"GET", "DELETE", "POST"})
     */
    public function deleteAction(Request $request, UnidadCarga $unidadCarga)
    {
		$form = $this->createForm('AppBundle\Form\UnidadCargaType', $unidadCarga);
        $form->handleRequest($request);
		$error_borrar = null;

        if ($form->isSubmitted() && $form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$query = $em->createQueryBuilder();
 
			$paciente = $query->select(['paciente.id'])
				->from('AppBundle:Paciente', 'paciente')
				->where($query->expr()->eq('paciente.unidadCarga',':id'))
				->setParameters(['id' => $unidadCarga])
				->getQuery()->getResult();
			if($paciente == null){
				$unidadCarga->setActivo(false);
				
				foreach($unidadCarga->getUsers() as $usuario) {
					$usuario->setEnabled(false);
					$em->flush($usuario);
				}
				
				$em->flush($unidadCarga);
				return $this->redirectToRoute('unidadcarga_index', array('id' => $unidadCarga->getId()));
			}else $error_borrar = 'Esta unidad tiene pacientes asociados, no se puede borrar.'; //no se puede borrar
        }

        return $this->render('unidadcarga/delete.html.twig', array(
            'unidadCarga' => $unidadCarga,
            'delete_form' => $form->createView(),
			'error_borrar' => $error_borrar,
        ));
    }

    /**
     * Creates a form to delete a unidadCarga entity.
     *
     * @param UnidadCarga $unidadCarga The unidadCarga entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(UnidadCarga $unidadCarga)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('unidadcarga_delete', array('id' => $unidadCarga->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
