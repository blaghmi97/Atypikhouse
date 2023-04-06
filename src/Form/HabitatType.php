<?php

namespace App\Form;

use App\Entity\Habitat;
use App\Entity\Photo;
use App\Form\PhotoType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HabitatType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('type', ChoiceType::class, [
            'choices' => [
                'Cabane' => 'Cabane',
                'Caravane' => 'Caravane',
                'Chalet' =>'Chalet',
                'Maison container' => 'Maison container',
                'Maison flottante' => 'Maison flottante',
                'Maison mobile' =>'Maison mobile',
                'Yourte' => 'Yourte',
            ],])
                ->add('titre')
                ->add('nombreCouchage',IntegerType::class, array('attr' => array('min' => 0,'max' => 50)))
                ->add('surface',IntegerType::class, array('attr' => array('min' => 0,'max' => 500)))
                ->add('prix',NumberType::class)
                ->add('adresse')
                ->add('codepostale',IntegerType::class)
                ->add('ville')
                ->add('pays', ChoiceType::class,  [
                    'choices' => [
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
                        
                    ],])
                ->add('description',TextareaType::class)
                ->add('photos', PhotoType::class, array(
                   
                    'data_class' => null,
                  
               ));
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Habitat::class,
        ]);
    }
}
