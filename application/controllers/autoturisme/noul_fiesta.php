<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class noul_fiesta extends CI_Controller
{
    public function index()
    {
        $this->template
            ->title('Noul Fiesta', 'Ford AutoTechnic')
            ->build('autoturisme/noul_fiesta');
    }

    public function prezentare()
    {
        $this->template
            ->title('Noul Fiesta', 'Ford AutoTechnic')
            ->build('autoturisme/noul_fiesta/prezentare');
    }

    public function design()
    {
        $this->template
            ->title('Noul Fiesta', 'Ford AutoTechnic')
            ->build('autoturisme/noul_fiesta/design');
    }

    public function caracteristici()
    {
        $this->template
            ->title('Noul Fiesta', 'Ford AutoTechnic')
            ->build('autoturisme/noul_fiesta/caracteristici');
    }

    public function gama_de_modele()
    {
        $this->template
            ->title('Noul Fiesta', 'Ford AutoTechnic')
            ->build('autoturisme/noul_fiesta/gama_de_modele');
    }


}

