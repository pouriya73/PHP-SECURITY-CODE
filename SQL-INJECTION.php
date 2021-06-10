<?php
    //Patterns, used to detect Malicous Request (SQL Injection)
$patterns = array(
        "+select+",
        "+union+",
        "union+",
        "+or+",
        "**/",
        "/**",
        "0x3a",
        "/*",
        "*/",
        "*",
        ";",
        "||",
        "' #",
        "or 1=1",
        "'1'='1",
        "S@BUN",
        "`",
        "'",
        '"',
        "<",
        ">",
        "1,1",
        "1=1",
        "sleep(",
        "%27",
        "<?",
        "<?php",
        "?>",
        "../",
        "loopback",
        "%0A",
        "%0D",
        "%3C",
        "%3E",
        "%00",
        "%2e%2e",
        "input_file",
        "path=.",
        "mod=.",
        "eval\(",
        "javascript:",
        "base64_",
        "boot.ini",
        "etc/passwd",
        "self/environ",
        "echo.*kae",
        "=%27$"
    );
?>