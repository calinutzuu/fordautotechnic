
<script type="text/javascript">
    // mobile sniffer
    ForceRedirectUserAgents = 'android,iphone,blackberry';
    ForceRedirectUserAgentsBypass = 'Win64,Win32';
    ForceRedirectMinWidth = '480';
    MobileHomePageRedirectURL = 'Caracteristici\/\/m.ford.ro';
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
<li><a href="Design#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205116173898&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205116179846&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE">Design</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205116172702 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205116173898&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205116170016&amp;tabName=Caracteristici&amp;c=Page&amp;site=RORO4_ENGINE -->
<!-- IntoID ::: articleAssetId -->
<li class="selected"><a href="Caracteristici#primaryTabs"
                        data-ajaxlink="/cs/ContentServer?cid=1205116173898&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205116170016&amp;tabName=Caracteristici&amp;c=Page&amp;site=RORO4_ENGINE">Caracteristici</a>
<!--This is where the main content for the selected tab will go -->
<!-- secondary tabs -->
<div class="secondary-tabs tab-content">
<nav class="sub-nav">
    <ul>
        <li><a href='#tab1' class='omt_tabName'>EXPERIENTA CONDUSULUI</a></li>
        <li><a href='#tab2' class='omt_tabName'>PERFORMANTA SI EFICIENTA</a></li>
        <li><a href='#tab3' class='omt_tabName'>CONFORT SI COMODITATE</a></li>
        <li><a href='#tab4' class='omt_tabName'>SIGURANTA SI SECURITATE</a></li>
    </ul>
