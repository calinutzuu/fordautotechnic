<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Oferta_Transit_Courier extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Oferta Speciala Transit Courier', 'Ford AutoTechnic')
            ->build('promotii/oferta_transit_courier');
    }
}