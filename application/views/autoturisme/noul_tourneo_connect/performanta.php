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
        </a><span></span></li><li>Tourneo Connect </li></ul>
    </nav>
    <script>
        var vehicleimagepackpresid = '1205058479712';
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
        var bootstrapVehicleData = {"vehicles":[{"strIntroToFord": " ","brand": "Ford","vehicleType": "PV","catalogId": "NONE","nameplate": "Tourneo Connect ","labelAvailableFrom": "&nbsp;","formattedCurrency": "","nameplateText": "Nu trebuie s\u0103 sacrifica\u0163i confortul \u015Fi tehnologia doar pentru c\u0103 v\u0103 dori\u0163i un vehicul func\u0163ional \u015Fi versatil.","imagePack": false,"hideVehicleImage": false,"images": [],"backgroundImagePath": ["/assets/img/tourneo_connect/1214484912948.jpg","null","null"],"disclaimerTextColor": ["364957",null,null],"current": true,"cid": "1205056902750","cta": [{"linkTitle": "DESCARC\u0102 BRO\u015EUR\u0102 ","linkURL": "\/SBE\/Brosura\/DescarcaBrosura","linkType": "primary","linkTarget": "_blank","omid": "va"},{"linkTitle": "\u00CENSCRIE-TE LA TEST DRIVE ","linkURL": "\/SBE\/TestDrive?shopcode=AUTHORED","linkType": "tertiary","linkTarget": "_blank","omid": "tr"},{"linkTitle": "VREAU SĂ FIU INFORMAT(Ă) ","linkURL": "/SBE/VreauSaFiuInformata","linkType": "tertiary","linkTarget": "","omid": "tr"}],"social": {"facebook": "https://facebook.com","facebookPage": "fordromania"},"disclaimer": "     Modelul prezentat este un Tourneo Connect","seriesCode": "AUTHORED","uscCode": "AUTHORED","presId": "1205058479712","promos": [],"idf": {"options":[{"dataOverlay": {"mediaType":"Flash","height":"439","width":"780"},"iconURL":"/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobheader=image%2Fjpg&blobwhere=1214480715679&blobkey=id","link":"/cs/ContentServer?cid=1205032255640&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Flash_C&amp;site=RORO4_ENGINE","videoSrc":[{"src1":""},{"src2":""}],"youtubeClose":"","tooltipText":"Tourneo Connect"}]}}]} || {};
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
                <li class="default-nameplate-vehicle" style="background-image:url(/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobheader=image%2Fjpg&blobwhere=1214484912948&blobkey=id)">
                    <div class="layered-nameplate-image">
                        <div class="image-holder">
                        </div>
                    </div>
                    <aside class="nameplate-disclaimer style=color:#364957">
                        Modelul prezentat este un Tourneo Connect
                    </aside>
                </li>
            </ul>
            <div itemscope itemtype="http://schema.org/Product" id="nameplateDetails" class="nameplate-vehicle">
                <!--the text description-->
                <div class="name-plate-text">
                    <p class="intro"> </p>
                    <h1 class="bigHeading">
                        <span itemprop="model" itemscope itemtype="http://schema.org/Organization" class="mark">Ford</span>
                        <span itemprop="member" class="nameplate boldTxt">Tourneo Connect </span>
                    </h1>
                    <!--The price-->
                    <!--The blurb-->
                    <p class="blurb">
                        Nu trebuie să sacrificaţi confortul şi tehnologia doar pentru că vă doriţi un vehicul funcţional şi versatil.
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
            <li><a href="/Autoturisme/NoulTourneoConnect/#primaryTabs">Prezentare general&#259;</a>
            </li>
            <li><a href="/Autoturisme/NoulTourneoConnect/Design#primaryTabs">Design</a>
            </li>
            <li><a href="/Autoturisme/NoulTourneoConnect/ExperientaLaVolan#primaryTabs">Experien&#355;a la volan</a>
            </li>
            <li class="selected"><a href="/Autoturisme/NoulTourneoConnect/Performanta#primaryTabs">Performan&#355;&#259; &#351;i eficien&#355;&#259;</a>
            </li>
            <li><a href="/Autoturisme/NoulTourneoConnect/Siguranta#primaryTabs" class="om_mt_ti">Siguran&#355;&#259; &#351;i securitate</a>
            </li>
            <li><a href="#" id="moreTab">Mai multe...</a><span></span></li>
        </ul>
    </nav>
