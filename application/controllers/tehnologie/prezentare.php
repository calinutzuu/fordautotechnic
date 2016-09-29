<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class prezentare extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Tehnologie', 'Ford AutoTechnic')
            ->build('tehnologie/prezentare');
    }
}