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
            CONDUCI CU MAI MULTA PLACERE
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Usor si agil. Receptiv si sigur. Noul KA+ se descurca fantastic, indiferent de conditiile de condus.<br>
            <br>
            Ofera beneficii excelente, multumita unei serii de tehnologii inteligente, care transforma fiecare drum
            intr-o calatorie usoara si distractiva si care ajuta la protejarea ta si a pasagerilor cu care
            calatoresti.<br>
            <br>
            De la drumuri scurte prin oras la deplasari mai lungi, noul KA+ aduce un plus de placere la fiecare
            calatorie.</p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"> <img
                    src="/assets/img/ka-plus/1214559180794.jpg"
                    alt="Parcare usoara in spatii inguste"/><span class="fv-overlay-icon"></span></div>
        <div class="content">
            <h3 class="bigHeading02">
                Parcare usoara in spatii inguste
            </h3>

            <p>

            <p>Noul KA+ este suficient de compact si de agil pentru a incapea in locurile de parcare inguste din oras,
                iar senzorii spate te vor ajuta sa parchezi cu toata increderea. Acestia detecteaza momentul in care te
                afli prea aproape de un obiect si te alerteaza vizual pe consola centrala, impreuna cu un avertisment
                sonor. Parcare fara probleme si fara sa atingi nimic!</p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Calatorii mai relaxante
            </h3>

            <p>

            <p>Noul KA+ este dotat cu limitator de viteza. Dotare optionala - tempomatul - poate fi folosit pentru a
                seta o viteza cu care te simti confortabil, iar noul KA+ va mentine acea viteza fara a mai fi nevoie sa
                tii piciorul pe pedala de acceleratie. Daca doresti sa accelerezi sau sa incetinesti, nu trebuie decat
                sa actionezi pedala de acceleratie sau frana, ca de obicei, iar aceasta actiune va avea prioritate fata
                de setarea tempomatului. Limitatorul de viteza este extrem de util pentru condusul in zone urbane,
                ajutandu-te sa mentii viteza legala, fiind usor de ajustat pe masura ce limita de viteza se schimba.</p>
            </p>
        </div>
        <div class="img-column"> <img
                    src="/assets/img/ka-plus/1214559180114.jpg"
                    alt="Calatorii mai relaxante"/><span class="fv-overlay-icon"></span></div>
    </article>
    <article class="content-column left">
        <div class="img-column"> <img
                    src="/assets/img/ka-plus/1214559179860.jpg"
                    alt="Pornire din rampa mai usoara"/><span class="fv-overlay-icon"></span></div>
        <div class="content">
            <h3 class="bigHeading02">
                Pornire din rampa mai usoara
            </h3>

            <p>

            <p>Sistemul de asistenta la pornirea din rampa foloseste sistemul de franare pentru a impiedica alunecarea
                in spate a noului KA+ atunci cand pornesti din rampa. Daca sistemul este activ, KA+ ramane pe loc timp
                de 2-3 secunde dupa eliberarea franei. Acest lucru iti ofera timp suficient pentru a muta piciorul pe
                pedala de acceleratie, ajutandu-te sa pornesti mai usor si cu mai multa siguranta in pante dificile, mai
                ales daca ai alte masini parcate in spate.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img
                    src="/assets/img/ka-plus/1214559180464.jpg"
                    alt="Mentine controlul in permanenta"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Mentine controlul in permanenta
            </h3>

            <p>

            <p>Controlul tractiunii ajuta la prevenirea alunecarii rotii (sau a „supra-rotirii”) atunci cand conduci pe
                suprafete alunecoase. Controlul tractiunii este util in special atunci cand trebuie sa accelerezi din
                pozitie de stationare, la viteza redusa sau cand urci o panta. Usureaza condusul, ajutandu-te sa
                pastrezi controlul asupra noului KA+ pe drumuri cu gheata si in conditii de drum umed.</p>
            </p>
        </div>
        <div class="content-block">
           <img
                    src="/assets/img/ka-plus/1214559181134.jpg"
                    alt="Manevrabilitate mai usoara"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Manevrabilitate mai usoara
            </h3>

            <p>

            <p>Sistemul de directie asistata electric (EPAS) se regleaza automat pentru a permite virarea mai simpla si
                mai usoara atunci cand parchezi si pentru a oferi o directie mai ferma, pentru mai mult control, pe
                autostrada. Spre deosebire de servodirectia conventionala (care functioneaza continuu si consuma mai
                multa energie si mai mult combustibil), sistemul nostru EPAS functioneaza numai atunci cand este
                necesar, facilitand un consum redus de combustibil.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/ka-plus/1214559179435.jpg"
                    alt="Vizibilitate excelenta atat ziua, cat si noaptea"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Vizibilitate excelenta atat ziua, cat si noaptea
            </h3>

            <p>

            <p>Multumita designului inteligent, noul KA+ este acum si mai vizibil. Farurile de ceata includ si luminile
                de zi, ajutandu-te sa iesi in evidenta indiferent daca este zi sau noapte, ceata sau cer senin.</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Performanta si eficienta :: btfTabContent : 1205115900272 :: tabContent :  -->
