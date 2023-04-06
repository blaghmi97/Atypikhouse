<?php

namespace App\Form;
use App\Entity\Photo;
use App\Form\PhotoType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class recherchehabitatType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('type', ChoiceType::class, [
            'choices' => [
                'Tous les types' => "all",
                'Cabane' => 'Cabane',
                'Caravane' => 'Caravane',
                'Chalet' =>'Chalet',
                'Maison container' => 'Maison container',
                'Maison flottante' => 'Maison flottante',
                'Maison mobile' =>'Maison mobile',
                'Yourte' => 'Yourte',
            ],])
                ->add('pays', ChoiceType::class,  [
                    'choices' => [
                        '' => null,
                        'Allemagne' => 'Allemagne',
                        'Autriche' => 'Autriche',
                        'Belgique' => 'Belgique',
                        'Bulgarie' => 'Bulgarie',
                        'Chypre' => 'Chypre',
                        'Croatie' => 'Croatie',
                        'Danemark' => 'Danemark',
                        'Espagne' => 'Espagne',
                        'Estonie' => 'Estonie',
                        'Finlande' => 'Finlande',
                        'France' => 'France',
                        'Grèce' => 'Grèce',
                        'Hongrie' => 'Hongrie',
                        'Irlande' => 'Irlande',
                        'Italie' => 'Italie',
                        'Lettonie' => 'Lettonie',
                        'Lituanie' => 'Lituanie',
                        'Luxembourg' => 'Luxembourg',
                        'Malte' => 'Malte',
                        'Pays-Bas' => 'Pays-Bas',
                        'Pologne' => 'Pologne',
                        'Portugal' => 'Portugal',
                        'République tchèque' => 'République tchèque',
                        'Roumanie' => 'Roumanie',
                        'Slovaquie' => 'Slovaquie',   
                        'Slovénie' => 'Slovénie',
                        'Suède' => 'Suède',                        
                        
                    ],]);}
                      
  



}
