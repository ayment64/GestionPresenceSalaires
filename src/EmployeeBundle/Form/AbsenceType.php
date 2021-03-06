<?php

namespace EmployeeBundle\Form;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
class AbsenceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('date',null,array( 'label' => false ,'attr'=>array('style'=>'display:none;')) )
            ->add('status',null,array( 'label' => false ,'data'=>'Absent','attr'=>array('style'=>'display:none;')))
            ->add('montantDay',null,array( 'label' => false ,'data'=>0,'attr'=>array('style'=>'display:none;')))
            ->add('raison', TextareaType::class)
            ->add('lieu',null,array( 'label' => false ,'data'=>' ','attr'=>array('style'=>'display:none;')))
            ->add('idWeek',null,array( 'label' => false ,'attr'=>array('style'=>'display:none;')))
            ->add('idEmployee',null,array( 'label' => false ,'attr'=>array('style'=>'display:none;')) );
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EmployeeBundle\Entity\Presence'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'employeebundle_presence';
    }


}
