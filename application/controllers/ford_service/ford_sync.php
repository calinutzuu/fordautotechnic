<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ford_sync extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Ford Service - Ford Sync', 'Ford AutoTechnic')
            ->build('ford_service/ford_sync');
    }
}