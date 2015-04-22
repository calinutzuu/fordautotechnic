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

    public function utilitate_si_costuri()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Transit Custom - Utilitate si Costuri', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/transit_custom/utilitate_si_costuri');
    }

    public function performanta()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Transit Custom - Performanta Si Eficienta', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/transit_custom/performanta');
    }

    public function siguranta()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Transit Custom - Siguranta si Securitate', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/transit_custom/siguranta');
    }

    public function variante_de_caroserie()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Transit Custom - Variante de Caroserie', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/transit_custom/variante_de_caroserie');
    }

    public function modele()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Transit Custom - Modele', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/transit_custom/modele');
    }

    public function lista()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Transit Custom - Lista Preturi', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/transit_custom/lista');
    }

}