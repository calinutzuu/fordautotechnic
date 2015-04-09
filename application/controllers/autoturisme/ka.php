<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ka extends CI_Controller
{
    public function index()
    {
        $this->template
            ->title('Ford Ka', 'Ford AutoTechnic')
            ->build('autoturisme/ka');
    }

    public function design_interior()
    {
        $this->template
            ->title('Ford Ka - Design Interior', 'Ford AutoTechnic')
            ->build('autoturisme/ka/design_interior');
    }

    public function design_exterior()
    {
        $this->template
            ->title('Ford Ka - Design Exterior', 'Ford AutoTechnic')
            ->build('autoturisme/ka/design_exterior');
    }

    public function materiale_descarcabile()
    {
        $this->template
            ->title('Ford Ka - Materiale Descarcabile', 'Ford AutoTechnic')
            ->build('autoturisme/ka/materiale_descarcabile');
    }

}

