<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class noua_familie_tourneo extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noua Familie Tourneo', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/noua_familie_tourneo');
    }

}