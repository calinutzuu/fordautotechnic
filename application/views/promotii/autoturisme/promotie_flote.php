
<script type='text/javascript'>var OM = OM || {};
    //ONCLICK 1205060261500om_he_pv_tc
    OM.om_he_pv_tc = { "tag": "pv nav true choice link", "clickType": "o"};</script>
<!-- OMNITURE ME -->
<script type="text/javascript"
        src="http://www.ford.ro/cs/ContentServer?cid=1204986890525&amp;pagename=ENGInE%2Ftagging%2FOmnitureScript"></script>
<script type="text/javascript">var sford = new Object;
    sford.tabName = '';
    sford.pageName = 'brand:promotions:fleet:fuel';
    sford.dlwasSent = false;
    sford.eVar11 = 'brand:promotions:fleet:fuel';
    sford.hier1 = 'shopping tools:promotions:fleet';
    sford.tagViewPhoto = '';
    sford.tagHighlights = '';
    sford.tagDownload = '';
    s.pageName = 'brand:promotions:fleet:fuel';
    s.hier1 = 'shopping tools:promotions:fleet';
    s.channel = 'promotions';
    s.eVar4 = 'rum';
    s.prop4 = 'rum';
    s.eVar11 = 'brand:promotions:fleet:fuel';
    s.prop11 = 'brand:promotions:fleet:fuel';
    s.eVar14 = 'ford-ro';
    s.prop14 = 'ford-ro';
    s.eVar15 = 'ford-fleet';
    s.prop15 = 'ford-fleet';</script>
<script type="text/javascript">
    // <![CDATA[
    var __dOC = false;
    if (typeof(sford) == 'object') {
        s.pageName = s.pageName.replace(":<tab name>", "");
        s.eVar11 = s.eVar11.replace(":<tab name>", "");
        s.prop11 = s.eVar11;
// searchResultPageNumber
        if (typeof searchResultPageNumber == "string") {
            sford.searchPagenumber = searchResultPageNumber;
        }
    }
    if (typeof(attachLoadEvent) == 'function') {
        attachLoadEvent(onPageLoad);
    } else {
        $(document).ready(onPageLoad);
    }
    // ]]>
</script>
<script type="text/javascript">
    String.prototype.endsWith = function (str) {
        return (this.match(str + "$") == str)
    }
    function createPath() {
        var currentURL = window.location.href;
        if (!currentURL.indexOf("/cs/ContentServer?") > -1 && !currentURL.indexOf("/cs/Satellite?") > -1) {
            if (currentURL.indexOf("=") > -1 && currentURL.indexOf("http://www.ford.ro/") > -1 && !currentURL.indexOf("?") > -1) {
                currentURL = currentURL.substring(0, currentURL.indexOf("="));
                currentURL = currentURL.substring(0, currentURL.lastIndexOf("http://www.ford.ro/"));
            }
            if (currentURL.indexOf("?") > -1) {
                currentURL = currentURL.substring(0, currentURL.indexOf("?"));
                if (currentURL.indexOf("=") > -1 && currentURL.indexOf("http://www.ford.ro/") > -1) {
                    currentURL = currentURL.substring(0, currentURL.indexOf("="));
                    currentURL = currentURL.substring(0, currentURL.lastIndexOf("http://www.ford.ro/"));
                }
            }
        }
//Remove all trailing / 
        while (currentURL.endsWith("http://www.ford.ro/")) {
            currentURL = currentURL.substring(0, currentURL.lastIndexOf("http://www.ford.ro/"));
        }
        return currentURL;
    }
    tc_page_alias = createPath();
</script>
<script>
    if (typeof TagIT != 'object' || typeof TagIT.handlesSophus == 'function' && !TagIT.handlesSophus()) {
        var sophusScript = document.createElement('script');
        sophusScript.src = '../../cs/ENGInE/js/logging/sophus/logging.js';
    }
</script>
<!-- Engine tag - loading 'Layout4_EP2::Body' -->
<!-- Loading sitesetup -->
<!-- 'Layout4_EP2' is calling DoubleClick from 'Body' -->
<script>
    if (typeof isDoubleclickTriggered == 'undefined') {
        var isDoubleclickTriggered = 'false';
    }
    var eusedDevice;
    if (typeof deviceCheck != 'undefined') {
        if (deviceCheck == 'mobile') {
            eusedDevice = "nwp:mobile";
        } else {
            eusedDevice = "nwp:desktop";
        }
    }
    var pageTitle = null;
