
<script type="text/javascript">
    // mobile sniffer
    ForceRedirectUserAgents = 'android,iphone,blackberry';
    ForceRedirectUserAgentsBypass = 'Win64,Win32';
    ForceRedirectMinWidth = '480';
    MobileHomePageRedirectURL = 'Caracteristici.html\/\/m.ford.ro';
</script>
<div id="xAxis-detailed">
    <nav class="breadCrumb visuallyhidden" role="navigation">
        <ul itemprop="breadcrumb">
            <li class="home"><a href="http://www.ford.ro/" data-selenium="breadcrumb_home" class="om_bc_li"
                                title="Pagina principal&#259;">Pagina principal&#259;</a><span></span></li>
            <li data-selenium="breadcrumb_cars"><a href="http://www.ford.ro/Autoturisme" class="om_bc_li">
                    Autoturisme
                </a><span></span></li>
            <li data-selenium="breadcrumb_nameplate">EcoSport</li>
        </ul>
    </nav>
    <script>
        var vehicleimagepackpresid = '1205091200728';
        var vehicleimagepackyear = 'NONE';
    </script>
    <div class="fblike-locale">ro_RO</div>
    <script>
        var googleAdServerNameplateId = 'AUTHORED';
        var googleAdServerNameplateName = 'EcoSport';
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
            {"strIntroToFord": "Iti prezentam Noul", "selector": {"bodystyles": {"options": [
                {}
            ]}, "exteriorImages": {"options": [
                {}
            ]}, "interiorImages": {"options": [
                {}
            ]}}, "brand": "Ford", "vehicleType": "PV", "catalogId": "NONE", "nameplate": "EcoSport", "labelAvailableFrom": "&nbsp;", "formattedCurrency": "", "nameplateText": "Inteligent, compact dar si spatios, puternic dar si eficient din punct de vedere al consumului de combustibil: un SUV adaptat nevoilor tale.", "imagePack": false, "hideVehicleImage": false, "facebookImagePath": "", "facebookAppId": "facebookAppId", "images": [], "billBoardImagePath": null, "backgroundImagePath": ["/assets/img/noul_ecosport/1214507093618.jpg", "null", "null"], "disclaimerTextColor": ["364957", null, null], "current": true, "cid": "1205091149631", "cta": [
                {"linkTitle": "DESCARC\u0102 BRO\u015EUR\u0102 ", "linkURL": "\/SBE\/BrosuriSiPreturi", "linkType": "primary", "linkTarget": "_blank", "omid": "va"},
                {"linkTitle": "\u00CENSCRIE-TE LA TEST DRIVE ", "linkURL": "\/SBE\/TestDrive\/TestDriveAutoturisme?shopcode=AUTHORED&derivcode=AUTHORED", "linkType": "tertiary", "linkTarget": "_blank", "omid": "tr"}
            ], "social": {"facebook": "https://facebook.com", "facebookPage": "fordromania"}, "disclaimer": "Modelul prezentat este un Ford EcoSport", "seriesCode": "AUTHORED", "uscCode": "AUTHORED", "presId": "1205091200728", "promos": [
                {"imagePath": "/assets/img/noul_ecosport/1214553887403.jpg", "overlay": false, "link": "/cs/ContentServer?pagename=RORO4_ENGINE/EP2/common/promo/M48_PromoBlock&c=Promo_C&cid=1205113209435", "text": "Oferta speciala prin programul rabla!"}
            ], "idf": {"options": []}}
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
                    style="background-image:url(http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpg&amp;blobwhere=1214507093618&amp;blobkey=id)">
                    <div class="layered-nameplate-image">
                        <div class="image-holder">
                        </div>
                    </div>
                    <aside class="nameplate-disclaimer style=color:#364957">
                        Modelul prezentat este un Ford EcoSport
                    </aside>
                </li>
            </ul>
            <div itemscope itemtype="http://schema.org/Product" id="nameplateDetails" class="nameplate-vehicle">
                <!--the text description-->
                <div class="name-plate-text">
                    <p class="intro">Iti prezentam Noul</p>

                    <h1 class="bigHeading">
                        <span data-selenium="XA_namePlate" itemprop="member" class="nameplate boldTxt">EcoSport</span>
                        <span data-selenium="XA_model" itemprop="model" itemscope
                              itemtype="http://schema.org/Organization" class="mark">Ford</span>
                        <!--The price -->
                    </h1>
                    <!--The blurb -->
                    <p class="blurb">
                        Inteligent, compact dar si spatios, puternic dar si eficient din punct de vedere al consumului
                        de combustibil: un SUV adaptat nevoilor tale.
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
<section id="promoCarousel" class="promo-carousel box-shadow">
    <div id="promo-carousel-timer">7500</div>
    <div class="slide-wrapper">
        <article class="slate slide">
            <a href='http://www.ford.ro/Promotii/Autoturisme/Rabla/OfertaEcoSport'>
<span class="active-promo-rover">
<span class="bg-opacity"></span>
<span class="link-icon"></span>
</span>
                <img src="/assets/img/noul_ecosport/1214553887403.jpg" alt="Ford Fiesta">

                <p class="promo-carousel-text"><span
                        class="promo-carousel-bold">Oferta speciala prin programul rabla!</span></p></a>
        </article>
    </div>
