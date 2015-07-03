<script type="text/javascript">
    // mobile sniffer
    ForceRedirectUserAgents = 'android,iphone,blackberry';
    ForceRedirectUserAgentsBypass = 'Win64,Win32';
    ForceRedirectMinWidth = '480';
    MobileHomePageRedirectURL = 'http:\/\/m.ford.ro';
    MobileRedirectURL = MobileHomePageRedirectURL + '#';
</script>
<div id="xAxis-detailed">
    <nav class="breadCrumb" role="navigation">
        <ul itemprop="breadcrumb">
            <li class="home"><a href="/" class="om_bc_li" title="Pagina principal&#259;">Pagina
                principal&#259;</a><span></span></li>
            <li><a href="/Autoturisme" class="om_bc_li">
                Autoturisme
            </a><span></span></li>
            <li>B-MAX</li>
        </ul>
    </nav>
    <script>
        var vehicleimagepackpresid = '1205035169292';
        var vehicleimagepackyear = 'YYR';
        var googleAdServerNameplateId = '004';
        var googleAdServerNameplateName = 'B-Max';
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
            {"strIntroToFord":" ", "brand":"Ford", "vehicleType":"PV", "catalogId":"9323", "nameplate":"B-MAX", "labelAvailableFrom":"De la", "formattedCurrency":"16.150 RON", "nameplateText":"Datorit\u0103 sistemului ingenios de deschidere al u\u0219ilor, ai acces mult mai u\u0219or \u00EEn habitaclul ma\u0219inii \u0219i un interior extrem de rafinat \u0219i spa\u021Bios.", "imagePack":true, "hideVehicleImage":false, "images":["/assets/img/b_max/B-MAX_LHD_BurnishedGlow_Front_00001.jpg"], "backgroundImagePath":["/assets/img/b_max/B-MAX_LHD_BurnishedGlow_Front_00001.jpg"], "disclaimerTextColor":[null, null, null], "current":true, "cid":"1205005696537", "cta":[
                {"linkTitle":"MODELE B-MAX", "linkURL":"/Autoturisme/NoulB-MAX/Modele", "linkType":"primary", "linkTarget":"", "omid":"va"},
                {"linkTitle":"DESCARC\u0102 BRO\u015EUR\u0102 ", "linkURL":"\/SBE\/Brosura\/DescarcaBrosura", "linkType":"tertiary", "linkTarget":"_blank", "omid":"tr"},
                {"linkTitle":"\u00CENSCRIE-TE LA TEST DRIVE ", "linkURL":"\/SBE\/TestDrive?shopcode=004", "linkType":"tertiary", "linkTarget":"_blank", "omid":"tr"},
                {"linkTitle":"VREAU SĂ FIU INFORMAT(Ă) ", "linkURL":"/SBE/VreauSaFiuInformata", "linkType":"tertiary", "linkTarget":"", "omid":"tr"}
            ], "social":{"facebook":"https://facebook.com", "facebookPage":"fordromania"}, "disclaimer":"Modelul prezentat este un B-MAX Titanium. Imagine cu titlul de prezentare.", "seriesCode":"J6J", "uscCode":"004", "supportSelector":"true", "supportSeries":"true", "presId":"1205035169292", "promos":[], "idf":{"options":[
                {"dataOverlay":{"mediaType":"Flash", "height":"439", "width":"780"}, "iconURL":"/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobheader=image%2Fjpg&blobwhere=1214480084155&blobkey=id", "link":"/cs/ContentServer?cid=1205020320463&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Flash_C&amp;site=RORO4_ENGINE", "videoSrc":[
                    {"src1":""},
                    {"src2":""}
                ], "youtubeClose":"", "tooltipText":"Ford B-MAX"}
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
                        Modelul prezentat este un B-MAX Titanium. Imagine cu titlul de prezentare.
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
                        <span itemprop="member" class="nameplate boldTxt">B-MAX</span>
                    </h1>
                    <!--The price-->
                    <!--The blurb-->
                    <p class="blurb">
                        Datorită sistemului ingenios de deschidere al ușilor, ai acces mult mai ușor în habitaclul
                        mașinii și un interior extrem de rafinat și spațios.
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
            <li><a href="/Autoturisme/NoulB-MAX/Prezentare#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/NoulB-MAX/Prezentare">Prezentare general&#259;</a>
            </li>
            <li class="selected"><a href="/Autoturisme/NoulB-MAX/Design#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/NoulB-MAX/Design">Design</a>
            </li>
            <li><a href="/Autoturisme/NoulB-MAX/ExperientaLaVolan#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/NoulB-MAX/ExperientaLaVolan">Experien&#539;a la volan</a>
            </li>
            <li><a href="/Autoturisme/NoulB-MAX/PreturisiPromotii#primaryTabs" data-ajaxlink="/Autoturisme/NoulB-MAX/PreturisiPromotii">PRE&#354;URI &#350;I PROMO&#354;II</a>
            </li>
            <li><a href="/Autoturisme/NoulB-MAX/PerformantaSiEficienta#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/NoulB-MAX/PerformantaSiEficienta">Performan&#355;&#259; &#351;i eficien&#355;&#259;</a>
            </li>
            <li><a href="/Autoturisme/NoulB-MAX/Siguranta">Siguran&#539;&#259;</a></li>
        </ul>
    </nav>
</div>
<nav class="sub-nav ">
    <ul>
        <li><a href="/Autoturisme/NoulB-MAX/MaterialeDescarcabile"
                >Materiale Desc&#259;rcabile</a></li>
        <li><a href="/Autoturisme/NoulB-MAX/ListaPreturi"
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
            <h1>Acces mult mai uşor în habitaclu</h1>
        </header>
        <div class="bto-body">
            <div class="abstract">
                <div>Datorită sistemului ingenios de deschidere al ușilor, ai acces mult mai ușor &icirc;n habitaclul
                    mașinii. Alături de un interior extrem de rafinat și spațios, acesta diferenţiază vizibil Ford B-MAX
                    de celelalte automobile din clasa sa.
                </div>
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
            <li><a href='#tab3' class='omt_'>Culori si tapiţerie</a></li>
            <li><a href='#tab4' class='omt_'>Jante</a></li>
            <li><a href='#tab5' class='omt_'>Accesorii</a></li>
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
                    Noul B-MAX are un design exterior unic. Cu ușile deschise, vei observa că montanții centrali, care
                    separă de regulă partea din spate a mașinii de cea din față, au fost integrați &icirc;n uși.
                    Aceasta &icirc;nseamnă că nimic nu mai &icirc;mpiedică accesul extrem de ușor &icirc;n mașină. <br>
                    <br>
                    Explorează designul exterior al mașinii &icirc;n imaginile și filmele de mai jos.
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
                    <img alt="Ford B-MAX &icirc;n ac&#539;iune" title="Ford B-MAX &icirc;n ac&#539;iune"
                         src="/assets/img/b_max/1214464699761.jpg">

                </div>
                <div class="igg-body">Ford B-MAX &icirc;n ac&#539;iune</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">
                    <img alt="Exterior Ford B-MAX 360&deg;" title="Exterior Ford B-MAX 360&deg;"
                         src="/assets/img/b_max/1214464699646.jpg">
                </div>
                <div class="igg-body">Exterior Ford B-MAX 360&deg;</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">
                    <img alt="Montan&#539;i centrali integra&#539;i &icirc;n portiere"
                         title="Montan&#539;i centrali integra&#539;i &icirc;n portiere"
                         src="/assets/img/b_max/1214419930224.jpg">
                </div>
                <div class="igg-body">Montan&#539;i centrali integra&#539;i &icirc;n portiere</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">
                    <img alt="Ford B-MAX" title="Ford B-MAX" src="/assets/img/b_max/1214464695809.jpg">
                </div>
                <div class="igg-body">Ford B-MAX</div>
            </article>
        </div>
        <div class="igg-row">
            <article class="igg-item">
                <div class="igg-image">

                    <img alt="Designul sofisticat al noului B-MAX" title="Designul sofisticat al noului B-MAX"
                         src="/assets/img/b_max/1214419926388.jpg">

                </div>
                <div class="igg-body">Designul sofisticat al noului B-MAX</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                    <img alt="Ford B-MAX - design ingenios al usilor" title="Ford B-MAX - design ingenios al usilor"
                         src="/assets/img/b_max/1214464699416.jpg">

                </div>
                <div class="igg-body">Ford B-MAX - design ingenios al usilor</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                    <img alt="Ford B-MAX &ndash; design unic al caroseriei "
                         title="Ford B-MAX &ndash; design unic al caroseriei "
                         src="/assets/img/b_max/1214464699494.jpg">

                </div>
                <div class="igg-body">Ford B-MAX &ndash; design unic al caroseriei</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                    <img alt="Ingeniosul Ford B-MAX" title="Ingeniosul Ford B-MAX"
                         src="/assets/img/b_max/1214419927466.jpg">

                </div>
                <div class="igg-body">Ingeniosul Ford B-MAX</div>
            </article>
        </div>
        <div class="igg-row">
            <article class="igg-item">
                <div class="igg-image">

                    <img alt="Faruri cu halogen" title="Faruri cu halogen" src="/assets/img/b_max/1214419928369.jpg">

                </div>
                <div class="igg-body">Faruri cu halogen</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                    <img alt="Gril&#259; frontal&#259; cromat&#259; " title="Gril&#259; frontal&#259; cromat&#259; "
                         src="/assets/img/b_max/1214419929772.jpg">

                </div>
                <div class="igg-body">Gril&#259; frontal&#259; cromat&#259; </div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                    <img alt="Spoiler spate &icirc;n culoarea caroseriei"
                         title="Spoiler spate &icirc;n culoarea caroseriei" src="/assets/img/b_max/1214419929836.jpg">

                </div>
                <div class="igg-body">Spoiler spate &icirc;n culoarea caroseriei</div>
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
                    Interiorul rafinat al Ford B-MAX are un design elegant și spațios, dotat cu materiale de foarte bună
                    calitate, contraste subtile de culoare și ornamente cromate. Iar cu plafonul panoramic pe toată
                    lungimea maşinii, care permite luminii naturale să inunde interiorul, vei avea parte de un mediu
                    extrem de plăcut, at&acirc;t pentru șofer c&acirc;t și pentru pasageri. <br>
                    <br>
                    Pentru a-ţi oferi un spaţiu mult mai versatil, scaunul pasagerului din dreapta şi bancheta din spate
                    se pot plia &icirc;n totalitate, astfel că poți transporta obiecte de o lungime de p&acirc;nă la
                    2,35 metri, de neconceput p&acirc;nă acum pentru o mașină din clasa compacta. <br>
                    <br>
                    Explorează caracteristicile de design interior ale mașinii &icirc;n imaginile și filmele de mai jos.
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

                    <img alt="Ingeniosul Ford B-MAX" title="Ingeniosul Ford B-MAX"
                         src="/assets/img/b_max/1214419930092.jpg">
                </div>
                <div class="igg-body">Ingeniosul Ford B-MAX</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                    <img alt="Ford B-MAX - interior premium" title="Ford B-MAX - interior premium"
                         src="/assets/img/b_max/1214464695887.jpg">
                </div>
                <div class="igg-body">Ford B-MAX - interior premium</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                    <img alt="Ford B-MAX - plafon panoramic" title="Ford B-MAX - plafon panoramic"
                         src="/assets/img/b_max/1214464699338.jpg">

                </div>
                <div class="igg-body">Ford B-MAX - plafon panoramic</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                    <img alt="Ford SYNC" title="Ford SYNC" src="/assets/img/b_max/1214419929329.jpg">
                </div>
                <div class="igg-body">Ford SYNC</div>
            </article>
        </div>
        <div class="igg-row">
            <article class="igg-item">
                <div class="igg-image">

                    <img alt="Volan &icirc;mbr&#259;cat in piele" title="Volan &icirc;mbr&#259;cat in piele"
                         src="/assets/img/b_max/1214419927085.jpg">

                </div>
                <div class="igg-body">Volan &icirc;mbr&#259;cat in piele</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                    <img alt="Schimb&#259;tor de viteze &icirc;mbr&#259;cat &icirc;n piele"
                         title="Schimb&#259;tor de viteze &icirc;mbr&#259;cat &icirc;n piele"
                         src="/assets/img/b_max/1214419927402.jpg">

                </div>
                <div class="igg-body">Schimb&#259;tor de viteze &icirc;mbr&#259;cat &icirc;n piele</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                    <img alt="Consola central&#259; premium cu cotier&#259;"
                         title="Consola central&#259; premium cu cotier&#259;"
                         src="/assets/img/b_max/1214419927339.jpg">

                </div>
                <div class="igg-body">Consola central&#259; premium cu cotier&#259;</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                    <img alt="Scaune &icirc;mbr&#259;cate &icirc;n piele Capretto"
                         title="Scaune &icirc;mbr&#259;cate &icirc;n piele Capretto"
                         src="/assets/img/b_max/1214419929392.jpg">

                </div>
                <div class="igg-body">Scaune &icirc;mbr&#259;cate &icirc;n piele Capretto</div>
            </article>
        </div>
        <div class="igg-row">
            <article class="igg-item">
                <div class="igg-image">
                    <img alt="Consol&#259; central&#259; inovativ&#259;"
                         title="Consol&#259; central&#259; inovativ&#259;" src="/assets/img/b_max/1214428291611.jpg">

                </div>
                <div class="igg-body">Consol&#259; central&#259; inovativ&#259;</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                    <img alt="Scaune de piele" title="Scaune de piele" src="/assets/img/b_max/1214428290451.jpg">

                </div>
                <div class="igg-body">Scaune de piele</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                    <img alt="Volan &icirc;mbr&#259;cat &icirc;n piele" title="Volan &icirc;mbr&#259;cat &icirc;n piele"
                         src="/assets/img/b_max/1214428290512.jpg">

                </div>
                <div class="igg-body">Volan &icirc;mbr&#259;cat &icirc;n piele</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                    <img alt="Aer condi&#355;ionat manual" title="Aer condi&#355;ionat manual"
                         src="/assets/img/b_max/1214428291549.jpg">

                </div>
                <div class="igg-body">Aer condi&#355;ionat manual</div>
            </article>
        </div>
        <div class="igg-row">
            <article class="igg-item">
                <div class="igg-image">

                    <img alt="Cotier&#259;" title="Cotier&#259;" src="/assets/img/b_max/1214428291673.jpg">

                </div>
                <div class="igg-body">Cotier&#259;</div>
            </article>
        </div>
    </section>
</div>
<!--</div>-->
<!--<div id='tab3' class="mp-tab-wrapper">
<h2><a href='#tab3' class="mp-tab omt_xd_mt_ti">Culori si tapiţerie</a></h2> -->
<div id='tab3' class="tab-content" style="display:none;">
<section class="bto-wrapper">
    <article class="bto-item">
        <header class="bto-title">
            <h1></h1>
        </header>
        <div class="bto-body">
            <div class="abstract">
                Ford B-MAX este disponibil &icirc;ntr-o gamă largă de culori şi dispune de o paletă la fel de mare de
                culori ale tapițeriei din care poți alege. Alege culoarea preferată. Click pe imaginile de mai jos
                pentru a le mări.
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

                <img alt="Ford B-MAX &icirc;n culoarea Frozen White" title="Ford B-MAX &icirc;n culoarea Frozen White"
                     src="/assets/img/b_max/1214464699101.jpg">

            </div>
            <div class="igg-body">Ford B-MAX &icirc;n culoarea Frozen White</div>
        </article>
        <article class="igg-item">
            <div class="igg-image">

                <img alt="Ford B-MAX &icirc;n culoarea Race Red" title="Ford B-MAX &icirc;n culoarea Race Red"
                     src="/assets/img/b_max/1214464698943.jpg">

            </div>
            <div class="igg-body">Ford B-MAX &icirc;n culoarea Race Red</div>
        </article>
        <article class="igg-item">
            <div class="igg-image">

                <img alt="Ford B-MAX &icirc;n culoarea Blazer Blue" title="Ford B-MAX &icirc;n culoarea Blazer Blue"
                     src="/assets/img/b_max/1214464698545.jpg">

            </div>
            <div class="igg-body">Ford B-MAX &icirc;n culoarea Blazer Blue</div>
        </article>
        <article class="igg-item">
            <div class="igg-image">

                <img alt="Ford B-MAX &icirc;n culoarea Moondust Silver"
                     title="Ford B-MAX &icirc;n culoarea Moondust Silver" src="/assets/img/b_max/1214464698624.jpg">

            </div>
            <div class="igg-body">Ford B-MAX &icirc;n culoarea Moondust Silver</div>
        </article>
    </div>
    <div class="igg-row">
        <article class="igg-item">
            <div class="igg-image">

                <img alt="Ford B-MAX &icirc;n culoarea Tectonic Silver"
                     title="Ford B-MAX &icirc;n culoarea Tectonic Silver" src="/assets/img/b_max/1214464699180.jpg">

            </div>
            <div class="igg-body">Ford B-MAX &icirc;n culoarea Tectonic Silver</div>
        </article>
        <article class="igg-item">
            <div class="igg-image">

                <img alt="Ford B-MAX &icirc;n culoarea Burnished Glow"
                     title="Ford B-MAX &icirc;n culoarea Burnished Glow" src="/assets/img/b_max/1214464698863.jpg">

            </div>
            <div class="igg-body">Ford B-MAX &icirc;n culoarea Burnished Glow</div>
        </article>
        <article class="igg-item">
            <div class="igg-image">
                <img alt="Ford B-MAX &icirc;n culoarea Mars Red" title="Ford B-MAX &icirc;n culoarea Mars Red"
                     src="/assets/img/b_max/1214464695966.jpg">
            </div>
            <div class="igg-body">Ford B-MAX &icirc;n culoarea Mars Red</div>
        </article>
        <article class="igg-item">
            <div class="igg-image">

                <img alt="Ford B-MAX &icirc;n culoarea Midnight Sky" title="Ford B-MAX &icirc;n culoarea Midnight Sky"
                     src="/assets/img/b_max/1214464698784.jpg">

            </div>
            <div class="igg-body">Ford B-MAX &icirc;n culoarea Midnight Sky</div>
        </article>
    </div>
    <div class="igg-row">
        <article class="igg-item">
            <div class="igg-image">

                <img alt="Ford B-MAX &icirc;n culoarea Panther Black" title="Ford B-MAX &icirc;n culoarea Panther Black"
                     src="/assets/img/b_max/1214464699022.jpg">

            </div>
            <div class="igg-body">Ford B-MAX &icirc;n culoarea Panther Black</div>
        </article>
        <article class="igg-item">
            <div class="igg-image">

                <img alt="Ford B-MAX &icirc;n culoarea Nautical Blue" title="Ford B-MAX &icirc;n culoarea Nautical Blue"
                     src="/assets/img/b_max/1214464699259.jpg">

            </div>
            <div class="igg-body">Ford B-MAX &icirc;n culoarea Nautical Blue</div>
        </article>
        <article class="igg-item">
            <div class="igg-image">

                <img alt="Ford B-MAX &icirc;n culoarea Ink Blue" title="Ford B-MAX &icirc;n culoarea Ink Blue"
                     src="/assets/img/b_max/1214464698705.jpg">

            </div>
            <div class="igg-body">Ford B-MAX &icirc;n culoarea Ink Blue</div>
        </article>
        <article class="igg-item">
            <div class="igg-image">

                <img alt="Tapi&#539;erie din piele Carpetto &icirc;n culoarea Ebony"
                     title="Tapi&#539;erie din piele Carpetto &icirc;n culoarea Ebony"
                     src="/assets/img/b_max/1214419925878.jpg">

            </div>
            <div class="igg-body">Tapi&#539;erie din piele Carpetto &icirc;n culoarea Ebony</div>
        </article>
    </div>
    <div class="igg-row">
        <article class="igg-item">
            <div class="igg-image">

                <img alt="Tapi&#539;erie din piele Carpetto &icirc;n culoarea Ebony"
                     title="Tapi&#539;erie din piele Carpetto &icirc;n culoarea Ebony"
                     src="/assets/img/b_max/1214419925942.jpg">

            </div>
            <div class="igg-body">Tapi&#539;erie din piele Carpetto &icirc;n culoarea Ebony</div>
        </article>
        <article class="igg-item">
            <div class="igg-image">

                <img alt="		Inser&#539;ii New York &icirc;n culoarea  Ebony"
                     title="		Inser&#539;ii New York &icirc;n culoarea  Ebony"
                     src="/assets/img/b_max/1214419925687.jpg">

            </div>
            <div class="igg-body"> Inser&#539;ii New York &icirc;n culoarea Ebony</div>
        </article>
        <article class="igg-item">
            <div class="igg-image">

                <img alt="Tapi&#539;erie din piele Torino &icirc;n culoarea Ebony"
                     title="Tapi&#539;erie din piele Torino &icirc;n culoarea Ebony"
                     src="/assets/img/b_max/1214419926260.jpg">

            </div>
            <div class="igg-body">Tapi&#539;erie din piele Torino &icirc;n culoarea Ebony</div>
        </article>
        <article class="igg-item">
            <div class="igg-image">

                <img alt="Tapi&#539;erie &icirc;n culoarea Med Light Stone"
                     title="Tapi&#539;erie &icirc;n culoarea Med Light Stone" src="/assets/img/b_max/1214419925751.jpg">

            </div>
            <div class="igg-body">Tapi&#539;erie &icirc;n culoarea Med Light Stone</div>
        </article>
    </div>
    <div class="igg-row">
        <article class="igg-item">
            <div class="igg-image">

                <img alt="Inser&#539;ii New York &icirc;n culoarea Med Light Stone"
                     title="Inser&#539;ii New York &icirc;n culoarea Med Light Stone"
                     src="/assets/img/b_max/1214419926133.jpg">

            </div>
            <div class="igg-body">Inser&#539;ii New York &icirc;n culoarea Med Light Stone</div>
        </article>
        <article class="igg-item">
            <div class="igg-image">

                <img alt="Tapi&#539;erie &icirc;n culoarea Ebony" title="Tapi&#539;erie &icirc;n culoarea Ebony"
                     src="/assets/img/b_max/1214419925623.jpg">

            </div>
            <div class="igg-body">Tapi&#539;erie &icirc;n culoarea Ebony</div>
        </article>
        <article class="igg-item">
            <div class="igg-image">

                <img alt="	Inser&#539;ii New York &icirc;n culoarea Ebony"
                     title="	Inser&#539;ii New York &icirc;n culoarea Ebony"
                     src="/assets/img/b_max/1214419926006.jpg">

            </div>
            <div class="igg-body"> Inser&#539;ii New York &icirc;n culoarea Ebony</div>
        </article>
        <article class="igg-item">
            <div class="igg-image">

                <img alt="Tapi&#539;erie Gecko &icirc;n culoarea Sterling Gray"
                     title="Tapi&#539;erie Gecko &icirc;n culoarea Sterling Gray"
                     src="/assets/img/b_max/1214419925815.jpg">

            </div>
            <div class="igg-body">Tapi&#539;erie Gecko &icirc;n culoarea Sterling Gray</div>
        </article>
    </div>
    <div class="igg-row">
        <article class="igg-item">
            <div class="igg-image">

                <img alt="Inser&#539;ii hexagonale - culoarea Sterling Gray"
                     title="Inser&#539;ii hexagonale - culoarea Sterling Gray"
                     src="/assets/img/b_max/1214419926070.jpg">

            </div>
            <div class="igg-body">Inser&#539;ii hexagonale - culoarea Sterling Gray</div>
        </article>
        <article class="igg-item">
            <div class="igg-image">

                <img alt="Tapi&#539;erie Gecko &icirc;n culoarea Ebony"
                     title="Tapi&#539;erie Gecko &icirc;n culoarea Ebony" src="/assets/img/b_max/1214419925560.jpg">

            </div>
            <div class="igg-body">Tapi&#539;erie Gecko &icirc;n culoarea Ebony</div>
        </article>
        <article class="igg-item">
            <div class="igg-image">

                <img alt="Inser&#539;ii hexagonale - culoarea Ebony" title="Inser&#539;ii hexagonale - culoarea Ebony"
                     src="/assets/img/b_max/1214419926197.jpg">

            </div>
            <div class="igg-body">Inser&#539;ii hexagonale - culoarea Ebony</div>
        </article>
    </div>
</section>
</div>
<!--</div>-->
<!--<div id='tab4' class="mp-tab-wrapper">
<h2><a href='#tab4' class="mp-tab omt_xd_mt_ti">Jante</a></h2> -->
<div id='tab4' class="tab-content" style="display:none;">
    <section class="bto-wrapper">
        <article class="bto-item">
            <header class="bto-title">
                <h1></h1>
            </header>
            <div class="bto-body">
                <div class="abstract">
                    Alege una din jantele de mai jos pentru a-ţi personaliza autoturismul. Click pe imagini pentru a le
                    mări.
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
                    <img alt="Jant&#259; de 15&quot; cu 12 spi&#355;e"
                             title="Jant&#259; de 15&quot; cu 12 spi&#355;e"
                             src="/assets/img/b_max/1214428290573.jpg">

                </div>
                <div class="igg-body">Jant&#259; de 15&quot; cu 12 spi&#355;e</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Jant&#259; de 15&quot; din aliaj, cu 5x2 spi&#355;e"
                             title="Jant&#259; de 15&quot; din aliaj, cu 5x2 spi&#355;e"
                             src="/assets/img/b_max/1214428290634.jpg">

                </div>
                <div class="igg-body">Jant&#259; de 15&quot; din aliaj, cu 5x2 spi&#355;e</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Jant&#259; de 15&quot; din aliaj, cu 8x2 spi&#355;e"
                             title="Jant&#259; de 15&quot; din aliaj, cu 8x2 spi&#355;e"
                             src="/assets/img/b_max/1214428290695.jpg">

                </div>
                <div class="igg-body">Jant&#259; de 15&quot; din aliaj, cu 8x2 spi&#355;e</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Jant&#259; de 16&quot; din aliaj, cu 5x2 spi&#355;e"
                             title="Jant&#259; de 16&quot; din aliaj, cu 5x2 spi&#355;e"
                             src="/assets/img/b_max/1214428290756.jpg">

                </div>
                <div class="igg-body">Jant&#259; de 16&quot; din aliaj, cu 5x2 spi&#355;e</div>
            </article>
        </div>
        <div class="igg-row">
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Jant&#259; de 16&quot; din aliaj, cu 11 spi&#355;e"
                             title="Jant&#259; de 16&quot; din aliaj, cu 11 spi&#355;e"
                             src="/assets/img/b_max/1214428290817.jpg">

                </div>
                <div class="igg-body">Jant&#259; de 16&quot; din aliaj, cu 11 spi&#355;e</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Jant&#259; de 16&quot; din aliaj, cu 15 spi&#355;e"
                             title="Jant&#259; de 16&quot; din aliaj, cu 15 spi&#355;e"
                             src="/assets/img/b_max/1214428290878.jpg">

                </div>
                <div class="igg-body">Jant&#259; de 16&quot; din aliaj, cu 15 spi&#355;e</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Jant&#259; de 17&quot; din aliaj, cu 5x2 spi&#355;e"
                             title="Jant&#259; de 17&quot; din aliaj, cu 5x2 spi&#355;e"
                             src="/assets/img/b_max/1214428290939.jpg">

                </div>
                <div class="igg-body">Jant&#259; de 17&quot; din aliaj, cu 5x2 spi&#355;e</div>
            </article>
        </div>
    </section>
</div>
<!--</div>-->
<!--<div id='tab5' class="mp-tab-wrapper">
<h2><a href='#tab5' class="mp-tab omt_xd_mt_ti">Accesorii</a></h2> -->
<div id='tab5' class="tab-content" style="display:none;">
<section class="bto-wrapper">
    <article class="bto-item">
        <header class="bto-title">
            <h1></h1>
        </header>
        <div class="bto-body">
            <div class="abstract">
                După ce ai ales culoarea, tapiţeria şi jantele, de ce să nu profiţi şi de ingeniozitatea pe care ţi-o
                oferă accesoriile B-MAX?
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

                <img alt="Plas&#259; pentru depozitare" title="Plas&#259; pentru depozitare"
                     src="/assets/img/b_max/1214428292283.jpg">

        </div>
        <div class="igg-body">Plas&#259; pentru depozitare</div>
    </article>
    <article class="igg-item">
        <div class="igg-image">

                <img alt="Portbagaj cu podea ajustabil&#259;" title="Portbagaj cu podea ajustabil&#259;"
                     src="/assets/img/b_max/1214428292344.jpg">

        </div>
        <div class="igg-body">Portbagaj cu podea ajustabil&#259;</div>
    </article>
    <article class="igg-item">
        <div class="igg-image">

                <img alt="Covora&#351;e" title="Covora&#351;e"
                     src="/assets/img/b_max/1214428292100.jpg">

        </div>
        <div class="igg-body">Covora&#351;e</div>
    </article>
    <article class="igg-item">
        <div class="igg-image">

                <img alt="Torpedou iluminat - dotare standard" title="Torpedou iluminat - dotare standard"
                     src="/assets/img/b_max/1214428291488.jpg">

        </div>
        <div class="igg-body">Torpedou iluminat - dotare standard</div>
    </article>
</div>
<div class="igg-row">
    <article class="igg-item">
        <div class="igg-image">

                <img alt="Spoiler spate &icirc;n culoarea caroseriei" title="Spoiler spate &icirc;n culoarea caroseriei"
                     src="/assets/img/b_max/1214428291244.jpg">

        </div>
        <div class="igg-body">Spoiler spate &icirc;n culoarea caroseriei</div>
    </article>
    <article class="igg-item">
        <div class="igg-image">

                <img alt="Priz&#259; 12V" title="Priz&#259; 12V"
                     src="/assets/img/b_max/1214428292527.jpg">

        </div>
        <div class="igg-body">Priz&#259; 12V</div>
    </article>
    <article class="igg-item">
        <div class="igg-image">

                <img alt="Covora&#351; flexibil pentru portbagaj" title="Covora&#351; flexibil pentru portbagaj"
                     src="/assets/img/b_max/1214428292039.jpg">

        </div>
        <div class="igg-body">Covora&#351; flexibil pentru portbagaj</div>
    </article>
    <article class="igg-item">
        <div class="igg-image">

                <img alt="Covora&#351;e anti-derapante" title="Covora&#351;e anti-derapante"
                     src="/assets/img/b_max/1214428292161.jpg">

        </div>
        <div class="igg-body">Covora&#351;e anti-derapante</div>
    </article>
</div>
<div class="igg-row">
    <article class="igg-item">
        <div class="igg-image">

                <img alt="Praguri cu logo B-MAX" title="Praguri cu logo B-MAX"
                     src="/assets/img/b_max/1214428292466.jpg">

        </div>
        <div class="igg-body">Praguri cu logo B-MAX</div>
    </article>
    <article class="igg-item">
        <div class="igg-image">

                <img alt="Cadru pentru separarea &icirc;nc&#259;rc&#259;turii"
                     title="Cadru pentru separarea &icirc;nc&#259;rc&#259;turii"
                     src="/assets/img/b_max/1214428291856.jpg">

        </div>
        <div class="igg-body">Cadru pentru separarea &icirc;nc&#259;rc&#259;turii</div>
    </article>
    <article class="igg-item">
        <div class="igg-image">

                <img alt="Cadru pentru separarea &icirc;nc&#259;rc&#259;turii"
                     title="Cadru pentru separarea &icirc;nc&#259;rc&#259;turii"
                     src="/assets/img/b_max/1214428291917.jpg">

        </div>
        <div class="igg-body">Cadru pentru separarea &icirc;nc&#259;rc&#259;turii</div>
    </article>
    <article class="igg-item">
        <div class="igg-image">

                <img alt="Spa&#355;iu de organizare" title="Spa&#355;iu de organizare"
                     src="/assets/img/b_max/1214428291183.jpg">

        </div>
        <div class="igg-body">Spa&#355;iu de organizare</div>
    </article>
</div>
<div class="igg-row">
    <article class="igg-item">
        <div class="igg-image">

                <img alt="Suport Thule pentru biciclet&#259;" title="Suport Thule pentru biciclet&#259;"
                     src="/assets/img/b_max/1214428291427.jpg">

        </div>
        <div class="igg-body">Suport Thule pentru biciclet&#259;</div>
    </article>
    <article class="igg-item">
        <div class="igg-image">

                <img alt="Suport de biciclet&#259; cu bar&#259; de protec&#355;ie"
                     title="Suport de biciclet&#259; cu bar&#259; de protec&#355;ie"
                     src="/assets/img/b_max/1214428291305.jpg">

        </div>
        <div class="igg-body">Suport de biciclet&#259; cu bar&#259; de protec&#355;ie</div>
    </article>
    <article class="igg-item">
        <div class="igg-image">

                <img alt="Scaun Britax R&ouml;mer cu sistem ISOFIX pentru copii"
                     title="Scaun Britax R&ouml;mer cu sistem ISOFIX pentru copii"
                     src="/assets/img/b_max/1214428291122.jpg">

        </div>
        <div class="igg-body">Scaun Britax R&ouml;mer cu sistem ISOFIX pentru copii</div>
    </article>
    <article class="igg-item">
        <div class="igg-image">

                <img alt="Lada frigorific&#259; Waeco" title="Lada frigorific&#259; Waeco"
                     src="/assets/img/b_max/1214428292222.jpg">

        </div>
        <div class="igg-body">Lada frigorific&#259; Waeco</div>
    </article>
</div>
<div class="igg-row">
    <article class="igg-item">
        <div class="igg-image">

                <img alt="Suport portbagaj" title="Suport portbagaj"
                     src="/assets/img/b_max/1214428291366.jpg">

        </div>
        <div class="igg-body">Suport portbagaj</div>
    </article>
    <article class="igg-item">
        <div class="igg-image">

                <img alt="Portbagaj Thule" title="Portbagaj Thule"
                     src="/assets/img/b_max/1214428292405.jpg">

        </div>
        <div class="igg-body">Portbagaj Thule</div>
    </article>
    <article class="igg-item">
        <div class="igg-image">

                <img alt="C&acirc;rlig pentru remorcare deta&#351;abil"
                     title="C&acirc;rlig pentru remorcare deta&#351;abil"
                     src="/assets/img/b_max/1214428291978.jpg">

        </div>
        <div class="igg-body">C&acirc;rlig pentru remorcare deta&#351;abil</div>
    </article>
    <article class="igg-item">
        <div class="igg-image">

                <img alt="Ap&#259;r&#259;toare &icirc;mpotriva noroiului mulat&#259; pe caroserie"
                     title="Ap&#259;r&#259;toare &icirc;mpotriva noroiului mulat&#259; pe caroserie"
                     src="/assets/img/b_max/1214428290390.jpg">

        </div>
        <div class="igg-body">Ap&#259;r&#259;toare &icirc;mpotriva noroiului mulat&#259; pe caroserie</div>
    </article>
</div>
</section>
</div>
<!--</div>-->
</div>
<!-- END [MidPageTabs] -->
</article>
<div style="width:100%; height:auto; padding:0px 0px 5px">
    <script>
        var addthis_preconfig_variables = {};
        addthis_preconfig_variables["ui_language"] = "ro";
        addthis_preconfig_variables["services_compact"] = "print,favorites,facebook,twitter,delicious,stumbleupon,more";
        addthis_preconfig_variables["services_expanded"] = "print,favorites,facebook,twitter,delicious,stumbleupon,tumblr,blogger,digg,google,linkedin,reddit,wordpress,";
        addthis_preconfig_variables["services_exclude"] = "hotmail,gmail,email,aolmail,yahoomailemail";
        addthis_preconfig_variables["services_custom"] = {
            name:"Ford",
            url:"http://www.ford.ro={{URL}}&title={{TITLE}}",
            icon:"http://www.ford.com/icon.jpg"
        };
        addthis_preconfig_variables["ui_hover_direction"] = "1";
    </script>
    <!-- AddThis Button BEGIN -->
    <script type="text/javascript">var addthis_config = {"data_track_clickback":true};</script>
    <script type="text/javascript" src='http://s7.addthis.com/js/250/addthis_widget.js?username=engineps'></script>
    <script type="text/javascript">
        var addthis_config = addthis_preconfig_variables;
        var addthis_localize = {share_caption:'Marchează şi partajează', favorites:'Favorite', print:'Printează', more:'Mai multe'};
    </script>
    <!-- AddThis Button END -->
</div>
</section>
<!-- nosc comp -->
<script src="/cs/ContentServer?pagename=ENGInE/script/messaging/core"></script>
<script id="TagIT.load"
        src='/cs/ContentServer?pagename=RORO4_ENGINE/script/packager&c=Page&cid=1205005702967&location=load&isMobile=false&require=main'
        defer></script>
</div>