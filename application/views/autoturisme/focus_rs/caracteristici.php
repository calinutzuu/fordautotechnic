
<script type="text/javascript">
    // mobile sniffer
    ForceRedirectUserAgents = 'android,iphone,blackberry';
    ForceRedirectUserAgentsBypass = 'Win64,Win32';
    ForceRedirectMinWidth = '480';
    MobileHomePageRedirectURL = 'Caracteristici.html\/\/m.ford.ro';
</script>
<div id="xAxis-detailed">
    <nav class="breadCrumb visuallyhidden" role="navigation">
        <ul itemprop="breadcrumb">
            <li class="home"><a href="http://www.ford.ro/" data-selenium="breadcrumb_home" class="om_bc_li"
                                title="Pagina principal&#259;">Pagina principal&#259;</a><span></span></li>
            <li data-selenium="breadcrumb_cars"><a href="http://www.ford.ro/Autoturisme" class="om_bc_li">
                    Autoturisme
                </a><span></span></li>
            <li data-selenium="breadcrumb_nameplate">Focus RS</li>
        </ul>
    </nav>
    <script>
        var vehicleimagepackpresid = '1205106611413';
        var vehicleimagepackyear = 'NONE';
    </script>
    <div class="fblike-locale">en_RO</div>
    <script>
        var googleAdServerNameplateId = 'AUTHORED';
        var googleAdServerNameplateName = 'Focus RS ';
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
            ]}}, "brand": "Ford", "vehicleType": "PV", "catalogId": "NONE", "nameplate": "Focus RS ", "labelAvailableFrom": "&nbsp;", "formattedCurrency": "", "nameplateText": "Aspect fara compromis. Performanta epica. Emblema legendara. Aceasta este o masina nascuta din obsesia pentru proiectarea de precizie si tehnologia pentru condus, precum si din pasiunea pentru sporturile cu motor.", "imagePack": false, "hideVehicleImage": false, "facebookImagePath": "", "facebookAppId": "facebookAppId", "images": [], "billBoardImagePath": null, "backgroundImagePath": ["/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobheader=image%2Fjpg&blobwhere=1214538993941&blobkey=id", "null", "null"], "disclaimerTextColor": [null, null, null], "current": true, "cid": "1205106489583", "cta": [
                {"linkTitle": "DESCARC\u0102 BRO\u015EUR\u0102 ", "linkURL": "\/SBE\/BrosuriSiPreturi", "linkType": "primary", "linkTarget": "_blank", "omid": "va"},
                {"linkTitle": "\u00CENSCRIE-TE LA TEST DRIVE ", "linkURL": "\/SBE\/TestDrive\/TestDriveAutoturisme?shopcode=AUTHORED&derivcode=AUTHORED", "linkType": "tertiary", "linkTarget": "_blank", "omid": "tr"},
                {"linkTitle": "VREAU SĂ FIU INFORMAT(Ă) ", "linkURL": "/SBE/VreauSaFiuInformata", "linkType": "tertiary", "linkTarget": "", "omid": "tr"}
            ], "social": {"facebook": "https://facebook.com", "facebookPage": "fordromania"}, "disclaimer": "Modelul prezentat este un Focus RS", "seriesCode": "AUTHORED", "uscCode": "AUTHORED", "presId": "1205106611413", "promos": [], "idf": {"options": []}}
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
                    style="background-image:url(http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpg&amp;blobwhere=1214538993941&amp;blobkey=id)">
                    <div class="layered-nameplate-image">
                        <div class="image-holder">
                        </div>
                    </div>
                    <aside class="nameplate-disclaimer ">
                        Modelul prezentat este un Focus RS
                    </aside>
                </li>
            </ul>
            <div itemscope itemtype="http://schema.org/Product" id="nameplateDetails" class="nameplate-vehicle">
                <!--the text description-->
                <div class="name-plate-text">
                    <p class="intro"></p>

                    <h1 class="bigHeading">
                        <span data-selenium="XA_namePlate" itemprop="member" class="nameplate boldTxt">Focus RS </span>
                        <span data-selenium="XA_model" itemprop="model" itemscope
                              itemtype="http://schema.org/Organization" class="mark">Ford</span>
                        <!--The price -->
                    </h1>
                    <!--The blurb -->
                    <p class="blurb">
                        Aspect fara compromis. Performanta epica. Emblema legendara. Aceasta este o masina nascuta din
                        obsesia pentru proiectarea de precizie si tehnologia pentru condus, precum si din pasiunea
                        pentru sporturile cu motor.
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
<!--  tabUrl /cs/ContentServer?cid=1205106489583&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="Prezentare.html#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205106489583&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE">Prezentare</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205106491781 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205106489583&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205107339789&amp;tabName=PreturiSiPromotii&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="PreturiSiPromotii.html#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205106489583&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205107339789&amp;tabName=PreturiSiPromotii&amp;c=Page&amp;site=RORO4_ENGINE">Preturi
        si Promotii</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205107339997 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205106489583&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205106491651&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="Design.html#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205106489583&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205106491651&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE">Design</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205106490066 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205106489583&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205106492979&amp;tabName=Caracteristici&amp;c=Page&amp;site=RORO4_ENGINE -->
