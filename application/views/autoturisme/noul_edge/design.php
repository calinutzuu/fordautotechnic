
<script type="text/javascript">
    // mobile sniffer
    ForceRedirectUserAgents = 'android,iphone,blackberry';
    ForceRedirectUserAgentsBypass = 'Win64,Win32';
    ForceRedirectMinWidth = '480';
    MobileHomePageRedirectURL = 'Design\/\/m.ford.ro';
    MobileRedirectURL = MobileHomePageRedirectURL + '/autoturisme/Noul-FordEdge';
</script>
<div id="xAxis-detailed">
    <nav class="breadCrumb visuallyhidden" role="navigation">
        <ul itemprop="breadcrumb">
            <li class="home"><a href="../../index" data-selenium="breadcrumb_home" class="om_bc_li"
                                title="Pagina principal&#259;">Pagina principal&#259;</a><span></span></li>
            <li data-selenium="breadcrumb_cars"><a href="../../Autoturisme" class="om_bc_li">
                    Autoturisme
                </a><span></span></li>
            <li data-selenium="breadcrumb_nameplate">Edge</li>
        </ul>
    </nav>
    <script>
        var vehicleimagepackpresid = '1205110072039';
        var vehicleimagepackyear = 'NONE';
    </script>
    <div class="fblike-locale">en_RO</div>
    <script>
        var googleAdServerNameplateId = 'AUTHORED';
        var googleAdServerNameplateName = 'Edge';
    </script>
    <script type="text/javascript">
        var extend = function (obj, extObj) {
            if (arguments.length > 2) {
                for (var a = 1; a < arguments.length; a++) {
                    extend(obj, arguments[a]);
                }
            } else {
                for (var i in extObj) {
                    obj[i] = extObj[i];
                }
            }
            return obj;
        };
        var bootstrapVehicleData = {"vehicles": [
            {"strIntroToFord": " Noul", "selector": {"bodystyles": {"options": [
                {}
            ]}, "exteriorImages": {"options": [
                {}
            ]}, "interiorImages": {"options": [
                {}
            ]}}, "brand": "Ford", "vehicleType": "PV", "catalogId": "NONE", "nameplate": "Edge", "labelAvailableFrom": "&nbsp;", "formattedCurrency": "", "nameplateText": "Un adevarat varf al gamei noastre de vehicule SUV, noul Ford Edge reprezinta un simbol al rafinamentului modern.", "imagePack": false, "hideVehicleImage": false, "facebookImagePath": "", "facebookAppId": "facebookAppId", "images": [], "billBoardImagePath": null, "backgroundImagePath": ["/assets/img/noul_edge/1214553550026.jpg", "null", "null"], "disclaimerTextColor": ["364957", null, null], "current": true, "cid": "1205110255040", "cta": [
                {"linkTitle": "DESCARC\u0102 BRO\u015EUR\u0102 ", "linkURL": "\/SBE\/BrosuriSiPreturi", "linkType": "primary", "linkTarget": "_blank", "omid": "va"},
                {"linkTitle": "\u00CENSCRIE-TE LA TEST DRIVE ", "linkURL": "\/SBE\/TestDrive\/TestDriveAutoturisme?shopcode=AUTHORED&derivcode=AUTHORED", "linkType": "tertiary", "linkTarget": "_blank", "omid": "tr"}
            ], "social": {"facebook": "https://facebook.com", "facebookPage": "fordromania"}, "disclaimer": " Modelul prezentat este un EDGE", "seriesCode": "AUTHORED", "uscCode": "AUTHORED", "presId": "1205110072039", "promos": [], "idf": {"options": []}}
        ]} || {};
        var retrieveUserOptions = JSON.parse(localStorage.getItem('userSelection')) || {};
        //FranciB: injecting and changing user selected angle image trigger by mid page tabs and on page reload.
        //In order to stop the flickering between the default image and selected angle image in the centre stage.
        if (retrieveUserOptions.selectedImageAngle !== (null || "" || undefined)) {
            bootstrapVehicleData.vehicles[0].images = [retrieveUserOptions.selectedImageAngle];
        }
    </script>
    <div id="fb-root"></div>
    <!-- commented for Release 1604 <section id="billboard" style="height:0;"></section> -->
    <section class="x-axis-wrapper" id="vvmWrapper">
        <div itemscope itemtype="http://schema.org/ImageObject">
            <ul class="nameplate x-axis" id="vvmRoot">
                <li class="default-nameplate-vehicle"
                    style="background-image:url(../../cs/BlobServer64b7?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpg&amp;blobwhere=1214553550026&amp;blobkey=id)">
                    <div class="layered-nameplate-image">
                        <div class="image-holder">
                        </div>
                    </div>
                    <aside class="nameplate-disclaimer style=color:#364957">
                        Modelul prezentat este un EDGE
                    </aside>
                </li>
            </ul>
            <div itemscope itemtype="http://schema.org/Product" id="nameplateDetails" class="nameplate-vehicle">
                <!--the text description-->
                <div class="name-plate-text">
                    <p class="intro"> Noul</p>

                    <h1 class="bigHeading">
                        <span data-selenium="XA_namePlate" itemprop="member" class="nameplate boldTxt">Edge</span>
                        <span data-selenium="XA_model" itemprop="model" itemscope
                              itemtype="http://schema.org/Organization" class="mark">Ford</span>
                        <!--The price -->
                    </h1>
                    <!--The blurb -->
                    <p class="blurb">
                        Un adevarat varf al gamei noastre de vehicule SUV, noul Ford Edge reprezinta un simbol al
                        rafinamentului modern.
                    </p>
                </div>
            </div>
        </div>
        <nav class="vehicle-tools" id="vehicleTools">
        </nav>
        <aside class="vehicle-links box-shadow" id="ctaDetails">
        </aside>
        <div id="intImageCarousel" class="interior-image-carousel">
            <div class="slide-wrapper">
                <article class="slide"></article>
            </div>
        </div>
    </section>
    <!-- bill board -->
    <!-- commented for Release 1604
