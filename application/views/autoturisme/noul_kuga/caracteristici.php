
<script type="text/javascript">
    // mobile sniffer
    ForceRedirectUserAgents = 'android,iphone,blackberry';
    ForceRedirectUserAgentsBypass = 'Win64,Win32';
    ForceRedirectMinWidth = '480';
    MobileHomePageRedirectURL = 'caracteristici\/\/m.ford.ro';
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
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205129234448&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205127835799&amp;tabName=galerie&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="galerie#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205129234448&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205127835799&amp;tabName=galerie&amp;c=Page&amp;site=RORO4_ENGINE">Design</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205127835016 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205129234448&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205127842606&amp;tabName=caracteristici&amp;c=Page&amp;site=RORO4_ENGINE -->
<!-- IntoID ::: articleAssetId -->
<li class="selected"><a href="caracteristici#primaryTabs"
                        data-ajaxlink="/cs/ContentServer?cid=1205129234448&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205127842606&amp;tabName=caracteristici&amp;c=Page&amp;site=RORO4_ENGINE">Caracteristici</a>
<!--This is where the main content for the selected tab will go -->
<!-- secondary tabs -->
<div class="secondary-tabs tab-content">
<nav class="sub-nav">
    <ul>
        <li><a href='#tab1' class='omt_tabName'>Experienta condusului</a></li>
        <li><a href='#tab2' class='omt_tabName'>Performanta si eficienta</a></li>
        <li><a href='#tab3' class='omt_tabName'>Confort si functionalitate</a></li>
        <li><a href='#tab4' class='omt_tabName'>Siguranta si securitate</a></li>
        <li><a href='#tab5' class='omt_tabName'>Utilitate</a></li>
    </ul>
