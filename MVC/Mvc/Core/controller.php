<?php
    class controller{
        public function model($model){
            include_once'./Mvc/Model/'.$model.'.php';
            return new $model;
        }
        public function view($view,$data=[]){
            include_once './Mvc/View/'.$view.'.php';
        }
    
    }
?>