<script type="text/javascript">
    // mobile sniffer
    ForceRedirectUserAgents = 'android,iphone,blackberry';
    ForceRedirectUserAgentsBypass = 'Win64,Win32';
    ForceRedirectMinWidth = '480';
    MobileHomePageRedirectURL = 'focus-2018\/\/m.ford.ro';
    MobileRedirectURL = MobileHomePageRedirectURL + '/autoturisme/focus-2018';
</script>
<div id="xAxis-detailed">
    <nav class="breadCrumb visuallyhidden" role="navigation">
        <ul itemprop="breadcrumb">
            <li class="home"><a href="http://www.ford.ro/" data-selenium="breadcrumb_home" class="om_bc_li"
                                title="Pagina principal&#259;">Pagina principal&#259;</a><span></span></li>
            <li data-selenium="breadcrumb_cars"><a href="http://www.ford.ro/Autoturisme" class="om_bc_li">
                    Autoturisme
                </a><span></span></li>
            <li data-selenium="breadcrumb_nameplate">Focus</li>
        </ul>
    </nav>
    <!-- Bredcrumb Schema implementation for Nameplate at Body Template-->
    <nav class="breadCrumb" role="navigation" style="display: none">
        <ul itemscope itemtype="http://schema.org/BreadcrumbList">
        </ul>
    </nav>
    <script>
        var vehicleimagepackpresid = '1205157308484';
        var vehicleimagepackyear = 'NONE';
    </script>
    <div class="fblike-locale">en_RO</div>
    <script>
        var googleAdServerNameplateId = 'AUTHORED';
        var googleAdServerNameplateName = 'Focus';
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
            {"strIntroToFord": "ALL NEW ", "selector": {"bodystyles": {"options": [
                {}
            ]}, "exteriorImages": {"options": [
                {}
            ]}, "interiorImages": {"options": [
                {}
            ]}}, "brand": "Ford", "vehicleType": "PV", "catalogId": "NONE", "nameplate": "Focus", "labelAvailableFrom": "&nbsp;", "formattedCurrency": "", "nameplateText": '', "imagePack": false, "hideVehicleImage": false, "facebookImagePath": "", "facebookAppId": "facebookAppId", "images": [], "billBoardImagePath": null, "backgroundImagePath": ["/assets/img/1214656621320.jpg", "null", "null"], "disclaimerTextColor": [null, null, null], "current": true, "cid": "1205157310294", "cta": [
                {"linkTitle": "DESCARC\u0102 BRO\u015EUR\u0102 ", "linkURL": "\/SBE\/BrosuriSiPreturi", "linkType": "primary", "linkTarget": "_blank", "omid": "va"},
                {"linkTitle": "\u00CENSCRIE-TE LA TEST DRIVE ", "linkURL": "\/SBE\/TestDrive\/TestDriveAutoturisme?shopcode=AUTHORED&derivcode=AUTHORED", "linkType": "tertiary", "linkTarget": "_blank", "omid": "tr"}
            ], "social": {"facebook": "https://facebook.com", "facebookPage": "fordromania"}, "disclaimer": "Modelul prezentat este un Focus {1}. Imagine cu titlul de prezentare.", "seriesCode": "AUTHORED", "uscCode": "AUTHORED", "presId": "1205157308484", "promos": [], "idf": {"options": []}}
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
                    style="background-image:url(/assets/img/1214656621320.jpg)">
                    <div class="layered-nameplate-image">
                        <div class="image-holder">
                        </div>
                    </div>
                    <aside class="nameplate-disclaimer ">
                        Modelul prezentat este un Focus {1}. Imagine cu titlul de prezentare.
                    </aside>
                </li>
            </ul>
            <div itemscope itemtype="http://schema.org/Product" id="nameplateDetails" class="nameplate-vehicle">
                <!--the text description-->
                <div class="name-plate-text">
                    <p class="intro">ALL NEW </p>

                    <h1 class="bigHeading">
                        <span data-selenium="XA_namePlate" itemprop="member" class="nameplate boldTxt">Focus</span>
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
        <!--suppressPrice - Y,  removePrice - RemovePrice-->
        <!--strDisclaimer - -->
        <!--isComponentPricingEnabled - false,  strPrice - -->
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
    <!--  tabUrl /cs/ContentServer?cid=1205157310294&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE -->
    <!-- IntoID ::: articleAssetId -->
    <li class="selected"><a href="focus-2018/PrezentareGenerala#primaryTabs"
                            data-ajaxlink="/cs/ContentServer?cid=1205157310294&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE">Prezentare
            Generala</a>
        <!--This is where the main content for the selected tab will go -->
        <!-- secondary tabs -->
        <div class="secondary-tabs tab-content">
            <nav class="sub-nav">
                <ul>
                    <li><a href='#tab1' class='omt_tabName'>Overview</a></li>
                </ul>
            </nav>
            <!-- isBtfTab : from MidPageTabs true -->
            <div class="innertab-wrapper">
                <!--  tabTitle : Overview :: btfTabContent : 1205157310326 :: tabContent :  -->
                <div id='tab1' class="secondary-tab-content">
                    <header class="intro-header">
                        <h1 class="bigHeading">
                            NOUL FORD <strong>FOCUS</strong>
                        </h1>
                        <span class="highlighter"></span>

                        <p class="intro-text">

                        <p>Ia tot ce stii si iubesti la Focus, adauga un nou nivel de design inteligent,
                            stil modern aparte si mai mult spatiu ca oricand. Acum combina-le cu o
                            conectivitate extrem de avansata si o gama de tehnologii exceptionale de
                            asistenta a soferului, pe care le vei aprecia din plin. Acesta e noul Focus. Iar
                            in curand le vei putea descoperi pe toate si te vei convinge.</p>
                        </p>
                    </header>
                    <article class="content-column left">
                        <div class="img-column"> <img
                                    src="/assets/img/1214656621240.jpg"
                                    alt="Focus driving in tunnel"/><span class="fv-overlay-icon"></span>
                        </div>
                        <div class="content">
                            <h3 class="bigHeading02">
                                Tehnologie cu un scop
                            </h3>

                            <p>

                            <p>Noul Focus e construit sa-ti imbunatateasca experienta la volan, in toate
                                modurile posibile.<br><br>
                                Aceasta masina de urmatoarea generatie e plina de caracteristici avansate,
                                cum ar fi tehnologii de asistenta a soferului, inclusiv tempomat adaptiv, cu
                                functie de pornire-oprire si centrare pe banda de mers, si Asistenta activa
                                la parcare, versiunea 2. Impreuna, aceste tehnologii inteligente te pot
                                ajuta sa gestionezi acceleratia, franarea si chiar directia. Vorbim de
                                tehnologie care implica in asa masura lipsa efortului, incat te vei mira cum
                                te-ai descurcat pana acum fara aceasta. </p>
                            </p>
                        </div>
                    </article>
                    <article class="content-column right">
                        <div class="content">
                            <h3 class="bigHeading02">
                                Confortabil si conectat
                            </h3>

                            <p>

                            <p>Linii curate, aranjament suplu si aspect rafinat. Interiorul noului Focus e
                                mult mai confortabil, sic si spatios, ca la modelele anterioare. E de
                                asemenea, mult mai conectat. Ford SYNC 3 cu comanda vocala te mentine in
                                siguranta, la comanda telefonului, divertismentului si navigatiei. Descarca
                                aplicatia FordPass pe smartphoneul tau si deblocheaza si mai multe functii
                                SYNC 3, cum ar fi „Trafic in direct”, „Cautare parcare” si „Puncte de
                                interes”.</p>
                            </p>
                        </div>
                        <div class="img-column"><img
                                    src="/assets/img/1214656621854.jpg"
                                    alt="Ford Focus interior cockpit view"/><span
                                    class="fv-overlay-icon"></span></a></div>
                    </article>
                    <article class="content-column left">
                        <div class="img-column"> <img
                                    src="/assets/img/1214656621596.jpg"
                                    alt="Ford Focus interior transmission view"/><span
                                    class="fv-overlay-icon"></span></div>
                        <div class="content">
                            <h3 class="bigHeading02">
                                Puterea pe care o doresti si eficienta de care ai nevoie
                            </h3>

                            <p>

                            <p>Noul Focus este disponibil cu o gama de motoare puternice, care insa
                                economisesc combustibil, toate completate de cutii de viteze automate, cu 8
                                trepte de viteza, sau manuale, cu 6 trepte de viteza. Designul exterior a
                                fost de asemenea modelat, pentru a crea o forma atat atletica, cat si
                                aerodinamica, in acelasi timp contribuind la imbunatatirea si mai mare a
                                eficientei.</p>
                            </p>
                        </div>
                    </article>
                    <article class="content-column right">
                        <div class="content">
                            <h3 class="bigHeading02">
                                Siguranta ta. Prioritatea noastra.
                            </h3>

                            <p>

                            <p>O serie de tehnologii inteligente sunt concepute pentru a te proteja, pe
                                tine, familia ta si colegii de trafic. De exemplu, franarea activa si
                                Sistemul de asistenta pre-coliziune cu detectarea pietonilor si ciclistilor,
                                te pot avertiza in privinta eventualelor coliziuni si pot frana automat,
                                daca tu nu reactionezi la timp.</p>
                            </p>
                        </div>
                        <div class="img-column"> <img
                                    src="/assets/img/1214656621682.jpg"
                                    alt="Ford Focus smart technology animation"/><span
                                    class="fv-overlay-icon"></span></div>
                    </article>
                    <article class="content-column left">
                        <div class="img-column"> <img
                                    src="/assets/img/1214656621768.jpg"
                                    alt="Ford Focus side view"/><span class="fv-overlay-icon"></span>
                        </div>
                        <div class="content">
                            <h3 class="bigHeading02">
                                Spatiu pentru orice
                            </h3>

                            <p>

                            <p>Interiorul complet nou utilizeaza fiecare milimetru patrat, pentru a-ti oferi
                                cel mai adaptabil Focus posibil. Exista un spatiu generos pentru cap,
                                picioare si coate, in fata si in spatele vehiculului, astfel incat si cel
                                mai inalt pasager sa poata sta confortabil. Scaunele din spate se pot diviza
                                60/40 si se pot rabata aproape complet, pentru a maximiza spatiul pentru
                                bagaje. Podeaua spatiului de incarcare a marfii e reglabila si poate fi
                                ridicata, pentru a-ti oferi un compartiment de depozitare ascuns, sau poate
                                fi coborata, pentru a crea mai mult spatiu.</p>
                            </p>
                        </div>
                    </article>
                    <header class="intro-header">
                        <h1 class="bigHeading">
                        </h1>
                        <span class="highlighter"></span>

                        <p class="intro-text">

                        <p><span style="font-size: x-small;">*</span><span style="font-size: x-small;">Imagini si informatii cu titlu de prezentare. Anumite modele si/sau dotari pot fi disponibile doar in anumite regiuni geografice. Detalii despre disponibilitatea modelelor si dotarilor: la cel mai apropiat dealer Ford.</span>
                        </p>
                        </p>
                    </header>
                </div>
                <!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
                <!-- BEGIN [MidPageTabs] -->
                <!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Overview</a></h2> -->
                <!--</div>-->
                <!-- END [MidPageTabs] -->
                <!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
                <!-- BEGIN [MidPageTabs] -->
                <!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Overview</a></h2> -->
                <!--</div>-->
                <!-- END [MidPageTabs] -->
                <!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
                <!-- BEGIN [MidPageTabs] -->
                <!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Overview</a></h2> -->
                <!--</div>-->
                <!-- END [MidPageTabs] -->
                <!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
                <!-- BEGIN [MidPageTabs] -->
                <!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Overview</a></h2> -->
                <!--</div>-->
                <!-- END [MidPageTabs] -->
            </div>
        </div>
    </li>
    <!--  isBtfTab  -->
    <!--  tabUrl /cs/ContentServer?cid=1205157310294&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205157309754&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE -->
    <li><a href="focus_2018/Design#primaryTabs" class=" "
           data-ajaxlink="/cs/ContentServer?cid=1205157310294&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205157309754&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE">Design</a>
        <!-- secondary tabs -->
        <!--  midPageTabId : 1205157310370 -->
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
