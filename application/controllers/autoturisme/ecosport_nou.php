<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ecosport_nou extends CI_Controller
{
    public function index()
    {
        $this->template
            ->title('NoulEcosport', 'Ford AutoTechnic')
            ->build('autoturisme/ecosport_nou');
    }

    public function prezentare()
    {
        $this->template
            ->title('NoulEcosport - Prezentare generala', 'Ford AutoTechnic')
            ->build('autoturisme/ecosport_nou/prezentare_generala');
    }

    public function preturi_si_promotii()
    {
        $this->template
            ->title('NoulEcosport - Preturi si promotii', 'Ford AutoTechnic')
            ->build('autoturisme/ecosport_nou/preturi_si_promotii');
    }

    public function design()
    {
        $this->template
            ->title('NoulEcosport - Design', 'Ford AutoTechnic')
            ->build('autoturisme/ecosport_nou/design');
    }

    public function caracteristici()
    {
        $this->template
            ->title('NoulEcosport - Caracteristici', 'Ford AutoTechnic')
            ->build('autoturisme/ecosport_nou/caracteristici');
    }
}

