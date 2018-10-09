<?php
/**
 * Created by IntelliJ IDEA.
 * User: vmadmin
 * Date: 22.08.2018
 * Time: 15:53
 */

class MEController
{
    public function index()
    {
        $view = new View('me');
        $view->title = '【Ｍ　Ｅ】';
        $view->heading = 'M E';
        if($heading = "M E")
        {
            $view->id = "h1me";
        }
        $view->display();
    }
}