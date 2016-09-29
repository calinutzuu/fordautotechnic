
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
            <li data-selenium="breadcrumb_nameplate">Galaxy</li>
        </ul>
    </nav>
    <script>
        var vehicleimagepackpresid = '1205095116351';
        var vehicleimagepackyear = 'NONE';
    </script>
    <div class="fblike-locale">en_RO</div>
    <script>
        var googleAdServerNameplateId = 'AUTHORED';
        var googleAdServerNameplateName = 'Galaxy';
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
            ]}}, "brand": "Ford", "vehicleType": "PV", "catalogId": "NONE", "nameplate": "Galaxy", "labelAvailableFrom": "&nbsp;", "formattedCurrency": "", "nameplateText": "Spatiu interior rafinat si bine echipat, cu sapte locuri confortabile si o gama de tehnologii remarcabile.", "imagePack": false, "hideVehicleImage": false, "facebookImagePath": "", "facebookAppId": "facebookAppId", "images": [], "billBoardImagePath": null, "backgroundImagePath": ["/assets/img/noul_galaxy/1214514162638.jpg", "null", "null"], "disclaimerTextColor": ["A7A7A7", null, null], "current": true, "cid": "1205094889909", "cta": [
                {"linkTitle": "DESCARC\u0102 BRO\u015EUR\u0102 ", "linkURL": "\/SBE\/BrosuriSiPreturi", "linkType": "primary", "linkTarget": "_blank", "omid": "va"},
                {"linkTitle": "\u00CENSCRIE-TE LA TEST DRIVE ", "linkURL": "\/SBE\/TestDrive\/TestDriveAutoturisme?shopcode=AUTHORED&derivcode=AUTHORED", "linkType": "tertiary", "linkTarget": "_blank", "omid": "tr"}
            ], "social": {"facebook": "https://facebook.com", "facebookPage": "fordromania"}, "disclaimer": "MODELUL PREZENTAT ESTE UN GALAXY ZETEC. IMAGINE CU TITLUL DE PREZENTARE.", "seriesCode": "AUTHORED", "uscCode": "AUTHORED", "presId": "1205095116351", "promos": [], "idf": {"options": []}}
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
                    style="background-image:url(../../cs/BlobServere0c9?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpg&amp;blobwhere=1214514162638&amp;blobkey=id)">
                    <div class="layered-nameplate-image">
                        <div class="image-holder">
                        </div>
                    </div>
                    <aside class="nameplate-disclaimer style=color:#A7A7A7">
                        MODELUL PREZENTAT ESTE UN GALAXY ZETEC. IMAGINE CU TITLUL DE PREZENTARE.
                    </aside>
                </li>
            </ul>
            <div itemscope itemtype="http://schema.org/Product" id="nameplateDetails" class="nameplate-vehicle">
                <!--the text description-->
                <div class="name-plate-text">
                    <p class="intro"> NOUL</p>

                    <h1 class="bigHeading">
                        <span data-selenium="XA_namePlate" itemprop="member" class="nameplate boldTxt">Galaxy</span>
                        <span data-selenium="XA_model" itemprop="model" itemscope
                              itemtype="http://schema.org/Organization" class="mark">Ford</span>
                        <!--The price -->
                    </h1>
                    <!--The blurb -->
                    <p class="blurb">
                        Spatiu interior rafinat si bine echipat, cu sapte locuri confortabile si o gama de tehnologii
                        remarcabile.
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
<!--  tabUrl /cs/ContentServer?cid=1205094889909&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="PrezentareGenerala#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205094889909&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE">Prezentare
        generala</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205094894185 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205094889909&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205104019638&amp;tabName=Preturi-si-promotii&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="Preturi-si-promotii#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205094889909&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205104019638&amp;tabName=Preturi-si-promotii&amp;c=Page&amp;site=RORO4_ENGINE">Preturi
        si promotii</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205104016375 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205094889909&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205094893939&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="Design#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205094889909&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205094893939&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE">Design</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205094889871 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205094889909&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205094896960&amp;tabName=Caracteristici&amp;c=Page&amp;site=RORO4_ENGINE -->
<!-- IntoID ::: articleAssetId -->
<li class="selected"><a href="Caracteristici#primaryTabs"
                        data-ajaxlink="/cs/ContentServer?cid=1205094889909&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205094896960&amp;tabName=Caracteristici&amp;c=Page&amp;site=RORO4_ENGINE">Caracteristici</a>
<!--This is where the main content for the selected tab will go -->
<!-- secondary tabs -->
<div class="secondary-tabs tab-content">
<nav class="sub-nav">
    <ul>
        <li><a href='#tab1' class='omt_tabName'>Experienta Condusului</a></li>
        <li><a href='#tab2' class='omt_tabName'>Putere</a></li>
        <li><a href='#tab3' class='omt_tabName'>Comoditate</a></li>
        <li><a href='#tab4' class='omt_tabName'>Siguranta vehiculului</a></li>
    </ul>
