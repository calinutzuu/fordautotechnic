<script type="text/javascript">
    // mobile sniffer
    ForceRedirectUserAgents = 'android,iphone,blackberry';
    ForceRedirectUserAgentsBypass = 'Win64,Win32';
    ForceRedirectMinWidth = '480';
    MobileHomePageRedirectURL = 'Caracteristici\/\/m.ford.ro';
</script>
<div id="xAxis-detailed">
    <nav class="breadCrumb visuallyhidden" role="navigation">
        <ul itemprop="breadcrumb">
            <li class="home"><a href="../../index" data-selenium="breadcrumb_home" class="om_bc_li"
                                title="Pagina principal&#259;">Pagina principal&#259;</a><span></span></li>
            <li data-selenium="breadcrumb_cars"><a href="../../Autoturisme" class="om_bc_li">
                    Autoturisme
                </a><span></span></li>
            <li data-selenium="breadcrumb_nameplate">S-MAX</li>
        </ul>
    </nav>
    <script>
        var vehicleimagepackpresid = '1205093063726';
        var vehicleimagepackyear = 'NONE';
    </script>
    <div class="fblike-locale">en_RO</div>
    <script>
        var googleAdServerNameplateId = 'AUTHORED';
        var googleAdServerNameplateName = 'S-MAX';
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
        var bootstrapVehicleData = {"vehicles": [
            {"strIntroToFord": " NOUL", "selector": {"bodystyles": {"options": [
                {}
            ]}, "exteriorImages": {"options": [
                {}
            ]}, "interiorImages": {"options": [
                {}
            ]}}, "brand": "Ford", "vehicleType": "PV", "catalogId": "NONE", "nameplate": "S-MAX", "labelAvailableFrom": "&nbsp;", "formattedCurrency": "", "nameplateText": "Sapte\/cinci locuri intr-un vehicul pentru activitati sportive, flexibil, care arata si se conduce ca nici un altul.", "imagePack": false, "hideVehicleImage": false, "facebookImagePath": "", "facebookAppId": "facebookAppId", "images": [], "billBoardImagePath": null, "backgroundImagePath": ["/assets/img/s_max/1214513580596.jpg", "null", "null"], "disclaimerTextColor": ["364957", null, null], "current": true, "cid": "1205090681673", "cta": [
                {"linkTitle": "DESCARC\u0102 BRO\u015EUR\u0102 ", "linkURL": "\/SBE\/BrosuriSiPreturi", "linkType": "primary", "linkTarget": "_blank", "omid": "va"},
                {"linkTitle": "\u00CENSCRIE-TE LA TEST DRIVE ", "linkURL": "\/SBE\/TestDrive\/TestDriveAutoturisme?shopcode=AUTHORED&derivcode=AUTHORED", "linkType": "tertiary", "linkTarget": "_blank", "omid": "tr"}
            ], "social": {"facebook": "https://facebook.com", "facebookPage": "fordromania"}, "disclaimer": "MODELUL PREZENTAT ESTE UN S-MAX TITANIUM. IMAGINE CU TITLUL DE PREZENTARE.", "seriesCode": "AUTHORED", "uscCode": "AUTHORED", "presId": "1205093063726", "promos": [], "idf": {"options": []}}
        ]} || {};
        var retrieveUserOptions = JSON.parse(localStorage.getItem('userSelection')) || {};
        //FranciB: injecting and changing user selected angle image trigger by mid page tabs and on page reload.
        //In order to stop the flickering between the default image and selected angle image in the centre stage.
        if (retrieveUserOptions.selectedImageAngle !== (null || "" || undefined)) {
            bootstrapVehicleData.vehicles[0].images = [retrieveUserOptions.selectedImageAngle];
        }
    </script>
    <div id="fb-root"></div>
    <!-- commented for Release 1604 <section id="billboard" style="height:0;"></section> -->
    <section class="x-axis-wrapper" id="vvmWrapper">
        <div itemscope itemtype="http://schema.org/ImageObject">
            <ul class="nameplate x-axis" id="vvmRoot">
                <li class="default-nameplate-vehicle"
                    style="background-image:url(../../cs/BlobServer06f6?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpg&amp;blobwhere=1214513580596&amp;blobkey=id)">
                    <div class="layered-nameplate-image">
                        <div class="image-holder">
                        </div>
                    </div>
                    <aside class="nameplate-disclaimer style=color:#364957">
                        MODELUL PREZENTAT ESTE UN S-MAX TITANIUM. IMAGINE CU TITLUL DE PREZENTARE.
                    </aside>
                </li>
            </ul>
            <div itemscope itemtype="http://schema.org/Product" id="nameplateDetails" class="nameplate-vehicle">
                <!--the text description-->
                <div class="name-plate-text">
                    <p class="intro"> NOUL</p>

                    <h1 class="bigHeading">
                        <span data-selenium="XA_namePlate" itemprop="member" class="nameplate boldTxt">S-MAX</span>
                        <span data-selenium="XA_model" itemprop="model" itemscope
                              itemtype="http://schema.org/Organization" class="mark">Ford</span>
                        <!--The price -->
                    </h1>
                    <!--The blurb -->
                    <p class="blurb">
                        Sapte/cinci locuri intr-un vehicul pentru activitati sportive, flexibil, care arata si se
                        conduce ca nici un altul.
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
<aside class="fb-xaxis-icon">
    <div class="fb-like" data-href="http://www.facebook.com/fordromania" data-send="false" data-layout="button_count"
         data-width="450" data-show-faces="true" data-font="tahoma"></div>
