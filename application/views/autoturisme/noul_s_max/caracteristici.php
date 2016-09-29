
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
            <li data-selenium="breadcrumb_nameplate">S-MAX</li>
        </ul>
    </nav>
    <script>
        var vehicleimagepackpresid = '1205093063726';
        var vehicleimagepackyear = 'NONE';
    </script>
    <div class="fblike-locale">en_RO</div>
    <script>
        var googleAdServerNameplateId = 'AUTHORED';
        var googleAdServerNameplateName = 'S-MAX';
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
            ]}}, "brand": "Ford", "vehicleType": "PV", "catalogId": "NONE", "nameplate": "S-MAX", "labelAvailableFrom": "&nbsp;", "formattedCurrency": "", "nameplateText": "Sapte\/cinci locuri intr-un vehicul pentru activitati sportive, flexibil, care arata si se conduce ca nici un altul.", "imagePack": false, "hideVehicleImage": false, "facebookImagePath": "", "facebookAppId": "facebookAppId", "images": [], "billBoardImagePath": null, "backgroundImagePath": ["/assets/img/s_max/1214513580596.jpg", "null", "null"], "disclaimerTextColor": ["364957", null, null], "current": true, "cid": "1205090681673", "cta": [
                {"linkTitle": "DESCARC\u0102 BRO\u015EUR\u0102 ", "linkURL": "\/SBE\/BrosuriSiPreturi", "linkType": "primary", "linkTarget": "_blank", "omid": "va"},
                {"linkTitle": "\u00CENSCRIE-TE LA TEST DRIVE ", "linkURL": "\/SBE\/TestDrive\/TestDriveAutoturisme?shopcode=AUTHORED&derivcode=AUTHORED", "linkType": "tertiary", "linkTarget": "_blank", "omid": "tr"}
            ], "social": {"facebook": "https://facebook.com", "facebookPage": "fordromania"}, "disclaimer": "MODELUL PREZENTAT ESTE UN S-MAX TITANIUM. IMAGINE CU TITLUL DE PREZENTARE.", "seriesCode": "AUTHORED", "uscCode": "AUTHORED", "presId": "1205093063726", "promos": [], "idf": {"options": []}}
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
                    style="background-image:url(../../cs/BlobServer06f6?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpg&amp;blobwhere=1214513580596&amp;blobkey=id)">
                    <div class="layered-nameplate-image">
                        <div class="image-holder">
                        </div>
                    </div>
                    <aside class="nameplate-disclaimer style=color:#364957">
                        MODELUL PREZENTAT ESTE UN S-MAX TITANIUM. IMAGINE CU TITLUL DE PREZENTARE.
                    </aside>
                </li>
            </ul>
            <div itemscope itemtype="http://schema.org/Product" id="nameplateDetails" class="nameplate-vehicle">
                <!--the text description-->
                <div class="name-plate-text">
                    <p class="intro"> NOUL</p>

                    <h1 class="bigHeading">
                        <span data-selenium="XA_namePlate" itemprop="member" class="nameplate boldTxt">S-MAX</span>
                        <span data-selenium="XA_model" itemprop="model" itemscope
                              itemtype="http://schema.org/Organization" class="mark">Ford</span>
                        <!--The price -->
                    </h1>
                    <!--The blurb -->
                    <p class="blurb">
                        Sapte/cinci locuri intr-un vehicul pentru activitati sportive, flexibil, care arata si se
                        conduce ca nici un altul.
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
<!--  tabUrl /cs/ContentServer?cid=1205090681673&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="PrezentareGenerala#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205090681673&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE">Prezentare
        generala</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205090681126 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205090681673&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205104043571&amp;tabName=Preturi-si-promotii&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="Preturi-si-promotii#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205090681673&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205104043571&amp;tabName=Preturi-si-promotii&amp;c=Page&amp;site=RORO4_ENGINE">Preturi
        si promotii</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205104016391 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205090681673&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205090680147&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="Design#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205090681673&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205090680147&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE">Design</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205090684982 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205090681673&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205090681116&amp;tabName=Caracteristici&amp;c=Page&amp;site=RORO4_ENGINE -->
<!-- IntoID ::: articleAssetId -->
<li class="selected"><a href="Caracteristici#primaryTabs"
                        data-ajaxlink="/cs/ContentServer?cid=1205090681673&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205090681116&amp;tabName=Caracteristici&amp;c=Page&amp;site=RORO4_ENGINE">Caracteristici</a>
<!--This is where the main content for the selected tab will go -->
<!-- secondary tabs -->
<div class="secondary-tabs tab-content">
<nav class="sub-nav">
    <ul>
        <li><a href='#tab1' class='omt_tabName'>Experienta condusului</a></li>
        <li><a href='#tab2' class='omt_tabName'>Performanta si eficienta</a></li>
        <li><a href='#tab3' class='omt_tabName'>Siguranta si securitate</a></li>
    </ul>
</nav>
<!-- isBtfTab : from MidPageTabs true -->
<div class="innertab-wrapper">
<!--  tabTitle : Experienta condusului :: btfTabContent : 1205090683733 :: tabContent :  -->
<div id='tab1' class="secondary-tab-content">
<header class="intro-header">
    <h1 class="bigHeading">
        TEHNOLOGIA CONDUSULUI
    </h1>
    <span class="highlighter"></span>

    <p class="intro-text">
        &nbsp;
    </p>
