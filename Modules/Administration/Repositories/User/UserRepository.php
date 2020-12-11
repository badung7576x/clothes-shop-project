<?php


namespace Modules\Administration\Repositories\User;


use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Auth;
use Modules\Administration\Entities\User;

class UserRepository extends BaseRepository implements UserInterface
{

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return User::class;
    }

    public function getAll()
    {
        return $this->_model->all();
    }

    public function getUserLogin()
    {
        return Auth::user();
    }

    public function checkLogin($userId)
    {
        $result = [];
        $user = $this->_model->find($userId);

        if(Auth::check()) {
            $result['status'] = true;
            $result['user'] = Auth::user();
        } else {
            $result['status'] = false;
        }
        return $result;
    }
}
