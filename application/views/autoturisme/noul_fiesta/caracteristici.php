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
    <div class="img-column"><img
            src="/assets/img/1214606261011.jpg"
            alt="Intrari si iesiri din parcare fara stres"/><span class="fv-overlay-icon"></span></a></div>
    <div class="content">
        <h3 class="bigHeading02">
            Tempomat care se poate adapta automat la conditiile de trafic
        </h3>

        <p>

        <p>Cu ajutorul tehnologiei tempomatului adaptiv, alegi viteza cu care doresti sa te deplasezi, iar sistemul
            o va mentine constanta. Daca senzorul RADAR incorporat detecteaza un vehicul in fata, acesta iti va
            incetini vehiculul, pentru a mentine o distanta prestabilita. De indata ce drumul din fata devine liber,
            sistemul va accelera pana la viteza aleasa.</p>
        </p>
    </div>
</article>
<article class="content-column right">
    <div class="content">
        <h3 class="bigHeading02">
            Intrari si iesiri din parcare fara stres
        </h3>

        <p>

        <p>Parcarea poate fi cu adevarat o bataie de cap. Dar nu si cu Fiesta. Si aceasta deoarece sistemul de
            Asistenta activa la parcare foloseste o combinatie de tehnologii pentru a-ti face mai mult decat sa te
            directioneze in locurile de parcare. Sistemul de asistenta la iesirea din parcare te ajuta si sa iesi
            din acestea. Sistemul pentru parcare paralela si perpendiculara poate sa detecteze daca masina are loc
            intr-un anumit spatiu si sa te bage cu spatele in locul respectiv. Iar sistemul de asistenta la parcarea
            laterala te atentioneaza, de asemenea, daca exista obstacole in lateral.</p>
        </p>
    </div>
    <div class="img-column"><img
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
            Tehnologie care vede ce tu nu poti vedea
        </h3>

        <p>

        <p>Un Sistem de asistenta pentru unghiul mort foloseste senzori RADAR care pot scana unghiurile moarte de pe
            ambele parti ale vehiculului tau Fiesta. Si daca detecteaza un vehicul pe care tu nu il poti vedea, o
            lumina portocalie afisata in mod vizibil in oglinda laterala de pe partea corespunzatoare se va aprinde
            pentru a te avertiza. Daca iesi cu spatele dintr-un loc de parcare si ai vizibilitate redusa asupra
            situatiei traficului, Alerta la intersectarea cu traficul poate detecta vehicule care se apropie si
            poate emite un sunet de avertizare. Aceasta tehnologie declanseaza, de asemenea, o lumina pe oglinda
            retrovizoare exterioara: stanga sau dreapta, in functie de directia din care se apropie vehiculele.</p>
        </p>
    </div>
    <div class="content-block last">
        <img
            src="/assets/img/1214606266099.jpg"
            alt="Vede semnele de circulatie pe care le-ai putea rata"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Un sistem avansat care te ajuta sa pastrezi banda de rulare
        </h3>

        <p>

        <p>Sistemul de mentinere a benzii de rulare utilizeaza o camera orientata in fata, pentru a detecta daca ai
            iesit in mod accidental de pe banda ta de deplasare. Sistemul de avertizare la parasirea benzii te
            avertizeaza apoi printr-o vibratie a volanului si prin afisarea unui indicator de avertizare vizuala.
            Daca reactionati mai greu sau nu reactionati deloc, Sistemul de asistenta la pastrarea benzii iti poate
            oferi asistenta cu cuplul de directie, pentru a te ajuta sa revii pe banda corecta. Aceasta tehnologie
            este conceputa pentru suprafete rutiere cu mai multe benzi (precum autostrazile), asa ca se va dezactiva
            automat la viteze mai mici de 65 km/h, putand fi dezactivata si manual.</p>
        </p>
    </div>
</article>

<article class='two-column'>
    <div class="content-block">
        <img
            src="/assets/img/1214267415.jpg"
            alt="Un sistem avansat care te ajuta sa pastrezi banda de rulare"/><span
            class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            O dinamica a condusului adaptata pentru tine
        </h3>

        <p>

        <p>Fiesta Active este, deja, o masina flexibila. Dar poti personaliza si mai in detaliu experienta la volan,
            ajustand reactia la acceleratie, responsivitatea directiei, ba chiar si rapiditatea cu care se schimba
            vitezele. Modurile selectabile includ 'Normal', 'Eco' si 'Slippery' (Suprafete alunecoase).</p>
        </p>
    </div>
    <div class="content-block last">
        <img
            src="/assets/img/1214666099.jpg"
            alt="Vede semnele de circulatie pe care le-ai putea rata"/><span class="fv-overlay-icon"></span>

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
</article>

