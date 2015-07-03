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
                <li><a href="/Autoturisme/Focus-ST/Prezentare#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/Focus-ST/Prezentare">Prezentare general&#259;</a>
                </li>
                <li><a href="/Autoturisme/Focus-ST/Design#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/Focus-ST/Design">Design</a>
                </li>
                <li><a href="/Autoturisme/Focus-ST/ExperientaLaVolan#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/Focus-ST/ExperientaLaVolan">Experien&#355;a la volan</a>
                </li>
                <li><a href="/Autoturisme/Focus-ST/PreturisiPromotii#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/Focus-ST/PreturisiPromotii">PRE&#354;URI &#350;I PROMO&#354;II</a>
                </li>
                <li><a href="/Autoturisme/Focus-ST/PerformantaSiEficienta#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/Focus-ST/PerformantaSiEficienta">Performan&#355;&#259; &#351;i eficien&#355;&#259;</a>
                </li>
                <li class="selected" id="moreTab"><a href="#">Mai multe...</a><span></span></li>
            </ul>
        </nav>
    </div>
    <nav class="sub-nav open">
        <ul>
            <li class="selected"><a href="/Autoturisme/Focus-ST/Siguranta" class="om_mt_ti"
                    >Siguran&#355;&#259;</a></li>
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
                    <h1>Tehnologie premiată</h1>
                </header>
                <div class="bto-body">
                    <div class="abstract">
                        Este esenţial ca o maşină at&acirc;t de puternică precum noul Focus ST să fie echipată cu cele mai noi tehnologii de siguranţă și de asistare a şoferului. Anumite caracteristici au fost preluate de la noul Focus, care, recent, a devenit prima maşină c&acirc;ştigătoare a patru premii prestigioase Euro NCAP Advanced, pentru tehnologia Active City Stop, Sistem de avertizare si asistenta la pastrarea benzii de circulatie, Sistemul de Avertizare a Șoferului şi Sistemul de Avertizare Frontală (parte a pilotului automat cu sistem de ajustare a limitei de viteza).
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

                                <img alt="Focus ST cu controlul electronic al stabilitatii" title="Focus ST cu controlul electronic al stabilitatii" src="/assets/img/focus_st/1214437368187.jpg">

                        </div>
                        <header class="bti-title">ESC cu trei moduri de funcţionare, în caz de nevoie</header>
                        <div class="bti-body">
                            <div class="abstract">
                                <div>C&acirc;nd este complet activat, Controlul Electronic al Stabilităţii (ESC) monitorizează constant deplasarea autovehiculului. Acesta detectează orice deviere de la traiectoria aleasă. Astfel, &icirc;n cazul &icirc;n care autovehiculul &icirc;ncepe să patineze, sistemul corectează automat poziţia pe drum a autovehiculului, ajut&acirc;ndu-te să menţii controlul asupra mașinii. <br><br>La Focus ST, mai beneficiezi de alte două opţiuni. &Icirc;n primul r&acirc;nd, poţi selecta Modul Sport - o formă redusă a sistemului ESC, creată pentru a permite şoferilor de performanţă și experimentaţi să derapeze controlat cu maşina &icirc;n timpul virajelor pe pistele de curse. &Icirc;n al doilea r&acirc;nd, poţi alege să opreşti complet sistemul ESC - doar pentru şoferii profesionişti.</div>
                            </div>
                        </div>
                    </article>
                </section>
                <section class="bti-wrapper">
                    <article class="bti-item">
                        <div class="bti-image">

                                <img alt="Noul Ford Focus" title="Noul Ford Focus" src="/assets/img/focus_st/1214437369849.jpg">

                        </div>
                        <header class="bti-title">Două sisteme avansate create pentru siguranţa ta</header>
                        <div class="bti-body">
                            <div class="abstract">
                                <div>Mai &icirc;nt&acirc;i, &icirc;n cazul &icirc;n care &icirc;ncepi să părăseşti banda de deplasare, Sistemul de avertizare si asistenta la pastrarea benzii de circulatie, te alertează prin vibraţiile de la nivelul volanului şi prin afişarea unui avertisment vizual pe ecranul sistemului de informare a şoferului. (Poţi seta vibraţiile la unul dintre cele trei niveluri de sensibilitate). <br><br>Iar apoi, dacă reacţionezi mai greu sau deloc, Sistemul de avertizare si asistenta la pastrarea benzii de circulatie, te va ajuta să revii pe banda corectă &icirc;n deplină siguranță.</div>
                            </div>
                        </div>
                    </article>
                </section>
                <section class="bti-wrapper">
                    <article class="bti-item">
                        <div class="bti-image">

                                <img alt="Avertizare sofer" title="Avertizare sofer" src="/assets/img/focus_st/1214437369789.jpg">

                        </div>
                        <header class="bti-title">Sistemul de avertizare a şoferului atunci când eşti obosit</header>
                        <div class="bti-body">
                            <div class="abstract">
                                Sistemul de Avertizare a Șoferului &icirc;ți monitorizează constant stilul de condus şi detectează orice variaţie cauzată de oboseală. Dacă &icirc;ncepi să obosești, pe afişaj va apărea un semnal vizual de avertizare, care-ţi va sugera să iei o pauză.
                            </div>
                        </div>
                    </article>
                </section>
                <section class="bti-wrapper">
                    <article class="bti-item">
                        <div class="bti-image">

                                <img alt="Faza lunga automata" title="Faza lunga automata" src="/assets/img/focus_st/1214437370267.jpg">

                        </div>
                        <header class="bti-title">Fază lungă automată. Te ajută să vezi fără a-i orbi pe ceilalţi</header>
                        <div class="bti-body">
                            <div class="abstract">
                                O funcţie de nepreţuit pentru deplasările pe timp de noapte, Faza Lungă Automată trece temporar pe fază scurtă c&acirc;nd detectează trafic din sens opus sau un alt autovehicul &icirc;n faţă, pentru a nu-i orbi pe ceilalţi şoferi. Ulterior, aceasta revine automat la faza lungă, asigur&acirc;ndu-ți maximul de vizibilitate.
                            </div>
                        </div>
                    </article>
                </section>
                <section class="bti-wrapper">
                    <article class="bti-item">
                        <div class="bti-image">

                                <img alt="Active city stop" title="Active city stop" src="/assets/img/focus_st/1214437368741.jpg">

                        </div>
                        <header class="bti-title">Maşina poate să frâneze în locul tău pentru a evita coliziunile la viteze reduse</header>
                        <div class="bti-body">
                            <div class="abstract">
                                Tehnologia inovatoare Active City Stop te ajută să eviţi impacturile &icirc;n trafic lent sau la viteze sub 30 km/h. Dacă senzorii sistemului detectează că autovehiculul din faţă s-a oprit brusc, iar tu nu reacţionezi, va acţiona automat fr&acirc;nele &icirc;n locul tău.
                            </div>
                        </div>
                    </article>
                </section>
                <section class="bti-wrapper">
                    <article class="bti-item">
                        <div class="bti-image">

                                <img alt="Sistem de asistenta activa la parcare" title="Sistem de asistenta activa la parcare" src="/assets/img/focus_st/1214437370402.jpg">
                            </a>
                            <div class="icon-wrapper">
                                <a title="Zoom image" class="icon-zoom om_pv_xa_vo js-overlay" data-media-overlay='{"mediaType":"xZoom","height":439, "width":780}' href="/cs/ContentServer?cid=1205018009890&amp;pagename=RORO4_ENGINE%2FEP2%2Fbody%2Fcars%2Fxaxis_detailed%2Ftabs%2FExtremeImageZoom&amp;browserWidth=%25_browserWidth_%25&amp;c=Image_C&amp;browserHeight=%25_browserHeight_%25"></a>
                            </div>
                        </div>
                        <header class="bti-title">Spaţiu limitat de parcare? Lasă autovehiculul să parcheze pentru tine</header>
                        <div class="bti-body">
                            <div class="abstract">
                                Sistemul de Asistență Activă la Parcare te ajută să parchezi &icirc;n spaţii cu doar 20% mai lungi dec&acirc;t autovehiculul. Apeși, pur şi simplu, un buton iar senzorii acestui sistem inovator vor identifica un spaţiu destul de mare atunci c&acirc;nd treci pe l&acirc;ngă el. Apoi, tehnologia ghidează autovehiculul, &icirc;n vreme ce tu trebuie să acţionezi doar acceleraţia, schimbătorul de viteze şi fr&acirc;na. O caracteristică inteligentă, care, cu siguranţă, va impresiona.
                            </div>
                        </div>
                    </article>
                </section>
                <section class="bti-wrapper">
                    <article class="bti-item">
                        <div class="bti-image">

                                <img alt="Sistem de avertizare pentru unghiul mort" title="Sistem de avertizare pentru unghiul mort" src="/assets/img/focus_st/1214437369923.jpg">

                        </div>
                        <header class="bti-title">Tehnologie care îţi indică autovehiculele aflate în unghiul mort</header>
                        <div class="bti-body">
                            <div class="abstract">
                                Sistemul de monitorizare a unghiului mort utilizează senzori radar pentru a identifica autovehiculele care se pot afla &icirc;n unghiul mort, pe fiecare parte a autovehiculului tău. Apoi te avertizează printr-un led portocaliu, care se aprinde &icirc;n oglinzile laterale.
                            </div>
                        </div>
                    </article>
                </section>
            </div>
            <!--</div>-->
        </div> <!-- END [MidPageTabs] -->
    </article>
</section>
<!-- nosc comp -->
<script src="/cs/ContentServer?pagename=ENGInE/script/messaging/core"></script>
<script id="TagIT.load" src='/cs/ContentServer?pagename=RORO4_ENGINE/script/packager&c=Page&cid=1205018010165&location=load&isMobile=false&require=main' defer></script>
</div>