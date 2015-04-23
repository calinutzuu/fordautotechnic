<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class noul_ranger extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Ford Ranger', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/noul_ranger');
    }

    public function prezentare()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Ford Ranger - Prezentare Generala', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/noul_ranger/prezentare');
    }

    public function design()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Ford Ranger - Design', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/noul_ranger/design');
    }

    public function experienta_condusului()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Ford Ranger - Experienta Condusului', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/noul_ranger/experienta_condusului');
    }

    public function utilitate()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Ford Ranger - Utilitate', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/noul_ranger/utilitate');
    }

    public function performanta()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Ford Ranger - Performanta si Utilitate', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/noul_ranger/performanta');
    }

    public function siguranta()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Ford Ranger - Siguranta si Securitate', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/noul_ranger/siguranta');
    }

    public function caroserie()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Ford Ranger - Stiluri de caroserie si capacitate', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/noul_ranger/caroserie');
    }

    public function materiale()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noul Ford Ranger - Materiale Descarcabile', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/noul_ranger/materiale');
    }

}