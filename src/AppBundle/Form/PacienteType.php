<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class PacienteType extends AbstractType
{
    
    private $tokenStorage;

    public function __construct(TokenStorageInterface $tokenStorage)
    {
        $this->tokenStorage = $tokenStorage;
    }

    public function getUnid()
    {
         $user = $this->tokenStorage->getToken()->getUser();
         return $user->getUnidades(); 
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
		->add('nombre')
		->add('apellido')
		->add('tipoDocumento', null, array('placeholder' => 'Seleccione el tipo...',))
		->add('numeroDocumento', 'number', array('label' => 'Numero de documento'))
		->add('fechaNacimiento', 'birthday', array('widget' => 'single_text', 'label' => 'Fecha de nacimiento'))
		->add('nacionalidad')
		->add('unidadCarga', 'hidden', array ('attr' => array('disabled' => 'disabled'), 'empty_data' => $this->getUnid()))
		->add('save', SubmitType::class, array('label' => 'Guardar'))
		->getForm();
/* 		->add('fichas', CollectionType::class, array(
                    'entry_type' => FichaType::class,
                    'allow_add' => true,
            )) */
		
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Paciente'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_paciente';
    }


}
