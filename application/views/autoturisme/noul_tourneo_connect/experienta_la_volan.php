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
            <li><a href="/Autoturisme/NoulTourneoConnect/PrezentareGenerala#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/NoulTourneoConnect/PrezentareGenerala">Prezentare general&#259;</a>
            </li>
            <li><a href="/Autoturisme/NoulTourneoConnect/Design#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/NoulTourneoConnect/Design">Design</a>
            </li>
            <li class="selected"><a href="/Autoturisme/NoulTourneoConnect/ExperientaLaVolan#primaryTabs" data-ajaxlink="/Autoturisme/NoulTourneoConnect/ExperientaLaVolan">Experien&#355;a la volan</a>
            </li>
            <li><a href="/Autoturisme/NoulTourneoConnect/Performanta#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/NoulTourneoConnect/Performanta">Performan&#355;&#259; &#351;i eficien&#355;&#259;</a>
            </li>
            <li><a href="/Autoturisme/NoulTourneoConnect/Siguranta#primaryTabs" class="om_mt_ti"  data-ajaxlink="/Autoturisme/NoulTourneoConnect/Siguranta">Siguran&#355;&#259; &#351;i securitate</a>
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
            <h1>Design ingenios şi tehnologie utilă</h1>
        </header>
        <div class="bto-body">
            <div class="abstract">
                <div>Fiecare caracteristică şi tehnologie a noului Tourneo Connect are un anumit scop şi sunt cu toate concepute pentru a vă face viaţa mai uşoară. </div>
                <br>
                <div>Cu ajutorul tehnologiei Ford SYNC puteţi efectua şi prelua apeluri pe telefonul mobil şi puteţi controla muzica, utiliz&acirc;nd comenzi vocale simple. Mai mult, sistemul vă va citi cu voce tare chiar şi mesajele text pe care le primiţi.* </div>
                <br>
                <div>C&acirc;t despre siguranţă, senzorii şi sistemele de monitorizare vă pot ajuta să parcaţi şi să evitaţi obstacolele, &icirc;n timp ce alte tehnologii reacţionează automat, astfel &icirc;nc&acirc;t dvs. să nu vă mai faceţi griji legate de aprinderea farurilor sau pornirea ştergătoarelor. Pentru a afla mai multe, exploraţi secţiunile de mai jos. </div>
                <br>
                <br>
                <div><font size="1"><em>*Telefoane mobile compatibile cu Ford SYNC. Funcţia de citire a mesajelor text nu este disponibilă pentru iPhone. </em></font></div>
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
            <li><a href='#tab1' class='omt_'>Tehnologia condusului</a></li>
            <li><a href='#tab2' class='omt_'>Confort</a></li>
        </ul>
    </nav>
