<?php

namespace App\Form;

use App\Entity\CategorieInstrument;
use App\Entity\Instruments;
use App\Entity\Utilisateur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
Use Vich\UploaderBundle\Form\Type\VichImageType;
Use Symfony\Component\Form\Extension\Core\Type\FileType;
class InstrumentsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('prix')
            ->add('photo', FileType::class, [
                'mapped'=>false,
            ])
            ->add('description')
            ->add('idCategorie')

            ->add('idCategorie', EntityType::class, [
                'class' => CategorieInstrument::class,
                'choice_label' => function (CategorieInstrument $categorieInstrument) {
                    return $categorieInstrument->getNomCategorie();
                },
            ])



        ;
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Instruments::class,
        ]);
    }
}