</header>
<article class="content-column left">
    <div class="img-column"><a
            href="../../cs/ContentServere1f8.html?cid=1205090683925&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
            class="js-overlay" data-media-overlay='{"height":439, "width":780}'> <img
                src="/assets/img/s_max/1214504430076.jpg"
                alt="All-Wheel Drive"/><span class="fv-overlay-icon"></span></a></div>
    <div class="content">
        <h3 class="bigHeading02">
            Incredere chiar si in conditii schimbatoare.
        </h3>

        <p>

        <p>Un sistem disponibil cu tractiune integrala (AWD) inteligenta poate determina cata aderenta, cat balans in
            viraje si ce nivel de reactie sunt necesare in conditii de vreme umeda, uscata sau cu gheata si pe teren
            schimbator. Tehnologia poate muta tractiunea pe puntea din fata sau din spate, in functie de cerinte. Iar
            acest sistem de &bdquo;cuplu la cerere&rdquo; asigura o manevrabilitate exceptionala si eficienta
            imbunatatita.</p>
        </p>
    </div>
</article>
<article class="content-column right">
    <div class="content">
        <h3 class="bigHeading02">
            Directie servoasistata care reactioneaza la orice situatie
        </h3>

        <p>

        <p>Directia servoasistata electric (EPAS) se ajusteaza automat la viteza de rulare si la conditiile de drum.<br>
            <br>
            La viteze reduse, sistemul face ca rotirea volanului sa fie mai usoara, imbunatatind manevrabilitatea. La
            viteze ridicate, cand ai nevoie de control mai mare, directia devine mai rigida. Acum, cu ajutorul
            controlului asupra devierii de la cursul normal, EPAS ia, de asemenea, in calcul, vantul care bate din fata
            si alte conditii de drum, in timp ce controlul activ al vibratiilor reduce vibratiile nedorite resimtite la
            nivelul volanului.</p>
        </p>
    </div>
    <div class="img-column"> <img
                src="/assets/img/s_max/1214513578013.jpg"
                alt="Electric power-assisted steering (EPAS)"/><span class="fv-overlay-icon"></span></div>
</article>
<article class='two-column'>
    <div class="content-block">
        <a href="../../cs/ContentServereeaf.html?cid=1205090680884&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
           class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                src="/assets/img/s_max/1214513576186.jpg"
                alt="Front Split View Camera"/><span class="fv-overlay-icon"></span></a>

        <h3 class="bigHeading02">
            Vede ce vine, din ambele parti
        </h3>

        <p>

        <p>O camera minuscula, plasata in partea din fata a noului S-MAX, transmite o imagine pe &quot;ecran impartit&quot;
            catre afisajul multifunctional al masinii, astfel incat sa poti vedea vehiculele, biciclistii sau pietonii
            care vin din ambele parti. Aceasta noua tehnologie optionala se dovedeste de nepretuit atunci cand iesi
            dintr-un spatiu de parcare ingust sau cand te afli pe un drum aglomerat si unde campul vizual iti este
            obstructionat.</p>
        </p>
    </div>
    <div class="content-block last">
        <a href="../../cs/ContentServer2b5a.html?cid=1205090685133&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
           class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                src="../../cs/BlobServerbd0f.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214513580235&amp;blobkey=id"
                alt="Active Park Assist system"/><span class="fv-overlay-icon"></span></a>

        <h3 class="bigHeading02">
            Intrari si iesiri din parcare fara stres
        </h3>

        <p>

        <p>Cu ajutorul mai multor tehnologii diferite, sistemul de asistenta activa la parcare face mai mult decat sa te
            directioneze in locurile de parcare paralela. Sistemul de asistenta la iesirea din parcare (POA) te poate
            ajuta chiar sa iesi din acestea. Sistemul pentru parcare perpendiculara (PPA) poate sa detecteze daca masina
            are loc intr-un anumit spatiu si sa te directioneze in locul respectiv. Sistemul de asistenta la parcare
            laterala (SPA) te atentioneaza, de asemenea, daca exista obstacole in lateral</p>
        </p>
    </div>
</article>
<article class='two-column'>
    <div class="content-block">
        <a href="../../cs/ContentServer9082.html?cid=1205090680286&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
           class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                src="/assets/img/s_max/1214513575854.jpg"
                alt="Rear view camera"/><span class="fv-overlay-icon"></span></a>

        <h3 class="bigHeading02">
            In marsarier foarte simplu, deoarece poti vedea ce se afla in spate
        </h3>

        <p>

        <p>Stalpi opritori, garduri, ziduri joase&hellip; camera video pentru vizualizare spate iti arata tot ce se afla
            in spatele autovehiculului pe un ecran integrat in afisajul consolei centrale si se activeaza automat atunci
            cand selectezi marsarierul. Sistemul afiseaza, de asemenea, ghidaje virtuale pentru a te ajuta sa parchezi
            si in cele mai inguste spatii.</p>
        </p>
    </div>
    <div class="content-block last">
        <a href="../../cs/ContentServer3697.html?cid=1205090683756&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
           class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                src="/assets/img/s_max/1214513579452.jpg"
                alt="Lane Keeping System"/><span class="fv-overlay-icon"></span></a>

        <h3 class="bigHeading02">
            Un sistem avansat care va ajuta sa va pastrati banda
        </h3>

        <p>

        <p>Sistemul de mentinere a benzii de rulare utilizeaza o camera orientata in fata, pentru a detecta daca ati
            iesit in mod accidental de pe banda dvs. de deplasare. Sistemul de avertizare la parasirea benzii va
            avertizeaza apoi printr-o vibratie a volanului si prin afisarea unui indicator de avertizare vizuala. Daca
            reactionati mai greu sau nu reactionati deloc, Sistemul de asistenta la pastrarea benzii va poate oferi
            asistenta la directie, pentru a va ajuta sa reveniti pe banda corecta. Aceasta tehnologie este conceputa
            pentru suprafete rutiere cu mai multe benzi (precum autostrazile), asa ca se va dezactiva automat la viteze
            mai mici de 65 km/h, putand fi dezactivata si manual.</p>
        </p>
    </div>
