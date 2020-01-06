<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
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
            ->add('sport', ZwolleGegevensType::class, [
                'class'       => 'App\Entity\Sport',
                'placeholder' => '',
            ])
        ;

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) {
                $form = $event->getForm();

                // this would be your entity, i.e. SportMeetup
                $data = $event->getData();

                $sport = $data->getSport();
                $positions = null === $sport ? [] : $sport->getAvailablePositions();

                $form->add('position', EntityType::class, [
                    'class' => 'App\Entity\Position',
                    'placeholder' => '',
                    'choices' => $positions,
                ]);
            }
        );
    }

    // ...
}
