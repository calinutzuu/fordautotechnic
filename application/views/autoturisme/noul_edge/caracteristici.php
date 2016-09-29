<script type="text/javascript">
    // mobile sniffer
    ForceRedirectUserAgents = 'android,iphone,blackberry';
    ForceRedirectUserAgentsBypass = 'Win64,Win32';
    ForceRedirectMinWidth = '480';
    MobileHomePageRedirectURL = 'Caracteristici\/\/m.ford.ro';
    MobileRedirectURL = MobileHomePageRedirectURL + '/autoturisme/Noul-FordEdge';
</script>
<div id="xAxis-detailed">
    <nav class="breadCrumb visuallyhidden" role="navigation">
        <ul itemprop="breadcrumb">
            <li class="home"><a href="../../index" data-selenium="breadcrumb_home" class="om_bc_li"
                                title="Pagina principal&#259;">Pagina principal&#259;</a><span></span></li>
            <li data-selenium="breadcrumb_cars"><a href="../../Autoturisme" class="om_bc_li">
                    Autoturisme
                </a><span></span></li>
            <li data-selenium="breadcrumb_nameplate">Edge</li>
        </ul>
    </nav>
    <script>
        var vehicleimagepackpresid = '1205110072039';
        var vehicleimagepackyear = 'NONE';
    </script>
    <div class="fblike-locale">en_RO</div>
    <script>
        var googleAdServerNameplateId = 'AUTHORED';
        var googleAdServerNameplateName = 'Edge';
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
            ]}}, "brand": "Ford", "vehicleType": "PV", "catalogId": "NONE", "nameplate": "Edge", "labelAvailableFrom": "&nbsp;", "formattedCurrency": "", "nameplateText": "Un adevarat varf al gamei noastre de vehicule SUV, noul Ford Edge reprezinta un simbol al rafinamentului modern.", "imagePack": false, "hideVehicleImage": false, "facebookImagePath": "", "facebookAppId": "facebookAppId", "images": [], "billBoardImagePath": null, "backgroundImagePath": ["/assets/img/noul_edge/1214553550026.jpg", "null", "null"], "disclaimerTextColor": ["364957", null, null], "current": true, "cid": "1205110255040", "cta": [
                {"linkTitle": "DESCARC\u0102 BRO\u015EUR\u0102 ", "linkURL": "\/SBE\/BrosuriSiPreturi", "linkType": "primary", "linkTarget": "_blank", "omid": "va"},
                {"linkTitle": "\u00CENSCRIE-TE LA TEST DRIVE ", "linkURL": "\/SBE\/TestDrive\/TestDriveAutoturisme?shopcode=AUTHORED&derivcode=AUTHORED", "linkType": "tertiary", "linkTarget": "_blank", "omid": "tr"}
            ], "social": {"facebook": "https://facebook.com", "facebookPage": "fordromania"}, "disclaimer": " Modelul prezentat este un EDGE", "seriesCode": "AUTHORED", "uscCode": "AUTHORED", "presId": "1205110072039", "promos": [], "idf": {"options": []}}
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
                    style="background-image:url(../../cs/BlobServer64b7?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpg&amp;blobwhere=1214553550026&amp;blobkey=id)">
                    <div class="layered-nameplate-image">
                        <div class="image-holder">
                        </div>
                    </div>
                    <aside class="nameplate-disclaimer style=color:#364957">
                        Modelul prezentat este un EDGE
                    </aside>
                </li>
            </ul>
            <div itemscope itemtype="http://schema.org/Product" id="nameplateDetails" class="nameplate-vehicle">
                <!--the text description-->
                <div class="name-plate-text">
                    <p class="intro"> Noul</p>

                    <h1 class="bigHeading">
                        <span data-selenium="XA_namePlate" itemprop="member" class="nameplate boldTxt">Edge</span>
                        <span data-selenium="XA_model" itemprop="model" itemscope
                              itemtype="http://schema.org/Organization" class="mark">Ford</span>
                        <!--The price -->
                    </h1>
                    <!--The blurb -->
                    <p class="blurb">
                        Un adevarat varf al gamei noastre de vehicule SUV, noul Ford Edge reprezinta un simbol al
                        rafinamentului modern.
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
<!--  tabUrl /cs/ContentServer?cid=1205110255040&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="Prezentare#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205110255040&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE">PREZENTARE</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205110253425 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205110255040&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205114703717&amp;tabName=Preturi-si-promotii&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="Preturi-si-promotii#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205110255040&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205114703717&amp;tabName=Preturi-si-promotii&amp;c=Page&amp;site=RORO4_ENGINE">Preturi
        si promotii</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205114702831 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205110255040&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205110253384&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="Design#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205110255040&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205110253384&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE">DESIGN</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205110254996 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205110255040&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205110250016&amp;tabName=Caracteristici&amp;c=Page&amp;site=RORO4_ENGINE -->
<!-- IntoID ::: articleAssetId -->
<li class="selected"><a href="Caracteristici#primaryTabs"
                        data-ajaxlink="/cs/ContentServer?cid=1205110255040&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205110250016&amp;tabName=Caracteristici&amp;c=Page&amp;site=RORO4_ENGINE">CARACTERISTICI</a>
<!--This is where the main content for the selected tab will go -->
<!-- secondary tabs -->
<div class="secondary-tabs tab-content">
<nav class="sub-nav">
    <ul>
        <li><a href='#tab1' class='omt_tabName'>EXPERIENTA CONDUSULUI</a></li>
        <li><a href='#tab2' class='omt_tabName'>PERFORMANTA SI EFICIENTA</a></li>
        <li><a href='#tab3' class='omt_tabName'>CONFORT sI COMODITATE </a></li>
        <li><a href='#tab4' class='omt_tabName'>SIGURANTA sI SECURITATE</a></li>
    </ul>
