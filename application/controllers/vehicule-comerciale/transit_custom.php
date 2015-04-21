<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class transit_custom extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Transit Custom', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/transit_custom');
    }

    public function design()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Transit Custom - Design', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/transit_custom/design');
    }

    public function experienta_la_volan()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Transit Custom - Experienta la Volan', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/transit_custom/experienta_la_volan');
    }

}