<?php

namespace App\Controller;

use App\Repository\BookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BookController extends AbstractController
{
    #[Route('/book', name: 'app_book')]
    public function index(BookRepository $bookRepo): Response
    {
        return $this->render('book/index.html.twig', [
                'books' => $bookRepo->findAll()
           
        ]);
    }

    #[Route('/book/{id}', name: 'app_book_show')]
    public function show(int $id ,BookRepository $bookRepo): Response
    {

        $book = $bookRepo->find($id);
        return $this->render('book/show.html.twig', [
                'book' => $book
           
        ]);
    }

    
}
