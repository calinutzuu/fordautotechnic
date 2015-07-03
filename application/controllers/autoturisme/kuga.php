<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class kuga extends CI_Controller
{
    public function index()
    {
        $this->template
            ->title('Ford Kuga', 'Ford AutoTechnic')
            ->build('autoturisme/kuga');
    }

    public function design()
    {
        $this->template
            ->title('Ford Kuga - Design', 'Ford AutoTechnic')
            ->build('autoturisme/kuga/design');
    }

    public function prezentare()
    {
        $this->template
            ->title('Ford Kuga - Prezentare Generala', 'Ford AutoTechnic')
            ->build('autoturisme/kuga/prezentare');
    }

    public function experienta_la_volan()
    {
        $this->template
            ->title('Ford Kuga - Experienta la volan', 'Ford AutoTechnic')
            ->build('autoturisme/kuga/experienta_la_volan');
    }

    public function preturi_si_promotii()
    {
        $this->template
            ->title('Ford Kuga - Preturi si promotii', 'Ford AutoTechnic')
            ->build('autoturisme/kuga/preturi_si_promotii');
    }

    public function performanta_si_eficienta()
    {
        $this->template
            ->title('Ford Kuga - Performanta si eficienta', 'Ford AutoTechnic')
            ->build('autoturisme/kuga/performanta_si_eficienta');
    }

    public function siguranta()
    {
        $this->template
            ->title('Ford Kuga - Performanta si eficienta', 'Ford AutoTechnic')
            ->build('autoturisme/kuga/siguranta');
    }

}