</nav>
<!-- isBtfTab : from MidPageTabs true -->
<div class="innertab-wrapper">
<!--  tabTitle : EXPERIENTA CONDUSULUI :: btfTabContent : 1205110253989 :: tabContent :  -->
<div id='tab1' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            AVANSAT. FARA EFORT. INOVATOR.
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Ford Edge este echipat cu multe tehnologii inovatoare. Te vei intreba cum de te-ai descurcat pana acum fara
            unele dintre acestea.<br><br> Toate aceste tehnologii te ajuta sa te concentrezi&nbsp; asupra condusului si
            iti ofera o imagine mai clara a drumului din fata.</p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column">
                <img
                    src="/assets/img/noul_edge/1214553599723.jpg"
                    alt="Ford Edge - Adaptive steering wheel"/><span class="fv-overlay-icon"></span></div>
        <div class="content">
            <h3 class="bigHeading02">
                Mai multa distractie. Mai putin efort la mentinerea directiei.
            </h3>

            <p>

            <p>Directia adaptiva este o tehnologie noua care te scuteste de efort in timpul condusului, in orice moment
                si in orice conditii - chiar si cand parchezi. <br> <br> La viteze mai mici, de exemplu atunci cand
                executi manevre in parcare, sunt necesare mai putine rotiri de volan. La viteze mai mari, directia
                adaptiva trece automat la un raport de directie conventional, pentru a oferi soferului un raspuns
                confortabil si sigur. <br> <br> Mai mult, directia adaptiva este disponibila si intr-un mod Sport.
                Atunci cand este activat, condusul pe drumuri dificile si curbate este mai placut, deoarece este necesar
                un efort redus de mentinere a directiei, atunci cand iei virajele.</p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Tehnologie cu optiune de comanda vocala
            </h3>

            <p>

            <p>Ford SYNC 2 iti permite sa fii conectat in permanenta si sa controlezi telefonul, muzica, sistemul de
                navigatie si climatizarea cu ajutorul unor comenzi vocale intuitive sau al ecranului tactil color de 8&rdquo;.
                <br> <br> Poti chiar sa soliciti o lista cu restaurantele locale rostind, pur si simplu, &bdquo;I'm
                hungry&rdquo; (Mi-e foame) sau poti accesa Ghidul Michelin pentru te ajuta sa alegi locuri unde sa
                mananci sau hoteluri si sa faci rezervarile necesare. <br> <br> Conectivitatea Wi-Fi este disponibila
                prin intermediul hotspoturilor, cu un modem USB, iar Asistenta de urgenta Ford te poate ajuta automat sa
                apelezi serviciile de urgenta, in cazul unui accident.</p>
            </p>
        </div>
        <div class="img-column"> <img
                    src="/assets/img/noul_edge/1214553550068.jpg"
                    alt="Ford Edge - Ford SYNC 2"/><span class="fv-overlay-icon"></span></div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214553579236.jpg"
                    alt="Ford Edge - All-Wheel Drive (AWD)"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Incredere indiferent de conditiile meteo
            </h3>

            <p>

            <p>Sistemul de tractiune integrala (AWD) inteligenta controleaza aderenta, ruliul si responsivitatea
                directiei, indiferent de conditii - fie ca vorbim de vreme ploioasa, uscata, pe gheata sau teren
                variabil.<br> Tehnologia este una inteligenta, asa ca poate muta tractiunea pe puntea din fata sau din
                spate, in functie de cerinte. Iar prin furnizarea de &bdquo;cuplu la cerere&rdquo;, sistemul asigura o
                manevrabilitate exceptionala si eficienta imbunatatita pentru un condus in siguranta si fara efort.</p>
            </p>
        </div>
        <div class="content-block last">
           <img
                    src="/assets/img/noul_edge/1214553592959.jpg"
                    alt="Ford Edge - Ford Dynamic LED headlamps"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Faruri care te ajuta sa vezi in viraje
            </h3>

            <p>

            <p>Farurile Ford Dynamic LED cu iluminat adaptiv nu sunt doar uimitoare, sunt si inteligente. Ford Edge este
                dotat cu o serie de LED-uri ce emit un model de lumina precis, iar lumina naturala a acestora, intensa
                si stralucitoare, asigura un iluminat extraordinar. Sunt incluse, de asemenea, lumini de intalnire pe
                timp de zi. Iar semnalizatoarele cu benzi LED inlocuiesc becurile traditionale cu lumina intermitenta,
                generand o secventa luminoasa vizibila pentru alti soferi. In plus, Faza lunga anti-orbire se ajusteaza
                automat, maximizand vizibilitatea fara sa orbeasca alti soferi. In mod remarcabil, aceste faruri/ lumini
                noi urmeaza, de asemenea, drumul, oferindu-ti mai multa vizibilitate in viraje.</p>
            </p>
        </div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214552948627.jpg"
                    alt="Ford Edge - Panoramic Camera"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Vede ce vine, din ambele parti
            </h3>

            <p>

            <p>O camera panoramica minuscula, plasata in partea din fata a noului Ford EDGE, transmite imaginea pe <a
                    onClick="triggerOverlay('/cs/ContentServer?pagename=ENGInE/Overlay_C/ShowOverlay%26pubid=1204961250932%26c=Overlay_C%26cid=1205114575297%26overlayheight=439%26overlaywidth=780' ,'overlay','Tractiunea%20integrala','Close','439','780'); return false;"
                    target="_blank" title="Tractiunea integrala"
                    href="../../cs/ContentServerc86f.html?pagename=ENGInE/EP2/common/media/MediaOverlay&amp;c=Video_C&amp;cid=1205114590274&amp;site=ENGInE"
                    data-media-overlay="{" class="js-overlay"><u>ecranul cu afisaj multifunctional</u></a>, astfel incat
                sa poti vedea vehiculele, biciclistii sau pietonii care vin din ambele parti. Aceasta noua tehnologie
                optionala este de nepretuit atunci cand iesi dintr-un spatiu de parcare ingust sau cand te afli pe un
                drum aglomerat si campul vizual este obstructionat.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/noul_edge/1214553598047.jpg"
                    alt="Ford Edge - Traffic sign recognition"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Vede semnele de circulatie pe care le-ai putea rata
            </h3>

            <p>

            <p>Indiferent daca semnele sunt pe marginea drumului sau deasupra acestuia, permanente sau temporare,
                sistemul de recunoastere a indicatoarelor rutiere le poate identifica. O pictograma cu semnul respectiv
                de limitare a vitezei sau de interzicere a depasirii apare pe panoul de bord si se schimba de fiecare
                data cand patrunzi intr-o zona cu o limita noua.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214553598139.jpg"
                    alt="Ford Edge - Lane Keeping System"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Un sistem avansat de pastrare a benzii
            </h3>

            <p>

            <p>
                utilizeaza o camera video frontala, pentru a detecta daca ai iesit accidental de pe banda ta de
                deplasare. Sistemul de avertizare la parasirea benzii te avertizeaza apoi printr-o vibratie a volanului
                si prin afisarea unui indicator de avertizare vizuala. Daca reactionezi mai greu sau nu reactionezi
                deloc, Sistemul de asistenta la pastrarea benzii iti poate oferi asistenta la directie, pentru a te
                ajuta sa revii pe banda corecta. Tehnologia este conceputa pentru drumurile cu mai multe benzi pe sens
                (cum sunt autostrazile), asadar se dezactiveaza automat la viteze mai mici de 43mph (65 km/h) sau poate
                fi dezactivata manual.</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214553596254.jpg"
                    alt="Ford Edge front - Adaptive Cruise Control"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Tempomat care se poate adapta automat
            </h3>

            <p>

            <p>Cu <u>ajutorul
                        tehnologiei Tempomat adaptiv</u></a>, alegi viteza cu care doresti sa te deplasezi, iar sistemul
                o va mentine constanta. Daca senzorul RADAR incorporat detecteaza un vehicul in fata, acesta va incetini
                masina pentru a mentine o distanta prestabilita si sigura. De indata ce drumul din fata este liber,
                sistemul va accelera pana la viteza aleasa.</p>
            </p>
        </div>
        <div class="content-block last">
           <img
                    src="/assets/img/noul_edge/1214553593046.jpg"
                    alt="Ford Edge - Intelligent Speed Assist"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Ajutor pentru a sta sub limita de viteza
            </h3>

            <p>

            <p>Sistemul de asistenta inteligenta pentru controlul vitezei este conceput pentru a reduce sansele de
                depasire a vitezei regulamentare si pentru a-ti spori concentrarea la volan. Mai intai, camera
                sistemului de Recunoastere a indicatoarelor rutiere detecteaza automat limita de viteza curenta (daca
                este activat), apoi sistemul se ajusteaza automat la limita respectiva.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214552946235.jpg"
                    alt="Ford Edge - Blind Spot Information System"/><span class="fv-overlay-icon"></span>
            <h3 class="bigHeading02">
                Oglinzi care vad ce tu nu poti vedea
            </h3>

            <p>

            <p>Un <u>Sistem de asistenta pentru unghiul mort
                        (BLIS)</u>
                te poate ajuta sa schimbi benzile in siguranta, datorita senzorilor RADAR care pot scana unghiurile
                moarte de pe ambele parti ale vehiculului. Daca sistemul detecteaza un vehicul pe care tu nu il poti
                vedea, o lumina portocalie afisata in oglinda laterala de pe partea corespunzatoare se va aprinde pentru
                a te avertiza.</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214552946577.jpg"
                    alt="Ford Edge - Cross Traffic Alert"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Un ajutor in plus atunci cand te deplasezi in marsarier
            </h3>

            <p>

            <p>O tehnologie noua, <u>Alerta
                        la intersectarea cu traficul</u> detecteaza vehiculele care se apropie atunci cand iesi cu
                spatele dintr-un spatiu de parcare. Daca se apropie ceva, aceasta emite un avertisment sonor si unul
                luminos in oglinda laterala corespunzatoare.</p>
            </p>
        </div>
        <div class="content-block last">
           <img
                    src="/assets/img/noul_edge/1214553579323.jpg"
                    alt="Ford Edge - Hill Start Assist"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Un plus de control in cazul pornirilor in rampa
            </h3>

            <p>

            <p>Sistemul de asistenta la pornirea din rampa impiedica temporar alunecarea in spate sau in fata atunci
                cand pornesti din panta. Sistemul functioneaza prin mentinerea presiunii la nivelul sistemului de fanare
                pentru un interval suplimentar de 2,5 secunde, asigurandu-ti mai mult timp si control atunci cand muti
                piciorul de pe pedala de frana pe cea de acceleratie. Acest sistem este, de asemenea, util cand opresti
                si pornesti autovehiculul pe suprafete alunecoase.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214553549772.jpg"
                    alt="Ford Edge - Trailer Sway Control"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Mentinerea in siguranta pe banda de rulare a remorcii
            </h3>

            <p>

            <p>Sistemul de stabilizare a remorcii detecteaza oscilatia sau balansul remorcii si reduce viteza
                vehiculului, pentru ca remorcarea sa fie controlata si corectata. Sistemul incetineste vehiculul,
                reducand cuplul motorului si crescand treptat presiunea franelor pe roti.</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214553549125.jpg"
                    alt="Ford Edge - Torque Vectoring Control"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Control maxim la viraje
            </h3>

            <p>

            <p>Controlul vectorului de cuplu echilibreaza cuplul motorului intre rotile din fata, pentru a se adapta
                tipului de carosabil si conditiilor de condus. Actionand de 100 de ori pe secunda, sistemul este de 33
                de ori mai rapid decat o clipire din ochi. Ceea ce inseamna o aderenta mai buna si manevrabilitate de
                precizie extrema, dupa cum vei descoperi in momentul accelerarii in curbe.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/noul_edge/1214552946748.jpg"
                    alt="Ford Edge - Electric power-assisted steering"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Directie servoasistata care reactioneaza in orice situatie
            </h3>

            <p>

            <p>Directia servoasistata electric se ajusteaza automat la viteza de rulare si la conditiile de drum. La
                viteze reduse, sistemul face ca rotirea volanului sa fie mai usoara, imbunatatind manevrabilitatea. La
                viteze ridicate, cand ai nevoie de control mai mare, directia devine mai rigida. Caracteristica de
                control asupra devierii de la cursul normal ia, de asemenea, in calcul vantul care bate din fata si alte
                conditii de drum, in timp ce Controlul activ al vibratiilor reduce vibratiile nedorite, resimtite la
                nivelul volanului.</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : PERFORMANTA SI EFICIENTA :: btfTabContent : 1205110251337 :: tabContent :  -->
