<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class XMLController extends AbstractController
{
    /**
     * @Route("/xml", name="xml")
     */
    public function index()
    {

        // connect to database
        $db = xmlDb::connect('zwolle');

// you can insert data in two different ways

// by passing an array with column names and their values
        $db->in('tabelnum')->insert([
            'name'  => 'John'
        ]);


// or by using method bind(column_name, value)
        $db->in('example_table')
            ->bind('name', 'John')
            ->bind('lastname', 'Doe')
            ->insert();

        return $this->render('xml.html.twig', [
            'controller_name' => 'XMLController',
        ]);
    }
}