</nav>
<!-- isBtfTab : from MidPageTabs true -->
<div class="innertab-wrapper">
<!--  tabTitle : EXPERIENTA CONDUSULUI :: btfTabContent : 1205116179832 :: tabContent :  -->
<div id='tab1' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            PUNE MANA PE VOLAN SI PREIA CONTROLUL.
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Tehnologii inovatoare, design inteligent, proiectare de precizie: la volanul noului Focus ST esti conectat la
            drum, dar si la muzica, mesaje si apeluri telefonice, chiar si in miscare.</p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"> <img
                    src="/assets/img/focus_st/1214556049228.jpg"
                    alt="Sports Suspenssion "/><span class="fv-overlay-icon"></span></div>
        <div class="content">
            <h3 class="bigHeading02">
                Suspensie sport, in stilul masinilor de curse
            </h3>

            <p>

            <p>Suspensia imbunatatita include bucse mai rigide pe bratul de control inferior frontal si pe legaturile cu
                arcuri din spate, plus un design complet nou al barei antiruliu. Prin aceasta configuratie, sasiul este
                coborat, aducand centrul de greutate mai aproape de drum, pentru viraje mai precise.</p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Manevre si viraje fara efort
            </h3>

            <p>

            <p>Sistemul de directie asistata electric (EPAS) se regleaza automat pentru a permite virarea mai simpla si
                mai usoara la parcarea intr-un spatiu restrans si virarea mai ferma pentru mai mult control pe
                autostrada.</p>
            </p>
        </div>
        <div class="img-column"><img
                    src="/assets/img/focus_st/1214556047382.jpg"
                    alt="Electronic Power Assisted Steering"/><span class="fv-overlay-icon"></span></div>
    </article>
    <article class="content-column left">
        <div class="img-column"> <img
                    src="/assets/img/focus_st/1214556047803.jpg"
                    alt="Electronic Transition Stability"/><span class="fv-overlay-icon"></span></div>
        <div class="content">
            <h3 class="bigHeading02">
                Schimbati directia: pastrati controlul
            </h3>

            <p>

            <p>Noul Focus ST incorporeaza o noua tehnologie, denumita Stabilitate tranzitionala electronica (parte a
                programului avansat ESP in trei etape). Detectand stabilitatea vehiculului si comenzile soferului,
                sistemul poate reactiona si poate raspunde pentru a te ajuta sa mentii precizia si controlul atunci cand
                schimbi benzile sau depasesti.</p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Mai mult control si mai multa distractie in viraje
            </h3>

            <p>

            <p>Prin echilibrarea cuplului motorului intre rotile din fata, pentru a se potrivi tipului de carosabil si
                conditiilor de condus, Controlul electronic al vectorului de cuplu iti asigura aderenta, incredere si
                manevrare precisa atunci cand accelerezi in timpul virajelor.</p>
            </p>
        </div>
        <div class="img-column"> <img
                    src="/assets/img/focus_st/1214556050087.jpg"
                    alt="Mai mult control"/><span class="fv-overlay-icon"></span></div>
    </article>
    <article class="content-column left">
        <div class="img-column"> <img
                    src="/assets/img/focus_st/1214556048976.jpg"
                    alt=" "/><span class="fv-overlay-icon"></span></div>
        <div class="content">
            <h3 class="bigHeading02">
                Construit pentru a oferi putere
            </h3>

            <p>

            <p>Noul Focus ST este disponibil cu un motor diesel capabil sa dezvolte pana la 185 CP cu un cuplu de 400 Nm
                si un motor pe benzina cu 250 CP si cuplu de 345 Nm. Astfel, au fost proiectate special sisteme de
                motorizare noi, pentru a livra aceasta putere fara nicio problema, asigurand tractiune exceptionala pe
                rotile din fata, chiar si in conditii de accelerare puternica.</p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Cea mai recenta tehnologie hands-free
            </h3>

            <p>

            <p>Ford SYNC 2 cu comanda vocala si ecran tactil este un sistem de informatii si divertisment avansat, care
                include un ecran tactil color de 8&rdquo;, optional. Acest afisaj de inalta rezolutie iti ofera
                controlul intuitiv asupra mai multor functii cheie, inclusiv telefon, sistem audio, climatizare si,
                optional, navigatie, prin intermediul vocii sau al atingerii.</p>
            </p>
        </div>
        <div class="img-column"> <img
                    src="/assets/img/focus_st/1214556049396.jpg"
                    alt="Ford SYNC 2 with Voice Control and Touchscreen"/><span class="fv-overlay-icon"></span>
        </div>
    </article>
    <article class="content-column left">
        <div class="img-column"> <img
                    src="/assets/img/focus_st/1214556047887.jpg"
                    alt="Cross Traffic Alert"/><span class="fv-overlay-icon"></span></div>
        <div class="content">
            <h3 class="bigHeading02">
                Sesizeaza vehiculele pe care tu le-ai putea rata
            </h3>

            <p>

            <p>Alerta la intersectarea cu traficul este o tehnologie in intregime noua, care face acum parte din
                Sistemul de asistenta pentru unghiul mort (BLIS). Atunci cand iesi cu spatele dintr-un loc de parcare si
                ai vizibilitate redusa asupra situatiei traficului, Alerta la intersectarea cu traficul poate detecta
                vehicule care se apropie si poate emite un sunet de avertizare. Aceasta tehnologie declanseaza o lumina
                pe oglinda retrovizoare exterioara (stanga sau dreapta, in functie de directia din care se apropie
                vehiculele).</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : PERFORMANTA SI EFICIENTA :: btfTabContent : 1205116171067 :: tabContent :  -->
