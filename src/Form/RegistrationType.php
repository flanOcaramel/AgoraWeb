<?php

namespace App\Form;

use App\Entity\Membre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('username', TextType::class, [
                'label' => "Nom d'utilisateur",
                'attr' => ['class' => 'form-control', 'placeholder' => "Nom d'utilisateur"],
                'constraints' => [
                    new NotBlank(['message' => "Veuillez saisir un nom d'utilisateur."]),
                    new Length([
                        'min' => 3,
                        'max' => 180,
                        'minMessage' => "Le nom d'utilisateur doit contenir au moins {{ limit }} caractères.",
                    ]),
                ],
            ])
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'mapped' => false,
                'first_options' => [
                    'label' => 'Mot de passe',
                    'attr' => ['class' => 'form-control', 'placeholder' => 'Mot de passe'],
                    'constraints' => [
                        new NotBlank(['message' => 'Veuillez saisir un mot de passe.']),
                        new Length([
                            'min' => 6,
                            'max' => 4096,
                            'minMessage' => 'Le mot de passe doit contenir au moins {{ limit }} caractères.',
                        ]),
                    ],
                ],
                'second_options' => [
                    'label' => 'Confirmer le mot de passe',
                    'attr' => ['class' => 'form-control', 'placeholder' => 'Confirmer le mot de passe'],
                ],
                'invalid_message' => 'Les mots de passe ne correspondent pas.',
            ])
            ->add('nomMembre', TextType::class, [
                'label' => 'Nom',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Nom'],
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez saisir votre nom.']),
                ],
            ])
            ->add('prenomMembre', TextType::class, [
                'label' => 'Prénom',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Prénom'],
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez saisir votre prénom.']),
                ],
            ])
            ->add('telMembre', TelType::class, [
                'label' => 'Téléphone',
                'required' => false,
                'attr' => ['class' => 'form-control', 'placeholder' => 'Téléphone'],
            ])
            ->add('mailMembre', EmailType::class, [
                'label' => 'Email',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Email'],
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez saisir votre adresse email.']),
                ],
            ])
            ->add('rueMembre', TextType::class, [
                'label' => 'Rue',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Rue'],
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez saisir votre rue.']),
                ],
            ])
            ->add('cpMembre', TextType::class, [
                'label' => 'Code postal',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Code postal'],
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez saisir votre code postal.']),
                    new Length([
                        'min' => 5,
                        'max' => 5,
                        'exactMessage' => 'Le code postal doit contenir exactement {{ limit }} caractères.',
                    ]),
                ],
            ])
            ->add('villeMembre', TextType::class, [
                'label' => 'Ville',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Ville'],
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez saisir votre ville.']),
                ],
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
