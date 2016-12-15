<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        if (false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            $ruta = $this->generateUrl('fos_user_security_login');
            return $this->redirect($ruta);
        }else{
            $ruta = $this->generateUrl('paciente_index');
            return $this->redirect($ruta);
            
        }

        /*return $this->render('FOSUserBundle::Security/login.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        )); 
*/
        // replace this example code with whatever you need
        //  return $this->render('default/index.html.twig', array(
        //    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        //));
    }
}