</section>
<section id="non-js-promoCarousel" class="non-js-promo-carousel box-shadow">
    <div class="slide-wrapper">
        <p class="promo-carousel-text"><a
                href="http://www.ford.ro/cs/ContentServer?pagename=RORO4_ENGINE/EP2/common/promo/M48_PromoBlock&amp;c=Promo_C&amp;cid=Oferta%20speciala%20prin%20programul%20rabla!"
                target="_blank">Ford Fiesta</a></p>
    </div>
</section>
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
<!--  tabUrl /cs/ContentServer?cid=1205091149631&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="prezentare_generala.php#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205091149631&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE">Prezentare
        generala</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205091148573 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205091149631&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205096191903&amp;tabName=PreturiSiPromotii&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="preturi_si_promotii.php#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205091149631&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205096191903&amp;tabName=PreturiSiPromotii&amp;c=Page&amp;site=RORO4_ENGINE">Preturi
        Si Promotii</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205096189788 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205091149631&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205091148891&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="design.php#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205091149631&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205091148891&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE">Design</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205091148864 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205091149631&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205091148170&amp;tabName=Caracteristici&amp;c=Page&amp;site=RORO4_ENGINE -->
<!-- IntoID ::: articleAssetId -->
<li class="selected"><a href="caracteristici.php#primaryTabs"
                        data-ajaxlink="/cs/ContentServer?cid=1205091149631&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205091148170&amp;tabName=Caracteristici&amp;c=Page&amp;site=RORO4_ENGINE">Caracteristici</a>
<!--This is where the main content for the selected tab will go -->
<!-- secondary tabs -->
<div class="secondary-tabs tab-content">
<nav class="sub-nav">
    <ul>
        <li><a href='#tab1' class='omt_tabName'>Experienta la volan</a></li>
        <li><a href='#tab2' class='omt_tabName'>Performanta si eficienta</a></li>
        <li><a href='#tab3' class='omt_tabName'>Confort si avantaje</a></li>
        <li><a href='#tab4' class='omt_tabName'>Siguranta si securitate</a></li>
        <li><a href='#tab5' class='omt_tabName'>Utilitate</a></li>
    </ul>
</nav>
<!-- isBtfTab : from MidPageTabs true -->
<div class="innertab-wrapper">
<!--  tabTitle : Experienta la volan :: btfTabContent : 1205091148181 :: tabContent :  -->
<div id='tab1' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            TEHNOLOGII CARE VI SE POTRIVESC
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Tehnologiile remarcabile Ford sunt create pentru a servi necesitatilor tale dintre cele mai diverse. Iar
            toate caracteristicile si sistemele exista pentru a te tine conectat si antrenat, precum si pentru a-ti face
            viata mai usoara.</p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"><img
                    src="/assets/img/noul_ecosport/1214507093899.jpg"
                    alt="Searing Wheel Controls "/><span class="fv-overlay-icon"></span>
        </div>
        <div class="content">
            <h3 class="bigHeading02">
                Tehnologia avansata hands-free
            </h3>

            <p>

            <p>Ford SYNC iti permite sa controlezi muzica si sa initiezi si sa preiei apeluri de pe telefonul mobil,
                utilizand comenzi vocale directe si simple. Poti utiliza comenzi vocale pentru a reda muzica de pe un
                dispozitiv USB, MP3/iPod<sup>&reg;</sup> sau de pe un telefon compatibil cu Bluetooth<sup>&reg;</sup>.
                In plus, sistemul reda chiar si mesajele text pe care le primesti. (Dotare optionala in intreaga gama.)
            </p>
            </br>
            <p><span style="font-size: smaller;">*Marca si siglele Bluetooth<sup>&reg;</sup> sunt oferite si detinute de Bluetooth SIG Inc si orice utilizare a acestor marci de catre Ford Motor Company Limited si de catre companiile sale partenere se face in baza unei licente. Alte marci inregistrate si denumiri comerciale apartin proprietarilor acestora.</span>
            </p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Un plus de control in cazul pornirilor in rampa
            </h3>

            <p>

            <p>Alege transmisia automata si ai asigurat sistemul de asistenta la pornirea din rampa, care impiedica
                temporar rularea inapoi a vehiculului. Sistemul functioneaza prin mentinerea presiunii la nivelul
                sistemului de franare pentru un interval suplimentar de 2,5 secunde, asigurandu-ti mai mult timp si
                control atunci cand muti piciorul de pe pedala de frana, pe cea de acceleratie. Aceasta tehnologie este,
                de asemenea, utila atunci cand opresti si pornesti autovehiculul pe suprafete alunecoase.</p>
            </p>
        </div>
        <div class="img-column"> <img
                    src="/assets/img/noul_ecosport/1214507094231.jpg"
                    alt=" Asistenta la pornirea in rampa"/><span class="fv-overlay-icon"></span></div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_ecosport/1214507093653.jpg"
                    alt="Senzori spate pentru parcare"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Senzori care faciliteaza parcarea cu spatele
            </h3>

            <p>

            <p>Senzorii de parcare te ajuta sa determini distanta dintre vehiculul tau si orice fel de obstacol din
                spatele acestuia. Atunci cand detecteaza un obiect, senzorii emit o avertizare sonora, care se
                intensifica cu cat te apropii mai mult de obstacol.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/noul_ecosport/1214507094068.jpg"
                    alt="Pilot automat"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Drumuri mai putin obositoare, calatorii mai economice
            </h3>

            <p>

            <p>Pilotul automat te ajuta sa mentii masina in limita de viteza prestabilita de tine, pentru a-ti oferi un
                condus mai relaxat in timpul calatoriilor lungi, pe autostrada. Pe langa minimizarea posibilitatii de a
                depasi limita de viteza, sistemul te poate ajuta, de asemenea, sa economisesti combustibil. (Dotare
                optionala numai pentru Titanium.)</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
           <img
                    src="/assets/img/noul_ecosport/1214507096486.jpg"
                    alt="Lumini distinctive cu LED"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Lumini cu LED
            </h3>

            <p>

            <p>Luminile distinctive, de efect, cu LED, contribuie la aspectul atractiv al EcoSport, dand nastere unei
                prezente impunatoare si usor de recunoscut pe sosea.</p>
            </p>
        </div>
        <div class="content-block">
           <img
                    src="/assets/img/noul_ecosport/1214507094571.jpg"
                    alt="Indicator pentru schimbarea treptei de viteza"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Schimbari ale treptelor de viteza mai eficiente pentru consumul de combustibil
            </h3>

            <p>

            <p>Un indicator luminos de pe panoul de bord iti indica momentul optim de schimbare a treptei de viteza,
                pentru eficienta maxima a consumului de combustibil. Aceasta reprezinta o modalitate simpla si la
                indemana de a asigura deplasari cat mai economice.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/noul_ecosport/1214507095845.jpg"
                    alt="Computer de bord"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Informatii esentiale despre calatorie
            </h3>

            <p>

            <p>Computerul de bord iti ofera detalii si informatii utile in legatura cu distanta parcursa, consumul de
                combustibil, viteza si temperatura din exterior. De asemenea, acesta precizeaza ce distanta puteti
                parcurge cu nivelul de combustibil ramas in rezervor.</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Performanta si eficienta :: btfTabContent : 1205091147454 :: tabContent :  -->
