<script type="text/javascript">
    // mobile sniffer
    ForceRedirectUserAgents = 'android,iphone,blackberry';
    ForceRedirectUserAgentsBypass = 'Win64,Win32';
    ForceRedirectMinWidth = '480';
    MobileHomePageRedirectURL = 'http:\/\/m.ford.ro';
    MobileRedirectURL = MobileHomePageRedirectURL + '/autoturisme/noul-c-max/promotie-prelansare';
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
<li><a href="/Autoturisme/NoulC-MAX/Prezentare#primaryTabs" class=" "  data-ajaxlink="/cs/ContentServer?cid=1205084251905&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205084251895&amp;tabName=Prezentare&amp;c=Page&amp;site=RORO4_ENGINE">Prezentare</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205084252043 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205084251905&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205087862858&amp;tabName=PreturiSiPromotii&amp;c=Page&amp;site=RORO4_ENGINE -->
<!-- IntoID ::: articleAssetId -->
<li class="selected"><a href="/Autoturisme/NoulC-MAX/PreturiSiPromotii#primaryTabs" data-ajaxlink="/cs/ContentServer?cid=1205084251905&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205087862858&amp;tabName=PreturiSiPromotii&amp;c=Page&amp;site=RORO4_ENGINE">Preturi si promotii</a>
<!--This is where the main content for the selected tab will go -->
<!-- secondary tabs -->
<div class="secondary-tabs tab-content">
<nav class="sub-nav">
    <ul>
        <li><a href='#tab1' class='omt_'> PROMOTII</a></li>
        <li><a href='#tab2' class='omt_'>PRETURI </a></li>
    </ul>
</nav>
<!-- isBtfTab : from MidPageTabs true -->
<div class="innertab-wrapper">
<!--  tabTitle :  PROMOTII :: btfTabContent :  :: tabContent : 1205087855701 -->
<!-- BEGIN [MidPageTabs] -->
<!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti"> PROMOTII</a></h2> -->
<div id='tab1' class="secondary-tab-content">
    <section class="bti-wrapper">
        <article class="bti-item">
            <header class="bti-title">  </header>
            <div class="bti-body">
                <div class="abstract">
                    <div><span style="font-size: medium;">Noul C-MAX &ndash; Inovativ, flexibil şi eficient!</span><br> <br> De acum te poţi concentra pe aventură şi pe momentele plăcute - tehnologiile noului Ford C-MAX &icirc;ţi vor asigura confortul &icirc;n toate călătoriile alături de familie! Iar un prim astfel de moment plăcut &icirc;ţi oferim chiar acum: oferta specială pentru <b>noul C-MAX, la doar 13.750 &euro;(TVA inclus)*.</b>  <br> <br> Beneficiezi de dotări avansate, fie că este vorba de siguranţă, de confort sau de eficienţă:</div> <ul>     <li>airbaguri frontale, lateral şi cortină;</li>     <li>Sistem Ford MyKey;</li>     <li>Sistem de monitorizare a presiunii &icirc;n pneuri;</li>     <li>Oglinzi electrice şi &icirc;ncălzite;</li>     <li>system Ford ECO Mode cu indicator pentru schimbarea vitezelor;</li> </ul> <div>Iar propulsorul EcoBoost de 1 litru, puternic şi economic, premiat trei ani consecutivi ca fiind cel mai bun motor din lume, te va duce şi mai departe cu un singur plin.<br> <br> &Icirc;n plus, adaugă <strong>pachetul Trend la doar 250 &euro;</strong> (TVA inclus), faţă de 2000 &euro;, valoarea acestuia, ca să beneficiezi de şi mai multe dotări:</div> <ul>     <li>SYNC 2, cu touch screen si sistem de asistenţă pentru situaţii de urgenţă</li>     <li>Aer condiţionat automat, cu zonă dublă de control (DEATC)</li>     <li>Faruri de ceaţă</li>     <li>Cotieră centrală</li>     <li>Covoraşe faţă şi spate</li> </ul> <div>De asemenea, poţi beneficia de finanţare prin programul Prima Maşină de la Ford. Creat &icirc;n premieră pentru Rom&acirc;nia, programul Prima Maşină de la Ford continuă să fie mai ofertant ca niciodată! Avantaje:</div> <ul>     <li>4,57% dobanda fixa,</li>     <li>comision de administrare 0%</li>     <li>comision de analiza 0 RON</li>     <li>DAE: 4,67%</li>     <li>Aprobare in 2 ore, in showroom-urile Ford</li> </ul> <div>Contactează acum cel mai apropiat dealer pentru un test drive şi detalii suplimentare!<br> <br> <span style="font-size: x-small;">*Oferta este valabilă &icirc;n limita stocului disponibil, pentru Ford C-Max  Trend Compact, 1.0 l EcoBoost, 100 CP, consum mixt (l/100 km): 5.1, emisii CO2 (g/km): 117, la toti dealerii Ford participanţi la promoţie. Pentru un autoturism &icirc;n valoare de 61,685 lei (cu TVA), avans 3.084,25 lei (minim 5%), valoarea totală a creditului va fi de 58.600,75 lei pe 60 luni: rata anuală a dob&acirc;nzii (fixă) 4,57%, comision de analiză dosar 0 lei, comision lunar de administrare credit 0 lei, valoarea ratei lunare (pentru rate egale) 1.094,4 lei, valoarea totală platibilă 65.662 lei, DAE 4,67%. &Icirc;n calculul ratei lunare nu s-a inclus asigurarea opţională de viaţă şi asigurarea CASCO. &Icirc;n cazul &Icirc;n care se optează pentru asigurarea (facultativă) de viaţă, rata lunara devine 1.185 lei.</span></div>
                </div>
            </div>
        </article>
    </section>
