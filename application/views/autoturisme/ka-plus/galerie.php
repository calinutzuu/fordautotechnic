<script type="text/javascript">
    // mobile sniffer
    ForceRedirectUserAgents = 'android,iphone,blackberry';
    ForceRedirectUserAgentsBypass = 'Win64,Win32';
    ForceRedirectMinWidth = '480';
    MobileHomePageRedirectURL = 'Galerie\/\/m.ford.ro';
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
        var vehicleimagepackpresid = '1205115909798';
        var vehicleimagepackyear = 'NONE';
    </script>
    <div class="fblike-locale">ro_RO</div>
    <script>
        var googleAdServerNameplateId = 'AUTHORED';
        var googleAdServerNameplateName = 'Ka+';
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
            ]}}, "brand": "Ford", "vehicleType": "PV", "catalogId": "NONE", "nameplate": "Ka+", "labelAvailableFrom": "&nbsp;", "formattedCurrency": "", "nameplateText": "Original, prietenos si cu o manevrabilitate fantastica, Ka+ stabileste standardele pentru masinile mici.", "imagePack": false, "hideVehicleImage": false, "facebookImagePath": "", "facebookAppId": "facebookAppId", "images": [], "billBoardImagePath": null, "backgroundImagePath": ["/assets/img/ka-plus/1214559171550.jpg", "null", "null"], "disclaimerTextColor": ["364957", null, null], "current": true, "cid": "1205115904958", "cta": [
                {"linkTitle": "VREAU SA FIU INFORMAT", "linkURL": "/SBE/VreauSaFiuInformata", "linkType": "primary", "linkTarget": "", "omid": "va"}
            ], "social": {"facebook": "https://facebook.com", "facebookPage": "fordromania"}, "disclaimer": "Modelul prezentat este un Ka+ {1}. Imagine cu titlul de prezentare.", "seriesCode": "AUTHORED", "uscCode": "AUTHORED", "presId": "1205115909798", "promos": [], "idf": {"options": []}}
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
                    style="background-image:url(/assets/img/ka-plus/1214559171550.jpg)">
                    <div class="layered-nameplate-image">
                        <div class="image-holder">
                        </div>
                    </div>
                    <aside class="nameplate-disclaimer style=color:#364957">
                        Modelul prezentat este un Ka+ {1}. Imagine cu titlul de prezentare.
                    </aside>
                </li>
            </ul>
            <div itemscope itemtype="http://schema.org/Product" id="nameplateDetails" class="nameplate-vehicle">
                <!--the text description-->
                <div class="name-plate-text">
                    <p class="intro"></p>

                    <h1 class="bigHeading">
                        <span data-selenium="XA_namePlate" itemprop="member" class="nameplate boldTxt">Ka+</span>
                        <span data-selenium="XA_model" itemprop="model" itemscope
                              itemtype="http://schema.org/Organization" class="mark">Ford</span>
                        <!--The price -->
                    </h1>
                    <!--The blurb -->
                    <p class="blurb">
                        Original, prietenos si cu o manevrabilitate fantastica, Ka+ stabileste standardele pentru
                        masinile mici.
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
<!--  tabUrl /cs/ContentServer?cid=1205115904958&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="/Autoturisme/ka-plus/Prezentare#primaryTabs">Prezentare generala</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205115906327 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205115904958&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205115907279&amp;tabName=Galerie&amp;c=Page&amp;site=RORO4_ENGINE -->
<!-- IntoID ::: articleAssetId -->
<li class="selected"><a href="Galerie#primaryTabs">Galerie</a>
<!--This is where the main content for the selected tab will go -->
<!-- secondary tabs -->
<div class="secondary-tabs tab-content">
<nav class="sub-nav">
    <ul>
        <li><a href='#tab1' class='omt_tabName'>Exterior</a></li>
        <li><a href='#tab2' class='omt_tabName'>Interior</a></li>
        <li><a href='#tab3' class='omt_tabName'>Jante</a></li>
        <li><a href='#tab4' class='omt_tabName'>Culori</a></li>
    </ul>
</nav>
<!-- isBtfTab : from MidPageTabs true -->
<div class="innertab-wrapper">
<!--  tabTitle : Exterior :: btfTabContent : 1205115906864 :: tabContent :  -->
<div id='tab1' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            PRACTIC SI ELEGANT
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Exteriorul compact al noului KA+ exprima personalitatea masinii, combinand utilitatea celor cinci usi cu note
            de design, precum grila Ford distinctiva si farurile expresive.</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/ka-plus/1214559182320.jpg" alt="Atragator, si in miscare si cand e parcat"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Atragator, si in miscare si cand e parcat</p>
            </p>
        </div>
        <div class="content-block">
           <img
                    src="/assets/img/ka-plus/1214559182146.jpg" alt="Design modern, cu detalii de efect"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Design modern, cu detalii de efect</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/ka-plus/1214559182583.jpg" alt="Profil agil si aerodinamic"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Profil agil si aerodinamic</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/ka-plus/1214559182494.jpg" alt="Design de impact pentru jantele de aliaj"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Design de impact pentru jantele de aliaj</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/ka-plus/1214559182231.jpg" alt="Linii stilate si fluide, din orice unghi"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Linii stilate si fluide, din orice unghi</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/ka-plus/1214559182406.jpg" alt="Grila indrazneata, distinctiva"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Grila indrazneata, distinctiva</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Interior :: btfTabContent : 1205115906708 :: tabContent :  -->