</aside>
<p id="xaxisOverviewDisclaimer" class="disclaimer specific"></p>
<!-- Promos -->
<!-- Tabs -->
<script
    type="text/javascript"> var nameplateTabErrorMsg = 'Ne pare r&#259;u, momentan nu putem s&#259; &icirc;nc&#259;rc&#259;m con&#539;inutul pe care l-a&#539;i solicitat. &Icirc;ncerca&#539;i din nou, mai t&acirc;rziu.'; </script>
<!-- Addthis Replacement : Start -->
<!-- SocialShare END -->
<script type="text/javascript">
    var bootstrapsocialshare = {"shareBtn": {"googleplus": {"url": "https:\/\/plus.google.com\/share", "id": ""}, "facebook": {"url": "https:\/\/www.facebook.com\/sharer\/sharer.php", "id": "619904354830748"}, "email": "{}", "twitter": {"url": "https:\/\/twitter.com\/share", "id": ""}}, "emailSubject": "Un model Ford care poate te intereseaza", "subline": "Distribuie prietenilor t&#259;i!", "enable": true, "items": ["facebook", "twitter", "googleplus", "email"], "emailBodyContent": "Salut, ma uitam pe ford.ro si m-am gandit ca, in mod sigur, ti-ar placea acest model: \r\n\r\n\r\n", "headline": "Ai nevoie de o a doua opinie?"};
</script>
<!-- Addthis Replacement : End -->
<section id="primary-tab-content" class="nameplate-tab-content" data-dynamic-tabcontent="true"
         data-siteterm-backtotop="Back To Top !!!">
<div class="tab-wrapper">
<nav class="tabs" id="primaryTabs">
<ul>
<!--  isBtfTab true -->
<!--  tabUrl /cs/ContentServer?cid=1205090681673&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="PrezentareGenerala#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205090681673&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE">Prezentare
        generala</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205090681126 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205090681673&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205104043571&amp;tabName=Preturi-si-promotii&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="Preturi-si-promotii#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205090681673&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205104043571&amp;tabName=Preturi-si-promotii&amp;c=Page&amp;site=RORO4_ENGINE">Preturi
        si promotii</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205104016391 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205090681673&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205090680147&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="Design#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205090681673&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205090680147&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE">Design</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205090684982 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205090681673&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205090681116&amp;tabName=Caracteristici&amp;c=Page&amp;site=RORO4_ENGINE -->
<!-- IntoID ::: articleAssetId -->
<li class="selected"><a href="Caracteristici#primaryTabs"
                        data-ajaxlink="/cs/ContentServer?cid=1205090681673&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205090681116&amp;tabName=Caracteristici&amp;c=Page&amp;site=RORO4_ENGINE">Caracteristici</a>
<!--This is where the main content for the selected tab will go -->
<!-- secondary tabs -->
<div class="secondary-tabs tab-content">
<nav class="sub-nav">
    <ul>
        <li><a href='#tab1' class='omt_tabName'>Experienta la volan si Confort</a></li>
        <li><a href='#tab2' class='omt_tabName'>Performanta si eficienta</a></li>
        <li><a href='#tab3' class='omt_tabName'>Siguranta si securitate</a></li>
    </ul>
</nav>
<!-- isBtfTab : from MidPageTabs true -->
<div class="innertab-wrapper">
<!--  tabTitle : Experienta condusului :: btfTabContent : 1205090683733 :: tabContent :  -->
<div id='tab1' class="secondary-tab-content">
<header class="intro-header">
    <h1 class="bigHeading">
        Experienta la volan
    </h1>
    <span class="highlighter"></span>

    <p class="intro-text">

    <p>S-MAX imbunatateste fiecare calatorie. In deplasari prin oras sau pe autostrazi, in toate conditiile, o multime
        de tehnologii avansate te asista la fiecare miscare: te ajuta sa parchezi, te avertizeaza in privinta
        vehiculelor din unghiul tau mort si multe altele...</p>
</header>
<article class="content-column left">
    <div class="img-column"><img
            src="/assets/img/s_max/1214504430076.jpg"
            alt="All-Wheel Drive"/><span class="fv-overlay-icon"></span></div>
    <div class="content">
        <h3 class="bigHeading02">
            Incredere chiar si in conditii schimbatoare
        </h3>

        <p>

        <p>Un sistem disponibil cu tractiune integrala (AWD) inteligenta poate determina cata aderenta, cat balans in
            viraje si ce nivel de reactie sunt necesare in conditii de vreme umeda, uscata sau cu gheata si pe teren
            schimbator. Tehnologia poate muta tractiunea pe puntea din fata sau din spate, in functie de cerinte. Iar
            acest sistem de &bdquo;cuplu la cerere&rdquo; asigura o manevrabilitate exceptionala si eficienta
            imbunatatita.</p>
        </p>
    </div>
</article>
<article class="content-column right">
    <div class="content">
        <h3 class="bigHeading02">
            Un plus de control in cazul pornirilor in rampa
        </h3>

        <p>

        <p>Sistemul de asistenta la pornirea din rampa impiedica temporar alunecarea in spate sau in fata, cand pornesti
            din panta. Sistemul functioneaza prin mentinerea presiunii la nivelul sistemului de franare pentru un
            interval suplimentar de 2-3 secunde, asigurandu-ti mai mult timp si control, cand muti piciorul de pe pedala
            de frana, pe cea de acceleratie. Acest sistem este de asemenea util cand opresti si pornesti autovehiculul
            pe suprafete alunecoase.</p>
        </p>
    </div>
    <div class="img-column"><img
            src="/assets/img/s_max/1214513578013.jpg"
            alt="Electric power-assisted steering (EPAS)"/><span class="fv-overlay-icon"></span></div>
