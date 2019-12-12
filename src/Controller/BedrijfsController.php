<?php
namespace App\Controller;

use App\Entity\ZwolleGegevens;
use App\Repository\ZwolleGegevensRepository;
use http\Client\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Routing\Annotation\Route;

class BedrijfsController extends AbstractController
{
    /**
     * @Route("/home/bedrijf/{slug}", name="bedrijf")
     */
    public function bedrijf($slug, Request $request, ZwolleGegevensRepository $zwolleGegevensRepository)
    {
        $form = $this->createFormBuilder()
            ->setAction($this->generateUrl('handleSearch'))
            ->add('Zoek', TextType::class, [
                'required' => true,
                'trim' => true,
                'label' => false,
                'attr' => array('placeholder' => 'Zoek naar bedrijven, branches, postcodes, straatnamen etc...' )
            ])
//            ->add('submit', SubmitType::class, ['label' => 'Zoek'])
            ->getForm()
        ;

        $zoek = $request->request->get('form')['Zoek'];
        if ($zoek) {
            $ZwolleGegevens = $zwolleGegevensRepository->finditemsByName($zoek);
        }


        $ZwolleGegevens = $this->getDoctrine()->getRepository(ZwolleGegevens::class)->findBy([
            'id' => $slug
        ]);

        return $this->render('home/bedrijsinformatie.html.twig',[
            'form' => $form->createView(),
            'ZwolleGegevens' => $ZwolleGegevens
        ]);
    }
}