<?php


namespace Modules\Administration\Repositories\RedirectURL;


use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Auth;
use Modules\Administration\Entities\RedirectUrl;
use Modules\Administration\Entities\User;

class RedirectUrlRepository extends BaseRepository implements RedirectUrlInterface
{

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return RedirectUrl::class;
    }


    public function getUrl()
    {
        return $this->_model->take(1)->first();
    }

    public function createOrUpdate(array $data)
    {
        $currentUrl = $this->getUrl();
        if(empty($currentUrl)) {
            $this->create($data);
        } else {
            $currentUrl->url = $data['url'];
            $currentUrl->save();
        }
        return $currentUrl;
    }
}
