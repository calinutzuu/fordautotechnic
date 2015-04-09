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
            <li><a href="/Autoturisme/Noul-Ford-Tourneo-Courier/ExperientaLaVolan#primaryTabs">Experien&#355;a la volan</a>
            </li>
            <li><a href="/Autoturisme/Noul-Ford-Tourneo-Courier/Performanta#primaryTabs">Performan&#355;&#259; &#351;i eficien&#355;&#259;</a>
            </li>
            <li class="selected"><a href="/Autoturisme/Noul-Ford-Tourneo-Courier/Siguranta#primaryTabs">Siguran&#355;&#259; &#351;i securitate</a>
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
            <h1>Reconfortant din toate punctele de vedere</h1>
        </header>
        <div class="bto-body">
            <div class="abstract">
                <div>Facilitează pornirile &icirc;n rampă, apelează serviciile de urgență &icirc;n locul tău, oferă o aderență mai bună, te anunță &icirc;n cazul &icirc;n care o anvelopă pierde din presiune: tehnologiile Tourneo Courier pot face toate acestea pentru tine și mai mult dec&acirc;t at&acirc;t. Mașina este de asemenea echipată cu o serie de sisteme de siguranță și securitate avansate, toate proiectate pentru a ajuta at&acirc;t la protejarea ta, c&acirc;t și a vehiculului.</div>
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
                <h1>Tehnologii de asistare a şoferului</h1>
            </header>
            <div class="bto-body">
                <div class="abstract">
                    <div>Fiecare tehnologie avansată are un scop anume, &icirc;nsă toate contribuie la liniștea ta.</div>
                </div>
                <div class="body">
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Ford SYNC cu Asisten&#355;&#259; de Urgen&#355;&#259;" title="Ford SYNC cu Asisten&#355;&#259; de Urgen&#355;&#259;" src="/assets/img/tourneo_courier/1214481511650.jpg">

            </div>
            <header class="bti-title">Ford SYNC cu Asistenţă de urgenţă poate suna după ajutor chiar dacă dumneavoastră nu puteţi</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Un aspect important al tehnologiei Ford SYNC care vă poate salva viaţa este Asistenţa de urgenţă. &Icirc;n cazul puţin probabil al unui accident, c&acirc;nd se activează airbagul sau se dezactivează pompa de carburant, tehnologia poate efectua automat un apel direct către Serviciile de urgenţă &icirc;n locul dumneavoastră. Dacă este cazul, puteți alege să &icirc;ntrerupeți apelul sau să discutați personal, dacă este necesar. Un aspect extrem de important este faptul că sistemul va furniza informaţii vitale, precum coordonatele dumneavoastră GPS, chiar şi atunci c&acirc;nd v-aţi pierdut cunoştinţa.*   <br>
                        <br>
                        <span style="font-size: x-small;"><em>*Asistenţa de urgenţă Ford funcționează &icirc;n peste 30 de ţări din Europa. Această caracteristică funcţionează atunci c&acirc;nd este conectată cu un telefon mobil compatibil pe care &icirc;l aveţi la dumneavoastră, &icirc;n momentul &icirc;n care un airbag este declanşat (cu excepţia airbagurilor pentru genunchi) sau atunci c&acirc;nd un senzor care &icirc;nregistrează o coliziune &icirc;ntrerupe pompa de combustibil. Funcţia de mesagerie şi Asistenţa de urgenţă nu sunt acceptate &icirc;n toate limbile europene.</em></span></div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Sistem de asisten&#355;&#259; la plecarea din ramp&#259;" title="Sistem de asisten&#355;&#259; la plecarea din ramp&#259;" src="/assets/img/tourneo_courier/1214481510320.jpg">

            </div>
            <header class="bti-title">Un plus de control în cazul pornirilor în rampă</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Sistemul de asistenţă la pornirea din rampă &icirc;mpiedică temporar alunecarea &icirc;n spate sau &icirc;n față atunci c&acirc;nd porneşti din pantă. Sistemul funcţionează prin menţinerea presiunii la nivelul sistemului de f&acirc;nare pentru un interval suplimentar de 2,5 secunde, asigur&acirc;ndu-ţi mai mult timp şi control atunci c&acirc;nd muţi piciorul de pe pedala de fr&acirc;nă pe cea de acceleraţie. Acest sistem este, de asemenea, util c&acirc;nd opreşti şi porneşti autovehiculul pe suprafeţe alunecoase.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Sistem de control al trac&#539;iunii" title="Sistem de control al trac&#539;iunii" src="/assets/img/tourneo_courier/1214481510571.jpg">

            </div>
            <header class="bti-title">Aderenţă maximă cu efort minim</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Un sistem avansat de control al tracţiunii (TCS) elimină alunecarea &icirc;n exces a roţilor şi &icirc;ţi asigură cea mai bună aderenţă, performanţă şi stabilitate, atunci c&acirc;nd ai mai mare nevoie. Sistemul monitorizează &icirc;ncontinuu şi ajustează puterea livrată roţilor individuale ale vehiculului, asigur&acirc;nd contact şi aderenţă maxime atunci c&acirc;nd accelerezi.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="ESC" title="ESC" src="/assets/img/tourneo_courier/1214481509566.jpg">

            </div>
            <header class="bti-title">Controlul electronic al stabilităţii te ajută să menţii controlul asupra autovehiculului, indiferent de condiţii</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Controlul electronic al stabilităţii (ESC) monitorizează &icirc;n mod constant deplasarea utilitarei, detectează orice abateri de la traseul ales (dacă vehiculul &icirc;ncepe să patineze, de exemplu) şi corectează automat poziţia de drum. Sistemul este creat pentru a te ajuta să menţii controlul asupra autoutilitarei şi, &icirc;n plus, te poate ajuta să reduci distanţa de fr&acirc;nare &icirc;n caz de urgenţă.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Sistem de monitorizare a presiunii din anvelope" title="Sistem de monitorizare a presiunii din anvelope" src="/assets/img/tourneo_courier/1214481511316.jpg">

            </div>
            <header class="bti-title">Te avertizează dacă pneurile pierd presiune</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>&Icirc;ntotdeauna este important să menţii presiunea corectă &icirc;n pneuri, pentru a te ajuta să economiseşti combustibil, să protejezi pneurile şi să fii &icirc;n siguranţă. De aceea, senzorii monitorizează constant fiecare roată şi te alertează dacă apare o problemă, astfel &icirc;nc&acirc;t să poţi trage pe dreapta, să verifici, să umflii pneul sau să schimbi roata.</div>
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

                    <img alt="Asisten&#355;&#259; la stabilizarea remorcii (TSA)" title="Asisten&#355;&#259; la stabilizarea remorcii (TSA)" src="/assets/img/tourneo_courier/1214481509148.jpg">

            </div>
            <header class="bti-title">Menţinerea în siguranţă pe banda de rulare a remorcii</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Funcţia de Asistenţă la stabilizarea remorcii (TSA) detectează &bdquo;şerpuirea&rdquo; sau balansarea remorcii şi reduce viteza mașinii tale p&acirc;nă c&acirc;nd problema dispare, făc&acirc;nd ca remorcarea să fie mai controlată. Sistemul &icirc;ncetineşte vehiculul, reduc&acirc;nd cuplul motorului şi cresc&acirc;nd treptat presiunea fr&acirc;nelor pe toate roţile.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Sistemul de asisten&#355;&#259; la fr&acirc;narea de urgen&#355;&#259;" title="Sistemul de asisten&#355;&#259; la fr&acirc;narea de urgen&#355;&#259;" src="/assets/img/tourneo_courier/1214481509399.jpg">

            </div>
            <header class="bti-title">Putere suplimentară pentru frânare de urgenţă</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Sistemul de asistenţă la fr&acirc;narea de urgență (EBA) ajută maşina să atingă eficienţa de fr&acirc;nare maximă &icirc;n cazul unei situaţii de urgenţă. Sistemul detectează presiunea aplicată de şofer pe pedala de fr&acirc;nă şi crește automat această presiune, dacă este cazul. Pentru a reduce şi mai mult distanţa de oprire, noul sistem de intensificare hidraulică spate oferă o presiune de fr&acirc;nare suplimentară pe fr&acirc;nele din spate &icirc;n timpul opririi de urgenţă, atunci c&acirc;nd sistemul ABS este activat.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Reducerea efectului de r&#259;sturnare (ROM)" title="Reducerea efectului de r&#259;sturnare (ROM)" src="/assets/img/tourneo_courier/1214481510068.jpg">

            </div>
            <header class="bti-title">Protecţie continuă împotriva răsturnării</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Reducerea efectului de răsturnare (ROM) monitorizează şi identifică condiţiile de condus periculoase care ar putea duce la răsturnarea mașinii tale. &Icirc;n acel moment, sistemul declanşează ESP pentru a interveni, pentru a controla viteza şi pentru a redob&acirc;ndi stabilitatea.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Sistem &icirc;mbun&#259;t&#259;&#355;it de airbaguri" title="Sistem &icirc;mbun&#259;t&#259;&#355;it de airbaguri" src="/assets/img/tourneo_courier/1214481511153.jpg">

            </div>
            <header class="bti-title">Airbaguri pentru şofer, pasager, laterale şi tip cortină</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Tourneo Courier este disponibil cu airbaguri tip cortină, pentru şofer, pasager şi laterale. De asemenea, senzori avansați sunt poziționați &icirc;n puncte cheie &icirc;n vehicul, pentru a asigura o reacție rapidă și controlată.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Sistem de reamintire pentru utilizarea centurii de siguran&#355;&#259;" title="Sistem de reamintire pentru utilizarea centurii de siguran&#355;&#259;" src="/assets/img/tourneo_courier/1214481508378.jpg">

            </div>
            <header class="bti-title">Porţi centura de siguranță?</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Centuri de siguranță spate &icirc;n trei puncte, cu retractoare, sunt montate ca standard, iar pentru a asigura că toată lumea este &icirc;n siguranță, mașina emite un memento sonor p&acirc;nă la fixarea centurii.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Puncte ISOFIX" title="Puncte ISOFIX" src="/assets/img/tourneo_courier/1214481509984.jpg">

            </div>
            <header class="bti-title">Ajutor pentru menţinerea copiilor în siguranţă</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Dacă există copii la bord, poţi dispune montarea de puncte ISOFIX pentru fixarea scaunului pentru copii pentru cele două scaune dinspre exterior de pe r&acirc;ndul al doilea.</div>
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
                <h1>Securitate</h1>
            </header>
            <div class="bto-body">
                <div class="abstract">
                    <div>Mașina ta, bagajele și obiectele de valoare: există o serie de tehnologii de securitate avansate pentru a le ține pe toate &icirc;n siguranță.</div>
                </div>
                <div class="body">
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="&Icirc;nchidere centralizat&#259;" title="&Icirc;nchidere centralizat&#259;" src="/assets/img/tourneo_courier/1214481508630.jpg">

            </div>
            <header class="bti-title">Poţi alege ce uşi să blochezi şi să deblochezi</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>&Icirc;nchiderea centralizată, cu telecomandă, a uşilor este dotare standard, iar acest sistem de &icirc;nchidere este mai sigur ca niciodată. Şi aceasta deoarece poţi alege să deschizi o singură uşă, &icirc;n timp ce celelalte răm&acirc;n blocate &icirc;n mod sigur, p&acirc;nă c&acirc;nd activezi un comutator de pe portiera şoferului. Acelaşi comutator controlează blocarea şi deblocarea tuturor uşilor vehiculului.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="&Icirc;ncuietori de u&#351;i cu arm&#259;tur&#259; &icirc;mpotriva efrac&#355;iei" title="&Icirc;ncuietori de u&#351;i cu arm&#259;tur&#259; &icirc;mpotriva efrac&#355;iei" src="/assets/img/tourneo_courier/1214481510236.jpg">

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

                    <img alt="Op&#539;iuni de alarm&#259;" title="Op&#539;iuni de alarm&#259;" src="/assets/img/tourneo_courier/1214481510404.jpg">

            </div>
            <header class="bti-title">Două opţiuni de alarmă de nivel înalt</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>O alarmă de perimetru opţională ce protejează vehiculul, declanş&acirc;ndu-se dacă uşile sau capota sunt deschise cu forţa. Pentru protecţie (şi descurajare a hoţilor) şi mai mare, alege un sistem de alarmă Thatcham de categoria 1. Acest sistem complex se activează automat &icirc;n momentul &icirc;n care se &icirc;nchide vehiculul şi emite un semnal sonor puternic dacă este declanşat de o intrare forţată, dacă maşina este ridicată sau dacă senzorii de mişcare detectează o mişcare &icirc;năuntru.</div>
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
<script id="TagIT.load" src='/cs/ContentServer?pagename=RORO4_ENGINE/script/packager&c=Page&cid=1205071622810&location=load&isMobile=false&require=main' defer></script>
</div>