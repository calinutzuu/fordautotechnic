<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ecobonus extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Ecobonus', 'Ford AutoTechnic')
            ->build('promotii/ecobonus');
    }
}