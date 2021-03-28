<?php

namespace App\Form;

use App\Entity\Library;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class LibraryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
              ->add('name', null, [
                    'label' => 'Nombre',
                    'required' => false,
                    'attr' => [ 'class' => 'required' ]
                ])
              ->add('save', SubmitType::class, ['label' => 'Guardar', 'attr' => [ 'style' => 'display: flow-root; margin: 0 auto;' ] ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Library::class,
        ]);
    }
}
