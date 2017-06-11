<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class FichaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tas', null, array('label' => 'TAS'))
            ->add('fechaRegistro', 'birthday', array('widget' => 'single_text', 'label' => 'Fecha de nacimiento'))
            ->add('tad', null, array('label' => 'TAD'))
            ->add('talla')
            ->add('peso')
            ->add('glucemia')
            ->add('fructosamina')
            ->add('hba1c')
            ->add('colesterolTotal')
            ->add('colesterolHdl', null, array('label' => 'Colesterol HDL'))
            ->add('colesterolLdl', null, array('label' => 'Colesterol LDL'))
            ->add('trigliceridos', null, array('label' => 'Triglicéridos'))
            ->add('creatinina')
            ->add('proteinuria')
            ->add('urocultivo')
            ->add('hipertensionCronica')
            ->add('obesidad')
            ->add('tabaquismo')
            ->add('realizaActividadFisica')
            ->add('numeroDeVecesPorSemana')
            ->add('minutos')
            ->add('conoceMetasDeTratamiento')
            ->add('cumplePlanDeAlimentacion')
            ->add('numerodePorcionesDeFrutaPorDia')
            ->add('sabeIdentificarOTratarHipoglucemias')
            ->add('automonitoreoGlucemico')
            ->add('numeroDeVecesPorDia')
            ->add('fumaActualmente')
            ->add('fumoAnteriorMente', null, array('label' => 'Fumó anteriormente'))
            ->add('cigarrillosAlDia')
            ->add('causaHospitalizacion1')
            ->add('causaHospitalizacion2')
            ->add('causaHospitalizacion3')
            ->add('diasHospitalizacion1')
            ->add('diasHospitalizacion2')
            ->add('diasHospitalizacion3')
            ->add('hipertensionAtenolol')
            ->add('hipertensionBloqueantesCalcicos')
            ->add('hipertensionFurosemida')
            ->add('hipertensionOtro')
            ->add('hipertensionCual')
            ->add('aas', null, array('label' => 'AAS'))
            ->add('insulinaNph')
            ->add('insulinaDetemir')
            ->add('insulinaCorriente')
            ->add('insulinaAspartica')
            ->add('numeroInyeccionesDia')
			->add('medico')
			->add('coberturaPrivado')
			->add('coberturaObraSocial')
			->add('coberturaNinguna')
			->add('numeroHijos')
			->add('partoNormal')
			->add('partoPrematuro')
			->add('partoCesarea', null, array('label' => 'Parto cesárea'))
			->add('cmHie')			
			->add('cmPreclampsia')
			->add('cmOtras')
			->add('cmCuales')		
            ->add('fichasHijos', CollectionType::class, array('entry_type' => FichaHijoType::class))
			;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Ficha'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_ficha';
    }


}
