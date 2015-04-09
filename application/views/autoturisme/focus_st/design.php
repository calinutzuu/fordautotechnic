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
        </a><span></span></li><li>Focus ST</li></ul>
    </nav>
    <script>
        var vehicleimagepackpresid = '1205035165459';
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
        var bootstrapVehicleData = {"vehicles":[{"strIntroToFord": " ","brand": "Ford","vehicleType": "PV","catalogId": "NONE","nameplate": "Focus ST","labelAvailableFrom": "&nbsp;","formattedCurrency": "","nameplateText": "Noul Focus ST este o ma\u015Fina de \u00EEnalt\u0103 performan\u0163\u0103 care, \u00EEn acela\u015Fi timp, transform\u0103 condusul de zi cu zi \u00EEntr-o adev\u0103rat\u0103 pl\u0103cere.","imagePack": false,"hideVehicleImage": false,"images": [],"backgroundImagePath": ["/assets/img/focus_st/1214480083822.jpg","null","null"],"disclaimerTextColor": [null,null,null],"current": true,"cid": "1205018010103","cta": [{"linkTitle": "DESCARC\u0102 BRO\u015EUR\u0102 ","linkURL": "\/SBE\/Brosura\/DescarcaBrosura","linkType": "primary","linkTarget": "_blank","omid": "va"},{"linkTitle": "\u00CENSCRIE-TE LA TEST DRIVE ","linkURL": "\/SBE\/TestDrive?shopcode=AUTHORED","linkType": "tertiary","linkTarget": "_blank","omid": "tr"},{"linkTitle": "VREAU SĂ FIU INFORMAT(Ă) ","linkURL": "/SBE/VreauSaFiuInformata","linkType": "tertiary","linkTarget": "","omid": "tr"}],"social": {"facebook": "https://facebook.com","facebookPage": "fordromania"},"disclaimer": "Modelul prezentat este un Focus ST","seriesCode": "AUTHORED","uscCode": "AUTHORED","presId": "1205035165459","promos": [],"idf": {"options":[{"dataOverlay": {"mediaType":"Flash","height":"439","width":"780"},"iconURL":"/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobheader=image%2Fjpg&blobwhere=1214480084230&blobkey=id","link":"/cs/ContentServer?cid=1205018009552&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Flash_C&amp;site=RORO4_ENGINE","videoSrc":[{"src1":""},{"src2":""}],"youtubeClose":"","tooltipText":"Focus ST"}]}}]} || {};
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
                <li class="default-nameplate-vehicle" style="background-image:url(/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobheader=image%2Fjpg&blobwhere=1214480083822&blobkey=id)">
                    <div class="layered-nameplate-image">
                        <div class="image-holder">
                        </div>
                    </div>
                    <aside class="nameplate-disclaimer ">
                        Modelul prezentat este un Focus ST
                    </aside>
                </li>
            </ul>
            <div itemscope itemtype="http://schema.org/Product" id="nameplateDetails" class="nameplate-vehicle">
                <!--the text description-->
                <div class="name-plate-text">
                    <p class="intro"> </p>
                    <h1 class="bigHeading">
                        <span itemprop="model" itemscope itemtype="http://schema.org/Organization" class="mark">Ford</span>
                        <span itemprop="member" class="nameplate boldTxt">Focus ST</span>
                    </h1>
                    <!--The price-->
                    <!--The blurb-->
                    <p class="blurb">
                        Noul Focus ST este o maşina de &icirc;naltă performanţă care, &icirc;n acelaşi timp, transformă condusul de zi cu zi &icirc;ntr-o adevărată plăcere.
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
            <li><a href="/Autoturisme/Focus-ST/#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/Focus-ST/Prezentare">Prezentare general&#259;</a>
            </li>
            <li class="selected"><a href="/Autoturisme/Focus-ST/Design#primaryTabs" data-ajaxlink="/Autoturisme/Focus-ST/Design">Design</a>
            </li>
            <li><a href="/Autoturisme/Focus-ST/ExperientaLaVolan#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/Focus-ST/ExperientaLaVolan">Experien&#355;a la volan</a>
            </li>
            <li><a href="/Autoturisme/Focus-ST/Performanta#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/Focus-ST/PerformantaSiEficienta">Performan&#355;&#259; &#351;i eficien&#355;&#259;</a>
            </li>
            <li><a href="/Autoturisme/Focus-ST/Siguranta#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/Focus-ST/Siguranta">Siguran&#355;&#259;</a>
            </li>
            <li><a href="#" id="moreTab">Mai multe...</a><span></span></li>
        </ul>
    </nav>
