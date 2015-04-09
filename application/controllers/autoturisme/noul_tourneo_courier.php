<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Noul_Tourneo_Courier extends CI_Controller
{
    public function index()
    {
        $this->template
            ->title('Noul Tourneo Courier', 'Ford AutoTechnic')
            ->build('autoturisme/noul_tourneo_courier');
    }

    public function design()
    {
        $this->template
            ->title('Noul Tourneo Courier - Design', 'Ford AutoTechnic')
            ->build('autoturisme/noul_tourneo_courier/design');
    }

    public function experienta_la_volan()
    {
        $this->template
            ->title('Noul Tourneo Courier - Experien&#355;a la volan', 'Ford AutoTechnic')
            ->build('autoturisme/noul_tourneo_courier/experienta_la_volan');
    }

    public function performanta()
    {
        $this->template
            ->title('Noul Tourneo Courier - Performanta', 'Ford AutoTechnic')
            ->build('autoturisme/noul_tourneo_courier/performanta');
    }

    public function siguranta()
    {
        $this->template
            ->title('Noul Tourneo Courier - Siguranta si securitate', 'Ford AutoTechnic')
            ->build('autoturisme/noul_tourneo_courier/siguranta');
    }

}

