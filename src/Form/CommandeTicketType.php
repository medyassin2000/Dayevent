<?php

namespace App\Form;

use App\Entity\Utilisateur;
use App\Entity\CommandeTicket;
use Symfony\Component\Form\AbstractType;
use Karser\Recaptcha3Bundle\Form\Recaptcha3Type;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Karser\Recaptcha3Bundle\Validator\Constraints\Recaptcha3;

class CommandeTicketType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomEvenement')
            ->add('prix')
            ->add('idTicket')
            ->add('idUtilisateur', EntityType::class, [
                'class' => Utilisateur::class,
                'choice_label' => function (Utilisateur $utilisateur) {
                    return $utilisateur->getNom();
                },
            ])
            ->add('captcha', Recaptcha3Type::class, [
                'constraints' => new Recaptcha3(),
                'action_name' => 'homepage',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CommandeTicket::class,
        ]);
    }
}
