<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class C_MAX extends CI_Controller
{
    public function index()
    {
        $this->template
            ->title('Ford C-Max Grand C-Max', 'Ford AutoTechnic')
            ->build('autoturisme/c_max');
    }

    public function design_exterior()
    {
        $this->template
            ->title('Ford C-Max Grand C-Max - Design Exterior', 'Ford AutoTechnic')
            ->build('autoturisme/c_max/design_exterior');
    }

    public function design_interior()
    {
        $this->template
            ->title('Ford C-Max Grand C-Max - Design Interior', 'Ford AutoTechnic')
            ->build('autoturisme/c_max/design_interior');
    }

        public function materiale_descarcabile()
    {
        $this->template
            ->title('Ford C-Max Grand C-Max - Materiale Descarcabile', 'Ford AutoTechnic')
            ->build('autoturisme/c_max/materiale_descarcabile');
    }

    public function tehnologii()
    {
        $this->template
            ->title('Ford C-Max Grand C-Max - Tehnologii', 'Ford AutoTechnic')
            ->build('autoturisme/c_max/tehnologii');
    }

    public function siguranta_si_securitate()
    {
        $this->template
            ->title('Ford C-Max Grand C-Max - Siguranta si Securitate', 'Ford AutoTechnic')
            ->build('autoturisme/c_max/siguranta_si_securitate');
    }

    public function performanta()
    {
        $this->template
            ->title('Ford C-Max Grand C-Max - Performanta', 'Ford AutoTechnic')
            ->build('autoturisme/c_max/performanta');
    }

    public function culori_si_tapiterie()
    {
        $this->template
            ->title('Ford C-Max Grand C-Max - Culori si Tapiterie', 'Ford AutoTechnic')
            ->build('autoturisme/c_max/culori_si_tapiterie');
    }
}

