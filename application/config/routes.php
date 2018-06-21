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
$route['Autoturisme/ka-plus/Prezentare'] = 'autoturisme/ka_plus/prezentare';
$route['Autoturisme/ka-plus/Galerie'] = 'autoturisme/ka_plus/galerie';
$route['Autoturisme/ka-plus/Dotari'] = 'autoturisme/ka_plus/dotari';
$route['Autoturisme/ka-plus'] = 'autoturisme/ka_plus/index';

$route['Autoturisme/NoulMustang/PrezentareGenerala'] = 'autoturisme/noul_mustang/prezentare';
$route['Autoturisme/NoulMustang/PreturisiPromotii'] = 'autoturisme/noul_mustang/preturi_si_promotii';
$route['Autoturisme/NoulMustang/Galerie'] = 'autoturisme/noul_mustang/galerie';
$route['Autoturisme/NoulMustang/Caracteristici'] = 'autoturisme/noul_mustang/caracteristici';
$route['Autoturisme/NoulMustang'] = 'autoturisme/noul_mustang/index';

$route['Autoturisme/Noul-S-MAX/PrezentareGenerala'] = 'autoturisme/noul_s_max/prezentare';
$route['Autoturisme/Noul-S-MAX/Preturi-si-promotii'] = 'autoturisme/noul_s_max/preturi_si_promotii';
$route['Autoturisme/Noul-S-MAX/Design'] = 'autoturisme/noul_s_max/design';
$route['Autoturisme/Noul-S-MAX/Caracteristici'] = 'autoturisme/noul_s_max/caracteristici';
$route['Autoturisme/Noul-S-MAX/S-MAX-Vignale'] = 'autoturisme/noul_s_max/s_max_vignale';
$route['Autoturisme/Noul-S-MAX'] = 'autoturisme/noul_s_max/index';

$route['Autoturisme/Noul-FordEdge/PrezentareGenerala'] = 'autoturisme/noul_edge/prezentare';
$route['Autoturisme/Noul-FordEdge/Preturi-si-promotii'] = 'autoturisme/noul_edge/preturi_si_promotii';
$route['Autoturisme/Noul-FordEdge/Design'] = 'autoturisme/noul_edge/design';
$route['Autoturisme/Noul-FordEdge/Caracteristici'] = 'autoturisme/noul_edge/caracteristici';
$route['Autoturisme/Noul-FordEdge/Edge-Vignale'] = 'autoturisme/noul_edge/edge_vignale';
$route['Autoturisme/Noul-FordEdge/Models'] = 'autoturisme/noul_edge/models';
$route['Autoturisme/Noul-FordEdge'] = 'autoturisme/noul_edge/index';

$route['Autoturisme/NoulGalaxy/PrezentareGenerala'] = 'autoturisme/noul_galaxy/prezentare';
$route['Autoturisme/NoulGalaxy/Preturi-si-promotii'] = 'autoturisme/noul_galaxy/preturi_si_promotii';
$route['Autoturisme/NoulGalaxy/Design'] = 'autoturisme/noul_galaxy/design';
$route['Autoturisme/NoulGalaxy/Caracteristici'] = 'autoturisme/noul_galaxy/caracteristici';
$route['Autoturisme/NoulGalaxy'] = 'autoturisme/noul_galaxy/index';

$route['Autoturisme/NoulB-MAX/Siguranta'] = 'autoturisme/noul_b_max/siguranta';
$route['Autoturisme/NoulB-MAX/PerformantaSiEficienta'] = 'autoturisme/noul_b_max/performanta';
$route['Autoturisme/NoulB-MAX/PreturisiPromotii'] = 'autoturisme/noul_b_max/preturi_si_promotii';
$route['Autoturisme/NoulB-MAX/ExperientaLaVolan'] = 'autoturisme/noul_b_max/experienta_la_volan';
$route['Autoturisme/NoulB-MAX/Design'] = 'autoturisme/noul_b_max/design';
$route['Autoturisme/NoulB-MAX/Prezentare'] = 'autoturisme/noul_b_max/prezentare';
$route['Autoturisme/NoulB-MAX'] = 'autoturisme/noul_b_max/index';

