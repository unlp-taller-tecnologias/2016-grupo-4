<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FichaHijoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('complicacionesRciu')->add('complicacionesMacrosomia')->add('complicacionesSindDistressPrematuro')->add('complicacionesHipoglucemia')->add('complicacionesMalformacionesFetales')->add('complicacionesMortalidadPrenatal')->add('complicacionesOtras')->add('complicacionesCuales')->add('peso')->add('capurro')->add('createdAt')->add('updatedAt')->add('ficha')        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\FichaHijo'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_fichahijo';
    }


}
