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
        </a><span></span></li><li>Tourneo Connect </li></ul>
    </nav>
    <script>
        var vehicleimagepackpresid = '1205058479712';
        var vehicleimagepackyear = 'NONE';
        var googleAdServerNameplateId = 'AUTHORED';
        var googleAdServerNameplateName = 'TBD';
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
        var bootstrapVehicleData = {"vehicles":[{"strIntroToFord": " ","brand": "Ford","vehicleType": "PV","catalogId": "NONE","nameplate": "Tourneo Connect ","labelAvailableFrom": "&nbsp;","formattedCurrency": "","nameplateText": "Nu trebuie s\u0103 sacrifica\u0163i confortul \u015Fi tehnologia doar pentru c\u0103 v\u0103 dori\u0163i un vehicul func\u0163ional \u015Fi versatil.","imagePack": false,"hideVehicleImage": false,"images": [],"backgroundImagePath": ["/assets/img/tourneo_connect/1214484912948.jpg","null","null"],"disclaimerTextColor": ["364957",null,null],"current": true,"cid": "1205056902750","cta": [{"linkTitle": "DESCARC\u0102 BRO\u015EUR\u0102 ","linkURL": "\/SBE\/Brosura\/DescarcaBrosura","linkType": "primary","linkTarget": "_blank","omid": "va"},{"linkTitle": "\u00CENSCRIE-TE LA TEST DRIVE ","linkURL": "\/SBE\/TestDrive?shopcode=AUTHORED","linkType": "tertiary","linkTarget": "_blank","omid": "tr"},{"linkTitle": "VREAU SĂ FIU INFORMAT(Ă) ","linkURL": "/SBE/VreauSaFiuInformata","linkType": "tertiary","linkTarget": "","omid": "tr"}],"social": {"facebook": "https://facebook.com","facebookPage": "fordromania"},"disclaimer": "     Modelul prezentat este un Tourneo Connect","seriesCode": "AUTHORED","uscCode": "AUTHORED","presId": "1205058479712","promos": [],"idf": {"options":[{"dataOverlay": {"mediaType":"Flash","height":"439","width":"780"},"iconURL":"/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobheader=image%2Fjpg&blobwhere=1214480715679&blobkey=id","link":"/cs/ContentServer?cid=1205032255640&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Flash_C&amp;site=RORO4_ENGINE","videoSrc":[{"src1":""},{"src2":""}],"youtubeClose":"","tooltipText":"Tourneo Connect"}]}}]} || {};
        var retrieveUserOptions = JSON.parse( localStorage.getItem('userSelection')) || {};
        //FranciB: injecting and changing user selected angle image trigger by mid page tabs and on page reload.
        //In order to stop the flickering between the default image and selected angle image in the centre stage.
        if(retrieveUserOptions.selectedImageAngle !== (null || "" || undefined)){
            bootstrapVehicleData.vehicles[0].images = [retrieveUserOptions.selectedImageAngle];
        }
    </script>
    <div id="fb-root"></div>
    <section class="x-axis-wrapper" id="vvmWrapper">
        <div itemscope itemtype="http://schema.org/ImageObject">
            <ul class="nameplate x-axis" id="vvmRoot">
                <li class="default-nameplate-vehicle" style="background-image:url(/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobheader=image%2Fjpg&blobwhere=1214484912948&blobkey=id)">
                    <div class="layered-nameplate-image">
                        <div class="image-holder">
                        </div>
                    </div>
                    <aside class="nameplate-disclaimer style=color:#364957">
                        Modelul prezentat este un Tourneo Connect
                    </aside>
                </li>
            </ul>
            <div itemscope itemtype="http://schema.org/Product" id="nameplateDetails" class="nameplate-vehicle">
                <!--the text description-->
                <div class="name-plate-text">
                    <p class="intro"> </p>
                    <h1 class="bigHeading">
                        <span itemprop="model" itemscope itemtype="http://schema.org/Organization" class="mark">Ford</span>
                        <span itemprop="member" class="nameplate boldTxt">Tourneo Connect </span>
                    </h1>
                    <!--The price-->
                    <!--The blurb-->
                    <p class="blurb">
                        Nu trebuie să sacrificaţi confortul şi tehnologia doar pentru că vă doriţi un vehicul funcţional şi versatil.
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
                <li class="selected">
                    <a href="/Autoturisme/NoulTourneoConnect/PrezentareGenerala#primaryTabs">Prezentare general&#259;</a>
                </li>
                <li><a href="/Autoturisme/NoulTourneoConnect/Design#primaryTabs">Design</a>
                </li>
                <li><a href="/Autoturisme/NoulTourneoConnect/ExperientaLaVolan#primaryTabs">Experien&#355;a la volan</a>
                </li>
                <li><a href="/Autoturisme/NoulTourneoConnect/Performanta#primaryTabs">Performan&#355;&#259; &#351;i eficien&#355;&#259;</a>
                </li>
                <li><a href="/Autoturisme/NoulTourneoConnect/Siguranta#primaryTabs" >Siguran&#355;&#259; &#351;i securitate</a>
                </li>
                <li><a href="#" id="moreTab">Mai multe...</a><span></span></li>
            </ul>
        </nav>
    </div>
    <nav class="sub-nav ">
        <ul>
            <li><a href="/Autoturisme/NoulTourneoConnect/StiluriDeCaroserie"
                    >Stiluri de caroserie</a></li>

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
                    <h1>NOUL <b>TOURNEO CONNECT</b> </h1>
                </header>
                <div class="bto-body">
                    <div class="abstract">
                        <br>
                        <div>Noul Tourneo Connect este un tip diferit de vehicul destinat transportului de persoane. Este unul inteligent.</div>
                        <br>
                        <div>Inteligent, pentru că este flexibil: &icirc;n Tourneo Connect au loc p&acirc;nă la cinci persoane, iar &icirc;n Grand Tourneo Connect maximum şapte. Şi, mulţumită celor p&acirc;nă la 16 configuraţii ale scaunelor, este, de asemenea, simplu să creaţi tot spaţiul pentru bagaje şi echipament de care aveţi nevoie. </div>
                        <br>
                        <div>Inteligent, deoarece vă puteţi bucura de performanţe excelente şi eficienţă excepţională a combustibilului din partea unei game largi de motoare pe benzină şi diesel avansate. Motorul revoluţionar EcoBoost pe benzină, de exemplu, consumă p&acirc;nă la 8,0 l/100 km &icirc;n varianta de 1,6 l cu transmisie automată cu 6 trepte de viteză şi 150 CP şi p&acirc;nă la 5,6 l/100 km &icirc;n varianta de 1,0 l cu transmisie manuală cu 6 trepte de viteză şi 100 CP. O opţiune de motor diesel avansat vă oferă un consum de 4,4 l/100 km. </div>
                        <br>
                        <div>Şi &icirc;ncă o dată inteligent, deoarece Tourneo Connect este dotat cu o gamă variată de tehnologii remarcabile. De la Ford SYNC cu comandă vocală, care vă permite să efectuaţi şi să preluaţi apeluri telefonice şi să controlaţi muzica prin intermediul unor comenzi vocale simple şi p&acirc;nă la Oprirea activă &icirc;n oraş, care vă poate ajuta să preveniţi coliziunile la viteze mici fr&acirc;n&acirc;nd &icirc;n locul dvs.: fiecare tehnologie &icirc;n parte este concepută pentru a vă face viaţa mai uşoară. </div>
                        <br>
                        <div>Adăugaţi multe dintre caracteristicile şi dotările pentru confort pe care le-aţi aştepta de la un vehicul de transport persoane premium, plus designul şi calitatea construcţiei făcute pentru a rezista şi Tourneo Connect ar putea fi alegerea inteligentă pentru dvs. </div>
                        <br>
                        <div>Aflaţi mai multe despre noul Tourneo Connect şi descoperiţi <a HREF="/Autoturisme/NoulTourneoConnect/Design" CONTENTEDITABLE="false" >designul</a>, <a HREF="/Autoturisme/NoulTourneoConnect/ExperientaLaVolan" CONTENTEDITABLE="false" >experienţa de condus</a>, <a HREF="/Autoturisme/NoulTourneoConnect/Performanta" CONTENTEDITABLE="false" >performanţa şi eficienţa</a>, <a HREF="/Autoturisme/NoulTourneoConnect/Siguranta" CONTENTEDITABLE="false" >siguranţa şi protecţia</a>, <a HREF="/Autoturisme/NoulTourneoConnect/StiluriDeCaroserie" CONTENTEDITABLE="false" >stilurile de caroserie şi capacitatea</a>, precum şi <a HREF="/Autoturisme/NoulTourneoConnect/Modele" CONTENTEDITABLE="false" >modelele disponibile</a>. </div>
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
                    <li><a href='#tab1' class='omt_'> </a></li>
                </ul>
            </nav>
        </div>
        <!-- BEGIN [MidPageTabs] -->
        <div class="innertab-wrapper">
            <!--<div id='tab1' class="mp-tab-wrapper">
            <h2><a href='#tab1' class="mp-tab omt_xd_mt_ti"> </a></h2> -->
            <div id='tab1' class="tab-content" style="display:none;">
                <section class="bti-wrapper">
                    <article class="bti-item">
                        <div class="bti-image">

                                <img alt="Noul Tourneo Connect" title="Noul Tourneo Connect" src="/assets/img/tourneo_connect/1214466879005.jpg">

                        </div>
                        <header class="bti-title">Tourneo Connect</header>
                        <div class="bti-body">
                            <div class="abstract">
                                <div>5 locuri</div>
                            </div>
                        </div>
                    </article>
                </section>
                <section class="bti-wrapper">
                    <article class="bti-item">
                        <div class="bti-image">

                                <img alt="Noul Grand Tourneo Connect" title="Noul Grand Tourneo Connect" src="/assets/img/tourneo_connect/1214466879079.jpg">

                        </div>
                        <header class="bti-title">Grand Tourneo Connect</header>
                        <div class="bti-body">
                            <div class="abstract">
                                <div>5 sau 7 locuri</div>
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
<script id="TagIT.load" src='/cs/ContentServer?pagename=RORO4_ENGINE/script/packager&c=Page&cid=1205056902714&location=load&isMobile=false&require=main' defer></script>
</div>