$route['Autoturisme/Noul-EcoSport/Caracteristici'] = 'autoturisme/noul_ecosport/caracteristici';
$route['Autoturisme/Noul-EcoSport/Design'] = 'autoturisme/noul_ecosport/design';
$route['Autoturisme/Noul-EcoSport/PreturiSiPromotii'] = 'autoturisme/noul_ecosport/preturi_si_promotii';
$route['Autoturisme/Noul-EcoSport/PrezentareGenerala'] = 'autoturisme/noul_ecosport/prezentare_generala';
$route['Autoturisme/Noul-EcoSport'] = 'autoturisme/noul_ecosport/index';

$route['Autoturisme/NoulEcosport/Caracteristici'] = 'autoturisme/ecosport_nou/caracteristici';
$route['Autoturisme/NoulEcosport/Design'] = 'autoturisme/ecosport_nou/design';
$route['Autoturisme/NoulEcosport/PreturisiPromotii'] = 'autoturisme/ecosport_nou/preturi_si_promotii';
$route['Autoturisme/NoulEcosport/PrezentareGenerala'] = 'autoturisme/ecosport_nou/prezentare_generala';
$route['Autoturisme/NoulEcosport'] = 'autoturisme/ecosport_nou/index';

$route['Autoturisme/Ka/Culorisitapiterie'] = 'autoturisme/ka/culori_si_tapiterie';
$route['Autoturisme/Ka/PreturisiPromotii'] = 'autoturisme/ka/preturi_si_promotii';
$route['Autoturisme/Ka/MaterialeDescarcabile'] = 'autoturisme/ka/materiale_descarcabile';
$route['Autoturisme/Ka/Designexterior'] = 'autoturisme/ka/design_exterior';
$route['Autoturisme/Ka/Designinterior'] = 'autoturisme/ka/design_interior';
$route['Autoturisme/Ka/Prezentare'] = 'autoturisme/ka/prezentare';
$route['Autoturisme/Ka'] = 'autoturisme/ka/index';

$route['Autoturisme/Fiesta/st-line'] = 'autoturisme/fiesta/fiesta_st_line';
$route['Autoturisme/Fiesta/PreturiSiPromotii'] = 'autoturisme/fiesta/preturi_si_promotii';
$route['Autoturisme/Fiesta/Accesorii'] = 'autoturisme/fiesta/accesorii';
$route['Autoturisme/Fiesta/Caracteristici'] = 'autoturisme/fiesta/caracteristici';
$route['Autoturisme/Fiesta/Prezentare-Generala'] = 'autoturisme/fiesta/prezentare';
$route['Autoturisme/Fiesta'] = 'autoturisme/fiesta/index';

$route['Autoturisme/noul-fiesta/gama-de-modele'] = 'autoturisme/noul_fiesta/gama_de_modele';
$route['Autoturisme/noul-fiesta/caracteristici'] = 'autoturisme/noul_fiesta/caracteristici';
$route['Autoturisme/noul-fiesta/design'] = 'autoturisme/noul_fiesta/design';
$route['Autoturisme/noul-fiesta'] = 'autoturisme/noul_fiesta/index';

$route['Autoturisme/Fiesta-ST'] = 'autoturisme/fiesta_st/index';

$route['Autoturisme/FocusRS/Accesorii'] = 'autoturisme/focus_rs/accesorii';
$route['Autoturisme/FocusRS/Caracteristici'] = 'autoturisme/focus_rs/caracteristici';
$route['Autoturisme/FocusRS/Design'] = 'autoturisme/focus_rs/design';
$route['Autoturisme/FocusRS/PreturiSiPromotii'] = 'autoturisme/focus_rs/preturi_si_promotii';
$route['Autoturisme/FocusRS/PrezentareGenerala'] = 'autoturisme/focus_rs/prezentare_generala';
$route['Autoturisme/FocusRS'] = 'autoturisme/focus_rs/index';

