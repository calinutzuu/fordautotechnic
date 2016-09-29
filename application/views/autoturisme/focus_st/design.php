
<script type="text/javascript">
    // mobile sniffer
    ForceRedirectUserAgents = 'android,iphone,blackberry';
    ForceRedirectUserAgentsBypass = 'Win64,Win32';
    ForceRedirectMinWidth = '480';
    MobileHomePageRedirectURL = 'Design\/\/m.ford.ro';
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

                    <h1 class="bigHeading">
                        <span data-selenium="XA_namePlate" itemprop="member" class="nameplate boldTxt">Focus ST</span>
                        <span data-selenium="XA_model" itemprop="model" itemscope
                              itemtype="http://schema.org/Organization" class="mark">Ford</span>
                        <!--The price -->
                    </h1>
                    <!--The blurb -->
                    <p class="blurb">
                        Experienta Focus&hellip; imbunatatita.
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
<!--  tabUrl /cs/ContentServer?cid=1205116173898&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="Prezentare#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205116173898&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE">Prezentare</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205116173018 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205116173898&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205116179846&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE -->
<!-- IntoID ::: articleAssetId -->
<li class="selected"><a href="Design#primaryTabs"
                        data-ajaxlink="/cs/ContentServer?cid=1205116173898&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205116179846&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE">Design</a>
<!--This is where the main content for the selected tab will go -->
<!-- secondary tabs -->
<div class="secondary-tabs tab-content">
<nav class="sub-nav">
    <ul>
        <li><a href='#tab1' class='omt_tabName'>EXTERIOR</a></li>
        <li><a href='#tab2' class='omt_tabName'>INTERIOR</a></li>
        <li><a href='#tab3' class='omt_tabName'>JANTE</a></li>
        <li><a href='#tab4' class='omt_tabName'>CULORI</a></li>
        <li><a href='#tab5' class='omt_tabName'>FINISAJE</a></li>
    </ul>
</nav>
<!-- isBtfTab : from MidPageTabs true -->
<div class="innertab-wrapper">
<!--  tabTitle : EXTERIOR :: btfTabContent : 1205116178341 :: tabContent :  -->
<div id='tab1' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            DESIGN CARE AMPLIFICA PERFORMANTA
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Profilul lat si aerodinamic al noului Focus ST, impreuna cu stilul sau indraznet, exprima in mod clar
            intentiile acestui model. Caracteristicile precum capota sculptata dinamic, farurile inguste si teava de
            esapament dubla, hexagonala, pozitionata central, creeaza un aspect de neconfundat. Designul inteligent,
            influentat de masinile de curse sporeste, de asemenea, performanta, aerodinamica, forta de apasare si
            aderenta masinii.</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <a href="../../cs/ContentServer0aa1?cid=1205116176746&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="/assets/img/focus_st/1214556053163.jpg"
                    alt="Ford Focus ST Exterior"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Focus ST exterior in culoarea Tangerine Scream</p>
            </p>
        </div>
        <div class="content-block">
            <a href="../../cs/ContentServer93f5?cid=1205116178820&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="/assets/img/focus_st/1214556051465.jpg"
                    alt="Ford Focus ST Exterior"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Focus ST diesel</p>
            </p>
        </div>
        <div class="content-block last">
            <a href="../../cs/ContentServer2681?cid=1205116176278&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="/assets/img/focus_st/1214556052993.jpg"
                    alt="Ford Focus ST Exterior"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Focus ST diesel si benzina</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <a href="../../cs/ContentServer8e34?cid=1205116172481&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="/assets/img/focus_st/1214556051717.jpg"
                    alt="Ford Focus ST Exterior"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Focus ST exterior in culoarea Tangerine Scream</p>
            </p>
        </div>
        <div class="content-block">
            <a href="../../cs/ContentServer6c25?cid=1205116176388&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="/assets/img/focus_st/1214556053078.jpg"
                    alt="In Frozen White"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Focus ST exterior in culoarea Frozen White</p>
            </p>
        </div>
        <div class="content-block last">
            <a href="../../cs/ContentServer503f?cid=1205116174560&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="/assets/img/focus_st/1214556052657.jpg"
                    alt="Wagon in Stealth Grey"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Focus ST wagon, exterior in culoarea Stealth</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <a href="../../cs/ContentServer6884?cid=1205116179035&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="/assets/img/focus_st/1214556053843.jpg"
                    alt=" "/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Focus ST in culoarea Race Red</p>
            </p>
        </div>
        <div class="content-block">
            <a href="../../cs/ContentServer1126?cid=1205116177025&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="/assets/img/focus_st/1214556053248.jpg"
                    alt=" "/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Focus ST exterior in culoarea Tangerine Scream
            </p>
        </div>
        <div class="content-block last">
            <a href="../../cs/ContentServer8a4f?cid=1205116174961&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="/assets/img/focus_st/1214556052741.jpg"
                    alt=" "/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Focus ST exterior in culoarea Tangerine Scream</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : INTERIOR :: btfTabContent : 1205116173847 :: tabContent :  -->