</div>
<!-- BEGIN [MidPageTabs] -->
<div class="innertab-wrapper">
<!--<div id='tab1' class="mp-tab-wrapper">
<h2><a href='#tab1' class="mp-tab omt_xd_mt_ti">Tehnologia condusului</a></h2> -->
<div id='tab1' class="tab-content" style="display:none;">
    <section class="bto-wrapper">
        <article class="bto-item">
            <header class="bto-title">
                <h1> </h1>
            </header>
            <div class="bto-body">
                <div class="abstract">
                    <div>Vă puteţi aştepta la tehnologii remarcabile &icirc;n fiecare Ford şi, cu siguranţă, veţi găsi multe &icirc;n Tourneo Connect. Prevăzută ca dotare standard sau disponibilă opţional, fiecare tehnologie are un scop util, fie pentru divertismentul dvs., pentru a vă menţine conectat, pentru a vă proteja, fie pentru a vă face fiecare călătorie mai uşoară şi mai plăcută. </div>
                </div>
                <div class="body">
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Ford SYNC cu comand&#259; vocal&#259;" title="Ford SYNC cu comand&#259; vocal&#259;" src="/assets/img/tourneo_connect/1214466876657.jpg">

            </div>
            <header class="bti-title">Ford SYNC. Tehnologia avansată hands-free</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Ford SYNC vă permite să controlați muzica și să efectuaţi și să preluați apeluri de pe telefonul mobil, utiliz&acirc;nd comenzi vocale directe și simple. De exemplu, dacă &bdquo;acasă&rdquo; este &icirc;nregistrat ca număr de contact &icirc;n agenda telefonului mobil, este de ajuns să rostiți: &bdquo;Apel acasă&rdquo;, iar sistemul va apela automat numărul respectiv. Puteţi utiliza comenzile vocale pentru a reda melodii de pe o unitate USB sau MP3/iPod<sup>&reg;</sup> ori atunci c&acirc;nd redaţi &icirc;n flux melodii de pe un telefon compatibil Bluetooth<sup>&reg;</sup>. Sistemul poate chiar citi cu voce tare mesajele text pe care le primiţi. </div>
                    <div>&nbsp;</div>
                    <div><font size="1"><em>*Marca și siglele Bluetooth<sup>&reg;</sup> sunt oferite și deținute de Bluetooth SIG Inc și orice utilizare a acestor mărci de către Ford Motor Company Limited și de către companiile sale partenere se face &icirc;n baza unei licențe. Alte mărci &icirc;nregistrate şi denumiri comerciale aparţin proprietarilor lor.</em></font></div>
                    <br>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Senzori de distan&#355;&#259; pentru parcare" title="Senzori de distan&#355;&#259; pentru parcare" src="/assets/img/tourneo_connect/1214466874444.jpg">

            </div>
            <header class="bti-title">Senzori care facilitează procedura de parcare</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Senzorii opţionali pentru distanţa la parcare vă ajută să determinaţi distanţa dintre maşină şi orice fel de obstacol din faţă sau din spate. Atunci c&acirc;nd detectează un obiect, senzorii emit o avertizare sonoră care se intensifică cu c&acirc;t vă apropiați mai mult de obstacol.</div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Camer&#259; video pentru vizualizare spate" title="Camer&#259; video pentru vizualizare spate" src="/assets/img/tourneo_connect/1214466879229.jpg">

            </div>
            <header class="bti-title">Marşarier mai simplu</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>
                        <div>St&acirc;lpi opritori, pubele, ziduri joase&hellip; Camera video pentru vizualizare spate vă arată tot ce se află &icirc;n spatele autovehiculului pe un ecran integrat &icirc;n consola centrală sau &icirc;n oglinda retrovizoare şi se activează automat atunci c&acirc;nd selectaţi marşarierul. Sistemul afişează, de asemenea, ghidaje virtuale pentru a vă ajuta să parcaţi şi &icirc;n cele mai &icirc;nguste spaţii. </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Lumini de cea&#355;&#259; adaptive pentru viraje" title="Lumini de cea&#355;&#259; adaptive pentru viraje" src="/assets/img/tourneo_connect/1214466877327.jpg">

            </div>
            <header class="bti-title">Faruri care vă oferă o vizibilitate mai bună pe timp de noapte</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>
                        <div>
                            <div>Dacă semnalizaţi şi viraţi pe un drum sau intraţi &icirc;ntr-un loc de parcare, o lumină din farul de ceaţă (pe partea virajului) iluminează automat partea respectivă a drumului, pentru a vă oferi vizibilitate sporită &icirc;n timpul virajului. </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section class="bti-wrapper">
        <article class="bti-item">
            <div class="bti-image">

                    <img alt="Tempomat cu dispozitiv ajustabil de limitare a vitezei" title="Tempomat cu dispozitiv ajustabil de limitare a vitezei" src="/assets/img/tourneo_connect/1214466877402.jpg">

            </div>
            <header class="bti-title">Drumuri mai puţin obositoare, călătorii mai economice</header>
            <div class="bti-body">
                <div class="abstract">
                    <div>Tempomatul vă permite să stabiliţi o viteză pe care ulterior o menţine p&acirc;nă c&acirc;nd fr&acirc;naţi sau acceleraţi. Cu ajutorul schimbătoarelor de pe volan puteţi ajusta, de asemenea, viteza &icirc;n timp ce conduceţi. </div>
                    <br>
                    <div>&Icirc;n plus, dispozitivul ajustabil de limitare a vitezei vă ajută să vă menţineţi vehiculul &icirc;n limita de viteză prestabilită pe care o selectaţi. Pe l&acirc;ngă faptul că vă ajută să economisiți combustibil, sistemul poate, de asemenea, minimiza posibilitatea să depășiți limita de viteză. </div>
                    <br>
                    <div>Pe l&acirc;ngă beneficiile practice, ambele tehnologii pot face ca lungile deplasări pe autostradă să fie mai relaxante. </div>
                </div>
            </div>
        </article>
    </section>
