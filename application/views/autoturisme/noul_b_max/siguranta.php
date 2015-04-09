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
            <li><a href="/Autoturisme/NoulB-MAX/PerformantaSiEficienta#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/NoulB-MAX/PerformantaSiEficienta">Performan&#355;&#259; &#351;i eficien&#355;&#259;</a>
            </li>
            <li class="selected"><a href="/Autoturisme/NoulB-MAX/Siguranta#primaryTabs" data-ajaxlink="/Autoturisme/NoulB-MAX/Siguranta">Siguran&#539;&#259;</a>
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
            <h1>Una dintre cele mai sigure maşini Ford</h1>
        </header>
        <div class="bto-body">
            <div class="abstract">
                Ford B-MAX a obţinut rezultate  remarcabile &icirc;n testele de siguranţă desfăşurate de noi. De aceea suntem convinşi că modelul de serie, cu numeroasele sale caracteristici de siguranţă, va obţine calificative oficiale excelente, chiar şi prin prisma noilor standarde, mai stringente, aplicate de Euro NCAP. <br>
                <br>
                Dotările de securitate ale maşinii sunt la fel de impresionante, printre ele număr&acirc;ndu-se şi Sistemul global de &icirc;nchidere, care &icirc;ţi dă posibilitatea de a &icirc;nchide şi deschide, din telecomandă, uşile şi geamurile.
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
            <li><a href='#tab1' class='omt_'>Siguranță</a></li>
        </ul>
    </nav>
