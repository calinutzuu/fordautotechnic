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
        var bootstrapVehicleData = {"vehicles":[{"strIntroToFord": " ","brand": "Ford","vehicleType": "PV","catalogId": "9323","nameplate": "B-MAX","labelAvailableFrom": "De la","formattedCurrency": "16.150 RON","nameplateText": "Datorit\u0103 sistemului ingenios de deschidere al u\u0219ilor, ai acces mult mai u\u0219or \u00EEn habitaclul ma\u0219inii \u0219i un interior extrem de rafinat \u0219i spa\u021Bios.","imagePack": true,"hideVehicleImage": false,"images": ["/assets/img/b_max/B-MAX_LHD_BurnishedGlow_Front_00001.jpg"],"backgroundImagePath": ["/assets/img/b_max/B-MAX_LHD_BurnishedGlow_Front_00001.jpg"],"disclaimerTextColor": [null,null,null],"current": true,"cid": "1205005696537","cta": [{"linkTitle": "MODELE B-MAX","linkURL": "/Autoturisme/NoulB-MAX/Modele","linkType": "primary","linkTarget": "","omid": "va"},{"linkTitle": "DESCARC\u0102 BRO\u015EUR\u0102 ","linkURL": "\/SBE\/Brosura\/DescarcaBrosura","linkType": "tertiary","linkTarget": "_blank","omid": "tr"},{"linkTitle": "\u00CENSCRIE-TE LA TEST DRIVE ","linkURL": "\/SBE\/TestDrive?shopcode=004","linkType": "tertiary","linkTarget": "_blank","omid": "tr"},{"linkTitle": "VREAU SĂ FIU INFORMAT(Ă) ","linkURL": "/SBE/VreauSaFiuInformata","linkType": "tertiary","linkTarget": "","omid": "tr"}],"social": {"facebook": "https://facebook.com","facebookPage": "fordromania"},"disclaimer": "Modelul prezentat este un B-MAX Titanium. Imagine cu titlul de prezentare.","seriesCode": "J6J","uscCode": "004","supportSelector": "true","supportSeries": "true","presId": "1205035169292","promos": [],"idf": {"options":[{"dataOverlay": {"mediaType":"Flash","height":"439","width":"780"},"iconURL":"/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobheader=image%2Fjpg&blobwhere=1214480084155&blobkey=id","link":"/cs/ContentServer?cid=1205020320463&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Flash_C&amp;site=RORO4_ENGINE","videoSrc":[{"src1":""},{"src2":""}],"youtubeClose":"","tooltipText":"Ford B-MAX"}]}}]} || {};
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
            <li ><a href="/Autoturisme/NoulB-MAX/Design#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/NoulB-MAX/Design">Design</a>
            </li>
            <li class="selected"><a href="/Autoturisme/NoulB-MAX/ExperientaLaVolan#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/NoulB-MAX/ExperientaLaVolan">Experien&#539;a la volan</a>
            </li>
            <li><a href="/Autoturisme/NoulB-MAX/PreturisiPromotii#primaryTabs" data-ajaxlink="/Autoturisme/NoulB-MAX/PreturisiPromotii">PRE&#354;URI &#350;I PROMO&#354;II</a>
            </li>
            <li><a href="/Autoturisme/NoulB-MAX/PerformantaSiEficienta#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/NoulB-MAX/PerformantaSiEficienta">Performan&#355;&#259; &#351;i eficien&#355;&#259;</a>
            </li>
            <li><a href="/Autoturisme/NoulB-MAX/Siguranta">Siguran&#539;&#259;</a></li>
        </ul>
    </nav>
</div>

<!--This is where the main content for the selected tab will go -->
<article class="nameplate-main-content" id="tabs">
<section class="bto-wrapper">
    <article class="bto-item">
        <header class="bto-title">
            <h1>Condusul urban – o plăcere!</h1>
        </header>
        <div class="bto-body">
            <div class="abstract">
                B-MAX transformă condusul prin oraș &icirc;ntr-o experiență cu adevărat plăcută și la &icirc;ndem&acirc;nă. Iar asta datorită tehnologiilor avansate din dotare și unui set de caracteristici surprinzătoare pentru o mașină de dimensiunea ei. Dacă mai pui și sistemul ingenios de deschidere a ușilor, B-MAX &icirc;ndeplinește toate exigențele șoferului modern.
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
            <li><a href='#tab1' class='omt_'>Tehnologii pentru condus</a></li>
            <li><a href='#tab2' class='omt_'>Confort</a></li>
            <li><a href='#tab3' class='omt_'>Funcţionalitate</a></li>
        </ul>
    </nav>
