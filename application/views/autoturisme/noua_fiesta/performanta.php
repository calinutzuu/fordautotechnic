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
            <li class="selected"><a href="/Autoturisme/NouaFiesta/PerformantaSiEficienta#primaryTabs" data-ajaxlink="/Autoturisme/NouaFiesta/PerformantaSiEficienta">Performan&#355;&#259; &#351;i eficien&#355;&#259;</a>
            </li>
            <li><a href="/Autoturisme/NouaFiesta/Siguranta#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/NouaFiesta/Siguranta">Siguran&#355;&#259; &#351;i securitate</a>
            </li>
            <li><a href="#" id="moreTab">Mai multe...</a><span></span></li>
        </ul>
    </nav>
</div>
<nav class="sub-nav ">
    <ul>
        <li><a href="/Autoturisme/NouaFiesta/PreturiSiBrosuri"
                >Liste de pre&#355;uri &#351;i bro&#351;uri</a></li>
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
            <h1>Puternică şi cu un consum redus de combustibil</h1>
        </header>
        <div class="bto-body">
            <div class="abstract">
                Datorită motorului de 1,0 litri, de v&acirc;rf &icirc;n clasa sa, cu 3 cilindri, extrem de eficient şi al tehnologiilor de reducere a consumului de combustibil, noua Fiesta garantează o economie impresionantă de combustibil, fără a compromite puterea sau performanţele.
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
            <li><a href='#tab1' class='omt_'>Motoare</a></li>
            <li><a href='#tab2' class='omt_'>Economie</a></li>
        </ul>
    </nav>
