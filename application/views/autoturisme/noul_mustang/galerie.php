
<script type="text/javascript">
    // mobile sniffer
    ForceRedirectUserAgents = 'android,iphone,blackberry';
    ForceRedirectUserAgentsBypass = 'Win64,Win32';
    ForceRedirectMinWidth = '480';
    MobileHomePageRedirectURL = 'Galerie\/\/m.ford.ro';
</script>
<div id="xAxis-detailed">
    <nav class="breadCrumb visuallyhidden" role="navigation">
        <ul itemprop="breadcrumb">
            <li class="home"><a href="../../index" data-selenium="breadcrumb_home" class="om_bc_li"
                                title="Pagina principal&#259;">Pagina principal&#259;</a><span></span></li>
            <li data-selenium="breadcrumb_cars"><a href="../../Autoturisme" class="om_bc_li">
                    Autoturisme
                </a><span></span></li>
            <li data-selenium="breadcrumb_nameplate">Mustang</li>
        </ul>
    </nav>
    <script>
        var vehicleimagepackpresid = '1205065814669';
        var vehicleimagepackyear = 'NONE';
    </script>
    <div class="fblike-locale">en_RO</div>
    <script>
        var googleAdServerNameplateId = 'AUTHORED';
        var googleAdServerNameplateName = 'Mustang';
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
            ]}}, "brand": "Ford", "vehicleType": "PV", "catalogId": "NONE", "nameplate": "Mustang", "labelAvailableFrom": "&nbsp;", "formattedCurrency": "", "nameplateText": "Legendar, puternic \u015Fi dinamic, cu o prezen\u0163\u0103 unic\u0103 \u015Fi inconfundabil\u0103, nemai\u00EEnt\u00E2lnit\u0103 la o alt\u0103 ma\u015Fin\u0103.", "imagePack": false, "hideVehicleImage": false, "facebookImagePath": "", "facebookAppId": "facebookAppId", "images": [], "billBoardImagePath": null, "backgroundImagePath": ["/assets/img/mustang/1214521839662.jpg", "null", "null"], "disclaimerTextColor": [null, null, null], "current": true, "cid": "1205099721296", "cta": [], "social": {"facebook": "https://facebook.com", "facebookPage": "fordromania"}, "disclaimer": "Modelul prezentat este un Mustang COUPÉ", "seriesCode": "AUTHORED", "uscCode": "AUTHORED", "presId": "1205065814669", "promos": [], "idf": {"options": [
                {"dataOverlay": {"mediaType": "Flash", "height": "435", "width": "780"}, "iconURL": "/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobheader=image%2Fjpg&blobwhere=1214521845185&blobkey=id", "link": "/cs/ContentServer?cid=1205099782694&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Video_C&amp;site=RORO4_ENGINE", "videoSrc": [
                    {"src1": ""},
                    {"src2": ""}
                ], "youtubeClose": "", "tooltipText": "Ford Mustang Coupe"},
                {"dataOverlay": {"mediaType": "Flash", "height": "435", "width": "780"}, "iconURL": "/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobheader=image%2Fjpg&blobwhere=1214521845201&blobkey=id", "link": "/cs/ContentServer?cid=1205099783551&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Video_C&amp;site=RORO4_ENGINE", "videoSrc": [
                    {"src1": ""},
                    {"src2": ""}
                ], "youtubeClose": "", "tooltipText": "Ford Mustang Convertible"}
            ]}}
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
                    style="background-image:url(../../cs/BlobServerb00d?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpg&amp;blobwhere=1214521839662&amp;blobkey=id)">
                    <div class="layered-nameplate-image">
                        <div class="image-holder">
                        </div>
                    </div>
                    <aside class="nameplate-disclaimer ">
                        Modelul prezentat este un Mustang COUPÉ
                    </aside>
                </li>
            </ul>
            <div itemscope itemtype="http://schema.org/Product" id="nameplateDetails" class="nameplate-vehicle">
                <!--the text description-->
                <div class="name-plate-text">
                    <p class="intro"> NOUL</p>

                    <h1 class="bigHeading">
                        <span data-selenium="XA_namePlate" itemprop="member" class="nameplate boldTxt">Mustang</span>
                        <span data-selenium="XA_model" itemprop="model" itemscope
                              itemtype="http://schema.org/Organization" class="mark">Ford</span>
                        <!--The price -->
                    </h1>
                    <!--The blurb -->
                    <p class="blurb">
                        Legendar, puternic şi dinamic, cu o prezenţă unică şi inconfundabilă, nemaiîntâlnită la o altă
                        maşină.
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
<!--  tabUrl /cs/ContentServer?cid=1205099721296&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="PrezentareGenerala#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205099721296&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE">Prezentare
        generala</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205099718055 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205099721296&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205104085715&amp;tabName=PreturisiPromotii&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="PreturisiPromotii#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205099721296&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205104085715&amp;tabName=PreturisiPromotii&amp;c=Page&amp;site=RORO4_ENGINE">Preturi
        si Promotii</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205104313828 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205099721296&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205099724326&amp;tabName=Galerie&amp;c=Page&amp;site=RORO4_ENGINE -->
