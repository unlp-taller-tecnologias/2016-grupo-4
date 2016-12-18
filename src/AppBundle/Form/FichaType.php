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
            ->add('tas')
            ->add('fechaRegistro', 'birthday')
            //->add('fechaRegistro', DateType::class, array('required' => true,'widget' => 'single_text','attr' => array('class' => 'form-control')))
            ->add('tad')
            ->add('talla')
            ->add('peso')
            ->add('glucemia')
            ->add('fructosamina')
            ->add('hba1c')
            ->add('colesterolTotal')
            ->add('colesterolHdl')
            ->add('colesterolLdl')
            ->add('trigliceridos')
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
            ->add('fumoAnteriorMente')
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
            ->add('aas')
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
			->add('partoCesarea')
			->add('cmHie')			
			->add('cmPreclampsia')
			->add('cmOtras')
			->add('cmCuales')
		
			;
     /*    $builder
            ->add('fichasHijos', CollectionType::class, array(
                  'entry_type' => FichaHijoType::class,
                    //'allow_add' => true,
            )); */
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
