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
        $sql = 'SELECT   SKN.Id
                        ,SKN.Merk
                        ,SKN.Model
                        ,SKN.Type
                        
             
                FROM Sneakers as SKN

                ORDER BY SKN.Merk DESC
                        ,SKN.Model DESC
                        ,SKN.Type DESC';
                       

        $this->db->query($sql);

        return $this->db->resultSet();
    }
    
    public function delete($Id)
    {
        $sql = "DELETE
                FROM Sneakers
                WHERE Id = :Id";
        $this->db->query($sql);

        $this->db->bind(':Id', $Id, PDO::PARAM_INT);

        return $this->db->execute();
    }


}