<div id='tab2' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            FARA COMPROMISURI. EFICIENT. AVANSAT.
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Prin fuziunea designului ingenios, a ingineriei inteligente si a aerodinamicii avansate, Ford Edge ofera o
            combinatie perfect echilibrata de performanta, consum economic si manipulare de precizie.</p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"><img
                    src="/assets/img/noul_edge/1214553587197.jpg"
                    alt="Ford Edge advanced suspension"/><span class="fv-overlay-icon"></span></a></div>
        <div class="content">
            <h3 class="bigHeading02">
                Suspensie avansata, pentru deplasare excelenta si manevrabilitate precisa
            </h3>

            <p>

            <p>Suspensia spate multi-brat, noua si avansata, combinata cu o suspensie fata cu lonjeroane McPherson
                imbunatatita, asigura un control excelent asupra rotilor si o calitate superioara a deplasarii. <br>
                <br> Acest tip de suspensie a fost ajustat&nbsp; in mod specific la inaltimea si latimea generoase ale
                modelului Edge, precum si la capacitatile sale specifice de performanta, aducand un plus la
                manevrabilitatea masinii, foarte sensibila la comenzi.</p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Putere diesel de exceptie
            </h3>

            <p>

            <p>Un motor TDCi avansat de 2,0 litri ofera doua variante de putere: 180 CP si 210 CP Bi-Turbo. Ambele
                variante incorporeaza cea mai recenta tehnologie pentru a maximiza performanta, cuplul si consumul
                economic, reducand in acelasi timp emisiile. <br> <br> &bull; 180 CP. Cuplu de 400 Nm. 5,8 l/100 km.
                CO<sub>2</sub>, 149 g/km. <br> &bull; 210 CP. Cuplu de 450 Nm. 5,8 l/100 km. CO<sub>2</sub>, 149 g/km.
                <br> <br> Motorul Bi-Turbo este prevazut cu doua turbocompresoare si asigura performanta si eficienta
                sporite. <br> <br> Turbocompresorul principal functioneaza la viteze reduse, oferindu-ti putere
                suplimentara atunci cand ai nevoie - cum ar fi atunci cand virezi dintr-o intersectie in traficul aflat
                in miscare. Pe de alta parte, turbocompresorul secundar functioneaza la viteze mai mari, cum ar fi
                atunci cand trebuie sa depasesti un vehicul ce se deplaseaza incet. <br> <br> In plus, motorul Bi-Turbo
                incalzeste cabina mai rapid decat un motor conventional. Acest lucru reduce uzura pieselor,
                imbunatateste economia de combustibil si te ajuta sa pornesti la drum mai repede in diminetile
                friguroase.</p>
            </p>
        </div>
        <div class="img-column"><img
                    src="/assets/img/noul_edge/1214553623912.jpg"
                    alt="Ford Edge - Advanced 2.0 TDCi engine"/><span class="fv-overlay-icon"></span></div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214553622080.jpg"
                    alt="Ford Edge 6-speed manual gearbox"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Schimbari ale treptelor de viteza manuale si rapide
            </h3>

            <p>

            <p>O cutie de viteze manuala, cu 6 trepte, dispune de o capacitate ridicata de cuplu si asigura schimbari
                uniforme, rapide si precise ale treptelor de viteza. Pentru a ajuta la optimizarea eficientei
                combustibilului, o pictograma de pe panoul de bord va indica momentul optim de schimbare a treptei de
                viteza.</p>
            </p>
        </div>
        <div class="content-block last">
           <img
                    src="/assets/img/noul_edge/1214553622164.jpg"
                    alt="Ford Edge - Ford PowerShift gearbox"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Cutia de viteze Ford PowerShift. Rapiditate si consum economic
            </h3>

            <p>

            <p>Imbinand confortul asigurat de transmisia automata si controlul asociat unei cutii de viteze manuale,
                aceasta cutie de viteze avansata, cu 6 trepte de viteza, preselecteaza urmatoarea treapta pentru tine,
                pentru a nu pierde din putere atunci cand treci de la o treapta de viteza la alta. Schimbarile de trepte
                uluitor de rapide si uniforme ale PowerShift fac din condus o experienta mai placuta, economisind in
                acelasi timp combustibil si reducand emisiile de CO<sub>2</sub>, in comparatie cu o transmisie automata
                obisnuita.</p>
            </p>
        </div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214553624005.jpg"
                    alt="Ford Edge - Automatic Paddle Shift Controls"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Padele pentru schimbarea vitezelor: bucura-te de schimbari rapide ale treptelor de viteza in cazul
                transmisiei automate
            </h3>

            <p>

            <p>Regasindu-se in mod normal pe masinile sport de inalta performanta, comenzile de schimbare automata, cu
                padele, sunt disponibile cu ambele variante de transmisii: PowerShift si automata cu 6 trepte. Aceasta
                tehnologie inspirata de masinile de curse faciliteaza schimbarea rapida si fara efort a treptelor de
                viteza. In plus, poti schimba treptele mai eficient folosind padelele montate pe volan.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/noul_edge/1214553622247.jpg"
                    alt="Ford Edge - Auto Start-Stop"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Economisesti combustibil cu ajutorul Auto-Start-Stop
            </h3>

            <p>

            <p>Atunci cand te opresti la semafor sau cand astepti intr-o coloana, aceasta tehnologie poate opri automat
                motorul (fara a opri insa alimentarea sistemelor esentiale, precum farurile, aerul conditionat, radioul
                si sistemul Ford SYNC). De indata ce esti gata sa pleci de pe loc, apasa, ca de obicei, pe pedala de
                ambreiaj si selecteaza prima treapta de viteza sau apasa pe pedala de acceleratie, in cazul unei
                transmisii automate, iar sistemul porneste din nou motorul. Sistemul Auto-Start-Stop este deosebit de
                eficient in orase, unde poate reduce consumul de combustibil cu pana la 10% (mediu urban).</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214553621821.jpg"
                    alt="Ford Edge - Smart Regenerative Charging"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Un mod mai eficient de a reincarca bateria
            </h3>

            <p>

            <p>Spre deosebire de sistemele conventionale, sistemul de incarcare regenerativa inteligenta reincarca
                bateria doar atunci cand este nevoie si, ori de cate ori este posibil, evita realizarea acestei
                operatiuni atunci cand apesi pedala de acceleratie. Acest lucru poate reduce si mai mult consumul de
                combustibil si nivelul de emisii.</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214553621907.jpg"
                    alt="Ford Edge - Active Grille Shutter"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Aerodinamicitate mai buna pentru economie mai mare
            </h3>

            <p>

            <p>Atunci cand conduci cu viteza redusa, sistemul activ cu obturator pentru grila tine deschise orificiile
                de ventilatie de la nivelul grilei, pentru a raci motorul. Cand prinzi viteza, acesta se poate inchide
                automat, imbunatatind aerodinamicitatea si ajutand la economisirea de combustibil.</p>
            </p>
        </div>
        <div class="content-block last">
           <img
                    src="/assets/img/noul_edge/1214553621996.jpg"
                    alt="Ford Edge - Front Aero Curtains"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Reducerea rezistentei aerodinamice pentru mai multa eficienta
            </h3>

            <p>

            <p>O caracteristica de design ingenioasa a modelului Edge o reprezinta Cortinele frontale Aero. Fantele din
                marginile exterioare ale barei de protectie fata directioneaza aerul peste rotile aflate in miscare si
                il elimina prin fantele din pasajele rotilor. Aceasta con de aer cu viteza ridicata din jurul rotilor
                reduce rezistenta aerodinamica si imbunatateste atat performanta, cat si eficienta combustibilului.</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : CONFORT sI COMODITATE  :: btfTabContent : 1205110249304 :: tabContent :  -->
