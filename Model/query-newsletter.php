<?php

class Newsletter{
    public function __construct($db){
        $this->conn = $db;
    }

    public function addNewsletter($data){
        // variables
            $newsName = $data['newsName'];
            $newsEmail = $data['newsEmail'];
        // variables

        $query = "INSERT INTO NewsSignups (name, email)
                                VALUES ('$newsName', '$newsEmail');";

        //prepares query statement
        $results = $this->conn->prepare($query);

        //executes statement
        $results->execute();

        //grabs the last Id created (last row insert)
        return $this->conn->lastInsertId();
    }

}

?>