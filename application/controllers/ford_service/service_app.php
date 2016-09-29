<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class service_app extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('FordServiceApp', 'Ford AutoTechnic')
            ->build('ford_service/service_app');
    }
}