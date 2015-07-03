<script type="text/javascript">
    // mobile sniffer
    ForceRedirectUserAgents = 'android,iphone,blackberry';
    ForceRedirectUserAgentsBypass = 'Win64,Win32';
    ForceRedirectMinWidth = '480';
    MobileHomePageRedirectURL = 'ExperientaLaVolan.html\/\/m.ford.ro';
</script>
<div id="xAxis-detailed">
    <nav class="breadCrumb" role="navigation">
        <ul itemprop="breadcrumb">
            <li class="home"><a href="../../index.html" class="om_bc_li" title="Pagina principal&#259;">Pagina principal&#259;</a><span></span>
            </li>
            <li><a href="/Autoturisme" class="om_bc_li">
                Autoturisme
            </a><span></span></li>
            <li>Mustang</li>
        </ul>
    </nav>
    <script>
        var vehicleimagepackpresid = '1205065814669';
        var vehicleimagepackyear = 'NONE';
        var googleAdServerNameplateId = 'AUTHORED';
        var googleAdServerNameplateName = 'TBD';
    </script>
    <div class="fblike-locale">ro_RO</div>
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
            {"strIntroToFord":" ", "brand":"Ford", "vehicleType":"PV", "catalogId":"NONE", "nameplate":"Mustang", "labelAvailableFrom":"&nbsp;", "formattedCurrency":"", "nameplateText":"Legendar, puternic si dinamic, cu o prezenta distinctiva, nemaiintalnita la o alta masina.", "imagePack":false, "hideVehicleImage":false, "images":[], "backgroundImagePath":["/assets/img/blob/1214485821400.png", "null", "null"], "disclaimerTextColor":[null, null, null], "current":true, "cid":"1205078755780", "cta":[], "social":{"facebook":"https://facebook.com", "facebookPage":"fordromania"}, "disclaimer":"Modelul prezentat este un Mustang COUPÉ", "seriesCode":"AUTHORED", "uscCode":"AUTHORED", "presId":"1205065814669", "promos":[], "idf":{"options":[]}}
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
        <div itemscope itemtype="http://schema.org/ImageObject">
            <ul class="nameplate x-axis" id="vvmRoot">
                <li class="default-nameplate-vehicle"
                    style="background-image:url(/assets/img/blob/1214485821400.png)">
                    <div class="layered-nameplate-image">
                        <div class="image-holder">
                        </div>
                    </div>
                    <aside class="nameplate-disclaimer ">
                        Modelul prezentat este un Mustang COUPÉ
                    </aside>
                </li>
            </ul>
            <div itemscope itemtype="http://schema.org/Product" id="nameplateDetails" class="nameplate-vehicle">
                <!--the text description-->
                <div class="name-plate-text">
                    <p class="intro"></p>

                    <h1 class="bigHeading">
                        <span itemprop="model" itemscope itemtype="http://schema.org/Organization"
                              class="mark">Ford</span>
                        <span itemprop="member" class="nameplate boldTxt">Mustang</span>
                    </h1>
                    <!--The price-->
                    <!--The blurb-->
                    <p class="blurb">
                        Legendar, puternic si dinamic, cu o prezenta distinctiva, nemaiintalnita la o alta masina.
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
<section id="primary-tab-content" class="nameplate-tab-content" data-dynamic-tabcontent="true"
         data-siteterm-backtotop="Back To Top !!!">
    <div class="tab-wrapper">
        <nav class="tabs" id="primaryTabs">
            <ul>
                <!--  isBtfTab true -->
                <!--  tabUrl /cs/ContentServer?cid=1205078755780&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE -->
                <li><a href="PrezentareGenerala#primaryTabs" class=" "
                       data-ajaxlink="/cs/ContentServer?cid=1205078755780&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;c=Page&amp;site=RORO4_ENGINE">Prezentare
                    generala</a>
                    <!-- secondary tabs -->
                    <!--  midPageTabId : 1205078756568 -->
                </li>
                <!--  isBtfTab  -->
                <!--  tabUrl /cs/ContentServer?cid=1205078755780&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205078755473&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE -->
                <li><a href="Design#primaryTabs" class=" "
                       data-ajaxlink="/cs/ContentServer?cid=1205078755780&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205078755473&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE">Design</a>
                    <!-- secondary tabs -->
                    <!--  midPageTabId : 1205078756758 -->
                </li>
                <!--  isBtfTab  -->
                <!--  tabUrl /cs/ContentServer?cid=1205078755780&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205078756747&amp;tabName=ExperientaLaVolan&amp;c=Page&amp;site=RORO4_ENGINE -->
                <!-- IntoID ::: articleAssetId -->
                <li class="selected"><a href="ExperientaLaVolan#primaryTabs"
                                        data-ajaxlink="/cs/ContentServer?cid=1205078755780&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205078756747&amp;tabName=ExperientaLaVolan&amp;c=Page&amp;site=RORO4_ENGINE">Experienta
                    la volan</a>
                    <!--This is where the main content for the selected tab will go -->
                    <!-- secondary tabs -->
                    <div class="secondary-tabs tab-content">
                        <nav class="sub-nav">
                            <ul>
                                <li><a href='#tab1' class='omt_'>Tehnologii</a></li>
                                <li><a href='#tab2' class='omt_'>Manevrabilitate</a></li>
                            </ul>
                        </nav>
                        <!-- isBtfTab : from MidPageTabs true -->
                        <div class="innertab-wrapper">
                            <!--  tabTitle : Tehnologii :: btfTabContent : 1205078755504 :: tabContent :  -->
                            <div id='tab1' class="secondary-tab-content">
                                <article class="content-column left">
                                    <div class="img-column">
                                            <img src="/assets/img/mustang/1214486427338.jpg"
                                            alt="FORD SYNC 2"/>
                                    </div>
                                    <div class="content">
                                        <h3 class="bigHeading02">
                                            Cea mai recenta tehnologie hands-free
                                        </h3>

                                        <p>

                                        <p>Ford SYNC 2 cu comanda vocala si ecran tactil ridica sistemele de informatii
                                            si divertisment la un nivel superior, prin adaugarea unui ecran tactil color
                                            de 8&rdquo; (optional). Acest afisaj de inalta rezolutie iti ofera control
                                            intuitiv asupra mai multor functii cheie, inclusiv a telefonului, a
                                            sistemului audio, climatizarii si, optional, navigatiei, prin intermediul
                                            comenzilor vocale sau tactile.</p>
                                        </p>
                                    </div>
                                </article>
                                <article class='two-column'>
                                    <div class="content-block">
                                        <img src="/assets/img/mustang/1214486428688.jpg"
                                                alt="Sistem audio"/>

                                        <h3 class="bigHeading02">
                                            Un sistem audio impresionant
                                        </h3>

                                        <p>

                                        <p>Sistemul audio Shaker Pro de 390 wati este prevazut cu radio DAB şi AM/FM
                                            stereo, precum si cu un player de CD/MP3, cu capacitate pentru un CD.
                                            Douasprezece boxe, inclusiv un subwoofer de 8 inch (20,32 cm) montat in
                                            portbagaj iti ofera claritate a sunetului, indiferent de puterea pentru care
                                            optezi.</p>
                                        </p>
                                    </div>
                                    <div class="content-block last">
                                        <img src="/assets/img/mustang/1214486428939.jpg"
                                                alt="Sistemul de control electronic al stabilitatii"/>

                                        <h3 class="bigHeading02">
                                            Incredere chiar si in conditii dificile:
                                        </h3>

                                        <p>

                                        <p>Sistemul de control electronic al stabilitatii AdvanceTrac<br><br>Sistemul de
                                            control electronic al stabilitatii include o serie de tehnologii pentru a-ti
                                            oferi un plus de siguranta si control. De exemplu, exista senzori care
                                            monitorizeaza in mod constant viteza fiecarei roti in parte, unghiul si
                                            directia masinii, precum si unghiul directiei. Daca trebuie sa virezi brusc
                                            la stanga sau la dreapta, eventual pentru a ocoli un obstacol, sistemul ESC
                                            echilibreaza in mod precis puterea de franare intre roti si poate reduce, de
                                            asemenea, puterea motorului. Acest lucru contribuie la contracararea
                                            subvirarii si supravirarii, facand masina mai stabila si mai usor de
                                            controlat. ESC-ul si controlul tractiunii pot contribui, de asemenea, la
                                            reducerea riscului de invartire in gol a rotilor, in conditii de carosabil
                                            umed sau inghetat.</p>
                                        </p>
                                    </div>
                                </article>
                                <article class='three-column'>
                                    <div class="content-block">
                                        <h3 class="bigHeading02">
                                        </h3>

                                        <p>

                                        <p>Imaginile utilizate sunt cu titlu de prezentare si este posibil sa nu
                                            reflecte specificatiile actuale.</p>
                                        </p>
                                    </div>
                                </article>
                            </div>
                            <!--  tabTitle : Manevrabilitate :: btfTabContent : 1205078752057 :: tabContent :  -->
                            <div id='tab2' class="secondary-tab-content">
                                <article class="content-column left">
                                    <div class="img-column">
                                        <img src="/assets/img/mustang/1214486427588.jpg"
                                            alt="Mustang - suspensii dinamice"/>
                                    </div>
                                    <div class="content">
                                        <h3 class="bigHeading02">
                                            Bucura-te de fiecare calatorie
                                        </h3>

                                        <p>

                                        <p>Cu o structura rigida a caroseriei si o rama solida la baza, suspensii fata
                                            si multi-brat spate atent reglate, vehiculul asigura controlul precis asupra
                                            volanului, raspuns precis al directiei si confort remarcabil in timpul
                                            deplasarii.</p>
                                        </p>
                                    </div>
                                </article>
                                <article class="content-column right">
                                    <div class="content">
                                        <h3 class="bigHeading02">
                                            Confort sporit indiferent de calatorie
                                        </h3>

                                        <p>

                                        <p>Sistemul de directie asistata electric (EPAS) se regleaza automat pentru a
                                            permite virarea mai simpla si mai usoara la parcarea intr-un spatiu restrans
                                            si virarea ferma pentru mai mult control in cazul vitezelor ridicate. Spre
                                            deosebire de servodirectia conventionala, care functioneaza continuu si
                                            consuma energie si combustibil, sistemul EPAS functioneaza numai atunci cand
                                            este necesar, ajutand la imbunatatirea economiei de combustibil. Acest
                                            sistem avansat poate contracara orice dezechilibru al rotilor la viteze
                                            ridicate.</p>
                                        </p>
                                    </div>
                                    <div class="img-column">
                                        <img src="/assets/img/mustang/1214486428021.jpg"
                                            alt="Sistem de directie asistata electric"/>
                                    </div>
                                </article>
                                <article class='three-column'>
                                    <div class="content-block">
                                        <h3 class="bigHeading02">
                                        </h3>
                                        <p>
                                        <p>Imaginile utilizate sunt cu titlu de prezentare si este posibil sa nu
                                            reflecte specificatiile actuale.</p>
                                        </p>
                                    </div>
                                </article>
                            </div>
                            <!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
                            <!-- BEGIN [MidPageTabs] -->
                            <!--<div id='tab1' class="mp-tab-wrapper">
                            <h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Tehnologii</a></h2> -->
                            <!--</div>-->
                            <!--<div id='tab2' class="mp-tab-wrapper">
                            <h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">Manevrabilitate</a></h2> -->
                            <!--</div>-->
                            <!-- END [MidPageTabs] -->
                            <!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
                            <!-- BEGIN [MidPageTabs] -->
                            <!--<div id='tab1' class="mp-tab-wrapper">
                            <h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Tehnologii</a></h2> -->
                            <!--</div>-->
                            <!--<div id='tab2' class="mp-tab-wrapper">
                            <h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">Manevrabilitate</a></h2> -->
                            <!--</div>-->
                            <!-- END [MidPageTabs] -->
                            <!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
                            <!-- BEGIN [MidPageTabs] -->
                            <!--<div id='tab1' class="mp-tab-wrapper">
                            <h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Tehnologii</a></h2> -->
                            <!--</div>-->
                            <!--<div id='tab2' class="mp-tab-wrapper">
                            <h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">Manevrabilitate</a></h2> -->
                            <!--</div>-->
                            <!-- END [MidPageTabs] -->
                        </div>
                    </div>
                </li>
                <!--  isBtfTab  -->
                <!--  tabUrl /cs/ContentServer?cid=1205078755780&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205078751605&amp;tabName=Performanta&amp;c=Page&amp;site=RORO4_ENGINE -->
                <li><a href="Performanta#primaryTabs" class=" "
                       data-ajaxlink="/cs/ContentServer?cid=1205078755780&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205078751605&amp;tabName=Performanta&amp;c=Page&amp;site=RORO4_ENGINE">Performanta</a>
                    <!-- secondary tabs -->
                    <!--  midPageTabId : 1205078752041 -->
                </li>
                <!--  isBtfTab  -->
                <!--  tabUrl /cs/ContentServer?cid=1205078755780&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205078754606&amp;tabName=SigurantaSiSecuritate&amp;c=Page&amp;site=RORO4_ENGINE -->
                <li><a href="SigurantaSiSecuritate#primaryTabs" class=" "
                       data-ajaxlink="/cs/ContentServer?cid=1205078755780&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205078754606&amp;tabName=SigurantaSiSecuritate&amp;c=Page&amp;site=RORO4_ENGINE">Siguranta
                    si securitate</a>
                    <!-- secondary tabs -->
                    <!--  midPageTabId : 1205078755113 -->
                </li>
            </ul>
        </nav>
    </div>
    <article class="nameplate-main-content" id="tabs">
    </article>
</section>
<!-- nosc comp -->

</div>
