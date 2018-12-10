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


                    <!--The blurb -->

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
        <li><a href='#tab1' class='omt_tabName'>EXPERIENTA LA VOLAN</a></li>
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
        Experienta la volan
    </h1>
    <span class="highlighter"></span>

    <p class="intro-text">

    <p>CTehnologii inovatoare, design inteligent, proiectare precisa: la volanul noului Focus ST esti conectat la
        drum, dar si la muzica, mesaje si apeluri telefonice, chiar si in miscare. </p>
    </p>
</header>
<article class="content-column left">
    <div class="img-column"><img
            src="/assets/img/focus_st/1214556049228.jpg"
            alt="Sports Suspenssion "/><span class="fv-overlay-icon"></span></div>
    <div class="content">
        <h3 class="bigHeading02">
            Control maxim in viraje
        </h3>

        <p>

        <p>Controlul vectorului de cuplu de torsiune culege informatii privind suprafata de rulare de 100 de ori pe
            secunda. (Aceasta inseamna de 33 ori mai repede decat o clipire din ochi.) Cu ajutorul acestor
            informatii, sistemul echilibreaza puterea transmisa la nivelul fiecareia dintre cele doua roti din fata.
            Acest lucru maximizeaza aderenta si imbunatateste manevrabilitatea, ajutandu-te sa parcurgi virajele, in
            zonele serpuite ale drumului.</p>
        </p>
    </div>
</article>
<article class="content-column right">
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
    <div class="img-column"><img
            src="/assets/img/focus_st/1214556047382.jpg"
            alt="Electronic Power Assisted Steering"/><span class="fv-overlay-icon"></span></div>
</article>
<article class="content-column left">
    <div class="img-column"><img
            src="/assets/img/focus_st/1214556047803.jpg"
            alt="Electronic Transition Stability"/><span class="fv-overlay-icon"></span></div>
    <div class="content">
        <h3 class="bigHeading02">
            Sesizeaza vehiculele pe care le-ai putea rata
        </h3>

        <p>

        <p>Alerta la intersectarea cu traficul face parte din Sistemul de asistenta pentru unghiul mort. Cand iesi
            cu spatele dintr-un loc de parcare si ai vizibilitate redusa asupra traficului, alerta la intersectarea
            cu traficul poate detecta vehiculele care se apropie si poate emite un sunet de avertizare. Aceasta
            tehnologie aprinde si o lumina in oglinda retrovizoare exterioara (stanga sau dreapta, in functie de
            directia din care se apropie vehiculele).</p>
        </p>
    </div>
</article>
<article class="content-column right">
    <div class="content">
        <h3 class="bigHeading02">
            Vede semnele de circulatie pe care le-ai putea rata
        </h3>

        <p>

        <p>Indiferent daca semnele sunt pe marginea drumului sau deasupra acestuia, permanente sau temporare,
            Sistemul de recunoastere a indicatoarelor rutiere le poate identifica. O pictograma cu viteza respectiva
            sau un semn de interzicere a depasirii apare pe panoul de bord si se schimba de fiecare data cand
            patrunzi intr-o zona cu o limita noua.</p>
        </p>
    </div>
    <div class="img-column"><img
            src="/assets/img/focus_st/1214556050087.jpg"
            alt="Mai mult control"/><span class="fv-overlay-icon"></span></div>
</article>
<article class="content-column left">
    <div class="img-column"><img
            src="/assets/img/focus_st/1214556048976.jpg"
            alt=" "/><span class="fv-overlay-icon"></span></div>
    <div class="content">
        <h3 class="bigHeading02">
            Preia comanda cu tehnologia avansata hands-free cu SYNC 3
        </h3>

        <p>

        <p>SYNC 3 este cea mai avansata versiune de pana acum. Este mai rapida si mai usor de utilizat, cu comenzi
            vocale imbunatatite si mai multe functii. Noua interfata are butoane mai mari pentru o utilizare mai
            facila, iar ecranul tactil colorat recunoaste acum gesturi de strangere si glisare specifice
            smartphoneurilor si tabletelor pentru o navigare si mai intuitiva. SYNC 3 include, de asemenea,
            aplicatiile AppLink, CarPlay si Android Auto*, pentru a afisa informatiile smartphoneului tau pe ecranul
            tactil.</p>
        </p>
    </div>
