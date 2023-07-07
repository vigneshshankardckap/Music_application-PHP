<?php
require ("models/model.php");

class Controller {
    private $Model;

    public function __construct() {
        $this->Model = new Model();
    }
    

    public function logout(){
        session_destroy();
        $this->homepage();

    }

    public function homepage(){
        require "views/home.php";
    }


    public function loginPage($data){
        if ($data){
           $checked= $this->Model->registration($data);
           if ($checked){
               $_SESSION['name']=$checked->username;
               $this->homepage();
              
           }
           else{
               $session['error']='user is not existed';
               require "views/registration/login.php";
           }
        }
        else{
            require "views/registration/login.php";
        }
    }




    public function addMusic($data,$img){
        if ($data and $img){

            $this->Model->addMusic($data,$img);
        }
        else{
            $artistname =$this->Model->showArtist();

            require "views/addmusic.php";
        }
    }


    public function addArtist($artist,$image){
        if ($artist and $image){
            $this->Model->addArtist($artist,$image);
            $this->homepage();

        }
        else{
            require "views/addartist.php";
        }
    }

}