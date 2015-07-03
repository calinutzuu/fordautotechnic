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
            <li class="selected"><a href="/Autoturisme/Kuga/Design#primaryTabs"
                                    data-ajaxlink="/Autoturisme/Kuga/Design">Design</a>
            </li>
            <li><a href="/Autoturisme/Kuga/ExperientaLaVolan#primaryTabs" class="om_mt_ti"
                   data-ajaxlink="/Autoturisme/Kuga/ExperientaLaVolan">Experien&#539;a la volan</a>
            </li>
            <li><a href="/Autoturisme/Kuga/PreturisiPromotii#primaryTabs" class="om_mt_ti"
                   data-ajaxlink="/Autoturisme/Kuga/PreturisiPromotii">PRE&#354;URI &#350;I PROMO&#354;II</a>
            </li>
            <li><a href="/Autoturisme/Kuga/PerformantaSiEficienta#primaryTabs" class="om_mt_ti"
                   data-ajaxlink="/Autoturisme/Kuga/PerformantaSiEficienta">Performan&#355;&#259; &#351;i eficien&#355;&#259;</a>
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
            <h1>Design matur</h1>
        </header>
        <div class="bto-body">
            <div class="abstract">
                Stilul interior şi exterior al noului Ford Kuga este cizelat şi sofisticat. Liniile cu caracter
                muscular &icirc;i conferă acestui SUV off-road robusteţea sa caracteristică, iar designul elegant al
                părţii din spate &icirc;i completează imaginea. <br>
                <br>
                Descoperă &icirc;n detaliu designul noului Ford Kuga &icirc;n secțiunile de mai jos.
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
            <li><a href='#tab1' class='omt_'>Exterior</a></li>
            <li><a href='#tab2' class='omt_'>Interior</a></li>
            <li><a href='#tab3' class='omt_'>Culori</a></li>
        </ul>
    </nav>
</div>
<!-- BEGIN [MidPageTabs] -->
<div class="innertab-wrapper">
<!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Exterior</a></h2> -->
<div id='tab1' class="tab-content" style="display:none;">
    <section class="bto-wrapper">
        <article class="bto-item">
            <header class="bto-title">
                <h1></h1>
            </header>
            <div class="bto-body">
                <div class="abstract">
                    Liniile elegante ale noului Ford Kuga sunt puse &icirc;n valoare de elemente de design premium,
                    precum contururi ad&acirc;ncite, grilă spate elegantă, cromată şi şine plafon cu profil redus.
                </div>
                <div class="body">
                </div>
            </div>
        </article>
    </section>
    <section class="igg-wrapper">
        <!--<script type="text/javascript" src="/cs/ContentServer?pagename=ENGInE%2fscript%2fGroupedJS"></script>-->
        <div class="igg-row">
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Ford Kuga" title="Ford Kuga"
                             src="/assets/img/kuga/1214439610586.jpg">



                </div>
                <div class="igg-body">Ford Kuga</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Ford Kuga - profil robust" title="Ford Kuga - profil robust"
                             src="/assets/img/kuga/1214439608030.jpg">

                </div>
                <div class="igg-body">Ford Kuga - profil robust</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Ford Kuga - manevrabilitate" title="Ford Kuga - manevrabilitate"
                             src="/assets/img/kuga/1214439609455.jpg">

                </div>
                <div class="igg-body">Ford Kuga - manevrabilitate</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Ford Kuga design" title="Ford Kuga design"
                             src="/assets/img/kuga/1214439607882.jpg">

                </div>
                <div class="igg-body">Ford Kuga design</div>
            </article>
        </div>
        <div class="igg-row">
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Noul Ford Kuga" title="Noul Ford Kuga"
                             src="/assets/img/kuga/1214439607808.jpg">

                </div>
                <div class="igg-body">Noul Ford Kuga</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Ford Kuga - design sofisticat" title="Ford Kuga - design sofisticat"
                             src="/assets/img/kuga/1214439608252.jpg">

                </div>
                <div class="igg-body">Ford Kuga - design sofisticat</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Ford Kuga design rafinat" title="Ford Kuga design rafinat"
                             src="/assets/img/kuga/1214439607956.jpg">

                </div>
                <div class="igg-body">Ford Kuga design rafinat</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Ford Kuga - profil robust" title="Ford Kuga - profil robust"
                             src="/assets/img/kuga/1214439607277.jpg">

                </div>
                <div class="igg-body">Ford Kuga - profil robust</div>
            </article>
        </div>
        <div class="igg-row">
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Ford Kuga SUV" title="Ford Kuga SUV"
                             src="/assets/img/kuga/1214439608856.jpg">

                </div>
                <div class="igg-body">Ford Kuga SUV</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Ford Kuga  off-road" title="Ford Kuga  off-road"
                             src="/assets/img/kuga/1214439608104.jpg">

                </div>
                <div class="igg-body">Ford Kuga off-road</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Ford Kuga SUV" title="Ford Kuga SUV"
                             src="/assets/img/kuga/1214439607734.jpg">

                </div>
                <div class="igg-body">Ford Kuga SUV</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Ford Kuga design" title="Ford Kuga design"
                             src="/assets/img/kuga/1214439608178.jpg">

                </div>
                <div class="igg-body">Ford Kuga design</div>
            </article>
        </div>
    </section>
