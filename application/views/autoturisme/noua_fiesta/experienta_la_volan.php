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
            <li class="selected"><a href="/Autoturisme/NouaFiesta/ExperientaLaVolan#primaryTabs" data-ajaxlink="/Autoturisme/NouaFiesta/ExperientaLaVolan">Experien&#539;a la volan</a>
            </li>
            <li><a href="/Autoturisme/NouaFiesta/PreturisiPromotii#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/NouaFiesta/PreturisiPromotii">PRE&#354;URI &#350;I PROMO&#354;II</a>
            </li>
            <li><a href="/Autoturisme/NouaFiesta/PerformantaSiEficienta#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/NouaFiesta/PerformantaSiEficienta">Performan&#355;&#259; &#351;i eficien&#355;&#259;</a>
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
            <h1>Modelul Fiesta este creat pentru a te ţine la curent cu noutaţile.</h1>
        </header>
        <div class="bto-body">
            <div class="abstract">
                Tehnologiile avansate te țin conectat la drum şi cu lumea &icirc;nconjurătoare, oferindu-ţi libertatea de a te bucura de fiecare clipă de condus.  <br>
                <br>
                Ford SYNC te conectează fără efort la sistemul audio şi te pune &icirc;n legătură cu familia şi prietenii prin telefon şi prin mesaje, &icirc;n timp ce te deplasezi.  <br>
                <br>
                Iar interiorul modern, frumos lucrat &icirc;n cel mai mic detaliu, &icirc;ţi face viaţa mai simplă, mai relaxantă, mai confortabilă şi mai frumoasă.
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
            <li><a href='#tab1' class='omt_'>Confort şi comoditate</a></li>
            <li><a href='#tab2' class='omt_'>Tehnologia condusului</a></li>
        </ul>
    </nav>