</nav>
<!-- isBtfTab : from MidPageTabs true -->
<div class="innertab-wrapper">
<!--  tabTitle : Experienta condusului :: btfTabContent : 1205127836967 :: tabContent :  -->
<div id='tab1' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            TRECI LA VOLAN.<br><br>PREIA CONTROLUL!
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Atunci cand te afli la volanul noului Kuga, ai la dispozitie numeroase sisteme, caracteristici si tehnologii.
            Toate sunt concepute
            pentru a&nbsp;iti imbunatati fiecare calatorie in parte. Pentru ca tu sa te poti bucura in liniste si la
            maximum de aceasta experienta.
        </p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"> <img
                    src="/assets/img/kuga/1214576856306.jpg"
                    alt="Ford Kuga, intelligent All-Wheel Drive"/><span class="fv-overlay-icon"></span></a></div>
        <div class="content">
            <h3 class="bigHeading02">
                Incredere chiar si in conditii schimbatoare
            </h3>

            <p>

            <p>Un sistem disponibil cu tractiune integrala inteligenta (iAWD) poate determina cata aderenta, cata
                compensare in viraje si ce nivel de reactie sunt necesare in conditii de climat umed, uscat sau cu
                gheata si pe teren schimbator. Tehnologia este una inteligenta, asa ca poate muta tractiunea pe puntea
                din fata sau din spate, in functie de cerinte. Iar prin furnizarea de &bdquo;cuplu la cerere&rdquo;,
                sistemul asigura o&nbsp;manevrabilitate exceptionala si eficienta imbunatatita pentru un condus in
                siguranta si fara efort.</p>
            </p>
        </div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <img src="#" alt=""/>

            <h3 class="bigHeading02">
                Tempomat care se poate adapta automat
            </h3>

            <p>

            <p>Cu ajutorul tehnologiei Tempomat adaptiv, alege viteza cu care doresti sa te deplasezi, iar sistemul o va
                mentine constanta. Daca senzorul RADAR incorporat detecteaza un autoturism in fata, acesta va incetini
                masina pentru a&nbsp;mentine o distanta prestabilita. De indata ce drumul din fata este liber, sistemul
                va accelera din nou pana la viteza aleasa.</p>
            </p>
        </div>
        <div class="content-block last">
            <img src="#" alt=""/>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>
                <centre>
                    <iframe height="269" frameborder="0" width="478"
                            src="https://www.youtube.com/embed/-f59HINlXNI?list=PLH2Xw3mppUJG_d-Y9qvYu-BIIF8B5YeBo&amp;showinfo=0&amp;theme=light&amp;rel=0&amp;modestbranding=1&amp;color=white&amp;cc_load_policy=1&amp;hl=en"
                            allowfullscreen=""></iframe>
                </centre>
            </p>
            </p>
        </div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <img src="#" alt=""/>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>
                <centre>
                    <iframe width="478" height="269"
                            src="https://www.youtube.com/embed/CT36ymeJU0k?list=PLH2Xw3mppUJG_d-Y9qvYu-BIIF8B5YeBo&amp;showinfo=0&amp;theme=light&amp;rel=0&amp;modestbranding=1&amp;color=white&amp;cc_load_policy=1&amp;hl=en"
                            frameborder="0" allowfullscreen></iframe>
                </centre>
            </p>
            </p>
        </div>
        <div class="content-block last">
            <img src="#" alt=""/>

            <h3 class="bigHeading02">
                <span style="padding-left:20px">Un sistem avansat care te ajuta sa iti pastrezi banda</span>
            </h3>

            <p>

            <p style="padding-left:20px">Sistemul de mentinere a benzii de rulare utilizeaza o camera orientata in fata,
                pentru a detecta daca ai iesit in mod accidental de pe banda ta de deplasare. Sistemul de avertizare la
                parasirea benzii te avertizeaza apoi printr-o vibratie a volanului si prin afisarea unei avertizari
                vizuale. Daca reactionezi mai greu sau deloc, Sistemul de asistenta la pastrarea benzii iti poate oferi
                asistenta cu directia, pentru a te ajuta sa revii pe banda corecta. Aceasta tehnologie este conceputa
                pentru suprafete rutiere cu mai multe benzi (precum autostrazile), asa ca se va dezactiva automat la
                viteze mai mici de 65&nbsp;km/h, putand fi dezactivata si manual. </p>
            </p>
        </div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <img src="#" alt=""/>

            <h3 class="bigHeading02">
                Intrari si iesiri din parcare fara stres
            </h3>

            <p>

            <p>Cu ajutorul mai multor tehnologii diferite, Sistemul de asistenta activa la parcare face mai mult decat
                sa te directioneze in locurile de parcare paralela, te ajuta si sa iesi din acestea. Sistemul pentru
                parcare perpendiculara poate sa detecteze daca masina are loc intr-un anumit spatiu si sa te ajuta sa
                intri cu spatele in locul respectiv. Sistemul de asistenta la parcare laterala te atentioneaza, de
                asemenea, daca exista obstacole in lateral. </p>
            </p>
        </div>
        <div class="content-block last">
            <img src="#" alt=""/>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>
                <centre>
                    <iframe width="478" height="269"
                            src="https://www.youtube.com/embed/dsWLgNAm-n4?list=PLH2Xw3mppUJG_d-Y9qvYu-BIIF8B5YeBo&amp;showinfo=0&amp;theme=light&amp;rel=0&amp;modestbranding=1&amp;color=white&amp;cc_load_policy=1&amp;hl=en"
                            frameborder="0" allowfullscreen></iframe>
                </centre>
            </p>
            </p>
        </div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576849704.jpg"
                    alt="Ford Kuga exterior, front view, on the road"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                O camera care priveste intotdeauna inainte
            </h3>

            <p>

            <p>O camera miniaturala, amplasata in spatele oglinzii retrovizoare, ofera o&nbsp;imagine a drumului din
                fata si a spatiului din fata autoturismului. Aceasta permite sistemului sa identifice semnele de
                circulatie, marcajele rutiere si sursele de lumina de la alte autoturisme. Camera frontala este
                utilizata de urmatoarele sisteme inteligente: Asistenta la pastrarea benzii, Sistemul de avertizare a
                soferului, Faza lunga automata si Sistemul de recunoastere a&nbsp;indicatoarelor rutiere.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/kuga/1214576850785.jpg"
                    alt="Ford Kuga interior dashboard, Traffic Sign Recognition"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Vede semnele de circulatie pe care le-ai putea rata
            </h3>

            <p>

            <p>Indiferent daca semnele sunt pe marginea drumului sau deasupra acestuia, permanente sau temporare,
                Sistemul de recunoastere a indicatoarelor rutiere le poate identifica. O pictograma cu semnul respectiv
                de limitare a vitezei sau de interzicere a depasirii apare pe panoul de bord si se schimba de fiecare
                data cand patrunzi intr-o zona cu o limita noua. </p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576857085.jpg"
                    alt="Ford Kuga driver alert"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Sistemul de avertizare a soferului te avertizeaza atunci cand detecteaza faptul ca esti obosit
            </h3>

            <p>

            <p>Sistemul de avertizare a soferului monitorizeaza constant stilul personal de condus si este conceput sa
                detecteze orice variatie cauzata de oboseala. Daca sistemul detecteaza ca devii mai putin vigilent, o
                pictograma de avertizare apare pe afisaj, sugerandu-ti sa iei o pauza. </p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576850706.jpg"
                    alt="Ford Kuga front view in the dark, headlights, auto-high beam"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Faza lunga automata. Te ajuta sa vezi, fara a-i orbi pe ceilalti soferi
            </h3>

            <p>

            <p>O functie utila pentru deplasarile pe timp de noapte, Faza lunga automata comuta temporar la faza scurta
                atunci cand detecteaza trafic din sens opus sau un alt autoturism in fata, pentru a nu-i orbi pe
                ceilalti soferi. Ulterior, aceasta revine automat la faza lunga, asigurand vizibilitate maxima. Faza
                lunga automata este disponibila ca dotare optionala cu Asistenta la pastrarea benzii sau cu Avertizarea
                de mentinere a benzii.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/kuga/1214576853819.jpg"
                    alt="frozen white Ford Kuga rear view, on the road in the night"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Faruri care te ajuta sa vezi in viraje
            </h3>

            <p>

            <p>Farurile Ford Dynamic LED cu iluminat adaptiv ofera lumina precisa si intensa, care se regleaza automat
                pentru a se potrivi unor conditii de drum si de condus diferite. Sunt incluse, de asemenea, lumini de
                zi. In plus, Faza lunga automata se ajusteaza automat, pentru a nu-i orbi pe ceilalti soferi si, urmand
                drumul, aceste faruri noi te ajuta sa vezi mai clar in viraje. </p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576853985.jpg"
                    alt="Ford Kuga centre console, rear-view camera"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Marsarier mai simplu
            </h3>

            <p>

            <p>Stalpi opritori, banci, ziduri joase… Camera video pentru vizualizare spate iti arata tot ce se afla in
                spatele autoturismului pe un ecran integrat in consola centrala. Sistemul se activeaza automat atunci
                cand selectezi marsarierul si, folosind ghidaje virtuale, te poate ajuta sa parchezi si in cele mai
                inguste spatii. </p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576852295.jpg"
                    alt="Ford Kuga SYNC 3 with voice control and 8" touchscreen, integrated satnav" /><span
                    class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Sistemul integrat de navigatie se asigura ca ajungi la destinatie
            </h3>

            <p>

            <p>Ca parte a sistemului sau SYNC&nbsp;3 cu comanda vocala si ecran tactil de&nbsp;8", noul Ford Kuga
                dispune de navigatie prin satelit complet integrata, cu sistem audio DAB. Sistemul de navigatie raspunde
                la viteza in timp real si la cele mai recente conditii de trafic, oferind cele mai precise informatii
                despre ora estimata a&nbsp;sosirii si despre drum. </p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/kuga/1214576854665.jpg"
                    alt="Ford Kuga side view, wheels, parking distance sensors"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Senzori care faciliteaza procedura de parcare
            </h3>

            <p>

            <p>Senzorii optionali pentru distanta la parcare te ajuta sa determini distanta dintre autoturism si orice
                fel de obstacol din fata sau din spate. Atunci cand detecteaza un obiect, senzorii emit o avertizare
                sonora care se intensifica cu cat te apropii mai mult de obstacol. </p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576851625.jpg"
                    alt="Ford Kuga wing mirror, Blind Spot Information System"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Oglinzi care vad ce tu nu poti vedea
            </h3>

            <p>

            <p>Un Sistem de asistenta pentru unghiul mort (BLIS) te poate ajuta sa schimbi benzile. Aceasta deoarece
                senzorii RADAR pot scana unghiurile moarte de pe ambele parti ale autoturismului tau Ford. Si daca
                detecteaza un autoturism, o lumina portocalie afisata in mod vizibil in oglinda laterala de pe partea
                corespunzatoare se va aprinde pentru a te avertiza. BLIS este prevazut, de asemenea, cu o tehnologie
                complet noua, Alerta la intersectarea cu traficul. </p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576852549.jpg"
                    alt="Ford Kuga Cross Traffic Alert "/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Sesizeaza autoturismele pe care tu le-ai putea rata
            </h3>

            <p>

            <p>Atunci cand iesi cu spatele dintr-un loc de parcare si aveti vizibilitate redusa asupra situatiei
                traficului, sistemul de Alerta la intersectarea cu traficul (parte a Sistemului de asistenta pentru
                unghiul mort, BLIS) poate detecta autoturisme care se apropie si poate emite un avertisment sonor.
                Aceasta tehnologie declanseaza o lumina in oglinda laterala (stanga sau dreapta, in functie de directia
                din care se apropie autoturismele). </p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/kuga/1214576853736.jpg"
                    alt="copper pulse Ford Kuga centre console, side view, parking in the forest"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Un plus de control in cazul pornirilor in rampa
            </h3>

            <p>

            <p>Sistemul de asistenta la pornirea din rampa impiedica temporar alunecarea in spate atunci cand pornesti
                din panta. Sistemul functioneaza prin mentinerea presiunii la nivelul sistemului de franare pentru un
                interval suplimentar de
            <nobr>2,5 secunde</nobr>
            , asigurandu-ti mai mult timp si control atunci cand muti piciorul de pe pedala de frana pe cea de
            acceleratie. </p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Performanta si eficienta :: btfTabContent : 1205127846600 :: tabContent :  -->
