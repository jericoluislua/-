<?php
/**
 * Created by IntelliJ IDEA.
 * User: vmadmin
 * Date: 22.08.2018
 * Time: 15:53
 */

class HOBBIESController
{
    public function index()
    {
        $view = new View('hobbies');
        $view->title = '【Ｈ　Ｏ　Ｂ　Ｂ　Ｉ　Ｅ　Ｓ】';
        $view->heading = 'Ｈ　Ｏ　Ｂ　Ｂ　Ｉ　Ｅ　Ｓ';
        $view->display();
    }
    public function basketball()
    {
        $view = new View('hobbies_basketball');
        $view->title = 'Basketball';
        $view->heading = 'basketball';
        $view->display();
    }

    public function dancing()
    {
        $view = new View('hobbies_dancing');
        $view->title = 'Dancing';
        $view->heading = 'dancing';
        $view->display();
    }
}