$route['Autoturisme/NewFocusST/Caracteristici'] = 'autoturisme/focus_st/caracteristici';
$route['Autoturisme/NewFocusST/Design'] = 'autoturisme/focus_st/design';
$route['Autoturisme/NewFocusST/PrezentareGenerala'] = 'autoturisme/focus_st/prezentare';
$route['Autoturisme/NewFocusST'] = 'autoturisme/focus_st/index';

$route['Autoturisme/focus-2018/Design'] = 'autoturisme/focus_2018/design';
$route['Autoturisme/focus-2018'] = 'autoturisme/focus_2018/index';

$route['Autoturisme/Focus/st-line'] = 'autoturisme/focus/stline';
$route['Autoturisme/Focus/Caracteristici'] = 'autoturisme/focus/caracteristici';
$route['Autoturisme/Focus/Design'] = 'autoturisme/focus/design';
$route['Autoturisme/Focus/PreturisiPromotii'] = 'autoturisme/focus/preturi_si_promotii';
$route['Autoturisme/Focus/PrezentareGenerala'] = 'autoturisme/focus/prezentare_generala';
$route['Autoturisme/Focus'] = 'autoturisme/focus/index';

$route['Autoturisme/NoulC-MAX/Caracteristici'] = 'autoturisme/c_max/caracteristici';
$route['Autoturisme/NoulC-MAX/Design'] = 'autoturisme/c_max/design';
$route['Autoturisme/NoulC-MAX/PreturiSiPromotii'] = 'autoturisme/c_max/preturi_si_promotii';
$route['Autoturisme/NoulC-MAX/Info'] = 'autoturisme/c_max/prezentare';
$route['Autoturisme/NoulC-MAX'] = 'autoturisme/c_max/index';

$route['Autoturisme/Kuga/Siguranta'] = 'autoturisme/kuga/siguranta';
$route['Autoturisme/Kuga/PerformantaSiEficienta'] = 'autoturisme/kuga/performanta_si_eficienta';
$route['Autoturisme/Kuga/PreturiSiPromotii'] = 'autoturisme/kuga/preturi_si_promotii';
$route['Autoturisme/Kuga/ExperientaLaVolan'] = 'autoturisme/kuga/experienta_la_volan';
$route['Autoturisme/Kuga/Prezentare'] = 'autoturisme/kuga/prezentare';
$route['Autoturisme/Kuga/Design'] = 'autoturisme/kuga/design';
$route['Autoturisme/Kuga'] = 'autoturisme/kuga/index';

$route['Autoturisme/Noul_Kuga/kuga_vignale'] = 'autoturisme/noul_kuga/kuga_vignale';
$route['Autoturisme/Noul_Kuga/st-line'] = 'autoturisme/noul_kuga/st_line';
$route['Autoturisme/Noul_Kuga/caracteristici'] = 'autoturisme/noul_kuga/caracteristici';
$route['Autoturisme/Noul_Kuga/galerie'] = 'autoturisme/noul_kuga/design';
$route['Autoturisme/Noul_Kuga/PreturisiPromotii'] = 'autoturisme/noul_kuga/preturi_si_promotii';
$route['Autoturisme/Noul_Kuga'] = 'autoturisme/noul_kuga/index';

$route['Autoturisme/st-line'] = 'autoturisme/st_line/index';

