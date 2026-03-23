<?php

class HorlogesController extends BaseController
{
    private $HorlogesModel;
    
    public function __construct()
    {
        $this->HorlogesModel = $this->model('Horloges');
    }
    



    public function index($display='none', $message='')
    {
        /**
         * Haal de resultaat van binnen
         */
        $result = $this->HorlogesModel->getAllHorloges();
    
        // var_dump($result);
        /**
         * data array informatio view pagina
         */
        $data = [
            'title'   => 'Overzicht Horloges',
            'display' =>  $display,
            'message' =>  $message,
            'result'  =>  $result
        ];

        /**
         * informatie view page
         */
        $data = [
            'title' => 'Overzicht Horloges',
            'result' => $result
        ];
        



        /**
         * view method basecontroller view aangeroepen
         */
        $this->view('Horloges/index', $data);

    
    
    }
    public function delete($Id)
    {
        $result = $this->HorlogesModel->delete($Id);

        header('Refresh:3 ; url=' . URLROOT . '/HorlogesController/index');

        $this->index('flex', 'Record is verwijderd');
    }

    public function create()
    {
        $data = [
                'title'     => 'Nieuwe horloge toevoegen' ,
                'display'   => 'none' ,
                'message'   =>  ''
        ];
            
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST['merk']) ||
                empty($_POST['model']) ||
                empty($_POST['prijs']) ||
                empty($_POST['materiaal']) ||
                empty($_POST['gewicht']) ||
                empty($_POST['releasedatum']) ||
                empty($_POST['waterdichtheid'])) {

                $data['display'] = 'flex';
                $data['message'] = 'Vul alle velden in';               
        
            } 
            else {
                $data['display'] = 'flex';
                $data['message'] = 'De gegevens zijn opgeslagen';

                $this->HorlogesModel->create($_POST);

                header('Refresh: 3; URL=' . URLROOT . '/HorlogesController/index');
            }
        }
        $this->view('Horloges/create', $data);



    }
    
    public function update($id = NULL)
    {
        $data = [
            'title' => 'Wijzig Horloges',
            'display' => 'none',
            'message' => ''
        ];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST['merk']) ||
                empty($_POST['model']) ||
                empty($_POST['prijs']) ||
                empty($_POST['materiaal']) ||
                empty($_POST['gewicht']) ||
                empty($_POST['releasedatum']) ||
                empty($_POST['waterdichtheid']) ||
                empty($_POST['horlogetype'])) {

                $data['display'] = 'flex';
                $data['message'] = 'Vul alle velden in';
                $data['color'] = 'danger';

            } else {
                $result = $this->HorlogesModel->updateHorloges($_POST);

                $data['display'] = 'flex';
                $data['message'] = 'Het record is succesvol opgeslagen';
                $data['color'] = 'success';

                header("Refresh:3; url=" . URLROOT . "/HorlogesController/index");
            }
        }

        $id = $id ?? $_POST['id'] ?? null;
        $data['horloge'] = $this->HorlogesModel->getHorlogesById($id);

        $this->view('Horloges/update', $data);
    }
                
            
}
    

    


 
           