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
            <li data-selenium="breadcrumb_nameplate">Kuga</li>
        </ul>
    </nav>
    <script>
        var vehicleimagepackpresid = '1205035168917';
        var vehicleimagepackyear = 'YYW';
    </script>
    <div class="fblike-locale">ro_RO</div>
    <script>
        var googleAdServerNameplateId = '00O';
        var googleAdServerNameplateName = 'Kuga';
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
            {"strIntroToFord":" NOUL", "brand":"Ford", "vehicleType":"PV", "catalogId":"9326", "nameplate":"Kuga", "labelAvailableFrom":"De la", "formattedCurrency":"26.950 RON", "nameplateText":"\u00CE\u021Bi prezent\u0103m cu m\u00E2ndrie noul Ford Kuga, cel mai inteligent SUV al nostru.", "imagePack":true, "hideVehicleImage":false, "images":["/assets/img/kuga/Kuga_GingerAle_LHD_Front_00001.jpg"], "backgroundImagePath":["null", "null", "null"], "disclaimerTextColor":[null, null, null], "current":true, "cid":"1205023531647", "cta":[
                {"linkTitle":"MODELE Kuga", "linkURL":"/Autoturisme/Kuga/Modele", "linkType":"primary", "linkTarget":"", "omid":"va"},
                {"linkTitle":"DESCARC\u0102 BRO\u015EUR\u0102 ", "linkURL":"\/SBE\/Brosura\/DescarcaBrosura", "linkType":"tertiary", "linkTarget":"_blank", "omid":"tr"},
                {"linkTitle":"\u00CENSCRIE-TE LA TEST DRIVE ", "linkURL":"\/SBE\/TestDrive?shopcode=00O", "linkType":"tertiary", "linkTarget":"_blank", "omid":"tr"},
                {"linkTitle":"VREAU SĂ FIU INFORMAT(Ă) ", "linkURL":"/SBE/VreauSaFiuInformata", "linkType":"tertiary", "linkTarget":"", "omid":"tr"}
            ], "social":{"facebook":"https://facebook.com", "facebookPage":"fordromania"}, "disclaimer":"Modelul prezentat este un Kuga Titanium. Imagine cu titlul de prezentare.", "seriesCode":"7TK", "uscCode":"00O", "supportSelector":"true", "supportSeries":"true", "presId":"1205035168917", "promos":[], "idf":{"options":[
                {"dataOverlay":{"mediaType":"Flash", "height":"439", "width":"780"}, "iconURL":"/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobheader=image%2Fjpg&blobwhere=1214484922188&blobkey=id", "link":"/cs/ContentServer?cid=1205033798153&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Flash_C&amp;site=RORO4_ENGINE", "videoSrc":[
                    {"src1":""},
                    {"src2":""}
                ], "youtubeClose":"", "tooltipText":"Ford Kuga"}
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
                        Modelul prezentat este un Kuga Titanium. Imagine cu titlul de prezentare.
                    </aside>
                </li>
            </ul>
            <div itemscope itemtype="http://schema.org/Product" id="nameplateDetails" class="nameplate-vehicle">
                <!--the text description-->
                <div class="name-plate-text">
                    <p class="intro"> NOUL</p>

                    <h1 class="bigHeading">
                        <span itemprop="model" itemscope itemtype="http://schema.org/Organization"
                              class="mark">Ford</span>
                        <span itemprop="member" class="nameplate boldTxt">Kuga</span>
                    </h1>
                    <!--The price-->
                    <!--The blurb-->
                    <p class="blurb">
                        &Icirc;ți prezentăm cu m&acirc;ndrie noul Ford Kuga, cel mai inteligent SUV al nostru.
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
<script type="text/javascript"> var nameplateTabErrorMsg = 'Ne pare r&#259;u, momentan nu putem s&#259; &icirc;nc&#259;rc&#259;m con&#539;inutul pe care l-a&#539;i solicitat. &Icirc;ncerca&#539;i din nou, mai t&acirc;rziu.'; </script>
<section id="primary-tab-content" class="nameplate-tab-content" data-dynamic-tabcontent="false">
<div class="tab-wrapper">
    <nav class="tabs" id="primaryTabs">
        <ul>
            <li><a href="/Autoturisme/Kuga/Prezentare#primaryTabs" class="om_mt_ti"
                   data-ajaxlink="/Autoturisme/Kuga/Prezentare">Prezentare general&#259;</a>
            </li>
            <li><a href="/Autoturisme/Kuga/Design#primaryTabs" class="om_mt_ti"
                   data-ajaxlink="/Autoturisme/Kuga/Design">Design</a>
            </li>
            <li class="selected"><a href="/Autoturisme/Kuga/ExperientaLaVolan#primaryTabs"
                                    data-ajaxlink="/Autoturisme/Kuga/ExperientaLaVolan">Experien&#539;a la volan</a>
            </li>
            <li><a href="/Promotii/Autoturisme/KugaSummerEdition" class="om_mt_ti"
                   data-ajaxlink="/Autoturisme/Kuga/PreturisiPromotii">PROMO&#354;II</a>
            </li>
            <li><a href="/Autoturisme/Kuga/PerformantaSiEficienta#primaryTabs" class="om_mt_ti"
                   data-ajaxlink="/Autoturisme/Kuga/PerformantaSiEficienta">Performan&#355;&#259; &#351;i eficien&#355;&#259;</a>
            </li>
            <li><a href="#" id="moreTab">Mai multe...</a><span></span></li>
        </ul>
    </nav>
</div>
<nav class="sub-nav ">
    <ul>
        <li><a href="/Autoturisme/Kuga/Siguranta"
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
            <h1>Deții controlul, indiferent unde conduci</h1>
        </header>
        <div class="bto-body">
            <div class="abstract">
                <div>Ford Kuga este echipat cu numeroase tehnologii inteligente, care &icirc;ți fac călătoriile mai
                    uşoare şi mai plăcute, indiferent dacă te afli &icirc;n oraş sau pe teren accidentat. Sunt, de
                    asemenea, disponibile diverse dotări inovatoare, destinate exclusiv confortului tău. Pe l&acirc;ngă
                    interiorul mai spaţios şi mai luxos, vei găsi mult spaţiu de depozitare practic şi flexibil. Află
                    mai multe detalii mai jos.
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
            <li><a href='#tab1' class='omt_'>Tehnologie</a></li>
            <li><a href='#tab2' class='omt_'>Confort</a></li>
            <li><a href='#tab3' class='omt_'>Inteligenţă</a></li>
        </ul>
    </nav>
</div>
<!-- BEGIN [MidPageTabs] -->
<div class="innertab-wrapper">
<!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Tehnologie</a></h2> -->
<div id='tab1' class="tab-content" style="display:none;">
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Ford Kuga 4x4" title="Ford Kuga 4x4"
                         src="/assets/img/kuga/1214439610132.jpg">

            </div>
            <header class="bti-title">Pentru aderenţă instantanee pe teren variabil</header>
            <div class="bti-body">
                <div class="abstract">
                    Sistemul inteligent de tracţiune integrală al noului Ford Kuga reacţionează şi se adaptează
                    instantaneu la schimbările de teren. Acesta trimite exact nivelul de putere necesar la nivelul
                    roţilor individuale care au nevoie de cel mai ridicat nivel de aderenţă. Pentru că este un
                    sistem &bdquo;la cerere&rdquo;, acesta se activează doar atunci c&acirc;nd este nevoie, economisind
                    combustibil atunci c&acirc;nd drumul este mai puțin solicitant. <br>
                    <br>
                    Dacă dorești să vezi cum se comportă roţile &icirc;n timpul deplasării, ecranul cu informaţii despre
                    tracţiunea integrală afişează &icirc;n mod continuu, sub forma unui grafic cu bare, c&acirc;tă
                    putere este trimisă către fiecare roată.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Ford Kuga - asistenta la parcare" title="Ford Kuga - asistenta la parcare"
                         src="/assets/img/kuga/1214439608698.jpg">

            </div>
            <header class="bti-title">Spaţiu limitat de parcare? Kuga poate parca singur</header>
            <div class="bti-body">
                <div class="abstract">
                    Sistemul de asistenţă activă la parcare te ajută să parchezi &icirc;n spaţii cu mai puţin de un
                    metru mai lungi dec&acirc;t maşina. Nu trebuie dec&acirc;t să apeși un buton iar senzorii acestui
                    sistem inovator vor identifica un spaţiu suficient de mare atunci c&acirc;nd treci pe l&acirc;ngă
                    el. Apoi sistemul va prelua automat controlul direcţiei, iar tu nu va trebui dec&acirc;t să
                    acţionezi pedala de acceleraţie, cutia de viteze şi fr&acirc;na, urmărind instrucţiunile de pe ecran
                    şi semnalele sonore.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Ford SYNC asistenta de urgenta" title="Ford SYNC asistenta de urgenta"
                         src="/assets/img/kuga/1214439607422.jpg">

            </div>
            <header class="bti-title">Asistenţă de urgenţă</header>
            <div class="bti-body">
                <div class="abstract">
                    &Icirc;n eventualitatea unui accident şi dacă airbagurile sunt declanşate, această tehnologie (parte
                    a SYNC) foloseşte telefonul tău mobil pentru a apela serviciile de urgenţă, indic&acirc;ndu-le
                    acestora locul &icirc;n care te afli. Funcţia Asistenţă de urgenţă a primit premiul de &bdquo;Cea
                    mai bună inovaţie mobilă &icirc;n domeniul auto sau utilităţi&rdquo; &icirc;n cadrul Premiilor
                    Global Mobile, ediţia 2012.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Ford Kuga - camera spate" title="Ford Kuga - camera spate"
                         src="/assets/img/kuga/1214439610432.jpg">

            </div>
            <header class="bti-title">Deplasare în marşarier mai sigură şi mai uşoară cu ajutorul camerei video pentru
                vizualizare spate
            </header>
            <div class="bti-body">
                <div class="abstract">
                    Camera video pentru vizualizare spate &icirc;ți arată tot ce se află &icirc;n spatele
                    autovehiculului pe un ecran integrat &icirc;n consola centrală. Aceasta &icirc;ți indică lucrurile
                    pe care este posibil să nu le vezi şi te ghidează şi &icirc;n cele mai mici locuri, prin intermediul
                    liniilor virtuale. Pentru un plus de confort, camera video pentru vizualizare spate se activează
                    automat atunci c&acirc;nd este selectată treapta de marşarier.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Ford Kuga - manevrabilitate" title="Ford Kuga - manevrabilitate"
                         src="/assets/img/kuga/1214439609449.jpg">

            </div>
            <header class="bti-title">Un tempomat mai sigur</header>
            <div class="bti-body">
                <div class="abstract">
                    La fel ca &icirc;n cazul unui tempomat obişnuit, tempomatul adaptiv (ACC)* &icirc;ți permite să
                    selectezi şi să menţii viteza de deplasare ( &icirc;ntre 25 km/h şi 185 km/h** ). Iar ACC este mai
                    sigur prin faptul că ori de c&acirc;te ori detectează un autovehicul &icirc;n faţă, reduce viteza
                    autovehiculului astfel &icirc;nc&acirc;t să te afli la o distanţă prestabilită faţă de autovehiculul
                    din faţa ta. După ce drumul din faţă este din nou liber, autovehiculul revine la viteza pe care ai
                    selectat-o inițial. <br>
                    <br>
                    ACC este prevăzut şi cu sistemul de avertizare frontală*, un sistem de monitorizare care te
                    avertizează dacă te apropii prea mult de vehiculele din faţă. Sistemul de avertizare frontală a
                    primit recent Premiul Euro NCAP avansat, un premiu prestigios pentru tehnologia siguranţei auto.
                    <br>
                    <br>
                    *Disponibil numai pentru anumite clase de autovehicule. <br>
                    <br>
                    ** Acolo unde acest lucru este permis prin lege. Trebuie avut &icirc;n vedere faptul că sistemul ACC
                    nu va evita coliziunile cu obiectele care nu se află &icirc;n mişcare.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <header class="bti-title">Servodirecţie care utilizează mai puţină putere</header>
            <div class="bti-body">
                <div class="abstract">
                    Kuga este dotat cu servodirecţie electrică* (EPAS) ce se reglează automat pentru a se adapta c&acirc;t
                    mai bine situaţiei. Sistemul facilitează mişcările roţilor şi &icirc;ți conferă un nivel superior de
                    manevrabilitate, atunci c&acirc;nd te deplasezi &icirc;n oraş, la viteze reduse sau c&acirc;nd
                    parchezi. De asemenea, direcţia va fi mai rigidă atunci c&acirc;nd ai nevoie de mai mult control
                    şi &icirc;ncredere la viteze mai mari. Spre deosebire de majoritatea sistemelor, care sunt
                    active &icirc;n mod permanent, EPAS se activează numai atunci c&acirc;nd este necesar.
                    Aceasta &icirc;nseamnă că foloseşte mai puţină energie, cresc&acirc;nd şi mai mult economia de
                    combustibil.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Ford SYNC hands-free" title="Ford SYNC hands-free"
                         src="/assets/img/kuga/1214439608546.jpg">

            </div>
            <header class="bti-title">Ford SYNC. Tehnologia avansată hands-free</header>
            <div class="bti-body">
                <div class="abstract">
                    Ford SYNC cu comenzi vocale citeşte mesajele text cu voce tare, &icirc;ți permite să controlezi
                    muzica, să efectuezi şi să preiei apeluri de pe telefonul mobil, utiliz&acirc;nd comenzi vocale
                    simple şi directe, put&acirc;nd, astfel, să &icirc;ți concentrezi &icirc;ntreaga atenţie asupra
                    condusului. <br>
                    <br>
                    Acest sistem avansat nu numai că &icirc;ți permite să redai melodii de pe un dispozitiv USB sau MP3
                    şi să redai muzică &icirc;n flux de pe un telefon mobil compatibil cu tehnologia Bluetooth&reg;, ci
                    poate recunoaşte, de asemenea, un c&acirc;ntec sau un artist difuzat la radio. Poate chiar să creeze
                    o listă de redare cu melodii similare cu cea pe care o asculţi.
                </div>
            </div>
        </article>
    </section>
</div>
<!--</div>-->
<!--<div id='tab2' class="mp-tab-wrapper">
<h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">Confort</a></h2> -->
<div id='tab2' class="tab-content" style="display:none;">
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Ford Kuga - plafon panoramic" title="Ford Kuga - plafon panoramic"
                         src="/assets/img/kuga/1214439609524.jpg">

            </div>
            <header class="bti-title">Plafon panoramic care se deschide, pentru o senzaţie de spaţiu larg şi luminos
            </header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Plafonul panoramic, opţional, al noului Ford Kuga permite luminii naturale să pătrundă &icirc;năuntru
                        şi poate fi deschis pentru a oferi pasagerilor o imagine extraordinară a cerului şi a peisajului
                        exterior. Pelicula de pe acoperiş ce reflectă razele solare nu permite &icirc;ncălzirea &icirc;n
                        exces a interiorului, &icirc;nsă, dacă este necesar, poţi utiliza parasolarul electric integrat
                        pentru a nu permite razelor solare să pătrundă &icirc;n interior.
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Ford Kuga - interior" title="Ford Kuga - interior"
                         src="/assets/img/kuga/1214439610057.jpg">

            </div>
            <header class="bti-title">Selectează o temperatură pentru tine şi o alta pentru pasager</header>
            <div class="bti-body">
                <div class="abstract">
                    Pasagerului &icirc;i place un interior călduţ, dar tu preferi unul mai răcoros. Soluţia? Sistemul de
                    climatizare automată cu zonă dublă de control (DEATC). Această opţiune &icirc;ți permite să setezi
                    separat temperatura pentru tine şi pentru pasagerul din faţă, cu o diferenţă de p&acirc;nă la 4&deg;C &icirc;ntre
                    locuri.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <header class="bti-title">Reglează iluminatul pe timp de noapte în funcţie de starea ta de spirit</header>
            <div class="bti-body">
                <div class="abstract">
                    Iluminatul ambiental &icirc;ți permite să adăugi un aer subtil şi sofisticat, &icirc;n nuanţe de
                    roşu, &icirc;n interiorul autovehiculului pe timp de noapte. Această lumină este emisă de la nivelul
                    consolei superioare, al suporturilor pentru pahare, din jurul mecanismelor de deschidere a uşilor şi
                    de la nivelul spaţiului pentru picioare. Adăugă sistemul de reglare a luminii ambientale şi poţi
                    alege dintre şapte culori şi intensităţi diferite.
                </div>
            </div>
        </article>
    </section>
</div>
<!--</div>-->
<!--<div id='tab3' class="mp-tab-wrapper">
<h2><a href='#tab3' class="mp-tab omt_xd_mt_ti">Inteligenţă</a></h2> -->
<div id='tab3' class="tab-content" style="display:none;">
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Ford Kuga" title="Ford Kuga"
                         src="/assets/img/kuga/1214439609903.jpg">

            </div>
            <header class="bti-title">Deschizi şi închizi hayonul electric, chiar şi cu mâinile ocupate</header>
            <div class="bti-body">
                <div class="abstract">
                    Hayonul hands-free este cu adevărat util dacă ai m&acirc;inile ocupate. Nu trebuie dec&acirc;t să
                    mişti piciorul sub bara de protecţie din spate şi hayonul se va deschide şi se va &icirc;nchide
                    automat. Sistemul utilizează doi senzori sub bara de protecţie din spate, care recunosc c&acirc;nd
                    piciorul intră &icirc;n c&acirc;mpul lor electric. Un semnal este apoi trimis către vehicul, solicit&acirc;nd
                    deschiderea sau &icirc;nchiderea hayonului. Acest sistem va funcţiona doar dacă ai cheia KeyFree la
                    tine.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Ford Kuga" title="Ford Kuga"
                         src="/assets/img/kuga/1214439609674.jpg">

            </div>
            <header class="bti-title">Intrare facilă şi pornire fără cheie</header>
            <div class="bti-body">
                <div class="abstract">
                    Sistemul Ford KeyFree &icirc;ți permite să &icirc;ncui şi să descui noua Kuga fără să scoți cheia
                    din buzunar sau poşetă. Chiar şi după ce ai intrat &icirc;n autovehicul, tot nu va trebui să
                    folosești cheia. Trebuie doar să acţionezi butonul de pornire Ford Power &icirc;n timp ce ţii
                    ambreiajul apăsat (sau pedala de fr&acirc;nă pe modelul cu transmisie automată) şi motorul se
                    pune &icirc;n mișcare.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Ford Kuga" title="Ford Kuga"
                         src="/assets/img/kuga/1214439607500.jpg">

            </div>
            <header class="bti-title">Ştergătoare care se reglează automat, în funcţie de ploaie</header>
            <div class="bti-body">
                <div class="abstract">
                    Ştergătoarele de parbriz cu senzor de ploaie se activează &icirc;n secunda &icirc;n care detectează
                    stropi de apă pe parbrizul autovehiculului, iar apoi &icirc;şi reglează viteza pentru a face faţă
                    oricăror condiţii meteo. Poţi alege unul dintre cele şase niveluri de sensibilitate, care stabilește
                    c&acirc;t de multă umiditate trebuie să se acumuleze &icirc;nainte ca ştergătoarele să intre &icirc;n
                    acţiune.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Ford Kuga" title="Ford Kuga"
                         src="/assets/img/kuga/1214439608320.jpg">

            </div>
            <header class="bti-title">Oglinzi electrice laterale cu protecţie integrată</header>
            <div class="bti-body">
                <div class="abstract">
                    Pentru a evita deteriorarea accidentală, oglinzile laterale pliabile electric se pliază automat
                    către interior după ce ai parcat. Atunci c&acirc;nd sunt rabatate, oglinzile protejează, de
                    asemenea, indicatoarele integrate elegante.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Ford Kuga - Quickclear" title="Ford Kuga - Quickclear"
                         src="/assets/img/kuga/1214439610656.jpg">

            </div>
            <header class="bti-title">Datorită parbrizului încălzit Quickclear nu mai este necesar să utilizezi
                racleta
            </header>
            <div class="bti-body">
                <div class="abstract">
                    Apeși, pur şi simplu, pe un buton, iar elementele de &icirc;ncălzire invizibile vor &icirc;ndepărta
                    rapid gheaţa sau zăpada &icirc;n locul tău.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Ford Easy-Fuel" title="Ford Easy-Fuel"
                         src="/assets/img/kuga/1214439608774.jpg">

            </div>
            <header class="bti-title">Ford Easy-Fuel, pentru alimentări fără probleme</header>
            <div class="bti-body">
                <div class="abstract">
                    Acesta face să fie practic imposibilă alimentarea greşită a autovehiculului, deoarece duza pompei nu
                    se va potrivi. Şi pentru că Easy-Fuel este un sistem fără buşon, nu veţi mai avea de-a face
                    niciodată cu un buşon murdar.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <header class="bti-title">Mai mult spaţiu pentru toate lucrurile tale</header>
            <div class="bti-body">
                <div class="abstract">
                    Spaţiul din portbagajul Kuga este acum mai mare şi mai flexibil, aşa că poţi pune &icirc;n acesta
                    tot ce ai nevoie pentru un weekend sportiv &icirc;n afara oraşului, o vacanţă cu familia sau atunci
                    c&acirc;nd mergi la cumpărături. Există numeroase zone de depozitare utile &icirc;n &icirc;ntreg
                    vehiculul, pentru toate lucrurile, de la sticle mari de apă, un atlas de dimensiune A4 şi o umbrelă,
                    p&acirc;nă la articole mai mici, precum ochelarii de soare, telefonul mobil şi cheile.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <header class="bti-title">Adaptează-ţi portbagajul după nevoie</header>
            <div class="bti-body">
                <div class="abstract">
                    Podeaua de &icirc;ncărcare din spate, reglabilă, a noului Ford Kuga poate fi configurată &icirc;n
                    două poziţii, fie jos, pe podeaua portbagajului, pentru a crea un spaţiu mai ad&acirc;nc, fie mai
                    sus, pentru a crea un spaţiu de &icirc;ncărcare plat cu scaunele din spate cobor&acirc;te.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <header class="bti-title">Faruri care se aprind automat, la nevoie</header>
            <div class="bti-body">
                <div class="abstract">
                    Kuga este prevăzut cu senzori care detectează lumina ce scade &icirc;n intensitate şi activează
                    farurile cu acţionare automată, fapt ce asigură un plus de siguranţă şi facilitează deplasările la
                    lăsatul serii. Acestea se activează, de asemenea, automat atunci c&acirc;nd intri &icirc;ntr-un
                    tunel. Farurile automate sunt disponibile ca dotare opţională cu ştergătoarele cu senzor de ploaie.
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
<!-- nosc comp -->

</div>