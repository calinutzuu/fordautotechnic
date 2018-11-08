<script type="text/javascript">
    // mobile sniffer
    ForceRedirectUserAgents = 'android,iphone,blackberry';
    ForceRedirectUserAgentsBypass = 'Win64,Win32';
    ForceRedirectMinWidth = '480';
    MobileHomePageRedirectURL = 'Noul-S-MAX\/\/m.ford.ro';
</script>
<div id="xAxis-detailed">
    <nav class="breadCrumb visuallyhidden" role="navigation">
        <ul itemprop="breadcrumb">
            <li class="home"><a href="../index" data-selenium="breadcrumb_home" class="om_bc_li"
                                title="Pagina principal&#259;">Pagina principal&#259;</a><span></span></li>
            <li data-selenium="breadcrumb_cars"><a href="../Autoturisme" class="om_bc_li">
                    Autoturisme
                </a><span></span></li>
            <li data-selenium="breadcrumb_nameplate">S-MAX</li>
        </ul>
    </nav>
    <!-- Bredcrumb Schema implementation for Nameplate at Body Template-->
    <nav class="breadCrumb" role="navigation" style="display: none">
        <ul itemscope itemtype="http://schema.org/BreadcrumbList">
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
                    style="background-image:url(../cs/BlobServer06f6?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpg&amp;blobwhere=1214513580596&amp;blobkey=id)">
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
<!-- IntoID ::: articleAssetId -->
<li class="selected"><a href="Noul-S-MAX/PrezentareGenerala#primaryTabs"
                        data-ajaxlink="/cs/ContentServer?cid=1205090681673&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE">Prezentare
        generala</a>
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
            <!--  tabTitle : Overview :: btfTabContent : 1205090684363 :: tabContent :  -->
            <div id='tab1' class="secondary-tab-content">
                <header class="intro-header">
                    <h1 class="bigHeading">
                        Aspect dinamic care iti completeaza stilul de viata activ
                    </h1>
                    <span class="highlighter"></span>

                    <p class="intro-text">

                    <p>Tehnologii inteligente si stil ultra-contemporan, <br> performanta dinamica si
                        manevrabilitate precisa: toate aceste atribute pun in evidenta noul S-MAX.<br>
                        <br> Flexibilitatea, utilitatea si eficienta sunt calitati incorporate. Iar cu o
                        serie de <br> tehnologii remarcabile, acesta este unul dintre cele mai
                        inteligente <br> vehicule cu sapte/cinci locuri de pe piata. <br> <br> Ai o
                        viata activa? Ai gasit masina adaptata stilului tau.</p>
                    </p>
                </header>
                <article class="content-column left">
                    <div class="img-column"><a
                            href="../cs/ContentServere1f8?cid=1205090683925&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
                            class="js-overlay" data-media-overlay='{"height":439, "width":780}'> <img
                                src="/assets/img/s_max/1214504430076.jpg"
                                alt="All-Wheel Drive"/><span class="fv-overlay-icon"></span></a></div>
                    <div class="content">
                        <h3 class="bigHeading02">
                            Parcare si mai usoara
                        </h3>

                        <p>

                        <p>USistemul activ de asistenta la parcare te ajuta sa parchezi in spatii cu
                            doar 20% mai lungi sau mai late decat autovehiculul. Pur si simplu, apesi un
                            buton, iar senzorii acestui sistem inovator vor identifica spatiul suficient
                            de mare, cand treci pe langa el. Apoi sistemul va prelua controlul directiei
                            iar tu doar actionezi pedala de acceleratie, cutia de viteze si frana
                            (urmarind instructiunile de pe ecran si semnalele sonore).</p>
                        </p>
                    </div>
                </article>
                <article class="content-column right">
                    <div class="content">
                        <h3 class="bigHeading02">
                            Scaune care asigura sprijin suplimentar… si care iti pot oferi un masaj
                        </h3>

                        <p>

                        <p>Soferul si pasagerul din fata au la dispozitie scaune multi-contur, al caror
                            design le face complet reglabile. Drept urmare, acestea pot asigura sprijin
                            suplimentar unde ai nevoie si iti pot oferi chiar si un masaj, ajutandu-te
                            sa ramai odihnit in timpul calatoriilor lungi. </p>
                        </p>
                    </div>
                    <div class="img-column"> <img
                                src="/assets/img/s_max/1214504429993.jpg"
                                alt="Flexible seating"/><span class="fv-overlay-icon"></span></a></div>
                </article>
                <article class="content-column left">
                    <div class="img-column"><img
                                src="/assets/img/s_max/12145044299110.jpg"
                                alt="Panoramic roof"/><span class="fv-overlay-icon"></span></a></div>
                    <div class="content">
                        <h3 class="bigHeading02">
                            EcoBoost: putere si eficienta fara compromisuri
                        </h3>

                        <p>

                        <p>Doua variante de motor pe benzina EcoBoost utilizeaza o combinatie de
                            injectie directa a combustibilului si un sistem cu turbocompresor, pentru a
                            oferi niveluri remarcabile de performanta si economie:

                            Un nou motor EcoBoost de 1,5 litri pe benzina se alatura gamei revolutionare
                            EcoBoost. Redus in mod inteligent de la modelul EcoBoost de 1,6 litri,
                            motorul asigura un nivel mai redus al emisiilor si o economie de combustibil
                            de 6,5 litri/100 km (combinat) si dezvolta o putere de 160 CP. O varianta si
                            mai puternica EcoBoost de 2,0 litri dezvolta o putere impresionanta de 240
                            CP.</p>
                        </p>
                    </div>
                </article>

                <article class="content-column right">
                    <div class="content">
                        <h3 class="bigHeading02">
                            Putere suplimentara pentru franare de urgenta
                        </h3>

                        <p>

                        <p>Sistemul de asistenta la franarea de urgenta ajuta vehiculul sa atinga eficienta maxima de
                            franare in cazul unei situatii de urgenta. Este controlat automat prin intermediul
                            Sistemului de control electronic al stabilitatii, care detecteaza presiunea pe care o aplici
                            pe pedala de frana si creste automat aceasta presiune, daca este cazul. </p>
                        </p>
                    </div>
                    <div class="img-column"><img
                            src="/assets/img/s_max/1214429993.jpg"
                            alt=""/><span class="fv-overlay-icon"></span></a></div>
                </article>


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
<!--  tabUrl /cs/ContentServer?cid=1205090681673&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205104043571&amp;tabName=Preturi-si-promotii&amp;c=Page&amp;site=RORO4_ENGINE -->
<!--     <li><a href="Noul-S-MAX/Preturi-si-promotii#primaryTabs" class=" "
            data-ajaxlink="/cs/ContentServer?cid=1205090681673&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205104043571&amp;tabName=Preturi-si-promotii&amp;c=Page&amp;site=RORO4_ENGINE">Preturi
             si promotii</a>
         <!-- secondary tabs -->
<!--  midPageTabId : 1205104016391
</li> -->
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205090681673&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205090680147&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="Noul-S-MAX/Design#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205090681673&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205090680147&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE">Design</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205090684982 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205090681673&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205090681116&amp;tabName=Caracteristici&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="Noul-S-MAX/Caracteristici#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205090681673&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205090681116&amp;tabName=Caracteristici&amp;c=Page&amp;site=RORO4_ENGINE">Caracteristici</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205090681142 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205090681673&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205107569254&amp;tabName=S-MAX-Vignale&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="Noul-S-MAX/S-MAX-Vignale#primaryTabs" class=" "
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

