<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Prezentare extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Prezentare', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/prezentare');
    }

}