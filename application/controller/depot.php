<?php

class depot extends Controller
{
    function __construct()
    {
        Controller::__construct('model/model_depot.php','Model_depot');
    }

    public function index()
    {
        session_start();
        if(isset($_SESSION['id_user']) == true) 
        {         
            if($this->model->verifier_droit_acces(id_ajouterdepot, $_SESSION['id_user']) == true)
            {
                require APP . 'view/_templates/header.php';

                if ( ( isset($_POST["valider_ajouter_depot"]) == true ) && ( isset($_POST["nom_depot"]) == true ) && ( isset($_POST["adresse_depot"]) == true ) )
                { 
                    $retour = true;
                    $arg = array("nom_depot" => $_POST["nom_depot"], "adresse_depot" => $_POST["adresse_depot"] ) ;
                    $retour = $this->model->ajouter_depot($arg);
                    if($retour == true )
                    {
                        require APP . 'view/depot/done_ajouter.php';
                    }else
                    {
                        require APP . 'view/depot/echec_ajouter.php';
                    }
                }
                require APP . 'view/depot/ajouter_depot.php';
                require APP . 'view/_templates/footer.php';
            }
        }else
            header('location: ' . URL);
    }

    public function supprimerdepot($id_depot = '')
    {
        session_start();
        if(isset($_SESSION['id_user']) == true) 
        {         
            if($this->model->verifier_droit_acces(id_supprimerdepot, $_SESSION['id_user']) == true)
            {

                if((isset($_POST["valider_supprimer"]) == true) && (isset($_POST["id"]) == true))
                {
                    $retour = false;
                    $retour = $this->model->delete_depot($_POST["id"]);
                    $depots = $this->model->get_all_depots();

                    if($retour == true)
                    {
                        require APP . 'view/_templates/header.php';
                        require APP . 'view/depot/done_supprimer.php';
                        require APP . 'view/depot/supprimer_depot.php';
                        require APP . 'view/_templates/footer.php';
                    }else
                    {
                        require APP . 'view/_templates/header.php';
                        require APP . 'view/depot/echec_supprimer.php';
                        require APP . 'view/depot/supprimer_depot.php';
                        require APP . 'view/_templates/footer.php';
                    }
                }else
                if($id_depot != '') 
                {
                    $depot_cible = $this->model->get_depot_by_id($id_depot);
                    
                    if($depot_cible != NULL)
                    {
                        $depots = $this->model->get_all_depots();

                        require APP . 'view/_templates/header.php';
                        require APP . 'view/depot/supprimer_executer.php';
                        require APP . 'view/depot/supprimer_depot.php';
                        require APP . 'view/_templates/footer.php';  
                    }else
                        header('location: ' . URL . 'error');
                }else
                {
                    $depots = $this->model->get_all_depots();

                    require APP . 'view/_templates/header.php';
                    require APP . 'view/depot/supprimer_depot.php';
                    require APP . 'view/_templates/footer.php'; 
                }
            }else
                header('location: ' . URL . 'error');
        }else
            header('location: ' . URL);
    }

    public function modifierdepot($id_depot='')
    {

        session_start();
        if(isset($_SESSION['id_user']) == true) 
        {         
            if($this->model->verifier_droit_acces(id_modifierdepot, $_SESSION['id_user']) == true)
            {
                if((isset($_POST["valider_modifier"]) == true) && ( isset($_POST["nom_depot"]) == true ) && ( isset($_POST["adresse_depot"]) == true ) )
                {
                    $retour = true;
                    $arg = array("id_depot" => $_POST["id"], "nom_depot" => $_POST["nom_depot"], "adresse_depot" => $_POST["adresse_depot"] ) ;
                    $retour = $this->model->update_depot($arg);
                    $depots = $this->model->get_all_depots();
                    if($retour == true)
                    {
                        require APP . 'view/_templates/header.php';
                        require APP . 'view/depot/done_modifier.php';
                        require APP . 'view/depot/modifier_depot.php';
                        require APP . 'view/_templates/footer.php';
                    }else
                    {
                        require APP . 'view/_templates/header.php';
                        require APP . 'view/depot/echec_modifier.php';
                        require APP . 'view/depot/modifier_depot.php';
                        require APP . 'view/_templates/footer.php';
                    }
                }else
                if($id_depot != '') 
                {
                    $depot_cible = $this->model->get_depot_by_id($id_depot);
                    
                    if($depot_cible != NULL)
                    {
                        require APP . 'view/_templates/header.php';
                        require APP . 'view/depot/modifier_executer.php';
                        require APP . 'view/_templates/footer.php';  
                    }else
                        header('location: ' . URL . 'error');
                }else
                {
                    $depots = $this->model->get_all_depots();

                    require APP . 'view/_templates/header.php';
                    require APP . 'view/depot/modifier_depot.php';
                    require APP . 'view/_templates/footer.php'; 
                }

            }else
                header('location: ' . URL . 'error');
        }else
            header('location: ' . URL);
    }
}