<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Accesorii extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Ford Service - Accesorii', 'Ford AutoTechnic')
            ->build('ford_service/accesorii');
    }
}