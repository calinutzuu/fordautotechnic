<script type="text/javascript">
    // mobile sniffer
    ForceRedirectUserAgents = 'android,iphone,blackberry';
    ForceRedirectUserAgentsBypass = 'Win64,Win32';
    ForceRedirectMinWidth = '480';
    MobileHomePageRedirectURL = 'http:\/\/m.ford.ro';
</script>
<div id="xAxis-detailed">
    <nav class="breadCrumb" role="navigation">
        <ul itemprop="breadcrumb">
            <li class="home"><a href="/" class="om_bc_li" title="Pagina principal&#259;">Pagina principal&#259;</a><span></span></li><li><a href="/Autoturisme" class="om_bc_li">
            Autoturisme
        </a><span></span></li><li>Focus </li></ul>
    </nav>
    <script>
        var vehicleimagepackpresid = '1205072254052';
        var vehicleimagepackyear = 'NONE';
        var googleAdServerNameplateId = 'AUTHORED';
        var googleAdServerNameplateName = 'TBD';
    </script>
    <div class="fblike-locale">ro_RO</div>
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
        var bootstrapVehicleData = {"vehicles":[{"strIntroToFord": " Noul","brand": "Ford ","vehicleType": "PV","catalogId": "NONE","nameplate": "Focus ","labelAvailableFrom": "&nbsp;","formattedCurrency": "","nameplateText": "Cu un exterior complet restilizat, mai sculptat, \u015Fi cu un spa\u0163iu \u00EEn cabin\u0103 mai avansat \u015Fi mai sofisticat ca niciodat\u0103, acesta este cel mai rafinat Focus de p\u00E2n\u0103 acum.","imagePack": false,"hideVehicleImage": false,"images": [],"backgroundImagePath": ["/assets/img/noul_focus/1214481762939.jpg","null","null"],"disclaimerTextColor": [null,null,null],"current": true,"cid": "1205072239086","cta": [{"linkTitle": "DESCARC\u0102 BRO\u015EUR\u0102 ","linkURL": "\/SBE\/Brosura\/DescarcaBrosura","linkType": "primary","linkTarget": "_blank","omid": "va"},{"linkTitle": "\u00CENSCRIE-TE LA TEST DRIVE ","linkURL": "\/SBE\/TestDrive?shopcode=AUTHORED","linkType": "tertiary","linkTarget": "_blank","omid": "tr"},{"linkTitle": "VREAU SĂ FIU INFORMAT(Ă) ","linkURL": "/SBE/VreauSaFiuInformata","linkType": "tertiary","linkTarget": "","omid": "tr"}],"social": {"facebook": "https://facebook.com","facebookPage": "fordromania"},"disclaimer": "Modelul prezentat este un Focus","seriesCode": "AUTHORED","uscCode": "AUTHORED","presId": "1205072254052","promos": [{"imagePath": "/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobwhere=1214484913013&blobkey=id","overlay": false,"link": "/cs/ContentServer?pagename=RORO4_ENGINE/EP2/common/promo/M48_PromoBlock&c=Promo_C&cid=1205072268044","text": "Ofertă specială de lansare"}],"idf": {"options":[{"dataOverlay": {"mediaType":"Image","height":"435","width":"780"},"iconURL":"/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobheader=image%2Fjpg&blobwhere=1214481906810&blobkey=id","link":"/cs/ContentServer?cid=1205072236108&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE","videoSrc":[{"src1":""},{"src2":""}],"youtubeClose":"","tooltipText":"Ford Focus"}]}}]} || {};
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
                <li class="default-nameplate-vehicle" style="background-image:url(/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobheader=image%2Fjpg&blobwhere=1214481762939&blobkey=id)">
                    <div class="layered-nameplate-image">
                        <div class="image-holder">
                        </div>
                    </div>
                    <aside class="nameplate-disclaimer ">
                        Modelul prezentat este un Focus
                    </aside>
                </li>
            </ul>
            <div itemscope itemtype="http://schema.org/Product" id="nameplateDetails" class="nameplate-vehicle">
                <!--the text description-->
                <div class="name-plate-text">
                    <p class="intro"> Noul</p>
                    <h1 class="bigHeading">
                        <span itemprop="model" itemscope itemtype="http://schema.org/Organization" class="mark">Ford </span>
                        <span itemprop="member" class="nameplate boldTxt">Focus </span>
                    </h1>
                    <!--The price-->
                    <!--The blurb-->
                    <p class="blurb">
                        Cu un exterior complet restilizat, mai sculptat, şi cu un spaţiu în cabină mai avansat şi mai sofisticat ca niciodată, acesta este cel mai rafinat Focus de până acum.
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
            <a href='/Promotii/PromotieLansareFordFocus'>
