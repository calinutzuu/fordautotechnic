<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the 'welcome' class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['Autoturisme/NoulMustang/SigurantaSiSecuritate'] = 'autoturisme/noul_mustang/siguranta_si_securitate';
$route['Autoturisme/NoulMustang/Performanta'] = 'autoturisme/noul_mustang/performanta';
$route['Autoturisme/NoulMustang/ExperientaLaVolan'] = 'autoturisme/noul_mustang/experienta_la_volan';
$route['Autoturisme/NoulMustang/Design'] = 'autoturisme/noul_mustang/design';
$route['Autoturisme/NoulMustang'] = 'autoturisme/noul_mustang/index';

$route['Autoturisme/NoulB-MAX/Siguranta'] = 'autoturisme/noul_b_max/siguranta';
$route['Autoturisme/NoulB-MAX/Performanta'] = 'autoturisme/noul_b_max/performanta';
$route['Autoturisme/NoulB-MAX/ExperientaLaVolan'] = 'autoturisme/noul_b_max/experienta_la_volan';
$route['Autoturisme/NoulB-MAX/Design'] = 'autoturisme/noul_b_max/design';
$route['Autoturisme/NoulB-MAX'] = 'autoturisme/noul_b_max/index';

$route['Autoturisme/Ka/MaterialeDescarcabile'] = 'autoturisme/ka/materiale_descarcabile';
$route['Autoturisme/Ka/Designexterior'] = 'autoturisme/ka/design_exterior';
$route['Autoturisme/Ka/Designinterior'] = 'autoturisme/ka/design_interior';
$route['Autoturisme/Ka'] = 'autoturisme/ka/index';

$route['Autoturisme/NouaFiesta/SigurantaSiSecuritate'] = 'autoturisme/noua_fiesta/siguranta_si_securitate';
$route['Autoturisme/NouaFiesta/Performanta'] = 'autoturisme/noua_fiesta/performanta';
$route['Autoturisme/NouaFiesta/ExperientaLaVolan'] = 'autoturisme/noua_fiesta/experienta_la_volan';
$route['Autoturisme/NouaFiesta/Design'] = 'autoturisme/noua_fiesta/design';
$route['Autoturisme/NouaFiesta'] = 'autoturisme/noua_fiesta/index';

$route['Autoturisme/FiestaST'] = 'autoturisme/fiesta_st/index';

$route['Autoturisme/NoulFocus/SigurantaSiSecuritate'] = 'autoturisme/noul_focus/siguranta_si_securitate';
$route['Autoturisme/NoulFocus/ExperientaLaVolan'] = 'autoturisme/noul_focus/experienta_la_volan';
$route['Autoturisme/NoulFocus/Performanta'] = 'autoturisme/noul_focus/performanta';
$route['Autoturisme/NoulFocus/Design'] = 'autoturisme/noul_focus/design';
$route['Autoturisme/NoulFocus/PrezentareGenerala'] = 'autoturisme/noul_focus/prezentare_generala';
$route['Autoturisme/NoulFocus'] = 'autoturisme/noul_focus/index';

$route['Autoturisme/Focus-ST/Siguranta'] = 'autoturisme/focus_st/siguranta';
$route['Autoturisme/Focus-ST/Performanta'] = 'autoturisme/focus_st/performanta';
$route['Autoturisme/Focus-ST/ExperientaLaVolan'] = 'autoturisme/focus_st/experienta_la_volan';
$route['Autoturisme/Focus-ST/Design'] = 'autoturisme/focus_st/design';
$route['Autoturisme/Focus-ST'] = 'autoturisme/focus_st/index';

