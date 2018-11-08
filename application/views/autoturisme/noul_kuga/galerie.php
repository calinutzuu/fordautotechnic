
<script type="text/javascript">
    // mobile sniffer
    ForceRedirectUserAgents = 'android,iphone,blackberry';
    ForceRedirectUserAgentsBypass = 'Win64,Win32';
    ForceRedirectMinWidth = '480';
    MobileHomePageRedirectURL = 'galerie\/\/m.ford.ro';
    MobileRedirectURL = MobileHomePageRedirectURL + '/autoturisme/Noul-Kuga';
</script>
<div id="xAxis-detailed">
    <nav class="breadCrumb visuallyhidden" role="navigation">
        <ul itemprop="breadcrumb">
            <li class="home"><a href="http://www.ford.ro/" data-selenium="breadcrumb_home" class="om_bc_li"
                                title="Pagina principal&#259;">Pagina principal&#259;</a><span></span></li>
            <li data-selenium="breadcrumb_cars"><a href="http://www.ford.ro/Autoturisme" class="om_bc_li">
                    Autoturisme
                </a><span></span></li>
            <li data-selenium="breadcrumb_nameplate">Kuga</li>
        </ul>
    </nav>
    <script>
        var vehicleimagepackpresid = '1205119897468';
        var vehicleimagepackyear = 'NONE';
    </script>
    <div class="fblike-locale">en_RO</div>
    <script>
        var googleAdServerNameplateId = 'AUTHORED';
        var googleAdServerNameplateName = 'Kuga';
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
            ]}}, "brand": "Ford", "vehicleType": "PV", "catalogId": "NONE", "nameplate": "Kuga", "labelAvailableFrom": "&nbsp;", "formattedCurrency": "", "nameplateText": "\u00CE\u021Bi prezent\u0103m cu m\u00E2ndrie noul Ford Kuga, cel mai inteligent SUV al nostru.", "imagePack": false, "hideVehicleImage": false, "facebookImagePath": "", "facebookAppId": "facebookAppId", "images": [], "billBoardImagePath": null, "backgroundImagePath": ["/assets/img/kuga/1214576538741.jpg", "null", "null"], "disclaimerTextColor": [null, null, null], "current": true, "cid": "1205129234448", "cta": [
                {"linkTitle": "DESCARC\u0102 BRO\u015EUR\u0102 ", "linkURL": "\/SBE\/BrosuriSiPreturi", "linkType": "primary", "linkTarget": "_blank", "omid": "va"},
                {"linkTitle": "\u00CENSCRIE-TE LA TEST DRIVE ", "linkURL": "\/SBE\/TestDrive\/TestDriveAutoturisme?shopcode=AUTHORED&derivcode=AUTHORED", "linkType": "tertiary", "linkTarget": "_blank", "omid": "tr"},
                {"linkTitle": "Descopera Ford Vignale", "linkURL": "http://vignale.ford.ro/ro-RO/kuga/", "linkType": "tertiary", "linkTarget": "_blank", "omid": "tr"}
            ], "social": {"facebook": "https://facebook.com", "facebookPage": "fordromania"}, "disclaimer": "MODELUL PREZENTAT ESTE UN KUGA TITANIUM. IMAGINE CU TITLUL DE PREZENTARE.", "seriesCode": "AUTHORED", "uscCode": "AUTHORED", "presId": "1205119897468", "promos": [], "idf": {"options": []}}
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
                    style="background-image:url(http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpg&amp;blobwhere=1214576538741&amp;blobkey=id)">
                    <div class="layered-nameplate-image">
                        <div class="image-holder">
                        </div>
                    </div>
                    <aside class="nameplate-disclaimer ">
                        MODELUL PREZENTAT ESTE UN KUGA TITANIUM. IMAGINE CU TITLUL DE PREZENTARE.
                    </aside>
                </li>
            </ul>
            <div itemscope itemtype="http://schema.org/Product" id="nameplateDetails" class="nameplate-vehicle">
                <!--the text description-->
                <div class="name-plate-text">
                    <p class="intro"> NOUL</p>

                    <h1 class="bigHeading">
                        <span data-selenium="XA_namePlate" itemprop="member" class="nameplate boldTxt">Kuga</span>
                        <span data-selenium="XA_model" itemprop="model" itemscope
                              itemtype="http://schema.org/Organization" class="mark">Ford</span>
                        <!--The price -->
                    </h1>
                    <!--The blurb -->
                    <p class="blurb">
                        Îți prezentăm cu mândrie noul Ford Kuga, cel mai inteligent SUV al nostru.
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
<!-- Addthis Replacement : End -->
<section id="primary-tab-content" class="nameplate-tab-content" data-dynamic-tabcontent="true"
         data-siteterm-backtotop="Back To Top !!!">