</article>
<header class="intro-header">
    <h1 class="bigHeading">
        CONFORT
    </h1>
    <span class="highlighter"></span>

    <p class="intro-text">
        &nbsp;
    </p>
</header>
<article class="content-column left">
    <div class="img-column"><a
            href="../../cs/ContentServer0820.html?cid=1205090677325&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
            class="js-overlay" data-media-overlay='{"height":439, "width":780}'> <img
                src="/assets/img/s_max/1214504429910.jpg"
                alt="Panoramic roof"/><span class="fv-overlay-icon"></span></a></div>
    <div class="content">
        <h3 class="bigHeading02">
            Plafon panoramic pentru un spatiu mai luminos si mai aerisit
        </h3>

        <p>

        <p>Printr-o singura apasare de buton, parasolarul actionat electric din plafon se indeparteaza prin glisare,
            permitand luminii naturale sa treaca prin plafonul panoramic fix. In acelasi timp, geamul care reflecta
            lumina razelor mentine racoarea si te protejeaza de razele UV daunatoare.</p>
        </p>
    </div>
</article>
<article class="content-column right">
    <div class="content">
        <h3 class="bigHeading02">
            Mereu temperatura ideala
        </h3>

        <p>

        <p>Un sistem puternic de climatizare te ajuta sa mentii un mediu calduros sau racoros. Un sistem de Control
            Electronic Automat al Temperaturii cu zona dubla de control (DEATC) disponibil iti permite, de asemenea, sa
            selectezi temperaturile pe care tu si pasagerul din fata le preferati. Opteaza pentru sistemul de
            climatizare cu &bdquo;trei zone&rdquo; si nu numai ca soferul si pasagerul din fata isi pot alege setarile
            de temperatura dorite, pasagerii din randurile doi si trei vor putea face si ei acelasi lucru</p>
        </p>
    </div>
    <div class="img-column"><a
            href="../../cs/ContentServer9faa.html?cid=1205090677822&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
            class="js-overlay" data-media-overlay='{"height":439, "width":780}'> <img
                src="/assets/img/s_max/1214513577014.jpg"
                alt="Climate control"/><span class="fv-overlay-icon"></span></a></div>
</article>
<article class='three-column'>
    <div class="content-block">
        <a href="../../cs/ContentServer8c1a.html?cid=1205090678752&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
           class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                src="/assets/img/s_max/1214513577605.jpg"
                alt="Quickclear heated windscreen"/><span class="fv-overlay-icon"></span></a>

        <h3 class="bigHeading02">
            Curata parbrizul rapid cu Quickclear
        </h3>

        <p>

        <p>Aceasta dotare inteligenta este creata pentru a-ti permite sa pornesti rapid in diminetile geroase. Nu
            trebuie decat sa atingi un buton si filamentele extrem de subtiri se supraincalzesc pentru a curata
            parbrizul de gheata, ceata si abur, precum si pentru a ajuta la dezghetarea stergatoarelor. Sistemul
            actioneaza in cateva secunde, chiar si la temperaturi negative.</p>
        </p>
    </div>
    <div class="content-block">
        <a href="../../cs/ContentServere496.html?cid=1205090679677&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
           class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                src="/assets/img/s_max/1214513578103.jpg"
                alt="Multi-Contour seats"/><span class="fv-overlay-icon"></span></a>

        <h3 class="bigHeading02">
            Scaune care asigura sprijin suplimentar… si care iti pot oferi si un masaj
        </h3>

        <p>

        <p>Noile scaune multi-contur sunt disponibile pentru sofer si pasagerul din fata si sunt complet reglabile din
            proiectare. Drept urmare, acestea pot asigura sprijin suplimentar acolo unde ai nevoie si iti pot oferi
            chiar si un masaj, ajutandu-te sa ramai odihnit in timpul calatoriilor lungi. Scaunele multi-contur sunt
            prevazute, de asemenea, cu climatizare, astfel incat sa poti seta temperatura perfecta.</p>
        </p>
    </div>
    <div class="content-block last">
        <a href="../../cs/ContentServer189c.html?cid=1205090681684&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
           class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                src="/assets/img/s_max/1214504430000.jpg"
                alt="Flexible seating"/><span class="fv-overlay-icon"></span></a>

        <h3 class="bigHeading02">
            Scaune inteligente, pentru flexibilitate suprema
        </h3>

        <p>

        <p>Dispunerea flexibila a scaunelor asigura spatiu generos pentru pana la cinci/sapte pasageri, scaunele
            rabatabile de pe randurile doi si trei permitand obtinerea unei multitudini de configuratii de locuri si
            spatii de depozitare. De exemplu, scaunele din al doilea rand si din al treilea rand pot fi rabatate
            complet, printr-o simpla apasare de buton, facand loc instantaneu pentru echipamentul tau de sport sau
            pentru cumparaturile de la magazinele de bricolaj.</p>
        </p>
    </div>
</article>
<header class="intro-header">
    <h1 class="bigHeading">
        COMODITATE
    </h1>
    <span class="highlighter"></span>

    <p class="intro-text">
        &nbsp;
    </p>
</header>
<article class="content-column left">
    <div class="img-column"><a
            href="../../cs/ContentServer64e4.html?cid=1205090676835&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
            class="js-overlay" data-media-overlay='{"height":439, "width":780}'> <img
                src="/assets/img/s_max/1214513576599.jpg"
                alt="Intelligent Speed Assist (ISA)"/><span class="fv-overlay-icon"></span></a></div>
    <div class="content">
        <h3 class="bigHeading02">
            Ajutor pentru a sta sub limita de viteza
        </h3>

        <p>

        <p>Sistemul de asistenta inteligenta pentru controlul vitezei (ISA) este conceput pentru a-ti spori controlul
            avut asupra vitezei, permitandu-ti sa te concentrezi asupra drumului. Mai intai, camera sistemului de
            Recunoastere a indicatoarelor rutiere (TSR) detecteaza automat limita de viteza curenta (daca este activat),
            apoi sistemul ajusteaza automat setarea vitezei maxime la limita respectiva.</p>
        </p>
    </div>