$route['Autoturisme/C-MAX/CuloriSiTapiterie'] = 'autoturisme/c_max/culori_si_tapiterie';
$route['Autoturisme/C-MAX/Performanta'] = 'autoturisme/c_max/performanta';
$route['Autoturisme/C-MAX/SigurantaSiSecuritate'] = 'autoturisme/c_max/siguranta_si_securitate';
$route['Autoturisme/C-MAX/Tehnologii'] = 'autoturisme/c_max/tehnologii';
$route['Autoturisme/C-MAX/MaterialeDescarcabile'] = 'autoturisme/c_max/materiale_descarcabile';
$route['Autoturisme/C-MAX/DesignInterior'] = 'autoturisme/c_max/design_interior';
$route['Autoturisme/C-MAX/DesignExterior'] = 'autoturisme/c_max/design_exterior';
$route['Autoturisme/C-MAX'] = 'autoturisme/c_max/index';

$route['Autoturisme/Mondeo/Siguranta'] = 'autoturisme/mondeo/siguranta';
$route['Autoturisme/Mondeo/ExperientaLaVolan'] = 'autoturisme/mondeo/experienta_la_volan';
$route['Autoturisme/Mondeo/PerformantaSiEficienta'] = 'autoturisme/mondeo/performanta';
$route['Autoturisme/Mondeo/Design'] = 'autoturisme/mondeo/design';
$route['Autoturisme/Mondeo'] = 'autoturisme/mondeo/index';

$route['Autoturisme/NoulTourneoConnect/StiluriDeCaroserie'] = 'autoturisme/noul_tourneo_connect/stiluri_de_caroserie';
$route['Autoturisme/NoulTourneoConnect/Siguranta'] = 'autoturisme/noul_tourneo_connect/siguranta';
$route['Autoturisme/NoulTourneoConnect/Performanta'] = 'autoturisme/noul_tourneo_connect/performanta';
$route['Autoturisme/NoulTourneoConnect/ExperientaLaVolan'] = 'autoturisme/noul_tourneo_connect/experienta_la_volan';
$route['Autoturisme/NoulTourneoConnect/Design'] = 'autoturisme/noul_tourneo_connect/design';
$route['Autoturisme/NoulTourneoConnect'] = 'autoturisme/noul_tourneo_connect/index';

$route['Autoturisme/Noul-Ford-Tourneo-Courier/Siguranta'] = 'autoturisme/noul_tourneo_courier/siguranta';
$route['Autoturisme/Noul-Ford-Tourneo-Courier/Performanta'] = 'autoturisme/noul_tourneo_courier/performanta';
$route['Autoturisme/Noul-Ford-Tourneo-Courier/ExperientaLaVolan'] = 'autoturisme/noul_tourneo_courier/experienta_la_volan';
$route['Autoturisme/Noul-Ford-Tourneo-Courier/Design'] = 'autoturisme/noul_tourneo_courier/design';
$route['Autoturisme/Noul-Ford-Tourneo-Courier'] = 'autoturisme/noul_tourneo_courier/index';

$route['VehiculeComerciale/Prezentare'] = 'vehicule-comerciale/prezentare/index';

$route['VehiculeComerciale/Noua_familie_Transit'] = 'vehicule-comerciale/noua_familie_transit/index';

$route['VehiculeComerciale/Transit-Courier/Modele'] = 'vehicule-comerciale/transit_courier/modele';
$route['VehiculeComerciale/Transit-Courier/StiluriDeCaroserie'] = 'vehicule-comerciale/transit_courier/stiluri_de_caroserie';
$route['VehiculeComerciale/Transit-Courier/Siguranta'] = 'vehicule-comerciale/transit_courier/siguranta';
$route['VehiculeComerciale/Transit-Courier/Performanta'] = 'vehicule-comerciale/transit_courier/performanta';
$route['VehiculeComerciale/Transit-Courier/UtilitateSiCosturi'] = 'vehicule-comerciale/transit_courier/utilitate_si_costuri';
$route['VehiculeComerciale/Transit-Courier/ExperientaLaVolan'] = 'vehicule-comerciale/transit_courier/experienta_la_volan';
$route['VehiculeComerciale/Transit-Courier/Design'] = 'vehicule-comerciale/transit_courier/design';
$route['VehiculeComerciale/Transit-Courier/PrezentareGenerala'] = 'vehicule-comerciale/transit_courier/prezentare_generala';
$route['VehiculeComerciale/Transit-Courier/Oferta_Speciala_TransitCourier'] = 'vehicule-comerciale/transit_courier/oferta_speciala';
$route['VehiculeComerciale/Transit-Courier'] = 'vehicule-comerciale/transit_courier/index';