<div class="tab-wrapper">
<nav class="tabs" id="primaryTabs">
<ul>
<!--  isBtfTab true -->
<!--  tabUrl /cs/ContentServer?cid=1205129234448&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="/Autoturisme/Noul_Kuga" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205129234448&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE">Prezentare
        Generala</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205127844706 -->
</li>
<li><a href="/Autoturisme/Noul_Kuga/PreturisiPromotii#primaryTabs" class=" "  data-ajaxlink="/cs/ContentServer?cid=1205129234448&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205132037865&amp;tabName=PreturisiPromotii&amp;c=Page&amp;site=RORO4_ENGINE">PRETURI SI PROMOTII</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205132036316 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205129234448&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205127835799&amp;tabName=galerie&amp;c=Page&amp;site=RORO4_ENGINE -->
<!-- IntoID ::: articleAssetId -->
<li class="selected"><a href="galerie#primaryTabs"
                        data-ajaxlink="/cs/ContentServer?cid=1205129234448&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205127835799&amp;tabName=galerie&amp;c=Page&amp;site=RORO4_ENGINE">Design</a>
<!--This is where the main content for the selected tab will go -->
<!-- secondary tabs -->
<div class="secondary-tabs tab-content">
<nav class="sub-nav">
    <ul>
        <li><a href='#tab1' class='omt_tabName'>Exterior</a></li>
        <li><a href='#tab2' class='omt_tabName'>Interior</a></li>
        <li><a href='#tab3' class='omt_tabName'>Jante</a></li>
        <li><a href='#tab4' class='omt_tabName'>Culori</a></li>
        <li><a href='#tab5' class='omt_tabName'>Ornamente</a></li>
    </ul>
</nav>
<!-- isBtfTab : from MidPageTabs true -->
<div class="innertab-wrapper">
<!--  tabTitle : Exterior :: btfTabContent : 1205127835784 :: tabContent :  -->
<div id='tab1' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
           Exterior
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">


    </header>
    <!-- <header class="intro-header">
         <h1 class="bigHeading">
         </h1>
         <span class="highlighter"></span>

            <p class="intro-text">

           <p></p>
           <center>
              <iframe height="480" frameborder="0" width="853" allowfullscreen=""
                       src="https://www.youtube.com/embed/P9JmXOCT-y4?rel=0&amp;showinfo=0"></iframe>
         </center>
         <p></p>
         </p>
    </header>-->
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576851880.jpg"
                    alt="grey Ford Kuga side angle in front of a building"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Design distins, atractiv intr-un mod remarcabil. </p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576859043.jpg"
                    alt="frozen white Ford Kuga front angle, parking in front of a building"/><span
                    class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Sisteme de tractiune care te ajuta atunci cand te afli la drum. </p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/kuga/1214576854748.jpg"
                    alt="red Ford Kuga front view in the sunset"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Solid, dar sofisticat. Capabil, dar confortabil. </p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576854406.jpg"
                    alt="red Ford Kuga front view on the road"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>O imagine greu de uitat.</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576851293.jpg"
                    alt="grey Ford Kuga side view, parking on the street"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Stil indraznet si sigur pe sine.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/kuga/1214576859219.jpg"
                    alt="grey Ford Kuga rear view in the sunset"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Privelisti uimitoare de jur imprejur.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576857674.jpg"
                    alt="grey Ford Kuga exterior, rear view, on the road"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Aerodinamica nu a aratat niciodata asa de bine.</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576856061.jpg"
                    alt="Ford Kuga side angle, on the road in the sunset"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Relaxeaza-te si bucura-te de calatorie.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/kuga/1214576853238.jpg"
                    alt="grey Ford Kuga parking near a fountain"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>O prezenta impozanta.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576851044.jpg"
                    alt="grey Ford Kuga side view, parking near a park and a river"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Arata bine pe orice teren.</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576852046.jpg"
                    alt="grey Ford Kuga side view, parking in front of offices"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Puternic, sportiv, impunator.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/kuga/1214576858592.jpg"
                    alt="grey Ford Kuga wheel"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Detalii bine gandite si practice.</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Interior :: btfTabContent : 1205127842256 :: tabContent :  -->
