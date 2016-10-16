<script type="text/javascript">
    // mobile sniffer
    ForceRedirectUserAgents = 'android,iphone,blackberry';
    ForceRedirectUserAgentsBypass = 'Win64,Win32';
    ForceRedirectMinWidth = '480';
    MobileHomePageRedirectURL = 'Caracteristici\/\/m.ford.ro';
    MobileRedirectURL = MobileHomePageRedirectURL + '/prezentare';
</script>
<div id="xAxis-detailed">
    <nav class="breadCrumb visuallyhidden" role="navigation">
        <ul itemprop="breadcrumb">
            <li class="home"><a href="/" data-selenium="breadcrumb_home" class="om_bc_li" title="Pagina principal&#259;">Pagina principal&#259;</a><span></span></li><li data-selenium="breadcrumb_cars"><a href="/Autoturisme" class="om_bc_li">
                    Autoturisme
                </a><span></span></li><li data-selenium="breadcrumb_nameplate">C-MAX</li></ul>
    </nav>
    <script>
        var vehicleimagepackpresid = '1205084295775';
        var vehicleimagepackyear = 'NONE';
    </script>
    <div class="fblike-locale">en_RO</div>
    <script>
        var googleAdServerNameplateId = 'AUTHORED';
        var googleAdServerNameplateName = 'C-MAX';
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
            ]}}, "brand": "Ford", "vehicleType": "PV", "catalogId": "NONE", "nameplate": "C-MAX", "labelAvailableFrom": "&nbsp;", "formattedCurrency": "", "nameplateText": "Cu un nou design reproiectat complet, Ford C-MAX cu 5 locuri \u015Fi Grand C-MAX cu 7 locuri reprezint\u0103 combina\u0163ia perfect\u0103 dintre inova\u0163ie, stil \u015Fi flexibilitate.", "imagePack": false, "hideVehicleImage": false, "facebookImagePath": "", "facebookAppId": "facebookAppId", "images": [], "billBoardImagePath": null, "backgroundImagePath": ["/assets/img/c_max/1214493076517.jpg", "null", "null"], "disclaimerTextColor": [null, null, null], "current": true, "cid": "1205084251905", "cta": [
                {"linkTitle": "DESCARC\u0102 BRO\u015EUR\u0102 ", "linkURL": "\/SBE\/BrosuriSiPreturi", "linkType": "primary", "linkTarget": "_blank", "omid": "va"},
                {"linkTitle": "\u00CENSCRIE-TE LA TEST DRIVE ", "linkURL": "\/SBE\/TestDrive\/TestDriveAutoturisme?shopcode=AUTHORED&derivcode=AUTHORED", "linkType": "tertiary", "linkTarget": "_blank", "omid": "tr"}
            ], "social": {"facebook": "https://facebook.com", "facebookPage": "fordromania"}, "disclaimer": "Modelul prezentat este Noul C-MAX", "seriesCode": "AUTHORED", "uscCode": "AUTHORED", "presId": "1205084295775", "promos": [], "idf": {"options": []}}
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
                    style="background-image:url(/assets/img/c_max/1214493076517.jpg)">
                    <div class="layered-nameplate-image">
                        <div class="image-holder">
                        </div>
                    </div>
                    <aside class="nameplate-disclaimer ">
                        Modelul prezentat este Noul C-MAX
                    </aside>
                </li>
            </ul>
            <div itemscope itemtype="http://schema.org/Product" id="nameplateDetails" class="nameplate-vehicle">
                <!--the text description-->
                <div class="name-plate-text">
                    <p class="intro"> Noul</p>

                    <h1 class="bigHeading">
                        <span data-selenium="XA_namePlate" itemprop="member" class="nameplate boldTxt">C-MAX</span>
                        <span data-selenium="XA_model" itemprop="model" itemscope
                              itemtype="http://schema.org/Organization" class="mark">Ford</span>
                        <!--The price -->
                    </h1>
                    <!--The blurb -->
                    <p class="blurb">
                        Cu un nou design reproiectat complet, Ford C-MAX cu 5 locuri şi Grand C-MAX cu 7 locuri
                        reprezintă combinaţia perfectă dintre inovaţie, stil şi flexibilitate.
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
<!--  tabUrl /cs/ContentServer?cid=1205084251905&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="/Autoturisme/NoulC-MAX" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205084251905&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE">Prezentare</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205084252043 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205084251905&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205087862858&amp;tabName=PreturiSiPromotii&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="PreturiSiPromotii#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205084251905&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205087862858&amp;tabName=PreturiSiPromotii&amp;c=Page&amp;site=RORO4_ENGINE">Preturi
        si promotii</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205087862917 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205084251905&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205084252407&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="Design#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205084251905&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205084252407&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE">Design</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205084251878 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205084251905&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205084251715&amp;tabName=Caracteristici&amp;c=Page&amp;site=RORO4_ENGINE -->
