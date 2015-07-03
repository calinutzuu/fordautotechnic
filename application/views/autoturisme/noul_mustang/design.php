<script type="text/javascript">
    // mobile sniffer
    ForceRedirectUserAgents = 'android,iphone,blackberry';
    ForceRedirectUserAgentsBypass = 'Win64,Win32';
    ForceRedirectMinWidth = '480';
    MobileHomePageRedirectURL = 'Design\/\/m.ford.ro';
</script>
<div id="xAxis-detailed">
    <nav class="breadCrumb" role="navigation">
        <ul itemprop="breadcrumb">
            <li class="home"><a href="../../index" class="om_bc_li" title="Pagina principal&#259;">Pagina
                principal&#259;</a><span></span>
            </li>
            <li><a href="../../Autoturisme" class="om_bc_li">
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
            {"strIntroToFord":" ", "brand":"Ford", "vehicleType":"PV", "catalogId":"NONE", "nameplate":"Mustang", "labelAvailableFrom":"&nbsp;", "formattedCurrency":"", "nameplateText":"Legendar, puternic si dinamic, cu o prezenta distinctiva, nemaiintalnita la o alta masina.", "imagePack":false, "hideVehicleImage":false, "images":[], "backgroundImagePath":["/assets/img/blob/1214485821400.png""null", "null"], "disclaimerTextColor":[null, null, null], "current":true, "cid":"1205078755780", "cta":[], "social":{"facebook":"https://facebook.com", "facebookPage":"fordromania"}, "disclaimer":"Modelul prezentat este un Mustang COUPÉ", "seriesCode":"AUTHORED", "uscCode":"AUTHORED", "presId":"1205065814669", "promos":[], "idf":{"options":[]}}
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
<!-- IntoID ::: articleAssetId -->
<li class="selected"><a href="/Design#primaryTabs"
                        data-ajaxlink="/cs/ContentServer?cid=1205078755780&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205078755473&amp;tabName=Design&amp;c=Page&amp;site=RORO4_ENGINE">Design</a>
<!--This is where the main content for the selected tab will go -->
<!-- secondary tabs -->
<div class="secondary-tabs tab-content">
<nav class="sub-nav">
    <ul>
        <li><a href='#tab1' class='omt_'>Exterior</a></li>
        <li><a href='#tab2' class='omt_'>Interior</a></li>
        <li><a href='#tab3' class='omt_'>Jante</a></li>
    </ul>
