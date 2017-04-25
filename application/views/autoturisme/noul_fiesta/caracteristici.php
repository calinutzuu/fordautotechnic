
<script type="text/javascript">
    // mobile sniffer
    ForceRedirectUserAgents = 'android,iphone,blackberry';
    ForceRedirectUserAgentsBypass = 'Win64,Win32';
    ForceRedirectMinWidth = '480';
    MobileHomePageRedirectURL = 'caracteristici\/\/m.ford.ro';
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
<li><a href="design#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205135250945&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205135246849&amp;tabName=design&amp;c=Page&amp;site=RORO4_ENGINE">Design</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205135250916 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205135250945&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205135247794&amp;tabName=caracteristici&amp;c=Page&amp;site=RORO4_ENGINE -->
<!-- IntoID ::: articleAssetId -->
<li class="selected"><a href="caracteristici#primaryTabs"
                        data-ajaxlink="/cs/ContentServer?cid=1205135250945&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205135247794&amp;tabName=caracteristici&amp;c=Page&amp;site=RORO4_ENGINE">Caracteristici</a>
<!--This is where the main content for the selected tab will go -->
<!-- secondary tabs -->
<div class="secondary-tabs tab-content">
<nav class="sub-nav">
    <ul>
        <li><a href='#tab1' class='omt_tabName'>Experienta la volan</a></li>
        <li><a href='#tab2' class='omt_tabName'>Performanta si eficienta</a></li>
        <li><a href='#tab3' class='omt_tabName'>Confort</a></li>
        <li><a href='#tab4' class='omt_tabName'>Siguranta si securitate</a></li>
    </ul>
