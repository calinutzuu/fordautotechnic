<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Focus extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Promotie Lansare Ford Focus', 'Ford AutoTechnic')
            ->build('promotii/focus');
    }
}