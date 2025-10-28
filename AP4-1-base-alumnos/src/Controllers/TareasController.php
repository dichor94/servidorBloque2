<?php

namespace AP41\Controllers;

use AP41\Core\EntityManager;
use AP41\Entity\Task;
use AP41\Views\ListadoTareas;

/**
 * Controlador para la ruta /detalle
 */
class TareasController
{

    public function list()
    {
        $entityManager = new EntityManager();
        $userRepository = $entityManager->getEntityManager()->getRepository(Task::class);
        $tasks = $userRepository->findAll();

        $view = new ListadoTareas();
        $view->render($tasks);
    }

    public function detail($id = null)
    {
        //Con entityManager tenemos las direntes funciones como por ejemplo el findBy
        $entityManager = new EntityManager();
        $userRepository = $entityManager->getEntityManager()->getRepository(Task::class);
        $tasks = $userRepository->findBy(['id' => $id]);

        $view = new ListadoTareas();
        $view->render($tasks);
    }
}