</div>
<!--</div>-->
<!--<div id='tab2' class="mp-tab-wrapper">
<h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">PRETURI </a></h2> -->
<div id='tab2' class="secondary-tab-content">
    <section class="bti-wrapper">
        <article class="bti-item">
            <header class="bti-title">  </header>
            <div class="bti-body">
                <div class="abstract">
                    <span style="font-size: medium;">Liste de preţuri şi broşuri</span><br><br>
                    <div>Dacă te interesează un anumit model, consultă ofertele noastre actuale. Sau vizitează cel mai apropiat dealer pentru cele mai bune oferte disponibile<br>
                        <br>
                        <a TITLE="Listă de prețuri Ford C-MAX - Compact (963 KB)" HREF="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheadervalue1=attachment%3Bfilename%3D%22Lista+de+preturi+Ford+C-MAX+-+Compact.pdf%22&amp;blobheadervalue2=abinary%3Bcharset%3DUTF-8&amp;blobheadername1=Content-Disposition&amp;blobheadername2=MDT-Type&amp;blobheader=application%2Fpdf&amp;blobwhere=1214493775557&amp;blobkey=id" CLASS="download" onClick="if (typeof sford == 'object') omnitureLinkDownloadClick('fleet:pdf download:car:price list','','','','','pdf download','',false,'ford c-max','2015','car');" ><u>Descarcă lista de preţuri a noului Ford C-MAX</u></a><u><br>
                        </u><a TITLE="Listă de prețuri Ford C-MAX - Grand (835 KB)" HREF="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheadervalue1=attachment%3Bfilename%3D%22Lista+de+preturi+Ford+C-MAX+-+Grand.pdf%22&amp;blobheadervalue2=abinary%3Bcharset%3DUTF-8&amp;blobheadername1=Content-Disposition&amp;blobheadername2=MDT-Type&amp;blobheader=application%2Fpdf&amp;blobwhere=1214493968851&amp;blobkey=id" CLASS="download" onClick="if (typeof sford == 'object') omnitureLinkDownloadClick('fleet:pdf download:car:price list','','','','','pdf download','',false,'ford c-max','2015','car');" ><u>Descarcă lista de preţuri a noului Ford Grand C-MAX</u></a><br>
                        <br>
                        Fişierul &icirc;n format PDF a fost creat pentru a-ţi permite să vizualizezi şi să tipăreşti fişiere fără a avea nevoie de programul &icirc;n care au fost create iniţial. Adobe&trade; &icirc;ţi pune la dispoziţie o aplicaţie software gratuită (Acrobat Reader) care &icirc;ţi permite să lucrezi cu aceste fişiere. Dacă ai instalat deja această aplicaţie pe computerul tău, &icirc;n mod normal o poţi găsi la &quot;Programe&quot;, &icirc;n &quot;Meniul Start&quot;. &Icirc;n caz contrar, acceseză link-ul de mai jos pentru a o descărca.</div>
                    <div></div>
                    <div><br>
                        <br>
                        <a target="_blank" href="http://www.adobe.com/"><strong>Descarcă Acrobat Reader de pe situl adobe.com </strong></a></div>
                </div>
            </div>
        </article>
    </section>
