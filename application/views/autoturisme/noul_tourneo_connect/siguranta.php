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
        </a><span></span></li><li>Tourneo Connect </li></ul>
    </nav>
    <script>
        var vehicleimagepackpresid = '1205058479712';
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
        var bootstrapVehicleData = {"vehicles":[{"strIntroToFord": " ","brand": "Ford","vehicleType": "PV","catalogId": "NONE","nameplate": "Tourneo Connect ","labelAvailableFrom": "&nbsp;","formattedCurrency": "","nameplateText": "Nu trebuie s\u0103 sacrifica\u0163i confortul \u015Fi tehnologia doar pentru c\u0103 v\u0103 dori\u0163i un vehicul func\u0163ional \u015Fi versatil.","imagePack": false,"hideVehicleImage": false,"images": [],"backgroundImagePath": ["/assets/img/tourneo_connect/1214484912948.jpg","null","null"],"disclaimerTextColor": ["364957",null,null],"current": true,"cid": "1205056902750","cta": [{"linkTitle": "DESCARC\u0102 BRO\u015EUR\u0102 ","linkURL": "\/SBE\/Brosura\/DescarcaBrosura","linkType": "primary","linkTarget": "_blank","omid": "va"},{"linkTitle": "\u00CENSCRIE-TE LA TEST DRIVE ","linkURL": "\/SBE\/TestDrive?shopcode=AUTHORED","linkType": "tertiary","linkTarget": "_blank","omid": "tr"},{"linkTitle": "VREAU SĂ FIU INFORMAT(Ă) ","linkURL": "/SBE/VreauSaFiuInformata","linkType": "tertiary","linkTarget": "","omid": "tr"}],"social": {"facebook": "https://facebook.com","facebookPage": "fordromania"},"disclaimer": "     Modelul prezentat este un Tourneo Connect","seriesCode": "AUTHORED","uscCode": "AUTHORED","presId": "1205058479712","promos": [],"idf": {"options":[{"dataOverlay": {"mediaType":"Flash","height":"439","width":"780"},"iconURL":"/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobheader=image%2Fjpg&blobwhere=1214480715679&blobkey=id","link":"/cs/ContentServer?cid=1205032255640&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Flash_C&amp;site=RORO4_ENGINE","videoSrc":[{"src1":""},{"src2":""}],"youtubeClose":"","tooltipText":"Tourneo Connect"}]}}]} || {};
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
                <li class="default-nameplate-vehicle" style="background-image:url(/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobheader=image%2Fjpg&blobwhere=1214484912948&blobkey=id)">
                    <div class="layered-nameplate-image">
                        <div class="image-holder">
                        </div>
                    </div>
                    <aside class="nameplate-disclaimer style=color:#364957">
                        Modelul prezentat este un Tourneo Connect
                    </aside>
                </li>
            </ul>
            <div itemscope itemtype="http://schema.org/Product" id="nameplateDetails" class="nameplate-vehicle">
                <!--the text description-->
                <div class="name-plate-text">
                    <p class="intro"> </p>
                    <h1 class="bigHeading">
                        <span itemprop="model" itemscope itemtype="http://schema.org/Organization" class="mark">Ford</span>
                        <span itemprop="member" class="nameplate boldTxt">Tourneo Connect </span>
                    </h1>
                    <!--The price-->
                    <!--The blurb-->
                    <p class="blurb">
                        Nu trebuie să sacrificaţi confortul şi tehnologia doar pentru că vă doriţi un vehicul funcţional şi versatil.
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
            <li><a href="/Autoturisme/NoulTourneoConnect/#primaryTabs">Prezentare general&#259;</a>
            </li>
            <li><a href="/Autoturisme/NoulTourneoConnect/Design#primaryTabs">Design</a>
            </li>
            <li><a href="/Autoturisme/NoulTourneoConnect/ExperientaLaVolan#primaryTabs">Experien&#355;a la volan</a>
            </li>
            <li><a href="/Autoturisme/NoulTourneoConnect/Performanta#primaryTabs">Performan&#355;&#259; &#351;i eficien&#355;&#259;</a>
            </li>
            <li class="selected"><a href="/Autoturisme/NoulTourneoConnect/Siguranta#primaryTabs">Siguran&#355;&#259; &#351;i securitate</a>
            </li>
            <li><a href="#" id="moreTab">Mai multe...</a><span></span></li>
        </ul>
    </nav>
