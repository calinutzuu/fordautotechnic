<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class garantii extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Ford Service - Garantii si Revizii', 'Ford AutoTechnic')
            ->build('ford_service/garantii');
    }

    public function garantie_autovehicule_noi()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Ford Service - Garantii si Revizii', 'Ford AutoTechnic')
            ->build('ford_service/garantii/garantie_autovehicule_noi');
    }

    public function reparatii_neacoperite()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Ford Service - Reparatii Neacoperite', 'Ford AutoTechnic')
            ->build('ford_service/garantii/reparatii_neacoperite');
    }

    public function ford_protect()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Ford Service - Ford Protect', 'Ford AutoTechnic')
            ->build('ford_service/garantii/ford_protect');
    }

    public function ford_garantia_12()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Ford Service - Ford Garantia 12', 'Ford AutoTechnic')
            ->build('ford_service/garantii/ford_garantia_12');
    }

    public function revizii_ford_service()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Ford Service - Revizii Ford Service', 'Ford AutoTechnic')
            ->build('ford_service/garantii/revizii_ford_service');
    }

}