<span class="active-promo-rover">
<span class="bg-opacity"></span>
<span class="link-icon"></span>
</span>
                <img src="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpg&amp;blobwhere=1214484913013&amp;blobkey=id" alt="Ford Focus">
                <p class="promo-carousel-text"><span class="promo-carousel-bold">Ofertă specială de lansare</span></p></a>
        </article>
    </div>
</section>
<section id="non-js-promoCarousel" class="non-js-promo-carousel box-shadow">
    <div class="slide-wrapper">
        <p class="promo-carousel-text"><a href="/cs/ContentServer?pagename=RORO4_ENGINE/EP2/common/promo/M48_PromoBlock&amp;c=Promo_C&amp;cid=Ofertă specială de lansare" target="_blank">Ford Focus</a></p>
    </div>
</section>
<script type="text/javascript"> var nameplateTabErrorMsg = 'Ne pare r&#259;u, momentan nu putem s&#259; &icirc;nc&#259;rc&#259;m con&#539;inutul pe care l-a&#539;i solicitat. &Icirc;ncerca&#539;i din nou, mai t&acirc;rziu.'; </script>
<section id="primary-tab-content" class="nameplate-tab-content" data-dynamic-tabcontent="false">
<div class="tab-wrapper">
    <nav class="tabs" id="primaryTabs">
        <ul>
            <li><a href="/Autoturisme/NoulFocus/PrezentareGenerala#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/NoulFocus/PrezentareGenerala">Prezentare general&#259;</a>
            </li>
            <li><a href="/Autoturisme/NoulFocus/Design#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/NoulFocus/Design">Design</a>
            </li>
            <li><a href="/Autoturisme/NoulFocus/PreturisiPromotii#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/NoulFocus/PreturisiPromotii">PRE&#354;URI &#350;I PROMO&#354;II</a>
            </li>
            <li class="selected"><a href="/Autoturisme/NoulFocus/PerformantaSiEficienta#primaryTabs" data-ajaxlink="/Autoturisme/NoulFocus/PerformantaSiEficienta">Performan&#355;&#259; &#351;i eficien&#355;&#259;</a>
            </li>
            <li><a href="/Autoturisme/NoulFocus/ExperientaLaVolan#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/NoulFocus/ExperientaLaVolan">Experien&#355;a la volan</a>
            </li>
            <li><a href="#" id="moreTab">Mai multe...</a><span></span></li>
        </ul>
    </nav>
</div>
<nav class="sub-nav ">
    <ul>
        <li><a href="/Autoturisme/NoulFocus/SigurantaSiSecuritate"
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
            <h1>Putere şi eficienţă: bucură-te de amândouă</h1>
        </header>
        <div class="bto-body">
            <div class="abstract">
                <div>Tehnologia motorului joacă un rol cheie &icirc;n cazul noului Focus, ajut&acirc;nd at&acirc;t la reducerea costurilor de funcţionare, c&acirc;t şi a emisiilor, asigur&acirc;nd &icirc;n acelaşi timp niveluri optime de putere şi performanţă. <br> <br> Gama include acum ca opţiune un motor pe benzină EcoBoost de 1,5 litri. Acesta include sistemul Auto-Start-Stop, iar economia la combustibil a fost sporită şi mai mult &icirc;n &icirc;ntreaga gamă. <br> <br> Toate motoarele noi au fost proiectate pentru a respecta standardele stricte ale clasei de emisii Euro 6. O versiune avansată a puternicului motor EcoBoost de 1 litru reduce deja emisiile la mai puţin de 100 g/km CO<sub>2</sub>.</div>
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
            <li><a href='#tab1' class='omt_'>Putere</a></li>
            <li><a href='#tab2' class='omt_'>Manevrabilitate</a></li>
            <li><a href='#tab3' class='omt_'>Economie</a></li>
        </ul>
    </nav>
