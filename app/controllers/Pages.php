<?php

    class Pages {
        public function __construct(){
            
        }

        public function index (){
            echo 'im index' ;
        }

        public function about ($id){

            echo 'this is about';
            echo $id;
        }
    }