</article>
<article class='two-column'>
    <div class="content-block">
        <img
            src="/assets/img/s_max/1214513576186.jpg"
            alt="Front Split View Camera"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Parcare si mai usoara
        </h3>

        <p>

        <p>Sistemul activ de asistenta la parcare te ajuta sa parchezi in spatii cu doar 20% mai lungi sau mai late
            decat autovehiculul. Pur si simplu, apesi un buton, iar senzorii acestui sistem inovator vor identifica
            spatiul suficient de mare, cand treci pe langa el. Apoi sistemul va prelua controlul directiei iar tu doar
            actionezi pedala de acceleratie, cutia de viteze si frana (urmarind instructiunile de pe ecran si semnalele
            sonore).</p>
        </p>
    </div>
    <div class="content-block last">
        <img
            src="/assets/img/s_max/1214513580235.jpg"
            alt="Active Park Assist system"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Directie servoasistata care reactioneaza la orice situatie
        </h3>

        <p>

        <p>CDirectia servoasistata electric (EPAS) se ajusteaza automat la viteza de rulare si la conditiile de drum. La
            viteze reduse, sistemul face ca rotirea volanului sa fie mai usoara, imbunatatind manevrabilitatea. La
            viteze ridicate, cand ai nevoie de mai mult control , directia devine mai rigida. Acum, cu ajutorul
            controlului asupra devierii de la cursul normal, EPAS ia de asemenea in calcul, vantul care bate din fata si
            alte conditii de drum, in timp ce Controlul activ al vibratiilor reduce vibratiile nedorite, resimtite la
            nivelul volanului.</p>
        </p>
    </div>
</article>
<article class='two-column'>
    <div class="content-block">
        <img
            src="/assets/img/s_max/1214513575854.jpg"
            alt="Rear view camera"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Vede ce vine, din ambele parti
        </h3>

        <p>

        <p>O camera minuscula, plasata in partea din fata a noului S-MAX, transmite o imagine pe "ecran impartit" catre
            afisajul multifunctional al masinii, astfel incat sa poti vedea vehiculele, biciclistii sau pietonii care
            vin din ambele parti. Aceasta noua tehnologie optionala se dovedeste de nepretuit atunci cand iesi dintr-un
            spatiu de parcare ingust sau cand te afli pe un drum aglomerat si unde campul vizual iti este
            obstructionat.</p>
        </p>
    </div>
    <div class="content-block last">
        <img
            src="/assets/img/s_max/1214513579452.jpg"
            alt="Lane Keeping System"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Marsarier mai simplu si mai sigur
        </h3>

        <p>

        <p>Stalpi opritori, biciclete, ziduri joase… Camera video pentru vedere spate iti arata tot ce se afla in
            spatele masinii, pe un ecran integrat in consola centrala. Sistemul iti arata obiecte pe care le-ai putea
            omite si in plus, afiseaza linii virtuale pentru a te ajuta sa parchezi si in cele mai inguste spatii.
            Camera se activeaza automat cand selectezi treapta de marsarier.</p>
        </p>
    </div>
</article>

<article class='two-column'>
    <div class="content-block">
        <img
            src="/assets/img/s_max/12113575854.jpg"
            alt="Rear view camera"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Un sistem avansat care te ajuta sa pastrezi banda de rulare
        </h3>

        <p>

        <p>Sistemul de mentinere a benzii de rulare utilizeaza o camera orientata in fata, pentru a detecta daca ai
            iesit accidental de pe banda ta de deplasare. Sistemul de avertizare la parasirea benzii te avertizeaza apoi
            printr-o vibratie a volanului si prin afisarea unui indicator de avertizare vizuala. Daca reactionezi mai
            greu sau nu reactionezi deloc, Sistemul de asistenta la mentinerea benzii iti poate oferi asistenta cu
            cuplul de directie, pentru a te ajuta sa revii pe banda corecta. Aceasta tehnologie e conceputa pentru
            suprafete rutiere cu mai multe benzi (precum autostrazile), asadar se va dezactiva automat la viteze mai
            mici de 65 km/h, putand fi dezactivata si manual.</p>
        </p>
    </div>
    <div class="content-block last">
        <img
            src="/assets/img/s_max/1213579452.jpg"
            alt="Lane Keeping System"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Un sistem care poate reduce gravitatea accidentelor sau le poate evita
        </h3>

        <p>

        <p>Sistemul de asistenta pre-coliziune detecteaza vehiculele si pietonii de pe drumul din fata sau pe cei care
            s-ar putea intersecta cu traseul vehiculului si te avertizeaza cu privire la prezenta acestora. Daca nu
            reactionezi, sistemul aplica automat franele. Aceasta tehnologie e conceputa pentru a ajuta sa reduci riscul
            accidentelor sau pentru a le evita complet, functionand la viteze de pana la 80 km/h.</p>
        </p>
    </div>
</article>

