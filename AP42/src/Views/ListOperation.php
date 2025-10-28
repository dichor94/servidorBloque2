<?php

namespace AP42\Views;

use AP42\Entity\Operation;


class ListOperation
{
    const HTML = __DIR__ . '/../../public/assets/operaciones.html';


    public function render(array $userOperations = null): void
    {
        require_once self::HTML;
    }

}