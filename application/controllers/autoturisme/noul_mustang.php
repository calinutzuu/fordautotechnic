<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Noul_mustang extends CI_Controller
{
    public function index()
    {
        $this->template
            ->title('Noul Ford Mustang 2015', 'Ford AutoTechnic')
            ->build('autoturisme/noul_mustang');
    }

    public function design()
    {
        $this->template
            ->title('Noul Mustang 2015 - Design', 'Ford AutoTechnic')
            ->build('autoturisme/noul_mustang/design');
    }

    public function experienta_la_volan()
    {
        $this->template
            ->title('Noul Mustang 2015 - Experien&#355;a la volan', 'Ford AutoTechnic')
            ->build('autoturisme/noul_mustang/experienta_la_volan');
    }

    public function performanta()
    {
        $this->template
            ->title('Noul Mustang 2015 - Performanta', 'Ford AutoTechnic')
            ->build('autoturisme/noul_mustang/performanta');
    }
    public function siguranta_si_securitate()
    {
        $this->template
            ->title('Noul Mustang 2015 - Siguranta si securitate', 'Ford AutoTechnic')
            ->build('autoturisme/noul_mustang/siguranta_si_securitate');
    }
}

