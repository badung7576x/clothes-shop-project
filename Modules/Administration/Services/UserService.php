<?php


namespace Modules\Administration\Services;


use Modules\Administration\Repositories\User\UserInterface;

class UserService
{
    protected $userInterface;

    public function __construct(UserInterface $userInterface) {
        $this->userInterface = $userInterface;
    }

    public function getUserFromEmail($credentials){
        return $this->userInterface->getUserFromEmail($credentials['email']);
    }

    public function getUserLogin() {
        return $this->userInterface->getUserLogin();
    }
}
