<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class overview extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Finantare - Prezentare', 'Ford AutoTechnic')
            ->build('ford_leasing/overview');
    }
}