<div id='tab2' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            PERFORMANTA PE CARE O VEI SAVURA.<br><br>EFICIENTA PE CARE O VEI APRECIA.
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Performanta puternica si reactie uniforma, dublate de eficienta remarcabila a&nbsp;combustibilului si
            niveluri reduse ale emisiilor: noul Kuga ofera toate acestea intr-un pachet proiectat cu precizie.</p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"> <img
                    src="/assets/img/kuga/1214576852630.jpg"
                    alt="Ford Kuga 1.5L EcoBoost petrol engine"/><span class="fv-overlay-icon"></span></a></div>
        <div class="content">
            <h3 class="bigHeading02">
                Performanta sporita si un plus de eficienta
            </h3>

            <p>

            <p>Noul Kuga are puterea asigurata de motorul pe&nbsp;benzina EcoBoost de
            <nobr>1,5 litri</nobr>
            , disponibil cu 2&nbsp;randamente de putere diferite: 150&nbsp;CP si 182&nbsp;CP. Motorul iti asigura
            puterea la care te-ai astepta din partea unui motor conventional de
            <nobr>1,6 litri</nobr>
            , insa are un consum de combustibil in regim combinat de
            <nobr>6,2 l/100 km*</nobr>
            , cu emisii de CO<sub>2</sub> de numai
            <nobr>143 g/km*</nobr>
            . Injectia directa de combustibil, turbocompresia si sincronizarea variabila independenta a camelor duble se
            combina pentru a&nbsp;oferi o performanta constanta, usor controlabila si placuta. <br>
            <br>
            <span style="font-size: smaller;">*Cifre obtinute din testele Ford (versiunea cu tractiune fata, transmisie manuala si 150&nbsp;CP). </span></p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                O gama larga de optiuni diesel
            </h3>

            <p>

            <p>Preferi un motor diesel? Atunci alege TDCi de
            <nobr>1,5 litri</nobr>
            sau TDCi de 2&nbsp;litri. Ambele variante incorporeaza cea mai recenta tehnologie de motorizare, pentru a
            imbunatati puterea, cuplul si economia, reducand in acelasi timp emisiile. Motorul TDCi de
            <nobr>1,5 litri</nobr>
            dezvolta o&nbsp;putere de 120&nbsp;CP, in timp ce motorul TDCi de 2&nbsp;litri dezvolta 150&nbsp;CP sau, in
            varianta mai puternica, 180&nbsp;CP.</p>
            </p>
        </div>
        <div class="img-column"> <img
                    src="/assets/img/kuga/1214576850450.jpg"
                    alt="Ford Kuga 1.5L TDCi or 2.0L TDCi engine"/><span class="fv-overlay-icon"></span></a></div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <img src="#" alt=""/>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>
                <centre>
                    <iframe style="margin-right:40px" height="269" frameborder="0" width="478" allowfullscreen=""
                            src="https://www.youtube.com/embed/a-VCbmssoyo?list=PLH2Xw3mppUJG_d-Y9qvYu-BIIF8B5YeBo&amp;showinfo=0&amp;theme=light&amp;rel=0&amp;modestbranding=1&amp;color=white&amp;cc_load_policy=1&amp;hl=en"></iframe>
                </centre>
            </p>
            </p>
        </div>
        <div class="content-block last">
            <img src="#" alt=""/>

            <h3 class="bigHeading02">
                <span style="padding-left:20px">Foloseste mai putin combustibil cu functia</span><br><span
                    style="padding-left:20px">Auto-Start-Stop</span>
            </h3>

            <p>

            <p style="padding-left:20px">Atunci cand te opresti la semafor sau cand astepti intr-o coloana, aceasta
                tehnologie poate opri automat motorul, fara a opri insa alimentarea sistemelor esentiale, precum
                farurile, aerul conditionat, radioul si sistemul Ford SYNC. De indata ce esti gata sa pleci de pe loc,
                apasa, ca de obicei, pe pedala de ambreiaj sau apasa pe pedala de acceleratie, in cazul unei transmisii
                automate, iar sistemul porneste din nou motorul. Sistemul
            <nobr>Auto-Start-Stop</nobr>
            este deosebit de eficient in orase, unde poate reduce consumul de combustibil cu pana la 10% (mediu
            urban).</p>
            </p>
        </div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576854148.jpg"
                    alt="grey Ford Kuga exterior, rear view, on the road"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Motoare ce respecta norme stricte
            </h3>

            <p>

            <p>Indiferent de motorul pe care il alegi pentru Fordul tau Kuga, acesta va respecta normele de emisii Euro
                Stage&nbsp;6. In cazul motoarelor pe benzina, normele de emisii Euro 6 inseamna ca motorul nu poate
                produce mai mult de:
            <nobr>1,0 g/km</nobr>
            de monoxid de carbon,
            <nobr>0,10 g/km</nobr>
            de hidrocarburi,
            <nobr>0,06 g/km</nobr>
            de oxizi de azot si 0,005 g/km de particule poluante.* <br> <br> <span style="font-size: smaller;">*Valabil doar pentru motoarele cu injectie directa </span>.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/kuga/1214576853898.jpg"
                    alt="Ford Kuga 6-speed manual gearbox"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Schimbari ale treptelor de viteza manuale si rapide
            </h3>

            <p>

            <p>O cutie de viteze manuala, cu 6&nbsp;trepte, dispune de o&nbsp;capacitate ridicata de cuplu si asigura
                schimbari uniforme, rapide si precise ale treptelor de viteza. Pentru a ajuta la optimizarea eficientei
                combustibilului, o&nbsp;pictograma de pe panoul de bord iti indica momentul optim de schimbare a treptei
                de viteza. </p>
            </p>
        </div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576851372.jpg"
                    alt="Ford Kuga 6-speed automatic Ford PowerShift gearbox"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Cutia de viteze Ford PowerShift. Rapiditate si economie de combustibil
            </h3>

            <p>

            <p>Imbinand confortul asigurat de transmisia automata cu controlul asociat unei cutii de viteze manuale,
                aceasta cutie de viteze avansata, cu sase trepte de viteza, preselecteaza urmatoarea treapta pentru
                tine, pentru a nu pierde din putere atunci cand treci de la o treapta de viteza la alta. Rezultatul:
                schimbarile treptelor de viteza extrem de rapide si fluide ale cutiei de viteze PowerShift asigura un
                condus mai placut.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/kuga/1214576850203.jpg"
                    alt="Ford Kuga steering wheel, buttons, Automatic Paddle Shift Controls"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Schimbator cu padele: bucura-te de schimbari rapide ale treptelor de viteza in cazul transmisiei
                automate
            </h3>

            <p>

            <p>Regasindu-se in mod normal pe masinile sport de inalta performanta, comenzile de schimbare automata, cu
                padele, sunt disponibile cu ambele variante de transmisii ale noului Kuga: PowerShift si automata cu 6&nbsp;trepte.
                Aceasta tehnologie inspirata de masinile de curse faciliteaza schimbarea rapida si fara efort a
                treptelor de viteza. Si, deoarece comenzile cu padele sunt montate pe volan, poti schimba treptele mai
                eficient atunci cand virezi.</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Confort si functionalitate :: btfTabContent : 1205127838789 :: tabContent :  -->
