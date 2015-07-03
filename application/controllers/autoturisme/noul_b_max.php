<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Noul_b_max extends CI_Controller
{
    public function index()
    {
        $this->prezentare();
    }

    public function prezentare()
    {
        $this->template
            ->title('Ingeniosul Ford B-MAX - Prezentare Generala', 'Ford AutoTehnic')
            ->build('autoturisme/noul_b_max/prezentare');
    }

    public function design()
    {
        $this->template
            ->title('Ingeniosul Ford B-MAX - Design', 'Ford AutoTechnic')
            ->build('autoturisme/noul_b_max/design');
    }

    public function experienta_la_volan()
    {
        $this->template
            ->title('Ingeniosul Ford B-MAX - Experien&#355;a la volan', 'Ford AutoTechnic')
            ->build('autoturisme/noul_b_max/experienta_la_volan');
    }

    public function preturi_si_promotii()
    {
        $this->template
            ->title('Ingeniosul Ford B-MAX - Preturi si promotii', 'Ford AutoTechnic')
            ->build('autoturisme/noul_b_max/preturi_si_promotii');
    }

    public function performanta()
    {
        $this->template
            ->title('Ingeniosul Ford B-MAX - Performanta', 'Ford AutoTechnic')
            ->build('autoturisme/noul_b_max/performanta');
    }
    public function siguranta()
    {
        $this->template
            ->title('Ingeniosul Ford B-MAX - Siguranta', 'Ford AutoTechnic')
            ->build('autoturisme/noul_b_max/siguranta');
    }
}

