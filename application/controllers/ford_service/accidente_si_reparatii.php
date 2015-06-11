<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class accidente_si_reparatii extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Ford Service - Accidente si Reparatii', 'Ford AutoTechnic')
            ->build('ford_service/accidente_si_reparatii');
    }
}