<?php


namespace Modules\Administration\Repositories\User;


use App\Repositories\BaseRepository;
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
}