</nav>
<!-- isBtfTab : from MidPageTabs true -->
<div class="innertab-wrapper">
<!--  tabTitle : Experienta la volan :: btfTabContent : 1205135247936 :: tabContent :  -->
<div id='tab1' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            Cu adevarat inteligent
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Tehnologia trebuie sa aiba intotdeauna un scop. Atunci cand pornesti noul Ford Fiesta, dai viata unei game
            complete de caracteristici si sisteme inteligente. De exemplu, Asistenta activa la parcare, Tempomatul
            adaptiv, Asistenta la pastrarea benzii, Recunoasterea indicatoarelor rutiere...<br> Pregateste-te sa te
            bucuri de tehnologii atat de inteligente si de utile, incat te vei intreba cum de
        <nobr>te-ai</nobr>
        descurcat fara ele pana acum.</p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"> <img
                    src="/assets/img/1214606261011.jpg"
                    alt="Intrari si iesiri din parcare fara stres"/><span class="fv-overlay-icon"></span></a></div>
        <div class="content">
            <h3 class="bigHeading02">
                Intrari si iesiri din parcare fara stres
            </h3>

            <p>

            <p>Parcarea poate fi cu adevarat o&nbsp;bataie de cap. Dar nu si cu Fiesta. Si aceasta deoarece sistemul de
                Asistenta activa la parcare foloseste o&nbsp;combinatie de tehnologii pentru
            <nobr>a-ti</nobr>
            face mai mult decat sa te directioneze in locurile de parcare. Sistemul de asistenta la iesirea din parcare
            te ajuta si sa iesi din acestea. Sistemul pentru parcare paralela si perpendiculara poate sa detecteze daca
            masina are loc
            <nobr>intr-un</nobr>
            anumit spatiu si sa te bage cu spatele in locul respectiv. Iar sistemul de asistenta la parcarea laterala te
            atentioneaza, de asemenea, daca exista obstacole in lateral.</p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Tempomat care se poate adapta automat
            </h3>

            <p>

            <p>Cu ajutorul tehnologiei Tempomat adaptiv, alegi viteza cu care doresti sa te deplasezi, iar sistemul o&nbsp;va
                mentine constanta. Daca senzorul RADAR incorporat detecteaza o&nbsp;masina in fata, acesta va incetini
                vehiculul tau Fiesta pentru a&nbsp;mentine o&nbsp;distanta prestabilita. De indata ce drumul din fata
                este liber, sistemul va accelera din nou pana la viteza aleasa.</p>
            </p>
        </div>
        <div class="img-column"> <img
                    src="/assets/img/1214606262306.jpg"
                    alt=" Tempomat care se poate adapta automat"/><span class="fv-overlay-icon"></span></a></div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <img
                    src="/assets/img/1214606267415.jpg"
                    alt="Un sistem avansat care te ajuta sa pastrezi banda de rulare"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Un sistem avansat care te ajuta sa pastrezi banda de rulare
            </h3>

            <p>

            <p>Sistemul de mentinere a&nbsp;benzii de rulare utilizeaza o&nbsp;camera orientata in fata, pentru a&nbsp;detecta
                daca ai iesit in mod accidental de pe banda ta de deplasare. Sistemul de avertizare la parasirea benzii
                te avertizeaza apoi
            <nobr>printr-o</nobr>
            vibratie a&nbsp;volanului si prin afisarea unui indicator de avertizare vizuala. Daca reactionati mai greu
            sau nu reactionati deloc, Sistemul de asistenta la pastrarea benzii iti poate oferi asistenta cu cuplul de
            directie, pentru a&nbsp;te ajuta sa revii pe banda corecta. Aceasta tehnologie este conceputa pentru
            suprafete rutiere cu mai multe benzi (precum autostrazile), asa ca se va dezactiva automat la viteze mai
            mici de
            <nobr>65 km/h,</nobr>
            putand fi dezactivata si manual.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/1214606266099.jpg"
                    alt="Vede semnele de circulatie pe care le-ai putea rata"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Vede semnele de circulatie pe care le-ai putea rata
            </h3>

            <p>

            <p>Indiferent daca semnele sunt pe marginea drumului sau deasupra acestuia, permanente sau temporare,
                sistemul de Recunoastere a&nbsp;indicatoarelor rutiere le poate identifica. O&nbsp;pictograma cu semnul
                respectiv de limitare a vitezei sau de interzicere a&nbsp;depasirii apare pe panoul de bord si se
                schimba de fiecare data cand patrunzi
            <nobr>intr-o</nobr>
            zona cu o&nbsp;limita noua.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/1214606265505.jpg"
                    alt="Faza lunga automata. Te ajuta sa vezi, fara a-i orbi pe ceilalti soferi"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Faza lunga automata. Te ajuta sa vezi, fara
                <nobr>a-i</nobr>
                orbi pe ceilalti soferi
            </h3>
            <p>

            <p>O functie utila pentru deplasarile pe timp de noapte, faza lunga automata comuta temporar la faza scurta
                atunci cand detecteaza trafic din sens opus sau un alt autovehicul in fata, pentru
            <nobr>a nu-i</nobr>
            orbi pe ceilalti soferi. Ulterior, aceasta revine automat la faza lunga, asigurand vizibilitate maxima.</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/1214606262137.jpg"
                    alt="Tehnologie care vede ce tu nu poti vedea"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Tehnologie care vede ce tu nu poti vedea
            </h3>

            <p>

            <p>Un Sistem de asistenta pentru unghiul mort foloseste senzori RADAR care pot scana unghiurile moarte de pe
                ambele parti ale vehiculului tau Fiesta. Si daca detecteaza un vehicul pe care tu nu il poti vedea, o&nbsp;lumina
                portocalie afisata in mod vizibil in oglinda laterala de pe partea corespunzatoare se va aprinde pentru
                a&nbsp;te avertiza. Daca iesi cu spatele
            <nobr>dintr-un</nobr>
            loc de parcare si ai vizibilitate redusa asupra situatiei traficului, Alerta la intersectarea cu traficul
            poate detecta vehicule care se apropie si poate emite un sunet de avertizare. Aceasta tehnologie
            declanseaza, de asemenea, o&nbsp;lumina pe oglinda retrovizoare exterioara: stanga sau dreapta, in functie
            de directia din care se apropie vehiculele.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/1214606266902.jpg"
                    alt="Directie servoasistată care reactionează la orice situatie"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Directie servoasistată care reactionează la orice situatie
            </h3>

            <p>

            <p>Directia servoasistată electric (EPAS) se ajustează automat la viteza de rulare si la conditiile de drum.
                La viteze reduse, sistemul face ca rotirea volanului să fie mai usoară, &icirc;mbunătătind
                manevrabilitatea. La viteze ridicate, c&acirc;nd aveti nevoie de control mai mare, directia devine mai
                rigidă. Acum, cu ajutorul controlului asupra devierii de la cursul normal, EPAS ia, de asemenea, &icirc;n
                calcul, v&acirc;ntul care bate din fată si alte conditii de drum, &icirc;n timp ce controlul activ al
                vibratiilor reduce vibratiile nedorite resimtite la nivelul volanului.</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Performanta si eficienta :: btfTabContent : 1205135250900 :: tabContent :  -->
