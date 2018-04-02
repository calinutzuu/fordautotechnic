<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class prezentare_generala_fl extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Flote', 'Ford AutoTechnic')
            ->build('flote/prezentare_generala_fl');
    }


}