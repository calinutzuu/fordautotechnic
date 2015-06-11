<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class leasing_financiar extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Finantare - Leasing financiar', 'Ford AutoTechnic')
            ->build('ford_leasing/leasing_financiar');
    }
}