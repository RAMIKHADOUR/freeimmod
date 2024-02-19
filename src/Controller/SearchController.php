<?php

namespace App\Controller;

use App\Repository\PropertysRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SearchController extends AbstractController
{
    #[Route('/search', name: 'app_search')]
    public function index(Request $request, PropertysRepository $propertysRepository): Response
    {
        $search = $request->query->get('search');
        $propertys = $propertysRepository->findBySearch($search);
     
        return $this->render('search/search.html.twig', [
            'controller_name' => 'SearchController',
            'propertys' => $propertys
        ]);
    }
}
