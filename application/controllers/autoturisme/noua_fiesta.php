<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Noua_Fiesta extends CI_Controller
{
    public function index()
    {
        $this->template
            ->title('Noua Fiesta', 'Ford AutoTechnic')
            ->build('autoturisme/noua_fiesta');
    }

    public function prezentare()
    {
        $this->template
            ->title('Noua Fiesta', 'Ford AutoTechnic')
            ->build('autoturisme/noua_fiesta/prezentare');
    }

    public function design()
    {
        $this->template
            ->title('Noua Fiesta - Design', 'Ford AutoTechnic')
            ->build('autoturisme/noua_fiesta/design');
    }

    public function experienta_la_volan()
    {
        $this->template
            ->title('Noua Fiesta - Experien&#355;a la volan', 'Ford AutoTechnic')
            ->build('autoturisme/noua_fiesta/experienta_la_volan');
    }

    public function preturi_si_promotii()
    {
        $this->template
            ->title('Noua Fiesta - Preturi si promotii', 'Ford AutoTechnic')
            ->build('autoturisme/noua_fiesta/preturi_si_promotii');
    }

    public function performanta()
    {
        $this->template
            ->title('Noua Fiesta - Performanta', 'Ford AutoTechnic')
            ->build('autoturisme/noua_fiesta/performanta');
    }
    public function siguranta_si_securitate()
    {
        $this->template
            ->title('Noua Fiesta - Siguranta si securitate', 'Ford AutoTechnic')
            ->build('autoturisme/noua_fiesta/siguranta_si_securitate');
    }
}