</div>
<nav class="sub-nav ">
    <ul>
        <li><a href="/Autoturisme/Focus-ST/ListaPreturi"
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
            <h1>Design remarcabil dar rafinat</h1>
        </header>
        <div class="bto-body">
            <div class="abstract">
                După o singură privire asupra noului Focus ST vei fi impresionat de aspectul său agresiv, puternic și de garda la sol joasă. Designul interior cu influenţe sport este at&acirc;t &icirc;ndrăzneţ, c&acirc;t şi distinctiv, iar &icirc;mpreună cu scaunele sport Recaro ergonomice alcătuiesc un aspect destinat exclusiv gamei ST.
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
            <li><a href='#tab1' class='omt_'>Interior</a></li>
            <li><a href='#tab2' class='omt_'>Exterior</a></li>
            <li><a href='#tab3' class='omt_'>Jante din aliaj</a></li>
            <li><a href='#tab4' class='omt_'>Culori</a></li>
            <li><a href='#tab5' class='omt_'>Accesorii</a></li>
        </ul>
    </nav>
</div>
<!-- BEGIN [MidPageTabs] -->
<div class="innertab-wrapper">
<!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Interior</a></h2> -->
<div id='tab1' class="tab-content" style="display:none;">
    <section class="bto-wrapper">
        <article class="bto-item">
            <header class="bto-title">
                <h1> </h1>
            </header>
            <div class="bto-body">
                <div class="abstract">
                    Spiritul sportiv al maşinii se face simţit at&acirc;t la exterior c&acirc;t şi la interior. Scaunele sport Recaro, cadranele de culoare roşie, instrumentele şi indicatoarele de bord şi volanul tapiţat cu piele sunt doar c&acirc;teva din caracteristicile de design specifice maşinilor de curse.
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

                        <img alt="Focus ST interior" title="Focus ST interior" src="/assets/img/focus_st/1214437371037.jpg">

                </div>
                <div class="igg-body">Focus ST interior</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Focus ST portbagaj" title="Focus ST portbagaj" src="/assets/img/focus_st/1214437370733.jpg">

                </div>
                <div class="igg-body">Focus ST portbagaj</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Focus ST scaune cu sistem Fold flat" title="Focus ST scaune cu sistem Fold flat" src="/assets/img/focus_st/1214437370853.jpg">

                </div>
                <div class="igg-body">Focus ST scaune cu sistem Fold flat</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Scaune Recaro ST" title="Scaune Recaro ST" src="/assets/img/focus_st/1214437370793.jpg">

                </div>
                <div class="igg-body">Scaune Recaro ST</div>
            </article>
        </div>
        <div class="igg-row">
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Focus ST pedale din aluminiu" title="Focus ST pedale din aluminiu" src="/assets/img/focus_st/1214437370913.jpg">

                </div>
                <div class="igg-body">Focus ST pedale din aluminiu</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Focus ST schimbator de viteze cu manson din piele" title="Focus ST schimbator de viteze cu manson din piele" src="/assets/img/focus_st/1214437370974.jpg">

                </div>
                <div class="igg-body">Focus ST schimbator de viteze cu manson din piele</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Focus ST tablou de bord" title="Focus ST tablou de bord" src="/assets/img/focus_st/1214437371098.jpg">

                </div>
                <div class="igg-body">Focus ST tablou de bord</div>
            </article>
        </div>
    </section>
