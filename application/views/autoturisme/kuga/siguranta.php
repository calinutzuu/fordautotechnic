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
            <li><a href="/Autoturisme/Kuga/ExperientaLaVolan#primaryTabs" class="om_mt_ti"
                   data-ajaxlink="/Autoturisme/Kuga/ExperientaLaVolan">Experien&#539;a la volan</a>
            </li>
            <li><a href="/Autoturisme/Kuga/PreturisiPromotii#primaryTabs" class="om_mt_ti"
                   data-ajaxlink="/Autoturisme/Kuga/PreturisiPromotii">PRE&#354;URI &#350;I PROMO&#354;II</a>
            </li>
            <li><a href="/Autoturisme/Kuga/PerformantaSiEficienta#primaryTabs" class="om_mt_ti"
                   data-ajaxlink="/Autoturisme/Kuga/PerformantaSiEficienta">Performan&#355;&#259; &#351;i eficien&#355;&#259;</a>
            </li>
            <li class="selected" id="moreTab"><a href="#">Mai multe...</a><span></span></li>
        </ul>
    </nav>
</div>
<nav class="sub-nav open">
    <ul>
        <li class="selected"><a href="/Autoturisme/Kuga/Siguranta" class="om_mt_ti"
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
            <h1>Siguranţă superioară, atât pe şosea, cât şi pe teren accidentat</h1>
        </header>
        <div class="bto-body">
            <div class="abstract">
                Ford Kuga este proiectat pentru a face faţă celor mai nefavorabile condiţii şi tipuri de carosabil, ceea
                ce &icirc;nseamnă că este foarte important ca autovehiculul să atingă cele mai ridicate niveluri de
                siguranţă. Şi reuşeşte să facă acest lucru cu ajutorul Sistemului inteligent de protecţie, al
                Programului de control electronic al stabilităţii şi al Sistemului Active City Stop, ca să enumerăm doar
                c&acirc;teva dintre caracteristicile inovatoare de siguranţă şi asistenţă pentru şofer.
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
            <li><a href='#tab1' class='omt_'>Sisteme de asistenţă</a></li>
            <li><a href='#tab2' class='omt_'>Siguranţă</a></li>
        </ul>
    </nav>