</div>
<!-- BEGIN [MidPageTabs] -->
<div class="innertab-wrapper">
<!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Tehnologii pentru condus</a></h2> -->
<div id='tab1' class="tab-content" style="display:none;">
    <section class="bto-wrapper">
        <article class="bto-item">
            <header class="bto-title">
                <h1> </h1>
            </header>
            <div class="bto-body">
                <div class="abstract">
                    B-MAX este echipat cu tehnologii de v&acirc;rf, care te ajută, practic, &icirc;n fiecare aspect al condusului.
                </div>
                <div class="body">
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
                <img alt="Sistem Active City Stop" title="Sistem Active City Stop" src="/assets/img/b_max/1214419928098.jpg">
                </div>
            <header class="bti-title">B-MAX frânează în locul tău, pentru a evita coliziunile la viteze scăzute</header>
            <div class="bti-body">
                <div class="abstract">
                    Inovativul sistem Active City Stop te ajută să eviţi, sau cel puţin să atenuezi, coliziunile din traficul urban, la viteze sub 30 km/h. dacă sistemul detectează oprirea bruscă a maşinii din faţa ta, va acţiona &icirc;n mod automat fr&acirc;nele.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
                <img alt="Ford B-MAX" title="Ford B-MAX" src="/assets/img/b_max/1214419926703.jpg">
                </div>
            <header class="bti-title">Control sporit la plecarea din rampă</header>
            <div class="bti-body">
                <div class="abstract">
                    Sistemul de Asistență la pornirea din rampă te oprește din alunecarea spre spate, atunci c&acirc;nd pornești din rampă. Sistemul funcționează prin menținerea presiunii asupra fr&acirc;nelor pentru &icirc;ncă 2,5 secunde, adică destul timp pentru ca să-ți poți muta piciorul de pe pedala de fr&acirc;nă pe cea de accelerație. De asemenea, este util pentru pornirea și oprirea pe suprafețe &icirc;nghețate sau cu polei.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
                <img alt="Ford B-MAX - camer&#259; vizualizare spate" title="Ford B-MAX - camer&#259; vizualizare spate" src="/assets/img/b_max/1214419927146.jpg">
                </div>
            <header class="bti-title">Dai cu spatele mai uşor şi mai sigur</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>St&acirc;lpi, gărdulețe, ziduri joase sau copii juc&acirc;ndu-se... Camera pentru vizualizare spate &icirc;ți arată tot ce se află &icirc;n spatele mașinii, pe ecranul sistemului de navigaţie. Pe l&acirc;ngă faptul că poți vedea lucruri pe care, altfel, le-ai fi omis, te ajută și la parcarea cu spatele, afiș&acirc;ndu-ți pe ecran linii virtuale care să te ghideze &icirc;n cele mai str&acirc;mte locuri. Pentru un maxim de confort, Camera vizualizare spate se activează automat c&acirc;nd schimbi &icirc;n marșarier.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
                <img alt="Senzori de parcare" title="Senzori de parcare" src="/assets/img/b_max/1214419929136.jpg">
                </div>
            <header class="bti-title">Fără stres la parcare</header>
            <div class="bti-body">
                <div class="abstract">
                    Senzorii de parcare (dotare opțională) te ajută să aproximezi mult mai corect distanțele dintre mașină și un obstacol din fața sau din spatele mașinii. Senzorii declanșează un semnal audio, care se intensifică pe măsură ce te apropii de obstacolul respectiv. Sistemul este conceput pentru ca tu să poți parca mai rapid și mai sigur.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
                <img alt="Control avansat al cuplului motor" title="Control avansat al cuplului motor" src="/assets/img/b_max/1214419926513.jpg">
                </div>
            <header class="bti-title">Aderenţă maximă pentru mai mult control</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Sistemul de Control avansat al cuplului motor culege informaţii privind suprafaţa de rulare de 100 de ori pe secundă. Pe baza informațiilor captate, sistemul menține un echilibru permanent &icirc;ntre puterea de tracțiune și forța de fr&acirc;nare transmise către fiecare din cele două roți din față. Inclusă ca dotare standard, această tehnologie maximizează aderența la sol și sporește manevrabilitatea autovehiculului, fiindu-ți mult mai uşor să parcurgi curbele şi sinuozităţile traseului.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
                <img alt="Ford B-MAX - consola centrala" title="Ford B-MAX - consola centrala" src="/assets/img/b_max/1214419929898.jpg">
            </div>
            <header class="bti-title">Consum redus cu Direcţia asistată electric</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>B-MAX este dotat cu Direcție asistată electric (EPAS), care se adaptează automat &icirc;n funcție de situație. C&acirc;nd conduci prin oraș la viteze mici sau c&acirc;nd parchezi, fiecare mișcare a volanului este mai lină și mai fluentă, sporind astfel manevrabilitatea mașinii. La viteze mari (pe autostradă, de exemplu), sistemul face mișcarea volanului mai rigidă, pentru a-ți oferi mai mult control și siguranță. Această tehnologie inovativă intră &icirc;n acțiune doar la nevoie, astfel că folosește mai puțină energie, consum&acirc;nd mai puțin combustibil.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
             <img alt="Tempomat" title="Tempomat" src="/assets/img/b_max/1214428291793.jpg">
             </div>
            <header class="bti-title">Drumurile lungi sunt mai relaxante</header>
            <div class="bti-body">
                <div class="abstract">
                    Dacă ești pe autostradă, poți seta viteza dorită direct de pe volan. Sistemul de Control al vitezei de croazieră menține viteza setată, astfel &icirc;nc&acirc;t nu mai e nevoie să ții apăsată pedala de accelerație. Vrei să mergi mai repede sau mai &icirc;ncet? E simplu: ajustezi viteza din aceleași comenzi manuale de pe volan.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
                <img alt="Sistemul Auto-Start-Stop" title="Sistemul Auto-Start-Stop" src="/assets/img/b_max/1214428291732.jpg">

            </div>
            <header class="bti-title">Consum mai redus cu ajutorul sistemului Auto-Start-Stop</header>
            <div class="bti-body">
                <div class="abstract">
                    B-Max este echipat, &icirc;n versiunile cu motorizări EcoBoost, cu sistemul Auto-Start-Stop, care opreşte automat motorul atunci c&acirc;nd maşina este staţionară, de exemplu la un semafor. Iar atunci c&acirc;nd eşti gata să te pui din nou &icirc;n mişcare, motorul va reporni automat. Această funcţionalitate se traduce &icirc;n cele mai bune niveluri de emisii şi consum din clasă: emisii de numai 114 grame CO2/kilometru si consum mixt de 4,9 l / 100 km.
                </div>
            </div>
        </article>
    </section>
