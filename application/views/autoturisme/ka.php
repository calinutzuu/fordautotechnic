<script type="text/javascript">
    // mobile sniffer
    ForceRedirectUserAgents = 'android,iphone,blackberry';
    ForceRedirectUserAgentsBypass = 'Win64,Win32';
    ForceRedirectMinWidth = '480';
    MobileHomePageRedirectURL = 'http:\/\/m.ford.ro';
    MobileRedirectURL = MobileHomePageRedirectURL + '_Old/Autoturisme/Ka';
</script>
<div id="xAxis-detailed">
    <nav class="breadCrumb" role="navigation">
        <ul itemprop="breadcrumb">
            <li class="home"><a href="/" class="om_bc_li" title="Pagina principal&#259;">Pagina principal&#259;</a><span></span></li><li><a href="/Autoturisme" class="om_bc_li">
            Autoturisme
        </a><span></span></li><li>Ka</li></ul>
    </nav>
    <script>
        var vehicleimagepackpresid = '1205035171688';
        var vehicleimagepackyear = 'YYP';
        var googleAdServerNameplateId = '00G';
        var googleAdServerNameplateName = 'Ka';
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
        var bootstrapVehicleData = {"vehicles":[{"strIntroToFord": " ","brand": "Ford","vehicleType": "PV","catalogId": "9322","nameplate": "Ka","labelAvailableFrom": "De la","formattedCurrency": "11.050 RON","nameplateText": "Original, prietenos \u015Fi fantastic de condus, Ka stabile\u015Fte standardele pentru ma\u015Finile mici.","imagePack": true,"hideVehicleImage": false,"images": ["/assets/img/ka/KA_GreyMatter_Front_00001.jpg"],"backgroundImagePath": ["/assets/img/ka/KA_GreyMatter_Front_00001.jpg"],"disclaimerTextColor": [null,null,null],"current": true,"cid": "1204961328389","cta": [{"linkTitle": "MODELE Ka","linkURL": "/Autoturisme/Ka/Modele","linkType": "primary","linkTarget": "","omid": "va"},{"linkTitle": "DESCARC\u0102 BRO\u015EUR\u0102 ","linkURL": "\/SBE\/Brosura\/DescarcaBrosura","linkType": "tertiary","linkTarget": "_blank","omid": "tr"},{"linkTitle": "\u00CENSCRIE-TE LA TEST DRIVE ","linkURL": "\/SBE\/TestDrive?shopcode=00G","linkType": "tertiary","linkTarget": "_blank","omid": "tr"},{"linkTitle": "VREAU SĂ FIU INFORMAT(Ă) ","linkURL": "/SBE/VreauSaFiuInformata","linkType": "tertiary","linkTarget": "","omid": "tr"}],"social": {"facebook": "https://facebook.com","facebookPage": "fordromania"},"disclaimer": "Modelul prezentat este un Ka Titanium. Imagine cu titlul de prezentare.","seriesCode": "DD8","uscCode": "00G","supportSelector": "true","supportSeries": "true","presId": "1205035171688","promos": [],"idf": {"options":[{"dataOverlay": {"mediaType":"Flash","height":"439","width":"780"},"iconURL":"/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobheader=image%2Fjpg&blobwhere=1214480084170&blobkey=id","link":"/cs/ContentServer?cid=1204985139140&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Flash_C&amp;site=RORO4_ENGINE","videoSrc":[{"src1":""},{"src2":""}],"youtubeClose":"","tooltipText":"Ford Ka"}]}}]} || {};
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
        <!--  <a class="js-ajax pointer right om_pv_xa_ri" href="#" role="toolbar"><span></span></a> -->
          <div itemscope itemtype="http://schema.org/ImageObject">
              <ul class="nameplate x-axis" id="vvmRoot">
                  <li class="default-nameplate-vehicle" style="background-image:url()">
                      <div class="layered-nameplate-image">
                          <div class="image-holder">
                          </div>
                      </div>
                      <aside class="nameplate-disclaimer ">
                          Modelul prezentat este un Ka Titanium. Imagine cu titlul de prezentare.
                      </aside>
                  </li>
              </ul>
              <div itemscope itemtype="http://schema.org/Product" id="nameplateDetails" class="nameplate-vehicle">
                  <!--the text description-->
                <div class="name-plate-text">
                    <p class="intro"> </p>
                    <h1 class="bigHeading">
                        <span itemprop="model" itemscope itemtype="http://schema.org/Organization" class="mark">Ford</span>
                        <span itemprop="member" class="nameplate boldTxt">Ka</span>
                    </h1>
                    <!--The price-->
                    <!--The blurb-->
                    <p class="blurb">
                        Original, prietenos şi fantastic de condus, Ka stabileşte standardele pentru maşinile mici.
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
            <li class="selected"><a href="/Autoturisme/Ka/Prezentare#primaryTabs" data-ajaxlink="/Autoturisme/Ka/Prezentare">Prezentare general&#259;</a>
            </li>
            <li><a href="/Autoturisme/Ka/Designinterior#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/Ka/Designinterior">Design interior</a>
            </li>
            <li><a href="/Autoturisme/Ka/Designexterior#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/Ka/Designexterior">Design exterior</a>
            </li>
            <li><a href="/Autoturisme/Ka/PreturisiPromotii#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/Ka/PreturisiPromotii">PRE&#354;URI &#350;I PROMO&#354;II</a>
            </li>
            <li><a href="/Autoturisme/Ka/MaterialeDescarcabile#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/Ka/MaterialeDescarcabile">Materiale Desc&#259;rcabile</a>
            </li>
            <li><a href="#" id="moreTab">Mai multe...</a><span></span></li>
        </ul>
    </nav>
