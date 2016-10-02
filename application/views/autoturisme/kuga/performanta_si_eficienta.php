<script type="text/javascript">
    // mobile sniffer
    ForceRedirectUserAgents = 'android,iphone,blackberry';
    ForceRedirectUserAgentsBypass = 'Win64,Win32';
    ForceRedirectMinWidth = '480';
    MobileHomePageRedirectURL = 'http:\/\/m.ford.ro';
</script>
<div id="xAxis-detailed">
    <nav class="breadCrumb visuallyhidden" role="navigation">
        <ul itemprop="breadcrumb">
            <li class="home"><a href="/" data-selenium="breadcrumb_home" class="om_bc_li"
                                title="Pagina principal&#259;">Pagina principal&#259;</a><span></span></li>
            <li data-selenium="breadcrumb_cars"><a href="/Autoturisme" class="om_bc_li">
                Autoturisme
            </a><span></span></li>
            <li data-selenium="breadcrumb_nameplate">Kuga</li>
        </ul>
    </nav>
    <script>
        var vehicleimagepackpresid = '1205035168917';
        var vehicleimagepackyear = 'YYW';
    </script>
    <div class="fblike-locale">ro_RO</div>
    <script>
        var googleAdServerNameplateId = '00O';
        var googleAdServerNameplateName = 'Kuga';
    </script>
    <script type="text/javascript">
        var extend = function (obj, extObj) {
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
        var bootstrapVehicleData = {"vehicles":[
            {"strIntroToFord":" NOUL", "brand":"Ford", "vehicleType":"PV", "catalogId":"9326", "nameplate":"Kuga", "labelAvailableFrom":"De la", "formattedCurrency":"26.950 RON", "nameplateText":"\u00CE\u021Bi prezent\u0103m cu m\u00E2ndrie noul Ford Kuga, cel mai inteligent SUV al nostru.", "imagePack":true, "hideVehicleImage":false, "images":["/assets/img/kuga/Kuga_GingerAle_LHD_Front_00001.jpg"], "backgroundImagePath":["null", "null", "null"], "disclaimerTextColor":[null, null, null], "current":true, "cid":"1205023531647", "cta":[
                {"linkTitle":"MODELE Kuga", "linkURL":"/Autoturisme/Kuga/Modele", "linkType":"primary", "linkTarget":"", "omid":"va"},
                {"linkTitle":"DESCARC\u0102 BRO\u015EUR\u0102 ", "linkURL":"\/SBE\/Brosura\/DescarcaBrosura", "linkType":"tertiary", "linkTarget":"_blank", "omid":"tr"},
                {"linkTitle":"\u00CENSCRIE-TE LA TEST DRIVE ", "linkURL":"\/SBE\/TestDrive?shopcode=00O", "linkType":"tertiary", "linkTarget":"_blank", "omid":"tr"},
                {"linkTitle":"VREAU SĂ FIU INFORMAT(Ă) ", "linkURL":"/SBE/VreauSaFiuInformata", "linkType":"tertiary", "linkTarget":"", "omid":"tr"}
            ], "social":{"facebook":"https://facebook.com", "facebookPage":"fordromania"}, "disclaimer":"Modelul prezentat este un Kuga Titanium. Imagine cu titlul de prezentare.", "seriesCode":"7TK", "uscCode":"00O", "supportSelector":"true", "supportSeries":"true", "presId":"1205035168917", "promos":[], "idf":{"options":[
                {"dataOverlay":{"mediaType":"Flash", "height":"439", "width":"780"}, "iconURL":"/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobheader=image%2Fjpg&blobwhere=1214484922188&blobkey=id", "link":"/cs/ContentServer?cid=1205033798153&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Flash_C&amp;site=RORO4_ENGINE", "videoSrc":[
                    {"src1":""},
                    {"src2":""}
                ], "youtubeClose":"", "tooltipText":"Ford Kuga"}
            ]}}
        ]} || {};
        var retrieveUserOptions = JSON.parse(localStorage.getItem('userSelection')) || {};
        //FranciB: injecting and changing user selected angle image trigger by mid page tabs and on page reload.
        //In order to stop the flickering between the default image and selected angle image in the centre stage.
        if (retrieveUserOptions.selectedImageAngle !== (null || "" || undefined)) {
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
                        Modelul prezentat este un Kuga Titanium. Imagine cu titlul de prezentare.
                    </aside>
                </li>
            </ul>
            <div itemscope itemtype="http://schema.org/Product" id="nameplateDetails" class="nameplate-vehicle">
                <!--the text description-->
                <div class="name-plate-text">
                    <p class="intro"> NOUL</p>

                    <h1 class="bigHeading">
                        <span itemprop="model" itemscope itemtype="http://schema.org/Organization"
                              class="mark">Ford</span>
                        <span itemprop="member" class="nameplate boldTxt">Kuga</span>
                    </h1>
                    <!--The price-->
                    <!--The blurb-->
                    <p class="blurb">
                        &Icirc;ți prezentăm cu m&acirc;ndrie noul Ford Kuga, cel mai inteligent SUV al nostru.
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
                >
</div>
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
    <a href="{{#if link}}{{link}}{{else}}#{{/if}}"
       class="vehicle-selector box-shadow{{#if className}} {{className}}-wrapper{{/if}}">
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
                <li tabindex="0" class="{{#if omid}}omv_pv_xd_st_{{omid}}{{/if}}{{#if selected}} selected{{/if}}"
                {{#if usc}}data-usc-code="{{this.usc}}{{/if}}" data-idx="{{this.idx}}">
                <img src="{{this.imagePath}}" alt="{{this.tooltipText}}"/>
                <span class="tooltip"><span
                        class="arrow left {{../tooltipPlacement}}"></span><span>{{this.tooltipText}}</span></span>
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
        <span class="tooltip"><span>{{this.tooltipText}}</span><span
                class="arrow {{../tooltipPlacement}}"></span></span>
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
                <a href="{{linkURL}}"
                   class="{{#ifCond linkType '==' 'tertiary'}}tertiary-link {{/ifCond}}om_pv_xd_{{omid}}" {{#ifCond
                linkTarget '!=' ''}}target="{{linkTarget}}"{{/ifCond}}>{{linkTitle}}</a>
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
        <img src="{{this}}" alt="{{../tooltipText}}"/>
        {{/each}}
    </article>
    {{/each}}
</script>
<script type="text/x-handlebars-template" id="vehicleRolloverTemplate">
    {{#each rollovers}}
    <figure class="vehicle-preview-rollover {{className}}">
        <img src="{{hoverThumbnail}}" alt="{{nameplate}}."/>
        <span class="nameplate boldTxt">{{nameplate}}</span>

        <p><span class="price-label">{{{labelAvailableFrom}}}</span>
            <span itemprop="price" class="price">{{{formattedCurrency}}}</span></p>
    </figure>
    {{/each}}
</script>
</section>
<aside class="fb-xaxis-icon">
    <div class="fb-like" data-href="http://www.facebook.com/fordromania" data-send="false" data-layout="button_count"
         data-width="450" data-show-faces="true" data-font="tahoma"></div>
</aside>
<p id="xaxisOverviewDisclaimer" class="disclaimer specific"></p>
<script type="text/javascript"> var nameplateTabErrorMsg = 'Ne pare r&#259;u, momentan nu putem s&#259; &icirc;nc&#259;rc&#259;m con&#539;inutul pe care l-a&#539;i solicitat. &Icirc;ncerca&#539;i din nou, mai t&acirc;rziu.'; </script>
<section id="primary-tab-content" class="nameplate-tab-content" data-dynamic-tabcontent="false">
<div class="tab-wrapper">
    <nav class="tabs" id="primaryTabs">
        <ul>
            <li><a href="/Autoturisme/Kuga/Prezentare#primaryTabs" class="om_mt_ti"
                   data-ajaxlink="/Autoturisme/Kuga/Prezentare">Prezentare general&#259;</a>
            </li>
            <li><a href="/Autoturisme/Kuga/Design#primaryTabs" class="om_mt_ti"
                   data-ajaxlink="/Autoturisme/Kuga/Design">Design</a>
            </li>
            <li><a href="/Autoturisme/Kuga/ExperientaLaVolan#primaryTabs" class="om_mt_ti"
                   data-ajaxlink="/Autoturisme/Kuga/ExperientaLaVolan">Experien&#539;a la volan</a>
            </li>
            <li><a href="/Promotii/Autoturisme/KugaSummerEdition" class="om_mt_ti"
                   data-ajaxlink="/Autoturisme/Kuga/PreturisiPromotii">PROMO&#354;II</a>
            </li>
            <li class="selected"><a href="/Autoturisme/Kuga/PerformantaSiEficienta#primaryTabs"
                                    data-ajaxlink="/Autoturisme/Kuga/PerformantaSiEficienta">Performan&#355;&#259;
                &#351;i eficien&#355;&#259;</a>
            </li>
            <li><a href="#" id="moreTab">Mai multe...</a><span></span></li>
        </ul>
    </nav>
</div>
<nav class="sub-nav ">
    <ul>
        <li><a href="/Autoturisme/Kuga/Siguranta"
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
            <h1>Performanţă impresionantă, indiferent de condiţii</h1>
        </header>
        <div class="bto-body">
            <div class="abstract">
                Kuga este disponibil cu un motor EcoBoost de 1,6 litri, cu 150 CP, transmisie manuală cu 6 trepte de
                viteză şi 182 CP cu transmisie automată cu 6 trepte de viteză. Ambele motoare dezvoltă un nivel ridicat
                de putere, chiar şi &icirc;n condiţii dificile de teren accidentat. Mulţumită tehnologiilor ECOnetic de
                la Ford vei consuma, de asemenea, mai puţin combustibil. <br>
                <br>
                Sistemul inteligent de tracţiune integrală garantează manevrabilitate extrem de sensibilă pe orice tip
                de teren. Drept urmare, Kuga asigură un echilibru impresionant &icirc;ntre performanţă şi eficienţă.
                Află mai multe detalii şi consultă toate datele şi cifrele importante mai jos.
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
            <li><a href='#tab4' class='omt_'>Date Tehnice</a></li>
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

                    <img alt="Ford EcoBoost" title="Ford EcoBoost"
                         src="/assets/img/kuga/1214439609980.jpg">

            </div>
            <header class="bti-title">Un motor pe benzină performant</header>
            <div class="bti-body">
                <div class="abstract">
                    Motorul EcoBoost pe benzină, de 1,6 litri, al Kuga oferă performanţe remarcabile, cu 150 CP,
                    transmisie manuală cu 6 trepte de viteză şi 182 CP cu transmisie automată cu 6 trepte de viteză,
                    dezvolt&acirc;nd un cuplu maxim de 240 Nm.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Ford EcoBoost" title="Ford EcoBoost"
                         src="/assets/img/kuga/1214439607654.jpg">

            </div>
            <header class="bti-title">O gamă de motoare pe motorină de înaltă putere</header>
            <div class="bti-body">
                <div class="abstract">
                    Ambele motoare pe motorină asigură un nivel ridicat de putere. O primă variantă este reprezentată de
                    motorul pe motorină Duratorq TDCi de 2,0 litri ce dezvoltă 140 CP, cu transmisie manuală cu 6 trepte
                    de viteză; acesta dezvoltă putere la un nivel ridicat la turaţii reduse, 340 Nm la 2.000 rpm. Drept
                    alternativă, motorul pe motorină de 2,0 litri ce dezvoltă 163 CP poate face faţă cu brio celor mai
                    dificile terenuri accidentate.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Ford Kuga - interior" title="Ford Kuga - interior"
                         src="/assets/img/kuga/1214439610057.jpg">

            </div>
            <header class="bti-title">Cutia de viteze Ford PowerShift. Pentru deplasări mai plăcute cu un consum redus
                de combustibil
            </header>
            <div class="bti-body">
                <div class="abstract">
                    &Icirc;mbin&acirc;nd confortul asigurat de transmisia automată cu controlul asociat unei cutii de
                    viteze manuale, această cutie de viteze automată cu 6 trepte de viteză şi ambreiaj dublu
                    preselectează următoarea treaptă &icirc;n locul tău, pentru a nu pierde din putere atunci c&acirc;nd
                    treci de la o treaptă de viteză la alta. Schimbările treptelor de viteză extrem de rapide şi
                    uniforme ale cutiei de viteze PowerShift asigură un condus mai plăcut şi mai confortabil şi
                    garantează, de asemenea, un consum redus de combustibil şi un nivel scăzut de emisii de CO2 &icirc;n
                    comparaţie cu cutiile de viteze automate obişnuite. <br>
                    <br>
                    Această tehnologie de ultimă generaţie face chiar şi corecţiile necesare &icirc;n cazul &icirc;n
                    care te afli &icirc;ntr-o treaptă greşită de viteză. De exemplu, atunci c&acirc;nd depăşești,
                    sistemul poate trece &icirc;ntr-o treaptă inferioară pentru a-ți conferi puterea de a depăşi rapid
                    şi controlul necesar pentru a efectua o depăşire &icirc;n siguranţă.
                </div>
            </div>
        </article>
    </section>
</div>
<!--</div>-->
<!--<div id='tab2' class="mp-tab-wrapper">
<h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">Economie</a></h2> -->
<div id='tab2' class="tab-content" style="display:none;">
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Auto-Start-Stop" title="Auto-Start-Stop"
                         src="/assets/img/kuga/1214439610507.jpg">

            </div>
            <header class="bti-title">Economisește până la 10% din combustibil cu ajutorul sistemului Auto-Start-Stop
            </header>
            <div class="bti-body">
                <div class="abstract">
                    Atunci c&acirc;nd Kuga se află la semafor sau c&acirc;nd stă la ralanti &icirc;ntr-o coloană,
                    această tehnologie opreşte automat motorul (fără a opri &icirc;nsă alimentarea sistemelor esenţiale,
                    precum aerul condiţionat şi radioul). De &icirc;ndată ce ești gata să pleci de pe loc, sistemul
                    porneşte automat din nou motorul. Acesta este ideal &icirc;n cazul &icirc;n care te deplasezi cu
                    autovehiculul &icirc;n oraş, deoarece poate reduce consumul de combustibil cu p&acirc;nă la 10%.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Ford Kuga 4x4" title="Ford Kuga 4x4"
                         src="/assets/img/kuga/1214439610132.jpg">

            </div>
            <header class="bti-title">Indicator care semnalează momentele optime pentru schimbarea vitezelor din punct
                de vedere al consumului
            </header>
            <div class="bti-body">
                <div class="abstract">
                    Un indicator luminos de pe panoul de bord &icirc;ți indică momentul optim de schimbare a treptei de
                    viteză, pentru o eficienţă maximă a consumului de combustibil. Aceasta reprezintă o modalitate
                    simplă şi practică de a asigura deplasări c&acirc;t mai eficiente şi economice.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Ford Kuga - navigatie" title="Ford Kuga - navigatie"
                         src="/assets/img/kuga/1214439609827.jpg">

            </div>
            <header class="bti-title">Un sistem de informare inteligent care te ajută să conduci mai eficient</header>
            <div class="bti-body">
                <div class="abstract">
                    Sistemul inovator Ford Eco Mode evaluează &icirc;n mod continuu efectele stilului personal de condus
                    asupra consumului de combustibil. Sistemul citeşte viteza, schimbarea treptelor de viteză, fr&acirc;narea
                    şi nivelurile de anticipare, plus raportul dintre călătoriile scurte şi cele lungi. Software-ul
                    inteligent &icirc;ți oferă recomandări legate de modul de &icirc;mbunătăţire a economiei de
                    combustibil, &icirc;n funcţie de stilul tău de condus.
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

                    <img alt="Ford Kuga 4x4" title="Ford Kuga 4x4"
                         src="/assets/img/kuga/1214439608623.jpg">

            </div>
            <header class="bti-title">Pentru aderenţă instantanee pe teren schimbător</header>
            <div class="bti-body">
                <div class="abstract">
                    Sistemul inteligent de tracţiune integrală al noului Ford Kuga reacţionează şi se adaptează
                    instantaneu la schimbările de teren. Acesta trimite exact nivelul de putere necesar la nivelul
                    roţilor individuale care au nevoie de cel mai ridicat nivel de aderenţă. Pentru că este un
                    sistem &bdquo;la cerere&rdquo;, acesta se activează doar atunci c&acirc;nd este nevoie, economisind
                    combustibil atunci c&acirc;nd drumul este mai puțin solicitant. Şi dacă dorești să vezi cum se
                    comportă roţile &icirc;n timpul deplasării, ecranul cu informaţii despre tracţiunea integrală
                    afişează &icirc;n mod continuu, sub forma unui grafic cu bare, c&acirc;t cuplu este trimis către
                    fiecare roată.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Control" title="Control"
                         src="/assets/img/kuga/1214439610208.jpg">

            </div>
            <header class="bti-title">Sistem de control avansat al cuplului motor</header>
            <div class="bti-body">
                <div class="abstract">
                    Sistemul de control avansat al cuplului motor culege informaţii privind suprafaţa de rulare de 100
                    de ori pe secundă (de 33 de ori mai rapid dec&acirc;t o clipire). Cu ajutorul acestor informaţii,
                    acesta echilibrează &icirc;n mod repetat puterea şi forţa de fr&acirc;nare transmise la nivelul
                    fiecăreia dintre cele două roţi din faţă. Acest lucru maximizează aderenţa şi &icirc;mbunătăţeşte
                    manevrabilitatea, ajut&acirc;ndu-te să efectuezi virajele şi să parcurgi zonele şerpuite ale
                    drumului. Sistemul de control avansat al cuplului motor reprezintă o tehnologie de ultimă generaţie
                    care este oferită ca dotare standard pe Kuga.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Ford Kuga - dinamica" title="Ford Kuga - dinamica"
                         src="/assets/img/kuga/1214439607578.jpg">

            </div>
            <header class="bti-title">Aderenţă mai mare la viraje</header>
            <div class="bti-body">
                <div class="abstract">
                    Sistemul Kuga de Control dinamic &icirc;mbunătăţit la viraje (eDDC) controlează cu precizie
                    distribuţia de putere către ambele punţi, pentru a reduce subvirarea şi pentru a &icirc;mbunătăţi
                    controlul asupra vehiculului. Aceasta face ca maşina să fie mai dinamică şi să reacţioneze mai bine
                    la comenzi. <br>
                    <br>
                    Atunci c&acirc;nd accelerezi &icirc;n viraje, sistemul eDCC aplică fr&acirc;nele pe roata din
                    interior, din faţă, şi, dacă este necesar, pe roata din spate, astfel &icirc;nc&acirc;t mai multă
                    putere de la motor să ajungă la roţile din exterior, care au mai multă aderenţă.
                </div>
            </div>
        </article>
    </section>
</div>
<!--</div>-->
<!--<div id='tab4' class="mp-tab-wrapper">
<h2><a href='#tab4' class="mp-tab omt_xd_mt_ti">Date Tehnice</a></h2> -->
<div id='tab4' class="tab-content" style="display:none;">
<section class="bti-wrapper">
    <article class="bti-item">
        <header class="bti-title"></header>
        <div class="bti-body">
            <div class="abstract">
                <div>Tabelul de mai jos prezintă toate datele legate de performanţă, economie şi emisiile CO2 de care ai
                    nevoie.
                </div>
                <br>
                <table width="520" cellspacing="0" cellpadding="5" border="1">
                    <tbody>
                    <tr bgcolor="#425968">
                        <td width="75"><font color="#ffffff"><strong>Motor</strong></font></td>
                        <td width="75"><strong><font color="#ffffff">Auto-Start-Stop</font></strong></td>
                        <td width="45"><font color="#ffffff"><strong>CP</strong></font></td>
                        <td width="65"><strong><font color="#ffffff">Transmisie</font></strong></td>
                        <td width="65"><strong><font color="#ffffff">Cuplul (Nm)</font></strong></td>
                        <td width="65"><strong><font color="#ffffff">CO&sup2;</font></strong></td>
                        <td width="65"><strong><font color="#ffffff">Tracţiune integrala / tracţiune faţa<br>
                        </font></strong></td>
                        <td width="65"><strong><font color="#ffffff">Valori medii oficiale<br>
                        </font></strong></td>
                    </tr>
                    <tr bgcolor="#ffffff">
                        <td><strong>1.6 EcoBoost</strong></td>
                        <td>
                            <p align="center">Da</p>
                        </td>
                        <td>
                            <p align="center">150</p>
                        </td>
                        <td>
                            <p align="center">Manuală cu 6 trepte<br>
                            </p>
                        </td>
                        <td>
                            <p align="center">240</p>
                        </td>
                        <td>
                            <p align="center">154</p>
                        </td>
                        <td>
                            <p align="center">Tracţiune faţa</p>
                        </td>
                        <td>
                            <p align="center">6.6l/100km</p>
                        </td>
                    </tr>
                    <tr bgcolor="#ecedec">
                        <td><strong>1.6 EcoBoost</strong></td>
                        <td>
                            <p align="center">Nu</p>
                        </td>
                        <td>
                            <p align="center">182</p>
                        </td>
                        <td>
                            <p align="center">Automată cu 6 trepte<br>
                            </p>
                        </td>
                        <td>
                            <p align="center">240</p>
                        </td>
                        <td>
                            <p align="center">179</p>
                        </td>
                        <td>
                            <p align="center">Tracţiune integrala</p>
                        </td>
                        <td>
                            <p align="center">7.7l/100km</p>
                        </td>
                    </tr>
                    <tr bgcolor="#ffffff">
                        <td><strong>2.0 TDCi</strong></td>
                        <td>
                            <p align="center">Nu</p>
                        </td>
                        <td>140</td>
                        <td>
                            <p align="center">Manuală cu 6 trepte<br>
                            </p>
                        </td>
                        <td>
                            <p align="center">320</p>
                        </td>
                        <td>
                            <p align="center">139</p>
                        </td>
                        <td>
                            <p align="center">Tracţiune faţa</p>
                        </td>
                        <td>
                            <p align="center">5.3<span>l/100km</span></p>
                        </td>
                    </tr>
                    <tr bgcolor="#ecedec">
                        <td><strong>2.0 TDCi</strong></td>
                        <td>
                            <p align="center">Nu</p>
                        </td>
                        <td>
                            <p align="center">140</p>
                        </td>
                        <td>
                            <div align="center">Manuală cu 6 trepte<br>
                            </div>
                        </td>
                        <td>
                            <p align="center">320</p>
                        </td>
                        <td>
                            <p align="center">154</p>
                        </td>
                        <td>
                            <p align="center">Tracţiune integrala</p>
                        </td>
                        <td>
                            <p align="center">5.9<span>l/100km</span></p>
                        </td>
                    </tr>
                    <tr bgcolor="#ffffff">
                        <td><strong>2.0 TDCi</strong></td>
                        <td>
                            <p align="center">Nu</p>
                        </td>
                        <td>
                            <p align="center">140</p>
                        </td>
                        <td>
                            <p align="center"><span>Powershift cu 6 trepte<br>
</span></p>
                        </td>
                        <td>
                            <p align="center">320</p>
                        </td>
                        <td>
                            <p align="center">162</p>
                        </td>
                        <td>
                            <p align="center">Tracţiune integrala</p>
                        </td>
                        <td>
                            <p align="center">6.2l/100km</p>
                        </td>
                    </tr>
                    <tr bgcolor="#ecedec">
                        <td><strong>2.0 TDCi</strong></td>
                        <td>
                            <p align="center">Nu</p>
                        </td>
                        <td>
                            <p align="center">163</p>
                        </td>
                        <td>
                            <div align="center">Manuală cu 6 trepte<br>
                            </div>
                        </td>
                        <td>
                            <p align="center">340</p>
                        </td>
                        <td>
                            <p align="center">154</p>
                        </td>
                        <td>
                            <p align="center">Tractiune integrala</p>
                        </td>
                        <td>
                            <p align="center">5.9<span>l/100km</span></p>
                        </td>
                    </tr>
                    <tr bgcolor="#ffffff">
                        <td><strong>2.0 TDCi</strong></td>
                        <td>
                            <p align="center">Nu</p>
                        </td>
                        <td>
                            <p align="center">163</p>
                        </td>
                        <td>
                            <div align="center">Powershift cu 6 trepte<br>
                            </div>
                        </td>
                        <td>
                            <p align="center">340</p>
                        </td>
                        <td>
                            <p align="center">162</p>
                        </td>
                        <td>
                            <p align="center">Tractiune integrala</p>
                        </td>
                        <td>
                            <p align="center">6.2l/100km</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </article>
</section>
</div>
<!--</div>-->
</div>
<!-- END [MidPageTabs] -->
</article>
</section>
<!-- nosc comp -->

</div>