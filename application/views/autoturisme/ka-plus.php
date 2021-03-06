<script type="text/javascript">
    // mobile sniffer
    ForceRedirectUserAgents = 'android,iphone,blackberry';
    ForceRedirectUserAgentsBypass = 'Win64,Win32';
    ForceRedirectMinWidth = '480';
    MobileHomePageRedirectURL = 'ka-plus.html\/\/m.ford.ro';
    MobileRedirectURL = MobileHomePageRedirectURL + '/autoturisme/ka-plus';
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
    <!-- Bredcrumb Schema implementation for Nameplate at Body Template-->
    <nav class="breadCrumb" role="navigation" style="display: none">
        <ul itemscope itemtype="http://schema.org/BreadcrumbList">
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
        var bootstrapVehicleData = {
            "vehicles": [
                {
                    "strIntroToFord": " ",
                    "selector": {
                        "bodystyles": {
                            "options": [
                                {}
                            ]
                        },
                        "exteriorImages": {
                            "options": [
                                {}
                            ]
                        },
                        "interiorImages": {
                            "options": [
                                {}
                            ]
                        }
                    },
                    "brand": "Ford",
                    "vehicleType": "PV",
                    "catalogId": "NONE",
                    "nameplate": "Ka+",
                    "labelAvailableFrom": "&nbsp;",
                    "formattedCurrency": "",
                    "nameplateText": "Original, prietenos si cu o manevrabilitate fantastica, Ka+ stabileste standardele pentru masinile mici.",
                    "imagePack": false,
                    "hideVehicleImage": false,
                    "facebookImagePath": "",
                    "facebookAppId": "facebookAppId",
                    "images": [],
                    "billBoardImagePath": null,
                    "backgroundImagePath": ["/assets/img/ka-plus/1214559171550.jpg", "null", "null"],
                    "disclaimerTextColor": ["364957", null, null],
                    "current": true,
                    "cid": "1205115904958",
                    "cta": [
                        {"linkTitle": "VREAU SA FIU INFORMAT", "linkURL": "/SBE/VreauSaFiuInformata", "linkType": "primary", "linkTarget": "", "omid": "va"}
                    ],
                    "social": {"facebook": "https://facebook.com", "facebookPage": "fordromania"},
                    "disclaimer": "Modelul prezentat este un Ka+ {1}. Imagine cu titlul de prezentare.",
                    "seriesCode": "AUTHORED",
                    "uscCode": "AUTHORED",
                    "presId": "1205115909798",
                    "promos": [],
                    "idf": {"options": []}
                }
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
                    style="background-image:url(/assets/img/ka-plus/1214559171550.jpg">
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
                <!--  tabUrl /cs/ContentServer?cid=1205115904958&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE -->
                <!-- IntoID ::: articleAssetId -->
                <li class="selected"><a href="#primaryTabs">Prezentare Generala</a>
                    <!--This is where the main content for the selected tab will go -->
                    <!-- secondary tabs -->
                    <div class="secondary-tabs tab-content">
                        <nav class="sub-nav">
                            <ul>
                                <li><a href='#tab1' class='omt_tabName'>Prezentare Generala</a></li>
                            </ul>
                        </nav>
                        <!-- isBtfTab : from MidPageTabs true -->
                        <div class="innertab-wrapper">
                            <!--  tabTitle : Prezentare generala :: btfTabContent : 1205115902291 :: tabContent :  -->
                            <div id='tab1' class="secondary-tab-content">
                                <header class="intro-header">
                                    <h1 class="bigHeading">
                                        NOUL FORD <strong>KA+</strong> si <strong>KA ACTIVE</strong>
                                    </h1>
                                    <span class="highlighter"></span>

                                    <p class="intro-text">

                                    <p>Noul KA+ este conceput sa-ti ofere toate tehnologiile de care ai nevoie de la o
                                        masina - intr-un singur pachet compact si elegant. Iar daca iti doresti un
                                        aspect mai robust, noul KA+ Active ar putea fi exact masina pe care o cauti.
                                        <br><br>Garda la sol inaltata, sine pentru acoperis, jante din aliaj, de 15”, cu
                                        finisate subtile ... Noul KA+ Active este mereu gata de aventura.<br>
                                        <br>
                                        Orice model vei alege, te vei bucura de o tehnologie utila, o experienta la
                                        volan distractiva si mult mai multa eficienta..<br>
                                        <br>
                                    </p>
                                    </p>
                                </header>
                                <article class="content-column left">
                                    <div class="img-column"><img
                                            src="/assets/img/ka-plus/1214559170373.jpg"
                                            alt="Spatiu din belsug pentru toata lumea"/><span
                                            class="fv-overlay-icon"></span></div>
                                    <div class="content">
                                        <h3 class="bigHeading02">
                                            Face totul sa fie mai usor
                                        </h3>

                                        <p>

                                        <p>Datorita agilitatii si manevrabilitatii lejere, vei fi intotdeauna nerabdator
                                            sa te asezi la volan. Sistemul de directie asistata electric (EPAS), special
                                            calibrata, mentine KA+ agil, facilitand parcarea si navigarea in traficul
                                            urban si facand din condusul pe autostrada o placere relaxanta. Tempomatul
                                            adaptiv cu dispozitiv reglabil de limitare a vitezei este conceput pentru a
                                            te mentine in limita de viteza alesa, reducand riscul de a depasi limita de
                                            viteza de pe acel sector de drum. </p>
                                        </p>
                                    </div>
                                </article>
                                <article class="content-column right">
                                    <div class="content">
                                        <h3 class="bigHeading02">
                                            Faci economie de combustibil, nu de distractie
                                        </h3>

                                        <p>

                                        <p>Noul KA+ te ajuta sa reduci la minim frecventa vizitelor la benzinarie. In
                                            primul rand, noul si agilul motor pe benzina, de 1,2 litri, este construit
                                            pentru a imbunatati eficienta, oferind, in acelasi timp, performanta de 70
                                            sau 85 CP. O caracteristica noua pentru KA+, Sistemul Auto-Start-Stop
                                            opreste motorul atunci cand astepti in coloana sau la semafor, de indata ce
                                            esti gata sa pleci de pe loc, apasa, ca de obicei, pe pedala de ambreiaj si
                                            selecteaza prima treapta de viteza, iar sistemul porneste din nou motorul.
                                            De fapt, eficienta este incorporata: anvelope cu rezistenta redusa la
                                            rulare, design aerodinamic, ulei de motor proiectat pentru a reduce forta de
                                            frecare... fiecare detaliu este conceput pentru a reduce consumul de
                                            combustibil.
                                            <br>

                                        </p>

                                        <div></div>
                                        </p>
                                    </div>
                                    <div class="img-column"><img
                                            src="/assets/img/ka-plus/1214559170460.jpg"
                                            alt="Utilizeaza la maximum fiecare litru de combustibil"/><span
                                            class="fv-overlay-icon"></span></div>
                                </article>
                                <article class="content-column left">
                                    <div class="img-column"><img
                                            src="/assets/img/ka-plus/12145591703733.jpeg"
                                            alt="Spatiu din belsug pentru toata lumea"/><span
                                            class="fv-overlay-icon"></span></div>
                                    <div class="content">
                                        <h3 class="bigHeading02">
                                            Pret minim. Confort.
                                        </h3>

                                        <p>

                                        <p>Noul KA+ este compact, dar ofera spatiu pentru cinci adulti. Si este
                                            disponibil cu o gama impresionanta de tehnologii inteligente, toate avand
                                            scopul de a-ti face viata mai usoara. Accesul convenabil fara cheie este
                                            doar un exemplu in acest sens. Te vei bucura, de asemenea, de sistemul SYNC
                                            3, care te ajuta sa fii conectat in permanenta, permitandu-ti sa controlezi
                                            telefonul si muzica cu ajutorul unor comenzi vocale intuitive. Sistemul se
                                            conecteaza, de asemenea, si CarPlay de la Apple si cu Android Auto. Pe
                                            deasupra, cu ajutorul tehnologiei AppLink, poti sa accezi unele dintre
                                            aplicatiile tale preferate de pe telefonul mobil. </p>
                                        </p>
                                    </div>
                                </article>
                                <article class="content-column right">
                                    <div class="content">
                                        <h3 class="bigHeading02">
                                            Te mentine in siguranta
                                        </h3>

                                        <p>

                                        <p>Noul KA+ foloseste sisteme de siguranta inteligente, concepute pentru a te
                                            proteja atat pe tine si pasagerii tai, cat si vehiculul. Controlul
                                            electronic al stabilitatii va monitorizeaza constant deplasarea, iar atunci
                                            cand detecteaza o pierdere a controlului, actioneaza automat franele si
                                            reduce cuplul, pentru a iti mentine traiectoria. Iar pentru ca anvelopele
                                            umflate insuficient reduc controlul si maresc consumul de combustibil, noul
                                            KA+ are, de asemenea, un Sistem de monitorizare a presiunii din pneuri,
                                            pentru a te atentiona atunci cand pneurile tale trebuie sa fie umflate.
                                            <br>

                                        </p>

                                        <div></div>
                                        </p>
                                    </div>
                                    <div class="img-column"><img
                                            src="/assets/img/ka-plus/12145591704600.jpeg"
                                            alt="Utilizeaza la maximum fiecare litru de combustibil"/><span
                                            class="fv-overlay-icon"></span></div>
                                </article>
                            </div>

                        </div>
                    </div>
                </li>

                <li><a href="/Autoturisme/ka-plus/Galerie#primaryTabs">Galerie</a></li>

                <li><a href="/Autoturisme/ka-plus/Dotari#primaryTabs">Dotari</a></li>
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
<script id="TagIT.load" defer></script>
</div>
