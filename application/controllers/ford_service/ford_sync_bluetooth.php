<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ford_sync_bluetooth extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Ford Service - Ford Sync & Bluetooth ', 'Ford AutoTechnic')
            ->build('ford_service/ford_sync_bluetooth');
    }

    public function prezentare()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Ford Service - Ford Sync & Bluetooth ', 'Ford AutoTechnic')
            ->build('ford_service/ford_sync_bluetooth/prezentare');
    }

    public function bluetooth_comanda_vocala()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Bluetooth_cu_comanda_vocala ', 'Ford AutoTechnic')
            ->build('ford_service/ford_sync_bluetooth/bluetooth_comanda_vocala');
    }

    public function ford_sync_1()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Ford_SYNC_1 ', 'Ford AutoTechnic')
            ->build('ford_service/ford_sync_bluetooth/ford_sync_1');
    }

    public function ford_sync_1_1()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Ford Service - Ford Sync 1.1 ', 'Ford AutoTechnic')
            ->build('ford_service/ford_sync_bluetooth/ford_sync_1_1');
    }

    public function sync_applink()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Ford Service - Catalogul de aplicatii Ford ', 'Ford AutoTechnic')
            ->build('ford_service/ford_sync_bluetooth/sync_applink');
    }

    public function ford_sync2()
    {
        $this->template
            ->set_layout('promotii')
            ->title('FordSYNC2 ', 'Ford AutoTechnic')
            ->build('ford_service/ford_sync_bluetooth/ford_sync2');
    }

}