</article>
<article class="content-column right">
    <div class="content">
        <h3 class="bigHeading02">
            Directie servoasistata care reactioneaza la orice situatie
        </h3>

        <p>

        <p>Directia servoasistata electric (EPAS) se ajusteaza automat la viteza de rulare si la conditiile de drum.
            La viteze reduse, sistemul face ca rotirea volanului sa fie mai usoara, imbunatatind manevrabilitatea.
            La viteze ridicate, cand ai nevoie de mai mult control , directia devine mai rigida. Acum, cu ajutorul
            controlului asupra devierii de la cursul normal, EPAS ia de asemenea in calcul, vantul care bate din
            fata si alte conditii de drum, in timp ce Controlul activ al vibratiilor reduce vibratiile nedorite,
            resimtite la nivelul volanului.</p>
        </p>
    </div>
    <div class="img-column"><img
            src="/assets/img/focus_st/1214556049396.jpg"
            alt="Ford SYNC 2 with Voice Control and Touchscreen"/><span class="fv-overlay-icon"></span>
    </div>
</article>
<article class="content-column left">
    <div class="img-column"><img
            src="/assets/img/focus_st/1214556047887.jpg"
            alt="Cross Traffic Alert"/><span class="fv-overlay-icon"></span></div>
    <div class="content">
        <h3 class="bigHeading02">
            Schimba directia: pastreaza controlul
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
            Un sistem avansat care te ajuta sa pastrezi banda de rulare
        </h3>

        <p>

        <p>Sistemul de mentinere a benzii de rulare utilizeaza o camera orientata in fata, pentru a detecta daca ai
            iesit accidental de pe banda ta de deplasare. Sistemul de avertizare la parasirea benzii te avertizeaza
            apoi printr-o vibratie a volanului si prin afisarea unui indicator de avertizare vizuala. Daca
            reactionezi mai greu sau nu reactionezi deloc, Sistemul de asistenta la mentinerea benzii iti poate
            oferi asistenta cu cuplul de directie, pentru a te ajuta sa revii pe banda corecta. Aceasta tehnologie e
            conceputa pentru suprafete rutiere cu mai multe benzi (precum autostrazile), asadar se va dezactiva
            automat la viteze mai mici de 65 km/h, putand fi dezactivata si manual.</p>
        </p>
    </div>
    <div class="img-column"><img
            src="/assets/img/focus_st/12145049396.jpg"
            alt="Ford SYNC 2 with Voice Control and Touchscreen"/><span class="fv-overlay-icon"></span>
    </div>
</article>
<article class="content-column left">
    <div class="img-column"><img
            src="/assets/img/focus_st/121455604782187.jpg"
            alt="Cross Traffic Alert"/><span class="fv-overlay-icon"></span></div>
    <div class="content">
        <h3 class="bigHeading02">
            SFaruri bixenon ultra-stralucitoare, cu consum redus de energie
        </h3>

        <p>

        <p>Farurile bi-xenon cu iluminat adaptiva schimba automat modelul de iluminare al fasciculului farului,
            pentru a aplica cea mai buna distribuire a luminii in situatia de condus data. Astfel, se asigura faptul
            ca este generat automat cel mai eficient model de iluminat, pentru orice situatie de condus, de la
            autostrazi la strazile din orase. Aceasta tehnologie include o functie de reducere automata a
            intensitatii luminii, cand este detectat un vehicul care se apropie din sens opus.</p>
        </p>
    </div>
</article>