</nav>
<!-- isBtfTab : from MidPageTabs true -->
<div class="innertab-wrapper">
<!--  tabTitle : Experienta Condusului :: btfTabContent : 1205094890558 :: tabContent :  -->
<div id='tab1' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            COMBINATIA PERFECTA INTRE PERFORMANTA SI EFICIENTA
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Benzina sau motorina: indiferent de alegere, proiectarea avansata se combina cu tehnologiile ingenioase
            pentru a-ti oferi performante remarcabile si economie impresionanta de combustibil.</p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"><a
                href="../../cs/ContentServer3de7?cid=1205094891346&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
                class="js-overlay" data-media-overlay='{"height":439, "width":780}'> <img
                    src="/assets/img/noul_galaxy/1214514159942.jpg"
                    alt="All-Wheel Drive"/><span class="fv-overlay-icon"></span></a></div>
        <div class="content">
            <h3 class="bigHeading02">
                Incredere chiar si in conditii schimbatoare
            </h3>

            <p>

            <p>Sistemul cu tractiune integral inteligenta (AWD) poate determina cata aderenta, cat balans in viraje si
                ce nivel de reactie sunt necesare in conditii de vreme uda, uscata sau cu gheata si pe teren schimbator.
                Tehnologia este una inteligenta, asa ca poate comuta tractiunea pe puntea din fata sau din spate, in
                functie de cerinte. Iar acest sistem de &bdquo;cuplu la cerere&rdquo; asigura o manevrabilitate
                exceptionala si eficienta imbunatatita.</p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Vizibilitate sporita, din ambele parti
            </h3>

            <p>

            <p>O camera discreta plasata in partea din fata a vehiculului, transmite o imagine pe ecranul afisajului
                multifunctional al masinii, astfel incat sa poti vedea vehiculele, biciclistii sau pietonii care vin din
                ambele parti. Aceasta noua tehnologie optionala se dovedeste de nepretuit atunci cand iesi dintr-un
                spatiu de parcare ingust sau cand te afli pe un drum aglomerat si unde vederea laterala iti este
                obstructionata. </p>
            </p>
        </div>
        <div class="img-column"><a
                href="../../cs/ContentServer39e2?cid=1205094890324&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
                class="js-overlay" data-media-overlay='{"height":439, "width":780}'> <img
                    src="/assets/img/noul_galaxy/1214514164201.jpg"
                    alt="Front Split View Camera"/><span class="fv-overlay-icon"></span></a></div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <a href="../../cs/ContentServer063d?cid=1205094898685&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="/assets/img/noul_galaxy/1214514159431.jpg"
                    alt="Active Park Assist system"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Intrari si iesiri din parcare fara stres
            </h3>

            <p>

            <p>Cu ajutorul mai multor tehnologii, sistemul de asistenta activa la parcare face mai mult decat sa te
                directioneze in locurile de parcare paralela. Sistemul de asistenta la iesirea din parcare (POA) te
                ajuta si sa iesi din acestea. Sistemul pentru parcare perpendiculara (PPA) poate sa detecteze daca
                masina are loc intr-un anumit spatiu si te directioneaza in locul respectiv. Sistemul de asistenta la
                parcare laterala (SPA) te atentioneaza, de asemenea, daca exista obstacole</p>
            </p>
        </div>
        <div class="content-block last">
            <a href="../../cs/ContentServerb891?cid=1205094892320&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="/assets/img/noul_galaxy/1214514160554.jpg"
                    alt="Electric power-assisted steering (EPAS) "/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Directie servoasistata care reactioneaza la orice situatie
            </h3>

            <p>

            <p>Directia servoasistata electric (EPAS) se ajusteaza automat la viteza de rulare si la conditiile de drum.
                La viteze reduse, sistemul face ca rotirea volanului sa fie mai usoara, imbunatatind manevrabilitatea.
                La viteze ridicate, cand ai nevoie de control mai mare, directia devine mai rigida. Acum, cu ajutorul
                controlului impotriva devierii de la cursul normal, EPAS ia, de asemenea, in calcul, vantul care bate
                din fata si alte conditii de drum, in timp ce controlul activ reduce vibratiile nedorite resimtite la
                nivelul volanului.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <a href="../../cs/ContentServer11e1?cid=1205094893722&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="/assets/img/noul_galaxy/1214514160819.jpg"
                    alt="Hill Start Assist"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Un plus de control in cazul pornirilor in rampa
            </h3>

            <p>

            <p>Sistemul de asistenta la pornirea din rampa impiedica temporar rularea in spate sau in fata atunci cand
                pornesti din panta. Sistemul functioneaza prin mentinerea presiunii la nivelul sistemului de franare
                pentru un interval suplimentar de 2,5 secunde, asigurandu-ti mai mult timp si control atunci cand muti
                piciorul de pe pedala de frana pe cea de acceleratie. Acest sistem este, de asemenea, util cand opresti
                si pornesti autovehiculul pe suprafete alunecoase. </p>
            </p>
        </div>
        <div class="content-block">
            <a href="../../cs/ContentServer28be?cid=1205094897249&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="/assets/img/noul_galaxy/1214514158605.jpg"
                    alt="All-new advanced multi-link rear suspension"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Suspensie avansata, pentru deplasare si manevrabilitate excelente
            </h3>

            <p>

            <p>Noua si avansata suspensie spate multi-brat, combinata cu o suspensie fata cu lonjeroane McPherson
                imbunatatita, asigura control excelent asupra rotilor si o calitate superioara a deplasarii. Drept
                urmare, masina ofera manevrabilitate sensibila la comenzi in orice situatie de drum. </p>
            </p>
        </div>
        <div class="content-block last">
            <a href="../../cs/ContentServera6c7?cid=1205094890185&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="/assets/img/noul_galaxy/1214514164030.jpg"
                    alt="Adaptive Cruise Control "/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Pilot automat autoadaptiv
            </h3>

            <p>

            <p>Cu ajutorul pilotului automat autoadaptiv, alegi viteza cu care doresti sa te deplasezi, iar sistemul o
                va mentine constanta. Daca senzorul RADAR incorporat detecteaza un vehicul in fata, acesta va incetini
                masina pentru a mentine o distanta prestabilita. De indata ce drumul din fata este liber, sistemul va
                accelera pana la viteza aleasa.</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Putere :: btfTabContent : 1205094897232 :: tabContent :  -->
