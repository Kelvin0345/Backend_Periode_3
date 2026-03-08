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

   
           
        


}

    




