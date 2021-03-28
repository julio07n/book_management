<?php

namespace App\Form;

use App\Entity\Loan;
use App\Entity\Library;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\TextType;


use App\Form\Profile;

class LoanType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->library_selected =  $options['library_selected'];

        $builder
            ->add('name', null, [
                    'label' => 'Nombre',
                    'required' => false,
                    'attr' => [ 'class' => 'required' ]
                ])
            ->add('email', TextType::class, [
                    'label' => 'Email',
                    'required' => false,
                    'attr' => [ 'class' => 'required' ]
                ])
            ->add('language', ChoiceType::class, [
                    'choices' => [ 'Español' => 'ES', 'Catalán' => 'CA'],
                    'label' => 'Idioma', 
                    'placeholder' => 'Seleccionar',
                    'required' => false,
                    'attr' => [ 'class' => 'required' ]
                ])
            ->add('library', EntityType::class, [
                    'class' => Library::class,
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('l')
                            ->orderBy('l.name', 'ASC');
                    },
                    'mapped' => false,
                    'label' => 'Biblioteca', 
                    'required' => false,
                    'placeholder' => 'Seleccionar',
                    'constraints' => [
                        new NotBlank(),
                    ],
                    'attr' => [ 'class' => 'required' ]
                ])
            ->add('book', null, [           
                    'label' => 'Libro',
                    'placeholder' => 'Seleccionar',
                    'required' => false,
                    'attr' => [ 'class' => 'required' ],
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('l')
                                    ->where('l.library = :library_id')
                                    ->setParameter('library_id', $this->library_selected)
                                  ;
                    },
                ])
            ->add('save', SubmitType::class, ['label' => 'Enviar', 'attr' => [ 'style' => 'display: flow-root; margin: 0 auto;' ] ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Loan::class,
            'library_selected' => -1,
        ]);
    }
}
