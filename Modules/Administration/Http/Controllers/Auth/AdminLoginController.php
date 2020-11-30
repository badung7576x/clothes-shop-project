<?php


namespace Modules\Administration\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Modules\Administration\Http\Requests\LoginRequest;

class AdminLoginController extends Controller
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
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function showLoginForm()
    {
        return view('admin.admin-auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credential = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        if($this->guard()->attempt($credential)) {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back()->withInput()->with("error", "Email hoặc mật khẩu chưa đúng");
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        return redirect()->route('admin.login');
    }

    protected function guard() {
        return Auth::guard('admin');
    }
}