<article class='two-column'>
    <div class="content-block">
        <img
            src="/assets/img/121214267415.jpg"
            alt="Un sistem avansat care te ajuta sa pastrezi banda de rulare"/><span
            class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Te ajuta sa vezi, fara a-i orbi pe ceilalti soferi
        </h3>

        <p>

        <p>O functie utila pentru deplasarile pe timp de noapte, faza lunga automata, comuta temporar la faza scurta
            atunci cand detecteaza trafic din sens opus sau un alt autovehicul in fata, pentru a nu-i orbi pe ceilalti
            soferi. Apoi, sistemul revine automat la faza lunga, asigurand vizibilitate maxima.</p>
        </p>
    </div>
    <div class="content-block last">
        <img
            src="/assets/img/12142666099.jpg"
            alt="Vede semnele de circulatie pe care le-ai putea rata"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Directie servoasistata care reactioneaza la orice situatie
        </h3>

        <p>

        <p>Directia servoasistata electric (EPAS) se ajusteaza automat la viteza de rulare si la conditiile de drum. La
            viteze reduse, sistemul face ca rotirea volanului sa fie mai usoara, imbunatatind manevrabilitatea. La
            viteze ridicate, cand ai nevoie de mai mult control , directia devine mai rigida. Acum, cu ajutorul
            controlului asupra devierii de la cursul normal, EPAS ia de asemenea in calcul, vantul care bate din fata si
            alte conditii de drum, in timp ce Controlul activ al vibratiilor reduce vibratiile nedorite, resimtite la
            nivelul volanului.</p>
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
            Asistenta de urgenta Ford SYNC
        </h3>

        <p>

        <p>Un aspect important al tehnologiei Ford SYNC care iti poate salva viata este Asistenta de urgenta*. In cazul
            putin probabil al unui accident, cand se activeaza airbagul sau se dezactiveaza pompa de carburant,
            tehnologia poate folosi un telefon mobil imperecheat si conectat prin Bluetooth® pentru a efectua automat un
            apel direct catre Serviciile de urgenta, in locul tau Poti alege sa intrerupi apelul sau sa discuti cu
            personalul serviciului de urgenta, daca e cazul. Extrem de important, sistemul va furniza informatii vitale,
            precum coordonatele tale GPS, chiar si atunci cand ti-ai pierdut cunostinta.</p>
        </p>
    </div>
    <div class="content-block">
        <img
            src="/assets/img/1214606262137.jpg"
            alt="Tehnologie care vede ce tu nu poti vedea"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Marsarier mai simplu si mai sigur
        </h3>

        <p>

        <p>Stalpi opritori, biciclete, ziduri joase… Camera video pentru vedere spate iti arata tot ce se afla in
            spatele masinii, pe un ecran integrat in consola centrala. Sistemul iti arata obiecte pe care le-ai putea
            omite si in plus, afiseaza linii virtuale pentru a te ajuta sa parchezi si in cele mai inguste spatii.
            Camera se activeaza automat cand selectezi treapta de marsarier.</p>
        </p>
    </div>
    <div class="content-block last">
        <img
            src="/assets/img/1214606266902.jpg"
            alt="Directie servoasistat? care reactioneaz? la orice situatie"/><span
            class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Te ajuta sa pastrezi distanta
        </h3>

        <p>

        <p>Atunci cand in fata ta se afla alt vehicul, panoul de bord iti poate indica distanta pana la acesta.
            Indicatorul foloseste trei culori – de la gri, pentru distanta cea mai lunga, pana la rosu pentru cea mai
            scurta. Poti ajusta sensibilitatea indicatorului pentru a il adapta stilului tau de condus.</p>
        </p>
    </div>
</article>

