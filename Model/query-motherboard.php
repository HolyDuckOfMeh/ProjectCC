<?php

class Person{
    public function __construct($db){
        $this->conn = $db;
    }

    public function addPerson($data){
        // variables
            $personName = $data['personName'];
            $slicesEaten = $data['slicesEaten'];
            $comments = $data['comments'];
        // variables

        $query = "INSERT INTO pizzatable (name, slices_eaten, comments)
                                VALUES ('$personName', '$slicesEaten', '$comments');";

        //prepares query statement
        $results = $this->conn->prepare($query);

        //executes statement
        $results->execute();

        //grabs the last Id created (last row insert)
        return $this->conn->lastInsertId();
    }

}

?>