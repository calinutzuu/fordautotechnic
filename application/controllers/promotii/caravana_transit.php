<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Caravana_Transit extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Caravana Transit', 'Ford AutoTechnic')
            ->build('promotii/caravana_transit');
    }
}