<div id='tab2' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            PERFORMANTA SI EFICIENTA: TE BUCURI DE AMANDOUA
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Motor pe benzina sau pe motorina? Indiferent de optiunea aleasa, ai garantate performanta, puterea si
            economia. Forma aerodinamica a caroseriei masinii si detaliile de design, precum micul spoiler vertical de
            pe stalpul din spate, se combina pentru imbunatatirea coeficientului aerodinamic. Rezultatul este o
            rezistenta redusa a aerului si un consum eficient de combustibil.</p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"><img
                    src="/assets/img/noul_ecosport/1214507094397.jpg"
                    alt="EcoBoost 1.0"/><span class="fv-overlay-icon"></span></div>
        <div class="content">
            <h3 class="bigHeading02">
                Fiecare picatura de combustibil ofera mai mult
            </h3>

            <p>

            <p>Motorul revolutionar pe benzina EcoBoost 1,0 litri, cu 3 cilindri, iti asigura puterea la care te-ai
                astepta de la un motor de 1,6 litri conventional (pana la 125 CP), insa utilizeaza cu pana la 24% mai
                putin combustibil, cu emisii de CO<sub>2 </sub>cu 25% mai reduse, de numai 125 g/km. Nu este de mirare
                ca EcoBoost a primit premiul Motorul International al Anului pentru un numar record de patru ani
                consecutivi.</p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Putere diesel
            </h3>

            <p>

            <p>Optiunea DV5 1,5 litri pe motorina va pune la dispozitie o putere de pana la 95 CP, dar si eficienta a
                consumului de 4,4l/100 km. Acest propulsor este disponibil cu o transmisie manuala cu 5 trepte de
                viteza, care genereaza atat un cuplu de torsiune motor mai mare (pentru schimbarea mai rara a treptei de
                viteza si putere de tractiune exceptionala), cat si emisii de CO<sub>2</sub> de numai 115 g/km.</p>
            </p>
        </div>
        <div class="img-column"><img
                    src="/assets/img/noul_ecosport/1214507094986.jpg"
                    alt="Ford 1.5-litre DV5 Diesel Engine "/><span class="fv-overlay-icon"></span></div>
    </article>