<div id='tab2' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            Bucura-te de performanta. Imbratiseaza eficienta.
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>De ce sa alegi intre performanta si eficienta? Cu noul Ford Fiesta le poti avea pe ambele. Motorul Ford
            EcoBoost pe benzina, de
        <nobr>1,0 litri,</nobr>
        este castigator al premiului Motorul international al anului de cinci ori*, iar acum este la dispozitia ta.
        Tehnologia avansata te ajuta sa economisesti combustibil si sa reduci poluarea, iar dinamica de condus
        sofisticata si manevrabilitatea precisa iti asigura o&nbsp;experienta la volan placuta si fara niciun compromis.<br>
        <br> <span style="font-size: smaller;">*La categoria sub 1,0 litri</span></p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"> <img
                    src="/assets/img/1214606262218.jpg"
                    alt="Mai multa putere. Mai multa eficienta. Mai multa placere."/><span
                    class="fv-overlay-icon"></span></a></div>
        <div class="content">
            <h3 class="bigHeading02">
                Mai multa putere. Mai multa eficienta. Mai multa placere.
            </h3>

            <p>

            <p>Motorul revolutionar pe benzina <a HREF="http://www.ford.ro/Tehnologie/Performanta/Motor-EcoBoost"><span
                        style="color: rgb(0, 0, 255);"><u>Ford EcoBoost</u></span></a> de
            <nobr>1,0 litri,</nobr>
            cu 3&nbsp;cilindri, iti asigura puterea de 140&nbsp;CP la care
            <nobr>te-ai</nobr>
            astepta de la un motor de 1,6&nbsp;litri conventional, insa cu o&nbsp;economie mai mare de combustibil si
            emisii de CO<sub>2</sub> de doar 107 g/km. Castig pe toate fronturile. Poti, de asemenea, sa alegi un motor
            pe benzina de 1,1&nbsp;litri, care iti pune la dispozitie pana la 85&nbsp;CP, in timp ce mentine emisiile la
            numai 101&nbsp;g/km.</p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Puterea diesel
            </h3>

            <p>

            <p>Preferi un motor diesel? Atunci alege motorul TDCi de
            <nobr>1,5 litri,</nobr>
            care dezvolta nu mai putin de 85&nbsp;CP si ofera un consum de numai
            <nobr>3,5 l/100 km,</nobr>
            cu emisii de CO<sub>2</sub> de numai 88*&nbsp;g/km. Daca doresti si mai multa putere, plus eficienta, un
            motor de
            <nobr>120 CP</nobr>
            iti ofera
            <nobr>3,2 l/100 km</nobr>
            si emisii de CO<sub>2</sub> de 89&nbsp;g/km.<br> <br> <span style="font-size: smaller;">*Doar cu pneuri de vara, de 15&nbsp;inchi.</span></p>
            </p>
        </div>
        <div class="img-column"> <img
                    src="/assets/img/1214606267578.jpg"
                    alt="Puterea diesel"/><span class="fv-overlay-icon"></span></a></div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <img
                    src="/assets/img/1214606264105.jpg"
                    alt="Foloseste mai putin combustibil cu functia Auto"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Foloseste mai putin combustibil cu functia Auto<br>Start-Stop
            </h3>

            <p>

            <p>Atunci cand te opresti la semafor sau cand masina ta Fiesta asteapta
            <nobr>intr-o</nobr>
            coloana, aceasta tehnologie poate opri automat motorul, fara a&nbsp;opri insa alimentarea sistemelor
            esentiale, precum farurile, aerul conditionat si sistemul Ford SYNC&nbsp;3. De indata ce esti gata sa pleci
            de pe loc, apasa, ca de obicei, pe pedala de ambreiaj sau apasa pe pedala de acceleratie, in cazul unei
            transmisii automate, iar sistemul porneste din nou motorul. Sistemul Auto Start-Stop este deosebit de
            eficient in orase, unde poate reduce consumul de combustibil cu pana la 10% (mediu urban).</p>
            </p>
        </div>
        <div class="content-block last">
           <img
                    src="/assets/img/1214606266634.jpg"
                    alt="Eficienta prin simpla apasare a unui buton"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Eficienta prin simpla apasare a unui buton
            </h3>

            <p>

            <p>O caracteristica ingenioasa a noului Fiesta o&nbsp;reprezinta butonul Eco. Apasa-l pentru a-l activa si o&nbsp;serie
                de sisteme si de setari se vor ajusta pentru a&nbsp;te ajuta sa economisesti combustibil. De exemplu,
                rata de accelerare poate fi redusa, turatia la ralanti poate fi micsorata si viteza ventilatorului
                sistemului de climatizare poate fi scazuta. Combinate, toate aceste mici lucruri pot face o&nbsp;mare
                diferenta.</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Confort :: btfTabContent : 1205135247643 :: tabContent :  -->
