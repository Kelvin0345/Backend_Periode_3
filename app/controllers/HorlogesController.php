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



}

    




