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
                        ,SKN.Prijs           
                        ,SKN.Materiaal        
                        ,SKN.Gewicht         
                        ,DATE_FORMAT (SKN.Releasedatum, "%d/%m/%Y") as Releasedatum
                        
             
                FROM Sneakers as SKN

                ORDER BY SKN.Merk DESC
                        ,SKN.Model DESC
                        ,SKN.Type DESC
                        ,SKN.Prijs DESC           
                        ,SKN.Materiaal DESC       
                        ,SKN.Gewicht DESC        
                        ,SKN.Releasedatum DESC';
                       

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