</div>
<!--</div>-->
<!--<div id='tab2' class="mp-tab-wrapper">
<h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">Confort</a></h2> -->
<div id='tab2' class="tab-content" style="display:none;">
    <section class="bto-wrapper">
        <article class="bto-item">
            <header class="bto-title">
                <h1> </h1>
            </header>
            <div class="bto-body">
                <div class="abstract">
                    Bucură-te de un mediu elegant și silențios, conduc&acirc;nd pe străduțele &icirc;nguste și aglomerate ale orașului.
                </div>
                <div class="body">
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
                <img alt="Sistem inovativ de deschidere a u&#351;ilor" title="Sistem inovativ de deschidere a u&#351;ilor" src="/assets/img/b_max/1214428290998.jpg">
                </div>
            <header class="bti-title">Acces inovator cu un design unic al uşilor</header>
            <div class="bti-body">
                <div class="abstract">
                    Dacă deschizi simultan portiere din faţă şi uşa din spate, beneficiezi de un spaţiu liber de 1,5 metri, care &icirc;ţi uşurează enorm operaţiunile de &icirc;ncărcare şi descărcare. Acest sistem unic al B-Max se datorează modului innovator de integrare a montantului central &icirc;n portieră.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
                <img alt="Ingeniosul Ford B-MAX" title="Ingeniosul Ford B-MAX" src="/assets/img/b_max/1214419927464.jpg">
                </div>
            <header class="bti-title">Călătoreşti într-o ambianţă mai silenţioasă</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Pentru a oferi o experiență de drum mai relaxantă pentru tine și pasagerilor tăi, Ford B-MAX vine cu o serie de &icirc;mbunătățiri, care reduc zgomotul și vibrațiile motorului, sau cele cauzate de drum sau de v&acirc;nt. Sistemul inovator de acces &icirc;n habitaclu și de deschidere a ușilor este special izolat, pentru a bloca zgomotul provocat de v&acirc;nt și de curentul format &icirc;n timp ce mașina este &icirc;n mișcare.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
               <img alt="Ford B-MAX - interior premium" title="Ford B-MAX - interior premium" src="/assets/img/b_max/1214464695881.jpg">
               </div>
            <header class="bti-title">O vedere mai bună de la înălţime</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>La volanul Ford B-MAX ai o perspectivă mult mai bună asupra traficului, datorită poziţiei &icirc;nălţate a șoferului. Te va face să te simți mai sigur pe tine c&acirc;nd ești la volan, chiar și pe cele mai aglomerate șosele.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
                <img alt="Ford B-MAX - plafon panoramic" title="Ford B-MAX - plafon panoramic" src="/assets/img/b_max/1214464699332.jpg">
                </div>
            <header class="bti-title">Plafon panoramic pentru un interior mai spaţios</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Datorită plafonului panoramic al Ford B-MAX, lumina naturală pătrunde abundent &icirc;n habitaclu, cre&acirc;nd senzația unui interior și mai spațios. &Icirc;n plus, tu și pasagerii tăi veți avea parte de o vedere superbă a cerului şi a mediului &icirc;nconjurător. Plafonul panoramic include un strat proiectat sa reflecte razele soarelui, &icirc;mpiedic&acirc;nd &icirc;ncălzirea excesivă a interiorului. &Icirc;n caz de nevoie, poți folosi copertinele opace, integrate &icirc;n plafon, pentru a bloca complet razele de soare.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
                <img alt="Ford B-MAX - interior" title="Ford B-MAX - interior" src="/assets/img/b_max/1214419929518.jpg">
                </div>
            <header class="bti-title">Alege temperatura care ţi se potriveşte</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Cu ajutorul Sistemului de climatizare automată (EATC) (dotare opțională), pur și simplu selectezi temperatura interioară pe care o preferi, iar sistemul o menține prin tehnologia avansată de climatizare.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
                <img alt="Consola central&#259; premium" title="Consola central&#259; premium" src="/assets/img/b_max/1214419927845.jpg">
                </div>
            <header class="bti-title">Iluminarea interiorului în ton cu starea ta de spirit</header>
            <div class="bti-body">
                <div class="abstract">
                    Sistemul de iluminare ambientală &icirc;ți permite să adaugi nuanțe subtile de roșu &icirc;n interiorul mașinii, pe timp de noapte. Sursele de lumină se află &icirc;n consola de deasupra capului, cea centrală și cea de la picioare.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
                <img alt="Ford B-MAX cu plafon panoramic" title="Ford B-MAX cu plafon panoramic" src="/assets/img/b_max/1214419927274.jpg">
                </div>
            <header class="bti-title">Extra confort cu scaune reglabile şi încălzite</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Indiferent de condițiile de afară, &icirc;ntr-un B-MAX te poți simți &icirc;ntotdeauna confortabil. Alege opțiunea pentru scaune frontale &icirc;ncălzite, utile &icirc;n special &icirc;n timpul iernii și reglabile ca să fii sigur că toată lumea beneficiază de maxim de confort.</div>
                </div>
            </div>
        </article>
    </section>