</div>
<!--</div>-->
<!--<div id='tab2' class="mp-tab-wrapper">
<h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">Exterior</a></h2> -->
<div id='tab2' class="tab-content" style="display:none;">
    <section class="bto-wrapper">
        <article class="bto-item">
            <header class="bto-title">
                <h1> </h1>
            </header>
            <div class="bto-body">
                <div class="abstract">
                    &Icirc;nsuși designul exterior al noului Focus ST oferă indicii clare privind performanţa - grila frontală supradimensionată, pragurile laterale distinctive, forma uimitoare a ţevii de eşapament dublă, aşezată central, spoilerul spate destinat exclusiv gamei ST şi etrierele de culoare roşie (opţional). Vezi ma jos c&acirc;teva din cele mai importante caracteristici ale designului exterior.
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

                        <img alt="Focus ST etriere" title="Focus ST etriere" src="/assets/img/focus_st/1214437369237.jpg">

                </div>
                <div class="igg-body">Focus ST etriere</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Focus ST esapament central" title="Focus ST esapament central" src="/assets/img/focus_st/1214437369177.jpg">

                </div>
                <div class="igg-body">Focus ST esapament central</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Focus ST grila trapezoidala" title="Focus ST grila trapezoidala" src="/assets/img/focus_st/1214437369297.jpg">

                </div>
                <div class="igg-body">Focus ST grila trapezoidala</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Focus ST design aerodinamic" title="Focus ST design aerodinamic" src="/assets/img/focus_st/1214437369117.jpg">

                </div>
                <div class="igg-body">Focus ST design aerodinamic</div>
            </article>
        </div>
        <div class="igg-row">
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Focus ST spoiler spate" title="Focus ST spoiler spate" src="/assets/img/focus_st/1214437369057.jpg">

                </div>
                <div class="igg-body">Focus ST spoiler spate</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Focus ST" title="Focus ST" src="/assets/img/focus_st/1214437369357.jpg">

                </div>
                <div class="igg-body">Focus ST</div>
            </article>
        </div>
    </section>
</div>
<!--</div>-->
<!--<div id='tab3' class="mp-tab-wrapper">
<h2><a href='#tab3' class="mp-tab omt_xd_mt_ti">Jante din aliaj</a></h2> -->
<div id='tab3' class="tab-content" style="display:none;">
    <section class="bto-wrapper">
        <article class="bto-item">
            <header class="bto-title">
                <h1> </h1>
            </header>
            <div class="bto-body">
                <div class="abstract">
                    Focus ST vine echipat cu jante de aliaj de 18'', de culoare argintie sau gri metalizat, dar şi cu etriere roşii (opțional). Pneurile sale au fost create special pentru a oferi aderenţă excepțională şi durată lungă de exploatare. Descoperă-le mai jos.
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

                        <img alt="Focus ST 5 Spite 18&quot;" title="Focus ST 5 Spite 18&quot;" src="/assets/img/focus_st/1214437370539.jpg">

                </div>
                <div class="igg-body">Focus ST 5 Spite 18&quot;</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Focus ST 15 Spite 18&quot; Black" title="Focus ST 15 Spite 18&quot; Black" src="/assets/img/focus_st/1214437369731.jpg">

                </div>
                <div class="igg-body">Focus ST 15 Spite 18&quot; Black</div>
            </article>
        </div>
    </section>
