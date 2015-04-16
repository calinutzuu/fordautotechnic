<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Prima_Masina extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Prima Masina', 'Ford AutoTechnic')
            ->build('promotii/prima_masina');
    }
}