<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ford_asistenta_12 extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Ford Service - Ford Asistenta 12', 'Ford AutoTechnic')
            ->build('ford_service/ford_asistenta_12');
    }
}