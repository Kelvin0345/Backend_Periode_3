<?php

class ZangeressenController extends BaseController
{
    private $zangeressenModel;

    public function __construct()
    {
        $this->zangeressenModel = $this->model('Zangeressen');
    }

    public function index($display = 'none', $message = '')
    {
        $result = $this->zangeressenModel->getAllZangeressen();

        $data = [
            'title' => 'Overzicht Zangeressen',
            'display' => $display,
            'message' => $message,
            'result' => $result
        ];

        $this->view('zangeressen/index', $data);
    }

    public function delete($Id)
    {
        $this->zangeressenModel->delete($Id);

        header('Refresh:3 ; url=' . URLROOT . '/ZangeressenController/index');

        $this->index('flex', 'Record is verwijderd');
    }

    public function create()
    {
        $data = [
            'title' => 'Nieuwe zangeres toevoegen',
            'display' => 'none',
            'message' => '',
            'errors' => []
        ];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $errors = [];

            if (empty(trim($_POST['naam']))) {
                $errors['naam'] = 'Voer een naam in';
            }

            if (empty(trim($_POST['vermogen']))) {
                $errors['vermogen'] = 'Voer een vermogen in';
            }

            if (empty(trim($_POST['land']))) {
                $errors['land'] = 'Voer een land in';
            }

            if (empty(trim($_POST['leeftijd']))) {
                $errors['leeftijd'] = 'Voer een leeftijd in';
            }

            if (empty(trim($_POST['bekendstenummer']))) {
                $errors['bekendstenummer'] = 'Voer bekendste nummer in';
            }

            if (empty(trim($_POST['debuutjaar']))) {
                $errors['debuutjaar'] = 'Voer debuutjaar in';
            }

            if (!empty($errors)) {
                $data['errors'] = $errors;
            } else {
                $data['display'] = 'flex';
                $data['message'] = 'De gegevens zijn opgeslagen';

                $this->zangeressenModel->create($_POST);

                header('Refresh: 3; URL=' . URLROOT . '/ZangeressenController/index');
            }
        }

        $this->view('zangeressen/create', $data);
    }

    public function update($id = NULL)
    {
        $data = [
            'title' => 'Wijzig zangeres',
            'display' => 'none',
            'message' => '',
            'errors' => []
        ];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $errors = [];

            if (empty(trim($_POST['naam']))) {
                $errors['naam'] = 'Voer een naam in';
            }

            if (empty(trim($_POST['vermogen']))) {
                $errors['vermogen'] = 'Voer een vermogen in';
            }

            if (empty(trim($_POST['land']))) {
                $errors['land'] = 'Voer een land in';
            }

            if (empty(trim($_POST['leeftijd']))) {
                $errors['leeftijd'] = 'Voer een leeftijd in';
            }

            if (empty(trim($_POST['bekendstenummer']))) {
                $errors['bekendstenummer'] = 'Voer bekendste nummer in';
            }

            if (empty(trim($_POST['debuutjaar']))) {
                $errors['debuutjaar'] = 'Voer debuutjaar in';
            }

            if (!empty($errors)) {
                $data['errors'] = $errors;
            } else {

                $this->zangeressenModel->updateZangeres($_POST);

                $data['display'] = 'flex';
                $data['message'] = 'Het record is succesvol opgeslagen';
                $data['color'] = 'success';

                header("Refresh:3; url='" . URLROOT . "/ZangeressenController/index'");
            }
        }

        $data['zangeres'] = $this->zangeressenModel->getZangeresById($id);

        $this->view('zangeressen/update', $data);
    }
}