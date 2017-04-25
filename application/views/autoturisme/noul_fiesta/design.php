
<script type="text/javascript">
    // mobile sniffer
    ForceRedirectUserAgents = 'android,iphone,blackberry';
    ForceRedirectUserAgentsBypass = 'Win64,Win32';
    ForceRedirectMinWidth = '480';
    MobileHomePageRedirectURL = 'design.html\/\/m.ford.ro';
    MobileRedirectURL = MobileHomePageRedirectURL + '/autoturisme/noul-fiesta';
</script>
<div id="xAxis-detailed">
    <nav class="breadCrumb visuallyhidden" role="navigation">
        <ul itemprop="breadcrumb">
            <li class="home"><a href="http://www.ford.ro/" data-selenium="breadcrumb_home" class="om_bc_li"
                                title="Pagina principal&#259;">Pagina principal&#259;</a><span></span></li>
            <li data-selenium="breadcrumb_cars"><a href="http://www.ford.ro/Autoturisme" class="om_bc_li">
                    Autoturisme
                </a><span></span></li>
            <li data-selenium="breadcrumb_nameplate">Fiesta</li>
        </ul>
    </nav>
    <script>
        var vehicleimagepackpresid = '1205134986729';
        var vehicleimagepackyear = 'NONE';
    </script>
    <div class="fblike-locale">en_RO</div>
    <script>
        var googleAdServerNameplateId = 'AUTHORED';
        var googleAdServerNameplateName = 'Fiesta';
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
            ]}}, "brand": "Ford", "vehicleType": "PV", "catalogId": "NONE", "nameplate": "Fiesta", "labelAvailableFrom": "&nbsp;", "formattedCurrency": "", "nameplateText": '', "imagePack": false, "hideVehicleImage": false, "facebookImagePath": "", "facebookAppId": "facebookAppId", "images": [], "billBoardImagePath": null, "backgroundImagePath": ["/assets/img/1214606264060.jpg", "null", "null"], "disclaimerTextColor": ["364957", null, null], "current": true, "cid": "1205135250945", "cta": [
                {"linkTitle": "DESCARC\u0102 BRO\u015EUR\u0102 ", "linkURL": "\/SBE\/BrosuriSiPreturi", "linkType": "primary", "linkTarget": "_blank", "omid": "va"},
                {"linkTitle": "\u00CENSCRIE-TE LA TEST DRIVE ", "linkURL": "\/SBE\/TestDrive\/TestDriveAutoturisme?shopcode=AUTHORED&derivcode=AUTHORED", "linkType": "tertiary", "linkTarget": "_blank", "omid": "tr"}
            ], "social": {"facebook": "https://facebook.com", "facebookPage": "fordromania"}, "disclaimer": "MODELUL PREZENTAT ESTE NOUL FORD FIESTA (2017). IMAGINE CU TITLU DE PREZENTARE.", "seriesCode": "AUTHORED", "uscCode": "AUTHORED", "presId": "1205134986729", "promos": [], "idf": {"options": []}}
        ]} || {};
        var retrieveUserOptions = JSON.parse(localStorage.getItem('userSelection')) || {};
        //FranciB: injecting and changing user selected angle image trigger by mid page tabs and on page reload.
        //In order to stop the flickering between the default image and selected angle image in the centre stage.
        if (retrieveUserOptions.selectedImageAngle !== (null || "" || undefined)) {
            bootstrapVehicleData.vehicles[0].images = [retrieveUserOptions.selectedImageAngle];
        }
    </script>
    <section id="billboard" style="height:0;"></section>
    <section class="x-axis-wrapper" id="vvmWrapper">
        <div itemscope itemtype="http://schema.org/ImageObject">
            <ul class="nameplate x-axis" id="vvmRoot">
                <li class="default-nameplate-vehicle"
                    style="background-image:url(http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpg&amp;blobwhere=1214606264060&amp;blobkey=id)">
                    <div class="layered-nameplate-image">
                        <div class="image-holder">
                        </div>
                    </div>
                    <aside class="nameplate-disclaimer style=color:#364957">
                        MODELUL PREZENTAT ESTE NOUL FORD FIESTA (2017). IMAGINE CU TITLU DE PREZENTARE.
                    </aside>
                </li>
            </ul>
            <div itemscope itemtype="http://schema.org/Product" id="nameplateDetails" class="nameplate-vehicle">
                <!--the text description-->
                <div class="name-plate-text">
                    <p class="intro"> NOUL</p>

                    <h1 class="bigHeading">
                        <span data-selenium="XA_namePlate" itemprop="member" class="nameplate boldTxt">Fiesta</span>
                        <span data-selenium="XA_model" itemprop="model" itemscope
                              itemtype="http://schema.org/Organization" class="mark">Ford</span>
                        <!--The price -->
                    </h1>
                    <!--The blurb -->
                    <p class="blurb">
                    </p>
                </div>
            </div>
        </div>
        <nav class="vehicle-tools" id="vehicleTools"></nav>
        <aside class="vehicle-links box-shadow" id="ctaDetails"></aside>
        <div id="intImageCarousel" class="interior-image-carousel">
            <div class="slide-wrapper">
                <article class="slide"></article>
            </div>
        </div>
    </section>
    <!-- bill board -->
    <script type="text/x-handlebars-template" id="billboardTemplate">
        {{#each vehicles}}
        {{#if current}}
        <div style="background:url({{billBoardImagePath}}) no-repeat;"></div>
        {{/if}}
        {{/each}}
    </script>
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
<!--  tabUrl /cs/ContentServer?cid=1205135250945&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="/Autoturisme/noul-fiesta" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205135250945&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE">Prezentare
        Generala</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205135248195 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205135250945&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205135246849&amp;tabName=design&amp;c=Page&amp;site=RORO4_ENGINE -->
<!-- IntoID ::: articleAssetId -->
<li class="selected"><a href="design#primaryTabs"
                        data-ajaxlink="/cs/ContentServer?cid=1205135250945&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205135246849&amp;tabName=design&amp;c=Page&amp;site=RORO4_ENGINE">Design</a>
<!--This is where the main content for the selected tab will go -->
<!-- secondary tabs -->
<div class="secondary-tabs tab-content">
<nav class="sub-nav">
    <ul>
        <li><a href='#tab1' class='omt_tabName'>Exterior</a></li>
        <li><a href='#tab2' class='omt_tabName'>Interior</a></li>
    </ul>
</nav>
<!-- isBtfTab : from MidPageTabs true -->
<div class="innertab-wrapper">
<!--  tabTitle : Exterior :: btfTabContent : 1205135245918 :: tabContent :  -->
<div id='tab1' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            O imagine noua, uimitoare
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Noul Ford Fiesta are un aspect ultramodern si ultraelegant, dar ofera o&nbsp;senzatie linistitoare de
            familiaritate: este Fiesta la superlativ. Liniile fluide, sculptate dau forma caroseriei aerodinamice. Si
            vei observa o&nbsp;nota de rafinament de la prima intalnire.<br> <br> De la sportivul ST-Line si
            exclusivistul Titanium, pana la impresionantul Vignale si aventurosul Active: cu siguranta gasesti modelul
            Fiesta care se potriveste perfect gusturilor si imaginii tale.<br> <br> Descopera detaliile individuale ale
            fiecarui model, mai jos.</p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"> <img
                    src="/assets/img/1214606261260.jpg"
                    alt="Cum ar arata modelul ST-Line ideal pentru tine?"/><span class="fv-overlay-icon"></span>
        </div>
        <div class="content">
            <h3 class="bigHeading02">
                Cum ar arata modelul
                <nobr>ST-Line</nobr>
                ideal pentru tine?
            </h3>
            <p>

            <p>Versiuni de caroserie, culori exterioare, accente interioare, design al volanului... cu noul Fiesta
            <nobr>ST-Line</nobr>
            iti poti personaliza masina pentru a&nbsp;o&nbsp;face, cu adevarat, a&nbsp;ta.<br> <br> Foloseste <a
                href="http://www.fordeumicrosites.com/campaigns/2017/fiesta/colouriser/index_ro-RO.html"
                target="_blank"><span style="color: rgb(0, 0, 255);"><u>mini-configuratorul</u></span></a> pentru a&nbsp;iti
            proiecta masina ideala.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/1214606266990.jpg"
                    alt="Atrage toate privirile, cu sportivul ST-Line"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Atrage toate privirile, cu sportivul
            <nobr>ST-Line</nobr>
            </p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/1214606265771.jpg"
                    alt="Fa-te remarcat"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Fa-te remarcat</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/1214606266726.jpg"
                    alt="O grila exlusivista, cu design hexagonal"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>O grila exlusivista, cu design hexagonal</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/1214606265937.jpg"
                    alt="copper pulse yellow Next Generation Ford Fiesta Active exterior front view Cum ar arata modelul ST-Line ideal pentru tine?  Versiuni de caroserie, culori exterioare, accente interioare, design al volanului... cu noua generatie Fiesta ST-Line iti poti pers"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Titanium. Un pas in plus, in materie de inteligenta.</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/1214606265854.jpg"
                    alt="Design elegant, ultra-modern"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Design elegant, ultra-modern</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/1214606261638.jpg"
                    alt="Linii fluide, sculpturale"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Linii fluide, sculpturale</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/1214606262401.jpg"
                    alt="Luxosul plafon panoramic al modelului Vignale"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Luxosul plafon panoramic al modelului Vignale</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/1214606267336.jpg"
                    alt="Pentru cunoscatori"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Pentru cunoscatori</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/1214606264624.jpg"
                    alt="O grila sofisticata, unica pentru gama Vignale"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>O grila sofisticata, unica pentru gama Vignale</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/1214606266550.jpg"
                    alt="Active: construit pentru aventura"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Active: construit pentru aventura</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/1214606266274.jpg"
                    alt="Rezistent. Aventuros. Flexibil"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Rezistent. Aventuros. Flexibil</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/1214606262053.jpg"
                    alt="Din primavara 2018"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Din primavara 2018</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Interior :: btfTabContent : 1205135252463 :: tabContent :  -->
<div id='tab2' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            Un aspect elegant.<br><br>O ambianta relaxata
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Conceput pentru a&nbsp;fi un loc in care tau si pasagerii tai sa petreci timpul cu placere, interiorul noului
            Ford Fiesta combina un aspect elegant cu o&nbsp;ambianta relaxata si design inteligent. Detaliile rafinate
            combina forma si functia cu o&nbsp;frumusete uimitoare. Iar cu o&nbsp;gama larga de optiuni de personalizare
            din care sa poti alege, poti crea, de asemenea, un spatiu perfect adaptat, care iti satisface fiecare
            privire si atingere.</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/1214606267668.jpg"
                    alt="Un habitaclu spatios, incapator (Modelul prezentat este ST-Line)"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>
                Un habitaclu spatios, incapator<br>
                (Modelul prezentat este ST-Line)
            </p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/1214606264707.jpg"
                    alt="Spatii de depozitoare si finisaje din piele (Modelul prezentat este Titanium)"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>
                Spatii de depozitoare si finisaje din piele<br>
                (Modelul prezentat este Titanium)
            </p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/1214606265073.jpg"
                    alt="SYNC 3 cu ecran tactil “plutitor”, de 8” (Modelul prezentat este Vignale)"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>
                SYNC 3 cu ecran tactil “plutitor”, de 8”<br>
                (Modelul prezentat este Vignale)
            </p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
           <img
                    src="/assets/img/1214606261184.jpg"
                    alt="Finisaje cu accente rosii (Modelul prezentat este ST-Line)"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>
                Finisaje cu accente rosii<br>
                (Modelul prezentat este ST-Line)
            </p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/1214606267502.jpg"
                    alt="Interior luxos, din piele  (Modelul prezentat este Vignale)"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>
                Interior luxos, din piele <br>
                (Modelul prezentat este Vignale)
            </p>
            </p>
        </div>
        <div class="content-block last">
           <img
                    src="/assets/img/1214606265239.jpg"
                    alt="Din primavara 2018  (Modelul prezentat este Active)"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>
                Din primavara 2018 <br>
                (Modelul prezentat este Active)
            </p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/1214606264541.jpg"
                    alt="Scaune exclusiviste, Black Ruby Vignale (Modelul prezentat este Vignale)"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>
                Scaune exclusiviste, Black Ruby Vignale<br>
                (Modelul prezentat este Vignale)
            </p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/1214606261970.jpg"
                    alt="Sistem B&O PLAY, cu sunet bogat si puternic"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>
                Sistem B&O PLAY, cu sunet bogat si puternic
            </p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/1214606266186.jpg"
                    alt="Plafon panoramic, cu posibilitate de deschidere  (Modelul prezentat este Vignale)"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>
                Plafon panoramic, cu posibilitate de deschidere <br>
                (Modelul prezentat este Vignale)
            </p>
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
<!-- END [MidPageTabs] -->
<!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
<!-- BEGIN [MidPageTabs] -->
<!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Exterior</a></h2> -->
<!--</div>-->
<!--<div id='tab2' class="mp-tab-wrapper">
<h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">Interior</a></h2> -->
<!--</div>-->
<!-- END [MidPageTabs] -->
<!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
<!-- BEGIN [MidPageTabs] -->
<!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Exterior</a></h2> -->
<!--</div>-->
<!--<div id='tab2' class="mp-tab-wrapper">
<h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">Interior</a></h2> -->
<!--</div>-->
<!-- END [MidPageTabs] -->
</div>
</div>
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205135250945&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205135247794&amp;tabName=caracteristici&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="caracteristici#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205135250945&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205135247794&amp;tabName=caracteristici&amp;c=Page&amp;site=RORO4_ENGINE">Caracteristici</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205135249782 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205135250945&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205135253322&amp;tabName=gama-de-modele&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="gama-de-modele#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205135250945&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205135253322&amp;tabName=gama-de-modele&amp;c=Page&amp;site=RORO4_ENGINE">Modele</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205135246972 -->
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
