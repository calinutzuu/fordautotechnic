<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class transit_connect extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Transit Connect', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/transit_connect');
    }

    public function prezentare_generala()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Transit Connect - Prezentare Generala', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/transit_connect/prezentare_generala');
    }

    public function design()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Transit Connect - Design', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/transit_connect/design');
    }

    public function experienta_la_volan()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Transit Connect - Experienta la Volan', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/transit_connect/experienta_la_volan');
    }

    public function utilitate()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Transit Connect - Utilitate', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/transit_connect/utilitate');
    }

    public function performanta()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Transit Connect - Performanta si Eficienta', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/transit_connect/performanta');
    }

    public function siguranta()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Transit Connect - Siguranta si Securitate', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/transit_connect/siguranta');
    }

    public function variante_de_caroserie()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Transit Connect - Variante De Caroserie', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/transit_connect/variante_de_caroserie');
    }

    public function modele()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Transit Connect - Modele', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/transit_connect/modele');
    }

    public function liste_si_brosuri()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Transit Connect - Preturi Si Brosuri', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/transit_connect/liste_si_brosuri');
    }
}