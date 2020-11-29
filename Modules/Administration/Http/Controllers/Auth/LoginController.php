<?php


namespace Modules\Administration\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Modules\Administration\Http\Requests\LoginRequest;
use Modules\Administration\Repositories\User\UserInterface;

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

    protected $userInterface;

    /**
     * Create a new controller instance.
     *
     * @param UserInterface $userInterface
     */

    public function __construct(UserInterface $userInterface) {
        $this->userInterface = $userInterface;
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credential = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];
        if($this->guard()->attempt($credential)) {
            $urlRedirect = config('administration.login-success-url') ?? route('login.success');
            return redirect()->to($urlRedirect);
        }

        return redirect()->back()->withInput()->with("error", "Email hoặc mật khẩu chưa đúng");
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        return redirect()->route('login');
    }

    public function guard() {
        return Auth::guard('web');
    }

    public function loginSuccess() {
        $user = $this->userInterface->getUserLogin();
        return view('auth.login-success', compact('user'));
    }
}
