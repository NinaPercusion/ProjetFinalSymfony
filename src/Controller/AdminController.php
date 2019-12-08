<?php

namespace App\Controller;

use App\Entity\Administrator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index()
    {
        //VALA creation de l'entité en code dure 
       /* $admin = new Administrator();
        $admin->setIdAdmin(2)
            ->setIdAdmin('5282')
            ->setSemail('zihuatonaltzin@hotmail.com')
            ->setSpassword('10Chalch');
        //VALA pour l'envoyer à la base de donner on a besoin d'entity manager 
        //getDoctrine recupere une instance de manager repository 
        //pour pouvoir utiliser getManager 
        $entityManager = $this->getDoctrine()->getManager();
        //VALA concept de persistance :) de mon entite
        $entityManager->persist($admin);
        //VALA flush permettre de porter tout les changements au niveau d'entity manager
        $entityManager->flush(); */// Fin creation entité code dure 
        

        


        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);

    }
}
