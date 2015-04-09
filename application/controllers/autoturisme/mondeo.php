<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mondeo extends CI_Controller
{
    public function index()
    {
        $this->template
            ->title('Mondeo', 'Ford AutoTechnic')
            ->build('autoturisme/mondeo');
    }

    public function design()
    {
        $this->template
            ->title('Mondeo - Design', 'Ford AutoTechnic')
            ->build('autoturisme/mondeo/design');
    }

    public function performanta()
    {
        $this->template
            ->title('Mondeo - Performanta', 'Ford AutoTechnic')
            ->build('autoturisme/mondeo/performanta');
    }

    public function experienta_la_volan()
    {
        $this->template
            ->title('Mondeo - Experien&#355;a la volan', 'Ford AutoTechnic')
            ->build('autoturisme/mondeo/experienta_la_volan');
    }

    public function siguranta()
    {
        $this->template
            ->title('Mondeo - Siguranta si securitate', 'Ford AutoTechnic')
            ->build('autoturisme/mondeo/siguranta');
    }
}

