<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UploadController extends AbstractController
{
    #[Route('/upload', name: 'app_upload')]
    public function index(): Response
    {
        return $this->render('quote/index.html.twig', [
            'uploadResult' => 'see, javascript is unnecessary',
        ]);
    }
}
