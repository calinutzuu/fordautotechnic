<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class noul_s_max extends CI_Controller
{
    public function index()
    {
        $this->template
            ->title('Noul SMax', 'Ford AutoTechnic')
            ->build('autoturisme/noul_s_max');
    }

    public function prezentare()
    {
        $this->template
            ->title('Noul SMax', 'Ford AutoTechnic')
            ->build('autoturisme/noul_s_max/prezentare');
    }

    public function preturi_si_promotii()
    {
        $this->template
            ->title('Noul SMax', 'Ford AutoTechnic')
            ->build('autoturisme/noul_s_max/preturi_si_promotii');
    }

    public function design()
    {
        $this->template
            ->title('Noul SMax', 'Ford AutoTechnic')
            ->build('autoturisme/noul_s_max/design');
    }

    public function caracteristici()
    {
        $this->template
            ->title('Noul SMax', 'Ford AutoTechnic')
            ->build('autoturisme/noul_s_max/caracteristici');
    }

    public function s_max_vignale()
    {
        $this->template
            ->title('Noul SMax', 'Ford AutoTechnic')
            ->build('autoturisme/noul_s_max/s_max_vignale');
    }

}

