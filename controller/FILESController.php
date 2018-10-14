<?php

/**
 * Created by PhpStorm.
 * User: laffan
 * Date: 8/27/2018
 * Time: 5:40 PM
 */
class FILESController
{

    protected $realpassword = 'JericoIM16a';
    public function index()
    {
        $view = new View('files');
        $view->title = '【Ｆ　Ｉ　Ｌ　Ｅ　Ｓ】';
        $view->heading = 'F I L E S';
        if($heading = "F I L E S")
        {
            $view->id = "h1files";
            $view->activef = "activef";
            $view->activew = "website";
            $view->activep = "project";
            $view->activel = "life";
            $view->activeh = "hobby";
            if($view->activef != "activef"){
                $view->activef = "file";
            }
        }
        else{
        }
        $view->display();
    }

    public function checkPassword()
    {
        $passwordhash = password_hash($this->realpassword, PASSWORD_DEFAULT);
        //$admhash = password_hash($this->admpassword, PASSWORD_DEFAULT);
        if (isset($_POST['send'])) {
            $passwordgiven = htmlspecialchars($_POST['password']);
            if (password_verify($passwordgiven, $passwordhash)) {
                $_SESSION['openfiles'] = $passwordgiven;
                header('Location: /FILES');
            }
            else {
                header('Location: /FILES');
                echo 'Wrong password given.';
            }
            /*if(password_verify($passwordgiven,$admhash)){
                $_SESSION['admin'] = $passwordgiven;
                header('Location: /FILES');
            }*/
        }
    }
}