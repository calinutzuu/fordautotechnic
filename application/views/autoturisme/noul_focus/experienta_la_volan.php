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
            <li><a href="/Autoturisme/NoulFocus/#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/NoulFocus/PromotieLansare">Ofert&#259; special&#259; de lansare Ford Focus</a>
            </li>
            <li><a href="/Autoturisme/NoulFocus/PrezentareGenerala#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/NoulFocus/PrezentareGenerala">Prezentare general&#259;</a>
            </li>
            <li><a href="/Autoturisme/NoulFocus/Design#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/NoulFocus/Design">Design</a>
            </li>
            <li><a href="/Autoturisme/NoulFocus/PerformantaSiEficienta#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/NoulFocus/PerformantaSiEficienta">Performan&#355;&#259; &#351;i eficien&#355;&#259;</a>
            </li>
            <li class="selected"><a href="/Autoturisme/NoulFocus/ExperientaLaVolan#primaryTabs" data-ajaxlink="/Autoturisme/NoulFocus/ExperientaLaVolan">Experien&#355;a la volan</a>
            </li>
            <li><a href="#" id="moreTab">Mai multe...</a><span></span></li>
        </ul>
    </nav>
</div>
<nav class="sub-nav ">
    <ul>
        <li><a href="/Autoturisme/NoulFocus/SigurantaSiSecuritate"
                >Siguran&#355;&#259; &#351;i securitate</a></li>
        <li><a href="/Autoturisme/NoulFocus/ListaDePreturi"
                >List&#259; de pre&#355;uri &#351;i bro&#351;uri</a></li>
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
            <h1>O maşină în care detii controlul</h1>
        </header>
        <div class="bto-body">
            <div class="abstract">
                <div>Mulţumită designului şi tehnologiei inteligente, noul Focus face ca fiecare minut petrecut &icirc;n maşină să fie c&acirc;t mai confortabil, sigur şi plăcut cu putință. <br>
                    <br>
                    Tehnologiile inovatoare te asigură, de asemenea, că eşti permanent conectat la drum, dar şi la muzică, mesaje şi apeluri telefonice, chiar şi &icirc;n mişcare.</div>
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
            <li><a href='#tab1' class='omt_'>Tehnologia condusului</a></li>
            <li><a href='#tab2' class='omt_'>Confort</a></li>
        </ul>
    </nav>
