<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Noul_ka_plus extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('NoulKAPlus', 'Ford AutoTechnic')
            ->build('promotii/autoturisme/noul_ka_plus');
    }
}