</div>
<nav class="sub-nav ">
    <ul>
        <li><a href="/Autoturisme/NoulTourneoConnect/StiluriDeCaroserie"
                >Stiluri de caroserie</a></li>

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
            <h1>Siguranţă deplină, securitate garantată</h1>
        </header>
        <div class="bto-body">
            <div class="abstract">
                Noul Tourneo Connect este echipat cu o gamă largă de tehnologii avansate, concepute pentru a ajuta la protejarea dumneavoastră, a altor participanţi la trafic, a pietonilor şi a maşinii &icirc;n sine. <br>
                <br>
                De exemplu, este prevăzut cu sisteme care pot fr&acirc;na &icirc;n locul dumneavoastră, pot apela automat la serviciile de urgenţă şi pot facilita pornirile &icirc;n rampă. Mai este dotat şi cu tehnologii care vă permit să blocaţi şi să deblocaţi uşi &icirc;n mod individual, care fac aproape imposibilă copierea cheii şi care declanşează alarma chiar şi după deconectarea bateriei.
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
            <li><a href='#tab1' class='omt_'>Tehnologii de asistare a şoferului</a></li>
            <li><a href='#tab2' class='omt_'>Siguranţă</a></li>
            <li><a href='#tab3' class='omt_'>Securitate</a></li>
        </ul>
    </nav>
</div>
<!-- BEGIN [MidPageTabs] -->
<div class="innertab-wrapper">
<!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Tehnologii de asistare a şoferului</a></h2> -->
<div id='tab1' class="tab-content" style="display:none;">
    <section class="bto-wrapper">
        <article class="bto-item">
            <header class="bto-title">
                <h1> </h1>
            </header>
            <div class="bto-body">
                <div class="abstract">
                    <div>O serie completă de tehnologii de asistare a şoferului vă pot face viaţa mai uşoară, pot reacţiona rapid &icirc;n cazul puţin probabil al unui accident şi vă pot ajuta chiar să preveniţi un astfel de accident. </div>
                </div>
                <div class="body">
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Ford SYNC cu Asisten&#355;&#259; de urgen&#355;&#259;" title="Ford SYNC cu Asisten&#355;&#259; de urgen&#355;&#259;" src="/assets/img/tourneo_connect/1214466875489.jpg">

            </div>
            <header class="bti-title">Ford SYNC cu Asistenţă de urgenţă poate suna după ajutor chiar dacă dumneavoastră nu puteţi</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Un aspect important al tehnologiei Ford SYNC care vă poate salva viaţa este Asistenţa de urgenţă. &Icirc;n cazul puţin probabil al unui accident, c&acirc;nd se activează airbagul sau se dezactivează pompa de carburant, tehnologia poate efectua automat un apel direct către Serviciile de urgenţă &icirc;n locul dumneavoastră. Dacă este cazul, puteți alege să &icirc;ntrerupeți apelul sau să discutați personal, dacă este necesar. Un aspect extrem de important este faptul că sistemul va furniza informaţii vitale, precum coordonatele dumneavoastră GPS, chiar şi atunci c&acirc;nd v-aţi pierdut cunoştinţa. <sup>*</sup> </div>
                    <div>&nbsp;</div>
                    <div>&nbsp;</div>
                    <div><font size="1"><em>*Asistenţa de urgenţă Ford funcționează &icirc;n peste 30 de ţări din Europa. Această caracteristică funcţionează atunci c&acirc;nd este conectată cu un telefon mobil compatibil pe care &icirc;l aveţi la dumneavoastră, &icirc;n momentul &icirc;n care un airbag este declanşat (cu excepţia airbagurilor pentru genunchi) sau atunci c&acirc;nd un senzor care &icirc;nregistrează o coliziune &icirc;ntrerupe pompa de combustibil. Funcţia de mesagerie şi Asistenţa de urgenţă nu sunt acceptate &icirc;n toate limbile europene.</em></font></div>
                    <br>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Ford Active City Stop" title="Ford Active City Stop" src="/assets/img/tourneo_connect/1214466880809.jpg">

            </div>
            <header class="bti-title">Pentru a ajuta la evitarea coliziunilor la viteze reduse, maşina frânează în locul dumneavoastră</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Coliziunile &icirc;n trafic la viteză mică, cu opriri şi porniri frecvente, au loc mult prea des. Iar opţiunea Oprire activă &icirc;n oraş este o tehnologie avansată, creată pentru a vă ajuta să evitaţi astfel de coliziuni sau pentru a reduce impactul acestora. Dacă sistemul detectează că autovehiculul din faţă s-a oprit brusc, iar dumneavoastră vă deplasaţi cu mai puţin de 30 km/h, va acţiona automat fr&acirc;nele. Ca dovadă a caracterului său inovator, tehnologia Oprire activă &icirc;n oraş a primit premiul Advanced oferit de Euro NCAP pentru siguranţă.* </div>
                    <br>
                    <div><font size="1">*Acordat pentru Ford Focus.</font></div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Tourneo Connect Un plus de control &icirc;n cazul pornirilor &icirc;n ramp&#259;" title="Tourneo Connect Un plus de control &icirc;n cazul pornirilor &icirc;n ramp&#259;" src="/assets/img/tourneo_connect/1214466874822.jpg">

            </div>
            <header class="bti-title">Un plus de control în cazul pornirilor în rampă</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Sistemul de asistenţă la pornirea din rampă &icirc;mpiedică temporar alunecarea &icirc;n spate atunci c&acirc;nd porniţi din pantă. Sistemul funcţionează prin menţinerea presiunii la nivelul sistemului de f&acirc;nare pentru un interval suplimentar de 2,5 secunde, asigur&acirc;ndu-vă mai mult timp şi control atunci c&acirc;nd mutaţi piciorul de pe pedala de fr&acirc;nă pe cea de acceleraţie. Acest sistem este, de asemenea, util c&acirc;nd opriţi şi porniţi autovehiculul pe suprafeţe alunecoase. </div>
                </div>
            </div>
        </article>
    </section>
