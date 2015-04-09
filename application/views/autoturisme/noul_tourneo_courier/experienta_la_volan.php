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
        </a><span></span></li><li>Tourneo Courier</li></ul>
    </nav>
    <script>
        var vehicleimagepackpresid = '1205058479782';
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
        var bootstrapVehicleData = {"vehicles":[{"strIntroToFord": " ","brand": "Ford","vehicleType": "PV","catalogId": "NONE","nameplate": "Tourneo Courier","labelAvailableFrom": "&nbsp;","formattedCurrency": "","nameplateText": "Compact \u0219i nea\u0219teptat de \u00EEnc\u0103p\u0103tor, acest vehicul de transport ofer\u0103 spa\u021Biu abundent pentru patru sau cinci persoane, precum \u0219i pentru bagajele acestora.","imagePack": false,"hideVehicleImage": false,"images": [],"backgroundImagePath": ["/assets/img/tourneo_courier/1214480006600.jpg","null","null"],"disclaimerTextColor": [null,null,null],"current": true,"cid": "1205071626047","cta": [{"linkTitle": "DESCARC\u0102 BRO\u015EUR\u0102 ","linkURL": "\/SBE\/Brosura\/DescarcaBrosura","linkType": "primary","linkTarget": "_blank","omid": "va"},{"linkTitle": "\u00CENSCRIE-TE LA TEST DRIVE ","linkURL": "\/SBE\/TestDrive?shopcode=AUTHORED","linkType": "tertiary","linkTarget": "_blank","omid": "tr"},{"linkTitle": "VREAU SĂ FIU INFORMAT(Ă) ","linkURL": "/SBE/VreauSaFiuInformata","linkType": "tertiary","linkTarget": "","omid": "tr"}],"social": {"facebook": "https://facebook.com","facebookPage": "fordromania"},"disclaimer": "Modelul prezentat este un Tourneo Courier","seriesCode": "AUTHORED","uscCode": "AUTHORED","presId": "1205058479782","promos": [],"idf": {"options":[{"dataOverlay": {"mediaType":"Flash","height":"439","width":"780"},"iconURL":"/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobheader=image%2Fjpg&blobwhere=1214480008287&blobkey=id","link":"/cs/ContentServer?cid=1205071622553&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Flash_C&amp;site=RORO4_ENGINE","videoSrc":[{"src1":""},{"src2":""}],"youtubeClose":"","tooltipText":"Tourneo Courier"}]}}]} || {};
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
                <li class="default-nameplate-vehicle" style="background-image:url(/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobheader=image%2Fjpg&blobwhere=1214480006600&blobkey=id)">
                    <div class="layered-nameplate-image">
                        <div class="image-holder">
                        </div>
                    </div>
                    <aside class="nameplate-disclaimer ">
                        Modelul prezentat este un Tourneo Courier
                    </aside>
                </li>
            </ul>
            <div itemscope itemtype="http://schema.org/Product" id="nameplateDetails" class="nameplate-vehicle">
                <!--the text description-->
                <div class="name-plate-text">
                    <p class="intro"> </p>
                    <h1 class="bigHeading">
                        <span itemprop="model" itemscope itemtype="http://schema.org/Organization" class="mark">Ford</span>
                        <span itemprop="member" class="nameplate boldTxt">Tourneo Courier</span>
                    </h1>
                    <!--The price-->
                    <!--The blurb-->
                    <p class="blurb">
                        Compact și neașteptat de &icirc;ncăpător, acest vehicul de transport oferă spațiu abundent pentru patru sau cinci persoane, precum și pentru bagajele acestora.
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
            <li><a href="/Autoturisme/Noul-Ford-Tourneo-Courier/#primaryTabs">Prezentare general&#259;</a>
            </li>
            <li><a href="/Autoturisme/Noul-Ford-Tourneo-Courier/Design#primaryTabs">Design</a>
            </li>
            <li class="selected"><a href="/Autoturisme/Noul-Ford-Tourneo-Courier/ExperientaLaVolan#primaryTabs">Experien&#355;a la volan</a>
            </li>
            <li><a href="/Autoturisme/Noul-Ford-Tourneo-Courier/Performanta#primaryTabs" class="om_mt_ti">Performan&#355;&#259; &#351;i eficien&#355;&#259;</a>
            </li>
            <li><a href="/Autoturisme/Noul-Ford-Tourneo-Courier/Siguranta#primaryTabs" class="om_mt_ti">Siguran&#355;&#259; &#351;i securitate</a>
            </li>
            <li><a href="#" id="moreTab">Mai multe...</a><span></span></li>
        </ul>
    </nav>
