
<script type="text/javascript">
    // mobile sniffer
    ForceRedirectUserAgents = 'android,iphone,blackberry';
    ForceRedirectUserAgentsBypass = 'Win64,Win32';
    ForceRedirectMinWidth = '480';
    MobileHomePageRedirectURL = 'Preturi-si-promotii\/\/m.ford.ro';
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
                <li><a href="/Autoturisme/Noul-FordEdge" class=" "
                       data-ajaxlink="/cs/ContentServer?cid=1205110255040&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE">PREZENTARE</a>
                    <!-- secondary tabs -->
                    <!--  midPageTabId : 1205110253425 -->
                </li>
                <!--  isBtfTab  -->
                <!--  tabUrl /cs/ContentServer?cid=1205110255040&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205114703717&amp;tabName=Preturi-si-promotii&amp;c=Page&amp;site=RORO4_ENGINE -->
                <!-- IntoID ::: articleAssetId -->
                <li class="selected"><a href="Preturi-si-promotii#primaryTabs"
                                        data-ajaxlink="/cs/ContentServer?cid=1205110255040&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205114703717&amp;tabName=Preturi-si-promotii&amp;c=Page&amp;site=RORO4_ENGINE">Preturi
                        si promotii</a>
                    <!--This is where the main content for the selected tab will go -->
                    <!-- secondary tabs -->
                    <div class="secondary-tabs tab-content">
                        <nav class="sub-nav">
                            <ul>
                                <li><a href='#tab1' class='omt_tabName'>PROMOTII</a></li>
                                <li><a href='#tab2' class='omt_tabName'>PRETURI</a></li>
                            </ul>
                        </nav>
                        <!-- isBtfTab : from MidPageTabs true -->
                        <div class="innertab-wrapper">
                            <!--  tabTitle : PROMOTII :: btfTabContent : 1205117036694 :: tabContent :  -->
                            <div id='tab1' class="secondary-tab-content">
                                <header class="intro-header">
                                    <h1 class="bigHeading">
                                        Fa o declaratie plina de incredere cu noul Ford Edge!
                                    </h1>
                                    <span class="highlighter"></span>

                                    <p class="intro-text">

                                    <p>Puternic. Stilat. Cu atitudine. Acesta este noul Ford Edge &ndash; o prezenta
                                        indrazneata si impunatoare. Varful gamei noastre SUV, Ford Edge ofera
                                        performante impresionante, design modern si tehnologii de ultima ora.<br> <br>
                                        Descopera oferta speciala de lansare, cu finantare cu dobanda de numai 0.99%,
                                        pachetul Titanium la 450&euro;* si avantaj suplimentar de 1.500&euro;* la
                                        achizitia prin programul Trade In. <br> <br> <a
                                            HREF="../../Promotii/Autoturisme/NoulFordEdge"><span
                                                style="color: rgb(0, 0, 255);"><u>Click aici pentru
                                                    detalii</u></span></a></p>
                                    </p>
                                </header>
                            </div>
                            <!--  tabTitle : PRETURI :: btfTabContent : 1205114702185 :: tabContent :  -->
                            <div id='tab2' class="secondary-tab-content">
                                <header class="intro-header">
                                    <h1 class="bigHeading">
                                        PRETURI SI PROMOTII
                                    </h1>
                                    <span class="highlighter"></span>

                                    <p class="intro-text">

                                    <p>Daca te intereseaza un anumit model, consulta ofertele noastre actuale. Sau
                                        vizitează cel mai apropiat dealer pentru cele mai bune oferte disponibile. <br>
                                        <br> <u><a TITLE="Listă de prețuri Ford Edge (556 KB)"
                                                   HREF="../../cs/lista-de-preturi-ford-edgea885.pdf?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheadervalue1=attachment%3Bfilename%3D%22lista-de-preturi-ford-edge.pdf%22&amp;blobheadervalue2=abinary%3Bcharset%3DUTF-8&amp;blobheadername1=Content-Disposition&amp;blobheadername2=MDT-Type&amp;blobheader=application%2Fpdf&amp;blobwhere=1214558814304&amp;blobkey=id"
                                                   CLASS="download"
                                                   onClick="if (typeof sford == 'object') omnitureLinkDownloadClick('brand:pricelist download:vehicle:confirm:<nameplate>','event15,event43','','event: pricelist:pdf','download pricelist:vehicle','pdf download','',false,'ford edge','2015','car');">Descarca
                                                lista de preturi pentru NOUL FORD <strong>EDGE.</strong></a></u> <br>
                                        <br> Fisierul in format PDF a fost creat pentru a-ti permite sa vizualizezi si
                                        sa tiparesti fisiere fara a avea nevoie de programul in care au fost create
                                        initial. Adobe&trade; iti pune la dispozitie o aplicaţie software gratuita
                                        (Acrobat Reader) care iti permite sa lucrezi cu aceste fisiere. Daca ai instalat
                                        deja aceasta aplicatie pe computerul tau, in mod normal o poti gasi la &bdquo;Programe&quot;,
                                        in &bdquo;Meniul Start&quot;. In caz contrar, acceseza link-ul de mai jos pentru
                                        a o descarca.<br> <a target="_blank" href="http://get.adobe.com/reader/"><u><br>
                                                Descarcă Acrobat Reader de pe situl adobe.com</u></a></p>
                                    </p>
                                </header>
                            </div>
                            <!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
                            <!-- BEGIN [MidPageTabs] -->
                            <!--<div id='tab1' class="mp-tab-wrapper">
                            <h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">PROMOTII</a></h2> -->
                            <!--</div>-->
                            <!--<div id='tab2' class="mp-tab-wrapper">
                            <h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">PRETURI</a></h2> -->
                            <!--</div>-->
                            <!-- END [MidPageTabs] -->
                            <!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
                            <!-- BEGIN [MidPageTabs] -->
                            <!--<div id='tab1' class="mp-tab-wrapper">
                            <h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">PROMOTII</a></h2> -->
                            <!--</div>-->
                            <!--<div id='tab2' class="mp-tab-wrapper">
                            <h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">PRETURI</a></h2> -->
                            <!--</div>-->
                            <!-- END [MidPageTabs] -->
                            <!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
                            <!-- BEGIN [MidPageTabs] -->
                            <!--<div id='tab1' class="mp-tab-wrapper">
                            <h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">PROMOTII</a></h2> -->
                            <!--</div>-->
                            <!--<div id='tab2' class="mp-tab-wrapper">
                            <h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">PRETURI</a></h2> -->
                            <!--</div>-->
                            <!-- END [MidPageTabs] -->
                        </div>
                    </div>
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
                <li><a href="Caracteristici#primaryTabs" class=" "
                       data-ajaxlink="/cs/ContentServer?cid=1205110255040&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205110250016&amp;tabName=Caracteristici&amp;c=Page&amp;site=RORO4_ENGINE">CARACTERISTICI</a>
                    <!-- secondary tabs -->
                    <!--  midPageTabId : 1205110253148 -->
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