<!-- IntoID ::: articleAssetId -->
<li class="selected"><a href="Caracteristici#primaryTabs"
                        data-ajaxlink="/cs/ContentServer?cid=1205084251905&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205084251715&amp;tabName=Caracteristici&amp;c=Page&amp;site=RORO4_ENGINE">Caracteristici</a>
<!--This is where the main content for the selected tab will go -->
<!-- secondary tabs -->
<div class="secondary-tabs tab-content">
<nav class="sub-nav">
    <ul>
        <li><a href='#tab1' class='omt_tabName'>Experienta la volan</a></li>
        <li><a href='#tab2' class='omt_tabName'>Performanta si eficienta</a></li>
        <li><a href='#tab3' class='omt_tabName'>Siguranta si Securitate</a></li>
    </ul>
</nav>
<!-- isBtfTab : from MidPageTabs true -->
<div class="innertab-wrapper">
    <!--  tabTitle : Experienta la volan :: btfTabContent : 1205084252226 :: tabContent :  -->
    <div id='tab1' class="secondary-tab-content">
        <header class="intro-header">
            <h1 class="bigHeading">
                TEHNOLOGII AVANSATE LA COMANDA TA
            </h1>
            <span class="highlighter"></span>

            <p class="intro-text">

            <p>Noile C-MAX si Grand C-MAX sunt echipate cu numeroase tehnologii care au un singur scop: sa iti ofere o
                experienta cat mai confortabila si sigura cu putinta. <br> <br> Descopera, asadar, o gama larga de
                tehnologii remarcabile, simplu de utilizat sau care, pur si simplu, lucreaza pentru tine.</p>
            </p>
        </header>
        <article class="content-column left">
            <div class="img-column"> <img
                        src="/assets/img/c_max/1214493076898.jpg" alt="Un hayon practic, hands-free."/><span
                        class="fv-overlay-icon"></span></div>
            <div class="content">
                <h3 class="bigHeading02">
                    Un hayon care se deschide si se inchide automat
                </h3>

                <p>

                <p>Hayonul cu deschidere hands-free este esential atunci cand ai mainile ocupate. Atat timp cat ai la
                    tine tocul cheii KeyFree (in geanta sau in buzunar) nu trebuie decat sa misti piciorul sub bara de
                    protectie din spate a masinii si hayonul se va deschide si se va inchide automat.</p>
                </p>
            </div>
        </article>
        <article class='two-column'>
            <div class="content-block">
               <img
                        src="/assets/img/c_max/1214493075395.jpg"
                        alt="Ford SYNC 2: pentru control hands-free asupra muzicii, apelurilor, mesajelor text, aplicatiilor si nu numai."/><span
                        class="fv-overlay-icon"></span>

                <h3 class="bigHeading02">
                    Cea mai recenta tehnologie hands-free
                </h3>

                <p>

                <p>Sistemul optional Ford SYNC 2 cu comanda vocala si ecran tactil color de 8&rdquo; duce sistemul de
                    informatii si divertisment la un nivel superior. Afisajul de inalta rezolutie iti ofera control
                    intuitiv asupra mai multor functii cheie, inclusiv telefon, sistem audio, climatizare si, optional,
                    navigatie, prin intermediul vocii sau al atingerii. Multumita tehnologiei Ford AppLink, poti, de
                    asemenea, sa accesezi din mers aplicatiile tale preferate de pe smartphone.</p>
                </p>
            </div>
            <div class="content-block last">
                <img
                        src="/assets/img/c_max/1214493076652.jpg"
                        alt="Sistem de asistenta activa la parcare pentru o parcare fara stres."/><span
                        class="fv-overlay-icon"></span>

                <h3 class="bigHeading02">
                    Parcare si mai usoara
                </h3>

                <p>

                <p>Tehnologia de asistenta activa la parcare te ajuta sa parchezi fara ajutorul mainilor in locuri de
                    parcare dispuse paralel, usurandu-ti, de asemenea, parcarea si in spatii dispuse perpendicular
                    (precum parcarile cu mai multe etaje). Tehnologia poate detecta un spatiu, controland apoi directia
                    in timp ce tu rulezi cu spatele pentru a ocupa locul. Sistemul de asistenta la parcarea laterala te
                    avertizeaza cu privire la orice obstacol, iar sistemul de asistenta la iesirea din parcare este
                    proiectat pentru a te ajuta sa iesi din cele mai inguste spatii.</p>
                </p>
            </div>
        </article>
        <article class='three-column'>
            <div class="content-block">
                <img
                        src="/assets/img/c_max/1214493076095.jpg"
                        alt="Tempomat adaptiv, pentru a te ajuta sa pastrezi o distanta de siguranta fata de vehiculul din fata."/><span
                        class="fv-overlay-icon"></span>

                <h3 class="bigHeading02">
                    Tempomat care se poate adapta automat
                </h3>

                <p>

                <p>Cu ajutorul tehnologiei Tempomat adaptiv, alegi viteza cu care doresti sa te deplasezi, iar sistemul
                    o va mentine constanta. Daca senzorul RADAR incorporat detecteaza un vehicul in fata, acesta va
                    incetini masina pentru a mentine o distanta prestabilita. De indata ce drumul din fata este liber,
                    sistemul va accelera pana la viteza aleasa.</p>
                </p>
            </div>
            <div class="content-block">
                <img
                        src="/assets/img/c_max/1214493075834.jpg"
                        alt="Configurare flexibila a scaunelor cu Grand C-MAX."/><span
                        class="fv-overlay-icon"></span>

                <h3 class="bigHeading02">
                    Scaune confortabile, flexibile, complet rabatabile
                </h3>

                <p>

                <p>C-MAX poate transporta o familie de cinci persoane in conditii de confort, avand trei scaune
                    individuale in spate, capabile sa se rabateze complet, pentru a maximiza spatiul disponibil. Noul
                    Grand C-MAX cu sapte locuri iti permite, de asemenea, sa pliezi si sa glisezi scaunul din centru de
                    pe al doilea rand sub scaunul din partea dreapta. Aceasta dispunere ingenioasa 2+2+2 iti ofera
                    posibilitatea de a crea un coridor de trecere pentru acces facil.</p>
                </p>
            </div>
            <div class="content-block last">
               <img
                        src="/assets/img/c_max/1214493075312.jpg" alt="Grand C-MAX cu usi spate duble, glisante."/><span
                        class="fv-overlay-icon"></span>

                <h3 class="bigHeading02">
                    Acces facil, pretutindeni
                </h3>

                <p>

                <p>Usile din spate unice, glisante si duble, faciliteaza urcarea si coborarea pasagerilor in si din
                    masina. Acest design inteligent previne, de asemenea, lovirea usii, in spatiile de parcare
                    inguste.</p>
                </p>
            </div>
        </article>
    </div>
    <!--  tabTitle : Performanta si eficienta :: btfTabContent : 1205084251523 :: tabContent :  -->
    <div id='tab2' class="secondary-tab-content">
        <header class="intro-header">
            <h1 class="bigHeading">
                PERFORMANTA DE CARE TE VEI BUCURA LA MAXIMUM <br><br> EFICIENTA PE CARE O VEI APRECIA
            </h1>
            <span class="highlighter"></span>

            <p class="intro-text">

            <p>Noile C-MAX si Grand C-MAX isi trag puterea dintr-o gama de motoare avansate si foarte eficiente. <br>
                <br> Benzina sau motorina? Tu alegi. Cu o gama larga de capacitati si randamente de putere diferite, cu
                siguranta vei gasi motorul care sa raspunda perfect nevoilor tale.</p>
            </p>
        </header>
        <article class="content-column left">
            <div class="img-column"> <img
                        src="/assets/img/c_max/1214493076562.jpg"
                        alt="Motorul EcoBoost de 1,5 litri: putere si eficienta fara compromis."/><span
                        class="fv-overlay-icon"></span></div>
            <div class="content">
                <h3 class="bigHeading02">
                    Profiti la maximum de motor
                </h3>

                <p>

                <p>Motorul revolutionar pe benzina EcoBoost de 1 litru, cu 3 cilindri, dezvolta 125 CP si prezinta un
                    nivel de emisii de CO<sub>2</sub> de numai 117 g/km pentru varianta Compact si de 110 g/km pentru
                    varianta Grand. Aceasta este puterea la care te-ai astepta de la un motor obisnuit de 1,6 litri,
                    insa cu un consum mai redus de combustibil si un nivel al emisiilor de CO<sub>2</sub> mai scazut.
                    Motorul international al anului timp de trei ani consecutiv. <br> <br> <strong>Putere si eficienta
                        fara compromis </strong><br> Motorul EcoBoost de 1,5 litri pe benzina este o noua adaugire la
                    gama EcoBoost. Motorul a fost redus in mod inteligent de la modelul EcoBoost de 1,6 litri, pentru a
                    asigura un nivel mai redus al emisiilor si o economie de combustibil mai mare&hellip; fara a
                    compromite puterea si manevrabilitatea. Disponibil in: variante de 150 CP cu transmisie automata si
                    cu transmisie manuala cu 6 trepte de viteze sau de 182 CP cu transmisie automata.</p>
                </p>
            </div>
        </article>
        <article class='two-column'>
            <div class="content-block">
                <img
                        src="/assets/img/c_max/1214493075656.jpg"
                        alt="Motor diesel TDCi de 1,5 litri: 120 CP cu emisii reduse"/><span
                        class="fv-overlay-icon"></span>

                <h3 class="bigHeading02">
                    O noua optiune de motor diesel
                </h3>

                <p>

                <p>Motorul TDCi de 1,5 litri este un motor cu totul nou. Avand la baza motorul TDCi de 1,6 litri, acesta
                    dezvolta aceeasi putere la primul nivel din gama, si anume 95 CP, si un nivel mai mare de putere,
                    120 CP (de la 115 CP). De asemenea, maximizeaza economia de combustibil si minimizeaza emisiile.
                    Acest motor este disponibil, in prezent, cu o transmisie manuala cu 6 trepte de viteza si ca
                    varianta de 120 CP cu transmisie automata.</p>
                </p>
            </div>
            <div class="content-block last">
                <img
                        src="/assets/img/c_max/1214493076735.jpg"
                        alt="Motor diesel TDCi de 2,0 litri pentru un pus de putere si eficienta maxima."/><span
                        class="fv-overlay-icon"></span>

                <h3 class="bigHeading02">
                    Putere diesel cu emisii reduse
                </h3>

                <p>

                <p>Motorul diesel de 2,0 litri este, de asemenea, nou si poate dezvolta 150 CP cu transmisie automata si
                    cu transmisie manuala cu 6 trepte de viteze sau 170 CP cu transmisie automata.</p>
                </p>
            </div>
        </article>
    </div>
    <!--  tabTitle : Siguranta si Securitate :: btfTabContent : 1205084253559 :: tabContent :  -->
    <div id='tab3' class="secondary-tab-content">
        <header class="intro-header">
            <h1 class="bigHeading">
                CEL MAI RIDICAT NIVEL DE SIGURANTA
            </h1>
            <span class="highlighter"></span>

            <p class="intro-text">

            <p>Te poti baza pe un pachet complet de masuri de siguranta, <br> toate fiind concepute pentru a-ti asigura
                protectie maxima <br> tie si pasagerilor tai.</p>
            </p>
        </header>
        <article class="content-column left">
            <div class="img-column"> <img
                        src="/assets/img/c_max/1214493076262.jpg"
                        alt="Punctaj maxim de 5 stele la testele de siguranta Euro NCAP."/><span
                        class="fv-overlay-icon"></span></div>
            <div class="content">
                <h3 class="bigHeading02">
                    Premii Advanced pentru inovare in domeniul sigurantei
                </h3>

                <p>

                <p>Noile C-MAX si Grand C-MAX sunt echipate cu tehnologii care au primit in trecut premii Euro NCAP
                    Advanced, cea mai inalta distinctie oferita de prestigioasa organizatie independenta din Europa pe
                    probleme de siguranta. Premiile recunosc doar cele mai avansate tehnologii pentru evitarea
                    coliziunii, pentru coliziune si post-coliziune disponibile intr-o masina si includ sistemul Active
                    City Stop, sistemul de asistenta la pastrarea benzii si sistemul de avertizare a soferului.<br> <br>
                    <span style="font-size: smaller;">*Acordat initial noului Ford Focus. </span></p>
                </p>
            </div>
        </article>
        <article class="content-column right">
            <div class="content">
                <h3 class="bigHeading02">
                    Ford SYNC cu Asistenta de urgenta
                </h3>

                <p>

                <p>Un aspect important al tehnologiei Ford SYNC care iti poate salva viata este Asistenta de urgenta. in
                    cazul unui accident, cand se activeaza airbagul sau se dezactiveaza pompa de carburant, tehnologia
                    poate efectua automat un apel direct catre Serviciile de urgenta in locul tau. Daca este cazul, poti
                    alege sa intrerupi apelul sau sa discuti personal, daca este necesar. Un aspect extrem de important
                    este faptul ca sistemul va furniza informatii, precum coordonatele tale GPS, chiar si atunci cand
                    ti-ai pierdut cunostinta.* <br> <br> <span style="font-size: smaller;">*Asistenta de urgenta Ford functioneaza in peste 30 de tari din Europa. Aceasta caracteristica functioneaza atunci cand este conectata cu un telefon mobil compatibil pe care il ai la dumneavoastra, in momentul in care un airbag este declansat (cu exceptia airbagurilor pentru genunchi) sau atunci cand un senzor care inregistreaza o coliziune intrerupe pompa de combustibil. Functia de mesagerie si Asistenta de urgenta nu sunt disponibile in toate limbile europene.</span>
                </p>
                </p>
            </div>
            <div class="img-column"> <img
                        src="/assets/img/c_max/1214493076815.jpg"
                        alt="Ajutor la apelarea serviciilor de urgenta cu Asistenta de urgenta Ford."/><span
                        class="fv-overlay-icon"></span></div>
        </article>
        <article class='two-column'>
            <div class="content-block">
                <img
                        src="/assets/img/c_max/1214493075917.jpg"
                        alt="Stabilitate si control maxime cu sistemul de Control electronic al stabilitatii."/><span
                        class="fv-overlay-icon"></span>

                <h3 class="bigHeading02">
                    Ofera incredere chiar si in conditii dificile
                </h3>

                <p>

                <p>Masina este prevazuta cu un sistem de Control Electronic al Stabilitatii (ESP), care include o serie
                    de tehnologii concepute pentru a te ajuta sa mentii controlul. Senzorii detecteaza orice schimbari
                    bruste de directie, franare sau comportament al vehiculului care te-ar putea face sa pierzi
                    controlul, pentru ca apoi ESP sa ajusteze precis viteza fiecarei roti in parte, facand masina mai
                    stabila si ajutand la prevenirea alunecarii. Caracteristicile ESP includ asistenta la pornirea in
                    rampa, asistenta la franarea de urgenta si pre-activarea electronica a franelor.</p>
                </p>
            </div>
            <div class="content-block last">
                <img
                        src="/assets/img/c_max/1214493076352.jpg"
                        alt="Asistenta pre-coliziune ajuta la evitarea accidentelor."/><span
                        class="fv-overlay-icon"></span>

                <h3 class="bigHeading02">
                    Sistemul de asistenta pre-coliziune
                </h3>

                <p>

                <p>Sistemul de asistenta pre-coliziune detecteaza obiectele in miscare indiferent de viteza cu care te
                    deplasezi. In cazul in care sistemul determina ca o coliziune este probabila si nu detecteaza nicio
                    reactie din partea ta, mai intai emite semnale luminoase si acustice, apoi actioneaza frana.</p>
                </p>
            </div>
        </article>
    </div>
    <!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
    <!-- BEGIN [MidPageTabs] -->
    <!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Experienta la volan</a></h2> -->
    <!--</div>-->
    <!--<div id='tab2' class="mp-tab-wrapper">
<h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">Performanta si eficienta</a></h2> -->
    <!--</div>-->
    <!--<div id='tab3' class="mp-tab-wrapper">
<h2><a href='#tab3' class="mp-tab omt_xd_mt_ti">Siguranta si Securitate</a></h2> -->
    <!--</div>-->
    <!-- END [MidPageTabs] -->
    <!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
    <!-- BEGIN [MidPageTabs] -->
    <!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Experienta la volan</a></h2> -->
    <!--</div>-->
    <!--<div id='tab2' class="mp-tab-wrapper">
<h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">Performanta si eficienta</a></h2> -->
    <!--</div>-->
    <!--<div id='tab3' class="mp-tab-wrapper">
<h2><a href='#tab3' class="mp-tab omt_xd_mt_ti">Siguranta si Securitate</a></h2> -->
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
<script id="TagIT.load"></script>
</div>