</div>
<!--</div>-->
<!--<div id='tab2' class="mp-tab-wrapper">
<h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">Siguranţă</a></h2> -->
<div id='tab2' class="tab-content" style="display:none;">
<section class="bto-wrapper">
    <article class="bto-item">
        <header class="bto-title">
            <h1> </h1>
        </header>
        <div class="bto-body">
            <div class="abstract">
                Ford se află &icirc;n permanență &icirc;n avangarda dezvoltării de tehnologii și caracteristici de siguranță premiate și inovatoare. Veţi descoperi multe dintre acestea integrate &icirc;n noul Tourneo Connect, fiecare &icirc;n parte fiind prevăzută pentru a vă ţine &icirc;n siguranţă pe dumneavoastră şi pe pasagerii dumneavoastră ori de c&acirc;te ori porniţi la drum.
            </div>
            <div class="body">
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Tourneo Connect Controlul electronic al stabilit&#259;&#539;ii" title="Tourneo Connect Controlul electronic al stabilit&#259;&#539;ii" src="/assets/img/tourneo_connect/1214466878626.jpg">

        </div>
        <header class="bti-title">ESC vă ajută să menţineţi controlul asupra vehiculului, indiferent de condiţii</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Controlul electronic al stabilităţii (ESC) monitorizează &icirc;n mod constant deplasarea maşinii, detectează orice abateri de la traseul ales (dacă vehiculul &icirc;ncepe să patineze, de exemplu) şi vă ajută automat la corectarea poziţiei de drum. Sistemul este creat pentru a vă ajuta să menţineţi controlul asupra maşinii şi, &icirc;n plus, vă poate ajuta să reduceţi distanţa de fr&acirc;nare &icirc;n caz de urgenţă. </div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Tourneo Connect Sistem de control al trac&#539;iunii" title="Tourneo Connect Sistem de control al trac&#539;iunii" src="/assets/img/tourneo_connect/1214466877179.jpg">

        </div>
        <header class="bti-title">Aderenţă maximă cu efort minim</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Un sistem avansat de control al tracţiunii (TCS) elimină alunecarea &icirc;n exces a roţilor şi vă asigură cea mai bună aderenţă, performanţă şi stabilitate, atunci c&acirc;nd aveţi mai mare nevoie. Sistemul monitorizează &icirc;ncontinuu şi ajustează puterea livrată roţilor individuale ale vehiculului, asigur&acirc;nd contact şi aderenţă maxime atunci c&acirc;nd acceleraţi.</div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Tourneo Connect Sistem de monitorizare a presiunii din pneuri " title="Tourneo Connect Sistem de monitorizare a presiunii din pneuri " src="/assets/img/tourneo_connect/1214466880586.jpg">

        </div>
        <header class="bti-title">Vă avertizează dacă pneurile pierd presiune</header>
        <div class="bti-body">
            <div class="abstract">
                <div>&Icirc;ntotdeauna este important să menţineţi presiunea corectă &icirc;n pneuri, pentru a vă ajuta să economisiţi combustibil, să protejaţi pneurile şi să fiţi &icirc;n siguranţă. De aceea, senzorii monitorizează constant fiecare roată şi vă alertează dacă apare o problemă, astfel &icirc;nc&acirc;t să puteţi trage pe dreapta, să verificaţi şi să umflaţi pneul sau să schimbaţi roata.</div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Tourneo Connect Asisten&#355;&#259; la stabilizarea remorcii" title="Tourneo Connect Asisten&#355;&#259; la stabilizarea remorcii" src="/assets/img/tourneo_connect/1214466877031.jpg">

        </div>
        <header class="bti-title">Menţinerea în siguranţă pe banda de rulare a remorcii</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Funcţia de control al balansării remorcii (TSC) detectează &bdquo;şerpuirea&rdquo; sau balansarea remorcii şi reduce viteza noului Tourneo Connect pentru a ajuta la corectarea problemei, făc&acirc;nd ca remorcarea să fie mai controlată. Sistemul &icirc;ncetineşte vehiculul, reduc&acirc;nd cuplul motorului şi cresc&acirc;nd treptat presiunea fr&acirc;nelor pe roţi.</div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Tourneo Connect Sistemul de asisten&#355;&#259; la fr&acirc;narea de urgen&#355;&#259;" title="Tourneo Connect Sistemul de asisten&#355;&#259; la fr&acirc;narea de urgen&#355;&#259;" src="/assets/img/tourneo_connect/1214466877105.jpg">

        </div>
        <header class="bti-title">Putere suplimentară pentru frânare de urgenţă</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Sistemul de asistenţă la fr&acirc;narea de urgență (EBA) ajută maşina să atingă eficienţa de fr&acirc;nare maximă &icirc;n cazul unei situaţii de urgenţă. Sistemul detectează presiunea aplicată de şofer pe pedala de fr&acirc;nă şi crește automat această presiune, dacă este cazul. </div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Tourneo Connect Sisteme avansate pentru o fr&acirc;nare mai controlat&#259;" title="Tourneo Connect Sisteme avansate pentru o fr&acirc;nare mai controlat&#259;" src="/assets/img/tourneo_connect/1214466880883.jpg">

        </div>
        <header class="bti-title">Sisteme avansate pentru o frânare mai controlată</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Sistemul de fr&acirc;nare cu anti-blocare roți (ABS) și distribuția electronică a forței de fr&acirc;nare (EBD) asigură o fr&acirc;nare mai bine controlată. </div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Tourneo Connect Airbaguri tip cortin&#259;, pentru &#351;ofer, pasager &#351;i laterale" title="Tourneo Connect Airbaguri tip cortin&#259;, pentru &#351;ofer, pasager &#351;i laterale" src="/assets/img/tourneo_connect/1214466879396.jpg">

        </div>
        <header class="bti-title">Sistem airbag îmbunătăţit</header>
        <div class="bti-body">
            <div class="abstract">
                <div>
                    <div>Noul Tourneo Connect este disponibil cu airbaguri tip cortină, pentru şofer, pasager şi laterale. De asemenea, senzori avansați sunt poziționați &icirc;n puncte cheie &icirc;n vehicul, pentru a asigura o reacție rapidă și controlată. </div>
                </div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Tourneo Connect Iluminarea la fr&acirc;narea de urgen&#355;&#259;" title="Tourneo Connect Iluminarea la fr&acirc;narea de urgen&#355;&#259;" src="/assets/img/tourneo_connect/1214466878780.jpg">

        </div>
        <header class="bti-title">Un avertisment în spate, atunci când frânaţi brusc</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Sistemul Lumină de fr&acirc;nare de urgenţă (EBL) aprinde luminile de avarie pentru a avertiza ceilalţi şoferi atunci c&acirc;nd fr&acirc;naţi puternic.</div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Tourneo Connect Sistem de reamintire pentru utilizarea centurii de siguran&#539;&#259;" title="Tourneo Connect Sistem de reamintire pentru utilizarea centurii de siguran&#539;&#259;" src="/assets/img/tourneo_connect/1214466879304.jpg">

        </div>
        <header class="bti-title">Nu uitaţi niciodată să purtaţi centura de siguranţă</header>
        <div class="bti-body">
            <div class="abstract">
                <div>
                    <div>Un sistem de reamintire pentru utilizarea centurii de siguranță a pentru șofer și pasagerul din față vă avertizează dacă uitați vreodată să vă puneți centura și este montat ca dotare standard pe fiecare model.</div>
                </div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Puncte ISOFIX pentru fixarea scaunului pentru copii" title="Puncte ISOFIX pentru fixarea scaunului pentru copii" src="/assets/img/tourneo_connect/1214466878703.jpg">

        </div>
        <header class="bti-title">Ajutor pentru menţinerea copiilor în siguranţă</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Dacă aveţi copii la bord, puteţi dispune montarea de puncte ISOFIX pentru fixarea scaunului pentru copii pentru cele două scaune dinspre exterior de pe r&acirc;ndul al doilea. </div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="[5 stele de la Euro NCAP]" title="[5 stele de la Euro NCAP]" src="/assets/img/tourneo_connect/1214466878368.jpg">

        </div>
        <header class="bti-title">Siguranţă unică de 5 stele</header>
        <div class="bti-body">
            <div class="abstract">
                Noul Tourneo Connect (cu 5 locuri) este primul şi singurul autovehicul din clasa sa caruia i-au fost acordate 5 stele la testele Euro NCAP, recunosc&acirc;ndu-i-se astfel capacitatea de a proteja şoferul şi pasagerii.
            </div>
        </div>
    </article>