<div id='tab2' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            MODERN, SPATIOS SI PRACTIC
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Dispunand de un spatiu interior generos, in Noul KA+ pot incapea in mod confortabil cinci persoane. Spatiul
            de deasupra capului si cel din zona picioarelor pentru pasagerii din spate permit pasagerilor mai inalti sa
            stea comod. In portbagaj vei gasi, de asemenea, un spatiu de depozitare util.</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/ka-plus/1214559176636.jpg" alt="Detalii atent lucrate"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Detalii atent lucrate</p>
            </p>
        </div>
        <div class="content-block">
           <img
                    src="/assets/img/ka-plus/1214559176889.jpg" alt="Interior spatios si aerisit"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Interior spatios si aerisit</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/ka-plus/1214559177477.jpg" alt="Conectivitate hands-free"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Conectivitate hands-free</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/ka-plus/1214559177644.jpg"
                    alt="Suficient spatiu pentru trei pasageri pe locurile din spate"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Suficient spatiu pentru trei pasageri pe locurile din spate</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/ka-plus/1214559177141.jpg" alt="Simplu - dar in acelasi timp sofisticat"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Simplu - dar in acelasi timp sofisticat</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/ka-plus/1214559177057.jpg" alt="Habitaclu proiectat pentru tine"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Habitaclu proiectat pentru tine</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Jante :: btfTabContent : 1205115900538 :: tabContent :  -->
<div id='tab3' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            ADAUGA O NOTA PROPRIE
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Ambele versiuni KA+, si cel de 70 CP, si cel de 85 CP, sunt echipate cu jante din otel elegante, cu optiune
            jante aliaj disponibila pentru modelul cu 85 CP.</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/ka-plus/1214559182062.jpg" alt="Janta din aliaj de 15", 5x2 spite" /><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Janta din aliaj de 15", 5x2 spite</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/ka-plus/1214559181879.jpg" alt="Capac roata de 15"" /><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Capac roata de 15"</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Culori :: btfTabContent : 1205115905107 :: tabContent :  -->
<div id='tab4' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            INSENINEAZA-TI ZIUA. LUMINEAZA-TI NOUL KA+
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>KA+ este disponibil in opt culori diferite, inclusiv trei culori metalice si trei speciale, perlate.</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/ka-plus/1214559176553.jpg" alt="Oxford White"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Oxford White</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/ka-plus/1214559177309.jpg" alt="Tuxedo Black (Perlata)"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Tuxedo Black (Perlata)</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/ka-plus/1214559176470.jpg" alt="Smoke Grey (Metalizata)"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Smoke Grey (Metalizata)</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/ka-plus/1214559176719.jpg" alt="Sparkling Gold (Perlata)"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Sparkling Gold (Perlata)</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/ka-plus/1214559177393.jpg" alt="Ingot Silver (Metalizata)"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Ingot Silver (Metalizata)</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/ka-plus/1214559176973.jpg" alt="Ruby Red (Perlata)"/><span
                    class="fv-overlay-icon"></span>
            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Ruby Red (Perlata)</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/ka-plus/1214559177560.jpg" alt="Bright Yellow"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Bright Yellow</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/ka-plus/1214559176803.jpg" alt="Deep Impact Blue (Metalizata)"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Deep Impact Blue (Metalizata)</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
<!-- BEGIN [MidPageTabs] -->
<!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Exterior</a></h2> -->
<!--</div>-->
<!--<div id='tab2' class="mp-tab-wrapper">
<h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">Interior</a></h2> -->
<!--</div>-->
<!--<div id='tab3' class="mp-tab-wrapper">
<h2><a href='#tab3' class="mp-tab omt_xd_mt_ti">Jante</a></h2> -->
<!--</div>-->
<!--<div id='tab4' class="mp-tab-wrapper">
<h2><a href='#tab4' class="mp-tab omt_xd_mt_ti">Culori</a></h2> -->
<!--</div>-->
<!-- END [MidPageTabs] -->
</div>
</div>
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205115904958&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205115903517&amp;tabName=Dotari&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="/Autoturisme/ka-plus/Dotari#primaryTabs">Dotari</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205115902468 -->
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
