
<script type="text/javascript">
    // mobile sniffer
    ForceRedirectUserAgents = 'android,iphone,blackberry';
    ForceRedirectUserAgentsBypass = 'Win64,Win32';
    ForceRedirectMinWidth = '480';
    MobileHomePageRedirectURL = 'Design\/\/m.ford.ro';
</script>
<div id="xAxis-detailed">
    <nav class="breadCrumb visuallyhidden" role="navigation">
        <ul itemprop="breadcrumb">
            <li class="home"><a href="../../index" data-selenium="breadcrumb_home" class="om_bc_li"
                                title="Pagina principal&#259;">Pagina principal&#259;</a><span></span></li>
            <li data-selenium="breadcrumb_cars"><a href="../../Autoturisme" class="om_bc_li">
                    Autoturisme
                </a><span></span></li>
            <li data-selenium="breadcrumb_nameplate">Ka+</li>
        </ul>
    </nav>
    <script>
        var vehicleimagepackpresid = '1205106611413';
        var vehicleimagepackyear = 'NONE';
    </script>
    <div class="fblike-locale">en_RO</div>
    <script>
        var googleAdServerNameplateId = 'AUTHORED';
        var googleAdServerNameplateName = 'Focus RS ';
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
            {"strIntroToFord": " ", "selector": {"bodystyles": {"options": [
                {}
            ]}, "exteriorImages": {"options": [
                {}
            ]}, "interiorImages": {"options": [
                {}
            ]}}, "brand": "Ford", "vehicleType": "PV", "catalogId": "NONE", "nameplate": "Focus RS ", "labelAvailableFrom": "&nbsp;", "formattedCurrency": "", "nameplateText": "Aspect fara compromis. Performanta epica. Emblema legendara. Aceasta este o masina nascuta din obsesia pentru proiectarea de precizie si tehnologia pentru condus, precum si din pasiunea pentru sporturile cu motor.", "imagePack": false, "hideVehicleImage": false, "facebookImagePath": "", "facebookAppId": "facebookAppId", "images": [], "billBoardImagePath": null, "backgroundImagePath": ["/assets/img/focus_rs/1214538993941.jpg", "null", "null"], "disclaimerTextColor": [null, null, null], "current": true, "cid": "1205106489583", "cta": [

            ], "social": {"facebook": "https://facebook.com", "facebookPage": "fordromania"}, "disclaimer": "Modelul prezentat este un Focus RS", "seriesCode": "AUTHORED", "uscCode": "AUTHORED", "presId": "1205106611413", "promos": [], "idf": {"options": []}}
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
                    style="background-image:url(/assets/img/focus_rs/1214538993941.jpg)">
                    <div class="layered-nameplate-image">
                        <div class="image-holder">
                        </div>
                    </div>
                    <aside class="nameplate-disclaimer ">
                        Modelul prezentat este un Focus RS
                    </aside>
                </li>
            </ul>
            <div itemscope itemtype="http://schema.org/Product" id="nameplateDetails" class="nameplate-vehicle">
                <!--the text description-->
                <div class="name-plate-text">
                    <p class="intro"></p>

                    <h1 class="bigHeading">
                        <span data-selenium="XA_namePlate" itemprop="member" class="nameplate boldTxt">Focus RS </span>
                        <span data-selenium="XA_model" itemprop="model" itemscope
                              itemtype="http://schema.org/Organization" class="mark">Ford</span>
                        <!--The price -->
                    </h1>
                    <!--The blurb -->
                    <p class="blurb">
                        Aspect fara compromis. Performanta epica. Emblema legendara. Aceasta este o masina nascuta din
                        obsesia pentru proiectarea de precizie si tehnologia pentru condus, precum si din pasiunea
                        pentru sporturile cu motor.
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

<!-- Addthis Replacement : End -->
<section id="primary-tab-content" class="nameplate-tab-content" data-dynamic-tabcontent="true"
         data-siteterm-backtotop="Back To Top !!!">
<div class="tab-wrapper">
<nav class="tabs" id="primaryTabs">
<ul>
<!--  isBtfTab true -->
<!--  tabUrl /cs/ContentServer?cid=1205106489583&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="/Autoturisme/FocusRS" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205106489583&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE">Prezentare</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205106491781 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205106489583&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205107339789&amp;tabName=PreturiSiPromotii&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="PreturiSiPromotii#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205106489583&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205107339789&amp;tabName=PreturiSiPromotii&amp;c=Page&amp;site=RORO4_ENGINE">Preturi
        si Promotii</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205107339997 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205106489583&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205106491651&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE -->
<!-- IntoID ::: articleAssetId -->
<li class="selected"><a href="Design#primaryTabs"
                        data-ajaxlink="/cs/ContentServer?cid=1205106489583&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205106491651&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE">Design</a>