$route['Autoturisme/Mondeo/Vignale'] = 'autoturisme/mondeo/vignale';
$route['Autoturisme/Mondeo/Caracteristici'] = 'autoturisme/mondeo/caracteristici';
$route['Autoturisme/Mondeo/PreturiSiPromotii'] = 'autoturisme/mondeo/preturi_si_promotii';
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
$route['VehiculeComerciale/Transit-Courier/Modele/Transit-Courier'] = 'vehicule-comerciale/transit_courier/modele_tc';
$route['VehiculeComerciale/Transit-Courier/Modele/Transit-Courier-Trend'] = 'vehicule-comerciale/transit_courier/modele_tct';
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
$route['VehiculeComerciale/Transit2014/PrezentareGenerala'] = 'vehicule-comerciale/noul_ford_transit/prezentare_generala';
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

$route['Promotii/Autoturisme'] = 'promotii/autoturisme/index';
$route['Promotii/Autoturisme/NoulKAPlus'] = 'promotii/autoturisme/noul_ka_plus';
$route['Promotii/Autoturisme/NoulFordEdge'] = 'promotii/autoturisme/noul_ford_edge';
$route['Promotii/Autoturisme/KugaSummerEdition'] = 'promotii/autoturisme/kuga_summer';
$route['Promotii/Autoturisme/BusinessWeeks'] = 'promotii/autoturisme/business_weeks';
$route['Promotii/Autoturisme/PromotieFlote'] = 'promotii/autoturisme/promotie_flote';
$route['Promotii/Autoturisme/FiestaSocialClub'] = 'promotii/autoturisme/fiesta_social_club';
$route['Promotii/Autoturisme/Edge'] = 'promotii/autoturisme/edge_prom';

$route['Promotii/Autoturisme/Redescopera'] = 'promotii/autoturisme/redescopera';
$route['Promotii/Autoturisme/Redescopera/OfertaKA'] = 'promotii/autoturisme/oferta_kared';
$route['Promotii/Autoturisme/Redescopera/OfertaFiesta'] = 'promotii/autoturisme/oferta_fiestared';
$route['Promotii/Autoturisme/Redescopera/OfertaFocus'] = 'promotii/autoturisme/oferta_focusred';
$route['Promotii/Autoturisme/Redescopera/Procedura'] = 'promotii/autoturisme/procedurared';


$route['Promotii/Autoturisme/EcoBonus'] = 'promotii/autoturisme/ecobonus';
$route['Promotii/Autoturisme/BlackFriday'] = 'promotii/autoturisme/black_friday';
$route['Promotii/Autoturisme/NoulKUGA'] = 'promotii/autoturisme/noul_kuga_o';
$route['Promotii/Autoturisme/Mondeo-STLine'] = 'promotii/autoturisme/mondeo_stline';

$route['Promotii/Autoturisme/EcoBonus/OfertaFiesta'] = 'promotii/autoturisme/oferta_fiesta_e';
$route['Promotii/Autoturisme/EcoBonus/OfertaFiestaActive'] = 'promotii/autoturisme/oferta_fiestaactive_e';
$route['Promotii/Autoturisme/EcoBonus/OfertaFocus'] = 'promotii/autoturisme/oferta_focus_e';
$route['Promotii/Autoturisme/EcoBonus/OfertaMondeo'] = 'promotii/autoturisme/oferta_mondeo_e';
$route['Promotii/Autoturisme/EcoBonus/OfertaEcosport'] = 'promotii/autoturisme/oferta_ecosport_nou';
$route['Promotii/Autoturisme/EcoBonus/OfertaKuga'] = 'promotii/autoturisme/oferta_kuga_nou';
$route['Promotii/Autoturisme/EcoBonus/OfertaMondeoTitaniumHEV'] = 'promotii/autoturisme/oferta_mondeo_hev';
$route['Promotii/Autoturisme/EcoBonus/Procedura'] = 'promotii/autoturisme/procedura';
$route['Promotii/Autoturisme/EcoBonus/WeekendulInovatiei'] = 'promotii/autoturisme/weekendul_inovatiei';

$route['Promotii/Autoturisme/Finantare-Fiesta'] = 'promotii/autoturisme/finantare_fiesta';

