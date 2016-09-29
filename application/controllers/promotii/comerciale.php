<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class comerciale extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('comerciale', 'Ford AutoTechnic')
            ->build('promotii/comerciale');
    }

    public function noul_ranger()
    {
        $this->template
            ->set_layout('promotii')
            ->title('NoulRanger', 'Ford AutoTechnic')
            ->build('promotii/comerciale/noul_ranger');
    }
}
