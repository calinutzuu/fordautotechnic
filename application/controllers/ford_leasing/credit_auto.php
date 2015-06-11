<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class credit_auto extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Finantare - Credit Auto', 'Ford AutoTechnic')
            ->build('ford_leasing/credit_auto');
    }
}