<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class noul_ford_transit extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Ford Transit', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/noul_ford_transit');
    }

    public function design()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Ford Transit - Design', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/noul_ford_transit/design');
    }

}