</div>
<!-- BEGIN [MidPageTabs] -->
<div class="innertab-wrapper">
    <!--<div id='tab1' class="mp-tab-wrapper">
    <h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Sisteme de asistenţă</a></h2> -->
    <div id='tab1' class="tab-content" style="display:none;">
        <section class="bti-wrapper">
            <article class="bti-item">
                <div class="bti-image">

                        <img alt="Ford SYNC asistenta de urgenta" title="Ford SYNC asistenta de urgenta"
                             src="/assets/img/kuga/1214439607422.jpg">

                </div>
                <header class="bti-title">Sistemul de Asistenţă in caz de urgenţă</header>
                <div class="bti-body">
                    <div class="abstract">
                        &Icirc;n eventualitatea unui accident şi dacă airbagurile sunt declanşate, această tehnologie
                        (parte a SYNC) foloseşte telefonul tău mobil pentru a apela serviciile de urgenţă, indic&acirc;ndu-le
                        acestora locul &icirc;n care te afli. Functia de asistenţă in caz de urgenţă a primit premiul
                        de &bdquo;Cea mai bună inovaţie mobilă &icirc;n domeniul auto sau utilităţi&rdquo; &icirc;n
                        cadrul Premiilor Global Mobile, ediţia 2012.
                    </div>
                </div>
            </article>
        </section>
        <section class="bti-wrapper">
            <article class="bti-item">
                <div class="bti-image">

                        <img alt="Ford Kuga - senzori radar" title="Ford Kuga - senzori radar"
                             src="/assets/img/kuga/1214439610282.jpg">

                </div>
                <header class="bti-title">Tehnologia care te atenţionează despre autovehiculele pe care nu le poţi
                    vedea
                </header>
                <div class="bti-body">
                    <div class="abstract">
                        <div>Sistemul de monitorizare a unghiului mort utilizează senzori radar pentru a identifica
                            autovehiculele care se pot afla &icirc;n unghiul mort. Aceşti senzori sunt situaţi pe ambele
                            părţi ale maşinii şi te avertizează prin intermediul unui led portocaliu, care se
                            aprinde &icirc;n oglinda laterală a şoferului.
                        </div>
                    </div>
                </div>
            </article>
        </section>
        <section class="bti-wrapper">
            <article class="bti-item">
                <div class="bti-image">

                        <img alt="Ford Kuga" title="Ford Kuga"
                             src="/assets/img/kuga/1214439608471.jpg">

                </div>
                <header class="bti-title">Două sisteme avansate care te ajută să păstrezi banda de circulaţie</header>
                <div class="bti-body">
                    <div class="abstract">
                        &Icirc;n cazul &icirc;n care te pregătești să părăsești banda de circulaţie, sistemul de
                        avertizare la părăsirea benzii emite o alertă prin vibraţii la nivelul volanului şi afişarea
                        unui avertisment vizual pe ecranul sistemului de informare a şoferului (poţi seta vibraţiile la
                        unul din cele trei niveluri de sensibilitate). Apoi, dacă reacţionezi mai greu sau nu
                        reacţionezi deloc, Sistemul de asistenţă la păstrarea benzii te va ajuta să revii pe banda
                        corectă. Sistemul de asistenţă la păstrarea benzii a c&acirc;ştigat un Premiu Euro NCAP Advanced
                        pentru beneficiile de siguranţă oferite.
                    </div>
                </div>
            </article>
        </section>
        <section class="bti-wrapper">
            <article class="bti-item">
                <div class="bti-image">

                        <img alt="Ford Kuga Driver - alerta" title="Ford Kuga Driver - alerta"
                             src="/assets/img/kuga/1214439608396.jpg">

                </div>
                <header class="bti-title">Sistemul de avertizare a şoferului îşi dă seama când eşti obosit</header>
                <div class="bti-body">
                    <div class="abstract">
                        <div>Sistemul de avertizare a şoferului monitorizează constant stilul tău de condus şi
                            detectează orice variaţie cauzată de oboseala şoferului. Dacă te simţi obosit, pe afişaj
                            apare o pictogramă de avertizare, care &icirc;ți sugerează să faci o pauză. Această
                            tehnologie a c&acirc;ştigat, de asemenea, un prestigios Premiu Euro NCAP Advanced.
                        </div>
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
                <header class="bti-title">Setează-ţi propria limită de viteză, iar Kuga o va respecta</header>
                <div class="bti-body">
                    <div class="abstract">
                        Fiind integrat &icirc;n cadrul tempomatului, dispozitivul de limitare a vitezei &icirc;ți
                        permite să setezi propria viteză maximă utiliz&acirc;nd un buton de pe volan. Autovehiculul va
                        respecta această valoare pentru ca să te poţi concentra asupra drumului şi nu asupra
                        vitezometrului. Atunci c&acirc;nd vrei să mărești viteza, apeși pur şi simplu pe pedala de
                        acceleraţie pentru a dezactiva sistemul.
                    </div>
                </div>
            </article>
        </section>
        <section class="bti-wrapper">
            <article class="bti-item">
                <div class="bti-image">

                        <img alt="Ford Kuga - asistenta" title="Ford Kuga - asistenta"
                             src="/assets/img/kuga/1214439609751.jpg">

                </div>
                <header class="bti-title">Un plus de control în cazul pornirilor în rampă</header>
                <div class="bti-body">
                    <div class="abstract">
                        Sistemul de asistenţă la urcarea in rampă &icirc;mpiedică alunecarea &icirc;n spate atunci c&acirc;nd
                        pornești &icirc;n plan &icirc;nclinat. Sistemul funcţionează prin menţinerea presiunii la
                        nivelul sistemului de fr&acirc;nare pentru un interval suplimentar de 2,5 secunde, asigur&acirc;ndu-ți
                        mai mult timp şi control atunci c&acirc;nd muţi piciorul de pe pedala de fr&acirc;nă pe cea de
                        acceleraţie. Acest sistem este, de asemenea, util atunci c&acirc;nd oprești şi pornești
                        autovehiculul pe suprafeţe alunecoase.
                    </div>
                </div>
            </article>
        </section>
        <section class="bti-wrapper">
            <article class="bti-item">
                <header class="bti-title">Putere suplimentară pentru frânare de urgenţă</header>
                <div class="bti-body">
                    <div class="abstract">
                        Sistemul de asistenţă la fr&acirc;narea de urgență (EBA) ajută autovehiculul Kuga să atingă
                        eficienţa maximă de fr&acirc;nare &icirc;n cazul unei situaţii de urgenţă. Sistemul detectează
                        presiunea aplicată de şofer pe pedala de fr&acirc;nă şi sporeşte automat această presiune, dacă
                        este nevoie.
                    </div>
                </div>
            </article>
        </section>
    </div>
    <!--</div>-->
    <!--<div id='tab2' class="mp-tab-wrapper">
    <h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">Siguranţă</a></h2> -->
    <div id='tab2' class="tab-content" style="display:none;">
        <section class="bti-wrapper">
            <article class="bti-item">
                <div class="bti-image">

                        <img alt="Ford Kuga Active City Stop" title="Ford Kuga Active City Stop"
                             src="/assets/img/kuga/1214439607348.jpg">

                </div>
                <header class="bti-title">Kuga acţionează frânele în locul tău pentru a evita coliziunile la viteze
                    reduse
                </header>
                <div class="bti-body">
                    <div class="abstract">
                        Tehnologia inovatoare a sistemului Active City Stop te ajută să eviţi coliziunile &icirc;n
                        trafic lent pentru viteze &icirc;ntre 15 km/h şi 30 km/h. Dacă sistemul detectează că
                        autovehiculul din faţă s-a oprit brusc, va acţiona automat fr&acirc;nele. Tehnologia Active City
                        Stop a c&acirc;ştigat recent Premiul Euro NCAP Advanced.
                    </div>
                </div>
            </article>
        </section>
        <section class="bti-wrapper">
            <article class="bti-item">
                <div class="bti-image">

                        <img alt="Ford Kuga SUV" title="Ford Kuga SUV"
                             src="/assets/img/kuga/1214439609600.jpg">

                </div>
                <header class="bti-title">Sistemele de siguranţă coordonate se activează într-o fracţiune de secundă
                </header>
                <div class="bti-body">
                    <div class="abstract">
                        Ford Kuga este echipat cu un sistem inteligent de protecţie avansat (IPS) care coordonează o
                        serie de sisteme de siguranţă pentru a asigura protecţie maximă șoferului şi pasagerilor. Pe l&acirc;ngă
                        caroseria rigidă şi foarte puternică, sunt disponibile şi numeroase airbaguri. Pentru a reduce
                        riscul de accidentare &icirc;n cazul unui accident, coloana de direcţie se va retrage la
                        distanţă de şofer.
                    </div>
                </div>
            </article>
        </section>
        <section class="bti-wrapper">
            <article class="bti-item">
                <div class="bti-image">

                        <img alt="Ford Kuga 4x4" title="Ford Kuga 4x4"
                             src="/assets/img/kuga/1214439608623.jpg">
                  
                </div>
                <header class="bti-title">Menţii controlul indiferent de condiţii</header>
                <div class="bti-body">
                    <div class="abstract">
                        Controlul electronic al stabilităţii (ESP) monitorizează constant deplasarea autovehiculului.
                        Acesta detectează devierile de la traseul ales, ca &icirc;n cazul &icirc;n care
                        autovehiculul &icirc;ncepe să patineze, şi corectează automat poziţia pe drum a autovehiculului,
                        ajut&acirc;ndu-te să menţii controlul asupra acestuia. <br>
                        <br>
                        Sistemul este mereu activ, &icirc;nsă acum există opţiunea de a trece la modul de &bdquo;Asistenţă
                        redusă&rdquo;, care intervine &icirc;n condiţii de carosabil alunecos, cum ar fi pe un strat
                        gros de zăpadă. Controlul electronic al stabilităţii include, de asemenea, Sistemul de control
                        al tracţiunii care elimină alunecarea &icirc;n exces a roţilor şi asigură cea mai bună aderenţă,
                        performanţă şi stabilitate, atunci c&acirc;nd ai mai mare nevoie. <br>
                        <br>
                        Cea mai recentă versiune a Controlului electronic al stabilităţii asigură reacţii mai bune la
                        nivelul pedalei de fr&acirc;nă şi maximizează eficienţa operaţiunii de fr&acirc;nare &icirc;n
                        condiţii dificile.
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