<article class='three-column'>
    <div class="content-block">
        <img
            src="/assets/img/1214665505.jpg"
            alt="Faza lunga automata. Te ajuta sa vezi, fara a-i orbi pe ceilalti soferi"/><span
            class="fv-overlay-icon"></span>

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
    <div class="content-block">
        <img
            src="/assets/img/1214262137.jpg"
            alt="Tehnologie care vede ce tu nu poti vedea"/><span class="fv-overlay-icon"></span>

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
    <div class="content-block last">
        <img
            src="/assets/img/1214902.jpg"
            alt="Directie servoasistat? care reactioneaz? la orice situatie"/><span
            class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Drumuri mai putin obositoare, mai economice
        </h3>

        <p>

        <p>Tempomatul prevazut cu dispozitivul ajustabil de limitare a vitezei te ajuta sa-ti mentii vehiculul in limita
            de viteza prestabilita de tine. Te poate ajuta sa economisesti combustibil, sa reduci situatiile de depasire
            a vitezei si, la fel ca toate sistemele de control al vitezei, iti permite sa mentii viteza aleasa fara sa
            fi nevoit sa tii piciorul pe pedala de acceleratie.</p>
        </p>
    </div>
</article>


</div>
<!--  tabTitle : Performanta si eficienta :: btfTabContent : 1205135250900 :: tabContent :  -->
<div id='tab2' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            Performanta
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>De ce sa alegi intre performanta si eficienta? Cu noul Ford Fiesta le poti avea pe ambele. Motorul Ford
            EcoBoost pe benzina, de 1,0 litri, este castigator al premiului Motorul international al anului de cinci
            ori*, iar acum este la dispozitia ta. Tehnologia avansata te ajuta sa economisesti combustibil si sa reduci
            poluarea, iar dinamica de condus sofisticata si manevrabilitatea precisa iti asigura o experienta la volan
            placuta si fara niciun compromis.</p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"><img
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

            <p>Preferi un motor diesel
                ? Atunci alege motorul TDCi de 1,5 litri, care dezvolta nu mai putin de 85 CP si ofera un consum de
                numai 3,5 l/100 km, cu emisii de CO2 de numai 88* g/km. Daca doresti si mai multa putere, plus
                eficienta, un motor de 120 CP iti ofera 3,2 l/100 km si emisii de CO2 de 89 g/km.
            </p>
            </p>
        </div>
        <div class="img-column"><img
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

    <article class='two-column'>
        <div class="content-block">
            <img
                src="/assets/img/121460105.jpg"
                alt="Foloseste mai putin combustibil cu functia Auto"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Manuala sau automata? Tu decizi
            </h3>

            <p>

            <p>Gama de transmisii a fost gandita pentru a te ajuta sa profiti la maximum de motorizarea pe care o alegi.
                Ai la dispozitie optiuni manuale – una cu 5 si doua cu 6 viteze – precum si o transmisie automata cu 6
                viteze. </p>
            </p>
        </div>
        <div class="content-block last">
            <img
                src="/assets/img/121466634.jpg"
                alt="Eficienta prin simpla apasare a unui buton"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Aerodinamica mai buna pentru economie mai mare
            </h3>

            <p>

            <p>Cand conduci cu viteza redusa, Sistemul activ cu obturator pentru grila tine orificiile de ventilatie de
                la nivelul grilei deschise, pentru a raci motorul. Cand prinzi viteza, acesta se poate inchide automat,
                imbunatatind aerodinamica si ajutand la economisirea combustibilului. In timp, aceasta tehnologie poate
                face o mare diferenta in privinta economiei de combustibil.</p>
            </p>
        </div>
    </article>

    <article class='two-column'>
        <div class="content-block">
            <img
                src="/assets/img/12144105.jpg"
                alt="Foloseste mai putin combustibil cu functia Auto"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Motoare care indeplinesc standard riguroase
            </h3>

            <p>

            <p>Indiferent ce motorizare alegi pentru EcoSport, te vei bucura sa stii ca toate optiunile indeplinesc
                standardele pentru emisii Euro 6. Pentru motoarele pe benzina, standardul Euro 6 inseamna ca motorul nu
                poate produce mai mult de 1,0g/km de monoxid de carbon, 0,10 g/km de hydrocarbon, 0,06 g/km de oxizi de
                azot si 0,005 g/km de particule. (* Aplicabil doar motoarelor cu injectie directa.)</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                src="/assets/img/1606266634.jpg"
                alt="Eficienta prin simpla apasare a unui buton"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Reincarca-ti bateria mai eficient
            </h3>

            <p>

            <p>Spre deosebire de sistemele conventionale, sistemul de incarcare regenerativ inteligent reincarca bateria
                doar cand este nevoie si, ori de cate ori este posibil, evita realizarea acestei operatiuni cand apesi
                pedala de acceleratie. Acest lucru poate reduce si mai mult consumul de combustibil si nivelul de
                emisii.</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Confort :: btfTabContent : 1205135247643 :: tabContent :  -->
