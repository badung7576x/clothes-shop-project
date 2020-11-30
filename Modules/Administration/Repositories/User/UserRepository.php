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
}
