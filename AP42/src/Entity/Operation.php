<?php

namespace AP42\Entity;

use AP42\Repository\OperationRepository;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Column;


#[Entity(repositoryClass: OperationRepository::class)]
#[Table('operaciones')]

class Operation{

    #[Id]
    #[GeneratedValue]
    #[Column(name: 'id' ,type: 'integer')]
    private int $id;

    #[Column(name: 'resultado', type: 'decimal')]
    private float $result;


    //En este caso es una relación 1:N, siendo la N las operaciones. Pondremos una collection en el usuario para poder tener los datos de la parte de muchos operaciones


    #[ManyToOne(targetEntity: User::class, inversedBy: 'operations')] //Ponemos el nombre de la tabla en este apartado
    #[JoinColumn(name: 'usuario', referencedColumnName: 'id', nullable: false)]
    private ?User $user_id = null;





    public function getIdUser():User
    {
        return $this->user_id;
    }



    public function getId(): int
    {
        return $this->id;
    }



    public function getResult(): float
    {
        return $this->result;
    }

    public function setResult(float $result): void
    {
        $this->result = $result;
    }




}