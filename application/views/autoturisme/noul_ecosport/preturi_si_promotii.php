<script type="text/javascript">
    // mobile sniffer
    ForceRedirectUserAgents = 'android,iphone,blackberry';
    ForceRedirectUserAgentsBypass = 'Win64,Win32';
    ForceRedirectMinWidth = '480';
    MobileHomePageRedirectURL = 'PreturiSiPromotii\/\/m.ford.ro';
    MobileRedirectURL = MobileHomePageRedirectURL + '/autoturisme/noul-ecosport';
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
                    style="background-image:url(/assets/img/noul_ecosport/1214507093618.jpg)">
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
                <li><a href="PrezentareGenerala#primaryTabs" class=" "
                       data-ajaxlink="/cs/ContentServer?cid=1205091149631&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE">Prezentare
                        generala</a>
                    <!-- secondary tabs -->
                    <!--  midPageTabId : 1205091148573 -->
                </li>
                <!--  isBtfTab  -->
                <!--  tabUrl /cs/ContentServer?cid=1205091149631&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205096191903&amp;tabName=PreturiSiPromotii&amp;c=Page&amp;site=RORO4_ENGINE -->
                <!-- IntoID ::: articleAssetId -->
                <li class="selected"><a href="PreturiSiPromotii#primaryTabs"
                                        data-ajaxlink="/cs/ContentServer?cid=1205091149631&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205096191903&amp;tabName=PreturiSiPromotii&amp;c=Page&amp;site=RORO4_ENGINE">Preturi
                        Si Promotii</a>
                    <!--This is where the main content for the selected tab will go -->
                    <!-- secondary tabs -->
                    <div class="secondary-tabs tab-content">
                        <nav class="sub-nav">
                            <ul>
                                <li><a href='#tab1' class='omt_tabName'>PROMOTII</a></li>
                                <li><a href='#tab2' class='omt_tabName'>PREŢURI</a></li>
                            </ul>
                        </nav>
                        <!-- isBtfTab : from MidPageTabs true -->
                        <div class="innertab-wrapper">
                            <!--  tabTitle : PROMOTII :: btfTabContent : 1205098892306 :: tabContent :  -->
                            <div id='tab1' class="secondary-tab-content">
                                <header class="intro-header">
                                    <h1 class="bigHeading">
                                        Oferte speciale prin programul rabla!
                                    </h1>
                                    <span class="highlighter"></span>

                                    <p class="intro-text">

                                    <p>Schimba-ti masina veche cu modelul Ford care se potriveste stilului tau de
                                        viata &ndash; acum ai preturi speciale pentru achizitia prin programul
                                        rabla.<br> <br> <u><a
                                                HREF="http://www.ford.ro/Promotii/Autoturisme/Rabla/OfertaEcoSport">Click
                                                Aici</a></u></p>
                                    </p>
                                </header>
                            </div>
                            <!--  tabTitle : PREŢURI :: btfTabContent : 1205112211058 :: tabContent :  -->
                            <div id='tab2' class="secondary-tab-content">
                                <header class="intro-header">
                                    <h1 class="bigHeading">
                                        Lista de preturi
                                    </h1>
                                    <span class="highlighter"></span>

                                    <p class="intro-text">

                                    <p style="text-align: justify;">Daca te intereseaza un anumit model, consulta
                                        ofertele noastre actuale. Sau vizitează cel mai apropiat dealer pentru cele mai
                                        bune oferte disponibile. <br> <br> <a
                                            TITLE="Lista de preturi noul Ford EcoSport (1,99 MB)"
                                            HREF="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheadervalue1=attachment%3Bfilename%3D%22Lista_de_preturi_noul_Ford_EcoSport.pdf%22&amp;blobheadervalue2=abinary%3Bcharset%3DUTF-8&amp;blobheadername1=Content-Disposition&amp;blobheadername2=MDT-Type&amp;blobheader=application%2Fpdf&amp;blobwhere=1214549936647&amp;blobkey=id"
                                            CLASS="download"
                                            onClick="if (typeof sford == 'object') omnitureLinkDownloadClick('brand:pricelist download:vehicle:confirm:<nameplate>','event15,event43','','event: pricelist:pdf','download pricelist:vehicle','pdf download','',false,'ford ecosport','2013','car');">Descarca
                                            lista de preturi pentru Ford EcoSport.</a> <br> <br> Fisierul in format PDF
                                        a fost creat pentru a-ti permite sa vizualizezi si sa tiparesti fisiere fara a
                                        avea nevoie de programul in care au fost create initial. Adobe&trade; iti pune
                                        la dispozitie o aplicaţie software gratuita (Acrobat Reader) care iti permite sa
                                        lucrezi cu aceste fisiere. Daca ai instalat deja aceasta aplicatie pe computerul
                                        tau, in mod normal o poti gasi la &bdquo;Programe&quot;, in &bdquo;Meniul Start&quot;.
                                        In caz contrar, acceseza link-ul de mai jos pentru a o descarca.<br> <a
                                            target="_blank" href="http://get.adobe.com/reader/">Descarcă Acrobat Reader
                                            de pe situl adobe.com</a></p>
                                    </p>
                                </header>
                            </div>
                            <!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
                            <!-- BEGIN [MidPageTabs] -->
                            <!--<div id='tab1' class="mp-tab-wrapper">
                            <h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">PROMOTII</a></h2> -->
                            <!--</div>-->
                            <!--<div id='tab2' class="mp-tab-wrapper">
                            <h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">PREŢURI</a></h2> -->
                            <!--</div>-->
                            <!-- END [MidPageTabs] -->
                            <!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
                            <!-- BEGIN [MidPageTabs] -->
                            <!--<div id='tab1' class="mp-tab-wrapper">
                            <h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">PROMOTII</a></h2> -->
                            <!--</div>-->
                            <!--<div id='tab2' class="mp-tab-wrapper">
                            <h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">PREŢURI</a></h2> -->
                            <!--</div>-->
                            <!-- END [MidPageTabs] -->
                            <!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
                            <!-- BEGIN [MidPageTabs] -->
                            <!--<div id='tab1' class="mp-tab-wrapper">
                            <h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">PROMOTII</a></h2> -->
                            <!--</div>-->
                            <!--<div id='tab2' class="mp-tab-wrapper">
                            <h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">PREŢURI</a></h2> -->
                            <!--</div>-->
                            <!-- END [MidPageTabs] -->
                        </div>
                    </div>
                </li>
                <!--  isBtfTab  -->
                <!--  tabUrl /cs/ContentServer?cid=1205091149631&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205091148891&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE -->
                <li><a href="Design#primaryTabs" class=" "
                       data-ajaxlink="/cs/ContentServer?cid=1205091149631&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205091148891&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE">Design</a>
                    <!-- secondary tabs -->
                    <!--  midPageTabId : 1205091148864 -->
                </li>
                <!--  isBtfTab  -->
                <!--  tabUrl /cs/ContentServer?cid=1205091149631&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205091148170&amp;tabName=Caracteristici&amp;c=Page&amp;site=RORO4_ENGINE -->
                <li><a href="Caracteristici#primaryTabs" class=" "
                       data-ajaxlink="/cs/ContentServer?cid=1205091149631&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205091148170&amp;tabName=Caracteristici&amp;c=Page&amp;site=RORO4_ENGINE">Caracteristici</a>
                    <!-- secondary tabs -->
                    <!--  midPageTabId : 1205091146107 -->
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
        dataLayer.push({"pageTitle": 'Preturi si promotii | Ford RO'});
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
                dataLayer.push({"pageID": 'brand:passenger:vehicle:promotions'});
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
    sford.pageName = 'brand:passenger:vehicle:promotions:<tab name>:ford ecosport';
    sford.dlwasSent = false;
    sford.eVar11 = 'brand:passenger:vehicle:promotions:<tab name>';
    sford.hier1 = 'vehicle:promotions:car:ford ecosport:2013';
    sford.tagViewPhoto = '';
    sford.tagHighlights = '';
    sford.tagDownload = '';
    s.pageName = 'brand:passenger:vehicle:promotions:<tab name>:ford ecosport';
    s.hier1 = 'vehicle:promotions:car:ford ecosport:2013';
    s.channel = 'vehicle';
    s.eVar4 = 'rum';
    s.prop4 = 'rum';
    s.eVar11 = 'brand:passenger:vehicle:promotions:<tab name>';
    s.prop11 = 'brand:passenger:vehicle:promotions:<tab name>';
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
