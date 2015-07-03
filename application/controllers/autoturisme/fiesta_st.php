<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class fiesta_st extends CI_Controller
{
    public function index()
    {
        $this->template
            ->title('Ford Fiesta ST', 'Ford AutoTechnic')
            ->build('autoturisme/fiesta_st');
    }

}

