<?php

namespace App\Form;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class UserType extends AbstractType
{
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('username', TextType::class)
            ->add('email', EmailType::class)
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'first_options' => ['label' => 'Password'],
                'second_options' => ['label' => 'Confirm Password'],
            ])
            ->add('fullname', TextType::class)
            ->add('termsAgree', CheckboxType::class, [
                'mapped' => false,
                'constraints' => new IsTrue(),
                'label' => 'I agree to the terms of this service'
            ])
            ->add('register', SubmitType::class, [
                'label' => 'Sign In'
            ]);
    }

    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $optionsResolver): void
    {
        $optionsResolver->setDefaults([
            'data_class' => User::class
        ]);
    }
}