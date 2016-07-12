<?php        function Helloworld($name) {
            if ($name == null) {
                echo "Hello world";
            } else {
                echo "Hello", " " , $name;
            }
        }
        Helloworld();
