<?php

    // ==================== FUNCTIONS =====================

    /*
        1)  User defined functions
        2)  Function Parameters
        3)  The return statement
    */
    


    //  *************** User defined functions  ***************
    echo "<h1>User defined functions</h1>";
    
    function myfunction(){
        echo 'hello function';
    }

    myfunction();









    //  *************** Function Parameters ***************
    echo "<h1>Function Parameters</h1>";


    // @$input = $_GET['input'];
    // @$add = $_GET['add'];


    // if (isset($add)) {
    //     if (is_numeric($input)) {
    //         function addnumbers($input){
    //             $result = $input + 15;
    //             echo "$input + 15 = ".$result;
    //         }

    //         addnumbers($input);
    //     }else {
    //         echo "please input a number";
    //     }
    // }

    function addnumbers($num, $num2){
        $result = $num + $num2;
        echo "$num + $num2 = ".$result;
    }

    addnumbers(12, 10);












    //  *************** The return statement ***************
    echo "<h1>The return statement</h1>";

    @$input = $_GET['input']; // our text field
    @$add = $_GET['add']; // our button

    if (isset($add)) {
        if (!empty($input)) {
            function welcomeUser($input){
                $text = "<h3>Hello $input</h3>";
                return $text;
            }
         
            echo welcomeUser($input);
        }else {
            echo "please enter your name";
        }
    }

    

?>


<form action="" method="get">

    <input type="text" placeholder="Enter number" name="input"/><br><br>
    <input type="submit" value="Add Number" name="add">

</form>