<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Focus_ST extends CI_Controller
{
    public function index()
    {
        $this->template
            ->title('Ford Focus ST', 'Ford AutoTechnic')
            ->build('autoturisme/focus_st');
    }

    public function prezentare()
    {
        $this->template
            ->title('Ford Focus ST - Prezentare generala', 'Ford AutoTechnic')
            ->build('autoturisme/focus_st/prezentare');
    }

    public function design()
    {
        $this->template
            ->title('Ford Focus ST - Design', 'Ford AutoTechnic')
            ->build('autoturisme/focus_st/design');
    }

    public function caracteristici()
    {
        $this->template
            ->title('Ford Focus ST - Caracteristici', 'Ford AutoTechnic')
            ->build('autoturisme/focus_st/caracteristici');
    }


}