<article class='two-column'>
    <div class="content-block">
        <img
            src="/assets/img/s_max/121575854.jpg"
            alt=""/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Faruri inteligente
        </h3>

        <p>

        <p>Farurile Ford Dynamic LED cu iluminat adaptiv ofera modele de iluminat precis si intens, care se regleaza
            automat, pentru a se potrivi unor conditii de drum si de condus diferite. Sunt incluse, de asemenea,
            luminile de zi iar benzile de semnalizare cu LED-uri inlocuiesc luminile intermitente traditionale, generand
            o secventa luminoasa puternic vizibila. In plus, faza lunga anti-orbire se ajusteaza automat, pentru a nu-i
            orbi pe ceilalti soferi si urmand drumul, aceste faruri noi te ajuta sa vezi mai clar in viraje.</p>
        </p>
    </div>
    <div class="content-block last">
        <img
            src="/assets/img/s_max/121351279452.jpg"
            alt="Lane Keeping System"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Sistem de asistenta pentru unghiul mort
        </h3>

        <p>

        <p>Un Sistem de asistenta pentru unghiul mort (BLIS) te poate ajuta sa schimbi benzile mai in siguranta. Aceasta
            deoarece senzorii RADAR pot scana unghiurile moarte de pe ambele parti ale vehiculului. Si daca detecteaza
            un vehicul pe care tu nu il poti vedea, o lumina portocalie, afisata in mod vizibil in oglinda laterala de
            pe partea corespunzatoare, se va aprinde pentru a te avertiza.</p>
        </p>
    </div>
</article>

<article class='two-column'>
    <div class="content-block">
        <img
            src="/assets/img/s_max/12157585224.jpg"
            alt=""/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Intrari si iesiri din parcare fara stres
        </h3>

        <p>

        <p>Cu ajutorul mai multor tehnologii diferite, Sistemul de asistenta activa la parcare face mai mult decat sa te
            directioneze in locurile de parcare paralela. Sistemul de asistenta la iesirea din parcare (POA) te poate
            ajuta chiar sa iesi din acestea. Sistemul pentru parcare perpendicular (PPA) poate sa detecteze daca masina
            are loc intr-un anumit spatiu si sa te directioneze in locul respectiv. Sistemul de asistenta la parcare
            laterala (SPA) te atentioneaza, de asemenea, daca exista obstacole in lateral.</p>
        </p>
    </div>
    <div class="content-block last">
        <img
            src="/assets/img/s_max/12135129452.jpg"
            alt="Lane Keeping System"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Control maxim in viraje
        </h3>

        <p>

        <p>Controlul vectorului de cuplu de torsiune culege informatii privind suprafata de rulare de 100 de ori pe
            secunda. (Aceasta inseamna de 33 ori mai repede decat o clipire din ochi.) Cu ajutorul acestor informatii,
            sistemul echilibreaza puterea transmisa la nivelul fiecareia dintre cele doua roti din fata. Acest lucru
            maximizeaza aderenta si imbunatateste manevrabilitatea, ajutandu-te sa parcurgi virajele, in zonele serpuite
            ale drumului.</p>
        </p>
    </div>
</article>

<article class='two-column'>
    <div class="content-block">
        <img
            src="/assets/img/s_max/12123585224.jpg"
            alt=""/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Asistenta de urgenta Ford SYNC
        </h3>

        <p>

        <p>Un aspect important al tehnologiei Ford SYNC care iti poate salva viata este Asistenta de urgenta*. In cazul
            putin probabil al unui accident, cand se activeaza airbagul sau se dezactiveaza pompa de carburant,
            tehnologia poate folosi un telefon mobil imperecheat si conectat prin Bluetooth® pentru a efectua automat un
            apel direct catre Serviciile de urgenta, in locul tau Poti alege sa intrerupi apelul sau sa discuti cu
            personalul serviciului de urgenta, daca e cazul. Extrem de important, sistemul va furniza informatii vitale,
            precum coordonatele tale GPS, chiar si atunci cand ti-ai pierdut cunostinta.</p>
        </p>
    </div>

</article>

<header class="intro-header">
    <h1 class="bigHeading">
        CONFORT
    </h1>
    <span class="highlighter"></span>

    <p class="intro-text">
        &nbsp;
    </p>
</header>
<article class="content-column left">
    <div class="img-column"><img
            src="/assets/img/s_max/1214504429910.jpg"
            alt="Panoramic roof"/><span class="fv-overlay-icon"></span></div>
    <div class="content">
        <h3 class="bigHeading02">
            Scaune care asigura sprijin suplimentar… si care iti pot oferi un masaj
        </h3>

        <p>

        <p>Soferul si pasagerul din fata au la dispozitie scaune multi-contur, al caror design le face complet
            reglabile. Drept urmare, acestea pot asigura sprijin suplimentar unde ai nevoie si iti pot oferi chiar si un
            masaj, ajutandu-te sa ramai odihnit in timpul calatoriilor lungi. </p>
        </p>
    </div>
</article>
<article class="content-column right">
    <div class="content">
        <h3 class="bigHeading02">
            Plafon panoramic pentru o senzatie mai luminoasa si mai aerisita
        </h3>

        <p>

        <p>La apasarea unui buton, parasolarul actionat electric din plafon gliseaza, permitand luminii naturale sa
            treaca prin plafonul panoramic. In acelasi timp, geamul care reflecta lumina razelor mentine racoarea si te
            protejeaza de razele UV daunatoare.</p>
        </p>
    </div>
    <div class="img-column"><img
            src="/assets/img/s_max/1214513577014.jpg"
            alt="Climate control"/><span class="fv-overlay-icon"></span></div>