<div id='tab3' class="secondary-tab-content">
<header class="intro-header">
    <h1 class="bigHeading">
        Confort
    </h1>
    <span class="highlighter"></span>

    <p class="intro-text">

    <p>Daca tehnologiile inteligente functioneaza fara probleme in casa ta, ar trebui sa faca la fel si in masina.
        De aceea, noul Ford Fiesta este echipat cu SYNC 3, pentru a-ti usura viata, cu B&O PLAY pentru a iti face
        calatoriile mai distractive si cu un acoperis panoramic ce poate fi deschis, pentru a face ca fiecare
        deplasaresa fie si mai placuta. Pregateste-te sa descoperi toate acestea si multe altele intr-un spatiu care
        iti ofera confortul si utilitatea la care visezi.</p>
    </p>
</header>
<article class="content-column left">
    <div class="img-column"><img
            src="/assets/img/1214606265415.jpg"
            alt="Muzica ta favorita, asa cum ar trebui sa se auda"/><span class="fv-overlay-icon"></span></a>
    </div>
    <div class="content">
        <h3 class="bigHeading02">
            Tehnologie fara cusur, pe care o poti controla vocal
        </h3>

        <p>

        <p>Ford SYNC 3* este un sistem de ultima ora ce iti permite sa fii conectat(a) in permanenta si sa
            controlezi telefonul, muzica si sistemul de navigatie cu ajutorul unor comenzi vocale intuitive sau al
            unui ecran tactil color de 8”. Se conecteaza la Apple CarPlay si Android Auto, iar cu AppLink, poti sa
            accesezi unele dintre aplicatiile tale preferate de pe smartphone, inclusiv Spotify. Live Traffic te
            poate ajuta sa eviti ambuteiajele. Si poti chiar sa soliciti o lista cu restaurantele locale, rostind,
            pur si simplu, „I'm hungry” (Mi-e foame) sau poti accesa Ghidul Michelin pentru a te ajuta sa alegi
            locuri unde sa mananci si sa faci rezervarile.</p>
        </p>
    </div>
</article>
<article class="content-column right">
    <div class="content">
        <h3 class="bigHeading02">
            Muzica ta favorita, asa cum ar trebui sa se auda
        </h3>

        <p>

        <p>Oricare ar fi gusturile tale, muzica merita sa sune asa cum a intentionat artistul. Si exact asa se
            intampla in noul Fiesta. De ce? Deoarece este disponibil cu B&O PLAY. Acest sistem audio premium de 675
            wati ofera un sunet bogat si puternic, printr-un sistem ce include 10 difuzoare, woofer si subwoofer.
            Iar aceasta tehnologie avansata a fost special conceputa, dezvoltata si reglata pentru noul Fiesta de
            catre specialistii in acustica ai B&O PLAY. Asa ca mareste volumul si bucura-te de trupele si piesele
            favorite in sala de concerte a masinii tale.</p>
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
            alt=""/><span
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
            alt="Loc pentru a v? întinde picioarele"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Loc pentru a va întinde picioarele
        </h3>

        <p>

        <p>Printr-o utilizare inteligentă a spatiului, noul Ford Fiesta iti oferă acum mai mult loc la picioare,
            atât în fată, cât si în spate. Si, deoarece scaunele din spate au spatare subtiri, sculptate, pasagerii
            pot sta si mai în spate.</p>
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

