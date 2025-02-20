<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SayHelloController extends AbstractController
{
    #[Route('/say_hello/{name}/{firstname}', name: 'say_hello')]
public function index(string $name , string $firstname): Response
{
    return $this->render('say_hello/index.html.twig', [
        'name' => $name,
        'firstname'=>$firstname,
    ]);
}
}