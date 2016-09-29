<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Noul_mustang extends CI_Controller
{
    public function index()
    {
        $this->template
            ->title('Noul Ford Mustang 2015', 'Ford AutoTechnic')
            ->build('autoturisme/noul_mustang');
    }

    public function prezentare()
    {
        $this->template
            ->title('Noul Ford Mustang 2015 - Prezentare Generala', 'Ford AutoTechnic')
            ->build('autoturisme/noul_mustang/prezentare');
    }

    public function preturi_si_promotii()
    {
        $this->template
            ->title('Noul Mustang 2015 - Experien&#355;a la volan', 'Ford AutoTechnic')
            ->build('autoturisme/noul_mustang/preturi_si_promotii');
    }

    public function galerie()
    {
        $this->template
            ->title('Noul Mustang 2015 - Performanta', 'Ford AutoTechnic')
            ->build('autoturisme/noul_mustang/galerie');
    }
    public function caracteristici()
    {
        $this->template
            ->title('Noul Mustang 2015 - Siguranta si securitate', 'Ford AutoTechnic')
            ->build('autoturisme/noul_mustang/caracteristici');
    }
}

