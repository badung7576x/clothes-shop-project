<?php


namespace Modules\Administration\Services;


use Modules\Administration\Repositories\RedirectURL\RedirectUrlInterface;
use Modules\Administration\Repositories\User\UserInterface;

class UserService
{
    protected $userInterface;
    protected $redirectUrlInterface;

    public function __construct(UserInterface $userInterface, RedirectUrlInterface $redirectUrlInterface) {
        $this->userInterface = $userInterface;
        $this->redirectUrlInterface = $redirectUrlInterface;
    }

    public function getUserFromEmail($credentials){
        return $this->userInterface->getUserFromEmail($credentials['email']);
    }

    public function getUserLogin() {
        return $this->userInterface->getUserLogin();
    }

    public function getAll() {
        return $this->userInterface->getAll();
    }

    public function settingUrl($data) {
        return $this->redirectUrlInterface->createOrUpdate($data);
    }

    public function getRedirectUrl() {
        return $this->redirectUrlInterface->getUrl();
    }
}