</div>
<!-- BEGIN [MidPageTabs] -->
<div class="innertab-wrapper">
<!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Putere</a></h2> -->
<div id='tab1' class="tab-content" style="display:none;">
    <section class="bto-wrapper">
        <article class="bto-item">
            <header class="bto-title">
                <h1>Motorizare</h1>
            </header>
            <div class="bto-body">
                <div class="abstract">
                    <div>O gamă largă de motoare avansate asigură puterea noului Focus. Toate au capacităţi şi randamente diferite, iar acestea sunt cele mai recente adăugiri la gama existentă. Pentru o comparaţie completă, consultă secţiunea cu Fapte şi Statistici.</div>
                </div>
                <div class="body">
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <header class="bti-title">EcoBoost 1,0L</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>O nouă versiune a surprinzător de puternicului motor EcoBoost de 1 l va asigura emisii de CO<sub>2</sub> sub 100 g/km: este primul vehicul de familie non-hibrid, pe benzină, din Europa care să ofere acest lucru.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Motorul Duratorq TDCi" title="Motorul Duratorq TDCi" src="/assets/img/noul_focus/1214481906628.jpg">

            </div>
            <header class="bti-title">Putere şi eficienţă fără compromis</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Motorul EcoBoost de 1,5 litri reprezintă o nouă adăugire la gama de succes EcoBoost. Motorul a fost redus &icirc;n mod inteligent de la modelul EcoBoost de 1,6 litri, pentru a asigura un nivel mai redus al emisiilor şi o economie de combustibil mai mare&hellip; fără a compromite puterea şi manevrabilitatea. Disponibil &icirc;n: variante de 150 sau 180 CP şi cu transmisie manuală cu 6 trepte de viteză. &Icirc;ncep&acirc;nd din primăvara anului 2015 va fi disponibilă şi o variantă automată.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <header class="bti-title">Putere diesel cu emisii reduse</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Motorul diesel de 2,0 litri este, de asemenea, nou şi este disponibil în variante cu 150 CP şi cu transmisie manuală sau automată PowerShift, cu 6 trepte de viteză. Acest nou motor diesel asigură o reducere semnificativă a emisiilor faţă de varianta diesel de 2,0 litri pe care o înlocuieşte.</div>
                </div>
            </div>
        </article>
    </section>
</div>
<!--</div>-->
<!--<div id='tab2' class="mp-tab-wrapper">
<h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">Manevrabilitate</a></h2> -->
<div id='tab2' class="tab-content" style="display:none;">
    <section class="bto-wrapper">
        <article class="bto-item">
            <header class="bto-title">
                <h1>Manevrabilitate</h1>
            </header>
            <div class="bto-body">
                <div class="abstract">
                    <div>Experienţa la volanul unui Focus este legendară. Iar cu ajustări de fineţe suplimentare, noul Focus asigură niveluri sporite de aderenţă, control şi manevrabilitate, indiferent dacă mergi cu viteză constantă, virezi sau frânezi. Cu ajutorul transmisiei automate, poţi beneficia, de asemenea, de viteza şi controlul la îndemână asigurate de comenzile de schimbare automată, cu manete.</div>
                </div>
                <div class="body">
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Sistem de control al vectorului de cuplu" title="Sistem de control al vectorului de cuplu" src="/assets/img/noul_focus/1214481906326.jpg">

            </div>
            <header class="bti-title">Control maxim la viraje</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Controlul vectorului de cuplu echilibrează cuplul motorului între roţile din faţă, pentru a se potrivi tipului de carosabil şi condiţiilor de condus. Acţionând de 100 de ori pe secundă, sistemul este de 33 de ori mai rapid decât o clipire din ochi. Ceea ce înseamnă o aderenţă mai bună şi manevrabilitate de precizie extremă, după cum vei descoperi în momentul accelerării în curbe.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Sistem de suspensie spate" title="Sistem de suspensie spate" src="/assets/img/noul_focus/1214481903027.jpg">

            </div>
            <header class="bti-title">O călătorie mai rafinată</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Un sistem de suspensie spate multi-braţ Control Blade îţi asigură o deplasare lină şi reacţii extrem de precise, feedback intuitiv de la drum şi o călătorie silenţioasă, chiar şi în timpul accelerării.</div>
                </div>
            </div>
        </article>
    </section>