<!-- IntoID ::: articleAssetId -->
<li class="selected"><a href="Galerie#primaryTabs"
                        data-ajaxlink="/cs/ContentServer?cid=1205099721296&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205099724326&amp;tabName=Galerie&amp;c=Page&amp;site=RORO4_ENGINE">Galerie</a>
<!--This is where the main content for the selected tab will go -->
<!-- secondary tabs -->
<div class="secondary-tabs tab-content">
<nav class="sub-nav">
    <ul>
        <li><a href='#tab1' class='omt_tabName'>Exterior</a></li>
        <li><a href='#tab2' class='omt_tabName'>Interior </a></li>
        <li><a href='#tab3' class='omt_tabName'>Jante</a></li>
        <li><a href='#tab4' class='omt_tabName'>Culori</a></li>
        <li><a href='#tab5' class='omt_tabName'>Ornamente interior</a></li>
    </ul>
</nav>
<!-- isBtfTab : from MidPageTabs true -->
<div class="innertab-wrapper">
<!--  tabTitle : Exterior :: btfTabContent : 1205099723543 :: tabContent :  -->
<div id='tab1' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            DESIGNUL, LINIILE, DETALIILE <br><br>NU POATE FI DECAT UN MUSTANG
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>De la grila sub forma de gura de rechin, inclinata in fata, si capota<br>
            sculptata din partea frontala si pana la lampile spate cu trei bare, emblema <br>
            indrazneata cu ponei <br>
            sau GT si teava de esapament dubla din spate, noul Mustang <br>
            creeaza o prezenta puternica.<br>
            <br>
            Forma robusta, dar senzuala, a caroseriei este accentuata<br>
            de caracteristici de design care imbunatatesc aerodinamica si deportanta,<br>
            maximizand performanta si eficienta.</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/mustang/1214521844531.jpg"
                    alt="decapotabila – acoperis ridicat"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Decapotabila – acoperis ridicat</p>
            </p>
        </div>
        <div class="content-block">
           <img
                    src="/assets/img/mustang/1214521844787.jpg"
                    alt="decapotabila – acoperis coborat"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Decapotabila – acoperis coborat</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/mustang/1214521839692.jpg"
                    alt="fastback"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Fastback</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/mustang/1214521840408.jpg"
                    alt="faruri"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Faruri</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/mustang/1214521839498.jpg"
                    alt="lampi spate"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Lampi spate</p>
            </p>
        </div>
        <div class="content-block last">
           <img
                    src="/assets/img/mustang/1214521839410.jpg"
                    alt="lumina de insotire"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>[Lumina de insotire</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/mustang/1214521843071.jpg"
                    alt="jante"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Jante</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/mustang/1214521844445.jpg"
                    alt="spoiler spate"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Spoiler spate</p>

            <p></p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/mustang/1214521841611.jpg"
                    alt="teava de esapament din inox"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Teava de esapament din inox</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Interior  :: btfTabContent : 1205099718108 :: tabContent :  -->
<div id='tab2' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            RASFATAT DE CONFORT<br><br> INCONJURAT DE SPATIU<br><br> SI TEHNOLOGIE
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Cu un aspect inspirat de cabina unui avion de lupta, cabina noului Mustang <br> va ofera un spatiu interior
            confortabil, bine echipat si revigorant.<br><br> Executia de exceptie si stilul contemporan sunt aduse la
            viata<br> de diverse caracteristici, printre care panourile de aluminiu, <br> scaunele si ornamentele
            imbracate in piele, precum si detaliile metalice. <br><br> Si cu fiecare comutator, comanda si afisaj
            dispuse intuitiv la indemana, <br> va veti putea concentra atentia asupra drumului sau a pistei din fata.
        </p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/mustang/1214521839964.jpg"
                    alt="habitaclu"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Habitaclu </p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/mustang/1214521841353.jpg"
                    alt="interior nou"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Interior nou</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/mustang/1214521842815.jpg"
                    alt="consola centrala"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Consola centrala</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/mustang/1214521844101.jpg"
                    alt="scaune incalzite"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Scaune incalzite</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/mustang/1214521843415.jpg"
                    alt="scaune spate"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Scaune spate </p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/mustang/1214521842127.jpg"
                    alt="scaun sofer"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Scaun sofer</p>
            </p>
        </div>
    </article>
    <header class="intro-header">
        <h1 class="bigHeading">
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Un volan perfect echilibrat si cu diametru mic. <br> <br> Scaune din piele premium, frumos executate, cu
            cusaturi duble. <br> <br> <strong>Scaune frontale cu reglaj termic</strong><br> Scaunele din fata cu
            tapiterie din piele sunt incalzite si racite si pot fi reglate electric pe sase directii. Scaunul soferului
            este prevazut si cu suport electric pentru zona lombara.</p>
        </p>
    </header>
</div>
<!--  tabTitle : Jante :: btfTabContent : 1205099720999 :: tabContent :  -->
<div id='tab3' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            IMPOZANT IN NEGRU. UIMITOR IN ARGINTIU.<br><br> O GAMA LARGA DE JANTE CARE ADUC UN PLUS DE<br><br> IMAGINE.
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>
            Gama larga de modele deosebite, cu emblema cu ponei, subliniaza<br>
            si mai mult imaginea sofisticata a noului Mustang, completand<br>
            in acelasi timp oricare dintre cele 10 culori uimitoare ale caroseriei.
        </p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/mustang/1214521843585.jpg"
                    alt="Jante de 19” din aliaj, model cu 5x2 spite, negru lucios. Dotare standard la Mustang EcoBoost."/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Jante de 19&rdquo; din aliaj, model cu 5x2 spite, negru lucios.<br>
                Dotare standard la Mustang EcoBoost.</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/mustang/1214521839588.jpg"
                    alt="Jante de 19” din aliaj, model cu mai multe spite, negru lucios. Dotare standard la Mustang GT."/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Jante de 19&rdquo; din aliaj, model cu mai multe spite, negru lucios.<br>
                Dotare standard la Mustang GT.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/mustang/1214521844617.jpg"
                    alt="Jante de 19” din aliaj, model cu 5x2 spite, argintiu/nichel. Disponibile optional si in pachetul Personalizat."/><span
                    class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Jante de 19&rdquo; din aliaj, model cu 5x2 spite, argintiu/nichel.<br>
                Disponibile optional si in pachetul Personalizat.</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Culori :: btfTabContent : 1205099717154 :: tabContent :  -->
<div id='tab4' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            O GAMA DE CULORI PUTERNICE
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>
            Exprimati-va personalitatea si etalati-va gusturile <br>
            impecabile, alegand una dintre cele 10 culori deosebite disponibile.
        </p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/mustang/1214521843243.jpg"
                    alt="Ford Mustang in Ebony"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Ebony</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/mustang/1214521840236.jpg"
                    alt="Ford Mustang in Race Red"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Race Red</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/mustang/1214521842299.jpg"
                    alt="Ford Mustang in Competition Orange"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Competition Orange</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/mustang/1214521840923.jpg"
                    alt="Ford Mustang in Oxford White"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Oxford White</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/mustang/1214521843757.jpg"
                    alt="Ford Mustang in Deep Impact Blue"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Deep Impact Blue</p>
            </p>
        </div>
        <div class="content-block last">
           <img
                    src="/assets/img/mustang/1214521842901.jpg"
                    alt="Ford Mustang in Guard"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Guard</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/mustang/1214521841525.jpg"
                    alt="Ford Mustang in Ingot SIlver"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Ingot Silver</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/mustang/1214521840322.jpg"
                    alt="Ford Mustang in Magnetic"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Magnetic</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/mustang/1214521844873.jpg"
                    alt="Ford Mustang in Ruby Red Metallic"/><span class="fv-overlay-icon"></span>
            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Ruby Red Metallic</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/mustang/1214521841783.jpg"
                    alt="Ford Mustang in Triple Yellow"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Triple Yellow</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Ornamente interior :: btfTabContent : 1205099719070 :: tabContent :  -->
<div id='tab5' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            CONFORTUL PE CARE IL DORITI<br><br> IMAGINEA PE CARE O CAUTATI
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Cele cinci variante noi de interior va ofera posibilitatea de a alege dintre mai multe optiuni de tapiterie
            din piele. <br>
            Acestea includ piele premium cu cusatura dubla, si scaune Recaro <br>
            in stil sport, cu sigla cusuta pe spatar.</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/mustang/1214521842041.jpg"
                    alt="Scaune imbracate in piele Ebony"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p><strong>EcoBoost si GT </strong><br> Insertie scaun: Mini Perf pe Salerno in Ebony<br> Perna scaun:
                Salerno in Ebony</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/mustang/1214521841869.jpg"
                    alt="Scaune imbracate in piele Ceramic"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p><strong>EcoBoost si GT</strong><strong> </strong><br>
                Insertie scaun: Mini Perf pe Salerno in Ceramic<br>
                Perna scaun: Salerno in Ceramic</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/mustang/1214521840837.jpg"
                    alt="Scaune imbracate in piele Dark Saddle"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p><strong>EcoBoost si GT</strong><strong> </strong><br>
                Insertie scaun: Mini Perf pe Salerno in Dark Saddle<br>
                Perna scaun: Salerno in Dark Saddle</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/mustang/1214521843671.jpg"
                    alt="Scaune imbracate in piele Premium Ebony"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p><strong>EcoBoost si GT</strong><strong> </strong><br>
                Insertie scaun: Mini Perf pe Luxury Grain in Ebony<br>
                Perna scaun: Tri-bar Registered Mini Perf pe Luxury Grain in Ebony<!-- <br>
<br>
<em>[MARKET NOTE &ndash; ONLY AVAILABLE AS PART OF EU CUSTOM PACK]</em>--></p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/mustang/1214521841267.jpg"
                    alt="Scaune imbracate in piele Recaro Ebony"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p><strong>EcoBoost si GT</strong><strong> </strong><br>
                Insertie scaun Recaro: Mini Perf pe Salerno in Ebony<br>
                Perna scaun Recaro: Salerno in Ebony <br>
                <br>
                <!--<em>[MARKET NOTE &ndash; RECARO &ndash; AVAILABLE AS AN OPTION WITH AND WITHOUT THE CUSTOM PACK &ndash; not available in the UK]</em>
                --></p>
            </p>
        </div>
    </article>
</div>
</div>
</div>
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205099721296&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205099717676&amp;tabName=Caracteristici&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="Caracteristici#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205099721296&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205099717676&amp;tabName=Caracteristici&amp;c=Page&amp;site=RORO4_ENGINE">Caracteristici</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205099723515 -->
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
            var nameplateName = 'ford mustang';
            googleAdServerNameplateName = nameplateName.toLowerCase();
            dataLayer.push({"nameplateName": googleAdServerNameplateName});
            if (typeof osbNameplateName != 'undefined') {
                osbNameplateName = osbNameplateName.toLowerCase();
                dataLayer.push({"nameplateName": osbNameplateName});
            }
            if (typeof bookingReferenceNumber != 'undefined') {
                dataLayer.push({"leadID": bookingReferenceNumber});
            }
            dataLayer.push({"pageTitle": 'noul Ford Mustang 2015 Galerie | Ford RO'});
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
    sford.pageName = 'brand:passenger:vehicle:gallery:<tab name>:ford mustang';
    sford.dlwasSent = false;
    sford.eVar11 = 'brand:passenger:vehicle:gallery:<tab name>';
    sford.hier1 = 'vehicle:gallery:car:ford mustang:2015';
    sford.tagViewPhoto = '';
    sford.tagHighlights = '';
    sford.tagDownload = '';
    s.pageName = 'brand:passenger:vehicle:gallery:<tab name>:ford mustang';
    s.hier1 = 'vehicle:gallery:car:ford mustang:2015';
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
    s.eVar16 = 'ford mustang';
    s.prop16 = 'ford mustang';
    sford.np = 'ford mustang';
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

