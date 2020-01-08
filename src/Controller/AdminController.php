<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\ZwolleGegevens;
use App\Form\AcceptType;
use Doctrine\DBAL\Types\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Repository\ZwolleGegevensRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;


/**
 * Class AdminController
 * @IsGranted("ROLE_ADMIN")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     * @IsGranted("ROLE_ADMIN")
     */
    public function index(Request $request)
    {
        # alle database gegevens
        $em = $this->getDoctrine()->getManager();
        $repoArticles = $em->getRepository(ZwolleGegevens::class);
        $em = $this->getDoctrine()->getManager();
        $repoArticles = $em->getRepository(User::class);
        $users = $repoArticles->createQueryBuilder('a')->select('count(a.id)')->getQuery()->getSingleScalarResult();

        $aanmeld = $em->getRepository(ZwolleGegevens::class);
        $gechecked = $aanmeld->createQueryBuilder('a')->select('count(a.gechecked)')->getQuery()->getSingleScalarResult();
        $zwollegegevens = $repoArticles->createQueryBuilder('a')->select('count(a.id)')->getQuery()->getSingleScalarResult();



        $table = $this->getDoctrine()->getRepository(ZwolleGegevens::class)->findAll();


        return $this->render('admin/dashboard.html.twig', [
            'zwollegegevens' => $zwollegegevens,
            'table' => $table,
            'gechecked' => $gechecked,
            'users' => $users
    ]);



    }

    /**
     * @Route("/admin/aanmeldingen", name="aanmeldingen")
     */
    public function aanmeldingen(Request $request)
    {

//    $form = new AcceptType();
        $zwollegegevens = $this->getDoctrine()->getRepository(ZwolleGegevens::class)->findAll();


        return $this->render('admin/aanmeldingen.html.twig', [
            'zwollegegevens' => $zwollegegevens
        ]);

    }

    /**
     *  @Route("/admin/aanmeldingen/{slug}", name="show_aanmelding")
     */
    public function show_aanmeld($slug)
    {
        $aanmeld = $this->getDoctrine()->getRepository(ZwolleGegevens::class)->findBy([
            'id' => $slug
        ]);

        return $this->render('admin/aanmeldingshow.html.twig', [
            'aanmeld' => $aanmeld
        ]);
    }

    /**
     *  @Route("/admin/aanmeldingen/update/{id}", name="aanmelding_update")
     */
    public function aanmeld_update($id)
    {
        $em = $this->getDoctrine()->getManager();
        $aanmeld = $em->getRepository(ZwolleGegevens::class)->find($id);

        if (!$aanmeld) {
            throw $this->createNotFoundException(
                'Cannot update' .$id
            );
        }

        $aanmeld->setgechecked('1');
        $em->flush();

        return $this->redirectToRoute('aanmeldingen');
    }


    /**
     *  @Route("/admin/aanmeldingen/delete/{id}", name="aanmelding_delete")
     */
    public function aanmeld_delete($id)
    {
        $em = $this->getDoctrine()->getManager();
        $aanmeld = $em->getRepository(ZwolleGegevens::class)->find($id);

        if (!$aanmeld) {
            throw $this->createNotFoundException(
                'Cannot update' .$id
            );
        }
        $em->remove($aanmeld);
        $em->flush();

        return $this->redirectToRoute('aanmeldingen');
    }

//    /**
//     * Creates a new ActionItem entity.
//     *
//     * @Route("/search", name="ajax_search")
//     * @Method("GET")
//     */
//    public function searchAction(Request $request)
//    {
//        $em = $this->getDoctrine()->getManager();
//        $requestString = $request->get('q');
//        $entities =  $em->getRepository(ZwolleGegevens::class)->findAll();
//        if(!$entities) {
//            $result['entities']['error'] = "keine Einträge gefunden";
//        } else {
//            $result['entities'] = $this->getRealEntities($entities);
//        }
//        return new Response(json_encode($result));
//    }
//    public function getRealEntities($entities){
//        foreach ($entities as $entity){
//            $realEntities[$entity->getId()] = $entity->getFoo();
//        }
//        return $realEntities;
//    }
}
