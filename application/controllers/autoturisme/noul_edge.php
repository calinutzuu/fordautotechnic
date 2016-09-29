<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class noul_edge extends CI_Controller
{
    public function index()
    {
        $this->template
            ->title('Noul Edge', 'Ford AutoTechnic')
            ->build('autoturisme/noul_edge');
    }

    public function prezentare()
    {
        $this->template
            ->title('Noul Edge', 'Ford AutoTechnic')
            ->build('autoturisme/noul_edge/prezentare');
    }

    public function preturi_si_promotii()
    {
        $this->template
            ->title('Noul Edge', 'Ford AutoTechnic')
            ->build('autoturisme/noul_edge/preturi_si_promotii');
    }

    public function design()
    {
        $this->template
            ->title('Noul Edge', 'Ford AutoTechnic')
            ->build('autoturisme/noul_edge/design');
    }

    public function caracteristici()
    {
        $this->template
            ->title('Noul Edge', 'Ford AutoTechnic')
            ->build('autoturisme/noul_edge/caracteristici');
    }

    public function edge_vignale()
    {
        $this->template
            ->title('Noul Edge', 'Ford AutoTechnic')
            ->build('autoturisme/noul_edge/edge_vignale');
    }

    public function models()
    {
        $this->template
            ->title('Noul Edge', 'Ford AutoTechnic')
            ->build('autoturisme/noul_edge/models');
    }

}

