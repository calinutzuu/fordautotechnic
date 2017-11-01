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

    public function promotie_flote()
    {
        $this->template
            ->set_layout('promotii')
            ->title('PromotieFlote', 'Ford AutoTechnic')
            ->build('promotii/autoturisme/promotie_flote');
    }

    public function business_weeks()
    {
        $this->template
            ->set_layout('promotii')
            ->title('BusinessWeeks', 'Ford AutoTechnic')
            ->build('promotii/autoturisme/business_weeks');
    }

    public function programul_rabla()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Rabla', 'Ford AutoTechnic')
            ->build('promotii/autoturisme/programul_rabla');
    }

    public function oferta_fiesta()
    {
        $this->template
            ->set_layout('promotii')
            ->title('OfertaFiesta', 'Ford AutoTechnic')
            ->build('promotii/autoturisme/rabla/oferta_fiesta');
    }

    public function oferta_ka()
    {
        $this->template
            ->set_layout('promotii')
            ->title('OfertaKa+', 'Ford AutoTechnic')
            ->build('promotii/autoturisme/rabla/oferta_ka');
    }

    public function oferta_focus()
    {
        $this->template
            ->set_layout('promotii')
            ->title('OfertaFocus', 'Ford AutoTechnic')
            ->build('promotii/autoturisme/rabla/oferta_focus');
    }

    public function oferta_ecosport()
    {
        $this->template
            ->set_layout('promotii')
            ->title('OfertaEcoSport', 'Ford AutoTechnic')
            ->build('promotii/autoturisme/rabla/oferta_ecosport');
    }

    public function black_friday()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Ecobonus', 'Ford AutoTechnic')
            ->build('promotii/autoturisme/black_friday');
    }

    public function ecobonus()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Ecobonus ', 'Ford AutoTechnic')
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

    public function noul_kuga_o()
    {
        $this->template
            ->set_layout('promotii')
            ->title('NoulKUGA', 'Ford AutoTechnic')
            ->build('promotii/autoturisme/noul_kuga_o');
    }

    public function noul_ranger()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Ranger', 'Ford AutoTechnic')
            ->build('promotii/comerciale/noul_ranger');
    }

    public function transit_ok()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Transit Promotii', 'Ford AutoTechnic')
            ->build('promotii/comerciale/transit_ok');
    }

    public function fiesta_social_club()
    {
        $this->template
            ->set_layout('promotii')
            ->title('FiestaSocialClub', 'Ford AutoTechnic')
            ->build('promotii/autoturisme/fiesta_social_club');
    }

    public function fiesta_fizice()
    {
        $this->template
            ->set_layout('promotii')
            ->title('NoulFiesta', 'Ford AutoTechnic')
            ->build('promotii/autoturisme/fiesta_fizice');
    }

    public function fiesta_juridice()
    {
        $this->template
            ->set_layout('promotii')
            ->title('NoulFiesta', 'Ford AutoTechnic')
            ->build('promotii/autoturisme/fiesta_juridice');
    }

    public function noul_ecosport()
    {
        $this->template
            ->set_layout('promotii')
            ->title('NoulFiesta', 'Ford AutoTechnic')
            ->build('promotii/autoturisme/noul_ecosport');
    }

    public function finantare_fiesta()
    {
        $this->template
            ->set_layout('promotii')
            ->title('Finantare Fiesta', 'Ford AutoTechnic')
            ->build('promotii/autoturisme/finantare_fiesta');
    }
}