<article class="content-column right">
    <div class="content">
        <h3 class="bigHeading02">
            Un plus de control in cazul pornirilor in rampa
        </h3>

        <p>

        <p>Sistemul de asistenta la pornirea din rampa impiedica temporar alunecarea in spate sau in fata, cand pornesti
            din panta. Sistemul functioneaza prin mentinerea presiunii la nivelul sistemului de franare pentru un
            interval suplimentar de 2-3 secunde, asigurandu-ti mai mult timp si control, cand muti piciorul de pe pedala
            de frana, pe cea de acceleratie. Acest sistem este de asemenea util cand opresti si pornesti autovehiculul
            pe suprafete alunecoase.</p>
        </p>
    </div>
    <div class="img-column"><img
            src="/assets/img/focus_st/1112145049396.jpg"
            alt="Ford SYNC 2 with Voice Control and Touchscreen"/><span class="fv-overlay-icon"></span>
    </div>
</article>
<article class="content-column left">
    <div class="img-column"><img
            src="/assets/img/focus_st/12104782187.jpg"
            alt="Cross Traffic Alert"/><span class="fv-overlay-icon"></span></div>
    <div class="content">
        <h3 class="bigHeading02">
            Sistemul de avertizare a soferului isi da seama cand esti obosit
        </h3>

        <p>

        <p>Sistemul de avertizare a soferului monitorizeaza constant stilul personal de condus si e conceput sa
            detecteze orice variatie cauzata de oboseala. Daca sistemul detecteaza ca devii mai putin vigilent(a), o
            pictograma de avertizare apare pe afisaj, sugerandu-ti sa iei o pauza. Daca gradul de vigilenta la volan
            scade si mai mult, mesajul e repetat si insotit de un semnal sonor.</p>
        </p>
    </div>
</article>

<article class="content-column right">
    <div class="content">
        <h3 class="bigHeading02">
            Tehnologia care iti indica autovehiculele pe care nu le poti vedea
        </h3>

        <p>

        <p>Sistemul de asistenta pentru unghiul mort utilizeaza senzori radar pentru a identifica autovehiculele care se
            pot afla in unghiul mort. Acestea sunt amplasate pe ambele parti ale masinii si te avertizeaza in mod activ
            cu privire la situatii potential periculoase, prin intermediul unei lumini portocalii afisate in mod vizibil
            in oglinda laterala.</p>
        </p>
    </div>
    <div class="img-column"><img
            src="/assets/img/focus_st/111214504.jpg"
            alt="Ford SYNC 2 with Voice Control and Touchscreen"/><span class="fv-overlay-icon"></span>
    </div>
</article>
<article class="content-column left">
    <div class="img-column"><img
            src="/assets/img/focus_st/121782187.jpg"
            alt="Cross Traffic Alert"/><span class="fv-overlay-icon"></span></div>
    <div class="content">
        <h3 class="bigHeading02">
            Seteaza propria limita de viteza, iar noul Focus ST o va respecta
        </h3>

        <p>

        <p>Fiind integrat in cadrul tempomatului, dispozitivul de limitare a vitezei iti permite sa iti setezi propria
            viteza maxima. Apoi, masina va respecta aceasta viteza, pentru ca tu sa te poti concentra exclusiv asupra
            drumului. Atunci cand vrei sa maresti viteza, apasa pur si simplu pe pedala de acceleratie pentru a
            dezactiva sistemul.</p>
        </p>
    </div>
</article>


