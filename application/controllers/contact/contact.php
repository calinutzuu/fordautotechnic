<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class contact extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Contact', 'Ford AutoTechnic')
            ->build('contact/contact');
    }
}