</script>
<script type="text/javascript">
    function getCookie(c_name) {
        var c_value = document.cookie;
        var c_start = c_value.indexOf(" " + c_name + "=");
        if (c_start == -1) {
            c_start = c_value.indexOf(c_name + "=");
        }
        if (c_start == -1) {
            c_value = null;
        } else {
            c_start = c_value.indexOf("=", c_start) + 1;
            var c_end = c_value.indexOf(";", c_start);
            if (c_end == -1) {
                c_end = c_value.length;
            }
            c_value = unescape(c_value.substring(c_start, c_end));
        }
        return c_value;
    }
    function doubleclickeUsedCompare(str) {
//alert(str);
    }
    ;
    if (isDoubleclickTriggered === 'false') {
        if (typeof TagIT != 'object' || (typeof TagIT.handlesDoubleClick == 'function' || !TagIT.handlesDoubleClick)) {
            var isLogin = getCookie("isOwnerAuthenticated");
            var visitorLoginState;
            if (isLogin === 'true') {
                visitorLoginState = 'login';
            } else {
                visitorLoginState = 'not login';
            }
            var currentURL = document.URL;
            dataLayer = [];
            dataLayer.push({"URL": currentURL});
            dataLayer.push({"visitorLoginState": visitorLoginState});
            if (navigator && navigator.userAgent) {
                dataLayer.push({"userAgent": navigator.userAgent});
            }
            if (typeof siteID != 'undefined') {
                dataLayer.push({"siteID": siteID});
            } else {
                dataLayer.push({"siteID": '1204961250932'});
            }
            countryName = "ford-" + 'ro';
            dataLayer.push({"country": countryName});
            if (typeof googleAdServerNameplateId != 'undefined') {
                dataLayer.push({"nameplateID": googleAdServerNameplateId});
            }
            if (typeof controllerCommand != 'undefined') {
                if (controllerCommand === "VehicleCompare") {
                    googleAdServerNameplateName = EUSED.Tagging.getCompareList();
                    dataLayer.push({"nameplateName": googleAdServerNameplateName});
                } else if (controllerCommand === "VehicleShortlist") {
                    googleAdServerNameplateName = EUSED.Tagging.getShortlistList();
                    dataLayer.push({"nameplateName": googleAdServerNameplateName});
                } else if (controllerCommand === "Search") {
                    googleAdServerNameplateName = EUSED.Tagging.getSelectedVehicleList();
                    dataLayer.push({"nameplateName": googleAdServerNameplateName});
                }
                else if (controllerCommand === "VehicleDetail" && typeof googleAdServerNameplateName != 'undefined') {
                    googleAdServerNameplateName = "ford " + googleAdServerNameplateName.toLowerCase();
                    dataLayer.push({"nameplateName": googleAdServerNameplateName});
                }
            }
            if (typeof osbNameplateName != 'undefined') {
                osbNameplateName = osbNameplateName.toLowerCase();
                dataLayer.push({"nameplateName": osbNameplateName});
            }
            if (typeof bookingReferenceNumber != 'undefined') {
                dataLayer.push({"leadID": bookingReferenceNumber});
            }
            dataLayer.push({"pageTitle": 'Bonus de pana la 1.000 \u20AC (TVA inclus)* in carburant, pentru persoanele juridice!'});
            dataLayer.push({"pageCategory": 'ford-fleet'});
            if (typeof osb_pageId != 'undefined') {
                dataLayer.push({"pageID": osb_pageId});
            } else {
                if (typeof mobile_bnp_pageId != 'undefined') {
                    dataLayer.push({"pageID": mobile_bnp_pageId});
                } else if (typeof pageID_eused != 'undefined') {
                    pageID_eused = "brand:used vehicles:search inventory:" + pageID_eused;
                    dataLayer.push({"pageID": pageID_eused });
                } else {
                    dataLayer.push({"pageID": 'brand:promotions:fleet:fuel'});
                }
            }
            dataLayer.push({"language": 'rum'});
        }
    }
</script>
<!-- Google Tag Manager -->
<!-- if condition -->
<noscript>
    <iframe
        src="http://www.googletagmanager.com/ns.html?id=GTM-WL5HW9" height="0"
        width="0" style="display: none; visibility: hidden"></iframe>
</noscript>
<script type="text/javascript">
    if (isDoubleclickTriggered === 'false') {
        if (typeof TagIT != 'object' || typeof TagIT.handlesDoubleClick != 'function' || !TagIT.handlesDoubleClick()) {
            (function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    '../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-WL5HW9');
        }
    }
    isDoubleclickTriggered = 'true';
</script>
<!-- End Google Tag Manager -->
<script>
</script>
<!-- enableiPerceptions is - 'null' -->
<div id="frame">
<!-- Header -->
<!-- <Start> -->
<div id="top_anchor"><a name="top"></a></div>
<!--<START_MHB001 >-->
<div id="masthead">
    <div style="height: 115px">&nbsp;</div>