<div id='tab3' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            CALM. CONFORTABIL. COMOD.
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Ford Edge este caracterizat de detalii atent gandite, pentru a te ajuta atat pe tine, cat si pe pasagerii
            tai, sa va bucurati de o calatorie relaxanta si fara probleme.</p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"><img
                    src="/assets/img/noul_edge/1214552946824.jpg"
                    alt="Ford Edge Active Noise Control"/><span class="fv-overlay-icon"></span></div>
        <div class="content">
            <h3 class="bigHeading02">
                Cu ajutorul acestui sistem, iti vei putea auzi gandurile
            </h3>

            <p>

            <p>Sistemul de Control activ al zgomotului este conceput pentru a elimina zgomotul nedorit din cabina. <br>
                <br> Exista microfoane care detecteaza si masoara unde sonore specifice. In acelasi timp, unitatea de
                control poate separa sunetele pe care doresti sa le auzi, precum conversatiile si materialele audio, de
                cele pe care nu doresti sa le auzi. <br> <br> Apoi, sistemul creeaza &bdquo;zgomot alb&rdquo; inaudibil,
                pentru a anula zgomotele nedorite si pentru a-ti oferi o senzatie de liniste adevarata la volan.</p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Hayon cu deschidere hands-free pentru deschidere si inchidere fara efort
            </h3>

            <p>

            <p>Daca ai mainile ocupate, dar ai tocul cheii KeyFree cu tine, noul Ford EDGE iti detecteaza prezenta in
                apropiere si nu trebuie decat sa misti piciorul sub bara de protectie din spate pentru ca hayonul sa se
                deschida sau sa se inchida automat. <br> <br> Hayonul poate fi comandat si din tocul cheii sau prin
                butoanele din masina. Poti intrerupe ridicarea in orice moment si hayonul se va opri.</p>
            </p>
        </div>
        <div class="img-column"> <img
                    src="/assets/img/noul_edge/1214553579399.jpg"
                    alt="A Hands-free Liftgate"/><span class="fv-overlay-icon"></span>
        </div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214553560887.jpg"
                    alt="Ford Edge Stress-free parking and pulling out"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Intrari si iesiri din parcare fara stres
            </h3>

            <p>

            <p>Cu ajutorul diferitelor tehnologii, <u>sistemul de asistenta activa la parcare</u> face
                mai mult decat sa te directioneze automat in locurile de parcare paralela; te ajuta si sa iesi din
                acestea. Sistemul de asistenta la parcarea paralela si perpendiculara detecteaza un spatiu adecvat
                atunci cand treci pe langa acesta. Sistemul va prelua apoi controlul directiei, iar tu doar vei actiona
                pedala de acceleratie, cutia de viteze si frana (urmarind instructiunile de pe ecran si semnalele
                sonore).</p>
            </p>
        </div>
        <div class="content-block last">
       <img
                    src="/assets/img/noul_edge/1214553560599.jpg"
                    alt="Ford Edge Parking distance sensors"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Senzori care faciliteaza parcarea
            </h3>

            <p>

            <p>
                <u>Senzorii optionali pentru distanta la parcare</u> te
                ajuta sa determini distanta dintre vehicul si orice fel de obstacol din fata sau din spate. Atunci cand
                detecteaza un obiect, senzorii emit o avertizare sonora care se intensifica cu cat te apropii mai mult
                de obstacol.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214553552031.jpg"
                    alt="Ford Edge Rear view camera"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Marsarier mai simplu, deoarece poti vedea ce se afla in spate
            </h3>

            <p>

            <p>Stalpi opritori, garduri, ziduri joase&hellip; camera video pentru vizualizare spate iti arata tot ce se
                afla in spatele autovehiculului pe un ecran integrat in afisajul consolei centrale si se activeaza
                automat atunci cand selectezi marsarierul. Sistemul afiseaza, de asemenea, ghidaje virtuale pentru a te
                ajuta sa parchezi si in cele mai inguste spatii.</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214553550876.jpg"
                    alt="Ford Edge - Electronic Parking Brake"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Frane de parcare activabile din buton
            </h3>

            <p>

            <p>O noua Frana electronica de parcare inteligenta face ca maneta traditionala sa fie de acum doar o
                amintire. Prin intermediul consolei centrale, acum poti actiona in siguranta frana de parcare cu un
                simplu comutator. Pe langa faptul ca asigura un plus de spatiu in interior, aceasta dotare iti face
                viata mai usoara si reduce necesitatea de a regla frana la intervalele de service.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/noul_edge/1214556620373.jpg"
                    alt="Five generously proportioned seats"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Spatiu pentru destindere
            </h3>

            <p>

            <p>Incorporand cinci scaune generos proportionate pe doua randuri, cu o bancheta spate divizata 60/40,
                cabina ofera spatiu din belsug pentru fiecare pasager. Cu numeroase spatii de depozitare, plus un
                portbagaj foarte mare, exista spatiu din abundenta pentru pasageri, bagaje, cumparaturi, animale de
                companie, echipamente speciale - sau orice combinatie a acestora.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214553549374.jpg"
                    alt="Ford Edge Interior lighting"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Iluminat interior potrivit stilului, gustului si starii tale
            </h3>

            <p>

            <p>Sistemul modern Ice Blue ilumineaza toate sistemele de control din interior. Iluminatul ambiental iti
                permite sa luminezi zone diferite ale masinii, precum spatiile pentru picioare si suporturile de pahare
                din consola, cu oricare dintre cele sapte culori diferite disponibile. Poti chiar sa combini aceste
                culori pentru a crea si salva cinci variante proprii, prin intermediul caracteristicii MyColour.</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214553597967.jpg"
                    alt="Ford Edge - Ford KeyFree System"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Sistemul KeyFree pentru mai putine griji
            </h3>

            <p>

            <p>Sistemul Ford KeyFree iti permite sa incui si sa descui masina fara a scoate cheia din buzunar si fara sa
                fie nevoie sa o cauti in geanta. Aceasta optiune este de ajutor si atunci cand ai mainile ocupate cu
                altceva.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/noul_edge/1214553599547.jpg"
                    alt="Ford Edge - Ford MyKey®"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Utilizare in comun a masinii fara probleme, cu ajutorul caracteristicii MyKey<sup>®</sup>
            </h3>

            <p>

            <p>Ford MyKey<sup>&reg;</sup> iti permite sa setezi limita maxima de viteza, un semnal care sa atraga
                atentia asupra purtarii centurii de siguranta si chiar volumul sistemului audio. Aceasta tehnologie este
                conceputa pentru a-ti asigura linistea atunci cand imprumuti masina unui prieten sau unui membru al
                familiei, deoarece poti programa restrictiile dorite pentru cheia respectiva. Poti pastra personal cheia
                principala si chiar sa ai mai multe exemplare din ambele chei, daca doresti.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214553552119.jpg"
                    alt="Ford Edge luxurious two-part, glass panoramic roof"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Plafon panoramic mare, pentru un spatiu mai luminos si mai aerisit
            </h3>

            <p>

            <p>Edge poate fi dotat, optional, cu un plafon panoramic din sticla, format din doua parti, care ori se
                deschide prin rabatare, ori se gliseaza sub partea din spate a plafonului, pentru a crea un interior
                luminos si aerisit. In timp ce plafonul permite patrunderea luminii naturale, geamul care reflecta
                lumina razelor mentine racoarea si te protejeaza de razele UV daunatoare. Parasolarul actionat electric
                iti permite, de asemenea, sa acoperi sau sa descoperi plafonul, printr-o simpla apasare de buton.</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214553596437.jpg"
                    alt="Ford Edge Heated seat"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Cald sau rece, la comanda
            </h3>

            <p>

            <p>Alege scaunele din piele (dotare standard pe modelele Sport si Titanium) si cele doua scaune din fata vor
                fi incalzite sau racite pentru a-ti spori confortul. In mod asemanator, pasagerii din spate se pot
                bucura si ei de scaune incalzite. Iar atunci cand esti la volan, vei tolera mult mai usor zilele
                geroase, datorita volanului incalzit.</p>
            </p>
        </div>
        <div class="content-block last">
           <img
                    src="/assets/img/noul_edge/1214553599813.jpg"
                    alt="Hi-fi sound"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Sunet de inalta fidelitate
            </h3>

            <p>

            <p>Un sistem audio cu noua difuzoare, aflat in pachetul de dotari standard Ford SYNC 2, asigura o claritate
                exceptionala a sunetului in intreaga masina. Sistemul Sony premium optional, cu radio DAB, iti ofera o
                experienta de sunet superioara, la 390 de wati, si include 12 difuzoare.</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : SIGURANTA sI SECURITATE :: btfTabContent : 1205110256808 :: tabContent :  -->