$route['Promotii/Autoturisme/programul-rabla'] = 'promotii/autoturisme/programul_rabla';
$route['Promotii/Autoturisme/programul-rabla/OfertaFiesta'] = 'promotii/autoturisme/oferta_fiesta';
$route['Promotii/Autoturisme/programul-rabla/OfertaKA'] = 'promotii/autoturisme/oferta_ka';
$route['Promotii/Autoturisme/programul-rabla/OfertaFocus'] = 'promotii/autoturisme/oferta_focus';
$route['Promotii/Autoturisme/programul-rabla/OfertaEcosportsds'] = 'promotii/autoturisme/oferta_ecosport';
$route['Promotii/Autoturisme/programul-rabla/Rezervare'] = 'promotii/autoturisme/rezervare';

$route['Promotii/Autoturisme/Noul-EcoSport'] = 'promotii/autoturisme/noul_ecosport';
$route['Promotii/Autoturisme/NoulFordFIESTA'] = 'promotii/autoturisme/fiesta_fizice';
$route['Promotii/Autoturisme/NoulFordFIESTAFlote'] = 'promotii/autoturisme/fiesta_juridice';

$route['Promotii/Autoturisme/OferteSIAB_PF'] = 'promotii/autoturisme/oferte_siab_pf';

$route['Promotii/Autoturisme/OfertaFocus'] = 'promotii/autoturisme/oferta_focus_nou';

$route['Promotii/Autoturisme/OfertaFiestaActive'] = 'promotii/autoturisme/oferta_fiesta_active';

$route['Promotii/Autoturisme/Rabla'] = 'promotii/autoturisme/rabla_p';
$route['Promotii/Autoturisme/Rabla/OfertaFiesta'] = 'promotii/autoturisme/oferta_fiesta';
$route['Promotii/Autoturisme/Rabla/OfertaBMAX'] = 'promotii/autoturisme/oferta_bmax';
$route['Promotii/Autoturisme/Rabla/OfertaFocus'] = 'promotii/autoturisme/oferta_focus';
$route['Promotii/Autoturisme/Rabla/OfertaMondeo'] = 'promotii/autoturisme/oferta_mondeo';
$route['Promotii/Autoturisme/Rabla/OfertaEcoSport'] = 'promotii/autoturisme/oferta_ecosport';

$route['Promotii/comerciale/OferteSIAB_PJ'] = 'promotii/comerciale/oferte_siab_pj';

$route['Promotii/comerciale'] = 'promotii/comerciale/index';
$route['Promotii/comerciale/Ranger'] = 'promotii/comerciale/noul_ranger';
$route['Promotii/comerciale/Transit'] = 'promotii/comerciale/transit_ok';
$route['Promotii/comerciale/BusinessWeeks'] = 'promotii/comerciale/business_weeks_co';
$route['Promotii/comerciale/BlackFriday'] = 'promotii/comerciale/black_friday_co';

$route['Promotii/FiestaRedBlack'] = 'promotii/fiesta_red_black/index';
$route['Promotii/Rabla2015'] = 'promotii/rabla/index';
$route['Promotii/PromotieLansareFordFocus'] = 'promotii/focus/index';
$route['Promotii/NoulMondeo'] = 'promotii/noul_mondeo/index';
$route['Promotii/PrimaMasina'] = 'promotii/prima_masina/index';
$route['Promotii/ProgramulPrimaMasina'] = 'promotii/programul_prima_masina/index';
$route['Promotii/TradeIn'] = 'promotii/trade_in/index';
$route['Promotii/CaravanaTransit'] = 'promotii/caravana_transit/index';
$route['Promotii/Oferta_Speciala_TransitCourier'] = 'promotii/oferta_transit_courier/index';