$route['VehiculeComerciale/TransitConnect/PreturiSiBrosuri'] = 'vehicule-comerciale/transit_connect/liste_si_brosuri';
$route['VehiculeComerciale/TransitConnect/Modele'] = 'vehicule-comerciale/transit_connect/modele';
$route['VehiculeComerciale/TransitConnect/VarianteDeCaroserie'] = 'vehicule-comerciale/transit_connect/variante_de_caroserie';
$route['VehiculeComerciale/TransitConnect/SigurantaSiSecuritate'] = 'vehicule-comerciale/transit_connect/siguranta';
$route['VehiculeComerciale/TransitConnect/PerformantaSiEficienta'] = 'vehicule-comerciale/transit_connect/performanta';
$route['VehiculeComerciale/TransitConnect/Utilitate'] = 'vehicule-comerciale/transit_connect/utilitate';
$route['VehiculeComerciale/TransitConnect/ExperientaLaVolan'] = 'vehicule-comerciale/transit_connect/experienta_la_volan';
$route['VehiculeComerciale/TransitConnect/Design'] = 'vehicule-comerciale/transit_connect/design';
$route['VehiculeComerciale/TransitConnect/PrezentareGenerala'] = 'vehicule-comerciale/transit_connect/prezentare_generala';
$route['VehiculeComerciale/TransitConnect'] = 'vehicule-comerciale/transit_connect/index';

$route['VehiculeComerciale/NoulTransitCustom/ListaPreturi'] = 'vehicule-comerciale/transit_custom/lista';
$route['VehiculeComerciale/NoulTransitCustom/Modele'] = 'vehicule-comerciale/transit_custom/modele';
$route['VehiculeComerciale/NoulTransitCustom/VarianteDeCaroserie'] = 'vehicule-comerciale/transit_custom/variante_de_caroserie';
$route['VehiculeComerciale/NoulTransitCustom/Siguranta'] = 'vehicule-comerciale/transit_custom/siguranta';
$route['VehiculeComerciale/NoulTransitCustom/PerformantaSiEficienta'] = 'vehicule-comerciale/transit_custom/performanta';
$route['VehiculeComerciale/NoulTransitCustom/Utilitate'] = 'vehicule-comerciale/transit_custom/utilitate_si_costuri';
$route['VehiculeComerciale/NoulTransitCustom/ExperientaLaVolan'] = 'vehicule-comerciale/transit_custom/experienta_la_volan';
$route['VehiculeComerciale/NoulTransitCustom/Design'] = 'vehicule-comerciale/transit_custom/design';
$route['VehiculeComerciale/NoulTransitCustom/Prezentare'] = 'vehicule-comerciale/transit_custom/prezentare';
$route['VehiculeComerciale/NoulTransitCustom'] = 'vehicule-comerciale/transit_custom/index';

$route['VehiculeComerciale/Transit2014/Modele'] = 'vehicule-comerciale/noul_ford_transit/modele';
$route['VehiculeComerciale/Transit2014/StiluriDeCaroserie'] = 'vehicule-comerciale/noul_ford_transit/stiluri_de_caroserie';
$route['VehiculeComerciale/Transit2014/Siguranta'] = 'vehicule-comerciale/noul_ford_transit/siguranta';
$route['VehiculeComerciale/Transit2014/Performanta'] = 'vehicule-comerciale/noul_ford_transit/performanta';
$route['VehiculeComerciale/Transit2014/Costuri'] = 'vehicule-comerciale/noul_ford_transit/utilitate';
$route['VehiculeComerciale/Transit2014/ExperientaLaVolan'] = 'vehicule-comerciale/noul_ford_transit/experienta_la_volan';
$route['VehiculeComerciale/Transit2014/Design'] = 'vehicule-comerciale/noul_ford_transit/design';
$route['VehiculeComerciale/Transit2014'] = 'vehicule-comerciale/noul_ford_transit/index';