</div>
<nav class="sub-nav ">
    <ul>
        <li><a href="/Autoturisme/NoulTourneoConnect/StiluriDeCaroserie"
                >Stiluri de caroserie</a></li>

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
                <h1>Eficient din punct de vedere al consumului de combustibil, puternic şi plăcut la condus</h1>
            </header>
            <div class="bto-body">
                <div class="abstract">
                    <div>Indiferent dacă preferaţi motorul pe benzină sau diesel, transmisia manuală sau automată, Tourneo Connect vă oferă o multitudine de opţiuni. Oricare ar fi pachetul motor-transmisie pe care &icirc;l alegeţi, veţi beneficia de performanţe fără compromis şi eficienţă excepţională a combustibilului: &icirc;n jur de 24% mai multă economie cu motorul revoluţionar EcoBoost de 1,0 l. </div>
                    <div><br>
                    </div>
                    <div>Mulţumită designului avansat al şasiului şi al suspensiei, precum şi tracţiunii faţă şi servodirecţiei, este uşor să uitaţi că sunteţi la volanul unui vehicul spaţios de transportat persoane.</div>
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
                <li><a href='#tab1' class='omt_'>Putere</a></li>
                <li><a href='#tab2' class='omt_'>Economie</a></li>
                <li><a href='#tab3' class='omt_'>Manevrabilitate</a></li>
            </ul>
        </nav>
    </div>
    <!-- BEGIN [MidPageTabs] -->
    <div class="innertab-wrapper">
        <!--<div id='tab1' class="mp-tab-wrapper">
        <h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Putere</a></h2> -->
        <div id='tab1' class="tab-content" style="display:none;">
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">

                            <img alt="Motor Ford EcoBoost" title="Motor Ford EcoBoost" src="/assets/img/tourneo_connect/1214466875045.jpg">

                    </div>
                    <header class="bti-title">Profitaţi la maximum de motorul dumneavoastră pe benzină</header>
                    <div class="bti-body">
                        <div class="abstract">
                            <div>Noul motor pe benzină EcoBoost de 1 litru, cu 3 cilindri, dezvoltă 100 CP şi un cuplu de 170 Nm cu o transmisie manuală cu şase trepte de viteză. &Icirc;n combinaţie cu alte tehnologii de economisire a combustibilului, precum Auto-Start-Stop, acest motor premiat vă asigură puterea la care v-aţi aştepta de la un motor de 1,6 litri convenţional, &icirc;nsă utilizează cu circa 24% mai puţin combustibil, av&acirc;nd emisii de CO<sub>2</sub> cu 25% mai reduse, de numai 129 g/km. Dacă doriţi un sistem automat, motorul EcoBoost de 1,6 litri, cu 150 CP şi cuplu de 240 Nm, este livrat cu transmisie automată cu şase trepte de viteză (nu este disponibil cu tehnologia Auto-Start-Stop). </div>
                            <br>
                        </div>
                    </div>
                </article>
            </section>
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">

                            <img alt="Motoare diesel Ford TDCi" title="Motoare diesel Ford TDCi" src="/assets/img/tourneo_connect/1214466876435.jpg">

                    </div>
                    <header class="bti-title">Motoare diesel puternice şi eficiente din punct de vedere al consumului de combustibil</header>
                    <div class="bti-body">
                        <div class="abstract">
                            <div>Dacă preferaţi motorina, puteţi alege dintre cele trei opţiuni de motoare diesel Duratorq TDCi de 1,6 litri: 75 CP, 200 Nm, transmisie manuală cu cinci trepte de viteză, 95 CP, 230 Nm cu transmisie manuală cu cinci trepte de viteză sau 115 CP, 270 Nm cu transmisie manuală cu şase trepte de viteză. Motoarele de 75 CP şi 95 CP sunt disponibile cu pachete opţionale de economisire a combustibilului, care includ: Auto-Start-Stop, Sistem activ cu obturator pentru grilă, Sistem de management al bateriei şi &Icirc;ncărcare regenerativă inteligentă. </div>
                            <br>
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

                            <img alt="Tourneo Connect Folosi&#355;i mai pu&#355;in combustibil cu func&#355;ia Auto-Start-Stop" title="Tourneo Connect Folosi&#355;i mai pu&#355;in combustibil cu func&#355;ia Auto-Start-Stop" src="/assets/img/tourneo_connect/1214466881610.jpg">

                    </div>
                    <header class="bti-title">Utilizaţi mai puţin combustibil cu ajutorul tehnologiei Auto-Start-Stop</header>
                    <div class="bti-body">
                        <div class="abstract">
                            <div>Atunci c&acirc;nd maşina dumneavoastră se opreşte la semafor sau c&acirc;nd aşteptaţi &icirc;ntr-o coloană, această tehnologie opţională poate opri automat motorul (fără a opri &icirc;nsă alimentarea sistemelor esenţiale, precum ventilaţia, radioul şi Ford SYNC). De &icirc;ndată ce sunteţi gata să plecaţi de pe loc, apăsaţi pe pedala de ambreiaj şi selectaţi prima treaptă de viteză, ca de obicei, iar sistemul porneşte din nou motorul. Sistemul Auto-Start-Stop este deosebit de eficient &icirc;n oraşe, unde poate reduce consumul de combustibil cu p&acirc;nă la 10% (mediu urban).</div>
                            <br>
                        </div>
                    </div>
                </article>
            </section>
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">

                            <img alt="Sistemul Ford Eco Mode" title="Sistemul Ford Eco Mode" src="/assets/img/tourneo_connect/1214466877627.jpg">

                    </div>
                    <header class="bti-title">Un sistem de informare inteligent care vă ajută să conduceţi mai eficient</header>
                    <div class="bti-body">
                        <div class="abstract">
                            <div>Sistemul inovator Ford Eco Mode evaluează &icirc;n mod continuu efectele stilului personal de condus asupra consumului de combustibil. Acesta analizează viteza, schimbarea treptelor de viteză, fr&acirc;narea şi nivelurile de anticipare, plus raportul personal de deplasări pe distanţe scurte şi lungi. Apoi, software-ul inteligent vă oferă recomandări legate de modul de &icirc;mbunătăţire a economiei de combustibil.</div>
                            <br>
                        </div>
                    </div>
                </article>
            </section>
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">

                            <img alt="Tourneo Connect Sistem activ cu obturator pentru gril&#259;" title="Tourneo Connect Sistem activ cu obturator pentru gril&#259;" src="/assets/img/tourneo_connect/1214466878220.jpg">

                    </div>
                    <header class="bti-title">Aerodinamică mai bună pentru economie mai mare</header>
                    <div class="bti-body">
                        <div class="abstract">
                            <div>Atunci c&acirc;nd conduceţi cu viteză redusă, sistemul activ cu obturator pentru grilă ţine orificiile de ventilaţie de la nivelul grilei deschise pentru a răci motorul. C&acirc;nd prindeţi viteză, acesta se poate &icirc;nchide automat, &icirc;mbunătăţind aerodinamica şi ajut&acirc;nd la economisirea de combustibil.</div>
                        </div>
                    </div>
                </article>
            </section>
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">

                            <img alt="&Icirc;nc&#259;rcare regenerativ&#259; inteligent&#259;" title="&Icirc;nc&#259;rcare regenerativ&#259; inteligent&#259;" src="/assets/img/tourneo_connect/1214466874295.jpg">

                    </div>
                    <header class="bti-title">Un mod mai eficient de a vă reîncărca bateria</header>
                    <div class="bti-body">
                        <div class="abstract">
                            <div>Spre deosebire de sistemele convenţionale, sistemul de &icirc;ncărcare regenerativă inteligentă re&icirc;ncarcă bateria doar atunci c&acirc;nd este nevoie şi, ori de c&acirc;te ori este posibil, evită realizarea acestei operaţiuni atunci c&acirc;nd apăsați pedala de acceleraţie. Acest lucru poate reduce şi mai mult consumul de combustibil şi nivelul de emisii. </div>
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

                            <img alt="Tourneo Connect Manevrabilitate excelent&#259;" title="Tourneo Connect Manevrabilitate excelent&#259;" src="/assets/img/tourneo_connect/1214466878294.jpg">

                    </div>
                    <header class="bti-title">Manevrabilitate excelentă, care se află în permanenţă sub controlul dumneavoastră</header>
                    <div class="bti-body">
                        <div class="abstract">
                            <div>Proiectată pentru a vă oferi control şi confort maxim la volan, maşina este construită, de asemenea, pentru a vă asigura linişte şi &icirc;ncredere la viteze mari, &icirc;n condiţii de carosabil ud sau uscat, cu sau fără pasageri la bord. </div>
                            <br>
                            <div>Sistemul de suspensii &icirc;mbunătăţit şi bara antiruliu vă asigură deplasare, manevrabilitate şi stabilitate excelente. </div>
                            <br>
                            <div>Volanul este reglabil pe &icirc;nălţime şi pe ad&acirc;ncime, astfel &icirc;nc&acirc;t să vă puteţi găsi poziţia de condus ideală. Iar cu schimbătorul de viteze compact, poziţionat perfect, vă veţi bucura de răspuns şi reacţii excelente prin intermediul comenzilor. </div>
                            <br>
                        </div>
                    </div>
                </article>
            </section>
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">

                            <img alt="Tourneo Connect Transmisie cu 5 sau 6 trepte de vitez&#259;" title="Tourneo Connect Transmisie cu 5 sau 6 trepte de vitez&#259;" src="/assets/img/tourneo_connect/1214466877479.jpg">

                    </div>
                    <header class="bti-title">Condus uşor şi diametru de bracaj redus</header>
                    <div class="bti-body">
                        <div class="abstract">
                            <div>Cu o transmisie cu 5 sau 6 trepte de viteză şi cuplu ridicat al motorului, beneficiaţi de puterea de care aveţi nevoie cu mai puţine schimbări ale treptelor de viteză. Cu un diametru de bracaj de doar 11,3 m, veţi fi, de asemenea, mai puţin stresat atunci c&acirc;nd va trebui să &icirc;ntoarceţi maşina pe străzi aglomerate.</div>
                            <br>
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
<script id="TagIT.load" src='/cs/ContentServer?pagename=RORO4_ENGINE/script/packager&c=Page&cid=1205056903983&location=load&isMobile=false&require=main' defer></script>
</div>