</div>
<!--</div>-->
<!-- END [MidPageTabs] -->
<!--  tabTitle : PRETURI  :: btfTabContent :  :: tabContent : 1205087856104 -->
<!-- BEGIN [MidPageTabs] -->
<!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti"> PROMOTII</a></h2> -->
<div id='tab1' class="secondary-tab-content">
    <section class="bti-wrapper">
        <article class="bti-item">
            <header class="bti-title">  </header>
            <div class="bti-body">
                <div class="abstract">
                    <div><span style="font-size: medium;">Noul C-MAX &ndash; Inovativ, flexibil şi eficient!</span><br> <br> De acum te poţi concentra pe aventură şi pe momentele plăcute - tehnologiile noului Ford C-MAX &icirc;ţi vor asigura confortul &icirc;n toate călătoriile alături de familie! Iar un prim astfel de moment plăcut &icirc;ţi oferim chiar acum: oferta specială pentru <b>noul C-MAX, la doar 13.750 &euro;(TVA inclus)*.</b>  <br> <br> Beneficiezi de dotări avansate, fie că este vorba de siguranţă, de confort sau de eficienţă:</div> <ul>     <li>airbaguri frontale, lateral şi cortină;</li>     <li>Sistem Ford MyKey;</li>     <li>Sistem de monitorizare a presiunii &icirc;n pneuri;</li>     <li>Oglinzi electrice şi &icirc;ncălzite;</li>     <li>system Ford ECO Mode cu indicator pentru schimbarea vitezelor;</li> </ul> <div>Iar propulsorul EcoBoost de 1 litru, puternic şi economic, premiat trei ani consecutivi ca fiind cel mai bun motor din lume, te va duce şi mai departe cu un singur plin.<br> <br> &Icirc;n plus, adaugă <strong>pachetul Trend la doar 250 &euro;</strong> (TVA inclus), faţă de 2000 &euro;, valoarea acestuia, ca să beneficiezi de şi mai multe dotări:</div> <ul>     <li>SYNC 2, cu touch screen si sistem de asistenţă pentru situaţii de urgenţă</li>     <li>Aer condiţionat automat, cu zonă dublă de control (DEATC)</li>     <li>Faruri de ceaţă</li>     <li>Cotieră centrală</li>     <li>Covoraşe faţă şi spate</li> </ul> <div>De asemenea, poţi beneficia de finanţare prin programul Prima Maşină de la Ford. Creat &icirc;n premieră pentru Rom&acirc;nia, programul Prima Maşină de la Ford continuă să fie mai ofertant ca niciodată! Avantaje:</div> <ul>     <li>4,57% dobanda fixa,</li>     <li>comision de administrare 0%</li>     <li>comision de analiza 0 RON</li>     <li>DAE: 4,67%</li>     <li>Aprobare in 2 ore, in showroom-urile Ford</li> </ul> <div>Contactează acum cel mai apropiat dealer pentru un test drive şi detalii suplimentare!<br> <br> <span style="font-size: x-small;">*Oferta este valabilă &icirc;n limita stocului disponibil, pentru Ford C-Max  Trend Compact, 1.0 l EcoBoost, 100 CP, consum mixt (l/100 km): 5.1, emisii CO2 (g/km): 117, la toti dealerii Ford participanţi la promoţie. Pentru un autoturism &icirc;n valoare de 61,685 lei (cu TVA), avans 3.084,25 lei (minim 5%), valoarea totală a creditului va fi de 58.600,75 lei pe 60 luni: rata anuală a dob&acirc;nzii (fixă) 4,57%, comision de analiză dosar 0 lei, comision lunar de administrare credit 0 lei, valoarea ratei lunare (pentru rate egale) 1.094,4 lei, valoarea totală platibilă 65.662 lei, DAE 4,67%. &Icirc;n calculul ratei lunare nu s-a inclus asigurarea opţională de viaţă şi asigurarea CASCO. &Icirc;n cazul &Icirc;n care se optează pentru asigurarea (facultativă) de viaţă, rata lunara devine 1.185 lei.</span></div>
                </div>
            </div>
        </article>
    </section>
