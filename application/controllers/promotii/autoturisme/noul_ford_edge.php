<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Noul_ford_edge extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('NoulFordEdge', 'Ford AutoTechnic')
            ->build('promotii/autoturisme/noul_ford_edge');
    }
}