<?php

class SneakersController extends BaseController
{
    private $SneakersModel;
    
    public function __construct()
    {
        $this->SneakersModel = $this->model('Sneakers');
    }
    



    public function index($display='none0', $message='')
    {
        /**
         * Haal de resultaat van binnen
         */
        $result = $this->SneakersModel->getAllSneakers();
    
        // var_dump($result);
        /**
         * data array informatio view pagina
         */
        $data = [
            'title' => 'Overzicht Sneakers',
            'display' =>  $display,
            'message' =>  $message,
            'result' => $result
            

        ];
        
        /**
         * informatie view page
        */
        
        $data = [
            'title' => 'Overzicht Sneakers',
            'result' => $result
        ];
   
        /**
         * view method basecontroller view aangeroepen
         */
        $this->view('Sneakers/index', $data);      
    
    }
    public function delete($Id)
    {
        $result = $this->SneakersModel->delete($Id);

        header('Refresh:3 ; url=' . URLROOT . '/SneakersController/index');

        $this->index('flex', 'Record is verwijderd');
    }

     public function create()
    {
        $data = [
            
            'title'     => 'Nieuwe Sneakers toevoegen' ,
            'display'   => 'none' ,
            'message'   =>  ''
        ];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST['merk']) ||
                empty($_POST['model']) ||
                empty($_POST['type']) ||
                empty($_POST['prijs']) ||
                empty($_POST['materiaal']) ||
                empty($_POST['gewicht']) ||
                empty($_POST['releasedatum'])) {

                $data['display'] = 'flex';
                $data['message'] = 'Vul alle velden in';               
        
            } 
            else {
                $data['display'] = 'flex';
                $data['message'] = 'De gegevens zijn opgeslagen';

                $this->SneakersModel->create($_POST);

                header('Refresh: 3; URL=' . URLROOT . '/SneakersController/index');
            }
        }       
        $this->view('Sneakers/create', $data);
    
    
    
    
    
    
    }

    public function update($id = null)
    {
        $data = [
            'title' => 'Wijzig Sneakers',
            'display' => 'none',
            'message' => '',
            'color' => ''
        ];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST['merk']) ||
                empty($_POST['model']) ||
                empty($_POST['type']) ||
                empty($_POST['prijs']) ||
                empty($_POST['materiaal']) ||
                empty($_POST['gewicht']) ||
                empty($_POST['releasedatum'])) {

                $data['display'] = 'flex';
                $data['message'] = 'Vul alle velden in';
                $data['color'] = 'danger';
            } else {
                $result = $this->SneakersModel->updateSneakers($_POST);

                $data['display'] = 'flex';
                $data['message'] = 'Het record is succesvol opgeslagen';
                $data['color'] = 'success';

                header("Refresh:3; url='" . URLROOT . "/SneakersController/index'");
                
            }
        }

        // haal de sneaker op uit de database
        $sneakers = $this->SneakersModel->getSneakersId($id);
        $data['sneakers'] = $sneakers;

        $this->view('Sneakers/update', $data);
    }
        


}

    




