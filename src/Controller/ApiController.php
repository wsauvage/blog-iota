<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\PostType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api_back', name: 'api_')]
class ApiController extends AbstractController
{
//    #[Route('/posts', name: 'posts')]
//    public function posts(EntityManagerInterface $entityManager, Request $request): Response
//    {
//        $posts = $entityManager->getRepository(Post::class)->findAll();
//
//        $data = [];
//
//        foreach ($posts as $post) {
//            $data[] = [
//                'id' => $post->getId(),
//                'title' => $post->getTitle(),
//                'content' => $post->getContent(),
//                'author' => [
//                    'fi',
//                ],
//            ];
//        }
//
//        return $this->json($data);
//    }

//    #[Route('/posts/{id}', name: 'posts', methods: ['GET'])]
//    public function show(EntityManagerInterface $entityManager, Request $request, Post $post): Response
//    {
//        $data = [
//            'title' => $post->getTitle(),
//            'content' => $post->getContent(),
//            'author' => [
//                'id' => $post->getAuthor() ? $post->getAuthor()->getId() : null,
//                'email' => $post->getAuthor() ? $post->getAuthor()->getEmail() : null,
//            ]
//        ];
//
//        return $this->json($data);
//    }

//    #[Route('/posts/{id}', name: 'posts', methods: ['PUT'])]
//    public function edit(EntityManagerInterface $entityManager, Request $request, Post $post): Response
//    {
//        $data = $request->get('title', null);
//
//        $contentParams = $request->getContent();
//
//        dd(json_decode($contentParams, true));
//
//        return $this->json(['data ' => $data ]);
//    }


}