<article class='three-column'>
    <div class="content-block">
        <img
            src="/assets/img/12606264358.jpg"
            alt="Loc pentru a v? întinde picioarele"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Solutie inteligenta pentru telefoanele mobile
        </h3>

        <p>

        <p>My Ford Dock este un detaliu de design – aici iti poti depozita telefonul intelligent, MP# player-ul sau
            dispozitivul de navigatie, astfel icnat sa le poti vedea fara a iti lua privirea de la drum. Statia de
            andocare este plasata deasupra consolei centrale si este prevazuta cu un capac ce se poate bloca pentru a
            fixa dispozitivul.</p>
        </p>
    </div>
    <div class="content-block">
        <img
            src="/assets/img/12146061101.jpg"
            alt="Scaune si volan care iti tin de cald"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Spatiu pentru orice
        </h3>

        <p>

        <p>Habitaclul este atent proiectat, pentru a profita la maximum de fiecare milimetru patrat de spatiu –
            beneficiezi, in functie de modelul ales, de pana la 19 spatii diferite de depozitare. Printre ele se numara
            o ‘tavita media’ in fata schimbatorului, unde iti poti aseza dispozitivele mobile; acestea nu vor aluneca
            pentru ca tavita are o podea cauciucata. Tot acolo vei gasi si o priza USB, pentru a incarca foarte
            convenabil dispozitivele.</p>
        </p>
    </div>
    <div class="content-block last">
        <img
            src="/assets/img/12146266814.jpg"
            alt="Sistemul Key-free inseamna mai putine griji"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Pentru informare si divertisment
        </h3>

        <p>

        <p>Fiesta iti ofera patru niveluri diferite de sisteme de informatii si divertisment. Sistemul de baza include
            printer altele un radio hi-fi, sase difuzoare, Bluetooth, doua prize USB. Sistemul de top iti aduce un radio
            DAB, ecran tactil color, de 8”, compatibilitate cu Apple CarPlay si Android Auto, sapte difuzoare, SYNC 3 cu
            Bluetooth si control vocal, precum si multe alte functii.</p>
        </p>
    </div>
</article>

<article class="content-column left">
    <div class="img-column"><img
            src="/assets/img/12146261800.jpg"
            alt="Muzica ta favorita, asa cum ar trebui sa se auda"/><span class="fv-overlay-icon"></span></a>
    </div>
    <div class="content">
        <h3 class="bigHeading02">
            Utilizarea in comun a masinii, fara probleme, cu ajutorul caracteristicii MyKey
        </h3>

        <p>

        <p>MyKey iti permite sa setezi limita maxima de viteza, semnalul care sa atraga atentia asupra purtarii centurii
            de siguranta si chiar volumul sistemului audio. Aceasta tehnologie este conceputa pentru a iti asigura
            linistea atunci cand imprumuti masina unui prieten sau unui membru al familiei, deoarece poti programa
            restrictiile dorite pentru cheia respectiva. Poti pastra personal cheia de „admin” si chiar sa ai mai multe
            exemplare din ambele chei, daca doresti.</p>
        </p>
    </div>
</article>
<article class="content-column right">
    <div class="content">
        <h3 class="bigHeading02">
            Iluminare ambientala, pentru un interior contemporan
        </h3>

        <p>

        <p>Iluminarea ambientala iti permite sa adaugi in habitaclu o nuanta subtila si sofisticata de culoare, atunci
            cand circuli noaptea. </p>
        </p>
    </div>
    <div class="img-column"><img
            src="/assets/img/12146267162.jpg"
            alt="Tehnologie fara cusur, pe care o poti controla vocal"/><span
            class="fv-overlay-icon"></span></a></div>
</article>

<article class="content-column left">
    <div class="img-column"><img
            src="/assets/img/121461800.jpg"
            alt="Muzica ta favorita, asa cum ar trebui sa se auda"/><span class="fv-overlay-icon"></span></a>
    </div>
    <div class="content">
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
</article>

<article class='three-column'>
    <div class="content-block">
        <img
            src="/assets/img/106264358.jpg"
            alt=""/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Seteaza temperatura dorita
        </h3>

        <p>

        <p>Cu ajutorul Sistemului optional de climatizare automata, selecteaza pur si simplu temperatura interioara
            dorita, iar aceasta va mentine cu ajutorul sistemului avansat de climatizare..</p>
        </p>
    </div>
    <div class="content-block">
        <img
            src="/assets/img/121461101.jpg"
            alt="Scaune si volan care iti tin de cald"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Oglinzi care se pot proteja singuree
        </h3>

        <p>

        <p>Pentru a evita deteriorarea accidentala, oglinzile laterale rabatabile electric (optionale) se pliaza catre
            interior, dupa ce ai parcat. Cand sunt rabatate, oglinzile protejeaza de asemenea, elegantele indicatoare
            integrate.</p>
        </p>
    </div>
    <div class="content-block last">
        <img
            src="/assets/img/121466814.jpg"
            alt="Sistemul Key-free inseamna mai putine griji"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Evita zgarieturile enervante
        </h3>

        <p>

        <p>Nu e deloc greu sa lovesti portiera, atunci cand parchezi in locuri inguste. Dar, in fiesta, la deschiderea
            portierei se declanseaza o bariera protectoare, care are grija de vopseaua ta si de cea a masinilor din
            jur.</p>
        </p>
    </div>
