<?php

namespace App\Controller;

//use Symfony\Component\Security\Core\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SamyController extends AbstractController
{
    // private $security;

    // public function __construct(Security $security)
    // {
    //    $this->security = $security;
    // }

    #[Route('/samy', name: 'app_samy')]
    public function index(): Response
    {
        //$user = $this->security->getUser();
        //dd($user);

        return $this->render('samy/index.html.twig', [ //render generates the view
            'controller_name' => 'SamyController',
            'user' => 'anna'
        ]);
    }
}
