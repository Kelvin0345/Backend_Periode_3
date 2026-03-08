<?php

class Horloges
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllHorloges()
    {
        $sql = 'SELECT   H.Id
                        ,H.Merk
                        ,H.Model
                        ,H.Prijs
                        ,H.Materiaal
                        ,H.Gewicht
                        ,H.Releasedatum
                        ,H.Waterdichtheid
                        ,H.HorlogeType 
                        ,DATE_FORMAT(H.Releasedatum, "%d/%m/%Y") as Releasedatum
                FROM Horloges as H

                ORDER BY H.Merk DESC
                        ,H.Model DESC
                        ,H.Prijs DESC
                        ,H.Materiaal DESC
                        ,H.Gewicht DESC
                        ,H.Releasedatum DESC
                        ,H.Waterdichtheid DESC
                        ,H.HorlogeType DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }

    public function delete($Id)
    {
        $sql = "DELETE
                FROM Horloges
                WHERE Id = :Id";
        $this->db->query($sql);

        $this->db->bind(':Id', $Id, PDO::PARAM_INT);

        return $this->db->execute();
    
    }
    
}