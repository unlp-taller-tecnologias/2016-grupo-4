<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormEvents; //Add this line to add FormEvents to the current scope
use Symfony\Component\Form\FormEvent; //Add this line to add FormEvent to the current scope
use FOS\UserBundle\Event\FilterUserResponseEvent;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class FichaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {  
        $builder
            ->addEventListener(
                FormEvents::POST_SET_DATA,
                array($this, 'onProSetData')
            )
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
            ->add('hipertensionCronica')
            ->add('obesidad')
            ->add('tabaquismo')
            ->add('numeroDeVecesPorSemana')
            ->add('minutos')
            ->add('numerodePorcionesDeFrutaPorDia')
            ->add('numeroDeVecesPorDia')
            //->add('fumoAnteriorMente', null, array('label' => 'Fumó anteriormente'))
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
			//->add('partoCesarea', null, array('label' => 'Parto cesárea'))
			->add('cmHie')			
			->add('cmPreclampsia')
			->add('cmOtras')
			->add('cmCuales')		
            ->add('fichasHijos', CollectionType::class, array('entry_type' => FichaHijoType::class))
			;
    }
    
    public function onProSetData(FormEvent $event)
    {
            //por defecto carga null
            $form = $event->getForm(); //Get current form object
            $data = $event->getData(); //Get current data 
           
            if (!$data || !($data->getId())){   //si es nueva
                $form->add('urocultivo', 'choice', array(
                    'choices' => array(
                        '1' => 'Si',
                        '0' => 'No',
                    ),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'placeholder' => 'Sin datos',
                    'data' => null
                )); 
            }else {         //si edita
                $form->add('urocultivo', 'choice', array(
                    'choices' => array(
                        '1' => 'Si',
                        '0' => 'No',
                    ),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'placeholder' => 'Sin datos',
                    'data' => $data->getUrocultivo()
                )); 
            };
            
            if (!$data || !($data->getId())){   //si es nueva
                $form->add('realizaActividadFisica', 'choice', array(
                    'choices' => array(
                        '1' => 'Si',
                        '0' => 'No',
                    ),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'placeholder' => 'Sin datos',
                    'data' => null
                ));
            }else {         //si edita
                $form->add('realizaActividadFisica', 'choice', array(
                    'choices' => array(
                        '1' => 'Si',
                        '0' => 'No',
                    ),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'placeholder' => 'Sin datos',
                    'data' => $data->getRealizaActividadFisica()
                ));
            }

            if (!$data || !($data->getId())){   //si es nueva
                $form->add('conoceMetasDeTratamiento', 'choice', array(
                'choices' => array(
                    '1' => 'Si',
                    '0' => 'No',
                ),
                'expanded' => true,
                'multiple' => false,
                'required' => false,
                'placeholder' => 'Sin datos',
                'data' => null
            ));
            }else {         //si edita
                $form->add('conoceMetasDeTratamiento', 'choice', array(
                'choices' => array(
                    '1' => 'Si',
                    '0' => 'No',
                ),
                'expanded' => true,
                'multiple' => false,
                'required' => false,
                'placeholder' => 'Sin datos',
                'data' => $data->getConoceMetasDeTratamiento()
            ));
            }

            if (!$data || !($data->getId())){   //si es nueva
                $form->add('cumplePlanDeAlimentacion', 'choice', array(
                'choices' => array(
                    '1' => 'Si',
                    '0' => 'No',
                ),
                'expanded' => true,
                'multiple' => false,
                'required' => false,
                'placeholder' => 'Sin datos',
                'data' => null
            ));
            }else {         //si edita
                $form->add('cumplePlanDeAlimentacion', 'choice', array(
                'choices' => array(
                    '1' => 'Si',
                    '0' => 'No',
                ),
                'expanded' => true,
                'multiple' => false,
                'required' => false,
                'placeholder' => 'Sin datos',
                'data' => $data->getCumplePlanDeAlimentacion()
            ));
            }

            if (!$data || !($data->getId())){   //si es nueva
                $form->add('sabeIdentificarOTratarHipoglucemias', 'choice', array(
                'choices' => array(
                    '1' => 'Si',
                    '0' => 'No',
                ),
                'expanded' => true,
                'multiple' => false,
                'required' => false,
                'placeholder' => 'Sin datos',
                'data' => null
            ));
            }else {         //si edita
                $form->add('sabeIdentificarOTratarHipoglucemias', 'choice', array(
                'choices' => array(
                    '1' => 'Si',
                    '0' => 'No',
                ),
                'expanded' => true,
                'multiple' => false,
                'required' => false,
                'placeholder' => 'Sin datos',
                'data' => $data->getSabeIdentificarOTratarHipoglucemias()
            ));
            }

            if (!$data || !($data->getId())){   //si es nueva
                $form->add('automonitoreoGlucemico', 'choice', array(
                'choices' => array(
                    '1' => 'Si',
                    '0' => 'No',
                ),
                'expanded' => true,
                'multiple' => false,
                'required' => false,
                'placeholder' => 'Sin datos',
                'data' => null
            ));
            }else {         //si edita
                $form->add('automonitoreoGlucemico', 'choice', array(
                'choices' => array(
                    '1' => 'Si',
                    '0' => 'No',
                ),
                'expanded' => true,
                'multiple' => false,
                'required' => false,
                'placeholder' => 'Sin datos',
                'data' => $data->getAutomonitoreoGlucemico()
            ));
            }

            if (!$data || !($data->getId())){   //si es nueva
                $form->add('fumaActualmente', 'choice', array(
                'choices' => array(
                    '1' => 'Si',
                    '0' => 'No',
                ),
                'expanded' => true,
                'multiple' => false,
                'required' => false,
                'placeholder' => 'Sin datos',
                'data' => null
            ));
            }else {         //si edita
                $form->add('fumaActualmente', 'choice', array(
                'choices' => array(
                    '1' => 'Si',
                    '0' => 'No',
                ),
                'expanded' => true,
                'multiple' => false,
                'required' => false,
                'placeholder' => 'Sin datos',
                'data' => $data->getFumaActualmente()
            ));
            }

            if (!$data || !($data->getId())){   //si es nueva
                $form->add('fumoAnteriorMente', 'choice', array(
                'choices' => array(
                    '1' => 'Si',
                    '0' => 'No',
                ),
                'expanded' => true,
                'multiple' => false,
                'required' => false,
                'placeholder' => 'Sin datos',
                'data' => null
            ));
            }else {         //si edita
                $form->add('fumoAnteriorMente', 'choice', array(
                'choices' => array(
                    '1' => 'Si',
                    '0' => 'No',
                ),
                'expanded' => true,
                'multiple' => false,
                'required' => false,
                'placeholder' => 'Sin datos',
                'data' => $data->getFumoAnteriorMente()
            ));
            }

             if (!$data || !($data->getId())){   //si es nueva
                $form->add('formaTerminacion', 'choice', array(
                'choices' => array(
                    'Parto normal' => 'Parto normal',
                    'Cesarea' => 'Cesárea',
                    'Parto Prematuro' => 'Parto Prematuro',
                ),
                'expanded' => true,
                'multiple' => false,
                'required' => false,
                'placeholder' => 'Sin datos',
                'data' => null
            ));
            }else {         //si edita
                $form->add('formaTerminacion', 'choice', array(
                'choices' => array(
                    'Parto normal' => 'Parto normal',
                    'Cesarea' => 'Cesárea',
                    'Parto Prematuro' => 'Parto Prematuro',
                ),
                'expanded' => true,
                'multiple' => false,
                'required' => false,
                'placeholder' => 'Sin datos'
            ));
            }

           

            
                
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
