<script type='text/javascript'>var OM = OM || {};
//ONCLICK 1205060261500om_he_pv_tc	
OM.om_he_pv_tc= { "tag" : "pv nav true choice link", "clickType" : "o"};</script>
<!-- OMNITURE ME -->
<script type="text/javascript" src="/cs/ContentServer?cid=1204986890525&#38;pagename=ENGInE%2Ftagging%2FOmnitureScript"></script>
<script type="text/javascript">var sford=new Object;sford.tabName='';sford.pageName='comm:vehicle:overview:<tab name>:ford transit courier';sford.dlwasSent=false;sford.eVar11='comm:vehicle:overview:<tab name>';sford.hier1='vehicle:overview:2014:commercial-trucks:ford transit courier';sford.tagViewPhoto='comm:vehicle:overview:view photo:<nameplate>';sford.tagHighlights='';sford.tagDownload='';s.pageName='comm:vehicle:overview:<tab name>:ford transit courier';s.hier1='vehicle:overview:2014:commercial-trucks:ford transit courier';s.channel='vehicle';s.eVar4='rum';s.prop4='rum';s.eVar11='comm:vehicle:overview:<tab name>';s.prop11='comm:vehicle:overview:<tab name>';s.eVar12='2014';s.prop12='2014';sford.my='2014';s.eVar14='ford-ro';s.prop14='ford-ro';s.eVar15='ford-brand';s.prop15='ford-brand';s.eVar16='ford transit courier';s.prop16='ford transit courier';sford.np='ford transit courier';sford.vc='commercial-trucks';</script>
<script type="text/javascript">
    // <![CDATA[
    var __dOC=false;
    if(typeof(sford)=='object'){
        s.pageName=s.pageName.replace(":<tab name>","");
        s.eVar11=s.eVar11.replace(":<tab name>","");
        s.prop11=s.eVar11;
// searchResultPageNumber
        if (typeof searchResultPageNumber == "string") {
            sford.searchPagenumber = searchResultPageNumber;
        }
    }
    if (typeof(attachLoadEvent)=='function') {
        attachLoadEvent(onPageLoad);
    } else {
        $(document).ready(onPageLoad);
    }
    // ]]>
</script>
<script>
    var namplate = 'ford transit courier';
    var googleAdServerNameplateName = namplate.replace("ford ","");
</script>
<script type="text/javascript">
    String.prototype.endsWith = function(str){
        return (this.match(str+"$")==str)
    }
    function createPath() {
        var currentURL = window.location.href;
        if(!currentURL.indexOf("/cs/ContentServer?") > -1 && !currentURL.indexOf("/cs/Satellite?") > -1){
            if(currentURL.indexOf("=") > -1 && currentURL.indexOf("/") > -1 && !currentURL.indexOf("?") > -1){
                currentURL = currentURL.substring(0, currentURL.indexOf("="));
                currentURL = currentURL.substring(0, currentURL.lastIndexOf("/"));
            }
            if(currentURL.indexOf("?") > -1){
                currentURL = currentURL.substring(0, currentURL.indexOf("?"));
                if(currentURL.indexOf("=") > -1 && currentURL.indexOf("/") > -1){
                    currentURL = currentURL.substring(0, currentURL.indexOf("="));
                    currentURL = currentURL.substring(0, currentURL.lastIndexOf("/"));
                }
            }
        }
//Remove all trailing / 
        while(currentURL.endsWith("/")){
            currentURL = currentURL.substring(0,currentURL.lastIndexOf("/"));
        }
        return currentURL;
    }
    tc_page_alias = createPath();
