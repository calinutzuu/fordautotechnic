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
            <li><a href="/Autoturisme/Ka/Prezentare#primaryTabs"
                                    data-ajaxlink="/Autoturisme/Ka/Prezentare">Prezentare general&#259;</a>
            </li>
            <li class="selected"><a href="/Autoturisme/Ka/Designinterior#primaryTabs" class="om_mt_ti"
                   data-ajaxlink="/Autoturisme/Ka/Designinterior">Design interior</a>
            </li>
            <li><a href="/Autoturisme/Ka/Designexterior#primaryTabs" class="om_mt_ti"
                   data-ajaxlink="/Autoturisme/Ka/Designexterior">Design exterior</a>
            </li>
            <li><a href="/Autoturisme/Ka/PreturisiPromotii#primaryTabs" class="om_mt_ti"
                   data-ajaxlink="/Autoturisme/Ka/PreturisiPromotii">PRE&#354;URI &#350;I PROMO&#354;II</a>
            </li>
            <li><a href="/Autoturisme/Ka/MaterialeDescarcabile#primaryTabs" class="om_mt_ti"
                   data-ajaxlink="/Autoturisme/Ka/MaterialeDescarcabile">Materiale Desc&#259;rcabile</a>
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
                <h1>La fel de haios şi pe dinăuntru</h1>
            </header>
            <div class="bto-body">
                <div class="abstract">
                    Aruncă o privire &icirc;năuntru şi &icirc;ţi vei da imediat seama de unde ne-a venit inspiraţia pentru interiorul noului Ka. Decorul este un amestec plin de farmec al mai multor simboluri ale designului modern, dar finisajele executate cu măiestrie şi atenţia pentru detaliu sunt cele care fac modelul Ka să iasă cu adevărat &icirc;n evidenţă.
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
                <li><a href='#tab1' class='omt_'>Confort</a></li>
                <li><a href='#tab2' class='omt_'>Design interior</a></li>
                <li><a href='#tab3' class='omt_'>Instrumente şi comenzi</a></li>
            </ul>
        </nav>
    </div>
    <!-- BEGIN [MidPageTabs] -->
    <div class="innertab-wrapper">
        <!--<div id='tab1' class="mp-tab-wrapper">
        <h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Confort</a></h2> -->
        <div id='tab1' class="tab-content" style="display:none;">
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">

                            <img alt="Interior Ka" title="Interior Ka" src="/assets/img/ka/1214375824431.jpg">

                    </div>
                    <header class="bti-title">Design interior</header>
                    <div class="bti-body">
                        <div class="abstract">
                            Interiorul noului Ka are un design stilat, dinamic, cu contraste puternice, culori expresive şi detalii fanteziste. Consola centrală &icirc;n nuanţa Pearl White este inspirată de designeri moderni emblematici. &Icirc;ntr-adevăr, de la scaune la comenzi, totul prezintă niveluri de manoperă şi finisaj rar &icirc;nt&acirc;lnite la maşini de aceste dimensiuni. Rezultatul este un mediu distractiv şi modern &icirc;n care te vei bucura mereu să revii.
                        </div>
                    </div>
                </article>
            </section>
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">
                      <img alt="Scaune Ergonomice" title="Scaune Ergonomice" src="/assets/img/ka/1214375796284.jpg">
                    </div>
                    <header class="bti-title">Confort</header>
                    <div class="bti-body">
                        <div class="abstract">
                            &Icirc;ncep&acirc;nd cu versiunea Style, scaunele oferă un confort de neegalat pentru o maşină mică. Acestea includ un scaun şofer reglabil cu patru direcţii, scaun şofer rabatabil cu Easy Entry şi funcţie de memorie, spaţiu depozitare sub scaunul pasagerului şi banchetă spate &icirc;mpărţită 50:50.
                        </div>
                    </div>
                </article>
            </section>
        </div>
        <!--</div>-->
        <!--<div id='tab2' class="mp-tab-wrapper">
        <h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">Design interior</a></h2> -->
        <div id='tab2' class="tab-content" style="display:none;">
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">
                       <img alt="Tapi&#355;erie Ka" title="Tapi&#355;erie Ka" src="/assets/img/ka/1214484915691.jpg">

                    </div>
                    <header class="bti-title">Tapiţerie interioară</header>
                    <div class="bti-body">
                        <div class="abstract">
                            Interiorul noului Ka reprezintă o schimbare totală. Consola centrală &icirc;n nuanţa Pearl White este inspirată de designeri moderni emblematici. Există două culori principale pentru interior, o gamă de stiluri de design &icirc;n diferite culori pentru scaune şi chiar tapiţerii luxoase din piele.
                        </div>
                    </div>
                </article>
            </section>
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">
                        <img alt="Interior Ka" title="Interior Ka" src="/assets/img/ka/1214375824431.jpg">

                    </div>
                    <header class="bti-title">Opţiuni pentru interior</header>
                    <div class="bti-body">
                        <div class="abstract">
                            Adăug&acirc;nd un plus de profesionalism, acest interior opţional include un m&acirc;ner unic pentru schimbătorul de viteze cu finisaj din piele şi aluminiu şi burduf din vinil, m&acirc;ner fr&acirc;nă de m&acirc;nă din piele, burduf fr&acirc;nă de m&acirc;nă din vinil şi praguri interioare.
                        </div>
                    </div>
                </article>
            </section>
        </div>
        <!--</div>-->
        <!--<div id='tab3' class="mp-tab-wrapper">
        <h2><a href='#tab3' class="mp-tab omt_xd_mt_ti">Instrumente şi comenzi</a></h2> -->
        <div id='tab3' class="tab-content" style="display:none;">
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">
                      <img alt="Compatibilitate USB" title="Compatibilitate USB" src="/assets/img/ka/1214375661504.jpg">

                    </div>
                    <header class="bti-title">Conector MP3 şi USB</header>
                    <div class="bti-body">
                        <div class="abstract">
                            Noul Ka este prevăzut cu un sistem audio cu totul nou, av&acirc;nd şase difuzoare şi un CD player care poate reda şi fişiere MP3. Aşa că pentru a avea c&acirc;t mai puţine bagaje, poţi inscripţiona mai multe albume pe un singur disc. De asemenea, ai la dispoziţie o mufă mini jack pentru a &icirc;ţi conecta MP3 player-ul. Opţional, Advance Music Pack include un amplificator separat, difuzoare de calitate superioară şi un subwoofer de 100 W pentru sunete joase vibrante.
                        </div>
                    </div>
                </article>
            </section>
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">
                        <img alt="Tehnologia Bluetooth&reg;" title="Tehnologia Bluetooth&reg;" src="/assets/img/ka/1214375832129.jpg">
                    </div>
                    <header class="bti-title">Bluetooth® cu tehnologie de comandă vocală</header>
                    <div class="bti-body">
                        <div class="abstract">
                            Sistemul Bluetooth<sup>&reg;</sup> cu cu tehnologie de comandă vocală şi conector USB, &icirc;ţi permit să iniţiezi, să primeşti sau să respingi apeluri folosindu-ţi vocea sau utiliz&acirc;nd comenzile amplasate pe volan. De asemenea, poţi efectua apeluri tip conferinţă cu două numere diferite (dacă telefonul tău mobil suportă această funcţie). &Icirc;n plus, &icirc;ţi permite să asculţi muzică &icirc;ntr-o varietate de formate, provenind de la un card de memorie sau MP3 player prin intermediul conexiunii USB. Verifică-ţi compatibilitatea telefonului mobil.
                        </div>
                    </div>
                </article>
            </section>
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">
                                                  <img alt="Comenzi audio pe volan" title="Comenzi audio pe volan" src="/assets/img/ka/1214375795724.jpg">

                    </div>
                    <header class="bti-title">Comenzi de la distanţă pentru sistemul audio</header>
                    <div class="bti-body">
                        <div class="abstract">
                            Aceste butoane montate pe volan &icirc;ţi permit să foloseşti funcţiile esenţiale ale sistemului audio fără a lua m&acirc;na de pe volan.
                        </div>
                    </div>
                </article>
            </section>
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">

                            <img alt="Computer de bord Premium" title="Computer de bord Premium" src="/assets/img/ka/1214375832184.jpg">

                    </div>
                    <header class="bti-title">Computer de bord Premium</header>
                    <div class="bti-body">
                        <div class="abstract">
                            Cunoaşterea &icirc;nseamnă putere, iar acest computer de bord &icirc;ţi poate comunica viteza medie, consumul de combustibil, timpul deplasării şi distanţa, precum şi autonomia. De asemenea, acesta va afişa şi temperatura exterioară.
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
<script id="TagIT.load" src='/cs/ContentServer?pagename=RORO4_ENGINE/script/packager&c=Page&cid=1204968940717&location=load&isMobile=false&require=main' defer></script>
</div>