</div>
<!--</div>-->
<!--<div id='tab3' class="mp-tab-wrapper">
<h2><a href='#tab3' class="mp-tab omt_xd_mt_ti">Economie</a></h2> -->
<div id='tab3' class="tab-content" style="display:none;">
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Auto-Start-Stop" title="Auto-Start-Stop" src="/assets/img/noul_focus/1214481906555.jpg">

            </div>
            <header class="bti-title">Foloseşte mai puţin combustibil cu funcţia Auto-Start-Stop</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Atunci c&acirc;nd te opreşti la semafor sau c&acirc;nd aştepţi &icirc;ntr-o coloană, Auto Start-Stop poate opri automat motorul (fără a opri &icirc;nsă alimentarea sistemelor esenţiale, precum ventilaţia, radioul şi Ford SYNC). De &icirc;ndată ce eşti gata de plecarea de pe loc, apasă pe pedala de ambreiaj şi selectează prima treaptă de viteză, ca de obicei, iar sistemul porneşte din nou motorul. Sistemul Auto-Start-Stop este deosebit de eficient &icirc;n oraş.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="&Icirc;nc&#259;rcare regenerativ&#259; inteligent&#259;" title="&Icirc;nc&#259;rcare regenerativ&#259; inteligent&#259;" src="/assets/img/noul_focus/1214481905798.jpg">

            </div>
            <header class="bti-title">Reîncarcă-ţi bateria mai eficient</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Spre deosebire de sistemele convenţionale, sistemul de încărcare regenerativă inteligentă reîncarcă bateria doar atunci când este nevoie şi, ori de câte ori este posibil, evită realizarea acestei operaţiuni atunci când apăsați pedala de acceleraţie. Acest lucru poate reduce şi mai mult consumul de combustibil şi nivelul de emisii.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Sistem activ cu obturator pentru gril&#259;" title="Sistem activ cu obturator pentru gril&#259;" src="/assets/img/noul_focus/1214481905650.jpg">

            </div>
            <header class="bti-title">Aerodinamicitate mai bună pentru economie mai mare</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Atunci c&acirc;nd conduci cu viteză redusă, sistemul de &icirc;nchidere automată a grilei radiatorului ţine orificiile de ventilaţie de la nivelul grilei deschise pentru a răci motorul. C&acirc;nd prinzi viteză, acesta se poate &icirc;nchide automat, &icirc;mbunătăţind aerodinamicitatea şi ajut&acirc;nd la economisirea de combustibil. &Icirc;n timp, această tehnologie poate face o mare diferenţă.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Indicator de schimbare a treptei de vitez&#259;" title="Indicator de schimbare a treptei de vitez&#259;" src="/assets/img/noul_focus/1214481905502.jpg">

            </div>
            <header class="bti-title">Schimbări ale treptelor de viteză mai eficiente din punct de vedere al consumului de combustibil</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Indicatorul de schimbare a vitezei de pe panoul de bord &icirc;ţi arată momentul optim de schimbare a treptei de viteză, pentru o eficiență maximă a consumului de combustibil. Aceasta reprezintă o modalitate simplă și eficientă de a asigura deplasări c&acirc;t mai economice.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Ford EcoMode" title="Ford EcoMode" src="/assets/img/noul_focus/1214481905874.jpg">

            </div>
            <header class="bti-title">Un ajutor pentru a conduce mai eficient</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Sistemul inovator Ford Eco Mode evaluează în mod continuu efectele stilului personal de condus asupra consumului de combustibil. Acesta analizează viteza, schimbarea treptelor de viteză, frânarea şi nivelurile de anticipare, plus raportul personal de deplasări pe distanţe scurte şi lungi. Apoi, software-ul inteligent îţi oferă recomandări legate de modul de îmbunătăţire a economiei de combustibil.</div>
                </div>
            </div>
        </article>
    </section>
</div>
<!--</div>-->
</div> <!-- END [MidPageTabs] -->
</article>
<div style="width:100%; height:auto; padding:0px 0px 5px">
    <script>
        var addthis_preconfig_variables = {};
        addthis_preconfig_variables["ui_language"] = "ro";
        addthis_preconfig_variables["services_compact"] = "print,favorites,facebook,twitter,delicious,stumbleupon,more";
        addthis_preconfig_variables["services_expanded"] = "print,favorites,facebook,twitter,delicious,stumbleupon,tumblr,blogger,digg,google,linkedin,reddit,wordpress,";
        addthis_preconfig_variables["services_exclude"] = "hotmail,gmail,email,aolmail,yahoomailemail";
        addthis_preconfig_variables["services_custom"] = {
            name : "Ford",
            url : "http://www.ford.ro={{URL}}&title={{TITLE}}",
            icon : "http://www.ford.com/icon.jpg"
        };
        addthis_preconfig_variables["ui_hover_direction"] = "1";
    </script>
    <!-- AddThis Button BEGIN -->
    <script type="text/javascript">var addthis_config = {"data_track_clickback":true};</script>
    <script type="text/javascript" src='http://s7.addthis.com/js/250/addthis_widget.js?username=engineps'></script>
    <script type="text/javascript">
        var addthis_config = addthis_preconfig_variables;
        var addthis_localize = {share_caption:'Marchează şi partajează',favorites:'Favorite',print:'Printează',more:'Mai multe'};
    </script>
    <!-- AddThis Button END -->
</div>
</section>
<!-- nosc comp -->
<script src="/cs/ContentServer?pagename=ENGInE/script/messaging/core"></script>
<script id="TagIT.load" src='/cs/ContentServer?pagename=RORO4_ENGINE/script/packager&c=Page&cid=1205072238694&location=load&isMobile=false&require=main' defer></script>
</div>