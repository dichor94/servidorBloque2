<?php
namespace AP42\Controllers;

use AP42\Core\EntityManager;
use AP42\Entity\User;
use AP42\Entity\Operation;
use AP42\Views\ListOperation;


class OperationController{

    public function operation(){

        $entityManager = new EntityManager();
        $userRepository = $entityManager->getEntityManager()->getRepository(User::class)->findAll();

        $view = new ListOperation();
        $view->render($userRepository);

        /*
        foreach ($user as $users) {

            print  $users->getName(). "<br>";

            $operations =  $users->getOperations();

            foreach ($operations as $operation) {

                print $operation->getResult() . "<br>";


            }


        }*/






    }




}