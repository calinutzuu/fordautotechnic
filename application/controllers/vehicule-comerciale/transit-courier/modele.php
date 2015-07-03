<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Modele extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Transit Courier - Modele', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/transit_courier/modele');
    }

    public function transit_courier()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Transit Courier - Modele', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/transit_courier/modele');
    }

    public function transit_courier_trend()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Transit Courier - Modele', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/transit_courier/modele');
    }
}