<div id='tab3' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            CONSTRUIT PENTRU CONFORT.<br><br>CONCEPUT PENTRU FUNCTIONALITATE.
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>In noul Ford Kuga, fiecare caracteristica tine cont in primul rand de nevoile tale. Asa ca, relaxeaza-te si
            bucura-te de calatorie, in timp ce o&nbsp;serie de tehnologii inteligente lucreaza pentru tine.
        </p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"> <img
                    src="/assets/img/kuga/1214576853065.jpg"
                    alt="Ford Kuga interior, steering wheel, gearshift, centre console, SYNC3 with Voice Control and Touchscreen"/><span
                    class="fv-overlay-icon"></span></a></div>
        <div class="content">
            <h3 class="bigHeading02">
                Cea mai avansata tehnologie hands-free
            </h3>

            <p>

            <p>Ford SYNC&nbsp;3 cu comanda vocala si ecran tactil iti permite sa controlezi muzica, sa initiezi si sa
                preiei apeluri de pe telefonul mobil, utilizand comenzi vocale directe si naturale. Poti sa redai
                melodii de pe o unitate USB sau MP3/iPod<sup>&reg;</sup> sau sa redai in flux muzica de pe un telefon
                compatibil Bluetooth<sup>&reg;</sup>. In plus, sistemul citeste cu voce tare chiar si mesajele text pe
                care le primesti. De asemenea, poti folosi ecranul tactil de&nbsp;8&rdquo;, care recunoaste gesturi de
                atingere si glisare pentru a&nbsp;iti oferi o&nbsp;navigare simpla si intuitiva.<br> <br> <span
                    style="font-size: smaller;">*Marca si siglele Bluetooth<sup>&reg;</sup> sunt oferite si detinute de Bluetooth SIG Inc si orice utilizare a&nbsp;acestor marci de catre Ford Motor Company Limited si de catre companiile sale partenere se face in baza unei licente. Alte marci inregistrate si denumiri comerciale apartin proprietarilor lor.</span>
            </p>
            </p>
        </div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <img src="#" alt=""/>

            <h3 class="bigHeading02">
                Hayon cu deschidere hands-free pentru deschidere<br>si inchidere fara efort
            </h3>

            <p>

            <p>Daca ai mainile ocupate, iar masina detecteaza in apropiere tocul cheii KeyFree, nu trebuie decat sa
                misti piciorul sub bara de protectie din spate si&nbsp;hayonul se va deschide (sau se va inchide)
                automat.</p>
            </p>
        </div>
        <div class="content-block last">
            <img src="#" alt=""/>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>
                <centre>
                    <iframe width="478" height="269"
                            src="https://www.youtube.com/embed/h6YXOO6Srs0?list=PLH2Xw3mppUJG_d-Y9qvYu-BIIF8B5YeBo&amp;showinfo=0&amp;theme=light&amp;rel=0&amp;modestbranding=1&amp;color=white&amp;cc_load_policy=1&amp;hl=en"
                            frameborder="0" allowfullscreen></iframe>
                </centre>
            </p>
            </p>
        </div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576854910.jpg"
                    alt="Ford Kuga interior, front seats and panoramic roof"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Plafon panoramic mare, pentru un spatiu mai luminos si mai aerisit
            </h3>

            <p>

            <p>Noul Kuga poate fi dotat, optional, cu un plafon panoramic din sticla, format din doua parti, care ori se
                deschide prin rabatare, ori se gliseaza sub partea din spate a plafonului, pentru a crea un interior
                luminos si aerisit. In timp ce plafonul permite patrunderea luminii naturale, geamul care reflecta
                lumina razelor mentine racoarea si te protejeaza de razele UV daunatoare. Un parasolar actionat electric
                iti permite, de asemenea, sa acoperi sau sa descoperi plafonul, printr-o simpla apasare de buton. </p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/kuga/1214576850036.jpg"
                    alt="Ford Kuga interior, heated steering wheel and dashboard"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Caldura, chiar si in zilele friguroase
            </h3>

            <p>

            <p>Alege scaunele din piele si cele doua scaune din fata vor fi incalzite pentru a&nbsp;iti maximiza
                confortul. Iar atunci cand te afli la volan, vei tolera mult mai usor zilele geroase multumita unui
                volan incalzit.</p>
            </p>
        </div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576856223.jpg"
                    alt="Ford Kuga windscreen, Quickclear"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Curata-ti parbrizul repede, cu Quickclear
            </h3>

            <p>

            <p>Aceasta dotare inteligenta este creata pentru a iti permite sa pornesti rapid in diminetile geroase. Nu
                trebuie decat sa atingi un buton si filamente extrem de subtiri se supraincalzesc pentru a curata
                parbrizul de gheata, ceata si abur, precum si pentru a ajuta la dezghetarea stergatoarelor. Sistemul
                actioneaza in cateva secunde, chiar si la temperaturi negative.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/kuga/1214576858676.jpg"
                    alt="red Ford Kuga exterior, windscreen with wipers"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Stergatoare care se regleaza automat, in functie de ploaie
            </h3>

            <p>

            <p>Stergatoarele de parbriz cu senzor de ploaie se activeaza in secunda in care detecteaza stropi de apa pe
                parbrizul autoautoturismului, iar apoi isi regleaza viteza pentru a face fata oricaror conditii meteo.
                Poti alege unul dintre cele sase niveluri de sensibilitate, care determina cat de multa umiditate
                trebuie sa se acumuleze inainte ca stergatoarele sa intre in actiune pentru a o indeparta. Stergatoarele
                cu senzor de ploaie sunt disponibile ca dotare optionala cu farurile automate.</p>
            </p>
        </div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576852897.jpg"
                    alt="Ford Kuga interior, Electronic Parking Brake"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Frana de parcare cu buton
            </h3>

            <p>

            <p>O frana electronica de parcare inteligenta face ca maneta traditionala sa fie de acum doar o amintire.
                Prin intermediul consolei centrale, acum poti actiona fara efort frana de parcare cu un simplu
                comutator. Pe langa faptul ca iti face viata mai usoara, aceasta caracteristica utila iti asigura si mai
                mult spatiu de depozitare.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/kuga/1214576851455.jpg"
                    alt="Ford KugaSYNC3, premium Sony system, with DAB radio"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Sunet de inalta fidelitate
            </h3>

            <p>

            <p>Un sistem audio de inalta calitate este inclus in pachetul de dotari standard cu Ford SYNC&nbsp;3 si
                asigura o claritate exceptionala a sunetului in intreaga masina. Un sistem Sony premium optional, cu
                radio DAB, iti ofera o experienta de sunet superioara.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576852378.jpg"
                    alt="Ford Kuga interior, gearshift and air conditioning control, Dual zone Electronic Automatic Temperature Control"/><span
                    class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Regleaza temperatura ideala pentru tine si pentru pasager
            </h3>

            <p>

            <p>Cu ajutorul Sistemului de climatizare automata cu zona dubla de control (dotare optionala), poti selecta
                temperaturile pe care tu si pasagerul din fata le preferati, iar sistemul le va mentine cu ajutorul
                tehnologiei avansate de climatizare.</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576858006.jpg"
                    alt="Ford Kuga interior, Ford KeyFree System, keyfob"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Accesul fara cheie face viata mai usoara
            </h3>

            <p>

            <p>Cand te apropii de masina, sistemul Ford KeyFree detecteaza imediat cheia cu telecomanda, chiar daca se
                afla in buzunar sau in geanta. Usile se descuie, iar dupa ce te asezi, nu este nevoie de vreo cheie de
                contact. Apasa ambreiajul, actioneaza butonul de pornire Ford Power si motorul porneste.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/kuga/1214576848712.jpg"
                    alt="Ford Kuga interior, dashboard, MyKey®"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Utilizare in comun a masinii fara probleme, cu ajutorul caracteristicii MyKey<sup>®</sup>
            </h3>

            <p>

            <p>Aceasta tehnologie iti permite sa setezi limita maxima de viteza, sa setezi un semnal care sa atraga
                atentia asupra purtarii centurii de siguranta si chiar sa controlezi volumul sistemului audio. Fiind
                creata pentru a iti asigura linistea atunci cand imprumuti masina unui prieten sau unui membru al
                familiei, tehnologia Ford MyKey<sup>&reg;</sup> este usor de utilizat. Trebuie doar sa introduci cheia
                de contact, sa pornesti masina si sa urmezi instructiunile pentru a programa restrictiile dorite pentru
                cheia respectiva: Ford MyKey<sup>&reg;</sup>. Poti pastra personal cheia de &bdquo;admin&rdquo; si chiar
                sa ai mai multe exemplare din ambele chei, daca doresti.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576848795.jpg"
                    alt="grey Ford Kuga exterior, power-foldable heated mirror"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Cu oglinzi care se pot plia singure
            </h3>

            <p>

            <p>Este usor sa deteriorezi oglinzile laterale atunci cand intri sau iesi din spatii stramte sau cand esti
                parcat pe o strada ingusta. Oglinzile laterale pliabile electric, optionale, te pot ajuta sa eviti acest
                lucru, pliindu-se catre interior la atingerea unui buton. Si pentru ca sunt incalzite, poti pleca la
                drum mai repede in diminetile geroase.</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576857757.jpg"
                    alt="Ford Kuga interior with blue ambient lighting, leather front seats, steering wheel and centre console"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Culori care se asorteaza cu starea ta de spirit
            </h3>

            <p>

            <p>Iluminarea ambientala a noului Kuga evidentiaza cu o lumina subtila consola centrala, buzunarele din
                portiere, manerele portierelor si spatiile pentru picioare din fata. Cu sapte culori de accent diferite,
                de la rosu cald la albastru rece, poti alege cate o&nbsp;nuanta pentru fiecare zi a saptamanii.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/kuga/1214576854240.jpg"
                    alt="Ford Kuga interior, auto-dimming rear-view mirror"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                O oglinda retrovizoare cu functie anti-orbire
            </h3>

            <p>

            <p>Vei conduce mai usor pe timp de noapte daca nu esti orbit in mod constant de farurile autoautoturismelor
                care se deplaseaza in spatele tau. De aceea, oglinda retrovizoare heliomata automata a noului Kuga
                detecteaza automat reflexia farurilor din spate si reduce stralucirea luminii reflectate.</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Siguranta si securitate :: btfTabContent : 1205127841428 :: tabContent :  -->