<!-- IntoID ::: articleAssetId -->
<li class="selected"><a href="Caracteristici.html#primaryTabs"
                        data-ajaxlink="/cs/ContentServer?cid=1205106489583&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205106492979&amp;tabName=Caracteristici&amp;c=Page&amp;site=RORO4_ENGINE">Caracteristici</a>
<!--This is where the main content for the selected tab will go -->
<!-- secondary tabs -->
<div class="secondary-tabs tab-content">
<nav class="sub-nav">
    <ul>
        <li><a href='#tab1' class='omt_tabName'>Experienta Condusului</a></li>
        <li><a href='#tab2' class='omt_tabName'>Performanta si Eficienta</a></li>
        <li><a href='#tab3' class='omt_tabName'>Confort</a></li>
        <li><a href='#tab4' class='omt_tabName'>Siguranta si Securitate</a></li>
    </ul>
</nav>
<!-- isBtfTab : from MidPageTabs true -->
<div class="innertab-wrapper">
<!--  tabTitle : Experienta Condusului :: btfTabContent : 1205106492293 :: tabContent :  -->
<div id='tab1' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            TEHNOLOGIE INTELIGENTA LA COMANDA TA
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>In noul Focus RS, esti inconjurat de tehnologii inteligente.<br>
            <br>
            Fiecare dintre acestea joaca un rol anume, insa toate au un singur scop:
            sa iti permita sa te bucuri la maximum de capacitatile masinii.
        </p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"><a
                href="http://www.ford.ro/cs/ContentServer?cid=1205106493298&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
                class="js-overlay" data-media-overlay='{"height":439, "width":780}'> <img
                    src="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214538998893&amp;blobkey=id"
                    alt="Ford Focus RS - All-Wheel Drive"/><span class="fv-overlay-icon"></span></a></div>
        <div class="content">
            <h3 class="bigHeading02">
                Control maxim la viraje
            </h3>

            <p>

            <p>
                <a onClick="triggerOverlay('/cs/ContentServer?pagename=ENGInE/Overlay_C/ShowOverlay%26pubid=1204961250932%26c=Overlay_C%26cid=1205107364318%26overlayheight=439%26overlaywidth=780' ,'overlay','Tractiunea%20integrala','Close','439','780'); return false;"
                   target="_blank" title="Tractiunea integrala" data-media-overlay="{" class="js-overlay"
                   href="http://www.ford.ro/cs/ContentServer?pagename=ENGInE/EP2/common/media/MediaOverlay&amp;c=Video_C&amp;cid=1205107356095&amp;site=ENGInE">Tractiunea
                    integrala (AWD)</a> Ford Performance cu control dinamic al vectorului de cuplu de torsiune asigura o
                acceleratie laterala de peste 1 g, plus aderenta exceptionala si manevrabilitate de inalta precizie
                atunci cand negociezi virajele in forta. Sistemul foloseste seturi duble de ambreiaj, controlate
                electronic, pentru a ajuta la echilibrarea cuplului motorului intre rotile din spate, pentru a se
                potrivi tipului de carosabil si conditiilor de condus. Aceasta tehnologie inteligenta iti permite, de
                asemenea, sa te bucuri de drifturi cu supravirare controlata atunci cand te afli pe pista.</p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Gata pentru drum. Pregatit pentru pista.
            </h3>

            <p>

            <p>In noul Focus RS, detii controlul complet asupra felului in care masina se deplaseaza si se comporta: pe
                drum sau pe pista de circuit. Printr-o simpla actionare a unui comutator poti schimba intre setarile
                Normal, Sport sau Pista. Fiecare mod ajusteaza sistemul de tractiune integrala, comenzile de amortizare,
                sistemele de Control electronic al stabilitatii si ABS, reactia coloanei de directie si a motorului si
                chiar si sunetul motorului. Pe pistele de circuit, poti selecta modul Drift, in care distributia
                cuplului te ajuta sa executi drifturi cu supravirare controlata.</p>

            <div>&nbsp;</div>
            <p><a target="_blank" href="../../../www.youtube.com/watch8b2e.html?v=hDofgYyTxEg">Urmareste filmul</a></p>
            </p>
        </div>
        <div class="img-column"><a
                href="http://www.ford.ro/cs/ContentServer?cid=1205106491661&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
                class="js-overlay" data-media-overlay='{"height":439, "width":780}'> <img
                    src="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214538997618&amp;blobkey=id"
                    alt="Ford Focus RS on the road"/><span class="fv-overlay-icon"></span></a></div>
    </article>
    <article class="content-column left">
        <div class="img-column"><a
                href="http://www.ford.ro/cs/ContentServer?cid=1205106490896&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
                class="js-overlay" data-media-overlay='{"height":439, "width":780}'> <img
                    src="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214538997266&amp;blobkey=id"
                    alt="Ford Focus RS suspension"/><span class="fv-overlay-icon"></span></a></div>
        <div class="content">
            <h3 class="bigHeading02">
                Suspensii care se adapteaza la stilul tau de condus
            </h3>

            <p>

            <p>Suspensia avansata „Öhlins Tenneco”, rigidizata si inspirata de masinile de curse, te ajuta sa
                supraveghezi strict comportamentul noului Focus RS in orice moment. Aceasta imbunatateste tinuta de drum
                si controlul, ajutandu-te sa stabilesti o conexiune cu drumul si sa ai parte de o reactie remarcabila si
                extrem de rapida a sistemului de directie. Pentru condusul pe pista, amortizoarele comutabile cu doua
                moduri ofera o setare chiar si mai ferma, pentru ca tu sa te poti bucura de senzatiile cursei cu
                acceleratia la maximum.
            </p>
            </p>
        </div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <a href="http://www.ford.ro/cs/ContentServer?cid=1205106487715&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214538999236&amp;blobkey=id"
                    alt="Ford Focus RS rear"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Pregateste-te pentru demaraj
            </h3>

            <p>

            <p>Selecteaza Controlul demarajului, cupleaza prima treapta de viteza, apasapedala de acceleratie la maximum
                si apoi elibereaza ambreiajul. Tehnologiile avansate configureaza instantaneu sasiul si mecanismul de
                transmisie, pentru a asigura cea mai rapida accelerare la demaraj. Indiferent de starea pistei, cuplul
                este distribuit prin sistemul de tractiune integrala. Acest lucru mentine puterea motorului la nivel
                maxim (utilizand supraalimentarea), gestioneaza sistemul de control al tractiunii si seteaza
                amortizoarele pentru aderenta maxima. </p>
            </p>
        </div>
        <div class="content-block last">
            <a href="http://www.ford.ro/cs/ContentServer?cid=1205106493130&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214538998808&amp;blobkey=id"
                    alt="Ford Focus RS speedometer"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Controleaza si setarile amortizoarelor
            </h3>

            <p>

            <p>Pentru ajustari de finete, poti regla setarile amortizoarelor fara sa iti iei mainile de pe volan (sau
                ochii de la drum). Cu ajutorul comutatorului cu maneta poti selecta modul de Baza pentru o experienta de
                condus RS confortabila si, in acelasi timp, sport. Alege modul Sport si o setare mai rigida iti va
                asigura un feedback mai definit si manevrabilitate si mai precisa pe drumuri drepte sau serpuite, cat si
                pe piste. Deoarece setarile amortizoarelor iti sunt afisate clar in fata ochilor, detii controlul
                absolut asupra acestora.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <a href="http://www.ford.ro/cs/ContentServer?cid=1205106486983&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214538996254&amp;blobkey=id"
                    alt="Ford Focus RS speedometer - Performance Shift Light"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Schimba vitezele la momentul optim
            </h3>

            <p>

            <p>O gama larga de sisteme si functii avansate se combina pentru a se asigura ca transmisia si motorul ofera
                un nivel maxim de accelerare la trecerea dintr-o treapta de viteza in alta. Cu ajutorul indicatorului
                luminos Performance pentru schimbarea treptelor, poti, de asemenea, sa vezi care este punctul optim de
                trecere la o treapta superioara pentru fiecare treapta de viteza selectata. Iar daca motorul se apropie
                de limita de 6.800 rpm, indicatorul luminos va incepe sa clipeasca, pentru a te avertiza. </p>
            </p>
        </div>
        <div class="content-block">
            <a href="http://www.ford.ro/cs/ContentServer?cid=1205106489041&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214538999739&amp;blobkey=id"
                    alt="Ford Focus RS centre console - Ford SYNC 2"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Tehnologie avansata hands-free
            </h3>

            <p>

            <p>Ford SYNC 2 iti permite sa controlezi muzica si sa initiezi si sa preiei apeluri de pe telefonul mobil,
                utilizand comenzi vocale directe si simple. Poti folosi comenzile vocale si pentru a reda melodii de pe
                o unitate USB sau MP3/iPod<sup>&reg;</sup> ori atunci cand redai in flux melodii de pe un telefon
                compatibil Bluetooth<sup>&reg;</sup>. Iar sistemul iti va citi cu voce tare chiar si mesajele text pe
                care le primesti. In mod alternativ, poti folosi ecranul tactil de 8&rdquo;.</p>
            </p>
        </div>
        <div class="content-block last">
            <a href="http://www.ford.ro/cs/ContentServer?cid=1205106491960&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214539000072&amp;blobkey=id"
                    alt="Ford Focus RS Bi-Xenon headlamp"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Faruri care te ajuta sa vezi in viraje
            </h3>

            <p>

            <p>Farurile Bi-Xenon ale unui Focus RS nou nu sunt doar uimitoare; sunt si inteligente. Si aceasta deoarece
                urmeaza cu precizie drumul pe masura ce rotesti de volan, oferindu-ti o vizibilitate remarcabila. Pot,
                de asemenea, sa ajusteze modelul de iluminat al farurilor, in functie de viteza, de mediu si de
                conditii. Cele sapte moduri diferite includ setari specifice pentru atunci cand conduci pe strazi din
                oras, pe drumuri de tara, pe autostrazi sau in conditii meteo nefavorabile. </p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Performanta si Eficienta :: btfTabContent : 1205106490239 :: tabContent :  -->
