<?php

namespace AP42\Controllers;

use AP42\Core\EntityManager;
use AP42\Entity\User;
use AP42\Views\ListUser;

/**
 * Controlador para la ruta /detalle
 */
class UserController
{

    public function user()
    {
        $entityManager = new EntityManager();
        $userRepository = $entityManager->getEntityManager()->getRepository(User::class);
        $tasks = $userRepository->findAll();

        $view = new ListUser();
        $view->render($tasks);
    }




    /*
    public function detail($id = null)
    {
        //Con entityManager tenemos las direntes funciones como por ejemplo el findBy
        $entityManager = new EntityManager();
        $userRepository = $entityManager->getEntityManager()->getRepository(Task::class);
        $tasks = $userRepository->findBy(['id' => $id]);

        $view = new ListadoTareas();
        $view->render($tasks);
    }*/
}