</article>

<article class="content-column left">
    <div class="img-column"><img
            src="/assets/img/s_max/12144429910.jpg"
            alt="Panoramic roof"/><span class="fv-overlay-icon"></span></div>
    <div class="content">
        <h3 class="bigHeading02">
            Cu Sistemul KeyFree ai mai putine griji
        </h3>

        <p>

        <p>Sistemul Ford KeyFree iti permite sa incui si sa descui vehiculul, fara sa scoti cheia din buzunar sau din
            geanta. Ideal pentru situatiile cand ai mainile ocupate. </p>
        </p>
    </div>
</article>


<article class="content-column left">
    <div class="img-column"><img
            src="/assets/img/s_max/1214442912910.jpg"
            alt="Panoramic roof"/><span class="fv-overlay-icon"></span></div>
    <div class="content">
        <h3 class="bigHeading02">
            Seteaza temperatura dorita
        </h3>

        <p>

        <p>Cu ajutorul Sistemului optional de climatizare automata, selecteaza pur si simplu temperatura interioara
            dorita, iar aceasta va mentine cu ajutorul sistemului avansat de climatizare. </p>
        </p>
    </div>
</article>
<article class="content-column right">
    <div class="content">
        <h3 class="bigHeading02">
            Ajutor pentru a sta sub limita de viteza
        </h3>

        <p>

        <p>Sistemul de asistenta inteligenta pentru controlul vitezei e conceput pentru a-ti mari controlul asupra
            vitezei, permitandu-ti sa te concentrezi la drum. Mai intai, camera sistemului de Recunoastere a
            indicatoarelor rutiere detecteaza automat limita de viteza curenta (daca este activat), apoi sistemul
            ajusteaza automat setarea vitezei maxime, la limita respectiva.</p>
        </p>
    </div>
    <div class="img-column"><img
            src="/assets/img/s_max/121476605.jpg"
            alt="Climate control"/><span class="fv-overlay-icon"></span></div>
</article>


<article class='three-column'>
    <div class="content-block">
        <img
            src="/assets/img/s_max/12143577605.jpg"
            alt="Quickclear heated windscreen"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Porneste masina prin simpla atingere a unui buton
        </h3>

        <p>

        <p>Nu mai este nevoie sa folosesti cheia. Trebuie doar sa actionezi butonul de pornire Ford Power in timp ce tii
            ambreiajul apasat (sau pedala de frana pe modelul cu transmisie automata) si motorul prinde viata.</p>
        </p>
    </div>
    <div class="content-block">
        <img
            src="/assets/img/s_max/1214513578103.jpg"
            alt="Multi-Contour seats"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Hayon cu deschidere hands-free pentru deschidere si inchidere fara efort
        </h3>

        <p>

        <p>Daca ai mainile ocupate, iar noul S-MAX detecteaza in apropiere tocul cheii KeyFree, nu trebuie decat sa
            misti piciorul sub bara de protectie din spate si hayonul se va deschide sau se va inchide automat.</p>
        </p>
    </div>
    <div class="content-block last">
        <img
            src="/assets/img/s_max/1214504430000.jpg"
            alt="Flexible seating"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Preia comanda cu tehnologia avansata hands-free cu SYNC 3
        </h3>

        <p>

        <p>SYNC 3 este cea mai avansata versiune de pana acum. Este mai rapida si mai usor de utilizat, cu comenzi
            vocale imbunatatite si mai multe functii. Noua interfata are butoane mai mari pentru o utilizare mai facila,
            iar ecranul tactil colorat recunoaste acum gesturi de strangere si glisare specifice smartphoneurilor si
            tabletelor pentru o navigare si mai intuitiva. SYNC 3 include, de asemenea, aplicatiile AppLink, CarPlay si
            Android Auto*, pentru a afisa informatiile smartphoneului tau pe ecranul tactil.</p>
        </p>
    </div>
</article>

<article class='three-column'>
    <div class="content-block">
        <img
            src="/assets/img/s_max/121432377605.jpg"
            alt="Quickclear heated windscreen"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Sistemul Ford Easy Fuel pentru alimentare fara probleme
        </h3>

        <p>

        <p>Aceasta tehnologie utila face imposibila alimentarea gresita a masinii, deoarece duza pompei nu se va
            potrivi. Mai mult, datorita faptului ca sistemul Ford Easy-Fuel e un sistem fara buson, nu va mai trebui sa
            pui mana vreodata pe un buson murdar.</p>
        </p>
    </div>
    <div class="content-block">
        <img
            src="/assets/img/s_max/1214512578103.jpg"
            alt="Multi-Contour seats"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Utilizarea in comun a masinii, fara probleme, cu ajutorul caracteristicii MyKey
        </h3>

        <p>

        <p>MyKey iti permite sa setezi limita maxima de viteza, semnalul care sa atraga atentia asupra purtarii centurii
            de siguranta si chiar volumul sistemului audio. Aceasta tehnologie este conceputa pentru a-ti asigura
            linistea atunci cand imprumuti masina unui prieten sau unui membru al familiei, deoarece poti programa
            restrictiile dorite pentru cheia respectiva. Poti pastra personal cheia de „admin” si chiar sa ai mai multe
            exemplare din ambele chei, daca doresti.</p>
        </p>
    </div>
    <div class="content-block last">
        <img
            src="/assets/img/s_max/12145030000.jpg"
            alt="Flexible seating"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Tempomat care se poate adapta automat la conditiile de trafic
        </h3>

        <p>

        <p>SCu ajutorul tehnologiei tempomatului adaptiv, alegi viteza cu care doresti sa te deplasezi, iar sistemul o
            va mentine constanta. Daca senzorul RADAR incorporat detecteaza un vehicul in fata, acesta iti va incetini
            vehiculul, pentru a mentine o distanta prestabilita. De indata ce drumul din fata devine liber, sistemul va
            accelera pana la viteza aleasa.</p>
        </p>
    </div>
