<?php

class sneakers
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllSneakers()
    {
        $sql = 'SELECT   SKN.Merk
                        ,SKN.Model
                        ,SKN.Type
                        
             
                FROM Sneakers as SKN

                ORDER BY SKN.Merk DESC
                        ,SKN.Model DESC
                        ,SKN.Type DESC';
                       

        $this->db->query($sql);

        return $this->db->resultSet();
    }
    
}