</script>
<script type="text/javascript" src="/cs/ENGInE/js/logging/sophus/logging.js"></script>
<!-- Engine tag - loading 'Layout4_EP2::Body' -->
<!-- Loading sitesetup -->
<!-- 'Layout4_EP2' is calling DoubleClick from 'Body' -->
<script>
    if (typeof isDoubleclickTriggered == 'undefined') {
        var isDoubleclickTriggered = 'false';
    }
    var eusedDevice;
    if(typeof deviceCheck != 'undefined' ){
        if(	deviceCheck == 'mobile'){
            eusedDevice = "nwp:mobile";
        }else{
            eusedDevice = "nwp:desktop";
        }
    }
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
            c_value = unescape(c_value.substring(c_start,c_end));
        }
        return c_value;
    }
    function doubleclickeUsedCompare(str){
//alert(str);
    };
    if(isDoubleclickTriggered === 'false'){
        var isLogin = getCookie("isOwnerAuthenticated");
        var visitorLoginState;
        if (isLogin === 'true') {
            visitorLoginState = 'login';
        } else {
            visitorLoginState = 'not login';
        }
        var currentURL = document.URL;
        dataLayer = [];
        dataLayer.push({"URL":currentURL});
        dataLayer.push({"visitorLoginState" : visitorLoginState});
        if (navigator && navigator.userAgent) {
            dataLayer.push({"userAgent": navigator.userAgent});
        }
        if (typeof siteID != 'undefined') {
            dataLayer.push({"siteID":siteID});
        }else{
            dataLayer.push({"siteID":'1204961250932'});
        }
        countryName = "ford-" + 'ro';
        dataLayer.push({"country":countryName});
        if (typeof googleAdServerNameplateId != 'undefined') {
            dataLayer.push({"nameplateID":googleAdServerNameplateId});
        }
        if(typeof controllerCommand != 'undefined'){
            if(controllerCommand === "VehicleCompare"){
                googleAdServerNameplateName = EUSED.Tagging.getCompareList();
                dataLayer.push({"nameplateName" : googleAdServerNameplateName});
            }else if(controllerCommand === "VehicleShortlist"){
                googleAdServerNameplateName = EUSED.Tagging.getShortlistList();
                dataLayer.push({"nameplateName" : googleAdServerNameplateName});
            }else if(controllerCommand === "Search"){
                googleAdServerNameplateName = EUSED.Tagging.getSelectedVehicleList();
                dataLayer.push({"nameplateName" : googleAdServerNameplateName});
            }
        }
        else if (typeof googleAdServerNameplateName != 'undefined') {
            googleAdServerNameplateName = "ford- " + googleAdServerNameplateName.toLowerCase();
            dataLayer.push({"nameplateName" : googleAdServerNameplateName});
        }
        if (typeof osbNameplateName != 'undefined') {
            osbNameplateName = osbNameplateName.toLowerCase();
            dataLayer.push({"nameplateName" : osbNameplateName});
        }
        if (typeof bookingReferenceNumber != 'undefined') {
            dataLayer.push({"leadID" : bookingReferenceNumber});
        }
        dataLayer.push({"pageTitle":'Ofertă specială Transit Courier'});
        dataLayer.push({"pageCategory":'ford-brand'});
        if (typeof osb_pageId != 'undefined') {
            dataLayer.push({"pageID":osb_pageId});
        }else{
            if(typeof mobile_bnp_pageId != 'undefined') {
                dataLayer.push({"pageID":mobile_bnp_pageId});
            }else if(typeof pageID_eused  != 'undefined'){
                pageID_eused = "brand:used vehicles:search inventory:" + pageID_eused ;
                dataLayer.push({"pageID":pageID_eused });
            }else{
                dataLayer.push({"pageID":'EU_ENGInE_vehicle-homepage'});
            }
        }
        dataLayer.push({"language":'rum'});
    }
</script>
<!-- Google Tag Manager -->
<!-- else condition -->
<noscript><iframe
        src="//www.googletagmanager.com/ns.html?id=GTM-PLW9L" height="0"
        width="0" style="display: none; visibility: hidden"></iframe></noscript>