<div id='tab2' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            FOARTE PROMPT SI EFICIENT
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Noul KA+ este conceput pentru a va purta pe tine, pasagerii tai si combustibilul cu care ai alimentat pe un
            drum foarte lung.<br>
            <br>
            Motorul Ti-VCT pe benzina, de 1,2 litri, este receptiv, agil,consuma putin si face ca fiecare litru sa
            conteze.</p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"> <img
                    src="/assets/img/ka-plus/1214559180628.jpg"
                    alt="Un motor nou, care sa aiba grija de combustibilul tau"/><span
                    class="fv-overlay-icon"></span></div>
        <div class="content">
            <h3 class="bigHeading02">
                Un motor nou, care sa aiba grija de combustibilul tau
            </h3>

            <p>

            <p>Noul KA+ este dotat cu un motor Ti-VCT pe benzina, de 1,2 l, cu patru cilindri, prompt si economic. Este
                disponibil in variante de 70 CP sau 85 CP si cu o cutie de viteze manuala cu cinci trepte. Consumul este
                redus, iar nivelurile de emisii de CO<sub>2</sub> sunt foarte mici, de doar 110 g/km.</p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Economiseste bani atunci cand schimbi treptele de viteza
            </h3>

            <p>

            <p>Noul KA+ este echipat cu un indicator pe panoul de bord, care iti indica momentul optim de schimbare a
                treptei de viteza. Acest lucru te ajuta sa mentii turatia la un nivel mai redus, imbunatatind eficienta
                consumului si parcurgand mai multi kilometri, cu un cost mai mic.</p>
            </p>
        </div>
        <div class="img-column"> <img
                    src="/assets/img/ka-plus/1214559180711.jpg"
                    alt="Economiseste bani atunci cand schimbi treptele de viteza"/><span
                    class="fv-overlay-icon"></span></div>
    </article>
