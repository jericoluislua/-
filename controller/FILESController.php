<?php

/**
 * Created by PhpStorm.
 * User: laffan
 * Date: 8/27/2018
 * Time: 5:40 PM
 */
class FILESController
{
    public function index()
    {
        $view = new View('files');
        $view->title = '【Ｆ　Ｉ　Ｌ　Ｅ　Ｓ】';
        $view->heading = 'Ｆ　Ｉ　Ｌ　Ｅ　Ｓ';
        $view->display();
    }
}