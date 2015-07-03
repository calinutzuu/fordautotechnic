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
        </a><span></span></li><li>Fiesta</li></ul>
    </nav>
    <script>
        var vehicleimagepackpresid = '1205035170415';
        var vehicleimagepackyear = 'YYV';
        var googleAdServerNameplateId = '00C';
        var googleAdServerNameplateName = 'Noul Fiesta';
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
        var bootstrapVehicleData = {"vehicles":[{"strIntroToFord": " ","brand": "Ford","vehicleType": "PV","catalogId": "9324","nameplate": "Fiesta","labelAvailableFrom": "De la","formattedCurrency": "13.400 RON","nameplateText": "Asemenea unui smartphone nou-nou\u0163, Ford Fiesta \u00EEmbin\u0103 stilul contemporan cu tehnologia de v\u00E2rf.","imagePack": true,"hideVehicleImage": false,"images": ["/cs/Storage/EP2COM_ENGInE/_vip/1205059875759/00C_YYQ/8W5/9NJ/R83/1/0/FiestaTitBlazerBlueLHD3dr_Front_00001.jpg"],"backgroundImagePath": ["/assets/img/fiesta/FiestaTitBlazerBlueLHD3dr_Front_00001.jpg"],"disclaimerTextColor": [null,null,null],"current": true,"cid": "1205027777983","cta": [{"linkTitle": "DESCARC\u0102 BRO\u015EUR\u0102 ","linkURL": "\/SBE\/Brosura\/DescarcaBrosura","linkType": "primary","linkTarget": "_blank","omid": "va"},{"linkTitle": "\u00CENSCRIE-TE LA TEST DRIVE ","linkURL": "\/SBE\/TestDrive?shopcode=00C","linkType": "tertiary","linkTarget": "_blank","omid": "tr"},{"linkTitle": "VREAU SĂ FIU INFORMAT(Ă) ","linkURL": "/SBE/VreauSaFiuInformata","linkType": "tertiary","linkTarget": "","omid": "tr"}],"social": {"facebook": "https://facebook.com","facebookPage": "fordromania"},"disclaimer": "Modelul prezentat este un Fiesta Titanium. Imagine cu titlul de prezentare.","seriesCode": "8W5","uscCode": "00C","supportSelector": "true","presId": "1205035170415","promos": [],"idf": {"options":[{"dataOverlay": {"mediaType":"Flash","height":"439","width":"780"},"iconURL":"/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobheader=image%2Fjpg&blobwhere=1214480084185&blobkey=id","link":"/cs/ContentServer?cid=1205028944450&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Flash_C&amp;site=RORO4_ENGINE","videoSrc":[{"src1":""},{"src2":""}],"youtubeClose":"","tooltipText":"Ford Fiesta"}]}}]} || {};
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
                        Modelul prezentat este un Fiesta Titanium. Imagine cu titlul de prezentare.
                    </aside>
                </li>
            </ul>
            <div itemscope itemtype="http://schema.org/Product" id="nameplateDetails" class="nameplate-vehicle">
                <!--the text description-->
                <div class="name-plate-text">
                    <p class="intro"> </p>
                    <h1 class="bigHeading">
                        <span itemprop="model" itemscope itemtype="http://schema.org/Organization" class="mark">Ford</span>
                        <span itemprop="member" class="nameplate boldTxt">Fiesta</span>
                    </h1>
                    <!--The price-->
                    <!--The blurb-->
                    <p class="blurb">
                        Asemenea unui smartphone nou-nouţ, Ford Fiesta &icirc;mbină stilul contemporan cu tehnologia de v&acirc;rf.
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
            <li><a href="/Autoturisme/NouaFiesta/Prezentare#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/NouaFiesta/Prezentare">Prezentare general&#259;</a>
            </li>
            <li><a href="/Autoturisme/NouaFiesta/Design#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/NouaFiesta/Design">Design</a>
            </li>
            <li><a href="/Autoturisme/NouaFiesta/ExperientaLaVolan#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/NouaFiesta/ExperientaLaVolan">Experien&#539;a la volan</a>
            </li>
            <li><a href="/Autoturisme/NouaFiesta/PreturisiPromotii#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/NouaFiesta/PreturisiPromotii">PRE&#354;URI &#350;I PROMO&#354;II</a>
            </li>
            <li><a href="/Autoturisme/NouaFiesta/PerformantaSiEficienta#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/NouaFiesta/PerformantaSiEficienta">Performan&#355;&#259; &#351;i eficien&#355;&#259;</a>
            </li>
            <li class="selected" id="moreTab"><a href="#">Mai multe...</a><span></span></li>
        </ul>
    </nav>
