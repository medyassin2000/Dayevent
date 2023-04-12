<?php

namespace App\Form;

use App\Entity\Music;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class MusicType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options, ): void
    {
        $form = $builder
            ->add('nomMorceaux')
            ->add('nomArtiste')
            ->add('fichier', FileType::class, [
                'mapped'=>false,
            ])
            ->getForm();

  

        if ($form->isSubmitted() && $form->isValid()) {
            // le formulaire est valide, effectuez vos actions ici
        } elseif ($form->isSubmitted()) {
            // Si le formulaire est soumis mais invalide, ajoutez une erreur de validation pour un champ spécifique.
            // Ici, nous ajoutons une erreur de validation pour le champ nomArtiste s'il contient des caractères non alphabétiques.
            $nomArtiste = $form->get('nomArtiste')->getData();
            if (!ctype_alpha($nomArtiste)) {
                $form->get('nomArtiste')->addError(new FormError('Le nom de l\'artiste ne peut contenir que des caractères alphabétiques.'));
            }
            $nomMorceaux = $form->get('nomMorceaux')->getData();
            if (!ctype_alpha($nomMorceaux)) {
                $form->get('nomMorceaux')->addError(new FormError('Le nom de le morceaux ne peut contenir que des caractères alphabétiques.'));
            }
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Music::class,
        ]);
    }
}
