<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class motorcraft extends CI_Controller
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

    public function anvelope()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Anvelope', 'Ford AutoTechnic')
            ->build('ford_service/motorcraft/anvelope');
    }

    public function lasuta()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Reducere', 'Ford AutoTechnic')
            ->build('ford_service/motorcraft/lasuta');
    }

    public function ka()
    {
    $this->template
        ->set_layout('promotii')
        ->title('Ka', 'Ford AutoTechnic')
        ->build('ford_service/motorcraft/anvelope/ka');
    }

    public function fiesta()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Fiesta', 'Ford AutoTechnic')
            ->build('ford_service/motorcraft/anvelope/fiesta');
    }

    public function fusion()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Fusion', 'Ford AutoTechnic')
            ->build('ford_service/motorcraft/anvelope/fusion');
    }

    public function focus()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Focus', 'Ford AutoTechnic')
            ->build('ford_service/motorcraft/anvelope/focus');
    }

    public function c_max()
    {
        $this->template
            ->set_layout('promotii')
            ->title('C-MAX', 'Ford AutoTechnic')
            ->build('ford_service/motorcraft/anvelope/c_max');
    }

    public function mondeo()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Mondeo', 'Ford AutoTechnic')
            ->build('ford_service/motorcraft/anvelope/mondeo');
    }

    public function kuga()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Kuga', 'Ford AutoTechnic')
            ->build('ford_service/motorcraft/anvelope/kuga');
    }

    public function transit()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Transit', 'Ford AutoTechnic')
            ->build('ford_service/motorcraft/anvelope/transit');
    }

    public function preitp()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Transit', 'Ford AutoTechnic')
            ->build('ford_service/motorcraft/preitp');
    }

    public function reparatii()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Reparatii', 'Ford AutoTechnic')
            ->build('ford_service/motorcraft/reparatii');
    }

    public function frane()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Frane', 'Ford AutoTechnic')
            ->build('ford_service/motorcraft/reparatii/frane');
    }

    public function ambreiaje()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Ambreiaje', 'Ford AutoTechnic')
            ->build('ford_service/motorcraft/reparatii/ambreiaje');
    }

    public function stergatoare()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Stergatoare', 'Ford AutoTechnic')
            ->build('ford_service/motorcraft/reparatii/stergatoare');
    }

    public function curea()
    {
        $this->template
            ->set_layout('promotii')
            ->title('CureaDeDistributie', 'Ford AutoTechnic')
            ->build('ford_service/motorcraft/reparatii/curea');
    }

    public function antigel()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Antigel', 'Ford AutoTechnic')
            ->build('ford_service/motorcraft/reparatii/antigel');
    }

    public function suspensii()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Suspensii', 'Ford AutoTechnic')
            ->build('ford_service/motorcraft/reparatii/suspensii');
    }

    public function aer_conditionat()
    {
        $this->template
            ->set_layout('promotii')
            ->title('AerConditionat', 'Ford AutoTechnic')
            ->build('ford_service/motorcraft/reparatii/aer_conditionat');
    }

    public function baterie()
{
    $this->template
        ->set_layout('promotii')
        ->title('AerConditionat', 'Ford AutoTechnic')
        ->build('ford_service/motorcraft/reparatii/baterie');
}


}