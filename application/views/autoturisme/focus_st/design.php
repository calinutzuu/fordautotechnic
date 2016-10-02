
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
            <li data-selenium="breadcrumb_nameplate">Focus ST</li>
        </ul>
    </nav>
    <script>
        var vehicleimagepackpresid = '1205035165459';
        var vehicleimagepackyear = 'NONE';
    </script>
    <div class="fblike-locale">en_RO</div>
    <script>
        var googleAdServerNameplateId = 'AUTHORED';
        var googleAdServerNameplateName = 'Focus ST';
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
            ]}}, "brand": "Ford", "vehicleType": "PV", "catalogId": "NONE", "nameplate": "Focus ST", "labelAvailableFrom": "&nbsp;", "formattedCurrency": "", "nameplateText": "Experienta Focus\u2026 imbunatatita.", "imagePack": false, "hideVehicleImage": false, "facebookImagePath": "", "facebookAppId": "facebookAppId", "images": [], "billBoardImagePath": null, "backgroundImagePath": ["/assets/img/focus_st/1214556045381.jpg", "null", "null"], "disclaimerTextColor": ["364957", null, null], "current": true, "cid": "1205116173898", "cta": [
                {"linkTitle": "DESCARC\u0102 BRO\u015EUR\u0102 ", "linkURL": "\/SBE\/BrosuriSiPreturi", "linkType": "primary", "linkTarget": "_blank", "omid": "va"},
                {"linkTitle": "\u00CENSCRIE-TE LA TEST DRIVE ", "linkURL": "\/SBE\/TestDrive\/TestDriveAutoturisme?shopcode=AUTHORED&derivcode=AUTHORED", "linkType": "tertiary", "linkTarget": "_blank", "omid": "tr"},
                {"linkTitle": "VREAU SĂ FIU INFORMAT(Ă) ", "linkURL": "/SBE/VreauSaFiuInformata", "linkType": "tertiary", "linkTarget": "", "omid": "tr"}
            ], "social": {"facebook": "https://facebook.com", "facebookPage": "fordromania"}, "disclaimer": "Modelul prezentat este un Focus ST", "seriesCode": "AUTHORED", "uscCode": "AUTHORED", "presId": "1205035165459", "promos": [], "idf": {"options": []}}
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
                    style="background-image:url(../../cs/BlobServer2388?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpg&amp;blobwhere=1214556045381&amp;blobkey=id)">
                    <div class="layered-nameplate-image">
                        <div class="image-holder">
                        </div>
                    </div>
                    <aside class="nameplate-disclaimer style=color:#364957">
                        Modelul prezentat este un Focus ST
                    </aside>
                </li>
            </ul>
            <div itemscope itemtype="http://schema.org/Product" id="nameplateDetails" class="nameplate-vehicle">
                <!--the text description-->
                <div class="name-plate-text">
                    <p class="intro"></p>

                    <h1 class="bigHeading">
                        <span data-selenium="XA_namePlate" itemprop="member" class="nameplate boldTxt">Focus ST</span>
                        <span data-selenium="XA_model" itemprop="model" itemscope
                              itemtype="http://schema.org/Organization" class="mark">Ford</span>
                        <!--The price -->
                    </h1>
                    <!--The blurb -->
                    <p class="blurb">
                        Experienta Focus&hellip; imbunatatita.
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
<!--  tabUrl /cs/ContentServer?cid=1205116173898&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="/Autoturisme/NewFocusST" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205116173898&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE">Prezentare</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205116173018 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205116173898&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205116179846&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE -->
<!-- IntoID ::: articleAssetId -->
<li class="selected"><a href="Design#primaryTabs"
                        data-ajaxlink="/cs/ContentServer?cid=1205116173898&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205116179846&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE">Design</a>
<!--This is where the main content for the selected tab will go -->
<!-- secondary tabs -->
<div class="secondary-tabs tab-content">
<nav class="sub-nav">
    <ul>
        <li><a href='#tab1' class='omt_tabName'>EXTERIOR</a></li>
        <li><a href='#tab2' class='omt_tabName'>INTERIOR</a></li>
        <li><a href='#tab3' class='omt_tabName'>JANTE</a></li>
        <li><a href='#tab4' class='omt_tabName'>CULORI</a></li>
        <li><a href='#tab5' class='omt_tabName'>FINISAJE</a></li>
    </ul>
</nav>
<!-- isBtfTab : from MidPageTabs true -->
<div class="innertab-wrapper">
<!--  tabTitle : EXTERIOR :: btfTabContent : 1205116178341 :: tabContent :  -->
<div id='tab1' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            DESIGN CARE AMPLIFICA PERFORMANTA
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Profilul lat si aerodinamic al noului Focus ST, impreuna cu stilul sau indraznet, exprima in mod clar
            intentiile acestui model. Caracteristicile precum capota sculptata dinamic, farurile inguste si teava de
            esapament dubla, hexagonala, pozitionata central, creeaza un aspect de neconfundat. Designul inteligent,
            influentat de masinile de curse sporeste, de asemenea, performanta, aerodinamica, forta de apasare si
            aderenta masinii.</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
           <img
                    src="/assets/img/focus_st/1214556053163.jpg"
                    alt="Ford Focus ST Exterior"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Focus ST exterior in culoarea Tangerine Scream</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/focus_st/1214556051465.jpg"
                    alt="Ford Focus ST Exterior"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Focus ST diesel</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/focus_st/1214556052993.jpg"
                    alt="Ford Focus ST Exterior"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Focus ST diesel si benzina</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/focus_st/1214556051717.jpg"
                    alt="Ford Focus ST Exterior"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Focus ST exterior in culoarea Tangerine Scream</p>
            </p>
        </div>
        <div class="content-block">
           <img
                    src="/assets/img/focus_st/1214556053078.jpg"
                    alt="In Frozen White"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Focus ST exterior in culoarea Frozen White</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/focus_st/1214556052657.jpg"
                    alt="Wagon in Stealth Grey"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Focus ST wagon, exterior in culoarea Stealth</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
           <img
                    src="/assets/img/focus_st/1214556053843.jpg"
                    alt=" "/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Focus ST in culoarea Race Red</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/focus_st/1214556053248.jpg"
                    alt=" "/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Focus ST exterior in culoarea Tangerine Scream
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/focus_st/1214556052741.jpg"
                    alt=" "/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Focus ST exterior in culoarea Tangerine Scream</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : INTERIOR :: btfTabContent : 1205116173847 :: tabContent :  -->
