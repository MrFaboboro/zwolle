<?php

namespace App\Controller;

use App\Entity\Stadgegevens;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;


class Controller extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
//        $stadgegevens = new Stadgegevens();
//
//        $stadgegevens->setPos('4');
//        $stadgegevens->setGebruiksdoelVerblijfsobject('test');
//        $stadgegevens->setVerblijfsobjectStatus('testen');
//        $stadgegevens->setHuisnummer('3');
//        $stadgegevens->setHuisletter('A');
//        $stadgegevens->setHuisnummertoevoeging('abcd');
//        $stadgegevens->setPostcode('7ABC');
//        $stadgegevens->setTypeAdresseerbaarObject('J');
//        $stadgegevens->setOpenbareRuimteNaam('adres');
//
//
//        $data = <<<EOF
//<Stadgegevens>
//    <name>foo</name>
//    <age>69</age>
//</Stadgegevens>
//EOF;
//        $classMetadataFactory = new ClassMetadataFactory($loader);
//        $normalizer = new ObjectNormalizer($classMetadataFactory);
//        $serializer = new Serializer([$normalizer]);

//        $normalizers = [
//            new ObjectNormalizer(),
//        ];
//
//        $encoders = [
//            new XmlEncoder(),
//        ];
//
//        $serializer = new  Serializer($normalizers, $encoders);
//
//        $serializedData = $serializer->serialize($stadgegevens, 'xml');
//
//        var_dump($serializedData); die;
//
//        return $this->Xml($stadgegevens);

//        $serializer->deserialize($data, Stadgegevens::class, 'xml', [AbstractNormalizer::class => $stadgegevens]);



        return $this->render('/index.html.twig', [
            'controller_name' => 'Controller',
        ]);
    }
}
