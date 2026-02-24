<?php

class SneakersController extends BaseController
{
    private $SneakersModel;
    
    public function __construct()
    {
        $this->SneakersModel = $this->model('Sneakers');
    }
    



    public function index()
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



}

    




