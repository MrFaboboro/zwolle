<?php

namespace App\Form;

use App\Entity\ZwolleGegevens;
use phpDocumentor\Reflection\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ZwolleGegevensType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('data')
            ->add('source')
            ->add('loc')
            ->add('org')
            ->add('add1')
            ->add('add2')
            ->add('add3')
            ->add('pc')
            ->add('city')
            ->add('web')
            ->add('address')
            ->add('email')
            ->add('email1')
            ->add('emailalt')
            ->add('phone')
            ->add('phone1')
            ->add('phonealt')
            ->add('ggpos')
            ->add('location')
            ->add('ggrat')
            ->add('stars')
            ->add('revno')
            ->add('google')
            ->add('desc')
            ->add('class')
            ->add('desc1')
            ->add('cat')
            ->add('desc2')
            ->add('social')
            ->add('facebook')
            ->add('twitter')
            ->add('linkedin')
            ->add('pintrest')
            ->add('instagram')
            ->add('youtube')
            ->add('whatsapp')
            ->add('kvk')
            ->add('no')
            ->add('vestinglcl')
            ->add('no1')
            ->add('vestinghead')
            ->add('no2')
            ->add('posthead')
            ->add('postcodehead')
            ->add('cityhead')
            ->add('notes')
            ->add('gebruikersid', HiddenType::class)
            ->add('gechecked', HiddenType::class)
            ->add('Verzenden', SubmitType::class)
        ;
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ZwolleGegevens::class,
        ]);
    }
}