</div>
<!--</div>-->
<!--<div id='tab2' class="mp-tab-wrapper">
<h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">PRETURI </a></h2> -->
<div id='tab2' class="secondary-tab-content">
    <section class="bti-wrapper">
        <article class="bti-item">
            <header class="bti-title">  </header>
            <div class="bti-body">
                <div class="abstract">
                    <span style="font-size: medium;">Liste de preţuri şi broşuri</span><br><br>
                    <div>Dacă te interesează un anumit model, consultă ofertele noastre actuale. Sau vizitează cel mai apropiat dealer pentru cele mai bune oferte disponibile<br>
                        <br>
                        <a TITLE="Listă de prețuri Ford C-MAX - Compact (963 KB)" HREF="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheadervalue1=attachment%3Bfilename%3D%22Lista+de+preturi+Ford+C-MAX+-+Compact.pdf%22&amp;blobheadervalue2=abinary%3Bcharset%3DUTF-8&amp;blobheadername1=Content-Disposition&amp;blobheadername2=MDT-Type&amp;blobheader=application%2Fpdf&amp;blobwhere=1214493775557&amp;blobkey=id" CLASS="download" onClick="if (typeof sford == 'object') omnitureLinkDownloadClick('fleet:pdf download:car:price list','','','','','pdf download','',false,'ford c-max','2015','car');" ><u>Descarcă lista de preţuri a noului Ford C-MAX</u></a><u><br>
                        </u><a TITLE="Listă de prețuri Ford C-MAX - Grand (835 KB)" HREF="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheadervalue1=attachment%3Bfilename%3D%22Lista+de+preturi+Ford+C-MAX+-+Grand.pdf%22&amp;blobheadervalue2=abinary%3Bcharset%3DUTF-8&amp;blobheadername1=Content-Disposition&amp;blobheadername2=MDT-Type&amp;blobheader=application%2Fpdf&amp;blobwhere=1214493968851&amp;blobkey=id" CLASS="download" onClick="if (typeof sford == 'object') omnitureLinkDownloadClick('fleet:pdf download:car:price list','','','','','pdf download','',false,'ford c-max','2015','car');" ><u>Descarcă lista de preţuri a noului Ford Grand C-MAX</u></a><br>
                        <br>
                        Fişierul &icirc;n format PDF a fost creat pentru a-ţi permite să vizualizezi şi să tipăreşti fişiere fără a avea nevoie de programul &icirc;n care au fost create iniţial. Adobe&trade; &icirc;ţi pune la dispoziţie o aplicaţie software gratuită (Acrobat Reader) care &icirc;ţi permite să lucrezi cu aceste fişiere. Dacă ai instalat deja această aplicaţie pe computerul tău, &icirc;n mod normal o poţi găsi la &quot;Programe&quot;, &icirc;n &quot;Meniul Start&quot;. &Icirc;n caz contrar, acceseză link-ul de mai jos pentru a o descărca.</div>
                    <div></div>
                    <div><br>
                        <br>
                        <a target="_blank" href="http://www.adobe.com/"><strong>Descarcă Acrobat Reader de pe situl adobe.com </strong></a></div>
                </div>
            </div>
        </article>
    </section>
</div>
<!--</div>-->
<!-- END [MidPageTabs] -->
<!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
<!-- BEGIN [MidPageTabs] -->
<!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti"> PROMOTII</a></h2> -->
<div id='tab1' class="secondary-tab-content">
    <section class="bti-wrapper">
        <article class="bti-item">
            <header class="bti-title">  </header>
            <div class="bti-body">
                <div class="abstract">
                    <div><span style="font-size: medium;">Noul C-MAX &ndash; Inovativ, flexibil şi eficient!</span><br> <br> De acum te poţi concentra pe aventură şi pe momentele plăcute - tehnologiile noului Ford C-MAX &icirc;ţi vor asigura confortul &icirc;n toate călătoriile alături de familie! Iar un prim astfel de moment plăcut &icirc;ţi oferim chiar acum: oferta specială pentru <b>noul C-MAX, la doar 13.750 &euro;(TVA inclus)*.</b>  <br> <br> Beneficiezi de dotări avansate, fie că este vorba de siguranţă, de confort sau de eficienţă:</div> <ul>     <li>airbaguri frontale, lateral şi cortină;</li>     <li>Sistem Ford MyKey;</li>     <li>Sistem de monitorizare a presiunii &icirc;n pneuri;</li>     <li>Oglinzi electrice şi &icirc;ncălzite;</li>     <li>system Ford ECO Mode cu indicator pentru schimbarea vitezelor;</li> </ul> <div>Iar propulsorul EcoBoost de 1 litru, puternic şi economic, premiat trei ani consecutivi ca fiind cel mai bun motor din lume, te va duce şi mai departe cu un singur plin.<br> <br> &Icirc;n plus, adaugă <strong>pachetul Trend la doar 250 &euro;</strong> (TVA inclus), faţă de 2000 &euro;, valoarea acestuia, ca să beneficiezi de şi mai multe dotări:</div> <ul>     <li>SYNC 2, cu touch screen si sistem de asistenţă pentru situaţii de urgenţă</li>     <li>Aer condiţionat automat, cu zonă dublă de control (DEATC)</li>     <li>Faruri de ceaţă</li>     <li>Cotieră centrală</li>     <li>Covoraşe faţă şi spate</li> </ul> <div>De asemenea, poţi beneficia de finanţare prin programul Prima Maşină de la Ford. Creat &icirc;n premieră pentru Rom&acirc;nia, programul Prima Maşină de la Ford continuă să fie mai ofertant ca niciodată! Avantaje:</div> <ul>     <li>4,57% dobanda fixa,</li>     <li>comision de administrare 0%</li>     <li>comision de analiza 0 RON</li>     <li>DAE: 4,67%</li>     <li>Aprobare in 2 ore, in showroom-urile Ford</li> </ul> <div>Contactează acum cel mai apropiat dealer pentru un test drive şi detalii suplimentare!<br> <br> <span style="font-size: x-small;">*Oferta este valabilă &icirc;n limita stocului disponibil, pentru Ford C-Max  Trend Compact, 1.0 l EcoBoost, 100 CP, consum mixt (l/100 km): 5.1, emisii CO2 (g/km): 117, la toti dealerii Ford participanţi la promoţie. Pentru un autoturism &icirc;n valoare de 61,685 lei (cu TVA), avans 3.084,25 lei (minim 5%), valoarea totală a creditului va fi de 58.600,75 lei pe 60 luni: rata anuală a dob&acirc;nzii (fixă) 4,57%, comision de analiză dosar 0 lei, comision lunar de administrare credit 0 lei, valoarea ratei lunare (pentru rate egale) 1.094,4 lei, valoarea totală platibilă 65.662 lei, DAE 4,67%. &Icirc;n calculul ratei lunare nu s-a inclus asigurarea opţională de viaţă şi asigurarea CASCO. &Icirc;n cazul &Icirc;n care se optează pentru asigurarea (facultativă) de viaţă, rata lunara devine 1.185 lei.</span></div>
                </div>
            </div>
        </article>
    </section>