<div id='tab2' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            PROFITA LA MAXIMUM DE FIECARE PICATURA DE COMBUSTIBIL
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>O gama larga de motoare avansate pe benzina si diesel,
            proiectate pentru a utiliza in cel mai eficient mod posibil combustibilul.
            <br><br>
            O serie de tehnologii de ultima ora,
            concepute pentru a duce aceste performante la un nivel superior.
        </p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"><a
                href="../../cs/ContentServer7a21?cid=1205094888795&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
                class="js-overlay" data-media-overlay='{"height":439, "width":780}'> <img
                    src="/assets/img/noul_galaxy/1214514163275.jpg"
                    alt="EcoBoost petrol engine options"/><span class="fv-overlay-icon"></span></a></div>
        <div class="content">
            <h3 class="bigHeading02">
                EcoBoost: putere si eficienta fara compromisuri
            </h3>

            <p>

            <p>Doua variante de motor pe benzina EcoBoost utilizeaza o combinatie de injectie directa a combustibilului
                si un sistem cu turbocompresor, pentru a oferi niveluri remarcabile de performanta si economie: <br>
                <br> <strong>Un nou motor EcoBoost de 1,5 litri pe benzina</strong> se alatura gamei revolutionare
                EcoBoost, asigurand un nivel redus al emisiilor si economie de combustibil remarcabila, de 6,5 litri/100
                km, impreuna cu o putere dezvoltata de 160 CP. <br> <br> <strong>Motorul EcoBoost de 2,0 litri </strong>dezvolta
                o putere de 240 CP. Un sistem &bdquo;sound symposer&rdquo; special proiectat iti permite sa auzi in
                cabina zgomotul distinct al motorului atunci cand accelerezi puternic.</p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                O gama larga de optiuni diesel
            </h3>

            <p>

            <p>Preferi un motor diesel? Un motor TDCi avansat de 2,0 litri iti ofera trei variante de putere: 150 CP,
                180 CP si 210 CP bi-turbo. Fiecare motor incorporeaza cea mai recenta tehnologie pentru a imbunatati
                puterea, cuplul si economia, reducand in acelasi timp emisiile.</p>
            </p>
        </div>
        <div class="img-column"><a
                href="../../cs/ContentServere4a1.html?cid=1205094889298&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
                class="js-overlay" data-media-overlay='{"height":439, "width":780}'> <img
                    src="/assets/img/noul_galaxy/1214514163525.jpg"
                    alt="2.0L TDCi diesel engine for extra power and maximum efficiency"/><span
                    class="fv-overlay-icon"></span></a></div>
    </article>
    <article class="content-column left">
        <div class="img-column"><a
                href="../../cs/ContentServer60f4.html?cid=1205094899320&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
                class="js-overlay" data-media-overlay='{"height":439, "width":780}'> <img
                    src="/assets/img/noul_galaxy/1214514162561.jpg"
                    alt="Automatic Paddle Shift Controls"/><span class="fv-overlay-icon"></span></a></div>
        <div class="content">
            <h3 class="bigHeading02">
                Schimbator cu manete: bucura-te de schimbari rapide ale treptelor de viteza in cazul transmisiei
                automate
            </h3>

            <p>

            <p>Regasindu-se in mod normal pe masinile sport de inalta performanta, comenzile de schimbare automata, cu
                padele, sunt disponibile cu ambele variante de transmisii: PowerShift si automata cu 6 trepte. Aceasta
                tehnologie inspirata de masinile de curse faciliteaza schimbarea rapida si fara efort a treptelor de
                viteza. Si deoarece comenzile cu padele sunt montate pe volan, poti schimba treptele mai eficient atunci
                cand virezi. </p>
            </p>
        </div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <a href="../../cs/ContentServercbef.html?cid=1205094893464&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="/assets/img/noul_galaxy/1214514163030.jpg"
                    alt="Ford Eco Mode"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Un sistem de informare inteligent, care te ajuta sa conduci mai eficient
            </h3>

            <p>

            <p>Sistemul inovator Ford Eco Mode evalueaza in mod continuu efectele stilului personal de condus asupra
                consumului de combustibil. Acesta analizeaza viteza, schimbarea treptelor, franarea si nivelurile de
                anticipare, plus raportul personal de deplasari pe distante scurte si lungi. Apoi, software-ul
                inteligent iti ofera recomandari legate de modul de imbunatatire a economiei de combustibil.</p>
            </p>
        </div>
        <div class="content-block last">
            <img src="#" alt=""/>

            <h3 class="bigHeading02">
                Trei tipuri de transmisie cu 6 trepte de viteza
            </h3>

            <p>

            <p>In cazul noului Galaxy, poti alege dintre trei transmisii diferite. Cutia de viteze manuala, cu 6 trepte,
                dispune de o capacitate ridicata de cuplu si asigura schimbari uniforme, precise ale treptelor de
                viteza. Aceasta dispune, de asemenea, de o capacitate ridicata de cuplu si de puncte de schimbare atent
                ajustate, pentru a oferi putere si eficienta maxime. Exista, de asemenea, optiunile de tractiune
                integrala si transmisie Ford PowerShift cu 6 trepte de viteza.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <a href="../../cs/ContentServer731f.html?cid=1205094893593&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="/assets/img/noul_galaxy/1214514160732.jpg"
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
        <div class="content-block">
            <a href="../../cs/ContentServer755d.html?cid=1205094890994&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="/assets/img/noul_galaxy/1214514159688.jpg"
                    alt="Ford PowerShift gearbox"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Cutia de viteze Ford PowerShift. Rapiditate si economie de combustibil
            </h3>

            <p>

            <p>Imbinand confortul asigurat de transmisia automata cu controlul asociat unei cutii de viteze manuale,
                aceasta cutie de viteze avansata, preselecteaza urmatoarea treapta pentru tine, pentru a nu pierde din
                putere. Schimbarile de trepte uluitor de rapide si uniforme ale PowerShift fac din condus o experienta
                mai placuta, economisind in acelasi timp combustibil si reducand emisiile de CO<sub>2</sub> in
                comparatie cu o transmisie automata obisnuita.</p>
            </p>
        </div>
        <div class="content-block last">
            <a href="../../cs/ContentServer74cf.html?cid=1205094897497&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="/assets/img/noul_galaxy/1214514158771.jpg"
                    alt="Auto Start-Stop"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Folosesti mai putin combustibil cu functia Auto-Start-Stop
            </h3>

            <p>

            <p>Atunci cand te opresti la semafor sau cand astepti intr-o coloana, aceasta tehnologie poate opri automat
                motorul, fara a opri insa alimentarea sistemelor esentiale, precum farurile, aerul conditionat, radioul
                si sistemul Ford SYNC. De indata ce esti gata sa pleci de pe loc, apasa, ca de obicei, pe pedala de
                ambreiaj si selecteaza prima treapta de viteza sau apasa pe pedala de acceleratie, in cazul unei
                transmisii automate, iar sistemul porneste din nou motorul. Sistemul Auto-Start-Stop este deosebit de
                eficient in orase, unde poate reduce consumul de combustibil cu pana la 10% (mediu urban).</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Comoditate :: btfTabContent : 1205094895391 :: tabContent :  -->
