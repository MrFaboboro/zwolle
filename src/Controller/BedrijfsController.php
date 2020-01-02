<?php
namespace App\Controller;

use App\Entity\Zwollebackuptest;
use App\Repository\ZwolleGegevensRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class BedrijfsController extends AbstractController
{
    /**
     * @Route("/home/bedrijf/{slug}", name="bedrijf")
     */
    public function bedrijf($slug, Request $request, ZwolleGegevensRepository $zwolleGegevensRepository)
    {
        $form = $this->createFormBuilder()
            ->setAction($this->generateUrl('handleSearch'))
            ->add('submit', SubmitType::class, ['label' => 'Zoek'])
            ->add('Zoek', TextType::class, [
                'required' => true,
                'trim' => true,
                'label' => false,
                'attr' => array('placeholder' => 'Zoek naar bedrijven, branches, postcodes, straatnamen etc...'),
                'row_attr' => ['class' => 'form-group'],
            ])
            ->getForm()
        ;

        $zoek = $request->request->get('form')['Zoek'];
        if ($zoek) {
            $ZwolleGegevens = $zwolleGegevensRepository->finditemsByName($zoek);
        }


        $ZwolleGegevens = $this->getDoctrine()->getRepository(Zwollebackuptest::class)->findBy([
            'id' => $slug
        ]);

        return $this->render('home/bedrijsinformatie.html.twig',[
            'form' => $form->createView(),
            'ZwolleGegevens' => $ZwolleGegevens

        ]);
    }
}