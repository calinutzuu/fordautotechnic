<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Fiesta_Red_Black extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Fiesta Red Black', 'Ford AutoTechnic')
            ->build('promotii/fiesta_red_black');
    }
}