<!--This is where the main content for the selected tab will go -->
<!-- secondary tabs -->
<div class="secondary-tabs tab-content">
<nav class="sub-nav">
    <ul>
        <li><a href='#tab1' class='omt_tabName'>Exterior</a></li>
        <li><a href='#tab2' class='omt_tabName'>Interior</a></li>
        <li><a href='#tab3' class='omt_tabName'>Jante</a></li>
        <li><a href='#tab4' class='omt_tabName'>Culori</a></li>
        <li><a href='#tab5' class='omt_tabName'>Tapiterie</a></li>
    </ul>
</nav>
<!-- isBtfTab : from MidPageTabs true -->
<div class="innertab-wrapper">
<!--  tabTitle : Exterior :: btfTabContent : 1205106484969 :: tabContent :  -->
<div id='tab1' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            O PREZENTA IMPOZANTA,<br><br> O IMAGINE PUTERNICA
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Aspectul Focus RS a fost
            dictat de performanta si promovat de stil.
            <br>
            <br>
            O grila superioara indrazneata si un difuzor frontal adanc imbunatatesc
            aerodinamica. Aripile coborate si deschiderile mari de pe laterale
            alimenteaza conductele pentru racirea franelor.
            Iar difuzorul spate si spoilerul de acoperis sporesc forta descendenta.
            <br>
            <br>
            Fara nicio indoiala, este vorba de un design avangardist, executat cu un scop.</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
           <img src="/assets/img/focus_rs/1214538999407.jpg"
                    alt="Ford Focus RS rear"/>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Semiprofil spate: Solid, impozant si gata de orice.</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/focus_rs/1214538996604.jpg"
                    alt="Ford Focus RS front"/>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Semiprofil fata: Design indraznet, creat cu un scop.</p>
            </p>
        </div>
        <div class="content-block last">
           <img
                    src="/assets/img/focus_rs/1214538999989.jpg"
                    alt="Ford Focus RS front, on the road"/>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Performanta remarcabila, atat pe pista, cat si pe drum.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
           <img
                    src="/assets/img/focus_rs/1214538997102.jpg"
                    alt="Ford Focus RS front wheel"/>
          

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Bucura-te de control si manevrabilitate maxime la viraje.</p>
            </p>
        </div>
        <div class="content-block">
          <img
                    src="/assets/img/focus_rs/1214538997019.jpg"
                    alt="Ford Focus RS Smart Bi-Xenon headlight"/>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Farurile inteligente Bi-Xenon asigura o vizibilitate excelenta.</p>
            </p>
        </div>
        <div class="content-block last">
          <img
                    src="/assets/img/focus_rs/1214538997449.jpg"
                    alt="Ford Focus RS rear badge"/>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Emblema legendara RS.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
           <img
                    src="/assets/img/focus_rs/1214538996521.jpg"
                    alt="Ford Focus RS twin exhaust"/>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Teava de esapament dubla intensifica aspectul sport.</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/focus_rs/1214539000412.jpg"
                    alt="Ford Focus RS rear spoiler"/>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Spoilerul spate este foarte util si stilat.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/focus_rs/1214538998990.jpg"
                    alt="Ford Focus RS 3/4 close-up of lights, wheels and grille"/>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Peste tot sunt prezente detalii de stil dinamice.</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Interior :: btfTabContent : 1205106491818 :: tabContent :  -->
<div id='tab2' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            O CABINA PROIECTATA IN JURUL TAU
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>De indata ce intri in Focus RS, vei sti
            ca ai patruns intr-un spatiu ce iti este dedicat tie, soferului.
            <br>
            <br>
            Aseaza-te confortabil pe scaunele sport Recaro
            si observi cum toate indicatoarele si comenzile sunt
            amplasate perfect; volanul este echilibrat in mod
            ideal; fiecare dotare are rolul de a iti imbunatati
            experienta generala.
            <br>
            <br>
            Cu cusaturi tematice albastre, specifice stilului RS, si cu detalii
            executate cu atentie de jur imprejur, senzatia de sofisticare nu este
            data doar de performantele masinii.</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/focus_rs/1214538997713.jpg"
                    alt="Ford Focus RS interior cockpit"/>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Interior cabina Focus RS</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/focus_rs/1214538997361.jpg"
                    alt="Ford Focus RS - SYNC 2"/>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>SYNC 2.0</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/focus_rs/1214538998397.jpg"
                    alt="Ford Focus RS Performance gauges"/>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Indicatoare performante</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
           <img
                    src="/assets/img/focus_rs/1214538996936.jpg"
                    alt="Ford Focus RS instrument panel"/>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Panou de bord</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/focus_rs/1214538999074.jpg"
                    alt="Ford Focus RS interior cockpit"/>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Interior cabina Focus RS</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/focus_rs/1214538998729.jpg"
                    alt="Ford Focus RS 6-speed manual transmiassion"/>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Transmisie manuala cu sase trepte de viteza</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
         <img
                    src="/assets/img/focus_rs/1214539000748.jpg"
                    alt="Ford Focus RS RECARO Shell Seat"/>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>RECARO Shell Seat</p>
            </p>
        </div>
        <div class="content-block">
           <img
                    src="/assets/img/focus_rs/1214538998646.jpg"
                    alt="Ford Focus RS front and rear floor mat"/>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Covorase fata si spate si praguri deosebite</p>
            </p>
        </div>
        <div class="content-block last">
           <img
                    src="/assets/img/focus_rs/1214538997185.jpg"
                    alt="Ford Focus RS steering wheel"/>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Volan cu partea inferioara plata</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Jante :: btfTabContent : 1205106485780 :: tabContent :  -->
