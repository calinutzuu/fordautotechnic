<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class motorcraft2 extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('FordService', 'Ford AutoTechnic')
            ->build('ford_service/motorcraft');
    }

    public function service()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Service', 'Ford AutoTechnic')
            ->build('ford_service/motorcraft/service');
    }



    public function anv_vara()
    {
        $this->template
            ->set_layout('promotii')
            ->title('AnvelopeVara', 'Ford AutoTechnic')
            ->build('ford_service/motorcraft/anv_vara');
    }

    public function kavara()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Ka', 'Ford AutoTechnic')
            ->build('ford_service/motorcraft/anv_vara/kavara');
    }

    public function fiestavara()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Fiesta', 'Ford AutoTechnic')
            ->build('ford_service/motorcraft/anv_vara/fiestavara');
    }

    public function fusionvara()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Fusion', 'Ford AutoTechnic')
            ->build('ford_service/motorcraft/anv_vara/fusionvara');
    }

    public function focusvara()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Focus', 'Ford AutoTechnic')
            ->build('ford_service/motorcraft/anv_vara/focusvara');
    }

    public function cmaxvara()
    {
        $this->template
            ->set_layout('promotii')
            ->title('C-MAX', 'Ford AutoTechnic')
            ->build('ford_service/motorcraft/anv_vara/cmaxvara');
    }

    public function mondeovara()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Mondeo', 'Ford AutoTechnic')
            ->build('ford_service/motorcraft/anv_vara/mondeovara');
    }

    public function kugavara()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Kuga', 'Ford AutoTechnic')
            ->build('ford_service/motorcraft/anv_vara/kugavara');
    }

    public function transitvara()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Transit', 'Ford AutoTechnic')
            ->build('ford_service/motorcraft/anv_vara/transitvara');
    }


}