</article>
<article class="content-column right">
    <div class="content">
        <h3 class="bigHeading02">
            Hayon cu deschidere hands-free pentru deschidere si inchidere fara efort
        </h3>

        <p>

        <p>Daca ai mainile ocupate, iar noul S-MAX detecteaza in apropiere tocul cheii KeyFree, nu trebuie decat sa
            misti piciorul sub bara de protectie din spate si hayonul se va deschide sau se va inchide automat.</p>
        </p>
    </div>
    <div class="img-column"><a
            href="../../cs/ContentServer521d.html?cid=1205090684857&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
            class="js-overlay" data-media-overlay='{"height":439, "width":780}'> <img
                src="/assets/img/s_max/1214513580058.jpg"
                alt="Hands-free Liftgate"/><span class="fv-overlay-icon"></span></a></div>
</article>
<article class='two-column'>
    <div class="content-block">
        <a href="../../cs/ContentServera690.html?cid=1205090677704&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
           class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                src="/assets/img/s_max/1214513576934.jpg"
                alt="Ford KeyFree System"/><span class="fv-overlay-icon"></span></a>

        <h3 class="bigHeading02">
            Sistemul Key-free inseamna mai putine griji
        </h3>

        <p>

        <p>Sistemul Ford KeyFree iti permite sa incui si sa descui masina fara sa scoti cheia din buzunar sau din
            poseta. Acesta iti este de ajutor atunci cand ai mainile ocupate cu altceva.</p>
        </p>
    </div>
    <div class="content-block last">
        <a href="../../cs/ContentServer4c5f.html?cid=1205090680172&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
           class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                src="/assets/img/s_max/1214513575771.jpg"
                alt="Ford Power Starter Button"/><span class="fv-overlay-icon"></span></a>

        <h3 class="bigHeading02">
            Porneste masina prin simpla atingere a unui buton
        </h3>

        <p>

        <p>Nu mai este nevoie sa folosesti cheia. Trebuie doar sa actionezi butonul de pornire Ford Power in timp ce tii
            ambreiajul apasat (sau pedala de frana pe modelul cu transmisie automata) si motorul prinde viata.</p>
        </p>
    </div>
</article>
<article class='two-column'>
    <div class="content-block">
        <a href="../../cs/ContentServer3616.html?cid=1205090680516&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
           class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                src="/assets/img/s_max/1214513575937.jpg"
                alt="Music system"/><span class="fv-overlay-icon"></span></a>

        <h3 class="bigHeading02">
            Sunet de inalta fidelitate
        </h3>

        <p>

        <p>Un sistem audio cu noua difuzoare se afla in pachetul de dotari standard Ford SYNC 2 si asigura o claritate
            exceptionala a sunetului in intreaga masina. Un sistem premium optional, cu radio DAB, iti ofera o
            experienta de sunet superioara si include 12 difuzoare Sony.</p>
        </p>
    </div>
    <div class="content-block last">
        <a href="../../cs/ContentServer2c4e.html?cid=1205090681218&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
           class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                src="/assets/img/s_max/1214513576352.jpg"
                alt="Ford SYNC 2"/><span class="fv-overlay-icon"></span></a>

        <h3 class="bigHeading02">
            Ford SYNC 2 Tehnologie hands-free si cu ecran tactil avansata
        </h3>

        <p>

        <p>Sistemul Ford SYNC 2 din urmatoarea generatie iti permite sa conectezi telefonul mobil si playerul MP3 in
            regim wireless. Poti controla muzica, telefonul, sistemul de navigatie si climatizarea cu ajutorul unor
            comenzi vocale simple si intuitive sau prin intermediul ecranului tactil color de 8&rdquo;.<br>
            <br>
            <strong>Trebuie doar sa spui ce iti doresti...</strong><br>
            Cu ajutorul Ford SYNC 2 poti solicita o lista cu restaurantele locale rostind, pur si simplu, &bdquo;Imi
            este foame&rdquo; sau poti accesa Ghidul Michelin pentru a te ajuta sa alegi si sa faci rezervarea.
            Conectivitatea Wi-Fi este disponibila prin intermediul hotspot-urilor, cu un modem USB. Iar sistemul include
            Asistenta de urgenta Ford, care poate apela automat serviciile de urgenta in eventualitatea unui accident
            (consultati pagina Siguranta si securitate).</p>
        </p>
    </div>
</article>
<article class='three-column'>
    <div class="content-block">
        <img src="#" alt=""/>

        <h3 class="bigHeading02">
            Ford Easy-Fuel, pentru alimentari fara probleme
        </h3>

        <p>

        <p>Acesta face sa fie practic imposibila alimentarea gresita a noului dvs. S-MAX, deoarece duza pompei pur si
            simplu nu se va potrivi. Si pentru ca Easy-Fuel este un sistem fara buson, nu o sa mai aveti de-a face
            niciodata cu un buson murdar.</p>
        </p>
    </div>
    <div class="content-block">
        <img src="#" alt=""/>

        <h3 class="bigHeading02">
            Utilizare in comun a masinii fara probleme, cu ajutorul caracteristicii MyKey<sup>®</sup>
        </h3>

        <p>

        <p>Ford MyKey<sup>&reg;</sup> iti permite sa setezi limita maxima de viteza, un semnal care sa atraga atentia
            asupra purtarii centurii de siguranta si chiar volumul sistemului audio. Aceasta tehnologie este conceputa
            pentru a-ti asigura linistea atunci cand imprumuti masina unui prieten sau unui membru al familiei, deoarece
            poti programa restrictiile dorite pentru cheia respectiva. Poti pastra personal cheia de &bdquo;admin&rdquo;
            si chiar sa ai mai multe exemplare din ambele chei, daca doresti.</p>
        </p>
    </div>
    <div class="content-block last">
        <img src="#" alt=""/>

        <h3 class="bigHeading02">
            Tempomat care se poate adapta automat
        </h3>

        <p>

        <p>Cu ajutorul tehnologiei Tempomat adaptiv, alege viteza cu care doresti sa te deplasezi, iar sistemul o va
            mentine constanta. Daca senzorul RADAR incorporat detecteaza un vehicul in fata, acesta va incetini masina
            pentru a mentine o distanta prestabilita. De indata ce drumul din fata este liber, sistemul va accelera pana
            la viteza aleasa.</p>
        </p>
    </div>