<div id='tab2' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            TOATE TEHNOLOGIILE LA COMANDA TA
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Intra in cabina si, in timp ce te asezi confortabil in scaunul sport Recaro cu design ergonomic (cu suporturi
            laterale optionale) si puni mainile pe volanul cu baza plata, te vei simti imediat conectat. <br>
            <br>
            O dispunere inteligenta a lucrurilor iti pune la indemana comenzile si caracteristicile principale, in mod
            intuitiv. Iar pedalele special proiectate fac ca puterea exceptionala a noului ST sa iti stea efectiv la
            picioare. <br>
            <br>
            Un grup suplimentar de trei indicatoare de bord &ndash; o marca ST &ndash; este plasat pe consola de bord si
            afiseaza informatii despre presiunea turbocompresorului, temperatura si presiunea uleiului.</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/focus_st/1214556052909.jpg"
                    alt="Ford Focus ST Interior"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Focus ST Habitaclu</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/focus_st/1214556053503.jpg"
                    alt="Ford Focus ST Interior"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Focus ST Volan si consola centrala</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/focus_st/1214556052305.jpg"
                    alt="Ford Focus ST Interior"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Focus ST Pedale</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : JANTE :: btfTabContent : 1205116169021 :: tabContent :  -->
<div id='tab3' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            JANTE CU DESIGN IMPRESIONANT, INSPIRAT DIN MOTORSPORT
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Creaza o imagine care sa se potriveasca stilului personal, alegand dintr-o gama larga de jante special
            proiectate, inclusiv noile jante din aliaj, de 19 inci, cu design ST.</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/focus_st/1214556054013.jpg"
                    alt="Ford Focus ST Wheels"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Janta aliaj 18"
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/focus_st/1214556053928.jpg"
                    alt="Ford Focus ST Wheels"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Janta aliaj 18", Rock Metallic
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/focus_st/1214556052389.jpg"
                    alt="Ford Focus ST Wheels"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Janta aliaj 18", Panther Black
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/focus_st/1214556052137.jpg"
                    alt=" "/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Janta aliaj 19", Silver
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/focus_st/1214556053588.jpg"
                    alt=" "/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Janta aliaj 19", Panther Black
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : CULORI :: btfTabContent : 1205116172775 :: tabContent :  -->
<div id='tab4' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            O PREZENTA PLINA DE CULOARE
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Noul Focus este disponibil intr-o varietate de sapte culori deosebite. Stealth Grey este o culoare exclusiva
            pentru noul Focus ST, iar Deep Impact Blue este o noua aparitie in aceasta serie.</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/focus_st/1214556052825.jpg"
                    alt="Ford Focus ST Deep Impact Blue"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Deep Impact Blue
            </p>
        </div>
        <div class="content-block">
           <img
                    src="/assets/img/focus_st/1214556053673.jpg"
                    alt="Ford Focus ST Frozen White"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Frozen White
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/focus_st/1214556052053.jpg"
                    alt="Ford Focus ST Moonlight Silver"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Moondust Silver
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/focus_st/1214556053418.jpg"
                    alt="Ford Focus ST Panther Black"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Panther Black
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/focus_st/1214556053333.jpg"
                    alt="Ford Focus ST Race Red"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Race Red
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/focus_st/1214556051885.jpg"
                    alt="Ford Focus ST Stealth"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Stealth
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/focus_st/1214556051633.jpg"
                    alt="Ford Focus ST Tangerine Scream"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Tangerine Scream
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : FINISAJE :: btfTabContent : 1205116169209 :: tabContent :  -->
<div id='tab5' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            IMAGINEA DEVINE COMPLETA, CU TAPITERIA ALEASA DE TINE
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Indiferent de optiunea de tapiterie aleasa, materialele de calitate superioara si atentia deosebita la
            detalii reprezinta o garantie.</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/focus_st/1214556052573.jpg"
                    alt="Ford Focus ST Interior Trim"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Charcoal Black / Race Red
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/focus_st/1214556053758.jpg"
                    alt="Ford Focus ST Interior Trim"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Charcoal Black / Anthracite
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/focus_st/1214556051549.jpg"
                    alt="Ford Focus ST Interior Trim"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Charcoal Black / Tangerine Scream
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/focus_st/1214556051801.jpg"
                    alt="Ford Focus ST Interior Trim"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Charcoal Black / Spirit Blue
            </p>
        </div>
        <div class="content-block">
           <img
                    src="/assets/img/focus_st/1214556051969.jpg"
                    alt="Ford Focus ST Interior Trim"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Charcoal Black / Smoke Storm
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/focus_st/1214556052221.jpg"
                    alt=" "/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Piele Windsor in culoarea Charcoal Black
            </p>
        </div>
    </article>
</div>
</div>
</div>
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205116173898&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205116170016&amp;tabName=Caracteristici&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="Caracteristici#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205116173898&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205116170016&amp;tabName=Caracteristici&amp;c=Page&amp;site=RORO4_ENGINE">Caracteristici</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205116169225 -->
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