</div>
<!--  tabTitle : PERFORMANTA SI EFICIENTA :: btfTabContent : 1205116171067 :: tabContent :  -->
<div id='tab2' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            Performanta
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Proiectat si construit pentru a fi o masina performanta, de care sa te poti bucura in fiecare zi, noul Focus
            ST este actionat de un motor pe benzina EcoBoost de 2,0 litri si 250 CP sau de la noul motor TDCi de 2,0
            litri si 185 CP. Ambele ofera un amestec fara compromis, de performanta si eficienta. Asadar, poti beneficia
            de consum rezonabil, in timp ce te bucuri la maximum de puterea si performanta ST.</p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"><img
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
        <div class="img-column"><img
                src="/assets/img/focus_st/1214556051457.jpg"
                alt="Ford Focus ST Exterior"/><span class="fv-overlay-icon"></span></div>
    </article>
    <article class="content-column left">
        <div class="img-column"><img
                src="/assets/img/focus_st/1214556050275.jpg"
                alt="6 speed"/><span class="fv-overlay-icon"></span></div>
        <div class="content">
            <h3 class="bigHeading02">
                Folosesti mai putin combustibil, cu functia pornire-oprire automata
            </h3>

            <p>

            <p>Atunci cand te opresti la semafor sau cand astepti intr-o coloana, aceasta tehnologie poate opri automat
                motorul (fara a opri insa alimentarea sistemelor esentiale, precum farurile, aerul conditionat, radioul
                si sistemul Ford SYNC). De indata ce esti gata sa pleci de pe loc, apasa, ca de obicei, pe pedala de
                ambreiaj si selecteaza prima treapta de viteza sau apasa pedala de acceleratie, in cazul unei transmisii
                automate, iar sistemul porneste din nou motorul. Sistemul Auto-Start-Stop e deosebit de eficient in
                orase, unde poate reduce consumul de combustibil cu pana la 10% (in mediul urban).</p>
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

            <p>Sistemul inovator Ford Eco Mode evalueaza continuu efectele stilului personal de condus asupra consumului
                de combustibil. Acesta analizeaza viteza, schimbarea treptelor de viteza, franarea si nivelurile de
                anticipare, plus raportul personal de deplasari pe distante scurte si lungi. Apoi, software-ul
                inteligent it ofera recomandari legate de modul de imbunatatire a economiei de combustibil.</p>
            </p>
        </div>
        <div class="content-block">
            <img
                src="/assets/img/focus_st/1214556048899.jpg"
                alt="Auto-Start-Stop"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Accelerare prin toate treptele de viteza
            </h3>

            <p>

            <p>O transmisie manuala cu 6 trepte de viteze este disponibila exclusiv pentru ST, cu variante diferite,
                adaptate pentru fiecare motor in parte. Schimbarea specifica a treptelor de viteza produce „zvacnirea”
                maxima la fiecare miscare de maneta. Iar accelerarea rapida in treptele de viteza inferioare este
                dublata de o navigare confortabila cu viteza: raportul celei de-a sasea trepte de viteza este ajutat
                perfect la Focus ST, oferindu-ti performanta optima si ramanand, in acelasi timp, suficient de lung
                pentru a ajuta la mentinerea unei economii excelente de combustibil in deplasarile mai lungi.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                src="/assets/img/focus_st/1214556049830.jpg"
                alt="6-speed manual gearbox"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Ford PowerShift. Rapid si cu economie de combustibil
            </h3>

            <p>

            <p>Imbinand confortul asigurat de transmisia automata cu controlul asociat unei cutii de viteze manuale,
                aceasta cutie de viteze avansata, cu 6 trepte de viteza, preselecteaza urmatoarea treapta pentru tine,
                pentru a nu pierde din putere cand treci de la o treapta de viteza, la alta. Schimbarile de trepte
                uluitor de rapide si line ale Ford PowerShift fac din condus o experienta mai placuta, economisind in
                acelasi timp combustibil si reducand emisiile de CO2 in comparatie cu o cutie de viteze automata
                obisnuita.</p>
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
                Schimbari ale treptelor de viteza, mai eficiente din punct de vedere al consumului de combustibil
            </h3>

            <p>

            <p>Un indicator luminos de pe panoul de bord iti arata momentul optim de schimbare a treptei de viteza,
                pentru o eficienta maxima a consumului de combustibil. Aceasta reprezinta o modalitate simpla si
                eficienta, de a asigura deplasari cat mai economice.</p>
            </p>
        </div>

    </article>
