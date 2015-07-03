<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Focus_ST extends CI_Controller
{
    public function index()
    {
        $this->template
            ->title('Ford Focus ST', 'Ford AutoTechnic')
            ->build('autoturisme/focus_st');
    }

    public function prezentare_generala()
    {
        $this->template
            ->title('Ford Focus ST - Prezentare generala', 'Ford AutoTechnic')
            ->build('autoturisme/focus_st/prezentare_generala');
    }

    public function design()
    {
        $this->template
            ->title('Ford Focus ST - Design', 'Ford AutoTechnic')
            ->build('autoturisme/focus_st/design');
    }

    public function experienta_la_volan()
    {
        $this->template
            ->title('Ford Focus ST - Experien&#355;a la volan', 'Ford AutoTechnic')
            ->build('autoturisme/focus_st/experienta_la_volan');
    }

    public function preturi_si_promotii()
    {
        $this->template
            ->title('Ford Focus ST - Preturi si promotii', 'Ford AutoTechnic')
            ->build('autoturisme/focus_st/preturi_si_promotii');
    }

    public function performanta()
    {
        $this->template
            ->title('Ford Focus ST - Performanta', 'Ford AutoTechnic')
            ->build('autoturisme/focus_st/performanta');
    }
    public function siguranta()
    {
        $this->template
            ->title('Ford Focus ST - Siguranta', 'Ford AutoTechnic')
            ->build('autoturisme/focus_st/siguranta');
    }
}

