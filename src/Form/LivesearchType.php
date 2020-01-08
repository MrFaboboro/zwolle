<?php

namespace App\Form;


use App\Form\DataTransformer\EmailToUserTransformer;
use App\Repository\UserRepository;
use App\Repository\ZwolleGegevensRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Routing\RouterInterface;

class LivesearchType extends AbstractType
{
    private $zwolleRepository;
    private $router;
    public function __construct(ZwolleGegevensRepository $zwolleGegevensRepository, RouterInterface $router)
    {
        $this->zwolleRepository = $zwolleGegevensRepository;
        $this->router = $router;
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder  ->add('Search', TextType::class, [
            'required' => true,
            'trim' => true,
            'label' => false,
            'attr' => array('placeholder' => 'Zoek naar bedrijven, branches, postcodes, straatnamen etc...' )
        ]);
    }
    public function getParent()
    {
        return TextType::class;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'invalid_message' => 'Hmm, user not found!',
            'finder_callback' => function(ZwolleGegevensRepository $zwolleGegevensRepository, string $naam) {
                return $zwolleGegevensRepository->findOneBy(['org' => $naam]);
            },
            'attr' => [
                'class' => 'js-user-autocomplete',
                'data-autocomplete-url' => $this->router->generate('test')
            ]
        ]);
    }
}
