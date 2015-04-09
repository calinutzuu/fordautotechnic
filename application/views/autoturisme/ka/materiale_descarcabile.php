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
        var bootstrapVehicleData = {"vehicles":[{"strIntroToFord": " ","brand": "Ford","vehicleType": "PV","catalogId": "9322","nameplate": "Ka","labelAvailableFrom": "De la","formattedCurrency": "11.050 RON","nameplateText": "Original, prietenos \u015Fi fantastic de condus, Ka stabile\u015Fte standardele pentru ma\u015Finile mici.","imagePack": true,"hideVehicleImage": false,"images": ["/assets/img/ka/KA_GreyMatter_Front_00001.jpg"],"backgroundImagePath": ["/assets/img/ka/KA_GreyMatter_Front_00001.jpg"],"disclaimerTextColor": [null,null,null],"current": true,"cid": "1204961328389","cta": [{"linkTitle": "MODELE Ka","linkURL": "/Autoturisme/Ka/Modele","linkType": "primary","linkTarget": "","omid": "va"},{"linkTitle": "DESCARC\u0102 BRO\u015EUR\u0102 ","linkURL": "\/SBE\/Brosura\/DescarcaBrosura","linkType": "tertiary","linkTarget": "_blank","omid": "tr"},{"linkTitle": "\u00CENSCRIE-TE LA TEST DRIVE ","linkURL": "\/SBE\/TestDrive?shopcode=00G","linkType": "tertiary","linkTarget": "_blank","omid": "tr"},{"linkTitle": "VREAU SĂ FIU INFORMAT(Ă) ","linkURL": "/SBE/VreauSaFiuInformata","linkType": "tertiary","linkTarget": "","omid": "tr"}],"social": {"facebook": "https://facebook.com","facebookPage": "fordromania"},"disclaimer": "Modelul prezentat este un Ka Titanium. Imagine cu titlul de prezentare.","seriesCode": "DD8","uscCode": "00G","supportSelector": "true","supportSeries": "true","presId": "1205035171688","promos": [],"idf": {"options":[{"dataOverlay": {"mediaType":"Flash","height":"439","width":"780"},"iconURL":"/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobheader=image%2Fjpg&blobwhere=1214480084170&blobkey=id","link":"/cs/ContentServer?cid=1204985139140&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Flash_C&amp;site=RORO4_ENGINE","videoSrc":[{"src1":""},{"src2":""}],"youtubeClose":"","tooltipText":"Ford Ka"}]}}]} || {};
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
            <li><a href="/Autoturisme/Ka/Designexterior#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/Ka/Designexterior">Design exterior</a>
            </li>
            <li class="selected"><a href="/Autoturisme/Ka/MaterialeDescarcabile#primaryTabs" data-ajaxlink="/Autoturisme/Ka/MaterialeDescarcabile">Materiale Desc&#259;rcabile</a>
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
            <h1>Fotografii</h1>
        </header>
        <div class="bto-body">
            <div class="abstract">
                &nbsp;
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
            <li><a href='#tab1' class='omt_'>Fotografii exterior</a></li>
            <li><a href='#tab2' class='omt_'>Fotografii interior</a></li>
            <li><a href='#tab3' class='omt_'>Broşuri</a></li>
        </ul>
    </nav>
</div>
<!-- BEGIN [MidPageTabs] -->
<div class="innertab-wrapper">
<!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Fotografii exterior</a></h2> -->
<div id='tab1' class="tab-content" style="display:none;">
    <section class="bto-wrapper">
        <article class="bto-item">
            <header class="bto-title">
                <h1>Fotografii</h1>
            </header>
            <div class="bto-body">
                <div class="abstract">
                    Priveşte exteriorul elegant al modelului Ka.
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

                        <img alt="Ka &icirc;n mi&#351;care" title="Ka &icirc;n mi&#351;care" src="/assets/img/ka/1214375802103.jpg">

                </div>
                <div class="igg-body">Ka &icirc;n mi&#351;care</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Detaliu jant&#259; Ka" title="Detaliu jant&#259; Ka" src="/assets/img/ka/1214375659203.jpg">

                </div>
                <div class="igg-body">Detaliu jant&#259; Ka</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="C&#259;l&#259;tore&#351;te cu noul Ka" title="C&#259;l&#259;tore&#351;te cu noul Ka" src="/assets/img/ka/1214375803245.jpg">

                </div>
                <div class="igg-body">C&#259;l&#259;tore&#351;te cu noul Ka</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Detaliu far frontal Ka" title="Detaliu far frontal Ka" src="/assets/img/ka/1214375799975.jpg">

                </div>
                <div class="igg-body">Detaliu far frontal Ka</div>
            </article>
        </div>
        <div class="igg-row">
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Ka - v&#259;zut de sus" title="Ka - v&#259;zut de sus" src="/assets/img/ka/1214375818165.jpg">

                </div>
                <div class="igg-body">Ka - v&#259;zut de sus</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Vedere din fa&#355;&#259; - Ka" title="Vedere din fa&#355;&#259; - Ka" src="/assets/img/ka/1214375791509.jpg">

                </div>
                <div class="igg-body">Vedere din fa&#355;&#259; - Ka</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Vedere din lateral&#259; - Ka" title="Vedere din lateral&#259; - Ka" src="/assets/img/ka/1214484914547.jpg">

                </div>
                <div class="igg-body">Vedere din lateral&#259; - Ka</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Distreaz&#259;-te cu noul Ka &icirc;n culori fanteziste" title="Distreaz&#259;-te cu noul Ka &icirc;n culori fanteziste" src="/assets/img/ka/1214376115910.jpg">

                </div>
                <div class="igg-body">Distreaz&#259;-te cu noul Ka &icirc;n culori fanteziste</div>
            </article>
        </div>
        <div class="igg-row">
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Noul Ka - vedere din spate" title="Noul Ka - vedere din spate" src="/assets/img/ka/1214484912771.jpg">

                </div>
                <div class="igg-body">Noul Ka - vedere din spate</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Detaliu jant&#259; Ka" title="Detaliu jant&#259; Ka" src="/assets/img/ka/1214375791892.jpg">

                </div>
                <div class="igg-body">Detaliu jant&#259; Ka</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Ka &icirc;n trafic" title="Ka &icirc;n trafic" src="/assets/img/ka/1214375803137.jpg">

                </div>
                <div class="igg-body">Ka &icirc;n trafic</div>
            </article>
        </div>
    </section>
