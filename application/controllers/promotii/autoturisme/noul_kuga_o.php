<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class noul_kuga_o extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('NoulKUGA', 'Ford AutoTechnic')
            ->build('promotii/autoturisme/noul_kuga_o');
    }
}