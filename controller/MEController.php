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
            $view->btnw = "off";
            $view->bg = "bglife";
            $view->container = "contlife";
            $view->id = "h1me";
            $view->activel = "activel";
            $view->activew = "website";
            $view->activef = "file";
            $view->activep = "project";
            $view->activeh = "hobby";
            if($view->activel != "activel"){
                $view->activel = "life";
            }

        }
        $view->display();
    }
}