</div>
<!-- BEGIN [MidPageTabs] -->
<div class="innertab-wrapper">
<!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Siguranță</a></h2> -->
<div id='tab1' class="tab-content" style="display:none;">
    <section class="bto-wrapper">
        <article class="bto-item">
            <header class="bto-title">
                <h1> </h1>
            </header>
            <div class="bto-body">
                <div class="abstract">
                    B-MAX integrează o mare varietate de dotări avansate, care au un scop comun: să fii &icirc;n siguranţă pe şosea:
                </div>
                <div class="body">
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Euro NCAP" title="Euro NCAP" src="/assets/img/b_max/1214437682583.jpg">

            </div>
            <header class="bti-title">Un premiu Euro NCAP Advanced, pentru a te menţine în siguranţă</header>
            <div class="bti-body">
                <div class="abstract">
                    Ford SYNC&reg; cu Sistemul de Asistenţă &icirc;n caz de urgenţă şi Sistemul Active City Stop au primit fiecare c&acirc;te un premiu Euro NCAP Advanced: cea mai &icirc;naltă distincţie oferită de cea mai prestigioasă organizaţie independentă din Europa pe probleme de siguranţă. Premiul recunoaşte doar cele mai avansate tehnologii pentru evitarea coliziunii, pentru coliziune şi post-coliziune disponibile &icirc;ntr-o maşină. Iar o măsură a angajamentului Ford faţă de siguranţă este dată de faptul că, pentru toată gama noastră, am primit p&acirc;nă acum un total de <a HREF="/TehnologiiFord/Euro_NCAP_Advanced" CONTENTEDITABLE="false" >şapte premii Euro NCAP Advanced</a>, pentru toate inovaţiile proiectate să te protejeze.
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

                    <img alt="Ford B-MAX - detaliu roata fata" title="Ford B-MAX - detaliu roata fata" src="/assets/img/b_max/1214419929200.jpg">

            </div>
            <header class="bti-title">Eşti avertizat din timp dacă anvelopele pierd din presiune</header>
            <div class="bti-body">
                <div class="abstract">
                    Dacă, &icirc;n timp ce te afli pe drum, unul dintre cauciucurile maşinii &icirc;ncepe să piardă presiune, sistemul de monitorizare a presiunii din pneuri va aprinde imediat un indicator de avertizare pe panoul de bord. Astfel, ai mai mult timp la dispoziţie pentru a opri &icirc;n siguranţă şi a rezolva problema.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
                     <img alt="Structur&#259; de rezisten&#539;&#259; &icirc;nt&#259;rit&#259;" title="Structur&#259; de rezisten&#539;&#259; &icirc;nt&#259;rit&#259;" src="/assets/img/b_max/1214419926766.jpg">

            </div>
            <header class="bti-title">Caroserie ranforsată</header>
            <div class="bti-body">
                <div class="abstract">
                    Caroseria maşinii a fost &icirc;ntărită &icirc;n zonele cele mai importante, pentru a compensa <a href="" target="_blank" onclick="triggerOverlay('/cs/ContentServer?pagename=ENGInE/Overlay_C/ShowOverlay&amp;c=Overlay_C&amp;cid=1205005896341&amp;overlayheight=439&amp;overlaywidth=780','overlay','Montanți centrali integrați &icirc;n uși','&Icirc;nchide','439','780'); return false;" title="Montanți centrali integrați &icirc;n uși">integrarea &icirc;n portieră a montantului central (st&acirc;lpul B)</a>. Inginerii Ford responsabili cu siguranţa vehiculului au elaborate, chiar, propriul test de siguranţă, pentru a se asigura că B-MAX depaşeşte şi cele mai severe standard de siguranţă.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
                <img alt="Ford B-MAX - airbag-uri multiple" title="Ford B-MAX - airbag-uri multiple" src="/assets/img/b_max/1214419928161.jpg">

            </div>
            <header class="bti-title">Sistemele coordonate de siguranţă se activează într-o fracţiune de secundă</header>
            <div class="bti-body">
                <div class="abstract">
                    B-MAX este echipat cu un avansat Sistem Inteligent de Protecţie (IPS), care coordonează mai multe sisteme de siguranţă, pentru a oferi maximum de protecţie at&acirc;t şoferului, c&acirc;t şi pasagerilor.  <br>
                    <br>
                    Caroseriei rigide, care absoarbe o mare parte din forţa impactului, i se alătură  tehnologiile avansate, aplicate &icirc;n proiectarea scaunelor şi centurilor de siguranţă, rezultatul fiind scăderea riscului de rănire &icirc;n caz de accident.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
               <img alt="Program electronic de stabilitate" title="Program electronic de stabilitate" src="/assets/img/b_max/1214419929644.jpg">

            </div>
            <header class="bti-title">ESP te ajută să păstrezi controlul, indiferent de condiţiile de drum</header>
            <div class="bti-body">
                <div class="abstract">
                    Sistemul Electronic de Stabilitate (ESP) monitorizează permanent comportamentul vehiculului. &Icirc;n momentul &icirc;n care este detectată orice deviere de la traiectoria aleasă de şofer, cum ar fi intrarea &icirc;n derapaj, sistemul face automat ajustările necesare pentru ca vehiculul să reintre pe traseul corect. Totodată, această tehnologie contribuie la reducerea distanţelor de fr&acirc;nare, &icirc;n caz de urgenţă.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Ford B-MAX - detaliu roata fata" title="Ford B-MAX - detaliu roata fata" src="/assets/img/b_max/1214419929200.jpg">

            </div>
            <header class="bti-title">Sisteme avansate, pentru o frânare mai eficientă</header>
            <div class="bti-body">
                <div class="abstract">
                    Sistemul anti-blocare a roţilor la fr&acirc;nare (ABS) şi cel de distribuire electronică a forţei de fr&acirc;nare (EBD) asigură, &icirc;mpreună, o fr&acirc;nare mult mai controlată a vehiculului. <br>
                    <br>
                    Sistemul de asistenţă la fr&acirc;narea de urgenţă (EBA) contribuie, şi el, la maximizarea eficienţei de fr&acirc;nare &icirc;n situaţii de urgenţă. Sistemul analizează forţa de fr&acirc;nare pe care o aplică şoferul şi, atunci c&acirc;nd este cazul, o amplifică &icirc;n mod automat. (Acest sistem este integrat &icirc;n sistemul ESP.)
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Ford B-MAX - airbag-uri" title="Ford B-MAX - airbag-uri" src="/assets/img/b_max/1214419927654.jpg">

            </div>
            <header class="bti-title">Airbaguri care te protejează din toate direcţiile</header>
            <div class="bti-body">
                <div class="abstract">
                    Dacă doreşti să dezactivezi airbagul, spre exemplu &icirc;n situaţiile &icirc;n care pe scaunul pasagerului se află un scaun pentru copii, cu noul B-Max acest lucru este extrem de simplu. O simplă apăsare de buton dezactivează airbagul, iar un indicator de pe panoul de bord serveşte drept memento.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Oglind&#259; retrovizoare heliomat&#259; " title="Oglind&#259; retrovizoare heliomat&#259; " src="/assets/img/b_max/1214419926955.jpg">

            </div>
            <header class="bti-title">O oglindă retrovizoare care nu te orbeşte</header>
            <div class="bti-body">
                <div class="abstract">
                    Condusul pe timp de noapte este considerabil mai uşor şi mai plăcut dacă nu eşti orbit, constant, de farurile vehiculelor din spate. Oglinda retrovizoare heliomată detectează intensitatea luminilor din spate şi micşorează automat nivelul de reflexive al oglinzii.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
               <img alt="Faruri cu halogen" title="Faruri cu halogen" src="/assets/img/b_max/1214419928367.jpg">

            </div>
            <header class="bti-title">Faruri mai luminoase, pentru un condus mai sigur</header>
            <div class="bti-body">
                <div class="abstract">
                    Farurile frontale cu halogen furnizează o lumină mai intensă şi mai pătrunzătoare, astfel &icirc;nc&acirc;t să poţi vedea (şi să fii văzut) mai bine şi călătoria ta să fie una mai sigură. Farurile frontale cu halogen include lumini de zi cu tehnologie LED, pentru a te ajută să fii şi mai vizibil pe şosea.
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
<script id="TagIT.load" src='/cs/ContentServer?pagename=RORO4_ENGINE/script/packager&c=Page&cid=1205005698022&location=load&isMobile=false&require=main' defer></script>
</div>