<div id='tab2' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            PUTERNIC SI EFICIENT
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Proiectat si construit pentru a fi o masina performanta de care sa te poti bucura in fiecare zi, noul Focus
            ST isi ia puterea de la un motor pe benzina EcoBoost de 2,0 litri si 250 CP sau de la noul motor TDCi de 2,0
            litri si 185 CP. <br>
            <br>
            Ambele asigura o combinatie fara compromisuri de performanta si eficienta. Asadar, poti beneficia de costuri
            de functionare rezonabile in timp ce te bucuri la maximum de nivelurile de putere si performanta ale ST.</p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"> <img
                    src="/assets/img/focus_st/1214556049060.jpg"
                    alt="2.0-litre EcoBoost engine"/><span class="fv-overlay-icon"></span></div>
        <div class="content">
            <h3 class="bigHeading02">
                Experienta EcoBoost
            </h3>

            <p>

            <p>Turbocompresor, tehnologie de sincronizare variabila independenta a camelor duble, injectie directa de
                combustibil de inalta presiune: motorul EcoBoost de 2,0 litri si 250 CP le utilizeaza pe toate pentru a
                ajunge (la modelul cu 5 usi) de la 0 la 100 km/h in doar 6,5 secunde si pentru a atinge o viteza maxima
                de 248 km/h (limitata). Acest motor din aluminiu usor reactioneaza excelent la comenzi si este
                exceptional de eficient, oferind accelerare rapida prin treptele de viteza si un cuplu maxim disponibil
                de la doar 2.000 rpm.</p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Putere diesel
            </h3>

            <p>

            <p>Noul motor TDCi de 2,0 litri si 185 CP iti poate propulsa noul Focus ST cu 5 usi de la 0 la 100 km/h in
                8,1 secunde si, in continuare, pana la o viteza maxima de 217 km/h (limitata). Puterea maxima este
                dezvoltata la 3.500 rpm si un cuplu de 400 Nm este disponibil in intervalul 2.000 - 2.750 rpm. Acest
                randament al cuplului permite o accelerare impresionanta prin treptele de viteza si o performanta
                puternica la turatii reduse. In cea de-a 6-a treapta de viteza, poti accelera de la 80 la 120 km/h
                (50-75 mph) in doar 9,7 secunde.</p>
            </p>
        </div>
        <div class="img-column"> <img
                    src="/assets/img/focus_st/1214556051457.jpg"
                    alt="Ford Focus ST Exterior"/><span class="fv-overlay-icon"></span></div>
    </article>
    <article class="content-column left">
        <div class="img-column"> <img
                    src="/assets/img/focus_st/1214556050275.jpg"
                    alt="6 speed"/><span class="fv-overlay-icon"></span></div>
        <div class="content">
            <h3 class="bigHeading02">
                Transmisie automata cu 6 trepte, optionala
            </h3>

            <p>

            <p>Transmisia automata Powershift cu 6 trepte, inspirata din motorsport, ofera cel mai usor mod de a
                exploata intregul potential al motorului. Adaptata special pentru fiecare tip de motorizare, cutia
                Powershift foloseste doua ambreiaje pentru a controla efectiv doua cutii de viteze cu 3 rapoarte.
                Rezultatul este o schimbare de trepte lina si rapida cu o pierdere minima a cuplului motor. Datorita
                padelelor montate pe volan ramai cu mainile pe volan atunci cand schimbi vitezele, ajutandu-astfel te sa
                pastrezi permanent controlul.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/focus_st/1214556047389.jpg"
                    alt="Electronic Power Assisted Steering"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Un ajutor pentru a conduce mai eficient
            </h3>

            <p>

            <p>Sistemul inovator Ford Eco Mode evalueaza in mod continuu efectele stilului personal de condus asupra
                consumului de combustibil. Acesta analizeaza viteza, schimbarea treptelor de viteza, franarea si
                nivelurile de anticipare, plus raportul personal de deplasari pe distante scurte si lungi. Apoi,
                software-ul inteligent iti ofera recomandari legate de modul de imbunatatire a economiei de
                combustibil.</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/focus_st/1214556048899.jpg"
                    alt="Auto-Start-Stop"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Folosesti mai putin combustibil cu functia Auto-Start-Stop
            </h3>

            <p>

            <p>Atunci cand Focus-ul tau ST se opreste la semafor sau cand astepti intr-o coloana, Auto-Start-Stop poate
                opri automat motorul (fara a opri insa alimentarea sistemelor esentiale, precum ventilatia, radioul si
                Ford SYNC). De indata ce esti gata sa pleci de pe loc, apasa pe pedala de ambreiaj si selecteaza prima
                treapta de viteza, ca de obicei, iar sistemul porneste din nou motorul.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/focus_st/1214556049830.jpg"
                    alt="6-speed manual gearbox"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Accelerare prin toate treptele de viteza
            </h3>

            <p>

            <p>O transmisie manuala cu 6 trepte de viteze este disponibila exclusiv pentru ST, cu variante diferite,
                adaptate pentru fiecare motor in parte. Schimbarea specifica a treptelor de viteza produce &bdquo;zvacnirea&rdquo;
                maxima la fiecare miscare de maneta. Iar accelerarea rapida in treptele de viteza inferioare este
                dublata de o navigare confortabila cu viteza: raportul celei de-a sasea trepte de viteza este ajutat
                perfect la Focus ST, oferindu-ti performanta optima si ramanand, in acelasi timp, suficient de lung
                pentru a ajuta la mentinerea unei economii excelente de combustibil in deplasarile mai lungi.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
           <img
                    src="/assets/img/focus_st/1214556048566.jpg"
                    alt="Ford Eco Mode system"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Reincarca-ti bateria mai eficient
            </h3>

            <p>

            <p>Spre deosebire de sistemele conventionale, sistemul de incarcare regenerativa inteligenta reincarca
                bateria doar atunci cand este nevoie si, ori de cate ori este posibil, evita realizarea acestei
                operatiuni atunci cand apesi pedala de acceleratie.</p>
            </p>
        </div>
        <div class="content-block">
           <img
                    src="/assets/img/focus_st/1214556048734.jpg"
                    alt="Active Grille Shutter"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Aerodinamicitate mai buna pentru economie mai mare
            </h3>

            <p>

            <p>Atunci cand conduci cu viteza redusa, sistemul activ cu obturator pentru grila tine orificiile de
                ventilatie de la nivelul grilei deschise pentru a raci motorul. Cand prinzi viteza, acesta se poate
                inchide automat, imbunatatind aerodinamicitatea si ajutand la economisirea de combustibil. In timp,
                aceasta tehnologie poate face o mare diferenta.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/focus_st/1214556049918.jpg"
                    alt="Shift Indicator"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Schimbari ale treptelor de viteza mai eficiente din punct de vedere al consumului de combustibil
            </h3>

            <p>

            <p>O sageata luminoasa, indicatorul pentru schimbarea treptei de viteza (GSI) de pe panoul de bord iti
                indica momentul optim de schimbare a treptei de viteza, pentru un condus economic, ce se traduce intr-o
                eficienta maxima a consumului de combustibil. Aceasta reprezinta o modalitate simpla si eficienta de a
                asigura deplasari cat mai economice.</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : CONFORT SI COMODITATE :: btfTabContent : 1205116172314 :: tabContent :  -->
