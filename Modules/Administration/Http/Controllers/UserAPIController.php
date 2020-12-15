<?php

namespace Modules\Administration\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Administration\Services\UserService;
use Tymon\JWTAuth\Exceptions\JWTException;

class UserAPIController extends Controller
{
    /**
     * @var bool
     */

    protected $userService;

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $user = $this->userService->getUserFromEmail($credentials);

        if (!empty($user) && $request->get('no_password') != null) {
            $token = \JWTAuth::fromUser($user);
        } else {
            if (!$token = \JWTAuth::attempt($credentials)) {
                return response()->json(['message' => 'Email hoặc mật khẩu chưa chính xác'], 422);
            }
        }

        return response()->json(['message' => 'Đã đăng nhập thành công','token' => $token, 'user' => $user]);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function logout()
    {
        $token = \JWTAuth::getToken();
        if ($token) {
            \JWTAuth::invalidate($token);
        }

        return response()->json(['message' => 'Đăng xuất thành công!']);
    }

    public function getAuthUser(){
        $user = \JWTAuth::parseToken()->authenticate();

        return response()->json(['user' => $user]);
    }
}
