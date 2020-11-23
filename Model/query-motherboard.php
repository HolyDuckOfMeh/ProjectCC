<?php
class Motherboard{

    public function __construct($db){
        $this->conn = $db;
    }

    function prodRead(){
        // selects all products from db
        $query = 'SELECT * FROM motherboard ORDER BY Price DESC';

        // prepares query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        // return values
        return $stmt;
    }
}
?>