</nav>
<!-- isBtfTab : from MidPageTabs true -->
<div class="innertab-wrapper">
<!--  tabTitle : Exterior :: btfTabContent : 1205078755097 :: tabContent :  -->
<div id='tab1' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            Exterior
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Coup&eacute; sau convertible, noul Mustang se distinge prin eleganta, fiind produsul unei atentii obsesive la
            detalii. De la partea frontala stilizata, la lampile spate unice, fiecare aspect este proiectat inteligent
            pentru a oferi placere suprema la volan.</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <img src="/assets/img/mustang/1214486427511.jpg" alt="Mustang"/>

            <p>Mustang</p>
        </div>
        <div class="content-block">
            <img src="/assets/img/mustang/1214486429112.jpg" alt="Mustang coupé"/>

            <p>Mustang coup&eacute</p>

        </div>
        <div class="content-block last">
            <img src="/assets/img/mustang/1214486427945.jpg"

            <p>Mustang convertible</p>

        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img src="/assets/img/mustang/1214486426674.jpg"

            <p>Jante Mustang</p>

        </div>
        <div class="content-block">
            <img src="/assets/img/mustang/1214486427179.jpg"
                 alt="Mustang - exterior stilizat"/>

            <p>Exterior stilizat Mustang</p>

        </div>
        <div class="content-block last">
            <img src="/assets/img/mustang/1214486426842.jpg"
                 alt="Mustang cabrio"/>

            <p>Mustang</p>

        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img src="/assets/img/mustang/1214486427012.jpg"
                 alt="Mustang coupé"/>

            <p>Mustang coup&eacute;</p>

        </div>
        <div class="content-block">
            <img src="/assets/img/mustang/1214486426929.jpg"
                 alt="Mustang coupé"/>

            <p>Mustang coup&eacute;</p>

        </div>
        <div class="content-block last">
            <img src="/assets/img/mustang/1214486429444.jpg"
                 alt="Mustang coupé"/>

            <p>Mustang coup&eacute;</p>

        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <<img src="/assets/img/mustang/1214486426758.jpg"
                  alt="Mustang coupé"/>

            <p>Mustang coup&eacute;</p>

        </div>
        <div class="content-block">
            <img src="/assets/img/mustang/1214486429361.jpg"
                 alt="Mustang coupé"/>

            <p>Mustang coup&eacute;</p>

        </div>
        <div class="content-block last">
            <img src="/assets/img/mustang/1214486427095.jpg"
                 alt="Mustang coupé"/>

            <p>Mustang coup&eacute;</p>

        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img src="/assets/img/mustang/1214486428277.jpg"
                 alt="Mustang coupé"/>

            <p>Mustang coup&eacute;</p>

        </div>
        <div class="content-block">
            <img src="/assets/img/mustang/1214486428360.jpg"
                 alt="Mustang coupé"/>

            <p>Mustang coup&eacute;</p>

        </div>
        <div class="content-block last">
            <p>

            <div> </div>
            </p>
        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img src="#" alt=""/>

            <h3 class="bigHeading02">
            </h3>

            <p>

            <p>Imaginile utilizate sunt cu titlu de prezentare si este posibil sa nu reflecte specificatiile
                actuale.</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Interior :: btfTabContent : 1205078754052 :: tabContent :  -->
<div id='tab2' class="secondary-tab-content">
    <header class="intro-header">
        <h1 class="bigHeading">
            Interior
        </h1>
        <span class="highlighter"></span>

        <p class="intro-text">

        <p>Interiorul inspirat de cabinele pilotilor iti pune la indemana, in mod intuitiv, toate comenzile, in timp ce
            cadranele analogice iti ofera un raspuns digital.<br> <br> Preia controlul volanului si simte cum masina
            prinde viata in mainile tale.</p>
        </p>
    </header>
    <article class='three-column'>
        <div class="content-block">
            <img src="/assets/img/mustang/1214486427428.jpg"
                 alt="SYNC 2"/>

            <p>SYNC 2</p>

        </div>
        <div class="content-block">
            <img src="/assets/img/mustang/1214486429027.jpg"
                 alt="Control electronic al temperaturii"/>

            <p>Control electronic al temperaturii</p>

        </div>
        <div class="content-block last">
            <img src="/assets/img/mustang/1214486427862.jpg"
                 alt="Plansa de bord"/>

            <p>Plansa de bord</p>

        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img src="/assets/img/mustang/1214486429278.jpg"
                 alt="Finisaje de calitate superioara, din piele"/>

            <p>Finisaje de calitate superioara, din piele</p>

        </div>
        <div class="content-block">
            <img src="/assets/img/mustang/1214486428526.jpg"
                 alt="Finisaje de calitate superioara"/>

            <p>Finisaje de calitate superioara</p>

        </div>
        <div class="content-block last">
            <img src="/assets/img/mustang/1214486428111.jpg"
                 alt="Panou de bord"/>

            <p>Comenzi pe volan</p>

        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <img src="/assets/img/mustang/1214486429610.jpg"
                 alt="Buton Power Start"/>

            <p>Buton Power Start</p>

        </div>
        <div class="content-block">
            <img src="/assets/img/mustang/1214486429195.jpg"
                 alt="Interior premium"/>

            <p>Interior premium</p>

        </div>
        <div class="content-block last">
            <img src="/assets/img/mustang/1214486428858.jpg"
                 alt="Finisaje premium din piele"/>

            <p>Finisaje premium din piele</p>

        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <p>

            <p>Imaginile utilizate sunt cu titlu de prezentare si este posibil sa nu reflecte specificatiile
                actuale.</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle : Jante :: btfTabContent : 1205078755083 :: tabContent :  -->
