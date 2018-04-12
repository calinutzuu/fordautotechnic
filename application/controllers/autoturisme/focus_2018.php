<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class focus_2018 extends CI_Controller
{
    public function index()
    {
        $this->template
            ->title('Noul Focus', 'Ford AutoTechnic')
            ->build('autoturisme/focus_2018');
    }


    public function design()
    {
        $this->template
            ->title('Noul Focus - Design', 'Ford AutoTechnic')
            ->build('autoturisme/focus_2018/design');
    }

}

