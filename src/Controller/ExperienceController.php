<?php

namespace App\Controller;

use App\Entity\Technologie;
use App\Repository\TechnologieRepository;
//use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExperienceController extends AbstractController
{
    /**
     * @var TechnologieRepository 
     */
    private $repository;
    /**
     * @var ObjectManager
     */

    //VALA facon 1 d'injection de dependence changer le constructeur 
    //si on a besoin de l'utiliser si suivant c'est mieux l'avoir ici 
    //public function __construct(TechnologieRepository $repository,ObjectManager $em)
    public function __construct(TechnologieRepository $repository)
    {
        $this->repository = $repository;
       // $this->em=$em;
    }
    

    /**
     * @Route("/experience", name="experience")
     * @param TechnologieRepository $property
     * @return Response
     */
    public function index(): Response 
    {
        //VALA facon 2 au niveau d'index on pourrait recuperer repository comment suivi:
        //public function index(TechnologieRepository $repository): Response

        //VALA facon 3 pour recuperer les données de la table de technologie on a besoin d'appeller à repository 
        //injection
        //$repository = $this->getDoctrine()-> getRepository(Technologie::class);
        //return        
        //dump($repository);

        //Accès au repository du constructeur 
        //methodes find pour recuperer 
        //find(1)
        //findAll()
        //findOneby(['id'=1])
        $property = $this->repository->findAll();
        //envoyer l'info au vue 
        //$this->em->flush();
        dump($property);

        return $this->render('experience/index.html.twig', [            
            'property'=>$property
        ]);
    }
}