<div id='tab3' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            Relaxare si tonicitate. Valoare si inteligenta.
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Daca tehnologiile inteligente functioneaza fara probleme in casa ta, ar trebui sa faca la fel si in masina.
            De aceea, noul Ford Fiesta este echipat cu SYNC&nbsp;3, pentru
        <nobr>a-ti</nobr>
        usura viata, cu B&amp;O&nbsp;PLAY pentru a iti face calatoriile mai distractive si cu un acoperis panoramic ce
        poate fi deschis, pentru a&nbsp;face ca fiecare deplasaresa fie si mai placuta.
        <nobr>Pregateste-te</nobr>
        sa descoperi toate acestea si multe altele
        <nobr>intr-un</nobr>
        spatiu care iti ofera confortul si utilitatea la care visezi.</p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"> <img
                    src="/assets/img/1214606265415.jpg"
                    alt="Muzica ta favorita, asa cum ar trebui sa se auda"/><span class="fv-overlay-icon"></span></a>
        </div>
        <div class="content">
            <h3 class="bigHeading02">
                Muzica ta favorita, asa cum ar trebui sa se auda
            </h3>

            <p>

            <p>Oricare ar fi gusturile tale, muzica merita sa sune asa cum a&nbsp;intentionat artistul. Si exact asa se
                intampla in noul Fiesta. De ce? Deoarece este disponibil cu B&amp;O&nbsp;PLAY. Acest sistem audio
                premium de 675&nbsp;wati ofera un sunet bogat si puternic, printr-un sistem ce include 10&nbsp;difuzoare,
                woofer si subwoofer. Iar aceasta tehnologie avansata a&nbsp;fost special conceputa, dezvoltata si
                reglata pentru noul Fiesta de catre specialistii in acustica ai <a
                    HREF="http://www.ford.ro/Tehnologie/Inteligenta/b-and-o-play"><span
                        style="color: rgb(0, 0, 255);"><u>B&amp;O PLAY</u></span></a>. Așa ca mareste volumul si
                bucura-te de trupele si piesele favorite in sala de concerte a&nbsp;masinii tale.</p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Tehnologie fara cusur, pe care o&nbsp;poti controla vocal
            </h3>

            <p>

            <p>Ford <a HREF="http://www.ford.ro/Tehnologie/Inteligenta/SYNC"><span style="color: rgb(0, 0, 255);"><u>SYNC
                            3</u></span></a> este un sistem de ultima ora ce iti permite sa fii conectat(a) in
                permanenta si sa controlezi telefonul, muzica si sistemul de navigatie cu ajutorul unor comenzi vocale
                intuitive sau al unui ecran tactil color de 8&rdquo;. Se conecteaza la Apple CarPlay si Android Auto,
                iar cu AppLink, poti sa accesezi unele dintre aplicatiile tale preferate de pe smartphone, inclusiv
                Spotify. Live Traffic te poate ajuta sa eviti ambuteiajele. Si poti chiar sa soliciti o&nbsp;lista cu
                restaurantele locale, rostind, pur si simplu, &bdquo;I'm hungry&rdquo; (Mi-e foame) sau poti accesa
                Ghidul Michelin pentru a te ajuta sa alegi locuri unde sa mananci si sa faci rezervarile.</p>
            </p>
        </div>
        <div class="img-column"><img
                    src="/assets/img/1214606264883.jpg"
                    alt="Tehnologie fara cusur, pe care o poti controla vocal"/><span
                    class="fv-overlay-icon"></span></a></div>
    </article>
    <article class='two-column'>
        <div class="content-block">
           <img
                    src="/assets/img/1214606261800.jpg"
                    alt="Plafon panoramic mare, pentru un spatiu mai luminos si mai aerisit"/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Plafon panoramic mare, pentru un spatiu mai luminos si mai aerisit
            </h3>

            <p>

            <p>Spre deosebire de majoritatea masinilor de marime similara, noul Ford Fiesta poate fi dotat, optional, cu
                un plafon panoramic din sticla, format din doua parti. Acesta ori se deschide prin rabatare, ori se
                gliseaza sub partea din spate a&nbsp;plafonului, pentru a&nbsp;crea un interior luminos si aerisit. In
                timp ce plafonul permite patrunderea luminii naturale, geamul care reflecta lumina razelor mentine
                racoarea si te protejeaza de razele UV daunatoare. Un parasolar actionat electric iti permite, de
                asemenea, sa acoperi sau sa descoperi plafonul,
            <nobr>printr-o</nobr>
            simpla apasare de buton.</p>
            </p>
        </div>
        <div class="content-block last">
           <img
                    src="/assets/img/1214606267162.jpg"
                    alt="Masina ta Fiesta. Exact asa cum o doresti"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Masina ta Fiesta. Exact asa cum o&nbsp;doresti
            </h3>

            <p>

            <p>Doresti sa iti personalizezi noul Fiesta si sa il faci cu adevarat al tau? Dispui de numeroase optiuni
                pentru a&nbsp;face exact acest lucru. De la culori de exterior solide, metalice, in doua nuante si
                speciale la accente de interior, stiluri de tapiterie si cusaturi, plus modele variate de jante…
                Indiferent cum doresti sa arate masina ta, vei gasi totul in pachetele noastre pentru personalizarea
                vehiculului.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/1214606264358.jpg"
                    alt="Loc pentru a vă întinde picioarele"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Loc pentru a&nbsp;vă întinde picioarele
            </h3>

            <p>

            <p>Printr-o utilizare inteligentă a&nbsp;spatiului, noul Ford Fiesta iti oferă acum mai mult loc la
                picioare, at&acirc;t &icirc;n fată, c&acirc;t si &icirc;n spate. Si, deoarece scaunele din spate au
                spatare subtiri, sculptate, pasagerii pot sta si mai &icirc;n spate.</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/1214606261101.jpg"
                    alt="Scaune si volan care iti tin de cald"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Scaune si volan care iti tin de cald
            </h3>

            <p>

            <p>Sunt disponibile, optional, scaune incalzite, atat pentru sofer, cat si pentru pasagerul din fata. Exista
                trei setari de incalzire diferite, pe care le poti stabili cu usurinta prin intermediul comutatoarelor
                cu buton, care controleaza scaunele incalzite din stanga si din dreapta, o&nbsp;lumina rosie
                aprinzandu-se pentru a&nbsp;indica setarea nivelului de incalzire ales. Indiferent daca este o&nbsp;dimineata
                friguroasa, o&nbsp;zi racoroasa sau o&nbsp;noapte geroasa, volanul incalzit iti va incalzi cu siguranta
                mainile mai bine decat o&nbsp;pereche de manusi.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/1214606266814.jpg"
                    alt="Sistemul Key-free inseamna mai putine griji"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Sistemul Key-free inseamna mai putine griji
            </h3>

            <p>

            <p>Cand te apropii de masina, sistemul Ford KeyFree detecteaza imediat cheia cu telecomanda, chiar daca se
                afla in buzunar sau in geanta. Usile se descuie, iar dupa ce te asezi, nu este nevoie de vreo cheie de
                contact. Apasa ambreiajul, actioneaza butonul de pornire Ford Power si motorul prinde viata.</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Siguranta si securitate :: btfTabContent : 1205135251608 :: tabContent :  -->