</article>

</div>
<!--  tabTitle : Performanta si eficienta :: btfTabContent : 1205090683149 :: tabContent :  -->
<div id='tab2' class="secondary-tab-content">
<header class="intro-header">
    <h1 class="bigHeading">
        GENEROS CU PERFORMANTA.<br><br> ECONOM CU COMBUSTIBILUL.
    </h1>
    <span class="highlighter"></span>

    <p class="intro-text">

    <p>A trecut timpul cand trebuia sa alegi intre <br>
        putere si eficienta. In cazul noului S-MAX, designul ingenios, proiectarea <br>
        si tehnologiile inovatoare, precum Auto Start-Stop, iti permit <br>
        sa te bucuri de o combinatie perfecta a acestora.</p>
    </p>
</header>
<article class="content-column left">
    <div class="img-column"><img
            src="/assets/img/s_max/1214513579797.jpg"
            alt="EcoBoost Engine"/><span class="fv-overlay-icon"></span></div>
    <div class="content">
        <h3 class="bigHeading02">
            EcoBoost: putere si eficienta fara compromisuri
        </h3>

        <p>

        <p>Doua variante de motor pe benzina EcoBoost utilizeaza o combinatie de injectie directa a combustibilului
            si un sistem cu turbocompresor, pentru a oferi niveluri remarcabile de performanta si economie: <br>
            <br>
            Un nou motor EcoBoost de 1,5 litri pe benzina se alatura gamei revolutionare EcoBoost. Redus in mod
            inteligent de la modelul EcoBoost de 1,6 litri, motorul asigura un nivel mai redus al emisiilor si o
            economie de combustibil de 6,5 litri/100 km (combinat) si dezvolta o putere de 160 CP. O varianta si mai
            puternica EcoBoost de 2,0 litri dezvolta o putere impresionanta de 240 CP.</p>
        </p>
    </div>
</article>
<article class="content-column right">
    <div class="content">
        <h3 class="bigHeading02">
            O gama larga de optiuni diesel
        </h3>

        <p>

        <p>Preferi un motor diesel? Noul motor avansat TDCi Bi-turbo de 2,0 litri iti ofera patru variante de
            putere: 120 CP, 150 CP, 180 CP si 210 CP. Fiecare motor incorporeaza cea mai recenta tehnologie, pentru
            a imbunatati puterea, cuplul si economia, reducand in acelasi timp emisiile: designul imbunatatit
            asigura o reducere a emisiilor de CO<sub>2</sub> cu 7%, imbunatatind si economia de combustibil</p>
        </p>
    </div>
    <div class="img-column"><img
            src="/assets/img/s_max/1214513577181.jpg"
            alt="Diesel Engine"/><span class="fv-overlay-icon"></span></div>
</article>
<article class="content-column left">
    <div class="img-column"><img
            src="/assets/img/s_max/12145179797.jpg"
            alt="EcoBoost Engine"/><span class="fv-overlay-icon"></span></div>
    <div class="content">
        <h3 class="bigHeading02">
            Puterea de a alege
        </h3>

        <p>

        <p>In cazul noului S-MAX, poti alege dintre trei transmisii diferite. O cutie de viteze manuala, cu 6
            trepte,
            dispune de o capacitate ridicata de cuplu si asigura schimbari uniforme, precise ale treptelor de
            viteza. O
            cutie de viteze automata, cu 6 trepte, dispune, de asemenea, de o capacitate ridicata de cuplu si de
            puncte
            de schimbare atent ajustate, pentru a oferi putere si eficienta maxime. Exista, de asemenea, optiunile
            de
            tractiune integrala si transmisie Ford PowerShift cu 6 trepte de viteza.</p>
        </p>
    </div>
</article>


<header class="intro-header">
    <h1 class="bigHeading">
        PRINDE BINE VOLANUL <br><br> SI PREIA CONTROLUL.
    </h1>
    <span class="highlighter"></span>

    <p class="intro-text">

    <p>Un design rafinat al sasiului, suspensie fata si spate fin ajustata <br>
        si o gama larga de tehnologii inteligente: toate se combina pentru a maximiza performanta <br>
        si pentru a asigura manevrabilitate precisa in orice situatie.</p>
    </p>
