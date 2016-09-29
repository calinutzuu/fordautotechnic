<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class focus_rs extends CI_Controller
{
    public function index()
    {
        $this->template
            ->title('Ford Focus RS', 'Ford AutoTechnic')
            ->build('autoturisme/focus_rs');
    }

    public function prezentare_generala()
    {
        $this->template
            ->title('Ford Focus RS - Prezentare generala', 'Ford AutoTechnic')
            ->build('autoturisme/focus_rs/prezentare_generala');
    }

    public function preturi_si_promotii()
    {
        $this->template
            ->title('PreturiSiPromotii', 'Ford AutoTechnic')
            ->build('autoturisme/focus_rs/preturi_si_promotii');
    }

    public function design()
    {
        $this->template
            ->title('Ford Focus RS - Design', 'Ford AutoTechnic')
            ->build('autoturisme/focus_rs/design');
    }

    public function caracteriRSici()
    {
        $this->template
            ->title('Ford Focus RS - CaracteriRSici', 'Ford AutoTechnic')
            ->build('autoturisme/focus_rs/caracteriRSici');
    }

    public function accesorii()
    {
        $this->template
            ->title('Ford Focus RS - CaracteriRSici', 'Ford AutoTechnic')
            ->build('autoturisme/focus_rs/accesorii');
    }


}

