<?php


namespace Modules\Administration\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class AdministrationBaseController extends Controller
{
    protected $adminUser;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->adminUser = Auth::guard('admin')->user();
            if(!empty($this->adminUser)){
                View::share('adminUser', $this->adminUser);
            }
            return $next($request);
        });
    }
}
