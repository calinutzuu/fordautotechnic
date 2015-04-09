<script type="text/javascript">
    // mobile sniffer
    ForceRedirectUserAgents = 'android,iphone,blackberry';
    ForceRedirectUserAgentsBypass = 'Win64,Win32';
    ForceRedirectMinWidth = '480';
    MobileHomePageRedirectURL = 'http:\/\/m.ford.ro';
    MobileRedirectURL = MobileHomePageRedirectURL + '_Old/PromotiiCurente/PromotieLansare';
</script>
<div id="xAxis-detailed">
    <nav class="breadCrumb" role="navigation">
        <ul itemprop="breadcrumb">
            <li class="home"><a href="/" class="om_bc_li" title="Pagina principal&#259;">Pagina principal&#259;</a><span></span></li><li><a href="/Autoturisme" class="om_bc_li">
            Autoturisme
        </a><span></span></li><li>Focus </li></ul>
    </nav>
    <script>
        var vehicleimagepackpresid = '1205072254052';
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
        var bootstrapVehicleData = {"vehicles":[{"strIntroToFord": " Noul","brand": "Ford ","vehicleType": "PV","catalogId": "NONE","nameplate": "Focus ","labelAvailableFrom": "&nbsp;","formattedCurrency": "","nameplateText": "Cu un exterior complet restilizat, mai sculptat, \u015Fi cu un spa\u0163iu \u00EEn cabin\u0103 mai avansat \u015Fi mai sofisticat ca niciodat\u0103, acesta este cel mai rafinat Focus de p\u00E2n\u0103 acum.","imagePack": false,"hideVehicleImage": false,"images": [],"backgroundImagePath": ["/assets/img/noul_focus/1214481762939.jpg","null","null"],"disclaimerTextColor": [null,null,null],"current": true,"cid": "1205072239086","cta": [{"linkTitle": "DESCARC\u0102 BRO\u015EUR\u0102 ","linkURL": "\/SBE\/Brosura\/DescarcaBrosura","linkType": "primary","linkTarget": "_blank","omid": "va"},{"linkTitle": "\u00CENSCRIE-TE LA TEST DRIVE ","linkURL": "\/SBE\/TestDrive?shopcode=AUTHORED","linkType": "tertiary","linkTarget": "_blank","omid": "tr"},{"linkTitle": "VREAU SĂ FIU INFORMAT(Ă) ","linkURL": "/SBE/VreauSaFiuInformata","linkType": "tertiary","linkTarget": "","omid": "tr"}],"social": {"facebook": "https://facebook.com","facebookPage": "fordromania"},"disclaimer": "Modelul prezentat este un Focus","seriesCode": "AUTHORED","uscCode": "AUTHORED","presId": "1205072254052","promos": [{"imagePath": "/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobwhere=1214484913013&blobkey=id","overlay": false,"link": "/cs/ContentServer?pagename=RORO4_ENGINE/EP2/common/promo/M48_PromoBlock&c=Promo_C&cid=1205072268044","text": "Ofertă specială de lansare"}],"idf": {"options":[{"dataOverlay": {"mediaType":"Image","height":"435","width":"780"},"iconURL":"/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobheader=image%2Fjpg&blobwhere=1214481906810&blobkey=id","link":"/cs/ContentServer?cid=1205072236108&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Image_C&amp;site=RORO4_ENGINE","videoSrc":[{"src1":""},{"src2":""}],"youtubeClose":"","tooltipText":"Ford Focus"}]}}]} || {};
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
                <li class="default-nameplate-vehicle" style="background-image:url(/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobheader=image%2Fjpg&blobwhere=1214481762939&blobkey=id)">
                    <div class="layered-nameplate-image">
                        <div class="image-holder">
                        </div>
                    </div>
                    <aside class="nameplate-disclaimer ">
                        Modelul prezentat este un Focus
                    </aside>
                </li>
            </ul>
            <div itemscope itemtype="http://schema.org/Product" id="nameplateDetails" class="nameplate-vehicle">
                <!--the text description-->
                <div class="name-plate-text">
                    <p class="intro"> Noul</p>
                    <h1 class="bigHeading">
                        <span itemprop="model" itemscope itemtype="http://schema.org/Organization" class="mark">Ford </span>
                        <span itemprop="member" class="nameplate boldTxt">Focus </span>
                    </h1>
                    <!--The price-->
                    <!--The blurb-->
                    <p class="blurb">
                        Cu un exterior complet restilizat, mai sculptat, şi cu un spaţiu în cabină mai avansat şi mai sofisticat ca niciodată, acesta este cel mai rafinat Focus de până acum.
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
<section id="promoCarousel" class="promo-carousel box-shadow">
    <div id="promo-carousel-timer">7500</div>
    <div class="slide-wrapper">
        <article class="slate slide">
            <a href='/Promotii/PromotieLansareFordFocus'>
