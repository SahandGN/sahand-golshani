<?php


if (isset($_GET['submit_btn'])) {

    $input = $_GET['input'];
    echo "Result is: ";
    try{
    calculate($input);
    }
    catch (DivisionByZeroError $e){
        echo $e->getMessage();
    }
    catch (NullPointerException $e){
        echo $e->getMessage();
    }
}


function calculate($input)
{
    if ($input == null){
        throw new NullPointerException('The $var does not exist');
    }
    $result = eval("print (" . $input . ");");
    echo $result;

}
echo "<br>";
echo "<button><a href='index.html'>  Back  </a></button>";