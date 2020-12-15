<?php


namespace Modules\Administration\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Modules\Administration\Http\Requests\LoginRequest;
use Modules\Administration\Repositories\User\UserInterface;
use Modules\Administration\Services\UserService;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    protected $userService;

    /**
     * Create a new controller instance.
     *
     * @param UserService $userService
     */

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        $token = null;

        if ($token = \JWTAuth::attempt($credentials)) {
            $urlRedirect = config('administration.login-success-url') ?? route('login.success');
            return redirect()->to($urlRedirect . "?token=" . $token);
        }

        return redirect()->back()->withInput()->with("error", "Email hoặc mật khẩu chưa đúng");
    }

    public function logout()
    {
        $token = \JWTAuth::getToken();
        if ($token) {
            \JWTAuth::invalidate($token);
        }
        return redirect()->route('login');
    }

    public function loginSuccess() {
        $user = $this->userService->getUserLogin();
        return view('auth.login-success', compact('user'));
    }
}
