<script type="text/javascript">
    // mobile sniffer
    ForceRedirectUserAgents = 'android,iphone,blackberry';
    ForceRedirectUserAgentsBypass = 'Win64,Win32';
    ForceRedirectMinWidth = '480';
    MobileHomePageRedirectURL = 'http:\/\/m.ford.ro';
    MobileRedirectURL = MobileHomePageRedirectURL + '_Old/Autoturisme/Ka/CaracteristiciKa';
</script>
<div id="xAxis-detailed">
    <nav class="breadCrumb" role="navigation">
        <ul itemprop="breadcrumb">
            <li class="home"><a href="/" class="om_bc_li" title="Pagina principal&#259;">Pagina principal&#259;</a><span></span></li><li><a href="/Autoturisme" class="om_bc_li">
            Autoturisme
        </a><span></span></li><li>Ka</li></ul>
    </nav>
    <script>
        var vehicleimagepackpresid = '1205035171688';
        var vehicleimagepackyear = 'YYP';
        var googleAdServerNameplateId = '00G';
        var googleAdServerNameplateName = 'Ka';
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
        var bootstrapVehicleData = {"vehicles":[{"strIntroToFord": " ","brand": "Ford","vehicleType": "PV","catalogId": "9322","nameplate": "Ka","labelAvailableFrom": "De la","formattedCurrency": "11.050 RON","nameplateText": "Original, prietenos \u015Fi fantastic de condus, Ka stabile\u015Fte standardele pentru ma\u015Finile mici.","imagePack": true,"hideVehicleImage": false,"images": ["/cs/Storage/EP2COM_ENGInE/_vip/1205069742416/00G_YYP/DD8/CDA/BD3/1/0/KA_GreyMatter_Front_00001.jpg"],"backgroundImagePath": ["/assets/img/ka/KA_GreyMatter_Front_00001.jpg"],"disclaimerTextColor": [null,null,null],"current": true,"cid": "1204961328389","cta": [{"linkTitle": "MODELE Ka","linkURL": "/Autoturisme/Ka/Modele","linkType": "primary","linkTarget": "","omid": "va"},{"linkTitle": "DESCARC\u0102 BRO\u015EUR\u0102 ","linkURL": "\/SBE\/Brosura\/DescarcaBrosura","linkType": "tertiary","linkTarget": "_blank","omid": "tr"},{"linkTitle": "\u00CENSCRIE-TE LA TEST DRIVE ","linkURL": "\/SBE\/TestDrive?shopcode=00G","linkType": "tertiary","linkTarget": "_blank","omid": "tr"},{"linkTitle": "VREAU SĂ FIU INFORMAT(Ă) ","linkURL": "/SBE/VreauSaFiuInformata","linkType": "tertiary","linkTarget": "","omid": "tr"}],"social": {"facebook": "https://facebook.com","facebookPage": "fordromania"},"disclaimer": "Modelul prezentat este un Ka Titanium. Imagine cu titlul de prezentare.","seriesCode": "DD8","uscCode": "00G","supportSelector": "true","supportSeries": "true","presId": "1205035171688","promos": [],"idf": {"options":[{"dataOverlay": {"mediaType":"Flash","height":"439","width":"780"},"iconURL":"/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobheader=image%2Fjpg&blobwhere=1214480084170&blobkey=id","link":"/cs/ContentServer?cid=1204985139140&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Flash_C&amp;site=RORO4_ENGINE","videoSrc":[{"src1":""},{"src2":""}],"youtubeClose":"","tooltipText":"Ford Ka"}]}}]} || {};
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
                        Modelul prezentat este un Ka Titanium. Imagine cu titlul de prezentare.
                    </aside>
                </li>
            </ul>
            <div itemscope itemtype="http://schema.org/Product" id="nameplateDetails" class="nameplate-vehicle">
                <!--the text description-->
                <div class="name-plate-text">
                    <p class="intro"> </p>
                    <h1 class="bigHeading">
                        <span itemprop="model" itemscope itemtype="http://schema.org/Organization" class="mark">Ford</span>
                        <span itemprop="member" class="nameplate boldTxt">Ka</span>
                    </h1>
                    <!--The price-->
                    <!--The blurb-->
                    <p class="blurb">
                        Original, prietenos şi fantastic de condus, Ka stabileşte standardele pentru maşinile mici.
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
            <li><a href="/Autoturisme/Ka/Prezentare#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/Ka/Prezentare">Prezentare general&#259;</a>
            </li>
            <li><a href="/Autoturisme/Ka/Designinterior#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/Ka/Designinterior">Design interior</a>
            </li>
            <li class="selected"><a href="/Autoturisme/Ka/Designexterior#primaryTabs" data-ajaxlink="/Autoturisme/Ka/Designexterior">Design exterior</a>
            </li>
            <li><a href="/Autoturisme/Ka/MaterialeDescarcabile#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/Ka/MaterialeDescarcabile">Materiale Desc&#259;rcabile</a>
            </li>
            <li><a href="/Autoturisme/Ka/Preturi#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/Ka/Preturi">Lista de pre&#355;uri</a>
            </li>
            <li><a href="#" id="moreTab">Mai multe...</a><span></span></li>
        </ul>
    </nav>
