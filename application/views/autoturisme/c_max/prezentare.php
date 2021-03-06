<script type="text/javascript">
    // mobile sniffer
    ForceRedirectUserAgents = 'android,iphone,blackberry';
    ForceRedirectUserAgentsBypass = 'Win64,Win32';
    ForceRedirectMinWidth = '480';
    MobileHomePageRedirectURL = 'http:\/\/m.ford.ro';
    MobileRedirectURL = MobileHomePageRedirectURL + '/autoturisme/noul-c-max/prezentare';
</script>
<div id="xAxis-detailed">
    <nav class="breadCrumb visuallyhidden" role="navigation">
        <ul itemprop="breadcrumb">
            <li class="home"><a href="/" data-selenium="breadcrumb_home" class="om_bc_li" title="Pagina principal&#259;">Pagina principal&#259;</a><span></span></li><li data-selenium="breadcrumb_cars"><a href="/Autoturisme" class="om_bc_li">
            Autoturisme
        </a><span></span></li><li data-selenium="breadcrumb_nameplate">C-MAX</li></ul>
    </nav>
    <script>
        var vehicleimagepackpresid = '1205084295775';
        var vehicleimagepackyear = 'NONE';
    </script>
    <div class="fblike-locale">ro_RO</div>
    <script>
        var googleAdServerNameplateId = 'AUTHORED';
        var googleAdServerNameplateName = 'C-MAX';
    </script>
    <script type= "text/javascript">
        var extend = function(obj, extObj) {
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
        var bootstrapVehicleData = {"vehicles":[{"strIntroToFord": " Noul","brand": "Ford","vehicleType": "PV","catalogId": "NONE","nameplate": "C-MAX","labelAvailableFrom": "&nbsp;","formattedCurrency": "","nameplateText": "Cu un nou design reproiectat complet, Ford C-MAX cu 5 locuri \u015Fi Grand C-MAX cu 7 locuri reprezint\u0103 combina\u0163ia perfect\u0103 dintre inova\u0163ie, stil \u015Fi flexibilitate.","imagePack": false,"hideVehicleImage": false,"images": [],"backgroundImagePath": ["/assets/img/c_max/1214493076517.jpg","null","null"],"disclaimerTextColor": ["364957",null,null],"current": true,"cid": "1205084251905","cta": [{"linkTitle": "DESCARC\u0102 BRO\u015EUR\u0102 ","linkURL": "\/SBE\/Brosura\/DescarcaBrosura","linkType": "primary","linkTarget": "_blank","omid": "va"},{"linkTitle": "\u00CENSCRIE-TE LA TEST DRIVE ","linkURL": "\/SBE\/TestDrive?shopcode=AUTHORED","linkType": "tertiary","linkTarget": "_blank","omid": "tr"}],"social": {"facebook": "https://facebook.com","facebookPage": "fordromania"},"disclaimer": "Modelul prezentat este Noul C-MAX","seriesCode": "AUTHORED","uscCode": "AUTHORED","presId": "1205084295775","promos": [{"imagePath": "/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobwhere=1214493775450&blobkey=id","overlay": {"height":435, "width":780},"link": "/cs/ContentServer?pagename=RORO4_ENGINE/EP2/common/promo/M48_PromoBlock&c=Promo_C&cid=1205087873310","text": "Promotie de lansare"}],"idf": {"options":[]}}]} || {};
        var retrieveUserOptions = JSON.parse( localStorage.getItem('userSelection')) || {};
        //FranciB: injecting and changing user selected angle image trigger by mid page tabs and on page reload.
        //In order to stop the flickering between the default image and selected angle image in the centre stage.
        if(retrieveUserOptions.selectedImageAngle !== (null || "" || undefined)){
            bootstrapVehicleData.vehicles[0].images = [retrieveUserOptions.selectedImageAngle];
        }
    </script>
    <div id="fb-root"></div>
    <section class="x-axis-wrapper" id="vvmWrapper">
        <div itemscope itemtype="http://schema.org/ImageObject">
            <ul class="nameplate x-axis" id="vvmRoot">
                <li class="default-nameplate-vehicle" style="background-image:url(/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobheader=image%2Fjpg&blobwhere=1214493076517&blobkey=id)">
                    <div class="layered-nameplate-image">
                        <div class="image-holder">
                        </div>
                    </div>
                    <aside class="nameplate-disclaimer style=color:#364957">
                        Modelul prezentat este Noul C-MAX
                    </aside>
                </li>
            </ul>
            <div itemscope itemtype="http://schema.org/Product" id="nameplateDetails" class="nameplate-vehicle">
                <!--the text description-->
                <div class="name-plate-text">
                    <p class="intro"> Noul</p>
                    <h1 class="bigHeading">
                        <span itemprop="model" itemscope itemtype="http://schema.org/Organization" class="mark">Ford</span>
                        <span itemprop="member" class="nameplate boldTxt">C-MAX</span>
                    </h1>
                    <!--The price-->
                    <!--The blurb-->
                    <p class="blurb">
                        Cu un nou design reproiectat complet, Ford C-MAX cu 5 locuri şi Grand C-MAX cu 7 locuri reprezintă combinaţia perfectă dintre inovaţie, stil şi flexibilitate.
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
        <!-- VIEW TEMPLATES -->
        <script type="text/x-handlebars-template" id="vehicleTemplate">
            {{#each vehicles}}
            <li>
                <div class="vehicle-background"
                {{#if current}}
                style="background:url({{backgroundImagePath.0.}})"
                {{else}}data-deferred='{"type" :"background", "url" :"{{backgroundImagePath.0.}}"}'
                {{/if}}
                ></div>
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
            <span itemprop="model" itemscope itemtype="http://schema.org/Organization" class="mark">{{brand}}</span>
            <span itemprop="member" class="nameplate boldTxt">{{nameplate}}</span>
        </h1>
        <!--The blurb-->
        <p class="blurb">{{nameplateText}}</p>
    </div>
</script>
<script type="text/x-handlebars-template" id="selectorTemplate">
    <a href="{{#if link}}{{link}}{{else}}#{{/if}}" class="vehicle-selector box-shadow{{#if className}} {{className}}-wrapper{{/if}}">
        <img src="{{#if options}}{{options.0.iconURL}} {{else}} {{#if iconURL}}{{iconURL}} {{else}}{{options.0.imagePath}}{{/if}} {{/if}}"/>
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
                <li tabindex="0" class="{{#if omid}}omv_pv_xd_st_{{omid}}{{/if}}{{#if selected}} selected{{/if}}" {{#if usc}}data-usc-code="{{this.usc}}{{/if}}" data-idx="{{this.idx}}">
                <img src="{{this.imagePath}}" alt="{{this.tooltipText}}"/>
                <span class="tooltip"><span class="arrow left {{../tooltipPlacement}}"></span><span>{{this.tooltipText}}</span></span>
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
        <span class="tooltip"><span>{{this.tooltipText}}</span><span class="arrow {{../tooltipPlacement}}"></span></span>
        {{/if}}
    </a>
</script>
<script type="text/x-handlebars-template" id="ctaTemplate">
    {{#each this}}
    {{#ifCond linkType '==' 'primary'}}
    <div class="btnLink box-shadow">
        {{/ifCond}}
        {{#ifCond linkType '==' 'secondary'}}
        <div class="btnLink light box-shadow">
            {{/ifCond}}
            {{#ifCond linkType '==' 'tertiary'}}
            <div class="link-wrapper slate">
                {{/ifCond}}
                <a href="{{linkURL}}" class="{{#ifCond linkType '==' 'tertiary'}}tertiary-link {{/ifCond}}om_pv_xd_{{omid}}" {{#ifCond linkTarget '!=' ''}}target="{{linkTarget}}"{{/ifCond}}>{{linkTitle}}</a>
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
        <img src="{{this}}" alt="{{../tooltipText}}" />
        {{/each}}
    </article>
    {{/each}}
</script>
<script type="text/x-handlebars-template" id="vehicleRolloverTemplate">
    {{#each rollovers}}
    <figure class="vehicle-preview-rollover {{className}}">
        <img src="{{hoverThumbnail}}" alt="{{nameplate}}." />
        <span class="nameplate boldTxt">{{nameplate}}</span>
        <p><span class="price-label">{{{labelAvailableFrom}}}</span>
            <span itemprop="price" class="price">{{{formattedCurrency}}}</span></p>
    </figure>
    {{/each}}
</script>
</section>
<aside class="fb-xaxis-icon">
    <div class="fb-like" data-href="http://www.facebook.com/fordromania" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true" data-font="tahoma"></div>
</aside>
<p id="xaxisOverviewDisclaimer" class="disclaimer specific"></p>
<section id="promoCarousel" class="promo-carousel box-shadow">
    <div id="promo-carousel-timer">7500</div>
    <div class="slide-wrapper">
        <article class="slate slide">
            <a class="js-overlay om_pv_ppci_1234" data-media-overlay='{"height":439, "width":780}' href='/cs/ContentServer?pagename=RORO4_ENGINE/EP2/common/promo/M48_PromoBlock&amp;c=Promo_C&amp;cid=1205087873310'>
<span class="active-promo-rover">
<span class="bg-opacity"></span>
<span class="overlay-icon"></span>
</span>
                <img src="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpg&amp;blobwhere=1214493775450&amp;blobkey=id" alt="Promotie de pre-lansare">
                <p class="promo-carousel-text"><span class="promo-carousel-bold">Promotie de lansare</span></p></a>
        </article>
    </div>
</section>
<section id="non-js-promoCarousel" class="non-js-promo-carousel box-shadow">
    <div class="slide-wrapper">
        <p class="promo-carousel-text"><a href="/cs/ContentServer?pagename=RORO4_ENGINE/EP2/common/promo/M48_PromoBlock&amp;c=Promo_C&amp;cid=Promotie de lansare" target="_blank">Promotie de pre-lansare</a></p>
    </div>
</section>
<script type="text/javascript"> var nameplateTabErrorMsg = 'Ne pare r&#259;u, momentan nu putem s&#259; &icirc;nc&#259;rc&#259;m con&#539;inutul pe care l-a&#539;i solicitat. &Icirc;ncerca&#539;i din nou, mai t&acirc;rziu.'; </script>
<section id="primary-tab-content" class="nameplate-tab-content" data-dynamic-tabcontent="true" data-siteterm-backtotop="Back To Top !!!">
    <div class="tab-wrapper">
        <nav class="tabs" id="primaryTabs">
            <ul>
                <!--  isBtfTab true -->
                <!--  tabUrl /cs/ContentServer?cid=1205084251905&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE -->
                <li><a href="/Autoturisme/NoulC-MAX/Info#primaryTabs" class=" "  data-ajaxlink="/cs/ContentServer?cid=1205084251905&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE">Descopera noul C-MAX</a>
                    <!-- secondary tabs -->
                    <!--  midPageTabId : 1205087696360 -->
                </li>
                <!--  isBtfTab  -->
                <!--  tabUrl /cs/ContentServer?cid=1205084251905&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205084251895&amp;tabName=Prezentare&amp;c=Page&amp;site=RORO4_ENGINE -->
                <!-- IntoID ::: articleAssetId -->
                <li class="selected"><a href="/Autoturisme/NoulC-MAX/Prezentare#primaryTabs" data-ajaxlink="/cs/ContentServer?cid=1205084251905&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205084251895&amp;tabName=Prezentare&amp;c=Page&amp;site=RORO4_ENGINE">Prezentare</a>
                    <!--This is where the main content for the selected tab will go -->
                    <!-- secondary tabs -->
                    <div class="secondary-tabs tab-content">
                        <nav class="sub-nav">
                            <ul>
                                <li><a href='#tab1' class='omt_'>Prezentare</a></li>
                            </ul>
                        </nav>
                        <!-- isBtfTab : from MidPageTabs true -->
                        <div class="innertab-wrapper">
                            <!--  tabTitle : Prezentare :: btfTabContent : 1205084251651 :: tabContent :  -->
                            <div id='tab1' class="secondary-tab-content">
                                <header class="intro-header">
                                    <h1 class="bigHeading">
                                        NOILE FORD <strong> C-MAX </strong> & <strong> GRAND C-MAX </strong>
                                    </h1>
                                    <span class="highlighter"></span>
                                    <p class="intro-text">
                                    <p>Viata de familie este intotdeauna... agitata. De aceea, noul Ford C-MAX este conceput sa iti usureze fiecare calatorie.<br> <br> Noile C-MAX cu cinci locuri, Grand C-MAX cu cinci sau sapte locuri: indiferent pe care il vei alege, te vei bucura de un nivel cu totul nou de flexibilitate, utilitate si eficienta.  <br> <br> Performanta plina de satisfactii, manevrabilitate sensibila la comenzi si o gama larga de tehnologii remarcabile. Foarte posibil sa fi gasit masina perfecta pentru tine.</p>
                                    </p>
                                </header>
                                <article class="content-column left">
                                    <div class="img-column"><a href="/cs/ContentServer?cid=1205084251376&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE" class="js-overlay" data-media-overlay='{"height":439, "width":780}'> <img src="/assets/img/c_max/1214492897651.jpg" alt="Stil ultramodern si tehnologie performanta intr-o masina de familie fara compromisuri." /><span class="fv-overlay-icon"></span></a></div>
                                    <div class="content">
                                        <h3 class="bigHeading02">
                                            C-MAX cu 5 locuri
                                        </h3>
                                        <p>
                                        <p>NOUL C-MAX: SPATIU SI CONFORT PENTRU CINCI PERSOANE<br> <br> O gama larga de tehnologii avansate, care ajuta la economisirea de timp si efort, inteligent incorporate intr-o masina flexibila si spatioasa pentru intreaga familie. <br> <br> Disponibil cu sistem hands-free de deschidere si inchidere a hayonului printr-o simpla miscare a piciorului pe sub bara de protectie din spate: ideal pentru situatiile in care ai mainile ocupate.</p>
                                        </p>
                                    </div>
                                </article>
                                <article class="content-column right">
                                    <div class="content">
                                        <h3 class="bigHeading02">
                                            Grand C-MAX cu 5 sau 7 locuri
                                        </h3>
                                        <p>
                                        <p>NOUL GRAND C-MAX: SPATIU FLEXIBIL PENTRU CINCI SAU SAPTE PERSOANE  <br> <br> Daca doresti versatilitate maxima, nu trebuie sa cauti mai departe de flexibilul Grand C-MAX. Un culoar de trecere util iti ofera acces facil la scaunele din spate, iar interiorul extrem de flexibil te ajuta sa profiti la maximum de viata de familie.<br> <br> Vei beneficia, de asemenea, de o lista lunga de caracteristici, sisteme si tehnologii, toate concepute pentru a-ti face viata mai usoara. Tehnologia de asistenta activa la parcare, de exemplu, te poate ajuta sa parchezi in spatii inguste, fara probleme si fara sa fie nevoie sa iti folosesti mainile.</p>
                                        </p>
                                    </div>
                                    <div class="img-column"><a href="/cs/ContentServer?cid=1205084251539&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE" class="js-overlay" data-media-overlay='{"height":439, "width":780}'> <img src="/assets/img/c_max/1214493075479.jpg" alt="Stil ultramodern si tehnologie performanta intr-o masina de familie fara compromisuri." /><span class="fv-overlay-icon"></span></a></div>
                                </article>
                            </div>
                            <!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
                            <!-- BEGIN [MidPageTabs] -->
                            <!--<div id='tab1' class="mp-tab-wrapper">
                            <h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Prezentare</a></h2> -->
                            <!--</div>-->
                            <!-- END [MidPageTabs] -->
                            <!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
                            <!-- BEGIN [MidPageTabs] -->
                            <!--<div id='tab1' class="mp-tab-wrapper">
                            <h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Prezentare</a></h2> -->
                            <!--</div>-->
                            <!-- END [MidPageTabs] -->
                            <!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
                            <!-- BEGIN [MidPageTabs] -->
                            <!--<div id='tab1' class="mp-tab-wrapper">
                            <h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Prezentare</a></h2> -->
                            <!--</div>-->
                            <!-- END [MidPageTabs] -->
                            <!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
                            <!-- BEGIN [MidPageTabs] -->
                            <!--<div id='tab1' class="mp-tab-wrapper">
                            <h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Prezentare</a></h2> -->
                            <!--</div>-->
                            <!-- END [MidPageTabs] -->
                        </div>
                    </div>
                </li>
                <!--  isBtfTab  -->
                <!--  tabUrl /cs/ContentServer?cid=1205084251905&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205087862858&amp;tabName=PreturiSiPromotii&amp;c=Page&amp;site=RORO4_ENGINE -->
                <li><a href="/Autoturisme/NoulC-MAX/PreturiSiPromotii#primaryTabs" class=" "  data-ajaxlink="/cs/ContentServer?cid=1205084251905&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205087862858&amp;tabName=PreturiSiPromotii&amp;c=Page&amp;site=RORO4_ENGINE">Preturi si promotii</a>
                    <!-- secondary tabs -->
                    <!--  midPageTabId : 1205087862917 -->
                </li>
                <!--  isBtfTab  -->
                <!--  tabUrl /cs/ContentServer?cid=1205084251905&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205084252407&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE -->
                <li><a href="/Autoturisme/NoulC-MAX/Design#primaryTabs" class=" "  data-ajaxlink="/cs/ContentServer?cid=1205084251905&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205084252407&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE">Design</a>
                    <!-- secondary tabs -->
                    <!--  midPageTabId : 1205084251878 -->
                </li>
                <!--  isBtfTab  -->
                <!--  tabUrl /cs/ContentServer?cid=1205084251905&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205084251715&amp;tabName=Caracteristici&amp;c=Page&amp;site=RORO4_ENGINE -->
                <li><a href="/Autoturisme/NoulC-MAX/Caracteristici#primaryTabs" class=" "  data-ajaxlink="/cs/ContentServer?cid=1205084251905&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205084251715&amp;tabName=Caracteristici&amp;c=Page&amp;site=RORO4_ENGINE">Caracteristici</a>
                    <!-- secondary tabs -->
                    <!--  midPageTabId : 1205084252383 -->
                </li>
            </ul>
        </nav>
    </div>
    <article class="nameplate-main-content" id="tabs">
    </article>
</section>
<!-- nosc comp -->

</div>