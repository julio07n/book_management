<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->roles =  $options['roles'];
        $this->role_selected =  $options['role_selected'];
 
        $builder
            ->add('name', null, [
                    'label' => 'Nombre',
                    'required' => false,
                    'attr' => [ 'class' => 'required' ]
                ])
            ->add('username', null, [
                    'label' => 'Usuario',
                    'required' => false,
                    'attr' => [ 'class' => 'required' ]
                ]) 
           ->add('password', PasswordType::class, [
                    'label' => 'Contraseña',
                    'required' => false,
                    'attr' => [ 'class' => 'required' ],
                    'always_empty' => true
                ])

            ->add('roles', ChoiceType::class, [
                'label' => 'Rol',
                'required' => false,
                'attr' => [ 'class' => 'required' ],
                'choices' => $this->roles,
                'placeholder' => 'Seleccionar',
                'mapped' => false,
                'data' => $this->role_selected
            ])
            ->add('save', SubmitType::class, ['label' => 'Guardar', 'attr' => [ 'style' => 'display: flow-root; margin: 0 auto;' ] ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'role_selected' => -1,
            'roles' => null,
        ]);
    }
}