</div>
<!--<END_MHB001 >-->
<!-- <End> -->
<!-- Navigation -->
<!-- <Start> -->
<div id="container_navi">
    <div class="left_item">
        <style type="text/css">
            #wrapper > div, #wrapper .mainContent {
                margin-top: 0px
            }

            #container_navi {
                padding-top: 9px
            }

            #wrapper #frame {
                top: -3 px\9
            }
        </style>
        <div class="navmenu">
            <div class="navtop"></div>
            <div id="navAnchor"></div>
            <ul id="currentContext" class="currentContext">
                <li id='menu1204977637197' class=''>
                    <a href='/Promotii'/>Promo&#355;ii</a>
                    <div id="navsubmenu" class="navsubmenu">
                        <div class="navsubmenutop">
                        </div>
                        <ul class="navsubmenu">
                            <li class=''>
                                <a href='../Autoturisme'>Promo&#355;ii autoturisme</a></li>
                            <li class=''>
                                <a href='../comerciale'>Promo&#539;ii vehicule comerciale</a></li>
                            <li class=''>
                                <a href='../FordService/Motorcraft'>Promo&#355;ii service</a></li>
                            <li class=''>
                                <a href='../promotii-accesorii'>Promo&#355;ii accesorii</a></li>
                        </ul>
                        <div class="navsubmenubottom">
                        </div>
                    </div>
                </li>
                <li><p>Promo&#355;ii autoturisme</p></li>
            </ul>
            <div class="navdivider"></div>
            <ul id="nextSteps" class="nextSteps">
                <li id='menu1205110702778' class=''>
                    <a href='Ecobonus'/>Ecobonus</a>
                    <div id="navsubmenu" class="navsubmenu">
                        <div class="navsubmenutop">
                        </div>
                        <ul class="navsubmenu">
                            <li class=''>
                                <a href='Ecobonus/OfertaFiesta'>Oferta Fiesta</a></li>
                            <li class=''>
                                <a href='Ecobonus/OfertaFocus'>Oferta Focus</a></li>
                            <li class=''>
                                <a href='Ecobonus/OfertaBMAX'>Oferta B-MAX</a></li>
                            <li class=''>
                                <a href='Ecobonus/OfertaMondeo'>Oferta Mondeo</a></li>
                            <li class=''>
                                <a href='Ecobonus/OfertaEcoSport'>Oferta EcoSport</a></li>
                            <li class=''>
                                <a href='Ecobonus/Rezervare'>Rezervare</a></li>
                            <li class=''>
                                <a href='Ecobonus/Procedura'>Procedura</a></li>
                            <li class=''>
                                <a href='Ecobonus/WeekendulInovatiei'>Weekendul Inovatiei</a></li>
                        </ul>
                        <div class="navsubmenubottom">
                        </div>
                    </div>
                </li>
                <li id='menu1205122624174' class=''>
                    <a href='NoulKAPlus'/>Noul KA Plus</a>
                    <script type="text/javascript">
                        document.id('menu1205122624174').addClass("navnextSteps");
                    </script>
                </li>
                <li id='menu1205117034275' class=''>
                    <a href='NoulFordEdge'/>Noul Ford Edge</a>
                    <script type="text/javascript">
                        document.id('menu1205117034275').addClass("navnextSteps");
                    </script>
                </li>
                <li id='menu1205119421517' class=''>
                    <a href='KugaSummerEdition'/>Kuga Summer Edition</a>
                    <script type="text/javascript">
                        document.id('menu1205119421517').addClass("navnextSteps");
                    </script>
                </li>
                <li id='menu1205113482626' class=''>
                    <a href='BusinessWeeks'/>BusinessWeeks</a>
                    <script type="text/javascript">
                        document.id('menu1205113482626').addClass("navnextSteps");
                    </script>
                </li>
                <li class="selected"><p>Promotie Flote</p></li>
            </ul>
            <div class="navbottom"></div>
        </div>
    </div>
    <div class="left_item">
    </div>
</div>
<!-- <End> -->
<div id="container_main">
    <div id="mediaplayer1">
        <!--<START_MDP001>-->
        <script type="text/javascript">
            engine.media.mdp.labelClose = 'Închide';
        </script>
        <div class="mdp2Box">
            <script type="text/javascript">
                detectBW = false;
                window.addEvent('domready', function () {
                    fd.doDetection();
                });
            </script>
            <div id="mdp">
                <img
                    src='/assets/img/1214564411644.jpg'
                    alt='Promotie Flote' onclick="omnitureViewPhoto()">
            </div>
            <div class="mdp2" id="mdpImageControl">
                <table>
                    <tr>
                        <td id="mdp2Fullscreen">
                            <a href="/assets/img/1214564411644.jpg"
                               onclick="engine.media.mdp.onFullScreen('/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobwhere=1214564411645&amp;blobkey=id', 'Promotie+Flote');
