
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
            <li data-selenium="breadcrumb_nameplate">Galaxy</li>
        </ul>
    </nav>
    <script>
        var vehicleimagepackpresid = '1205095116351';
        var vehicleimagepackyear = 'NONE';
    </script>
    <div class="fblike-locale">en_RO</div>
    <script>
        var googleAdServerNameplateId = 'AUTHORED';
        var googleAdServerNameplateName = 'Galaxy';
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
            {"strIntroToFord": " NOUL", "selector": {"bodystyles": {"options": [
                {}
            ]}, "exteriorImages": {"options": [
                {}
            ]}, "interiorImages": {"options": [
                {}
            ]}}, "brand": "Ford", "vehicleType": "PV", "catalogId": "NONE", "nameplate": "Galaxy", "labelAvailableFrom": "&nbsp;", "formattedCurrency": "", "nameplateText": "Spatiu interior rafinat si bine echipat, cu sapte locuri confortabile si o gama de tehnologii remarcabile.", "imagePack": false, "hideVehicleImage": false, "facebookImagePath": "", "facebookAppId": "facebookAppId", "images": [], "billBoardImagePath": null, "backgroundImagePath": ["/assets/img/noul_galaxy/1214514162638.jpg", "null", "null"], "disclaimerTextColor": ["A7A7A7", null, null], "current": true, "cid": "1205094889909", "cta": [
                {"linkTitle": "DESCARC\u0102 BRO\u015EUR\u0102 ", "linkURL": "\/SBE\/BrosuriSiPreturi", "linkType": "primary", "linkTarget": "_blank", "omid": "va"},
                {"linkTitle": "\u00CENSCRIE-TE LA TEST DRIVE ", "linkURL": "\/SBE\/TestDrive\/TestDriveAutoturisme?shopcode=AUTHORED&derivcode=AUTHORED", "linkType": "tertiary", "linkTarget": "_blank", "omid": "tr"}
            ], "social": {"facebook": "https://facebook.com", "facebookPage": "fordromania"}, "disclaimer": "MODELUL PREZENTAT ESTE UN GALAXY ZETEC. IMAGINE CU TITLUL DE PREZENTARE.", "seriesCode": "AUTHORED", "uscCode": "AUTHORED", "presId": "1205095116351", "promos": [], "idf": {"options": []}}
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
                    style="background-image:url(../../cs/BlobServere0c9?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpg&amp;blobwhere=1214514162638&amp;blobkey=id)">
                    <div class="layered-nameplate-image">
                        <div class="image-holder">
                        </div>
                    </div>
                    <aside class="nameplate-disclaimer style=color:#A7A7A7">
                        MODELUL PREZENTAT ESTE UN GALAXY ZETEC. IMAGINE CU TITLUL DE PREZENTARE.
                    </aside>
                </li>
            </ul>
            <div itemscope itemtype="http://schema.org/Product" id="nameplateDetails" class="nameplate-vehicle">
                <!--the text description-->
                <div class="name-plate-text">
                    <p class="intro"> NOUL</p>

                    <h1 class="bigHeading">
                        <span data-selenium="XA_namePlate" itemprop="member" class="nameplate boldTxt">Galaxy</span>
                        <span data-selenium="XA_model" itemprop="model" itemscope
                              itemtype="http://schema.org/Organization" class="mark">Ford</span>
                        <!--The price -->
                    </h1>
                    <!--The blurb -->
                    <p class="blurb">
                        Spatiu interior rafinat si bine echipat, cu sapte locuri confortabile si o gama de tehnologii
                        remarcabile.
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
<!--  tabUrl /cs/ContentServer?cid=1205094889909&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="PrezentareGenerala#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205094889909&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE">Prezentare
        generala</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205094894185 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205094889909&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205104019638&amp;tabName=Preturi-si-promotii&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="Preturi-si-promotii#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205094889909&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205104019638&amp;tabName=Preturi-si-promotii&amp;c=Page&amp;site=RORO4_ENGINE">Preturi
        si promotii</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205104016375 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205094889909&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205094893939&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE -->
