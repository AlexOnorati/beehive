<?php
    class SampleModel{
    
        var $db;
        
        public function __construct($db){
            $this -> db = $db;
        }
        
        public function getAllSamples(){
            $sql = 'SELECT hive_id as id, sample_period as period, collection_date as date, mite_count as count FROM sample;';
            return  $this -> db -> query($sql);
        }
    }
?>