</header>
<article class='two-column'>
    <div class="content-block">
        <img
            src="/assets/img/s_max/1214513579713.jpg"
            alt="Transmissions"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Ford PowerShift. Rapid si cu economie de combustibil
        </h3>

        <p>

        <p>Imbinand confortul asigurat de transmisia automata cu controlul asociat unei cutii de viteze manuale,
            aceasta
            cutie de viteze avansata, cu 6 trepte de viteza, preselecteaza urmatoarea treapta pentru tine, pentru a
            nu
            pierde din putere cand treci de la o treapta de viteza, la alta. Schimbarile de trepte uluitor de rapide
            si
            line ale Ford PowerShift fac din condus o experienta mai placuta, economisind in acelasi timp
            combustibil si
            reducand emisiile de CO2 in comparatie cu o cutie de viteze automata obisnuita.</p>
        </p>
    </div>
    <div class="content-block last">
        <img
            src="/assets/img/s_max/1214513580148.jpg"
            alt="Ford PowerShift"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Schimbator cu manete: bucura-te de schimbari rapide ale treptelor de viteza in cazul transmisiei
            automate
        </h3>

        <p>

        <p>Regasindu-se in mod normal pe masinile sport de inalta performanta, comenzile de schimbare automata, cu
            manete, sunt disponibile cu ambele variante de transmisii: PowerShift si automata cu 6 trepte. Aceasta
            tehnologie inspirata de masinile de curse faciliteaza schimbarea rapida si fara efort a treptelor de
            viteza.
            Si deoarece comenzile cu manete sunt montate pe volan, poti schimba treptele mai eficient atunci cand
            virezi.</p>
        </p>
    </div>
</article>

<article class="content-column left">
    <div class="img-column"><img
            src="/assets/img/s_max/1214513577435.jpg"
            alt="Panoramic roof"/><span class="fv-overlay-icon"></span></div>
    <div class="content">
        <h3 class="bigHeading02">
            Suspensie avansata, pentru deplasare si manevrabilitate excelente
        </h3>

        <p>

        <p>Noua si avansata suspensie spate multi-brat, combinata cu o suspensie fata cu lonjeroane McPherson
            imbunatatita, asigura un control excelent asupra rotilor si o calitate superioara a deplasarii, aducand
            un
            plus la manevrabilitatea foarte sensibila la comenzi a masinii. </p>
        </p>
    </div>
</article>


<article class='three-column'>
    <div class="content-block">
        <img
            src="/assets/img/s_max/1214513579978.jpg"
            alt="Ford Eco Mode system"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Folosesti mai putin combustibil, cu functia pornire-oprire automata
        </h3>

        <p>

        <p>Atunci cand te opresti la semafor sau cand astepti intr-o coloana, aceasta tehnologie poate opri automat
            motorul (fara a opri insa alimentarea sistemelor esentiale, precum farurile, aerul conditionat, radioul si
            sistemul Ford SYNC). De indata ce esti gata sa pleci de pe loc, apasa, ca de obicei, pe pedala de ambreiaj
            si selecteaza prima treapta de viteza sau apasa pedala de acceleratie, in cazul unei transmisii automate,
            iar sistemul porneste din nou motorul. Sistemul Auto-Start-Stop e deosebit de eficient in orase, unde poate
            reduce consumul de combustibil cu pana la 10% (in mediul urban).</p>
        </p>
    </div>
    <div class="content-block">
        <img
            src="/assets/img/s_max/1214513578352.jpg"
            alt="Auto Start-Stop"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Un ajutor pentru a conduce mai eficient
        </h3>

        <p>

        <p>Sistemul inovator Ford Eco Mode evalueaza continuu efectele stilului personal de condus asupra consumului de
            combustibil. Acesta analizeaza viteza, schimbarea treptelor de viteza, franarea si nivelurile de anticipare,
            plus raportul personal de deplasari pe distante scurte si lungi. Apoi, software-ul inteligent it ofera
            recomandari legate de modul de imbunatatire a economiei de combustibil.</p>
        </p>
    </div>
    <div class="content-block last">
        <img
            src="/assets/img/s_max/1214513577937.jpg"
            alt="Smart Regenerative Charging"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Un mod mai eficient de a-ti reincarca bateria
        </h3>

        <p>

        <p>Spre deosebire de sistemele conventionale, sistemul de incarcare regenerativa inteligenta reincarca
            bateria doar atunci cand este nevoie si, ori de cate ori este posibil, evita realizarea acestei
            operatiuni atunci cand apesi pedala de acceleratie. Acest lucru poate reduce si mai mult consumul de
            combustibil si nivelul de emisii.</p>
        </p>
    </div>
</article>
</div>
<!--  tabTitle : Siguranta si securitate :: btfTabContent : 1205090679366 :: tabContent :  -->
<div id='tab3' class="secondary-tab-content">
<header class="intro-header">
    <h1 class="bigHeading">
        Siguranta
    </h1>
    <span class="highlighter"></span>

    <p class="intro-text">

    <p>Te poti baza pe un pachet complet de masuri de siguranta. S-MAX e conceput sa ofere tie si pasagerilor tai,
        protectie maxima.</p>
    </p>
</header>
<article class="content-column left">
    <div class="img-column"><img
            src="/assets/img/s_max/1214513576017.jpg"
            alt="Pre-Collision Assist with Pedestrian Detection"/><span class="fv-overlay-icon"></span>
    </div>
    <div class="content">
        <h3 class="bigHeading02">
            Putere suplimentara pentru franare de urgenta
        </h3>

        <p>

        <p>Sistemul de asistenta la franarea de urgenta ajuta vehiculul sa atinga eficienta maxima de franare in cazul
            unei situatii de urgenta. Este controlat automat prin intermediul Sistemului de control electronic al
            stabilitatii, care detecteaza presiunea pe care o aplici pe pedala de frana si creste automat aceasta
            presiune, daca este cazul.</p>
        </p>
    </div>