<div id='tab3' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            PROIECTAT PENTRU STIL. CONSTRUIT PENTRU PERFORMANTA.
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Alege jante din aliaj bine gandite si atragatoare, cu 20 de spite sau 5x2 spite. Unele vin chiar cu pneuri
            speciale pentru pista.*</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/focus_rs/1214538996687.jpg"
                    alt="Ford Focus RS alloy - 19” 20-Spoke Silver"/>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Jante optionale din aliaj forjat, 5x2 spite, de 19”, cu finisaj negru cu stralucire redusa*</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/focus_rs/1214538998480.jpg"
                    alt="Ford Focus RS alloy - 19” 20-Spoke alloys  with matt magnetite finish"/>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Jantele din aliaj cu 20 de spite, de 19”, argintii, sunt prezente ca dotare standard</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/focus_rs/1214539000158.jpg"
                    alt="Ford Focus RS alloy - 19” 5x2-Spoke forged alloy wheel"/>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Jante optionale din aliaj cu 20 de spite, de 19”, cu finisaj din magnetit mat </p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Culori :: btfTabContent : 1205106492253 :: tabContent :  -->
<div id='tab4' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            O IMAGINE UIMITOARE IN ORICE CULOARE
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Alege culoarea in care crezi ca arata cel mai bine  Focus RS.</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/focus_rs/1214538997801.jpg"
                    alt="Ford Focus RS in Shadow Black colour"/>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Shadow Black</p>
            </p>
        </div>
        <div class="content-block">
        <img
                    src="/assets/img/focus_rs/1214538997537.jpg"
                    alt="Ford Focus RS in Magnetic colour"/>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Magnetic</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/focus_rs/1214539000329.jpg"
                    alt="Ford Focus RS in Nitrous Blue colour"/>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Nitrous Blue</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
           <img
                    src="/assets/img/focus_rs/1214538999323.jpg"
                    alt="Ford Focus RS in Stealth Grey colour"/>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Stealth Grey</p>
            </p>
        </div>
        <div class="content-block">
          <img
                    src="/assets/img/focus_rs/1214538998141.jpg"
                    alt="Ford Focus RS in Frozen White colour"/>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Frozen White</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Tapiterie :: btfTabContent : 1205106494227 :: tabContent :  -->
<div id='tab5' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            Sportiv si sofisticat, atat pe dinafara, cat si pe dinauntru
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Scaunele au fost proiectate pentru a iti oferi cel mai bun nivel de sustinere si confort. De asemenea, poti
            personaliza cabina RS intr-unul dintre cele trei stiluri disponibile. Cu detalii Nitrous Blue specifice
            modelului RS. </p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/focus_rs/1214539000748.jpg"
                    alt="Ford Focus RS RECARO Shell Seat"/>

            <h3 class="bigHeading02">
                Scaun tip cochilie RECARO
            </h3>

            <p>

            <p>&bull; Perne laterale solide <br>
                &bull; Cu panouri autentice, din material textil cu microfibre Dinamica, specifice sporturilor cu motor
            </p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/focus_rs/1214538999573.jpg"
                    alt="Ford Focus RS Charcoal Black RECARO Sport Seat"/>

            <h3 class="bigHeading02">
                Scaun sport RECARO Charcoal Black
            </h3>

            <p>

            <p>&bull; Scaun standard <br> &bull; Partial din piele, cu cusaturi albastre</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/focus_rs/1214538999905.jpg"
                    alt="Ford Focus RS Nitrous Blue RECARO Sport Seat"/>

            <h3 class="bigHeading02">
                Scaun sport RECARO Nitrous Blue
            </h3>

            <p>

            <p>&bull; Optiune gratuita<br>
                &bull; Partial din piele, cu cusaturi si perne albastre</p>
            </p>
        </div>
    </article>
</div>
</div>
</div>
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205106489583&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205106492979&amp;tabName=Caracteristici&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="Caracteristici#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205106489583&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205106492979&amp;tabName=Caracteristici&amp;c=Page&amp;site=RORO4_ENGINE">Caracteristici</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205106493265 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205106489583&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205110358908&amp;tabName=Accesorii&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="Accesorii#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205106489583&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205110358908&amp;tabName=Accesorii&amp;c=Page&amp;site=RORO4_ENGINE">Accesorii</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205110363694 -->
</li>
</ul>
</nav>
</div>
<article class="nameplate-main-content" id="tabs">
</article>
<!-- Bredcrumb Schema implementation for Primary Tabs-->
<nav class="breadCrumb" role="navigation" style="display: none">
    <ul itemscope itemtype="../../../schema.org/BreadcrumbList">
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
<script id="TagIT.load"></script>
</div>