<div id='tab4' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            SIGUR. IN SIGURANTA. PROTEJAT.
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>In Ford Edge, tu si pasagerii tai va bucurati de protectie sporita, datorita pachetului complet de masuri de
            siguranta.</p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"><img
                    src="/assets/img/noul_edge/1214553600395.jpg"
                    alt="Ford Edge Pre-Collision Assist with Pedestrian Detection"/><span
                    class="fv-overlay-icon"></span></div>
        <div class="content">
            <h3 class="bigHeading02">
                Un sistem care poate ajuta la protejarea ta si a celor din jur
            </h3>

            <p>

            <p>Sistemul de asistenta pre-coliziune cu detectare a pietonilor (si a obiectelor mari) detecteaza
                persoanele de pe drumul din fata sau pe cei care s-ar putea intersecta cu traseul tau si te avertizeaza
                cu privire la prezenta acestora. Daca nu reactionezi, sistemul va aplica automat franele. <br>
                <br>
                Aceasta noua tehnologie inovatoare este conceputa pentru a reduce gravitatea accidentelor si, in unele
                cazuri, pentru a evita complet coliziunea frontala, functionand la viteze de pana la 80 km/h.</p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Protectie exceptionala pentru pasagerii din spate
            </h3>

            <p>

            <p>Cele doua scaune din spate, dinspre exterior, pot fi echipate cu o caracteristica de siguranta unica de
                la Ford: o centura de siguranta gonflabila pentru scaunele din spate. In eventualitatea unui impact,
                centurile se umfla si distribuie fortele generate de impact pe o zona a corpului de cinci ori mai mare
                decat centurile conventionale. <br> <br> Prin reducerea presiunii exercitate asupra pieptului si
                controland mai bine miscarea capului si a gatului, aceasta tehnologie inovatoare poate reduce
                probabilitatea vatamarii.</p>
            </p>
        </div>
        <div class="img-column"> <img
                    src="/assets/img/noul_edge/1214552946394.jpg"
                    alt="Ford Edge - Rear Inflatable Seatbelt"/><span class="fv-overlay-icon"></span></div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <<img
                    src="/assets/img/noul_edge/1214553599892.jpg"
                    alt="Emergency Brake Assist "/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Putere suplimentara pentru franare de urgenta
            </h3>

            <p>

            <p>Sistemul de asistenta la franarea de urgenta ajuta vehiculul sa atinga eficienta maxima de franare in
                cazul unei situatii de urgenta. Este controlat automat prin intermediul sistemului de Control electronic
                al stabilitatii, care detecteaza presiunea pe care o aplici pe pedala de frana si creste automat aceasta
                presiune, daca este cazul.</p>
            </p>
        </div>
        <div class="content-block last">
           <img
                    src="/assets/img/noul_edge/1214553600228.jpg"
                    alt="Ford Edge - Ford SYNC 2 with Emergency Assistance"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Ford SYNC 2 cu Asistenta de urgenta
            </h3>

            <p>

            <p>Un aspect important al tehnologiei Ford SYNC 2 este Asistenta de urgenta<sup>*</sup>. Aceasta
                caracteristica ce iti poate salva viata este conceputa pentru a te asista la efectuarea unui apel de
                urgenta si poate furniza serviciilor de urgenta informatii despre locatia vehiculului tau, in propria ta
                limba. Daca este cazul, poti alege sa intrerupi apelul sau sa discuti personal, daca este necesar. Chiar
                si atunci cand ti-ai pierdut cunostinta, sistemul va furniza informatii vitale, precum coordonatele tale
                GPS.<br>
                <br>
                <span style="font-size: smaller">* Asistenta de urgenta Ford este o caracteristica SYNC<sup>&reg;</sup> inovatoare, care utilizeaza telefoanele mobile conectate si recunoscute prin Bluetooth pentru a ajuta ocupantii vehiculului sa efectueze un apel direct catre Centrul local de Comunicatii in cazul unei coliziuni a vehiculului in care are loc activarea unui airbag sau decuplarea pompei de combustibil. Aceasta caracteristica este disponibila in peste 40 de tari si regiuni din Europa.</span>
            </p>
            </p>
        </div>
    </article>
    <article class='two-column'>
        <div class="content-block">
           <img
                    src="/assets/img/noul_edge/1214553592765.jpg"
                    alt="Ford Edge - Driver Alert"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Sistemul de avertizare a soferului te previne atunci cand detecteaza faptul ca esti obosit
            </h3>

            <p>

            <p>Sistemul de avertizare a soferului monitorizeaza constant stilul personal de condus si este conceput sa
                detecteze orice variatie cauzata de oboseala. Sistemul va detecta cand esti mai putin vigilent,
                sugerandu-ti sa iei o pauza, cu ajutorul unei pictograme de avertizare de pe afisaj.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/noul_edge/1214553579153.jpg"
                    alt="Ford Edge - rear ISOFIX child seat attachment points"/><span
                    class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Ajutor pentru mentinerea copiilor in siguranta
            </h3>

            <p>

            <p>Noul Ford Edge este conceput pentru a mentine copiii mici in siguranta la fiecare calatorie si este dotat
                cu puncte ISOFIX pentru fixarea scaunului pentru copil in spate, asa ca poti folosi cu usurinta doua
                scaune.</p>
            </p>
        </div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214553549453.jpg"
                    alt="Ford Edge - Roll Stability Control"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Protectie continua impotriva rasturnarii
            </h3>

            <p>

            <p>Controlul stabilitatii la rasturnare poate detecta daca exista un grad semnificativ de deplasare a
                caroseriei si detecteaza si alte manevre ce ar putea duce la o posibila rasturnare. Aceasta tehnologie
                franeaza apoi in mod individual rotile si ajusteaza acceleratia, pentru a ajuta la redresarea
                vehiculului si restabilirea controlului.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/noul_edge/1214553600314.jpg"
                    alt="Ford Edge - Intelligent Protection System"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Sistemele de siguranta coordonate se activeaza intr-o fractiune de secunda
            </h3>

            <p>

            <p>Un sistem inteligent de protectie avansat (IPS) coordoneaza o serie de caracteristici de siguranta pentru
                a-ti asigura protectie maxima atat tie, cat si pasagerilor. In plus, noul Ford Edge este dotat cu o
                caroserie rezistenta, care absoarbe energia in cazul unui impact, si cu o tehnologie avansata pentru
                scaune si centuri de siguranta, reducand riscul de accidentare.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214553597499.jpg"
                    alt="Ford Edge - Electronic Stability Control"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Ofera incredere chiar si in conditii dificile
            </h3>

            <p>

            <p>Masina este prevazuta cu un sistem de Control electronic al stabilitatii, care include o serie de
                tehnologii concepute pentru a te ajuta sa mentineti controlul. Senzorii detecteaza orice schimbari
                bruste de directie, franare sau comportament al vehiculului care te-ar putea face sa pierzi controlul,
                pentru ca apoi ESC sa ajusteze precis viteza fiecarei roti in parte, facand masina mai stabila si
                ajutand la prevenirea alunecarii. Caracteristicile ESC includ asistenta la pornirea in rampa, asistenta
                la franarea de urgenta si pre-activarea electronica a franelor.</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/noul_edge/1214553600149.jpg"
                    alt="Ford Edge - Electronic Brake Prefill"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Opriri de urgenta mai rapide si mai scurte
            </h3>

            <p>

            <p>Atunci cand detecteaza o situatie de oprire de urgenta, Controlul electronic al stabilitatii pre-incarca
                sistemul de franare, inchizand orice gol de aer dintre placutele si discurile de frana. Cunoscuta drept
                pre-activare electronica a franelor, aceasta tehnologie ajuta la reducerea distantei de franare a
                masinii.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/noul_edge/1214553551066.jpg"
                    alt="Ford Edge - An advanced airbag system"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Un sistem avansat de airbaguri
            </h3>

            <p>

            <p>Ford Edge include un sistem de airbaguri care incorporeaza airbaguri pentru scaunul din fata la nivel
                pelvian si toracic si ofera airbaguri laterale optionale pentru cele doua scaune dinspre exterior, de pe
                cel de-al doilea rand.</p>
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
<h2><a href='#tab3' class="mp-tab omt_xd_mt_ti">CONFORT sI COMODITATE </a></h2> -->
<!--</div>-->
<!--<div id='tab4' class="mp-tab-wrapper">
<h2><a href='#tab4' class="mp-tab omt_xd_mt_ti">SIGURANTA sI SECURITATE</a></h2> -->
<!--</div>-->
<!-- END [MidPageTabs] -->
</div>
</div>
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205110255040&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205110267615&amp;tabName=Edge-Vignale&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="Edge-Vignale#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205110255040&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205110267615&amp;tabName=Edge-Vignale&amp;c=Page&amp;site=RORO4_ENGINE">Edge
        Vignale</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205110253955 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205110255040&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205110257622&amp;tabName=Models&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="Models#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205110255040&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205110257622&amp;tabName=Models&amp;c=Page&amp;site=RORO4_ENGINE">Modele</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205110252667 -->
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