</article>
<article class="content-column right">
    <div class="content">
        <h3 class="bigHeading02">
            Mentine controlul, indiferent de conditii
        </h3>

        <p>

        <p>Controlul electronic al stabilitatii monitorizeaza constant progresul vehiculului tau. Aceasta detecteaza
            devierile de la traseul ales, ca in cazul in care autovehiculul incepe sa patineze si corecteaza automat
            pozitia pe drum a autovehiculului, ajutandu-te sa mentii controlul asupra acestuia.</p>
        </p>
    </div>
    <div class="img-column"><img
            src="/assets/img/s_max/1214513577349.jpg"
            alt="Ford Adaptive Dynamic LED technology"/><span class="fv-overlay-icon"></span></div>
</article>
<article class='two-column'>
    <div class="content-block">
        <img
            src="/assets/img/s_max/1214513578697.jpg"
            alt="Emergency Brake Assist (EBA)"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Ajutor pentru mentinerea copiilor in siguranta
        </h3>

        <p>

        <p>Puncte ISOFIX pentru fixarea scaunului pentru copii sunt montate pe cel de-al doilea rand de scaune.</p>
        </p>
    </div>
    <div class="content-block last">
        <img
            src="/assets/img/s_max/1214513579029.jpg"
            alt="Blind Spot Information System (BLIS)"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Protectie continua impotriva rasturnarii
        </h3>

        <p>

        <p>Senzorul unic Ford pentru rata de deviere ajuta Sistemul de reducere al efectului de rasturnare sa mentina
            pneurile pe sol, in special cand centrul de greutate e ridicat si cand vehiculul parcurge viraje cu partea
            exterioara mai coborata.</p>
        </p>
    </div>
</article>
<article class='two-column'>
    <div class="content-block">
        <img
            src="/assets/img/s_max/1214513579278.jpg"
            alt="Ford 2 with Emergency Assistance"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Sistemele de siguranta coordonate se activeaza intr-o fractiune de secunda
        </h3>

        <p>

        <p>Ford S-MAX este echipat cu un Sistem intelligent de protectie avansat (IPS), care coordoneaza o serie de
            caracteristici de siguranta pentru a-ti asigura protectie maxima tie si pasagerilor.
        </p>
        </p>
    </div>
    <div class="content-block last">
        <img
            src="/assets/img/s_max/1214513576103.jpg"
            alt="Electronic Stability Programme (ESP)"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Opriri mai rapide in situatii de urgenta
        </h3>

        <p>

        <p>Atunci cand anticipeaza o situatie care sa necesite o oprire de urgenta, Sistemul de control electronic al
            stabilitatii pre-incarca sistemul de franare, eliminand spatiile libere dintre discul de frana si placutele
            de frana. Aceasta functionalitate, numita si pre-umplere electronica a franelor, ajuta la reducerea timpului
            (si a distantei) de franare.</p>
        </p>
    </div>
</article>
<article class='two-column'>
    <div class="content-block">
        <img
            src="/assets/img/s_max/1214513579887.jpg"
            alt="Hill Start Assist"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Un sistem avansat de airbaguri
        </h3>

        <p>

        <p>Un sistem de airbaguri care incorporeaza airbaguri pentru scaunul din fata la nivel pelvian si toracic si
            ofera airbaguri laterale optionale pentru cele doua scaune dinspre exterior de pe cel de-al doilea rand.</p>
        </p>
    </div>
    <div class="content-block last">
        <img
            src="/assets/img/s_max/1214513576435.jpg"
            alt="ISOFIX points"/><span class="fv-overlay-icon"></span>

        <h3 class="bigHeading02">
            Protejarea si asigurarea masinii impotriva hotilor
        </h3>

        <p>

        <p>O alarma Thatcham de categoria 1 este un sistem de protectie sofisticat care se armeaza automat la incuierea
            dubla a masinii si care declanseaza o alarma puternica daca se incearca intrarea fortata, daca autovehiculul
            este ridicat sau daca senzorii de miscare detecteaza miscare in interiorul vehiculului. Tehnologia este
            conceputa, de asemenea, pentru a preveni remorcarea nedorita a vehiculului. Este posibila armarea sistemului
            in mai multe moduri, ceea ce inseamna ca poti alege sa monitorizezi usile, capota sau portbagajul.</p>
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
<h2><a href='#tab3' class="mp-tab omt_xd_mt_ti">Siguranta si securitate</a></h2> -->
<!--</div>-->
<!-- END [MidPageTabs] -->
<!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
<!-- BEGIN [MidPageTabs] -->
<!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Experienta condusului</a></h2> -->
<!--</div>-->
<!--<div id='tab2' class="mp-tab-wrapper">
<h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">Performanta si eficienta</a></h2> -->
<!--</div>-->
<!--<div id='tab3' class="mp-tab-wrapper">
<h2><a href='#tab3' class="mp-tab omt_xd_mt_ti">Siguranta si securitate</a></h2> -->
<!--</div>-->
<!-- END [MidPageTabs] -->
</div>
</div>
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205090681673&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205107569254&amp;tabName=S-MAX-Vignale&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="S-MAX-Vignale#primaryTabs" class=" "
       data-ajaxlink="/cs/ContentServer?cid=1205090681673&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205107569254&amp;tabName=S-MAX-Vignale&amp;c=Page&amp;site=RORO4_ENGINE">S-MAX
        Vignale</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205107569239 -->
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