<script type="text/x-handlebars-template" id="billboardTemplate">
{{#each vehicles}}
{{#if current}}
<div style="background:url({{billBoardImagePath}}) no-repeat;"></div>
{{/if}}
{{/each}}
</script>
-->
    <!-- VIEW TEMPLATES -->
    <script type="text/x-handlebars-template" id="vehicleTemplate">
        {{#each vehicles}}
        <li>
            <div class="vehicle-background"
            {{#if current}}
            style="background:url({{backgroundImagePath.0.}})"
            {{else}}data-deferred='{"type" :"background", "url" :"{{backgroundImagePath.0.}}"}'
            {{/if}}
            >
</div>
{{#if imagePack}}
<div class="imagePack">
{{else}}
<div class="layered-nameplate-image">
    {{/if}}
    <div class="image-holder">
        {{#if hideVehicleImage}}
        {{else}}
        {{#each images}}
        <img {{#if ../current}}src="{{this}}" {{else}}data-deferred='{"type" : "image","url" : "{{this}}"}'{{/if}}/>
        {{/each}}
        {{/if}}
    </div>
</div>
<aside class="nameplate-disclaimer" style="color:#{{disclaimerTextColor.0.}}">{{disclaimer}}</aside>
</li>
{{/each}}
</script>
<script type="text/x-handlebars-template" id="nameplateDetailsTemplate">
    <div class="name-plate-text">
        <p class="intro">{{{strIntroToFord}}}</p>

        <h1 class="bigHeading">
            <span itemprop="model" itemscope itemtype="http://schema.org/Organization" class="mark"
                  data-selenium="XA_model">{{brand}}</span>
            <span itemprop="member" class="nameplate boldTxt" data-selenium="XA_namePlate">{{nameplate}}</span>
        </h1>
        <!--The blurb-->
        <p class="blurb">{{nameplateText}}</p>
    </div>
</script>
<script type="text/x-handlebars-template" id="selectorTemplate">
    <a href="{{#if link}}{{link}}{{else}}#{{/if}}"
       class="vehicle-selector box-shadow{{#if className}} {{className}}-wrapper{{/if}}">
        <img
            src="{{#if options}}{{options.0.iconURL}} {{else}} {{#if iconURL}}{{iconURL}} {{else}}{{options.0.imagePath}}{{/if}} {{/if}}"/>
        {{#if options.0.iconURL}}<span class="actionable-play"></span>{{/if}}
        {{#if options.length}}
        <div class="selector-options {{className}}">
            <ul>
                {{#each options}}
                {{#if dataOverlay}}
                <li tabindex="0"
                    class="js-overlay"
                    data-media-overlay='{"mediaType":"{{dataOverlay.mediaType}}", "tooltipText":"{{this.tooltipText}}", "link":"{{this.link}}", "height":{{dataOverlay.height}}, "width":{{dataOverlay.width}},  {{#if videoSrc}} "src1":"{{videoSrc.0.src1}}", "src2":"{{videoSrc.1.src2}}" {{/if}} }'
                    data-idx="{{this.idx}}">
                    <img src="{{this.iconURL}}" alt=""/>
                    <span class="tooltip"><span class="arrow left {{../tooltipPlacement}}"></span><span>{{this.tooltipText}}</span></span>
                    <i></i>
                    <span class="actionable-play"></span>
                </li>
                {{else}}
                <li tabindex="0" class="{{#if omid}}omv_pv_xd_st_{{omid}}{{/if}}{{#if selected}} selected{{/if}}"
                {{#if usc}}data-usc-code="{{this.usc}}{{/if}}" data-idx="{{this.idx}}">
                <img src="{{this.imagePath}}" alt="{{this.tooltipText}}"/>
                <span class="tooltip"><span
                        class="arrow left {{../tooltipPlacement}}"></span><span>{{this.tooltipText}}</span></span>
                <i></i>
                </li>
                {{/if}}
                {{/each}}
            </ul>
        </div>
        {{/if}}
        {{#if label}}
        <span class="selector-label">{{label}}</span>
        {{/if}}
        <span class="actionable"></span>
        {{#if tooltipText}}
        <span class="tooltip"><span>{{this.tooltipText}}</span><span
                class="arrow {{../tooltipPlacement}}"></span></span>
        {{/if}}
    </a>
</script>
<script type="text/x-handlebars-template" id="ctaTemplate">
    {{#each this}}
    {{#ifCond linkType '==' 'primary'}}
    <div data-selenium="conf_vehicle_XA" class="btnLink box-shadow">
        {{/ifCond}}
        {{#ifCond linkType '==' 'secondary'}}
        <div data-selenium="all_models_XA" class="btnLink light box-shadow">
            {{/ifCond}}
            {{#ifCond linkType '==' 'tertiary'}}
            <div class="link-wrapper slate">
                {{/ifCond}}
                <a href="{{linkURL}}"
                   class="{{#ifCond linkType '==' 'tertiary'}}tertiary-link {{/ifCond}}om_pv_xd_{{omid}}" {{#ifCond
                linkTarget '!=' ''}}target="{{linkTarget}}"{{/ifCond}}>{{linkTitle}}</a>
            </div>
            {{/each}}
</script>
<script type="text/x-handlebars-template" id="carouselSlideTemplate">
    {{#each promos}}
    <article class="slate slide">
        <a {{#if overlay}}class="js-overlay"
        data-media-overlay='{"width":{{overlay.width}},"height":{{overlay.height}} }'
        {{/if}} href="{{link}}">
<span class="active-promo-rover">
<span class="bg-opacity"></span>
<span class="{{#if overlay}}overlay-icon{{else}}link-icon{{/if}}"></span>
</span>
        <img src="{{imagePath}}"/>

        <p class=" promo-carousel-text">{{text}}</p>
        </a>
    </article>
    {{/each}}
</script>
<script type="text/x-handlebars-template" id="interiorImageCarouselSlideTemplate">
    {{#each options}}
    <article class="slate slide">
        {{#each images}}
        <img src="{{this}}" alt="{{../tooltipText}}"/>
        {{/each}}
    </article>
    {{/each}}
</script>
<script type="text/x-handlebars-template" id="vehicleRolloverTemplate">
    {{#each rollovers}}
    <figure class="vehicle-preview-rollover {{className}}">
        <img src="{{hoverThumbnail}}" alt="{{nameplate}}."/>
        <span class="nameplate boldTxt">{{nameplate}}</span>

        <p><span class="price-label">{{{labelAvailableFrom}}}</span>
            <span itemprop="price" class="price">{{{formattedCurrency}}}</span></p>
    </figure>
    {{/each}}
</script>
<aside class="fb-xaxis-icon">
    <div class="fb-like" data-href="http://www.facebook.com/fordromania" data-send="false" data-layout="button_count"
         data-width="450" data-show-faces="true" data-font="tahoma"></div>
</aside>
<p id="xaxisOverviewDisclaimer" class="disclaimer specific"></p>
<!-- Promos -->
<!-- Tabs -->
<script
    type="text/javascript"> var nameplateTabErrorMsg = 'Ne pare r&#259;u, momentan nu putem s&#259; &icirc;nc&#259;rc&#259;m con&#539;inutul pe care l-a&#539;i solicitat. &Icirc;ncerca&#539;i din nou, mai t&acirc;rziu.'; </script>
<!-- Addthis Replacement : Start -->
<!-- SocialShare END -->
<script type="text/javascript">
    var bootstrapsocialshare = {"shareBtn": {"googleplus": {"url": "https:\/\/plus.google.com\/share", "id": ""}, "facebook": {"url": "https:\/\/www.facebook.com\/sharer\/sharer.php", "id": "619904354830748"}, "email": "{}", "twitter": {"url": "https:\/\/twitter.com\/share", "id": ""}}, "emailSubject": "Un model Ford care poate te intereseaza", "subline": "Distribuie prietenilor t&#259;i!", "enable": true, "items": ["facebook", "twitter", "googleplus", "email"], "emailBodyContent": "Salut, ma uitam pe ford.ro si m-am gandit ca, in mod sigur, ti-ar placea acest model: \r\n\r\n\r\n", "headline": "Ai nevoie de o a doua opinie?"};
</script>
<!-- Addthis Replacement : End -->
<section id="primary-tab-content" class="nameplate-tab-content" data-dynamic-tabcontent="true"
         data-siteterm-backtotop="Back To Top !!!">
<div class="tab-wrapper">
<nav class="tabs" id="primaryTabs">
<ul>
<!--  isBtfTab true -->
<!--  tabUrl /cs/ContentServer?cid=1205110255040&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="Prezentare#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205110255040&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE">PREZENTARE</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205110253425 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205110255040&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205114703717&amp;tabName=Preturi-si-promotii&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="Preturi-si-promotii#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205110255040&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205114703717&amp;tabName=Preturi-si-promotii&amp;c=Page&amp;site=RORO4_ENGINE">Preturi
        si promotii</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205114702831 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205110255040&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205110253384&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE -->
<!-- IntoID ::: articleAssetId -->
<li class="selected"><a href="Design#primaryTabs"
                        data-ajaxlink="/cs/ContentServer?cid=1205110255040&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205110253384&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE">DESIGN</a>
<!--This is where the main content for the selected tab will go -->
<!-- secondary tabs -->
<div class="secondary-tabs tab-content">
<nav class="sub-nav">
    <ul>
        <li><a href='#tab1' class='omt_tabName'>EXTERIOR</a></li>
        <li><a href='#tab2' class='omt_tabName'>Interior</a></li>
        <li><a href='#tab3' class='omt_tabName'>JANTE</a></li>
        <li><a href='#tab4' class='omt_tabName'>CULORI</a></li>
        <li><a href='#tab5' class='omt_tabName'>ORNAMENTE INTERIOARE</a></li>
    </ul>
</nav>
<!-- isBtfTab : from MidPageTabs true -->
<div class="innertab-wrapper">
<!--  tabTitle : EXTERIOR :: btfTabContent : 1205110251664 :: tabContent :  -->
<div id='tab1' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            INCREZATOR. IMPOZANT. DINAMIC.
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>O prezenta greu de ignorat, Ford Edge transmite substanta si stil. <br> <br> Acesta este un vehicul cu
            viziune, din multe puncte de vedere. <br> <br> Fiecare aspect al modelului Edge ofera o senzatie tangibila
            de modernitate si de calitate fara compromisuri.</p>
        </p>
    </header>
    <header class="intro-header">
        <h1 class="bigHeading">
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p></p>
        <center>
            <iframe width="860" height="439" frameborder="0" src="https://www.youtube.com/embed/wLOi3yH_SRo"
                    allowfullscreen=""></iframe>
        </center>
        <p></p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214553551943.jpg"
                    alt="Ford Edge on the street"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Design contemporan rafinat</p>
            </p>
        </div>
        <div class="content-block">
           <img
                    src="/assets/img/noul_edge/1214561274998.jpg"
                    alt="Ford Edge on the road"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Prezenta rutiera indrazneata si impozanta</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/noul_edge/1214553600062.jpg"
                    alt="Ford Edge side - Super-slim halogen or LED headlights"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Aerodinamica imbunatatita</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
           <img
                    src="/assets/img/noul_edge/1214552946318.jpg"
                    alt="Ford Edge Unique LED Tail Lamps"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Faruri cu tehnologie LED</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214553599979.jpg"
                    alt="Ford Edge rear windscreen"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Aspect sport, cu teava dubla de esapament</p>
            </p>
        </div>
        <div class="content-block last">
           <img
                    src="/assets/img/noul_edge/1214553556372.jpg"
                    alt="Ford Edge on the road"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Spatiu pentru vacante sau excursii de weekend</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214553549860.jpg"
                    alt="Ford Edge on the street"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Agilitate in mediul urban</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214553549291.jpg"
                    alt="Ford Edge Front Grille"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Grila frontala indrazneata si distinctiva</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/noul_edge/1214552949292.jpg"
                    alt="Ford Edge rear - Strongly sculpted, performance style wheel arches"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Sculptural si solid din orice unghi</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Interior :: btfTabContent : 1205110263481 :: tabContent :  -->
<div id='tab2' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            DETALIAT. ELITIST. LUXOS.
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Edge ofera spatiu suficient pentru ca cinci adulti sa calatoreasca in cel mai inalt confort. Habitaclul
            abunda de detalii de inalta calitate, precum finisajele cu argintiu satinat si negru abanos.<br> <br>
            Interiorul sofisticat al acestui vehicul imbina designul inteligent cu o atentie remarcabila la detalii.<br>
            Ford Edge inspira un stil de condus calm si increzator. &nbsp;<br> <br> Prin contributia controlului activ
            al zgomotului la linistea si ambianta placuta din cabina, Ford Edge iti asigura o experienta satisfacatoare
            din toate punctele de vedere.</p>
        </p>
    </header>
    <header class="intro-header">
        <h1 class="bigHeading">
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p></p>
        <center>
            <iframe width="860" height="439" frameborder="0" allowfullscreen=""
                    src="https://www.youtube.com/embed/KLczneiE9O0"></iframe>
        </center>
        <p></p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214553598322.jpg"
                    alt="The Edge features a spacious and refined interior"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Interior spatios si rafinat</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214552948543.jpg"
                    alt="SYNC 2 gives you voice-activated control of many Edge functions"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>SYNC 2 cu functie de comanda vocala</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/noul_edge/1214552946665.jpg"
                    alt="Ford Edge Spacious legroom"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Spatiu confortabil pentru cinci persoane si multe bagaje</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214553597783.jpg"
                    alt="Ford Edge heated rear seats"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Scaune incalzite pentru pasagerii din spate</p>
            </p>
        </div>
        <div class="content-block">
           <img
                    src="/assets/img/noul_edge/1214552946152.jpg"
                    alt="Ford Edge Electronic parking brake and Ambient lighting"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Lumini ambientale</p>
            </p>
        </div>
        <div class="content-block last">
           <img
                    src="/assets/img/noul_edge/1214552949209.jpg"
                    alt="Ford Edge back seats"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Spatiu din belsug, chiar si pentru cei mai inalti pasageri</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : JANTE :: btfTabContent : 1205110256770 :: tabContent :  -->
<div id='tab3' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            MARI. INDRAZNETE. CAPABILE.
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Alege dintr-o gama de variante de jante pline de caracter - inclusiv jante din aliaj de 20 de inchi, finisate
            cu Dark Tarnish, culoare unica pentru Ford Edge Sport.</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214553590559.jpg"
                    alt="Ford Edge 19” 5-spoke alloy wheel in silver"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Janta cu X spite de 19&rdquo;, argintie<br> (Dotare standard pentru Trend si Titanium)</p>
            </p>
        </div>
        <div class="content-block">
            <a href="#"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="/assets/img/noul_edge/1214553590642.jpg"
                    alt="Ford Edge 19” 5x2-spoke alloy wheel with silver face and darker silver features"/><span
                    class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Janta cu X spite de 19&rdquo;, cu fata argintie si elemente argintiu-inchis <br> (Dotare standard pentru
                Titanium, optionala pentru Trend)</p>
            </p>
        </div>
        <div class="content-block last">
            <a href="#"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="/assets/img/noul_edge/1214553589893.jpg"
                    alt="Ford Edge 20” 5x2-spoke alloy wheel in Dark Tarnish"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Janta cu X spite de 20&rdquo;, Dark Tarnish.<br>
                (Dotare standard pentru Sport)</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <a href="#"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="/assets/img/noul_edge/1214553590476.jpg"
                    alt="Ford Edge 20” 5x2-spoke alloy wheel with polished face and darker silver features"/><span
                    class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Janta cu X spite de 20&rdquo;, cu fata lucioasa si elemente argintiu-inchis <br> (Disponibila cu pachetul
                Lux)</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : CULORI :: btfTabContent : 1205110266327 :: tabContent :  -->
<div id='tab4' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            INDIVIDUAL. COLORAT. UIMITOR.
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Edge vine intr-o gama de culori distinse si ultramoderne pentru a-ti scoate in evidenta personalitatea si
            pentru a-ti reflecta gusturile.</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214553583936.jpg"
                    alt="Ford Edge in White Platinum colour"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>White Platinum<br>
                Four-Coat metallic</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214553584276.jpg"
                    alt="Ford Edge in Magnetic colour"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Magnetic <br>
                Metallic</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/noul_edge/1214553584882.jpg"
                    alt="Ford Edge in Shadow Black colour"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Shadow Black<br>
                Mica</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214553584110.jpg"
                    alt="Ford Edge in Ingot Silver colour"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Ingot Silver <br>
                Metallic</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214553584623.jpg"
                    alt="Ford Edge in Ruby Red"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Ruby Red <br> Tri-Coat metallic</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/noul_edge/1214553584535.jpg"
                    alt="Ford Edge in Bronze Fire Red"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Bronze Fire <br> Metallic</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214553584193.jpg"
                    alt="Ford Edge in Oxford White colour"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Oxford White <br>
                Solid</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214553584359.jpg"
                    alt="Ford Edge in Kona Blue colour"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Kona Blue <br>
                Metallic</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/noul_edge/1214553583551.jpg"
                    alt="Ford Edge in Nautilus Blue colour"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Nautilus Blue <br>
                Metallic</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214553584796.jpg"
                    alt="Ford Edge in Electric Spice colour"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Electric Spice <br>
                Metallic</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : ORNAMENTE INTERIOARE :: btfTabContent : 1205110252071 :: tabContent :  -->
<div id='tab5' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            COORDONAT. CONFORTABIL. CONTEMPORAN.
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Ornamentele de interior executate atent sunt disponibile intr-o paleta asortata de culori.<br>
            Tu si pasagerii tai veti calatori intr-o cabina pe cat de confortabila, pe atat de moderna.</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <a href="#"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="/assets/img/noul_edge/1214553588277.jpg"
                    alt="Ford Edge interior trim - Trend: Ebony Cloth"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Trend: tapiterie textila, nuanta Ebony</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214553588443.jpg"
                    alt="Ford Edge interior trim - Sport: Ebony cloth"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Sport: tapiterie textila, nuanta Ebony</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/noul_edge/1214553588618.jpg"
                    alt="Ford Edge interior trim - Titanium: Ebony leather"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Titanium: tapiterie piele, nuanta Ebony</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214553588360.jpg"
                    alt="Ford Edge interior trim - Salerno Micro Perf Leather in Ebony"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Tapiterie piele Salerno cu microperforatii, nuanta Ebony</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214553588701.jpg"
                    alt="Ford Edge interior trim - Salerno Leather in Tobacco"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Tapiterie piele Salerno, nuanta Tobacco</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/noul_edge/1214553588535.jpg"
                    alt="Ford Edge interior trim - Salerno Leather with Miko Suede Perf in Medium Soft Ceramic"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Tapiterie piele Salerno cu microperforatii Miko Suede, nuanta Medium Soft Ceramic</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
           <img
                    src="/assets/img/noul_edge/1214553588784.jpg"
                    alt="Ford Edge interior trim - Salerno Leather in Ebony"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Tapiterie piele Salerno, nuanta Ebony</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214553588094.jpg"
                    alt="Ford Edge interior trim - Salerno Leather in Medium Soft Ceramic"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Tapiterie piele Salerno, nuanta Medium Soft Ceramic</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/noul_edge/1214553588867.jpg"
                    alt="Ford Edge interior trim - Salerno Micro Perf Leather in Tobacco"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Tapiterie piele Salerno cu microperforatii, nuanta Tobacco</p>
            </p>
        </div>
    </article>
</div>
</div>
</div>
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205110255040&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205110250016&amp;tabName=Caracteristici&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="Caracteristici#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205110255040&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205110250016&amp;tabName=Caracteristici&amp;c=Page&amp;site=RORO4_ENGINE">CARACTERISTICI</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205110253148 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205110255040&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205110267615&amp;tabName=Edge-Vignale&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="Edge-Vignale#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205110255040&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205110267615&amp;tabName=Edge-Vignale&amp;c=Page&amp;site=RORO4_ENGINE">Edge
        Vignale</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205110253955 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205110255040&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205110257622&amp;tabName=Models&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="Models#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205110255040&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205110257622&amp;tabName=Models&amp;c=Page&amp;site=RORO4_ENGINE">Modele</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205110252667 -->
</li>
</ul>
</nav>
</div>
<article class="nameplate-main-content" id="tabs">
</article>
<!-- Bredcrumb Schema implementation for Primary Tabs-->
<nav class="breadCrumb" role="navigation" style="display: none">
    <ul itemscope itemtype="http://schema.org/BreadcrumbList">
    </ul>
</nav>
<script class="script.EP2_Tab_Bootstrap">
    var __links = document.querySelectorAll('.omt_tabName'), i;
    for (i = 0; i < __links.length; ++i) {
        __links[i].onclick = function (e) {
            TK.broadcast(document.body, "pageload", {tabName: e.currentTarget.innerText.toLowerCase()});
        }
    }
</script>
</section>
<script id="TagIT.load" defer></script>
</div>

<script src="../../cs/ContentServer5cdb?pagename=EP2%2fENGInE%2fscript%2fGroupedJS" type="text/javascript"></script>
<script
    src="../../cs/ContentServerc169?pagename=ENGInE/EP2/common/GetScript&amp;elements=/EP2/body/cars/xaxis_detailed/xaxisctaview_script"></script>
<script
    src="../../cs/ContentServer1ec6?pagename=ENGInE/EP2/common/GetScript&amp;elements=/EP2/body/cars/xaxis_detailed/selectorinitialization_script"></script>
<script
    src="../../cs/ContentServer2cd3?pagename=ENGInE/EP2/common/GetScript&amp;elements=/EP2/body/cars/xaxis_detailed/selectordefaultconfigmodel_script"></script>
<script
    src="../../cs/ContentServercc27?pagename=ENGInE/EP2/common/GetScript&amp;elements=/EP2/body/cars/xaxis_detailed/selectorviewcontroller_script"></script>
<script
    src="../../cs/ContentServer936b?pagename=ENGInE/EP2/common/GetScript&amp;elements=/EP2/body/cars/xaxis_detailed/vehicletemplaterenderer_script"></script>
<script
    src="../../cs/ContentServer528e?pagename=ENGInE/EP2/common/GetScript&amp;elements=/EP2/body/cars/xaxis_detailed/interiorimagecarouselfacade_script"></script>
<script
    src="../../cs/ContentServer7197?pagename=ENGInE/EP2/common/GetScript&amp;elements=/EP2/body/cars/xaxis_detailed/vehicledatacache_script"></script>
<script
    src="../../cs/ContentServerd52c?pagename=ENGInE/EP2/common/GetScript&amp;elements=/EP2/body/cars/xaxis_detailed/vehiclerollovercontroller_script"></script>
<script
    src="../../cs/ContentServerc0f4?pagename=ENGInE/EP2/common/GetScript&amp;elements=/EP2/body/cars/xaxis_detailed/nameplatecarouselfacade_script"></script>
<script
    src="../../cs/ContentServer556a?pagename=ENGInE/EP2/common/GetScript&amp;elements=/EP2/body/cars/xaxis_detailed/nameplatedetailsview_script"></script>
<script
    src="../../cs/ContentServer6fca?pagename=ENGInE/EP2/common/GetScript&amp;elements=/EP2/body/cars/xaxis_detailed/imagemodels_script"></script>
<script
    src="../../cs/ContentServer688d?pagename=ENGInE/EP2/common/GetScript&amp;elements=/EP2/body/cars/xaxis_detailed/xaxis_script"></script>
<!-- Engine tag - loading 'null::SystemFooter' -->
<!-- Loading sitesetup -->
<script> EP2.Globals.siteName = 'RORO4_ENGINE';
    EP2.Globals.gforceMode = 'LIVE'</script>
<script type="text/javascript">
    var EP2 = EP2 || {};
    EP2.cookieLegislation.trigger();
    //FB : apply css rule for the footer SBE expandable list
    EP2.applyCssToFooterSBE = function () {
        var expandable = $('dd > .expand');
        var ordinaryLink = $('.listColumn > dl > dd > .sbe');
        expandable.each(function (i, v) {
            var findSpan = $(this).find('> span');
            console.log();
            if (!findSpan.length) {
                $(this).append('<span></span>');
            }
        });
        ordinaryLink.each(function (i, v) {
            var findLink = $(this).find('> span');
            if (!findLink.length) {
                $(this).append('<span></span>');
            }
        });
    }();
</script>
<!-- Engine tag - loading '/EP2/body/cars/xaxis_detailed/Body::SystemFooter' -->
<!-- Loading sitesetup -->
<!-- '/EP2/body/cars/xaxis_detailed/Body' is calling DoubleClick from 'SystemFooter' -->
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
            var nameplateName = 'ford edge';
            googleAdServerNameplateName = nameplateName.toLowerCase();
            dataLayer.push({"nameplateName": googleAdServerNameplateName});
            if (typeof osbNameplateName != 'undefined') {
                osbNameplateName = osbNameplateName.toLowerCase();
                dataLayer.push({"nameplateName": osbNameplateName});
            }
            if (typeof bookingReferenceNumber != 'undefined') {
                dataLayer.push({"leadID": bookingReferenceNumber});
            }
            dataLayer.push({"pageTitle": 'Design noului Ford EDGE | Ford RO'});
            dataLayer.push({"pageCategory": 'ford-brand'});
            if (typeof osb_pageId != 'undefined') {
                dataLayer.push({"pageID": osb_pageId});
            } else {
                if (typeof mobile_bnp_pageId != 'undefined') {
                    dataLayer.push({"pageID": mobile_bnp_pageId});
                } else if (typeof pageID_eused != 'undefined') {
                    pageID_eused = "brand:used vehicles:search inventory:" + pageID_eused;
                    dataLayer.push({"pageID": pageID_eused });
                } else {
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
<script type='text/javascript'>var OM = OM || {};
    //ONCLICK 1205060261500om_he_pv_tc	
    OM.om_he_pv_tc = { "tag": "pv nav true choice link", "clickType": "o"};</script>
<!-- OMNITURE ME -->
<script type="text/javascript"
        src="../../cs/ContentServer1756?cid=1204986890525&amp;pagename=ENGInE%2Ftagging%2FOmnitureScript"></script>
<script type="text/javascript">var sford = new Object;
    sford.tabName = '';
    sford.pageName = 'brand:passenger:vehicle:gallery:<tab name>:ford edge';
    sford.dlwasSent = false;
    sford.eVar11 = 'brand:passenger:vehicle:gallery:<tab name>';
    sford.hier1 = 'vehicle:gallery:car:ford edge:2015';
    sford.tagViewPhoto = '';
    sford.tagHighlights = '';
    sford.tagDownload = '';
    s.pageName = 'brand:passenger:vehicle:gallery:<tab name>:ford edge';
    s.hier1 = 'vehicle:gallery:car:ford edge:2015';
    s.channel = 'vehicle';
    s.eVar4 = 'rum';
    s.prop4 = 'rum';
    s.eVar11 = 'brand:passenger:vehicle:gallery:<tab name>';
    s.prop11 = 'brand:passenger:vehicle:gallery:<tab name>';
    s.eVar12 = '2015';
    s.prop12 = '2015';
    sford.my = '2015';
    s.eVar14 = 'ford-ro';
    s.prop14 = 'ford-ro';
    s.eVar15 = 'ford-brand';
    s.prop15 = 'ford-brand';
    s.eVar16 = 'ford edge';
    s.prop16 = 'ford edge';
    sford.np = 'ford edge';
    sford.vc = 'car';</script>
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
<script>
    var TagIT = TagIT || {};
</script>
<script
    src='../../cs/ContentServer45dd?cid=1&amp;isMobile=false&amp;pagename=RORO4_ENGINE%2Fscript%2Ftagit%2Fassembler&amp;require=NONE&amp;location=load&amp;c=Page'
    defer></script>
<script
    src='../../cs/ContentServerd3e7?cid=1&amp;isMobile=false&amp;pagename=RORO4_ENGINE%2Fscript%2Ftagit%2Fstatic&amp;require=NONE&amp;location=load&amp;c=Page'></script>
<!-- Engine tag - loading '/EP2/body/cars/xaxis_detailed/Body::BodyBottom' -->
<!-- Loading sitesetup -->
<script>
</script>
<!-- enableiPerceptions is - 'null' -->