</article>


</div>
<!--  tabTitle : Siguranta si securitate :: btfTabContent : 1205135251608 :: tabContent :  -->
<div id='tab4' class="secondary-tab-content">
<header class="intro-header">
    <h1 class="bigHeading">
        Siguranta
    </h1>
    <span class="highlighter"></span>

    <p class="intro-text">

    <p>Noul Ford Fiesta incorporeaza o serie de tehnologii avansate, concepute pentru a te proteja pe tine,
        pasagerii tai si vehiculul, in cazul unui accident. Printre dotarile esentiale se numara Sistemul de
        asistenta pre-coliziune cu detectare a pietonilor, sistemul de avertizare in caz de pericol si franare de
        urgenta, precum si cel de Asistenta la stabilizarea remorcii. Mai sunt disponibile multe alte sisteme, unele
        dintre acestea avand rolul de a preveni accidentele.</p>
    </p>
</header>
<article class='two-column'>
    <div class="content-block">
        <img
            src="/assets/img/1214606265152.jpg"
            alt="Airbaguri menite sa te protejeze din orice unghi"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Un sistem care poate reduce gravitatea accidentelor sau le poate evita
        </h3>

        <p>

        <p>Sistemul de asistenta pre-coliziune detecteaza vehiculele si pietonii de pe drumul din fata sau pe cei
            care s-ar putea intersecta cu traseul vehiculului si te avertizeaza cu privire la prezenta acestora.
            Daca nu reactionezi, sistemul aplica automat franele. Aceasta tehnologie e conceputa pentru a ajuta sa
            reduci riscul accidentelor sau pentru a le evita complet, functionand la viteze de pana la 80 km/h.</p>
        </p>
    </div>
    <div class="content-block last">
        <img
            src="/assets/img/1214606260931.jpg"
            alt="Securitate de inalt nivel"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Airbaguri menite sa te protejeze din orice unghi
        </h3>

        <p>

        <p>Pe langa airbagurile frontale pentru pasagerul din fata si sofer, airbagurile laterale ofera protectie la
            nivelul toracelui si sunt concepute pentru a indeparta ocupantul de zona de impact. Pot, de asemenea, sa
            ridice bratul ocupantului, asigurand un spatiu mai bun intre acesta si structura periculoasa.
            Airbagurile tip cortina asigura o acoperire maxima, iar tetierele ofera protectie in cazul unui impact
            fata-spate. Cu dispozitive de pretensionare a centurilor de siguranta si limitatoare de sarcina in fata
            si in spate, plus sisteme de reamintire pentru centura de siguranta, Fiesta te ajuta sa iti pui
            siguranta pe primul loc.</p>
        </p>
    </div>
</article>
<article class='three-column'>
    <div class="content-block">
        <img
            src="/assets/img/1214606261555.jpg"
            alt="Sisteme avansate pentru o franare mai controlata"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Securitate de inalt nivel
        </h3>

        <p>

        <p>Poate fi montat un sistem de securitate Thatcham de categoria 1, acesta incluzand o alarma de perimetru
            si un sistem de blocare dubla. Cu blocarea dubla, o usa nu poate fi deschisa din interior, nici macar
            daca cineva a incercat sa intre in masina, spargand un geam lateral. Pentru a activa blocarea dubla, tot
            ce trebuie sa faci este sa apesi de doua ori butonul de incuiere de pe tocul cheii.</p>
        </p>
    </div>
    <div class="content-block">
        <img
            src="/assets/img/1214606261350.jpg"
            alt="Asigura siguranta remorcii"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Sisteme avansate pentru o franare mai controlata
        </h3>

        <p>

        <p>Sistemul de franare cu anti-blocare roti (ABS) si distributia electronica a fortei de franare asigura o
            franare mai bine controlata. Sistemul de asistenta la franarea de urgentă ajuta vehiculul sa franeze mai
            eficient in cazul unei situatii de urgenta. Sistemul functioneaza prin detectarea presiunii aplicate de
            sofer pe pedala de frana si prin cresterea automata a acestei presiuni, daca este cazul.</p>
        </p>
    </div>
    <div class="content-block last">
        <img
            src="/assets/img/1214606261721.jpg"
            alt="Un avertisment in spate, atunci cand franezi brusc"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Mentinerea in siguranta pe banda de rulare a remorcii
        </h3>

        <p>

        <p>Sistemul de stabilizare a remorcii detecteaza „serpuirea” sau balansarea remorcii si reduce viteza
            vehiculului pentru a ajuta la corectarea problemei, facand ca remorcarea sa fie mai controlata. Sistemul
            incetineste vehiculul, reducand cuplul motorului si crescand treptat presiunea franelor pe toate
            rotile.</p>
        </p>
    </div>
