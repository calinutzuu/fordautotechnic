<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ford_lifestyle extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Ford Service - Ford Lifestyle Collection', 'Ford AutoTechnic')
            ->build('ford_service/ford_lifestyle');
    }
}