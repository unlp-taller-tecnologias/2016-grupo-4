<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EmbarazoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('numeroCiclo')->add('medico')->add('coberturaPrivado')->add('coberturaObraSocial')->add('coberturaNoPosee')->add('complicacionesMaternasHie')->add('complicacionesMaternasPreclampsia')->add('complicacionesMaternasOtras')->add('complicacionesMaternasCuales')->add('terminacionEmbarazoNormal')->add('terminacionEmbarazoPrematuro')->add('terminacionEmbarazoCesarea')->add('numeroHijos')->add('paciente')        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Embarazo'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_embarazo';
    }


}
