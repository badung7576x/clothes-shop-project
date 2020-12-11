<?php

namespace Modules\Administration\Http\Controllers;


use Modules\Administration\Repositories\User\UserInterface;

class AdministrationController extends AdministrationBaseController
{
    protected $userInterface;

    public function __construct(UserInterface $userInterface) {
        parent::__construct();
        $this->userInterface = $userInterface;
    }

    public function index() {
        return view('admin.dashboard.index');
    }

    public function showUsers() {
        $users = $this->userInterface->getAll();
        return view('admin.user.index', compact('users'));
    }
}
