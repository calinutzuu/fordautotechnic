<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Transit_connect extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('vehicule_comerciale')
            ->title('Transit Connect', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/transit_connect');
    }

}