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
                $repository = $this->getDoctrine()->getRepository('AppBundle:User');

                $query = $repository->createQueryBuilder('p')
                ->where('p.roles = :nombre')
                ->setParameter('nombre', 'a:1:{i:0;s:16:"ROLE_COORDINADOR";}')
                ->getQuery();
 
                $usuarios = $query->getResult();

                //$usuarios = $em->getRepository('AppBundle:User')->findAll();
            }
        }

        //var_dump($usuarios[1]);      

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

}