</div>
<!--  tabTitle : CONFORT SI COMODITATE :: btfTabContent : 1205116172314 :: tabContent :  -->
<div id='tab3' class="secondary-tab-content">
<header class="intro-header">
    <h1 class="bigHeading">
        Confort
    </h1>
    <span class="highlighter"></span>

    <p class="intro-text">

    <p>Fiecare aspect al noului Focus ST este proiectat cu gandul la confortul si comoditatea ta. Si cum fiecare
        tehnologie si caracteristica exista pentru a-ti face viata mai usoara, te poti concentra si bucura de
        performanta masinii tale.</p>
    </p>
</header>
<article class="content-column left">
    <div class="img-column"><img
            src="/assets/img/focus_st/1216050275.jpg"
            alt="6 speed"/><span class="fv-overlay-icon"></span></div>
    <div class="content">
        <h3 class="bigHeading02">
            Te ajuta sa vezi, fara a-i orbi pe ceilalti soferi
        </h3>

        <p>

        <p>O functie utila pentru deplasarile pe timp de noapte, faza lunga automata, comuta temporar la faza scurta
            atunci cand detecteaza trafic din sens opus sau un alt autovehicul in fata, pentru a nu-i orbi pe
            ceilalti soferi. Apoi, sistemul revine automat la faza lunga, asigurand vizibilitate maxima.</p>
        </p>
    </div>
</article>
<article class="content-column right">
    <div class="content">
        <h3 class="bigHeading02">
            Un volan care iti pune totul la indemana
        </h3>

        <p>

        <p>Un volan nou, cu trei spite, a fost special proiectat ergonomic, tinandu-se cont de nevoile şoferului.
            Fiecare buton si comanda se afla la indemana, iar pozitia volanului imbunatateste atat functionalitatea,
            cat
            si vizibilitatea panoului de bord al masinii tale. Pentru un plus de confort, de ce sa nu alegi noul
            volan
            incalzit, disponibil optional?</p>
        </p>
    </div>
    <div class="img-column"><img
            src="/assets/img/focus_st/1556051457.jpg"
            alt="Ford Focus ST Exterior"/><span class="fv-overlay-icon"></span></div>
</article>


<article class='three-column'>
    <div class="content-block">
        <img
            src="/assets/img/focus_st/1214556049151.jpg"
            alt="New three-spoke steering wheel"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Porneste masina prin simpla atingere a unui buton
        </h3>

        <p>

        <p>UNu mai este nevoie sa folosesti cheia. Trebuie doar sa actionezi butonul de pornire Ford Power in timp
            ce tii ambreiajul apasat (sau pedala de frana pe modelul cu transmisie automata) si motorul prinde
            viata.</p>
        </p>
    </div>
    <div class="content-block">
        <img
            src="/assets/img/focus_st/1214556048146.jpg"
            alt="Storage Bin With USB"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Cu Sistemul KeyFree ai mai putine griji
        </h3>

        <p>

        <p>Sistemul Ford KeyFree iti permite sa incui si sa descui vehiculul, fara sa scoti cheia din buzunar sau
            din geanta. Ideal pentru situatiile cand ai mainile ocupate.</p>
        </p>
    </div>
    <div class="content-block last">
        <img
            src="/assets/img/focus_st/1214556049742.jpg"
            alt="Ford Ford KeyFree System"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Utilizarea in comun a masinii, fara probleme, cu ajutorul caracteristicii MyKey
        </h3>

        <p>

        <p><br>
            MyKey iti permite sa setezi limita maxima de viteza, semnalul care sa atraga atentia asupra purtarii
            centurii de siguranta si chiar volumul sistemului audio. Aceasta tehnologie este conceputa pentru a-ti
            asigura linistea atunci cand imprumuti masina unui prieten sau unui membru al familiei, deoarece poti
            programa restrictiile dorite pentru cheia respectiva. Poti pastra personal cheia de „admin” si chiar sa
            ai mai multe exemplare din ambele chei, daca doresti.</p>
        </p>
    </div>
