<script type="text/javascript">
    // mobile sniffer
    ForceRedirectUserAgents = 'android,iphone,blackberry';
    ForceRedirectUserAgentsBypass = 'Win64,Win32';
    ForceRedirectMinWidth = '480';
    MobileHomePageRedirectURL = 'http:\/\/m.ford.ro';
    MobileRedirectURL = MobileHomePageRedirectURL + '#';
</script>
<div id="xAxis-detailed">
    <nav class="breadCrumb" role="navigation">
        <ul itemprop="breadcrumb">
            <li class="home"><a href="/" class="om_bc_li" title="Pagina principal&#259;">Pagina principal&#259;</a><span></span></li><li><a href="/Autoturisme" class="om_bc_li">
            Autoturisme
        </a><span></span></li><li>B-MAX</li></ul>
    </nav>
    <script>
        var vehicleimagepackpresid = '1205035169292';
        var vehicleimagepackyear = 'YYR';
        var googleAdServerNameplateId = '004';
        var googleAdServerNameplateName = 'B-Max';
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
        var bootstrapVehicleData = {"vehicles":[{"strIntroToFord": " ","brand": "Ford","vehicleType": "PV","catalogId": "9323","nameplate": "B-MAX","labelAvailableFrom": "De la","formattedCurrency": "16.150 RON","nameplateText": "Datorit\u0103 sistemului ingenios de deschidere al u\u0219ilor, ai acces mult mai u\u0219or \u00EEn habitaclul ma\u0219inii \u0219i un interior extrem de rafinat \u0219i spa\u021Bios.","imagePack": true,"hideVehicleImage": false,"images": ["/assets/img/b_max/B-MAX_LHD_BurnishedGlow_Front_00001.jpg"],"backgroundImagePath": ["/assets/img/b_max/B-MAX_LHD_BurnishedGlow_Front_00001.jpg","null","null"],"disclaimerTextColor": [null,null,null],"current": true,"cid": "1205005696537","cta": [{"linkTitle": "MODELE B-MAX","linkURL": "/Autoturisme/NoulB-MAX/Modele","linkType": "primary","linkTarget": "","omid": "va"},{"linkTitle": "DESCARC\u0102 BRO\u015EUR\u0102 ","linkURL": "\/SBE\/Brosura\/DescarcaBrosura","linkType": "tertiary","linkTarget": "_blank","omid": "tr"},{"linkTitle": "\u00CENSCRIE-TE LA TEST DRIVE ","linkURL": "\/SBE\/TestDrive?shopcode=004","linkType": "tertiary","linkTarget": "_blank","omid": "tr"},{"linkTitle": "VREAU SĂ FIU INFORMAT(Ă) ","linkURL": "/SBE/VreauSaFiuInformata","linkType": "tertiary","linkTarget": "","omid": "tr"}],"social": {"facebook": "https://facebook.com","facebookPage": "fordromania"},"disclaimer": "Modelul prezentat este un B-MAX Titanium. Imagine cu titlul de prezentare.","seriesCode": "J6J","uscCode": "004","supportSelector": "true","supportSeries": "true","presId": "1205035169292","promos": [],"idf": {"options":[{"dataOverlay": {"mediaType":"Flash","height":"439","width":"780"},"iconURL":"/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobheader=image%2Fjpg&blobwhere=1214480084155&blobkey=id","link":"/cs/ContentServer?cid=1205020320463&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Flash_C&amp;site=RORO4_ENGINE","videoSrc":[{"src1":""},{"src2":""}],"youtubeClose":"","tooltipText":"Ford B-MAX"}]}}]} || {};
        var retrieveUserOptions = JSON.parse( localStorage.getItem('userSelection')) || {};
        //FranciB: injecting and changing user selected angle image trigger by mid page tabs and on page reload.
        //In order to stop the flickering between the default image and selected angle image in the centre stage.
        if(retrieveUserOptions.selectedImageAngle !== (null || "" || undefined)){
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
                        Modelul prezentat este un B-MAX Titanium. Imagine cu titlul de prezentare.
                    </aside>
                </li>
            </ul>
            <div itemscope itemtype="http://schema.org/Product" id="nameplateDetails" class="nameplate-vehicle">
                <!--the text description-->
                <div class="name-plate-text">
                    <p class="intro"> </p>
                    <h1 class="bigHeading">
                        <span itemprop="model" itemscope itemtype="http://schema.org/Organization" class="mark">Ford</span>
                        <span itemprop="member" class="nameplate boldTxt">B-MAX</span>
                    </h1>
                    <!--The price-->
                    <!--The blurb-->
                    <p class="blurb">
                        Datorită sistemului ingenios de deschidere al ușilor, ai acces mult mai ușor în habitaclul mașinii și un interior extrem de rafinat și spațios.
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
<script type="text/javascript"> var nameplateTabErrorMsg = 'Ne pare r&#259;u, momentan nu putem s&#259; &icirc;nc&#259;rc&#259;m con&#539;inutul pe care l-a&#539;i solicitat. &Icirc;ncerca&#539;i din nou, mai t&acirc;rziu.'; </script>
<section id="primary-tab-content" class="nameplate-tab-content" data-dynamic-tabcontent="false">
<div class="tab-wrapper">
    <nav class="tabs" id="primaryTabs">
        <ul>
            <li><a href="/Autoturisme/NoulB-MAX/Prezentare#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/NoulB-MAX/Prezentare">Prezentare general&#259;</a>
            </li>
            <li><a href="/Autoturisme/NoulB-MAX/Design#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/NoulB-MAX/Design">Design</a>
            </li>
            <li><a href="/Autoturisme/NoulB-MAX/ExperientaLaVolan#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/NoulB-MAX/ExperientaLaVolan">Experien&#539;a la volan</a>
            </li>
            <li class="selected"><a href="/Autoturisme/NoulB-MAX/PerformantaSiEficienta#primaryTabs" data-ajaxlink="/Autoturisme/NoulB-MAX/PerformantaSiEficienta">Performan&#355;&#259; &#351;i eficien&#355;&#259;</a>
            </li>
            <li><a href="/Autoturisme/NoulB-MAX/Siguranta#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/NoulB-MAX/Siguranta">Siguran&#539;&#259;</a>
            </li>
            <li><a href="#" id="moreTab">Mai multe...</a><span></span></li>
        </ul>
    </nav>
</div>
<nav class="sub-nav ">
    <ul>
        <li><a href="/Autoturisme/NoulB-MAX/MaterialeDescarcabile"
                >Materiale Desc&#259;rcabile</a></li>
        <li><a href="/Autoturisme/NoulB-MAX/ListaPreturi"
                >List&#259; de pre&#539;uri</a></li>
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
            <h1>Putere impresionantă, eficienţă de vârf</h1>
        </header>
        <div class="bto-body">
            <div class="abstract">
                Cu B-MAX &icirc;ţi poţi alege configuraţia de putere şi eficienţă care ţi se potriveşte cel mai bine. Gama amplă de motorizări şi transmisii disponibile pe acest model include ingeniosul motor pe benzină EcoBoost de 1 litru, care furnizează puterea unui motor convenţional de 1,6 litri, dar  oferă cel mai bun consum din clasa sa. Cei care preferă motorizările diesel vor remarca motorul Duratorq TDCi de 1,6 litri, &icirc;n versiunea &icirc;mbunătăţită pentru eficienţă şi performanţă.
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
            <li><a href='#tab1' class='omt_'>Motorizare</a></li>
            <li><a href='#tab2' class='omt_'>Consum</a></li>
        </ul>
    </nav>
</div>
<!-- BEGIN [MidPageTabs] -->
<div class="innertab-wrapper">
    <!--<div id='tab1' class="mp-tab-wrapper">
    <h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Motorizare</a></h2> -->
    <div id='tab1' class="tab-content" style="display:none;">
        <section class="bto-wrapper">
            <article class="bto-item">
                <header class="bto-title">
                    <h1> </h1>
                </header>
                <div class="bto-body">
                    <div class="abstract">
                        B-MAX este disponibil cu o gamă amplă de motoare avansate, at&acirc;t pe benzină c&acirc;t şi diesel, precum şi cu mai multe variante de transmisie. Unul dintre aceste motoare atrage, inevitabil, atenţia din prima clipă, prin puterea şi cuplul deosebit de mari pentru dimensiunile sale, precum şi pentru cel mai bun consum din această clasă: motorul pe benzină EcoBoost de 1 litru.
                    </div>
                    <div class="body">
                    </div>
                </div>
            </article>
        </section>
        <section class="bti-wrapper">
            <article class="bti-item">
                <div class="bti-image">
                    <img alt="Motorul Interna&#355;ional al Anului" title="Motorul Interna&#355;ional al Anului" src="/assets/img/b_max/1214476602501.png">
                </div>
                <header class="bti-title">Noul motor EcoBoost de 1.0 litri, cel mai bun din clasa sa</header>
                <div class="bti-body">
                    <div class="abstract">
                        B-MAX poate fi livrat cu un motor revoluţionar, de un litru, care oferă &ndash;la 100 şi 120 de cai putere- puterea unui motor convenţional de 1,6 litri. Şi, totuşi, reuşeşte să consume cu 20% mai puţin dec&acirc;t motoarele convenţionale echivalente. De fapt, performanţele de consum şi nivelul scăzut de emisii ale acestui motor sunt mai apropiate de cele ale unui diesel.  <br>
                        <br>
                        Aceste rezultate au fost posibile prin reproiectarea integrală a motorului &ndash; un timp redus de &icirc;ncălzire şi reducerea coeficienţilor de fricţiune sunt doar două dintre &icirc;mbunătăţirile aduse. Iar pe l&acirc;ngă puterea pe care o oferă la un consum redus, acest motor te va impresiona şi prin sunetul şi sportivitatea care &icirc;l caracterizează.  <br>
                        <br>
                        Recent &icirc;ncoronat drept &bdquo;Motorul Internaţional al Anului&rdquo; pe baza voturilor din 35 de ţări din &icirc;ntreaga lume, motorul EcoBoost de la Ford oferă o tehnologie inovatoare ce schimbă regulile jocului la nivel global &icirc;n gama motoarele pe benzină. Acest motor mic, cu tehnologie avansată a mai fost numit şi &bdquo;Cel mai bun motor nou&rdquo; sau &bdquo;Cel mai bun motor sub 1 l&rdquo;. <br>
                        <br>
                        Pe l&acirc;ngă noul motor EcoBoost, B-MAX este disponibil cu motorul Duratec de 1,4 litri, care generează 90 de cai putere, şi cu motorul Ti-VCT de 1,6 litri &ndash; o variant echilibrată, care oferă, &icirc;n combinaţie cu transmisia Powershift, 105 CP.
                    </div>
                </div>
            </article>
        </section>
        <section class="bti-wrapper">
            <article class="bti-item">
                <div class="bti-image">
                   <img alt="Ford TDCI" title="Ford TDCI" src="/assets/img/b_max/1214419926892.jpg">
                </div>
                <header class="bti-title">Două motoare diesel, care oferă cea mai bună eficienţă din clasa lor</header>
                <div class="bti-body">
                    <div class="abstract">
                        Motorul TDCi de 1,6 litri generează 95 de cai putere, oferă cel mai bun consum din clasa sa &ndash; doar 4.0l/100km &ndash; şi are un nivel de emisii C02 de numai 104g/km. Alternativ, poţi opta pentru motorul TDCi de 1,5 litri, care produce 75 CP la un consum de 4,1l/100km şi cu emisii de numai 109g CO2/km.
                    </div>
                </div>
            </article>
        </section>
        <section class="bti-wrapper">
            <article class="bti-item">
                <div class="bti-image">
                  <img alt="Schimb&#259;tor de viteze &icirc;mbr&#259;cat &icirc;n piele" title="Schimb&#259;tor de viteze &icirc;mbr&#259;cat &icirc;n piele" src="/assets/img/b_max/1214419927400.jpg">
                </div>
                <header class="bti-title">Transmisie manuală, cu 5 viteze</header>
                <div class="bti-body">
                    <div class="abstract">
                        Toate variantele de motorizare sunt disponibile cu un sistem de transmisie fluidă şi eficientă, cu cinci trepte de viteză, ajustate &icirc;n detaliu pentru rezultate optime cu fiecare versiune de motor.
                    </div>
                </div>
            </article>
        </section>
        <section class="bti-wrapper">
            <article class="bti-item">
                <div class="bti-image">
               <img alt="Cutie de viteze automat&#259;" title="Cutie de viteze automat&#259;" src="/assets/img/b_max/1214428290254.jpg">
                </div>
                <header class="bti-title">Transmisie automată ultraeficientă</header>
                <div class="bti-body">
                    <div class="abstract">
                        Motorul pe benzină TI-VCT de 1,6 litri e disponibil şi cu transmisia automată Powershift. Combin&acirc;nd confortul unei cutii automate cu sportivitatea şi nivelul de control specifice unei cutii manuale, această transmisie cu şase viteze şi dublu ambreiaj pre-selectează automat viteza următoare, pentru a nu permite nicio pierdere de putere &icirc;n momentul schimbării vitezelor. Schimbarea devine extrem de rapidă şi de fluidă, făc&acirc;nd şofatul mai plăcut şi mai antrenant şi, &icirc;n acelaşi timp, reduc&acirc;nd consumul şi emisiile de CO2 sub cifrele caracteristice unei transmisii automate tradiţionale.
                    </div>
                </div>
            </article>
        </section>
    </div>
    <!--</div>-->
    <!--<div id='tab2' class="mp-tab-wrapper">
    <h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">Consum</a></h2> -->
    <div id='tab2' class="tab-content" style="display:none;">
        <section class="bto-wrapper">
            <article class="bto-item">
                <header class="bto-title">
                    <h1> </h1>
                </header>
                <div class="bto-body">
                    <div class="abstract">
                        Pe l&acirc;ngă motoarele &ndash;diesel şi pe benzină- de &icirc;naltă eficienţă, B-MAX dispune şi de o serie de tehnologii avansate, menite să amelioreze şi mai mult consumul.
                    </div>
                    <div class="body">
                    </div>
                </div>
            </article>
        </section>
        <section class="bti-wrapper">
            <article class="bti-item">
                <div class="bti-image">
                 <img alt="Designul sofisticat al noului B-MAX" title="Designul sofisticat al noului B-MAX" src="/assets/img/b_max/1214419926386.jpg">
                </div>
                <header class="bti-title">Consum scăzut cu până la 10%, cu sistemul Auto-Start-Stop</header>
                <div class="bti-body">
                    <div class="abstract">
                        Atunci c&acirc;nd B-MAX stă pe loc, de exemplu la semafor sau &icirc;ntr-un ambuteiaj, acest sistem opreşte &icirc;n mod automat motorul (dar continuă să alimenteze sistemele de bază, cum ar fi climatizarea, farurile şi sistemul de sunet). &Icirc;n momentul &icirc;n care eşti gata să te pui &icirc;n mişcare sistemul porneşte motorul, tot automat. Util &icirc;n special &icirc;n condiţii de trafic urban, sistemul Aut-Start-Stop te poate ajuta să reduci consumul cu p&acirc;nă la 10% (&icirc;n trafic urban), respectiv 5% (&icirc;n condiţii de trafic mixt).
                    </div>
                </div>
            </article>
        </section>
        <section class="bti-wrapper">
            <article class="bti-item">
                <div class="bti-image">
                  <img alt="&Icirc;nc&#259;rcare regenerativ&#259; inteligent&#259;" title="&Icirc;nc&#259;rcare regenerativ&#259; inteligent&#259;" src="/assets/img/b_max/1214419928224.jpg">
                </div>
                <header class="bti-title">Un mod mai eficient de a reîncărca bateria</header>
                <div class="bti-body">
                    <div class="abstract">
                        Spre deosebire de sistemele convenţionale, sistemul de Re&icirc;ncărcare Regenerativă Inteligentă &icirc;ncarcă bateria numai atunci c&acirc;nd este nevoie şi, mai ales, &icirc;n modul cel mai economic posibil. Spre exemplu, atunci c&acirc;nd acţionezi fr&acirc;nele, acest sistem transformă forţa utilizată &icirc;n curent electric, pe care &icirc;l foloseşte pentru a re&icirc;ncărca bateria c&acirc;nd eşti &icirc;n mişcare. Rezultatul este o economie de combustibil şi un nivel mai mic de emisii.
                    </div>
                </div>
            </article>
        </section>
        <section class="bti-wrapper">
            <article class="bti-item">
                <div class="bti-image">
                   <img alt="Indicator schimbare treapt&#259; de viteze" title="Indicator schimbare treapt&#259; de viteze" src="/assets/img/b_max/1214419927717.jpg">
                                    </div>
                <header class="bti-title">Indicator de schimbare a vitezelor, pentru un condus eficient</header>
                <div class="bti-body">
                    <div class="abstract">
                        Un indicator de pe panoul de bord te anunţă c&acirc;nd este momentul optim pentru a schimba vitezele, astfel &icirc;nc&acirc;t să obţii maximum de eficienţă. E o modalitată simplă dar eficace de a face fiecare călătorie să fie mai economică. Această dotare este disponibilă cu majoritatea variantelor de motorizare.
                    </div>
                </div>
            </article>
        </section>
        <section class="bti-wrapper">
            <article class="bti-item">
                <div class="bti-image">
                  <img alt="Ford B-MAX EcoMode" title="Ford B-MAX EcoMode" src="/assets/img/b_max/1214419929977.jpg">
                </div>
                <header class="bti-title">Un sistem de informare inteligent, care te ajută să adopţi un stil de condus eficient</header>
                <div class="bti-body">
                    <div class="abstract">
                        Inovativul sistem Ford Eco Mode analizează permanent modul &icirc;n care conduci şi efectele stilului de condus asupra consumului. Printre aspectele analizate se numără viteza, capacitatea de anticipare a condiţiilor de trafic, schimbarea treptelor de viteză, precum şi proporţia drumurilor scurte. Toate aceste informaţii sunt procesate de un program avansat, care &icirc;ţi oferă, apoi, sfaturi pentru adaptarea stilului tău de condus, astfel &icirc;nc&acirc;t să devină c&acirc;t mai eficient şi economic.
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
<script id="TagIT.load" src='/cs/ContentServer?pagename=RORO4_ENGINE/script/packager&c=Page&cid=1205005703660&location=load&isMobile=false&require=main' defer></script>
</div>