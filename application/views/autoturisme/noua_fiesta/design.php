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
            <li class="selected"><a href="/Autoturisme/NouaFiesta/Design#primaryTabs" data-ajaxlink="/Autoturisme/NouaFiesta/Design">Design</a>
            </li>
            <li><a href="/Autoturisme/NouaFiesta/ExperientaLaVolan#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/NouaFiesta/ExperientaLaVolan">Experien&#539;a la volan</a>
            </li>
            <li><a href="/Autoturisme/NouaFiesta/PreturisiPromotii#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/NouaFiesta/PreturisiPromotii">PRE&#354;URI &#350;I PROMO&#354;II</a>
            </li>
            <li><a href="/Autoturisme/NouaFiesta/PerformantaSiEficienta#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/NouaFiesta/PerformantaSiEficienta">Performan&#355;&#259; &#351;i eficien&#355;&#259;</a>
            </li>
            <li><a href="#" id="moreTab">Mai multe...</a><span></span></li>
        </ul>
    </nav>
</div>
<nav class="sub-nav ">
    <ul>
        <li><a href="/Autoturisme/NouaFiesta/Siguranta"
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
            <h1>Design-ul contează</h1>
        </header>
        <div class="bto-body">
            <div class="abstract">
                <div>Noul model Fiesta reprezintă combinaţia ideală &icirc;ntre design revoluţionar şi tehnologie de v&acirc;rf.</div>
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
            <li><a href='#tab4' class='omt_'>Accesorii</a></li>
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
                <h1> </h1>
            </header>
            <div class="bto-body">
                <div class="abstract">
                    Partea frontală a noului model Fiesta prezintă o grilă &icirc;ndrăzneaţă de forma unui trapez. Impresionantele faruri cu LED, luminile de poziţie integrate şi designul arcuit al capotei accentuează performanţele fizice ale maşinii. Cu jante de 17 inchi din aliaj şi o gamă de culori dinamice vii din care poţi alege, Fiesta te ajută să &icirc;ţi exprimi stilul &icirc;ntr-un mod unic.
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

                        <img alt="		Exterior Fiesta - vedere 360&deg;" title="		Exterior Fiesta - vedere 360&deg;" src="/assets/img/fiesta/1214443017626.jpg">

                </div>
                <div class="igg-body">		Exterior Fiesta - vedere 360&deg;</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Un design nou pentru gril&#259; &#351;i faruri" title="Un design nou pentru gril&#259; &#351;i faruri" src="/assets/img/fiesta/1214443012628.jpg">

                </div>
                <div class="igg-body">Un design nou pentru gril&#259; &#351;i faruri</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Pasaje roti proeminente" title="Pasaje roti proeminente" src="/assets/img/fiesta/1214443012702.jpg">

                </div>
                <div class="igg-body">Pasaje roti proeminente</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Lampi posterioare panoramice" title="Lampi posterioare panoramice" src="/assets/img/fiesta/1214443012925.jpg">

                </div>
                <div class="igg-body">Lampi posterioare panoramice</div>
            </article>
        </div>
        <div class="igg-row">
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Grila frontala de forma unui trapez" title="Grila frontala de forma unui trapez" src="/assets/img/fiesta/1214443017165.jpg">

                </div>
                <div class="igg-body">Grila frontala de forma unui trapez</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Proiectoare cu halogen cu LED" title="Proiectoare cu halogen cu LED" src="/assets/img/fiesta/1214443012554.jpg">

                </div>
                <div class="igg-body">Proiectoare cu halogen cu LED</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Fiesta in culoarea Hot Mustard" title="Fiesta in culoarea Hot Mustard" src="/assets/img/fiesta/1214443012776.jpg">

                </div>
                <div class="igg-body">Fiesta in culoarea Hot Mustard</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Fiesta in culoarea Hot Mustard" title="Fiesta in culoarea Hot Mustard" src="/assets/img/fiesta/1214443013076.jpg">

                </div>
                <div class="igg-body">Fiesta in culoarea Hot Mustard</div>
            </article>
        </div>
        <div class="igg-row">
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Fiesta in culoarea Candy Blue" title="Fiesta in culoarea Candy Blue" src="/assets/img/fiesta/1214443012851.jpg">

                </div>
                <div class="igg-body">Fiesta in culoarea Candy Blue</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Fiesta in culoarea Candy Blue" title="Fiesta in culoarea Candy Blue" src="/assets/img/fiesta/1214443013224.jpg">

                </div>
                <div class="igg-body">Fiesta in culoarea Candy Blue</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Fiesta in culoarea Candy Blue" title="Fiesta in culoarea Candy Blue" src="/assets/img/fiesta/1214443013150.jpg">

                </div>
                <div class="igg-body">Fiesta in culoarea Candy Blue</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Fiesta in culoarea Candy Blue" title="Fiesta in culoarea Candy Blue" src="/assets/img/fiesta/1214443012999.jpg">

                </div>
                <div class="igg-body">Fiesta in culoarea Candy Blue</div>
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
                <h1> </h1>
            </header>
            <div class="bto-body">
                <div class="abstract">
                    Fiesta stabileşte un nou standard pentru interiorul maşinilor de clasa mică. Materialele şi ţesăturile de calitate superioară, modelele şi texturile moderne, la care se adaugă finisajele extrem de strălucitoare şi detaliile din crom satinat, creează un ambient dinamic. &Icirc;n plus, designul ergonomic garantează că toate dotările maşinii se află la &icirc;ndem&acirc;nă.
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

                        <img alt="Interior Fiesta - vedere 360&deg;" title="Interior Fiesta - vedere 360&deg;" src="/assets/img/fiesta/1214443017593.jpg">

                </div>
                <div class="igg-body">Interior Fiesta - vedere 360&deg;</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Noul radio Sony " title="Noul radio Sony " src="/assets/img/fiesta/1214443016067.jpg">

                </div>
                <div class="igg-body">Noul radio Sony </div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Ford Power - Buton pornire" title="Ford Power - Buton pornire" src="/assets/img/fiesta/1214443012182.jpg">

                </div>
                <div class="igg-body">Ford Power - Buton pornire</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Ford Fiesta - Iluminare ambientala" title="Ford Fiesta - Iluminare ambientala" src="/assets/img/fiesta/1214443013597.jpg">

                </div>
                <div class="igg-body">Ford Fiesta - Iluminare ambientala</div>
            </article>
        </div>
        <div class="igg-row">
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Ford Fiesta - Pedale de aluminiu" title="Ford Fiesta - Pedale de aluminiu" src="/assets/img/fiesta/1214443016289.jpg">

                </div>
                <div class="igg-body">Ford Fiesta - Pedale de aluminiu</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Ford Fiesta - Interior" title="Ford Fiesta - Interior" src="/assets/img/fiesta/1214443016437.jpg">

                </div>
                <div class="igg-body">Ford Fiesta - Interior</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Ford Fiesta - Interior" title="Ford Fiesta - Interior" src="/assets/img/fiesta/1214443014119.jpg">

                </div>
                <div class="igg-body">Ford Fiesta - Interior</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Comenzi Fiesta" title="Comenzi Fiesta" src="/assets/img/fiesta/1214443012404.jpg">

                </div>
                <div class="igg-body">Comenzi Fiesta</div>
            </article>
        </div>
        <div class="igg-row">
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Ford Fiesta - Titanium" title="Ford Fiesta - Titanium" src="/assets/img/fiesta/1214443016363.jpg">

                </div>
                <div class="igg-body">Ford Fiesta - Titanium</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Ford Fiesta - Trend" title="Ford Fiesta - Trend" src="/assets/img/fiesta/1214443016215.jpg">

                </div>
                <div class="igg-body">Ford Fiesta - Trend</div>
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
                <h1> </h1>
            </header>
            <div class="bto-body">
                <div class="abstract">
                    Modelul Fiesta este disponibil &icirc;ntr-o gamă de culori unice şi vii ale caroseriei, inclusiv culori mate şi cu finisaje metalice.
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

                        <img alt="Fiesta in culoarea Deep Impact Blue" title="Fiesta in culoarea Deep Impact Blue" src="/assets/img/fiesta/1214462784403.jpg">

                </div>
                <div class="igg-body">Fiesta in culoarea Deep Impact Blue</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Fiesta in culoarea Panther Black" title="Fiesta in culoarea Panther Black" src="/assets/img/fiesta/1214443011356.jpg">

                </div>
                <div class="igg-body">Fiesta in culoarea Panther Black</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Fiesta in culoarea Copper Pulse" title="Fiesta in culoarea Copper Pulse" src="/assets/img/fiesta/1214443011431.jpg">

                </div>
                <div class="igg-body">Fiesta in culoarea Copper Pulse</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Fiesta in culoarea Hot Magenta" title="Fiesta in culoarea Hot Magenta" src="/assets/img/fiesta/1214443015321.jpg">

                </div>
                <div class="igg-body">Fiesta in culoarea Hot Magenta</div>
            </article>
        </div>
        <div class="igg-row">
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Fiesta in culoarea Midnight Sky" title="Fiesta in culoarea Midnight Sky" src="/assets/img/fiesta/1214443015396.jpg">

                </div>
                <div class="igg-body">Fiesta in culoarea Midnight Sky</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Fiesta in culoarea Candy Blue" title="Fiesta in culoarea Candy Blue" src="/assets/img/fiesta/1214443015096.jpg">

                </div>
                <div class="igg-body">Fiesta in culoarea Candy Blue</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Fiesta in culoarea Fashionista" title="Fiesta in culoarea Fashionista" src="/assets/img/fiesta/1214443015471.jpg">

                </div>
                <div class="igg-body">Fiesta in culoarea Fashionista</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Fiesta in culoarea Hot Mustard" title="Fiesta in culoarea Hot Mustard" src="/assets/img/fiesta/1214443011206.jpg">

                </div>
                <div class="igg-body">Fiesta in culoarea Hot Mustard</div>
            </article>
        </div>
        <div class="igg-row">
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Fiesta in culoarea Moondust Silver" title="Fiesta in culoarea Moondust Silver" src="/assets/img/fiesta/1214462784479.jpg">

                </div>
                <div class="igg-body">Fiesta in culoarea Moondust Silver</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Fiesta in culoarea Blazer Blue" title="Fiesta in culoarea Blazer Blue" src="/assets/img/fiesta/1214443015246.jpg">

                </div>
                <div class="igg-body">Fiesta in culoarea Blazer Blue</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Fiesta in culoarea Race Red" title="Fiesta in culoarea Race Red" src="/assets/img/fiesta/1214443015546.jpg">

                </div>
                <div class="igg-body">Fiesta in culoarea Race Red</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Fiesta in culoarea Frozen White" title="Fiesta in culoarea Frozen White" src="/assets/img/fiesta/1214443011131.jpg">

                </div>
                <div class="igg-body">Fiesta in culoarea Frozen White</div>
            </article>
        </div>
    </section>
