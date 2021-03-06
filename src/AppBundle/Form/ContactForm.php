<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class, [
            'label' => 'Nom'
        ])
        ->add('email', TextType::class, [
            'label' => 'Email'
        ])
        ->add('phone', TextType::class,  [
            'label' => 'Téléphone'
        ])
        ->add('subject', TextType::class,  [
            'label' => 'Sujet'
        ])
        ->add('message', TextareaType::class,  [
            'label' => 'Message'
        ])
        ->add('submit', SubmitType::class,  [
            'label' => 'Envoyer',
            'attr' =>[
                'class' => 'btn'
            ]
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
    }

    public function getBlockPrefix()
    {
        return 'app_bundle_contact_form';
    }
}
