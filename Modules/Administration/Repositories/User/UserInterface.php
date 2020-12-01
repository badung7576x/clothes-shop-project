<?php


namespace Modules\Administration\Repositories\User;


interface UserInterface
{
    public function getAll();

    public function create(array $attributes);

    public function getUserLogin();

    public function checkLogin($userId);
}
