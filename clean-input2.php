
function cleanInput($str_input) {
        if($str_input =="" Or $str_input == Null){
         return "";
        }
$str_input = trim($str_input);
$str_input = stripslashes($str_input);
}