</div>
<nav class="sub-nav open">
    <ul>
        <li class="selected"><a href="/Autoturisme/NouaFiesta/Siguranta" class="om_mt_ti"
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
            <h1>Tehnologie avansată pentru un plus de siguranţă</h1>
        </header>
        <div class="bto-body">
            <div class="abstract">
                Noul Ford Fiesta asigură niveluri excepţionale de siguranţă, aspect recunoscut de organizaţia independentă de siguranţă a vehiculelor, lider &icirc;n Europa: Euro NCAP. Fiesta a primit calificativul maxim general, de cinci stele şi, &icirc;n plus, a obţinut premii Advanced pentru trei dintre tehnologiile sale cele mai avansate: Active City Stop, Ford MyKey şi Ford SYNC cu asistenţă de urgenţă.
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
            <li><a href='#tab1' class='omt_'>Siguranţa vehiculului</a></li>
            <li><a href='#tab2' class='omt_'>Protecţie</a></li>
        </ul>
    </nav>
</div>
<!-- BEGIN [MidPageTabs] -->
<div class="innertab-wrapper">
<!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Siguranţa vehiculului</a></h2> -->
<div id='tab1' class="tab-content" style="display:none;">
<section class="bto-wrapper">
    <article class="bto-item">
        <header class="bto-title">
            <h1> </h1>
        </header>
        <div class="bto-body">
            <div class="abstract">
                Fiesta te poate ajuta să fii &icirc;n siguranţă pe drum &icirc;n diverse moduri.
            </div>
            <div class="body">
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Euro NCAP Advanced" title="Euro NCAP Advanced" src="/assets/img/fiesta/1214443014486.jpg">

        </div>
        <header class="bti-title">Recunoaştere Euro NCAP Advanced, pentru siguranţa ta</header>
        <div class="bti-body">
            <div class="abstract">
                Ford MyKey a primit premiul Euro NCAP Advanced &ndash; cea mai &icirc;naltă recunoaştere oferită de organizaţia europeană pentru siguranţă. Premiul recunoaşte doar cele mai avansate tehnologii pentru evitare şi ciocniri disponibile pe un autovehicul şi arată angajamentul Ford pentru siguranţă la nivelul &icirc;ntregii game auto.  <br>
                <br>
                Recunoasterea Euro NCAP Advanced atestă că Ford &icirc;şi respect promisiunea &icirc;n ceea ce priveşte standardele de siguranţă ale maşinilor noastre, prin tehnologii inovatoare create ca să te protejeze.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Ford SYNC asistenta de urgenta" title="Ford SYNC asistenta de urgenta" src="/assets/img/fiesta/1214443013815.jpg">

        </div>
        <header class="bti-title">Ford SYNC cu Asistenţă de urgenţă</header>
        <div class="bti-body">
            <div class="abstract">
                Un aspect important, care &icirc;ţi poate salva viaţa, al tehnologiei Ford SYNC este Asistenţa de urgenţă. &Icirc;n cazul unui accident, c&acirc;nd se activează airbagul sau se dezactivează pompa de carburant, tehnologia poate efectua automat un apel direct către Serviciile de urgenţă &icirc;n locul tău. Poţi alege să &icirc;ntrerupi apelul sau să discuţi cu personalul de urgenţă, dacă este cazul. Un aspect vital: sistemul oferă Serviciului de urgenţă informaţii esenţiale, cum ar fi coordonatele GPS, chiar dacă tu ţi-ai pierdut cunoștința.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Ford Fiesta Hill Start Assist" title="Ford Fiesta Hill Start Assist" src="/assets/img/fiesta/1214443015016.jpg">

        </div>
        <header class="bti-title">Pentru a evita coliziunile la viteză mică, Fiesta frânează în locul tău.</header>
        <div class="bti-body">
            <div class="abstract">
                Accidentele &icirc;n trafic la viteză mică, cu opriri şi porniri frecvente, au loc mult prea des. Iar opțiunea Active City Stop este o tehnologie avansată, creată pentru a te ajuta să eviţi astfel de accidente. La viteze mai mici de 30 km/h, sistemul detectează dacă maşina din faţă s-a oprit brusc şi fr&acirc;nează automat &icirc;n locul tău. Ca dovadă a caracterului său inovator, tehnologia Active City Stop a primit premiul Advanced oferit de Euro NCAP pentru siguranţă.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Ford Fiesta - Control" title="Ford Fiesta - Control" src="/assets/img/fiesta/1214443012324.jpg">
                    </div>
        <header class="bti-title">Un plus de control în cazul pornirilor în rampă</header>
        <div class="bti-body">
            <div class="abstract">
                Sistemul de asistență la pornirea din rampă &icirc;mpiedică temporar alunecarea &icirc;n spate atunci c&acirc;nd porneşti din pantă. Sistemul funcţionează prin menţinerea presiunii la nivelul sistemului de fr&acirc;nare pentru un interval suplimentar de 2,5 secunde, asigur&acirc;ndu-vă mai mult timp şi control atunci c&acirc;nd mutați piciorul de pe pedala de fr&acirc;nă pe cea de acceleraţie. Acest sistem este, de asemenea, util atunci c&acirc;nd opreşti şi porneşti autovehiculul pe suprafeţe alunecoase.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Dinamic&#259; &icirc;mbun&#259;t&#259;&#355;it&#259; a condusului" title="Dinamic&#259; &icirc;mbun&#259;t&#259;&#355;it&#259; a condusului" src="/assets/img/fiesta/1214443014337.jpg">

        </div>
        <header class="bti-title">Controlul electronic al stabilităţii te ajută să menţii controlul asupra autovehiculului, indiferent de condiţii</header>
        <div class="bti-body">
            <div class="abstract">
                Controlul electronic al stabilităţii (ESP) monitorizează &icirc;n mod constant deplasarea maşinii, detectează orice abateri de la traseu sau dacă autovehiculul &icirc;ncepe să patineze şi corectează automat poziţia de drum. Sistemul este creat pentru a te ajuta să menţii controlul asupra maşinii şi, &icirc;n plus, te poate ajuta să reduci distanţa de fr&acirc;nare &icirc;n caz de urgenţă.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Ford Fiesta - Airbag-uri" title="Ford Fiesta - Airbag-uri" src="/assets/img/fiesta/1214443014942.jpg">

        </div>
        <header class="bti-title">Airbaguri menite să te protejeze din orice unghi</header>
        <div class="bti-body">
            <div class="abstract">
                Pe l&acirc;ngă airbagurile frontale pentru pasagerul din față și șofer, există şi airbaguri laterale pentru protejarea toracelui şi airbaguri tip cortină pentru protejarea capului. Există şi un airbag menit să protejeze genunchii şoferului. Dacă doreşti să dezactivezi airbagul pentru pasager, de exemplu, atunci c&acirc;nd pe scaunul &icirc;ndreptat contrar sensului de mers se află un bebeluş sau un copil, acţionează rapid maneta pentru a-l dezactiva. Pentru a-ţi reaminti de dezactivarea airbagului, starea &bdquo;dezactivat&rdquo; este indicată printr-un indicator de pe panoul de bord.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Ford Fiesta - Monitorizare presiune roti" title="Ford Fiesta - Monitorizare presiune roti" src="/assets/img/fiesta/1214443011880.jpg">

        </div>
        <header class="bti-title">Avertizare timpurie în cazul unei pene</header>
        <div class="bti-body">
            <div class="abstract">
                Dacă una sau mai multe dintre anvelopele autovehiculului pierd presiune &icirc;n timpul deplasării, sistemul de monitorizare a presiunii &icirc;n pneuri te va avertiza imediat cu privire la perforaţie prin iluminarea unei pictograme pe panoul de bord.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Ford Fiesta - Sistem de protectie" title="Ford Fiesta - Sistem de protectie" src="/assets/img/fiesta/1214443013739.jpg">

        </div>
        <header class="bti-title">Sistemele de siguranţă coordonate se activează într-o fracţiune de secundă</header>
        <div class="bti-body">
            <div class="abstract">
                Sistemul inteligent de protecţie avansată (IPS) al modelului Fiesta coordonează o serie de sisteme de siguranţă pentru a-ţi asigura protecţie maximă ţie şi pasagerilor tăi. &Icirc;n plus, modelul Fiesta este dotat cu o caroserie rigidă, care absoarbe energia &icirc;n cazul unui impact, şi cu o tehnologie avansată pentru scaune şi centuri de siguranţă pentru a reduce riscul de accidentare &icirc;n cazul unui impact.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Ford Fiesta - ABS" title="Ford Fiesta - ABS" src="/assets/img/fiesta/1214443013292.jpg">

        </div>
        <header class="bti-title">Sisteme avansate pentru o frânare mai controlată</header>
        <div class="bti-body">
            <div class="abstract">
                Sistemul de fr&acirc;nare cu anti-blocare roţi (ABS) şi distribuţia electronică a forţei de fr&acirc;nare (EBD) asigură o fr&acirc;nare mai bine controlată. Sistemul de asistenţă la fr&acirc;narea de urgenţă (EBA) ajută autovehiculul Fiesta să atingă eficienţa maximă de fr&acirc;nare &icirc;n cazul unei situaţii de urgenţă. Sistemul funcţionează prin detectarea presiunii aplicate de şofer pe pedala de fr&acirc;nă şi prin creşterea automată a acestei presiuni, dacă este cazul.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Ford Fiesta" title="Ford Fiesta" src="/assets/img/fiesta/1214443011500.jpg">

        </div>
        <header class="bti-title">O oglindă retrovizoare cu funcţie anti-orbire</header>
        <div class="bti-body">
            <div class="abstract">
                Vei conduce mai uşor pe timp de noapte dacă nu eşti orbit &icirc;n mod constant de farurile autovehiculelor care se deplasează &icirc;n spatele tău. De aceea, oglinda retrovizoare heliomată automată inovatoare a modelului Fiesta detectează automat reflexia farurilor din spate şi reduce strălucirea luminii reflectate.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Ford Fiesta - Faruri" title="Ford Fiesta - Faruri" src="/assets/img/fiesta/1214443015764.jpg">

        </div>
        <header class="bti-title">Lumini de zi cu tehnologie LED</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Stilul avangardist al modelului Fiesta este subliniat de luminile de zi cu tehnologie LED, care imbina stilul si utilitatea. Oferind o eficienta energetic de exceptie, luminile de zi te vor ajuta sa fii observat in timpul zilei si sa vezi mai bine noaptea. <br>
                    <br>
                    <br>
                    <br>
                    *Asistenţa de urgenţă Ford operează &icirc;n peste 30 de ţări din Europa. Această dotare funcţionează atunci c&acirc;nd este conectată cu un telefon mobil compatibil pe care &icirc;l ai la tine, &icirc;n momentul &icirc;n care un airbag este declanşat (cu excepţia airbagurilor pentru genunchi) sau atunci c&acirc;nd un senzor care &icirc;nregistrează o defecţiune &icirc;ntrerupe pompa de combustibil. Funcţia de mesagerie şi Asistenţa de urgenţă nu sunt disponibile &icirc;n toate limbile din Europa.</div>
            </div>
        </div>
    </article>