</div>
<!-- BEGIN [MidPageTabs] -->
<div class="innertab-wrapper">
    <!--<div id='tab1' class="mp-tab-wrapper">
    <h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Motoare</a></h2> -->
    <div id='tab1' class="tab-content" style="display:none;">
        <section class="bto-wrapper">
            <article class="bto-item">
                <header class="bto-title">
                    <h1> </h1>
                </header>
                <div class="bto-body">
                    <div class="abstract">
                        Cu noua Fiesta, nu trebuie să alegi &icirc;ntre putere şi consum redus de combustibil.
                    </div>
                    <div class="body">
                    </div>
                </div>
            </article>
        </section>
        <section class="bti-wrapper">
            <article class="bti-item">
                <div class="bti-image">

                        <img alt="Ford Fiesta - EcoBoost" title="Ford Fiesta - EcoBoost" src="/assets/img/fiesta/1214443012250.jpg">

                </div>
                <header class="bti-title">Profită la maximum de motorul tău.</header>
                <div class="bti-body">
                    <div class="abstract">
                        Motorul revoluţionar pe benzină EcoBoost de 1,0 litri, cu 3 cilindri, &icirc;ţi asigură puterea la care te-ai aştepta de la un motor de 1,6 litri convenţional, &icirc;nsă utilizează cu p&acirc;nă la 24% mai puţin combustibil, cu emisii de CO2 cu 25% mai reduse, de numai 99 g/km.
                    </div>
                </div>
            </article>
        </section>
        <section class="bti-wrapper">
            <article class="bti-item">
                <div class="bti-image">

                        <img alt="Ford Duratorq TDCi" title="Ford Duratorq TDCi" src="/assets/img/fiesta/1214443014187.jpg">

                </div>
                <header class="bti-title">Două motoare diesel eficiente din punct de vedere al consumului de combustibil</header>
                <div class="bti-body">
                    <div class="abstract">
                        Motorul TDCi de 1,6 litri dezvoltă 95 CP şi oferă cel mai mic consum din clasa sa, de 3,3 l/100 km, cu emisii de CO2 de numai 87 g/km. Ca alternativă, motorul TDCi economic, de 1,5 litri dezvoltă 75 CP şi păstrează consumul de combustibil la un nivel scăzut, de 3,7 l/100 km, cu emisii de CO2 de numai 98 g/km.
                    </div>
                </div>
            </article>
        </section>
        <section class="bti-wrapper">
            <article class="bti-item">
                <div class="bti-image">

                        <img alt="Cutie de viteze Powershift" title="Cutie de viteze Powershift" src="/assets/img/fiesta/1214443012028.jpg">

                </div>
                <header class="bti-title">Transmisie automată eficientă, uşor de utilizat</header>
                <div class="bti-body">
                    <div class="abstract">
                        Motorul pe benzină TI-VCT, de 1,6 l, este prevăzut cu cutia de viteze PowerShift. &Icirc;mbin&acirc;nd confortul asigurat de transmisia automată cu controlul asociat unei cutii de viteze manuale, această cutie de viteze automată, cu 6 trepte de viteză şi dublu ambreiaj, preselectează următoarea treaptă de viteză, pentru a nu pierde din putere atunci c&acirc;nd treci de la o treaptă de viteză la alta. Schimbările rapide şi uniforme ale treptelor de viteză ale acestei cutii de viteze asigură un condus mai plăcut şi mai confortabil şi garantează, de asemenea, un consum redus de combustibil şi un nivel scăzut de emisii de CO2 față de cutiile de viteze automate tradiţionale.
                    </div>
                </div>
            </article>
        </section>
        <section class="bti-wrapper">
            <article class="bti-item">
                <div class="bti-image">

                        <img alt="Ford Fiesta - Schimbator" title="Ford Fiesta - Schimbator" src="/assets/img/fiesta/1214443011577.jpg">

                </div>
                <header class="bti-title">Transmisie manuală cu 5 trepte de viteză, economică</header>
                <div class="bti-body">
                    <div class="abstract">
                        Motorul EcoBoost de 1,0 l este prevăzut cu o transmisie manuală cu 5 trepte de viteză, reglată şi optimizată pentru a se potrivi caracteristicilor motorului.
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
                    <h1> </h1>
                </header>
                <div class="bto-body">
                    <div class="abstract">
                        Tehnologiile cu consum redus de combustibil ale modelului Fiesta vor reduce emisiile şi te vor ajuta să economiseşti bani.
                    </div>
                    <div class="body">
                    </div>
                </div>
            </article>
        </section>
        <section class="bti-wrapper">
            <article class="bti-item">
                <div class="bti-image">

                        <img alt="Ford Fiesta - Auto-Start-Stop" title="Ford Fiesta - Auto-Start-Stop" src="/assets/img/fiesta/1214443015912.jpg">

                </div>
                <header class="bti-title">Foloseşti mai puţin combustibil cu funcţia Auto-Start-Stop</header>
                <div class="bti-body">
                    <div class="abstract">
                        Atunci c&acirc;nd Fiesta se opreşte la semafor sau c&acirc;nd aştepţi &icirc;ntr-o coloană, această tehnologie opţională opreşte automat motorul (fără a opri &icirc;nsă alimentarea sistemelor esenţiale, precum aerul condiţionat, radioul şi Ford SYNC). De &icirc;ndată ce eşti gata să pleci de pe loc, apasă pe pedala de ambreiaj şi selectează prima treaptă de viteză, ca de obicei, iar sistemul porneşte din nou motorul. Sistemul Auto-Start-Stop este deosebit de util &icirc;n traficul intens al orașului, unde poate reduce consumul de combustibil cu p&acirc;nă la 10% (mediu urban).
                    </div>
                </div>
            </article>
        </section>
        <section class="bti-wrapper">
            <article class="bti-item">
                <div class="bti-image">

                        <img alt="Sistem Ford Eco Mode" title="Sistem Ford Eco Mode" src="/assets/img/fiesta/1214443013665.jpg">

                </div>
                <header class="bti-title">Un sistem de informare inteligent care te ajută să conduci mai eficient</header>
                <div class="bti-body">
                    <div class="abstract">
                        Sistemul inovator Ford Eco Mode evaluează &icirc;n mod continuu efectele stilului personal de condus asupra consumului de combustibil. Acesta analizează viteza, schimbarea treptelor de viteză, fr&acirc;narea şi nivelurile de anticipare, plus raportul personal de deplasări pe distanţe scurte şi lungi. Apoi, software-ul inteligent &icirc;ţi oferă recomandări legate de modul de &icirc;mbunătăţire a economiei de combustibil.
                    </div>
                </div>
            </article>
        </section>
        <section class="bti-wrapper">
            <article class="bti-item">
                <div class="bti-image">

                        <img alt="&Icirc;nc&#259;rcare regenerativ&#259; inteligent&#259;" title="&Icirc;nc&#259;rcare regenerativ&#259; inteligent&#259;" src="/assets/img/fiesta/1214443016505.jpg">

                </div>
                <header class="bti-title">Un mod mai eficient de a-ţi reîncărca bateria</header>
                <div class="bti-body">
                    <div class="abstract">
                        Spre deosebire de sistemele convenţionale, sistemul de &icirc;ncărcare regenerativă inteligentă re&icirc;ncarcă bateria doar atunci c&acirc;nd este nevoie şi, ori de c&acirc;te ori este posibil, evită realizarea acestei operaţiuni atunci c&acirc;nd apeşi pedala de acceleraţie. Acest lucru poate reduce şi mai mult consumul de combustibil şi nivelul de emisii.
                    </div>
                </div>
            </article>
        </section>
        <section class="bti-wrapper">
            <article class="bti-item">
                <div class="bti-image">

                        <img alt="Indicator schimbare treaptade viteza" title="Indicator schimbare treaptade viteza" src="/assets/img/fiesta/1214443011655.jpg">

                </div>
                <header class="bti-title">Indicator care semnalează momentele optime pentru schimbarea vitezelor din punct de vedere al consumului</header>
                <div class="bti-body">
                    <div class="abstract">
                        Un indicator luminos de pe panoul de bord &icirc;ţi indică momentul optim de schimbare a treptei de viteză, pentru o eficienţă maximă a consumului de combustibil. Aceasta reprezintă o modalitate simplă şi eficientă de a asigura deplasări c&acirc;t mai economice.
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
<script id="TagIT.load" src='/cs/ContentServer?pagename=RORO4_ENGINE/script/packager&c=Page&cid=1205027791890&location=load&isMobile=false&require=main' defer></script>
</div>