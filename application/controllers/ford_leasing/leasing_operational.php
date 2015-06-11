<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class leasing_operational extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Finantare - Leasing operational', 'Ford AutoTechnic')
            ->build('ford_leasing/leasing_operational');
    }
}