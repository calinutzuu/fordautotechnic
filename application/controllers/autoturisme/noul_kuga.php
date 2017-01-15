<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class noul_kuga extends CI_Controller
{
    public function index()
    {
        $this->template
            ->title('Noul Kuga', 'Ford AutoTechnic')
            ->build('autoturisme/noul_kuga');
    }

    public function prezentare_generala()
    {
        $this->template
            ->title('Noul Kuga - Prezentare generala', 'Ford AutoTechnic')
            ->build('autoturisme/noul_kuga/prezentare_generala');
    }

    public function preturi_si_promotii()
    {
        $this->template
            ->title('Noul Kuga - Prezentare generala', 'Ford AutoTechnic')
            ->build('autoturisme/noul_kuga/preturi_si_promotii');
    }

    public function st_line()
    {
        $this->template
            ->title('Noul Kuga - ST Line', 'Ford AutoTechnic')
            ->build('autoturisme/noul_kuga/st_line');
    }

    public function design()
    {
        $this->template
            ->title('Noul Kuga - Design', 'Ford AutoTechnic')
            ->build('autoturisme/noul_kuga/galerie');
    }

    public function caracteristici()
    {
        $this->template
            ->title('Noul Kuga - CaracteriRSici', 'Ford AutoTechnic')
            ->build('autoturisme/noul_kuga/caracteristici');
    }

    public function kuga_vignale()
    {
        $this->template
            ->title('Noul Kuga - Vignale', 'Ford AutoTechnic')
            ->build('autoturisme/noul_kuga/kuga_vignale');
    }


}