</section>
</div>
<!--</div>-->
<!--<div id='tab2' class="mp-tab-wrapper">
<h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">Protecţie</a></h2> -->
<div id='tab2' class="tab-content" style="display:none;">
    <section class="bto-wrapper">
        <article class="bto-item">
            <header class="bto-title">
                <h1> </h1>
            </header>
            <div class="bto-body">
                <div class="abstract">
                    Pentru a-ţi proteja noua Fiesta, este suficient să atingi un buton.
                </div>
                <div class="body">
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Cheie Ford" title="Cheie Ford" src="/assets/img/fiesta/1214443010666.jpg">

            </div>
            <header class="bti-title">Modul convenabil de a-ţi proteja autovehiculul</header>
            <div class="bti-body">
                <div class="abstract">
                    Cu ajutorul Sistemului global de &icirc;nchidere, poţi deschide şi &icirc;nchide toate portierele şi ferestrele electrice de la distanţă cu ajutorul cheii. Funcţia de &icirc;nchidere dublă &icirc;mpiedică deschiderea portierelor din interior şi include un sistem de alarmă Thatcham (categoria 1).
                </div>
            </div>
        </article>
    </section>
</div>
<!--</div>-->
</div> <!-- END [MidPageTabs] -->
</article>
</section>
<!-- nosc comp -->
<script src="/cs/ContentServer?pagename=ENGInE/script/messaging/core"></script>
<script id="TagIT.load" src='/cs/ContentServer?pagename=RORO4_ENGINE/script/packager&c=Page&cid=1205027790389&location=load&isMobile=false&require=main' defer></script>
</div>