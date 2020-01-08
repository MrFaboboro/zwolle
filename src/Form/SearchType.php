<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Zoek', TextType::class, [
                'required' => true,
                'trim' => true,
                'label' => false,
                'attr' => array('placeholder' => 'Zoek naar bedrijven, branches, postcodes, straatnamen etc...' ),

            ])
            ->add('submit', SubmitType::class, ['label' => 'Zoek'])
        ;


    }

    // ...
}