</div>
<!--</div>-->
<!--<div id='tab2' class="mp-tab-wrapper">
<h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">PRETURI </a></h2> -->
<div id='tab2' class="secondary-tab-content">
    <section class="bti-wrapper">
        <article class="bti-item">
            <header class="bti-title">  </header>
            <div class="bti-body">
                <div class="abstract">
                    <span style="font-size: medium;">Liste de preţuri şi broşuri</span><br><br>
                    <div>Dacă te interesează un anumit model, consultă ofertele noastre actuale. Sau vizitează cel mai apropiat dealer pentru cele mai bune oferte disponibile<br>
                        <br>
                        <a TITLE="Listă de prețuri Ford C-MAX - Compact (963 KB)" HREF="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheadervalue1=attachment%3Bfilename%3D%22Lista+de+preturi+Ford+C-MAX+-+Compact.pdf%22&amp;blobheadervalue2=abinary%3Bcharset%3DUTF-8&amp;blobheadername1=Content-Disposition&amp;blobheadername2=MDT-Type&amp;blobheader=application%2Fpdf&amp;blobwhere=1214493775557&amp;blobkey=id" CLASS="download" onClick="if (typeof sford == 'object') omnitureLinkDownloadClick('fleet:pdf download:car:price list','','','','','pdf download','',false,'ford c-max','2015','car');" ><u>Descarcă lista de preţuri a noului Ford C-MAX</u></a><u><br>
                        </u><a TITLE="Listă de prețuri Ford C-MAX - Grand (835 KB)" HREF="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheadervalue1=attachment%3Bfilename%3D%22Lista+de+preturi+Ford+C-MAX+-+Grand.pdf%22&amp;blobheadervalue2=abinary%3Bcharset%3DUTF-8&amp;blobheadername1=Content-Disposition&amp;blobheadername2=MDT-Type&amp;blobheader=application%2Fpdf&amp;blobwhere=1214493968851&amp;blobkey=id" CLASS="download" onClick="if (typeof sford == 'object') omnitureLinkDownloadClick('fleet:pdf download:car:price list','','','','','pdf download','',false,'ford c-max','2015','car');" ><u>Descarcă lista de preţuri a noului Ford Grand C-MAX</u></a><br>
                        <br>
                        Fişierul &icirc;n format PDF a fost creat pentru a-ţi permite să vizualizezi şi să tipăreşti fişiere fără a avea nevoie de programul &icirc;n care au fost create iniţial. Adobe&trade; &icirc;ţi pune la dispoziţie o aplicaţie software gratuită (Acrobat Reader) care &icirc;ţi permite să lucrezi cu aceste fişiere. Dacă ai instalat deja această aplicaţie pe computerul tău, &icirc;n mod normal o poţi găsi la &quot;Programe&quot;, &icirc;n &quot;Meniul Start&quot;. &Icirc;n caz contrar, acceseză link-ul de mai jos pentru a o descărca.</div>
                    <div></div>
                    <div><br>
                        <br>
                        <a target="_blank" href="http://www.adobe.com/"><strong>Descarcă Acrobat Reader de pe situl adobe.com </strong></a></div>
                </div>
            </div>
        </article>
    </section>
