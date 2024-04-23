<?php   

    class API{
        private 
        
        

        public requestHandler(){

        }

    }


    $mysqli = new mysqli('localhost','ps750_test_user','TESTUSER123*','ps750_ci527_test');

    $sql = "INSERT INTO `people` (`firstName`, `lastName`, `phone`) "
        ."VALUES ('$firstname', '$lastname', '$phone')";
    $mysqli->query($sql);

    //check if query executed sucessfully
    $id =$mysqli->insert_id;
    $mysqli->close();
    


?>
