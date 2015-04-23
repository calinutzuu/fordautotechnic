<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class noul_tourneo_custom extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Tourneo Custom', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/noul_tourneo_custom');
    }

    public function prezentare_generala()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Tourneo Custom - Prezentare Generala', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/noul_tourneo_custom/prezentare_generala');
    }

    public function design()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Tourneo Custom - Design', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/noul_tourneo_custom/design');
    }

    public function experienta_la_volan()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Tourneo Custom - Experienta la Volan', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/noul_tourneo_custom/experienta_la_volan');
    }

    public function performanta()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Tourneo Custom - Performanta si Eficienta', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/noul_tourneo_custom/performanta');
    }

    public function siguranta()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Tourneo Custom - Siguranta si Securitate', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/noul_tourneo_custom/siguranta');
    }

    public function variante_de_caroserie()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Tourneo Custom - Variante De Caroserie', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/noul_tourneo_custom/variante_de_caroserie');
    }

    public function modele()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Tourneo Custom - Modele', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/noul_tourneo_custom/modele');
    }

    public function lista()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Tourneo Custom - Lista de Preturi', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/noul_tourneo_custom/lista');
    }
}