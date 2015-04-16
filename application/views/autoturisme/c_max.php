<div id="xAxis-detailed">
    <nav class="breadCrumb" role="navigation">
        <ul itemprop="breadcrumb">
            <li class="home"><a href="/" class="om_bc_li" title="Pagina principal&#259;">Pagina principal&#259;</a><span></span></li><li><a href="/Autoturisme" class="om_bc_li">
            Autoturisme
        </a><span></span></li><li>C-MAX &#351;i GRAND C-MAX</li></ul>
    </nav>
    <script>
        var vehicleimagepackpresid = '1205035168000';
        var vehicleimagepackyear = 'YYW';
        var googleAdServerNameplateId = '009';
        var googleAdServerNameplateName = 'C-MAX';
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
        var bootstrapVehicleData = {"vehicles":[{"strIntroToFord": " ","brand": "Ford","vehicleType": "PV","catalogId": "9325","nameplate": "C-MAX şi GRAND C-MAX","labelAvailableFrom": "De la","formattedCurrency": "20.250 RON","nameplateText": "Cu un nou design reproiectat complet, Ford C-MAX cu 5 locuri \u015Fi Grand C-MAX cu 7 locuri reprezint\u0103 combina\u0163ia perfect\u0103 dintre inova\u0163ie, stil \u015Fi flexibilitate.","imagePack": true,"hideVehicleImage": false,"images": ["/assets/img/c_max/CMAX_Compact_MoondustSilver_Front_00001.jpg"],"backgroundImagePath": ["/assets/img/c_max/CMAX_Compact_MoondustSilver_Front_00001.jpg","null","null"],"disclaimerTextColor": [null,null,null],"current": true,"cid": "1204976742384","cta": [{"linkTitle": "MODELE C-MAX şi GRAND C-MAX","linkURL": "/Autoturisme/C-MAX/Modele","linkType": "primary","linkTarget": "","omid": "va"},{"linkTitle": "DESCARC\u0102 BRO\u015EUR\u0102 ","linkURL": "\/SBE\/Brosura\/DescarcaBrosura","linkType": "tertiary","linkTarget": "_blank","omid": "tr"},{"linkTitle": "\u00CENSCRIE-TE LA TEST DRIVE ","linkURL": "\/SBE\/TestDrive?shopcode=009","linkType": "tertiary","linkTarget": "_blank","omid": "tr"},{"linkTitle": "VREAU SĂ FIU INFORMAT(Ă) ","linkURL": "/SBE/VreauSaFiuInformata","linkType": "tertiary","linkTarget": "","omid": "tr"}],"social": {"facebook": "https://facebook.com","facebookPage": "fordromania"},"disclaimer": "Modelul prezentat este un C-MAX şi GRAND C-MAX Titanium. Imagine cu titlul de prezentare.","seriesCode": "D9D","uscCode": "009","supportSelector": "true","supportSeries": "true","presId": "1205035168000","promos": [],"idf": {"options":[{"dataOverlay": {"mediaType":"Flash","height":"439","width":"780"},"iconURL":"/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobheader=image%2Fjpg&blobwhere=1214480084245&blobkey=id","link":"/cs/ContentServer?cid=1204981081282&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Flash_C&amp;site=RORO4_ENGINE","videoSrc":[{"src1":""},{"src2":""}],"youtubeClose":"","tooltipText":"C-MAX"}]}}]} || {};
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
                        Modelul prezentat este un C-MAX şi GRAND C-MAX Titanium. Imagine cu titlul de prezentare.
                    </aside>
                </li>
            </ul>
            <div itemscope itemtype="http://schema.org/Product" id="nameplateDetails" class="nameplate-vehicle">
                <!--the text description-->
                <div class="name-plate-text">
                    <p class="intro"> </p>
                    <h1 class="bigHeading">
                        <span itemprop="model" itemscope itemtype="http://schema.org/Organization" class="mark">Ford</span>
                        <span itemprop="member" class="nameplate boldTxt">C-MAX şi GRAND C-MAX</span>
                    </h1>
                    <!--The price-->
                    <!--The blurb-->
                    <p class="blurb">
                        Cu un nou design reproiectat complet, Ford C-MAX cu 5 locuri şi Grand C-MAX cu 7 locuri reprezintă combinaţia perfectă dintre inovaţie, stil şi flexibilitate.
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
                <a href="#primaryTabs">Prezentare general&#259;</a>
            </li>
            <li><a href="/Autoturisme/C-MAX/DesignExterior#primaryTabs">Design exterior</a>
            </li>
            <li><a href="/Autoturisme/C-MAX/DesignInterior#primaryTabs">Design interior</a>
            </li>
            <li><a href="/Autoturisme/C-MAX/MaterialeDescarcabile#primaryTabs">Materiale desc&#259;rcabile</a>
            </li>
            <li><a href="/Autoturisme/C-MAX/Tehnologii#primaryTabs">Tehnologii</a>
            </li>
            <li><a href="#" id="moreTab">Mai multe...</a><span></span></li>
        </ul>
    </nav>
