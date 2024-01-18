<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class HelloController extends AbstractController {

    function hello(Request $request) {

        $params = $request->query->all();       // query pour $_GET, request pour $_POST
        $string = 'Listing des paramètres : <br>';
        foreach ($params as $key => $value) {
            $string = $string . ' - ' . $key . ' : ' . $value . '<br>';
        }

        $title = "utilisateurs";
        $users = ["Joe", "Jack", "Averel", "Wiilliam"];
        return $this->render('hello.html.twig', [
            'title' => $title, 'array' => $users, 'string' => $string
        ]);
    }

}
