<?php
namespace App\controllers;

use App\models\CepModel;

class CepController {
    public function handleRequest() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cep'])) {
            $cep = $_POST['cep'];
            $model = new CepModel();
            $data = $model->getCepData($cep);
            include 'app/views/result.php';
        } else {
            include 'app/views/cepForm.php';
        }
    }
}
