<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class euro_ncap extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Euro_NCAP_Advanced', 'Ford AutoTechnic')
            ->build('ford_service/euro_ncap');
    }
}