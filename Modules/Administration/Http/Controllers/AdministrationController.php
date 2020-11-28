<?php

namespace Modules\Administration\Http\Controllers;


class AdministrationController extends AdministrationBaseController
{
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        return view('dashboard.index');
    }
}
