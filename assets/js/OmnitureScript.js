/* ***************** FoE UK DYNAMIC H.27.2 Code ********/
/*
140910 - added french microsites
140912 - added vignale and modeio microsites
141027 - adding new country sites
*/
/************************ ADDITIONAL FEATURES ************************
Dynamic Report Suite Selection
Universal Tag
Plugins
*/
if(!(typeof market == "undefined" || market==null ||market==''))var omnitureCountry=market
if (typeof omnitureCountry == "undefined" || omnitureCountry==null || omnitureCountry=='')var omnitureCountry="novalue"
else omnitureCountry=omnitureCountry.toLowerCase();
var s_account="fmeudev"
var s=s_gi(s_account,1)		
s.linkInternalFilters="javascript:,fiesta.ford.eu,focus.ford.eu,ka.ford.eu,kuga.ford.eu,kineticdesign.ford.eu,max.ford.eu,commercialvehicles.ford.eu,cmax.ford.eu,fordpartsplus.co.uk,mondeo.ford.eu,fordeumicrosites.com,econetic.ford.eu,mondeo.ford.eu,newfocus.ford.eu,ford.co.uk,fordfleet.it,ford.wundermaninteractive.com,enginemgmtqa.warley.fordstar.com,wwwqa.ie-delivery-engine.ford.com,wwwqa.fordconnection.ford.com,ford.com.tr,ford.at,ford.be,ford.ch,ford.com.co,ford.cz,ford.de,ford.dk,ford.com.ec,ford.es,ford.fi,ford.fr,ford.gr,ford.hu,ford.ie,ford.it,ford.lu,ford.nl,ford.no,ford.pl,ford.pt,ford.ru,ford.se,ford.si,ford.com.ve,talkbackclub.com,fordpartsplus.ie,fordpartsplus.es,fordparts.com.pt,fordoriginalteile.ch,piecesoriginalesford.ch,fordparts.it,fordalkatreszplusz.hu,fordczesci.com.pl,fordpartsplus.dk,fordpartner.ru,fordparts.gr,ford.ro,fordfleet.co.uk,consumer-connect.com,fordconnection.ford.com,ford-es.mypubliceye.com,cfa.ford.com,ffe-aurisq.ford.com,dearborn.ford.com,parlonsford.fr,parlons-ford.com,parlons-ford.fr,parlonsford.com,ford-technologien.de,direct.ccford.cz,911assist.ford.com,emergencyassistance.ford.com,fordbmax.com,fordbmax.it,infoford.com,fordopenworld.com"
s.currencyCode="EUR"
var urlist="www.fiesta.ford.eu,www.focus.ford.eu,www.ka.ford.eu,www.kuga.ford.eu,www.kineticdesign.ford.eu,www.smax.ford.eu,www.commercialvehicles.ford.eu,www.cmax.ford.eu,www.fordpartsplus.co.uk,www.mondeo.ford.eu,www.fordeumicrosites.com,www.econetic.ford.eu,www.newfocus.ford.eu,www.ford.co.uk,www.fordfleet.it,www.config.ford.co.uk,www.config.ford.es,www.config.ford.fr,www.config.ford.it,www.config.ford.pt,www.config.ford.ie,www.config.ford.at,www.config.ford.be,www.config.ford.ru,www.config.ford.de,www.config.ford.fi,www.config.ford.cz,www.config.ford.se,www.config.ford.dk,www.config.ford.no,www.config.ford.ch,www.config.ford.gr,www.config.ford.hu,www.config.ford.pl,www.config.ford.nl,http://apps.ford.com.tr,https://apps.ford.com.tr,www.apps.ford.com.tr,www.ford.at,www.fr.ford.be,www.nl.ford.be,www.ford.be,www.de.ford.ch,www.fr.ford.ch,www.ford.ch,www.ford.com.co,www.ford.cz,www.ford.de,www.ford.dk,www.ford.com.ec,www.ford.es,www.ford.fi,www.ford.fr,www.ford.gr,www.ford.hu,www.ford.ie,www.ford.it,www.ford.lu,www.ford.nl,www.ford.no,www.ford.pl,www.ford.pt,www.ford.ru,www.ford.se,www.ford.si,www.ford.com.ve,www.talkbackclub.com,www.fordpartsplus.ie,www.fordpartsplus.es,www.fordparts.com.pt,www.fordoriginalteile.ch,www.piecesoriginalesford.ch,www.fordparts.it,www.fordalkatreszplusz.hu,www.fordczesci.com.pl,www.fordpartsplus.dk,www.ford-dily.cz,www.fordpartner.ru,www.fordparts.gr,www.ford.ro,www.fordfleet.co.uk,www.ford.com.tr,www.consumer-connect.com,http://ford-es.mypubliceye.com,www.ffe-aurisq.ford.com,www.cfa.ford.com,www.parlonsford.fr,www.parlons-ford.com,www.parlons-ford.fr,www.parlonsford.com,www.ford-technologien.de,https://direct.ccford.cz/,http://direct.ccford.cz/,www.democratizingtechnology.com,www.democratizingtechnology.it,www.fordexplorer.ru,http://ford.be,http://ford.ch,http://secure.fordeumicrosites.com,https://secure.fordeumicrosites.com,www.fordassiste.com:8080,www.fordassiste.com,http://fordcredit.be,www.fordcredit.be,https://fordcredit.be,http://fordcredit.ch,www.fordcredit.ch,https://fordcredit.ch,www.fordinromania.ro.http://fordinromania.ro,www.911assist.ford.com,www.emergencyassistance.ford.com,http://fordbmax.com,http://www.fordbmax.com,http://www.fordbmax.it,http://fordbmax.it,http://infoford.com,www.infoford.com,www.fordopenworld.com,www.drivetowembley.com,http://engine.ccford.cz,https://secure.ford.co.uk,www.config.ford.hu,http://form.ccford.hu,https://form.ccford.hu,http://ccford.cz,https://ccford.cz,http://tools.ccford.cz,https://tools.ccford.cz,http://development.ccford.cz,https://development.ccford.cz,http://konfigurator.zaostrete.cz,https://konfigurator.zaostrete.cz,http://cernahora.ccford.cz,https://cernahora.ccford.cz,http://apps.ford.com.tr,https://apps.ford.com.tr,www.apps.ford.com.tr,http://m.ford.com.tr,https://m.ford.com.tr,http://apps.ford.com.tr,https://apps.ford.com.tr,www.config.ford.gr,www.config.ford.ro,https://secure.ford.at,https://secure.ford.be,https://secure.fr.ford.be,https://secure.nl.ford.be,https://secure.ford.cz,https://secure.ford.dk,https://secure.ford.fi,https://secure.ford.fr,https://secure.ford.de,https://secure.ford.gr,https://secure.ford.nl,https://secure.ford.hu,https://secure.ford.ie,https://secure.ford.it,https://secure.ford.lu,https://secure.ford.no,https://secure.ford.pt,https://secure.ford.ro,https://secure.ford.ru,https://secure.ford.si,https://secure.ford.es,https://secure.ford.se,https://secure.ford.ch,https://secure.de.ford.ch,https://secure.fr.ford.ch,https://secure.ford.com.tr,https://secure.ford.pl,http://form.ccford.hu,https://form.ccford.hu,http://form.ccford.cz,https://form.ccford.cz,www.locator.forddirect.co.uk,www.forddirect.nl.ford.be,www.forddirect.fr.ford.be,www.fordselection.ford.fr,http://parlonsford.com,https://parlonsford.com,http://uzywane.ford.pl,https://uzywane.ford.pl,http://fordkuga.fr,https://fordkuga.fr,http://lemoisfordecoboost.fr,https://lemoisfordecoboost.fr,http://offresford.fr,https://offresford.fr,http://fordexplorer.ru,https://fordexplorer.ru,http://fordecosport.eu,https://fordecosport.eu,www.fordecosport.eu,www.fordkuga.fr,www.lemoisfordecoboost.fr,www.offresford.fr,www.uzywane.ford.pl,www.ford-insure.co.uk,http://ford-insure.co.uk,https://ford-insure.co.uk,www.fordselection.ford.fr,http://fordselection.ford.fr,https://fordselection.ford.fr,www.ford-original-teile.de,http://ford-original-teile.de,https://ford-original-teile.de,www.parlonsford.fr,http://parlonsford.fr,https://parlonsford.fr,http://apps.com.tr,https:apps.com.tr,http://style-de-conduite-by-ford.fr,https://style-de-conduite-by-ford.fr,www.style-de-conduite-by-ford.fr,www.concours-fordtourneo.fr,http://concours-fordtourneo.fr,https://concours-fordtourneo.fr,www.fordeasypublic.fr,http://fordeasypublic.fr,https://fordeasypublic.fr,www.ford.eu,http://ford.eu,https://ford.eu,http://consumer-connect.it,https://consumer-connect.it,www.consumer-connect.it,http://gforce.ford.com,https://gforce.ford.com,www.gforce.ford.com,www.quote.ford-insure.co.uk,http://quote.ford-insure.co.uk,https://quote.ford-insure.co.uk,http://ecosportlive.fr,https://ecosportlive.fr,www.ecosportlive.fr,http://ecosportchallenge.de,https://ecosportchallenge.de,www.ecosportchallenge.de,http://ecosport-challenge.de,https://ecosport-challenge.de,www.ecosport-challenge.de,http://ford.probnejazdy.pl,https://ford.probnejazdy.pl,www.ford.probnejazdy.pl,www.gebrauchte.ford.at,https://gebrauchte.ford.at,http://gebrauchte.ford.at,www.ford-firmenkunden.de,http://ford-firmenkunden.de,https://ford-firmenkunden.de,www.ford-mobile-connectivity.com,http://ford-mobile-connectivity.com,https://ford-mobile-connectivity.com,www.eused.ford.com,http://eused.ford.com,https://eused.ford.com,http://ford.wundermandev.hu/testdrive_v2/htdocs/,https://ford.wundermandev.hu/testdrive_v2/htdocs/,http://focus.ford.at,https://focus.ford.at,http://focus.fr.ford.be,https://focus.fr.ford.be,http://focus.nl.ford.be,https://focus.nl.ford.be,http://focus.ford.cz,https://focus.ford.cz,http://focus.ford.dk,https://focus.ford.dk,http://focus.ford.fi,https://focus.ford.fi,http://focus.ford.fr,https://focus.ford.fr,http://focus.ford.de,https://focus.ford.de,http://focus.ford.gr,https://focus.ford.gr,http://focus.ford.hu,https://focus.ford.hu,http://focus.ford.ie,https://focus.ford.ie,http://focus.ford.it,https://focus.ford.it,http://focus.ford.lu,https://focus.ford.lu,http://focus.ford.nl,https://focus.ford.nl,http://focus.ford.no,https://focus.ford.no,http://focus.ford.pt,https://focus.ford.pt,http://focus.ford.ro,https://focus.ford.ro,http://focus.ford.ru,https://focus.ford.ru,http://focus.ford.es,https://focus.ford.es,http://focus.ford.se,https://focus.ford.se,http://focus.de.ford.ch,https://focus.de.ford.ch,http://focus.fr.ford.ch,https://focus.fr.ford.ch,http://focus.ford.com.tr,https://focus.ford.com.tr,http://focus.ford.co.uk,https://focus.ford.co.uk,www.newfordfocus.com,http://newfordfocus.com,https://newfordfocus.com,www.ford-mondial-auto.com,https://ford-mondial-auto.com,http://ford-mondial-auto.com,http://mondeo.ford.at,https://mondeo.ford.at,http://mondeo.fr.ford.be,https://mondeo.fr.ford.be,http://mondeo.nl.ford.be,https://mondeo.nl.ford.be,http://mondeo.ford.cz,https://mondeo.ford.cz,http://mondeo.ford.dk,https://mondeo.ford.dk,http://mondeo.ford.fi,https://mondeo.ford.fi,http://mondeo.ford.fr,https://mondeo.ford.fr,http://mondeo.ford.de,https://mondeo.ford.de,http://mondeo.ford.gr,https://mondeo.ford.gr,http://mondeo.ford.hu,https://mondeo.ford.hu,http://mondeo.ford.ie,https://mondeo.ford.ie,http://mondeo.ford.it,https://mondeo.ford.it,http://mondeo.ford.lu,https://mondeo.ford.lu,http://mondeo.ford.nl,https://mondeo.ford.nl,http://mondeo.ford.no,https://mondeo.ford.no,http://mondeo.ford.pt,https://mondeo.ford.pt,http://mondeo.ford.ro,https://mondeo.ford.ro,http://mondeo.ford.ru,https://mondeo.ford.ru,http://mondeo.ford.es,https://mondeo.ford.es,http://mondeo.ford.se,https://mondeo.ford.se,http://mondeo.de.ford.ch,https://mondeo.de.ford.ch,http://mondeo.fr.ford.ch,https://mondeo.fr.ford.ch,http://mondeo.ford.com.tr,https://mondeo.ford.com.tr,http://mondeo.ford.co.uk,https://mondeo.ford.co.uk,www.newfordmondeo.com,https://newfordmondeo.com,http://newfordmondeo.com,http://mondeo.ford.com,https://mondeo.ford.com,http://vignale.ford.at,https://vignale.ford.at,http://vignale.fr.ford.be,https://vignale.fr.ford.be,http://vignale.nl.ford.be,https://vignale.nl.ford.be,http://vignale.ford.cz,https://vignale.ford.cz,http://vignale.ford.dk,https://vignale.ford.dk,http://vignale.ford.fi,https://vignale.ford.fi,http://vignale.ford.fr,https://vignale.ford.fr,http://vignale.ford.de,https://vignale.ford.de,http://vignale.ford.gr,https://vignale.ford.gr,http://vignale.ford.hu,https://vignale.ford.hu,http://vignale.ford.ie,https://vignale.ford.ie,http://vignale.ford.it,https://vignale.ford.it,http://vignale.ford.lu,https://vignale.ford.lu,http://vignale.ford.nl,https://vignale.ford.nl,http://vignale.ford.no,https://vignale.ford.no,http://vignale.ford.pt,https://vignale.ford.pt,http://vignale.ford.ro,https://vignale.ford.ro,http://vignale.ford.ru,https://vignale.ford.ru,http://vignale.ford.es,https://vignale.ford.es,http://vignale.ford.se,https://vignale.ford.se,http://vignale.de.ford.ch,https://vignale.de.ford.ch,http://vignale.fr.ford.ch,https://vignale.fr.ford.ch,http://vignale.ford.com.tr,https://vignale.ford.com.tr,http://vignale.ford.co.uk,https://vignale.ford.co.uk,www.fordvignale.com,http://fordvignale.com,https://fordvignale.com,www.vignale.ford.com,http://vignale.ford.com,https://www.vignale.ford.com,www.ford-vignale.com,http://ford-vignale.com,https://ford-vignale.com,http://it.ford.ch,https://it.ford.ch,www.it.ford.ch,http://m.it.ford.ch,https://m.it.ford.ch,www.m.it.ford.ch,http://secure.it.ford.ch,https://secure.it.ford.ch,http://secure.fr.ford.ch,https://secure.fr.ford.ch,http://secure.de.ford.ch,https://secure.de.ford.ch,http://forddealerlocator.customers.actis.ru,https://forddealerlocator.customers.actis.ru,www.forddealerlocator.customers.actis.ru,http://vignale.ford.pl,https://vignale.ford.pl,www.vignale.ford.pl,http://vignale.it.ford.ch,https://vignale.it.ford.ch,www.vignale.it.ford.ch"
var curr=document.URL
var curr2 =fnGetDomain(curr);
if(!(curr2.indexOf('www.')>-1))curr2=location.protocol+"//"+document.domain
curr=curr.toLowerCase();
curr2=curr2.toLowerCase();
if(curr.indexOf('locale=en-gb')>-1||curr.indexOf('/en-gb')>-1||curr.indexOf('/en_GB')>-1||curr.indexOf('/en_gb')>-1|| curr.indexOf('ford.co.uk')>-1||curr.indexOf('fordpartsplus.co.uk')>-1||omnitureCountry=="gb"||omnitureCountry=="uk"||curr.indexOf('talkbackclub.com')>-1||curr.indexOf('fordfleet.co.uk')>-1||curr.indexOf('cfa.ford.com')>-1||curr.indexOf('fordbmax.com')>-1||curr.indexOf('drivetowembley.com')>-1||curr.indexOf('secure.ford.co.uk')>-1||curr.indexOf('locator.forddirect.co.uk')>-1||curr.indexOf('ford-insure.co.uk')>-1||curr.indexOf('quote.ford-insure.co.uk')>-1)    
{ 
if(curr2!='' && urlist.indexOf(curr2)>-1)
{
var s_account="fmeuukprod,fmeuprod"	
var s=s_gi(s_account,1)		
s.linkInternalFilters="javascript:,ford.co.uk,fordfleet.co.uk,fordpartsplus.co.uk,locale=en-gb,ford.wundermaninteractive.com,en-GB,en-gb,enginemgmtqa.warley.fordstar.com,ie-delivery-engine.ford.com,fordconnection.ford.com,consumer-connect.com,cfa.ford.com,ffe-aurisq.ford.com,dearborn.ford.com,drivetowembley.com,secure.ford.co.uk,forddirect.co.uk,ford-insure.co.uk"
s.currencyCode="GBP"
if(curr.match('ford.co.uk')||curr.match('fordpartsplus.co.uk')||curr.match('fordfleet.co.uk')){
s.cookieDomainPeriods="3"
s.fpcookieDomainPeriods="3"	
}
}
}
if(curr.indexOf('locale=en-ie')>-1||curr.indexOf('/en-ie')>-1||curr.indexOf('/en_IE')>-1||curr.indexOf('/en_ie')>-1||curr.indexOf('ford.ie')>-1||omnitureCountry=="ie"||curr.indexOf('fordpartsplus.ie')>-1)
{
if(curr2!=''&& urlist.indexOf(curr2)>-1)
{
var s_account="fmeuieprod,fmeuprod"
var s=s_gi(s_account,1)		
s.linkInternalFilters="javascript:,ford.ie,ford.wundermaninteractive.com,en-IE,en-ie,enginemgmtqa.warley.fordstar.com,ie-delivery-engine.ford.com,fordconnection.ford.com,consumer-connect.com,ffe-aurisq.ford.com"
s.currencyCode="EUR"
}
}
if(curr.indexOf('locale=fr-fr')>-1||curr.indexOf('/fr-fr')>-1||curr.indexOf('/fr_FR')>-1||curr.indexOf('/fr_fr')>-1||curr.indexOf('ford.fr')>-1||omnitureCountry=="fr"||curr.indexOf('parlonsford.fr')>-1||curr.indexOf('parlons-ford.com')>-1||curr.indexOf('parlons-ford.fr')>-1||curr.indexOf('parlonsford.com')>-1||curr.indexOf('fordselection.ford.fr')>-1||curr.indexOf('fordkuga.fr')>-1||curr.indexOf('lemoisfordecoboost.fr')>-1||curr.indexOf('offresford.fr')>-1||curr.indexOf('parlonsford.fr')>-1||curr.indexOf('style-de-conduite-by-ford.fr')>-1||curr.indexOf('concours-fordtourneo.fr')>-1||curr.indexOf('fordeasypublic.fr')>-1||curr.indexOf('ecosportlive.fr')>-1||curr.indexOf('ford-mondial-auto.com')>-1)  
{	
if(curr2!='' && urlist.indexOf(curr2)>-1)
{
var s_account="fmeufrprod,fmeuprod"
var s=s_gi(s_account,1)	
s.linkInternalFilters="javascript:,ford.fr,ford.wundermaninteractive.com,fr-FR,fr-fr,enginemgmtqa.warley.fordstar.com,ie-delivery-engine.ford.com,fordconnection.ford.com,consumer-connect.com,ffe-aurisq.ford.com,parlonsford.fr,parlons-ford.com,parlons-ford.fr,parlonsford.com,fordkuga.fr,lemoisfordecoboost.fr,offresford.fr,fordselection.ford.fr,parlonsford.fr,style-de-conduite-by-ford.fr,concours-fordtourneo.fr,fordeasypublic.fr,ecosportlive.fr,ford-mondial-auto.com"
s.currencyCode="EUR"
}
}
if(curr.indexOf('locale=es-es')>-1||curr.indexOf('/es-es')>-1||curr.indexOf('/es_ES')>-1||curr.indexOf('/es_es')>-1||curr.indexOf('ford.es')>-1||omnitureCountry=="es"||curr.match('fordpartsplus.es')||curr.match('ford-es.mypubliceye.com')||curr.indexOf('infoford.com')>-1||curr.indexOf('www.fordopenworld.com')>-1)
{
if(curr2!=''&& urlist.indexOf(curr2)>-1)
{
var s_account="fmeuesprod,fmeuprod"	
var s=s_gi(s_account,1)	
s.linkInternalFilters="javascript:,ford.es,fordpartsplus.es,ford.wundermaninteractive.com,es-ES,es-es,enginemgmtqa.warley.fordstar.com,ie-delivery-engine.ford.com,fordconnection.ford.com,consumer-connect.com,ford-es.mypubliceye.com,ffe-aurisq.ford.com,infoford.com,fordopenworld.com"
s.currencyCode="EUR"
}
}
if(curr.indexOf('locale=de-de')>-1||curr.indexOf('/de-de')>-1||curr.indexOf('/de_DE')>-1||curr.indexOf('/de_de')>-1||curr.indexOf('ford.de')>-1||omnitureCountry=="de"||curr.indexOf('ford-technologien.de')>-1||curr.indexOf('ford-original-teile.de')>-1||curr.indexOf('ecosportchallenge.de')>-1||curr.indexOf('ecosport-challenge.de')>-1||curr.indexOf('ford-firmenkunden.de')>-1)  
{
if(curr2!=''&& urlist.indexOf(curr2)>-1)
{
var s_account="fmeudeprod,fmeuprod"	
var s=s_gi(s_account,1)	
s.linkInternalFilters="javascript:,ford.de,ford.wundermaninteractive.com,de-DE,de-de,enginemgmtqa.warley.fordstar.com,ie-delivery-engine.ford.com,fordconnection.ford.com,consumer-connect.com,ffe-aurisq.ford.com,ford-technologien.de,ford-original-teile.de,config.ford.de,ecosportchallenge.de,ecosport-challenge.de,ford-firmenkunden.de"
s.currencyCode="EUR"
}
}
if(curr.indexOf('locale=nl-be')>-1||curr.indexOf('/nl-be')>-1||curr.indexOf('/nl_BE')>-1||curr.indexOf('/nl_be')>-1||curr.indexOf('/fr_BE')>-1||curr.indexOf('/fr_be')>-1||curr.indexOf('locale=fr-be')>-1||curr.indexOf('fr-be')>-1||curr.indexOf('ford.be')>-1||omnitureCountry=="be"||curr.indexOf('fordcredit.be')>-1||curr.indexOf('forddirect.nl.ford.be')>-1||curr.indexOf('forddirect.fr.ford.be')>-1)   
{
if(curr2!=''&& urlist.indexOf(curr2)>-1)
{
var s_account="fmeubeprod,fmeuprod"
var s=s_gi(s_account,1)	
s.linkInternalFilters="javascript:,ford.be,ford.wundermaninteractive.com,nl-BE,locale=fr-be,fr-BE,fr-be,enginemgmtqa.warley.fordstar.com,ie-delivery-engine.ford.com,fordconnection.ford.com,consumer-connect.com,ffe-aurisq.ford.com,fordcredit.be"
s.currencyCode="EUR"
}
}
if(curr.indexOf('locale=fr-lu')>-1||curr.indexOf('/fr-lu')>-1||curr.indexOf('ford.lu')>-1||omnitureCountry=="lu")
{
if(curr2!=''&& urlist.indexOf(curr2)>-1)
{
var s_account="fmeuluprod,fmeuprod"
var s=s_gi(s_account,1)	
s.linkInternalFilters="javascript:,ford.lu,ford.wundermaninteractive.com,fr-LU,fr-lu,enginemgmtqa.warley.fordstar.com,ie-delivery-engine.ford.com,fordconnection.ford.com,consumer-connect.com,ffe-aurisq.ford.com"
s.currencyCode="EUR"
}
}	
if(curr.indexOf('locale=it-it')>-1||curr.indexOf('/it-it')>-1||curr.indexOf('/it_IT')>-1||curr.indexOf('/it_it')>-1||curr.indexOf('fordfleet.it')>-1||curr.indexOf('ford.it')>-1||omnitureCountry=="it"||curr.indexOf('fordparts.it')>-1||curr.indexOf('democratizingtechnology.it')>-1||curr.indexOf('democratizingtechnology.com')>-1||curr.indexOf('fordbmax.it')>-1||curr.indexOf('consumer-connect.it')>-1)  
{
if(curr2!=''&& urlist.indexOf(curr2)>-1)
{
var s_account="fmeuitprod,fmeuprod"	
var s=s_gi(s_account,1)	
s.linkInternalFilters="javascript:,ford.it,fordfleet.it,fordparts.it,ford.wundermaninteractive.com,it-IT,it-it,enginemgmtqa.warley.fordstar.com,ie-delivery-engine.ford.com,fordconnection.ford.com,consumer-connect.com,ffe-aurisq.ford.com,democratizingtechnology.it,democratizingtechnology.com,consumer-connect.it"
s.currencyCode="EUR"
}
}
if(curr.indexOf('locale=de-at')>-1||curr.indexOf('/de-at')>-1||curr.indexOf('/de_AT')>-1||curr.indexOf('/de_at')>-1||curr.indexOf('ford.at')>-1||omnitureCountry=="at"||curr.indexOf('gebrauchte.ford.at')>-1)  
{
if(curr2!=''&& urlist.indexOf(curr2)>-1)
{
var s_account="fmeuatprod,fmeuprod"	
var s=s_gi(s_account,1)	
s.linkInternalFilters="javascript:,ford.at,ford.wundermaninteractive.com,de-at,de-AT,enginemgmtqa.warley.fordstar.com,ie-delivery-engine.ford.com,fordconnection.ford.com,ffe-aurisq.ford.com,gebrauchte.ford.at"
s.currencyCode="EUR"
}
}
if(curr.indexOf('locale=cs-cz')>-1||curr.indexOf('/cs-cz')>-1||curr.indexOf('ford.cz')>-1||omnitureCountry=="cz"||curr.indexOf('ford-dily.cz')>-1||curr.indexOf('ccford.cz')>-1||curr.indexOf('engine.ccford.cz')>-1 || curr.indexOf('konfigurator.zaostrete.cz')>-1)      
{
if(curr2!=''&& urlist.indexOf(curr2)>-1)
{
var s_account="fmeuczprod,fmeuprod"	
var s=s_gi(s_account,1)	
s.linkInternalFilters="javascript:,ford-dily.cz,ford.cz,ford.wundermaninteractive.com,cs-cz,cs-CZ,enginemgmtqa.warley.fordstar.com,ie-delivery-engine.ford.com,fordconnection.ford.com,consumer-connect.com,ffe-aurisq.ford.com,ccford.cz,konfigurator.zaostrete.cz,engine.ccford.cz,form.ccford.cz,tools.ccford.cz"
s.currencyCode="CZK"
}
}
if(curr.indexOf('locale=da-dk')>-1||curr.indexOf('/da-dk')>-1||curr.indexOf('ford.dk')>-1||omnitureCountry=="dk"||curr.indexOf('fordpartsplus.dk')>-1)
{
if(curr2!=''&& urlist.indexOf(curr2)>-1)
{
var s_account="fmeudkprod,fmeuprod"	
var s=s_gi(s_account,1)	
s.linkInternalFilters="javascript:,fordpartsplus.dk,ford.dk,ford.wundermaninteractive.com,da-dk,da-DK,enginemgmtqa.warley.fordstar.com,ie-delivery-engine.ford.com,fordconnection.ford.com,consumer-connect.com,ffe-aurisq.ford.com"
s.currencyCode="DKK"
}
}
if(curr.indexOf('locale=fi-fi')>-1||curr.indexOf('/fi-fi')>-1||curr.indexOf('ford.fi')>-1||omnitureCountry=="fi")
{
if(curr2!=''&& urlist.indexOf(curr2)>-1)
{
var s_account="fmeufiprod,fmeuprod"	
var s=s_gi(s_account,1)	
s.linkInternalFilters="javascript:,locale=fi-fi,ford.fi,ford.wundermaninteractive.com,fi-fi,fi-FI,enginemgmtqa.warley.fordstar.com,ie-delivery-engine.ford.com,fordconnection.ford.com,consumer-connect.com,ffe-aurisq.ford.com"
s.currencyCode="EUR"
}
}
if(curr.indexOf('locale=de-ch')>-1||curr.indexOf('/de-ch')>-1||curr.indexOf('/de_CH')>-1||curr.indexOf('/de_ch')>-1||curr.indexOf('/fr_CH')>-1||curr.indexOf('/fr_ch')>-1||curr.indexOf('locale=fr-ch')>-1||curr.indexOf('fr-ch')>-1||curr.indexOf('ford.ch')>-1||omnitureCountry=="ch"||curr.indexOf('fordoriginalteile.ch')>-1||curr.indexOf('piecesoriginalesford.ch')>-1||curr.indexOf('fordcredit.ch')>-1)
{
if(curr2!=''&& urlist.indexOf(curr2)>-1)
{
var s_account="fmeuchprod,fmeuprod"	
var s=s_gi(s_account,1)	
s.linkInternalFilters="javascript:,ford.ch,fordoriginalteile.ch,piecesoriginalesford.ch,ford.wundermaninteractive.com,de-ch,de-CH,fr-ch,fr-CH,enginemgmtqa.warley.fordstar.com,ie-delivery-engine.ford.com,fordconnection.ford.com,consumer-connect.com,ffe-aurisq.ford.com,fordcredit.ch,it.ford.ch,m.it.ford.ch"
s.currencyCode="CHF"
}
if(curr.indexOf('de.ford.ch')>-1||curr.indexOf('fr.ford.ch')>-1){
s.cookieDomainPeriods="3"
s.fpcookieDomainPeriods="3"	
}
}
if(curr.indexOf('locale=el-gr')>-1||curr.indexOf('/el-gr')>-1||curr.indexOf('ford.gr')>-1||omnitureCountry=="gr"||curr.indexOf('fordparts.gr')>-1)
{
if(curr2!=''&& urlist.indexOf(curr2)>-1)
{
var s_account="fmeugrprod,fmeuprod"	
var s=s_gi(s_account,1)	
s.linkInternalFilters="javascript:,ford.gr,fordparts.gr,ford.wundermaninteractive.com,el-gr,el-GR,enginemgmtqa.warley.fordstar.com,ie-delivery-engine.ford.com,fordconnection.ford.com,consumer-connect.com,ffe-aurisq.ford.com"
s.currencyCode="EUR"
}
}
if(curr.indexOf('locale=hu-hu')>-1||curr.indexOf('/hu-hu')>-1||curr.indexOf('ford.hu')>-1||omnitureCountry=="hu"||curr.indexOf('fordalkatreszplusz.hu')>-1 ||curr.indexOf('ford.wundermandev.hu/testdrive_v2/htdocs/')>-1) 
{
if(curr2!=''&& urlist.indexOf(curr2)>-1)
{
var s_account="fmeuhuprod,fmeuprod"	
var s=s_gi(s_account,1)	
s.linkInternalFilters="javascript:,fordalkatreszplusz.hu,ford.hu,ford.wundermaninteractive.com,hu-hu,hu-HU,enginemgmtqa.warley.fordstar.com,ie-delivery-engine.ford.com,fordconnection.ford.com,consumer-connect.com,ffe-aurisq.ford.com,ccford.hu,ford.wundermandev.hu/testdrive_v2/htdocs/"
s.currencyCode="HUF"
}
}
if(curr.indexOf('locale=nl-nl')>-1||curr.indexOf('/nl-nl')>-1||curr.indexOf('/nl_NL')>-1||curr.indexOf('/nl_nl')>-1|| curr.indexOf('ford.nl')>-1||omnitureCountry=="nl")
{
if(curr2!=''&& urlist.indexOf(curr2)>-1)
{
var s_account="fmeunlprod,fmeuprod"	
var s=s_gi(s_account,1)	
s.linkInternalFilters="javascript:,locale=nl-nl,ford.nl,ford.wundermaninteractive.com,nl-nl,nl-NL,enginemgmtqa.warley.fordstar.com,ie-delivery-engine.ford.com,fordconnection.ford.com,consumer-connect.com,ffe-aurisq.ford.com,config.ford.nl"
s.currencyCode="EUR"
if(curr.indexOf('fr.ford.nl')>-1){
s.cookieDomainPeriods="3"
s.fpcookieDomainPeriods="3"	
}
}
}
if(curr.indexOf('locale=nb-no')>-1||curr.indexOf('/nb-no')>-1|| curr.indexOf('ford.no')>-1||omnitureCountry=="no")
{
if(curr2!=''&& urlist.indexOf(curr2)>-1)
{
var s_account="fmeunoprod,fmeuprod"	
var s=s_gi(s_account,1)	
s.linkInternalFilters="javascript:,locale=nb-no,ford.no,ford.wundermaninteractive.com,nb-no,nb-NO,enginemgmtqa.warley.fordstar.com,ie-delivery-engine.ford.com,fordconnection.ford.com,consumer-connect.com,ffe-aurisq.ford.com"
s.currencyCode="NOK"
}
if(curr.indexOf('nl.ford.no')>-1){
s.cookieDomainPeriods="3"
s.fpcookieDomainPeriods="3"	
}
}
if(curr.indexOf('locale=pl-pl')>-1||curr.indexOf('/pl-pl')>-1||curr.indexOf('ford.pl')>-1||omnitureCountry=="pl"||curr.indexOf('fordczesci.com.pl')>-1||curr.indexOf('uzywane.ford.pl')>-1 || curr.indexOf('ford.probnejazdy.pl')>-1)
{
if(curr2!=''&& urlist.indexOf(curr2)>-1)
{
var s_account="fmeuplprod,fmeuprod"	
var s=s_gi(s_account,1)	
s.linkInternalFilters="javascript:,fordczesci.com.pl,locale=pl-pl,ford.pl,ford.wundermaninteractive.com,pl-pl,pl-PL,enginemgmtqa.warley.fordstar.com,ie-delivery-engine.ford.com,fordconnection.ford.com,consumer-connect.com,ffe-aurisq.ford.com,uzywane.ford.pl,ford.probnejazdy.pl"
s.currencyCode="PLN"
if(curr.indexOf('fordczesci.com.pl')>-1)
{
s.cookieDomainPeriods="3"
s.fpcookieDomainPeriods="3"	
}
}
}
if(curr.indexOf('locale=pt-pt')>-1||curr.indexOf('/pt-pt')>-1||curr.indexOf('/pt_PT')>-1||curr.indexOf('/pt_pt')>-1||curr.indexOf('ford.pt')>-1||omnitureCountry=="pt"||curr.indexOf('fordparts.com.pt')>-1|| curr.indexOf('fordassiste.com')>-1||curr.indexOf('fordassiste.com:8080')>-1)
{
if(curr2!=''&& urlist.indexOf(curr2)>-1)
{
var s_account="fmeuptprod,fmeuprod"	
var s=s_gi(s_account,1)	
s.linkInternalFilters="javascript:,locale=pt-pt,www.fordparts.com.pt,ford.pt,ford.wundermaninteractive.com,pt-pt,pt-PT,enginemgmtqa.warley.fordstar.com,ie-delivery-engine.ford.com,fordconnection.ford.com,consumer-connect.com,ffe-aurisq.ford.com,fordassiste.com"
s.currencyCode="EUR"
if(curr.indexOf('fordparts.com.pt')>-1)
{
s.cookieDomainPeriods="3"
s.fpcookieDomainPeriods="3"	
}
}
}
if(curr.indexOf('locale=ro-ro')>-1||curr.indexOf('/ro-ro')>-1||omnitureCountry=="ro"||curr.indexOf('ford.ro')>-1||curr.indexOf('fordinromania.ro')>-1)
{
if(curr2!=''&& urlist.indexOf(curr2)>-1)
{
var s_account="fmeuroprod,fmeuprod"	
var s=s_gi(s_account,1)	
s.linkInternalFilters="javascript:,locale=ro-ro,ford.ro,ford.wundermaninteractive.com,ro-ro,ro-RO,enginemgmtqa.warley.fordstar.com,wwwqa.ie-delivery-engine.ford.com,wwwqa.fordconnection.ford.com,consumer-connect.com,ffe-aurisq.ford.com,fordinromania.ro"
s.currencyCode="ROL"
}
}
if(curr.indexOf('locale=ru-ru')>-1||curr.indexOf('/ru-ru')>-1||curr.indexOf('ford.ru')>-1||omnitureCountry=="ru"||curr.indexOf('fordpartner.ru')>-1||curr.indexOf('fordexplorer.ru')>-1||curr.indexOf('actis.ru')>-1)
{
if(curr2!=''&& urlist.indexOf(curr2)>-1)
{
var s_account="fmeuruprod,fmeuprod"	
var s=s_gi(s_account,1)	
s.linkInternalFilters="javascript:,fordpartner.ru,ford.ru,ford.wundermaninteractive.com,ru-ru,ru-RU,enginemgmtqa.warley.fordstar.com,ie-delivery-engine.ford.com,fordconnection.ford.com,consumer-connect.com,ffe-aurisq.ford.com,fordexplorer.ru,actis.ru"
s.currencyCode="RUR"
}
}
if(curr.indexOf('locale= ')>-1||curr.indexOf('/sl-si')>-1||curr.indexOf('ford.si')>-1||omnitureCountry=="si")
{
if(curr2!=''&& urlist.indexOf(curr2)>-1)
{
var s_account="fmeusiprod,fmeuprod"	
var s=s_gi(s_account,1)	
s.linkInternalFilters="javascript:,ford.si,locale=sl-si,ford.wundermaninteractive.com,sl-si,sl-si,enginemgmtqa.warley.fordstar.com,ie-delivery-engine.ford.com,fordconnection.ford.com,consumer-connect.com,ffe-aurisq.ford.com"
s.currencyCode="EUR"
}
}
if(curr.indexOf('locale=sv-se')>-1||curr.indexOf('/sv-se')>-1||curr.indexOf('ford.se')>-1||omnitureCountry=="se")
{
if(curr2!=''&& urlist.indexOf(curr2)>-1)
{
var s_account="fmeuseprod,fmeuprod"	
var s=s_gi(s_account,1)	
s.linkInternalFilters="javascript:,locale=sv-se,ford.se,ford.wundermaninteractive.com,sv-se,sv-SE,enginemgmtqa.warley.fordstar.com,ie-delivery-engine.ford.com,fordconnection.ford.com,consumer-connect.com,ffe-aurisq.ford.com"
s.currencyCode="SEK"
}
}
if(curr.indexOf('locale=tr-tr')>-1||curr.indexOf('/tr-tr')>-1||omnitureCountry=="tr"||curr.indexOf('ford.com.tr')>-1||curr.indexOf('apps.com.tr')>-1)
{
if(curr2!=''&& urlist.indexOf(curr2)>-1)
{
var s_account="fmeutrprod,fmeuprod"	
var s=s_gi(s_account,1)	
s.linkInternalFilters="javascript:,locale=tr-tr,ford.wundermaninteractive.com,tr-tr,tr-TR,enginemgmtqa.warley.fordstar.com,ie-delivery-engine.ford.com,fordconnection.ford.com,consumer-connect.com,ffe-aurisq.ford.com,ford.com.tr,apps.com.tr"
s.currencyCode="TRY"
if(curr.indexOf('ford.com.tr')>-1){
s.cookieDomainPeriods="3"
s.fpcookieDomainPeriods="3"	
}
}
}
if(curr.indexOf('ford.com.ve')>-1|| omnitureCountry=="ve")
{
if(curr2!=''&& urlist.indexOf(curr2)>-1)
{
var s_account="fmeuveprod,fmeuprod"	
var s=s_gi(s_account,1)	
s.linkInternalFilters="javascript:,ford.com.ve,ford.wundermaninteractive.com,enginemgmtqa.warley.fordstar.com,ie-delivery-engine.ford.com,fordconnection.ford.com,consumer-connect.com,ffe-aurisq.ford.com"
s.currencyCode="VEF"
s.cookieDomainPeriods="3"
s.fpcookieDomainPeriods="3"	
}
}
if(curr.indexOf('ford.com.ec')>-1|| omnitureCountry=="ec")
{
if(curr2!=''&& urlist.indexOf(curr2)>-1)
{
var s_account="fmeuecprod,fmeuprod"	
var s=s_gi(s_account,1)	
s.linkInternalFilters="javascript:,ford.com.ec,ford.wundermaninteractive.com,enginemgmtqa.warley.fordstar.com,wwwqa.ie-delivery-engine.ford.com,fordconnection.ford.com,consumer-connect.com,ffe-aurisq.ford.com"
s.currencyCode="USD"
s.cookieDomainPeriods="3"
s.fpcookieDomainPeriods="3"	
}
}
if(curr.indexOf('www.ford.com.co')>-1||omnitureCountry=="co")
{
if(curr2!=''&& urlist.indexOf(curr2)>-1)
{
var s_account="fmeucoprod,fmeuprod"	
var s=s_gi(s_account,1)	
s.linkInternalFilters="javascript:,ford.com.co,ford.wundermaninteractive.com,enginemgmtqa.warley.fordstar.com,wwwqa.ie-delivery-engine.ford.com,fordconnection.ford.com,consumer-connect.com,ffe-aurisq.ford.com"
s.currencyCode="VEF"
s.cookieDomainPeriods="3"
s.fpcookieDomainPeriods="3"	
}
}
/* urls that don't go to a specific country RS */
if(omnitureCountry=="default"||omnitureCountry=="novalue"||curr.indexOf('ford.eu')>-1||curr.indexOf('ford-mobile-connectivity.com')>-1||curr.indexOf('newfordfocus.com')>-1||curr.indexOf('newfordmondeo.com')>-1||curr.indexOf('fordvignale.com')>-1||curr.indexOf('ford-vignale.com')>-1)   
{
if(curr2!='' && urlist.indexOf(curr2)>-1 && s_account.indexOf('fmeudev')>-1)
{
var s_account="fmeuprod"	
var s=s_gi(s_account,1)	
s.linkInternalFilters="javascript:,fiesta.ford.eu,focus.ford.eu,ka.ford.eu,kuga.ford.eu,kineticdesign.ford.eu,max.ford.eu,commercialvehicles.ford.eu,cmax.ford.eu,fordpartsplus.co.uk,mondeo.ford.eu,fordeumicrosites.com,econetic.ford.eu,mondeo.ford.eu,newfocus.ford.eu,ford.co.uk,fordfleet.it,ford.wundermaninteractive.com,enginemgmtqa.warley.fordstar.com,wwwqa.ie-delivery-engine.ford.com,wwwqa.fordconnection.ford.com,ford.com.tr,ford.at,ford.be,ford.ch,ford.com.co,ford.cz,ford.de,ford.dk,ford.com.ec,ford.es,ford.fi,ford.fr,ford.gr,ford.hu,ford.ie,ford.it,ford.lu,ford.nl,ford.no,ford.pl,ford.pt,ford.ru,ford.se,ford.si,ford.com.ve,talkbackclub.com,fordpartsplus.ie,fordpartsplus.es,fordparts.com.pt,fordoriginalteile.ch,piecesoriginalesford.ch,fordparts.it,fordalkatreszplusz.hu,fordczesci.com.pl,fordpartsplus.dk,fordpartner.ru,fordparts.gr,ford.ro,fordfleet.co.uk,consumer-connect.com,fordconnection.ford.com,ford-es.mypubliceye.com,cfa.ford.com,ffe-aurisq.ford.com,dearborn.ford.com,parlonsford.fr,parlons-ford.com,parlons-ford.fr,parlonsford.com,ford-technologien.de,direct.ccford.cz,democratizingtechnology.com,democratizingtechnology.it,fordexplorer.ru,ford.be,ford.ch,secure.fordeumicrosites.com,ford-mobile-connectivity.com,newfordfocus.com,newfordmondeo.com,fordvignale.com,ford-vignale.com"
s.currencyCode="EUR"
}
}
/* URLs whose country RS is determined by country-language abbreviation in subdomain path, but need correct internal filters */
if(document.location.href.indexOf('fordecosport.eu')>-1||document.location.href.indexOf('eused.ford.com')>-1){
s.linkInternalFilters = s.linkInternalFilters + ',fordecosport.eu,eused.ford.com';
}	
/**************************************************COMMON CODE******************************************/
/* Conversion Config */
/* Link Tracking Config */
s.trackDownloadLinks=true
s.trackExternalLinks=true
s.trackInlineStats=true
s.linkDownloadFileTypes="exe,zip,wav,mp3,mov,mpg,avi,wmv,pdf,doc,docx,xls,xlsx,ppt,pptx"
s.linkTrackVars="None"
s.linkTrackEvents="None"
s.linkLeaveQueryString=true
/* Plugin Config */
s.usePlugins=true
function s_doPlugins(s) {
/* Force pageName to Lowercase all sites*/
if(s.pageName)
s.pageName=s.pageName.toLowerCase();
/* External Campaign Tracking */
if(!s.campaign){		
if(s.getQueryParam('bannereu'))s.campaign=s.getQueryParam('bannereu');
s.campaign=s.getCustomValOnce(s.campaign,"cmp_getval",0)
}
if(s.campaign){
s.eVar9 = s.campaign;
s.events=s.apl(s.events,"event53",",",2)
}
s.prop17=s.getAndPersistValue(s.campaign,'s_p17_pers',90);
/* Set ford campaign ID*/
if(s.getQueryParam('fmccmp'))s.eVar30=s.getQueryParam('fmccmp');
s.prop30=s.getAndPersistValue(s.eVar30,'s_p30_pers',90);
s.eVar30=s.getCustomValOnce(s.eVar30,"eVar30_getval",0);	
/* Campaign Path Tracking */
s.prop19=s.pageName;
if(s.campaign)
s.prop19=s.campaign+': '+s.pageName;
else if(s.eVar30)
s.prop19=s.eVar30+': '+s.pageName;   
/* Internal Campaign Tracking */
if(!s.eVar13)
s.eVar13=s.getQueryParam('intcmp'); 
s.eVar13=s.getCustomValOnce(s.eVar13,"int_getval",0)
s.prop13=s.getAndPersistValue(s.eVar13,'s_p13_pers',0);
/* Adobe Social Integration */
if (!s.eVar60) s.eVar60=s.getQueryParam('scmp');
s.socialPlatforms();
/* Referrer Overide */
if(s.getQueryParam('referrer'))
s.referrer=s.getQueryParam('referrer');   
/* Email Campaign Tracking */
s.eVar33=s.getQueryParam('emailid');
s.prop33=s.getAndPersistValue(s.eVar33,'s_cp_pers',90);
s.eVar31=s.getQueryParam('cks');
s.eVar33=s.getCustomValOnce(s.eVar33,"eVar33_getval",0)
s.eVar31=s.getCustomValOnce(s.eVar31,"eVar31_getval",0)
/* Paid Search Tracking */
s.eVar26 = s.prop26 = s.getQueryParam('searchid','');
s.eVar26=s.getCustomValOnce(s.eVar26,"eVar26_getval",0)
if(s.eVar26)s.events=s.apl(s.events,"event54",",",2)
/* Optimizely SiteCatalyst Integration */ 
window.optimizely = window.optimizely || [];
window.optimizely.push("activateSiteCatalyst");
/* Visit Start Logic */	
var tempSuite="nosuite"
if(!s.c_r("s_suite")){s.setSuite(s_account,"s_suite",0);}else{tempSuite=s.c_r("s_suite");}
if(!s.c_r('v_starting')){
if((!tempSuite.match(s_account))&& tempSuite!=""){
if(!isInternal()||document.referrer==''){
s.prop48=s.prop49=s.eVar8=trafficsource();s.prop8=s.getAndPersistValue(s.eVar8,'s_p_s_prop8',0);
s.eVar36 = s.getCustomValOnce(dt,'ev_36_getval',0);s.events = s.apl(s.events,'event17,event52',',',2);
var dt=popDT();
}
} 
}
var expTime=new Date;expTime.setTime(expTime.getTime()+1800000);
s.c_w('v_starting','nfp',expTime);
if(!tempSuite.match(s_account)){s.setSuite(tempSuite+s_account,"s_suite",0);tempSuite=s.c_r("s_suite");}
//support	
if(s.linkTrackVars=='None')
s.linkTrackVars="prop37,prop39,pageName,eVar52,prop52"
else s.linkTrackVars=s.linkTrackVars+",prop37,prop39,pageName,eVar52,prop52"		
s.prop37="141027"
if(!s.prop39 && s.pageName)s.prop39=s.pageName
s.eVar52=s.prop52=document.URL
s.eVar7=s.prop7= s.prop14+ " : "+s.prop15   
s.eVar10=s.prop10= s.prop14+ " : "+s.prop16  
if(s.eVar12 && s.eVar16)s.prop36=s.eVar34=s.eVar12+":"+s.eVar16
s.prop47=s.eVar47="D=UserAgent"
}
/*************************************CUSTOM COMMON SITE FUNCTIONS*****************************/
function padFrontZero(val) {
if (val < 10) return '0'+val; else return val.toString();
}
function popDT() {
var dte = new Date();
return dte.getFullYear()+padFrontZero(dte.getMonth()+1)+padFrontZero(dte.getDate())+' '+padFrontZero(dte.getHours());
}
function trafficsource() {
var fs = new Array('fmc:ford.com|corporate.ford.com','fmc:fordvehicles.com|www.ford.com/','fmc:lincoln.com|lincoln.com',
'fmc:syncmyride.com|syncmyride.com',
'fmc:fordcredit.com|fordcredit.com|acctaccess.com|onlinevehiclefinancing.com|billerweb.com',
'fmc:ford.co.uk|ford.co.uk','fmc:ford.de|ford.de','fmc:ford.es|ford.es','fmc:ford.fr|ford.fr',
'fmc:ford.it|ford.it','fmc:ford.ru|ford.ru','fmc:ford.at|ford.at','fmc:ford.be|ford.be','fmc:ford.ch|de.ford.ch',
'fmc:ford.cz|ford.cz','fmc:ford.dk|ford.dk','fmc:ford.fi|ford.fi','fmc:ford.gr|ford.gr','fmc:ford.hu|ford.hu',
'fmc:ford.ie|ford.ie','fmc:ford.lu|ford.lu','fmc:ford.nl|ford.nl','fmc:ford.nl|ford.nl','fmc:ford.no|ford.no',
'fmc:ford.pl|ford.pl','fmc:ford.pt|ford.pt','fmc:ford.se|ford.se','fmc:ford.com.tr|ford.com.tr');
if(s.getQueryParam('referrer')) var ref=s.getQueryParam('referrer') 
else var ref = document.referrer; 
for (i=0;i<fs.length;i++) {
var fss = fs[i].split('|');
for (j=1;j<fss.length;j++) {
if (ref.indexOf(fss[j])>-1){
if(refSearch(ref)){ return camp();}else return fss[0];		   
}
}
}
return camp()
}
function camp(){
if(s.getQueryParam('referrer')) var ref=s.getQueryParam('referrer') 
else var ref = document.referrer; 
var fordCamp = s.getQueryParam('fmccmp');
if(s.getQueryParam('bannereu')) return 'banner';
else if(s.getQueryParam('emailid')) return 'email';
else if(s.getQueryParam('searchid')) {s.eVar50 = s.prop50 = "paid:" + s.prop50; return 'search-paid';}
else if(s.getQueryParam('scmp')) return 'social-placement';
else if(fordCamp){if (fordCamp.indexOf('t2-fdaf')>-1 || fordCamp.indexOf('t2-lda')>-1){return 'fmc:tier2';}else return 'fmc:other';}
else if(ref=='') return 'typed-bookmarked';
else if(refSearch(ref)) {s.eVar50 = s.prop50 = "natural:"+s.prop50; return 'search-natural';}
else if(refSocial(ref)) return 'social';
else return 'natural-referrer';
}
function refSearch(ref) {
var se = new Array('.aol.|q','.aol.|query','suche.aolsvc.de|query','suche.aolsvc.de|q','ask.jp|q','ask.co|ask','ask.jp|ask','ask.co|q','google.|q','googlesyndication.com|as_q','google.|as_q','googlesyndication.com|q','bing.com|q','search.mywebsearch.com|searchfor','yahoo.com|p','yahoo.co.jp|va','yahoo.com|va','yahoo.co.jp|p','baidu.com|wd','daum.net|q','icq.com|q','myway.com|searchfor','naver.com|query','netscape.com|query,search','reference.com|q','seznam|w','abcsok.no','tiscali.it|key','virgilio.it|qs','yandex|text','search.cnn.com|query','search.earthlink.net|q','search.comcast.net|q','search.rr.com|qs','optimum.net|q','libero.it|query','web.de|su','abcsok.no|q','kvasir.no|q','centrum.cz|q','terra.es|query','zbozi.cz|q','eniro.se|search_word','webalta.ru|q','wp.pl|szukaj','clix.pt|question','dogpile.co|q','excite.|q','myay.com','mail.ru|q','ixquick.|query');
for (i = 0; i < se.length; i++) {
var tmp = se[i].split('|');
var keyword = s.getQueryParam(tmp[1], '', ref);
if (ref.indexOf(tmp[0]) > -1) {
if(keyword == '') s.eVar50=s.prop50="no keyword"
else   s.eVar50 = s.prop50 = keyword;
return true;
}
}
return false;
}
function refSocial(ref) {
var socialSites = new Array('12seconds.tv','4travel.jp','advogato.org','ameba.jp','anobii.com','asmallworld.net','backtype.com','badoo.com','bebo.com','bigadda.com','bigtent.com','biip.no','blackplanet.com','blog.seesaa.jp','blogspot.com','blogster.com','blomotion.jp','bolt.com','brightkite.com','buzznet.com','cafemom.com','care2.com','classmates.com','cloob.com','collegeblender.com','cyworld.co.kr','cyworld.com.cn','dailymotion.com','delicious.com','deviantart.com','digg.com','diigo.com','disqus.com','draugiem.lv','facebook.com','faceparty.com','fc2.com','flickr.com','flixster.com','fotolog.com','foursquare.com','friendfeed.com','friendsreunited.com','friendster.com','fubar.com','gaiaonline.com','geni.com','goodreads.com','grono.net','habbo.com','hatena.ne.jp','hi5.com','hotnews.infoseek.co.jp','hyves.nl','ibibo.com','identi.ca','imeem.com','intensedebate.com','irc-galleria.net','iwiw.hu','jaiku.com','jp.myspace.com','kaixin001.com','kaixin002.com','kakaku.com','kanshin.com','kozocom.com','last.fm','linkedin.com','livejournal.com','me2day.net','meetup.com','mister-wong.com','mixi.jp','mixx.com','mouthshut.com','multiply.com','myheritage.com','mylife.com','myspace.com','myyearbook.com','nasza-klasa.pl','netlog.com','nettby.no','netvibes.com','nicovideo.jp','ning.com','odnoklassniki.ru','orkut.com','pakila.jp','photobucket.com','pinterest.com','plaxo.com','plurk.com','plus.google.com','reddit.com','renren.com','skyrock.com','slideshare.net','smcb.jp','smugmug.com','sonico.com','studivz.net','stumbleupon.com','t.163.com','t.co','t.hexun.com','t.ifeng.com','t.people.com.cn','t.qq.com','t.sohu.com','tabelog.com','tagged.com','taringa.net','tripit.com','trombi.com','trytrend.jp','tuenti.com','tumblr.com','twine.com','twitter.com','uhuru.jp','viadeo.com','vimeo.com','vkontakte.ru','vox.com','wayn.com','weibo.com','weourfamily.com','wer-kennt-wen.de','wordpress.com','xanga.com','xing.com','yaplog.jp','yelp.com','youtube.com','yozm.daum.net','yuku.com','zooomr.com','tycammack.com');
for (i = 0; i < socialSites.length; i++) {
if (ref.indexOf(socialSites[i]) > -1) {return true;}
}
return false;
}
//List of plugins
s.doPlugins=s_doPlugins
/************************** PLUGINS SECTION *************************/
/* You may insert any plugins you wish to use here.                 */
/*
* Plugin Utility: Replace v1.0
*/
s.repl=new Function("x","o","n",""
+"var i=x.indexOf(o),l=n.length;while(x&&i>=0){x=x.substring(0,i)+n+x."
+"substring(i+o.length);i=x.indexOf(o,i+l)}return x");
/*
* Plugin: socialPlatforms v1.1
*/
s.socialPlatforms=new Function("a",""
+"var s=this,g,K,D,E,F,i;g=s.referrer?s.referrer:document.referrer;g=g."
+"toLowerCase();K=s.split(s.socPlatList,'|');for(i=0;i<K.length;i++){"
+"D=s.split(K[i],'>');if(g.indexOf(D[0])!=-1){s.contextData['a.socialcontentprovider']=D[1];}}");
s.socPlatList="facebook.com>Facebook|twitter.com>Twitter|t.co/>Twitter|youtube.com>Youtube|clipmarks.com>Clipmarks|dailymotion.com>Dailymotion|delicious.com>Delicious|digg.com>Digg|diigo.com>Diigo|flickr.com>Flickr|flixster.com>Flixster|fotolog.com>Fotolog|friendfeed.com>FriendFeed|google.com/buzz>Google Buzz|buzz.googleapis.com>Google Buzz|plus.google.com>Google+|hulu.com>Hulu|identi.ca>identi.ca|ilike.com>iLike|intensedebate.com>IntenseDebate|myspace.com>MySpace|newsgator.com>Newsgator|photobucket.com>Photobucket|plurk.com>Plurk|slideshare.net>SlideShare|smugmug.com>SmugMug|stumbleupon.com>StumbleUpon|tumblr.com>Tumblr|vimeo.com>Vimeo|wordpress.com>WordPress|xanga.com>Xanga|metacafe.com>Metacafe|pinterest.com>Pinterest";
/*  
* socialAuthors v1.5.2
*/
s.socialAuthors=new Function("",""
+"var s=this,g;g=s.referrer?s.referrer:document.referrer;if(g.indexOf"
+"('http://t.co/')===0||g.indexOf('https://t.co/')===0||g.indexOf('pi"
+"nterest.com/pin')!==-1||g.indexOf('tumblr.com')!==-1||g.indexOf('yo"
+"utube.com')!==-1){s.Integrate.add('SocialAuthor');s.Integrate.Socia"
+"lAuthor.tEvar='reserved';s.Integrate.SocialAuthor.get('http://sa-se"
+"rvices.social.omniture.com/author/name?var=[VAR]&callback=s.socialA"
+"uthorSearch&rs='+encodeURIComponent(s_account)+'&q='+encodeURICompo"
+"nent(g));s.Integrate.SocialAuthor.delay();s.Integrate.SocialAuthor."
+"setVars=function(s,p){if(p.tEvar==='reserved'){s.contextData['a.soc"
+"ialauthor']=s.user;}else{s[p.tEvar]=s.user;}}}");
s.socialAuthorSearch=new Function("obj",""
+"var s=this;if(typeof obj==='undefined'||typeof obj.author==='undefi"
+"ned'){s.user='Not Found';}else{s.user=obj.author;}s.Integrate.Socia"
+"lAuthor.ready();");
/*
* Plugin Utility: apl v1.1
*/
s.apl = new Function("l", "v", "d", "u", ""
+ "var s=this,m=0;if(!l)l='';if(u){var i,n,a=s.split(l,d);for(i=0;i<a."
+ "length;i++){n=a[i];m=m||(u==1?(n==v):(n.toLowerCase()==v.toLowerCas"
+ "e()));}}if(!m)l=l?l+d+v:v;return l");
/*
* Utility Function: split v1.5 (JS 1.0 compatible)
*/
s.split = new Function("l", "d", ""
+ "var i,x=0,a=new Array;while(l){i=l.indexOf(d);i=i>-1?i:l.length;a[x"
+ "++]=l.substring(0,i);l=l.substring(i+d.length);}return a");
/*
* Plugin: getQueryParam 2.3
*/
s.getQueryParam=new Function("p","d","u",""
+"var s=this,v='',i,t;d=d?d:'';u=u?u:(s.pageURL?s.pageURL:s.wd.locati"
+"on);if(u=='f')u=s.gtfs().location;while(p){i=p.indexOf(',');i=i<0?p"
+".length:i;t=s.p_gpv(p.substring(0,i),u+'');if(t){t=t.indexOf('#')>-"
+"1?t.substring(0,t.indexOf('#')):t;}if(t)v+=v?d+t:t;p=p.substring(i="
+"=p.length?i:i+1)}return v");
s.p_gpv=new Function("k","u",""
+"var s=this,v='',i=u.indexOf('?'),q;if(k&&i>-1){q=u.substring(i+1);v"
+"=s.pt(q,'&','p_gvf',k)}return v");
s.p_gvf=new Function("t","k",""
+"if(t){var s=this,i=t.indexOf('='),p=i<0?t:t.substring(0,i),v=i<0?'T"
+"rue':t.substring(i+1);if(p.toLowerCase()==k.toLowerCase())return s."
+"epa(v)}return ''");
/*
* Plugin: Set Suite
*/
s.setSuite=new Function("v","c","e",""
+"var s=this,k=s.c_r(c),a=new Date;e=e?e:0;if(v){a.setTime(a.getTime("
+")+1800000);s.c_w(c,v,a);}else{v='novalue';a.setTime(a.getTime()+1800000);s.c_w(c,v,a);}");
/*
* Plugin: getAndPersistValue 0.3 - get a value on every page
*/
s.getAndPersistValue=new Function("v","c","e",""
+"var s=this,a=new Date;e=e?e:0;a.setTime(a.getTime()+e*86400000);if("
+"v)s.c_w(c,v,e?a:0);return s.c_r(c);");
/*
* Plugin: getCustomValOnce 
*/
s.getCustomValOnce=new Function("v","c","e",""
+"var s=this,k=s.c_r(c),a=new Date;e=e?e:0;if(v){a.setTime(a.getTime("
+")+1800000);if(!s.c_w(c,v,a))s.c_w(c,v,0);}else{a.setTime(a.getTime()+1800000);v=s.c_r(c);if(!s.c_w(c,v,a))s.c_w(c,v,a);}return v==k?'':v");
s.join = new Function("v","p",""
+"var s = this;var f,b,d,w;if(p){f=p.front?p.front:'';b=p.back?p.back"
+":'';d=p.delim?p.delim:'';w=p.wrap?p.wrap:'';}var str='';for(var x=0"
+";x<v.length;x++){if(typeof(v[x])=='object' )str+=s.join( v[x],p);el"
+"se str+=w+v[x]+w;if(x<v.length-1)str+=d;}return f+str+b;");
/*
* Plugin: getVisitStart v2.0 - returns 1 on first page of visit
* otherwise 0
*/
s.getVisitStart=new Function("c",""
+"var s=this,v=1,t=new Date;t.setTime(t.getTime()+1800000);if(s.c_r(c"
+")){v=0}if(!s.c_w(c,1,t)){s.c_w(c,1,0)}if(!s.c_r(c)){v=0}return v;"); 
function fnGetDomain(url) {
return (url.match(/:\/\/(.[^/]+)/)[1]);
}
function isInternal()
{
var ref=document.referrer
if(ref!='')
{
if(ref.indexOf('www.')>-1)ref=ref.replace('www.','')
if(ref.indexOf('https://')>-1)ref=ref.replace('https://','')
if(ref.indexOf('http://')>-1)ref=ref.replace('http://','')	
var ref1=ref.split('/');
var refdom=ref1[0];
var filter =s.linkInternalFilters.split(',')
for(i=0;i<filter.length; i++)
{
if(refdom.indexOf(filter[i])>-1)return true	;
}
}	
return false;
}
/* Configure Modules and Plugins */
/* max time to wait for 3rd party api response in milliseconds */
s.maxDelay='3000';
s.loadModule("Integrate")
s.Integrate.onLoad=function(s,m){
s.socialAuthors();
//add other integration module dependent functions here
};
/* WARNING: Changing any of the below variables will cause drastic
changes to how your visitor data is collected.  Changes should only be
made when instructed to do so by your account manager.*/
s.visitorNamespace="fordeu"
s.trackingServer="fordeu.d3.sc.omtrdc.net"
/************* Modules **************/
/* Module: Integrate */
s.m_Integrate_c="var m=s.m_i('Integrate');m.add=function(n,o){var m=this,p;if(!o)o='s_Integrate_'+n;if(!m.s.wd[o])m.s.wd[o]=new Object;m[n]=new Object;p=m[n];p._n=n;p._m=m;p._c=0;p._d=0;p.disable=0;p"
+".get=m.get;p.delay=m.delay;p.ready=m.ready;p.beacon=m.beacon;p.script=m.script;m.l[m.l.length]=n};m._g=function(t){var m=this,s=m.s,i,p,f=(t?'use':'set')+'Vars',tcf;for(i=0;i<m.l.length;i++){p=m[m."
+"l[i]];if(p&&!p.disable&&p[f]){if(s.apv>=5&&(!s.isopera||s.apv>=7)){tcf=new Function('s','p','f','var e;try{p[f](s,p)}catch(e){}');tcf(s,p,f)}else p[f](s,p)}}};m._t=function(){this._g(1)};m._fu=func"
+"tion(p,u){var m=this,s=m.s,v,x,y,z,tm=new Date;if(u.toLowerCase().substring(0,4) != 'http')u='http://'+u;if(s.ssl)u=s.rep(u,'http:','https:');p.RAND=Math&&Math.random?Math.floor(Math.random()*10000"
+"000000000):tm.getTime();p.RAND+=Math.floor(tm.getTime()/10800000)%10;x=0;while(x>=0){x=u.indexOf('[',x);if(x>=0){y=u.indexOf(']',x);if(y>x){z=u.substring(x+1,y);if(z.length>2&&z.substring(0,2)=='s."
+"'){v=s[z.substring(2)];if(!v)v=''}else{v=''+p[z];if(!(v==p[z]||parseFloat(v)==p[z]))z=0}if(z) {u=u.substring(0,x)+s.rep(escape(v),'+','%2B')+u.substring(y+1);x=y-(z.length-v.length+1)} else {x=y}}}"
+"}return u};m.get=function(u,v){var p=this,m=p._m;if(!p.disable){if(!v)v='s_'+m._in+'_Integrate_'+p._n+'_get_'+p._c;p._c++;p.VAR=v;p._d++;m.s.loadModule('Integrate:'+v,m._fu(p,u),0,1,p._n)}};m.delay"
+"=function(){var p=this;if(p._d<=0)p._d=1};m.ready=function(){var p=this,m=p._m;p._d=0;if(!p.disable)m.s.dlt()};m._d=function(){var m=this,i,p;for(i=0;i<m.l.length;i++){p=m[m.l[i]];if(p&&!p.disable&"
+"&p._d>0)return 1}return 0};m._x=function(d,n){var p=this[n],x;if(!p.disable){for(x in d)if(x&&(!Object||!Object.prototype||!Object.prototype[x]))p[x]=d[x];p._d--}};m.beacon=function(u){var p=this,m"
+"=p._m,s=m.s,imn='s_i_'+m._in+'_Integrate_'+p._n+'_'+p._c,im;if(!p.disable&&s.d.images&&s.apv>=3&&(!s.isopera||s.apv>=7)&&(s.ns6<0||s.apv>=6.1)){p._c++;im=s.wd[imn]=new Image;im.src=m._fu(p,u)}};m.s"
+"cript=function(u){var p=this,m=p._m;if(!p.disable)m.s.loadModule(0,m._fu(p,u),0,1)};m.l=new Array;if(m.onLoad)m.onLoad(s,m)";
s.m_i("Integrate");
/************* DO NOT ALTER ANYTHING BELOW THIS LINE ! **************/
var s_code='',s_objectID;function s_gi(un,pg,ss){var c="s.version='H.27.2';s.an=s_an;s.logDebug=function(m){var s=this,tcf=new Function('var e;try{console.log(\"'+s.rep(s.rep(s.rep(m,\"\\\\\",\"\\\\"
+"\\\\\"),\"\\n\",\"\\\\n\"),\"\\\"\",\"\\\\\\\"\")+'\");}catch(e){}');tcf()};s.cls=function(x,c){var i,y='';if(!c)c=this.an;for(i=0;i<x.length;i++){n=x.substring(i,i+1);if(c.indexOf(n)>=0)y+=n}retur"
+"n y};s.fl=function(x,l){return x?(''+x).substring(0,l):x};s.co=function(o){return o};s.num=function(x){x=''+x;for(var p=0;p<x.length;p++)if(('0123456789').indexOf(x.substring(p,p+1))<0)return 0;ret"
+"urn 1};s.rep=s_rep;s.sp=s_sp;s.jn=s_jn;s.ape=function(x){var s=this,h='0123456789ABCDEF',f=\"+~!*()'\",i,c=s.charSet,n,l,e,y='';c=c?c.toUpperCase():'';if(x){x=''+x;if(s.em==3){x=encodeURIComponent("
+"x);for(i=0;i<f.length;i++) {n=f.substring(i,i+1);if(x.indexOf(n)>=0)x=s.rep(x,n,\"%\"+n.charCodeAt(0).toString(16).toUpperCase())}}else if(c=='AUTO'&&('').charCodeAt){for(i=0;i<x.length;i++){c=x.su"
+"bstring(i,i+1);n=x.charCodeAt(i);if(n>127){l=0;e='';while(n||l<4){e=h.substring(n%16,n%16+1)+e;n=(n-n%16)/16;l++}y+='%u'+e}else if(c=='+')y+='%2B';else y+=escape(c)}x=y}else x=s.rep(escape(''+x),'+"
+"','%2B');if(c&&c!='AUTO'&&s.em==1&&x.indexOf('%u')<0&&x.indexOf('%U')<0){i=x.indexOf('%');while(i>=0){i++;if(h.substring(8).indexOf(x.substring(i,i+1).toUpperCase())>=0)return x.substring(0,i)+'u00"
+"'+x.substring(i);i=x.indexOf('%',i)}}}return x};s.epa=function(x){var s=this,y,tcf;if(x){x=s.rep(''+x,'+',' ');if(s.em==3){tcf=new Function('x','var y,e;try{y=decodeURIComponent(x)}catch(e){y=unesc"
+"ape(x)}return y');return tcf(x)}else return unescape(x)}return y};s.pt=function(x,d,f,a){var s=this,t=x,z=0,y,r;while(t){y=t.indexOf(d);y=y<0?t.length:y;t=t.substring(0,y);r=s[f](t,a);if(r)return r"
+";z+=y+d.length;t=x.substring(z,x.length);t=z<x.length?t:''}return ''};s.isf=function(t,a){var c=a.indexOf(':');if(c>=0)a=a.substring(0,c);c=a.indexOf('=');if(c>=0)a=a.substring(0,c);if(t.substring("
+"0,2)=='s_')t=t.substring(2);return (t!=''&&t==a)};s.fsf=function(t,a){var s=this;if(s.pt(a,',','isf',t))s.fsg+=(s.fsg!=''?',':'')+t;return 0};s.fs=function(x,f){var s=this;s.fsg='';s.pt(x,',','fsf'"
+",f);return s.fsg};s.mpc=function(m,a){var s=this,c,l,n,v;v=s.d.visibilityState;if(!v)v=s.d.webkitVisibilityState;if(v&&v=='prerender'){if(!s.mpq){s.mpq=new Array;l=s.sp('webkitvisibilitychange,visi"
+"bilitychange',',');for(n=0;n<l.length;n++){s.d.addEventListener(l[n],new Function('var s=s_c_il['+s._in+'],c,v;v=s.d.visibilityState;if(!v)v=s.d.webkitVisibilityState;if(s.mpq&&v==\"visible\"){whil"
+"e(s.mpq.length>0){c=s.mpq.shift();s[c.m].apply(s,c.a)}s.mpq=0}'),false)}}c=new Object;c.m=m;c.a=a;s.mpq.push(c);return 1}return 0};s.si=function(){var s=this,i,k,v,c=s_gi+'var s=s_gi(\"'+s.oun+'\")"
+";s.sa(\"'+s.un+'\");';for(i=0;i<s.va_g.length;i++){k=s.va_g[i];v=s[k];if(v!=undefined){if(typeof(v)!='number')c+='s.'+k+'=\"'+s_fe(v)+'\";';else c+='s.'+k+'='+v+';'}}c+=\"s.lnk=s.eo=s.linkName=s.li"
+"nkType=s.wd.s_objectID=s.ppu=s.pe=s.pev1=s.pev2=s.pev3='';\";return c};s.c_d='';s.c_gdf=function(t,a){var s=this;if(!s.num(t))return 1;return 0};s.c_gd=function(){var s=this,d=s.wd.location.hostnam"
+"e,n=s.fpCookieDomainPeriods,p;if(!n)n=s.cookieDomainPeriods;if(d&&!s.c_d){n=n?parseInt(n):2;n=n>2?n:2;p=d.lastIndexOf('.');if(p>=0){while(p>=0&&n>1){p=d.lastIndexOf('.',p-1);n--}s.c_d=p>0&&s.pt(d,'"
+".','c_gdf',0)?d.substring(p):d}}return s.c_d};s.c_r=function(k){var s=this;k=s.ape(k);var c=' '+s.d.cookie,i=c.indexOf(' '+k+'='),e=i<0?i:c.indexOf(';',i),v=i<0?'':s.epa(c.substring(i+2+k.length,e<"
+"0?c.length:e));return v!='[[B]]'?v:''};s.c_w=function(k,v,e){var s=this,d=s.c_gd(),l=s.cookieLifetime,t;v=''+v;l=l?(''+l).toUpperCase():'';if(e&&l!='SESSION'&&l!='NONE'){t=(v!=''?parseInt(l?l:0):-6"
+"0);if(t){e=new Date;e.setTime(e.getTime()+(t*1000))}}if(k&&l!='NONE'){s.d.cookie=k+'='+s.ape(v!=''?v:'[[B]]')+'; path=/;'+(e&&l!='SESSION'?' expires='+e.toGMTString()+';':'')+(d?' domain='+d+';':''"
+");return s.c_r(k)==v}return 0};s.eh=function(o,e,r,f){var s=this,b='s_'+e+'_'+s._in,n=-1,l,i,x;if(!s.ehl)s.ehl=new Array;l=s.ehl;for(i=0;i<l.length&&n<0;i++){if(l[i].o==o&&l[i].e==e)n=i}if(n<0){n=i"
+";l[n]=new Object}x=l[n];x.o=o;x.e=e;f=r?x.b:f;if(r||f){x.b=r?0:o[e];x.o[e]=f}if(x.b){x.o[b]=x.b;return b}return 0};s.cet=function(f,a,t,o,b){var s=this,r,tcf;if(s.apv>=5&&(!s.isopera||s.apv>=7)){tc"
+"f=new Function('s','f','a','t','var e,r;try{r=s[f](a)}catch(e){r=s[t](e)}return r');r=tcf(s,f,a,t)}else{if(s.ismac&&s.u.indexOf('MSIE 4')>=0)r=s[b](a);else{s.eh(s.wd,'onerror',0,o);r=s[f](a);s.eh(s"
+".wd,'onerror',1)}}return r};s.gtfset=function(e){var s=this;return s.tfs};s.gtfsoe=new Function('e','var s=s_c_il['+s._in+'],c;s.eh(window,\"onerror\",1);s.etfs=1;c=s.t();if(c)s.d.write(c);s.etfs=0"
+";return true');s.gtfsfb=function(a){return window};s.gtfsf=function(w){var s=this,p=w.parent,l=w.location;s.tfs=w;if(p&&p.location!=l&&p.location.host==l.host){s.tfs=p;return s.gtfsf(s.tfs)}return "
+"s.tfs};s.gtfs=function(){var s=this;if(!s.tfs){s.tfs=s.wd;if(!s.etfs)s.tfs=s.cet('gtfsf',s.tfs,'gtfset',s.gtfsoe,'gtfsfb')}return s.tfs};s.mrq=function(u){var s=this,l=s.rl[u],n,r;s.rl[u]=0;if(l)fo"
+"r(n=0;n<l.length;n++){r=l[n];s.mr(0,0,r.r,r.t,r.u)}};s.flushBufferedRequests=function(){};s.mr=function(sess,q,rs,ta,u){var s=this,dc=s.dc,t1=s.trackingServer,t2=s.trackingServerSecure,tb=s.trackin"
+"gServerBase,p='.sc',ns=s.visitorNamespace,un=s.cls(u?u:(ns?ns:s.fun)),r=new Object,l,imn='s_i_'+s._in+'_'+un,im,b,e;if(!rs){if(t1){if(t2&&s.ssl)t1=t2}else{if(!tb)tb='2o7.net';if(dc)dc=(''+dc).toLow"
+"erCase();else dc='d1';if(tb=='2o7.net'){if(dc=='d1')dc='112';else if(dc=='d2')dc='122';p=''}t1=un+'.'+dc+'.'+p+tb}rs='http'+(s.ssl?'s':'')+'://'+t1+'/b/ss/'+s.un+'/'+(s.mobile?'5.1':'1')+'/'+s.vers"
+"ion+(s.tcn?'T':'')+'/'+sess+'?AQB=1&ndh=1'+(q?q:'')+'&AQE=1';if(s.isie&&!s.ismac)rs=s.fl(rs,2047)}if(s.d.images&&s.apv>=3&&(!s.isopera||s.apv>=7)&&(s.ns6<0||s.apv>=6.1)){if(!s.rc)s.rc=new Object;if"
+"(!s.rc[un]){s.rc[un]=1;if(!s.rl)s.rl=new Object;s.rl[un]=new Array;setTimeout('if(window.s_c_il)window.s_c_il['+s._in+'].mrq(\"'+un+'\")',750)}else{l=s.rl[un];if(l){r.t=ta;r.u=un;r.r=rs;l[l.length]"
+"=r;return ''}imn+='_'+s.rc[un];s.rc[un]++}if(s.debugTracking){var d='AppMeasurement Debug: '+rs,dl=s.sp(rs,'&'),dln;for(dln=0;dln<dl.length;dln++)d+=\"\\n\\t\"+s.epa(dl[dln]);s.logDebug(d)}im=s.wd["
+"imn];if(!im)im=s.wd[imn]=new Image;im.alt=\"\";im.s_l=0;im.onload=im.onerror=new Function('e','this.s_l=1;var wd=window,s;if(wd.s_c_il){s=wd.s_c_il['+s._in+'];s.bcr();s.mrq(\"'+un+'\");s.nrs--;if(!"
+"s.nrs)s.m_m(\"rr\")}');if(!s.nrs){s.nrs=1;s.m_m('rs')}else s.nrs++;im.src=rs;if(s.useForcedLinkTracking||s.bcf){if(!s.forcedLinkTrackingTimeout)s.forcedLinkTrackingTimeout=250;setTimeout('if(window"
+".s_c_il)window.s_c_il['+s._in+'].bcr()',s.forcedLinkTrackingTimeout);}else if((s.lnk||s.eo)&&(!ta||ta=='_self'||ta=='_top'||ta=='_parent'||(s.wd.name&&ta==s.wd.name))){b=e=new Date;while(!im.s_l&&e"
+".getTime()-b.getTime()<500)e=new Date}return ''}return '<im'+'g sr'+'c=\"'+rs+'\" width=1 height=1 border=0 alt=\"\">'};s.gg=function(v){var s=this;if(!s.wd['s_'+v])s.wd['s_'+v]='';return s.wd['s_'"
+"+v]};s.glf=function(t,a){if(t.substring(0,2)=='s_')t=t.substring(2);var s=this,v=s.gg(t);if(v)s[t]=v};s.gl=function(v){var s=this;if(s.pg)s.pt(v,',','glf',0)};s.rf=function(x){var s=this,y,i,j,h,p,"
+"l=0,q,a,b='',c='',t;if(x&&x.length>255){y=''+x;i=y.indexOf('?');if(i>0){q=y.substring(i+1);y=y.substring(0,i);h=y.toLowerCase();j=0;if(h.substring(0,7)=='http://')j+=7;else if(h.substring(0,8)=='ht"
+"tps://')j+=8;i=h.indexOf(\"/\",j);if(i>0){h=h.substring(j,i);p=y.substring(i);y=y.substring(0,i);if(h.indexOf('google')>=0)l=',q,ie,start,search_key,word,kw,cd,';else if(h.indexOf('yahoo.co')>=0)l="
+"',p,ei,';if(l&&q){a=s.sp(q,'&');if(a&&a.length>1){for(j=0;j<a.length;j++){t=a[j];i=t.indexOf('=');if(i>0&&l.indexOf(','+t.substring(0,i)+',')>=0)b+=(b?'&':'')+t;else c+=(c?'&':'')+t}if(b&&c)q=b+'&'"
+"+c;else c=''}i=253-(q.length-c.length)-y.length;x=y+(i>0?p.substring(0,i):'')+'?'+q}}}}return x};s.s2q=function(k,v,vf,vfp,f){var s=this,qs='',sk,sv,sp,ss,nke,nk,nf,nfl=0,nfn,nfm;if(k==\"contextDat"
+"a\")k=\"c\";if(v){for(sk in v)if((!f||sk.substring(0,f.length)==f)&&v[sk]&&(!vf||vf.indexOf(','+(vfp?vfp+'.':'')+sk+',')>=0)&&(!Object||!Object.prototype||!Object.prototype[sk])){nfm=0;if(nfl)for(n"
+"fn=0;nfn<nfl.length;nfn++)if(sk.substring(0,nfl[nfn].length)==nfl[nfn])nfm=1;if(!nfm){if(qs=='')qs+='&'+k+'.';sv=v[sk];if(f)sk=sk.substring(f.length);if(sk.length>0){nke=sk.indexOf('.');if(nke>0){n"
+"k=sk.substring(0,nke);nf=(f?f:'')+nk+'.';if(!nfl)nfl=new Array;nfl[nfl.length]=nf;qs+=s.s2q(nk,v,vf,vfp,nf)}else{if(typeof(sv)=='boolean'){if(sv)sv='true';else sv='false'}if(sv){if(vfp=='retrieveLi"
+"ghtData'&&f.indexOf('.contextData.')<0){sp=sk.substring(0,4);ss=sk.substring(4);if(sk=='transactionID')sk='xact';else if(sk=='channel')sk='ch';else if(sk=='campaign')sk='v0';else if(s.num(ss)){if(s"
+"p=='prop')sk='c'+ss;else if(sp=='eVar')sk='v'+ss;else if(sp=='list')sk='l'+ss;else if(sp=='hier'){sk='h'+ss;sv=sv.substring(0,255)}}}qs+='&'+s.ape(sk)+'='+s.ape(sv)}}}}}if(qs!='')qs+='&.'+k}return "
+"qs};s.hav=function(){var s=this,qs='',l,fv='',fe='',mn,i,e;if(s.lightProfileID){l=s.va_m;fv=s.lightTrackVars;if(fv)fv=','+fv+','+s.vl_mr+','}else{l=s.va_t;if(s.pe||s.linkType){fv=s.linkTrackVars;fe"
+"=s.linkTrackEvents;if(s.pe){mn=s.pe.substring(0,1).toUpperCase()+s.pe.substring(1);if(s[mn]){fv=s[mn].trackVars;fe=s[mn].trackEvents}}}if(fv)fv=','+fv+','+s.vl_l+','+s.vl_l2;if(fe){fe=','+fe+',';if"
+"(fv)fv+=',events,'}if (s.events2)e=(e?',':'')+s.events2}for(i=0;i<l.length;i++){var k=l[i],v=s[k],b=k.substring(0,4),x=k.substring(4),n=parseInt(x),q=k;if(!v)if(k=='events'&&e){v=e;e=''}if(v&&(!fv|"
+"|fv.indexOf(','+k+',')>=0)&&k!='linkName'&&k!='linkType'){if(k=='supplementalDataID')q='sdid';else if(k=='timestamp')q='ts';else if(k=='dynamicVariablePrefix')q='D';else if(k=='visitorID')q='vid';e"
+"lse if(k=='marketingCloudVisitorID')q='mid';else if(k=='analyticsVisitorID')q='aid';else if(k=='audienceManagerLocationHint')q='aamlh';else if(k=='audienceManagerBlob')q='aamb';else if(k=='pageURL'"
+"){q='g';if(v.length>255){s.pageURLRest=v.substring(255);v=v.substring(0,255);}}else if(k=='pageURLRest')q='-g';else if(k=='referrer'){q='r';v=s.fl(s.rf(v),255)}else if(k=='vmk'||k=='visitorMigratio"
+"nKey')q='vmt';else if(k=='visitorMigrationServer'){q='vmf';if(s.ssl&&s.visitorMigrationServerSecure)v=''}else if(k=='visitorMigrationServerSecure'){q='vmf';if(!s.ssl&&s.visitorMigrationServer)v=''}"
+"else if(k=='charSet'){q='ce';if(v.toUpperCase()=='AUTO')v='ISO8859-1';else if(s.em==2||s.em==3)v='UTF-8'}else if(k=='visitorNamespace')q='ns';else if(k=='cookieDomainPeriods')q='cdp';else if(k=='co"
+"okieLifetime')q='cl';else if(k=='variableProvider')q='vvp';else if(k=='currencyCode')q='cc';else if(k=='channel')q='ch';else if(k=='transactionID')q='xact';else if(k=='campaign')q='v0';else if(k=='"
+"resolution')q='s';else if(k=='colorDepth')q='c';else if(k=='javascriptVersion')q='j';else if(k=='javaEnabled')q='v';else if(k=='cookiesEnabled')q='k';else if(k=='browserWidth')q='bw';else if(k=='br"
+"owserHeight')q='bh';else if(k=='connectionType')q='ct';else if(k=='homepage')q='hp';else if(k=='plugins')q='p';else if(k=='events'){if(e)v+=(v?',':'')+e;if(fe)v=s.fs(v,fe)}else if(k=='events2')v=''"
+";else if(k=='contextData'){qs+=s.s2q('c',s[k],fv,k,0);v=''}else if(k=='lightProfileID')q='mtp';else if(k=='lightStoreForSeconds'){q='mtss';if(!s.lightProfileID)v=''}else if(k=='lightIncrementBy'){q"
+"='mti';if(!s.lightProfileID)v=''}else if(k=='retrieveLightProfiles')q='mtsr';else if(k=='deleteLightProfiles')q='mtsd';else if(k=='retrieveLightData'){if(s.retrieveLightProfiles)qs+=s.s2q('mts',s[k"
+"],fv,k,0);v=''}else if(s.num(x)){if(b=='prop')q='c'+n;else if(b=='eVar')q='v'+n;else if(b=='list')q='l'+n;else if(b=='hier'){q='h'+n;v=s.fl(v,255)}}if(v)qs+='&'+s.ape(q)+'='+(k.substring(0,3)!='pev"
+"'?s.ape(v):v)}}return qs};s.ltdf=function(t,h){t=t?t.toLowerCase():'';h=h?h.toLowerCase():'';var qi=h.indexOf('?'),hi=h.indexOf('#');if(qi>=0){if(hi>=0&&hi<qi)qi=hi;}else qi=hi;h=qi>=0?h.substring("
+"0,qi):h;if(t&&h.substring(h.length-(t.length+1))=='.'+t)return 1;return 0};s.ltef=function(t,h){t=t?t.toLowerCase():'';h=h?h.toLowerCase():'';if(t&&h.indexOf(t)>=0)return 1;return 0};s.lt=function("
+"h){var s=this,lft=s.linkDownloadFileTypes,lef=s.linkExternalFilters,lif=s.linkInternalFilters;lif=lif?lif:s.wd.location.hostname;h=h.toLowerCase();if(s.trackDownloadLinks&&lft&&s.pt(lft,',','ltdf',"
+"h))return 'd';if(s.trackExternalLinks&&h.indexOf('#')!=0&&h.indexOf('about:')!=0&&h.indexOf('javascript:')!=0&&(lef||lif)&&(!lef||s.pt(lef,',','ltef',h))&&(!lif||!s.pt(lif,',','ltef',h)))return 'e'"
+";return ''};s.lc=new Function('e','var s=s_c_il['+s._in+'],b=s.eh(this,\"onclick\");s.lnk=this;s.t();s.lnk=0;if(b)return this[b](e);return true');s.bcr=function(){var s=this;if(s.bct&&s.bce)s.bct.d"
+"ispatchEvent(s.bce);if(s.bcf){if(typeof(s.bcf)=='function')s.bcf();else if(s.bct&&s.bct.href)s.d.location=s.bct.href}s.bct=s.bce=s.bcf=0};s.bc=new Function('e','if(e&&e.s_fe)return;var s=s_c_il['+s"
+"._in+'],f,tcf,t,n,nrs,a,h;if(s.d&&s.d.all&&s.d.all.cppXYctnr)return;if(!s.bbc)s.useForcedLinkTracking=0;else if(!s.useForcedLinkTracking){s.b.removeEventListener(\"click\",s.bc,true);s.bbc=s.useFor"
+"cedLinkTracking=0;return}else s.b.removeEventListener(\"click\",s.bc,false);s.eo=e.srcElement?e.srcElement:e.target;nrs=s.nrs;s.t();s.eo=0;if(s.nrs>nrs&&s.useForcedLinkTracking&&e.target){a=e.targe"
+"t;while(a&&a!=s.b&&a.tagName.toUpperCase()!=\"A\"&&a.tagName.toUpperCase()!=\"AREA\")a=a.parentNode;if(a){h=a.href;if(h.indexOf(\"#\")==0||h.indexOf(\"about:\")==0||h.indexOf(\"javascript:\")==0)h="
+"0;t=a.target;if(e.target.dispatchEvent&&h&&(!t||t==\"_self\"||t==\"_top\"||t==\"_parent\"||(s.wd.name&&t==s.wd.name))){tcf=new Function(\"s\",\"var x;try{n=s.d.createEvent(\\\\\"MouseEvents\\\\\")}"
+"catch(x){n=new MouseEvent}return n\");n=tcf(s);if(n){tcf=new Function(\"n\",\"e\",\"var x;try{n.initMouseEvent(\\\\\"click\\\\\",e.bubbles,e.cancelable,e.view,e.detail,e.screenX,e.screenY,e.clientX"
+",e.clientY,e.ctrlKey,e.altKey,e.shiftKey,e.metaKey,e.button,e.relatedTarget)}catch(x){n=0}return n\");n=tcf(n,e);if(n){n.s_fe=1;e.stopPropagation();if (e.stopImmediatePropagation) {e.stopImmediateP"
+"ropagation();}e.preventDefault();s.bct=e.target;s.bce=n}}}}}');s.oh=function(o){var s=this,l=s.wd.location,h=o.href?o.href:'',i,j,k,p;i=h.indexOf(':');j=h.indexOf('?');k=h.indexOf('/');if(h&&(i<0||"
+"(j>=0&&i>j)||(k>=0&&i>k))){p=o.protocol&&o.protocol.length>1?o.protocol:(l.protocol?l.protocol:'');i=l.pathname.lastIndexOf('/');h=(p?p+'//':'')+(o.host?o.host:(l.host?l.host:''))+(h.substring(0,1)"
+"!='/'?l.pathname.substring(0,i<0?0:i)+'/':'')+h}return h};s.ot=function(o){var t=o.tagName;if(o.tagUrn||(o.scopeName&&o.scopeName.toUpperCase()!='HTML'))return '';t=t&&t.toUpperCase?t.toUpperCase()"
+":'';if(t=='SHAPE')t='';if(t){if((t=='INPUT'||t=='BUTTON')&&o.type&&o.type.toUpperCase)t=o.type.toUpperCase();else if(!t&&o.href)t='A';}return t};s.oid=function(o){var s=this,t=s.ot(o),p,c,n='',x=0;"
+"if(t&&!o.s_oid){p=o.protocol;c=o.onclick;if(o.href&&(t=='A'||t=='AREA')&&(!c||!p||p.toLowerCase().indexOf('javascript')<0))n=s.oh(o);else if(c){n=s.rep(s.rep(s.rep(s.rep(''+c,\"\\r\",''),\"\\n\",''"
+"),\"\\t\",''),' ','');x=2}else if(t=='INPUT'||t=='SUBMIT'){if(o.value)n=o.value;else if(o.innerText)n=o.innerText;else if(o.textContent)n=o.textContent;x=3}else if(o.src&&t=='IMAGE')n=o.src;if(n){o"
+".s_oid=s.fl(n,100);o.s_oidt=x}}return o.s_oid};s.rqf=function(t,un){var s=this,e=t.indexOf('='),u=e>=0?t.substring(0,e):'',q=e>=0?s.epa(t.substring(e+1)):'';if(u&&q&&(','+u+',').indexOf(','+un+',')"
+">=0){if(u!=s.un&&s.un.indexOf(',')>=0)q='&u='+u+q+'&u=0';return q}return ''};s.rq=function(un){if(!un)un=this.un;var s=this,c=un.indexOf(','),v=s.c_r('s_sq'),q='';if(c<0)return s.pt(v,'&','rqf',un)"
+";return s.pt(un,',','rq',0)};s.sqp=function(t,a){var s=this,e=t.indexOf('='),q=e<0?'':s.epa(t.substring(e+1));s.sqq[q]='';if(e>=0)s.pt(t.substring(0,e),',','sqs',q);return 0};s.sqs=function(un,q){v"
+"ar s=this;s.squ[un]=q;return 0};s.sq=function(q){var s=this,k='s_sq',v=s.c_r(k),x,c=0;s.sqq=new Object;s.squ=new Object;s.sqq[q]='';s.pt(v,'&','sqp',0);s.pt(s.un,',','sqs',q);v='';for(x in s.squ)if"
+"(x&&(!Object||!Object.prototype||!Object.prototype[x]))s.sqq[s.squ[x]]+=(s.sqq[s.squ[x]]?',':'')+x;for(x in s.sqq)if(x&&(!Object||!Object.prototype||!Object.prototype[x])&&s.sqq[x]&&(x==q||c<2)){v+"
+"=(v?'&':'')+s.sqq[x]+'='+s.ape(x);c++}return s.c_w(k,v,0)};s.wdl=new Function('e','var s=s_c_il['+s._in+'],r=true,b=s.eh(s.wd,\"onload\"),i,o,oc;if(b)r=this[b](e);for(i=0;i<s.d.links.length;i++){o="
+"s.d.links[i];oc=o.onclick?\"\"+o.onclick:\"\";if((oc.indexOf(\"s_gs(\")<0||oc.indexOf(\".s_oc(\")>=0)&&oc.indexOf(\".tl(\")<0)s.eh(o,\"onclick\",0,s.lc);}return r');s.wds=function(){var s=this;if(s"
+".apv>3&&(!s.isie||!s.ismac||s.apv>=5)){if(s.b&&s.b.attachEvent)s.b.attachEvent('onclick',s.bc);else if(s.b&&s.b.addEventListener){if(s.n&&((s.n.userAgent.indexOf('WebKit')>=0&&s.d.createEvent)||(s."
+"n.userAgent.indexOf('Firefox/2')>=0&&s.wd.MouseEvent))){s.bbc=1;s.useForcedLinkTracking=1;s.b.addEventListener('click',s.bc,true)}s.b.addEventListener('click',s.bc,false)}else s.eh(s.wd,'onload',0,"
+"s.wdl)}};s.vs=function(x){var s=this,v=s.visitorSampling,g=s.visitorSamplingGroup,k='s_vsn_'+s.un+(g?'_'+g:''),n=s.c_r(k),e=new Date,y=e.getYear();e.setYear(y+10+(y<1900?1900:0));if(v){v*=100;if(!n"
+"){if(!s.c_w(k,x,e))return 0;n=x}if(n%10000>v)return 0}return 1};s.dyasmf=function(t,m){if(t&&m&&m.indexOf(t)>=0)return 1;return 0};s.dyasf=function(t,m){var s=this,i=t?t.indexOf('='):-1,n,x;if(i>=0"
+"&&m){var n=t.substring(0,i),x=t.substring(i+1);if(s.pt(x,',','dyasmf',m))return n}return 0};s.uns=function(){var s=this,x=s.dynamicAccountSelection,l=s.dynamicAccountList,m=s.dynamicAccountMatch,n,"
+"i;s.un=s.un.toLowerCase();if(x&&l){if(!m)m=s.wd.location.host;if(!m.toLowerCase)m=''+m;l=l.toLowerCase();m=m.toLowerCase();n=s.pt(l,';','dyasf',m);if(n)s.un=n}i=s.un.indexOf(',');s.fun=i<0?s.un:s.u"
+"n.substring(0,i)};s.sa=function(un){var s=this;if(s.un&&s.mpc('sa',arguments))return;s.un=un;if(!s.oun)s.oun=un;else if((','+s.oun+',').indexOf(','+un+',')<0)s.oun+=','+un;s.uns()};s.m_i=function(n"
+",a){var s=this,m,f=n.substring(0,1),r,l,i;if(!s.m_l)s.m_l=new Object;if(!s.m_nl)s.m_nl=new Array;m=s.m_l[n];if(!a&&m&&m._e&&!m._i)s.m_a(n);if(!m){m=new Object,m._c='s_m';m._in=s.wd.s_c_in;m._il=s._"
+"il;m._il[m._in]=m;s.wd.s_c_in++;m.s=s;m._n=n;m._l=new Array('_c','_in','_il','_i','_e','_d','_dl','s','n','_r','_g','_g1','_t','_t1','_x','_x1','_rs','_rr','_l');s.m_l[n]=m;s.m_nl[s.m_nl.length]=n}"
+"else if(m._r&&!m._m){r=m._r;r._m=m;l=m._l;for(i=0;i<l.length;i++)if(m[l[i]])r[l[i]]=m[l[i]];r._il[r._in]=r;m=s.m_l[n]=r}if(f==f.toUpperCase())s[n]=m;return m};s.m_a=new Function('n','g','e','if(!g)"
+"g=\"m_\"+n;var s=s_c_il['+s._in+'],c=s[g+\"_c\"],m,x,f=0;if(s.mpc(\"m_a\",arguments))return;if(!c)c=s.wd[\"s_\"+g+\"_c\"];if(c&&s_d)s[g]=new Function(\"s\",s_ft(s_d(c)));x=s[g];if(!x)x=s.wd[\\'s_\\"
+"'+g];if(!x)x=s.wd[g];m=s.m_i(n,1);if(x&&(!m._i||g!=\"m_\"+n)){m._i=f=1;if((\"\"+x).indexOf(\"function\")>=0)x(s);else s.m_m(\"x\",n,x,e)}m=s.m_i(n,1);if(m._dl)m._dl=m._d=0;s.dlt();return f');s.m_m="
+"function(t,n,d,e){t='_'+t;var s=this,i,x,m,f='_'+t,r=0,u;if(s.m_l&&s.m_nl)for(i=0;i<s.m_nl.length;i++){x=s.m_nl[i];if(!n||x==n){m=s.m_i(x);u=m[t];if(u){if((''+u).indexOf('function')>=0){if(d&&e)u=m"
+"[t](d,e);else if(d)u=m[t](d);else u=m[t]()}}if(u)r=1;u=m[t+1];if(u&&!m[f]){if((''+u).indexOf('function')>=0){if(d&&e)u=m[t+1](d,e);else if(d)u=m[t+1](d);else u=m[t+1]()}}m[f]=1;if(u)r=1}}return r};"
+"s.m_ll=function(){var s=this,g=s.m_dl,i,o;if(g)for(i=0;i<g.length;i++){o=g[i];if(o)s.loadModule(o.n,o.u,o.d,o.l,o.e,1);g[i]=0}};s.loadModule=function(n,u,d,l,e,ln){var s=this,m=0,i,g,o=0,f1,f2,c=s."
+"h?s.h:s.b,b,tcf;if(n){i=n.indexOf(':');if(i>=0){g=n.substring(i+1);n=n.substring(0,i)}else g=\"m_\"+n;m=s.m_i(n)}if((l||(n&&!s.m_a(n,g)))&&u&&s.d&&c&&s.d.createElement){if(d){m._d=1;m._dl=1}if(ln){"
+"if(s.ssl)u=s.rep(u,'http:','https:');i='s_s:'+s._in+':'+n+':'+g;b='var s=s_c_il['+s._in+'],o=s.d.getElementById(\"'+i+'\");if(s&&o){if(!o.l&&s.wd.'+g+'){o.l=1;if(o.i)clearTimeout(o.i);o.i=0;s.m_a("
+"\"'+n+'\",\"'+g+'\"'+(e?',\"'+e+'\"':'')+')}';f2=b+'o.c++;if(!s.maxDelay)s.maxDelay=250;if(!o.l&&o.c<(s.maxDelay*2)/100)o.i=setTimeout(o.f2,100)}';f1=new Function('e',b+'}');tcf=new Function('s','c"
+"','i','u','f1','f2','var e,o=0;try{o=s.d.createElement(\"script\");if(o){o.type=\"text/javascript\";'+(n?'o.id=i;o.defer=true;o.onload=o.onreadystatechange=f1;o.f2=f2;o.l=0;':'')+'o.src=u;c.appendC"
+"hild(o);'+(n?'o.c=0;o.i=setTimeout(f2,100)':'')+'}}catch(e){o=0}return o');o=tcf(s,c,i,u,f1,f2)}else{o=new Object;o.n=n+':'+g;o.u=u;o.d=d;o.l=l;o.e=e;g=s.m_dl;if(!g)g=s.m_dl=new Array;i=0;while(i<g"
+".length&&g[i])i++;g[i]=o}}else if(n){m=s.m_i(n);m._e=1}return m};s.voa=function(vo,r){var s=this,l=s.va_g,i,k,v,x;for(i=0;i<l.length;i++){k=l[i];v=vo[k];if(v||vo['!'+k]){if(!r&&(k==\"contextData\"|"
+"|k==\"retrieveLightData\")&&s[k])for(x in s[k])if(!v[x])v[x]=s[k][x];s[k]=v}}};s.vob=function(vo,onlySet){var s=this,l=s.va_g,i,k;for(i=0;i<l.length;i++){k=l[i];vo[k]=s[k];if(!onlySet&&!vo[k])vo['!"
+"'+k]=1}};s.dlt=new Function('var s=s_c_il['+s._in+'],d=new Date,i,vo,f=0;if(s.dll)for(i=0;i<s.dll.length;i++){vo=s.dll[i];if(vo){if(!s.m_m(\"d\")||d.getTime()-vo._t>=s.maxDelay){s.dll[i]=0;s.t(vo)}"
+"else f=1}}if(s.dli)clearTimeout(s.dli);s.dli=0;if(f){if(!s.dli)s.dli=setTimeout(s.dlt,s.maxDelay)}else s.dll=0');s.dl=function(vo){var s=this,d=new Date;if(!vo)vo=new Object;s.vob(vo);vo._t=d.getTi"
+"me();if(!s.dll)s.dll=new Array;s.dll[s.dll.length]=vo;if(!s.maxDelay)s.maxDelay=250;s.dlt()};s._waitingForMarketingCloudVisitorID = false;s._doneWaitingForMarketingCloudVisitorID = false;s._marketi"
+"ngCloudVisitorIDCallback=function(marketingCloudVisitorID) {var s=this;s.marketingCloudVisitorID = marketingCloudVisitorID;s._doneWaitingForMarketingCloudVisitorID = true;s._callbackWhenReadyToTrac"
+"kCheck();};s._waitingForAnalyticsVisitorID = false;s._doneWaitingForAnalyticsVisitorID = false;s._analyticsVisitorIDCallback=function(analyticsVisitorID) {var s=this;s.analyticsVisitorID = analytic"
+"sVisitorID;s._doneWaitingForAnalyticsVisitorID = true;s._callbackWhenReadyToTrackCheck();};s._waitingForAudienceManagerLocationHint = false;s._doneWaitingForAudienceManagerLocationHint = false;s._a"
+"udienceManagerLocationHintCallback=function(audienceManagerLocationHint) {var s=this;s.audienceManagerLocationHint = audienceManagerLocationHint;s._doneWaitingForAudienceManagerLocationHint = true;"
+"s._callbackWhenReadyToTrackCheck();};s._waitingForAudienceManagerBlob = false;s._doneWaitingForAudienceManagerBlob = false;s._audienceManagerBlobCallback=function(audienceManagerBlob) {var s=this;s"
+".audienceManagerBlob = audienceManagerBlob;s._doneWaitingForAudienceManagerBlob = true;s._callbackWhenReadyToTrackCheck();};s.isReadyToTrack=function() {var s=this,readyToTrack = true,visitor = s.v"
+"isitor;if ((visitor) && (visitor.isAllowed())) {if ((!s._waitingForMarketingCloudVisitorID) && (!s.marketingCloudVisitorID) && (visitor.getMarketingCloudVisitorID)) {s._waitingForMarketingCloudVisi"
+"torID = true;s.marketingCloudVisitorID = visitor.getMarketingCloudVisitorID([s,s._marketingCloudVisitorIDCallback]);if (s.marketingCloudVisitorID) {s._doneWaitingForMarketingCloudVisitorID = true;}"
+"}if ((!s._waitingForAnalyticsVisitorID) && (!s.analyticsVisitorID) && (visitor.getAnalyticsVisitorID)) {s._waitingForAnalyticsVisitorID = true;s.analyticsVisitorID = visitor.getAnalyticsVisitorID(["
+"s,s._analyticsVisitorIDCallback]);if (s.analyticsVisitorID) {s._doneWaitingForAnalyticsVisitorID = true;}}if ((!s._waitingForAudienceManagerLocationHint) && (!s.audienceManagerLocationHint) && (vis"
+"itor.getAudienceManagerLocationHint)) {s._waitingForAudienceManagerLocationHint = true;s.audienceManagerLocationHint = visitor.getAudienceManagerLocationHint([s,s._audienceManagerLocationHintCallba"
+"ck]);if (s.audienceManagerLocationHint) {s._doneWaitingForAudienceManagerLocationHint = true;}}if ((!s._waitingForAudienceManagerBlob) && (!s.audienceManagerBlob) && (visitor.getAudienceManagerBlob"
+")) {s._waitingForAudienceManagerBlob = true;s.audienceManagerBlob = visitor.getAudienceManagerBlob([s,s._audienceManagerBlobCallback]);if (s.audienceManagerBlob) {s._doneWaitingForAudienceManagerBl"
+"ob = true;}}if (((s._waitingForMarketingCloudVisitorID)     && (!s._doneWaitingForMarketingCloudVisitorID)     && (!s.marketingCloudVisitorID)) ||((s._waitingForAnalyticsVisitorID)          && (!s."
+"_doneWaitingForAnalyticsVisitorID)          && (!s.analyticsVisitorID)) ||((s._waitingForAudienceManagerLocationHint) && (!s._doneWaitingForAudienceManagerLocationHint) && (!s.audienceManagerLocati"
+"onHint)) ||((s._waitingForAudienceManagerBlob)         && (!s._doneWaitingForAudienceManagerBlob)         && (!s.audienceManagerBlob))) {readyToTrack = false;}}return readyToTrack;};s._callbackWhen"
+"ReadyToTrackQueue = null;s._callbackWhenReadyToTrackInterval = 0;s.callbackWhenReadyToTrack=function(callbackThis,callback,args) {var s=this,callbackInfo;callbackInfo = {};callbackInfo.callbackThis"
+" = callbackThis;callbackInfo.callback     = callback;callbackInfo.args         = args;if (s._callbackWhenReadyToTrackQueue == null) {s._callbackWhenReadyToTrackQueue = [];}s._callbackWhenReadyToTra"
+"ckQueue.push(callbackInfo);if (s._callbackWhenReadyToTrackInterval == 0) {s._callbackWhenReadyToTrackInterval = setInterval(s._callbackWhenReadyToTrackCheck,100);}};s._callbackWhenReadyToTrackCheck"
+"=new Function('var s=s_c_il['+s._in+'],callbackNum,callbackInfo;if (s.isReadyToTrack()) {if (s._callbackWhenReadyToTrackInterval) {clearInterval(s._callbackWhenReadyToTrackInterval);s._callbackWhen"
+"ReadyToTrackInterval = 0;}if (s._callbackWhenReadyToTrackQueue != null) {while (s._callbackWhenReadyToTrackQueue.length > 0) {callbackInfo = s._callbackWhenReadyToTrackQueue.shift();callbackInfo.ca"
+"llback.apply(callbackInfo.callbackThis,callbackInfo.args);}}}');s._handleNotReadyToTrack=function(variableOverrides) {var s=this,args,varKey,variableOverridesCopy = null,setVariables = null;if (!s."
+"isReadyToTrack()) {args = [];if (variableOverrides != null) {variableOverridesCopy = {};for (varKey in variableOverrides) {variableOverridesCopy[varKey] = variableOverrides[varKey];}}setVariables ="
+" {};s.vob(setVariables,true);args.push(variableOverridesCopy);args.push(setVariables);s.callbackWhenReadyToTrack(s,s.track,args);return true;}return false;};s.gfid=function(){var s=this,d='01234567"
+"89ABCDEF',k='s_fid',fid=s.c_r(k),h='',l='',i,j,m=8,n=4,e=new Date,y;if(!fid||fid.indexOf('-')<0){for(i=0;i<16;i++){j=Math.floor(Math.random()*m);h+=d.substring(j,j+1);j=Math.floor(Math.random()*n);"
+"l+=d.substring(j,j+1);m=n=16}fid=h+'-'+l;}y=e.getYear();e.setYear(y+2+(y<1900?1900:0));if(!s.c_w(k,fid,e))fid=0;return fid};s.track=s.t=function(vo,setVariables){var s=this,notReadyToTrack,trk=1,tm"
+"=new Date,sed=Math&&Math.random?Math.floor(Math.random()*10000000000000):tm.getTime(),sess='s'+Math.floor(tm.getTime()/10800000)%10+sed,y=tm.getYear(),vt=tm.getDate()+'/'+tm.getMonth()+'/'+(y<1900?"
+"y+1900:y)+' '+tm.getHours()+':'+tm.getMinutes()+':'+tm.getSeconds()+' '+tm.getDay()+' '+tm.getTimezoneOffset(),tcf,tfs=s.gtfs(),ta=-1,q='',qs='',code='',vb=new Object;if ((!s.supplementalDataID) &&"
+" (s.visitor) && (s.visitor.getSupplementalDataID)) {s.supplementalDataID = s.visitor.getSupplementalDataID(\"AppMeasurement:\" + s._in,(s.expectSupplementalData ? false : true));}if(s.mpc('t',argum"
+"ents))return;s.gl(s.vl_g);s.uns();s.m_ll();notReadyToTrack = s._handleNotReadyToTrack(vo);if (!notReadyToTrack) {if (setVariables) {s.voa(setVariables);}if(!s.td){var tl=tfs.location,a,o,i,x='',c='"
+"',v='',p='',bw='',bh='',j='1.0',k=s.c_w('s_cc','true',0)?'Y':'N',hp='',ct='',pn=0,ps;if(String&&String.prototype){j='1.1';if(j.match){j='1.2';if(tm.setUTCDate){j='1.3';if(s.isie&&s.ismac&&s.apv>=5)"
+"j='1.4';if(pn.toPrecision){j='1.5';a=new Array;if(a.forEach){j='1.6';i=0;o=new Object;tcf=new Function('o','var e,i=0;try{i=new Iterator(o)}catch(e){}return i');i=tcf(o);if(i&&i.next){j='1.7';if(a."
+"reduce){j='1.8';if(j.trim){j='1.8.1';if(Date.parse){j='1.8.2';if(Object.create)j='1.8.5'}}}}}}}}}if(s.apv>=4)x=screen.width+'x'+screen.height;if(s.isns||s.isopera){if(s.apv>=3){v=s.n.javaEnabled()?"
+"'Y':'N';if(s.apv>=4){c=screen.pixelDepth;bw=s.wd.innerWidth;bh=s.wd.innerHeight}}s.pl=s.n.plugins}else if(s.isie){if(s.apv>=4){v=s.n.javaEnabled()?'Y':'N';c=screen.colorDepth;if(s.apv>=5){bw=s.d.do"
+"cumentElement.offsetWidth;bh=s.d.documentElement.offsetHeight;if(!s.ismac&&s.b){tcf=new Function('s','tl','var e,hp=0;try{s.b.addBehavior(\"#default#homePage\");hp=s.b.isHomePage(tl)?\"Y\":\"N\"}ca"
+"tch(e){}return hp');hp=tcf(s,tl);tcf=new Function('s','var e,ct=0;try{s.b.addBehavior(\"#default#clientCaps\");ct=s.b.connectionType}catch(e){}return ct');ct=tcf(s)}}}else r=''}if(s.pl)while(pn<s.p"
+"l.length&&pn<30){ps=s.fl(s.pl[pn].name,100)+';';if(p.indexOf(ps)<0)p+=ps;pn++}s.resolution=x;s.colorDepth=c;s.javascriptVersion=j;s.javaEnabled=v;s.cookiesEnabled=k;s.browserWidth=bw;s.browserHeigh"
+"t=bh;s.connectionType=ct;s.homepage=hp;s.plugins=p;s.td=1}if(vo){s.vob(vb);s.voa(vo)}if(!s.analyticsVisitorID&&!s.marketingCloudVisitorID)s.fid=s.gfid();if((vo&&vo._t)||!s.m_m('d')){if(s.usePlugins"
+")s.doPlugins(s);if(!s.abort){var l=s.wd.location,r=tfs.document.referrer;if(!s.pageURL)s.pageURL=l.href?l.href:l;if(!s.referrer&&!s._1_referrer){s.referrer=r;s._1_referrer=1}s.m_m('g');if(s.lnk||s."
+"eo){var o=s.eo?s.eo:s.lnk,p=s.pageName,w=1,t=s.ot(o),n=s.oid(o),x=o.s_oidt,h,l,i,oc;if(s.eo&&o==s.eo){while(o&&!n&&t!='BODY'){o=o.parentElement?o.parentElement:o.parentNode;if(o){t=s.ot(o);n=s.oid("
+"o);x=o.s_oidt}}if(!n||t=='BODY')o='';if(o){oc=o.onclick?''+o.onclick:'';if((oc.indexOf('s_gs(')>=0&&oc.indexOf('.s_oc(')<0)||oc.indexOf('.tl(')>=0)o=0}}if(o){if(n)ta=o.target;h=s.oh(o);i=h.indexOf("
+"'?');h=s.linkLeaveQueryString||i<0?h:h.substring(0,i);l=s.linkName;t=s.linkType?s.linkType.toLowerCase():s.lt(h);if(t&&(h||l)){s.pe='lnk_'+(t=='d'||t=='e'?t:'o');s.pev1=(h?s.ape(h):'');s.pev2=(l?s."
+"ape(l):'')}else trk=0;if(s.trackInlineStats){if(!p){p=s.pageURL;w=0}t=s.ot(o);i=o.sourceIndex;if(o.dataset&&o.dataset.sObjectId){s.wd.s_objectID=o.dataset.sObjectId;}else if(o.getAttribute&&o.getAt"
+"tribute('data-s-object-id')){s.wd.s_objectID=o.getAttribute('data-s-object-id');}else if(s.useForcedLinkTracking){s.wd.s_objectID='';oc=o.onclick?''+o.onclick:'';if(oc){var ocb=oc.indexOf('s_object"
+"ID'),oce,ocq,ocx;if(ocb>=0){ocb+=10;while(ocb<oc.length&&(\"= \\t\\r\\n\").indexOf(oc.charAt(ocb))>=0)ocb++;if(ocb<oc.length){oce=ocb;ocq=ocx=0;while(oce<oc.length&&(oc.charAt(oce)!=';'||ocq)){if(o"
+"cq){if(oc.charAt(oce)==ocq&&!ocx)ocq=0;else if(oc.charAt(oce)==\"\\\\\")ocx=!ocx;else ocx=0;}else{ocq=oc.charAt(oce);if(ocq!='\"'&&ocq!=\"'\")ocq=0}oce++;}oc=oc.substring(ocb,oce);if(oc){o.s_soid=n"
+"ew Function('s','var e;try{s.wd.s_objectID='+oc+'}catch(e){}');o.s_soid(s)}}}}}if(s.gg('objectID')){n=s.gg('objectID');x=1;i=1}if(p&&n&&t)qs='&pid='+s.ape(s.fl(p,255))+(w?'&pidt='+w:'')+'&oid='+s.a"
+"pe(s.fl(n,100))+(x?'&oidt='+x:'')+'&ot='+s.ape(t)+(i?'&oi='+i:'')}}else trk=0}if(trk||qs){s.sampled=s.vs(sed);if(trk){if(s.sampled)code=s.mr(sess,(vt?'&t='+s.ape(vt):'')+s.hav()+q+(qs?qs:s.rq()),0,"
+"ta);qs='';s.m_m('t');if(s.p_r)s.p_r();s.referrer=s.lightProfileID=s.retrieveLightProfiles=s.deleteLightProfiles=''}s.sq(qs)}}}else s.dl(vo);if(vo)s.voa(vb,1);}s.abort=0;s.supplementalDataID=s.pageU"
+"RLRest=s.lnk=s.eo=s.linkName=s.linkType=s.wd.s_objectID=s.ppu=s.pe=s.pev1=s.pev2=s.pev3='';if(s.pg)s.wd.s_lnk=s.wd.s_eo=s.wd.s_linkName=s.wd.s_linkType='';return code};s.trackLink=s.tl=function(o,t"
+",n,vo,f){var s=this;s.lnk=o;s.linkType=t;s.linkName=n;if(f){s.bct=o;s.bcf=f}s.t(vo)};s.trackLight=function(p,ss,i,vo){var s=this;s.lightProfileID=p;s.lightStoreForSeconds=ss;s.lightIncrementBy=i;s."
+"t(vo)};s.setTagContainer=function(n){var s=this,l=s.wd.s_c_il,i,t,x,y;s.tcn=n;if(l)for(i=0;i<l.length;i++){t=l[i];if(t&&t._c=='s_l'&&t.tagContainerName==n){s.voa(t);if(t.lmq)for(i=0;i<t.lmq.length;"
+"i++){x=t.lmq[i];y='m_'+x.n;if(!s[y]&&!s[y+'_c']){s[y]=t[y];s[y+'_c']=t[y+'_c']}s.loadModule(x.n,x.u,x.d)}if(t.ml)for(x in t.ml)if(s[x]){y=s[x];x=t.ml[x];for(i in x)if(!Object.prototype[i]){if(typeo"
+"f(x[i])!='function'||(''+x[i]).indexOf('s_c_il')<0)y[i]=x[i]}}if(t.mmq)for(i=0;i<t.mmq.length;i++){x=t.mmq[i];if(s[x.m]){y=s[x.m];if(y[x.f]&&typeof(y[x.f])=='function'){if(x.a)y[x.f].apply(y,x.a);e"
+"lse y[x.f].apply(y)}}}if(t.tq)for(i=0;i<t.tq.length;i++)s.t(t.tq[i]);t.s=s;return}}};s.wd=window;s.ssl=(s.wd.location.protocol.toLowerCase().indexOf('https')>=0);s.d=document;s.b=s.d.body;if(s.d.ge"
+"tElementsByTagName){s.h=s.d.getElementsByTagName('HEAD');if(s.h)s.h=s.h[0]}s.n=navigator;s.u=s.n.userAgent;s.ns6=s.u.indexOf('Netscape6/');var apn=s.n.appName,v=s.n.appVersion,ie=v.indexOf('MSIE ')"
+",o=s.u.indexOf('Opera '),i;if(v.indexOf('Opera')>=0||o>0)apn='Opera';s.isie=(apn=='Microsoft Internet Explorer');s.isns=(apn=='Netscape');s.isopera=(apn=='Opera');s.ismac=(s.u.indexOf('Mac')>=0);if"
+"(o>0)s.apv=parseFloat(s.u.substring(o+6));else if(ie>0){s.apv=parseInt(i=v.substring(ie+5));if(s.apv>3)s.apv=parseFloat(i)}else if(s.ns6>0)s.apv=parseFloat(s.u.substring(s.ns6+10));else s.apv=parse"
+"Float(v);s.em=0;if(s.em.toPrecision)s.em=3;else if(String.fromCharCode){i=escape(String.fromCharCode(256)).toUpperCase();s.em=(i=='%C4%80'?2:(i=='%U0100'?1:0))}if(s.oun)s.sa(s.oun);s.sa(un);s.vl_l="
+"'supplementalDataID,timestamp,dynamicVariablePrefix,visitorID,marketingCloudVisitorID,analyticsVisitorID,audienceManagerLocationHint,fid,vmk,visitorMigrationKey,visitorMigrationServer,visitorMigrat"
+"ionServerSecure,ppu,charSet,visitorNamespace,cookieDomainPeriods,cookieLifetime,pageName,pageURL,referrer,contextData,currencyCode,lightProfileID,lightStoreForSeconds,lightIncrementBy,retrieveLight"
+"Profiles,deleteLightProfiles,retrieveLightData';s.va_l=s.sp(s.vl_l,',');s.vl_mr=s.vl_m='timestamp,charSet,visitorNamespace,cookieDomainPeriods,cookieLifetime,contextData,lightProfileID,lightStoreFo"
+"rSeconds,lightIncrementBy';s.vl_t=s.vl_l+',variableProvider,channel,server,pageType,transactionID,purchaseID,campaign,state,zip,events,events2,products,audienceManagerBlob,linkName,linkType';var n;"
+"for(n=1;n<=75;n++){s.vl_t+=',prop'+n+',eVar'+n;s.vl_m+=',prop'+n+',eVar'+n}for(n=1;n<=5;n++)s.vl_t+=',hier'+n;for(n=1;n<=3;n++)s.vl_t+=',list'+n;s.va_m=s.sp(s.vl_m,',');s.vl_l2=',tnt,pe,pev1,pev2,p"
+"ev3,resolution,colorDepth,javascriptVersion,javaEnabled,cookiesEnabled,browserWidth,browserHeight,connectionType,homepage,pageURLRest,plugins';s.vl_t+=s.vl_l2;s.va_t=s.sp(s.vl_t,',');s.vl_g=s.vl_t+"
+"',trackingServer,trackingServerSecure,trackingServerBase,fpCookieDomainPeriods,disableBufferedRequests,mobile,visitorSampling,visitorSamplingGroup,dynamicAccountSelection,dynamicAccountList,dynamic"
+"AccountMatch,trackDownloadLinks,trackExternalLinks,trackInlineStats,linkLeaveQueryString,linkDownloadFileTypes,linkExternalFilters,linkInternalFilters,linkTrackVars,linkTrackEvents,linkNames,lnk,eo"
+",lightTrackVars,_1_referrer,un';s.va_g=s.sp(s.vl_g,',');s.pg=pg;s.gl(s.vl_g);s.contextData=new Object;s.retrieveLightData=new Object;if(!ss)s.wds();if(pg){s.wd.s_co=function(o){return o};s.wd.s_gs="
+"function(un){s_gi(un,1,1).t()};s.wd.s_dc=function(un){s_gi(un,1).t()}}",
w=window,l=w.s_c_il,n=navigator,u=n.userAgent,v=n.appVersion,e=v.indexOf('MSIE '),m=u.indexOf('Netscape6/'),a,i,j,x,s;if(un){un=un.toLowerCase();if(l)for(j=0;j<2;j++)for(i=0;i<l.length;i++){s=l[i];x=s._c;if((!x||x=='s_c'||(j>0&&x=='s_l'))&&(s.oun==un||(s.fs&&s.sa&&s.fs(s.oun,un)))){if(s.sa)s.sa(un);if(x=='s_c')return s}else s=0}}w.s_an='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
w.s_sp=new Function("x","d","var a=new Array,i=0,j;if(x){if(x.split)a=x.split(d);else if(!d)for(i=0;i<x.length;i++)a[a.length]=x.substring(i,i+1);else while(i>=0){j=x.indexOf(d,i);a[a.length]=x.subst"
+"ring(i,j<0?x.length:j);i=j;if(i>=0)i+=d.length}}return a");
w.s_jn=new Function("a","d","var x='',i,j=a.length;if(a&&j>0){x=a[0];if(j>1){if(a.join)x=a.join(d);else for(i=1;i<j;i++)x+=d+a[i]}}return x");
w.s_rep=new Function("x","o","n","return s_jn(s_sp(x,o),n)");
w.s_d=new Function("x","var t='`^@$#',l=s_an,l2=new Object,x2,d,b=0,k,i=x.lastIndexOf('~~'),j,v,w;if(i>0){d=x.substring(0,i);x=x.substring(i+2);l=s_sp(l,'');for(i=0;i<62;i++)l2[l[i]]=i;t=s_sp(t,'');d"
+"=s_sp(d,'~');i=0;while(i<5){v=0;if(x.indexOf(t[i])>=0) {x2=s_sp(x,t[i]);for(j=1;j<x2.length;j++){k=x2[j].substring(0,1);w=t[i]+k;if(k!=' '){v=1;w=d[b+l2[k]]}x2[j]=w+x2[j].substring(1)}}if(v)x=s_jn("
+"x2,'');else{w=t[i]+' ';if(x.indexOf(w)>=0)x=s_rep(x,w,t[i]);i++;b+=62}}}return x");
w.s_fe=new Function("c","return s_rep(s_rep(s_rep(c,'\\\\','\\\\\\\\'),'\"','\\\\\"'),\"\\n\",\"\\\\n\")");
w.s_fa=new Function("f","var s=f.indexOf('(')+1,e=f.indexOf(')'),a='',c;while(s>=0&&s<e){c=f.substring(s,s+1);if(c==',')a+='\",\"';else if((\"\\n\\r\\t \").indexOf(c)<0)a+=c;s++}return a?'\"'+a+'\"':"
+"a");
w.s_ft=new Function("c","c+='';var s,e,o,a,d,q,f,h,x;s=c.indexOf('=function(');while(s>=0){s++;d=1;q='';x=0;f=c.substring(s);a=s_fa(f);e=o=c.indexOf('{',s);e++;while(d>0){h=c.substring(e,e+1);if(q){i"
+"f(h==q&&!x)q='';if(h=='\\\\')x=x?0:1;else x=0}else{if(h=='\"'||h==\"'\")q=h;if(h=='{')d++;if(h=='}')d--}if(d>0)e++}c=c.substring(0,s)+'new Function('+(a?a+',':'')+'\"'+s_fe(c.substring(o+1,e))+'\")"
+"'+c.substring(e+1);s=c.indexOf('=function(')}return c;");
c=s_d(c);if(e>0){a=parseInt(i=v.substring(e+5));if(a>3)a=parseFloat(i)}else if(m>0)a=parseFloat(u.substring(m+10));else a=parseFloat(v);if(a<5||v.indexOf('Opera')>=0||u.indexOf('Opera')>=0)c=s_ft(c);if(!s){s=new Object;if(!w.s_c_in){w.s_c_il=new Array;w.s_c_in=0}s._il=w.s_c_il;s._in=w.s_c_in;s._il[s._in]=s;w.s_c_in++;}s._c='s_c';(new Function("s","un","pg","ss",c))(s,un,pg,ss);return s}