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

    public function experienta_la_volan()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Ford Transit - Experienta La Volan', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/noul_ford_transit/experienta_la_volan');
    }

    public function utilitate()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Ford Transit - Utilitate si Costuri', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/noul_ford_transit/utilitate');
    }

    public function performanta()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Ford Transit - Performanta si Eficienta', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/noul_ford_transit/performanta');
    }

    public function siguranta()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Ford Transit - Siguranta si Securitate', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/noul_ford_transit/siguranta');
    }

    public function stiluri_de_caroserie()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Ford Transit - Stiluri de Caroserie', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/noul_ford_transit/stiluri_de_caroserie');
    }

    public function modele()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Ford Transit - Modele si dotari optionale', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/noul_ford_transit/modele');
    }
}