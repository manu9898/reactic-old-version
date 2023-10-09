<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MethodologieController extends AbstractController
{
    #[Route('/methodologie', name: 'app_methodologie')]
    public function index(): Response
    {
        return $this->render('methodologie/index.html.twig', [
            'title' => '<span class="text-teal-900">Notre méthodologie</span> Votre succès',
            'subtitle' => 'Comment nous créons pour vous une application web à la hauteur de vos exigences',
            'titleFirstSection' => '1 DECOUVERTE ET RECUEIL DES DONNEES',
            'smartListFistSection' => '<ul class="list-disc">
                                    <li class="
                                    font-poppins font-poppins text-lg text-white leading-10 
                                    sm:text-xl sm:top-0 sm:translate-y-10
                                    md:text-xl
                                    lg:text-2xl
                                    xl:text-3xl
                                    2xl:text-3xl
                                    ">Micro-audits</li>
                                    
                                    <li class="
                                    font-poppins font-poppins text-lg text-white leading-10
                                    sm:text-xl sm:top-0 sm:translate-y-10
                                    md:text-xl
                                    lg:text-2xl
                                    xl:text-3xl
                                    2xl:text-3xl
                                    ">Interview « guérilla »</li>
                                    
                                    <li class="
                                    font-poppins font-poppins text-lg text-white leading-10
                                    sm:text-xl sm:top-0 sm:translate-y-10
                                    md:text-xl
                                    lg:text-2xl
                                    xl:text-3xl
                                    2xl:text-3xl
                                    ">Analyses comparatives</li>
                                    
                                    <li class="
                                    font-poppins font-poppins text-lg text-white leading-10
                                    sm:text-xl sm:top-0 sm:translate-y-10
                                    md:text-xl
                                    lg:text-2xl
                                    xl:text-3xl
                                    2xl:text-3xl
                                    ">Dressage de portraits type</li>
                                    
                                    <li class="
                                    font-poppins font-poppins text-lg text-white leading-10
                                    sm:text-xl sm:top-0 sm:translate-y-10
                                    md:text-xl
                                    lg:text-2xl
                                    xl:text-3xl
                                    2xl:text-3xl">Modélisation des phases d’achat</li>
                                </ul>',
        ]);
    }
    #[Route('/methodologie2', name: 'app_methodologie2')]
    public function index2(): Response
    {
        return $this->render('methodologie/indexold.html.twig', [
            'controller_name' => 'MethodologieController',
        ]);
    }
}
