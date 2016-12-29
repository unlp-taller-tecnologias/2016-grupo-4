<?php
// src/AppBundle/Form/RegistrationType.php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use Doctrine\ORM\EntityRepository;
//use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RegistrationType extends AbstractType
{
    private $tokenStorage;

    public function __construct(TokenStorageInterface $tokenStorage)
    {
        $this->tokenStorage = $tokenStorage;
    }

    public function getUnid()
    {
         $user = $this->tokenStorage->getToken()->getUser();
         return $user->getUnidades()->getId(); 
    }


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombre', null, array('attr' => array('class' => 'form-control','minlength' => '5', 'maxlength' => '50')));
        $builder->add('apellido', null, array('attr' => array('class' => 'form-control','minlength' => '5', 'maxlength' => '50')));
        $user = $this->tokenStorage->getToken()->getUser();
        if ($user->hasRole('ROLE_ADMIN')) {
            $builder->add('unidades', 'entity', array(
                    'class' => 'AppBundle\Entity\UnidadCarga', 'multiple'  => true, 'required' => true,                     
                ));
        } else{
            if ($user->hasRole('ROLE_COORDINADOR')) {
                $builder->add('unidades', 'entity', array(
                    'class' => 'AppBundle\Entity\UnidadCarga', 'multiple'  => true, 'required' => true,
                    'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                    ->where('u.id = :idUnid')
                    ->setParameter( 'idUnid', $this->getUnid() )  
                    ;
                   
                     },

                     
                ));
            }  
        }   

        if ($user->hasRole('ROLE_ADMIN')) {
            $builder->add('rol', 'choice', array('label' => 'Rol', 'empty_value' => 'Seleccione un Rol', 
                   'choices'   => array('ROLE_DATAENTRY' => 'DATAENTRY', 'ROLE_COORDINADOR' => 'COORDINADOR'), 'required'  => true, 
            ));     
        } else{
            if ($user->hasRole('ROLE_COORDINADOR')) {
                $builder->add('rol', 'choice', array('label' => 'Rol', 
                      'choices'   => array('ROLE_DATAENTRY' => 'DATAENTRY'), 'required'  => true, 
                ));     
            }  
        }
            
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}