<div id='tab4' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            Siguranta si protectia ta sunt prioritare
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Noul Ford Fiesta incorporeaza o&nbsp;serie de <a HREF="http://www.ford.ro/Tehnologie"><span
                    style="color: rgb(0, 0, 255);"><u>tehnologii avansate</u></span></a>, concepute pentru a&nbsp;te
            proteja pe tine, pasagerii tai si vehiculul, in cazul unui accident. Printre dotarile esentiale se numara
            Sistemul de oprire activa in oras, cel de Asistenta la franarea de urgenta si cel de Asistenta la
            stabilizarea remorcii. Mai sunt disponibile multe alte sisteme, unele dintre acestea avand rolul de a&nbsp;preveni
            accidentele.</p>
        </p>
    </header>
    <article class='two-column'>
        <div class="content-block">
            <img
                    src="/assets/img/1214606265152.jpg"
                    alt="Airbaguri menite sa te protejeze din orice unghi"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Airbaguri menite sa te protejeze din orice unghi
            </h3>

            <p>

            <p>Pe langa airbagurile frontale pentru pasagerul din fata si sofer, airbagurile laterale ofera protectie la
                nivelul toracelui si sunt concepute pentru a&nbsp;indeparta ocupantul de zona de impact. Pot, de
                asemenea, sa ridice bratul ocupantului, asigurand un spatiu mai bun intre acesta si structura
                periculoasa. Airbagurile tip cortina asigura o&nbsp;acoperire maxima, iar tetierele ofera protectie in
                cazul unui impact
            <nobr>fata-spate.</nobr>
            Cu dispozitive de pretensionare a&nbsp;centurilor de siguranta si limitatoare de sarcina in fata si in
            spate, plus sisteme de reamintire pentru centura de siguranta, Fiesta te ajuta sa iti pui siguranta pe
            primul loc.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/1214606260931.jpg"
                    alt="Securitate de inalt nivel"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Securitate de inalt nivel
            </h3>

            <p>

            <p>Poate fi montat un sistem de securitate Thatcham de categoria&nbsp;1, acesta incluzand o&nbsp;alarma de
                perimetru si un sistem de blocare dubla. Cu blocarea dubla, o&nbsp;usa nu poate fi deschisa din
                interior, nici macar daca cineva a&nbsp;incercat sa intre in masina, spargand un geam lateral. Pentru a&nbsp;activa
                blocarea dubla, tot ce trebuie sa faci este sa apesi de doua ori butonul de incuiere de pe tocul
                cheii.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/1214606261555.jpg"
                    alt="Sisteme avansate pentru o franare mai controlata"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Sisteme avansate pentru o franare mai controlata
            </h3>

            <p>

            <p>Sistemul de franare cu anti-blocare roti (ABS) si distributia electronica a&nbsp;fortei de franare
                asigura o&nbsp;franare mai bine controlata. Sistemul de asistenta la franarea de urgentă ajuta vehiculul
                sa franeze mai eficient in cazul unei situatii de urgenta. Sistemul functioneaza prin detectarea
                presiunii aplicate de sofer pe pedala de frana si prin cresterea automata a&nbsp;acestei presiuni, daca
                este cazul.</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/1214606261350.jpg"
                    alt="Asigura siguranta remorcii"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Asigura siguranta remorcii
            </h3>

            <p>

            <p>Sistemul de Asistenta la stabilizarea remorcii detecteaza balansul sau &ldquo;serpuirea&rdquo; remorcii
                si reduce automat viteza masinii, pentru a&nbsp;contribui la eliminarea problemei; rezultatul este o&nbsp;remorcare
                mult mai controlata. Sistemul incetineste vehiculul prin reducerea cuplului motor si cresterea treptata
                a&nbsp;fortei de franare.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/1214606261721.jpg"
                    alt="Un avertisment in spate, atunci cand franezi brusc"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Un avertisment in spate, atunci cand franezi brusc
            </h3>

            <p>

            <p>Daca trebuie sa franezi puternic intr-o situatie de urgenta, luminile de avarii se aprind automat pentru
                a-i avertiza pe ceilalti soferi. Luminile de frana se vor aprinde si ele intermitent, avertizand in
                avans vehiculele din spate cu privire la o&nbsp;situatie posibil periculoasa.</p>
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
<h2><a href='#tab3' class="mp-tab omt_xd_mt_ti">Confort</a></h2> -->
<!--</div>-->
<!--<div id='tab4' class="mp-tab-wrapper">
<h2><a href='#tab4' class="mp-tab omt_xd_mt_ti">Siguranta si securitate</a></h2> -->
<!--</div>-->
<!-- END [MidPageTabs] -->
</div>
</div>
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