$route['Promotii/PromotiiService/BlueOval'] = 'promotii/promotii_service/inlocuire_blue_oval';
$route['Promotii/PromotiiService/PromotiiAccesorii'] = 'promotii/promotii_service/promotii_accesorii';
$route['Promotii/PromotiiService/PromotiiMotorcraft-utilitare'] = 'promotii/promotii_service/promotii_motorcraft_utilitare';
$route['Promotii/PromotiiService/PromotiiMotorcraft'] = 'promotii/promotii_service/promotii_motorcraft_autoturisme';
$route['Promotii/PromotiiService'] = 'promotii/promotii_service/index';

$route['FordLeasing/leasingoperational'] = 'ford_leasing/leasing_operational/index';
$route['FordLeasing/leasingfinanciar'] = 'ford_leasing/leasing_financiar/index';
$route['FordLeasing/creditauto'] = 'ford_leasing/credit_auto/index';
$route['FordLeasing/Overview'] = 'ford_leasing/overview/index';

$route['FordFleet'] = 'flote/flote/index';
$route['FordFleet/PrezentareGenerala'] = 'flote/prezentare_generala_fl/index';

$route['Tehnologie'] = 'tehnologie/prezentare/index';

$route['FordService/Motorcraft/Reparatii/Baterie'] = 'ford_service/motorcraft/baterie/index';
$route['FordService/Motorcraft/Reparatii/AerConditionat'] = 'ford_service/motorcraft/aer_conditionat/index';
$route['FordService/Motorcraft/Reparatii/Suspensii'] = 'ford_service/motorcraft/suspensii/index';
$route['FordService/Motorcraft/Reparatii/Antigel'] = 'ford_service/motorcraft/antigel/index';
$route['FordService/Motorcraft/Reparatii/CureaDeDistributie'] = 'ford_service/motorcraft/curea/index';
$route['FordService/Motorcraft/Reparatii/Stergatoare'] = 'ford_service/motorcraft/stergatoare/index';
$route['FordService/Motorcraft/Reparatii/Ambreiaje'] = 'ford_service/motorcraft/ambreiaje/index';
$route['FordService/Motorcraft/Reparatii/Frane'] = 'ford_service/motorcraft/frane/index';
$route['FordService/Motorcraft/Reparatii'] = 'ford_service/motorcraft/reparatii/index';
$route['FordService/Motorcraft/Pre-verificareITP'] = 'ford_service/motorcraft/preitp/index';

$route['FordService/Motorcraft/AnvelopeVara/Transit'] = 'ford_service/motorcraft2/transitvara/index';
$route['FordService/Motorcraft/AnvelopeVara/Kuga'] = 'ford_service/motorcraft2/kugavara/index';
$route['FordService/Motorcraft/AnvelopeVara/Mondeo'] = 'ford_service/motorcraft2/mondeovara/index';
$route['FordService/Motorcraft/AnvelopeVara/C-MAX'] = 'ford_service/motorcraft2/cmaxvara/index';
$route['FordService/Motorcraft/AnvelopeVara/Focus'] = 'ford_service/motorcraft2/focusvara/index';
$route['FordService/Motorcraft/AnvelopeVara/Fusion'] = 'ford_service/motorcraft2/fusionvara/index';
$route['FordService/Motorcraft/AnvelopeVara/Fiesta'] = 'ford_service/motorcraft2/fiestavara/index';
$route['FordService/Motorcraft/AnvelopeVara/Ka'] = 'ford_service/motorcraft2/kavara/index';
$route['FordService/Motorcraft/AnvelopeVara'] = 'ford_service/motorcraft2/anv_vara/index';

