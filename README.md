# Fisierele cu care lucrezi

* \application\config\routes.php
  In asta o sa pui toate url-urile pe care le faci (ptr fiecare pagina ai un url)
  Exemplu: $route['Autoturisme/NoulMustang'] = 'autoturisme/noul_mustang';
   - $route['Autoturisme/NoulMustang'] -> ce apare intre ghilimele aici e exact url-ul care o sa fie in bara pentru o pagina
   -  = 'autoturisme/noul_mustang' -> prima parte iti zice fisierul din directorul '\controllers' pe care tre sa-l creezi, daca nu e creat, in cazul asta: autoturisme
    -> a doau parte iti zice ce functie tre sa scrii in fisierul asta: in cazul asta "noul_mustang"

   Fomratul unui "controller":
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class [Numele_fisierului_dar_cu_majuscula:Autoturisme] extends CI_Controller
{
}
   Formatul unei funxctii:
    public function [numele_aici](){

    }


*