<?php


if (isset($_GET['submit_btn'])) {

    $input = $_GET['input'];
    echo "Result is: ";
    calculate($input);

}


function calculate($input)
{
    $result = eval("print (" . $input . ");");
    echo $result;
}
echo "<br>";
echo "<button><a href='index.html'>  Back  </a></button>";