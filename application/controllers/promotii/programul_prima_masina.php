<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Programul_Prima_Masina extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Programul Prima Masina', 'Ford AutoTechnic')
            ->build('promotii/programul_prima_masina');
    }
}