</div>
<!--  tabTitle : Confort si avantaje :: btfTabContent : 1205091148728 :: tabContent :  -->
<div id='tab3' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            ADAPTAT NEVOILOR TALE
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Designul inteligent permite folosirea ingenioasa a fiecarui milimetru de spatiu, maximizand utilitatea si
            confortul intr-un vehicul compact.</p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"><img
                    src="/assets/img/noul_ecosport/1214507096296.jpg"
                    alt="EcoSport Seating Position "/><span class="fv-overlay-icon"></span></div>
        <div class="content">
            <h3 class="bigHeading02">
                Scaune comode, intotdeauna cu o perspectiva excelenta
            </h3>

            <p>

            <p>Scaunul soferului dispune de suport lombar integrat si este reglabil in 6 directii, facilitand gasirea si
                stabilirea pozitiei ideale de condus. Scaunele soferului si pasagerului din fata pot fi, de asemenea,
                incalzite. Pasagerii pot, de asemenea, sa-si aplece scaunele inainte si inapoi pentru a gasi pozitia cea
                mai comoda. Iar fiecare se bucura de o perspectiva superioara asupra drumului.</p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Sistemul Key-free inseamna mai putine griji
            </h3>

            <p>

            <p>Cand va apropiati de masina, sistemul Ford KeyFree detecteaza imediat cheia cu telecomanda, chiar daca se
                afla in buzunar sau in geanta. Usile se descuie, iar dupa ce va asezati, nu este nevoie de vreo cheie de
                contact. Apasati ambreiajul, actionati butonul de pornire Ford Power si motorul prinde viata.</p>
            </p>
        </div>
        <div class="img-column"> <img
                    src="/assets/img/noul_ecosport/1214507095921.jpg"
                    alt="Sistemul Ford Key-Free"/><span class="fv-overlay-icon"></span></div>
    </article>
    <article class="content-column left">
        <div class="img-column"> <img
                    src="/assets/img/noul_ecosport/1214507096089.jpg"
                    alt="Steering Wheel controls "/><span class="fv-overlay-icon"></span></div>
        <div class="content">
            <h3 class="bigHeading02">
                Mai mult decat un simplu volan
            </h3>

            <p>

            <p>Un volan perfect echilibrat, cu design ergonomic si imbracat in piele iti confera controlul absolut
                asupra autovehiculului. Iar o serie de comenzi integrate asigura controlul facil al unor functii
                esentiale. </p>
            </p>
        </div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_ecosport/1214507093736.jpg"
                    alt="Torpedou refrigerat"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Un element „cool”
            </h3>

            <p>

            <p>La noul EcoSport, torpedoul are si rol de compartiment de racire cu aer conditionat. In zilele fierbinti,
                poti avea intotdeauna la indemana ceva rece de baut sau de rontait. In torpedou incap pana la sase cutii
                standard de bauturi carbogazoase.</p>
            </p>
        </div>
        <div class="content-block last">
           <img
                    src="/assets/img/noul_ecosport/1214507095575.jpg"
                    alt="Scaune flexibile "/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Scaune flexibile pentru un plus de spatiu
            </h3>

            <p>

            <p>Un raft de depozitare detasabil, plus bancheta din spate fractionara 60:40, cu un sistem ingenios de
                pliere si rabatare: in Ford EcoSport este usor sa faci rapid loc pentru bagaje sau lucruri
                voluminoase.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_ecosport/1214507097319.jpg"
                    alt="Servodirectie Asistata Electric (EPAS)"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Manevre si viraje fara eforturi
            </h3>

            <p>

            <p>Sistemul de directie asistata electric (EPAS) se regleaza pentru a permite virarea mai simpla si mai
                usoara atunci cand parchezi intr-un loc stramt si virarea mai ferma pentru mai mult control pe
                autostrada. Spre deosebire de servodirectia conventionala care functioneaza continuu si consuma energie
                si combustibil, sistemul EPAS functioneaza numai atunci cand este necesar, sporind economia de
                combustibil.</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/noul_ecosport/1214507097654.jpg"
                    alt="Control Electronic Automat al Temperaturii"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Reglati temperatura ideala pentru dumneavoastra si pentru pasager
            </h3>

            <p>

            <p>Cu ajutorul dotarii optionale Control Electronic Automat al Temperaturii (EATC), poti alege temperaturile
                preferate pentru tine si pasagerul din fata, iar sistemul le va mentine cu ajutorul sistemului avansat
                de climatizare.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/noul_ecosport/1214507095496.jpg"
                    alt="EcoSport Storage Compartments "/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Un loc pentru toate obiectele
            </h3>/assets/img/1214484915883.jpg

            <p>

            <p>Designul ingenios asigura spatiu din belsug pentru sofer si pasageri. Acestuia se adauga 20 de
                compartimente de depozitare pentru telefoane cu incarcatoare USB, ochelari de soare, monede, pahare,
                bauturi si gustari.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_ecosport/1214507097150.jpg"
                    alt=" Habitaclu silentios"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Te bucuri de liniste la fiecare calatorie
            </h3>

            <p>

            <p>Materialele antifonice si garniturile de precizie de la geamuri, usi si din caroserie contribuie la o
                izolare acustica de exceptie a Ford EcoSport.</p>
            </p>
        </div>
        <div class="content-block">
           <img
                    src="/assets/img/noul_ecosport/1214507093989.jpg"
                    alt="EcoSport Heated Windscreen"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Parbriz incalzit
            </h3>

            <p>

            <p>Aceasta dotare inteligenta este creata pentru a-ti permite sa pornesti rapid in diminetile geroase. Nu
                trebuie decat sa atingi un buton si filamente extrem de subtiri se supraincalzesc pentru a curata
                parbrizul de gheata, ceata si abur, precum si pentru a ajuta la dezghetarea stergatoarelor. Sistemul
                actioneaza in cateva secunde, chiar si la temperaturi negative.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/noul_ecosport/1214507094740.jpg"
                    alt="EcoSport Heated Wing Mirror "/><span class="fv-overlay-icon"></span>
            <h3 class="bigHeading02">
                Oglinzi exterioare incalzite
            </h3>

            <p>

            <p>La fel ca parbrizul incalzit, un sistem similar ajuta si la curatarea oglinzilor laterale.</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Siguranta si securitate :: btfTabContent : 1205091149554 :: tabContent :  -->
