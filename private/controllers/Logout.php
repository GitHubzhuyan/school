<?php

class Logout extends Controller
{
    public function Index(){
        unset($_SESSION['USER']);
        $this->redirect('login');
    }

}