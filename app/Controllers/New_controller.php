<?php

namespace App\Controllers;
use CodeIgniter\Controller;
class New_controller extends BaseController
{
    public function Index()
    {
        echo view('pages/Startseite');

    }

    public function Spalten() {
        echo view('pages/Spalten');
    }

    public function NeueSpalten() {
        echo view('pages/NeueSpalten');
    }


    public function viewGruppennummer() {
        var_dump('08');
    }
}
