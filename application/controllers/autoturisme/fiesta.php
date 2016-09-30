<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class fiesta extends CI_Controller
{
    public function index()
    {
        $this->template
            ->title('Fiesta', 'Ford AutoTechnic')
            ->build('autoturisme/fiesta');
    }

    public function prezentare()
    {
        $this->template
            ->title('Fiesta', 'Ford AutoTechnic')
            ->build('autoturisme/fiesta/prezentare');
    }


    public function caracteristici()
    {
        $this->template
            ->title('Fiesta', 'Ford AutoTechnic')
            ->build('autoturisme/fiesta/caracteristici');
    }

    public function accesorii()
    {
        $this->template
            ->title('Fiesta - Accesorii', 'Ford AutoTechnic')
            ->build('autoturisme/fiesta/accesorii');
    }

    public function preturi_si_promotii()
    {
        $this->template
            ->title('Noua Fiesta - Preturi si promotii', 'Ford AutoTechnic')
            ->build('autoturisme/fiesta/preturi_si_promotii');
    }

}

