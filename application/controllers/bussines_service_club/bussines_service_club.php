<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class bussines_service_club extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Bussines Service Club', 'Ford AutoTechnic')
            ->build('bussines_service_club/bussines_service_club');
    }
}