<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Prezentare_Generala extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Prezentare Generala', 'Ford AutoTechnic')
            ->build('ford_service/prezentare generala');
    }
}