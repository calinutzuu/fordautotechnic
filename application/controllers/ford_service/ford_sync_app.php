<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ford_sync_app extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Ford-SYNC-cu-AppLink', 'Ford AutoTechnic')
            ->build('ford_service/ford_sync_app');
    }
}