</div>
<nav class="sub-nav ">
    <ul>
        <li><a href="/Autoturisme/C-MAX/SigurantaSiSecuritate"
                >Siguran&#355;&#259; &#351;i securitate</a></li>
        <li><a href="/Autoturisme/C-MAX/Performanta"
                >Performan&#355;&#259;</a></li>
        <li><a href="/Autoturisme/C-MAX/CuloriSiTapiterie"
                >Culori &#351;i tapi&#355;erie</a></li>
        <li><a href="/Autoturisme/C-MAX/ListaDePreturi"
                >Liste de pre&#355;uri</a></li>
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
            <h1>FORD <b>C-MAX</b> şi <b>GRAND C-MAX</b></h1>
        </header>
        <div class="bto-body">
            <div class="abstract">
                <div>Cu un nou design reproiectat complet, Ford C-MAX cu 5 locuri şi Grand C-MAX cu 7 locuri reprezintă combinaţia perfectă dintre inovaţie, stil şi flexibilitate.</div>
                <br>
                <div>Tehnologia avansată, performanţele agile şi fiabilitatea &icirc;mbunătăţită contribuie la sporirea plăcerii de a conduce. Cu niveluri actualizate de confort şi comoditate, gama uimitoare C-MAX va monopoliza complet clasa autovehiculelor multi-activitate. &Icirc;n orice sens şi din orice perspectivă, C-MAX şi Grand C-MAX sunt autovehicule de ultimă generaţie.</div>
                <br>
                <em>Notă: Disponibilitatea culorilor Limelight şi Dark Micastone poate varia.</em><br>
                <br>
                <div><em>Dat fiind faptul că aceasta este o prezentare generală a Ford C-MAX , unele dintre dotările menţionate pot fi opţiuni standard pentru &icirc;ntreaga gamă, pe c&acirc;nd altele pot fi dotări opţionale sau pot fi disponibile numai pentru anumite modele. Pentru detalii specifice te rugăm să consulţi cel mai apropiat <a HREF="/Hidden/Dealeri" CONTENTEDITABLE="false" >dealer Ford</a>.</em></div>
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
            <li><a href='#tab1' class='omt_'>Tabel de comparare</a></li>
            <li><a href='#tab2' class='omt_'>Dotări esenţiale</a></li>
            <li><a href='#tab3' class='omt_'>Noutăţi</a></li>
            <li><a href='#tab4' class='omt_'>Siguranţă</a></li>
            <li><a href='#tab5' class='omt_'>Mediul înconjurător</a></li>
        </ul>
    </nav>
</div>
<!-- BEGIN [MidPageTabs] -->
<div class="innertab-wrapper">
<!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Tabel de comparare</a></h2> -->
<div id='tab1' class="tab-content" style="display:none;">
    <section class="bti-wrapper">
        <article class="bti-item">
            <header class="bti-title">Poţi face o comparaţie rapidă între dotările autovehiculelor C-MAX şi Grand C-MAX.</header>
            <div class="bti-body">
                <div class="abstract">
                    <table cellspacing="1" cellpadding="3" border="1">
                        <tbody>
                        <tr>
                            <td valign="top" width="284">
                                <div><strong>Grand C-MAX</strong></div>
                            </td>
                            <td valign="top" width="284">
                                <div><strong>C-MAX</strong></div>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" width="284">
                                <div>✓ Uşi glisante spate</div>
                            </td>
                            <td valign="top" width="284">
                                <div><strong>X</strong> Uşi glisante spate</div>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" width="284">
                                <div>✓ Design cu spaţiu de trecere</div>
                            </td>
                            <td valign="top" width="284">
                                <div><strong>X </strong>Design cu spaţiu de trecere</div>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" width="284">
                                <div>✓ &Icirc;ncuietori electrice pentru protecţia copiilor</div>
                            </td>
                            <td valign="top" width="284">
                                <div>✓ &Icirc;ncuietori electrice pentru protecţia copiilor</div>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" width="284">
                                <div>✓ Scaune flexibile</div>
                            </td>
                            <td valign="top" width="284">
                                <div>✓ Scaune flexibile</div>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" width="284">
                                <div>✓ Pliere a scaunelor cu o singură m&acirc;nă</div>
                            </td>
                            <td valign="top" width="284">
                                <div>✓ Pliere a scaunelor cu o singură m&acirc;nă</div>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" width="284">
                                <div>✓ Sistem de reamintire pentru folosirea centurii de siguranţă pentru scaunele din spate</div>
                            </td>
                            <td valign="top" width="284">
                                <div><strong>X</strong> Sistem de reamintire pentru folosirea centurii de siguranţă pentru scaunele din spate</div>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" width="284">
                                <div>✓ Sistem de asistenţă activă la parcare*<br>
                                </div>
                            </td>
                            <td valign="top" width="284">
                                <div>✓ Sistem de asistenţă activă la parcare*<br>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" width="284">
                                <div>✓ Hayon acţionat electric</div>
                            </td>
                            <td valign="top" width="284">
                                <div>✓ Hayon acţionat electric</div>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" width="284">
                                <div>✓ Bluetooth<sup>&reg;</sup> cu comandă vocală</div>
                            </td>
                            <td valign="top" width="284">
                                <div>✓ Bluetooth<sup>&reg;</sup> cu comandă vocală</div>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" width="284">
                                <div>✓ Interfaţă om-maşină intuitivă, de ultimă generaţie</div>
                            </td>
                            <td valign="top" width="284">
                                <div>✓ Interfaţă om-maşină intuitivă, de ultimă generaţie</div>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" width="284">
                                <div>✓ Asistenţă la pornirea &icirc;n rampă</div>
                            </td>
                            <td valign="top" width="284">
                                <div>✓ Asistenţă la pornirea &icirc;n rampă</div>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" width="284">
                                <div>✓ Sistem de asistenţă pentru unghiul mort*<br>
                                </div>
                            </td>
                            <td valign="top" width="284">
                                <div>✓ Sistem de asistenţă pentru unghiul mort*<br>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" width="284">
                                <div>✓ Motoare EcoBoost pe benzină</div>
                            </td>
                            <td valign="top" width="284">
                                <div>✓ Motoare EcoBoost pe benzină</div>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" width="284">
                                <div>✓ Motoare diesel Duratorq eficiente din punctul de vedere al consumului de combustibil</div>
                            </td>
                            <td valign="top" width="284">
                                <div>✓ Motoare diesel Duratorq eficiente din punctul de vedere al consumului de combustibil</div>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" width="284">
                                <div>✓ Ford PowerShift</div>
                            </td>
                            <td valign="top" width="284">
                                <div>✓ Ford PowerShift</div>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" width="284">
                                <div>✓ Cameră video pentru vizualizare spate</div>
                            </td>
                            <td valign="top" width="284">
                                <div>✓ Cameră video pentru vizualizare spate</div>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" width="284">
                                <div>✓ Buton de pornire Ford Power </div>
                            </td>
                            <td valign="top" width="284">
                                <div>✓ Buton de pornire Ford Power </div>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" width="284">
                                <div>✓ Plafon panoramic*<br>
                                </div>
                            </td>
                            <td valign="top" width="284">
                                <div>✓ Plafon panoramic*<br>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <br>
                    *Dotare opţională.
                </div>
            </div>
        </article>
    </section>
