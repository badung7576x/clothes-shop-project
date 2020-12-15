<?php

namespace Modules\Administration\Http\Controllers;


use Illuminate\Http\Request;
use Modules\Administration\Repositories\User\UserInterface;
use Modules\Administration\Services\UserService;

class AdministrationController extends AdministrationBaseController
{
    protected $userService;

    public function __construct(UserService $userService) {
        parent::__construct();
        $this->userService = $userService;
    }

    public function index() {
        $url = $this->userService->getRedirectUrl();
        return view('dashboard.index', compact('url'));
    }

    public function showUsers() {
        $users = $this->userService->getAll();
        return view('user.index', compact('users'));
    }

    public function settingUrl(Request $request) {
        $data = $request->only('url');
        $currentUrl = $this->userService->settingUrl($data);
        return response()->json(['status' => true, 'url' => $currentUrl->url]);
    }
}