<script type="text/javascript">
    if(isDoubleclickTriggered === 'false'){
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PLW9L');
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
            #wrapper > div, #wrapper .mainContent {margin-top:0px}
            #container_navi{padding-top:9px}
            #wrapper #frame {top:-3px\9}
        </style>
        <div class="navmenu">
            <div class="navtop"></div>
            <div id="navAnchor"></div>
            <ul id="currentContext" class="currentContext">
                <li id='menu1204961326806' class=''>
                    <a href='/VehiculeComerciale'>Vehicule comerciale</a>
                    <div id="navsubmenu" class="navsubmenu">
                        <div class="navsubmenutop">
                        </div>
                        <ul class="navsubmenu">
                            <li class=''>
                                <a href='/VehiculeComerciale/Prezentare'>Prezentare</a></li>
                            <li class=''>
                                <a href='/VehiculeComerciale/Noua_familie_Transit'>Noua familie Transit</a></li>
                            <li class=''>
                                <a href='/VehiculeComerciale/Transit-Courier'>Noul Transit Courier</a></li>
                            <li class=''>
                                <a href='/VehiculeComerciale/TransitConnect'>Noul Transit Connect</a></li>
                            <li class=''>
                                <a href='/VehiculeComerciale/NoulTransitCustom'>Noul Transit Custom</a></li>
                            <li class=''>
                                <a href='/VehiculeComerciale/Transit2014'>Noul Ford Transit</a></li>
                </li>
                <li><p>Noul Transit Courier</p></li>
            </ul>
            <div class="navdivider"></div>
            <ul id="nextSteps" class="nextSteps">
                <li class="selected"><p>Ofert&#259; special&#259; Transit Courier</p></li>
                <li id='menu1205071929541' class=''>
                    <a href='/VehiculeComerciale/Transit-Courier/PrezentareGenerala'>Prezentare general&#259;</a>
                    <script type="text/javascript">
                        document.id('menu1205071929541').addClass("navnextSteps");
                    </script>
                </li>
                <li id='menu1205071921583' class=''>
                    <a href='/VehiculeComerciale/Transit-Courier/Design'>Design</a>
                    <script type="text/javascript">
                        document.id('menu1205071921583').addClass("navnextSteps");
                    </script>
                </li>
                <li id='menu1205071926525' class=''>
                    <a href='/VehiculeComerciale/Transit-Courier/ExperientaLaVolan'>Experien&#355;a la volan</a>
                    <script type="text/javascript">
                        document.id('menu1205071926525').addClass("navnextSteps");
                    </script>
                </li>
                <li id='menu1205071925495' class=''>
                    <a href='/VehiculeComerciale/Transit-Courier/UtilitateSiCosturi'>Utilitate &#351;i costuri</a>
                    <script type="text/javascript">
                        document.id('menu1205071925495').addClass("navnextSteps");
                    </script>
                </li>
                <li id='menu1205071930736' class=''>
                    <a href='/VehiculeComerciale/Transit-Courier/Performanta'>Performan&#355;&#259; &#351;i eficien&#355;&#259;</a>
                    <script type="text/javascript">
                        document.id('menu1205071930736').addClass("navnextSteps");
                    </script>
                </li>
                <li id='menu1205071926328' class=''>
                    <a href='/VehiculeComerciale/Transit-Courier/Siguranta'>Siguran&#355;&#259; &#351;i securitate</a>
                    <script type="text/javascript">
                        document.id('menu1205071926328').addClass("navnextSteps");
                    </script>
                </li>
                <li id='menu1205071925368' class=''>
                    <a href='/VehiculeComerciale/Transit-Courier/StiluriDeCaroserie'>Stiluri de caroserie</a>
                    <script type="text/javascript">
                        document.id('menu1205071925368').addClass("navnextSteps");
                    </script>
                </li>
                <li id='menu1205071924791' class=''>
                    <a href='/VehiculeComerciale/Transit-Courier/Modele'>Modele</a>
                    <script type="text/javascript">
                        document.id('menu1205071924791').addClass("navnextSteps");
                    </script>
                </li>
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
            engine.media.mdp.labelClose ='Închide';
        </script>
        <div class="mdp2Box">
            <script type="text/javascript">
                detectBW =	false;
                window.addEvent('domready', function(){
                    fd.doDetection();
                });
            </script>
            <div id="mdp">
                <img src='/cs/BlobServer?blobtable=MungoBlobs&#38;blobcol=urldata&#38;blobwhere=1214480972612&#38;blobkey=id' alt='Transit Courier' onclick="omnitureViewPhoto()">
            </div>
            <div class="mdp2" id="mdpImageControl" >
                <table>
                    <tr>
                        <td id="mdp2Fullscreen">
                            <a href="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobwhere=1214480972613&amp;blobkey=id" onclick="engine.media.mdp.onFullScreen('/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobwhere=1214480972613&amp;blobkey=id', 'Transit+Courier');
if(typeof(sford)=='object') omnitureMDPFullScreen('1205073958053'); return false;" >
                                Fullscreen
                            </a>
                        </td>
                        <td id="mdp2Description" style="width:50%">
                            <a id="mdpCaption">
                                Transit Courier
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
            if(window.addEventListener) {
                window.addEventListener("load", mdpOnLoad, false);
            } else if(window.attachEvent) {
                window.attachEvent('onload', mdpOnLoad);
            }
            if(document.id('mdp') != null && typeof document.id('mdp') != 'undefined'){
                document.id('mdp').addEvent("contextmenu",function(event){ event.preventDefault();});
            }
        </script>
        <!--<END_MDP001>-->
    </div>
    <div id="container_center">
        <div class="center_item">
            <div class="btoArticleTitle">NOUL TRANSIT COURIER te ajută să economiseşti din mers!</div>
            <div class="btoArticleText">
                <div class="btoArticleAbstract">
                    <div>Afacerea ta este importantă pentru noi; tocmai de aceea, te invităm să descoperi avantajele noului Ford Transit Courier, cu cel mai bun consum din clasă. <br> <br> &Icirc;n plus, vei descoperi &icirc;n Transit Courier o autotutilitară pe care o conduci cu plăcere, mulţumită noilor tehnologii care &icirc;ţi fac viaţa mai uşoară şi, nu &icirc;n ultimul r&acirc;nd, sporesc siguranţa condusului. <br> <br> Beneficiaza de eficienţă sporită a investiţiei &icirc;n parcul auto: &icirc;ţi oferim noul Ford Transit Courier la doar <strong>9.900 Euro*</strong>! Contactează cel mai apropiat <a HREF="/SBE/Ford/Ford/DealeriFord" >dealer</a> pentru a rezerva un test drive şi pentru a afla detalii suplimentare despre ofertă. <br> <em><br> * Masina din imagine este cu titlu de prezentare. Pretul exprimat nu contine TVA. Oferta este valabila &icirc;n limita stocului disponibil, pentru noul Ford Transit Courier, echipare Base cu optiune AC, 1.0 l EcoBoost, 100, Euro 5, consum mixt(l/km): 5.4, emisii CO<sub>2</sub>(g/km): 124.  </em></div>
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
        <div style="height: 10px">&nbsp;</div>
        <div class="center_item">
            <script>
                var addthis_preconfig_variables = {};
                addthis_preconfig_variables["ui_language"] = "ro";
                addthis_preconfig_variables["services_compact"] = "print,favorites,facebook,twitter,delicious,stumbleupon,more";
                addthis_preconfig_variables["services_expanded"] = "print,favorites,facebook,twitter,delicious,stumbleupon,tumblr,blogger,digg,google,linkedin,reddit,wordpress,";
                addthis_preconfig_variables["services_exclude"] = "hotmail,gmail,email,aolmail,yahoomailemail";
                addthis_preconfig_variables["services_custom"] = {
                    name : "Ford",
                    url : "http://www.ford.ro={{URL}}&title={{TITLE}}",
                    icon : "http://www.ford.com/icon.jpg"
                };
                addthis_preconfig_variables["ui_hover_direction"] = "1";
            </script>
            <!-- AddThis Button BEGIN -->
            <script type="text/javascript">var addthis_config = {"data_track_clickback":true};</script>
            <script type="text/javascript" src='http://s7.addthis.com/js/250/addthis_widget.js?username=engineps'></script>
            <script type="text/javascript">
                var addthis_config = addthis_preconfig_variables;
                var addthis_localize = {share_caption:'Marchează şi partajează',favorites:'Favorite',print:'Printează',more:'Mai multe'};
            </script>
            <!-- AddThis Button END -->
        </div>
        <!-- TD 8042 - AddThis Ends-->
    </div>
    <div id="container_right">
        <div class="right_item">
            <!--<START_MDC001 >-->
            <div class="mdc001Container" id="dummyDiv">
                <p class="mdc001Header" id="mdcHeader" ></p>
                <div class="mdc001" id="mdc1416477130979">
                    <div class="mdc001Gradient">
                        <div class="mdc001GradientContainer"></div>
                    </div>
                </div>
            </div>
            <script>
                var theDiv = document.getElementById("mdpImageControl");
                if(theDiv.style.display == "none"){
                    dummyDiv.style.display = "none";
                }else{
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