</div>
<!--</div>-->
<!--<div id='tab2' class="mp-tab-wrapper">
<h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">Dotări esenţiale</a></h2> -->
<div id='tab2' class="tab-content" style="display:none;">
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
                <a href="/cs/ContentServer?cid=1204976740624&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25" class="js-overlay om_pv_xa_vo" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}'>
                    <img alt="Sistem de asisten&#355;&#259; activ&#259; la parcare " title="Sistem de asisten&#355;&#259; activ&#259; la parcare " src="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobwhere=1214383293663&amp;blobkey=id">
                </a>
                <div class="icon-wrapper">
                    <a title="Zoom image" class="icon-zoom om_pv_xa_vo js-overlay" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}' href="/cs/ContentServer?cid=1204976740624&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25"></a>
                </div>
            </div>
            <header class="bti-title">Sistem de asistenţă activă la parcare*</header>
            <div class="bti-body">
                <div class="abstract">
                    Te ajută să parchezi &icirc;n spaţii care sunt doar de 1,2 ori mai mari dec&acirc;t lungimea vehiculului tău. După confirmarea faptului că spaţiul este suficient de mare, sistemul ghidează volanul &icirc;n timp ce ţie nu &icirc;ţi mai răm&acirc;ne dec&acirc;t să controlezi pedalele. Indicatoarele audio şi video te ajută să efectuezi manevrele necesare. <br>
                    *Dotare opţională.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
                <a href="/cs/ContentServer?cid=1204976733971&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25" class="js-overlay om_pv_xa_vo" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}'>
                    <img alt="Grand C-MAX - scaune fexibile" title="Grand C-MAX - scaune fexibile" src="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobwhere=1214439022073&amp;blobkey=id">
                </a>
                <div class="icon-wrapper">
                    <a title="Zoom image" class="icon-zoom om_pv_xa_vo js-overlay" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}' href="/cs/ContentServer?cid=1204976733971&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25"></a>
                </div>
            </div>
            <header class="bti-title">Flexibilitate maximă cu Grand C-MAX</header>
            <div class="bti-body">
                <div class="abstract">
                    Interiorul ingenios cu 7 locuri al Grand C-Max &icirc;ţi asigură flexibilitatea accesării celui de-al treilea r&acirc;nd de locuri cu ajutorul unui spaţiu de trecere. Aceasta este asigurată prin plierea completă a scaunului din mijloc din cel de-al doilea r&acirc;nd şi este extrem de utilă atunci c&acirc;nd sunt montate scaune pentru copii.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
                <a href="/cs/ContentServer?cid=1204976740853&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25" class="js-overlay om_pv_xa_vo" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}'>
                    <img alt="C-MAX - scaune flexibile" title="C-MAX - scaune flexibile" src="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobwhere=1214383293793&amp;blobkey=id">
                </a>
                <div class="icon-wrapper">
                    <a title="Zoom image" class="icon-zoom om_pv_xa_vo js-overlay" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}' href="/cs/ContentServer?cid=1204976740853&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25"></a>
                </div>
            </div>
            <header class="bti-title">Versatilitate stilată a modelului C-MAX</header>
            <div class="bti-body">
                <div class="abstract">
                    Designul Ford C-MAX cuprinde trei scaune spate individuale, pliabile 40/20/40, cu opţiunea de creare a unui spaţiu mai luxos 2+2 sau de pliere completă a tuturor scaunelor. Acesta poate fi personalizat pentru a &icirc;ntruni cerinţele unei familii mai numeroase.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
                <a href="/cs/ContentServer?cid=1204976743930&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25" class="js-overlay om_pv_xa_vo" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}'>
                    <img alt="Grand C-MAX - u&#351;i glisante spate " title="Grand C-MAX - u&#351;i glisante spate " src="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobwhere=1214383295142&amp;blobkey=id">
                </a>
                <div class="icon-wrapper">
                    <a title="Zoom image" class="icon-zoom om_pv_xa_vo js-overlay" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}' href="/cs/ContentServer?cid=1204976743930&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25"></a>
                </div>
            </div>
            <header class="bti-title">Uşi glisante spate</header>
            <div class="bti-body">
                <div class="abstract">
                    Uşile glisante prevăzute pentru Grand C-MAX reprezintă o premieră pentru Ford.  Bine integrate, acestea completează aspectul &icirc;ndrăzneţ al Grand C-MAX şi sunt ideale pentru accesul uşor la locurile din spate şi evitarea ciocnirilor &icirc;n spaţiile restr&acirc;nse de parcare.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
                <a href="/cs/ContentServer?cid=1204976743163&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25" class="js-overlay om_pv_xa_vo" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}'>
                    <img alt="Hayon ac&#355;ionat electric" title="Hayon ac&#355;ionat electric" src="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobwhere=1214383294566&amp;blobkey=id">
                </a>
                <div class="icon-wrapper">
                    <a title="Zoom image" class="icon-zoom om_pv_xa_vo js-overlay" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}' href="/cs/ContentServer?cid=1204976743163&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25"></a>
                </div>
            </div>
            <header class="bti-title">Hayon acţionat electric</header>
            <div class="bti-body">
                <div class="abstract">
                    Poţi deschide hayonul folosind un buton de pe consola centrală, m&acirc;nerul pentru hayon sau tocul cheii &ndash; excelent c&acirc;nd ai m&acirc;inile ocupate. Designul inteligent &icirc;ţi permite să programezi unghiul de deschidere pentru a evita obstacolele, precum plafonul garajului. Pentru asigurarea protecţiei, doi senzori anti-prindere vor detecta orice blocaj la &icirc;nchidere şi vor garanta o deschidere sigură.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
                <a href="/cs/ContentServer?cid=1204976740490&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25" class="js-overlay om_pv_xa_vo" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}'>
                    <img alt="Motor EcoBoost de 1,6 litri" title="Motor EcoBoost de 1,6 litri" src="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobwhere=1214383293597&amp;blobkey=id">
                </a>
                <div class="icon-wrapper">
                    <a title="Zoom image" class="icon-zoom om_pv_xa_vo js-overlay" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}' href="/cs/ContentServer?cid=1204976740490&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25"></a>
                </div>
            </div>
            <header class="bti-title">Performanţe eficiente EcoBoost</header>
            <div class="bti-body">
                <div class="abstract">
                    Motorul pe benzină, turboalimentat, EcoBoost de 1,6 litri asigură o economie de combustibil de 18%, cu emisii de CO2* reduse cu 18% &icirc;n comparaţie cu motorul pe benzină Duratec de 2,0 litri. Aceasta este o tehnologie auto care aduce numai beneficii, asigur&acirc;nd performanţele specifice motoarelor cu capacitate mare &icirc;mpreună cu consumul redus de combustibil tipic unor motoare mult mai mici.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
                <a href="/cs/ContentServer?cid=1204976734736&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25" class="js-overlay om_pv_xa_vo" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}'>
                    <img alt="Sistem de reamintire pentru fixarea centurii de siguran&#355;&#259; " title="Sistem de reamintire pentru fixarea centurii de siguran&#355;&#259; " src="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobwhere=1214383291327&amp;blobkey=id">
                </a>
                <div class="icon-wrapper">
                    <a title="Zoom image" class="icon-zoom om_pv_xa_vo js-overlay" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}' href="/cs/ContentServer?cid=1204976734736&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25"></a>
                </div>
            </div>
            <header class="bti-title">Sistem de reamintire pentru fixarea centurii de siguranţă</header>
            <div class="bti-body">
                <div class="abstract">
                    Pentru a asigura liniştea şoferilor, alertele vizuale şi sonore indică momentul c&acirc;nd sunt fixate sau nefixate centurile de siguranţă. (numai pentru Grand C-MAX)
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
                <a href="/cs/ContentServer?cid=1204976735510&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25" class="js-overlay om_pv_xa_vo" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}'>
                    <img alt="Asisten&#355;&#259; la pornirea &icirc;n ramp&#259; " title="Asisten&#355;&#259; la pornirea &icirc;n ramp&#259; " src="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobwhere=1214383291651&amp;blobkey=id">
                </a>
                <div class="icon-wrapper">
                    <a title="Zoom image" class="icon-zoom om_pv_xa_vo js-overlay" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}' href="/cs/ContentServer?cid=1204976735510&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25"></a>
                </div>
            </div>
            <header class="bti-title">Asistenţă la pornirea în rampă</header>
            <div class="bti-body">
                <div class="abstract">
                    Acest sistem inovator previne alunecarea &icirc;n spate atunci c&acirc;nd porneşti din rampă. După ce eliberezi pedala de fr&acirc;nă &icirc;n poziţia de staţionare, tehnologia menţine roţile fr&acirc;nate, permiţ&acirc;nd şoferului să se mişte &icirc;n siguranţă.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <header class="bti-title"> </header>
            <div class="bti-body">
                <div class="abstract">
                    *Notă: toate cifrele referitoare la emisiile de CO2 &icirc;n g/km şi cifrele referitoare la consumul de combustibil provin de pe urma unor teste aprobate oficial, &icirc;n conformitate cu directiva CE 93/116/CE.  Cifrele citate referitoare la economia de combustibil sunt bazate pe Directiva Europeană privind Economia de combustibil, UE 80/1268/CEE şi diferă de rezultatele per ciclu de condus din alte regiuni ale lumii.
                </div>
            </div>
        </article>
    </section>