</div>
<nav class="sub-nav ">
    <ul>

        <li><a href="/Autoturisme/Noul-Ford-Tourneo-Courier/Preturi"
                >List&#259; de pre&#355;uri</a></li>
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
            <h1>Tot ceea ce ai nevoie de la o maşină.</h1>
        </header>
        <div class="bto-body">
            <div class="abstract">
                <div>Mașina este o parte importantă a vieții tale, deci trebuie să te simți &icirc;n ea ca acasă. Mașina ta trebuie să &icirc;ndeplinească toate rolurile pe care i le dai. Și pe l&acirc;ngă a fi confortabilă și flexibilă, mașina trebuie să facă fiecare călătorie ușoară și plăcută. Află cum poate Tourneo Courier să &icirc;ndeplinească toate aceste condiții.</div>
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
    <section class="bto-wrapper">
        <article class="bto-item">
            <header class="bto-title">
                <h1>Tehnologia condusului </h1>
            </header>
            <div class="bto-body">
                <div class="abstract">
                    <div>Rolul tehnologiei este &icirc;ntotdeauna acela de a-ţi oferi mai mult timp, de a te ajuta să te concentrezi asupra unor lucruri mai importante și de a-ţi face viața mai ușoară. Iar &icirc;n cazul noului Tourneo Courier, fiecare sistem, caracteristică sau mecanism este proiectat exact pentru acest scop.</div>
                </div>
                <div class="body">
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Ford SYNC cu Asisten&#355;&#259; de Urgen&#355;&#259;" title="Ford SYNC cu Asisten&#355;&#259; de Urgen&#355;&#259;" src="/assets/img/tourneo_courier/1214481511070.jpg">

            </div>
            <header class="bti-title">Ford SYNC. Tehnologia avansată hands-free</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Ford SYNC &icirc;ţi permite să controlezi muzica și să inițiezi sau să preiei apeluri de pe telefonul mobil, utiliz&acirc;nd comenzi vocale directe și simple. De exemplu, dacă &bdquo;acasă&rdquo; este &icirc;nregistrat ca număr de contact &icirc;n agenda telefonului mobil, este de ajuns să rosteşti: &bdquo;Apel acasă&rdquo;, iar sistemul va apela automat numărul respectiv. Poţi utiliza comenzile vocale pentru a reda melodii de pe o unitate USB sau MP3/iPod<sup>&reg;</sup> ori atunci c&acirc;nd redai &icirc;n flux melodii de pe un telefon compatibil Bluetooth<sup>&reg;</sup>. Sistemul poate chiar citi cu voce tare mesajele text pe care le primeşti.  <br>
                        <br>
                        <span style="font-size: x-small;"><em>*Marca și siglele Bluetooth<sup>&reg;</sup> sunt oferite și deținute de Bluetooth SIG Inc și orice utilizare a acestor mărci de către Ford Motor Company Limited și de către companiile sale partenere se face &icirc;n baza unei licențe. Alte mărci &icirc;nregistrate şi denumiri comerciale aparţin proprietarilor lor.</em></span></div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Tempomat cu dispozitiv ajustabil de limitare a vitezei" title="Tempomat cu dispozitiv ajustabil de limitare a vitezei" src="/assets/img/tourneo_courier/1214481509231.jpg">

            </div>
            <header class="bti-title">Drumuri mai puţin obositoare, călătorii mai economice</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Tempomatul &icirc;ţi permite să stabileşti o viteză pe care ulterior o menţine p&acirc;nă c&acirc;nd fr&acirc;nezi sau accelerezi. Cu ajutorul comenzilor de pe volan poţi ajusta, de asemenea, viteza &icirc;n timp ce conduci. &Icirc;n plus, dispozitivul ajustabil de limitare a vitezei te ajută să menţii vehiculul &icirc;n limita de viteză prestabilită pe care o selectezi. Pe l&acirc;ngă faptul că te va ajuta să economiseşti combustibil, sistemul poate, de asemenea, minimiza posibilitatea să depăşeşti limita de viteză. Pe l&acirc;ngă beneficiile practice, ambele tehnologii pot face ca lungile deplasări pe autostradă să fie mai relaxante. companiile sale partenere se face &icirc;n baza unei licențe. Alte mărci &icirc;nregistrate şi denumiri comerciale aparţin proprietarilor lor.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Camer&#259; video pentru vizualizare spate" title="Camer&#259; video pentru vizualizare spate" src="/assets/img/tourneo_courier/1214481509900.jpg">

            </div>
            <header class="bti-title">Marşarier mai simplu</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>St&acirc;lpi opritori, pubele, ziduri joase&hellip; Camera video pentru vizualizare spate &icirc;ţi arată tot ce se află &icirc;n spatele autovehiculului pe un ecran integrat &icirc;n consola centrală şi se activează automat atunci c&acirc;nd selectezi marşarierul. Sistemul afişează, de asemenea, ghidaje virtuale pentru a te ajuta să parchezi chiar şi &icirc;n spaţii &icirc;nguste.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Senzori pentru parcarea cu spatele" title="Senzori pentru parcarea cu spatele" src="/assets/img/tourneo_courier/1214481510987.jpg">

            </div>
            <header class="bti-title">Senzori care facilitează procedura de parcare</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Senzorii de distanță la parcare te ajută să determini distanța dintre vehiculul tău și orice fel de obstacol din spate. Atunci c&acirc;nd detectează un obiect, senzorii emit o avertizare sonoră care se intensifică cu c&acirc;t te apropri mai mult de un obstacol.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Naviga&#355;ie prin satelit" title="Naviga&#355;ie prin satelit" src="/assets/img/tourneo_courier/1214481510821.jpg">

            </div>
            <header class="bti-title">Sistemul integrat de navigaţie se asigură că ajungi la destinaţie</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Un sistem de navigaţie prin satelit complet integrat, cu ecran color de 5&rdquo; şi sistem audio DAB pentru comenzi vocale clare. Sistemul răspunde la viteză &icirc;n timp real şi la cele mai recente condiţii de trafic, oferind cele mai precise informaţii despre ora estimată a sosirii şi despre drum.</div>
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
            <h1> Confort</h1>
        </header>
        <div class="bto-body">
            <div class="abstract">
                <div>Uneori, detaliile fac diferența. Iar cu o serie de caracteristici ingenioase, tehnologii avansate și depozitare inteligentă, tu &icirc;mpreună cu pasagerii vă veți bucura de aceste diferențe de fiecare dată c&acirc;nd vă deplasați &icirc;n vehiculul tău Tourneo Courier.</div>
            </div>
            <div class="body">
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Depozitare ingenioas&#259;" title="Depozitare ingenioas&#259;" src="/assets/img/tourneo_courier/1214481511734.jpg">

        </div>
        <header class="bti-title">Un loc pentru toate obiectele</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Cabina este concepută &icirc;n așa fel &icirc;nc&acirc;t să poată fi folosit fiecare milimetru pătrat de spațiu, inclusiv cel de deasupra celor două scaune din față, unde vei găsi un raft de depozitare mare, dar discret.</div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Locuri / scaune" title="Locuri / scaune" src="/assets/img/tourneo_courier/1214481511399.jpg">

        </div>
        <header class="bti-title">Confortabil, spaţios şi flexibil</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Scaunele din Tourneo Courier sunt relaxante și confortabile, fiind practice și durabile &icirc;n același timp. Designul lor le face, de asemenea, extrem de flexibile. De exemplu, scaunele din spate, se pot diviza 60/40 și se pot &bdquo;plia și răsturna&rdquo; &icirc;nainte &icirc;n zona picioarelor, cre&acirc;nd spațiu suplimentar pentru bagaje.</div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Cea mai bun&#259; organizare a locurilor din clasa sa" title="Cea mai bun&#259; organizare a locurilor din clasa sa" src="/assets/img/tourneo_courier/1214481509482.jpg">

        </div>
        <header class="bti-title">Înconjurat de spaţiu</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Atunci c&acirc;nd te faci comod &icirc;n interiorul cabinei, vei avea imediat un sentiment de spațiu interior generos: loc pentru tine, pasagerii tăi și bagajele tuturor.</div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Capac portbagaj reglabil" title="Capac portbagaj reglabil" src="/assets/img/tourneo_courier/1214481510152.jpg">

        </div>
        <header class="bti-title">Bagajele tale sunt uşor de organizat</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Este ușor să profiți la maximum de spațiul din portbagaj, cu ajutorul capacului de portbagaj reglabil. &Icirc;n poziția superioară, capacul oferă un spațiu pentru bagaje mai are dec&acirc;t multe alte mașini. &Icirc;n poziția de mijloc, acesta poate separa obiecte mari sau grele de cele mici. De asemenea, poți sprijini tava pe scaunele din spate pentru a lăsa spațiu deschis pentru orice ai nevoie să transporți.</div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Docul MyFord" title="Docul MyFord" src="/assets/img/tourneo_courier/1214481511482.jpg">

        </div>
        <header class="bti-title">Stocare inteligentă pentru toate dispozitivele tale</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Docul MyFord este conceput pentru a ține navigatorul, smartphone-ul sau playerul MP3 și este prevăzut şi cu un port USB.</div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Consol&#259; central&#259; supradimensionat&#259;" title="Consol&#259; central&#259; supradimensionat&#259;" src="/assets/img/tourneo_courier/1214481508798.jpg">

        </div>
        <header class="bti-title">Spaţiu de depozitare mai mare, la îndemână</header>
        <div class="bti-body">
            <div class="abstract">
                <div>O consolă centrală mare &icirc;ţi permite să păstrezi toate obiectele de călătorie &bdquo;esențiale&rdquo;, la &icirc;ndem&acirc;nă și ferite de vedere. Există spațiu pentru orice obiect de mărime A4 (de exemplu dosare, tablete și cărți) iar de fiecare parte a consolei există suporturi pentru băuturi.</div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Cel mai mare confort pentru &#537;ofer din clasa sa" title="Cel mai mare confort pentru &#537;ofer din clasa sa" src="/assets/img/tourneo_courier/1214481509649.jpg">

        </div>
        <header class="bti-title">Fă-te comod</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Excursii scurte, călătorii lungi: te vei simți &icirc;ntotdeauna confortabil la volan. Scaunul șoferului este reglabil &icirc;n 6 moduri, include &icirc;ntindere rotativă și reglare pe &icirc;nălțime, și poate include, de asemenea, un suport lombar reglabil, plus o cotieră interioară. &Icirc;n plus, puteți alege perne &icirc;ncălzite pentru tine și pasagerii tăi, care &icirc;și pot ajusta scaunul &icirc;n patru moduri diferite.</div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Volan reglabil pe ad&acirc;ncime / &icirc;nclinare" title="Volan reglabil pe ad&acirc;ncime / &icirc;nclinare" src="/assets/img/tourneo_courier/1214481508714.jpg">

        </div>
        <header class="bti-title">Volan poziţionat perfect</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Poziția de condus ideală este ușor de găsit cu volanul reglabil at&acirc;t pe &icirc;nălțime c&acirc;t și pe ad&acirc;ncime.</div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Sistem de sunet" title="Sistem de sunet" src="/assets/img/tourneo_courier/1214481508546.jpg">

        </div>
        <header class="bti-title">O coloană sonoră minunată</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Conceput pentru a căuta cel mai puternic semnal radio și a oferi cea mai buna calitate a sunetului &icirc;n mișcare, sistemul audio avansat poate include difuzoare &icirc;n partea din față și din spate a mașinii, precum și &icirc;n st&acirc;lpii de pe fiecare parte. Indiferent ce muzică preferi, și dacă o redai de pe un stick USB sau sistemul de divertisment al mașinii, Tourneo Courier este un loc minunat pentru a o asculta.</div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="&#350;terg&#259;toare automate pentru geamuri" title="&#350;terg&#259;toare automate pentru geamuri" src="/assets/img/tourneo_courier/1214481510488.jpg">

        </div>
        <header class="bti-title">Ştergătoare care se reglează automat, în funcţie de ploaie</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Ştergătoarele de parbriz cu senzor de ploaie se activează &icirc;n secunda &icirc;n care detectează stropi de apă pe parbrizul autovehiculului, apoi &icirc;şi reglează viteza pentru a face faţă oricăror condiţii meteo. Poţi alege unul dintre cele şase niveluri de sensibilitate, care determină c&acirc;t de multă umiditate trebuie să se acumuleze &icirc;nainte ca ştergătoarele să intre &icirc;n acţiune pentru a o &icirc;ndepărta. Ştergătoarele cu senzor de ploaie sunt disponibile ca dotare opţională cu farurile automate (a se vedea mai jos).</div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Faruri automate" title="Faruri automate" src="/assets/img/tourneo_courier/1214481508294.jpg">

        </div>
        <header class="bti-title">Faruri care se aprind automat atunci când este necesar</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Tourneo Courier este prevăzut cu senzori care detectează scăderea luminii c&acirc;nd &icirc;ncepe să se &icirc;ntunece sau la schimbarea bruscă a condiţiilor de iluminare. De exemplu, c&acirc;nd intri &icirc;ntr-un tunel. Atunci se activează farurile cu acţionare automată, care pot simplifica şi mări nivelul de siguranţă al condusului. Farurile automate sunt disponibile ca dotare opţională cu ştergătoarele cu senzor de ploaie.</div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Sistemul de alimentare Ford Easy-Fuel" title="Sistemul de alimentare Ford Easy-Fuel" src="/assets/img/tourneo_courier/1214481509315.jpg">

        </div>
        <header class="bti-title">Ford Easy-Fuel, pentru alimentări fără probleme</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Acesta face să fie practic imposibilă alimentarea greşită a autoutilitarei, deoarece duza pompei pur şi simplu nu se va potrivi. Şi pentru că Easy-Fuel este un sistem fără buşon, nu vei mai avea de-a face niciodată cu un buşon murdar.</div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Parbriz &icirc;nc&#259;lzit Quickclear" title="Parbriz &icirc;nc&#259;lzit Quickclear" src="/assets/img/tourneo_courier/1214481509732.jpg">

        </div>
        <header class="bti-title">Curăţaţi parbrizul rapid cu Quickclear</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Această dotare inteligentă este creată pentru a-ţi permite să porneşti rapid &icirc;n dimineţile geroase. Trebuie doar să apeşi pe un buton, iar sistemul poate să dezgheţe parbrizul &icirc;n c&acirc;teva secunde, chiar și la temperaturi negative.</div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Control electronic automat al temperaturii" title="Control electronic automat al temperaturii" src="/assets/img/tourneo_courier/1214481509065.jpg">

        </div>
        <header class="bti-title">Setează temperatura dorită</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Cu ajutorul dotării opţionale &ndash; Sistemul de climatizare automată (EATC), selectează pur şi simplu temperatura interioară dorită, iar sistemul o va menţine cu ajutorul sistemului avansat de climatizare.</div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Haion spate" title="Haion spate" src="/assets/img/tourneo_courier/1214481508981.jpg">

        </div>
        <header class="bti-title">Haion acţionat prin apăsare de buton</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Trebuie doar să apeşi un buton sub m&acirc;nerul ușii și haionul se ridica fără efort pentru a-ţi oferi acces la compartimentul de bagaje și zona pasagerilor din spate.</div>
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
<script id="TagIT.load" src='/cs/ContentServer?pagename=RORO4_ENGINE/script/packager&c=Page&cid=1205071621603&location=load&isMobile=false&require=main' defer></script>
</div>