<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class TestController extends BaseController {

    public function start($page) {
        $pages = ['o-nas', 'kontakt', 'test'];

        if(in_array($page, $pages)) {
            return view('pages.' . $page);
        }

        return view('pages.start');
    }

    public function test() {

        return view('pages.test');
    }
}