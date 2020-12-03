<?php

namespace ClasseBundle\Form;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder ->add('dateDebut',DateType::class, array(
               'widget' => 'single_text',
               'data' => new \DateTime(),
                'attr'   => ['min' => ( new \DateTime() )->format('Y-m-d')]

        ))
                 ->add('dateFin',DateType::class, array(
                    'widget' => 'single_text',
                    'data' => new \DateTime(),
                    'attr'   => ['min' => ( new \DateTime() )->format('Y-m-d')]
     
             ));
    }/**      
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ClasseBundle\Entity\Reservation'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'classebundle_reservation';
    }


}