<div id='tab2' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            TOATE TEHNOLOGIILE LA COMANDA TA
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Intra in cabina si, in timp ce te asezi confortabil in scaunul sport Recaro cu design ergonomic (cu suporturi
            laterale optionale) si puni mainile pe volanul cu baza plata, te vei simti imediat conectat. <br>
            <br>
            O dispunere inteligenta a lucrurilor iti pune la indemana comenzile si caracteristicile principale, in mod
            intuitiv. Iar pedalele special proiectate fac ca puterea exceptionala a noului ST sa iti stea efectiv la
            picioare. <br>
            <br>
            Un grup suplimentar de trei indicatoare de bord &ndash; o marca ST &ndash; este plasat pe consola de bord si
            afiseaza informatii despre presiunea turbocompresorului, temperatura si presiunea uleiului.</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <a href="../../cs/ContentServerb606?cid=1205116176149&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="/assets/img/focus_st/1214556052909.jpg"
                    alt="Ford Focus ST Interior"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Focus ST Habitaclu</p>
            </p>
        </div>
        <div class="content-block">
            <a href="../../cs/ContentServer3080?cid=1205116178212&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="../../cs/BlobServerd77c.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214556053503&amp;blobkey=id"
                    alt="Ford Focus ST Interior"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Focus ST Volan si consola centrala</p>
            </p>
        </div>
        <div class="content-block last">
            <a href="../../cs/ContentServerf238.html?cid=1205116170691&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="../../cs/BlobServerd50d.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214556052305&amp;blobkey=id"
                    alt="Ford Focus ST Interior"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Focus ST Pedale</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : JANTE :: btfTabContent : 1205116169021 :: tabContent :  -->
<div id='tab3' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            JANTE CU DESIGN IMPRESIONANT, INSPIRAT DIN MOTORSPORT
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Creaza o imagine care sa se potriveasca stilului personal, alegand dintr-o gama larga de jante special
            proiectate, inclusiv noile jante din aliaj, de 19 inci, cu design ST.</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <a href="../../cs/ContentServer8066.html?cid=1205116179301&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="../../cs/BlobServera36b.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214556054013&amp;blobkey=id"
                    alt="Ford Focus ST Wheels"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Janta aliaj 18"
            </p>
        </div>
        <div class="content-block">
            <a href="../../cs/ContentServerf6a8.html?cid=1205116168389&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="../../cs/BlobServer955d.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214556053928&amp;blobkey=id"
                    alt="Ford Focus ST Wheels"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Janta aliaj 18", Rock Metallic
            </p>
        </div>
        <div class="content-block last">
            <a href="../../cs/ContentServerf8c1.html?cid=1205116171084&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="../../cs/BlobServer0869.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214556052389&amp;blobkey=id"
                    alt="Ford Focus ST Wheels"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Janta aliaj 18", Panther Black
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <a href="../../cs/ContentServerec55.html?cid=1205116169397&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="../../cs/BlobServer57ea.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214556052137&amp;blobkey=id"
                    alt=" "/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Janta aliaj 19", Silver
            </p>
        </div>
        <div class="content-block">
            <a href="../../cs/ContentServerb477.html?cid=1205116178358&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="../../cs/BlobServer9a54.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214556053588&amp;blobkey=id"
                    alt=" "/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Janta aliaj 19", Panther Black
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : CULORI :: btfTabContent : 1205116172775 :: tabContent :  -->
<div id='tab4' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            O PREZENTA PLINA DE CULOARE
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Noul Focus este disponibil intr-o varietate de sapte culori deosebite. Stealth Grey este o culoare exclusiva
            pentru noul Focus ST, iar Deep Impact Blue este o noua aparitie in aceasta serie.</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <a href="../../cs/ContentServer7507.html?cid=1205116175934&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="../../cs/BlobServerf39b.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214556052825&amp;blobkey=id"
                    alt="Ford Focus ST Deep Impact Blue"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Deep Impact Blue
            </p>
        </div>
        <div class="content-block">
            <a href="../../cs/ContentServer92e4.html?cid=1205116178472&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="../../cs/BlobServer2d72.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214556053673&amp;blobkey=id"
                    alt="Ford Focus ST Frozen White"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Frozen White
            </p>
        </div>
        <div class="content-block last">
            <a href="../../cs/ContentServerd8f9.html?cid=1205116169251&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="../../cs/BlobServer69be.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214556052053&amp;blobkey=id"
                    alt="Ford Focus ST Moonlight Silver"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Moondust Silver
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <a href="../../cs/ContentServer50a3.html?cid=1205116178098&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="../../cs/BlobServer3456.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214556053418&amp;blobkey=id"
                    alt="Ford Focus ST Panther Black"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Panther Black
            </p>
        </div>
        <div class="content-block">
            <a href="../../cs/ContentServer9755.html?cid=1205116177566&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="../../cs/BlobServer1669.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214556053333&amp;blobkey=id"
                    alt="Ford Focus ST Race Red"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Race Red
            </p>
        </div>
        <div class="content-block last">
            <a href="../../cs/ContentServer840b.html?cid=1205116173199&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="../../cs/BlobServer424b.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214556051885&amp;blobkey=id"
                    alt="Ford Focus ST Stealth"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Stealth
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <a href="../../cs/ContentServerfa61.html?cid=1205116172350&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="../../cs/BlobServer4aa2.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214556051633&amp;blobkey=id"
                    alt="Ford Focus ST Tangerine Scream"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Tangerine Scream
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : FINISAJE :: btfTabContent : 1205116169209 :: tabContent :  -->
<div id='tab5' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            IMAGINEA DEVINE COMPLETA, CU TAPITERIA ALEASA DE TINE
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Indiferent de optiunea de tapiterie aleasa, materialele de calitate superioara si atentia deosebita la
            detalii reprezinta o garantie.</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <a href="../../cs/ContentServer8bb1.html?cid=1205116173913&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="../../cs/BlobServercbe9.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214556052573&amp;blobkey=id"
                    alt="Ford Focus ST Interior Trim"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Charcoal Black / Race Red
            </p>
        </div>
        <div class="content-block">
            <a href="../../cs/ContentServerbcb5.html?cid=1205116178692&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="../../cs/BlobServerc0ce.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214556053758&amp;blobkey=id"
                    alt="Ford Focus ST Interior Trim"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Charcoal Black / Anthracite
            </p>
        </div>
        <div class="content-block last">
            <a href="../../cs/ContentServer7955.html?cid=1205116168054&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="../../cs/BlobServer6f65.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214556051549&amp;blobkey=id"
                    alt="Ford Focus ST Interior Trim"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Charcoal Black / Tangerine Scream
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <a href="../../cs/ContentServer80b4.html?cid=1205116172793&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="../../cs/BlobServer466a.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214556051801&amp;blobkey=id"
                    alt="Ford Focus ST Interior Trim"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Charcoal Black / Spirit Blue
            </p>
        </div>
        <div class="content-block">
            <a href="../../cs/ContentServerddbb.html?cid=1205116168571&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="../../cs/BlobServerf6dc.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214556051969&amp;blobkey=id"
                    alt="Ford Focus ST Interior Trim"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Charcoal Black / Smoke Storm
            </p>
        </div>
        <div class="content-block last">
            <a href="../../cs/ContentServer3b76.html?cid=1205116169907&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="../../cs/BlobServer5a63.jpg?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214556052221&amp;blobkey=id"
                    alt=" "/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>
                Piele Windsor in culoarea Charcoal Black
            </p>
        </div>
    </article>
