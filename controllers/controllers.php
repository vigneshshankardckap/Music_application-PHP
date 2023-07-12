<?php
require ("models/model.php");


class Controller {

    private $Model;

    public function __construct() {
        $this->Model = new Model();
    }


     /** this function show the the homepage   */
    public function homepage(){
        
        /** fetch the artist names form homepage */
        $showArtistName=$this->Model->ArtistName();

        /** fetch the songs names form homepage */
        $showSongNames=$this->Model->albumName();

        require "views/home.php";
    }

     /** this function user or adim can logout session will be destroy */
    public function logout(){
        session_destroy();

        $this->guestUser();
    }
 
    /**validate the login if user or adim  */
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

   /** add the music and images  */
    public function addMusic($data,$img){
        if ($data and $img){

            $this->Model->addMusic($data,$img);
        }
        else{

            $artistname =$this->Model->ArtistName();

            require "views/addmusic.php";
        }
    }

    /**add the addartist names and images  */
    public function addArtist($artist,$image){
        if ($artist and $image){

            $this->Model->addArtist($artist,$image);
            $this->homepage();

        }
        else{
            require "views/addartist.php";
        }
    }

    /**guestUser only show the songs names and artist names dont allow the add songs and artist names  */
    public function guestUser(){

        /** fetch the artist names form homepage */
         $showArtistName=$this->Model->ArtistName();

        /** fetch the songs names form homepage */
        $showSongNames=$this->Model->albumName();
        require "views/guestUser.php";

    }




}