</div>
<!--</div>-->
<!--<div id='tab3' class="mp-tab-wrapper">
<h2><a href='#tab3' class="mp-tab omt_xd_mt_ti">Funcţionalitate</a></h2> -->
<div id='tab3' class="tab-content" style="display:none;">
<section class="bto-wrapper">
    <article class="bto-item">
        <header class="bto-title">
            <h1> </h1>
        </header>
        <div class="bto-body">
            <div class="abstract">
                Designul unic al portierelor face din Ford B-MAX cea mai ingenioasă maşină din clasa sa; B-MAX oferă, &icirc;nsă, şi numeroase alte caracteristici menite să &icirc;ţi facă viaţa mai uşoară.
            </div>
            <div class="body">
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">
            <img alt="Ford B-MAX - design ingenios al usilor" title="Ford B-MAX - design ingenios al usilor" src="/assets/img/b_max/1214464699410.jpg">
            </div>
        <header class="bti-title">Acces fără precedent</header>
        <div class="bti-body">
            <div class="abstract">
                Sistemul de acces facil al Ford B-MAX uşurează foarte mult parcarea &icirc;n spaţii &icirc;nguste. Cele două portiere spate glisante, &icirc;mpreună cu portierele faţă clasice, oferă &icirc;mpreună o deschidere amplă, de un metru şi jumătate. Lucrul cel mai important &ndash; această deschidere este ne&icirc;ntreruptă de montanţii centrali, aceştia fiind <a href="" onclick="triggerOverlay('/cs/ContentServer?pagename=ENGInE/Overlay_C/ShowOverlay'amp;c=Overlay_C'amp;cid=1205005896341'amp;overlayheight=439'amp;overlaywidth=780','overlay','Montanți centrali integrați 'icirc;n uși',''Icirc;nchide','439','780'); return false;" target="_blank" title="Montanți centrali integrați &icirc;n uși">incluşi chiar in portiere</a> .
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">
            <img alt="Consola central&#259; premium" title="Consola central&#259; premium" src="/assets/img/b_max/1214419927845.jpg">
            </div>
        <header class="bti-title">Noul Ford SYNC. Tehnologie hands-free avansată</header>
        <div class="bti-body">
            <div class="abstract">
                Cu Ford SYNC poţi cotrola sistemul de sunet şi poţi iniţia sau primi apeluri pe telefonul mobil, fără a &icirc;ţi  folosi altceva dec&acirc;t vocea. Ford SYNC poate, chiar, să &icirc;ţi citească mesajele text, pentru ca tu să &icirc;ţi poţi păstra atenţia asupra drumului şi m&acirc;inile pe volan.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">
            <img alt="Sistem Ford SYNC" title="Sistem Ford SYNC" src="/assets/img/b_max/1214419927019.jpg">
            </div>
        <header class="bti-title">Ford SYNC poate rula muzică de pe dispositive externe, poate recunoaşte melodiile şi poate accesa toate listele tale predefinite</header>
        <div class="bti-body">
            <div class="abstract">
                Pe lângă faptul că poate rula melodii de pe dispozitivul tău USB sau MP3, sau chiar de pe telefonul mobil (dacă acesta are conectivitate Bluetooth), sistemul Ford SYNC poate recunoaşte şi autorul şi numele melodiei care rulează.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">
            <img alt="Sistem Ford SYNC - asisten&#539;&#259; de urgen&#539;&#259;" title="Sistem Ford SYNC - asisten&#539;&#259; de urgen&#539;&#259;" src="/assets/img/b_max/1214419927781.jpg">
        </div>
        <header class="bti-title">Mai multe funcţii, mai multă siguranţă</header>
        <div class="bti-body">
            <div class="abstract">
                Sistemul Ford SYNC include, acum şi Sistemul de Asistenţă &icirc;n situaţii de Urgenţă, o funcţie care permite sistemului să apeleze automat serviciile de urgenţă de pe telefonul tău, &icirc;n cazul &icirc;n care ai un accident. Sistemul de Asistenţă pentru situaţii de Urgenţă a c&acirc;ştigat premiul &lsquo;Best Mobile Innovation for Automotive Transport or Utilities&rsquo; (Cea mai bună inovaţie pentru mobil &icirc;n domeniul auto) la gala 2012 Global Mobile Awards, precum şi premiul Euro NCAp Advanced, pentru inovaţii &icirc;n domeniul siguranţei. <br>
                <br>
                De asemenea, poţi descărca toate actualizările programului Ford SYNC, pe măsură ce acestea sunt publicate. Spre exemplu, &icirc;n cur&acirc;nd va deveni disponibilă funcţia AppLink, adică posibilitatea de a accesa şi controla aplicaţii de Android, Blackberry şi iPhone prin comandă vocală.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">
            <img alt="Ford B-MAX interior" title="Ford B-MAX interior" src="/assets/img/b_max/1214419927908.jpg">
        </div>
        <header class="bti-title">Un sistem de scaune pe care il poţi configura cum doreşti</header>
        <div class="bti-body">
            <div class="abstract">
                Poţi avea la dispoziţie un spaţiu amplu de &icirc;ncărcare, prin rabatarea scaunelor din spate &ndash; lucru pe care &icirc;l poţi face cu o singură m&acirc;nă. E suficient să apeşi m&acirc;nerul de pe spătar şi să cobori, independent, cele două secţiuni ale spătarului (&icirc;ntr-o proporţie 60/40). Poţi, de asemenea, să rabatezi şi scaunul pasagerului din faţă, o caracteristică unică la B-MAX. astfel, ai la dispoziţie un spaţiu cuprinzător, pentru &icirc;ncărcături de p&acirc;nă la 2,35 metri lungime.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">
            <img alt="Ford B-MAX - spa&#539;iu de &icirc;nc&#259;rcare" title="Ford B-MAX - spa&#539;iu de &icirc;nc&#259;rcare" src="/assets/img/b_max/1214419926829.jpg">
        </div>
        <header class="bti-title">Adaptează podeaua portbagajului în funcţie de încărcătură</header>
        <div class="bti-body">
            <div class="abstract">
                Ford B-MAX este echipat cu o Podea Ajustabilă a Portbagajului, care poate fi fixată &icirc;n două poziţii: poţi fie să o cobori, obţin&acirc;nd un portbagaj mai ad&acirc;nc, pentru &icirc;ncărcături mai &icirc;nalte, fie să o fixezi la acelaşi nivel cu podeaua cabinei (cu 122 mm mai sus faţă de prima poziţie)  <br>
                <br>
                Această a doua poziţie &icirc;ţi permite şi să foloseşti spaţiul de sub podea, de exmplu amplas&acirc;nd acolo obiecte delicate ori de valoare.chiar şi reglată &icirc;n poziţia superioară, podeaua poate suporta &icirc;ncărcături de p&acirc;nă la 300 kg.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">
            <img alt="Sistem Ford KeyFree" title="Sistem Ford KeyFree" src="/assets/img/b_max/1214419926322.jpg">
        </div>
        <header class="bti-title">Fără chei înseamnă fără griji</header>
        <div class="bti-body">
            <div class="abstract">
                Sistemul Ford KeyFree &icirc;nseamnă că poţi &icirc;ncuia şi descuia maşina fără a mai căuta după chei &icirc;n buzunar sau &icirc;n poşetă. Adică exact ce &icirc;ţi trebuie atunci c&acirc;nd ai m&acirc;inile ocupate.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">
            <img alt="Faruri cu halogen" title="Faruri cu halogen" src="/assets/img/b_max/1214419928367.jpg">
        </div>
        <header class="bti-title">Faruri care se aprind automat, atunci când e nevoie</header>
        <div class="bti-body">
            <div class="abstract">
                Uneori se &icirc;nt&acirc;mplă să nu &icirc;ţi dai seama că se &icirc;nserează. B-MAX are senzori care detectează scădere &icirc;n intensitate a luminii şi, atunci c&acirc;nd e nevoie, aprind automat farurile. Astfel, condusul este mai simplu şi mai sigur. Farurile se aprind automat şi atunci c&acirc;nd intri &icirc;ntr-un tunel. Această dotare este disponibilă &icirc;ntr-un pachet opţional care include şi ştergătoarele cu sensor de ploaie.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">
            <img alt="Buton de pornire Ford Power " title="Buton de pornire Ford Power " src="/assets/img/b_max/1214419927527.jpg">
        </div>
        <header class="bti-title">Porneşte maşina prin simpla apăsare a unui buton</header>
        <div class="bti-body">
            <div class="abstract">
                Nu mai ai nevoie de cheie. E suficient să apeşi butonul Ford Power, ţin&acirc;nd ambreiajul apăsat (sau, pe transmisiile automate, pedala de fr&acirc;nă), iar motorul se va trezi imediat la viaţă.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">
            <img alt="Ford B-MAX - consol&#259; central&#259;" title="Ford B-MAX - consol&#259; central&#259;" src="/assets/img/b_max/1214419928035.jpg">
        </div>
        <header class="bti-title">Consola centrală cu design innovator îţi lasă un control deplin</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Consola central avansată, multi funcţională cu care este echipat B-MAX &icirc;ţi permite să controlezi numeroase dintre sistemele maşinii printr-o singură interfaţă. Toate funcţiile sunt afişate, cu claritate şi explicit, pe ecran; multe dintre ele pot fi controlate şi prin intermediul comenzilor de pe volan.</div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">
            <img alt="&#536;terg&#259;toare cu senzori de ploaie" title="&#536;terg&#259;toare cu senzori de ploaie" src="/assets/img/b_max/1214419927210.jpg">
        </div>
        <header class="bti-title">Ştergătoare care detectează automat stropii de ploaie</header>
        <div class="bti-body">
            <div class="abstract">
                Ştergătoarele cu sensor de ploaie se activează instantaneu &icirc;n momentul &icirc;n care detectează umezeală pe parbriz. Intermitenţa este ajustată, şi ea, automat, pentru a fi adecvată vremii de afară. Ai şi posibilitatea de a alege unul dintre cele şase niveluri de umezeală, &icirc;n funcţie de care ştergătoarele se declanşează.  Ştergătoarele cu sensor de ploaie sunt disponibile opţional, &icirc;mpreună cu farurile cu aprindere automată (vezi mai sus).
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">
           <img alt="Parbriz Quick-clear" title="Parbriz Quick-clear" src="/assets/img/b_max/1214419929454.jpg">
        </div>
        <header class="bti-title">Parbriz încălzit Quickclear - gheaţa nu mai e o problemă</header>
        <div class="bti-body">
            <div class="abstract">
                La simpla apăsare a unui buton, elementele invizibile din parbriz se &icirc;ncălzesc şi topesc rapid şi efficient gheaţa &ndash; iar asta &icirc;nseamnă o grijă mai puţin pentru tine.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">
        <img alt="Oglinzi exterioare flexibile" title="Oglinzi exterioare flexibile" src="/assets/img/b_max/1214419927971.jpg">
         </div>
        <header class="bti-title">Oglinzi laterale care se protejează singure</header>
        <div class="bti-body">
            <div class="abstract">
                Pentru a preveni deteriorarea, oglinzile laterale pliabile şi acţionate electric (dotare opţională) se pliază automat spre interior &icirc;n momentul &icirc;n care maşina este &icirc;ncuiată. &Icirc;n această poziţie protejează, de asemenea, semnalizatoarele integrate.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">
         <img alt="Sistem &quot;Follow me home&quot;" title="Sistem &quot;Follow me home&quot;" src="/assets/img/b_max/1214419926449.jpg">
          </div>
        <header class="bti-title">B-MAX îţi luminează drumul până la intrare</header>
        <div class="bti-body">
            <div class="abstract">
                C&acirc;nd ajungi acasă după lăsarea serii, e suficient să acţionezi o comandă, iar farurile &ldquo;&rdquo;Home Safe&rdquo; răm&acirc;n aprinse o vreme, lumin&acirc;ndu-ţi drumul p&acirc;nă la intrare. Nu te vei mai impiedica, pe &icirc;ntuneric, p&acirc;nă ajungi la intrare. Această funcţionalitate reprezintă o dotare standard pe toată gama B-MAX
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
<script id="TagIT.load" src='/cs/ContentServer?pagename=RORO4_ENGINE/script/packager&c=Page&cid=1205005692731&location=load&isMobile=false&require=main' defer></script>
</div>