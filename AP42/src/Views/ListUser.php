<?php

namespace AP42\Views;

use AP42\Entity\User;


class ListUser
{
    const HTML = __DIR__ . '/../../public/assets/users.html';

    /**
     * Renderiza la vista de listado de tareas.
     * @param array|null $tareas
     * @return void
     */
    public function render(array $tareas = null): void
    {
        require_once self::HTML;
    }

}