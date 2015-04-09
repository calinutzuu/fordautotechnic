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
        </a><span></span></li><li>Focus ST</li></ul>
    </nav>
    <script>
        var vehicleimagepackpresid = '1205035165459';
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
        var bootstrapVehicleData = {"vehicles":[{"strIntroToFord": " ","brand": "Ford","vehicleType": "PV","catalogId": "NONE","nameplate": "Focus ST","labelAvailableFrom": "&nbsp;","formattedCurrency": "","nameplateText": "Noul Focus ST este o ma\u015Fina de \u00EEnalt\u0103 performan\u0163\u0103 care, \u00EEn acela\u015Fi timp, transform\u0103 condusul de zi cu zi \u00EEntr-o adev\u0103rat\u0103 pl\u0103cere.","imagePack": false,"hideVehicleImage": false,"images": [],"backgroundImagePath": ["/assets/img/focus_st/1214480083822.jpg","null","null"],"disclaimerTextColor": [null,null,null],"current": true,"cid": "1205018010103","cta": [{"linkTitle": "DESCARC\u0102 BRO\u015EUR\u0102 ","linkURL": "\/SBE\/Brosura\/DescarcaBrosura","linkType": "primary","linkTarget": "_blank","omid": "va"},{"linkTitle": "\u00CENSCRIE-TE LA TEST DRIVE ","linkURL": "\/SBE\/TestDrive?shopcode=AUTHORED","linkType": "tertiary","linkTarget": "_blank","omid": "tr"},{"linkTitle": "VREAU SĂ FIU INFORMAT(Ă) ","linkURL": "/SBE/VreauSaFiuInformata","linkType": "tertiary","linkTarget": "","omid": "tr"}],"social": {"facebook": "https://facebook.com","facebookPage": "fordromania"},"disclaimer": "Modelul prezentat este un Focus ST","seriesCode": "AUTHORED","uscCode": "AUTHORED","presId": "1205035165459","promos": [],"idf": {"options":[{"dataOverlay": {"mediaType":"Flash","height":"439","width":"780"},"iconURL":"/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobheader=image%2Fjpg&blobwhere=1214480084230&blobkey=id","link":"/cs/ContentServer?cid=1205018009552&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Flash_C&amp;site=RORO4_ENGINE","videoSrc":[{"src1":""},{"src2":""}],"youtubeClose":"","tooltipText":"Focus ST"}]}}]} || {};
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
                <li class="default-nameplate-vehicle" style="background-image:url(/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobheader=image%2Fjpg&blobwhere=1214480083822&blobkey=id)">
                    <div class="layered-nameplate-image">
                        <div class="image-holder">
                        </div>
                    </div>
                    <aside class="nameplate-disclaimer ">
                        Modelul prezentat este un Focus ST
                    </aside>
                </li>
            </ul>
            <div itemscope itemtype="http://schema.org/Product" id="nameplateDetails" class="nameplate-vehicle">
                <!--the text description-->
                <div class="name-plate-text">
                    <p class="intro"> </p>
                    <h1 class="bigHeading">
                        <span itemprop="model" itemscope itemtype="http://schema.org/Organization" class="mark">Ford</span>
                        <span itemprop="member" class="nameplate boldTxt">Focus ST</span>
                    </h1>
                    <!--The price-->
                    <!--The blurb-->
                    <p class="blurb">
                        Noul Focus ST este o maşina de &icirc;naltă performanţă care, &icirc;n acelaşi timp, transformă condusul de zi cu zi &icirc;ntr-o adevărată plăcere.
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
                <li><a href="/Autoturisme/Focus-ST/#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/Focus-ST/Prezentare">Prezentare general&#259;</a>
                </li>
                <li><a href="/Autoturisme/Focus-ST/Design#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/Focus-ST/Design">Design</a>
                </li>
                <li><a href="/Autoturisme/Focus-ST/ExperientaLaVolan#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/Focus-ST/ExperientaLaVolan">Experien&#355;a la volan</a>
                </li>
                <li class="selected"><a href="/Autoturisme/Focus-ST/Performanta#primaryTabs" data-ajaxlink="/Autoturisme/Focus-ST/PerformantaSiEficienta">Performan&#355;&#259; &#351;i eficien&#355;&#259;</a>
                </li>
                <li><a href="/Autoturisme/Focus-ST/Siguranta#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/Focus-ST/Siguranta">Siguran&#355;&#259;</a>
                </li>
                <li><a href="#" id="moreTab">Mai multe...</a><span></span></li>
            </ul>
        </nav>
    </div>
    <nav class="sub-nav ">
        <ul>
            <li><a href="/Autoturisme/Focus-ST/ListaPreturi"
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
                    <h1>Performanţă pură la comandă</h1>
                </header>
                <div class="bto-body">
                    <div class="abstract">
                        Focus ST este recunoscut pentru puterea și agilitatea sa şi pentru plăcerea pură a condusului. Iar acest ultim model duce experienţa la niveluri cu totul noi. Un motor nou EcoBoost oferă putere extraordinară, un consum de combustibil excepțional de 7,2 l/100 km şi emisii de CO2 de doar 169 g/km. Pe deasupra, o serie de tehnologii optimizează direcţia, aderenţa şi fr&acirc;narea. Află mai jos mai multe despre performanţele tehnice ale noului Focus ST.
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
                    <li><a href='#tab1' class='omt_'> </a></li>
                </ul>
            </nav>
        </div>
        <!-- BEGIN [MidPageTabs] -->
        <div class="innertab-wrapper">
            <!--<div id='tab1' class="mp-tab-wrapper">
            <h2><a href='#tab1' class="mp-tab omt_xd_mt_ti"> </a></h2> -->
            <div id='tab1' class="tab-content" style="display:none;">
                <section class="bti-wrapper">
                    <article class="bti-item">
                        <div class="bti-image">

                                <img alt="Focus ST suspensii" title="Focus ST suspensii" src="/assets/img/focus_st/1214437368487.jpg">

                        </div>
                        <header class="bti-title">Manevrabilitate îmbunătăţită printr-o optimizare specială a suspensiilor</header>
                        <div class="bti-body">
                            <div class="abstract">
                                <div>At&acirc;t suspensiile din faţă c&acirc;t şi cele din spate ale noului Focus ST au fost &icirc;ntărite, oferind agilitate uimitoare şi aderenţă mai bună &icirc;n viraje. Manevrabilitatea a fost &icirc;mbunătățită, fiind mai precisă, &icirc;nsă nu &icirc;n detrimentul confortului. Așadar, te vei bucura de o experienţă de condus distractivă și antrenantă, dar vei deține permanent controlul complet asupra maşinii.</div>
                            </div>
                        </div>
                    </article>
                </section>
                <section class="bti-wrapper">
                    <article class="bti-item">
                        <div class="bti-image">

                                <img alt="Focus ST cu control imbunatatit al vectorului de cuplu de torsiune" title="Focus ST cu control imbunatatit al vectorului de cuplu de torsiune" src="/assets/img/focus_st/1214437370207.jpg">

                        </div>
                        <header class="bti-title">Aderenţă maximă în viraje</header>
                        <div class="bti-body">
                            <div class="abstract">
                                Sistem de control avansat al cuplului motor optimizat ST (eTVC) asigură controlul şi agilitatea unui sistem de ultimă generaţie a sistemului de control avansat al cuplului motor şi nu numai. Această tehnologie avansată reacţionează la suprafaţa de rulare de 100 de ori pe secundă. Echilibrează, &icirc;n mod repetat, cantitatea de putere şi fr&acirc;nare distribuită celor două roţi din faţă pentru a maximiza aderenţa şi pentru a spori manevrabilitatea, oferind asistenţă la viraje şi &icirc;n zonele şerpuite ale drumului. Pe deasupra, &icirc;n timp ce controlul avansat al cuplului motor standard acţionează &icirc;n momentul &icirc;n care simte că o roată alunecă, noul Focus ST măsoară modificările de forţă şi unghi, activ&acirc;nd sistemul &icirc;nainte să aibă loc alunecarea roţii. Sistemul TVC &icirc;mbunătățit poate, de asemenea, să fr&acirc;neze roţile din spate pentru o agilitate și mai mare.
                            </div>
                        </div>
                    </article>
                </section>
                <section class="bti-wrapper">
                    <article class="bti-item">
                        <div class="bti-image">

                                <img alt="Focus ST in culoarea Tangerine Scream" title="Focus ST in culoarea Tangerine Scream" src="/assets/img/focus_st/1214437368547.jpg">

                        </div>
                        <header class="bti-title">Menţinerea controlului în viraje</header>
                        <div class="bti-body">
                            <div class="abstract">
                                &Icirc;n momentul &icirc;n care derapezi cu maşină &icirc;ntr-o curbă, cu pedala de acceleraţie apăsată la maxim, sistemul suplimentar de asistenta a directiei la accelerare anulează orice tragere a volanului la viteză mare, sau orice trepidație cauzată de suprafeţe de drum denivelat. Rezultatul? Vei deţine &icirc;n permanenţă controlul complet asupra maşinii.
                            </div>
                        </div>
                    </article>
                </section>
                <section class="bti-wrapper">
                    <article class="bti-item">
                        <div class="bti-image">

                                <img alt="Focus ST cu discuri de frana mai mari" title="Focus ST cu discuri de frana mai mari" src="/assets/img/focus_st/1214437369669.jpg">

                        </div>
                        <header class="bti-title">Discuri de frâne mai mari pentru reducerea distanţelor de frânare</header>
                        <div class="bti-body">
                            <div class="abstract">
                                La 320mm, discurile de fr&acirc;nă faţă ale noului Focus ST sunt considerabil mai mari dec&acirc;t cele ale modelului anterior, reduc&acirc;nd distanţa de fr&acirc;nare şi minimaliz&acirc;nd pierderea performanţei de fr&acirc;nare. De asemenea, sunt special optimizate pentru o reacţie mai rapidă. Etrierele faţă mai mari și mai rigide sunt disponibile &icirc;n varianta de culoare roşie pentru un aspect mai sport (opţional). Fr&acirc;nele cu discuri spate au, de asemenea, o dimensiune considerabilă de 271mm.
                            </div>
                        </div>
                    </article>
                </section>
                <section class="bti-wrapper">
                    <article class="bti-item">
                        <div class="bti-image">

                                <img alt="Focus ST motorul ECOboost" title="Focus ST motorul ECOboost" src="/assets/img/focus_st/1214437370477.jpg">

                        </div>
                        <header class="bti-title">Putere impresionantă de la un motor construit pentru curse</header>
                        <div class="bti-body">
                            <div class="abstract">
                                Un motor EcoBoost de 2 litri, foarte uşor, din aluminiu, propulsează noul Focus ST la 100 km/h &icirc;ntr-un timp impresionant de 6,5 secunde. Motorul foloseşte injecţia directă şi un turbocompresor pentru a produce o putere şi un cuplu extraordinare de 250CP şi respectiv 360Nm, cu o eficienţă uimitoare. Motorul este ultra-sensibil la comenzi, astfel că te poţi bucura imediat de puterea sa și de accelerarea rapidă de la o viteză la alta. &Icirc;n plus, puterea impresionantă a motorului iti sta mereu la dispozitie: poţi folosi cuplul maxim de la doar 1.750 rpm.
                            </div>
                        </div>
                    </article>
                </section>
                <section class="bti-wrapper">
                    <article class="bti-item">
                        <div class="bti-image">

                                <img alt="Grila radiator automata" title="Grila radiator automata" src="/assets/img/focus_st/1214437370597.jpg">

                        </div>
                        <header class="bti-title">Aerodinamică îmbunătăţită cu Active Grille Shutter</header>
                        <div class="bti-body">
                            <div class="abstract">
                                <div>Cu ajutorul Sistemului Active Grille Shutter, orificiile de ventilaţie de la nivelul grilei răm&acirc;n deschise pentru a răci motorul, atunci c&acirc;nd te deplasezi la viteză redusă. &Icirc;nsă, atunci c&acirc;nd măreşti viteza, acestea se &icirc;nchid automat, &icirc;mbunătăţind aerodinamica și, prin urmare, reduc&acirc;nd consumul de combustibil cu p&acirc;nă la 0,8%, conform noilor cicluri de măsurare NEDC (New European Driving Cycle).</div>
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
<script id="TagIT.load" src='/cs/ContentServer?pagename=RORO4_ENGINE/script/packager&c=Page&cid=1205018011274&location=load&isMobile=false&require=main' defer></script>
</div>