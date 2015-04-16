<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Noul_Mondeo extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Noul Mondeo', 'Ford AutoTechnic')
            ->build('promotii/noul_mondeo');
    }
}