</div>
<!--</div>-->
<!--<div id='tab4' class="mp-tab-wrapper">
<h2><a href='#tab4' class="mp-tab omt_xd_mt_ti">Culori</a></h2> -->
<div id='tab4' class="tab-content" style="display:none;">
    <section class="igg-wrapper">
        <!--<script type="text/javascript" src="/cs/ContentServer?pagename=ENGInE%2fscript%2fGroupedJS"></script>-->
        <div class="igg-row">
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Focus ST in culoarea Panther Black" title="Focus ST in culoarea Panther Black" src="/assets/img/focus_st/1214437368817.jpg">

                </div>
                <div class="igg-body">Focus ST in culoarea Panther Black</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Focus ST in culoarea Colorado Red" title="Focus ST in culoarea Colorado Red" src="/assets/img/focus_st/1214437368009.jpg">

                </div>
                <div class="igg-body">Focus ST in culoarea Colorado Red</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Focus ST in culoarea Frozen White" title="Focus ST in culoarea Frozen White" src="/assets/img/focus_st/1214437368877.jpg">

                </div>
                <div class="igg-body">Focus ST in culoarea Frozen White</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Focus ST in  culoarea Performance Blue" title="Focus ST in  culoarea Performance Blue" src="/assets/img/focus_st/1214437368129.jpg">

                </div>
                <div class="igg-body">Focus ST in  culoarea Performance Blue</div>
            </article>
        </div>
        <div class="igg-row">
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Focus ST in culoarea Tangerine Scream" title="Focus ST in culoarea Tangerine Scream" src="/assets/img/focus_st/1214437368069.jpg">

                </div>
                <div class="igg-body">Focus ST in culoarea Tangerine Scream</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Focus ST in culoarea Moondust Silver" title="Focus ST in culoarea Moondust Silver" src="/assets/img/focus_st/1214437368937.jpg">

                </div>
                <div class="igg-body">Focus ST in culoarea Moondust Silver</div>
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
                <h1> </h1>
            </header>
            <div class="bto-body">
                <div class="abstract">
                    Ai la dispoziție o gamă extinsă de tapiţerii, culori de scaune şi accesorii de design, cu care &icirc;ţi poţi personaliza noul Focus ST exact aşa cum &icirc;ţi doreşti.
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

                        <img alt="Focus ST Tapiterie scaune - ST1" title="Focus ST Tapiterie scaune - ST1" src="/assets/img/focus_st/1214437368369.jpg">

                </div>
                <div class="igg-body">Focus ST Tapiterie scaune - ST1</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Focus ST Tapiterie scaune - ST2" title="Focus ST Tapiterie scaune - ST2" src="/assets/img/focus_st/1214437368429.jpg">

                </div>
                <div class="igg-body">Focus ST Tapiterie scaune - ST2</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Focus ST Tapiterie scaune - ST2" title="Focus ST Tapiterie scaune - ST2" src="/assets/img/focus_st/1214437368249.jpg">

                </div>
                <div class="igg-body">Focus ST Tapiterie scaune - ST2</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Focus ST Tapiterie scaune - ST2" title="Focus ST Tapiterie scaune - ST2" src="/assets/img/focus_st/1214437368309.jpg">

                </div>
                <div class="igg-body">Focus ST Tapiterie scaune - ST2</div>
            </article>
        </div>
        <div class="igg-row">
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Focus ST Tapiterie scaune - ST2" title="Focus ST Tapiterie scaune - ST2" src="/assets/img/focus_st/1214437368997.jpg">

                </div>
                <div class="igg-body">Focus ST Tapiterie scaune - ST2</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Focus ST Tapiterie scaune - ST3" title="Focus ST Tapiterie scaune - ST3" src="/assets/img/focus_st/1214437369417.jpg">

                </div>
                <div class="igg-body">Focus ST Tapiterie scaune - ST3</div>
            </article>
            <article class="igg-item">
                <div class="igg-image">

                        <img alt="Focus ST Tapiterie scaune spate - ST3" title="Focus ST Tapiterie scaune spate - ST3" src="/assets/img/focus_st/1214437369477.jpg">

                </div>
                <div class="igg-body">Focus ST Tapiterie scaune spate - ST3</div>
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
<script id="TagIT.load" src='/cs/ContentServer?pagename=RORO4_ENGINE/script/packager&c=Page&cid=1205018011997&location=load&isMobile=false&require=main' defer></script>
</div>