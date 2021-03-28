<?php

namespace App\Form;

use App\Entity\Book;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('library', null, [
                    'label' => 'Biblioteca',
                    'required' => false,
                    'attr' => [ 'class' => 'required' ],
                    'placeholder' => 'Seleccionar',
                ])
            ->add('title', null, [
                    'label' => 'Título',
                    'required' => false,
                    'attr' => [ 'class' => 'required' ]
                ])

            ->add('save', SubmitType::class, ['label' => 'Guardar', 'attr' => [ 'style' => 'display: flow-root; margin: 0 auto;' ] ])



        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Book::class,
        ]);
    }
}
