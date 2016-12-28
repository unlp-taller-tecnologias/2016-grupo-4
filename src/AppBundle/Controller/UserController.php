<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

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


}
