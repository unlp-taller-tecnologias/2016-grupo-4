<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class PacienteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
		->add('nombre', 'text')
		->add('apellido')
		->add('tipoDocumento', null, array('placeholder' => 'Seleccione el tipo...',))
		->add('numeroDocumento', 'number', array('label' => 'Numero de documento'))
		->add('fechaNacimiento', 'birthday', array('widget' => 'single_text', 'label' => 'Fecha de nacimiento'))
		->add('nacionalidad')
		->add('unidadCarga', 'hidden', array ('attr' => array('disabled' => 'disabled')))
		->add('save', SubmitType::class, array('label' => 'Guardar'))
		->add('cancel', SubmitType::class, array('label' => 'Cancelar'))
/* 		->add('fichas', CollectionType::class, array(
                    'entry_type' => FichaType::class,
                    'allow_add' => true,
            )) */
		->getForm();
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
