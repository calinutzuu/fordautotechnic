<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mondeo extends CI_Controller
{
    public function index()
    {
        $this->template
            ->title('Mondeo', 'Ford AutoTechnic')
            ->build('autoturisme/mondeo');
    }

    public function preturi_si_promotii()
    {
        $this->template
            ->title('Mondeo - Preturi si Promotii', 'Ford AutoTechnic')
            ->build('autoturisme/mondeo/preturi_si_promotii');
    }

    public function design()
    {
        $this->template
            ->title('Mondeo - Design', 'Ford AutoTechnic')
            ->build('autoturisme/mondeo/design');
    }

    public function performanta()
    {
        $this->template
            ->title('Mondeo - Performanta', 'Ford AutoTechnic')
            ->build('autoturisme/mondeo/performanta');
    }

    public function caracteristici()
    {
        $this->template
            ->title('Mondeo - Caracteristici', 'Ford AutoTechnic')
            ->build('autoturisme/mondeo/caracteristici');
    }

    public function vignale()
    {
        $this->template
            ->title('Mondeo - Vignale', 'Ford AutoTechnic')
            ->build('autoturisme/mondeo/vignale');
    }
}

