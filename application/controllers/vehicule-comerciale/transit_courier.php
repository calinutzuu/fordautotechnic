<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Transit_Courier extends CI_Controller
{
    public function index()
    {
        $this->template
            ->title('Noul Transit Courier', 'Ford AutoTechnic')
            ->build('vehicule-comerciale/transit_courier');
    }
}