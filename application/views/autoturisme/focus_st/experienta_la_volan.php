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
                <li class="selected"><a href="/Autoturisme/Focus-ST/ExperientaLaVolan#primaryTabs" data-ajaxlink="/Autoturisme/Focus-ST/ExperientaLaVolan">Experien&#355;a la volan</a>
                </li>
                <li><a href="/Autoturisme/Focus-ST/PreturisiPromotii#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/Focus-ST/PreturisiPromotii">PRE&#354;URI &#350;I PROMO&#354;II</a>
                </li>
                <li><a href="/Autoturisme/Focus-ST/PerformantaSiEficienta#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/Focus-ST/PerformantaSiEficienta">Performan&#355;&#259; &#351;i eficien&#355;&#259;</a>
                </li>
                <li><a href="#" id="moreTab">Mai multe...</a><span></span></li>
            </ul>
        </nav>
    </div>
    <nav class="sub-nav ">
        <ul>
            <li><a href="/Autoturisme/Focus-ST/Siguranta"
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
                <h1>Un mod mai sofisticat de exaltare</h1>
            </header>
            <div class="bto-body">
                <div class="abstract">
                    Datorită performanțelor tehnice foarte avansate, noul Focus ST &icirc;ți poate oferi emoţii și adrenalină oric&acirc;nd simți nevoia. Dar această maşină este pe c&acirc;t de sportivă, pe at&acirc;t de sofisticată. Tehnologia inovatoare cu care este chipată te menţine conectat cu lumea din exterior şi transformă condusul zilnic &icirc;ntr-o experienţă rafinată şi confortabilă. Descoperă c&acirc;teva dintre caracteristicile deosebite ale experienţei la volanul noului Focus ST.
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

                            <img alt="Focus ST cu sound symposer" title="Focus ST cu sound symposer" src="/assets/img/focus_st/1214437370342.jpg">

                    </div>
                    <header class="bti-title">Bucură-te de sunetul unui motor cu adevărat performant</header>
                    <div class="bti-body">
                        <div class="abstract">
                            De pe scaunul şoferului, poţi să te bucuri din plin de sunetul antrenant al motorului Focus ST. Asta datorită sistemului de sonorizare motor ST, special optimizat pentru a amplifica sunetul motorului &icirc;n interiorul cabinei atunci c&acirc;nd accelerezi puternic. Nivelul sunetului este controlat, aşadar vei auzi un sunet de motor sport c&acirc;nd calci acceleraţia, dar te vei bucura de linişte &icirc;n restul timpul.
                        </div>
                    </div>
                </article>
            </section>
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">

                            <img alt="Focus ST sistem de directie short arm" title="Focus ST sistem de directie short arm" src="/assets/img/focus_st/1214437367947.jpg">

                    </div>
                    <header class="bti-title">Un nou sistem de direcţie pentru o poziţionare perfectă a mâinilor</header>
                    <div class="bti-body">
                        <div class="abstract">
                            Atunci c&acirc;nd virezi &icirc;n curbe mai str&acirc;nse, noul sistem de direcţie &bdquo;Short-arm&rdquo; elimină nevoia de a-ţi &icirc;ncrucişa m&acirc;inile. Acest lucru se datorează faptului că, &icirc;n momentul &icirc;n care virezi cu mai mult de 10&deg; faţă de centru, roţile maşinii se &icirc;ntorc &icirc;n mod progresiv la un unghi mai mare. Poţi să menţii m&acirc;inile perfect poziţionate chiar şi &icirc;n viraje &bdquo;ac de păr&rdquo;. Pentru a &icirc;mbunătăţi şi mai mult precizia direcţiei, a fost redus, de asemenea, numărul de &icirc;ntoarceri de la blocare la blocare, de la 2,5 p&acirc;nă la doar 1,8.
                        </div>
                    </div>
                </article>
            </section>
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">

                            <img alt="Focus ST Ceasuri de bord suplimentare" title="Focus ST Ceasuri de bord suplimentare" src="/assets/img/focus_st/1214437369609.jpg">

                    </div>
                    <header class="bti-title">Indicatoare de bord suplimentare pentru monitorizarea performanţei motorului</header>
                    <div class="bti-body">
                        <div class="abstract">
                            Focus ST are o consolă cu trei indicatoare de bord adiţionale, &icirc;n partea superioară a panoului de bord. Acestea &icirc;ţi permit să monitorizezi motorul cu mai multă precizie, indic&acirc;nd propulsia turbo cu p&acirc;nă la 1,8 Bar, temperatura, dar şi presiunea uleiului.
                        </div>
                    </div>
                </article>
            </section>
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">

                            <img alt="Ford SYNC" title="Ford SYNC" src="/assets/img/focus_st/1214437370147.jpg">

                    </div>
                    <header class="bti-title">Noul Ford SYNC. Tehnologie hands-free avansată</header>
                    <div class="bti-body">
                        <div class="abstract">
                            Cu ajutorul tehnologiei Ford SYNC cu comandă vocală, poţi controla muzica şi poţi efectua şi prelua apelurile recepţionate pe telefonul mobil, utiliz&acirc;nd simple comenzi vocale. SYNC &icirc;ți poate citi tare, &icirc;n boxele mașinii, chiar şi mesajele primite pe telefonul mobil. Ceea ce &icirc;nseamnă că &icirc;ţi vei concentra atenţia doar asupra condusului.
                        </div>
                    </div>
                </article>
            </section>
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">

                            <img alt="MP3 si USB" title="MP3 si USB" src="/assets/img/focus_st/1214437369997.jpg">

                    </div>
                    <header class="bti-title">SYNC contribuie la redarea muzicii în flux, recunoaşte melodii şi creează liste de redare</header>
                    <div class="bti-body">
                        <div class="abstract">
                            Acest sistem avansat poate reda melodii de pe un dispozitiv USB sau &icirc;n format MP3, sau chiar muzică &icirc;n flux de pe un telefon mobil compatibil cu tehnologia Bluetooth. &Icirc;n plus, poate recunoaşte un c&acirc;ntec sau un artist difuzat la radio și e capabil să creeze liste de redare cu melodii similare cu cea pe care o asculţi.
                        </div>
                    </div>
                </article>
            </section>
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">

                            <img alt="Ford SYNC" title="Ford SYNC" src="/assets/img/focus_st/1214437368681.jpg">

                    </div>
                    <header class="bti-title">Adaugă noi funcţii SYNC de îndată ce sunt disponibile</header>
                    <div class="bti-body">
                        <div class="abstract">
                            Sistemul SYNC se poate actualiza oric&acirc;nd, de &icirc;ndată ce apar &icirc;mbunătățiri sau versiuni noi. De exemplu, &icirc;n cur&acirc;nd va fi disponibilă funcţia &bdquo;Asistenţă de urgenţă&rdquo;. &Icirc;n eventualitatea de nedorit &icirc;n care că vei fi implicat &icirc;ntr-un accident, această tehnologie este declanşată de airbaguri şi poate folosi telefonul tău mobil pentru a apela automat serviciile de urgenţă. Funcţia Asistenţă de urgenţă a primit premiul de &bdquo;Cea mai bună inovaţie mobilă &icirc;n domeniul auto sau utilităţi&rdquo; &icirc;n cadrul Premiilor Global Mobile, ediţia 2012.
                        </div>
                    </div>
                </article>
            </section>
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">

                            <img alt="Pilot automat adaptiv" title="Pilot automat adaptiv" src="/assets/img/focus_st/1214437369535.jpg">

                    </div>
                    <header class="bti-title">Pilot automat avansat</header>
                    <div class="bti-body">
                        <div class="abstract">
                            Pilot automat cu sistem de ajustare a limitei de viteza (ACC)* &icirc;ţi permite să selectezi şi să menţii viteza de deplasare. Ceea ce face sistemul ACC mai sigur este faptul că, ori de c&acirc;te ori detectează un autovehicul &icirc;n faţă, reduce &icirc;n mod automat viteza maşinii, astfel &icirc;nc&acirc;t să răm&acirc;i la o distanţă fixă și sigură de autovehiculul din faţa ta. Odată ce drumul din faţa ta se eliberează, autovehiculul revine la viteza pe care ai selectat-o.<br>
                            <br>
                            ACC este prevăzut şi cu sistemul de Avertizare Frontală**, un sistem de monitorizare avansat și premiat, care te avertizează dacă te apropii prea mult de vehiculele din faţă. <br>
                            *Disponibil doar pe anumite clase de mașini. <br>
                            **Unde legea permite. Atenție, sistemul ACC nu va preveni coliziunile cu obiectele staționare.
                        </div>
                    </div>
                </article>
            </section>
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">

                            <img alt="Sistem de recunoastere a semnelor de circulatie" title="Sistem de recunoastere a semnelor de circulatie" src="/assets/img/focus_st/1214437368607.jpg">

                    </div>
                    <header class="bti-title">Niciun indicator rutier nu mai trece neobservat</header>
                    <div class="bti-body">
                        <div class="abstract">
                            Tehnologia inovatoare de recunoaştere a indicatoarelor rutiere identifică semnele de circulaţie şi le afişează pe panoul de bord. Acestea se aprind intermitent atunci c&acirc;nd depăşeşti limita de viteză, ajut&acirc;ndu-te astfel să conduci legal şi &icirc;n siguranţă.(Disponibil in functie de piata)
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
<script id="TagIT.load" src='/cs/ContentServer?pagename=RORO4_ENGINE/script/packager&c=Page&cid=1205018008661&location=load&isMobile=false&require=main' defer></script>
</div>