</div>
<!--</div>-->
<!--<div id='tab2' class="mp-tab-wrapper">
<h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">Interior</a></h2> -->
<div id='tab2' class="tab-content" style="display:none;">
    <section class="bto-wrapper">
        <article class="bto-item">
            <header class="bto-title">
                <h1></h1>
            </header>
            <div class="bto-body">
                <div class="abstract">
                    Cabina modernă a noului Ford Kuga dispune de accesorii şi finisaje de calitate superioară. Scaunele
                    sport rotunjite, un panou de bord tactil, consola &icirc;n formă unică de &bdquo;coarne de taur&rdquo;
                    şi comutatoarele, instrumentele şi suprafeţele de control perfect detaliate sunt toate rezultatul
                    unei măiestrii de calitate superioară.
                </div>
                <div class="body">
                </div>
            </div>
        </article>
    </section>
    <section class="igg-wrapper">
        <!--<script type="text/javascript" src="/cs/ContentServer?pagename=ENGInE%2fscript%2fGroupedJS"></script>-->
        <div class="igg-row">
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Ford Kuga - plafon panoramic" title="Ford Kuga - plafon panoramic"
                             src="/assets/img/kuga/1214439609530.jpg">

                </div>
                <div class="igg-body">Ford Kuga - plafon panoramic</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Ford Kuga - interior" title="Ford Kuga - interior"
                             src="/assets/img/kuga/1214439610063.jpg">

                </div>
                <div class="igg-body">Ford Kuga - interior</div>
            </article>
        </div>
    </section>
</div>
<!--</div>-->
<!--<div id='tab3' class="mp-tab-wrapper">
<h2><a href='#tab3' class="mp-tab omt_xd_mt_ti">Culori</a></h2> -->
<div id='tab3' class="tab-content" style="display:none;">
    <section class="bto-wrapper">
        <article class="bto-item">
            <header class="bto-title">
                <h1></h1>
            </header>
            <div class="bto-body">
                <div class="abstract">
                    Kuga este disponibil &icirc;ntr-o varietate de culori (solide şi metalice), astfel că sigur vei găsi
                    ceva pe placul tău.
                </div>
                <div class="body">
                </div>
            </div>
        </article>
    </section>
    <section class="igg-wrapper">
        <!--<script type="text/javascript" src="/cs/ContentServer?pagename=ENGInE%2fscript%2fGroupedJS"></script>-->
        <div class="igg-row">
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Kuga in culoarea Panther Black" title="Kuga in culoarea Panther Black"
                             src="/assets/img/kuga/1214439609230.jpg">

                </div>
                <div class="igg-body">Kuga in culoarea Panther Black</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Kuga in culoarea Sterling Grey" title="Kuga in culoarea Sterling Grey"
                             src="/assets/img/kuga/1214439610738.jpg">

                </div>
                <div class="igg-body">Kuga in culoarea Sterling Grey</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Kuga in culoarea Burnished Glow" title="Kuga in culoarea Burnished Glow"
                             src="/assets/img/kuga/1214439609305.jpg">

                </div>
                <div class="igg-body">Kuga in culoarea Burnished Glow</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Kuga in culoarea Moondust Silver" title="Kuga in culoarea Moondust Silver"
                             src="/assets/img/kuga/1214439609080.jpg">

                </div>
                <div class="igg-body">Kuga in culoarea Moondust Silver</div>
            </article>
        </div>
        <div class="igg-row">
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Kuga in culoarea Ginger Ale" title="Kuga in culoarea Ginger Ale"
                             src="/assets/img/kuga/1214439609155.jpg">

                </div>
                <div class="igg-body">Kuga in culoarea Ginger Ale</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Kuga in culoarea Ink Blue" title="Kuga in culoarea Ink Blue"
                             src="/assets/img/kuga/1214439609380.jpg">

                </div>
                <div class="igg-body">Kuga in culoarea Ink Blue</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Kuga in culoarea Blazer Blue" title="Kuga in culoarea Blazer Blue"
                             src="/assets/img/kuga/1214439608930.jpg">

                </div>
                <div class="igg-body">Kuga in culoarea Blazer Blue</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Kuga in culoarea Frozen White" title="Kuga in culoarea Frozen White"
                             src="/assets/img/kuga/1214439609005.jpg">

                </div>
                <div class="igg-body">Kuga in culoarea Frozen White</div>
            </article>
        </div>
    </section>
</div>
<!--</div>-->
</div>
<!-- END [MidPageTabs] -->
</article>
</section>
<!-- nosc comp -->

</div>