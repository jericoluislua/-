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
        $view->heading = 'H O B B I E S';
        if($heading = "H O B B I E S")
        {
            $view->id = "h1hobbyindex";
        }
        $view->display();
    }
    public function basketball()
    {
        $view = new View('hobby_basketball');
        $view->title = '【Ｈ　Ｏ　Ｂ　Ｂ　Ｉ　Ｅ　Ｓ　|　Ｂ　Ａ　Ｓ　Ｋ　Ｅ　Ｔ　Ｂ　Ａ　Ｌ　Ｌ】';
        $view->heading = 'b a s k e t b a l l';

        if($heading = "b a s k e t b a l l")
        {
            $view->id = "h1hobby";
        }
        $view->display();
    }

    public function dancing()
    {
        $view = new View('hobby_dancing');
        $view->title = '【Ｈ　Ｏ　Ｂ　Ｂ　Ｉ　Ｅ　Ｓ　|　Ｄ　Ａ　Ｎ　Ｃ　Ｉ　Ｎ　Ｇ】';
        $view->heading = 'd a n c i n g';
        if($heading = "d a n c i n g")
        {
            $view->id = "h1hobby";
        }
        $view->display();
    }

    public function cubing()
    {
        $view = new View('hobby_cubing');
        $view->title = '【Ｈ　Ｏ　Ｂ　Ｂ　Ｉ　Ｅ　Ｓ　|　Ｄ　Ａ　Ｎ　Ｃ　Ｉ　Ｎ　Ｇ】';
        $view->heading = 'c u b i n g';
        if($heading = "c u b i n g")
        {
            $view->id = "h1hobby";
        }
        $view->display();
    }
    public function videogames()
    {
        $view = new View('hobby_vg');
        $view->title = '【﻿Ｈ　Ｏ　Ｂ　Ｂ　Ｉ　Ｅ　Ｓ　|　Ｖ　Ｉ　Ｄ　Ｅ　Ｏ　Ｇ　Ａ　Ｍ　Ｅ　Ｓ】';
        $view->heading = 'v i d e o g a m e s';
        if($heading = "v i d e o g a m e s")
        {
            $view->id = "h1hobby";
        }
        $view->display();
    }

}