<script src="../../cs/ContentServer5cdb?pagename=EP2%2fENGInE%2fscript%2fGroupedJS" type="text/javascript"></script>
<script
    src="../../cs/ContentServerc169?pagename=ENGInE/EP2/common/GetScript&amp;elements=/EP2/body/cars/xaxis_detailed/xaxisctaview_script"></script>
<script
    src="../../cs/ContentServer1ec6?pagename=ENGInE/EP2/common/GetScript&amp;elements=/EP2/body/cars/xaxis_detailed/selectorinitialization_script"></script>
<script
    src="../../cs/ContentServer2cd3?pagename=ENGInE/EP2/common/GetScript&amp;elements=/EP2/body/cars/xaxis_detailed/selectordefaultconfigmodel_script"></script>
<script
    src="../../cs/ContentServercc27?pagename=ENGInE/EP2/common/GetScript&amp;elements=/EP2/body/cars/xaxis_detailed/selectorviewcontroller_script"></script>
<script
    src="../../cs/ContentServer936b?pagename=ENGInE/EP2/common/GetScript&amp;elements=/EP2/body/cars/xaxis_detailed/vehicletemplaterenderer_script"></script>
<script
    src="../../cs/ContentServer528e?pagename=ENGInE/EP2/common/GetScript&amp;elements=/EP2/body/cars/xaxis_detailed/interiorimagecarouselfacade_script"></script>
