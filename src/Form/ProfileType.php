<?php

namespace App\Form;

use App\Entity\Membre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomMembre', null, [
                'label' => 'Nom',
                'attr' => ['class' => 'form-control']
            ])
            ->add('prenomMembre', null, [
                'label' => 'Prénom',
                'attr' => ['class' => 'form-control']
            ])
            ->add('mailMembre', null, [
                'label' => 'Email',
                'attr' => ['class' => 'form-control']
            ])
            ->add('telMembre', null, [
                'label' => 'Téléphone',
                'attr' => ['class' => 'form-control']
            ])
            ->add('rueMembre', null, [
                'label' => 'Rue',
                'attr' => ['class' => 'form-control']
            ])
            ->add('cpMembre', null, [
                'label' => 'Code postal',
                'attr' => ['class' => 'form-control']
            ])
            ->add('villeMembre', null, [
                'label' => 'Ville',
                'attr' => ['class' => 'form-control']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Membre::class,
        ]);
    }
}