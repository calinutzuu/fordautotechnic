<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ford_service_app extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Ford Service - Ford Service App', 'Ford AutoTechnic')
            ->build('ford_service/ford_service_app');
    }
}