</div>
<!-- BEGIN [MidPageTabs] -->
<div class="innertab-wrapper">
<!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Confort şi comoditate</a></h2> -->
<div id='tab1' class="tab-content" style="display:none;">
<section class="bto-wrapper">
    <article class="bto-item">
        <header class="bto-title">
            <h1> </h1>
        </header>
        <div class="bto-body">
            <div class="abstract">
                Indiferent dacă este vorba despre comenzile hands-free pentru sistemul audio şi apelurile de pe telefonul mobil, de sistemul de navigaţie prin satelit integrat sau de parbrizul &icirc;ncălzit, toate detaliile noului model Fiesta sunt create pentru a-ţi face viaţa mai simplă.
            </div>
            <div class="body">
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Ford SYNC.  Tehnologie hands-free" title="Ford SYNC.  Tehnologie hands-free" src="/assets/img/fiesta/1214443014412.jpg">

        </div>
        <header class="bti-title">Ford SYNC. Tehnologia avansată hands-free</header>
        <div class="bti-body">
            <div class="abstract">
                Ford SYNC &icirc;ţi permite să controlezi muzica şi să efectuezi şi să preiei apeluri de pe telefonul mobil, utiliz&acirc;nd simple comenzi vocale directe. De exemplu, dacă &bdquo;home&rdquo; (acasă) este &icirc;nregistrat &icirc;n agenda de pe telefonul mobil, este de ajuns să rosteşti: &bdquo;Call home&rdquo; (Apel acasă), iar sistemul va apela automat numărul respectiv. Poţi utiliza comenzile vocale pentru a reda melodii de pe o unitate USB sau MP3/iPod&reg; ori atunci c&acirc;nd redai &icirc;n flux melodii de pe un telefon compatibil Bluetooth&reg;. &Icirc;n plus, sistemul citeşte cu voce tare chiar şi mesajele text pe care le primeşti.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Ford Fiesta- Navigatie integrata" title="Ford Fiesta- Navigatie integrata" src="/assets/img/fiesta/1214443013443.jpg">

        </div>
        <header class="bti-title">Sistemul integrat de navigaţie se asigură că ajungi la destinaţie</header>
        <div class="bti-body">
            <div class="abstract">
                Fiesta are un sistem de navigaţie integrat, cu ecran color de 5&rdquo;.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Ford MyKey" title="Ford MyKey" src="/assets/img/fiesta/1214443014560.jpg">

        </div>
        <header class="bti-title">Cu sistemul MyKey®, împarţi maşina cu alţii, fără griji</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Această nouă tehnologie &icirc;ţi permite să setezi limita maximă de viteză, să setezi un semnal care să atragă atenţia asupra purtării centurii de siguranţă şi să controlezi volumul sistemului audio, dacă doreşti. Fiind creată pentru a-ţi asigura liniştea atunci c&acirc;nd &icirc;mprumuţi maşina personală Fiesta unui prieten sau unui membru al familiei, tehnologia Ford MyKey&reg; este uşor de utilizat. Trebuie doar să introduci cheia de contact, să porneşti maşina şi să urmezi instrucţiunile pentru a programa restricţiile dorite pentru cheia respectivă: Ford MyKey&reg;. Poţi să păstrezi tu cheia de &bdquo;admin&rdquo; şi chiar să ai mai multe exemplare din ambele chei, dacă doreşti.</div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Ford Fiesta - parbriz Quickclear" title="Ford Fiesta - parbriz Quickclear" src="/assets/img/fiesta/1214443015987.jpg">

        </div>
        <header class="bti-title">Parbriz încălzit</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Această dotare inteligentă este creată pentru a-ţi permite să porneşti rapid &icirc;n dimineţile geroase. Trebuie doar să apeşi pe un buton, iar sistemul poate să dezgheţe parbrizul &icirc;n c&acirc;teva secunde, chiar la temperaturi foarte scazute.</div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Ford Fiesta - Iluminare ambientala" title="Ford Fiesta - Iluminare ambientala" src="/assets/img/fiesta/1214443013591.jpg">

        </div>
        <header class="bti-title">Iluminare ambientală pentru un interior mai modern</header>
        <div class="bti-body">
            <div class="abstract">
                Finisajul roşu delicat scoate &icirc;n evidenţă, &icirc;n mod subtil, interiorul maşinii tale Fiesta şi creează un mediu cald, primitor şi elegant. (Iluminarea ambientală este inclusă ca dotare standard pentru modelul Titanium)
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Ford Fiesta - aer conditionat" title="Ford Fiesta - aer conditionat" src="/assets/img/fiesta/1214443010592.jpg">

        </div>
        <header class="bti-title">Setează temperatura dorită</header>
        <div class="bti-body">
            <div class="abstract">
                Cu ajutorul dotării opţionale Sistem de climatizare automată (EATC), selectezi pur şi simplu temperatura interioară dorită iar sistemul o va menţine cu ajutorul sistemului avansat de climatizare.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Ford Fiesta - Sistem de sunet" title="Ford Fiesta - Sistem de sunet" src="/assets/img/fiesta/1214443011954.jpg">

        </div>
        <header class="bti-title">Consolă centrală inovatoare care îţi asigură controlul deplin</header>
        <div class="bti-body">
            <div class="abstract">
                Consola centrală multifuncţională avansată &icirc;ţi permite să controlezi numeroasele sisteme ale maşinii dintr-un singur loc. Toate funcţiile sunt clar afişate pe ecran şi poţi accesa multe dintre acestea şi cu ajutorul butoanelor de comandă de pe volan.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Ford Fiesta - Faruri automate" title="Ford Fiesta - Faruri automate" src="/assets/img/fiesta/1214443012102.jpg">

        </div>
        <header class="bti-title">Faruri care se aprind automat atunci când este necesar</header>
        <div class="bti-body">
            <div class="abstract">
                Fiesta este prevăzut cu senzori care detectează lumina c&acirc;nd &icirc;ncepe să se &icirc;ntunece sau la schimbarea bruscă a condiţiilor de iluminare. De exemplu, atunci c&acirc;nd intri &icirc;ntr-un tunel. Atunci se activează farurile cu acţionare automată, care pot simplifica şi mări nivelul de siguranţă al condusului. Farurile automate sunt disponibile ca dotare opţională cu ştergătoarele cu senzor de ploaie.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Ford Fiesta - Oglinzi electrice" title="Ford Fiesta - Oglinzi electrice" src="/assets/img/fiesta/1214443011729.jpg">

        </div>
        <header class="bti-title">Oglinzi laterale care se protejează singure</header>
        <div class="bti-body">
            <div class="abstract">
                Pentru a evita deteriorarea accidentală, oglinzile laterale pliabile electric oferite ca dotare opţională se pliază către interior atunci c&acirc;nd autovehiculul este &icirc;nchis (sau, desigur, atunci c&acirc;nd utilizezi comutatorul de ajustare a oglinzilor). Atunci c&acirc;nd sunt rabatate, acestea protejează elegantele indicatoare integrate.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Ford Fiesta - Faruri" title="Ford Fiesta - Faruri" src="/assets/img/fiesta/1214443011803.jpg">

        </div>
        <header class="bti-title">Fiesta îţi luminează drumul până când ajungi acasă</header>
        <div class="bti-body">
            <div class="abstract">
                Atunci c&acirc;nd ajungi acasă noaptea, acţionează scurt maneta din st&acirc;nga şi farurile Home Safe vor răm&acirc;ne aprinse timp de 30 de secunde, lumin&acirc;ndu-ţi drumul p&acirc;nă ajungi &icirc;n casă. Această funcţie utilă este o dotare standard pentru &icirc;ntreaga gamă.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Ford Fiesta - Interior" title="Ford Fiesta - Interior" src="/assets/img/fiesta/1214443014113.jpg">

        </div>
        <header class="bti-title">Un plus de confort cu ajutorul scaunelor cu încălzire ajustabile</header>
        <div class="bti-body">
            <div class="abstract">
                Indiferent de condiţiile de afară, te vei simţi confortabil &icirc;ntr-o maşină Fiesta. Scaunele din faţă sunt complet reglabile, astfel &icirc;nc&acirc;t vei putea seta mereu poziţia ideală, indiferent dacă eşti şofer sau pasager. Scaunele frontale cu &icirc;ncălzire, incluse ca opţiune, te vor ajuta să te &icirc;ncălzeşti chiar şi la cele mai scăzute temperaturi.
            </div>
        </div>
    </article>
