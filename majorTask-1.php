<?php

    // ++++++++++++++++ How to generate Nigeria phone number ++++++++++++++
    
    // Headers for our phone numbers
    $mtn = ['080', '081', '090'];
    $glo
    $nineMobile
    
    @$input = $_POST['input'];
    @$btn = $_POST['btn'];


    if (isset($btn) and !empty($input)) {
        if (is_numeric($input)){
            for ($i=1; $i <= $input; $i++) { 
                $rand = rand(10000000, 99999999);
                echo $i.".\t\t\t".$mtn[].$rand."<br/>";
            }
        } else {
            echo "Please enter a valid number";
        }
        
    } else {
        echo "Please type in something in the text field";
    }
    




?>



<!-- form that processes the number you entered -->
<form action="" method="post">

    <input type="text" placeholder="Enter number.." name="input" required/><br><br>
    <input type="submit" value="Generate" name="btn">

</form>