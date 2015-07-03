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
            <li class="home">
                <a href="/" class="om_bc_li" title="Pagina principal&#259;">Pagina principal&#259;</a><span></span></li><li><a href="/Autoturisme" class="om_bc_li">
            Autoturisme
        </a><span></span></li><li>Fiesta ST</li></ul>
    </nav>
    <script>
        var vehicleimagepackpresid = '1205035165707';
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
        var bootstrapVehicleData = {"vehicles":[{"strIntroToFord": " ","brand": "Ford","vehicleType": "PV","catalogId": "NONE","nameplate": "Fiesta ST","labelAvailableFrom": "&nbsp;","formattedCurrency": "","nameplateText": "Proiectat\u0103 pentru \u0219osea, construit\u0103 pentru pista de curse. O ma\u0219in\u0103 care \u00EEmbin\u0103 performan\u021Ba, func\u021Bionalitatea \u0219i o economie surprinz\u0103toare.","imagePack": false,"hideVehicleImage": false,"images": [],"backgroundImagePath": ["/assets/img/fiesta_st/1214489660145.jpg","null","null"],"disclaimerTextColor": ["364957",null,null],"current": true,"cid": "1205035506115","cta": [{"linkTitle": "DESCARC\u0102 BRO\u015EUR\u0102 ","linkURL": "\/SBE\/Brosura\/DescarcaBrosura","linkType": "primary","linkTarget": "_blank","omid": "va"},{"linkTitle": "\u00CENSCRIE-TE LA TEST DRIVE ","linkURL": "\/SBE\/TestDrive?shopcode=AUTHORED","linkType": "tertiary","linkTarget": "_blank","omid": "tr"},{"linkTitle": "VREAU SĂ FIU INFORMAT(Ă) ","linkURL": "/SBE/VreauSaFiuInformata","linkType": "tertiary","linkTarget": "","omid": "tr"}],"social": {"facebook": "https://facebook.com","facebookPage": "fordromania"},"disclaimer": "Modelul prezentat este un Fiesta ST","seriesCode": "AUTHORED","uscCode": "AUTHORED","presId": "1205035165707","promos": [],"idf": {"options":[{"dataOverlay": {"mediaType":"Flash","height":"439","width":"780"},"iconURL":"/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobheader=image%2Fjpg&blobwhere=1214480084200&blobkey=id","link":"/cs/ContentServer?cid=1205035512204&amp;pagename=RORO4_ENGINE%2FEP2%2Fcommon%2Fmedia%2FMediaOverlay&amp;c=Flash_C&amp;site=RORO4_ENGINE","videoSrc":[{"src1":""},{"src2":""}],"youtubeClose":"","tooltipText":"Fiesta ST"}]}}]} || {};
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
                <li class="default-nameplate-vehicle" style="background-image:url(/assets/img/fiesta_st/1214489660145.jpg)">
                    <div class="layered-nameplate-image">
                        <div class="image-holder">
                        </div>
                    </div>
                    <aside class="nameplate-disclaimer style=color:#364957">
                        Modelul prezentat este un Fiesta ST
                    </aside>
                </li>
            </ul>
            <div itemscope itemtype="http://schema.org/Product" id="nameplateDetails" class="nameplate-vehicle">
                <!--the text description-->
                <div class="name-plate-text">
                    <p class="intro"> </p>
                    <h1 class="bigHeading">
                        <span itemprop="model" itemscope itemtype="http://schema.org/Organization" class="mark">Ford</span>
                        <span itemprop="member" class="nameplate boldTxt">Fiesta ST</span>
                    </h1>
                    <!--The price-->
                    <!--The blurb-->
                    <p class="blurb">
                        Proiectată pentru șosea, construită pentru pista de curse. O mașină care &icirc;mbină performanța, funcționalitatea și o economie surprinzătoare.
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
                <a href="#primaryTabs">Fiesta ST</a>
            </li>
        </ul>
    </nav>