</div>
<!-- BEGIN [MidPageTabs] -->
<div class="innertab-wrapper">
<!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Tehnologia condusului</a></h2> -->
<div id='tab1' class="tab-content" style="display:none;">
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Ford SYNC 2" title="Ford SYNC 2" src="/assets/img/noul_focus/1214481904735.jpg">

        </div>
        <header class="bti-title">Cea mai recentă tehnologie hands-free</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Ford SYNC 2 cu comandă vocală şi ecran tactil duce sistemul de informaţii şi divertisment la un nivel superior, prin adăugarea unui ecran tactil color de 8&rdquo;, opţional. Acest afişaj de &icirc;naltă rezoluţie &icirc;ţi oferă controlul intuitiv asupra mai multor funcţii cheie, inclusiv telefon, sistem audio, climatizare şi, opţional, navigaţie, prin intermediul vocii sau al atingerii.</div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Asisten&#355;&#259; activ&#259; la parcare" title="Asisten&#355;&#259; activ&#259; la parcare" src="/assets/img/noul_focus/1214481905428.jpg">

        </div>
        <header class="bti-title">Parcare şi mai uşoară</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Tehnologia îmbunătăţită de asistenţă activă la parcare te poate ajuta să parchezi fără ajutorul mâinilor în locuri de parcare dispuse paralel, uşurându-ţi, de asemenea, parcarea în spaţii dispuse perpendicular (precum parcările cu mai multe etaje). Tehnologia poate detecta un spaţiu, controlând apoi direcţia în timp ce tu rulezi cu spatele pentru a ocupa locul. În plus, sistemul de asistenţă la ieşirea din parcare este proiectat pentru a te ajuta să ieşi din cele mai strâmte spaţii.</div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Noul Ford Focus - interior" title="Noul Ford Focus - interior" src="/assets/img/noul_focus/1214481904661.jpg">

        </div>
        <header class="bti-title">Schimbă treptele de viteză rapid, cu vârfurile degetelor</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Alege o transmisie automată şi vei beneficia de opţiunea Comenzi de schimbare automată, cu padele, &icirc;n stilul maşinilor de mare performanţă. Padelele sunt fixate pe ambele părţi ale volanului şi, cu ajutorul comenzilor din dreapta pentru trecerea &icirc;n treapta superioară şi st&acirc;nga pentru treapta inferioară, poţi schimba rapid treptele de viteză cu v&acirc;rfurile degetelor, chiar şi &icirc;n viraje.</div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Ford Power Shift" title="Ford Power Shift" src="/assets/img/noul_focus/1214481906705.jpg">

        </div>
        <header class="bti-title">Ford PowerShift. Rapid şi cu economie de combustibil</header>
        <div class="bti-body">
            <div class="abstract">
                <div>&Icirc;mbin&acirc;nd confortul asigurat de transmisia automată cu controlul asociat unei cutii de viteze manuale, această cutie de viteze avansată, cu şase trepte de viteză, preselectează următoarea treaptă pentru tine, pentru a nu pierde din putere atunci c&acirc;nd treci de la o treaptă de viteză la alta. Schimbările de trepte uluitor de rapide şi uniforme ale PowerShift fac din condus o experienţă mai plăcută, economisind &icirc;n acelaşi timp combustibil şi reduc&acirc;nd emisiile de CO<sub>2</sub> &icirc;n comparaţie cu o transmisie automată obişnuită.</div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Noul Ford Focus" title="Noul Ford Focus" src="/assets/img/noul_focus/1214481905948.jpg">

        </div>
        <header class="bti-title">Ajutor atunci când frânezi la viteze mai mari</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Sistemul de fr&acirc;nare activă reprezintă o dotare de siguranţă nouă şi inovatoare, care funcţionează atunci c&acirc;nd te deplasezi cu viteze de peste 50 km/h (pe autostradă, de exemplu). Tehnologia utilizează un RADAR pentru a scana drumul din faţă şi, dacă stabileşte că este posibilă o coliziune, te va avertiza. Dacă nu reacţionezi, sistemul &icirc;ncarcă fr&acirc;na şi &icirc;ncepe să fr&acirc;neze pentru a te ajuta să &icirc;ncetineşti. La viteze mai mici de 50 km/h, o altă tehnologie vă stă la dispoziţie pentru a te ajuta: Active City Stop. Combinate, aceste două tehnologii &icirc;ţi oferă siguranţa asistenţei la fr&acirc;nare la toate vitezele.</div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Active City Stop" title="Active City Stop" src="/assets/img/noul_focus/1214481902879.jpg">

        </div>
        <header class="bti-title">Ajută la un condus mai sigur în oraş</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Accidentele &icirc;n trafic la viteză mică, cu opriri şi porniri frecvente, au loc mult prea des (mai ales pe străzile aglomerate din oraşe). Sistemul Active City Stop este conceput pentru a te ajuta să le eviţi sau să reduci impactul acestora. Dacă sistemul detectează că maşina din faţă s-a oprit brusc, iar tu te deplasezi cu mai puţin de 50 km/h, va acţiona automat fr&acirc;nele. Ca dovadă a caracterului său inovator, tehnologia Active City Stop a primit premiul Advanced oferit de Euro NCAP pentru siguranţă.* <br> <br> <small>*Acordat pentru Ford Focus 2013.</small></div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <header class="bti-title">Atenţionare în caz de pericole</header>
        <div class="bti-body">
            <div class="abstract">
                <div>În timp ce parchezi, senzorii de pe aripile din spate pot detecta pericolele de pe fiecare parte a maşinii şi te pot atenţiona, ajutându-te să le eviţi.</div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Alert&#259; la intersectarea cu traficul" title="Alert&#259; la intersectarea cu traficul" src="/assets/img/noul_focus/1214481906022.jpg">

        </div>
        <header class="bti-title">Sesizează vehiculele pe care tu le-ai putea rata</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Alerta la intersectarea cu traficul este o tehnologie &icirc;n &icirc;ntregime nouă, care face acum parte din Sistemul de asistenţă pentru unghiul mort (BLIS). Atunci c&acirc;nd ieși cu spatele dintr-un loc de parcare şi ai vizibilitate redusă asupra situaţiei traficului, Alerta la intersectarea cu traficul detectează vehiculele care se apropie și emite un sunet de avertizare. Această tehnologie declanșează o lumină pe oglinda retrovizoare exterioară (st&acirc;nga sau dreapta, &icirc;n funcție de direcția din care se apropie vehiculele).</div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Sistem de asisten&#355;&#259; pentru unghiul mort" title="Sistem de asisten&#355;&#259; pentru unghiul mort" src="/assets/img/noul_focus/1214481906252.jpg">

        </div>
        <header class="bti-title">Oglinzi care văd ce tu nu poţi vedea</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Un Sistem de asistenţă pentru unghiul mort (BLIS) te poate ajuta să schimbi benzile mai în siguranţă. Aceasta deoarece senzorii RADAR pot scana unghiurile moarte de pe ambele părţi ale vehiculului. Şi dacă detectează un vehicul pe care tu nu îl poţi vedea, o lumină portocalie afişată în mod vizibil în oglinda laterală de pe partea corespunzătoare se va aprinde pentru a te avertiza. BLIS este prevăzut, de asemenea, cu o tehnologie complet nouă, Alerta la intersectarea cu traficul.</div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Alert&#259; &#351;i indicator de distan&#355;&#259;" title="Alert&#259; &#351;i indicator de distan&#355;&#259;" src="/assets/img/noul_focus/1214481905576.jpg">

        </div>
        <header class="bti-title">Te ajută să vezi, fără a-i orbi pe ceilalţi șoferi</header>
        <div class="bti-body">
            <div class="abstract">
                <div>O funcţie utilă pentru deplasările pe timp de noapte, faza lungă automată comută temporar la fază scurtă atunci când detectează trafic din sens opus sau un alt autovehicul în faţă, pentru a nu-i orbi pe ceilalţi şoferi. Aceasta revine apoi automat la faza lungă, oferindu-ţi vizibilitate maximă. Faza lungă automată este disponibilă ca dotare opţională cu Avertizarea de menţinere a benzii.</div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Sistem de avertizare a &#351;oferului" title="Sistem de avertizare a &#351;oferului" src="/assets/img/noul_focus/1214481903252.jpg">

        </div>
        <header class="bti-title">Eşti obosit? Sistemul de avertizare a şoferului poate simţi acest lucru</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Sistemul de avertizare a şoferului monitorizează constant stilul personal de condus şi este conceput să detecteze orice variaţie cauzată de oboseală. Dacă sistemul detectează că devii mai puţin vigilent, o pictogramă de avertizare apare pe afişaj, sugerându-ţi să iei o pauză. Dacă gradul de vigilenţă la volan scade şi mai mult, mesajul este repetat şi este însoţit de un semnal sonor.</div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <header class="bti-title">Un sistem avansat care te ajută să-ţi păstrezi banda</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Sistemul de menţinere a benzii de rulare utilizează o cameră orientată &icirc;n faţă, pentru a detecta dacă ai ieşit &icirc;n mod accidental de pe banda ta de deplasare. Sistemul de avertizare la părăsirea benzii te avertizează apoi printr-o vibraţie a volanului şi prin afişarea unui indicator de avertizare vizuală. Dacă reacţionezi mai greu sau nu reacţionezi deloc, Sistemul de asistenţă la păstrarea benzii &icirc;ţi poate oferi asistenţă la direcţie, pentru a te ajuta să revii pe banda corectă. Această tehnologie este concepută pentru suprafeţe rutiere cu mai multe benzi (precum autostrăzile), aşa că se va dezactiva automat la viteze mai mici de 65 km/h, put&acirc;nd fi dezactivată şi manual.</div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Tempomat adaptiv" title="Tempomat adaptiv" src="/assets/img/noul_focus/1214481905723.jpg">

        </div>
        <header class="bti-title">Tempomat care se poate adapta automat</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Cu ajutorul tehnologiei Tempomat Adaptiv, alege viteza cu care doreşti să te deplasezi, iar sistemul o va menţine constantă. Dacă senzorul RADAR încorporat detectează un vehicul în faţă, acesta va încetini maşina pentru a menţine o distanţă prestabilită. De îndată ce drumul din faţă este liber, sistemul va accelera până la viteza aleasă.</div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Alert&#259; &#351;i indicator de distan&#355;&#259;" title="Alert&#259; &#351;i indicator de distan&#355;&#259;" src="/assets/img/noul_focus/1214481905103.jpg">

        </div>
        <header class="bti-title">Te ajută să păstrezi o distanţă de siguranţă</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Panoul de bord este prevăzut cu o funcţie de indicare a distanţei. Aceasta afişează în mod continuu distanţa până la vehiculul din faţă şi aprinde un sistem de pictograme colorate ca luminile de semafor, în funcţie de setările de proximitate alese. Alerta de distanţă te poate avertiza, de asemenea, printr-un simbol de avertizare roşu, dacă te apropii prea mult de vehiculul din faţă.</div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <header class="bti-title">Faruri inteligente</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Farurile bi-xenon sunt prevăzute cu un sistem avansat de iluminare adaptivă, care se adaptează în mod inteligent la situaţia de condus. În funcţie de tipul de drum, această tehnologie comută automat între patru tipuri diferite de modele de fază, pentru a-ţi asigura cea mai bună distribuţie a luminii. Sistemul poate include, de asemenea, lumini pentru viraje, care se mişcă în funcţie de schimbările de direcţie.</div>
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

                    <img alt="Volan nou" title="Volan nou" src="/assets/img/noul_focus/1214481903330.jpg">

            </div>
            <header class="bti-title">Un volan care îţi pune totul la îndemână</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Un volan nou, cu trei spiţe, a fost special proiectat &icirc;n mod ergonomic pentru noul Ford Focus. Fiecare buton şi comandă se află la &icirc;ndem&acirc;nă, iar poziţia volanului &icirc;mbunătăţeşte at&acirc;t practicabilitatea, c&acirc;t şi vizibilitatea panoului de bord al maşinii tale. Pentru un plus de confort, de ce să nu alegi noul volan &icirc;ncălzit, disponibil opţional?</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Consol&#259; central&#259; prev&#259;zut&#259; cu un port USB" title="Consol&#259; central&#259; prev&#259;zut&#259; cu un port USB" src="/assets/img/noul_focus/1214481904809.jpg">

            </div>
            <header class="bti-title">Depozitare inteligentă pentru dispozitivele tale inteligente</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Consola centrală &icirc;ncorporează un spaţiu pentru smartphone-uri şi alte dispozitive mobile. Este prevăzută cu un port USB pentru conectivitate şi alimentare, precum şi un covoraş de cauciuc pentru a te ajuta să ţii obiectele personale &icirc;n siguranţă.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Sistemul Ford KeyFree" title="Sistemul Ford KeyFree" src="/assets/img/noul_focus/1214481902953.jpg">

            </div>
            <header class="bti-title">Sistemul Key-free înseamnă mai puţine griji</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Sistemul Ford KeyFree îţi permite să închizi şi să deschizi maşina fără să scoţi cheia din buzunar sau din poşetă: ideal pentru situaţiile în care aveţi mâinile ocupate cu altceva.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Ford Power" title="Ford Power" src="/assets/img/noul_focus/1214481903408.jpg">

            </div>
            <header class="bti-title">Porneşte maşina prin simpla atingere a unui buton</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Nu mai este nevoie să foloseşi cheia. Trebuie doar să acţionezi butonul de pornire Ford Power în timp ce ţii ambreiajul apăsat (sau pedala de frână pe modelul cu transmisie automată) şi motorul prinde viaţă.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Ford MyKey" title="Ford MyKey" src="/assets/img/noul_focus/1214481903101.jpg">

            </div>
            <header class="bti-title">Utilizarea în comun a maşinii, fără probleme, cu ajutorul caracteristicii MyKey®</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Această nouă tehnologie &icirc;ţi permite să setezi limita maximă de viteză, să setezi un semnal care să atragă atenţia asupra purtării centurii de siguranţă şi chiar să controlezi volumul sistemului audio. Trebuie doar să introduci cheia &icirc;n contact, să porneşti maşina şi să urmareşti instrucţiunile simple pentru a programa restricţiile dorite pentru cheia respectivă. Poţi păstra personal cheia de &bdquo;admin&rdquo; şi chiar să ai mai multe exemplare din ambele chei, dacă doreşti. Ford MyKey<sup>&reg;</sup> este uşor de utilizat şi este concepută pentru a-ţi asigura liniştea atunci c&acirc;nd &icirc;mprumuţi maşina unui prieten sau unui membru al familiei.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="&#350;terg&#259;toare de parbriz cu senzor de ploaie" title="&#350;terg&#259;toare de parbriz cu senzor de ploaie" src="/assets/img/noul_focus/1214481903178.jpg">

            </div>
            <header class="bti-title">Ştergătoare care se reglează automat, în funcţie de ploaie</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Ştergătoarele de parbriz cu senzor de ploaie se activează în secunda în care detectează stropi de apă pe parbrizul autovehiculului, iar apoi îşi reglează viteza pentru a face faţă oricăror condiţii meteo. Poţi alege unul dintre cele şase niveluri de sensibilitate, care determină cât de multă umiditate trebuie să se acumuleze înainte ca ştergătoarele să se activeze.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Oglinzile laterale pliabile electric" title="Oglinzile laterale pliabile electric" src="/assets/img/noul_focus/1214481902807.jpg">

            </div>
            <header class="bti-title">Oglinzi laterale care se pot proteja singure</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Pentru a evita deteriorarea accidentală, oglinzile laterale pliabile electric se pliază către interior după ce ai parcat. Atunci când sunt rabatate, oglinzile protejează, de asemenea, elegantele indicatoare integrate.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Ford Easy Fuel" title="Ford Easy Fuel" src="/assets/img/noul_focus/1214481906100.jpg">

            </div>
            <header class="bti-title">Ford Easy-Fuel, pentru alimentări fără probleme</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Această tehnologie utilă face să fie practic imposibilă alimentarea greşită a maşinii, deoarece duza pompei nu se va potrivi. Şi pentru că Easy-Fuel este un sistem fără buşon, nu vei mai avea de-a face niciodată cu un buşon murdar.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Parbriz Quickclear" title="Parbriz Quickclear" src="/assets/img/noul_focus/1214481904883.jpg">

            </div>
            <header class="bti-title">Curăţă parbrizul rapid cu Quickclear</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Această dotare inteligentă este creată pentru a-ţi permite să porneşti rapid &icirc;n dimineţile geroase. Trebuie doar să apeşi pe un buton, iar sistemul poate să dezgheţe parbrizul &icirc;n c&acirc;teva secunde, chiar și la temperaturi scăzute.</div>
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
<script id="TagIT.load" src='/cs/ContentServer?pagename=RORO4_ENGINE/script/packager&c=Page&cid=1205072237868&location=load&isMobile=false&require=main' defer></script>
</div>