<div id='tab4' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            SIGURANTA TA ESTE PRIORITARA
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>In noul Kuga, siguranta si securitatea ta si a&nbsp;pasagerilor tai sunt extrem de importante. Numeroasele
            masuri de siguranta
            sunt concepute pentru a&nbsp;iti oferi niveluri ridicate de protectie pentru linistea ta.
        </p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"> <img
                    src="/assets/img/kuga/1214576857494.jpg"
                    alt="frozen white Ford Kuga on the road, active city stop"/><span
                    class="fv-overlay-icon"></span></a></div>
        <div class="content">
            <h3 class="bigHeading02">
                Pentru a evita coliziunile la viteza mica, noul Ford Kuga franeaza in locul tau
            </h3>

            <p>

            <p>Sistemul Active City Stop te ajuta sa eviti sau sa reduci efectele unei coliziuni in trafic lent sau la
                viteze sub 50&nbsp;km/h. Daca sistemul detecteaza ca autoturismul din fata s-a oprit brusc, va actiona
                automat franele.</p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Un sistem avansat de airbaguri
            </h3>

            <p>

            <p>Un sistem de airbaguri care include airbaguri frontale, un airbag pentru genunchii soferului, airbaguri
                cortina si airbaguri laterale pentru randul din fata.</p>
            </p>
        </div>
        <div class="img-column"> <img
                    src="/assets/img/kuga/1214576858248.jpg"
                    alt="Ford Kuga front seat airbags, a driver’s knee airbag, curtain airbags and side airbags in the front row"/><span
                    class="fv-overlay-icon"></span></a></div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576850619.jpg"
                    alt="Ford Kuga Ford SYNC with Emergency Assistance"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Ford SYNC cu Asistenta de urgenta: poate suna dupa ajutor in locul tau
            </h3>

            <p>

            <p>Un aspect important al tehnologiei Ford SYNC care iti poate salva viata este Asistenta de urgenta*. In
                cazul putin probabil al unui accident, atunci cand se activeaza airbagul sau se dezactiveaza pompa de
                combustibil, tehnologia te poate ajuta sa efectuezi un apel direct la Serviciile de urgenta. Daca este
                cazul, poti alege sa intrerupi apelul sau sa discuti personal, daca este necesar. Un aspect extrem de
                important este faptul ca sistemul va furniza informatii vitale, precum coordonatele tale GPS, chiar si
                in cazul in care ti-ai pierdut cunostinta.*<br>
                <br>
                <span style="font-size: smaller;">*Asistenta de urgenta Ford este disponibila in peste 40 de tari din Europa. Aceasta caracteristica functioneaza atunci cand este conectata cu un telefon mobil compatibil pe care il aveti la dumneavoastra, in momentul in care un airbag este declansat (cu exceptia airbagurilor pentru genunchi) sau atunci cand un senzor care inregistreaza o coliziune intrerupe pompa de combustibil. Functia de mesagerie si Asistenta de urgenta nu sunt acceptate in toate limbile europene. Consultati site-ul Web Ford local pentru cele mai recente informatii.</span>
                <see p="" latest="" for="" website="" ford="" local="" your=""></see>
            </p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/kuga/1214576851206.jpg"
                    alt="Ford Kuga ISOFIX child seat"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Ajutor pentru mentinerea copiilor in siguranta
            </h3>

            <p>

            <p>Noul Ford Kuga este conceput pentru a tine copiii mici in siguranta in fiecare calatorie. Si este dotat
                cu puncte ISOFIX pentru fixarea scaunului pentru copil in spate, asa ca poti folosi cu usurinta doua
                scaune pentru copii.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576857923.jpg"
                    alt="grey Ford Kuga rear view on the road"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Controlul electronic al stabilitatii te ajuta sa mentii controlul
            </h3>

            <p>

            <p>Conceput pentru a&nbsp;te ajuta sa mentii controlul, Sistemul de control electronic al stabilitatii (ESC)
                monitorizeaza in mod constant deplasarea masinii, detecteaza orice abateri de la traseul ales (daca
                autoturismul incepe sa patineze, de exemplu) si te ajuta automat la corectarea pozitiei de drum. </p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576854068.jpg"
                    alt="frozen white Ford Kuga on the road in the night, anti-lock braking system, emergency brake assist, electronic brake-force distribution"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Sisteme avansate pentru o franare mai controlata
            </h3>

            <p>

            <p>Sistemul de franare cu anti-blocare roti (ABS) si distributia electronica a fortei de franare (EBD)
                asigura o franare mai bine controlata. Sistemul de asistenta la franarea de urgenta (EBA) ajuta
                autoturismul Kuga sa atinga eficienta maxima de franare in cazul unei situatii de urgenta. Sistemul
                functioneaza prin detectarea presiunii aplicate de sofer pe pedala de frana si prin cresterea automata a
                acestei presiuni, daca este cazul.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/kuga/1214576848878.jpg"
                    alt="Ford Kuga EURO NCAP 5-star safety rating"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Evaluare a sigurantei de 5 stele
            </h3>

            <p>

            <p>Noul Kuga este dotat cu un pachet de siguranta excelent, acesta incluzand totul, de la airbaguri standard
                pentru sofer si pasager, airbaguri laterale si tip cortina si un airbag pentru genunchii soferului, pana
                la o&nbsp;serie de noi tehnologii avansate in acest segment, precum Active City Stop si Asistenta de
                urgenta. </p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Utilitate :: btfTabContent : 1205127845471 :: tabContent :  -->
