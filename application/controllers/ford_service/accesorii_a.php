<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class accesorii_a extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Accesorii', 'Ford AutoTechnic')
            ->build('ford_service/accesorii_a');
    }
}