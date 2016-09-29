<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class focus extends CI_Controller
{
    public function index()
    {
        $this->template
            ->title('Ford Focus', 'Ford AutoTechnic')
            ->build('autoturisme/focus');
    }

    public function prezentare_generala()
    {
        $this->template
            ->title('Focus - Prezentare Generala', 'Ford AutoTechnic')
            ->build('autoturisme/focus/prezentare_generala');
    }

    public function preturi_si_promotii()
    {
        $this->template
            ->title('Focus - Preturi si promotii', 'Ford AutoTechnic')
            ->build('autoturisme/focus/preturi_si_promotii');
    }

    public function design()
    {
        $this->template
            ->title('Focus - Design', 'Ford AutoTechnic')
            ->build('autoturisme/focus/design');
    }

    public function caracteristici()
    {
        $this->template
            ->title('Focus - Caracteristici', 'Ford AutoTechnic')
            ->build('autoturisme/focus/caracteristici');
    }
}