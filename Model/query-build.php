<?php
class FeaturedBuilds{

    public function __construct($db){
        $this->conn = $db;
    }

    function prodRead(){
        // selects all products from db
        $query = 'SELECT * FROM Builds';

        // prepares query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        // return values
        return $stmt;
    }
}
?>