</article>
<article class='three-column'>
    <div class="content-block">
        <img
            src="/assets/img/focus_st/1214556048314.jpg"
            alt="Ford Power Starter Button"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Curata parbrizul rapid cu Quickclear
        </h3>

        <p>

        <p>Aceasta dotare inteligenta e creata pentru a-ti permite sa pornesti rapid in diminetile geroase. Trebuie doar
            sa atingi un buton si filamente extrem de subtiri se supraincalzesc, pentru a curata parbrizul de gheata,
            ceata si abur, precum si pentru a ajuta la dezghetarea stergatoarelor. Sistemul actioneaza in cateva
            secunde, chiar si la temperaturi negative.</p>
        </p>
    </div>
    <div class="content-block">
        <img
            src="/assets/img/focus_st/1214556050006.jpg"
            alt="Worry-free car sharing with MyKey"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Curata parbrizul rapid cu Quickclear
        </h3>

        <p>

        <p>Aceasta dotare inteligenta e creata pentru a-ti permite sa pornesti rapid in diminetile geroase. Trebuie doar
            sa atingi un buton si filamente extrem de subtiri se supraincalzesc, pentru a curata parbrizul de gheata,
            ceata si abur, precum si pentru a ajuta la dezghetarea stergatoarelor. Sistemul actioneaza in cateva
            secunde, chiar si la temperaturi negative.</p>
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
            Oglinzi laterale care se pot proteja singure
        </h3>

        <p>

        <p>Pentru a evita eventuala deteriorare, oglinzile pliabile electric se pliaza dupa ce parchezi. Iar pozitia
            pliata protejeaza, de asemenea, si elegantele semnalizatoare integrate.</p>
        </p>
    </div>
    <div class="content-block">
        <img
            src="/assets/img/focus_st/1214556048062.jpg"
            alt="Ford Easy-Fuel, for foolproof filling-up"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Sistemul Ford Easy Fuel pentru alimentare fara probleme
        </h3>

        <p>

        <p>Aceasta tehnologie utila face imposibila alimentarea gresita a masinii, deoarece duza pompei nu se va
            potrivi. Mai mult, datorita faptului ca sistemul Ford Easy-Fuel e un sistem fara buson, nu va mai trebui sa
            pui mana vreodata pe un buson murdar.</p>
        </p>
    </div>
    <div class="content-block last">
        <img
            src="/assets/img/focus_st/1214556048398.jpg"
            alt="Quick clear"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            O oglinda retrovizoare cu functie anti-orbire
        </h3>

        <p>

        <p>Vei conduce mai usor pe timp de noapte daca nu esti orbit constant de farurile autovehiculelor care se
            deplaseaza in spatele tau. Oglinda retrovizoare heliomata inovatoare detecteaza automat reflexia farurilor
            din spate si reduce stralucirea luminii reflectate.</p>
        </p>
    </div>
</article>
</div>
<!--  tabTitle : SIGURANTA SI SECURITATE :: btfTabContent : 1205116177197 :: tabContent :  -->
<div id='tab4' class="secondary-tab-content">
<header class="intro-header">
    <h1 class="bigHeading">
        Siguranta
    </h1>
    <span class="highlighter"></span>

    <p class="intro-text">

    <p>Performanta la nivel inalt cere siguranta pe masura. In consecinta, noul Focus ST e echipat cu o gama larga de
        masuri avansate, pentru a-ti oferi protectie si securitate deplina. </p>
    </p>
</header>
<article class="content-column left">
    <div class="img-column"><img
            src="/assets/img/focus_st/1214556047467.jpg"
            alt="Intelligent Protection System"/><span class="fv-overlay-icon"></span></div>
    <div class="content">
        <h3 class="bigHeading02">
            Comutator ESP
        </h3>

        <p>

        <p>Poti comuta intre doua moduri ale sistemului ESP. Modul Sport iti ofera controlul total asupra cuplului
            motorului, in timp ce interventiile franei ESP sunt reduse, pentru a permite un stil de condus mai sportiv.
            Controlul tractiunii este, de asemenea, dezactivat, pentru a genera o invartire mai mare a rotilor, pentru
            tractiune imbunatatita in situatii specifice, solicitante. ESP si Controlul tractiunii pot fi dezactivate
            complet prin intermediul „Modului Off (Dezactivat)”.</p>
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
    <div class="img-column"><img
            src="/assets/img/focus_st/1214556049480.jpg"
            alt="Electronic Stability Programme"/><span class="fv-overlay-icon"></span></div>
