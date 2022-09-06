<?php
function enkripsi(){
    $input=$_POST["input"];

    $key = array(
        'a' => '*', 'b' => '&', 'c' => '!', 'd' => '$', 'e' => '^',
        'f' => '~', 'g' => '`', 'h' => '#', 'i' => '%', 'j' => '-',
        'k' => '|', 'l' => ',', 'm' => '/', 'n' => '<', 'o' => '_' ,
        'p' => '+', 'q' => '=', 'r' => '>', 's' => '.', 't' => '"',
        'u' => ']', 'v' => 'x', 'w' => '[', 'x' => '}', 'y' => ';', 'z' => ':',
        '1' => 'r', '2' => 'f', '3' => 'v', '4' => 'b', '5' => 'h',
        '6' => 'u', '7' => 'y', '8' => 't', '9' => 'g', '0' => 'q'
    );

    // $input = strtolower($input);
    $enkripsi = str_replace(array_keys($key), $key, $input);

    echo "Input = " , $input;
    echo "<br><br>";
    echo "Enkripsi = " , $enkripsi;
};
?>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
        {
            enkripsi();
        }
?>