<div id='tab3' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            INTELIGENT GANDIT
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Fiecare aspect al noului Focus ST este proiectat cu gandul la confortul si comoditatea ta. Si cum fiecare
            tehnologie si caracteristica exista pentru a-ti face viata mai usoara, te poti concentra si bucura de
            performanta masinii tale.</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/focus_st/1214556049151.jpg"
                    alt="New three-spoke steering wheel"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Un volan care iti pune totul la indemana
            </h3>

            <p>

            <p>Un volan nou, cu trei spite, a fost special proiectat in mod ergonomic pentru noul Ford Focus ST. Fiecare
                buton si comanda se afla la indemana iar pozitia volanului imbunatateste atat practicabilitatea, cat si
                vizibilitatea panoului de bord al masinii tale. </p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/focus_st/1214556048146.jpg"
                    alt="Storage Bin With USB"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Depozitare inteligenta pentru dispozitivele tale inteligente
            </h3>

            <p>

            <p>Consola centrala incorporeaza un spatiu pentru smartphone-uri si alte dispozitive mobile. Este prevazuta
                cu un port USB pentru conectivitate si alimentare, precum si un covoras de cauciuc pentru a te ajuta sa
                iti tii obiectele personale in siguranta.</p>
            </p>
        </div>
        <div class="content-block last">
           <img
                    src="/assets/img/focus_st/1214556049742.jpg"
                    alt="Ford Ford KeyFree System"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Sistemul Key-free inseamna mai putine griji
            </h3>

            <p>

            <p><br>
                Sistemul Ford KeyFree iti permite sa incui si sa descui masina fara sa scoti cheia din buzunar sau din
                poseta: ideal pentru situatiile in care ai mainile ocupate cu altceva.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/focus_st/1214556048314.jpg"
                    alt="Ford Power Starter Button"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Porneste masina prin simpla atingere a unui buton
            </h3>

            <p>

            <p>Nu mai este nevoie sa folosesti cheia. Trebuie doar sa actionezi butonul de pornire Ford Power in timp ce
                tii ambreiajul apasat (sau pedala de frana pe modelul cu transmisie automata) si motorul prinde
                viata.</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/focus_st/1214556050006.jpg"
                    alt="Worry-free car sharing with MyKey"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Utilizarea in comun a masinii, fara probleme, cu ajutorul caracteristicii MyKey<sup>®</sup>
            </h3>

            <p>

            <p>Ford MyKey<sup>&reg;</sup> este conceputa pentru a-ti asigura linistea atunci cand imprumuti masina
                cuiva. Trebuie doar sa introduci cheia in contact, sa pornesti masina si sa urmaresti instructiunile
                simple pentru a programa restrictiile dorite pentru cheia respectiva. De exemplu, poti seta limita
                maxima de viteza, poti seta un semnal care sa atraga atentia asupra purtarii centurii de siguranta si
                poti controla volumul sistemului audio.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/focus_st/1214556048230.jpg"
                    alt="Rain sensing wipers"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Stergatoare care se regleaza automat, in functie de ploaie
            </h3>

            <p>

            <p>Stergatoarele de parbriz cu senzor de ploaie se activeaza in secunda in care detecteaza stropi de apa pe
                parbrizul autovehiculului, iar apoi isi regleaza viteza pentru a face fata oricaror conditii meteo. Poti
                alege unul dintre cele sase niveluri de sensibilitate, care determina cat de multa umiditate trebuie sa
                se acumuleze inainte ca stergatoarele sa se activeze.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/focus_st/1214556047978.jpg"
                    alt="Wing mirrors that can protect themselves"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Oglinzi care se pot proteja singure
            </h3>

            <p>

            <p>Pentru a evita deteriorarea accidentala, oglinzile laterale pliabile electric se pliaza catre interior
                dupa ce ati parcat. Atunci cand sunt rabatate, oglinzile protejeaza, de asemenea, elegantele indicatoare
                integrate.</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/focus_st/1214556048062.jpg"
                    alt="Ford Easy-Fuel, for foolproof filling-up"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Ford Easy-Fuel, pentru alimentari fara probleme
            </h3>

            <p>

            <p>Aceasta tehnologie utila face sa fie practic imposibila alimentarea gresita a masinii, deoarece duza
                pompei nu se va potrivi. Si pentru ca Easy-Fuel este un sistem fara buson, nu o sa mai ai de-a face
                niciodata cu un buson murdar.</p>
            </p>
        </div>
        <div class="content-block last">
           <img
                    src="/assets/img/focus_st/1214556048398.jpg"
                    alt="Quick clear"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Curata parbrizul rapid cu Quickclear
            </h3>

            <p>

            <p>Aceasta dotare inteligenta este creata pentru a-ti permite sa pornesti rapid in diminetile geroase.
                Trebuie doar sa apesi pe un buton, iar sistemul poate sa dezghete parbrizul in cateva secunde, chiar si
                la temperaturi negative.</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : SIGURANTA SI SECURITATE :: btfTabContent : 1205116177197 :: tabContent :  -->