</article>
<article class="content-column left">
    <div class="img-column"><img
            src="/assets/img/focus_st/1214556047298.jpg"
            alt="Anti-lock braking system"/><span class="fv-overlay-icon"></span></div>
    <div class="content">
        <h3 class="bigHeading02">
            Sistemele de siguranta coordonate se activeaza intr-o fractiune de secunda
        </h3>

        <p>

        <p>Focus ST este echipat cu un sistem inteligent de protectie avansat (IPS), care coordoneaza o serie de sisteme
            de siguranta pentru a-ti asigura protectie maxima tie si pasagerilor tai. Pe langa o caroserie care absoarbe
            impactul, o serie de airbaguri ajuta la protejarea ocupantilor masinii. Coloana de directie si pedalele
            sunt, de asemenea, concepute pentru a se retrage la distanta de sofer, ajutand la reducerea riscului de
            accidentare in cazul unui accident.</p>
        </p>
    </div>
</article>
<article class="content-column right">
    <div class="content">
        <h3 class="bigHeading02">
            Sisteme avansate pentru o franare mai controlata
        </h3>

        <p>

        <p>Sistemul de franare cu anti-blocare roti (ABS) si distributia electronica a fortei de franare se combina
            pentru a asigura o franare mai bine controlata. </p>
        </p>
    </div>
    <div class="img-column"><img
            src="/assets/img/focus_st/1214556048475.jpg"
            alt="Active City Stop"/><span class="fv-overlay-icon"></span></div>
</article>
<article class="content-column left">
    <div class="img-column"><img
            src="/assets/img/focus_st/1214556047719.jpg"
            alt="Bi-Xenon Headlamps with Adaptive Lighting "/><span class="fv-overlay-icon"></span></div>
    <div class="content">
        <h3 class="bigHeading02">
            Avertizare timpurie in cazul unei pene
        </h3>

        <p>

        <p>Daca vreunul dintre pneuri incepe sa piarda presiune in timpul deplasarii, Sistemul de monitorizare a
            presiunii in pneuri (TPMS) te avertizeaza imediat, prin aprinderea unei pictograme pe panoul de bord.</p>
        </p>
    </div>
</article>

<article class='two-column'>
    <div class="content-block">
        <img
            src="/assets/img/focus_st/1214556049652.jpg"
            alt="Hill Start Assist"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Sistem de reamintire pentru utilizarea centurii de siguranta, pentru un plus de siguranta
        </h3>

        <p>

        <p>Aceasta functie garanteaza siguranta si protectia pasagerilor, in timp ce te deplasezi cu autovehiculul.Cand
            unul din pasageri nu si-a fixat centura de siguranta, aceasta declanseaza avertismentele sonore si
            vizuale.</p>
        </p>
    </div>
    <div class="content-block last">
        <img
            src="/assets/img/focus_st/1214556049567.jpg"
            alt="Driver Alert"/><span class="fv-overlay-icon"></span></a>

        <h3 class="bigHeading02">
            Protejarea si asigurarea masinii impotriva hotilor
        </h3>

        <p>

        <p>O alarma Thatcham de categoria 1 este un sistem de protectie sofisticat care se armeaza automat la incuierea dubla a masinii si care declanseaza o alarma puternica daca se incearca intrarea fortata, daca autovehiculul este ridicat sau daca senzorii de miscare detecteaza miscare in interiorul vehiculului. Tehnologia este conceputa, de asemenea, pentru a preveni remorcarea nedorita a vehiculului. Este posibila armarea sistemului in mai multe moduri, ceea ce inseamna ca poti alege sa monitorizezi usile, capota sau portbagajul.</p>
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