<div id='tab3' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            RELAXEAZA-TE SI BUCURA-TE DE FIECARE CALATORIE
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">
            Confort, comoditate, sentimentul <br>
            neegalat al calatoriei la clasa intai <br>
            Bun venit la bordul noului Ford Galaxy.
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"><a
                href="../../cs/ContentServercfdc.html?cid=1205094897380&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
                class="js-overlay" data-media-overlay='{"height":439, "width":780}'> <img
                    src="../../cs/BlobServer39d7.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214514158681&amp;blobkey=id"
                    alt="Multi-Contour seats"/><span class="fv-overlay-icon"></span></a></div>
        <div class="content">
            <h3 class="bigHeading02">
                Scaune care asigura sprijin suplimentar… si care iti pot oferi un masaj
            </h3>

            <p>

            <p>Noile scaune multi-contur sunt disponibile pentru sofer si pasagerul din fata si sunt complet reglabile
                din proiectare. Drept urmare, acestea pot asigura sprijin suplimentar acolo unde ai nevoie si iti pot
                oferi chiar si un masaj, ajutandu-te sa ramai odihnit in timpul calatoriilor lungi. Scaunele
                multi-contur sunt disponibile, de asemenea, cu climatizare, astfel incat sa poti seta temperatura
                perfecta.</p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Ajutor pentru a respecta limita de viteza
            </h3>

            <p>

            <p>Sistemul de asistenta inteligenta pentru controlul vitezei (ISA) este conceput pentru a-ti spori
                controlul avut asupra vitezei, permitandu-ti sa te concentrezi asupra drumului. Mai intai, camera
                sistemului de recunoastere a indicatoarelor rutiere (TSR) detecteaza automat limita de viteza curenta
                (daca este activat), apoi sistemul ajusteaza setarea vitezei maxime la limita respectiva.</p>
            </p>
        </div>
        <div class="img-column"><a
                href="../../cs/ContentServer6405.html?cid=1205094894605&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
                class="js-overlay" data-media-overlay='{"height":439, "width":780}'> <img
                    src="../../cs/BlobServer836e.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214514161315&amp;blobkey=id"
                    alt="Intelligent Speed Assist (ISA)"/><span class="fv-overlay-icon"></span></a></div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <a href="../../cs/ContentServerc793.html?cid=1205094896847&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="../../cs/BlobServerd7c0.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214514158354&amp;blobkey=id"
                    alt="Ford Power Starter Button"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Pornesti masina prin simpla atingere a unui buton
            </h3>

            <p>

            <p>Nu mai este nevoie sa folosesti cheia. Trebuie doar sa actionezi butonul de pornire Ford Power in timp ce
                tii ambreiajul apasat (sau pedala de frana pentru modelul cu transmisie automata) si motorul prinde
                viata.</p>
            </p>
        </div>
        <div class="content-block">
            <a href="../../cs/ContentServer3815.html?cid=1205094888644&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="../../cs/BlobServer621d.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214514163199&amp;blobkey=id"
                    alt="Climate control"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Seteaza temperatura ideala
            </h3>

            <p>

            <p>Un sistem puternic de incalzire, ventilatie si climatizare (HVAC) te ajuta sa mentii un mediu calduros
                sau racoros. Climatizarea cu zona dubla de control (standard la seriile Trend si Titanium) iti permite
                sa reglezi temperatura pentru sofer si pentru pasagerul din fata. Iar cu optiunea de sistem HVAC
                auxiliar, poti chiar sa selectezi temperatura perfecta pentru pasagerii de pe al treilea rand, cu
                beneficii si pentru cei de pe al doilea rand. </p>
            </p>
        </div>
        <div class="content-block last">
            <a href="../../cs/ContentServer97a4.html?cid=1205094896217&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="../../cs/BlobServer9e4b.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214514162236&amp;blobkey=id"
                    alt="Hands-free Liftgate"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Hayon cu deschidere hands-free
            </h3>

            <p>

            <p>Daca ai mainile ocupate iar noul Galaxy detecteaza in apropiere tocul cheii KeyFree, nu trebuie decat sa
                misti piciorul sub bara de protectie din spate si hayonul se va deschide sau se va inchide automat.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <a href="../../cs/ContentServerdd7e.html?cid=1205094898415&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="../../cs/BlobServer172e.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214514159269&amp;blobkey=id"
                    alt="Intelligent Speed Assist (ISA)"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Sistemul Key-free inseamna mai putine griji
            </h3>

            <p>

            <p>Sistemul Ford KeyFree iti permite sa incui si sa descui masina fara sa scoti cheia din buzunar sau din
                poseta. Acesta iti este de ajutor atunci cand ai mainile ocupate cu altceva.</p>
            </p>
        </div>
        <div class="content-block">
            <a href="../../cs/ContentServer6435.html?cid=1205094896331&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="../../cs/BlobServer8611.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214514162319&amp;blobkey=id"
                    alt="Worry-free car sharing with Ford MyKey®."/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Utilizarea in comun a masinii, fara probleme, cu ajutorul caracteristicii MyKey®
            </h3>

            <p>

            <p>Ford MyKey® iti permite sa setezi limita maxima de viteza, un semnal care sa atraga atentia asupra
                purtarii centurii de siguranta si chiar volumul sistemului audio. Aceasta tehnologie este conceputa
                pentru a-ti asigura linistea atunci cand imprumuti masina unui prieten sau unui membru al familiei,
                deoarece poti programa restrictiile dorite pentru cheia respectiva. Poti pastra personal cheia de
                „admin” si chiar sa ai mai multe exemplare din ambele chei, daca doresti.</p>
            </p>
        </div>
        <div class="content-block last">
            <a href="../../cs/ContentServerccb0.html?cid=1205094889467&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="../../cs/BlobServer7f71.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214514163615&amp;blobkey=id"
                    alt="Quickclear heated windscreen"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Curata parbrizul rapid cu Quickclear
            </h3>

            <p>

            <p>Aceasta dotare inteligenta este creata pentru a-ti permite sa pornesti rapid in diminetile geroase. Nu
                trebuie decat sa atingi un buton si filamente extrem de subtiri se vor supraincalzi pentru a curata
                parbrizul de gheata, ceata si abur, precum si pentru a ajuta la dezghetarea stergatoarelor. Sistemul
                actioneaza in cateva secunde, chiar si la temperaturi negative.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <a href="../../cs/ContentServer4bd2.html?cid=1205094894369&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="../../cs/BlobServer3fbe.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214514161156&amp;blobkey=id"
                    alt="Ford SYNC 2 - Advanced hands-free and touchscreen technology"/><span
                    class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Ford SYNC 2. Tehnologie hands-free si cu ecran tactil avansata
            </h3>

            <p>

            <p>Sistemul Ford SYNC 2 din urmatoarea generatie iti permite sa conectezi telefonul mobil si playerul MP3 in
                regim wireless. Poti controla muzica, telefonul, sistemul de navigatie si climatizarea cu ajutorul unor
                comenzi vocale simple si intuitive sau prin intermediul ecranului tactil color de 8&rdquo;.<br>
                <br>
                <strong>Trebuie doar sa spui ce doresti...</strong><br>
                Cu ajutorul Ford SYNC 2 poti solicita o lista cu restaurantele locale rostind, pur si simplu, &bdquo;Imi
                este foame&rdquo;* sau poti accesa Ghidul Michelin pentru a te ajuta sa alegi si sa faci rezervarea.
                Conectivitatea Wi-Fi este disponibila prin intermediul hotspot-urilor, cu un modem USB. Iar sistemul
                include Asistenta de urgenta Ford, care poate apela automat serviciile de urgenta in eventualitatea unui
                accident (consulta pagina Siguranta si securitate).</p>
            <br>
            <span style="font-size: smaller;">*Ford SYNC 2 este disponibil doar in limba enleza.</span>

            <p></p>
            </p>
        </div>
        <div class="content-block">
            <a href="../../cs/ContentServerec54.html?cid=1205094894479&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="../../cs/BlobServerc78f.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214514161239&amp;blobkey=id"
                    alt="Ford Easy-Fuel"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Ford Easy-Fuel alimentare fara probleme
            </h3>

            <p>

            <p>Acest sistem face sa fie practic imposibila alimentarea gresita a vehiculului, deoarece duza pompei pur
                si simplu nu se va potrivi. Si pentru ca Easy-Fuel este un sistem fara buson, nu o sa mai ai de-a face
                niciodata cu un buson murdar.</p>
            </p>
        </div>
        <div class="content-block last">
            <a href="../../cs/ContentServer8a57.html?cid=1205094892809&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="../../cs/BlobServerac76.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214514162785&amp;blobkey=id"
                    alt="Music system"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Sunet de inalta fidelitate
            </h3>

            <p>

            <p>Un sistem audio cu noua difuzoare se afla in pachetul de dotari standard Ford SYNC 2 si asigura claritate
                exceptionala a sunetului in intreaga masina. Un sistem premium optional, cu radio DAB, iti ofera o
                experienta de sunet superioara si include 12 difuzoare Sony.</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Siguranta vehiculului :: btfTabContent : 1205094896200 :: tabContent :  -->
