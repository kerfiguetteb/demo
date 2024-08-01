<?php

namespace App\Controller;

use App\Repository\AuthorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AuthorController extends AbstractController
{
    #[Route('/author', name: 'app_author' , methods:['GET'])]
    public function index(AuthorRepository $authorRepo): Response
    {
        return $this->render('author/index.html.twig', [
                'authors' => $authorRepo->findAll()
           
        ]);
    }

    #[Route('/author/{id}', name: 'app_author_show' , methods:['GET'])]
    public function show(int $id ,AuthorRepository $authorRepo): Response
    {

        $author = $authorRepo->find($id);
        return $this->render('author/show.html.twig', [
                'author' => $author
           
        ]);
    }
}