</section>
</div>
<!--</div>-->
<!--<div id='tab2' class="mp-tab-wrapper">
<h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">Tehnologia condusului</a></h2> -->
<div id='tab2' class="tab-content" style="display:none;">
    <section class="bto-wrapper">
        <article class="bto-item">
            <header class="bto-title">
                <h1> </h1>
            </header>
            <div class="bto-body">
                <div class="abstract">
                    Datorită tehnologiilor avansate, precum noul sistem Ford Keyless Entry, butonul de pornire Ford Power şi sistemul audio Sony, fiecare clipă de condus cu Fiesta este simplă şi distractivă.
                </div>
                <div class="body">
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Ford Fiesta Key-free" title="Ford Fiesta Key-free" src="/assets/img/fiesta/1214443015615.jpg">

            </div>
            <header class="bti-title">Sistemul Keyless Entry înseamnă mai puţine griji</header>
            <div class="bti-body">
                <div class="abstract">
                    Sistemul Ford Keyless Entry &icirc;ţi permite să &icirc;ncui şi să descui maşina fără să scoţi cheia din buzunar sau din poşetă - ideal pentru situaţiile &icirc;n care ai m&acirc;inile ocupate cu altceva.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Ford Power - Buton pornire" title="Ford Power - Buton pornire" src="/assets/img/fiesta/1214443012176.jpg">

            </div>
            <header class="bti-title">Porneşte Fiesta printr-o singură atingere</header>
            <div class="bti-body">
                <div class="abstract">
                    Fiesta detectează automat brelocul unic al cheii cu telecomandă, chiar dacă ai cheia &icirc;n buzunar sau &icirc;n geantă. Trebuie doar să apeşi pe butonul de pornire Ford Power şi motorul prinde viaţă.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Ford Fiesta - Sistem de sunet" title="Ford Fiesta - Sistem de sunet" src="/assets/img/fiesta/1214443011954.jpg">

            </div>
            <header class="bti-title">Sonorizare perfectă</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Revoluţionarul sistem audio Sony cu radio/CD opţional include opt boxe premium. Şi, pe l&acirc;ngă faptul că &icirc;ţi permite să te bucuri de muzica preferată atunci c&acirc;nd conduci, acest sistem afişează şi informaţii despre melodia redată. &Icirc;n funcţie de versiunea pe care o alegi, sistemul poate chiar să afişeze şi titlurile ştirilor de ultimă oră.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Camera pentru mersul inapoi" title="Camera pentru mersul inapoi" src="/assets/img/fiesta/1214443015838.jpg">

            </div>
            <header class="bti-title">Marşarier mai simplu şi mai sigur</header>
            <div class="bti-body">
                <div class="abstract">
                    St&acirc;lpi, biciclete, ziduri joase&hellip; camera video pentru vizualizare spate &icirc;ţi arată tot ce se află &icirc;n spatele autovehiculului pe un ecran integrat &icirc;n consola centrală. Sistemul &icirc;ţi arată obiecte pe care le-ai putea omite şi, &icirc;n plus, afişează linii virtuale pentru a te ajuta să parchezi şi &icirc;n cele mai &icirc;nguste spaţii. Camera se activează automat atunci c&acirc;nd selectezi treapta de marşarier.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Ford Fiesta" title="Ford Fiesta" src="/assets/img/fiesta/1214443015689.jpg">

            </div>
            <header class="bti-title">Senzori care fac parcarea mai uşoară</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Fiind creaţi pentru a te ajuta să parchezi cu mai multă &icirc;ncredere, senzorii pentru parcare la distanta te ajută să determini distanţa dintre vehiculul tău şi orice fel de obstacol din faţă sau din spate. Atunci c&acirc;nd detectează un obiect, senzorii emit o avertizare sonoră care se intensifică cu c&acirc;t te apropii mai mult de obstacol.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Ford Fiesta - Volan" title="Ford Fiesta - Volan" src="/assets/img/fiesta/1214443014263.jpg">

            </div>
            <header class="bti-title">Manevrare şi viraje fără efort</header>
            <div class="bti-body">
                <div class="abstract">
                    Sistemul de direcție asistată electric (EPAS) se reglează automat pentru a permite manevrarea facila a volanului atunci c&acirc;nd parchezi &icirc;ntr-un spaţiu restr&acirc;ns şi virarea mai fermă pentru mai mult control pe autostradă. Spre deosebire de servodirecția convențională care funcționează continuu și consumă energie și combustibil, sistemul nostru EPAS funcționează numai atunci c&acirc;nd este necesar, sporind economia de combustibil.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Ford Fiesta - Cruise control" title="Ford Fiesta - Cruise control" src="/assets/img/fiesta/1214443013517.jpg">

            </div>
            <header class="bti-title">Tempomatul face ca deplasările lungi să fie mai relaxante</header>
            <div class="bti-body">
                <div class="abstract">
                    Atunci c&acirc;nd te afli pe autostradă, poţi seta viteza utiliz&acirc;nd butoanele tempomatului de pe volan. Apoi, sistemul va menţine viteza, astfel &icirc;nc&acirc;t nu va fi nevoie să ţii piciorul pe acceleraţie. Pentru a mări sau a reduce viteza, sunt utilizate aceleaşi butoane de comandă.
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
<script id="TagIT.load" src='/cs/ContentServer?pagename=RORO4_ENGINE/script/packager&c=Page&cid=1205027784680&location=load&isMobile=false&require=main' defer></script>
</div>