</article>
</div>
<!--  tabTitle : Performanta si eficienta :: btfTabContent : 1205090683149 :: tabContent :  -->
<div id='tab2' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            GENEROS CU PERFORMANTA.<br><br> ECONOM CU COMBUSTIBILUL.
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>A trecut timpul cand trebuia sa alegi intre <br>
            putere si eficienta. In cazul noului S-MAX, designul ingenios, proiectarea <br>
            si tehnologiile inovatoare, precum Auto Start-Stop, iti permit <br>
            sa te bucuri de o combinatie perfecta a acestora.</p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"><a
                href="../../cs/ContentServer5437.html?cid=1205090684734&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
                class="js-overlay" data-media-overlay='{"height":439, "width":780}'> <img
                    src="/assets/img/s_max/1214513579797.jpg"
                    alt="EcoBoost Engine"/><span class="fv-overlay-icon"></span></a></div>
        <div class="content">
            <h3 class="bigHeading02">
                EcoBoost: putere si eficienta fara compromisuri
            </h3>

            <p>

            <p>Doua variante de motor pe benzina EcoBoost utilizeaza o combinatie de injectie directa a combustibilului
                si un sistem cu turbocompresor, pentru a oferi niveluri remarcabile de performanta si economie: <br>
                <br>
                Un nou motor EcoBoost de 1,5 litri pe benzina se alatura gamei revolutionare EcoBoost. Redus in mod
                inteligent de la modelul EcoBoost de 1,6 litri, motorul asigura un nivel mai redus al emisiilor si o
                economie de combustibil de 6,5 litri/100 km (combinat) si dezvolta o putere de 160 CP. O varianta si mai
                puternica EcoBoost de 2,0 litri dezvolta o putere impresionanta de 240 CP.</p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                O gama larga de optiuni diesel
            </h3>

            <p>

            <p>Preferi un motor diesel? Noul motor avansat TDCi Bi-turbo de 2,0 litri iti ofera patru variante de
                putere: 120 CP, 150 CP, 180 CP si 210 CP. Fiecare motor incorporeaza cea mai recenta tehnologie, pentru
                a imbunatati puterea, cuplul si economia, reducand in acelasi timp emisiile: designul imbunatatit
                asigura o reducere a emisiilor de CO<sub>2</sub> cu 7%, imbunatatind si economia de combustibil</p>
            </p>
        </div>
        <div class="img-column"><a
                href="../../cs/ContentServer5b2b.html?cid=1205090678055&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
                class="js-overlay" data-media-overlay='{"height":439, "width":780}'> <img
                    src="/assets/img/s_max/1214513577181.jpg"
                    alt="Diesel Engine"/><span class="fv-overlay-icon"></span></a></div>
    </article>
    <header class="intro-header">
        <h1 class="bigHeading">
            PRINDE BINE VOLANUL <br> SI PREIA CONTROLUL.
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Un design rafinat al sasiului, suspensie fata si spate fin ajustata <br>
            si o gama larga de tehnologii inteligente: toate se combina pentru a maximiza performanta <br>
            si pentru a asigura manevrabilitate precisa in orice situatie.</p>
        </p>
    </header>
    <article class='two-column'>
        <div class="content-block">
            <a href="../../cs/ContentServer5032.html?cid=1205090684378&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="/assets/img/s_max/1214513579713.jpg"
                    alt="Transmissions"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Puterea de a alege
            </h3>

            <p>

            <p>In cazul noului S-MAX, poti alege dintre trei transmisii diferite. O cutie de viteze manuala, cu 6
                trepte, dispune de o capacitate ridicata de cuplu si asigura schimbari uniforme, precise ale treptelor
                de viteza. O cutie de viteze automata, cu 6 trepte, dispune, de asemenea, de o capacitate ridicata de
                cuplu si de puncte de schimbare atent ajustate, pentru a oferi putere si eficienta maxime. Exista, de
                asemenea, optiunile de tractiune integrala si transmisie Ford PowerShift cu 6 trepte de viteza.</p>
            </p>
        </div>
        <div class="content-block last">
            <a href="../../cs/ContentServer7294.html?cid=1205090685013&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="/assets/img/s_max/1214513580148.jpg"
                    alt="Ford PowerShift"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Cutia de viteze Ford PowerShift. Rapiditate si economie de combustibil
            </h3>

            <p>

            <p>Imbinand confortul asigurat de transmisia automata cu controlul asociat unei cutii de viteze manuale,
                aceasta cutie de viteze avansata, cu sase trepte de viteza, preselecteaza urmatoarea treapta pentru
                tine, pentru a nu pierde din putere atunci cand treci de la o treapta de viteza la alta. Schimbarile de
                trepte uluitor de rapide si uniforme ale PowerShift fac din condus o experienta mai placuta, economisind
                in acelasi timp combustibil si reducand emisiile de CO<sub>2</sub> in comparatie cu o transmisie
                automata obisnuita.</p>
            </p>
        </div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <a href="../../cs/ContentServer364c.html?cid=1205090684139&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="/assets/img/s_max/1214513579539.jpg"
                    alt="Paddle Shift"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Schimbator cu manete: bucura-te de schimbari rapide ale treptelor de viteza in cazul transmisiei
                automate
            </h3>

            <p>

            <p>Regasindu-se in mod normal pe masinile sport de inalta performanta, comenzile de schimbare automata, cu
                manete, sunt disponibile cu ambele variante de transmisii: PowerShift si automata cu 6 trepte. Aceasta
                tehnologie inspirata de masinile de curse faciliteaza schimbarea rapida si fara efort a treptelor de
                viteza. Si deoarece comenzile cu manete sunt montate pe volan, poti schimba treptele mai eficient atunci
                cand virezi.</p>
            </p>
        </div>
        <div class="content-block last">
            <a href="../../cs/ContentServer22e0.html?cid=1205090678506&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="/assets/img/s_max/1214513577435.jpg"
                    alt="Suspension"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Suspensie avansata, pentru deplasare si manevrabilitate excelente
            </h3>

            <p>

            <p>Noua si avansata suspensie spate multi-brat, combinata cu o suspensie fata cu lonjeroane McPherson
                imbunatatita, asigura un control excelent asupra rotilor si o calitate superioara a deplasarii, aducand
                un plus la manevrabilitatea foarte sensibila la comenzi a masinii.</p>
            </p>
        </div>
    </article>
    <header class="intro-header">
        <h1 class="bigHeading">
            DEPLASARI MAI LUNGI CU ACEEASI CANTITATE DE COMBUSTIBIL.
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Noul S-MAX este proiectat sa foloseasca la maximum fiecare strop de combustibil <br>
            cu care iti alimentezi masina. Iar eficienta motoarelor sale este sporita <br>
            de tehnologii suplimentare de economisire a combustibilului.</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <a href="../../cs/ContentServere456.html?cid=1205090684577&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="/assets/img/s_max/1214513579978.jpg"
                    alt="Ford Eco Mode system"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Un sistem de informare inteligent care te ajuta sa conduci mai eficient
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
            <a href="../../cs/ContentServer7807.html?cid=1205090680028&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="/assets/img/s_max/1214513578352.jpg"
                    alt="Auto Start-Stop"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Foloseste mai putin combustibil cu functia Auto-Start-Stop
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
        <div class="content-block last">
            <a href="../../cs/ContentServer2ec8.html?cid=1205090679206&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="/assets/img/s_max/1214513577937.jpg"
                    alt="Smart Regenerative Charging"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Un mod mai eficient de a-ti reincarca bateria
            </h3>

            <p>

            <p>Spre deosebire de sistemele conventionale, sistemul de incarcare regenerativa inteligenta reincarca
                bateria doar atunci cand este nevoie si, ori de cate ori este posibil, evita realizarea acestei
                operatiuni atunci cand apesi pedala de acceleratie. Acest lucru poate reduce si mai mult consumul de
                combustibil si nivelul de emisii.</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Siguranta si securitate :: btfTabContent : 1205090679366 :: tabContent :  -->
