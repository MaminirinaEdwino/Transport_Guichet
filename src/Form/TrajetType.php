<?php

namespace App\Form;

use App\Entity\Chauffeur;
use App\Entity\Trajet;
use App\Entity\Voiture;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TrajetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('depart')
            ->add('arrive')
            ->add('date')
            ->add('heure')
            ->add('voiture', EntityType::class, [
                'class' => Voiture::class,
'choice_label' => 'id',
            ])
            ->add('chauffeur', EntityType::class, [
                'class' => Chauffeur::class,
'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Trajet::class,
        ]);
    }
}
