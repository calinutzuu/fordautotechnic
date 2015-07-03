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

    public function oferta_speciala()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Transit Courier - Oferta Speciala Transit Courier', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/transit_courier/oferta_speciala');
    }

    public function prezentare_generala()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Transit Courier - Prezentare Generala', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/transit_courier/prezentare_generala');
    }

    public function design()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Transit Courier - Design', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/transit_courier/design');
    }

    public function experienta_la_volan()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Transit Courier - Experienta la Volan', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/transit_courier/experienta_la_volan');
    }

    public function utilitate_si_costuri()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Transit Courier - Utilitate si Costuri', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/transit_courier/utilitate_si_costuri');
    }

    public function performanta()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Transit Courier - Performanta si Eficienta', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/transit_courier/performanta');
    }

    public function siguranta()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Transit Courier - Siguranta si Securitate', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/transit_courier/siguranta');
    }

    public function stiluri_de_caroserie()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Transit Courier - Stiluri de Caroserie', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/transit_courier/stiluri_de_caroserie');
    }

    public function modele()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Transit Courier - Modele', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/transit_courier/modele');
    }
}