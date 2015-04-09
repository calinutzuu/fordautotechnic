<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

    class Noul_Focus extends CI_Controller
    {
        public function index()
        {
            $this->template
                ->title('Noul Focus', 'Ford AutoTechnic')
                ->build('autoturisme/noul_focus');
        }

        public function prezentare_generala()
        {
            $this->template
                ->title('Noul Focus - Prezentare Generala', 'Ford AutoTechnic')
                ->build('autoturisme/noul_focus/prezentare_generala');
        }

        public function design()
        {
            $this->template
                ->title('Noul Focus - Design', 'Ford AutoTechnic')
                ->build('autoturisme/noul_focus/design');
        }

        public function performanta()
        {
            $this->template
                ->title('Noul Focus - Performanta', 'Ford AutoTechnic')
                ->build('autoturisme/noul_focus/performanta');
        }

        public function experienta_la_volan()
        {
            $this->template
                ->title('Noul Focus - Experien&#355;a la volan', 'Ford AutoTechnic')
                ->build('autoturisme/noul_focus/experienta_la_volan');
        }

        public function siguranta_si_securitate()
        {
            $this->template
                ->title('Noul Focus - Siguranta si securitate', 'Ford AutoTechnic')
                ->build('autoturisme/noul_focus/siguranta_si_securitate');
        }

    }