<div id='tab5' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            ESTI PREGATIT DE ACTIUNE?<br><br>NOUL KUGA ESTE!
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Nu trebuie decat sa privesti noul Kuga si te vei simti de neoprit.<br> <br> Si nu este de mirare. Acesta este
            un autoturism construit pentru a&nbsp;te ajuta sa dai frau liber spiritului de aventura. Astfel, dispune de
            toate caracteristicile si tehnologiile necesare pentru a&nbsp;te duce la sportul, jocul sau activitatea
            preferata...</p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"> <img
                    src="/assets/img/kuga/1214576858761.jpg"
                    alt="frozen white Ford Kuga tow bar"/><span class="fv-overlay-icon"></span></a></div>
        <div class="content">
            <h3 class="bigHeading02">
                O bara de remorcare retractabila: mereu la indemana cand ai nevoie
            </h3>

            <p>

            <p>Barele de remorcare sunt, de regula, fixe, asa ca se vad in permanenta in spatele autoturismului. Insa
                bara de remorcare optionala cu eliberare electrica a&nbsp;noului Kuga faciliteaza ascunderea barei de
                remorcare in spatele barei de protectie atunci cand nu este folosita.</p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Mentinerea remorcii pe banda<br>de rulare
            </h3>

            <p>

            <p>Sistemul de stabilizare a&nbsp;remorcii detecteaza &bdquo;serpuirea&rdquo; sau balansarea remorcii si
                reduce viteza autoturismului pentru a&nbsp;ajuta la corectarea problemei, facand ca remorcarea sa fie
                mai controlata. Sistemul incetineste autoturismul, reducand cuplul motorului si crescand treptat
                presiunea franelor pe roti.</p>
            </p>
        </div>
        <div class="img-column"> <img
                    src="/assets/img/kuga/1214576857584.jpg"
                    alt="grey Ford Kuga fron view, on the road, trailer sway control"/><span
                    class="fv-overlay-icon"></span></a></div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576854319.jpg"
                    alt="Ford Kuga interior stowage areas"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Spatiu pentru tot ce ai nevoie
            </h3>

            <p>

            <p>Spatiul din portbagajul noului Ford Kuga este atat generos, cat si flexibil. Astfel incat sa poti lua cu
                tine tot ce iti trebuie pentru un weekend sportiv, o vacanta cu familia sau o „fuga” la cumparaturi. In
                interiorul autoturism se afla numeroase zone de depozitare utile, pentru tot felul de lucruri, de la
                sticle mari de apa, un atlas de dimensiuni A4 si o umbrela, la obiecte mai mici, precum ochelarii de
                soare, telefonul mobil si cheile.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/kuga/1214576856140.jpg"
                    alt="Ford Kuga spacious interior, luggage compartment floor with a hidden compartment below"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Adapteaza spatiul din portbagaj dupa nevoie
            </h3>

            <p>

            <p>Oferind simultan confortul necesar pentru cinci ocupanti, podeaua compartimentului de bagaje poate fi
                lasata in jos, pentru a crea un spatiu mai adanc, de 406&nbsp;litri. Sau, in modul cu doua locuri, o
                poti ridica, pentru a crea o&nbsp;zona de incarcare plata si o capacitate impresionanta, de
            <nobr>1.603 litri</nobr>
            , cu un compartiment ascuns dedesubt.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576858421.jpg"
                    alt="Ford Kuga spacious interior, easy-fold rear seats "/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Bancheta usor pliabila
            </h3>

            <p>

            <p>Bancheta usor pliabila se imparte
            <nobr>60:40</nobr>
            si poate fi rabatata printr-o operatie simpla, cu o&nbsp;singura mana, pentru a&nbsp;crea mai mult spatiu in
            spate.</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/kuga/1214576852461.jpg"
                    alt="red Ford Kuga rear view, optional roof rails"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Transporta mai multe cu sinele optionale pentru plafon
            </h3>

            <p>

            <p>Sinele optionale pentru plafon pot imbunatati caracterul practic si imaginea noului tau Kuga. Sunt, de
                asemenea, necesare pentru montarea de bare transversale si a&nbsp;altor accesorii. </p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/kuga/1214576853155.jpg"
                    alt="grey Ford Kuga wheel, tyre rressure monitoring system"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Te avertizeaza daca pneurile pierd presiune
            </h3>

            <p>

            <p>Intotdeauna este important sa mentii presiunea corecta in pneuri, pentru a&nbsp;te ajuta sa economisesti
                combustibil, sa protejezi pneurile si sa fii in siguranta. De aceea, senzorii monitorizeaza constant
                fiecare roata si te alerteaza daca apare o&nbsp;problema, astfel incat sa poti trage pe dreapta, sa
                verifici si sa umfli pneul sau sa schimbi roata.</p>
            </p>
        </div>
    </article>
</div>
</div>
</div>
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
