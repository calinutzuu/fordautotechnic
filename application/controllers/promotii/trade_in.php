<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Trade_In extends CI_Controller
{
    public function index()
    {
        $this->template
            ->set_layout('promotii')
            ->title('TradeIN', 'Ford AutoTechnic')
            ->build('promotii/trade_in');
    }
}