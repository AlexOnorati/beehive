<?php
    class SampleModel{
    
        var $db;
        
        public function __construct($db){
            $this -> db = $db;
        }
        
        public function getAllSamples(){
            $sql = 'SELECT * FROM sample;';
            return  $this -> db -> query($sql);
        }
    }
?>