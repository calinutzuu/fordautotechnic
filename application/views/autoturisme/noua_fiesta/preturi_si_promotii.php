<script type="text/javascript">
    // mobile sniffer
    ForceRedirectUserAgents = 'android,iphone,blackberry';
    ForceRedirectUserAgentsBypass = 'Win64,Win32';
    ForceRedirectMinWidth = '480';
    MobileHomePageRedirectURL = 'http:\/\/m.ford.ro';
</script>
<div id="xAxis-detailed">
    <nav class="breadCrumb visuallyhidden" role="navigation">
        <ul itemprop="breadcrumb">
            <li class="home"><a href="/" data-selenium="breadcrumb_home" class="om_bc_li"
                                title="Pagina principal&#259;">Pagina principal&#259;</a><span></span></li>
            <li data-selenium="breadcrumb_cars"><a href="/Autoturisme" class="om_bc_li">
                Autoturisme
            </a><span></span></li>
            <li data-selenium="breadcrumb_nameplate">Fiesta</li>
        </ul>
    </nav>
    <script>
        var vehicleimagepackpresid = '1205035170415';
        var vehicleimagepackyear = 'YYV';
    </script>
    <div class="fblike-locale">ro_RO</div>
    <script>
        var googleAdServerNameplateId = '00C';
        var googleAdServerNameplateName = 'Fiesta';
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
            {"strIntroToFord":" ", "brand":"Ford", "vehicleType":"PV", "catalogId":"9324", "nameplate":"Fiesta", "labelAvailableFrom":"De la", "formattedCurrency":"13.400 RON", "nameplateText":"Asemenea unui smartphone nou-nou\u0163, Ford Fiesta \u00EEmbin\u0103 stilul contemporan cu tehnologia de v\u00E2rf.", "imagePack":true, "hideVehicleImage":false, "images":["/assets/img/fiesta/FiestaTitBlazerBlueLHD3dr_Front_00001.jpg"], "backgroundImagePath":["null", "null", "null"], "disclaimerTextColor":[null, null, null], "current":true, "cid":"1205027777983", "cta":[
                {"linkTitle":"MODELE Fiesta", "linkURL":"/Autoturisme/NouaFiesta/Modele", "linkType":"primary", "linkTarget":"", "omid":"va"},
                {"linkTitle":"DESCARC\u0102 BRO\u015EUR\u0102 ", "linkURL":"\/SBE\/Brosura\/DescarcaBrosura", "linkType":"tertiary", "linkTarget":"_blank", "omid":"tr"},
                {"linkTitle":"\u00CENSCRIE-TE LA TEST DRIVE ", "linkURL":"\/SBE\/TestDrive?shopcode=00C", "linkType":"tertiary", "linkTarget":"_blank", "omid":"tr"},
                {"linkTitle":"VREAU SĂ FIU INFORMAT(Ă) ", "linkURL":"/SBE/VreauSaFiuInformata", "linkType":"tertiary", "linkTarget":"", "omid":"tr"}
            ], "social":{"facebook":"https://facebook.com", "facebookPage":"fordromania"}, "disclaimer":"Modelul prezentat este un Fiesta Titanium. Imagine cu titlul de prezentare.", "seriesCode":"8W5", "uscCode":"00C", "supportSelector":"true", "supportSeries":"true", "presId":"1205035170415", "promos":[
                {"imagePath":"/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobwhere=1214492080268&blobkey=id", "overlay":false, "link":"/cs/ContentServer?pagename=RORO4_ENGINE/EP2/common/promo/M48_PromoBlock&c=Promo_C&cid=1205086714805", "text":"Prima Maşină de la Ford"}
            ], "idf":{"options":[
                {"dataOverlay":{"mediaType":"Flash", "height":"439", "width":"780"}, "iconURL":"/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobheader=image%2Fjpg&blobwhere=1214480084185&blobkey=id", "link":"/cs/ContentServer?cid=1205028944450&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Flash_C&amp;site=RORO4_ENGINE", "videoSrc":[
                    {"src1":""},
                    {"src2":""}
                ], "youtubeClose":"", "tooltipText":"Ford Fiesta"}
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
    <section class="x-axis-wrapper" id="vvmWrapper">
        <a class="js-ajax pointer left om_pv_xa_le" href="#" role="toolbar"><span></span></a>
        <a class="js-ajax pointer right om_pv_xa_ri" href="#" role="toolbar"><span></span></a>

        <div itemscope itemtype="http://schema.org/ImageObject">
            <ul class="nameplate x-axis" id="vvmRoot">
                <li class="default-nameplate-vehicle" style="background-image:url()">
                    <div class="layered-nameplate-image">
                        <div class="image-holder">
                        </div>
                    </div>
                    <aside class="nameplate-disclaimer ">
                        Modelul prezentat este un Fiesta Titanium. Imagine cu titlul de prezentare.
                    </aside>
                </li>
            </ul>
            <div itemscope itemtype="http://schema.org/Product" id="nameplateDetails" class="nameplate-vehicle">
                <!--the text description-->
                <div class="name-plate-text">
                    <p class="intro"></p>

                    <h1 class="bigHeading">
                        <span itemprop="model" itemscope itemtype="http://schema.org/Organization"
                              class="mark">Ford</span>
                        <span itemprop="member" class="nameplate boldTxt">Fiesta</span>
                    </h1>
                    <!--The price-->
                    <!--The blurb-->
                    <p class="blurb">
                        Asemenea unui smartphone nou-nouţ, Ford Fiesta &icirc;mbină stilul contemporan cu tehnologia de
                        v&acirc;rf.
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
            <span itemprop="model" itemscope itemtype="http://schema.org/Organization" class="mark">{{brand}}</span>
            <span itemprop="member" class="nameplate boldTxt">{{nameplate}}</span>
        </h1>
        <!--The blurb-->
        <p class="blurb">{{nameplateText}}</p>
    </div>
</script>
<script type="text/x-handlebars-template" id="selectorTemplate">
    <a href="{{#if link}}{{link}}{{else}}#{{/if}}"
       class="vehicle-selector box-shadow{{#if className}} {{className}}-wrapper{{/if}}">
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
    <div class="btnLink box-shadow">
        {{/ifCond}}
        {{#ifCond linkType '==' 'secondary'}}
        <div class="btnLink light box-shadow">
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
</section>
<aside class="fb-xaxis-icon">
    <div class="fb-like" data-href="http://www.facebook.com/fordromania" data-send="false" data-layout="button_count"
         data-width="450" data-show-faces="true" data-font="tahoma"></div>
</aside>
<p id="xaxisOverviewDisclaimer" class="disclaimer specific"></p>
<section id="promoCarousel" class="promo-carousel box-shadow">
    <div id="promo-carousel-timer">7500</div>
    <div class="slide-wrapper">
        <article class="slate slide">
            <a href='/Autoturisme/NouaFiesta/PreturisiPromotii'>
<span class="active-promo-rover">
<span class="bg-opacity"></span>
<span class="link-icon"></span>
</span>
                <img src="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpg&amp;blobwhere=1214492080268&amp;blobkey=id"
                     alt="Ford Fiesta">

                <p class="promo-carousel-text"><span class="promo-carousel-bold">Prima Maşină de la Ford</span></p></a>
        </article>
    </div>
</section>
<section id="non-js-promoCarousel" class="non-js-promo-carousel box-shadow">
    <div class="slide-wrapper">
        <p class="promo-carousel-text"><a
                href="/cs/ContentServer?pagename=RORO4_ENGINE/EP2/common/promo/M48_PromoBlock&amp;c=Promo_C&amp;cid=Prima Maşină de la Ford"
                target="_blank">Ford Fiesta</a></p>
    </div>
</section>
<script type="text/javascript"> var nameplateTabErrorMsg = 'Ne pare r&#259;u, momentan nu putem s&#259; &icirc;nc&#259;rc&#259;m con&#539;inutul pe care l-a&#539;i solicitat. &Icirc;ncerca&#539;i din nou, mai t&acirc;rziu.'; </script>
<section id="primary-tab-content" class="nameplate-tab-content" data-dynamic-tabcontent="false">
    <div class="tab-wrapper">
        <nav class="tabs" id="primaryTabs">
            <ul>
                <li><a href="/Autoturisme/NouaFiesta/Prezentare#primaryTabs" class="om_mt_ti"
                       data-ajaxlink="/Autoturisme/NouaFiesta/Prezentare">Prezentare general&#259;</a>
                </li>
                <li><a href="/Autoturisme/NouaFiesta/Design#primaryTabs" class="om_mt_ti"
                       data-ajaxlink="/Autoturisme/NouaFiesta/Design">Design</a>
                </li>
                <li><a href="/Autoturisme/NouaFiesta/ExperientaLaVolan#primaryTabs" class="om_mt_ti"
                       data-ajaxlink="/Autoturisme/NouaFiesta/ExperientaLaVolan">Experien&#539;a la volan</a>
                </li>
                <li class="selected"><a href="/Autoturisme/NouaFiesta/PreturisiPromotii#primaryTabs"
                                        data-ajaxlink="/Autoturisme/NouaFiesta/PreturisiPromotii">PRE&#354;URI &#350;I
                    PROMO&#354;II</a>
                </li>
                <li><a href="/Autoturisme/NouaFiesta/PerformantaSiEficienta#primaryTabs" class="om_mt_ti"
                       data-ajaxlink="/Autoturisme/NouaFiesta/PerformantaSiEficienta">Performan&#355;&#259; &#351;i
                    eficien&#355;&#259;</a>
                </li>
                <li><a href="#" id="moreTab">Mai multe...</a><span></span></li>
            </ul>
        </nav>
    </div>
    <nav class="sub-nav ">
        <ul>
            <li><a href="/Autoturisme/NouaFiesta/Siguranta"
                    >Siguran&#355;&#259; &#351;i securitate</a></li>
        </ul>
        <aside class="sub-nav-heading">
            <div>Mai multe...</div>
        </aside>
    </nav>
    <!--This is where the main content for the selected tab will go -->
    <article class="nameplate-main-content" id="tabs">
        <section class="bto-wrapper">
            <article class="bto-item">
                <header class="bto-title">
                    <h1>PRETURI SI PROMOTII</h1>
                </header>
                <div class="bto-body">
                    <div class="abstract">
                        <div>Află detalii despre promoţiile aflate &icirc;n derulare sau descarcă listele de preţuri
                            pentru FORD FIESTA.
                        </div>
                    </div>
                    <div class="body">
                    </div>
                </div>
            </article>
        </section>
        <!-- isBtfTab : from MidPageTabs false -->
        <div class="tab-wrapper">
            <nav class="tabs" id="inner-tabs">
                <ul>
                    <li><a href='#tab1' class='omt_'>Promotii</a></li>
                    <li><a href='#tab2' class='omt_'>Preturi</a></li>
                </ul>
            </nav>
        </div>
        <!-- BEGIN [MidPageTabs] -->
        <div class="innertab-wrapper">
            <!--<div id='tab1' class="mp-tab-wrapper">
            <h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Promotii</a></h2> -->
            <div id='tab1' class="tab-content" style="display:none;">
                <section class="bto-wrapper">
                    <article class="bto-item">
                        <header class="bto-title">
                            <h1>FORD FIESTA – Versatil şi confortabil</h1>
                        </header>
                        <div class="bto-body">
                            <div class="abstract">
                                <div>Designul kinetic Ford al modelului Fiesta se traduce &icirc;ntr-un vehicul modern,
                                    cu linii elegante, dar dinamice; Fiesta este &icirc;n elementul său
                                    at&acirc;t &icirc;n mediul urban, oferind un plus de confort c&acirc;t şi &icirc;n
                                    afara oraşului, fiind extrem de eficient. Cu Fiesta Trend beneficiezi de dotări cum
                                    ar fi: <br> <br>
                                    <ul>
                                        <li>airbag-uri frontale, laterale, cortină şi genunchi;</li>
                                        <li>sisteme ESP+HLA (inclusiv ABS, EBD, EBA-asistenţă la fr&acirc;narea de
                                            urgenţă);
                                        </li>
                                        <li>Ford MyKey</li>
                                        <li>&Icirc;nchidere centralizată cu telecomandă</li>
                                        <li>Geamuri electrice faţă</li>
                                    </ul>
                                    <div>&Icirc;n plus, motorul de 1.0 l &icirc;ţi oferă o eficienţă remarcabilă, av&acirc;nd
                                        un consum de combustibil excepţional, de p&acirc;nă la 4,6 l/100 km. <br> <br>
                                        Iar acum, cea mai versatilă maşină urbană vine cu o ofertă specială: <strong>Ford
                                            Fiesta Trend 1,0, 80 CP, la 9.000 Euro* (TVA inclus)!</strong><br> <br> De
                                        asemenea, poţi beneficia de finanţare prin programul <strong>Prima Maşină de la
                                            Ford</strong>. După ce am creat &icirc;n premieră pentru Rom&acirc;nia
                                        programul Prima Maşină de la Ford, l-am dus şi mai departe, pentru a-l face mai
                                        ofertant ca niciodată! Principalele avantaje de care poţi beneficia sunt:<br>
                                        <br>
                                        <ul>
                                            <li><strong>Dob&acirc;ndă fixă de 4.57 %**</strong>, pe &icirc;ntreaga
                                                perioadă de finanţare
                                            </li>
                                            <li><strong>Aprobare &icirc;n 2 ore</strong>, &icirc;n showroom-urile Ford;
                                            </li>
                                            <li>Perioadă de finanţare &icirc;ntre <strong>6 - 60 de luni</strong>;</li>
                                            <li>Avans minimum 5%</li>
                                            <li>Varsta eligibilă: &icirc;ntre <strong>18 şi 70 ani;</strong></li>
                                        </ul>
                                        <br> Contactează unul din consultantii nostrii Ford pentru un test drive şi
                                        detalii suplimentare!<br> <br> <span style="font-size: x-small;"><em>*Preţul
                                            exprimat include TVA și este valabil pentru Ford Fiesta, Trend, 3 uşi, 1.0
                                            Benzină 80 CP (Euro VI, consum mixt 4.6 l/100 km, emisii CO<sub>2</sub>
                                            (g/km): 105), şi cuprinde contravaloarea tichetului Remat. Ofertă supusă
                                            unor termene și condiţii, valabilă &icirc;n limita stocului disponibil, la
                                            dealerii Ford participanţi la promoţie.<br> <br> ** Pentru un autoturism in
                                            valoare de 40.500 lei (cu TVA), avans 2.025 lei (minim 5%), valoarea totala
                                            a creditului va fi de 38.475 lei pe 60 luni: rata anuala a dobanzii (fixa)
                                            4,57%, comision de analiza dosar 0 lei, comision lunar de administrare
                                            credit 0 lei, valoarea ratei lunare (pentru rate egale) 718,6 lei, valoarea
                                            totala platibila 43.111 lei, DAE 4,67%. In calculul ratei lunare nu s-a
                                            inclus asigurarea optionala de viata si asigurarea CASCO. In cazul in care
                                            se opteaza pentru asigurarea (facultativa) de viata, rata lunara devine
                                            777,4 lei.</em></span></div>
                                </div>
                            </div>
                            <div class="body">
                            </div>
                        </div>
                    </article>
                </section>
            </div>
            <!--</div>-->
            <!--<div id='tab2' class="mp-tab-wrapper">
            <h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">Preturi</a></h2> -->
            <div id='tab2' class="tab-content" style="display:none;">
                <section class="bto-wrapper">
                    <article class="bto-item">
                        <header class="bto-title">
                            <h1></h1>
                        </header>
                        <div class="bto-body">
                            <div class="abstract">
                                <div><a TITLE="Listă de prețuri Ford Fiesta (794 KB)"
                                        HREF="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobheadervalue1=attachment%3Bfilename%3D%22Lista+de+preturi+Ford+Fiesta.pdf%22&blobheadervalue2=abinary%3Bcharset%3DUTF-8&blobheadername1=Content-Disposition&blobheadername2=MDT-Type&blobheader=application%2Fpdf&blobwhere=1214491799388&blobkey=id"
                                        CLASS="download"
                                        onClick="if (typeof sford == 'object') omnitureLinkDownloadClick('brand:pricelist download:confirm:<nameplate>','event15,event43','','event:pricelist:pdf','download pricelist','pdf download','',false,'ford fiesta','2013','car');">Descarcă
                                    lista de preţuri pentru noul Ford Fiesta</a>. <br> <br> <a
                                        TITLE="Listă de prețuri Ford Fiesta - Trade In (67,1 KB)"
                                        HREF="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobheadervalue1=attachment%3Bfilename%3D%22Lista+de+preturi+Ford+Fiesta+-+Trade+In.pdf%22&blobheadervalue2=abinary%3Bcharset%3DUTF-8&blobheadername1=Content-Disposition&blobheadername2=MDT-Type&blobheader=application%2Fpdf&blobwhere=1214489546466&blobkey=id"
                                        CLASS="download"
                                        onClick="if (typeof sford == 'object') omnitureLinkDownloadClick('brand:pdf download:retail price list','','','','','pdf download','',false,'ford fiesta','2013','car');">Descarcă
                                    oferta specială Trade In - Ford Fiesta</a>.<br> <br> <br> Fişierul &icirc;n format
                                    PDF a fost creat pentru a-ţi permite să vizualizezi şi să tipăreşti fişiere fără a
                                    avea nevoie de programul &icirc;n care au fost create iniţial. Adobe&trade; &icirc;ţi
                                    pune la dispoziţie o aplicaţie software gratuită (Acrobat Reader) care &icirc;ţi
                                    permite să lucrezi cu aceste fişiere. Dacă ai instalat deja această aplicaţie pe
                                    computerul tău, &icirc;n mod normal o poţi găsi la &quot;Programe&quot;, &icirc;n
                                    &quot;Meniul Start&quot;. &Icirc;n caz contrar, acceseză link-ul de mai jos pentru a
                                    o descărca. <br> <br> <a href="http://get.adobe.com/reader">Descarcă Acrobat Reader
                                        de pe situl adobe.com</a></div>
                            </div>
                            <div class="body">
                            </div>
                        </div>
                    </article>
                </section>
            </div>
            <!--</div>-->
        </div>
        <!-- END [MidPageTabs] -->
    </article>
</section>

</div>