<div id='tab4' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            SIGURANTA TA: INTOTDEAUNA PRIORITATEA NUMARUL UNU
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Performanta inalta cere un nivel ridicat de siguranta. Iar noul Focus ST este echipat cu o gama completa de
            masuri avansate, pentru a-ti oferi protectie si siguranta.</p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"> <img
                    src="/assets/img/focus_st/1214556047467.jpg"
                    alt="Intelligent Protection System"/><span class="fv-overlay-icon"></span></div>
        <div class="content">
            <h3 class="bigHeading02">
                Sistemele de siguranta coordonate se activeaza intr-o fractiune de secunda
            </h3>

            <p>

            <p>Focus ST este echipat cu un sistem inteligent de protectie avansat (IPS), care coordoneaza o serie de
                sisteme de siguranta pentru a-ti asigura protectie maxima tie si pasagerilor tai. Pe langa o caroserie
                care absoarbe impactul, o serie de airbaguri ajuta la protejarea ocupantilor masinii. Coloana de
                directie si pedalele sunt, de asemenea, concepute pentru a se retrage la distanta de sofer, ajutand la
                reducerea riscului de accidentare in cazul unui accident.</p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Comutator ESP
            </h3>

            <p>

            <p>Poti comuta intre doua moduri ale sistemului ESP. Modul Sport iti ofera controlul total asupra cuplului
                motorului, in timp ce interventiile franei ESP sunt reduse, pentru a permite un stil de condus mai
                sportiv. Controlul tractiunii este, de asemenea, dezactivat, pentru a genera o invartire mai mare a
                rotilor, pentru tractiune imbunatatita in situatii specifice, solicitante. ESP si Controlul tractiunii
                pot fi dezactivate complet prin intermediul &bdquo;Modului Off (Dezactivat)&rdquo;.</p>
            </p>
        </div>
        <div class="img-column"> <img
                    src="/assets/img/focus_st/1214556049480.jpg"
                    alt="Electronic Stability Programme"/><span class="fv-overlay-icon"></span></div>
    </article>
    <article class="content-column left">
        <div class="img-column"> <img
                    src="/assets/img/focus_st/1214556047298.jpg"
                    alt="Anti-lock braking system"/><span class="fv-overlay-icon"></span></div>
        <div class="content">
            <h3 class="bigHeading02">
                Sisteme avansate pentru o franare mai controlata
            </h3>

            <p>

            <p>Un sistem de franare cu anti-blocare roti (ABS) rafinat si distributia electronica a fortei de franare
                (EBD) conlucreaza pentru a asigura o franare mai bine controlata. Ansamblul franei a fost, de asemenea,
                imbunatatit pentru a garanta reactii mai rapide.</p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Ajuta la un condus mai sigur in oras
            </h3>

            <p>

            <p>Accidentele in trafic la viteza mica, cu opriri si porniri frecvente, au loc mult prea des (mai ales pe
                strazile aglomerate din orase). Sistemul de oprire activa in oras este conceput pentru a te ajuta sa le
                eviti sau sa reduci impactul acestora. Daca sistemul detecteaza ca masina din fata incetineste brusc,
                iar tu te deplasezi cu mai putin de 50 km/h, va actiona automat franele.</p>
            </p>
        </div>
        <div class="img-column"> <img
                    src="/assets/img/focus_st/1214556048475.jpg"
                    alt="Active City Stop"/><span class="fv-overlay-icon"></span></div>
    </article>
    <article class="content-column left">
        <div class="img-column"> <img
                    src="/assets/img/focus_st/1214556047719.jpg"
                    alt="Bi-Xenon Headlamps with Adaptive Lighting "/><span class="fv-overlay-icon"></span></div>
        <div class="content">
            <h3 class="bigHeading02">
                Faruri bi-xenon cu consum redus de energie
            </h3>

            <p>

            <p>De la autostrazi la strazi din mediul urban, farurile bi-xenon cu iluminare adaptiva schimba automat
                modelul de iluminare al fasciculului, oferind cea mai buna iluminare pentru o varietate de situatii de
                condus. De asemenea, farurile isi reduc automat intensitatea luminii atunci cand este detectat un
                vehicul care se apropie din sens opus.</p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Doua sisteme avansate care te ajuta sa iti pastrezi banda
            </h3>

            <p>

            <p>Sistemul de asistenta la pastrarea benzii iti va oferi asistenta sistemului de directie daca detecteaza
                ca esti pe cale sa schimbi banda fara sa semnalizezi. Iar daca vehiculul se deplaseaza accidental catre
                marcajele benzii, Sistemul de avertizare la parasirea benzii te avertizeaza printr-o vibratie a
                volanului si prin afisarea unui semnal vizual pe afisajul de bord.</p>
            </p>
        </div>
        <div class="img-column"> <img
                    src="/assets/img/focus_st/1214556048643.jpg"
                    alt="Lane Keeping Aid"/><span class="fv-overlay-icon"></span></div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <img
                    src="/assets/img/focus_st/1214556049652.jpg"
                    alt="Hill Start Assist"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Un plus de control in cazul pornirilor in rampa
            </h3>

            <p>

            <p>Sistemul de asistenta la pornirea din rampa impiedica alunecarea in spate atunci cand pornesti din panta.
                Sistemul functioneaza prin mentinerea presiunii la nivelul sistemului de fanare pentru un interval
                suplimentar de 2,5 secunde, asigurandu-ti mai mult timp si control atunci cand muti piciorul de pe
                pedala de frana pe cea de acceleratie.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/focus_st/1214556049567.jpg"
                    alt="Driver Alert"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Sistemul de avertizare a soferului isi da seama cand esti obosit
            </h3>

            <p>

            <p>Sistemul de avertizare a soferului monitorizeaza constant stilul personal de condus si detecteaza orice
                variatie cauzata de oboseala soferului. Daca te simti obosit, pe afisaj apare o pictograma de
                avertizare, care iti sugereaza sa faci o pauza.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/focus_st/1214556048817.jpg"
                    alt="Auto High Beam"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Faza lunga automata. Te ajuta sa vezi, fara a-i orbi pe ceilalti
            </h3>

            <p>

            <p>Un ajutor util pentru condusul pe timp de noapte, Faza lunga automata se asigura ca te poti concentra
                doar asupra drumului, deoarece sistemul activeaza si dezactiveaza automat faza lunga in timpul noptii,
                in functie de iluminatul stradal, traficul din sens opus si traficul din fata.</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/focus_st/1214556047642.jpg"
                    alt="Auto-dimming rear-view mirror"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                O oglinda retrovizoare cu functie anti-orbire
            </h3>

            <p>

            <p>Sofatul pe timp de noapte ar fi mai usor daca nu ai fi orbit in mod constant de farurile autovehiculelor
                din spate. Oglinda retrovizoare heliomata inovatoare detecteaza automat reflexia farurilor din spate si
                reduce stralucirea luminii reflectate.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/focus_st/1214556047221.jpg"
                    alt="New Ford Focus"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Avertizare timpurie in cazul unei pene
            </h3>

            <p>

            <p>Daca vreunul dintre pneuri incepe sa piarda presiune in timpul deplasarii, sistemul de monitorizare a
                presiunii in pneuri (TPMS) te avertizeaza prin aprinderea unei pictograme pe panoul de bord, oferindu-ti
                sansa sa opresti in siguranta si sa remediezi problema.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/focus_st/1214556047137.jpg"
                    alt="Blind Spot Information System"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Tehnologia care iti indica autovehiculele pe care nu le poti vedea
            </h3>

            <p>

            <p>Sistemul de asistenta pentru unghiul mort utilizeaza senzori radar pentru a identifica autovehiculele
                care se pot afla in unghiul mort. Acestea sunt amplasate pe ambele parti ale masinii si te avertizeaza
                in mod activ cu privire la situatii potential periculoase, prin intermediul unei lumini portocalii
                afisate in mod vizibil in oglinda laterala.</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/focus_st/1214556047558.jpg"
                    alt="Speed Limiter"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Seteaza propria limita de viteza, iar noul Focus ST o va respecta
            </h3>

            <p>

            <p>Fiind integrat in cadrul tempomatului, dispozitivul de limitare a vitezei iti permite sa iti setezi
                propria viteza maxima. Apoi, masina va respecta aceasta viteza, pentru ca tu sa te poti concentra
                exclusiv asupra drumului. Atunci cand vrei sa maresti viteza, apasa pur si simplu pe pedala de
                acceleratie pentru a dezactiva sistemul.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                src="/assets/img/focus_st/1214556049319.jpg"
                alt=" "/>

            <h3 class="bigHeading02">
                Sistem de reamintire pentru utilizarea centurii de siguranta, pentru un plus de siguranta
            </h3>

            <p>

            <p>Aceasta functie te ajuta sa garantezi siguranta si protectia pasagerilor in timp ce va deplasati cu
                autovehiculul. In cazul in care unul dintre pasageri nu si-a fixat centura de siguranta, sistemul
                declanseaza alertele sonore si vizuale.</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
<!-- BEGIN [MidPageTabs] -->
<!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">EXPERIENTA CONDUSULUI</a></h2> -->
<!--</div>-->
<!--<div id='tab2' class="mp-tab-wrapper">
<h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">PERFORMANTA SI EFICIENTA</a></h2> -->
<!--</div>-->
<!--<div id='tab3' class="mp-tab-wrapper">
<h2><a href='#tab3' class="mp-tab omt_xd_mt_ti">CONFORT SI COMODITATE</a></h2> -->
<!--</div>-->
<!--<div id='tab4' class="mp-tab-wrapper">
<h2><a href='#tab4' class="mp-tab omt_xd_mt_ti">SIGURANTA SI SECURITATE</a></h2> -->
<!--</div>-->
<!-- END [MidPageTabs] -->
</div>
</div>
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

