<?php
/**
 * Created by IntelliJ IDEA.
 * User: vmadmin
 * Date: 22.08.2018
 * Time: 15:53
 */

class PROJECTSController
{
    public function index()
    {
        $view = new View('projects');
        $view->title = '【Ｐ　Ｒ　Ｏ　Ｊ　Ｅ　Ｃ　Ｔ　Ｓ】';
        $view->heading = 'Ｐ　Ｒ　Ｏ　Ｊ　Ｅ　Ｃ　Ｔ　Ｓ';
        $view->display();
    }
}