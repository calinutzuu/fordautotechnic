<script type="text/javascript">
    // mobile sniffer
    ForceRedirectUserAgents = 'android,iphone,blackberry';
    ForceRedirectUserAgentsBypass = 'Win64,Win32';
    ForceRedirectMinWidth = '480';
    MobileHomePageRedirectURL = 'Dotari\/\/m.ford.ro';
</script>
<div id="xAxis-detailed">
    <nav class="breadCrumb visuallyhidden" role="navigation">
        <ul itemprop="breadcrumb">
            <li class="home"><a href="../../index" data-selenium="breadcrumb_home" class="om_bc_li"
                                title="Pagina principal&#259;">Pagina principal&#259;</a><span></span></li>
            <li data-selenium="breadcrumb_cars"><a href="../../Autoturisme" class="om_bc_li">
                    Autoturisme
                </a><span></span></li>
            <li data-selenium="breadcrumb_nameplate">Ka+</li>
        </ul>
    </nav>
    <script>
        var vehicleimagepackpresid = '1205115909798';
        var vehicleimagepackyear = 'NONE';
    </script>
    <div class="fblike-locale">ro_RO</div>
    <script>
        var googleAdServerNameplateId = 'AUTHORED';
        var googleAdServerNameplateName = 'Ka+';
    </script>

    <div id="fb-root"></div>
    <!-- commented for Release 1604 <section id="billboard" style="height:0;"></section> -->
    <section class="x-axis-wrapper" id="vvmWrapper">
        <div itemscope itemtype="http://schema.org/ImageObject">
            <ul class="nameplate x-axis" id="vvmRoot">
                <li class="default-nameplate-vehicle"
                    style="background-image:url(/assets/img/ka-plus/1214559171550.jpg)">
                    <div class="layered-nameplate-image">
                        <div class="image-holder">
                        </div>
                    </div>
                    <aside class="nameplate-disclaimer style=color:#364957">
                        Modelul prezentat este un Ka+ {1}. Imagine cu titlul de prezentare.
                    </aside>
                </li>
            </ul>
            <div itemscope itemtype="http://schema.org/Product" id="nameplateDetails" class="nameplate-vehicle">
                <!--the text description-->
                <div class="name-plate-text">
                    <p class="intro"></p>

                    <h1 class="bigHeading">
                        <span data-selenium="XA_namePlate" itemprop="member" class="nameplate boldTxt">Ka+</span>
                        <span data-selenium="XA_model" itemprop="model" itemscope
                              itemtype="http://schema.org/Organization" class="mark">Ford</span>
                        <!--The price -->
                    </h1>
                    <!--The blurb -->
                    <p class="blurb">
                        Original, prietenos si cu o manevrabilitate fantastica, Ka+ stabileste standardele pentru
                        masinile mici.
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
    </section>
    <!-- bill board -->
    <!-- commented for Release 1604
