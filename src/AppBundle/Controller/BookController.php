<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Book;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends Controller
{
    /**
     * @Route(
     *     name="book_special",
     *     path="/books",
     *     defaults={
     *         "_api_resource_class"=Book::class,
     *         "_api_collection_operation_name"="get"
     *     }
     * )
     * @Method("GET")
     */
    public function cgetAction($data, Request $request)
    {
        // Here I can do something with $data
        return $data;
    }
}