<div id='tab3' class="secondary-tab-content">
    <article class='three-column'>
        <div class="content-block">
            <img src="/assets/img/mustang/1214486427262.jpg"
                 alt="Jante EcoBoost"/>

            <p>Jante EcoBoost</p>

        </div>
        <div class="content-block">
            <img src="/assets/img/mustang/1214486427679.jpg"
                 alt="Jante GT"/>

            <p>Jante GT</p>

        </div>
        <div class="content-block last">
            <img src="/assets/img/mustang/1214486428775.jpg"
                 alt="Pachet personalizat jante UE - optional"/>

            <p>Pachet personalizat jante UE - optional</p>

        </div>
    </article>
    <article class='three-column'>
        <div class="content-block">
            <p>

            <p>Imaginile utilizate sunt cu titlu de prezentare si este posibil sa nu reflecte specificatiile
                actuale.</p>
            </p>
        </div>
    </article>
</div>
<!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
<!-- BEGIN [MidPageTabs] -->
<!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Exterior</a></h2> -->
<!--</div>-->
<!--<div id='tab2' class="mp-tab-wrapper">
<h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">Interior</a></h2> -->
<!--</div>-->
<!--<div id='tab3' class="mp-tab-wrapper">
<h2><a href='#tab3' class="mp-tab omt_xd_mt_ti">Jante</a></h2> -->
<!--</div>-->
<!-- END [MidPageTabs] -->
<!--  tabTitle :  :: btfTabContent :  :: tabContent :  -->
<!-- BEGIN [MidPageTabs] -->
<!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Exterior</a></h2> -->
<!--</div>-->
<!--<div id='tab2' class="mp-tab-wrapper">
<h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">Interior</a></h2> -->
<!--</div>-->
<!--<div id='tab3' class="mp-tab-wrapper">
<h2><a href='#tab3' class="mp-tab omt_xd_mt_ti">Jante</a></h2> -->
<!--</div>-->
<!-- END [MidPageTabs] -->
</div>
</div>
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205078755780&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205078756747&amp;tabName=ExperientaLaVolan&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="/Autoturisme/NoulMustang/ExperientaLaVolan#primaryTabs" class=" "
       data-ajaxlink="/Autoturisme/NoulMustang/ExperientaLaVolan">Experien&#539;a la volan</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205078755484 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205078755780&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205078751605&amp;tabName=Performanta&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="/Autoturisme/NoulMustang/Performanta#primaryTabs" class=" "
       data-ajaxlink="/Autoturisme/NoulMustang/PerformantaSiEficienta">Performan&#355;&#259; &#351;i  eficien&#355;&#259;</a>
    <!-- secondary tabs -->
    <!--  midPageTabId : 1205078752041 -->
</li>
<!--  isBtfTab  -->
<!--  tabUrl /cs/ContentServer?cid=1205078755780&amp;pagename=ENGInE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2FStateChangeJSON&amp;pid=1205078754606&amp;tabName=SigurantaSiSecuritate&amp;c=Page&amp;site=RORO4_ENGINE -->
<li><a href="/Autoturisme/NoulMustang/SigurantaSiSecuritate#primaryTabs" class=" "
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
<script src="../../cs/ContentServer3a7e?pagename=ENGInE/script/messaging/core"></script>
<script id="TagIT.load"
        src='../../cs/ContentServer461f?pagename=RORO4_ENGINE/script/packager&amp;c=Page&amp;cid=1205078755473&amp;location=load&amp;isMobile=false&amp;require=main'
        defer></script>
</div>