<div id='tab2' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            ELEGANT SI EXECUTAT CU MAIESTRIE
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Sofisticat si rafinat, habitaclul noului Kuga este un spatiu frumos aranjat: un spatiu in care tu si
            pasagerii tai veti petrece timp cu placere.</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576856919.jpg"
                    alt="Ford Kuga interior, steering wheel, front seats, automatic gearbox, dashboard and centre console with SYNC 3"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Un spatiu in care vei dori sa petreci timp. </p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576850124.jpg"
                    alt="Ford Kuga interior, front seats, wteering wheel, centre console with SYNC 3"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Scaune fata de calitate superioara, cu tapiterie din piele.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/kuga/1214576859307.jpg"
                    alt="Ford Kuga spacious interior, front seats"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Suprafete placute la atingere si detalii inteligente.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576854914.jpg"
                    alt="Ford Kuga interior, front seats and panoramic roof"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Lasa sa patrunda lumina naturala prin plafonul panoramic.</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576852813.jpg"
                    alt="Ford Kuga interior, stowage area, boot space, cupholder and electronic parking brake"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>O frana de parcare electronica inteligenta.</p>
            </p>
        </div>
        <div class="content-block last">
           <img
                    src="/assets/img/kuga/1214576858338.jpg"
                    alt="Ford Kuga interior, Easy-fold rear seats"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Capacitate de pana la 1.603 litri.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576857168.jpg"
                    alt="Ford Kuga spacious interior, front seats, steering wheel, centre console"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Loc din belsug. Spatiu de care sa te bucuri.</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576858172.jpg"
                    alt="Ford Kuga interior with blue ambient lighting, front seats, steering wheel and center console with SYNC 3"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Fiecare comanda se afla la indemana, in mod intuitiv.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/kuga/1214576854494.jpg"
                    alt="Ford Kuga interior, steering wheel, front seats and centre console with SYNC 3"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>SYNC 3 cu ecran tactil de 8&rdquo;.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576852129.jpg"
                    alt="Ford Kuga interior, rear seats"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Spatiu din belsug pentru pasagerii din spate.</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576854582.jpg"
                    alt="Ford Kuga interior, dashoard"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Instrumente de bord clare, ultramoderne.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/kuga/1214576853653.jpg"
                    alt="Ford Kuga interior, steering wheel, front seats, automatic gearbox, centre console with SYNC 3"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Dispunere curata, neingramadita a cabinei.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576849791.jpg"
                    alt="Ford Kuga interior, front seat, steering wheel and dashboard"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Treci la volan si preia controlul.</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576856404.jpg"
                    alt="Ford Kuga interior, trim detail"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Executie de exceptie, detalii elegante.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/kuga/1214576858504.jpg"
                    alt="Ford Kuga interior, heated steering wheel and dashboard"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Volan incalzit pentru un plus de confort.</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Jante :: btfTabContent : 1205127847331 :: tabContent :  -->
<div id='tab3' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            JANTE CARE SPORESC<br><br>ASPECTUL SPORTIV SI FUNCTIONAL
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>O gama larga de optiuni de jante uimitoare a&nbsp;fost proiectata pentru condus confortabil, performanta
            sportiva si aspect puternic.
        </p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576856836.jpg"
                    alt="Ford Kuga wheel, 16” 5-spoke Hub Cap  (D2YCA)"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>16”, cu 5 spite si capac de roata<br>
                (D2YCA)</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576850878.jpg"
                    alt="Ford Kuga wheel, 17” 5x2-spoke Sparkle Silver alloy (D2YDN)"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>17”, cu 5x2 spite, din aliaj Sparkle Silver<br>
                (D2YDN)</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/kuga/1214576851708.jpg"
                    alt="Ford Kuga wheel, 17” 5x2-spoke Sparkle Silver alloy (D2YDP)"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>17”, cu 5x2 spite, din aliaj Sparkle Silver<br>
                (D2YDP)</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576851127.jpg"
                    alt="Ford Kuga wheel, 18” 5-spoke Sparkle Silver Machined alloy (D2UEK)"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>18”, cu 5 spite, din aliaj prelucrat Sparkle Silver<br>
                (D2UEK)</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576852989.jpg"
                    alt="Ford Kuga wheel, 18" 5x2-spoke Absolute Black Machined alloy wheel (D2UDW)" /><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>18", cu 5x2 spite, din aliaj prelucrat Absolute Black<br>
                (D2UDW)</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/kuga/1214576850291.jpg"
                    alt="Ford Kuga wheel, 19" 5 Y-spoke Lustre Nickel alloy wheel (D2VBT)" /><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>19", cu 5 spite in Y, din aliaj Lustre Nickel<br>
                (D2VBT)</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576854831.jpg"
                    alt="Ford Kuga wheel, 19" 5x2-spoke Absolute Black Machined alloy wheel (D2VBE)" /><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>19", cu 5x2 spite, din aliaj prelucrat Absolute Black<br>
                (D2VBE)</p>
            </p>
        </div>
        <div class="content-block">
           <img
                    src="/assets/img/kuga/1214576857334.jpg"
                    alt="Ford Kuga wheel, 19" 5x2-spoke Absolute Black alloy wheel (D2VL4)" /><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>19", cu 5x2 spite, din aliaj Absolute Black<br>
                (D2VL4)</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Culori :: btfTabContent : 1205127846563 :: tabContent :  -->
