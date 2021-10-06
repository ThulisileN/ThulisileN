<?php
    //include("View/Register.html");
    //include("Model/UserModel.php");
    # Check if name and email fileds are empty
    if(empty($_POST['name']) && empty($_POST['email'])){
        # If the fields are empty, display a message to the user
        echo " <br/> Please fill in the fields";
    # Process the form data if the input fields are not empty
    }else{
        // save the data
        saveUserData();
    }
?>