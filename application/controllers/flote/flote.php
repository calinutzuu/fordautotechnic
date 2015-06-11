<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class flote extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Flote', 'Ford AutoTechnic')
            ->build('flote/flote');
    }
}