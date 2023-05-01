<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class UtilisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('email')
             ->add('roles', ChoiceType::class, [
                'choices' => [
                    'Artiste' => 'ROLE_Artiste',
                    'Membre' => 'ROLE_Membre',
                    'ADMIN' => 'ROLE_ADMIN',
                ],
                'multiple' => true,
            ])
            ->add('telephone')
            ->add('password')
            ->add('datenaiss')
           
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
