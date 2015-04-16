<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Noua_Familie_Transit extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Noua Familie Transit', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/noua_familie_transit');
    }

}