<div id='tab4' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            CU CE CULOARE<br><br>ITI STA MAI BINE?
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Alege dintr-o gama variata de culori, fiecare conceputa pentru a&nbsp;se potrivi imaginii si preferintelor
            tale</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576857840.jpg"
                    alt="Ford Kuga in Magnetic colour"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Magnetic<br>
                (Metalizata)</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576857251.jpg"
                    alt="Ford Kuga in Guard Grey colour"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Guard Grey<br>
                (Metalizata)</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/kuga/1214576852725.jpg"
                    alt="Ford Kuga in White Platinum colour"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>White Platinum<br>
                (Metalizata)</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576851797.jpg"
                    alt="Ford Kuga in Deep Impact Blue colour"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Deep Impact Blue<br>
                (Metalizata)</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576849874.jpg"
                    alt="Ford Kuga in Moondust Silver colour"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Moondust Silver<br>
                (Metalizata)</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/kuga/1214576853487.jpg"
                    alt="Ford Kuga in Copper Pulse colour"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Copper Pulse<br>
                (Metalizata)</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576852212.jpg"
                    alt="Ford Kuga in Green Instinct colour"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Green Instinct<br>
                (Metalizata)</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576851542.jpg"
                    alt="Ford Kuga in Shadow Black colour"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Shadow Black<br>
                (Mica)</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/kuga/1214576856753.jpg"
                    alt="Ford Kuga in Race Red colour"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Race Red</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576853570.jpg"
                    alt="Ford Kuga in Frozen White colour"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Frozen White</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576858089.jpg"
                    alt="Ford Kuga in Blazer Blue colour"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Blazer Blue</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/kuga/1214576857002.jpg"
                    alt="Ford Kuga in Ruby Red colour"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Ruby Red<br>
                (Metalizata)</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Ornamente :: btfTabContent : 1205127846531 :: tabContent :  -->
<div id='tab5' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            ASORTATE CU ELEGANTA
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Culori complementare, materiale de calitate superioara, atentie deosebita la detalii: toate sunt
            standard,¨indiferent de optiunea selectata.
        </p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576855978.jpg"
                    alt="Ford Kuga interior trim, Boost and View Fabric in Chromite Grey & Charcoal Black"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Material textil Boost and View in culorile Chromite Grey si Charcoal Black</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576849957.jpg"
                    alt="Ford Kuga interior trim, Salerno Leather in Charcoal Black"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Piele Salerno de culoare Charcoal Black</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/kuga/1214576859131.jpg"
                    alt="Ford Kuga interior trim, Groove Fabric and Salerno Leather in Chromite Grey & Charcoal Black"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Material textil Groove si piele Salerno in culorile Chromite Grey si Charcoal Black</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576856670.jpg"
                    alt="Ford Kuga interior trim, Salerno Leather in Medium Light Stone"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Piele Salerno de culoare Medium Light Stone</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576850540.jpg"
                    alt="Ford Kuga interior trim, Rapton Suede and Salerno Leather in Ebony & Charcoal Black"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Piele intoarsa Rapton si piele Salerno in culorile Ebony si Charcoal Black</p>
            </p>
        </div>
    </article>
</div>
</div>
</div>
</li>

<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205129234448&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205127842606&amp;tabName=caracteristici&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="caracteristici#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205129234448&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205127842606&amp;tabName=caracteristici&amp;c=Page&amp;site=RORO4_ENGINE">Caracteristici</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205127839319 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205129234448&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205127835266&amp;tabName=st-line&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="st-line#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205129234448&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205127835266&amp;tabName=st-line&amp;c=Page&amp;site=RORO4_ENGINE">ST-Line</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205127844723 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205129234448&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205127836983&amp;tabName=kuga_vignale&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="kuga_vignale#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205129234448&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205127836983&amp;tabName=kuga_vignale&amp;c=Page&amp;site=RORO4_ENGINE">Kuga
        Vignale</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205127838922 -->
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
<script id="TagIT.load"></script>
</div>