<div id='tab4' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            SIGURANTA SI SECURITATE PE CARE TE POTI BAZA
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Indiferent daca esti sofer sau pasager, poti fi sigur ca un pachet complet de masuri de siguranta a fost
            conceput pentru a te proteja. EcoSport este echipat cu masuri de siguranta care ajuta la mentinerea masinii
            (si a obiectelor de valoare) in siguranta, departe de hoti.</p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"> <img
                    src="/assets/img/noul_ecosport/1214507097813.jpg"
                    alt="Sistem de airbaguri"/><span class="fv-overlay-icon"></span></div>
        <div class="content">
            <h3 class="bigHeading02">
                Airbaguri
            </h3>

            <p>

            <p>Noul Ford EcoSport este prevazut cu airbag pentru sofer, pasager, airbaguri tip cortina si laterale,
                precum si un airbag la genunchii soferului – toate in dotarea standard. De asemenea, senzori avansati
                sunt pozitionati in puncte cheie, pentru a asigura o reactie rapida si controlata.</p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Ford SYNC cu Asistenta de urgenta
            </h3>

            <p>

            <p>Un aspect important al tehnologiei Ford SYNC care iti poate salva viata este Asistenta de urgenta. In
                cazul putin probabil al unui accident, atunci cand se activeaza airbagul sau se dezactiveaza pompa de
                carburant, tehnologia poate efectua automat un apel direct catre serviciile de urgenta. Un aspect extrem
                de important este faptul ca sistemul va furniza informatii esentiale, precum coordonatele tale GPS,
                chiar si atunci cand ti-ai pierdut cunostinta.*</p>
            </br>
            <p><span style="font-size: smaller;">*Asistenta de urgenta Ford opereaza in peste 30 de tari din Europa. Aceasta dotare functioneaza atunci cand este conectata cu un telefon mobil compatibil pe care il ai la tine, in momentul in care un airbag este declansat (cu exceptia airbagurilor pentru genunchi) sau atunci cand un senzor care inregistreaza o defectiune intrerupe pompa de combustibil. Functia de mesagerie si Asistenta de urgenta nu sunt acceptate in toate limbile europene.<see
                        your="" local="" ford="" website="" for="" latest="" information.=""></see></span></p>
            </p>
        </div>
        <div class="img-column"> <img
                    src="/assets/img/noul_ecosport/1214507094901.jpg"
                    alt="Ford SYNC cu Asistenta de urgenta"/><span class="fv-overlay-icon"></span></div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_ecosport/1214507096897.jpg"
                    alt="Puncte ISOFIX"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Ajutor pentru mentinerea copiilor in siguranta
            </h3>

            <p>

            <p>Noul Ford EcoSport este conceput pentru a tine copiii mici in siguranta, la fiecare calatorie. Si este
                dotat cu patru puncte ISOFIX pentru fixarea scaunului pentru copil, asadar poti folosi doua scaune
                pentru copii.</p>
            </p>
        </div>
        <div class="content-block last">
           <img
                    src="/assets/img/noul_ecosport/1214507095157.jpg"
                    alt="Optiuni de alarma"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Un mijloc de preventie eficient
            </h3>

            <p>

            <p>O alarma optionala iti protejeaza vehiculul, declansandu-se daca usile, capota sau portbagajul sunt
                deschise cu forta sau daca este cuplat contactul in timp ce alarma este activata.</p>
            </p>
        </div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_ecosport/1214507095409.jpg"
                    alt="EcoSport in motion "/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Sisteme avansate pentru o franare mai controlata
            </h3>

            <p>

            <p>Sistemul de franare anti-blocare roti (ABS) si distributia electronica a fortei de franare (EBD) asigura
                o franare mai bine controlata. Sistemul de asistenta la franarea de urgenta (EBA) ajuta autovehiculul
                EcoSport sa franeze mai eficient in cazul unei situatii de urgenta. Sistemul functioneaza prin
                detectarea presiunii aplicate de sofer pe pedala de frana si prin cresterea automata a acestei presiuni,
                daca este cazul.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/noul_ecosport/1214507097483.jpg"
                    alt="Sistem de monitorizare a presiunii in pneuri"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Avertizare timpurie in cazul unei pene
            </h3>

            <p>

            <p>Daca una sau mai multe dintre anvelopele autovehiculului pierd din presiune in timpul deplasarii,
                sistemul de monitorizare a presiunii in pneuri te va avertiza prin aprinderea unei pictograme pe panoul
                de bord.</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Utilitate :: btfTabContent : 1205091142398 :: tabContent :  -->
