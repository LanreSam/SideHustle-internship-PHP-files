<?php
    /*
    ==================   ARRAYS  ====================
    1)  Numeric Array
    2)  Associative Array
    3)  Multi-dimensional Array

    */


    //  *************** Numeric Arrays  ***************
    echo "<h1>Numeric Arrays</h1>";
    // $name1 = "David";
    // $name2 = "Dele";
    // $name3= "Shade";
    // $name4 = "Olamide";


    //array declaration
    $Usernames = array("David", "Shade", "Dele", "Olamide", "Tokunbo");

    echo "The 1st item in our array is: ".$Usernames[0]."<br/>";
    echo "The 2nd item in our array is: ".$Usernames[1]."<br/>";
    echo "The 3rd item in our array is: ".$Usernames[2]."<br/>";
    echo "The 4th item in our array is: ".$Usernames[3]."<br/>";
    echo "The 5th item in our array is: ".$Usernames[4]."<br/>";


    // // How to change the value of a numeric array.
    // $Usernames[4] = "Rose";
    // echo $Usernames[4];







    //  *************** Associative Arrays  ***************
    echo "<h1>Associative Arrays</h1>";

    $password = array(
                        "$Usernames[0]" => "pass123",
                        "$Usernames[1]" => 12345,
                        "$Usernames[2]" => 1234.5,
                        "$Usernames[3]" => "@#goodday"
                    );

    echo "$Usernames[3]'s password is <strong>".$password["$Usernames[3]"]."</strong>";









    //  *************** Multi-dimensional Arrays  ***************
    echo "<h1>Multi-dimensional Arrays</h1>";
    
    $oniline_store = array(
                            //Phone categories
                            "Phones"    =>  array("iPhone12 pro max", "Pouvouir 3 Air", "Itel A11"),
                            //Cars categories
                            "Cars"      =>  array("BMW", "Lambogini", "Ferari"),
                            //shoes categories
                            "Shoes"     =>  array("Sneakers", "Joggers", "Palm slippers")
    );



    // echo $oniline_store["Cars"][2];

    // Users ordering items from different categories.
    echo "$Usernames[3] ordered <strong>".($oniline_store["Phones"][1])."</strong><br/>";
    echo ($oniline_store["Phones"][1])." added to <strong>CART</strong>";


?>