<!-- IntoID ::: articleAssetId -->
<li class="selected"><a href="Design#primaryTabs"
                        data-ajaxlink="/cs/ContentServer?cid=1205094889909&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205094893939&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE">Design</a>
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
<!--  tabTitle : Exterior :: btfTabContent : 1205094890307 :: tabContent :  -->
<div id='tab1' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            O IMAGINE A INCREDERII SI A CONFORTULUI
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>O silueta aerodinamica si distinsa, cu contururi fluide si detalii clare caracterizeaza designul inteligent
            al noului Galaxy. <br><br> Farurile inguste, detaliile cromate si spoilerul spate subliniaza eleganta si
            performantele eficiente ale masinii.</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_galaxy/1214514160645.jpg"
                    alt="All-New Galaxy Exterior 360"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Noul Ford Galaxy - exterior
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/noul_galaxy/1214514160989.jpg"
                    alt="Elegant yet contemporary design"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Design contemporan si elegant
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/noul_galaxy/1214514158188.jpg"
                    alt="A panoramic roof lets the daylight in"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Plafon panoramic
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_galaxy/1214514158937.jpg"
                    alt="A flowing, streamlined profile"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Contur fluid
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/noul_galaxy/1214514161405.jpg"
                    alt="Aerodynamic styling for greater efficiency"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Design aerodinamic
            </p>
        </div>
        <div class="content-block last">
           <img
                    src="/assets/img/noul_galaxy/1214514160036.jpg"
                    alt="Beautifully proportioned, from every angle"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Bine proportionat din orice unghi
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_galaxy/1214514163449.jpg"
                    alt="An image that’s sophisticated yet dynamic"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Noul Galaxy – vedere din fata
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/noul_galaxy/1214514161489.jpg"
                    alt="Fluid contours, crisp detailing, distinctive features"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Noul Galaxy – vedere din spate
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/noul_galaxy/1214514162702.jpg"
                    alt="Intelligent design: inside and out"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Design intelligent: la interior si la exterior
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Interior :: btfTabContent : 1205094899026 :: tabContent :  -->
<div id='tab2' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            CALATORESTI RELAXAT: AJUNGI LA DESTINATIE PLIN DE ENERGIE
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Interiorul Galaxy este relaxant, spatios si sofisticat. Il poti considera un adevarat sanctuar. <br><br>
            Designul inteligent iti pune la indemana, in mod intuitiv, toate caracteristicile, comenzile, tehnologiile
            si spatiile de depozitare. Iar utilizarea materialelor de inalta calitate este completata de atentia la
            detalii.</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_galaxy/1214514160297.jpg"
                    alt="All-New Galaxy Interior 360"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Noul Ford Galaxy - interior
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/noul_galaxy/1214514162951.jpg"
                    alt="All-New Galaxy Interior"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Design interior
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/noul_galaxy/1214514160471.jpg"
                    alt="Galaxy Centre Console"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Consola centrala
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_galaxy/1214514161821.jpg"
                    alt="All-New Galaxy Interior"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Bord
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/noul_galaxy/1214514164374.jpg"
                    alt="AWD Digilog Cluster Display"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Display digital
            </p>
        </div>
        <div class="content-block last">
           <img
                    src="/assets/img/noul_galaxy/1214514161572.jpg"
                    alt="Flexible Seating"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Scaune flexibile
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Jante :: btfTabContent : 1205094894743 :: tabContent :  -->
<div id='tab3' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            JANTE CARE SE POTRIVESC STILULUI TAU
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Noul Galaxy este disponibil cu o gama larga
            de jante.</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_galaxy/1214514158437.jpg"
                    alt="All-New Ford Galaxy 17" 5x2 Spoke Alloy Wheel" /><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Jante din aliaj, de 17", in 5x2 spite
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/noul_galaxy/1214514159186.jpg"
                    alt="All-New Ford Galaxy 17" 5-Split Spoke Alloy Wheel" /><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Jante din aliaj, de 17", in 5 spite
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/noul_galaxy/1214514158271.jpg"
                    alt="All-New Ford Galaxy 18" 5-Spoke Alloy Wheel (Easy Clean)" /><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Jante din aliaj, de 18", in 5 spite
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_galaxy/1214514164540.jpg"
                    alt="All-New Ford Galaxy 19" 20-Spoke Alloy Wheel" /><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Jante din aliaj, de 19", in 20 de spite
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/noul_galaxy/1214514161904.jpg"
                    alt="All-New Ford Galaxy 17" 20-Spoke Alloy Wheel" /><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Jante din aliaj, de 17", in 20 de spite
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Culori :: btfTabContent : 1205094894888 :: tabContent :  -->
<div id='tab4' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            CREEAZA-TI PROPRIA IMAGINE, CU O CULOARE LA ALEGERE
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Alege din gama de culori contemporane pentru exterior.</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_galaxy/1214514158520.jpg"
                    alt="All-New Ford Galaxy in Magnetic"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Magnetic
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/noul_galaxy/1214514159518.jpg"
                    alt="All-New Ford Galaxy in Guard"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Guard
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/noul_galaxy/1214514163781.jpg"
                    alt="All-New Ford Galaxy in Deep Impact Blue"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Deep Impact Blue
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_galaxy/1214514159352.jpg"
                    alt="All-New Ford Galaxy in Ruby Red"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Ruby Red
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/noul_galaxy/1214514159020.jpg"
                    alt="All-New Ford Galaxy in Moondust Silver"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Moondust Silver
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/noul_galaxy/1214514159601.jpg"
                    alt="All-New Ford Galaxy in Panther Black"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Panther Black
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_galaxy/1214514163864.jpg"
                    alt="All-New Ford Galaxy in Frozen White"/><span class="fv-overlay-icon"></span>
            <h3 class="bigHeading02">
            </h3>

            <p>
                Frozen White
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/noul_galaxy/1214514163698.jpg"
                    alt="All-New Ford Galaxy in Blazer Blue"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Blazer Blue
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Tapiterie :: btfTabContent : 1205094892670 :: tabContent :  -->
<div id='tab5' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            ALEGE DIN GAMA LARGA DE TAPITERII
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">
            Indiferent de alegerea pe care o faci, materialele de calitate si atentia la detalii, sunt implicite.
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_galaxy/1214514160210.jpg"
                    alt="Salerno Leather in Ebony trim"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Tapiterie din piele Salerno, in culoarea Ebony
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/noul_galaxy/1214514160906.jpg"
                    alt="Manhattan in Ebony trim"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Tapiterie Manhattan in culoarea Ebony
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/noul_galaxy/1214514160123.jpg"
                    alt="Calder in Ebony trim"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Tapiterie Calder in culoarea Ebony
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
           <img
                    src="/assets/img/noul_galaxy/1214514161655.jpg"
                    alt="Miko Suede Perf in Ebony Trim"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Tapiterie Miko Suede Perf in culoarea Ebony
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/noul_galaxy/1214514162070.jpg"
                    alt="Salerno Micro Perf Leather in Medium Soft Ceramic trim"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Tapiterie din piele Salerno Micro Perf in culoarea Medium Soft Ceramic
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/noul_galaxy/1214514161073.jpg"
                    alt="Salerno Leather in Medium Soft Ceramic trim"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Tapiterie din piele Salerno in culoarea Medium Soft Ceramic
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_galaxy/1214514159775.jpg"
                    alt="Axis in Medium Soft Ceramic trim"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Tapiterie Axis in culoarea Medium Soft Ceramic
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/noul_galaxy/1214514159862.jpg"
                    alt="Axis in Ebony trim"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Tapiterie Axis in culoarea Ebony
            </p>
        </div>
    </article>
</div>
</div>
</div>
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205094889909&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205094896960&amp;tabName=Caracteristici&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="Caracteristici#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205094889909&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205094896960&amp;tabName=Caracteristici&amp;c=Page&amp;site=RORO4_ENGINE">Caracteristici</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205094895521 -->
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