<span class="active-promo-rover">
<span class="bg-opacity"></span>
<span class="link-icon"></span>
</span>
                <img src="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobheader=image%2Fjpg&amp;blobwhere=1214484913013&amp;blobkey=id" alt="Ford Focus">
                <p class="promo-carousel-text"><span class="promo-carousel-bold">Ofertă specială de lansare</span></p></a>
        </article>
    </div>
</section>
<section id="non-js-promoCarousel" class="non-js-promo-carousel box-shadow">
    <div class="slide-wrapper">
        <p class="promo-carousel-text"><a href="/cs/ContentServer?pagename=RORO4_ENGINE/EP2/common/promo/M48_PromoBlock&amp;c=Promo_C&amp;cid=Ofertă specială de lansare" target="_blank">Ford Focus</a></p>
    </div>
</section>
<script type="text/javascript"> var nameplateTabErrorMsg = 'Ne pare r&#259;u, momentan nu putem s&#259; &icirc;nc&#259;rc&#259;m con&#539;inutul pe care l-a&#539;i solicitat. &Icirc;ncerca&#539;i din nou, mai t&acirc;rziu.'; </script>
<section id="primary-tab-content" class="nameplate-tab-content" data-dynamic-tabcontent="false">
    <div class="tab-wrapper">
        <nav class="tabs" id="primaryTabs">
            ul>
            <li class="selected">
                <a href="#primaryTabs">Ofert&#259; special&#259; de lansare Ford Focus</a>
            </li>
            <li><a href="/Autoturisme/NoulFocus/PrezentareGenerala#primaryTabs">Prezentare general&#259;</a>
            </li>
            <li><a href="/Autoturisme/NoulFocus/Design#primaryTabs">Design</a>
            </li>
            <li><a href="/Autoturisme/NoulFocus/PerformantaSiEficienta#primaryTabs">Performan&#355;&#259; &#351;i eficien&#355;&#259;</a>
            </li>
            <li><a href="/Autoturisme/NoulFocus/ExperientaLaVolan#primaryTabs">Experien&#355;a la volan</a>
            </li>
            <li><a href="#" id="moreTab">Mai multe...</a><span></span></li>
            </ul>
        </nav>
    </div>
    <nav class="sub-nav ">
        <ul>
            <li><a href="/Autoturisme/NoulFocus/SigurantaSiSecuritate"
                    >Siguran&#355;&#259; &#351;i securitate</a></li>
            <li><a href="/Autoturisme/NoulFocus/ListaDePreturi"
                    >List&#259; de pre&#355;uri &#351;i bro&#351;uri</a></li>
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
                    <h1>Noul Ford Focus – Imposibilul devine acum posibil!</h1>
                </header>
                <div class="bto-body">
                    <div class="abstract">
                        <div>Cu un exterior complet restilizat, mai sculptural, şi cu un spaţiu &icirc;n cabină mai avansat şi mai sofisticat ca niciodată, acesta este cel mai rafinat Focus de p&acirc;nă acum. &Icirc;n plus, noul Ford Focus integrează o gamă largă de noi tehnologii remarcabile. <br><br>Vino să &icirc;l descoperi la cel mai apropiat <a HREF="/SBE/Ford/DealeriFord" >dealer</a>!&nbsp;Vei avea ocazia să testezi tehnologii avansate, cum ar fi: <br><br><strong>Sistemul Ford SYNC 2 cu comandă vocală şi ecran tactil de 8&rdquo;</strong> &icirc;ţi permite să controlezi &icirc;n mod intuitiv sistemele de navigaţie, divertisment şi climatizare ale maşinii, doar cu ajutorul vocii. <br><br>Tehnologia &icirc;mbunătăţită de <strong>asistenţă activă la parcare</strong> te poate ajuta să faci, fără ajutorul m&acirc;inilor, parcări laterale, uşur&acirc;ndu-ţi, de asemenea, parcarea &icirc;n spaţii dispuse perpendicular pe bordură. Tehnologia poate detecta un spaţiu, control&acirc;nd apoi direcţia &icirc;n timp ce maşina se deplasează &icirc;n marşarier. &Icirc;n plus, sistemul de <strong>asistenţă la ieşirea din parcare</strong> este proiectat pentru a te ajuta să ieşi din cele mai dificile spaţii. <br><br>Motorul de ultimă generaţie EcoBoost de 1 litru, premiat &icirc;n trei ani consecutivi drept cel mai bun motor din lume, &icirc;ţi oferă echilibrul perfect dintre putere şi economie de combustibil. Ştim că eşti asaltat de cifre, aşa că &icirc;ţi oferim o comparaţie &ndash; poţi ajunge <strong>de la Bucureşti la Viena cu un singur plin!*</strong>. &Icirc;n plus, ai la dispoziţie o gamă largă de alte motorizări, at&acirc;t diesel c&acirc;t şi benzină. Iar transmisia avansată PowerShift şi schimbătorul de viteze cu padele amplasate pe volan maximizează performanţa şi eficienţa. <br><br>Iar adevăraţii pasionaţi pot beneficia de o ofertă specială de lansare pentru noul Ford Focus: <br><br>Pentru doar <strong>14.000</strong> Euro, TVA inclus, poţi demara la volanul noului Ford Focus Trend, cu 5 uşi, dotat cu motorizare de ultimă generaţie EcoBoost 1.0 l, 100 CP** şi cu dotări standard cum ar fi:</div><ul><li><div>6 airbaguri;</div></li><li><div>Volan şi schimbător &icirc;mbrăcate &icirc;n piele;</div></li><li><div>Sistem Ford MyKey;</div></li><li><div>Sistem de control avansat al cuplului motor;</div></li><li><div>Sistem de Asistență la plecarea din rampa (Hill Launch Assist);</div></li></ul><div>&Icirc;n plus, poţi profita de pachetele de accesorii Protection, Styling şi Performance la un preţ special de lansare. <br><br><em>*Estimare realizată pentru noul Ford Focus, 5 uşi, 1.0l EcoBoost, 100 CP, Euro 6, consum mixt 4.6 l/100 km, emisii CO2 (g/km): 105. <br>**Preţul exprimat include TVA și este valabil pentru Ford Focus, Trend, 5 uşi, 1.0l EcoBoost, 100 CP, Euro 6, consum mixt 4.6 l/100 km, emisii CO2 (g/km): 105, &nbsp;prin programul Prima Maşin</em><em><em>ă</em> de la Ford. Ofertă supusă unor termene și condiţii, valabilă &icirc;n limita stocului disponibil, la dealerii Ford participanţi la promoţie. </em></div><div></div>
                    </div>
                    <div class="body">
                    </div>
                </div>
            </article>
        </section>
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
<script id="TagIT.load" src='/cs/ContentServer?pagename=RORO4_ENGINE/script/packager&c=Page&cid=1205072239086&location=load&isMobile=false&require=main' defer></script>
</div>