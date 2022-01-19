<?php

class Model_depot extends Model
{    
    function __construct($db)
    {
        Model::__construct($db);
    }

    public function ajouter_depot($arg)
    {
        $sql = "INSERT INTO depot (nom_depot,adresse_depot) VALUES (:nom_depot, :adresse_depot)" ;
        $query = $this->db->prepare($sql) ;
        $parameters = array(':nom_depot' => $arg['nom_depot'], ':adresse_depot' => $arg['adresse_depot'] ) ;
        try
        {
            $query->execute($parameters);
        } 
        catch (PDOException $e) 
        {
            return false;
        }

        return true;
    }


    public function get_all_depots()
    {

        $sql = "SELECT * FROM depot";
        $query = $this->db->prepare($sql);

        $query->execute();

        return $query->fetchAll();
    }


    public function get_depot_by_id($id_depot)
    {

        $sql = "SELECT * FROM depot WHERE id_depot = :id_depot LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':id_depot' => $id_depot);

        $query->execute($parameters);

        return $query->fetch();
    }

    public function delete_depot($id_depot)
    {
        $sql = "DELETE FROM depot WHERE id_depot=:id_depot" ; 
        $query = $this->db->prepare($sql) ; 
        $parameters = array(':id_depot' => $id_depot) ; 
        try {
            $query->execute($parameters) ;
        } catch (PDOException $e) {
            return false ; 
        }
        return true ; 
    }


    public function update_depot($arg)
    {
        $sql = "UPDATE depot SET nom_depot = :nom_depot, adresse_depot = :adresse_depot WHERE id_depot = :id_depot";
        $query = $this->db->prepare($sql);
        $parameters = array('id_depot' => $arg['id_depot'], 'nom_depot' => $arg['nom_depot'], 'adresse_depot' => $arg['adresse_depot'] );
        try
        {
            $query->execute($parameters);
        } 
        catch (PDOException $e) 
        {
            return false;
        }

        return true;
    }
}


