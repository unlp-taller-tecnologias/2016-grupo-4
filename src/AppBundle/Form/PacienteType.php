<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PacienteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombre', 'text')
		->add('apellido')
		->add('tipoDocumento')
		->add('numeroDocumento', 'number', array('label' => 'Numero de documento'))
		->add('fechaNacimiento', 'birthday', array('widget' => 'single_text', 'label' => 'Fecha de nacimiento'))
		->add('nacionalidad')
		->add('unidadCarga')
		->add('guardar', 'submit');
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