</section>
</div>
<!--</div>-->
<!--<div id='tab3' class="mp-tab-wrapper">
<h2><a href='#tab3' class="mp-tab omt_xd_mt_ti">Securitate</a></h2> -->
<div id='tab3' class="tab-content" style="display:none;">
    <section class="bto-wrapper">
        <article class="bto-item">
            <header class="bto-title">
                <h1> </h1>
            </header>
            <div class="bto-body">
                <div class="abstract">
                    <div>Mai multe compartimente de depozitare vă ajută să vă păstraţi obiectele personale ascunse de privirile indiscrete. O serie de măsuri de securitate avansate poate ţine aceste obiecte &icirc;n siguranţă, protejate &icirc;mpotriva furtului, oferind &icirc;n acelaşi timp protecţie maximă şi maşinii.</div>
                </div>
                <div class="body">
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Tourneo Connect &Icirc;nchidere centralizat&#259; de la distan&#355;&#259;" title="Tourneo Connect &Icirc;nchidere centralizat&#259; de la distan&#355;&#259;" src="/assets/img/tourneo_connect/1214466878552.jpg">

            </div>
            <header class="bti-title">Puteţi alege ce uşi să blocaţi şi să deblocaţi</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>
                        <div>Noul Tourneo Connect are ca dotare standard &icirc;nchiderea centralizată a uşilor de la distanţă. Iar acest sistem de &icirc;nchidere este mai sigur ca niciodată. Şi aceasta deoarece puteţi alege să descuiaţi o singură uşă, &icirc;n timp ce celelalte răm&acirc;n blocate &icirc;n mod sigur, p&acirc;nă c&acirc;nd activaţi un comutator de pe portiera şoferului. Acelaşi comutator controlează blocarea şi deblocarea tuturor uşilor vehiculului.</div>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Tourneo Connect &Icirc;ncuietori de u&#351;i cu arm&#259;tur&#259; &icirc;mpotriva efrac&#355;iei" title="Tourneo Connect &Icirc;ncuietori de u&#351;i cu arm&#259;tur&#259; &icirc;mpotriva efrac&#355;iei" src="/assets/img/tourneo_connect/1214466878146.jpg">

            </div>
            <header class="bti-title">Încuietori de uşi cu armătură împotriva efracţiei</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Toate &icirc;ncuietorile uşilor sunt protejate cu o armătură anti-efracţie pentru a &icirc;mpiedica spargerea lor prin găurire sau dăltuire.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Tourneo Connect Transponder avansat" title="Tourneo Connect Transponder avansat" src="/assets/img/tourneo_connect/1214466876955.jpg">

            </div>
            <header class="bti-title">Un transponder avansat care nu poate fi copiat</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>
                        <div>Pe l&acirc;ngă sistemul avansat de &icirc;nchidere centralizată, noul transponder tip briceag este dotat cu un transmiţător cu două canale. Drept urmare, unui hoţ &icirc;i va fi practic imposibil să scaneze sau să copieze cheia. Este re&icirc;ncărcabil, rezistent la intervenţii şi la apă şi poate fi acţionat la 30 m de maşină. </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Tourneo Connect &Icirc;ncuietori deosebite" title="Tourneo Connect &Icirc;ncuietori deosebite" src="/assets/img/tourneo_connect/1214466874070.jpg">

            </div>
            <header class="bti-title">Încuietori deosebite</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>
                        <div>Noul Tourneo Connect este prevăzut cu &icirc;ncuietori care: &icirc;ncuie la loc uşile după 45 de secunde, dacă nu deschideţi niciuna &icirc;n acest interval (după utilizarea telecomenzii); fac imposibilă blocarea uşilor faţă dacă sunt &icirc;ntredeschise; deblochează toate uşile dacă airbagul este declanşat.</div>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Tourneo Connect Torpedou care poate fi &icirc;ncuiat" title="Tourneo Connect Torpedou care poate fi &icirc;ncuiat" src="/assets/img/tourneo_connect/1214466876063.jpg">

            </div>
            <header class="bti-title">Încă un loc pentru depozitarea lucrurilor de valoare</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>
                        <div>Nu lăsaţi lucrurile de valoare la vedere, pentru a nu tenta hoţii care sparg geamul şi fură ce apucă. &Icirc;ncuiaţi-le &icirc;n siguranţă &icirc;n torpedo.</div>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Tourneo Connect Dou&#259; op&#355;iuni de alarm&#259; de nivel &icirc;nalt" title="Tourneo Connect Dou&#259; op&#355;iuni de alarm&#259; de nivel &icirc;nalt" src="/assets/img/tourneo_connect/1214466875193.jpg">

            </div>
            <header class="bti-title">Două opţiuni de alarmă de nivel înalt</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>O alarmă de perimetru opţională vă protejează vehiculul, declanş&acirc;ndu-se dacă uşile sau capota sunt deschise cu forţa. Pentru protecţie (şi descurajare a hoţilor) şi mai mare, alegeţi un sistem de alarmă Thatcham de categoria 1. Acest sistem complex se activează automat &icirc;n momentul &icirc;n care &icirc;ncuiaţi vehiculul şi emite un semnal sonor puternic dacă este declanşat de o intrare forţată, dacă maşina este ridicată sau dacă senzorii de mişcare detectează o mişcare &icirc;năuntru.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Tourneo Connect Alarm&#259; de rezerv&#259; independent&#259;" title="Tourneo Connect Alarm&#259; de rezerv&#259; independent&#259;" src="/assets/img/tourneo_connect/1214466878931.jpg">

            </div>
            <header class="bti-title">O alarmă de rezervă, independentă, suplimentară</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Un dispozitiv sonor de siguranță, cu baterie proprie, reprezintă un sistem suplimentar, secundar de alarmă, care este furnizat &icirc;mpreună cu opțiunea de alarmă Thatcham. Acesta emite avertismentul sonor &icirc;n momentul declanşării alarmei şi, deoarece are propria sa sursă de alimentare &icirc;ncorporată, se va activa chiar dacă cineva deconectează bateria vehiculului.</div>
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
<script id="TagIT.load" src='/cs/ContentServer?pagename=RORO4_ENGINE/script/packager&c=Page&cid=1205056904121&location=load&isMobile=false&require=main' defer></script>
</div>