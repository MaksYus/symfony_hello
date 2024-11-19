<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class UserController extends AbstractController
{
    #[Route('/user', name: 'app_user')]
    public function createUser(EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $user->setLogin('test');
        $user->setPassword('test');

        $entityManager->persist($user);

        $entityManager->flush();

        return new Response('Saved new user test eith id'.$user->getId());
    }
}
