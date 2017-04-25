<script type="text/javascript">
    // mobile sniffer
    ForceRedirectUserAgents = 'android,iphone,blackberry';
    ForceRedirectUserAgentsBypass = 'Win64,Win32';
    ForceRedirectMinWidth = '480';
    MobileHomePageRedirectURL = 'noul-fiesta\/\/m.ford.ro';
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
    <!-- Bredcrumb Schema implementation for Nameplate at Body Template-->
    <nav class="breadCrumb" role="navigation" style="display: none">
        <ul itemscope itemtype="http://schema.org/BreadcrumbList">
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
        <!-- IntoID ::: articleAssetId -->
        <li class="selected"><a href="noul-fiesta/prezentare#primaryTabs"
                                data-ajaxlink="/cs/ContentServer?cid=1205135250945&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE">Prezentare
                Generala</a>
            <!--This is where the main content for the selected tab will go -->
            <!-- secondary tabs -->
            <div class="secondary-tabs tab-content">
                <nav class="sub-nav">
                    <ul>
                        <li><a href='#tab1' class='omt_tabName'>Prezentare generala</a></li>
                    </ul>
                </nav>
                <!-- isBtfTab : from MidPageTabs true -->
                <div class="innertab-wrapper">
                    <!--  tabTitle : Prezentare generala :: btfTabContent : 1205135252054 :: tabContent :  -->
                    <div id='tab1' class="secondary-tab-content">
                        <header class="intro-header">
                            <h1 class="bigHeading">
                                NOUL FORD <strong>FIESTA</strong>
                            </h1>
                            <span class="highlighter"></span>

                            <p class="intro-text">

                            <p>Stil si personalizare ultracontemporane, pentru a&nbsp;putea avea masina pe care
                            <nobr>ti-o</nobr>
                            doresti. Mai multe tehnologii avansate si caracteristici vitale. Un condus dinamic
                            si antrenant, conceput pentru
                            <nobr>a-ti</nobr>
                            pune zambetul pe buze.<br> <br> Noul Ford Fiesta este acum reimaginat si reinventat.
                            Si, dupa cum vei vedea atunci cand vei descoperi designul sau inteligent, aceasta
                            masina este si mai impresionanta decat pare la prima vedere.<br> <br> Descopera <a
                                HREF="noul-fiesta/gama-de-modele"><span style="color: rgb(0, 0, 255);"><u>gama
                                        Fiesta</u></span></a> si gaseste modelul perfect pentru tine.</p>
                            </p>
                        </header>
                        <article class="content-column left">
                            <div class="img-column"><img
                                    src="/assets/img/1214606266013.jpg"
                                    alt="Relaxare si tonicitate. Valoare si inteligenta."/><span
                                    class="fv-overlay-icon"></span></a></div>
                            <div class="content">
                                <h3 class="bigHeading02">
                                    Relaxare si tonicitate. Valoare si inteligenta.
                                </h3>

                                <p>

                                <p>Daca tehnologiile inteligente functioneaza fara probleme in casa ta, ar
                                    trebui sa faca la fel si in masina. De aceea, noul Ford Fiesta este echipat
                                    cu <a HREF="http://www.ford.ro/Tehnologie/Inteligenta/SYNC"><span
                                            style="color: rgb(0, 0, 255);"><u>SYNC 3</u></span></a>*, pentru
                                <nobr>a-ti</nobr>
                                usura viata, cu <a
                                    HREF="http://www.ford.ro/Tehnologie/Inteligenta/b-and-o-play"><span
                                        style="color: rgb(0, 0, 255);"><u>B&amp;O PLAY</u></span></a>* pentru
                                <nobr>a-ti</nobr>
                                face calatoriile mai distractive, si cu un acoperis panoramic ce poate fi
                                deschis, pentru a&nbsp;face ca fiecare deplasare sa fie si mai placuta.
                                <nobr>Pregateste-te</nobr>
                                sa descoperi toate acestea si multe altele
                                <nobr>intr-un</nobr>
                                spatiu care iti ofera confortul si utilitatea la care visai.<br> <br><em>*Dotari
                                    optionale, disponibile contra cost.</em></p>
                                </p>
                            </div>
                        </article>
                        <article class="content-column right">
                            <div class="content">
                                <h3 class="bigHeading02">
                                    Bucura-te de performanta. Imbratiseaza eficienta.
                                </h3>

                                <p>

                                <p>De ce sa alegi intre performante antrenante si eficienta? Cu noul Ford Fiesta
                                    le poti avea pe toate. <a
                                        HREF="http://www.ford.ro/Tehnologie/Performanta/Motor-EcoBoost"><span
                                            style="color: rgb(0, 0, 255);"><u>Motorul Ford EcoBoost pe
                                                benzina</u></span></a>, de
                                <nobr>1,0 litri,</nobr>
                                este castigator al premiului Motorul international al anului de cinci ori, iar
                                acum este la dispozitia ta. Tehnologia
                                <nobr>Auto Start-Stop</nobr>
                                te ajuta sa economisesti combustibil, ori de cate ori opresti la semafor. Iar
                                dinamica de condus sofisticata si manevrabilitatea precisa iti asigura o&nbsp;experienta
                                placuta la volan si fara niciun compromis.</p>
                                </p>
                            </div>
                            <div class="img-column"><img
                                    src="/assets/img/1214606267071.jpg"
                                    alt="Bucura-te de performanta. Imbratiseaza eficienta."/><span
                                    class="fv-overlay-icon"></span></a></div>
                        </article>
                        <article class="content-column left">
                            <div class="img-column"><img
                                        src="/assets/img/1214606264268.jpg"
                                        alt="Cu adevarat inteligent"/><span class="fv-overlay-icon"></span></a>
                            </div>
                            <div class="content">
                                <h3 class="bigHeading02">
                                    Cu adevarat inteligent
                                </h3>

                                <p>

                                <p>Tehnologia trebuie sa aiba intotdeauna un scop. Atunci cand pornesti noul
                                    Fiesta, dai viata unei game complete de caracteristici si sisteme avansate.
                                    De exemplu, Asistenta activa la parcare, Tempomatul adaptiv, Asistenta la
                                    pastrarea benzii, Recunoasterea indicatoarelor rutiere...
                                <nobr>Pregateste-te</nobr>
                                sa te bucuri de tehnologii atat de inteligente si de utile, incat te vei intreba
                                cum de
                                <nobr>te-ai</nobr>
                                descurcat fara ele pana acum.</p>
                                </p>
                            </div>
                        </article>
                        <article class="content-column right">
                            <div class="content">
                                <h3 class="bigHeading02">
                                    Siguranta si protectia ta sunt prioritare
                                </h3>

                                <p>

                                <p>Noul Ford Fiesta incorporeaza o&nbsp;serie de <a
                                        HREF="http://www.ford.ro/Tehnologie"><span
                                            style="color: rgb(0, 0, 255);"><u>tehnologii avansate</u></span></a>,
                                    concepute pentru a&nbsp;te proteja pe tine, pasagerii tai si vehiculul, in
                                    cazul unui accident. Cateva astfel de exemple sunt Sistemul Active City
                                    Stop, Sistemul de protectie pentru portiere si Sistemul SYNC&nbsp;3 cu
                                    asistenta de urgenta. Mai sunt disponibile numeroase alte dotari si
                                    tehnologii, cu rolul de a&nbsp;contribui la prevenirea accidentelor sau de a&nbsp;limita
                                    efectele acestora.</p>
                                </p>
                            </div>
                            <div class="img-column"><img
                                        src="/assets/img/1214606264185.jpg"
                                        alt="Siguranta si protectia ta sunt prioritare"/><span
                                        class="fv-overlay-icon"></span></a></div>
                        </article>
                    </div>
                    <!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
                    <!-- BEGIN [MidPageTabs] -->
                    <!--<div id='tab1' class="mp-tab-wrapper">
                    <h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Prezentare generala</a></h2> -->
                    <!--</div>-->
                    <!-- END [MidPageTabs] -->
                    <!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
                    <!-- BEGIN [MidPageTabs] -->
                    <!--<div id='tab1' class="mp-tab-wrapper">
                    <h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Prezentare generala</a></h2> -->
                    <!--</div>-->
                    <!-- END [MidPageTabs] -->
                    <!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
                    <!-- BEGIN [MidPageTabs] -->
                    <!--<div id='tab1' class="mp-tab-wrapper">
                    <h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Prezentare generala</a></h2> -->
                    <!--</div>-->
                    <!-- END [MidPageTabs] -->
                    <!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
                    <!-- BEGIN [MidPageTabs] -->
                    <!--<div id='tab1' class="mp-tab-wrapper">
                    <h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Prezentare generala</a></h2> -->
                    <!--</div>-->
                    <!-- END [MidPageTabs] -->
                </div>
            </div>
        </li>
        <!--  isBtfTab  -->
        <!--  tabUrl /cs/ContentServer?cid=1205135250945&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205135246849&amp;tabName=design&amp;c=Page&amp;site=RORO4_ENGINE -->
        <li><a href="noul-fiesta/design#primaryTabs" class=" "
               data-ajaxlink="/cs/ContentServer?cid=1205135250945&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205135246849&amp;tabName=design&amp;c=Page&amp;site=RORO4_ENGINE">Design</a>
            <!-- secondary tabs -->
            <!--  midPageTabId : 1205135250916 -->
        </li>
        <!--  isBtfTab  -->
        <!--  tabUrl /cs/ContentServer?cid=1205135250945&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205135247794&amp;tabName=caracteristici&amp;c=Page&amp;site=RORO4_ENGINE -->
        <li><a href="noul-fiesta/caracteristici#primaryTabs" class=" "
               data-ajaxlink="/cs/ContentServer?cid=1205135250945&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205135247794&amp;tabName=caracteristici&amp;c=Page&amp;site=RORO4_ENGINE">Caracteristici</a>
            <!-- secondary tabs -->
            <!--  midPageTabId : 1205135249782 -->
        </li>
        <!--  isBtfTab  -->
        <!--  tabUrl /cs/ContentServer?cid=1205135250945&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205135253322&amp;tabName=gama-de-modele&amp;c=Page&amp;site=RORO4_ENGINE -->
        <li><a href="noul-fiesta/gama-de-modele#primaryTabs" class=" "
               data-ajaxlink="/cs/ContentServer?cid=1205135250945&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205135253322&amp;tabName=gama-de-modele&amp;c=Page&amp;site=RORO4_ENGINE">Modele</a>
            <!-- secondary tabs -->
            <!--  midPageTabId : 1205135246972 -->
        </li>
    </ul>
</nav>
</div>
<article class="nameplate-main-content" id="tabs">
</article>
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