</div>
<!--</div>-->
<!-- END [MidPageTabs] -->
<!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
<!-- BEGIN [MidPageTabs] -->
<!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti"> PROMOTII</a></h2> -->
<div id='tab1' class="secondary-tab-content">
    <section class="bti-wrapper">
        <article class="bti-item">
            <header class="bti-title">  </header>
            <div class="bti-body">
                <div class="abstract">
                    <div><span style="font-size: medium;">Noul C-MAX &ndash; Inovativ, flexibil şi eficient!</span><br> <br> De acum te poţi concentra pe aventură şi pe momentele plăcute - tehnologiile noului Ford C-MAX &icirc;ţi vor asigura confortul &icirc;n toate călătoriile alături de familie! Iar un prim astfel de moment plăcut &icirc;ţi oferim chiar acum: oferta specială pentru <b>noul C-MAX, la doar 13.750 &euro;(TVA inclus)*.</b>  <br> <br> Beneficiezi de dotări avansate, fie că este vorba de siguranţă, de confort sau de eficienţă:</div> <ul>     <li>airbaguri frontale, lateral şi cortină;</li>     <li>Sistem Ford MyKey;</li>     <li>Sistem de monitorizare a presiunii &icirc;n pneuri;</li>     <li>Oglinzi electrice şi &icirc;ncălzite;</li>     <li>system Ford ECO Mode cu indicator pentru schimbarea vitezelor;</li> </ul> <div>Iar propulsorul EcoBoost de 1 litru, puternic şi economic, premiat trei ani consecutivi ca fiind cel mai bun motor din lume, te va duce şi mai departe cu un singur plin.<br> <br> &Icirc;n plus, adaugă <strong>pachetul Trend la doar 250 &euro;</strong> (TVA inclus), faţă de 2000 &euro;, valoarea acestuia, ca să beneficiezi de şi mai multe dotări:</div> <ul>     <li>SYNC 2, cu touch screen si sistem de asistenţă pentru situaţii de urgenţă</li>     <li>Aer condiţionat automat, cu zonă dublă de control (DEATC)</li>     <li>Faruri de ceaţă</li>     <li>Cotieră centrală</li>     <li>Covoraşe faţă şi spate</li> </ul> <div>De asemenea, poţi beneficia de finanţare prin programul Prima Maşină de la Ford. Creat &icirc;n premieră pentru Rom&acirc;nia, programul Prima Maşină de la Ford continuă să fie mai ofertant ca niciodată! Avantaje:</div> <ul>     <li>4,57% dobanda fixa,</li>     <li>comision de administrare 0%</li>     <li>comision de analiza 0 RON</li>     <li>DAE: 4,67%</li>     <li>Aprobare in 2 ore, in showroom-urile Ford</li> </ul> <div>Contactează acum cel mai apropiat dealer pentru un test drive şi detalii suplimentare!<br> <br> <span style="font-size: x-small;">*Oferta este valabilă &icirc;n limita stocului disponibil, pentru Ford C-Max  Trend Compact, 1.0 l EcoBoost, 100 CP, consum mixt (l/100 km): 5.1, emisii CO2 (g/km): 117, la toti dealerii Ford participanţi la promoţie. Pentru un autoturism &icirc;n valoare de 61,685 lei (cu TVA), avans 3.084,25 lei (minim 5%), valoarea totală a creditului va fi de 58.600,75 lei pe 60 luni: rata anuală a dob&acirc;nzii (fixă) 4,57%, comision de analiză dosar 0 lei, comision lunar de administrare credit 0 lei, valoarea ratei lunare (pentru rate egale) 1.094,4 lei, valoarea totală platibilă 65.662 lei, DAE 4,67%. &Icirc;n calculul ratei lunare nu s-a inclus asigurarea opţională de viaţă şi asigurarea CASCO. &Icirc;n cazul &Icirc;n care se optează pentru asigurarea (facultativă) de viaţă, rata lunara devine 1.185 lei.</span></div>
                </div>
            </div>
        </article>
    </section>
