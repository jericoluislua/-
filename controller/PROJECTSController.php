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
        $view->heading = 'P R O J E C T S';
        if($heading = "P R O J E C T S")
        {
            $view->id = "h1project";
            $view->activep = "activep";
            $view->activew = "website";
            $view->activef = "file";
            $view->activel = "life";
            $view->activeh = "hobby";
            if($view->activep != "activep"){
                $view->activep = "project";
            }
        }
        $view->display();

    }
}