</article>

<article class="content-column left">
    <div class="img-column"><img
            src="/assets/img/121462800.jpg"
            alt="Muzica ta favorita, asa cum ar trebui sa se auda"/><span class="fv-overlay-icon"></span></a>
    </div>
    <div class="content">
        <h3 class="bigHeading02">
            Siguranta ta, prioritatea noastra
        </h3>

        <p>

        <p>Noul Fiesta din generatia urmatoare integreaza o serie de tehnologii avansate, concepute pentru a te
            proteja pe tine, pasagerii tai si vehiculul, in caz de accident. Printre dotarile esentiale se numara si
            Sistemul de oprire activa in oras, protectoarele de margini pentru portiere si SYNC 3 cu asistenta de
            urgenta. Mai sunt disponibile multe alte sisteme, unele avand rolul de a preveni accidentele.</p>
        </p>
    </div>
</article>
<article class="content-column right">
    <div class="content">
        <h3 class="bigHeading02">
            Siguranta de cinci stele
        </h3>

        <p>

        <p>Euro NCAP este cea mai reputata organizatie europeana pentru evaluarea independent a caracteristicilor de
            siguranta. Organizatia evalueaza siguranta oricarui nou vehicul, folosind masuratori foarte riguroase.
            Iar rezultatul confirma angajamentul Ford pentru siguranta: punctaj maxim, de cinci stele. </p>
        </p>
    </div>
    <div class="img-column"><img
            src="/assets/img/121467162.jpg"
            alt="Tehnologie fara cusur, pe care o poti controla vocal"/><span
            class="fv-overlay-icon"></span></a></div>
</article>

<article class="content-column left">
    <div class="img-column"><img
            src="/assets/img/12146231800.jpg"
            alt="Muzica ta favorita, asa cum ar trebui sa se auda"/><span class="fv-overlay-icon"></span></a>
    </div>
    <div class="content">
        <h3 class="bigHeading02">
            Mentine controlul, indiferent de conditii
        </h3>

        <p>

        <p>Controlul electronic al stabilitatii monitorizeaza constant progresul vehiculului tau. Aceasta detecteaza
            devierile de la traseul ales, ca in cazul in care autovehiculul incepe sa patineze si corecteaza automat
            pozitia pe drum a autovehiculului, ajutandu-te sa mentii controlul asupra acestuia.</p>
        </p>
    </div>
</article>

<article class="content-column right">
    <div class="content">
        <h3 class="bigHeading02">
            Putere suplimentara pentru franare de urgenta
        </h3>

        <p>

        <p>Sistemul de asistenta la franarea de urgenta ajuta vehiculul sa atinga eficienta maxima de franare in cazul
            unei situatii de urgenta. Este controlat automat prin intermediul Sistemului de control electronic al
            stabilitatii, care detecteaza presiunea pe care o aplici pe pedala de frana si creste automat aceasta
            presiune, daca este cazul. </p>
        </p>
    </div>
    <div class="img-column"><img
            src="/assets/img/12146712362.jpg"
            alt="Tehnologie fara cusur, pe care o poti controla vocal"/><span
            class="fv-overlay-icon"></span></a></div>
</article>

<article class="content-column left">
    <div class="img-column"><img
            src="/assets/img/12112146231800.jpg"
            alt="Muzica ta favorita, asa cum ar trebui sa se auda"/><span class="fv-overlay-icon"></span></a>
    </div>
    <div class="content">
        <h3 class="bigHeading02">
            Avertizare timpurie in cazul unei pene
        </h3>

        <p>

        <p>Daca vreunul dintre pneuri incepe sa piarda presiune in timpul deplasarii, sistemul de monitorizare a
            presiunii in pneuri (TPMS) te avertizeaza imediat, prin aprinderea unei pictograme pe panoul de bord.</p>
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
