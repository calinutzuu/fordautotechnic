<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Noul_Tourneo_Connect extends CI_Controller
{
    public function index()
    {
        $this->template
            ->title('Noul Tourneo Connect', 'Ford AutoTechnic')
            ->build('autoturisme/noul_tourneo_connect');
    }

    public function design()
    {
        $this->template
            ->title('Noul Tourneo Connect - Design', 'Ford AutoTechnic')
            ->build('autoturisme/noul_tourneo_connect/design');
    }

    public function experienta_la_volan()
    {
        $this->template
            ->title('Noul Tourneo Connect - Experien&#355;a la volan', 'Ford AutoTechnic')
            ->build('autoturisme/noul_tourneo_connect/experienta_la_volan');
    }

    public function performanta()
    {
        $this->template
            ->title('Noul Tourneo Connect - Performanta', 'Ford AutoTechnic')
            ->build('autoturisme/noul_tourneo_connect/performanta');
    }

    public function siguranta()
    {
        $this->template
            ->title('Noul Tourneo Connect - Siguranta si securitate', 'Ford AutoTechnic')
            ->build('autoturisme/noul_tourneo_connect/siguranta');
    }

    public function stiluri_de_caroserie()
    {
        $this->template
            ->title('Noul Tourneo Connect - Stiluri de Caroserie', 'Ford AutoTechnic')
            ->build('autoturisme/noul_tourneo_connect/stiluri_de_caroserie');
    }
}