<div id='tab3' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            PROTECTIA TA ESTE PRIORITATEA NOASTRA
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Cu un pachet complet de masuri de siguranta incorporate,<br>
            noul tau S-MAX este proiectat pentru a-ti oferi atat tie, cat si<br>
            pasagerilor, cele mai inalte niveluri de protectie.</p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"><a
                href="../../cs/ContentServer772f.html?cid=1205090680634&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
                class="js-overlay" data-media-overlay='{"height":439, "width":780}'> <img
                    src="/assets/img/s_max/1214513576017.jpg"
                    alt="Pre-Collision Assist with Pedestrian Detection"/><span class="fv-overlay-icon"></span></a>
        </div>
        <div class="content">
            <h3 class="bigHeading02">
                Un sistem care poate ajuta la protejarea pietonilor
            </h3>

            <p>

            <p>Sistemul de asistenta pre-coliziune cu detectare a pietonilor (si a obiectelor mari) detecteaza
                persoanele de pe drumul din fata sau pe cei care s-ar putea intersecta cu traseul vehiculului si te
                avertizeaza cu privire la prezenta acestora. Daca nu reactionezi, sistemul va aplica automat franele.
                Aceasta noua tehnologie este conceputa pentru a ajuta la reducerea severitatii accidentelor sau pentru a
                ajuta la evitarea completa a acestora, functionand la viteze de pana la 80 km/h.</p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Faruri care te ajuta sa vezi mai bine in viraje
            </h3>

            <p>

            <p>Farurile Ford Dynamic LED cu iluminat adaptiv nu sunt doar uimitoare; sunt si inteligente. O serie de
                LED-uri ofera un model de lumina precis, iar lumina naturala a acestora, intensa si stralucitoare,
                asigura un iluminat extraordinar. Sunt incluse, de asemenea, lumini de zi. Iar benzile de semnalizare cu
                LED-uri inlocuiesc luminile &bdquo;clipitoare&rdquo; traditionale, generand o secventa luminoasa
                puternic vizibila pentru alti soferi. In plus, Faza lunga anti-orbire se ajusteaza automat, maximizand
                vizibilitatea fara sa orbeasca alti soferi. In mod remarcabil, aceste faruri/lumini noi urmeaza, de
                asemenea, drumul, ajutandu-te sa vezi mai clar in viraje.</p>
            </p>
        </div>
        <div class="img-column"><a
                href="../../cs/ContentServer2f3d.html?cid=1205090678388&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
                class="js-overlay" data-media-overlay='{"height":439, "width":780}'> <img
                    src="/assets/img/s_max/1214513577349.jpg"
                    alt="Ford Adaptive Dynamic LED technology"/><span class="fv-overlay-icon"></span></a></div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <a href="../../cs/ContentServerd270.html?cid=1205090682274&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="/assets/img/s_max/1214513578697.jpg"
                    alt="Emergency Brake Assist (EBA)"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Putere suplimentara pentru franare de urgenta
            </h3>

            <p>

            <p>Sistemul de asistenta la franarea de urgența (EBA) ajuta vehiculul sa atinga eficienta maxima de franare
                in cazul unei situatii de urgenta. Este controlat automat prin intermediul sistemului ESP, care
                detecteaza presiunea aplicata de sofer pe pedala de frana si creste automat aceasta presiune, daca este
                cazul.</p>
            </p>
        </div>
        <div class="content-block last">
            <a href="../../cs/ContentServere36a.html?cid=1205090682838&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="/assets/img/s_max/1214513579029.jpg"
                    alt="Blind Spot Information System (BLIS)"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Oglinzi care vad ce tu nu poti vedea
            </h3>

            <p>

            <p>Un Sistem de asistenta pentru unghiul mort (BLIS) te poate ajuta sa schimbi benzile mai in siguranta,
                multumita senzorilor RADAR care pot scana unghiurile moarte de pe ambele parti ale vehiculului. Daca
                detecteaza un vehicul pe care te nu il poti vedea, o lumina portocalie afisata in oglinda laterala de pe
                partea corespunzatoare se va aprinde pentru a te avertiza. BLIS este prevazut, de asemenea, cu o
                tehnologie complet noua, Alerta la intersectarea cu traficul.</p>
            </p>
        </div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <a href="../../cs/ContentServer9b06.html?cid=1205090683283&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="/assets/img/s_max/1214513579278.jpg"
                    alt="Ford 2 with Emergency Assistance"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Ford SYNC 2 cu Asistenta de urgenta
            </h3>

            <p>

            <p>Un aspect important al tehnologiei Ford SYNC 2 este Asistenta de urgenta Ford*. Aceasta caracteristica
                ce-ti poate salva viata este conceputa sa te asiste la efectuarea unui apel de urgenta si poate furniza
                serviciilor de urgenta informatii despre locatia vehiculului, in limba vorbita de tine. Daca este cazul,
                poti alege sa intrerupi apelul sau sa discuți personal cu serviciile, daca este necesar. Un aspect
                extrem de important este faptul ca sistemul va furniza informatii vitale, precum coordonatele tale GPS,
                chiar si atunci cand ti-ai pierdut cunostinta.<br>
                <br>
                <span style="font-size: smaller;">*Asistenta de urgenta Ford funcționeaza in peste 30 de tari din Europa. Aceasta caracteristica functioneaza atunci cand este conectata cu un telefon mobil compatibil pe care il ai la tine, in momentul in care un airbag este declansat (cu exceptia airbagurilor pentru genunchi) sau atunci cand un senzor care inregistreaza o coliziune intrerupe pompa de combustibil. Functia de mesagerie si Asistenta de urgenta nu sunt acceptate in toate limbile europene. </span>
            </p>
            </p>
        </div>
        <div class="content-block last">
            <a href="../../cs/ContentServerb7b3.html?cid=1205090680752&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="/assets/img/s_max/1214513576103.jpg"
                    alt="Electronic Stability Programme (ESP)"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Ofera incredere chiar si in conditii dificile
            </h3>

            <p>

            <p>Masina este prevazuta cu un sistem de Control electronic al stabilitatii (ESP), care include o serie de
                tehnologii concepute pentru a te ajuta sa mentii controlul. Senzorii detecteaza orice schimbari bruste
                de directie, franare sau comportament al vehiculului care te-ar putea face sa pierzi controlul, pentru
                ca apoi ESP sa ajusteze precis viteza fiecarei roti in parte, facand masina mai stabila si ajutand la
                prevenirea alunecarii. Caracteristicile ESP includ asistenta la pornirea in rampa, asistenta la franarea
                de urgenta si pre-activarea electronica a franelor.<br> Opriri de urgenta mai rapide si mai scurte<br>
                Atunci cand detecteaza o situatie de oprire de urgenta, ESP pre-incarca sistemul de franare, inchizand
                orice gol de aer dintre placutele si discurile de frana. Cunoscuta drept pre-activare electronica a
                franelor, aceasta tehnologie ajuta la reducerea distantei de franare a masinii.</p>
            </p>
        </div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <a href="../../cs/ContentServere246.html?cid=1205090676717&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="/assets/img/s_max/1214513579887.jpg"
                    alt="Hill Start Assist"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Un plus de control in cazul pornirilor in rampa
            </h3>

            <p>

            <p>Sistemul de asistenta la pornirea din rampa impiedica temporar alunecarea in spate sau in fața atunci
                cand pornesti din panta. Sistemul functioneaza prin mentinerea presiunii la nivelul sistemului de fanare
                pentru un interval suplimentar de 2,5 secunde, asigurandu-ti mai mult timp si control atunci cand muti
                piciorul de pe pedala de frana pe cea de acceleratie. Acest sistem este, de asemenea, util cand opresti
                si pornesti autovehiculul pe suprafete alunecoase.</p>
            </p>
        </div>
        <div class="content-block last">
            <a href="../../cs/ContentServer7e9b.html?cid=1205090681436&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="/assets/img/s_max/1214513576435.jpg"
                    alt="ISOFIX points"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Ajutor pentru mentinerea copiilor in siguranta
            </h3>

            <p>

            <p>Puncte ISOFIX pentru fixarea scaunului pentru copii sunt montate pe cel de-al doilea rand de scaune.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img src="#" alt=""/>

            <h3 class="bigHeading02">
                Protectie continua impotriva rasturnarii
            </h3>

            <p>

            <p>Controlul stabilitatii la rasturnare poate detecta daca exista un grad semnificativ de deplasare a
                caroseriei si detecteaza si alte manevre ce ar putea duce la o posibila rasturnare. Aceasta tehnologie
                franeaza apoi in mod individual rotile si ajusteaza acceleratia pentru a ajuta la redresarea vehiculului
                si restabilirea controlului.</p>
            </p>
        </div>
        <div class="content-block">
            <img src="#" alt=""/>

            <h3 class="bigHeading02">
                Sistemele de siguranta coordonate se activeaza intr-o fractiune de secunda
            </h3>

            <p>

            <p>Un sistem inteligent de protectie avansat (IPS) coordoneaza o serie de caracteristici de siguranta pentru
                a-ti asigura protectie maxima tie si pasagerilor. In plus, noul S-MAX este dotat cu o carcasa rigida,
                care absoarbe energia in cazul unui impact, si cu o tehnologie avansata pentru scaune si centuri de
                siguranta, pentru a reduce riscul de accidentare in cazul unui impact.</p>
            </p>
        </div>
        <div class="content-block last">
            <img src="#" alt=""/>

            <h3 class="bigHeading02">
                Sesizeaza vehiculele pe care tu le-ai putea rata
            </h3>

            <p>

            <p>Atunci cand iesi cu spatele dintr-un loc de parcare si ai vizibilitate redusa asupra situatiei
                traficului, Alerta la intersectarea cu traficul (parte a Sistemului de asistenta pentru unghiul mort,
                BLIS) poate detecta vehicule care se apropie si poate emite un avertisment sonor. Aceasta tehnologie
                declanseaza o lumina in oglinda laterala (stanga sau dreapta, in functie de directia din care se apropie
                vehiculele).</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img src="#" alt=""/>

            <h3 class="bigHeading02">
                Opriri de urgenta mai rapide
            </h3>

            <p>

            <div>Cand simte o situatie de oprire brusca, sistemul EPS pre-incarca sistemul de franare, inchizand spatiul
                dintre disc si placutele de frana. Aceasta tehnologie, cunoscuta sub numele de Electronic Brake Prefill,
                ajuta la reducerea distantei de franare.
            </div>
            </p>
        </div>
        <div class="content-block">
            <img src="#" alt=""/>

            <h3 class="bigHeading02">
                Control maxim la viraje
            </h3>

            <p>

            <p>Controlul vectorului de cuplu echilibreaza cuplul motorului intre rotile din fata, pentru a se potrivi
                tipului de carosabil si conditiilor de condus. Actionand de 100 de ori pe secunda, sistemul este de 33
                de ori mai rapid decat o clipire din ochi. Ceea ce inseamna o aderenta mai buna si manevrabilitate de
                precizie extrema, dupa cum vei descoperi in momentul accelerarii in curbe.</p>
            </p>
        </div>
        <div class="content-block last">
            <img src="#" alt=""/>

            <h3 class="bigHeading02">
                Un sistem avansat de airbaguri
            </h3>

            <p>

            <p>Un sistem de airbaguri care incorporeaza airbaguri pentru scaunul din fata la nivel pelvian si toracic si
                ofera airbaguri laterale optionale pentru cele doua scaune dinspre exterior de pe cel de-al doilea
                rand.</p>
            </p>
        </div>
    </article>
    <header class="intro-header">
        <h1 class="bigHeading">
            SECURITATE MAXIMA
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Bazeaza-te pe o gama larga de masuri de securitate, prevazute pentru<br>
            a tine noul S-MAX in siguranta impotriva hotilor.</p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"><a
                href="../../cs/ContentServerf13b.html?cid=1205090679795&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
                class="js-overlay" data-media-overlay='{"height":439, "width":780}'> <img
                    src="/assets/img/s_max/1214513578179.jpg"
                    alt="Perimeter alarm"/><span class="fv-overlay-icon"></span></a></div>
        <div class="content">
            <h3 class="bigHeading02">
                Protectie cu alarma
            </h3>

            <p>

            <p>Alarma Thatcham de categoria 1 este un sistem sofisticat, care se activeaza automat in momentul in care
                incui vehiculul si emite un semnal sonor puternic daca este declansat de o intrare fortata, daca masina
                este ridicata sau daca senzorii de miscare detecteaza o miscare inauntru.</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