<div id='tab5' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            CONSTRUIT PENTRU A DESCOPERI PLACEREA CONDUSULUI
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Prezentand o serie de elemente practice, utile si rezistente, noul Ford EcoSport este conceput pentru
            strazile urbane si construit pentru a evada de pe ele.</p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"> <img
                    src="/assets/img/noul_ecosport/1214507097730.jpg"
                    alt="Garda inalta la sol"/><span class="fv-overlay-icon"></span></div>
        <div class="content">
            <h3 class="bigHeading02">
                Fii deasupra oricarui obstacol, cu o garda la sol mai inalta
            </h3>

            <p>

            <p>Borduri inalte, gropi in asfalt, drumuri in lucru, limitatoare de viteza... Strazile oraselor se pot
                dovedi periculoase. Din acest motiv, constructia robusta a Ford EcoSport include o garda la sol
                inaltata.</p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Usurarea virajelor in U
            </h3>

            <p>

            <p>Spre deosebire de SUV-urile traditionale, impunatoare, EcoSport are un diametru de bracaj redus, de numai
                10,6 m, ceea ce inseamna ca virajele in U pe strazile aglomerate sunt rapide si usoare, chiar si atunci
                cand sunt masini parcate pe ambele parti.</p>
            </p>
        </div>
        <div class="img-column"> <img
                    src="/assets/img/noul_ecosport/1214507094648.jpg"
                    alt="Diametrul de bracaj"/><span class="fv-overlay-icon"></span></div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_ecosport/1214507095662.jpg"
                    alt="Adancimea de traversare prin apa"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Trece cu usurinta prin apa
            </h3>

            <p>

            <p>Adancimea de traversare prin apa de 450 mm inseamna ca esti intotdeauna pregatit de aventura.</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/noul_ecosport/1214507097067.jpg"
                    alt="[Unghiul de atac si de degajare"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Depasirea cu usurinta a obstacolelor
            </h3>

            <p>

            <p>Unghiul de atac si cel de degajare sunt stabilite la EcoSport la 21 si respectiv 33,3 grade, cu un unghi
                ventral de 23,3 grade (descarcat). Aceste valori se refera la unghiurile la care masina poate sa treaca
                peste un obstacol, fara a zgaria partea de dedesubt, lucru esential pentru un SUV modern.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/noul_ecosport/1214507097234.jpg"
                    alt="EcoSport Rear Mounted Spare Wheel "/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Completeaza aspectul de SUV robust
            </h3>

            <p>

            <p>O roata de rezerva poate fi montata pe hayon, aducand un plus de originalitate imaginii Ford EcoSport. Cu
                o carcasa in culoarea caroseriei, optiunea este atat stilata, cat si practica. Daca preferi sa nu alegi
                optiunea cu roata de rezerva, un set pentru depanarea anvelopelor este furnizat ca dotare standard.</p>
            </p>
        </div>
    </article>
</div>
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

<script src="http://www.ford.ro/cs/ContentServer?pagename=EP2%2fENGInE%2fscript%2fGroupedJS"
        type="text/javascript"></script>
<script
    src="http://www.ford.ro/cs/ContentServer?pagename=ENGInE/EP2/common/GetScript&amp;elements=/EP2/body/cars/xaxis_detailed/xaxisctaview_script"></script>
<script
    src="http://www.ford.ro/cs/ContentServer?pagename=ENGInE/EP2/common/GetScript&amp;elements=/EP2/body/cars/xaxis_detailed/selectorinitialization_script"></script>
<script
    src="http://www.ford.ro/cs/ContentServer?pagename=ENGInE/EP2/common/GetScript&amp;elements=/EP2/body/cars/xaxis_detailed/selectordefaultconfigmodel_script"></script>
<script
    src="http://www.ford.ro/cs/ContentServer?pagename=ENGInE/EP2/common/GetScript&amp;elements=/EP2/body/cars/xaxis_detailed/selectorviewcontroller_script"></script>
<script
    src="http://www.ford.ro/cs/ContentServer?pagename=ENGInE/EP2/common/GetScript&amp;elements=/EP2/body/cars/xaxis_detailed/vehicletemplaterenderer_script"></script>
<script
    src="http://www.ford.ro/cs/ContentServer?pagename=ENGInE/EP2/common/GetScript&amp;elements=/EP2/body/cars/xaxis_detailed/interiorimagecarouselfacade_script"></script>
<script
    src="http://www.ford.ro/cs/ContentServer?pagename=ENGInE/EP2/common/GetScript&amp;elements=/EP2/body/cars/xaxis_detailed/vehicledatacache_script"></script>
<script
    src="http://www.ford.ro/cs/ContentServer?pagename=ENGInE/EP2/common/GetScript&amp;elements=/EP2/body/cars/xaxis_detailed/vehiclerollovercontroller_script"></script>
