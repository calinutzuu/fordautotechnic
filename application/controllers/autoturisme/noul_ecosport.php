<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class noul_ecosport extends CI_Controller
{
    public function index()
    {
        $this->template
            ->title('Noul-EcoSport', 'Ford AutoTechnic')
            ->build('autoturisme/noul_ecosport');
    }

    public function prezentare()
    {
        $this->template
            ->title('Noul-EcoSport - Prezentare generala', 'Ford AutoTechnic')
            ->build('autoturisme/noul_ecosport/prezentare_generala');
    }

    public function preturi_si_promotii()
    {
        $this->template
            ->title('Noul-EcoSport - Preturi si promotii', 'Ford AutoTechnic')
            ->build('autoturisme/noul_ecosport/preturi_si_promotii');
    }

    public function design()
    {
        $this->template
            ->title('Noul-EcoSport - Design', 'Ford AutoTechnic')
            ->build('autoturisme/noul_ecosport/design');
    }

    public function caracteristici()
    {
        $this->template
            ->title('Noul-EcoSport - Caracteristici', 'Ford AutoTechnic')
            ->build('autoturisme/noul_ecosport/caracteristici');
    }
}

