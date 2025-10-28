<?php

namespace AP42\Entity; //Indicamos el namesapce correspondiente para la entidad Task (tabla tareas)

use AP42\Repository\UserRepository;

//Uso las funciones de Doctrine, las tengo que usar con use para llamarlas
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\Table;

//Configuramos la entidad TaskRepository, ahí tenemos las funciones principales como por ejemplo el findall
#[Entity(repositoryClass: UserRepository::class)]
#[Table('usuarios')] //indicamos que esta clase TASK está dirigida a la tabla tareas

class User{

    //Columna id, indicamos que es con el atributo Id y que es GeneratedValue AUTOINCREMENT
    #[Id]
    #[GeneratedValue]
    #[Column(name: 'id', type: 'integer')]
    private int $id;

    #[Column(name: 'nombre', type: 'string', length: 30)]
    private string $name;

    #[Column(name: 'estado', type: 'boolean')]
    private bool $state;

    #[OneToMany(mappedBy: 'user_id', targetEntity: Operation::Class, cascade: ['persist', 'remove'])]
    private Collection $operations;

    public function __construct(){


        $this->operations = new ArrayCollection();


    }

    public function getOperations(): Collection{

        return $this->operations;

    }


    //Getter y Setter de Name, Id y State (ID RECORDEMOS QUE NO QUEREMOS UN SETTER)
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function isState(): int
    {
        return $this->state;
    }

    public function setState(bool $state): void
    {
        $this->state = $state;
    }


    //Recomenso que en el caso del ID al ser AUTOINCREMENT no debemos de poner el setIs

    public function getId(): int
    {
        return $this->id;
    }


}