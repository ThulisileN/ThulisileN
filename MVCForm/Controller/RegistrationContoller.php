<?php
    include("Form.html"); 
    # Check if name and email fileds are empty
    if(empty($_POST['name']) && empty($_POST['email'])){
        // save the data
    # Process the form data if the input fields are not empty
    }else{
        $name= $_POST['name'];
        $email= $_POST['email'];
        echo ('Your Name is:     '. $name. '<br/>');
        echo ('Your Email is:'   . $email. '<br/>');
    }
?>