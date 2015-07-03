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
            <li><a href="/Autoturisme/NoulFocus/PerformantaSiEficienta#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/NoulFocus/PerformantaSiEficienta">Performan&#355;&#259; &#351;i eficien&#355;&#259;</a>
            </li>
            <li><a href="/Autoturisme/NoulFocus/ExperientaLaVolan#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/NoulFocus/ExperientaLaVolan">Experien&#355;a la volan</a>
            </li>
            <li class="selected" id="moreTab"><a href="#">Mai multe...</a><span></span></li>
        </ul>
    </nav>
</div>
<nav class="sub-nav open">
    <ul>
        <li class="selected"><a href="/Autoturisme/NoulFocus/SigurantaSiSecuritate" class="om_mt_ti"
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
                <h1>Singura maşină premiată cu patru trofee Euro NCAP pentru siguranţă</h1>
            </header>
            <div class="bto-body">
                <div class="abstract">
                    <div>Ford Focus este prima maşină premiată cu patru trofee Euro NCAP - Advanced Safety Rewards. Acestea sunt menite să recompenseze tehnologiile inovatoare &icirc;n domeniul siguranţei auto. Tehnologiile c&acirc;ştigătoare, din echiparea noului Focus, sunt Sistemul de Avertizare a Şoferului, Sistemul de Avertizare Frontală (care este o componentă a Pilotului Automat Adaptiv), sistemul Active City Stop şi Sistemul de Asistenţă la Păstrarea Benzii. <br> <br> De asemenea, Focus a fost considerat &lsquo;Best in Class&rsquo; (cel mai bun model din clasa sa) &icirc;n categoria &lsquo;Maşini de familie de clasă mică&rsquo;, după ce a obţinut un scor de 5 stele la simulările de accident şi a avut scoruri foarte bune &icirc;n patru domenii esenţiale: ocupanţi adulţi, ocupanţi minori, pietoni şi măsuri de asistenţă pentru siguranţă. <br> <br> Află mai multe despre gama de dotării care fac din noul Focus o maşină şi mai sigură şi care te pot ajuta şi pe tine să conduci mai &icirc;n siguranţă.</div>
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
                <li><a href='#tab1' class='omt_'>Siguranţă</a></li>
            </ul>
        </nav>
    </div>
    <!-- BEGIN [MidPageTabs] -->
    <div class="innertab-wrapper">
        <!--<div id='tab1' class="mp-tab-wrapper">
        <h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Siguranţă</a></h2> -->
        <div id='tab1' class="tab-content" style="display:none;">
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">

                            <img alt="EPS" title="EPS" src="/assets/img/noul_focus/1214484329872.jpg">

                    </div>
                    <header class="bti-title">ESP</header>
                    <div class="bti-body">
                        <div class="abstract">
                            <div>Sistemul ESP al noului Ford Focus include noua caracteristică Stabilitate tranziţională &icirc;mbunătăţită, asigur&acirc;nd o mai bună stabilitate &icirc;n timpul manevrelor de evitare şi oferind mai mult control şoferului.</div>
                        </div>
                    </div>
                </article>
            </section>
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">

                            <img alt="Controlul trac&#355;iunii" title="Controlul trac&#355;iunii" src="/assets/img/noul_focus/1214484329955.jpg">

                    </div>
                    <header class="bti-title">Controlul tracţiunii</header>
                    <div class="bti-body">
                        <div class="abstract">
                            <div>Sistemul este mereu activ, &icirc;nsă acum există opţiunea de a trece la modul &bdquo;Control al tracţiunii dezactivat&rdquo;, care permite o rotire mai rapidă a roţilor, pentru a &icirc;mbunătăţi tracţiunea &icirc;n situaţii specifice şi foarte solicitante, cum ar fi atunci c&acirc;nd&nbsp;traseul e acoperit de un strat ad&acirc;nc de zăpadă, noroi sau nisip.</div>
                        </div>
                    </div>
                </article>
            </section>
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">

                            <img alt="Asisten&#355;&#259; pre-coliziune" title="Asisten&#355;&#259; pre-coliziune" src="/assets/img/noul_focus/1214484330041.jpg">

                    </div>
                    <header class="bti-title">Asistenţă pre-coliziune</header>
                    <div class="bti-body">
                        <div class="abstract">
                            <div>Sistemul de asistenţă pre-coliziune este activ pe &icirc;ntreg intervalul de viteză, detect&acirc;nd obiecte &icirc;n mişcare. Dacă detectează probabilitatea unei coliziuni şi nu sesizează nicio reacţie din partea şoferului, sistemul trimite un mesaj de avertizare vizuală şi acustică pe panoul de bord (Avertizare frontală) şi apoi aplică o forţă de fr&acirc;nare medie.</div>
                        </div>
                    </div>
                </article>
            </section>
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">

                            <img alt="Active City Stop" title="Active City Stop" src="/assets/img/noul_focus/1214484330125.jpg">

                    </div>
                    <header class="bti-title">Active City Stop</header>
                    <div class="bti-body">
                        <div class="abstract">
                            <div>Tehnologia inovatoare Active City Stop ajută şoferul să evite coliziunile &icirc;n trafic lent şi la viteze de p&acirc;nă la 50 km/h. Asistenţa este oferită &icirc;n mod continuu, sistemul măsur&acirc;nd distanţa p&acirc;nă la vehiculul din faţă, atunci c&acirc;nd se află unul &icirc;n apropiere. Dacă sistemul detectează că maşina din faţă a &icirc;ncetinit &icirc;n mod neaşteptat, va acţiona fr&acirc;nele automat.</div>
                        </div>
                    </div>
                </article>
            </section>
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">

                            <img alt="Faruri bi-xenon" title="Faruri bi-xenon" src="/assets/img/noul_focus/1214484329374.jpg">

                    </div>
                    <header class="bti-title">Faruri bi-xenon ultra-strălucitoare, cu consum redus de energie</header>
                    <div class="bti-body">
                        <div class="abstract">
                            <div>Farurile bi-xenon cu iluminare adaptivă schimbă automat modelul de iluminare al fasciculului farului, pentru a aplica o iluminare &icirc;mbunătăţită pentru orice situaţie de condus, de la autostrăzi la străzile din oraşe. Această tehnologie include o funcţie de reducere automată a intensităţii luminii atunci c&acirc;nd este detectat un vehicul care se apropie din sens opus.</div>
                        </div>
                    </div>
                </article>
            </section>
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">

                            <img alt="Faz&#259; lung&#259; automat&#259;" title="Faz&#259; lung&#259; automat&#259;" src="/assets/img/noul_focus/1214484329457.jpg">

                    </div>
                    <header class="bti-title">Fază lungă automată - vă ajută să vedeţi, fără a-i orbi pe ceilalţi</header>
                    <div class="bti-body">
                        <div class="abstract">
                            <div>Un ajutor util pentru condusul pe timp de noapte, Faza lungă automată se asigură că şoferul se poate concentra mai bine asupra drumului, deoarece sistemul activează şi dezactivează automat faza lungă &icirc;n timpul nopţii, &icirc;n funcţie de iluminatul stradal, traficul din sens opus şi traficul din faţă.</div>
                        </div>
                    </div>
                </article>
            </section>
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">

                            <img alt="Sistem de monitorizare a presiunii din pneuri" title="Sistem de monitorizare a presiunii din pneuri" src="/assets/img/noul_focus/1214484329540.jpg">

                    </div>
                    <header class="bti-title">Sistem de monitorizare a presiunii din pneuri (TPMS)</header>
                    <div class="bti-body">
                        <div class="abstract">
                            <div>Sistemul monitorizează presiunea pneurilor, şi emite un semnal de avertizare atunci c&acirc;nd aceasta este scăzută.</div>
                        </div>
                    </div>
                </article>
            </section>
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">

                            <img alt="Sistemul de asisten&#355;&#259; la p&#259;strarea benzii" title="Sistemul de asisten&#355;&#259; la p&#259;strarea benzii" src="/assets/img/noul_focus/1214484329623.jpg">

                    </div>
                    <header class="bti-title">Două sisteme avansate care vă ajută să vă păstraţi banda</header>
                    <div class="bti-body">
                        <div class="abstract">
                            <div>Sistemul de asistenţă la păstrarea benzii va oferi asistenţă sistemului de direcţie, dacă detectează că sunteţi pe cale să schimbaţi banda fără să semnalizaţi. <br><br>&Icirc;n plus, Sistemul de avertizare la părăsirea benzii vă avertizează printr-o vibraţie a volanului şi prin afişarea unui indicator de avertizare vizuală pe afişajul de bord dacă sistemul detectează că vehiculul se deplasează accidental &icirc;nspre marcajele benzii.</div>
                        </div>
                    </div>
                </article>
            </section>
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">

                            <img alt="Sistem de avertizare pentru unghiul mort" title="Sistem de avertizare pentru unghiul mort" src="/assets/img/noul_focus/1214484329706.jpg">

                    </div>
                    <header class="bti-title">Sistem de avertizare pentru unghiul mort</header>
                    <div class="bti-body">
                        <div class="abstract">
                            <div>Utiliz&acirc;nd senzori radar, sistemul de avertizare pentru unghiul mort este conceput pentru a detecta obiecte aflate &icirc;n afara c&acirc;mpului tău vizual. Senzorii sunt amplasaţi pe ambele părţi ale maşinii şi vă avertizează &icirc;n mod activ cu privire la eventuale situaţii periculoase, prin intermediul unei lumini portocalii afişate &icirc;n mod vizibil &icirc;n oglinda laterală. Sporeşte atenţia şoferului &icirc;n situaţii cu trafic pe mai multe benzi, precum autostrăzile.</div>
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
<script id="TagIT.load" src='/cs/ContentServer?pagename=RORO4_ENGINE/script/packager&c=Page&cid=1205076133160&location=load&isMobile=false&require=main' defer></script>
</div>