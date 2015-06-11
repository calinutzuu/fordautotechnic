<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class promotii_service extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Promotii Service', 'Ford AutoTechnic')
            ->build('promotii/promotii_service');
    }

    public function promotii_motorcraft_autoturisme()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Promotii Service - Promotii Motorcraft Autoturisme', 'Ford AutoTechnic')
            ->build('promotii/promotii_service/promotii_motorcraft_autoturisme');
    }

    public function promotii_motorcraft_utilitare()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Promotii Service - Promotii Motorcraft Utilitare', 'Ford AutoTechnic')
            ->build('promotii/promotii_service/promotii_motorcraft_utilitare');
    }

    public function promotii_accesorii()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Promotii Service - Promotii Accesorii', 'Ford AutoTechnic')
            ->build('promotii/promotii_service/promotii_accesorii');
    }

    public function inlocuire_blue_oval()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Promotii Service - Inlocuire Blue Oval', 'Ford AutoTechnic')
            ->build('promotii/promotii_service/inlocuire_blue_oval');
    }
}