</div>
<!--  tabTitle : Confort si avantaje :: btfTabContent : 1205115900570 :: tabContent :  -->
<div id='tab3' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            O MASINA PRACTICA SI UN PLUS DE DISTRACTIE
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Pentru o masina compacta, noul KA+ ofera o gama variata de dotari practice, tehnologii avansate si
            divertisment. Impreuna, toate acestea ofera beneficiile excelente care definesc noul KA+.<br> <br> Ford SYNC
            iti ofera control vocal avansat asupra functiilor telefonului mobil si a muzicii. Noul Dock MyFord reflecta
            importanta pe care o au smartphone-urile in timpul condusului, asigurandu-se ca al tau se afla in siguranta,
            in raza ta vizuala.<br> <br> Dupa cum vei descoperi, noul KA+ este mai mult decat un vehicul care arata
            bine. Este si inteligent si bine crescut.</p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"> <img
                    src="/assets/img/ka-plus/1214559181043.jpg"
                    alt="Ford SYNC. Tehnologie avansata hands-free."/><span class="fv-overlay-icon"></span></div>
        <div class="content">
            <h3 class="bigHeading02">
                Ford SYNC. Tehnologie avansata hands-free.
            </h3>

            <p>

            <p>Sistemul Ford SYNC optional iti permite sa controlezi muzica si sa initiezi sau sa preiei apeluri de pe
                telefonul mobil, utilizand comenzi vocale simple. Sistemul iti va citi cu voce tare mesajele text, va
                reda cantece de pe un dispozitiv USB si poate sa redea in flux muzica de pe un telefon mobil compatibil
                Bluetooth<sup>&reg;</sup>. Iar cu functia AppLink poti controla, prin comanda vocala, cele mai folosite
                aplicatii de Android si iOS. Este aproape ca si cum ai avea un asistent personal cu tine, chiar daca
                esti singur(a) in masina.<br> <br> <span
                    style="font-size: smaller;">*Marca si siglele Bluetooth<sup>&reg;</sup> sunt oferite si detinute de Bluetooth SIG Inc si orice utilizare a acestor marci de catre Ford Motor Company Limited si de catre companiile sale partenere se face in baza unei licente. Alte marci inregistrate si denumiri comerciale apartin proprietarilor lor.</span>
            </p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Depozitare inteligenta pentru smartphone-uri
            </h3>

            <p>

            <p>Dock-ul MyFord reprezinta un concept bine gandit, in care poti pune in siguranta smartphone-ul, playerul
                MP3 sau dispozitivul de navigatie, astfel incat sa il poti vedea clar, fara a lua ochii de la drum.
                Statia de andocare se afla deasupra consolei centrale si este prevazuta cu un capac rabatabil, care
                blocheaza dispozitivul in pozitie fixa.</p>
            </p>
        </div>
        <div class="img-column"> <img
                    src="/assets/img/ka-plus/1214559180545.jpg"
                    alt="Depozitare inteligenta pentru smartphone-uri"/><span class="fv-overlay-icon"></span></div>
    </article>
    <article class="content-column left">
        <div class="img-column"> <img
                    src="/assets/img/ka-plus/1214559179943.jpg"
                    alt="Coloana ta sonora in miscare"/><span class="fv-overlay-icon"></span></div>
        <div class="content">
            <h3 class="bigHeading02">
                Coloana ta sonora in miscare
            </h3>

            <p>

            <p>Noul KA+ poate fi livrat cu unul dintre diferitele sisteme audio disponibile. Sistemul standard Ford
                Stereo include un radio stereo, conector USB, pentru a putea reda muzica de pe smartphone, un doc
                securizat pentru dispozitive si conectivitate Bluetooth.<br>
                <br>
                Sistemul Ford SYNC optional vine in completarea acestuia cu posibilitatea de a-ti controla muzica cu
                ajutorul vocii sau al unei telecomenzi aflate pe volan. Iar cu AppLink, poti controla aplicatii populare
                pentru Android si iOS prin comenzi vocale.</p>
            </p>
        </div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <img
                    src="/assets/img/ka-plus/1214559179348.jpg"
                    alt="Control al temperaturii - intuitiv"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Control al temperaturii - intuitiv
            </h3>

            <p>

            <p>Cu ajutorul sistemului electronic de climatizare automata poti seta temperatura dorita, noul KA+
                mentinand apoi acest nivel constant. Nici prea frig. Nici prea cald. Exact cum trebuie, de fiecare
                data.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/ka-plus/1214559180284.jpg"
                    alt="Un plus de confort cu ajutorul scaunelor incalzite"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Un plus de confort cu ajutorul scaunelor incalzite
            </h3>

            <p>

            <p>Indiferent de conditiile de afara, tu si pasagerul din fata puteti sta confortabil la caldura in noul
                KA+. Scaunele din fata cu incalzire optionala fac din condusul in lunile mai reci o activitate mult mai
                placuta.</p>
            </p>
        </div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <img
                    src="/assets/img/ka-plus/1214559180963.jpg"
                    alt="Oglinzi electrice si pliabile"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Oglinzi electrice si pliabile
            </h3>

            <p>

            <p>Pentru a evita deteriorarea accidentala, oglinzile laterale pliabile electric, oferite ca dotare
                optionala, se pliaza catre interior atunci cand autovehiculul este inchis (sau atunci cand utilizezi
                comutatorul de ajustare a oglinzilor).</p>
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
            UN PLUS DE PROTECTIE PENTRU UN CONDUS MAI SIGUR
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Ford KA+ este dotat cu multe caracteristici de siguranta inteligente, proiectate pentru a te proteja atunci
            cand conduci, precum si atunci cand este parcat.<br>
            <br>
            De exemplu, sistemul Ford SYNC este prevazut cu Asistenta de urgenta, care va apela automat serviciile de
            urgenta in locul tau, in eventualitatea unui accident.<br>
            <br>
            Ford KA+: are intotdeauna grija de tine.</p>
        </p>
    </header>
    <article class="content-column left">
        <div class="img-column"><img
                    src="/assets/img/ka-plus/1214559180877.jpg"
                    alt="Ford SYNC cu Asistenta de urgenta"/><span class="fv-overlay-icon"></span></div>
        <div class="content">
            <h3 class="bigHeading02">
                Ford SYNC cu Asistenta de urgenta
            </h3>

            <p>

            <p>In cazul unui accident, cand se activeaza airbagul sau se dezactiveaza pompa de carburant, SYNC poate
                efectua un apel catre serviciile de urgenta in locul tau. Daca este cazul, poti alege sa intrerupi
                apelul sau sa discuti personal, daca este necesar. Un aspect extrem de important este faptul ca sistemul
                va furniza informatii vitale, precum coordonatele tale GPS, chiar si atunci cand ti-ai pierdut
                cunostinta.<br> <br> <span style="font-size: smaller;">Asistenta de urgenta Ford este o caracteristica SYNC inovatoare, care utilizeaza telefoanele mobile conectate si recunoscute prin Bluetooth<sup>&reg;</sup> pentru a ajuta ocupantii vehiculului sa efectueze un apel direct catre Centrul local de Comunicatii in cazul unei coliziuni a vehiculului, in care are loc activarea unui airbag sau decuplarea pompei de combustibil. Aceasta caracteristica este disponibila in peste 40 de tari si regiuni din Europa.</span>
            </p>
            </p>
        </div>
    </article>
    <article class="content-column right">
        <div class="content">
            <h3 class="bigHeading02">
                Protectie completa
            </h3>

            <p>

            <p>Pe langa airbagurile frontale pentru pasagerul din fata si sofer, exista si airbaguri laterale pentru
                protejarea toracelui si airbaguri tip cortina pentru protejarea capului.</p>
            </p>
        </div>
        <div class="img-column"> <img
                    src="/assets/img/ka-plus/1214559179777.jpg"
                    alt="Protectie completa"/><span class="fv-overlay-icon"></span></div>
    </article>
    <article class='two-column'>
        <div class="content-block">
            <img
                    src="/assets/img/ka-plus/1214559180372.jpg"
                    alt="Adauga mai multi soferi cu MyKey®"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Adauga mai multi soferi cu MyKey<sup>®</sup>
            </h3>

            <p>

            <p>MyKey<sup>&reg;</sup> iti permite sa adaptezi setarile masinii pentru soferi individuali. Asadar, daca
                imprumuti noul KA+ unei alte persoane, poti seta limita maxima de viteza, poti seta un semnal care sa
                atraga atentia asupra purtarii centurii de siguranta si poti chiar sa controlezi volumul sistemului
                audio. Aceasta tehnologie inovatoare te ajuta la mentinerea sigurantei soferilor si a pasagerilor.</p>
            </p>
        </div>
        <div class="content-block last">
            <img
                    src="/assets/img/ka-plus/1214559179597.jpg"
                    alt="Avertizare timpurie in cazul unei pene"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Monitorizare a presiunii in pneuri
            </h3>

            <p>

            <p>Daca unul dintre pneuri incepe sa piarda presiune in timpul deplasarii, sistemul de monitorizare a
                presiunii in pneuri te avertizeaza imediat prin aprinderea unei pictograme pe panoul de bord. Aceasta
                avertizare timpurie iti permite sa opresti in siguranta, sa verifici presiunea in pneuri si sa remediezi
                orice eventuala problema.</p>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
           <img
                    src="/assets/img/ka-plus/1214559180204.jpg"
                    alt="Avertismente luminoase pentru franare de urgenta"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Avertismente luminoase pentru franare de urgenta
            </h3>

            <p>

            <p>Daca trebuie sa franezi de urgenta, luminile de avarie se vor aprinde automat si luminile de frana se vor
                aprinde intermitent. Aceasta combinatie avertizeaza soferii din spate cu privire la o situatie posibil
                periculoasa.</p>
            </p>
        </div>
        <div class="content-block">
            <img
                    src="/assets/img/ka-plus/1214559179069.jpg"
                    alt="Sisteme de securitate inteligente"/><span class="fv-overlay-icon"></span>

            <h3 class="bigHeading02">
                Sisteme de securitate inteligente
            </h3>

            <p>

            <p>Noul KA+ este prevazut cu telecomanda. Optional se poate comanda si alarma de perimetru, pentru sporirea
                sigurantei.</p>
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
