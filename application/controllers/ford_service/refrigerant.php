<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class refrigerant extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Ford Service - Refrigerant_R134a', 'Ford AutoTechnic')
            ->build('ford_service/refrigerant');
    }
}