</div>
<nav class="sub-nav ">
    <ul>
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
                <h1>NOUL FORD FIESTA ST</h1>
            </header>
            <div class="bto-body">
                <div class="abstract">
                    182 CP. De la 0 la 100 km/h &icirc;n 6,9 secunde. Cuplu de 240 Nm. Viteză maximă de 220 km/h (limitată). <br>
                    <br>
                    Cu suspensie sport şi transmisie cu şase trepte de viteză, fr&acirc;ne &icirc;mbunătăţite şi tehnologie avansată, deții controlul total &icirc;n timpul condusului. Şi comanzi totul dintr-un scaun Recaro asemănător celor din maşinile de curse. <br>
                    <br>
                    Noul Fiesta ST este spaţios, confortabil şi, de asemenea, foarte eficient &icirc;n ceea ce privește consumul de combustibil. Aşa că este şi o maşină pe care &icirc;ți permiți să o &icirc;ntreții şi pe care o conduci cu plăcere zi de zi.<br>
                    <br>
                    <a TITLE="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&blobcol=urldata&blobheadervalue1=attachment%3Bfilename%3D%22Lista+de+preturi+Ford+Fiesta+ST.pdf%22&blobheadervalue2=abinary%3Bcharset%3DUTF-8&blobheadername1=Content-Disposition&blobheadername2=MDT-Type&blobheader=application%2Fpdf&blobwhere=1214491799351&blobkey=id" CLASS="download" onClick="if (typeof sford == 'object') omnitureLinkDownloadClick('brand:pricelist download:confirm:<nameplate>','event15,event43','','event:pricelist:pdf','download pricelist','pdf download','',false,'ford fiesta st','2013','car');" >Descarcă lista de prețuri pentru noul Ford Fiesta ST</a>.
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

                            <img alt="Fiesta ST &ndash; performan&#355;&#259;" title="Fiesta ST &ndash; performan&#355;&#259;" src="/assets/img/fiesta_st/1214448212283.jpg">

                    </div>
                    <header class="bti-title">Performanţă testată pe pistă</header>
                    <div class="bti-body">
                        <div class="abstract">
                            Fiesta ST oferă cu 35% mai multă putere dec&acirc;t un model standard. Astfel, ajunge de la 0 la 100 km/h &icirc;n doar 6,9 secunde. Viteza &icirc;n linie dreaptă este dublată de virarea controlată, deoarece şasiul special reglat şi cobor&acirc;t cu 15 mm asigură o manevrare precisă şi o stabilitate maximă. După mai mult de 5.000 km de testări pe pistă şi reglaje fine pe renumitul circuit N&uuml;rburgring din Germania, te poţi baza pe noua Fiesta ST.
                        </div>
                    </div>
                </article>
            </section>
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">

                            <img alt="Fiesta ST &ndash; motorizare de excep&#355;ie" title="Fiesta ST &ndash; motorizare de excep&#355;ie" src="/assets/img/fiesta_st/1214448216805.jpg">

                    </div>
                    <header class="bti-title">Putere extraordinară, eficienţă excepţională</header>
                    <div class="bti-body">
                        <div class="abstract">
                            Fiesta ST este propulsată de un motor pe benzină revoluţionar EcoBoost, de 1,6 litri. Construcţia din aluminiu, turbocompresorul şi un sistem avansat cu injecţie de combustibil ajută la generarea celor 182 CP. Nu numai că oferă cu 20% mai multă putere dec&acirc;t motoarele echivalente, dar tehnologia EcoBoost maximizează şi eficienţa consumului de combustibil, ajung&acirc;nd p&acirc;nă la un consum de 5,9 l/100 km (ciclu combinat)*.
                            <p><em><font size="1">*Consumul real de combustibil poate varia, deoarece este influenţat de mulţi factori, inclusiv configuraţiile individuale ale maşinii, stilul de condus şi utilizarea echipamentelor, cum ar fi aerul condiţionat.</font></em></p>
                        </div>
                    </div>
                </article>
            </section>
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">

                            <img alt="Fiesta ST - control maxim la viraje" title="Fiesta ST - control maxim la viraje" src="/assets/img/fiesta_st/1214448212357.jpg">

                    </div>
                    <header class="bti-title">Control maxim la viraje</header>
                    <div class="bti-body">
                        <div class="abstract">
                            Controlul vectorului de cuplu echilibrează cuplul motorului &icirc;ntre roţile din faţă, pentru a se potrivi tipului de carosabil şi condiţiilor de condus. Acţion&acirc;nd de 100 de ori pe secundă, sistemul este de 33 de ori mai rapid dec&acirc;t o clipire din ochi. Asta &icirc;nseamnă o aderenţă mai bună şi manevrabilitate de precizie mare, după cum vei descoperi &icirc;n momentul accelerării &icirc;n curbe.
                        </div>
                    </div>
                </article>
            </section>
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">

                            <img alt="Fiesta ST - control electronic al stabilit&#259;&#355;ii" title="Fiesta ST - control electronic al stabilit&#259;&#355;ii" src="/assets/img/fiesta_st/1214448216956.jpg">

                    </div>
                    <header class="bti-title">Oferă încredere chiar şi în condiţii dificile</header>
                    <div class="bti-body">
                        <div class="abstract">
                            <div>Controlul electronic al stabilităţii (ESP) include o serie de tehnologii concepute pentru a-ţi oferi un control mai mare asupra vehiculului şi pentru a te menţine &icirc;n siguranţă. De exemplu, există senzori care monitorizează &icirc;n mod constant viteza fiecărei roţi &icirc;n parte, rata de deviere a maşinii (unghiul şi direcţia), precum şi unghiul direcţiei. Dacă trebuie să virezi brusc la st&acirc;nga sau la dreapta, eventual pentru a ocoli un obstacol, ESP echilibrează &icirc;n mod precis puterea de fr&acirc;nare &icirc;ntre roţi şi poate reduce, de asemenea, puterea motorului. Acest lucru contribuie la contracararea subvirării şi supravirării, făc&acirc;nd maşina mai stabilă şi mai uşor de controlat. ESP şi Controlul tracţiunii pot contribui, de asemenea, la prevenirea &icirc;nv&acirc;rtirii &icirc;n gol a roţilor &icirc;n condiţii de carosabil umed sau &icirc;ngheţat.</div>
                        </div>
                    </div>
                </article>
            </section>
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">

                            <img alt="Noul Ford Fiesta ST" title="Noul Ford Fiesta ST" src="/assets/img/fiesta_st/1214448216579.jpg">

                    </div>
                    <header class="bti-title">Putere pe care o poţi auzi</header>
                    <div class="bti-body">
                        <div class="abstract">
                            Cabina noului Fiesta ST poate fi un spațiu liniştit şi relaxant. Însă dacă accelerezi puternic, un sistem „sound symposer” special proiectat redă zgomotul puternic, sport, direct în cabină.
                        </div>
                    </div>
                </article>
            </section>
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">

                            <img alt="Fiesta ST - Ford SYNC" title="Fiesta ST - Ford SYNC" src="/assets/img/fiesta_st/1214448216881.jpg">

                    </div>
                    <header class="bti-title">Tehnologie inteligentă, conectată</header>
                    <div class="bti-body">
                        <div class="abstract">
                            Cu Ford SYNC, poţi să selectezi o piesă de pe un dispozitiv USB sau player MP3/iPod® sau să o redai de pe mobilul tău. Poţi efectua şi recepţiona apeluri doar printr-o comandă vocală. Şi poţi chiar să îţi asculţi mesajele text citite cu voce tare. Tehnologia te conectează cu prietenii şi familia din mers. Ceea ce înseamnă că poţi să îţi ţii mereu mâinile pe volanul îmbrăcat în piele şi poți să priveşti în continuare la drumul care dispare rapid sub roţi.
                        </div>
                    </div>
                </article>
            </section>
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">

                            <img alt="Asisten&#355;&#259; de urgen&#355;&#259;, &icirc;n cazul &icirc;n care vei avea vreodat&#259; nevoie" title="Asisten&#355;&#259; de urgen&#355;&#259;, &icirc;n cazul &icirc;n care vei avea vreodat&#259; nevoie" src="/assets/img/fiesta_st/1214448216728.jpg">

                    </div>
                    <header class="bti-title">Asistenţă de urgenţă, în cazul în care vei avea vreodată nevoie</header>
                    <div class="bti-body">
                        <div class="abstract">
                            În eventualitatea puţin probabilă a unui accident, când se activează airbagul soferului sau se dezactivează pompa de carburant, Ford SYNC cu Asistenţă de urgenţă poate efectua automat un apel direct către Serviciile de urgenţă în locul tău. Poţi alege să întrerupi apelul sau să discuţi cu personalul serviciului de urgenţă dacă este cazul. Extrem de important, sistemul va furniza informaţii esențiale, precum coordonatele tale GPS, chiar şi atunci când ţi-ai pierdut cunoştinţa.*
                        </div>
                    </div>
                </article>
            </section>
            <section class="bti-wrapper">
                <article class="bti-item">
                    <div class="bti-image">

                            <img alt="Fiesta ST - Ford MyKey" title="Fiesta ST - Ford MyKey" src="/assets/img/fiesta_st/1214448212431.jpg">

                    </div>
                    <header class="bti-title">Maşina ta este sigură şi dacă este condusă de alte persoane</header>
                    <div class="bti-body">
                        <div class="abstract">
                            MyKey este tehnologia unică prin intermediul căreia poţi restricţiona unele dintre caracteristicile cheie ale noului Fiesta ST. De exemplu, poţi limita viteza maximă, poţi seta volumul maxim al sistemului audio şi poţi reaminti şoferului să îşi prindă centura de siguranţă. Dacă dai vreodată cheile altor persoane, aceasta este o asigurare suplimentară că îi ajuţi să fie în siguranţă în maşina ta.
                        </div>
                    </div>
                </article>
            </section>
            <section class="bti-wrapper">
                <article class="bti-item">
                    <header class="bti-title"> </header>
                    <div class="bti-body">
                        <div class="abstract">
                            <font size="1"><em>*Asistenţa de urgenţă Ford este disponibilă &icirc;n peste 30 de ţări din Europa. Această tehnologie funcţionează atunci c&acirc;nd este conectată cu un telefon mobil compatibil pe care &icirc;l ai la tine, &icirc;n momentul &icirc;n care un airbag este declanşat (cu excepţia airbagurilor pentru genunchi) sau atunci c&acirc;nd un senzor care &icirc;nregistrează o defecţiune &icirc;ntrerupe pompa de combustibil. Funcţia de mesagerie şi Asistenţa de urgenţă nu sunt disponibile &icirc;n toate limbile europene. &lt;</em>Consultă <a HREF="/SBE/Ford/DealeriFord" CONTENTEDITABLE="false" >dealerul tău</a> Ford pentru informaţii complete.&gt;</font>
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
<script id="TagIT.load" src='/cs/ContentServer?pagename=RORO4_ENGINE/script/packager&c=Page&cid=1205035506115&location=load&isMobile=false&require=main' defer></script>
</div>