</div>
<!--</div>-->
<!--<div id='tab4' class="mp-tab-wrapper">
<h2><a href='#tab4' class="mp-tab omt_xd_mt_ti">Accesorii</a></h2> -->
<div id='tab4' class="tab-content" style="display:none;">
    <section class="bto-wrapper">
        <article class="bto-item">
            <header class="bto-title">
                <h1> </h1>
            </header>
            <div class="bto-body">
                <div class="abstract">
                    La lista variată de dotări standard ale modelului Fiesta se adaugă o serie de accesorii utile din care poţi alege.
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

                        <img alt="Portbagaj bicicleta Thule&reg;" title="Portbagaj bicicleta Thule&reg;" src="/assets/img/fiesta/1214443013372.jpg">

                </div>
                <div class="igg-body">Portbagaj bicicleta Thule&reg;</div>
            </article>
        </div>
    </section>
</div>
<!--</div>-->
</div> <!-- END [MidPageTabs] -->
</article>
</section>
<!-- nosc comp -->
<script src="/cs/ContentServer?pagename=ENGInE/script/messaging/core"></script>
<script id="TagIT.load" src='/cs/ContentServer?pagename=RORO4_ENGINE/script/packager&c=Page&cid=1205027765849&location=load&isMobile=false&require=main' defer></script>
</div>