<script
    src="../../cs/ContentServer7197?pagename=ENGInE/EP2/common/GetScript&amp;elements=/EP2/body/cars/xaxis_detailed/vehicledatacache_script"></script>
<script
    src="../../cs/ContentServerd52c?pagename=ENGInE/EP2/common/GetScript&amp;elements=/EP2/body/cars/xaxis_detailed/vehiclerollovercontroller_script"></script>
<script
    src="../../cs/ContentServerc0f4?pagename=ENGInE/EP2/common/GetScript&amp;elements=/EP2/body/cars/xaxis_detailed/nameplatecarouselfacade_script"></script>
<script
    src="../../cs/ContentServer556a?pagename=ENGInE/EP2/common/GetScript&amp;elements=/EP2/body/cars/xaxis_detailed/nameplatedetailsview_script"></script>
<script
    src="../../cs/ContentServer6fca?pagename=ENGInE/EP2/common/GetScript&amp;elements=/EP2/body/cars/xaxis_detailed/imagemodels_script"></script>
<script
    src="../../cs/ContentServer688d?pagename=ENGInE/EP2/common/GetScript&amp;elements=/EP2/body/cars/xaxis_detailed/xaxis_script"></script>
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
        if (typeof TagIT != 'object' || (typeof TagIT.handlesDoubleClick == 'function' || !TagIT.handlesDoubleClick)) {
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
            } else {
                dataLayer.push({"siteID": '1204961250932'});
            }
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
            var nameplateName = 'ford edge';
            googleAdServerNameplateName = nameplateName.toLowerCase();
            dataLayer.push({"nameplateName": googleAdServerNameplateName});
            if (typeof osbNameplateName != 'undefined') {
                osbNameplateName = osbNameplateName.toLowerCase();
                dataLayer.push({"nameplateName": osbNameplateName});
            }
            if (typeof bookingReferenceNumber != 'undefined') {
                dataLayer.push({"leadID": bookingReferenceNumber});
            }
            dataLayer.push({"pageTitle": 'Tehnologia auto si experienta condusului noului Ford EDGE | Ford RO'});
            dataLayer.push({"pageCategory": 'ford-brand'});
            if (typeof osb_pageId != 'undefined') {
                dataLayer.push({"pageID": osb_pageId});
            } else {
                if (typeof mobile_bnp_pageId != 'undefined') {
                    dataLayer.push({"pageID": mobile_bnp_pageId});
                } else if (typeof pageID_eused != 'undefined') {
                    pageID_eused = "brand:used vehicles:search inventory:" + pageID_eused;
                    dataLayer.push({"pageID": pageID_eused });
                } else {
                }
            }
            dataLayer.push({"language": 'rum'});
        }
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
        if (typeof TagIT != 'object' || typeof TagIT.handlesDoubleClick != 'function' || !TagIT.handlesDoubleClick()) {
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
        src="../../cs/ContentServer1756?cid=1204986890525&amp;pagename=ENGInE%2Ftagging%2FOmnitureScript"></script>
<script type="text/javascript">var sford = new Object;
    sford.tabName = '';
    sford.pageName = 'brand:passenger:vehicle:features:<tab name>:ford edge';
    sford.dlwasSent = false;
    sford.eVar11 = 'brand:passenger:vehicle:features:<tab name>';
    sford.hier1 = 'vehicle:features:car:ford edge:2015';
    sford.tagViewPhoto = '';
    sford.tagHighlights = '';
    sford.tagDownload = '';
    s.pageName = 'brand:passenger:vehicle:features:<tab name>:ford edge';
    s.hier1 = 'vehicle:features:car:ford edge:2015';
    s.channel = 'vehicle';
    s.eVar4 = 'rum';
    s.prop4 = 'rum';
    s.eVar11 = 'brand:passenger:vehicle:features:<tab name>';
    s.prop11 = 'brand:passenger:vehicle:features:<tab name>';
    s.eVar12 = '2015';
    s.prop12 = '2015';
    sford.my = '2015';
    s.eVar14 = 'ford-ro';
    s.prop14 = 'ford-ro';
    s.eVar15 = 'ford-brand';
    s.prop15 = 'ford-brand';
    s.eVar16 = 'ford edge';
    s.prop16 = 'ford edge';
    sford.np = 'ford edge';
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
    src='../../cs/ContentServer45dd?cid=1&amp;isMobile=false&amp;pagename=RORO4_ENGINE%2Fscript%2Ftagit%2Fassembler&amp;require=NONE&amp;location=load&amp;c=Page'
    defer></script>
<script
    src='../../cs/ContentServerd3e7?cid=1&amp;isMobile=false&amp;pagename=RORO4_ENGINE%2Fscript%2Ftagit%2Fstatic&amp;require=NONE&amp;location=load&amp;c=Page'></script>
<!-- Engine tag - loading '/EP2/body/cars/xaxis_detailed/Body::BodyBottom' -->
<!-- Loading sitesetup -->
<script>
</script>
<!-- enableiPerceptions is - 'null' -->
