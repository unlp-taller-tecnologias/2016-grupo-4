<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
//use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends  AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {   
        //Modificar perfil
        if('crear_usuario' === $options['accion']){
        $builder
            ->add('username', null, array('label' => 'Nombre de Usuario:','attr' => array('class' => 'form-control','minlength' => '3', 'maxlength' => '25')));
        }else{$builder
            ->add('username', null, array('label' => 'Nombre de Usuario:','attr' => array('readonly'=>'readonly','class' => 'form-control','minlength' => '3', 'maxlength' => '25')));
        }
        if('modi' != $options['accion']){
        $builder
            ->add('nombre',null, array('attr' => array('class' => 'form-control', 'minlength' => '3', 'maxlength' => '30')))
            ->add('apellido',null, array('attr' => array('class' => 'form-control','minlength' => '3', 'maxlength' => '30')))
            ->add('email','email', array('attr' => array('class' => 'form-control','minlength' => '3', 'maxlength' => '50')));
        }

        //Modificar contraseña
        if('crear_usuario' === $options['accion'] || 'modi' === $options['accion']){
            $builder->add('password', 'repeated', array(
                'type' => 'password',
                'invalid_message' => 'Las contraseñas deben coincidir.',
                'options' => array('attr' => array('class' => 'password-field')),
                'required' => true,
                'first_options'  => array('label' => 'Contraseña', 'attr' => array('class' => 'form-control', 'minlength' => '6')),
                'second_options' => array('label' => 'Repetir la contraseña', 'attr' => array('class' => 'form-control', 'minlength' => '6')),
                ));            
        }    
            
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'accion' => 'modificar_perfil',
            'data_class' => 'AppBundle\Entity\User'
        ));
    }
}
