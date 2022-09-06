<?php
function deskripsi(){
    $input=$_POST["input"];

    $key = array(
        '*' => 'a', '&' => 'b', '!' => 'c', '$' => 'd', '^' => 'e',
        '~' => 'f', '`' => 'g', '#' => 'h', '%' => 'i', '-' => 'j',
        '|' => 'k', ',' => 'l', '/' => 'm', '<' => 'n', '_' => 'o' ,
        '+' => 'p', '=' => 'q', '>' => 'r', '.' => 's', '"' => 't',
        ']' => 'u', 'x' => 'v', '[' => 'w', '}' => 'x', ';' => 'y', ':' => 'z',
        'r' => '1', 'f' => '2', 'v' => '3', 'b' => '4', 'h' => '5',
        'u' => '6', 'y' => '7', 't' => '8', 'g' => '9', 'q' => '0'
    );

    // $input = strtolower($input);
    $deskripsi = str_replace(array_keys($key), $key, $input);

    echo "Input = " , $input;
    echo "<br><br>";
    echo "Deskripsi = " , $deskripsi;
};
?>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
        {
            deskripsi();
        }
?>