if(typeof(sford)=='object') omnitureMDPFullScreen('1205122637759'); return false;">
                                Fullscreen
                            </a>
                        </td>
                        <td id="mdp2Description" style="width:50%">
                            <a id="mdpCaption">
                                Promotie Flote
                            </a>
                        </td>
                        <td id="mdp2Right">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <script type="text/javascript">
            //ENG-8108	changed the parameter of doshow function
            // msukhia1: wrong way, right way would be to publish an event
            // but it would reload initial flash;
            function mdpOnLoad() {
                engine.media.lockup.doshow('');
            }
            if (window.addEventListener) {
                window.addEventListener("load", mdpOnLoad, false);
            } else if (window.attachEvent) {
                window.attachEvent('onload', mdpOnLoad);
            }
            if (document.id('mdp') != null && typeof document.id('mdp') != 'undefined') {
                document.id('mdp').addEvent("contextmenu", function (event) {
                    event.preventDefault();
                });
            }
        </script>
        <!--<END_MDP001>-->
    </div>
    <div id="container_center">
        <div class="center_item">
            <div class="btoArticleTitle">Promotie pentru persoane juridice - bonus de pana la 1.000 € (TVA inclus)* in
                carburant!
            </div>
            <div class="btoArticleText">
                <div class="btoArticleAbstract">
                    <div>A venit timpul sa iti maresti parcul auto sau sa ti-l innoiesti? Acum poti beneficia de un
                        bonus suplimentar pentru afacerea ta.<br> <br> La achizitionarea unuia dintre modelele Ford
                        Mondeo, S-Max si Galaxy beneficiezi acum de <strong>carburant in valoare de 500 &euro;, TVA
                            inclus*</strong>, in timp ce pentru versiunile Mondeo Vignale si S-Max Vignale bonusul de
                        <strong>carburant este in valoare de 1.000 &euro;, TVA inclus*</strong>. <br> <br> Bonusul se
                        acorda pentru fiecare autoturism cumparat si nu este limitat la un numar maxim de achizitii. Se
                        ofera sub forma de carduri de carburant care pot fi utilizate in reteaua de benzinarii Mol de pe
                        intreg teritoriul Romaniei, pe o perioada de 12 luni de la data emiterii. <br> <br> Afla mai
                        multe despre oferta la consultantul pentru persoane juridice de la cel mai apropiat dealer Ford.
                        <br> <br> Detalii despre modelele participante la promotie: <br> <br> Ford Mondeo - elegant,
                        dinamic, ultramodern, cu tehnologii de ultima ora &ndash; click <a
                            HREF="/Autoturisme/Mondeo">aici</a>.<br> <br> Ford S-Max &ndash;
                        tehnologii inteligente, stil ultracontemporan, eficient, util &ndash; click <a
                            HREF="/Autoturisme/Noul-S-MAX">aici</a><br> <br> Ford Galaxy &ndash;
                        flexibil, spatios, design modern, tehnologii de ultima generatie &ndash; click <a
                            HREF="/Autoturisme/NoulGalaxy">aici</a><br> <br> Iar despre stilul unic,
                        experienta premium si serviciile dedicate pe care ti le ofera Ford Mondeo Vignale si Ford S-Max
                        Vignale, poti afla mai multe <a target="_blank" href="http://vignale.ford.ro/ro-RO/">aici</a>.
                        <br> <br> <br> <br> <em>*Oferta adresata persoanelor juridice, valabila in limita stocului
                            disponibil, la dealerii participanti la program. Termenii si conditiile de utilizare a
                            cardurilor de carburant sunt disponibile in showroom-urile Ford. </em></div>
                </div>
            </div>
        </div>
        <div class="center_item">
        </div>
        <div class="center_item">
        </div>
        <div class="center_item">
        </div>
        <div class="center_item">
        </div>
        <div id="center_btt">
        </div>
        <!-- TD 8042 - AddThis Social Book Marking tool display Starts-->
        <!-- TD 8042 - AddThis Ends-->
        <!-- AddThis Replacement Starts-->
        <!-- AddThis Replacement Ends-->
    </div>
    <div id="container_right">
        <div class="right_item">
            <!--<START_MDC001 >-->
            <div class="mdc001Container" id="dummyDiv">
                <p class="mdc001Header" id="mdcHeader"></p>

                <div class="mdc001" id="mdc1416477130979">
                    <div class="mdc001Gradient">
                        <div class="mdc001GradientContainer"></div>
                    </div>
                </div>
            </div>
            <script>
                var theDiv = document.getElementById("mdpImageControl");
                if (theDiv.style.display == "none") {
                    dummyDiv.style.display = "none";
                } else {
                    dummyDiv.style.display = "block";
                }
            </script>
            <!--<END_MDC001 >-->
        </div>
        <!-- Technical Highlights -->
        <!-- <Start> -->
        <div class="right_item">
        </div>
        <!-- <End> -->
        <div class="right_item">
        </div>
    </div>
</div>
<!-- Footer -->
<!-- <Start> -->
</div>