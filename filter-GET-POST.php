<?php

        //Sanitization of all fields and requests
        $_GET     = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
        $_POST    = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
?>
