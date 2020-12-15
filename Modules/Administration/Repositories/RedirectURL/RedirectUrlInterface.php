<?php


namespace Modules\Administration\Repositories\RedirectURL;


interface RedirectUrlInterface
{
    public function getUrl();

    public function createOrUpdate(array $data);
}