<div id='tab2' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            PUTERNIC SI EFICIENT
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Focus RS poate sa iti asigure puterea si performanta </p>

        <p>de care ai nevoie pe pista, cu o </p>

        <p>eficienta a combustibilului pe care o vei aprecia in condusul de zi cu zi.</p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"><a
                href="http://www.ford.ro/cs/ContentServer?cid=1205106484827&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
                class="js-overlay" data-media-overlay='{"height":439, "width":780}'> <img
                    src="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214538997882&amp;blobkey=id"
                    alt="Ford Focus RS - 2.3-litre EcoBoost engine"/><span class="fv-overlay-icon"></span></a></div>
        <div class="content">
            <h3 class="bigHeading02">
                Tehnologie avansata pentru motoare EcoBoost de 2,3 litri
            </h3>

            <p>

            <p>Tehnologia revolutionara ce sta la baza motorului EcoBoost de 2,3 litri incorporeaza injectie directa de
                combustibil, sistem de distributie dual (admisie-evacuare) si turbocompresor cu canal dublu. <br> <br>
                Toate ajustate si calibrate special pentru modelul Focus RS, rezultatul fiind: putere maxima de 350 CP
                si cuplu maxim de 440 Nm (470 Nm supraalimentat). <br> <br> Reactia excelenta la treptele de viteza
                inferioare este secondata de o tractiune puternica in intervalul de mijloc. Iar intervalul superior cu
                turatie libera este setat la limita maxima de 6.800 rpm.</p>

            <div>&nbsp;</div>
            <p><a target="_blank" href="../../../www.youtube.com/watchfc1a.html?v=3uhUYBrfbzI">Urmareste filmul</a></p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Cea mai buna masina a noastra, proiectata de cele mai luminate minti ale noastre
            </h3>

            <p>

            <p>Folosind abilitatile, cunostintele si experienta dobandite cu Ford Racing, Echipa RS si ale operatiuni
                auto speciale (inclusiv Ken Block), Ford Performance a fost lansata cu o misiune clara - „Inovatie prin
                Performanta”. Focus RS este expresia perfecta a acestei filosofii. </p>
            </p>
        </div>
        <div class="img-column"><a
                href="http://www.ford.ro/cs/ContentServer?cid=1205106493807&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
                class="js-overlay" data-media-overlay='{"height":439, "width":780}'> <img
                    src="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214539000488&amp;blobkey=id"
                    alt="Ford Focus RS - Ford Performance"/><span class="fv-overlay-icon"></span></a></div>
    </article>
    <article class="content-column left">
        <div class="img-column"><a
                href="http://www.ford.ro/cs/ContentServer?cid=1205106486743&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
                class="js-overlay" data-media-overlay='{"height":439, "width":780}'> <img
                    src="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214538995978&amp;blobkey=id"
                    alt="Ford Focus RS gear system"/><span class="fv-overlay-icon"></span></a></div>
        <div class="content">
            <h3 class="bigHeading02">
                Sistem de transmisie avansat pentru schimbari extrem de rapide ale treptelor de viteza
            </h3>

            <p>

            <p>Puterea motorului este maximizata de o transmisie manuala cu sase trepte de viteza optimizata. <br> <br>
                Maneta mai scurta a schimbatorului si mecanismul revizuit au fost concepute pentru a asigura schimbari
                rapide si precise. Atat transmisia, cat si ambreiajul, au fost imbunatatite cu componente mai puternice
                si mai rezistente, pentru a face fata randamentului sporit al cuplului.</p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Putere de oprire remarcabila
            </h3>

            <p>

            <p>Echipat cu discuri frontale ventilate, de 350 mm, si etriere monobloc Brembo din aluminiu, cu patru
                pistoane, noul Focus RS incorporeaza cel mai puternic sistem de franare montat vreodata pe un model RS.
                Designul inteligent maximizeaza racirea franelor, ajutand la evitarea atenuarii, chiar si in conditii de
                utilizare dura, pe pista. Iar discurile frontale sunt prevazute si cu lamele de ventilare, pentru o
                racire superioara.</p>
            </p>
        </div>
        <div class="img-column"><a
                href="http://www.ford.ro/cs/ContentServer?cid=1205106486249&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
                class="js-overlay" data-media-overlay='{"height":439, "width":780}'> <img
                    src="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214538998556&amp;blobkey=id"
                    alt="Ford Focus RS wheel"/><span class="fv-overlay-icon"></span></a></div>
    </article>
    <article class="content-column left">
        <div class="img-column"><a
                href="http://www.ford.ro/cs/ContentServer?cid=1205106487440&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
                class="js-overlay" data-media-overlay='{"height":439, "width":780}'> <img
                    src="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214539000831&amp;blobkey=id"
                    alt="Ford Focus RS - Auto Start-Stop"/><span class="fv-overlay-icon"></span></a></div>
        <div class="content">
            <h3 class="bigHeading02">
                Folosesti mai putin combustibil cu functia Auto-Start-Stop
            </h3>

            <p>

            <p>Atunci cand Focus-ul tau. RS se opreste la semafor sau cand asteptiintr-o coloana, Auto-Start-Stop poate
                opri automat motorul (fara a opri insa alimentarea sistemelor esentiale, precum ventilatia, radioul si
                Ford SYNC). De indata ce esti gata sa pleci de pe loc, apasa pe pedala de ambreiaj si selecteaza prima
                treapta de viteza, ca de obicei, iar sistemul porneste din nou motorul. </p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Confort :: btfTabContent : 1205106485606 :: tabContent :  -->
