<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->template
            ->title('Site-ul oficial Ford AutoTechnic')
            ->build('home');
    }
}