<script
    src="http://www.ford.ro/cs/ContentServer?pagename=ENGInE/EP2/common/GetScript&amp;elements=/EP2/body/cars/xaxis_detailed/nameplatecarouselfacade_script"></script>
<script
    src="http://www.ford.ro/cs/ContentServer?pagename=ENGInE/EP2/common/GetScript&amp;elements=/EP2/body/cars/xaxis_detailed/nameplatedetailsview_script"></script>
<script
    src="http://www.ford.ro/cs/ContentServer?pagename=ENGInE/EP2/common/GetScript&amp;elements=/EP2/body/cars/xaxis_detailed/imagemodels_script"></script>
<script
    src="http://www.ford.ro/cs/ContentServer?pagename=ENGInE/EP2/common/GetScript&amp;elements=/EP2/body/cars/xaxis_detailed/xaxis_script"></script>
<!-- Engine tag - loading 'null::SystemFooter' -->
<!-- Loading sitesetup -->
<script> EP2.Globals.siteName = 'RORO4_ENGINE';
    EP2.Globals.gforceMode = 'LIVE'</script>
<script type="text/javascript">
    var EP2 = EP2 || {};
    EP2.cookieLegislation.trigger();
    //FB : apply css rule for the footer SBE expandable list
    EP2.applyCssToFooterSBE = function () {
        var expandable = $('dd > .expand');
        var ordinaryLink = $('.listColumn > dl > dd > .sbe');
        expandable.each(function (i, v) {
            var findSpan = $(this).find('> span');
            console.log();
            if (!findSpan.length) {
                $(this).append('<span></span>');
            }
        });
        ordinaryLink.each(function (i, v) {
            var findLink = $(this).find('> span');
            if (!findLink.length) {
                $(this).append('<span></span>');
            }
        });
    }();
</script>
<!-- Engine tag - loading '/EP2/body/cars/xaxis_detailed/Body::SystemFooter' -->
<!-- Loading sitesetup -->
<!-- '/EP2/body/cars/xaxis_detailed/Body' is calling DoubleClick from 'SystemFooter' -->
<script>
    if (typeof isDoubleclickTriggered == 'undefined') {
        var isDoubleclickTriggered = 'false';
    }
    var eusedDevice;
    if (typeof deviceCheck != 'undefined') {
        if (deviceCheck == 'mobile') {
            eusedDevice = "nwp:mobile";
        } else {
            eusedDevice = "nwp:desktop";
        }
    }
    var pageTitle = null;
</script>
<script type="text/javascript">
    function getCookie(c_name) {
        var c_value = document.cookie;
        var c_start = c_value.indexOf(" " + c_name + "=");
        if (c_start == -1) {
            c_start = c_value.indexOf(c_name + "=");
        }
        if (c_start == -1) {
            c_value = null;
        } else {
            c_start = c_value.indexOf("=", c_start) + 1;
            var c_end = c_value.indexOf(";", c_start);
            if (c_end == -1) {
                c_end = c_value.length;
            }
            c_value = unescape(c_value.substring(c_start, c_end));
        }
        return c_value;
    }
    function doubleclickeUsedCompare(str) {
//alert(str);
    }
    ;
    if (isDoubleclickTriggered === 'false') {
        var isLogin = getCookie("isOwnerAuthenticated");
        var visitorLoginState;
        if (isLogin === 'true') {
            visitorLoginState = 'login';
        } else {
            visitorLoginState = 'not login';
        }
        var currentURL = document.URL;
        dataLayer = [];
        dataLayer.push({"URL": currentURL});
        dataLayer.push({"visitorLoginState": visitorLoginState});
        if (navigator && navigator.userAgent) {
            dataLayer.push({"userAgent": navigator.userAgent});
        }
        if (typeof siteID != 'undefined') {
            dataLayer.push({"siteID": siteID});
        }
        /*else {
         dataLayer.push({"siteID":'1204961250932'});
         }
         */
        countryName = "ford-" + 'ro';
        dataLayer.push({"country": countryName});
        if (typeof googleAdServerNameplateId != 'undefined') {
            dataLayer.push({"nameplateID": googleAdServerNameplateId});
        }
        if (typeof controllerCommand != 'undefined') {
            if (controllerCommand === "VehicleCompare") {
                googleAdServerNameplateName = EUSED.Tagging.getCompareList();
                dataLayer.push({"nameplateName": googleAdServerNameplateName});
            } else if (controllerCommand === "VehicleShortlist") {
                googleAdServerNameplateName = EUSED.Tagging.getShortlistList();
                dataLayer.push({"nameplateName": googleAdServerNameplateName});
            } else if (controllerCommand === "Search") {
                googleAdServerNameplateName = EUSED.Tagging.getSelectedVehicleList();
                dataLayer.push({"nameplateName": googleAdServerNameplateName});
            }
            else if (controllerCommand === "VehicleDetail" && typeof googleAdServerNameplateName != 'undefined') {
                googleAdServerNameplateName = "ford " + googleAdServerNameplateName.toLowerCase();
                dataLayer.push({"nameplateName": googleAdServerNameplateName});
            }
        }
        var nameplateName = 'ford ecosport';
        googleAdServerNameplateName = nameplateName.toLowerCase();
        dataLayer.push({"nameplateName": googleAdServerNameplateName});
        if (typeof osbNameplateName != 'undefined') {
            osbNameplateName = osbNameplateName.toLowerCase();
            dataLayer.push({"nameplateName": osbNameplateName});
        }
        if (typeof bookingReferenceNumber != 'undefined') {
            dataLayer.push({"leadID": bookingReferenceNumber});
        }
        dataLayer.push({"pageTitle": 'Noul Ford EcoSport - tehnologii, performata si eficienta, siguranta si securitate | Ford RO'});
        dataLayer.push({"pageCategory": 'ford-brand'});
        if (typeof osb_pageId != 'undefined') {
            dataLayer.push({"pageID": osb_pageId});
        } else {
            if (typeof mobile_bnp_pageId != 'undefined') {
                dataLayer.push({"pageID": mobile_bnp_pageId});
            } else if (typeof pageID_eused != 'undefined') {
                console.log(pageID_eused);
                pageID_eused = "brand:used vehicles:search inventory:" + pageID_eused;
                dataLayer.push({"pageID": pageID_eused });
            } else {
            }
        }
        dataLayer.push({"language": 'rum'});
    }