</div>
</div>
</div>
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205116173898&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205116170016&amp;tabName=Caracteristici&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="Caracteristici#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205116173898&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205116170016&amp;tabName=Caracteristici&amp;c=Page&amp;site=RORO4_ENGINE">Caracteristici</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205116169225 -->
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
            var nameplateName = 'ford focus st';
            googleAdServerNameplateName = nameplateName.toLowerCase();
            dataLayer.push({"nameplateName": googleAdServerNameplateName});
            if (typeof osbNameplateName != 'undefined') {
                osbNameplateName = osbNameplateName.toLowerCase();
                dataLayer.push({"nameplateName": osbNameplateName});
            }
            if (typeof bookingReferenceNumber != 'undefined') {
                dataLayer.push({"leadID": bookingReferenceNumber});
            }
            dataLayer.push({"pageTitle": 'Noul Focus ST 2015 Design | Ford RO'});
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
    sford.pageName = 'brand:passenger:vehicle:gallery:<tab name>:ford focus st';
    sford.dlwasSent = false;
    sford.eVar11 = 'brand:passenger:vehicle:gallery:<tab name>';
    sford.hier1 = 'vehicle:gallery:car:ford focus st:2015';
    sford.tagViewPhoto = '';
    sford.tagHighlights = '';
    sford.tagDownload = '';
    s.pageName = 'brand:passenger:vehicle:gallery:<tab name>:ford focus st';
    s.hier1 = 'vehicle:gallery:car:ford focus st:2015';
    s.channel = 'vehicle';
    s.eVar4 = 'rum';
    s.prop4 = 'rum';
    s.eVar11 = 'brand:passenger:vehicle:gallery:<tab name>';
    s.prop11 = 'brand:passenger:vehicle:gallery:<tab name>';
    s.eVar12 = '2015';
    s.prop12 = '2015';
    sford.my = '2015';
    s.eVar14 = 'ford-ro';
    s.prop14 = 'ford-ro';
    s.eVar15 = 'ford-brand';
    s.prop15 = 'ford-brand';
    s.eVar16 = 'ford focus st';
    s.prop16 = 'ford focus st';
    sford.np = 'ford focus st';
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