<div id='tab4' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            SECURITATE DE NIVEL INALT
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Cu noul Galaxy, poti fi sigur ca un
            pachet complet de masuri de securitate poate ajuta la
            protejarea masinii.
        </p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"><a
                href="../../cs/ContentServeree6a.html?cid=1205094899167&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
                class="js-overlay" data-media-overlay='{"height":439, "width":780}'> <img
                    src="../../cs/BlobServer8874.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214514162478&amp;blobkey=id"
                    alt="Intelligent Protection System"/><span class="fv-overlay-icon"></span></a></div>
        <div class="content">
            <h3 class="bigHeading02">
                Sistemele de siguranta coordonate se activeaza intr-o fractiune de secunda
            </h3>

            <p>

            <p>Un sistem inteligent si avansat de protectie (IPS) coordoneaza o serie de caracteristici de siguranta
                pentru a-ti asigura protectie maxima tie si pasagerilor. In plus, modelul Galaxy este dotat cu o carcasa
                rigida care absoarbe energia in cazul unui impact si cu tehnologie avansata pentru scaune si centuri de
                siguranta.</p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Un sistem care poate ajuta la protejarea pietonilor
            </h3>

            <p>

            <p>Sistemul de asistenta pre-coliziune cu detectare a pietonilor identifica vehiculele si pietonii de pe
                drumul din fata sau pe cei care s-ar putea intersecta cu traseul vehiculului si te avertizeaza cu
                privire la prezenta acestora. Daca nu reactionezi, sistemul va aplica automat franele. Aceasta noua
                tehnologie este conceputa pentru a ajuta la reducerea severitatii accidentelor sau pentru a ajuta la
                evitarea completa a acestora, functionand la viteze de pana la 80 km/h.</p>
            </p>
        </div>
        <div class="img-column"><a
                href="../../cs/ContentServer93c8.html?cid=1205094897717&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
                class="js-overlay" data-media-overlay='{"height":439, "width":780}'> <img
                    src="../../cs/BlobServere3f0.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214514158847&amp;blobkey=id"
                    alt="Pre-Collision Assist with Pedestrian Detection"/><span class="fv-overlay-icon"></span></a>
        </div>
    </article>
    <article class="content-column left">
        <div class="img-column"><a
                href="../../cs/ContentServer4859.html?cid=1205094895825&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
                class="js-overlay" data-media-overlay='{"height":439, "width":780}'> <img
                    src="../../cs/BlobServer0b31.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214514161980&amp;blobkey=id"
                    alt="Cross Traffic Alert (CTA)"/><span class="fv-overlay-icon"></span></a></div>
        <div class="content">
            <h3 class="bigHeading02">
                Un ajutor in plus atunci cand te deplasezi in marsarier
            </h3>

            <p>

            <p>O tehnologie complet noua: detecteaza vehiculele care se apropie atunci cand soferii ies cu spatele
                dintr-un spatiu de parcare si emite un avertisment sonor si unul luminos in oglinda laterala
                corespunzatoare.</p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Faruri care te ajuta sa vezi in viraje
            </h3>

            <p>

            <p>Farurile Ford Dynamic LED cu iluminat adaptiv ofera modele de lumina precisa si intensa, care se regleaza
                automat pentru a se potrivi unor conditii de drum si de condus diferite. Sunt incluse, de asemenea,
                luminile de zi iar benzile de semnalizare cu LED-uri inlocuiesc luminile traditionale, generand o
                secventa luminoasa puternic vizibila. In plus, faza lunga anti-orbire se ajusteaza automat, pentru a
                nu-i orbi pe ceilalti soferi si, urmand drumul, aceste faruri noi te ajuta sa vezi mai clar in
                viraje.</p>
            </p>
        </div>
        <div class="img-column"><a
                href="../../cs/ContentServer699b.html?cid=1205094890723&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
                class="js-overlay" data-media-overlay='{"height":439, "width":780}'> <img
                    src="../../cs/BlobServere97d.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214514164450&amp;blobkey=id"
                    alt="Ford Adaptive Dynamic LED technology"/><span class="fv-overlay-icon"></span></a></div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <a href="../../cs/ContentServer576d.html?cid=1205094896445&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="../../cs/BlobServer8d17.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214514162398&amp;blobkey=id"
                    alt="Lane Keeping System"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Un sistem avansat care te ajuta sa iti pastrezi banda
            </h3>

            <p>

            <p>Sistemul de mentinere a benzii de circulatie utilizeaza o camera orientata in fata, pentru a detecta daca
                ai iesit in mod accidental de pe banda de deplasare. Sistemul de avertizare la parasirea benzii te
                avertizeaza apoi printr-o vibratie a volanului si prin afisarea in bord a unui indicator . Daca
                reactionezi mai greu sau nu reactionezi deloc, Sistemul de asistenta la pastrarea benzii iti poate oferi
                asistenta cu cuplul de directie, pentru a te ajuta sa revii pe banda corecta. Aceasta tehnologie este
                conceputa pentru suprafete rutiere cu mai multe benzi (precum autostrazile), asa ca se va dezactiva
                automat la viteze mai mici de 65 km/h, putand fi dezactivata si manual.</p>
            </p>
        </div>
        <div class="content-block last">
            <a href="../../cs/ContentServerbc9b.html?cid=1205094890436&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="../../cs/BlobServeracae.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214514164287&amp;blobkey=id"
                    alt="Emergency Brake Assist (EBA)"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Putere suplimentara pentru franare de urgenta
            </h3>

            <p>

            <p>Sistemul de asistenta la franarea de urgenta (EBA) ajuta vehiculul sa atinga eficienta maxima de franare
                in cazul unei situatii de urgenta. Este controlat automat prin intermediul sistemului ESP, care
                detecteaza presiunea aplicata de sofer pe pedala de frana si creste automat aceasta presiune, daca este
                cazul.</p>
            </p>
        </div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <a href="../../cs/ContentServer7051.html?cid=1205094895407&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="../../cs/BlobServerda0b.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214514161734&amp;blobkey=id"
                    alt="An advanced airbag system"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Un sistem avansat de airbaguri
            </h3>

            <p>

            <p>Airbagul pentru sofer este optimizat pentru protejarea pieptului, iar airbagul de la nivelul genunchilor
                poate proteja membrele inferioare. Airbagurile laterale pentru scaunul din fata, de la nivelul pelvian
                si toracic sunt modelate pentru a asigura o protectie mai eficienta, iar airbagurile tip cortina sunt
                concepute pentru a asigura protectie suplimentara pentru toate cele trei randuri de scaune. Sunt
                disponibile, de asemenea, noi airbaguri laterale la nivel pelvian si toracic pentru scaunele dinspre
                exterior de pe cel de-al doilea rand. Dispozitivele de pretensionare a centurilor de siguranta si
                limitatoarele de tensiune montate pe aceste scaune ajuta, de asemenea, la protejarea ocupantilor in
                cazul unui impact frontal, incetinindu-i in mod mai eficient. In plus, datorita sistemelor de reamintire
                pentru folosirea centurii de siguranta ca dotari standard, vei sti intotdeauna cand toti ocupantii si-au
                montat centurile. </p>
            </p>
        </div>
        <div class="content-block last">
            <a href="../../cs/ContentServerf0ce.html?cid=1205094896061&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="../../cs/BlobServer5742.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214514162149&amp;blobkey=id"
                    alt="Help with calling the emergency services with Ford Emergency Assistance."/><span
                    class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Ford SYNC 2 cu Asistenta de urgenta
            </h3>

            <p>

            <p>Un aspect important al tehnologiei Ford SYNC 2 este Asistenta de urgenta*. Aceasta caracteristica ce iti
                poate salva viata este conceputa pentru a te asista la efectuarea unui apel de urgenta si poate furniza
                serviciilor de urgenta informatii despre locatia vehiculului tau, in propria ta limba. Daca este cazul,
                poti alege sa intrerupi apelul sau sa discuti personal, daca este necesar. Extrem de important, sistemul
                va furniza informatii vitale, precum coordonatele tale GPS, chiar si atunci cand ti-ai pierdut
                cunostinta.<br>
                <br>
                <span style="font-size: smaller;">*Asistenta de urgenta Ford functioneaza in peste 30 de tari din Europa. Aceasta caracteristica functioneaza atunci cand este conectata cu un telefon mobil compatibil pe care il aveti la dumneavoastra, in momentul in care un airbag este declansat (cu exceptia airbagurilor pentru genunchi) sau atunci cand un senzor care inregistreaza o coliziune intrerupe pompa de combustibil. Functia de mesagerie si Asistenta de urgenta nu sunt acceptate in toate limbile europene. </span>
            </p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <a href="../../cs/ContentServeref51.html?cid=1205094893239&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="../../cs/BlobServerc803.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214514162868&amp;blobkey=id"
                    alt="Blind Spot Information System (BLIS)"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Oglinzi care vad ce tu nu poti vedea
            </h3>

            <p>

            <p>Un sistem de asistenta pentru unghiul mort (BLIS) te poate ajuta sa schimbi benzile in siguranta,
                multumita senzorilor RADAR care pot scana unghiurile moarte de pe ambele parti ale vehiculului. Daca
                detecteaza un vehicul pe care tu nu il poti vedea, o lumina portocalie afisata in oglinda laterala de pe
                partea corespunzatoare se va aprinde, pentru a te avertiza. BLIS este prevazut, de asemenea, cu o
                tehnologie complet noua, Cross Trafic Alert. </p>
            </p>
        </div>
        <div class="content-block">
            <a href="../../cs/ContentServercd76.html?cid=1205094891962&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="../../cs/BlobServer913c.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214514160384&amp;blobkey=id"
                    alt="ISOFIX points"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Ajutor pentru mentinerea in siguranta a copiilor
            </h3>

            <p>

            <p>Puncte ISOFIX pentru fixarea scaunului pentru copii sunt montate pe cel de-al doilea rand de scaune. </p>
            </p>
        </div>
        <div class="content-block last">
            <a href="../../cs/ContentServer9f7b.html?cid=1205094898165&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="../../cs/BlobServera8fd.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214514159103&amp;blobkey=id"
                    alt="Perimeter alarm"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Protectie cu alarma
            </h3>

            <p>

            <p>Alarma Thatcham de categoria 1 este un sistem sofisticat, care se activeaza automat in momentul in care
                incui vehiculul si emite un semnal sonor puternic daca este declansat de o intrare fortata, daca masina
                este ridicata sau daca senzorii detecteaza o miscare inauntru. </p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
