<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Transit_Courier extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Transit Courier', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/transit_courier');
    }

    public function design()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Transit Courier - Design', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/transit_courier/design');
    }
}