</div>
<!--</div>-->
<!--<div id='tab3' class="mp-tab-wrapper">
<h2><a href='#tab3' class="mp-tab omt_xd_mt_ti">Noutăţi</a></h2> -->
<div id='tab3' class="tab-content" style="display:none;">
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">
            <a href="/cs/ContentServer?cid=1204976740490&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25" class="js-overlay om_pv_xa_vo" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}'>
                <img alt="Motor EcoBoost de 1,6 litri" title="Motor EcoBoost de 1,6 litri" src="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobwhere=1214383293597&amp;blobkey=id">
            </a>
            <div class="icon-wrapper">
                <a title="Zoom image" class="icon-zoom om_pv_xa_vo js-overlay" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}' href="/cs/ContentServer?cid=1204976740490&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25"></a>
            </div>
        </div>
        <header class="bti-title">Evoluţia motorului pe benzină EcoBoost</header>
        <div class="bti-body">
            <div class="abstract">
                Motoarele EcoBoost cu turbocompresor asigură un cuplu mai mare şi un plus de putere, av&acirc;nd un consum de combustibil mai mic cu 18% şi emisii reduse de CO2 de p&acirc;nă la 18% &icirc;n comparaţie cu motorul pe benzină Duratec de 2,0 litri. Te vei putea bucura de performanţele sporite, tipice unui motor de capacitate mai mare, alături de consumul redus, specific unui motor mult mai mic.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">
            <a href="/cs/ContentServer?cid=1204976741282&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25" class="js-overlay om_pv_xa_vo" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}'>
                <img alt="Motor Duratorq TDCi de 2,0 litri" title="Motor Duratorq TDCi de 2,0 litri" src="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobwhere=1214383294012&amp;blobkey=id">
            </a>
            <div class="icon-wrapper">
                <a title="Zoom image" class="icon-zoom om_pv_xa_vo js-overlay" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}' href="/cs/ContentServer?cid=1204976741282&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25"></a>
            </div>
        </div>
        <header class="bti-title">Tehnologie diesel Ford Duratorq</header>
        <div class="bti-body">
            <div class="abstract">
                Tehnologia avansată &icirc;mbină performanţa cu un consum de combustibil substanţial redus şi emisii de CO2 scăzute. Motorul Duratorq TDCi, de 2,0 litri, cu 163 CP oferă acum mai multă putere cu un şi mai mare rafinament, asigur&acirc;nd o eficienţă impresionantă a combustibilului de 6,4 l/100 km (&icirc;n mediu urban) şi emisii de CO2 de doar 134 g/km* (&icirc;n cazul variantei C-MAX cu transmisie manuală).
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">
            <a href="/cs/ContentServer?cid=1204976742816&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25" class="js-overlay om_pv_xa_vo" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}'>
                <img alt="Transmisie Ford PowerShift " title="Transmisie Ford PowerShift " src="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobwhere=1214383294390&amp;blobkey=id">
            </a>
            <div class="icon-wrapper">
                <a title="Zoom image" class="icon-zoom om_pv_xa_vo js-overlay" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}' href="/cs/ContentServer?cid=1204976742816&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25"></a>
            </div>
        </div>
        <header class="bti-title">Transmisia Ford PowerShift</header>
        <div class="bti-body">
            <div class="abstract">
                Noile motoare sunt completate cu ajutorul transmisiei automate avansate, PowerShift, cu dublu ambreiaj şi şase trepte de viteză, fapt care face ca deplasările să devină mai line, mai pline de bună dispoziţie şi cu un consum de combustibil redus cu p&acirc;nă la 10%.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">
            <a href="/cs/ContentServer?cid=1204976733267&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25" class="js-overlay om_pv_xa_vo" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}'>
                <img alt="Sistem audio Sony ICP" title="Sistem audio Sony ICP" src="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobwhere=1214383290624&amp;blobkey=id">
            </a>
            <div class="icon-wrapper">
                <a title="Zoom image" class="icon-zoom om_pv_xa_vo js-overlay" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}' href="/cs/ContentServer?cid=1204976733267&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25"></a>
            </div>
        </div>
        <header class="bti-title">Sistem audio Sony ICP</header>
        <div class="bti-body">
            <div class="abstract">
                Cu finisaje Piano Black, sistemul audio Sony dispune de nouă difuzoare şi un amplificator de 265 waţi pentru a vă pune la dispoziţie cea mai modernă experienţă audio din interiorul unui autovehicul, experienţă bogată şi complexă chiar şi la volum redus. Conectivitatea este asigurată pentru USB, playere MP3 şi iPod<sup>&reg;</sup>.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">
            <a href="/cs/ContentServer?cid=1204976737981&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25" class="js-overlay om_pv_xa_vo" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}'>
                <img alt="Buton de pornire Ford Power " title="Buton de pornire Ford Power " src="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobwhere=1214383292677&amp;blobkey=id">
            </a>
            <div class="icon-wrapper">
                <a title="Zoom image" class="icon-zoom om_pv_xa_vo js-overlay" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}' href="/cs/ContentServer?cid=1204976737981&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25"></a>
            </div>
        </div>
        <header class="bti-title">Buton de pornire Ford Power</header>
        <div class="bti-body">
            <div class="abstract">
                S-a dus vremea &icirc;n care trebuia să introduci cheia &icirc;n contact pentru a porni maşina. Trebuie doar să acţionezi butonul de pornire &icirc;n timp ce menţii apăsat ambreiajul (sau pedala de fr&acirc;nă &icirc;n cazul modelului cu transmisie automată) şi motorul porneşte.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">
            <a href="/cs/ContentServer?cid=1204976734602&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25" class="js-overlay om_pv_xa_vo" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}'>
                <img alt="Plafon panoramic" title="Plafon panoramic" src="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobwhere=1214383291273&amp;blobkey=id">
            </a>
            <div class="icon-wrapper">
                <a title="Zoom image" class="icon-zoom om_pv_xa_vo js-overlay" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}' href="/cs/ContentServer?cid=1204976734602&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25"></a>
            </div>
        </div>
        <header class="bti-title">Plafon panoramic*</header>
        <div class="bti-body">
            <div class="abstract">
                Plafonul panoramic alcătuit dintr-o singură bucată asigură &icirc;ntregii familii o senzaţie extraordinară de libertate, lux şi spaţiu. Parasolarele acţionate electric &icirc;ţi permit să controlezi fără niciun fel de efort cantitatea de lumină care pătrunde &icirc;n maşină dinspre zona plafonului.<br>
                *Dotare opţională.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">
            <a href="/cs/ContentServer?cid=1204976745206&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25" class="js-overlay om_pv_xa_vo" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}'>
                <img alt="C-MAX - interior" title="C-MAX - interior" src="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobwhere=1214439019440&amp;blobkey=id">
            </a>
            <div class="icon-wrapper">
                <a title="Zoom image" class="icon-zoom om_pv_xa_vo js-overlay" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}' href="/cs/ContentServer?cid=1204976745206&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25"></a>
            </div>
        </div>
        <header class="bti-title">Design interior</header>
        <div class="bti-body">
            <div class="abstract">
                Consola centrală sculptată şi panoul de bord captează atenţia şoferului şi a pasagerului faţă, &icirc;n timp ce detaliile, culorile tapiţeriei şi ornamentele adaugă un plus de sofisticare habitaclului. Designul armonios include &icirc;n mod elegant accente practice cu caracteristici ergonomice, plus sisteme audio şi de navigaţie de ultimă oră.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">
            <a href="/cs/ContentServer?cid=1204976745290&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25" class="js-overlay om_pv_xa_vo" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}'>
                <img alt="&Icirc;ncuietori electrice pentru protec&#355;ia copiilor" title="&Icirc;ncuietori electrice pentru protec&#355;ia copiilor" src="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobwhere=1214383296211&amp;blobkey=id">
            </a>
            <div class="icon-wrapper">
                <a title="Zoom image" class="icon-zoom om_pv_xa_vo js-overlay" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}' href="/cs/ContentServer?cid=1204976745290&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25"></a>
            </div>
        </div>
        <header class="bti-title">Încuietori electrice pentru protecţia copiilor</header>
        <div class="bti-body">
            <div class="abstract">
                Această dotare inovatoare existentă pe uşile glisante spate ale Grand C-MAX poate spori siguranţa familiei. Un simplu comutator de comandă de pe portiera şoferului garantează protecţia pasagerilor importanţi de pe locurile din spate şi previne deschiderea uşilor din interior.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">
            <a href="/cs/ContentServer?cid=1204976734736&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25" class="js-overlay om_pv_xa_vo" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}'>
                <img alt="Sistem de reamintire pentru fixarea centurii de siguran&#355;&#259; " title="Sistem de reamintire pentru fixarea centurii de siguran&#355;&#259; " src="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobwhere=1214383291327&amp;blobkey=id">
            </a>
            <div class="icon-wrapper">
                <a title="Zoom image" class="icon-zoom om_pv_xa_vo js-overlay" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}' href="/cs/ContentServer?cid=1204976734736&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25"></a>
            </div>
        </div>
        <header class="bti-title">Sistem de reamintire pentru fixarea centurii de siguranţă</header>
        <div class="bti-body">
            <div class="abstract">
                Grand C-MAX este prevăzut cu un sistem de reamintire pentru fixarea centurii de siguranţă. Acesta va emite alarme vizuale şi sonore către şofer &icirc;n cazul &icirc;n care centurile de siguranţă nu sunt fixate &icirc;nainte de a porni sau &icirc;n timpul deplasărilor.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">
            <a href="/cs/ContentServer?cid=1204976738152&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25" class="js-overlay om_pv_xa_vo" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}'>
                <img alt="Sistem de asisten&#355;&#259; pentru unghiul mort " title="Sistem de asisten&#355;&#259; pentru unghiul mort " src="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobwhere=1214383292731&amp;blobkey=id">
            </a>
            <div class="icon-wrapper">
                <a title="Zoom image" class="icon-zoom om_pv_xa_vo js-overlay" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}' href="/cs/ContentServer?cid=1204976738152&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25"></a>
            </div>
        </div>
        <header class="bti-title">Sistem de asistenţă pentru unghiul mort*</header>
        <div class="bti-body">
            <div class="abstract">
                Acest asistent vizual de &icirc;naltă tehnologie este oferit pentru a transforma călătoriile &icirc;n experienţe mai relaxante, &icirc;n special, pe autostradă. Atunci c&acirc;nd un alt autovehicul pătrunde &icirc;n zona de unghi mort, sistemul te alertează prin intermediul lămpilor de avertizare montate &icirc;n oglinzile laterale.<br>
                *Dotare opţională.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">
            <a href="/cs/ContentServer?cid=1204976741587&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25" class="js-overlay om_pv_xa_vo" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}'>
                <img alt="Dispozitiv ajustabil de limitare a vitezei " title="Dispozitiv ajustabil de limitare a vitezei " src="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobwhere=1214383294066&amp;blobkey=id">
            </a>
            <div class="icon-wrapper">
                <a title="Zoom image" class="icon-zoom om_pv_xa_vo js-overlay" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}' href="/cs/ContentServer?cid=1204976741587&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25"></a>
            </div>
        </div>
        <header class="bti-title">Dispozitiv ajustabil de limitare a vitezei </header>
        <div class="bti-body">
            <div class="abstract">
                Făc&acirc;nd parte din tempomat, acest sistem &icirc;ţi permite să setezi viteza maximă proprie. Sistemul de management al motorului se asigură că viteza autovehiculului se menţine &icirc;ntre limitele setate, ajut&acirc;ndu-te să te concentrezi asupra drumului din faţă şi nu asupra vitezometrului. (Dotare opţională pentru Trend şi Titanium)
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">
            <a href="/cs/ContentServer?cid=1204976734472&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25" class="js-overlay om_pv_xa_vo" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}'>
                <img alt="Sistem de alimentare Ford Easy Fuel" title="Sistem de alimentare Ford Easy Fuel" src="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobwhere=1214383291218&amp;blobkey=id">
            </a>
            <div class="icon-wrapper">
                <a title="Zoom image" class="icon-zoom om_pv_xa_vo js-overlay" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}' href="/cs/ContentServer?cid=1204976734472&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25"></a>
            </div>
        </div>
        <header class="bti-title">Sistem de alimentare Ford Easy Fuel</header>
        <div class="bti-body">
            <div class="abstract">
                Nu mai este necesar să atingi buşoanele murdare.  &Icirc;n plus, sistemul Ford Easy Fuel cu protecţia sa unică te ajută să previi alimentarea accidentală cu un alt tip de combustibil.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">
            <a href="/cs/ContentServer?cid=1204976739081&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25" class="js-overlay om_pv_xa_vo" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}'>
                <img alt="Consol&#259; superioar&#259;" title="Consol&#259; superioar&#259;" src="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobwhere=1214383293381&amp;blobkey=id">
            </a>
            <div class="icon-wrapper">
                <a title="Zoom image" class="icon-zoom om_pv_xa_vo js-overlay" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}' href="/cs/ContentServer?cid=1204976739081&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25"></a>
            </div>
        </div>
        <header class="bti-title">Consolă superioară</header>
        <div class="bti-body">
            <div class="abstract">
                &Icirc;n spatele oglinzii retrovizoare, &icirc;n consola superioară, se află un suport pentru ochelari, care include o oglindă pentru supravegherea copiilor. Grand C-MAX este prevăzut cu un spaţiu de depozitare superior suplimentar pentru articole frecvent utilizate, cum ar fi hărţile.
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <header class="bti-title"> </header>
        <div class="bti-body">
            <div class="abstract">
                *Notă: toate cifrele referitoare la emisiile de CO2 &icirc;n g/km şi cifrele referitoare la consumul de combustibil provin de pe urma unor teste aprobate oficial, &icirc;n conformitate cu directiva CE 93/116/CE.  Cifrele citate referitoare la economia de combustibil sunt bazate pe Directiva Europeană privind Economia de combustibil, UE 80/1268/CEE şi diferă de rezultatele per ciclu de condus din alte regiuni ale lumii.
            </div>
        </div>
    </article>
