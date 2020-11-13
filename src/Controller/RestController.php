<?php

namespace App\Controller;

use App\Repository\TeacherRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RestController extends AbstractController
{

    private TeacherRepository $teacherRepository;

    /**
     * RestController constructor.
     * @param TeacherRepository $teacherRepository
     */
    public function __construct(TeacherRepository $teacherRepository)
    {
        $this->teacherRepository = $teacherRepository;
    }

    //dependency injection ?


    /**
     * @Route("/rest-student", name="restStudent")
     */
    public function RestStudent(): Response
    {
        return $this->render('rest/index.html.twig', [
            'controller_name' => 'RestController',
        ]);


    }


    /**
     * @Route("/rest-teacher", name="restTeacher")
     */
    public function RestTeacher(): Response
    {
        return $this->render('rest/index.html.twig', [
            'controller_name' => 'RestController',
        ]);
    }


}
