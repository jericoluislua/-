<?php
/**
 * Created by IntelliJ IDEA.
 * User: vmadmin
 * Date: 22.08.2018
 * Time: 15:52
 */

class WEBSITEController
{
    /**
     * index-page Ｗ　Ｅ　Ｂ　Ｓ　Ｉ　Ｔ　Ｅ: Shows everything you need to know about the whole website
     * Dispatcher: /
     */
    public function index()
    {
        $view = new View('website');
        $view->title = '【Ｗ　Ｅ　Ｂ　Ｓ　Ｉ　Ｔ　Ｅ】';
        $view->heading = 'W E B S I T E';
        if($heading = "W E B S I T E")
        {
            $view->id = "h1index";
            $view->activew = "activew";
            $view->activef = "file";
            $view->activep = "project";
            $view->activel = "life";
            $view->activeh = "hobby";
            if($view->activew != "activew"){
                $view->activew = "website";
            }
            if(preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"])){
                $view->activew = "website";
            }
        }
        $view->display();
    }
}