</div>
<!--</div>-->
<!--<div id='tab2' class="mp-tab-wrapper">
<h2><a href='#tab2' class="mp-tab omt_xd_mt_ti">Confort</a></h2> -->
<div id='tab2' class="tab-content" style="display:none;">
<section class="bto-wrapper">
    <article class="bto-item">
        <header class="bto-title">
            <h1> </h1>
        </header>
        <div class="bto-body">
            <div class="abstract">
                <div>Fiecare aspect, caracteristică şi tehnologie a noului Tourneo Connect există pentru a vă satisface nevoile, făc&acirc;nd fiecare călătorie mai uşoară, mai relaxantă şi mai confortabilă. </div>
            </div>
            <div class="body">
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Sistemul Flat Ford Seat" title="Sistemul Flat Ford Seat" src="/assets/img/tourneo_connect/1214466880661.jpg">

        </div>
        <header class="bti-title">Până la 16 configuraţii de scaune pentru flexibilitate totală</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Un aranjament ingenios al scaunelor, incluz&acirc;nd Sistemul Flat Ford Seat, facilitează aranjarea interiorului maşinii pentru a transporta pasageri, bagaje, obiecte voluminoase sau lungi, ori o combinaţie a acestora. </div>
                <br>
                <div>&Icirc;n cazul modelului Tourneo Connect cu 5 locuri, cel de-al doilea r&acirc;nd de scaune este fracţionat 60/40. Iar cu spătarele rabatate complet, &icirc;ntregul scaun se poate apleca &icirc;n faţă pentru a maximiza spaţiul pentru bagaje al maşinii. Dacă aveţi nevoie de şi mai mult spaţiu pentru obiecte grele şi voluminoase, scaunele pot fi scoase complet rapid şi uşor.</div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Grand Tourneo Connect - Sistemul Flat Ford Seat" title="Grand Tourneo Connect - Sistemul Flat Ford Seat" src="/assets/img/tourneo_connect/1214466874896.jpg">

        </div>
        <header class="bti-title">Grand Tourneo Connect - Sistemul Flat Ford Seat</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Modelul Grand Tourneo Connect este prevăzut cu Sistemul Ford de rabatare completă pentru o flexibilitate şi mai mare. Prin acest sistem ingenios, cel de-al doilea r&acirc;nd de scaune fracţionate 60/40 se pliază şi se rabatează &icirc;n spaţiul pentru picioare, pentru a vă oferi un spaţiu de &icirc;ncărcare complet plat. </div>
                <br>
                <div>&Icirc;n cazul modelului Grand Tourneo Connect cu 7 locuri, cel de-al treilea r&acirc;nd de scaune fracţionate 50/50 se rabatează, de asemenea, complet. </div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Tourneo Connect Sistem audio" title="Tourneo Connect Sistem audio" src="/assets/img/tourneo_connect/1214466874748.jpg">

        </div>
        <header class="bti-title">Sunet perfect</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Un sistem radio/CD de &icirc;naltă calitate include şase boxe premium.</div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Tourneo Connect Scaun &icirc;nc&#259;lzit pentru &#351;ofer" title="Tourneo Connect Scaun &icirc;nc&#259;lzit pentru &#351;ofer" src="/assets/img/tourneo_connect/1214466874221.jpg">

        </div>
        <header class="bti-title">Vă ţine întotdeauna scaunul cald</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Indiferent c&acirc;t de frig este afară, vă puteţi &icirc;ncălzi rapid &icirc;n cabină, cu ajutorul scaunului &icirc;ncălzit pentru şofer. </div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Tourneo Connect Faruri automate" title="Tourneo Connect Faruri automate" src="/assets/img/tourneo_connect/1214466880957.jpg">

        </div>
        <header class="bti-title">Faruri care se aprind automat atunci când este necesar  </header>
        <div class="bti-body">
            <div class="abstract">
                <div>Tourneo Connect este prevăzut cu senzori care detectează lumina c&acirc;nd &icirc;ncepe să se &icirc;ntunece sau la schimbarea bruscă a condiţiilor de iluminare. De exemplu, c&acirc;nd intraţi &icirc;ntr-un tunel. Atunci se activează farurile cu acţionare automată, care pot simplifica şi mări nivelul de siguranţă al condusului. Farurile automate sunt disponibile ca dotare opţională cu ştergătoarele cu senzor de ploaie (a se vedea mai jos). </div>
                <br>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Tourneo Connect &#350;terg&#259;toare automate pentru geamuri" title="Tourneo Connect &#350;terg&#259;toare automate pentru geamuri" src="/assets/img/tourneo_connect/1214466880436.jpg">

        </div>
        <header class="bti-title">Ştergătoare care se reglează automat, în funcţie de ploaie  </header>
        <div class="bti-body">
            <div class="abstract">
                <div>Ştergătoarele de parbriz cu senzor de ploaie se activează &icirc;n secunda &icirc;n care detectează stropi de apă pe parbrizul autovehiculului, iar apoi &icirc;şi reglează viteza pentru a face faţă oricăror condiţii meteo. Puteţi alege unul dintre cele şase niveluri de sensibilitate, care determină c&acirc;t de multă umiditate trebuie să se acumuleze &icirc;nainte ca ştergătoarele să intre &icirc;n acţiune pentru a o &icirc;ndepărta. Ştergătoarele cu senzor de ploaie sunt disponibile ca dotare opţională cu farurile automate.</div>
                <br>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Tourneo Connect Coloan&#259; de direc&#355;ie reglabil&#259; pe &icirc;n&#259;l&#355;ime &#351;i ad&acirc;ncime" title="Tourneo Connect Coloan&#259; de direc&#355;ie reglabil&#259; pe &icirc;n&#259;l&#355;ime &#351;i ad&acirc;ncime" src="/assets/img/tourneo_connect/1214466878478.jpg">

        </div>
        <header class="bti-title">O coloană de direcţie care se reglează conform nevoilor dumneavoastră</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Pentru a vă ajuta să găsiţi poziţia de condus ideală, cea mai confortabilă, coloana de direcţie se reglează cu uşurinţă at&acirc;t pe &icirc;nălţime, c&acirc;t şi &icirc;n ad&acirc;ncime. </div>
                <br>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Tourneo Connect Consol&#259; central&#259; deschis&#259;" title="Tourneo Connect Consol&#259; central&#259; deschis&#259;" src="/assets/img/tourneo_connect/1214466881531.jpg">

        </div>
        <header class="bti-title">Un loc pentru toate obiectele</header>
        <div class="bti-body">
            <div class="abstract">
                <div>O consolă centrală deschisă, spaţioasă, construită &icirc;n jurul fr&acirc;nei de m&acirc;nă, este proiectată pentru a vă ajuta să aveţi tot ce vă trebuie la &icirc;ndem&acirc;nă. Există un suport pentru pahar, plus spaţiu pentru un laptop sau dosare A4 şi/sau obiecte mai mici. De asemenea, sunt prevăzute puncte de conectivitate Aux in şi USB, precum şi două prize de 12 V: una spre partea din faţă a consolei, pentru şofer şi pasager, şi una amplasată &icirc;n spate, astfel &icirc;nc&acirc;t ocupanţii locurilor din spate să poată folosi şi ei sursa de alimentare electrică. </div>
                <rb></rb>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Sistemul Dual zone Electronic Automatic Temperature Control (DEATC)" title="Sistemul Dual zone Electronic Automatic Temperature Control (DEATC)" src="/assets/img/tourneo_connect/1214466875119.jpg">

        </div>
        <header class="bti-title">Setaţi temperatura ideală pentru dumneavoastră şi pentru pasager</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Cu ajutorul dotării opţionale Sistemul Dual zone Electronic Automatic Temperature Control (DEATC), puteţi selecta temperaturile pe care dumneavoastră şi pasagerul din faţă le preferaţi, iar sistemul le va menţine cu ajutorul sistemului avansat de climatizare.</div>
                <br>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Tourneo Connect Parbriz &icirc;nc&#259;lzit Quickclear" title="Tourneo Connect Parbriz &icirc;nc&#259;lzit Quickclear" src="/assets/img/tourneo_connect/1214466880362.jpg">

        </div>
        <header class="bti-title">Curăţaţi parbrizul rapid cu Quickclear</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Această dotare inteligentă este creată pentru a vă permite să porniți rapid &icirc;n dimineţile geroase. Nu trebuie dec&acirc;t să atingeţi un buton şi filamente extrem de subţiri se supra&icirc;ncălzesc pentru a curăţa parbrizul de gheaţă, ceaţă şi abur, precum şi pentru a ajuta la dezgheţarea ştergătoarelor. Sistemul acţionează &icirc;n c&acirc;teva secunde, chiar şi la temperaturi negative.</div>
                <br>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Tourneo Connect Ford Easy-Fuel, pentru aliment&#259;ri f&#259;r&#259; probleme" title="Tourneo Connect Ford Easy-Fuel, pentru aliment&#259;ri f&#259;r&#259; probleme" src="/assets/img/tourneo_connect/1214466876731.jpg">

        </div>
        <header class="bti-title">Ford Easy-Fuel, pentru alimentări fără probleme  </header>
        <div class="bti-body">
            <div class="abstract">
                <div>Acesta face să fie practic imposibilă alimentarea greşită a autovehiculului, deoarece duza pompei nu se va potrivi. Şi pentru că Easy-Fuel este un sistem fără buşon, nu veţi mai avea de-a face niciodată cu un buşon murdar.
                    <div><br>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Tourneo Connect Geamuri electrice" title="Tourneo Connect Geamuri electrice" src="/assets/img/tourneo_connect/1214466879471.jpg">

        </div>
        <header class="bti-title">Deschideţi şi închideţi geamurile printr-o singură atingere</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Prin atingerea unui buton puteţi deschide sau &icirc;nchide complet geamurile de pe partea şoferului şi a pasagerului, sau le puteţi ajusta separat, pentru a lăsa să pătrundă &icirc;năuntru doar cantitatea de aer dorită. </div>
                <br>
                <div></div>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Tourneo Connect Oglinzi &icirc;nc&#259;lzite &#351;i pliabile electric" title="Tourneo Connect Oglinzi &icirc;nc&#259;lzite &#351;i pliabile electric" src="/assets/img/tourneo_connect/1214466880511.jpg">

        </div>
        <header class="bti-title">Oglinzi laterale care se pliază singure spre interior, pentru a fi protejate de eventuale deteriorări</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Este uşor să deterioraţi oglinzile laterale atunci c&acirc;nd intraţi sau ieşiţi din spaţii str&acirc;mte sau c&acirc;nd sunteţi parcat pe o stradă &icirc;ngustă. Oglinzile laterale opţionale pliabile electric vă pot ajuta să evitaţi acest lucru, pliindu-se către interior la atingerea unui buton. Şi pentru că sunt &icirc;ncălzite, puteţi pleca la drum mai repede şi mai &icirc;n siguranţă &icirc;n dimineţile geroase.</div>
                <br>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Tourneo Connect Raft de depozitare deasupra &#351;oferului &#351;i pasagerului" title="Tourneo Connect Raft de depozitare deasupra &#351;oferului &#351;i pasagerului" src="/assets/img/tourneo_connect/1214466878072.jpg">

        </div>
        <header class="bti-title">Menţineţi ordinea în maşină cu ajutorul unui raft simplu</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Un raft de depozitare deasupra şoferului şi pasagerului utilizează &icirc;n mod eficient un spaţiu care altfel nu ar fi fost folosit, astfel &icirc;nc&acirc;t să puteţi ţine interiorul maşinii ordonat, lucrurile fiind &icirc;n continuare la &icirc;ndem&acirc;nă.</div>
                <br>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Tourneo Connect Plafon panoramic" title="Tourneo Connect Plafon panoramic" src="/assets/img/tourneo_connect/1214466877553.jpg">

        </div>
        <header class="bti-title">Plafon panoramic pentru iluminat natural</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Dotare standard pe modelul Titanium şi opţională pe Trend, plafonul panoramic dintr-o bucată inundă interiorul cu lumină naturală, sporind senzaţia de spaţiu. Geamul plafonului care reflectă lumina razelor vă protejează de căldura soarelui, iar un parasolar electric vă permite să controlaţi exact c&acirc;tă lumină lăsaţi să pătrundă. </div>
                <br>
            </div>
        </div>
    </article>
</section>
<section class="bti-wrapper">
    <article class="bti-item">
        <div class="bti-image">

                <img alt="Tourneo Connect Sistem de acoperire a scaunelor pentru &icirc;nc&#259;rcare &icirc;n spate" title="Tourneo Connect Sistem de acoperire a scaunelor pentru &icirc;nc&#259;rcare &icirc;n spate" src="/assets/img/tourneo_connect/1214466874370.jpg">

        </div>
        <header class="bti-title">Protejaţi-vă scaunele de rutina zilnică</header>
        <div class="bti-body">
            <div class="abstract">
                <div>Dacă transportaţi cu regularitate bagaje sau echipamente, modelul Grand Tourneo Connect cu şapte locuri dispune de spaţiu suplimentar pentru obiectele mai mari pe care le-aţi putea transporta. De asemenea, este prevăzut cu acoperire integrală a podelei, pentru a proteja scaunele atunci c&acirc;nd sunt rabatate, precum şi spătarele scaunelor din r&acirc;ndul al doilea. </div>
                <br>
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
<script id="TagIT.load" src='/cs/ContentServer?pagename=RORO4_ENGINE/script/packager&c=Page&cid=1205056891882&location=load&isMobile=false&require=main' defer></script>
</div>