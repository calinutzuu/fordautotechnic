<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Autoturisme extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Autoturisme', 'Ford AutoTechnic')
            ->build('promotii/autoturisme');
    }

    public function noul_ka_plus()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Autoturisme', 'Ford AutoTechnic')
            ->build('promotii/autoturisme/noul_ka_plus');
    }

    public function noul_ford_edge()
    {
        $this->template
            ->set_layout('promotii')
            ->title('NoulFordEdge', 'Ford AutoTechnic')
            ->build('promotii/autoturisme/noul_ford_edge');
    }

    public function kuga_summer()
    {
        $this->template
            ->set_layout('promotii')
            ->title('KugaSummerEdition', 'Ford AutoTechnic')
            ->build('promotii/autoturisme/kuga_summer');
    }

    public function business_weeks()
    {
        $this->template
            ->set_layout('promotii')
            ->title('BusinessWeeks', 'Ford AutoTechnic')
            ->build('promotii/autoturisme/business_weeks');
    }

    public function rabla_p()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Rabla', 'Ford AutoTechnic')
            ->build('promotii/autoturisme/rabla_p');
    }

    public function oferta_fiesta()
    {
        $this->template
            ->set_layout('promotii')
            ->title('OfertaFiesta', 'Ford AutoTechnic')
            ->build('promotii/autoturisme/rabla/oferta_fiesta');
    }

    public function oferta_bmax()
    {
        $this->template
            ->set_layout('promotii')
            ->title('OfertaBMAX', 'Ford AutoTechnic')
            ->build('promotii/autoturisme/rabla/oferta_bmax');
    }

    public function oferta_focus()
    {
        $this->template
            ->set_layout('promotii')
            ->title('OfertaFocus', 'Ford AutoTechnic')
            ->build('promotii/autoturisme/rabla/oferta_focus');
    }

    public function oferta_mondeo()
    {
        $this->template
            ->set_layout('promotii')
            ->title('OfertaMondeo', 'Ford AutoTechnic')
            ->build('promotii/autoturisme/rabla/oferta_mondeo');
    }

    public function oferta_ecosport()
    {
        $this->template
            ->set_layout('promotii')
            ->title('OfertaEcoSport', 'Ford AutoTechnic')
            ->build('promotii/autoturisme/rabla/oferta_ecosport');
    }

    public function ecobonus()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Ecobonus', 'Ford AutoTechnic')
            ->build('promotii/autoturisme/ecobonus');
    }

    public function oferta_fiesta_e()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Ecobonus - Fiesta', 'Ford AutoTechnic')
            ->build('promotii/autoturisme/ecobonus/oferta_fiesta_e');
    }

    public function oferta_focus_e()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Ecobonus - Focus', 'Ford AutoTechnic')
            ->build('promotii/autoturisme/ecobonus/oferta_focus_e');
    }

    public function oferta_bmax_e()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Ecobonus - Focus', 'Ford AutoTechnic')
            ->build('promotii/autoturisme/ecobonus/oferta_bmax_e');
    }

    public function oferta_mondeo_e()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Ecobonus - Mondeo', 'Ford AutoTechnic')
            ->build('promotii/autoturisme/ecobonus/oferta_mondeo_e');
    }

    public function oferta_ecosport_e()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Ecobonus - Ecosport', 'Ford AutoTechnic')
            ->build('promotii/autoturisme/ecobonus/oferta_ecosport_e');
    }

    public function procedura()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Ecobonus - Procedura', 'Ford AutoTechnic')
            ->build('promotii/autoturisme/ecobonus/procedura');
    }
    public function weekendul_inovatiei()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Weekend-ul Inovatiei', 'Ford AutoTechnic')
            ->build('promotii/autoturisme/ecobonus/weekendul_inovatiei');
    }
}