</div>
<!--</div>-->
<!--<div id='tab2' class="mp-tab-wrapper">
<h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">PRETURI </a></h2> -->
<div id='tab2' class="secondary-tab-content">
    <section class="bti-wrapper">
        <article class="bti-item">
            <header class="bti-title">  </header>
            <div class="bti-body">
                <div class="abstract">
                    <span style="font-size: medium;">Liste de preţuri şi broşuri</span><br><br>
                    <div>Dacă te interesează un anumit model, consultă ofertele noastre actuale. Sau vizitează cel mai apropiat dealer pentru cele mai bune oferte disponibile<br>
                        <br>
                        <a TITLE="Listă de prețuri Ford C-MAX - Compact (963 KB)" HREF="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheadervalue1=attachment%3Bfilename%3D%22Lista+de+preturi+Ford+C-MAX+-+Compact.pdf%22&amp;blobheadervalue2=abinary%3Bcharset%3DUTF-8&amp;blobheadername1=Content-Disposition&amp;blobheadername2=MDT-Type&amp;blobheader=application%2Fpdf&amp;blobwhere=1214493775557&amp;blobkey=id" CLASS="download" onClick="if (typeof sford == 'object') omnitureLinkDownloadClick('fleet:pdf download:car:price list','','','','','pdf download','',false,'ford c-max','2015','car');" ><u>Descarcă lista de preţuri a noului Ford C-MAX</u></a><u><br>
                        </u><a TITLE="Listă de prețuri Ford C-MAX - Grand (835 KB)" HREF="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheadervalue1=attachment%3Bfilename%3D%22Lista+de+preturi+Ford+C-MAX+-+Grand.pdf%22&amp;blobheadervalue2=abinary%3Bcharset%3DUTF-8&amp;blobheadername1=Content-Disposition&amp;blobheadername2=MDT-Type&amp;blobheader=application%2Fpdf&amp;blobwhere=1214493968851&amp;blobkey=id" CLASS="download" onClick="if (typeof sford == 'object') omnitureLinkDownloadClick('fleet:pdf download:car:price list','','','','','pdf download','',false,'ford c-max','2015','car');" ><u>Descarcă lista de preţuri a noului Ford Grand C-MAX</u></a><br>
                        <br>
                        Fişierul &icirc;n format PDF a fost creat pentru a-ţi permite să vizualizezi şi să tipăreşti fişiere fără a avea nevoie de programul &icirc;n care au fost create iniţial. Adobe&trade; &icirc;ţi pune la dispoziţie o aplicaţie software gratuită (Acrobat Reader) care &icirc;ţi permite să lucrezi cu aceste fişiere. Dacă ai instalat deja această aplicaţie pe computerul tău, &icirc;n mod normal o poţi găsi la &quot;Programe&quot;, &icirc;n &quot;Meniul Start&quot;. &Icirc;n caz contrar, acceseză link-ul de mai jos pentru a o descărca.</div>
                    <div></div>
                    <div><br>
                        <br>
                        <a target="_blank" href="http://www.adobe.com/"><strong>Descarcă Acrobat Reader de pe situl adobe.com </strong></a></div>
                </div>
            </div>
        </article>
    </section>
</div>
<!--</div>-->
<!-- END [MidPageTabs] -->
<!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
<!-- BEGIN [MidPageTabs] -->
<!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti"> PROMOTII</a></h2> -->
<div id='tab1' class="secondary-tab-content">
    <section class="bti-wrapper">
        <article class="bti-item">
            <header class="bti-title">  </header>
            <div class="bti-body">
                <div class="abstract">
                    <div><span style="font-size: medium;">Noul C-MAX &ndash; Inovativ, flexibil şi eficient!</span><br> <br> De acum te poţi concentra pe aventură şi pe momentele plăcute - tehnologiile noului Ford C-MAX &icirc;ţi vor asigura confortul &icirc;n toate călătoriile alături de familie! Iar un prim astfel de moment plăcut &icirc;ţi oferim chiar acum: oferta specială pentru <b>noul C-MAX, la doar 13.750 &euro;(TVA inclus)*.</b>  <br> <br> Beneficiezi de dotări avansate, fie că este vorba de siguranţă, de confort sau de eficienţă:</div> <ul>     <li>airbaguri frontale, lateral şi cortină;</li>     <li>Sistem Ford MyKey;</li>     <li>Sistem de monitorizare a presiunii &icirc;n pneuri;</li>     <li>Oglinzi electrice şi &icirc;ncălzite;</li>     <li>system Ford ECO Mode cu indicator pentru schimbarea vitezelor;</li> </ul> <div>Iar propulsorul EcoBoost de 1 litru, puternic şi economic, premiat trei ani consecutivi ca fiind cel mai bun motor din lume, te va duce şi mai departe cu un singur plin.<br> <br> &Icirc;n plus, adaugă <strong>pachetul Trend la doar 250 &euro;</strong> (TVA inclus), faţă de 2000 &euro;, valoarea acestuia, ca să beneficiezi de şi mai multe dotări:</div> <ul>     <li>SYNC 2, cu touch screen si sistem de asistenţă pentru situaţii de urgenţă</li>     <li>Aer condiţionat automat, cu zonă dublă de control (DEATC)</li>     <li>Faruri de ceaţă</li>     <li>Cotieră centrală</li>     <li>Covoraşe faţă şi spate</li> </ul> <div>De asemenea, poţi beneficia de finanţare prin programul Prima Maşină de la Ford. Creat &icirc;n premieră pentru Rom&acirc;nia, programul Prima Maşină de la Ford continuă să fie mai ofertant ca niciodată! Avantaje:</div> <ul>     <li>4,57% dobanda fixa,</li>     <li>comision de administrare 0%</li>     <li>comision de analiza 0 RON</li>     <li>DAE: 4,67%</li>     <li>Aprobare in 2 ore, in showroom-urile Ford</li> </ul> <div>Contactează acum cel mai apropiat dealer pentru un test drive şi detalii suplimentare!<br> <br> <span style="font-size: x-small;">*Oferta este valabilă &icirc;n limita stocului disponibil, pentru Ford C-Max  Trend Compact, 1.0 l EcoBoost, 100 CP, consum mixt (l/100 km): 5.1, emisii CO2 (g/km): 117, la toti dealerii Ford participanţi la promoţie. Pentru un autoturism &icirc;n valoare de 61,685 lei (cu TVA), avans 3.084,25 lei (minim 5%), valoarea totală a creditului va fi de 58.600,75 lei pe 60 luni: rata anuală a dob&acirc;nzii (fixă) 4,57%, comision de analiză dosar 0 lei, comision lunar de administrare credit 0 lei, valoarea ratei lunare (pentru rate egale) 1.094,4 lei, valoarea totală platibilă 65.662 lei, DAE 4,67%. &Icirc;n calculul ratei lunare nu s-a inclus asigurarea opţională de viaţă şi asigurarea CASCO. &Icirc;n cazul &Icirc;n care se optează pentru asigurarea (facultativă) de viaţă, rata lunara devine 1.185 lei.</span></div>
                </div>
            </div>
        </article>
    </section>