</div>
<nav class="sub-nav ">
    <ul>
        <li><a href="/Autoturisme/Ka/Culorisitapiterie"
                >Culori &#351;i tapi&#355;erie</a></li>
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
            <h1>Un exterior care atrage atenţia</h1>
        </header>
        <div class="bto-body">
            <div class="abstract">
                Ai toate lucrurile cu care te-a obişnuit modelul Ka &ndash; &icirc;ndrăzneală, expresivitate şi o &icirc;ntruchipare veselă a abordării noastre de design kinetic, ce dă o senzaţie de mişcare chiar şi atunci c&acirc;nd maşina stă pe loc.
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
            <li><a href='#tab1' class='omt_'>Design</a></li>
            <li><a href='#tab2' class='omt_'>Jante</a></li>
        </ul>
    </nav>
</div>
<!-- BEGIN [MidPageTabs] -->
<div class="innertab-wrapper">
<!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Design</a></h2> -->
<div id='tab1' class="tab-content" style="display:none;">
    <section class="bti-wrapper">
        <article class="bti-item">
            <header class="bti-title">Design Kinetic Ford</header>
            <div class="bti-body">
                <div class="abstract">
                    Cu un aspect complet proaspăt, noul Ka păstrează stilul original şi individual.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Culori &icirc;ndr&#259;zne&#355;e" title="Culori &icirc;ndr&#259;zne&#355;e" src="/assets/img/ka/1214375661447.jpg">

            </div>
            <header class="bti-title">Un mesaj îndrăzneţ</header>
            <div class="bti-body">
                <div class="abstract">
                    Abordarea Designului kinetic Ford a ajutat la crearea unui vehicul cu personalitate, modern, cu un stil dinamic, expresiv - fiind mai mult dec&acirc;t o schimbare radicală faţă de spiritul său original provocator. Farurile mari şi alungite se &icirc;mbină cu noua şi proeminenta grilă care aproape pare că &icirc;ţi z&acirc;mbeşte, &icirc;n timp ce pasajele &icirc;ndrăzneţe ale roţilor, umerii puternici şi liniile curgătoare conferă noului Ka un aspect compact şi sigur pe el.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Mustard Olive" title="Mustard Olive" src="/assets/img/ka/1214478349347.jpg">

            </div>
            <header class="bti-title">Colorează-ţi universul</header>
            <div class="bti-body">
                <div class="abstract">
                    <p>Noul Ka vine cu o gamă nouă de culori inspirată de nuanţe puternice, pastelate, disponibile ca finisaje uni şi metalizate. De asemenea, sunt disponibile şi două culori perlate: Piste, un alb strălucitor şi seducătorul Blush, ambele contribuind la factorul de entuziasm provocat de Ka.</p>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <header class="bti-title">Pachete pentru exterior</header>
            <div class="bti-body">
                <div class="abstract">
                    Fă-ţi noul Ka cu adevărat numai al tău cu unul din aceste patru atrăgătoare Pachete pentru Exterior, care cu siguranţă vor &icirc;ntoarce privirile:
                </div>
            </div>
        </article>
    </section>
    <section class="igg-wrapper">
        <!--<script type="text/javascript" src="/cs/ContentServer?pagename=ENGInE%2fscript%2fGroupedJS"></script>-->
        <div class="igg-row">
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Ford Ka Jump &icirc;n culoare perlat&#259; Piste" title="Ford Ka Jump &icirc;n culoare perlat&#259; Piste" src="/assets/img/ka/1214375824264.jpg">

                </div>
                <div class="igg-body">Ford Ka Jump &icirc;n culoare perlat&#259; Piste</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Ford Ka Sunrise &icirc;n Crystal" title="Ford Ka Sunrise &icirc;n Crystal" src="/assets/img/ka/1214375796066.jpg">

                </div>
                <div class="igg-body">Ford Ka Sunrise &icirc;n Crystal</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Ford Ka Electric Orange &icirc;n metalic Strobe " title="Ford Ka Electric Orange &icirc;n metalic Strobe " src="/assets/img/ka/1214375824488.jpg">

                </div>
                <div class="igg-body">Ford Ka Electric Orange &icirc;n metalic Strobe </div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Ford Ka Piste &icirc;n metalic Dive" title="Ford Ka Piste &icirc;n metalic Dive" src="/assets/img/ka/1214375795614.jpg">

                </div>
                <div class="igg-body">Ford Ka Piste &icirc;n metalic Dive</div>
            </article>
        </div>
    </section>
