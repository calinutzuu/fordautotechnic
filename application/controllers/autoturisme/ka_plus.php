<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ka_Plus extends CI_Controller
{
    public function index()
    {
        $this->template
            ->title('Ford ka-plus', 'Ford AutoTechnic')
            ->build('autoturisme/ka-plus');
    }

    public function prezentare()
    {
        $this->template
            ->title('Ford ka-plus - Prezentare Generala', 'Ford AutoTechnic')
            ->build('autoturisme/ka-plus/prezentare');
    }

    public function galerie()
    {
        $this->template
            ->title('Ford ka-plus - Galerie', 'Ford AutoTechnic')
            ->build('autoturisme/ka-plus/galerie');
    }

    public function dotari()
    {
        $this->template
            ->title('Ford ka-plus - Dotari', 'Ford AutoTechnic')
            ->build('autoturisme/ka-plus/dotari');
    }

}