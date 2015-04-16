<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Rabla extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Rabla 2015', 'Ford AutoTechnic')
            ->build('promotii/rabla');
    }
}