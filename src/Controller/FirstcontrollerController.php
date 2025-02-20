<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

final class FirstcontrollerController extends AbstractController
{
    #[Route('/api/home', name: 'api_home')]
    public function home(): JsonResponse
    {
        return $this->json([
            'message' => 'Bienvenue sur notre API Symfony !',
        ]);
    }
}