$route['FordService/Motorcraft/Anvelope/Transit'] = 'ford_service/motorcraft/transit/index';
$route['FordService/Motorcraft/Anvelope/Kuga'] = 'ford_service/motorcraft/kuga/index';
$route['FordService/Motorcraft/Anvelope/Mondeo'] = 'ford_service/motorcraft/mondeo/index';
$route['FordService/Motorcraft/Anvelope/C-MAX'] = 'ford_service/motorcraft/c_max/index';
$route['FordService/Motorcraft/Anvelope/Focus'] = 'ford_service/motorcraft/focus/index';
$route['FordService/Motorcraft/Anvelope/Fusion'] = 'ford_service/motorcraft/fusion/index';
$route['FordService/Motorcraft/Anvelope/Fiesta'] = 'ford_service/motorcraft/fiesta/index';
$route['FordService/Motorcraft/Anvelope/Ka'] = 'ford_service/motorcraft/ka/index';
$route['FordService/Motorcraft/Anvelope'] = 'ford_service/motorcraft/anvelope/index';

$route['FordService/Motorcraft/10lasuta'] = 'ford_service/motorcraft/lasuta/index';
$route['FordService/Motorcraft/Service'] = 'ford_service/motorcraft/service/index';
$route['FordService/Motorcraft'] = 'ford_service/motorcraft/index';
$route['FordService/Accesorii'] = 'ford_service/accesorii_a/index';


$route['FordService/FordSYNCBluetooth/FordSYNC2'] = 'ford_service/ford_sync_bluetooth/ford_sync2/index';
$route['FordService/FordSYNCBluetooth/SYNC_AppLink_Catalogul'] = 'ford_service/ford_sync_bluetooth/sync_applink/index';
$route['FordService/FordSYNCBluetooth/Prezentare'] = 'ford_service/ford_sync_bluetooth/prezentare/index';
$route['FordService/FordSYNCBluetooth/Bluetooth_cu_comanda_vocala'] = 'ford_service/ford_sync_bluetooth/bluetooth_comanda_vocala/index';
$route['FordService/FordSYNCBluetooth/Ford_SYNC_1'] = 'ford_service/ford_sync_bluetooth/ford_sync_1/index';
$route['FordService/FordSYNCBluetooth/Ford_SYNC_1.2'] = 'ford_service/ford_sync_bluetooth/ford_sync_1_1/index';
$route['FordService/FordSYNCBluetooth'] = 'ford_service/ford_sync_bluetooth/index';
$route['FordService/Ford-SYNC-cu-AppLink'] = 'ford_service/ford_sync_app/index';
$route['FordService/FordSYNC'] = 'ford_service/ford_sync/index';
$route['FordService/Ford-Lifestyle-Collection'] = 'ford_service/ford_lifestyle/index';
$route['FordService/AccidenteSiReparatii'] = 'ford_service/accidente_si_reparatii/index';
$route['FordService/FordAsistenta12'] = 'ford_service/ford_asistenta_12/index';
$route['FordService/Euro_NCAP_Advanced'] = 'ford_service/euro_ncap/index';
$route['FordService/E10'] = 'ford_service/e_10/index';
$route['FordService/IntrebariFrecvente'] = 'ford_service/intrebari/index';
$route['FordService/Refrigerant_R134a'] = 'ford_service/refrigerant/index';

$route['FordService/GarantiiSiRevizii/GarantieAutovehiculeNoi'] = 'ford_service/garantii/garantie_autovehicule_noi/index';
$route['FordService/GarantiiSiRevizii/ReviziiFordService'] = 'ford_service/garantii/revizii_ford_service/index';
$route['FordService/GarantiiSiRevizii/FordGarantia12'] = 'ford_service/garantii/ford_garantia_12/index';
$route['FordService/GarantiiSiRevizii/FordProtect'] = 'ford_service/garantii/ford_protect/index';
$route['FordService/GarantiiSiRevizii'] = 'ford_service/garantii/index';
$route['FordService/Service'] = 'ford_service/service/index';
$route['FordService/FordServiceApp'] = 'ford_service/service_app/index';

$route['Business_Service_Club'] = 'bussines_service_club/bussines_service_club/index';
$route['Contact'] = 'contact/contact/index';

$route['Autoturisme'] = 'xyz';


/* End of file routes.php */
/* Location: ./application/config/routes.php */