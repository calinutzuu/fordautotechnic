
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
            <li class="home"><a href="http://www.ford.ro/" data-selenium="breadcrumb_home" class="om_bc_li"
                                title="Pagina principal&#259;">Pagina principal&#259;</a><span></span></li>
            <li data-selenium="breadcrumb_cars"><a href="http://www.ford.ro/Autoturisme" class="om_bc_li">
                    Autoturisme
                </a><span></span></li>
            <li data-selenium="breadcrumb_nameplate">Mondeo</li>
        </ul>
    </nav>
    <script>
        var vehicleimagepackpresid = '1205074419809';
        var vehicleimagepackyear = 'YYY';
    </script>
    <div class="fblike-locale">en_RO</div>
    <script>
        var googleAdServerNameplateId = '00R';
        var googleAdServerNameplateName = 'Mondeo';
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
        var bootstrapVehicleData = {"vehicles":[
            {"strIntroToFord":"ITI PREZENTAM Noul", "brand":"Ford", "vehicleType":"PV", "catalogId":"10534", "nameplate":"Mondeo", "labelAvailableFrom":"De la", "formattedCurrency":"28.050 RON", "nameplateText":"Un amestec perfect de tehnologie \u015Fi m\u0103iestrie, performan\u0163\u0103 \u015Fi eficien\u0163\u0103, design inovator \u015Fi execu\u0163ie de precizie. Noul Ford Mondeo este f\u0103cut s\u0103 inspire.", "imagePack":true, "hideVehicleImage":false, "images":["/assets/img/mondeo/Mondeo_RubyRed_5dr_Front_00001.jpg"], "backgroundImagePath":["/assets/img/mondeo/Mondeo_RubyRed_5dr_Front_00001.jpg", "null", "null"], "disclaimerTextColor":["364957", null, null], "current":true, "cid":"1205078762591", "cta":[
                {"linkTitle":"DESCARC\u0102 BRO\u015EUR\u0102 ", "linkURL":"\/SBE\/Brosura\/DescarcaBrosura", "linkType":"primary", "linkTarget":"_blank", "omid":"va"},
                {"linkTitle":"\u00CENSCRIE-TE LA TEST DRIVE ", "linkURL":"\/SBE\/TestDrive?shopcode=00R", "linkType":"tertiary", "linkTarget":"_blank", "omid":"tr"},
                {"linkTitle":"VREAU SĂ FIU INFORMAT(Ă) ", "linkURL":"/SBE/VreauSaFiuInformata", "linkType":"tertiary", "linkTarget":"", "omid":"tr"}
            ], "social":{"facebook":"https://facebook.com", "facebookPage":""}, "disclaimer":"Modelul prezentat este un Mondeo Titanium. Imagine cu titlul de prezentare.", "seriesCode":"R3D", "uscCode":"00R", "supportSelector":"true", "presId":"1205074419809", "promos":[
                {"imagePath":"/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobwhere=1214487222211&blobkey=id", "overlay":{"height":435, "width":780}, "link":"/cs/ContentServer?pagename=RORO4_ENGINE/EP2/common/promo/M48_PromoBlock&c=Promo_C&cid=1205080378909", "text":"Oferta speciala de lansare"}
            ], "idf":{"options":[
                {"dataOverlay":{"mediaType":"Image", "height":"435", "width":"780"}, "iconURL":"/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobheader=image%2Fjpg&blobwhere=1214485098758&blobkey=id", "link":"/cs/ContentServer?cid=1205074418858&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE", "videoSrc":[
                    {"src1":""},
                    {"src2":""}
                ], "youtubeClose":"", "tooltipText":"Parking"}
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
        <a class="js-ajax pointer left om_pv_xa_le" href="#" role="toolbar"><span></span></a>
        <a class="js-ajax pointer right om_pv_xa_ri" href="#" role="toolbar"><span></span></a>

        <div itemscope itemtype="http://schema.org/ImageObject">
            <ul class="nameplate x-axis" id="vvmRoot">
                <li class="default-nameplate-vehicle"
                    style="background-image:url(http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpg&amp;blobwhere=1214489050958&amp;blobkey=id)">
                    <div class="layered-nameplate-image">
                        <div class="image-holder">
                        </div>
                    </div>
                    <aside class="nameplate-disclaimer ">
                        Modelul prezentat este un Mondeo Titanium. Imagine cu titlul de prezentare.
                    </aside>
                </li>
            </ul>
            <div itemscope itemtype="http://schema.org/Product" id="nameplateDetails" class="nameplate-vehicle">
                <!--the text description-->
                <div class="name-plate-text">
                    <p class="intro">ITI PREZENTAM Noul</p>

                    <h1 class="bigHeading">
                        <span data-selenium="XA_namePlate" itemprop="member" class="nameplate boldTxt">Mondeo</span>
                        <span data-selenium="XA_model" itemprop="model" itemscope
                              itemtype="http://schema.org/Organization" class="mark">Ford</span>
                        <!--The price -->
                    </h1>
                    <!--The blurb -->
                    <p class="blurb">
                        Un amestec perfect de tehnologie şi măiestrie, performanţă şi eficienţă, design inovator şi
                        execuţie de precizie. Noul Ford Mondeo este făcut să inspire.
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
</aside>
<p id="xaxisOverviewDisclaimer" class="disclaimer specific"></p>
<!-- Promos -->
<section id="promoCarousel" class="promo-carousel box-shadow">
    <div id="promo-carousel-timer">7500</div>
    <div class="slide-wrapper">
        <article class="slate slide">
            <a href='http://www.ford.ro/Promotii/Autoturisme/PromotieFlote'>
<span class="active-promo-rover">
<span class="bg-opacity"></span>
<span class="link-icon"></span>
</span>
                <img
                    src="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpg&amp;blobwhere=1214564411751&amp;blobkey=id"
                    alt="Promotie Flote">

                <p class="promo-carousel-text"><span class="promo-carousel-bold">Vezi detaliile ofertei</span></p></a>
        </article>
        <article class="slate slide">
            <a href='http://www.ford.ro/Promotii/Autoturisme/Ecobonus/OfertaMondeo'>
<span class="active-promo-rover">
<span class="bg-opacity"></span>
<span class="link-icon"></span>
</span>
                <img
                    src="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpg&amp;blobwhere=1214564411460&amp;blobkey=id"
                    alt="Ford Fiesta">

                <p class="promo-carousel-text"><span class="promo-carousel-bold">Vezi detaliile ofertei</span></p></a>
        </article>
    </div>
</section>
<section id="non-js-promoCarousel" class="non-js-promo-carousel box-shadow">
    <div class="slide-wrapper">
        <p class="promo-carousel-text"><a
                href="http://www.ford.ro/cs/ContentServer?pagename=RORO4_ENGINE/EP2/common/promo/M48_PromoBlock&amp;c=Promo_C&amp;cid=Vezi%20detaliile%20ofertei"
                target="_blank">Promotie Flote</a></p>

        <p class="promo-carousel-text"><a
                href="http://www.ford.ro/cs/ContentServer?pagename=RORO4_ENGINE/EP2/common/promo/M48_PromoBlock&amp;c=Promo_C&amp;cid=Vezi%20detaliile%20ofertei"
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
<!--  tabUrl /cs/ContentServer?cid=1205078762591&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="/Autoturisme/Mondeo" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205078762591&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE">Prezentare
        generala</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205078764941 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205078762591&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205103778077&amp;tabName=PreturiSiPromotii&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="PreturiSiPromotii#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205078762591&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205103778077&amp;tabName=PreturiSiPromotii&amp;c=Page&amp;site=RORO4_ENGINE">Preturi
        si promotii</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205103777397 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205078762591&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205078765922&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE -->
<!-- IntoID ::: articleAssetId -->
<li class="selected"><a href="Design#primaryTabs"
                        data-ajaxlink="/cs/ContentServer?cid=1205078762591&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205078765922&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE">Design</a>
<!--This is where the main content for the selected tab will go -->
<!-- secondary tabs -->
<div class="secondary-tabs tab-content">
<nav class="sub-nav">
    <ul>
        <li><a href='#tab1' class='omt_tabName'>Exterior</a></li>
        <li><a href='#tab2' class='omt_tabName'>Interior</a></li>
        <li><a href='#tab4' class='omt_tabName'>Jante</a></li>
        <li><a href='#tab5' class='omt_tabName'>Culori</a></li>
    </ul>
</nav>
<!-- isBtfTab : from MidPageTabs true -->
<div class="innertab-wrapper">
<!--  tabTitle : Exterior :: btfTabContent : 1205078766627 :: tabContent :  -->
<div id='tab1' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            Exterior
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Acesta este un vehicul conceput pentru a impesiona. In plus, forma si stilul masinii au fost adaptate pentru
            a conferi acesteia rezistenta minima la inaintare, maximizand astfel economia de combustibil. <br><br>Vezi
            mai jos mai multe caracteristici de design exterior.</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">

            <img src="/assets/img/mondeo/1214487220539.jpg"
                 alt="Mondeo - versiunea in 5 usi, in culoarea Ruby Red"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Mondeo - versiunea in 5 usi, in culoarea&nbsp;Ruby Red</p>
            </p>
        </div>
        <div class="content-block">
            <img src="/assets/img/mondeo/1214487220203.jpg"
                 alt="Mondeo - versiunea in 5 usi, in culoarea Ruby Red"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Mondeo - versiunea in 5 usi, in culoarea&nbsp;Ruby Red</p>
            </p>
        </div>
        <div class="content-block last">
            <img src="/assets/img/mondeo/1214487219696.jpg"
                 alt="Mondeo - versiunea in 5 usi, in culoarea Ruby Red"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Mondeo - versiunea in 5 usi, in culoarea&nbsp;Ruby Red</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img src="/assets/img/mondeo/1214487221128.jpg"
                 alt="Mondeo - versiunea Wagon, Titanium Grey"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Mondeo - versiunea Wagon,&nbsp;Titanium Grey</p>
            </p>
        </div>
        <div class="content-block">
            <img src="/assets/img/mondeo/1214487221884.jpg"
                 alt="Mondeo - versiunea Wagon, Titanium Grey"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Mondeo - versiunea Wagon,&nbsp;Titanium Grey</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Interior :: btfTabContent : 1205078767569 :: tabContent :  -->
<div id='tab2' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            Interior
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Bucura-te de ambianta silentioasa si rafinata a cabinei noului Mondeo. Sunt utilizate materiale de calitate
            superioara, iar gama larga de optiuni pentru interior iti permite sa iti personalizezi si mai mult
            experienta. Pasagerii din spate pot, de asemenea, sa se relaxeze si sa se bucure de spatiul generos din zona
            picioarelor, a capului si a umerilor.<br><br>Vezi mai jos mai multe caracteristici de design interior.</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <img src="/assets/img/mondeo/1214487220119.jpg"
                 alt="Mondeo - design interior"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Mondeo - design interior</p>
            </p>
        </div>
        <div class="content-block">
            <img src="/assets/img/mondeo/1214487220371.jpg"
                 alt="Mersul in marsarier iti ofera acum mai multa vizibilitate"/><span
                class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Mondeo - sistem de asistenta activa la parcare</p>
            </p>
        </div>
        <div class="content-block last">
            <img src="/assets/img/mondeo/1214487217948.jpg"
                 alt="Ford SYNC 2. Tehnologie hands-free si ecran tactil avansat"/><span
                class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Mondeo - SYNC 2 cu ecran tactil</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
<!-- BEGIN [MidPageTabs] -->
<!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Exterior</a></h2> -->
<!--</div>-->
<!--<div id='tab2' class="mp-tab-wrapper">
<h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">Interior</a></h2> -->
<!--</div>-->
<!--<div id='tab4' class="mp-tab-wrapper">
<h2><a href='#tab4' class="mp-tab omt_xd_mt_ti">Jante</a></h2> -->
<!--</div>-->
<!--<div id='tab5' class="mp-tab-wrapper">
<h2><a href='#tab5' class="mp-tab omt_xd_mt_ti">Culori</a></h2> -->
<!--</div>-->
<!-- END [MidPageTabs] -->
<!--  tabTitle : Jante :: btfTabContent : 1205078762638 :: tabContent :  -->
<div id='tab4' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            Jante
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Noul Mondeo este disponibil cu o gama larga de optiuni diferite de jante.</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <img src="/assets/img/mondeo/1214487221380.jpg"
                 alt="Ambient - jante D5AA4 - 16"" /><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Ambient - jante D5AA4 - 16&quot;</p>
            </p>
        </div>
        <div class="content-block">
            <img src="/assets/img/mondeo/1214487217533.jpg"
                 alt="Ambient - jante D5AA4 - 16"" /><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Ambient - jante D5AA4 - 16&quot;</p>
            </p>
        </div>
        <div class="content-block last">
            <img src="/assets/img/mondeo/1214487221968.jpg"
                 alt="Trend - jante D2XC8 - 16"" /><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Trend - jante&nbsp;D2XC8 -&nbsp;16&quot;</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img src="/assets/img/mondeo/1214487219780.jpg"
                 alt="Titanium - jante D2YCE - 17"" /><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Titanium - jante D2YCE - 17&quot;</p>
            </p>
        </div>
        <div class="content-block">
            <img  src="/assets/img/mondeo/1214487217616.jpg"
                  alt="Trend - jante D2YAY - 17"" /><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Trend - jante D2YAY - 17&quot;</p>
            </p>
        </div>
        <div class="content-block last">
            <img src="/assets/img/mondeo/1214487219446.jpg"
                 alt="Trend - jante D2YDN - 17"" /><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Trend - jante D2YDN - 17&quot;</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img src="/assets/img/mondeo/1214487219612.jpg"
                 alt="Titanium - jante optionale D2UEH - 18"" /><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Titanium - jante optionale D2UEH - 18&quot;</p>
            </p>
        </div>
        <div class="content-block">
            <img src="/assets/img/mondeo/1214487218698.jpg"
                 alt="Titanium - jante optionale D2ULD - 18"" /><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Titanium - jante optionale D2ULD - 18&quot;</p>
            </p>
        </div>
        <div class="content-block last">
            <img src="/assets/img/mondeo/1214487222555.jpg"
                 alt="Titanium - jante D2VL4 - 19"" /><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Titanium - jante D2VL4 - 19&quot;</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Culori :: btfTabContent : 1205078762205 :: tabContent :  -->
<div id='tab5' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            Culori
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Alege dintr-o gama variata de culori pentru exterior, fiecare cu propria nota stilistica.</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <img src="/assets/img/mondeo/1214487218031.jpg"
                 alt="Blazer Blue"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Blazer Blue</p>
            </p>
        </div>
        <div class="content-block">
            <img src="/assets/img/mondeo/1214487218948.jpg"
                 alt="Magnetic Grey"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Magnetic Grey</p>
            </p>
        </div>
        <div class="content-block last">
            <img src="/assets/img/mondeo/1214487219865.jpg"
                 alt="Moondust Silver"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Moondust Silver</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img src="/assets/img/mondeo/1214487219280.jpg"
                 alt="Ruby Red"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Ruby Red</p>
            </p>
        </div>
        <div class="content-block">
            <img src="/assets/img/mondeo/1214487219363.jpg"
                 alt="Techtonic Silver"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Techtonic Silver</p>
            </p>
        </div>
        <div class="content-block last">
            <img src="/assets/img/mondeo/1214487222387.jpg"
                 alt="White Platinum Tricoat"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>White Platinum Tricoat</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img src="/assets/img/mondeo/1214487217865.jpg"
                 alt="Panther Black"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Panther Black</p>
            </p>
        </div>
        <div class="content-block">
            <img src="/assets/img/mondeo/1214487219529.jpg"
                 alt="Guard"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Guard</p>
            </p>
        </div>
        <div class="content-block last">
            <img src="/assets/img/mondeo/1214487220876.jpg"
                 alt="Lunar Sky"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Lunar Sky</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img src="/assets/img/mondeo/1214487221548.jpg"
                 alt="Deep Impact Blue"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Deep Impact Blue</p>
            </p>
        </div>
    </article>
</div>
</div>
</div>
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205078762591&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205078766361&amp;tabName=Caracteristici&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="Caracteristici#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205078762591&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205078766361&amp;tabName=Caracteristici&amp;c=Page&amp;site=RORO4_ENGINE">Caracteristici</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205078762763 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205078762591&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205097597946&amp;tabName=Vignale&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="Vignale#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205078762591&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205097597946&amp;tabName=Vignale&amp;c=Page&amp;site=RORO4_ENGINE">Mondeo
        Vignale</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205097597521 -->
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