<!-- BEGIN [MidPageTabs] -->
<!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Experienta condusului</a></h2> -->
<!--</div>-->
<!--<div id='tab2' class="mp-tab-wrapper">
<h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">Performanta si eficienta</a></h2> -->
<!--</div>-->
<!--<div id='tab3' class="mp-tab-wrapper">
<h2><a href='#tab3' class="mp-tab omt_xd_mt_ti">Siguranta si securitate</a></h2> -->
<!--</div>-->
<!-- END [MidPageTabs] -->
<!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
<!-- BEGIN [MidPageTabs] -->
<!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Experienta condusului</a></h2> -->
<!--</div>-->
<!--<div id='tab2' class="mp-tab-wrapper">
<h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">Performanta si eficienta</a></h2> -->
<!--</div>-->
<!--<div id='tab3' class="mp-tab-wrapper">
<h2><a href='#tab3' class="mp-tab omt_xd_mt_ti">Siguranta si securitate</a></h2> -->
<!--</div>-->
<!-- END [MidPageTabs] -->
</div>
</div>
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205090681673&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205107569254&amp;tabName=S-MAX-Vignale&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="S-MAX-Vignale#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205090681673&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205107569254&amp;tabName=S-MAX-Vignale&amp;c=Page&amp;site=RORO4_ENGINE">S-MAX
        Vignale</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205107569239 -->
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
