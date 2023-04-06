<?php

namespace App\Form;

use App\Entity\Reservation;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
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
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
