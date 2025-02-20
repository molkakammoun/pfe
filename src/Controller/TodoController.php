<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TodoController extends AbstractController
{
    #[Route('/todo', name: 'todo')]
    public function index(Request $request): Response
 
    {
       
        $session=$request->getSession();

        if(!$session->has(name:'todo')){
            $todo = [
                'achat' => 'acheté clé usb',
                'cour' => 'math',
                'correction' => '***'
            ];
             
        }
        $session->set('todo',$todo);
        return $this->render('todo/index.html.twig', [
            'controller_name' => 'TodoController',
        ]);
    }
}