$route['VehiculeComerciale/NouaFamilieTourneo'] = 'vehicule-comerciale/noua_familie_tourneo/index';

$route['VehiculeComerciale/NoulTourneoCustom/ListaPreturi'] = 'vehicule-comerciale/noul_tourneo_custom/lista';
$route['VehiculeComerciale/NoulTourneoCustom/Modele'] = 'vehicule-comerciale/noul_tourneo_custom/modele';
$route['VehiculeComerciale/NoulTourneoCustom/VarianteDeCaroserie'] = 'vehicule-comerciale/noul_tourneo_custom/variante_de_caroserie';
$route['VehiculeComerciale/NoulTourneoCustom/Siguranta'] = 'vehicule-comerciale/noul_tourneo_custom/siguranta';
$route['VehiculeComerciale/NoulTourneoCustom/PerformantaSiEficienta'] = 'vehicule-comerciale/noul_tourneo_custom/performanta';
$route['VehiculeComerciale/NoulTourneoCustom/ExperientaLaVolan'] = 'vehicule-comerciale/noul_tourneo_custom/experienta_la_volan';
$route['VehiculeComerciale/NoulTourneoCustom/Design'] = 'vehicule-comerciale/noul_tourneo_custom/design';
$route['VehiculeComerciale/NoulTourneoCustom/Prezentare'] = 'vehicule-comerciale/noul_tourneo_custom/prezentare_generala';
$route['VehiculeComerciale/NoulTourneoCustom'] = 'vehicule-comerciale/noul_tourneo_custom/index';

$route['VehiculeComerciale/NoulRanger/MaterialeDescarcabile'] = 'vehicule-comerciale/noul_ranger/materiale';
$route['VehiculeComerciale/NoulRanger/Caroserie'] = 'vehicule-comerciale/noul_ranger/caroserie';
$route['VehiculeComerciale/NoulRanger/Siguranta'] = 'vehicule-comerciale/noul_ranger/siguranta';
$route['VehiculeComerciale/NoulRanger/PerformantaSiEficienta'] = 'vehicule-comerciale/noul_ranger/performanta';
$route['VehiculeComerciale/NoulRanger/Utilitate'] = 'vehicule-comerciale/noul_ranger/utilitate';
$route['VehiculeComerciale/NoulRanger/ExperientaCondusului'] = 'vehicule-comerciale/noul_ranger/experienta_condusului';
$route['VehiculeComerciale/NoulRanger/Design'] = 'vehicule-comerciale/noul_ranger/design';
$route['VehiculeComerciale/NoulRanger/Prezentare'] = 'vehicule-comerciale/noul_ranger/prezentare';
$route['VehiculeComerciale/NoulRanger'] = 'vehicule-comerciale/noul_ranger/index';

$route['Promotii/FiestaRedBlack'] = 'promotii/fiesta_red_black/index';
$route['Promotii/Rabla2015'] = 'promotii/rabla/index';
$route['Promotii/PromotieLansareFordFocus'] = 'promotii/focus/index';
$route['Promotii/NoulMondeo'] = 'promotii/noul_mondeo/index';
$route['Promotii/PrimaMasina'] = 'promotii/prima_masina/index';
$route['Promotii/ProgramulPrimaMasina'] = 'promotii/programul_prima_masina/index';
$route['Promotii/TradeIn'] = 'promotii/trade_in/index';
$route['Promotii/CaravanaTransit'] = 'promotii/caravana_transit/index';
$route['Promotii/Oferta_Speciala_TransitCourier'] = 'promotii/oferta_transit_courier/index';

$route['Autoturisme'] = 'xyz';


/* End of file routes.php */
/* Location: ./application/config/routes.php */