</section>
</div>
<!--</div>-->
<!--<div id='tab4' class="mp-tab-wrapper">
<h2><a href='#tab4' class="mp-tab omt_xd_mt_ti">Siguranţă</a></h2> -->
<div id='tab4' class="tab-content" style="display:none;">
    <section class="bti-wrapper">
        <article class="bti-item">
            <header class="bti-title">Tehnologii de asistare a şoferului</header>
            <div class="bti-body">
                <div class="abstract">
                    O gamă de tehnologii &ndash; mai avansate dec&acirc;t &icirc;n cazul oricăror alte vehicule multi-activitate (MAV) &ndash; este destinată &icirc;mbunătăţirii nivelului de protecţie, &icirc;n acelaşi timp sporind confortul şi plăcerea de a conduce. Dotările inovatoare includ dispozitivul ajustabil de limitare a vitezei, sistemul de asistenţă activă la parcare şi tempomatul, care se &icirc;mbină &icirc;n mod inteligent pentru a-ţi asigura un plus de linişte.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <header class="bti-title">Sisteme de siguranţă activă</header>
            <div class="bti-body">
                <div class="abstract">
                    Aceste sisteme sunt &icirc;ntotdeauna &icirc;n aşteptare, gata să se activeze, ca răspuns la o problemă legată de siguranţă sau un eveniment anormal. Multe dintre acestea reprezintă dotări standard, at&acirc;t pe Ford C-MAX, c&acirc;t şi pe Grand C-MAX, fapt ce demonstrează angajamentul nostru privind standardele &icirc;nalte de siguranţă şi protecţie.  <br>
                    <br>
                    Pentru detalii privind toate tehnologiile de siguranţă activă care sunt prezente &icirc;n autovehiculele C-MAX şi Grand C-MAX, vezi secţiunea <a HREF="/Autoturisme/C-MAX/SigurantaSiSecuritate" CONTENTEDITABLE="false" >Siguranţă şi protecţie</a>.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <header class="bti-title">Sisteme de siguranţă pasivă</header>
            <div class="bti-body">
                <div class="abstract">
                    C-MAX şi Grand C-MAX sunt prevăzute cu cele mai noi tehnologii de protecţie a şoferului şi pasagerilor, iar elementul cheie al pachetului nostru de siguranţă pasivă este Sistemul Inteligent de Protecţie (IPS). Acesta include următoarele sisteme avansate, gata să intre &icirc;n acţiune &icirc;ntr-o fracţiune de secundă:
                    <ul>
                        <li>Airbaguri de dimensiuni normale  pentru şofer (60 l) şi pentru pasageri (110 l) ce includ cea mai modernă tehnologie de umflare &icirc;ntr-o singură etapă</li>
                        <li>Dispozitive de &icirc;naltă putere de pretensionare a centurilor de siguranţă şi limitatoare de sarcină pentru centurile scaunelor din faţă</li>
                        <li>Airbaguri laterale tip cortină, ca dotare standard, pentru ocupanţii primului şi celui de-al doilea r&acirc;nd de scaune şi airbaguri laterale pentru protecţia zonei toracice pentru pasagerii din faţă </li>
                        <li>Coloană de direcţie pliabilă care se distanţează de şofer &icirc;n cazul unei coliziuni şi este optimizată pentru absorbţia energiei şi protecţia picioarelor</li>
                        <li>Sistem de prevenire a intruziunii pedalelor (PIPS), &icirc;n care pedalele de siguranţă se pliază la distanţă de şofer pentru a preveni accidentarea acestuia &icirc;n cazul unui impact</li>
                        <li>Sistem de protecţie pasivă &icirc;mpotriva leziunilor cervicale pentru locurile din faţă, pentru a ajuta şoferul şi pasagerul faţă să evite leziunile cauzate de un impact din spate</li>
                        <li>Centuri de siguranţă cu prindere &icirc;n trei puncte, &icirc;n toate poziţiile, cu armături ajustabile pe &icirc;nălţime pentru centurile scaunelor din faţă</li>
                        <li>Sisteme de reamintire pentru fixarea centurii de siguranţă pentru şofer şi pasagerul din faţă şi pentru cel de-al doilea şi cel de-al treilea r&acirc;nd de scaune (exclusiv pentru Grand C-MAX cu 7 locuri)</li>
                        <li>Sisteme de prindere pentru scaunele pentru copii ISOFIX pe scaunele laterale din cel de-al doilea r&acirc;nd</li>
                        <li>Aprobare pentru scaunele universale pentru copii ISOFIX </li>
                        <li>Kit opţional pentru dezactivarea airbagului pentru pasager (montat de dealer)</li>
                        <li>Optimizare suplimentară pentru o gamă largă de profiluri pentru diferite conformaţii ale pasagerilor</li>
                        <li>Sistem de detectare a severităţii impactului cu senzori care oferă informaţii autovehiculului despre măsurile de siguranţă ce pot fi utilizate pentru optimizarea protecţiei  </li>
                        <li>Lumini de avarie automate &ndash; se activează automat &icirc;n caz de accident </li>
                    </ul>
                    *Notă: scaunele de copii nu trebuie poziţionate niciodată pe scaunul pasagerului din dreapta, atunci c&acirc;nd autovehiculul Ford este echipat cu airbag funcţional pentru scaunul pasagerului din faţă. Cel mai sigur loc pentru copii este pe scaunele din r&acirc;ndul doi, cu un sistem adecvat de reţinere.
                </div>
            </div>
        </article>
    </section>