</script>
<!-- Google Tag Manager -->
<!-- if condition -->
<noscript>
    <iframe
        src="http://www.googletagmanager.com/ns.html?id=GTM-WL5HW9" height="0"
        width="0" style="display: none; visibility: hidden"></iframe>
</noscript>
<script type="text/javascript">
    if (isDoubleclickTriggered === 'false') {
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WL5HW9');
    }
    isDoubleclickTriggered = 'true';
</script>
<!-- End Google Tag Manager -->
<script>
</script>
<!-- enableiPerceptions is - 'null' -->
<script type='text/javascript'>var OM = OM || {};
    //ONCLICK 1205060261500om_he_pv_tc
    OM.om_he_pv_tc = { "tag": "pv nav true choice link", "clickType": "o"};</script>
<!-- OMNITURE ME -->
<script type="text/javascript"
        src="http://www.ford.ro/cs/ContentServer?cid=1204986890525&amp;pagename=ENGInE%2Ftagging%2FOmnitureScript"></script>
<script type="text/javascript">var sford = new Object;
    sford.tabName = '';
    sford.pageName = 'brand:passenger:vehicle:features:<tab name>:ford ecosport';
    sford.dlwasSent = false;
    sford.eVar11 = 'brand:passenger:vehicle:features:<tab name>';
    sford.hier1 = 'vehicle:features:car:ford ecosport:2013';
    sford.tagViewPhoto = '';
    sford.tagHighlights = '';
    sford.tagDownload = '';
    s.pageName = 'brand:passenger:vehicle:features:<tab name>:ford ecosport';
    s.hier1 = 'vehicle:features:car:ford ecosport:2013';
    s.channel = 'vehicle';
    s.eVar4 = 'rum';
    s.prop4 = 'rum';
    s.eVar11 = 'brand:passenger:vehicle:features:<tab name>';
    s.prop11 = 'brand:passenger:vehicle:features:<tab name>';
    s.eVar12 = '2013';
    s.prop12 = '2013';
    sford.my = '2013';
    s.eVar14 = 'ford-ro';
    s.prop14 = 'ford-ro';
    s.eVar15 = 'ford-brand';
    s.prop15 = 'ford-brand';
    s.eVar16 = 'ford ecosport';
    s.prop16 = 'ford ecosport';
    sford.np = 'ford ecosport';
    sford.vc = 'car';</script>
<script type="text/javascript">
    // <![CDATA[
    var __dOC = false;
    if (typeof(sford) == 'object') {
        s.pageName = s.pageName.replace(":<tab name>", "");
        s.eVar11 = s.eVar11.replace(":<tab name>", "");
        s.prop11 = s.eVar11;
// searchResultPageNumber
        if (typeof searchResultPageNumber == "string") {
            sford.searchPagenumber = searchResultPageNumber;
        }
    }
    if (typeof(attachLoadEvent) == 'function') {
        attachLoadEvent(onPageLoad);
    } else {
        $(document).ready(onPageLoad);
    }
    // ]]>
</script>
<script>
    var TagIT = TagIT || {};
</script>
<script
    src='http://www.ford.ro/cs/ContentServer?cid=1&amp;isMobile=false&amp;pagename=RORO4_ENGINE%2Fscript%2Ftagit%2Fassembler&amp;require=NONE&amp;location=load&amp;c=Page'
    defer></script>
<script
    src='http://www.ford.ro/cs/ContentServer?cid=1&amp;isMobile=false&amp;pagename=RORO4_ENGINE%2Fscript%2Ftagit%2Fstatic&amp;require=NONE&amp;location=load&amp;c=Page'></script>
<!-- Engine tag - loading '/EP2/body/cars/xaxis_detailed/Body::BodyBottom' -->
<!-- Loading sitesetup -->
<script>
</script>
