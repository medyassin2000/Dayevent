<?php

namespace App\Form;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UtilisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('role')
            ->add('telephone')
            ->add('email')
            ->add('motDePasse')
            ->add('datenaiss')
            ->add('role', ChoiceType::class, [
                'choices' => [
                    'Artiste' => 'Artiste',
                    'Membre' => 'Membre',
                    
                ],
                'required' => true,
                'label' => 'Role'
            ])
            
        ;
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