<script type="text/x-handlebars-template" id="billboardTemplate">
{{#each vehicles}}
{{#if current}}
<div style="background:url({{billBoardImagePath}}) no-repeat;"></div>
{{/if}}
{{/each}}
</script>
-->
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
            <span itemprop="model" itemscope itemtype="http://schema.org/Organization" class="mark"
                  data-selenium="XA_model">{{brand}}</span>
            <span itemprop="member" class="nameplate boldTxt" data-selenium="XA_namePlate">{{nameplate}}</span>
        </h1>
        <!--The blurb-->
        <p class="blurb">{{nameplateText}}</p>
    </div>
</script>
<script type="text/x-handlebars-template" id="selectorTemplate">
    <a href="{{#if link}}{{link}}{{else}}#{{/if}}"
       class="vehicle-selector box-shadow{{#if className}} {{className}}-wrapper{{/if}}">
        <img
            src="{{#if options}}{{options.0.iconURL}} {{else}} {{#if iconURL}}{{iconURL}} {{else}}{{options.0.imagePath}}{{/if}} {{/if}}"/>
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
    <div data-selenium="conf_vehicle_XA" class="btnLink box-shadow">
        {{/ifCond}}
        {{#ifCond linkType '==' 'secondary'}}
        <div data-selenium="all_models_XA" class="btnLink light box-shadow">
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

<p id="xaxisOverviewDisclaimer" class="disclaimer specific"></p>
<!-- Promos -->
<!-- Tabs -->
<script
    type="text/javascript"> var nameplateTabErrorMsg = 'Ne pare r&#259;u, momentan nu putem s&#259; &icirc;nc&#259;rc&#259;m con&#539;inutul pe care l-a&#539;i solicitat. &Icirc;ncerca&#539;i din nou, mai t&acirc;rziu.'; </script>
<!-- Addthis Replacement : Start -->
<!-- SocialShare END -->

<!-- Addthis Replacement : End -->
<section id="primary-tab-content" class="nameplate-tab-content" data-dynamic-tabcontent="true"
         data-siteterm-backtotop="Back To Top !!!">
<div class="tab-wrapper">
<nav class="tabs" id="primaryTabs">
<ul>
<!--  isBtfTab true -->
<!--  tabUrl /cs/ContentServer?cid=1205115904958&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="/Autoturisme/ka-plus/Prezentare#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205115904958&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE">Prezentare
        generala</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205115906327 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205115904958&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205115907279&amp;tabName=Galerie&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="/Autoturisme/ka-plus/Galerie#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205115904958&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205115907279&amp;tabName=Galerie&amp;c=Page&amp;site=RORO4_ENGINE">Galerie</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205115907324 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205115904958&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205115903517&amp;tabName=Dotari&amp;c=Page&amp;site=RORO4_ENGINE -->
<!-- IntoID ::: articleAssetId -->
<li class="selected"><a href="Dotari#primaryTabs"
                        data-ajaxlink="/cs/ContentServer?cid=1205115904958&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205115903517&amp;tabName=Dotari&amp;c=Page&amp;site=RORO4_ENGINE">Dotari</a>
<!--This is where the main content for the selected tab will go -->
<!-- secondary tabs -->
<div class="secondary-tabs tab-content">
<nav class="sub-nav">
    <ul>
        <li><a href='#tab1' class='omt_tabName'>Experienta condusului</a></li>
        <li><a href='#tab2' class='omt_tabName'>Performanta si eficienta</a></li>
        <li><a href='#tab3' class='omt_tabName'>Confort si avantaje</a></li>
        <li><a href='#tab4' class='omt_tabName'>Siguranta si protectie</a></li>
    </ul>
</nav>
<!-- isBtfTab : from MidPageTabs true -->
<div class="innertab-wrapper">
<!--  tabTitle : Experienta condusului :: btfTabContent : 1205115906917 :: tabContent :  -->
<div id='tab1' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            Condusul este intotdeauna o placere
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Indiferent ca te plimbi prin oras sau mergi pe autostrada, noul KA+ este mereu distractiv de condus si
            reactioneaza prompt.<br> In interior, este plin de tehnologii inteligente, care iti fac viata mai usoara si
            te
            ajuta sa reduceti costurile. <br>De exemplu, Tempomatul adaptiv te poate ajuta sa economisiti carburant,
            mentinand noul KA+ in cadrul unei viteze prestabilite de tine. </p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"><img
                src="/assets/img/ka-plus/1214559180794.jpg"
                alt="Parcare usoara in spatii inguste"/><span class="fv-overlay-icon"></span></div>
        <div class="content">
            <h3 class="bigHeading02">
                Faruri care se aprind automat atunci cand este necesar
            </h3>

            <p>

            <p>Farurile automate sunt prevazute cu senzori care detecteaza lumina atunci cand incepe sa se intunece
                afara sau la schimbarea brusca a conditiilor de iluminat. Aceasta declanseaza aprinderea automata a
                farurilor, ceea ce face condusul mai usor.</p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Drumuri mai putin obositoare, mai economice
            </h3>

            <p>

            <p>Tempomatul adaptiv te ajuta sa-ti mentii vehiculul in limita de viteza prestabilita de tine. Te poate
                ajuta sa economisesti combustibil, sa reduci situatiile de depasire a vitezei si, la fel ca toate
                sistemele de control al vitezei, iti permite sa mentii viteza aleasa fara sa fi nevoit sa tii piciorul
                pe pedala de acceleratie.</p>
            </p>
        </div>
        <div class="img-column"><img
                src="/assets/img/ka-plus/1214559180114.jpg"
                alt="Calatorii mai relaxante"/><span class="fv-overlay-icon"></span></div>
    </article>
    <article class="content-column left">
        <div class="img-column"><img
                src="/assets/img/ka-plus/1214559179860.jpg"
                alt="Pornire din rampa mai usoara"/><span class="fv-overlay-icon"></span></div>
        <div class="content">
            <h3 class="bigHeading02">
                Parcare usoara in spatii inguste
            </h3>

            <p>

            <p>Noul KA+ este suficient de compact si de agil pentru a incapea in locurile de parcare inguste din oras,
                iar senzorii spate te vor ajuta sa parchezi cu toata increderea. Acestia detecteaza momentul in care te
                afli prea aproape de un obiect si te alerteaza vizual pe consola centrala, impreuna cu un avertisment
                sonor.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                src="/assets/img/ka-plus/1214559180464.jpg"
                alt="Mentine controlul in permanenta"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Un plus de control in cazul pornirilor in rampa
            </h3>

            <p>

            <p>Sistemul de asistenta la pornirea din rampa impiedica temporar alunecarea in spate sau in fata, cand
                pornesti din panta. Sistemul functioneaza prin mentinerea presiunii la nivelul sistemului de franare
                pentru un interval suplimentar de 2-3 secunde, asigurandu-ti mai mult timp si control, cand muti
                piciorul de pe pedala de frana, pe cea de acceleratie. Acest sistem este de asemenea util cand opresti
                si pornesti autovehiculul pe suprafete alunecoase.</p>
            </p>
        </div>
        <div class="content-block">
            <img
                src="/assets/img/ka-plus/1214559181134.jpg"
                alt="Manevrabilitate mai usoara"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Directie servoasistata care reactioneaza la orice situatie
            </h3>

            <p>

            <p>Directia servoasistata electric (EPAS) se ajusteaza automat la viteza de rulare si la conditiile de drum.
                La viteze reduse, sistemul face ca rotirea volanului sa fie mai usoara, imbunatatind manevrabilitatea.
                La viteze ridicate, cand ai nevoie de mai mult control , directia devine mai rigida. Acum, cu ajutorul
                controlului asupra devierii de la cursul normal, EPAS ia de asemenea in calcul, vantul care bate din
                fata si alte conditii de drum, in timp ce Controlul activ al vibratiilor reduce vibratiile nedorite,
                resimtite la nivelul volanului.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                src="/assets/img/ka-plus/1214559179435.jpg"
                alt="Vizibilitate excelenta atat ziua, cat si noaptea"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Asistenta de urgenta Ford SYNC
            </h3>

            <p>

            <p>Un aspect important al tehnologiei Ford SYNC care iti poate salva viata este Asistenta de urgenta*. In
                cazul putin probabil al unui accident, cand se activeaza airbagul sau se dezactiveaza pompa de
                carburant, tehnologia poate folosi un telefon mobil imperecheat si conectat prin Bluetooth® pentru a
                efectua automat un apel direct catre Serviciile de urgenta, in locul tau Poti alege sa intrerupi apelul
                sau sa discuti cu personalul serviciului de urgenta, daca e cazul. Extrem de important, sistemul va
                furniza informatii vitale, precum coordonatele tale GPS, chiar si atunci cand ti-ai pierdut
                cunostinta.</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Performanta si eficienta :: btfTabContent : 1205115900272 :: tabContent :  -->
<div id='tab2' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            Tehnologia de ultima generatie reduce costul<br><br> carburantului
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Vei vedea ca a conduce noile KA+ si KA+ Active este pe cat de distractiv, pe atat de economic. Noul motor pe
            benzina, de 1,2 litri, imbunatateste eficienta consumului de carburant. De asemenea, tehnologia
            Auto-Start-Stop poate reduce consumul de combustibil cu pana la 10%. Intervalele lungi dintre service-uri
            fac mai simpla prelungirea duratei de viata a vehiculului.</p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"><img
                src="/assets/img/ka-plus/1214559180628.jpg"
                alt="Un motor nou, care sa aiba grija de combustibilul tau"/><span
                class="fv-overlay-icon"></span></div>
        <div class="content">
            <h3 class="bigHeading02">
                Folosesti mai putin combustibil cu functia pornire-oprire automata
            </h3>

            <p>

            <p>Atunci cand te opresti la semafor sau cand astepti intr-o coloana, aceasta tehnologie poate opri automat
                motorul (fara a opri insa alimentarea sistemelor esentiale, precum farurile, aerul conditionat, radioul
                si sistemul Ford SYNC). De indata ce esti gata sa pleci de pe loc, apasa, ca de obicei, pe pedala de
                ambreiaj si selecteaza prima treapta de viteza, iar sistemul porneste din nou motorul. Sistemul
                Auto-Start-Stop e deosebit de eficient in orase, unde poate reduce consumul de combustibil cu pana la
                10% (in mediul urban).</p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Noul KA+ are grija de carburantul si buzunarul tau
            </h3>

            <p>

            <p>KA+ isi ia puterea de la noul motor avansat, pe benzina, de 1,2 l, si de la cutia de viteza manuala, cu 5
                trepte. Cuplul imbunatatit, chiar si la turatie redusa, ofera o performanta excelenta si o experienta de
                condus mai buna, per total. Motorul este conceput pentru eficienta, asadar consumul de carburant este
                excelent, cu emisii de CO2 reduse. Este disponibila o versiune pe motorina, cu un impresionant motor de
                1,5 l.</p>
            </p>
        </div>
        <div class="img-column"><img
                src="/assets/img/ka-plus/1214559180711.jpg"
                alt="Economiseste bani atunci cand schimbi treptele de viteza"/><span
                class="fv-overlay-icon"></span></div>
    </article>
    <article class="content-column left">
        <div class="img-column"><img
                src="/assets/img/ka-plus/2145591806288.jpg"
                alt="Un motor nou, care sa aiba grija de combustibilul tau"/><span
                class="fv-overlay-icon"></span></div>
        <div class="content">
            <h3 class="bigHeading02">
                Schimbari ale treptelor de viteza, mai eficiente din punct de vedere al consumului de combustibil
            </h3>

            <p>

            <p>Un indicator luminos de pe panoul de bord iti arata momentul optim de schimbare a treptei de viteza,
                pentru o eficienta maxima a consumului de combustibil. Aceasta reprezinta o modalitate simpla si
                eficienta, de a asigura deplasari cat mai economice.</p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Informatii esentiale despre calatorie
            </h3>

            <p>

            <p>Computerul de bord iti ofera informatii si cifre utile despre distanta parcursa, consumul de combustibil,
                viteza si temperatura aerului din exterior. De asemenea, acesta precizeaza „distanta pana la golire”:
                aproximativ ce distanta poti parcurge cu combustibilul ramas in rezervor. Aceasta informatie este utila
                mai ales in timpul calatoriilor lungi sau daca urmeaza sa te deplasezi intr-un loc izolat.</p>
            </p>
        </div>
        <div class="img-column"><img
                src="/assets/img/ka-plus/12145591807111.jpg"
                alt="Economiseste bani atunci cand schimbi treptele de viteza"/><span
                class="fv-overlay-icon"></span></div>
    </article>
</div>
<!--  tabTitle : Confort si avantaje :: btfTabContent : 1205115900570 :: tabContent :  -->
<div id='tab3' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            Simte-te in largul tau, in mai multe feluri
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Noile KA+ si KA+ Active sunt inzestrate cu o gama larga de tehnologii inteligente pentru a asigura o pozitie
            mult mai confortabila, in timpul condusului.<br> Pentru prima oara, si modelul KA+ beneficiaza de sistemul
            avansat de info-divertisment SYNC 3, cu ecran tactil si comanda vocala. </p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"><img
                src="/assets/img/ka-plus/1214559181043.jpg"
                alt="Ford SYNC. Tehnologie avansata hands-free."/><span class="fv-overlay-icon"></span></div>
        <div class="content">
            <h3 class="bigHeading02">
                Preia comanda cu tehnologia avansata hands-free cu SYNC 3
            </h3>

            <p>

            <p>SYNC 3 este cea mai avansata versiune de pana acum. Este mai rapida si mai usor de utilizat, cu comenzi
                vocale imbunatatite si mai multe functii. SYNC 3 include, de asemenea, aplicatiile AppLink, CarPlay si
                Android Auto, pentru a afisa informatiile smartphoneului tau pe ecranul tactilde, 6.5”</span>
            </p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Curata parbrizul rapid cu Quickclear
            </h3>

            <p>

            <p>Aceasta dotare inteligenta e creata pentru a-ti permite sa pornesti rapid in diminetile geroase. Trebuie
                doar sa atingi un buton si filamente extrem de subtiri se supraincalzesc, pentru a curata parbrizul de
                gheata, ceata si abur, precum si pentru a ajuta la dezghetarea stergatoarelor. Sistemul actioneaza in
                cateva secunde, chiar si la temperaturi negative.</p>
            </p>
        </div>
        <div class="img-column"><img
                src="/assets/img/ka-plus/1214559180545.jpg"
                alt="Depozitare inteligenta pentru smartphone-uri"/><span class="fv-overlay-icon"></span></div>
    </article>
    <article class="content-column left">
        <div class="img-column"><img
                src="/assets/img/ka-plus/1214559179943.jpg"
                alt="Coloana ta sonora in miscare"/><span class="fv-overlay-icon"></span></div>
        <div class="content">
            <h3 class="bigHeading02">
                Stergatoare care se regleaza automat, in functie de ploaie
            </h3>

            <p>

            <p>Stergatoarele de parbriz cu senzor de ploaie se activeaza in secunda cand detecteaza stropi de apa pe
                parbrizul autovehiculului, iar apoi isi regleaza viteza pentru a face fata oricaror conditii meteo. Poti
                alege din mai multe niveluri de sensibilitate, care determina cat de multa umiditate trebuie sa se
                acumuleze inainte ca stergatoarele sa se activeze.</p>
            </p>
        </div>
    </article>

    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Porneste masina prin simpla atingere a unui buton
            </h3>

            <p>

            <p>Noul KA+ detecteaza automat prezenta cheii sale unice, chiar daca aceasta se afla in buzunar sau in
                poseta. Asa ca este suficient sa apesi butonul Ford Power iar motorul se va trezi la viata.</p>
            </p>
        </div>
        <div class="img-column"><img
                src="/assets/img/ka-plus/12145591805455.jpg"
                alt="Depozitare inteligenta pentru smartphone-uri"/><span class="fv-overlay-icon"></span></div>
    </article>
    <article class="content-column left">
        <div class="img-column"><img
                src="/assets/img/ka-plus/12145591799433.jpg"
                alt="Coloana ta sonora in miscare"/><span class="fv-overlay-icon"></span></div>
        <div class="content">
            <h3 class="bigHeading02">
                Seteaza temperatura dorita
            </h3>

            <p>

            <p>Cu ajutorul Sistemului optional de climatizare automata, selecteaza pur si simplu temperatura interioara
                dorita, iar aceasta va mentine cu ajutorul sistemului avansat de climatizare.</p>
            </p>
        </div>
    </article>

    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Confort suplimentar cu scaunele incalzite
            </h3>

            <p>

            <p>Scapa de frigul din diminetile geroase cu ajutorul scaunele din fata incalzite. Apasa butonul si mentine
                o temperatura confortabila a scaunului atat timp cat doresti.</p>
            </p>
        </div>
        <div class="img-column"><img
                src="/assets/img/ka-plus/112145591805455.jpg"
                alt="Depozitare inteligenta pentru smartphone-uri"/><span class="fv-overlay-icon"></span></div>
    </article>

    <article class='two-column'>
        <div class="content-block">
            <img
                src="/assets/img/ka-plus/1214559179348.jpg"
                alt="Control al temperaturii - intuitiv"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Un loc sigur pentru toate dispozitivele tale
            </h3>

            <p>

            <p>Sistemul de andocare e conceput pentru a-ti tine dispozitivul de navigare prin satelit, telefonul
                inteligent sau player-ul MP3.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                src="/assets/img/ka-plus/1214559180284.jpg"
                alt="Un plus de confort cu ajutorul scaunelor incalzite"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Utilizarea in comun a masinii, fara probleme, cu ajutorul caracteristicii MyKey
            </h3>

            <p>

            <p>MyKey iti permite sa setezi limita maxima de viteza, semnalul care sa atraga atentia asupra purtarii
                centurii de siguranta si chiar volumul sistemului audio. Aceasta tehnologie este conceputa pentru a-ti
                asigura linistea atunci cand imprumuti masina unui prieten sau unui membru al familiei, deoarece poti
                programa restrictiile dorite pentru cheia respectiva. Poti pastra personal cheia de „admin” si chiar sa
                ai mai multe exemplare din ambele chei, daca doresti.</p>
            </p>
        </div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <img
                src="/assets/img/ka-plus/1214559180963.jpg"
                alt="Oglinzi electrice si pliabile"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Cu oglinzi care se pot proteja singure
            </h3>

            <p>

            <p>Pentru a evita deteriorarea accidentala, oglinzile laterale pliabile electric se pliaza catre interior
                dupa ce ai parcat. Atunci cand sunt rabatate, oglinzile protejeaza, de asemenea, elegantele indicatoare
                integrate.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                src="/assets/img/ka-plus/1214559180034.jpg"
                alt="Ford EasyFuel, pentru alimentari fara probleme"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Ford EasyFuel, pentru alimentari fara probleme
            </h3>

            <p>

            <p>Aceasta tehnologie utila face sa fie practic imposibila alimentarea gresita a masinii, deoarece duza
                pompei nu se va potrivi. Si pentru ca Ford EasyFuel este un sistem fara buson, nu o sa mai ai de-a face
                niciodata cu un buson murdar.</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Siguranta si protectie :: btfTabContent : 1205115904583 :: tabContent :  -->
<div id='tab4' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            Protectie de jur-imprejur
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Promotii per Printre acestea se numara Sistemul de control electronic al stabilitatii, care detecteaza orice
            deviere de la linia de mers aleasa, adica, in cazul in care masina incepe sa derapaze, corecteaza automat
            pozitia pe drum, ajutandu-te sa mentii controlul vehiculului.<br>
            <br>
        </p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"><img
                src="/assets/img/ka-plus/1214559180877.jpg"
                alt="Ford SYNC cu Asistenta de urgenta"/><span class="fv-overlay-icon"></span></div>
        <div class="content">
            <h3 class="bigHeading02">
                Mentine controlul indiferent de conditii
            </h3>

            <p>

            <p>Controlul electronic al stabilitatii monitorizeaza constant evolutia masinii tale. Detecteaza cand un
                vehicul pierde din aderenta si aplica automat un impuls de franare pe roti separate, stabilizand astfel
                masina. Folosind senzorii avansati de la sistemele de franare cu anti-blocare roti si de control al
                tractiunii, functia de control electronic monitorizeaza total comportamentul vehiculului.<br> <br></p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Aderenta maxima cu efort minim
            </h3>

            <p>

            <p>Un sistem avansat de control al tractiunii elimina alunecarea in exces a rotilor si iti asigura cea mai
                buna aderenta, performanta si stabilitate, atunci cand ai mai mare nevoie. Sistemul monitorizeaza
                incontinuu si ajusteaza puterea livrata rotilor individuale ale vehiculului, asigurand contact si
                aderenta maxime, cand accelerezi.</p>
            </p>
        </div>
        <div class="img-column"><img
                src="/assets/img/ka-plus/1214559179777.jpg"
                alt="Protectie completa"/><span class="fv-overlay-icon"></span></div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <img
                src="/assets/img/ka-plus/1214559180372.jpg"
                alt="Adauga mai multi soferi cu MyKey®"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Airbaguri menite sa te protejeze din orice unghi
            </h3>

            <p>

            <p>Pe langa airbagurile frontale pentru pasagerul din fata si sofer si airbagurile pentru genunchii
                soferului, cele laterale ofera protectie la nivelul toracelui si sunt concepute pentru a indeparta
                ocupantul de zona de impact. Pot de asemenea sa ridice bratul ocupantului, asigurand un spatiu mai bun
                intre acesta si structura periculoasa. Airbagurile tip cortina ofera acoperire maxima, iar tetierele te
                protejeaza in cazul unui impact fata-spate. Cu dispozitive de pretensionare a centurilor de siguranta si
                limitatoare de sarcina in fata si in spate, plus sisteme de reamintire pentru centura de siguranta, noul
                KA+ pune siguranta pe primul loc.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                src="/assets/img/ka-plus/1214559179597.jpg"
                alt="Avertizare timpurie in cazul unei pene"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Te avertizeaza daca pneurile pierd presiune.
            </h3>

            <p>

            <p>Intotdeauna este important sa mentii presiunea corecta in pneuri, pentru a te ajuta sa economisesti
                combustibil, sa protejezi pneurile si sa fii in siguranta. De aceea, senzorii monitorizeaza constant
                fiecare roata si te alerteaza daca apare o problema, astfel incat sa poti trage pe dreapta, sa verifici
                si sa umfli pneul sau sa schimbi roata.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                src="/assets/img/ka-plus/1214559180204.jpg"
                alt="Avertismente luminoase pentru franare de urgenta"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Un avertisment in spate, atunci cand franezi brusc
            </h3>

            <p>

            <p>Sistemul cu lumina de franare de urgenta (LFU) aprinde luminile de frana pentru a-i avertiza pe ceilalti
                soferi cand franezi brusc.</p>
            </p>
        </div>
        <div class="content-block">
            <img
                src="/assets/img/ka-plus/1214559179069.jpg"
                alt="Sisteme de securitate inteligente"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Protejarea si securizarea vehiculului impotriva furtului
            </h3>

            <p>

            <p>Noul KA+ este dotat cu incuietori de usi cu telecomanda si cu un sistem de securitate Thatcham. Acesta
                include o alarma de perimetru si un sistem de blocare dubla. Cu ajutorul blocarii duble, usile nu pot fi
                deschise din interior, nici macar daca cineva incerca sa intre in masina spargand un geam lateral.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                src="/assets/img/ka-plus/1214559179518.jpg"
                alt="Mentii controlul indiferent de conditii"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Mentii controlul indiferent de conditii
            </h3>

            <p>

            <p>Controlul electronic al stabilitatii monitorizeaza in mod constant deplasarea masinii si, daca detecteaza
                ca te abati de la traseu sau daca autovehiculul incepe sa patineze, corecteaza automat pozitia de drum.
                Este conceput sa te ajute sa mentii controlul asupra noului KA+ si utilizeaza sistemul ABS pentru a
                preveni amplificarea unei pierderi minore a controlului, ajutand la reducerea distantelor de oprire in
                caz de urgenta.</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
<!-- BEGIN [MidPageTabs] -->
<!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Experienta condusului</a></h2> -->
<!--</div>-->
<!--<div id='tab2' class="mp-tab-wrapper">
<h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">Performanta si eficienta</a></h2> -->
<!--</div>-->
<!--<div id='tab3' class="mp-tab-wrapper">
<h2><a href='#tab3' class="mp-tab omt_xd_mt_ti">Confort si avantaje</a></h2> -->
<!--</div>-->
<!--<div id='tab4' class="mp-tab-wrapper">
<h2><a href='#tab4' class="mp-tab omt_xd_mt_ti">Siguranta si protectie</a></h2> -->
<!--</div>-->
<!-- END [MidPageTabs] -->
</div>
</div>
</li>
</ul>
</nav>
</div>
<article class="nameplate-main-content" id="tabs">
</article>
<!-- Bredcrumb Schema implementation for Primary Tabs-->
<nav class="breadCrumb" role="navigation" style="display: none">
    <ul itemscope itemtype="http://schema.org/BreadcrumbList">
    </ul>
</nav>
<script class="script.EP2_Tab_Bootstrap">
    var __links = document.querySelectorAll('.omt_tabName'), i;
    for (i = 0; i < __links.length; ++i) {
        __links[i].onclick = function (e) {
            TK.broadcast(document.body, "pageload", {tabName: e.currentTarget.innerText.toLowerCase()});
        }
    }
</script>
</section>
<script id="TagIT.load" defer></script>
</div>
