<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Noul_galaxy extends CI_Controller
{
    public function index()
    {
        $this->template
            ->title('Noul Galaxy', 'Ford AutoTechnic')
            ->build('autoturisme/noul_galaxy');
    }

    public function prezentare()
    {
        $this->template
            ->title('Noul Galaxy - Prezentare Generala', 'Ford AutoTechnic')
            ->build('autoturisme/noul_galaxy/prezentare');
    }

    public function preturi_si_promotii()
    {
        $this->template
            ->title('Noul Galaxy - Experien&#355;a la volan', 'Ford AutoTechnic')
            ->build('autoturisme/noul_galaxy/preturi_si_promotii');
    }

    public function design()
    {
        $this->template
            ->title('Noul Galaxy - Performanta', 'Ford AutoTechnic')
            ->build('autoturisme/noul_galaxy/design');
    }
    public function caracteristici()
    {
        $this->template
            ->title('Noul Galaxy - Caracteristici', 'Ford AutoTechnic')
            ->build('autoturisme/noul_galaxy/caracteristici');
    }
}