<div id='tab3' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            BUCURA-TE LA MAXIMUM DE EXPERIENTA FOCUS RS
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>La exterior, Focus RS va atrage atentia. </p>

        <p>In interior, nimic nu te va distrage de la experienta de condus. </p>

        <p>Caracteristicile inteligente se combina cu tehnologia avansata pentru a ne asigura ca vei avea parte de
            fiecare data de o calatorie incantatoare.</p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"><a
                href="http://www.ford.ro/cs/ContentServer?cid=1205106488768&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
                class="js-overlay" data-media-overlay='{"height":439, "width":780}'> <img
                    src="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214538999649&amp;blobkey=id"
                    alt="Ford Focus RS centre console - Ford SYNC 2"/><span class="fv-overlay-icon"></span></a></div>
        <div class="content">
            <h3 class="bigHeading02">
                Ford SYNC 2. Tehnologie hands-free si cu ecran tactil avansata
            </h3>

            <p>

            <p>Sistemul Ford SYNC 2 din urmatoarea generatie iti permite sa conectezi telefonul mobil si playerul MP3 in
                regim wireless. Poti controla muzica, telefonul, sistemul de navigatie si climatizarea cu ajutorul unor
                comenzi vocale simple si intuitive sau prin intermediul ecranului tactil color de 8” (pe care il poti
                utiliza si pentru a vizualiza imagini).</p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Utilizare in comun a masinii fara probleme, cu ajutorul caracteristicii MyKey<sup>®</sup>
            </h3>

            <p>

            <p>Ford MyKey<sup>&reg;</sup> este conceputa pentru a-ti asigura linistea atunci cand imprumutii masina
                cuiva. Trebuie doar sa introducicheia in contact, sa pornesti masina si sa urmezi instructiunile simple
                pentru a programa restrictiile dorite pentru cheia respectiva. De exemplu, poti seta limita maxima de
                viteza, poti seta un semnal care sa atraga atentia asupra purtarii centurii de siguranta si poti
                controla volumul sistemului audio.</p>
            </p>
        </div>
        <div class="img-column"><a
                href="http://www.ford.ro/cs/ContentServer?cid=1205106490097&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
                class="js-overlay" data-media-overlay='{"height":439, "width":780}'> <img
                    src="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214538996846&amp;blobkey=id"
                    alt="Ford Focus RS - MyKey®"/><span class="fv-overlay-icon"></span></a></div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <a href="http://www.ford.ro/cs/ContentServer?cid=1205106485795&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214538998310&amp;blobkey=id"
                    alt="Ford Focus RS - Power-foldable mirrors"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Cu oglinzi care se pot proteja singure
            </h3>

            <p>

            <p>Pentru a evita deteriorarea accidentala, oglinzile laterale pliabile electric se pliaza catre interior
                dupa ce ai parcat. Atunci cand sunt rabatate, oglinzile protejeaza, de asemenea, elegantele indicatoare
                integrate.</p>
            </p>
        </div>
        <div class="content-block last">
            <a href="http://www.ford.ro/cs/ContentServer?cid=1205106492331&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214539000237&amp;blobkey=id"
                    alt="Ford Focus RS - Ford Easy Fuel"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Ford Easy-Fuel, pentru alimentari fara probleme
            </h3>

            <p>

            <p>Aceasta tehnologie utila face sa fie practic imposibila alimentarea gresita a masinii, deoarece duza
                pompei nu se va potrivi. Si pentru ca Easy-Fuel este un sistem fara buson, nu o sa mai ai de-a face
                niciodata cu un buson murdar.</p>
            </p>
        </div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <a href="http://www.ford.ro/cs/ContentServer?cid=1205106487575&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214539000918&amp;blobkey=id"
                    alt="Ford Focus RS - Ford Power Starter Button"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Porneste masina prin simpla atingere a unui buton
            </h3>

            <p>

            <p>Nu mai este nevoie sa folosesti cheia. Trebuie doar sa actionezi butonul de pornire Ford Power in timp ce
                tii ambreiajul apasat si motorul prinde viata.</p>
            </p>
        </div>
        <div class="content-block last">
            <a href="http://www.ford.ro/cs/ContentServer?cid=1205106484493&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214539000740&amp;blobkey=id"
                    alt="Ford Focus RS RECARO Shell Seat"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Scaune de curse Recaro
            </h3>

            <p>

            <p>Caracterul de inalta performanta al noului Focus RS este completat de scaunele sport Recaro. Proiectate
                ergonomic, acestea prezinta emblema RS specifica si panouri Nitrous Blue. Pernele laterale te vor
                sustine in siguranta si in mod confortabil in timpul condusului de inalta performanta. De asemenea, sunt
                disponibile, optional, scaune tip cochilie Recaro RS, cu panouri autentice, din material textil cu
                microfibre, specifice sporturilor cu motor.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <a href="http://www.ford.ro/cs/ContentServer?cid=1205106487203&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214538996337&amp;blobkey=id"
                    alt="Ford Focus RS interior - Advanced Cruise Control"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Un tempomat avansat
            </h3>

            <p>

            <p>Tempomatul adaptiv (ACC) este un sistem avansat de control al vitezei, care monitorizeaza drumul din fata
                cu ajutorul unui senzor radar, pentru o experienta a sofatului si mai relaxanta. <br>
                <br>
                ACC iti permite sa alegii viteza cu care doresti sa te deplasezi, iar sistemul va mentine masina la
                viteza respectiva. Cu toate acestea, daca sistemul detecteaza prezenta unui autovehicul in fata, va
                reduce viteza masinii pentru a pastra o distanta prestabilita intre masini. De indata ce drumul din fata
                este din nou liber, sistemul va reveni la viteza aleasa. <br>
                <br>
                ACC poate fi folosit la viteze intre 30 km/h (19 mph) si 180 km/h (112 mph)*. Este prevazut si cu
                sistemul de avertizare frontala, un sistem de monitorizare care te avertizeaza daca te apropii prea mult
                de vehiculul din fata. </p>
            </p>
        </div>
        <div class="content-block">
            <a href="http://www.ford.ro/cs/ContentServer?cid=1205106493943&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214539000578&amp;blobkey=id"
                    alt="Ford Focus RS windscreen - Quickclear"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Curata-ti parbrizul repede, cu optiunea de Curatare Rapida
            </h3>

            <p>

            <p>Aceasta dotare inteligenta este creata pentru a-ti permite sa pornesti rapid in diminetile geroase.
                Trebuie doar sa apasi pe un buton, iar sistemul poate sa dezghete parbrizul in cateva secunde, chiar si
                la temperaturi negative.</p>
            </p>
        </div>
        <div class="content-block last">
            <a href="http://www.ford.ro/cs/ContentServer?cid=1205106485204&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214538998057&amp;blobkey=id"
                    alt="Ford Focus RS - Rain-sensing wipers"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Stergatoare care se regleaza automat, in functie de ploaie
            </h3>

            <p>

            <p>Stergatoarele de parbriz cu senzor de ploaie se activeaza in secunda in care detecteaza stropi de apa pe
                parbrizul autovehiculului, iar apoi isi regleaza viteza pentru a face fata oricaror conditii meteo. Poti
                alege unul dintre cele sase niveluri de sensibilitate, care determina cat de multa umiditate trebuie sa
                se acumuleze inainte ca stergatoarele sa se activeze.</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Siguranta si Securitate :: btfTabContent : 1205106486486 :: tabContent :  -->