</div>
<!--</div>-->
<!--<div id='tab5' class="mp-tab-wrapper">
<h2><a href='#tab5' class="mp-tab omt_xd_mt_ti">Mediul înconjurător</a></h2> -->
<div id='tab5' class="tab-content" style="display:none;">
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
                <a href="/cs/ContentServer?cid=1204976740490&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25" class="js-overlay om_pv_xa_vo" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}'>
                    <img alt="Motor EcoBoost de 1,6 litri" title="Motor EcoBoost de 1,6 litri" src="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobwhere=1214383293597&amp;blobkey=id">
                </a>
                <div class="icon-wrapper">
                    <a title="Zoom image" class="icon-zoom om_pv_xa_vo js-overlay" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}' href="/cs/ContentServer?cid=1204976740490&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25"></a>
                </div>
            </div>
            <header class="bti-title">Motoare pe benzină EcoBoost</header>
            <div class="bti-body">
                <div class="abstract">
                    Poţi alege motorul pe benzină EcoBoost cu turbocompresor, de 1,6 litri, care asigură o economie de combustibil de 18%, cu emisii de CO2* reduse cu 18% &icirc;n comparaţie cu motorul pe benzină Duratec de 2,0 litri. Acesta oferă performanţele tipice unui motor cu capacitate mare şi consumul redus de combustibil, specific unui motor cu mult mai mic. Astfel, poţi contribui la protejarea mediului &icirc;nconjurător, fără a compromite plăcerea de a conduce.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">
                <a href="/cs/ContentServer?cid=1204976741282&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25" class="js-overlay om_pv_xa_vo" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}'>
                    <img alt="Motor Duratorq TDCi de 2,0 litri" title="Motor Duratorq TDCi de 2,0 litri" src="/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobwhere=1214383294012&amp;blobkey=id">
                </a>
                <div class="icon-wrapper">
                    <a title="Zoom image" class="icon-zoom om_pv_xa_vo js-overlay" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}' href="/cs/ContentServer?cid=1204976741282&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25"></a>
                </div>
            </div>
            <header class="bti-title">Motoare diesel Duratorq TDCi evoluate</header>
            <div class="bti-body">
                <div class="abstract">
                    Fiind proiectate pentru asigurarea unor performanţe rafinate şi costuri reduse de proprietate, poţi alege din noua generaţie de motoare diesel Ford Duratorq TDCi. Cifrele impresionante ale economiei de combustibil şi emisiile reduse de CO2, &icirc;mbinate cu agilitatea caracteristică, plasează aceste motoare &icirc;ntr-o cu totul altă categorie. <br>
                    <br>
                    &Icirc;n plus, motorul Duratorq TDCi de 1,6 litri şi 115 CP este disponibil cu transmisia Ford PowerShift cu şase trepte de viteză şi ambreiaj dublu, economia de combustibil fiind astfel &icirc;mbunătăţită cu p&acirc;nă la 10% &icirc;n comparaţie cu o transmisie automată convenţională. Acest motor impresionant asigură o economie de combustibil (mediu urban) de 5,4 l/100 km şi emisii de CO2 de doar 119 g/km &icirc;n cazul autovehiculului C-MAX (129 g/km pentru Grand C-MAX*).
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <header class="bti-title">Emisii Euro 5</header>
            <div class="bti-body">
                <div class="abstract">
                    Motoarele C-MAX respectă &icirc;ntru totul noile standarde stringente Euro 5, ce conduc la niveluri scăzute de emisii şi CO2.
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <header class="bti-title"> </header>
            <div class="bti-body">
                <div class="abstract">
                    *Notă: toate cifrele referitoare la emisiile de CO2 &icirc;n g/km şi cifrele referitoare la consumul de combustibil provin de pe urma unor teste aprobate oficial, &icirc;n conformitate cu directiva CE 93/116/CE.  Cifrele citate referitoare la economia de combustibil sunt bazate pe Directiva Europeană privind Economia de combustibil, UE 80/1268/CEE şi diferă de rezultatele per ciclu de condus din alte regiuni ale lumii.
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
<script id="TagIT.load" src='/cs/ContentServer?pagename=RORO4_ENGINE/script/packager&c=Page&cid=1204976742384&location=load&isMobile=false&require=main' defer></script>
</div>