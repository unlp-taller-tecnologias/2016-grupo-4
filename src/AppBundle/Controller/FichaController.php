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
			
			
			$em = $this->getDoctrine()->getManager();
			foreach($ficha->getFichasHijos() as $hijo)
			{
				if( $hijo->getAgregar() == 1)
				{
					$hijo->setUsuarioModificacion($nombreUsuario);
					$hijo->setUsuarioCreacion($nombreUsuario);					
					$em->persist($hijo);
					$em->flush($hijo);	
				}
			}	

			

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
		$nombreUsuario = $user->getNombre();

				
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
	
}
