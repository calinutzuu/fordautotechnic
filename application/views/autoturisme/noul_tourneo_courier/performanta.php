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
            <li class="selected"><a href="/Autoturisme/Noul-Ford-Tourneo-Courier/Performanta#primaryTabs">Performan&#355;&#259; &#351;i eficien&#355;&#259;</a>
            </li>
            <li><a href="/Autoturisme/Noul-Ford-Tourneo-Courier/Siguranta#primaryTabs">Siguran&#355;&#259; &#351;i securitate</a>
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
                <h1>Performanță și economie de combustibil: bucură-te de amândouă</h1>
            </header>
            <div class="bto-body">
                <div class="abstract">
                    <div>Este bine &icirc;ntotdeauna să ai la dispoziție performanță, dar nu la orice preț. Așadar, motoarele puternice diesel și pe benzină ale Tourneo Courier sunt, de asemenea, proiectate pentru a oferi o economie de combustibil pe care o vei observa rapid.</div>
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
                <li><a href='#tab1' class='omt_'>Motorizări</a></li>
                <li><a href='#tab2' class='omt_'>Economie</a></li>
                <li><a href='#tab3' class='omt_'>Manevrabilitate</a></li>
            </ul>
        </nav>
    </div>
    <!-- BEGIN [MidPageTabs] -->
    <div class="innertab-wrapper">
        <!--<div id='tab1' class="mp-tab-wrapper">
        <h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Motorizări</a></h2> -->
        <div id='tab1' class="tab-content" style="display:none;">
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">

                            <img alt="Motor EcoBoost 1.0 L" title="Motor EcoBoost 1.0 L" src="/assets/img/tourneo_courier/1214481508462.jpg">

                    </div>
                    <header class="bti-title">Profită la maximum de motor</header>
                    <div class="bti-body">
                        <div class="abstract">
                            <div>Motorul revoluţionar pe benzină EcoBoost de 1,0 litri, cu 3 cilindri, &icirc;ţi asigură puterea la care te-ai aştepta de la un motor de 1,6 litri convenţional, &icirc;nsă utilizează cu p&acirc;nă la 24% mai puţin combustibil, cu emisii de CO<sub>2</sub> cu 25% mai reduse, de numai 119 g/km.</div>
                        </div>
                    </div>
                </article>
            </section>
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">

                            <img alt="Motoare diesel" title="Motoare diesel" src="/assets/img/tourneo_courier/1214481510655.jpg">

                    </div>
                    <header class="bti-title">Cele mai bune două motoare diesel din clasa lor</header>
                    <div class="bti-body">
                        <div class="abstract">
                            <div>Un motor economic de 1,5 Duratorq TDCi produce 75 CP, păstr&acirc;nd &icirc;n același timp consumul de carburant și emisiile de CO<sub>2</sub> la un nivel scăzut: 3,9 l/100 km și 103 g/km (cu Auto-Start-Stop). Dacă doreşti să faci și mai multă economie, motorul TDCi de 1,6 litri dezvoltă 95 CP şi (cu Auto-Start-Stop și un limitator de viteză la 100 km/oră) oferă un consum de 3,7 l/100 km, cu emisii de CO<sub>2</sub> de numai 97 g/km.</div>
                        </div>
                    </div>
                </article>
            </section>
        </div>
        <!--</div>-->
        <!--<div id='tab2' class="mp-tab-wrapper">
        <h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">Economie</a></h2> -->
        <div id='tab2' class="tab-content" style="display:none;">
            <section class="bto-wrapper">
                <article class="bto-item">
                    <header class="bto-title">
                        <h1>Economie</h1>
                    </header>
                    <div class="bto-body">
                        <div class="abstract">
                            <div>Motoarele diesel inovatoare, și motoarele pe benzină revoluționare pot reduce opririle pentru alimentare (și facturile de combustibil). Exteriorul mașinii este conceput pentru a &icirc;mbunătăți aerodinamica, ceea ce poate ajuta, de asemenea, economia de carburant. Și alte tehnologii duc la economii suplimentare, &icirc;n timp ce intervalele lungi de service pot aduce, de asemenea, economii de costuri.</div>
                        </div>
                        <div class="body">
                        </div>
                    </div>
                </article>
            </section>
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">

                            <img alt="Intervale de service" title="Intervale de service" src="/assets/img/tourneo_courier/1214481509816.jpg">

                    </div>
                    <header class="bti-title">Intervale de service lungi pentru costuri reduse</header>
                    <div class="bti-body">
                        <div class="abstract">
                            <div>Fiecare piesă şi componentă a noului Tourneo Courier este proiectată să maximizeze rezistenţa şi să funcţioneze mai mult fără să necesite &icirc;ntreţinere. De aceea, intervalele de service sunt stabilite la 30.000 de km sau la 1 an.</div>
                        </div>
                    </div>
                </article>
            </section>
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">

                            <img alt="Auto-Start-Stop" title="Auto-Start-Stop" src="/assets/img/tourneo_courier/1214481511235.jpg">

                    </div>
                    <header class="bti-title">Folosiţi mai puţin combustibil cu funcţia Auto-Start-Stop </header>
                    <div class="bti-body">
                        <div class="abstract">
                            <div>Atunci c&acirc;nd maşina ta se opreşte la semafor sau c&acirc;nd aştepţi &icirc;ntr-o coloană, această tehnologie opţională poate opri automat motorul (fără a opri &icirc;nsă alimentarea sistemelor esenţiale, precum ventilaţia, radioul şi Ford SYNC). De &icirc;ndată ce eşti gata să pleci de pe loc, apasă pedala de ambreiaj şi selectează prima treaptă de viteză, ca de obicei, iar sistemul porneşte din nou motorul. Sistemul Auto-Start-Stop este deosebit de eficient &icirc;n oraşe, unde poate reduce consumul de combustibil cu p&acirc;nă la 10% (mediu urban).</div>
                        </div>
                    </div>
                </article>
            </section>
        </div>
        <!--</div>-->
        <!--<div id='tab3' class="mp-tab-wrapper">
        <h2><a href='#tab3' class="mp-tab omt_xd_mt_ti">Manevrabilitate</a></h2> -->
        <div id='tab3' class="tab-content" style="display:none;">
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">

                            <img alt="Sistem de direc&#539;ie asistat&#259; electronic (EPAS)" title="Sistem de direc&#539;ie asistat&#259; electronic (EPAS)" src="/assets/img/tourneo_courier/1214481510738.jpg">

                    </div>
                    <header class="bti-title">Manevre şi viraje fără eforturi</header>
                    <div class="bti-body">
                        <div class="abstract">
                            <div>Sistemul de direcție asistată electric (EPAS) se reglează automat pentru a permite virarea mai simplă şi mai uşoară atunci c&acirc;nd parchezi &icirc;ntr-un spaţiu restr&acirc;ns şi virarea mai fermă pentru mai mult control pe autostradă. Spre deosebire de servodirecția convențională care funcționează continuu și consumă energie și combustibil, sistemul nostru EPAS funcționează numai atunci c&acirc;nd este necesar, sporind economia de combustibil.</div>
                        </div>
                    </div>
                </article>
            </section>
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">

                            <img alt="Diametru de bracaj" title="Diametru de bracaj" src="/assets/img/tourneo_courier/1214481507710.jpg">

                    </div>
                    <header class="bti-title">O maşină care este uşor de întors</header>
                    <div class="bti-body">
                        <div class="abstract">
                            <div>Tourneo Courier are o rază de bracaj mică, ceea ce contribuie la reducerea stresului &icirc;n cazul efectuării unor manevre pe străzi &icirc;nguste și aglomerate. Cu doar 2,6 rotiri ale volanului &icirc;ntre cele două puncte de blocare, mașina va avea nevoie de numai 10,55 m pentru a &icirc;ntoarce.</div>
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
<script id="TagIT.load" src='/cs/ContentServer?pagename=RORO4_ENGINE/script/packager&c=Page&cid=1205071621593&location=load&isMobile=false&require=main' defer></script>
</div>