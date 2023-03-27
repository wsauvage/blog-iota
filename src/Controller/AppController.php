<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\PostType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(EntityManagerInterface $entityManager, Request $request): Response
    {

        $title = $request->get('title', '');
        $posts = $entityManager->getRepository(Post::class)->searchByTitle($title);

        //$post = new Post();
        $form = $this->createForm(PostType::class, null);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $data =$form->getData();
            dd($data);

            //$entityManager->persist($post);
            //$entityManager->flush();
        }

        return $this->render('app/index.html.twig', [
            'posts' => $posts,
            'form' => $form->createView()
        ]);
    }

}