</div>
<nav class="sub-nav ">
    <ul>
        <li><a href="/Autoturisme/Ka/Culorisitapiterie"
                >Culori &#351;i tapi&#355;erie</a></li>
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
            <h1>Îndrăznetul FORD <b>KA</b></h1>
        </header>
        <div class="bto-body">
            <div class="abstract">
                <p><strong>Ford Ka Trend 1,2 l, 69 CP, la 6.650 Euro* (TVA inclus)!</strong></p> <p>Original, prietenos şi fantastic de condus, Ka stabileşte standardele pentru maşinile mici. Liniile continue, proporţiile robuste şi noile culori ale caroseriei completează perfect designul special din interior.</p> <p>&nbsp;</p> <p>De asemenea, la Ford Ka există opţiunea celei mai economice motorizări, cu nivel scăzut al emisiilor.</p> <p>&nbsp;</p> <p><span style="FONT-FAMILY: 'Arial','sans-serif'; COLOR: #333333; FONT-SIZE: 9pt; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA"><em>Dat fiind faptul că aceasta este o prezentare generală a Ford Ka, unele dintre dotările menţionate pot fi opţiuni standard pentru &icirc;ntreaga gamă, &icirc;n timp ce altele pot fi dotări opţionale sau pot fi disponibile numai pentru anumite modele. Te rugăm să consulţi ghidul de produs sau sa contactezi cel mai apropiat <a HREF="_Old/Dealeri" CONTENTEDITABLE="false" >dealer</a> autorizat Ford.</em></span></p> <div><span style="font-size: x-small;">*Preţul exprimat include TVA și este valabil pentru Ford Ka, Trend, 3 uşi, 1.2l benzină, 69 CP (Euro VI, consum mixt 4.9 l/100 km, emisii CO<sub>2</sub> (g/km): 115),  şi cuprinde contravaloarea tichetului Remat. Ofertă supusă unor termene și condiţii, valabilă &icirc;n limita stocului disponibil, la dealerii Ford participanţi la promoţie.</span></div>
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
            <li><a href='#tab1' class='omt_'>Design</a></li>
            <li><a href='#tab2' class='omt_'>Tehnologii</a></li>
            <li><a href='#tab3' class='omt_'>Culori</a></li>
        </ul>
    </nav>