</div>
<!--</div>-->
<!--<div id='tab2' class="mp-tab-wrapper">
<h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">PRETURI </a></h2> -->
<div id='tab2' class="secondary-tab-content">
    <section class="bti-wrapper">
        <article class="bti-item">
            <header class="bti-title">  </header>
            <div class="bti-body">
                <div class="abstract">
                    <span style="font-size: medium;">Liste de preţuri şi broşuri</span><br><br>
                    <div>Dacă te interesează un anumit model, consultă ofertele noastre actuale. Sau vizitează cel mai apropiat dealer pentru cele mai bune oferte disponibile<br>
                        <br>
                        <a TITLE="Listă de prețuri Ford C-MAX - Compact (963 KB)" HREF="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheadervalue1=attachment%3Bfilename%3D%22Lista+de+preturi+Ford+C-MAX+-+Compact.pdf%22&amp;blobheadervalue2=abinary%3Bcharset%3DUTF-8&amp;blobheadername1=Content-Disposition&amp;blobheadername2=MDT-Type&amp;blobheader=application%2Fpdf&amp;blobwhere=1214493775557&amp;blobkey=id" CLASS="download" onClick="if (typeof sford == 'object') omnitureLinkDownloadClick('fleet:pdf download:car:price list','','','','','pdf download','',false,'ford c-max','2015','car');" ><u>Descarcă lista de preţuri a noului Ford C-MAX</u></a><u><br>
                        </u><a TITLE="Listă de prețuri Ford C-MAX - Grand (835 KB)" HREF="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheadervalue1=attachment%3Bfilename%3D%22Lista+de+preturi+Ford+C-MAX+-+Grand.pdf%22&amp;blobheadervalue2=abinary%3Bcharset%3DUTF-8&amp;blobheadername1=Content-Disposition&amp;blobheadername2=MDT-Type&amp;blobheader=application%2Fpdf&amp;blobwhere=1214493968851&amp;blobkey=id" CLASS="download" onClick="if (typeof sford == 'object') omnitureLinkDownloadClick('fleet:pdf download:car:price list','','','','','pdf download','',false,'ford c-max','2015','car');" ><u>Descarcă lista de preţuri a noului Ford Grand C-MAX</u></a><br>
                        <br>
                        Fişierul &icirc;n format PDF a fost creat pentru a-ţi permite să vizualizezi şi să tipăreşti fişiere fără a avea nevoie de programul &icirc;n care au fost create iniţial. Adobe&trade; &icirc;ţi pune la dispoziţie o aplicaţie software gratuită (Acrobat Reader) care &icirc;ţi permite să lucrezi cu aceste fişiere. Dacă ai instalat deja această aplicaţie pe computerul tău, &icirc;n mod normal o poţi găsi la &quot;Programe&quot;, &icirc;n &quot;Meniul Start&quot;. &Icirc;n caz contrar, acceseză link-ul de mai jos pentru a o descărca.</div>
                    <div></div>
                    <div><br>
                        <br>
                        <a target="_blank" href="http://www.adobe.com/"><strong>Descarcă Acrobat Reader de pe situl adobe.com </strong></a></div>
                </div>
            </div>
        </article>
    </section>
</div>
<!--</div>-->
<!-- END [MidPageTabs] -->
</div>
</div>
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