</div>
<!--</div>-->
<!--<div id='tab2' class="mp-tab-wrapper">
<h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">Fotografii interior</a></h2> -->
<div id='tab2' class="tab-content" style="display:none;">
    <section class="bto-wrapper">
        <article class="bto-item">
            <header class="bto-title">
                <h1>Fotografii</h1>
            </header>
            <div class="bto-body">
                <div class="abstract">
                    Priveşte interiorul elegant al modelului Ka.
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

                        <img alt="Detaliu panou de bord Ka" title="Detaliu panou de bord Ka" src="/assets/img/ka/1214375816197.jpg">

                </div>
                <div class="igg-body">Detaliu panou de bord Ka</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Spa&#355;iu de depozitare - Ka" title="Spa&#355;iu de depozitare - Ka" src="/assets/img/ka/1214375817900.jpg">

                </div>
                <div class="igg-body">Spa&#355;iu de depozitare - Ka</div>
            </article>
        </div>
    </section>
</div>
<!--</div>-->
<!--<div id='tab3' class="mp-tab-wrapper">
<h2><a href='#tab3' class="mp-tab omt_xd_mt_ti">Broşuri</a></h2> -->
<div id='tab3' class="tab-content" style="display:none;">
    <section class="bti-wrapper">
        <article class="bti-item">
            <header class="bti-title">Descarcă broşura</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Dacă te interesează informaţii mai detaliate despre gama de dotări, culorile disponibile, variantele de caroserie ori dimensiunile modelului Ka, poţi descărca broşura &icirc;n format electronic. </div>
                    <br>
                    <div><a TITLE="Brosura Ka (2,99 MB)" HREF="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheadervalue1=attachment%3Bfilename%3D%22Brosura+Ka.pdf%22&amp;blobheadervalue2=abinary%3Bcharset%3DUTF-8&amp;blobheadername1=Content-Disposition&amp;blobheadername2=MDT-Type&amp;blobheader=application%2Fpdf&amp;blobwhere=1214433204210&amp;blobkey=id" CLASS="download" onClick="if (typeof sford == 'object') omnitureLinkDownloadClick('brand:brochure download:<nameplate>','event15,event43','brochure:anonymous:pdf','event: brochure:pdf','download','brochure download','brochure:anonymous:pdf',false,'ford ka','2009','car');" ONCLICK="tc_log('/Downloads/eBRR/Autoturisme/KA_ebrosura_RO');" >Descarcă broşura</a>.</div>
                    <br>
                    <div>Fişierul &icirc;n format PDF a fost creat pentru a-ţi permite să vizualizezi şi să tipăreşti fişiere fără a avea nevoie de programul &icirc;n care au fost create iniţial. Adobe&trade; &icirc;ţi pune la dispoziţie o aplicaţie software gratuită (Acrobat Reader) care &icirc;ţi permite să lucrezi cu aceste fişiere. Dacă ai instalat deja această aplicaţie pe computerul tău, &icirc;n mod normal o poţi găsi la &quot;Programe&quot;, &icirc;n &quot;Meniul Start&quot;. &Icirc;n caz contrar, acceseză link-ul de mai jos pentru a o descărca. <br>
                        <br>
                        <a href="http://get.adobe.com/reader/">Descarcă Acrobat Reader de pe situl adobe.com</a></div>
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
<script id="TagIT.load" src='/cs/ContentServer?pagename=RORO4_ENGINE/script/packager&c=Page&cid=1204961328994&location=load&isMobile=false&require=main' defer></script>
</div>