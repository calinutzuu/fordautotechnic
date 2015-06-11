<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class e_10 extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Ford Service - Combustibil E10', 'Ford AutoTechnic')
            ->build('ford_service/e_10');
    }
}