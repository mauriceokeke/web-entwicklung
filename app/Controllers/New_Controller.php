<?php

namespace App\Controllers;

class New_Controller extends BaseController
{
    public function index(): string
    {
        return view('pages/Startseite');

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
