<?php
    class MyDate {
        public static function toggle($data)
        {
            if (preg_match("\d{2}/\d{2}/\d{4}",$data)) {
                return true;
            } else {
                return false;
            }
        }
    }
    
    $obj = new MyDate();
    $data = "25/07/2021";
    echo MyDate::converter($data);