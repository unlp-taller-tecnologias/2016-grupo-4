<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;

/**
 * User controller.
 *
 * @Route("user")
 */

class UserController extends Controller
{
    /**
     * @Route("/",  name="user_index")
     */
    public function indexAction()
    {

       // $user = $this->tokenStorage->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        $user = $this->container->get('security.context')->getToken()->getUser();

        if ($user->hasRole('ROLE_ADMIN')) { 
            $usuarios = $em->getRepository('AppBundle:User')->findAll();
        }else{
            if ($user->hasRole('ROLE_COORDINADOR')) { 

                $unidad = $this->getDoctrine()
                ->getRepository('AppBundle:UnidadCarga')
                ->find($user->getUnidades());
 
                $usuarios = $unidad->getUsers();

            }
        }      

        return $this->render('AppBundle:User:index.html.twig', array(
            'Usuarios' => $usuarios,
        ));
    }

    /**
     * @Route("/delete",  name="user_delete")
     */
    public function deleteAction()
    {
        return $this->render('AppBundle:User:delete.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/show",  name="user_show")
     */
    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();

            $usuario = $em->createQueryBuilder()
            ->select('e')
            ->from('AppBundle:User', 'e')
            ->orderBy('e.id', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();           


        return $this->render('FOSUserBundle:Registration:register_show.html.twig', array(
            'nuevo_usuario' => $usuario
        ));
    }


     /**
     * @Route("/{id}/edit", name="user_edit")
     */
    public function editAction(Request $request, User $user)
    {
        $deleteForm = $this->createDeleteForm($user);
        $editForm = $this->createForm('AppBundle\Form\UserType', $user);
        $editForm->handleRequest($request);
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            //Valida que el nombre de usuario no exista
            $existe = $em->getRepository('AppBundle:User')->findOneByUsername($user->getUsername());
            if (empty($existe)){
                //$user->setPlainPassword($user->getPassword()); 
                $em->persist($user);
                $em->flush();
                return $this->redirectToRoute('user_index');
            }elseif ($existe->getId() == $user->getId()) {
                //$user->setPlainPassword($user->getPassword());               
                $em->persist($user);
                $em->flush();                    
                return $this->redirectToRoute('user_index');
            }
            return $this->redirectToRoute('user_edit',array('id' => $user->getId()));
        }

        return $this->render('AppBundle:User:edit.html.twig', array(
            'user' => $user,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'editar_pass'=>false,
        ));   
    }

    /**
    * @Route("/{id}/editPassword", name="user_edit_password")
    */
    public function editPasswordAction(Request $request, User $user)
    {
        $deleteForm = $this->createDeleteForm($user);
        $editForm = $this->createForm('AppBundle\Form\UserType', $user, array('accion'=>'modi'));
        $editForm->handleRequest($request);
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            //Valida que el nombre de usuario no exista
            $existe = $em->getRepository('AppBundle:User')->findOneByUsername($user->getUsername());
            if (empty($existe)){
                //$user->setPlainPassword($user->getPassword()); 
                $em->persist($user);
                $em->flush();
                return $this->redirectToRoute('user_index');
            }elseif ($existe->getId() == $user->getId()) {
                $user->setPlainPassword($user->getPassword());               
                $em->persist($user);
                $em->flush();                    
                return $this->redirectToRoute('user_index');
            }
            return $this->redirectToRoute('user_edit',array('id' => $user->getId()));
        }

        return $this->render('AppBundle:User:edit.html.twig', array(
            'user' => $user,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'editar_pass'=>true,
        ));
    }

     /**
     * Creates a form to delete a User entity.
     *
     * @param User $user 
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(User $user)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('user_delete', array('id' => $user->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }


}
