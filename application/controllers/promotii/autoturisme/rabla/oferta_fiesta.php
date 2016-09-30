<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class oferta_fiesta extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('OfertaFiesta', 'Ford AutoTechnic')
            ->build('promotii/autoturisme/rabla/oferta_fiesta');
    }
}