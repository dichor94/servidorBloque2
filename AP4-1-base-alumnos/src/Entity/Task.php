<?php

namespace AP41\Entity; //Indicamos el namesapce correspondiente para la entidad Task (tabla tareas)

use AP41\Repository\TaskRepository;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;

//Configuramos la entidad TaskRepository, ahí tenemos las funciones principales como por ejemplo el findall
#[Entity(repositoryClass: TaskRepository::class)]
#[Table('tareas')] //indicamos que esta clase TASK está dirigida a la tabla tareas

class Task{

    #[Id]
    #[GeneratedValue]
    #[Column(name: 'id', type: 'integer')]
    private int $id;

    #[Column(name: 'titulo', type: 'string', length: 255)]
    private string $title;

    #[Column(name: 'descripcion', type: 'text')]
    private string $description;

    #[Column(name: 'fecha_creacion', type: 'date')]
    private   $creationDate;

    #[Column(name: 'fecha_vencimiento', type: 'date')]
    private   $dueDate;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getCreationDate(): \DateTime
    {
        return $this->creationDate;
    }

    public function setCreationDate(DateTime $creationDate): void
    {
        $this->creationDate = $creationDate;
    }

    public function getDueDate(): \DateTime
    {
        return $this->dueDate;
    }

    public function setDueDate(DateTime $dueDate): void
    {
        $this->dueDate = $dueDate;
    }


    //Recomenso que en el caso del ID al ser AUTOINCREMENT no debemos de poner el setIs

    public function getId(): int
    {
        return $this->id;
    }


}