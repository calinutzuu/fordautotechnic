<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class intrebari extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Ford Service - Intrebari Frecvente', 'Ford AutoTechnic')
            ->build('ford_service/intrebari');
    }
}