</div>
<!-- BEGIN [MidPageTabs] -->
<div class="innertab-wrapper">
<!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Design</a></h2> -->
<div id='tab1' class="tab-content" style="display:none;">
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
               <img alt="Ford Ka - vedere din spate" title="Ford Ka - vedere din spate" src="/assets/img/ka/1214375790835.jpg">

            </div>
            <header class="bti-title">Design </header>
            <div class="bti-body">
                <div class="abstract">
                    Cu un aspect complet nou, Ka &icirc;şi menţine stilul excentric şi individual.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
               <img alt="Noul Ford Ka - detaliu jant&#259; aliaj" title="Noul Ford Ka - detaliu jant&#259; aliaj" src="/assets/img/ka/1214375802810.jpg">
                           </div>
            <header class="bti-title">O impresie de neuitat</header>
            <div class="bti-body">
                <div class="abstract">
                    Abordarea prin Designul kinetic ne-a permis crearea unui vehicul &icirc;ndrăzneţ şi modern cu un stil dinamic şi expresiv - şi cu originalitate din belşug. Farurile mari combinate cu noua şi proeminenta mască a radiatorului, care pare să &icirc;ţi z&acirc;mbească, marginile reliefate ale roţilor, laturile puternice şi liniile continue ajută la crearea unui aspect original al modelului Ka.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
            <img alt="Noul Ford Ka &icirc;n culoarea Jump" title="Noul Ford Ka &icirc;n culoarea Jump" src="/assets/img/ka/1214484914467.jpg">
            </div>
            <header class="bti-title">Colorează-ţi lumea!</header>
            <div class="bti-body">
                <div class="abstract">
                    Modelul Ka are o nouă gamă de culori, create pe nuanţe puternice, pastelate, disponibile şi &icirc;n finisaje metalizate. Poţi alege, de asemenea, una dintre cele două nuanţe perlate: Piste, de un alb strălucitor, şi voluptosul Blush, care măresc exponenţial atractivitatea modelului Ka.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
                <img alt="Noul Ford Ka - design interior" title="Noul Ford Ka - design interior" src="/assets/img/ka/1214375818889.jpg">

            </div>
            <header class="bti-title">Interior</header>
            <div class="bti-body">
                <div class="abstract">
                    Interiorul modelului Ka are un design stilat, plin de dinamism, cu contraste &icirc;ndrăzneţe, culori expresive şi detalii pline de imaginaţie. Absolut totul, de la tapiţerii şi p&acirc;nă la comenzi exprimă o măiestrie şi o atenţie pentru detaliu rar &icirc;nt&acirc;lnite la maşinile din această clasă. Rezultatul - un mediu plăcut şi stilat, &icirc;n care te vei simţi bine de fiecare dată.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
                <img alt="Noul Ford Ka - spa&#355;ii de depozitare sub scaun" title="Noul Ford Ka - spa&#355;ii de depozitare sub scaun" src="/assets/img/ka/1214375791060.jpg">
            </div>
            <header class="bti-title">Te-ai aşezat comod?</header>
            <div class="bti-body">
                <div class="abstract">
                    Vei descoperi un confort nemaivăzut la o maşină mică. Printre altele, vei beneficia de scaun pentru şofer reglabil electric pe patru direcţii, spaţiu de depozitare sub scaunul pasagerului, tetiere pentru locurile din spate şi buzunare pentru hartă (optional, pe Titanium).
                </div>
            </div>
        </article>
    </section>
</div>
<!--</div>-->
<!--<div id='tab2' class="mp-tab-wrapper">
<h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">Tehnologii</a></h2> -->
<div id='tab2' class="tab-content" style="display:none;">
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
            <img alt="Noul Ford Ka - design interior" title="Noul Ford Ka - design interior" src="/assets/img/ka/1214375818889.jpg">
                           </div>
            <header class="bti-title">Tehnologie</header>
            <div class="bti-body">
                <div class="abstract">
                    Tehnologia inclusă &icirc;n noul Ka este la fel de progresistă ca şi designul exterior.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
               <img alt="Panou de control - noul Ford Ka " title="Panou de control - noul Ford Ka " src="/assets/img/ka/1214375775873.jpg">

            </div>
            <header class="bti-title">O audiţie perfectă</header>
            <div class="bti-body">
                <div class="abstract">
                    Noul Ka este prevăzut cu un sistem audio cu totul nou, cu şase difuzoare şi un CD player care poate reda şi fişiere MP3, aşa că poţi inscripţiona mai multe albume pe un singur disc. De asemenea, ai la dispoziţie o mufă mini jack pentru a &icirc;ţi conecta MP3 player-ul. Pachetul opţional Avansat pentru Muzică include un amplificator separat, difuzoare de calitate superioară şi un subwoofer de 100 W pentru sunete joase vibrante (disponibil pentru Titanium).
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
               <img alt="Compatibilitate USB" title="Compatibilitate USB" src="/assets/img/ka/1214375661504.jpg">

            </div>
            <header class="bti-title">Conectează-te cu prietenii şi formaţiile favorite</header>
            <div class="bti-body">
                <div class="abstract">
                    Sistemul Bluetooth<sup>&reg;</sup> cu opţiunea m&acirc;ini-libere&nbsp; şi conector USB, &icirc;ţi permite să iniţiezi, să primeşti sau să respingi apeluri folosindu-ţi vocea sau utiliz&acirc;nd comenzile amplasate pe volan. De asemenea, poţi efectua apeluri tip conferinţă cu două numere separate (dacă telefonul tău mobil suportă această funcţie). &Icirc;n plus, &icirc;ţi permite să asculţi muzică &icirc;ntr-o varietate de formate, provenind de la un card de memorie, iPod sau alt MP3 player prin intermediul conexiunii USB (dotare opţională).
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
             <img alt="Noul Ka &icirc;n culoarea Blush" title="Noul Ka &icirc;n culoarea Blush" src="/assets/img/ka/1214375671660.jpg">
            </div>
            <header class="bti-title">Stabilitate la drum</header>
            <div class="bti-body">
                <div class="abstract">
                    Noul Ka este prevăzut cu o multitudine de tehnologii de siguranţă, pentru o manevrare sigură &icirc;n toate condiţiile. Este disponibil un sistem de suspensii complet nou, iar sistemul ABS este inclus &icirc;n pachetul de dotări standard. Manevrabilitatea remarcabilă pe şosea a noului Ka poate fi şi mai mult &icirc;mbunătăţită cu Programul Electronic de Control al Stabilităţii, care previne alunecarea şi deraparea &icirc;n condiţii de aderenţă scăzută.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
            <img alt="Ford Ka " title="Ford Ka " src="/assets/img/ka/1214375795557.jpg">

            </div>
            <header class="bti-title">Siguranţa înainte de toate</header>
            <div class="bti-body">
                <div class="abstract">
                    Noul Ka este prevăzut cu o caroserie mai uşoară, dar mai solidă pentru a &icirc;mbunătăţi siguranţa &icirc;n cazul unui impact. De asemenea, include renumitul Sistem Inteligent de Protecţie de la Ford - o abordare complet integrată privind siguranţa. Sistemul include airbaguri frontale pentru şofer şi pasager, airbaguri laterale şi tip cortină, centuri de siguranţă &icirc;n 3 puncte cu elemente de pretensionare şi limitatoare de tensiune plus scaune frontale cu sistem anti-alunecare.
                </div>
            </div>
        </article>
    </section>