<div id='tab4' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            PERFORMANTA REMARCABILA. SIGURANTA EXCEPTIONALA.
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>O masina de inalta performanta are nevoie de un nivel de siguranta ridicat. De aceea, Focus RS este echipat
            cu o gama impresionanta de caracteristici avansate, concepute pentru a ajuta la protejarea ta si a
            pasagerilor tai.</p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"><a
                href="http://www.ford.ro/cs/ContentServer?cid=1205106494085&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
                class="js-overlay" data-media-overlay='{"height":439, "width":780}'> <img
                    src="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214539000654&amp;blobkey=id"
                    alt="Ford Focus RS wheel - advanced Intelligent Protection System"/><span
                    class="fv-overlay-icon"></span></a></div>
        <div class="content">
            <h3 class="bigHeading02">
                Sistemele de siguranta coordonate se activeaza intr-o fractiune de secunda
            </h3>

            <p>

            <p>Focus RS este echipat cu un sistem inteligent de protectie avansat (IPS), care coordoneaza o serie de
                sisteme de siguranta pentru a asigura protectie maxima tie si pasagerilor tai. Pe langa o caroserie care
                absoarbe impactul, o serie de airbaguri ajuta la protejarea ocupantilor masinii. Coloana de directie si
                pedalele sunt, de asemenea, concepute pentru a se retrage la distanta de sofer, ajutand la reducerea
                riscului de ranire in cazul unui accident.</p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Sisteme avansate pentru o franare mai controlata
            </h3>

            <p>

            <p>Sistemul de franare cu anti-blocare roti (ABS) rafinat si distributia electronica a fortei de franare
                conlucreaza pentru a asigura o franare mai bine controlata. Ansamblul franei a fost, de asemenea,
                imbunatatit pentru a garanta reactii mai rapide.</p>
            </p>
        </div>
        <div class="img-column"><a
                href="http://www.ford.ro/cs/ContentServer?cid=1205106489161&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
                class="js-overlay" data-media-overlay='{"height":439, "width":780}'> <img
                    src="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214538999815&amp;blobkey=id"
                    alt="Ford Focus RS wheel - Anti-lock braking system"/><span class="fv-overlay-icon"></span></a>
        </div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <a href="http://www.ford.ro/cs/ContentServer?cid=1205106489846&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214538996766&amp;blobkey=id"
                    alt="Ford Focus RS on the road - Hill Start Assist"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Un plus de control in cazul pornirilor in rampa
            </h3>

            <p>

            <p>Sistemul de asistenta la pornirea din rampa impiedica alunecarea in spate atunci cand pornesti din panta.
                Sistemul functioneaza prin mentinerea presiunii la nivelul sistemului de fanare, asigurandu-ti mai mult
                timp si control atunci cand muti piciorul de pe pedala de frana pe cea de acceleratie. </p>
            </p>
        </div>
        <div class="content-block last">
            <a href="http://www.ford.ro/cs/ContentServer?cid=1205106486863&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214538996167&amp;blobkey=id"
                    alt="Ford Focus RS on the road - Speed Limiter"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Seteaza propria limita de viteza, iar noul Focus RS o va respecta
            </h3>

            <p>

            <p>Fiind integrat in cadrul tempomatului, dispozitivul de limitare a vitezei iti permite sa iti setezi
                propria viteza maxima. Apoi, masina va respecta aceasta viteza, pentru ca tu sa va poti concentra
                exclusiv asupra drumului. Atunci cand vreti sa maresti viteza, apasa ferm pe pedala de acceleratie
                pentru a dezactiva sistemul.
            </p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <a href="http://www.ford.ro/cs/ContentServer?cid=1205106493687&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214538999157&amp;blobkey=id"
                    alt="Ford Focus RS rear-view mirror"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                O oglinda retrovizoare cu functie anti-orbire
            </h3>

            <p>

            <p>Sofatul pe timp de noapte ar fi mai usor daca nu ai fi orbit in mod constant de farurile autovehiculelor
                din spate. Oglinda retrovizoare heliomata automata inovatoare detecteaza automat reflexia farurilor din
                spate si reduce stralucirea luminii reflectate.</p>
            </p>
        </div>
        <div class="content-block">
            <a href="http://www.ford.ro/cs/ContentServer?cid=1205106484984&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214538997973&amp;blobkey=id"
                    alt="Ford Focus RS wheel - Tyre Pressure Monitoring System"/><span
                    class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Avertizare timpurie in cazul in care un pneu pierde presiune
            </h3>

            <p>

            <p>Daca vreunul dintre pneuri incepe sa piarda presiune in timpul deplasarii, sistemul de monitorizare a
                presiunii in pneuri te avertizeaza prin aprinderea unei pictograme pe panoul de bord, oferindu-ti sansa
                sa opresti in siguranta si sa remediezi problema.</p>
            </p>
        </div>
        <div class="content-block last">
            <a href="http://www.ford.ro/cs/ContentServer?cid=1205106485623&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214538998229&amp;blobkey=id"
                    alt="Ford Focus RS - Active City Stop"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Ajuta la un condus mai sigur in oras
            </h3>

            <p>

            <p>Accidentele in trafic la viteza mica, cu opriri si porniri frecvente, au loc mult prea des (mai ales pe
                strazile aglomerate din orase). Sistemul de oprire activa in oras este conceput pentru a te ajuta sa le
                eviti sau sa reduciimpactul acestora. Daca sistemul detecteaza ca masina din fata incetineste brusc, iar
                tu te deplasezi cu mai putin de 50 km/h, va actiona automat franele.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <a href="http://www.ford.ro/cs/ContentServer?cid=1205106488454&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE"
               class="js-overlay" data-media-overlay='{"height":439, "width":780}'><img
                    src="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpeg&amp;blobwhere=1214538999490&amp;blobkey=id"
                    alt="Ford Focus RS - Thatcham Category 1 alarm"/><span class="fv-overlay-icon"></span></a>

            <h3 class="bigHeading02">
                Protectie alarmant de buna
            </h3>

            <p>

            <p>Alarma Thatcham de categoria 1 este un sistem sofisticat, care se activeaza automat in momentul in care
                incui vehiculul. Daca este declansata de o intrare fortata, daca masina este ridicata sau daca senzorii
                detecteaza o miscare inauntru, alarma va emite un sunet puternic.</p>
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
<h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">Performanta si Eficienta</a></h2> -->
<!--</div>-->
<!--<div id='tab3' class="mp-tab-wrapper">
<h2><a href='#tab3' class="mp-tab omt_xd_mt_ti">Confort</a></h2> -->
<!--</div>-->
<!--<div id='tab4' class="mp-tab-wrapper">
<h2><a href='#tab4' class="mp-tab omt_xd_mt_ti">Siguranta si Securitate</a></h2> -->
<!--</div>-->
<!-- END [MidPageTabs] -->
</div>
</div>
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205106489583&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205110358908&amp;tabName=Accesorii&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="Accesorii.html#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205106489583&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205110358908&amp;tabName=Accesorii&amp;c=Page&amp;site=RORO4_ENGINE">Accesorii</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205110363694 -->
</li>
</ul>
</nav>
</div>
<article class="nameplate-main-content" id="tabs">
</article>
<!-- Bredcrumb Schema implementation for Primary Tabs-->
<nav class="breadCrumb" role="navigation" style="display: none">
    <ul itemscope itemtype="../../../schema.org/BreadcrumbList.html">
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
            var nameplateName = 'ford focus rs';
            googleAdServerNameplateName = nameplateName.toLowerCase();
            dataLayer.push({"nameplateName": googleAdServerNameplateName});
            if (typeof osbNameplateName != 'undefined') {
                osbNameplateName = osbNameplateName.toLowerCase();
                dataLayer.push({"nameplateName": osbNameplateName});
            }
            if (typeof bookingReferenceNumber != 'undefined') {
                dataLayer.push({"leadID": bookingReferenceNumber});
            }
            dataLayer.push({"pageTitle": 'Ford Focus RS 2016 Caracteristici | Ford RO'});
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
        src="../../../www.googletagmanager.com/nsbfd3.html?id=GTM-WL5HW9" height="0"
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
        src="http://www.ford.ro/cs/ContentServer?cid=1204986890525&amp;pagename=ENGInE%2Ftagging%2FOmnitureScript"></script>
<script type="text/javascript">var sford = new Object;
    sford.tabName = '';
    sford.pageName = 'brand:passenger:vehicle:features:<tab name>:ford focus rs';
    sford.dlwasSent = false;
    sford.eVar11 = 'brand:passenger:vehicle:features:<tab name>';
    sford.hier1 = 'vehicle:features:car:ford focus rs:2015';
    sford.tagViewPhoto = '';
    sford.tagHighlights = '';
    sford.tagDownload = '';
    s.pageName = 'brand:passenger:vehicle:features:<tab name>:ford focus rs';
    s.hier1 = 'vehicle:features:car:ford focus rs:2015';
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
    s.eVar16 = 'ford focus rs';
    s.prop16 = 'ford focus rs';
    sford.np = 'ford focus rs';
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
