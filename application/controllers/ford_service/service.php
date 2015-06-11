<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class service extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Ford Service - Service', 'Ford AutoTechnic')
            ->build('ford_service/service');
    }
}