</div>
<!--</div>-->
<!--<div id='tab3' class="mp-tab-wrapper">
<h2><a href='#tab3' class="mp-tab omt_xd_mt_ti">Culori</a></h2> -->
<div id='tab3' class="tab-content" style="display:none;">
    <section class="bti-wrapper">
        <article class="bti-item">
            <header class="bti-title">O declaraţie completă </header>
            <div class="bti-body">
                <div class="abstract">
                    &nbsp;
                </div>
            </div>
        </article>
    </section>
    <section class="igg-wrapper">
        <!--<script type="text/javascript" src="/cs/ContentServer?pagename=ENGInE%2fscript%2fGroupedJS"></script>-->
        <div class="igg-row">
            <article class="igg-item">
                <div class="igg-image">
                    <img alt="Moonlight" title="Moonlight" src="/assets/img/ka/1214474696546.jpg">

                </div>
                <div class="igg-body">Moonlight</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">
                                            <img alt="Flame" title="Flame" src="/assets/img/ka/1214474696694.jpg">

                </div>
                <div class="igg-body">Flame</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">
                                           <img alt="Midnight" title="Midnight" src="/assets/img/ka/1214474696620.jpg">
                             </div>
                <div class="igg-body">Midnight</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">
                                          <img alt="Mustard Olive" title="Mustard Olive" src="/assets/img/ka/1214478349353.jpg">

                </div>
                <div class="igg-body">Mustard Olive</div>
            </article>
        </div>
        <div class="igg-row">
            <article class="igg-item">
                <div class="igg-image">
                                            <img alt="Blush" title="Blush" src="/assets/img/ka/1214375992358.jpg">

                </div>
                <div class="igg-body">Blush</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">
                   <img alt="Cafe" title="Cafe" src="/assets/img/ka/1214375796009.jpg">

                </div>
                <div class="igg-body">Cafe</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Crystal" title="Crystal" src="/assets/img/ka/1214375795781.jpg">
                    </a>
                    <div class="icon-wrapper">
                        <a class="js-overlay om_pv_xa_xz icon-photo" data-media-overlay='{"height":439, "width":780}' href="/cs/ContentServer?cid=1204966116915&pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&c=Image_C" title='image'></a>
                    </div>
                </div>
                <div class="igg-body">Crystal</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">
                                            <img alt="Dive" title="Dive" src="/assets/img/ka/1214375824207.jpg">

                </div>
                <div class="igg-body">Dive</div>
            </article>
        </div>
        <div class="igg-row">
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Piste" title="Piste" src="/assets/img/ka/1214375795952.jpg">
                    </a>
                    <div class="icon-wrapper">
                        <a class="js-overlay om_pv_xa_xz icon-photo" data-media-overlay='{"height":439, "width":780}' href="/cs/ContentServer?cid=1204966117444&pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&c=Image_C" title='image'></a>
                    </div>
                </div>
                <div class="igg-body">Piste</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Scuba" title="Scuba" src="/assets/img/ka/1214375795895.jpg">

                </div>
                <div class="igg-body">Scuba</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Strobe" title="Strobe" src="/assets/img/ka/1214375795838.jpg">

                </div>
                <div class="igg-body">Strobe</div>
            </article>
        </div>
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
<script id="TagIT.load" src='/cs/ContentServer?pagename=RORO4_ENGINE/script/packager&c=Page&cid=1204961328389&location=load&isMobile=false&require=main' defer></script>
</div>