<!-- BEGIN [MidPageTabs] -->
<!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Experienta Condusului</a></h2> -->
<!--</div>-->
<!--<div id='tab2' class="mp-tab-wrapper">
<h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">Putere</a></h2> -->
<!--</div>-->
<!--<div id='tab3' class="mp-tab-wrapper">
<h2><a href='#tab3' class="mp-tab omt_xd_mt_ti">Comoditate</a></h2> -->
<!--</div>-->
<!--<div id='tab4' class="mp-tab-wrapper">
<h2><a href='#tab4' class="mp-tab omt_xd_mt_ti">Siguranta vehiculului</a></h2> -->
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
        var nameplateName = 'ford galaxy';
        googleAdServerNameplateName = nameplateName.toLowerCase();
        dataLayer.push({"nameplateName": googleAdServerNameplateName});
        if (typeof osbNameplateName != 'undefined') {
            osbNameplateName = osbNameplateName.toLowerCase();
            dataLayer.push({"nameplateName": osbNameplateName});
        }
        if (typeof bookingReferenceNumber != 'undefined') {
            dataLayer.push({"leadID": bookingReferenceNumber});
        }
        dataLayer.push({"pageTitle": 'Performanta si eficienta a combustibilului la noul Ford Galaxy | Ford RO'});
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
        src="../../cs/ContentServer1756?cid=1204986890525&amp;pagename=ENGInE%2Ftagging%2FOmnitureScript"></script>
<script type="text/javascript">var sford = new Object;
    sford.tabName = '';
    sford.pageName = 'brand:passenger:vehicle:features:<tab name>:ford galaxy';
    sford.dlwasSent = false;
    sford.eVar11 = 'brand:passenger:vehicle:features:<tab name>';
    sford.hier1 = 'vehicle:features:car:ford galaxy:2015';
    sford.tagViewPhoto = '';
    sford.tagHighlights = '';
    sford.tagDownload = '';
    s.pageName = 'brand:passenger:vehicle:features:<tab name>:ford galaxy';
    s.hier1 = 'vehicle:features:car:ford galaxy:2015';
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
    s.eVar16 = 'ford galaxy';
    s.prop16 = 'ford galaxy';
    sford.np = 'ford galaxy';
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

