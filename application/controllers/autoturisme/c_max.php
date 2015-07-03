<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class c_max extends CI_Controller
{
    public function index()
    {
        $this->template
            ->title('Noul Ford C-Max', 'Ford AutoTechnic')
            ->build('autoturisme/c_max');
    }

    public function prezentare()
    {
        $this->template
            ->title('Noul Ford C-Max - Prezentare generala', 'Ford AutoTechnic')
            ->build('autoturisme/c_max/prezentare');
    }

    public function preturi_si_promotii()
    {
        $this->template
            ->title('Noul Ford C-Max - Preturi si promotii', 'Ford AutoTechnic')
            ->build('autoturisme/c_max/preturi_si_promotii');
    }

    public function design()
    {
        $this->template
            ->title('Noul Ford C-Max - Design', 'Ford AutoTechnic')
            ->build('autoturisme/c_max/design');
    }

    public function caracteristici()
    {
        $this->template
            ->title('Noul Ford C-Max - Caracteristici', 'Ford AutoTechnic')
            ->build('autoturisme/c_max/caracteristici');
    }
}

