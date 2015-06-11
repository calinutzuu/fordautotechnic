<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Blue_Service extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Ford Service - Blue Service', 'Ford AutoTechnic')
            ->build('ford_service/blue_service');
    }
}