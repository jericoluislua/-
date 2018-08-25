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
        $view = new View('website');
        $view->title = '';
        $view->heading = '';
        $view->display();
    }
}