</div>
<!--</div>-->
<!--<div id='tab2' class="mp-tab-wrapper">
<h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">Jante</a></h2> -->
<div id='tab2' class="tab-content" style="display:none;">
    <section class="bti-wrapper">
        <article class="bti-item">
            <header class="bti-title">Gama de jante</header>
            <div class="bti-body">
                <div class="abstract">
                    Pentru o notă şi mai distinctivă, poţi alege dintr-o gamă de jante din aliaj pentru a-ţi pune marca ta personală pe sprintenul Ka. Admiră imaginile de mai jos:
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Jant&amp;#259; din o&amp;#355;el de 14&amp;quot;" title="Jant&amp;#259; din o&amp;#355;el de 14&amp;quot;" src="/assets/img/ka/1214375796342.jpg">

            </div>
            <header class="bti-title">O&#355;el</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Jantă din oţel de 14&quot; x 5&frac12;&quot; cu 6 spiţe</div>
                </div>
                <div class="body">
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Jant&amp;#259; din aliaj de 14&amp;quot;" title="Jant&amp;#259; din aliaj de 14&amp;quot;" src="/assets/img/ka/1214375656729.jpg">

            </div>
            <header class="bti-title">Aliaj</header>
            <div class="bti-body">
                <div class="abstract">
                    Jantă din aliaj de 14&quot; x 5&frac12;&quot; cu 8 spiţe
                </div>
                <div class="body">
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Ka Exterior: [TOPIC OF IMAGE]" title="Ka Exterior: [TOPIC OF IMAGE]" src="/assets/img/ka/1214371724089.jpg">

            </div>
            <header class="bti-title">Aliaj</header>
            <div class="bti-body">
                <div class="abstract">
                    Jantă din aliaj de 15&quot; x 6&quot; cu 13 spiţe
                </div>
                <div class="body">
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Jant&amp;#259; din aliaj de 15&amp;quot;" title="Jant&amp;#259; din aliaj de 15&amp;quot;" src="/assets/img/ka/1214375796175.jpg">

            </div>
            <header class="bti-title">Aliaj</header>
            <div class="bti-body">
                <div class="abstract">
                    Jantă din aliaj de 15&quot; x 6&quot; cu 7x2 spiţe argintii
                </div>
                <div class="body">
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Jant&amp;#259; din aliaj de 16&amp;quot;" title="Jant&amp;#259; din aliaj de 16&amp;quot;" src="/assets/img/ka/1214375656784.jpg">

            </div>
            <header class="bti-title">Aliaj</header>
            <div class="bti-body">
                <div class="abstract">
                    Jantă din aliaj de 16&quot; x 6&frac12;&quot; cu 5 spiţe &icirc;n Y
                </div>
                <div class="body">
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Jant&amp;#259; din aliaj alb de 15&amp;quot;" title="Jant&amp;#259; din aliaj alb de 15&amp;quot;" src="/assets/img/ka/1214375796120.jpg">

            </div>
            <header class="bti-title">Aliaj alb</header>
            <div class="bti-body">
                <div class="abstract">
                    Jante deosebite din aliaj alb de 15&quot; cu 7x2 spite
                </div>
                <div class="body">
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
<script id="TagIT.load" src='/cs/ContentServer?pagename=RORO4_ENGINE/script/packager&c=Page&cid=1204968940709&location=load&isMobile=false&require=main' defer></script>
</div>