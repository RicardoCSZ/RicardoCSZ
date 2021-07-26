<?php
    class MyDate {
        public static function toAmerecian($data)
        {
            $data = str_replace("/", "-", $data);
            $data = date('Y-m-d', strtotime($data));
            return $data;
        }
    }
    
    $obj = new MyDate();
    $data = "25/07/2021";
    echo MyDate::toAmerecian($data);