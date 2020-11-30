<?php

namespace Modules\Administration\Http\Controllers\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Modules\Administration\Http\Requests\RegisterRequest;
use Modules\Administration\Repositories\User\UserInterface;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    protected $userInterface;

    public function __construct(UserInterface $userInterface) {
        $this->userInterface = $userInterface;
    }

    public function showRegistrationForm() {
        return view('web.auth.register');
    }

    public function register(RegisterRequest $request) {
        $userInfo = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone_number' => $request->get('phone_number'),
            'password' => Hash::make($request->get('password'))
        ];

        $this->userInterface->create($userInfo);

        return redirect()->route('login')->with('success', "Đăng ký thành công");
    }

}
