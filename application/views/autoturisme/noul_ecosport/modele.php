<script type="text/javascript">
    // mobile sniffer
    ForceRedirectUserAgents = 'android,iphone,blackberry';
    ForceRedirectUserAgentsBypass = 'Win64,Win32';
    ForceRedirectMinWidth = '480';
    MobileHomePageRedirectURL = 'Modele.html\/\/m.ford.ro';
</script>
<div id="yAxis">
    <nav class="breadCrumb visuallyhidden" role="navigation">
        <ul itemprop="breadcrumb">
            <li class="home"><a href="http://www.ford.ro/" data-selenium="breadcrumb_home" class="om_bc_li"
                                title="Pagina principal&#259;">Pagina principal&#259;</a><span></span></li>
            <li><a data-selenium="breadCrumbNameSection" href="http://www.ford.ro/Autoturisme" class="om_bc_li">
                    Autoturisme
                </a><span></span></li>
            <li><a data-selenium="breadCrumbNamePlate" href="../Noul-EcoSport.html"
                   class="om_bc_li">EcoSport</a><span></span></li>
            <li data-selenium="breadCrumbModels">
                Modele
            </li>
        </ul>
    </nav>
    <!-- Main content section -->
    <div class="mainContent" role="main">
        <article id="seriesContent">
            <!-- Loop Starts  -->
            <!-- Loop Ends  -->
        </article>
    </div>
    <p class="disclaimer specific">
    </p>

    <div class="underLayer"></div>
    <script type="text/javascript">
        var readMore = 'citi&#539;i mai multe';
        var readLess = 'mai pu&#539;ine';
    </script>
    <!-- Displaying Hero Link Block -->
    <aside class="miscellaneousFooter  x-axis-footer footer-length-3">
        <div class="content">
            <a href="http://www.ford.ro/SBE/TestDrive" class="om_ca_hl_0">
                <div class="section-left"><img
                        src="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobwhere=1214517254422&amp;blobkey=id"
                        alt="Test Drive" role="presentation"/></div>
                <div class="section-right">
                    <h3 class="normalHeading">Înscrie-te la test drive</h3>

                    <p></p>
                </div>
            </a>
        </div>
        <div class="content">
            <a href="http://www.ford.ro/Dealeri Ford/DealeriFord" class="om_ca_hl_1">
                <div class="section-left"><img
                        src="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobwhere=1214556349634&amp;blobkey=id"
                        alt="Dealers" role="presentation"/></div>
                <div class="section-right">
                    <h3 class="normalHeading">Contactează un dealer</h3>

                    <p></p>
                </div>
            </a>
        </div>
        <div class="content">
            <a href="../VehiculeViitoare.html" class="om_ca_hl_2">
                <div class="section-left"><img
                        src="http://www.ford.ro/cs/BlobServer?blobtable=MungoBlobs&amp;blobcol=urldata&amp;blobwhere=1214533834535&amp;blobkey=id"
                        alt="Future Vehicles" role="presentation"/></div>
                <div class="section-right">
                    <h3 class="normalHeading">Vehicule viitoare</h3>

                    <p></p>
                </div>
            </a>
        </div>
    </aside>
</div>

<script src="http://www.ford.ro/cs/ContentServer?pagename=EP2%2fENGInE%2fscript%2fGroupedJS"
        type="text/javascript"></script>
<script
    src="http://www.ford.ro/cs/ContentServer?pagename=ENGInE/EP2/common/GetScript&amp;elements=/EP2/body/cars/yaxis/script"></script>
<!-- Engine tag - loading 'null::SystemFooter' -->
<!-- Loading sitesetup -->
<script> EP2.Globals.siteName = 'RORO4_ENGINE';
    EP2.Globals.gforceMode = 'LIVE'</script>
<script type="text/javascript">
    var EP2 = EP2 || {};
    EP2.cookieLegislation.trigger();
    //FB : apply css rule for the footer SBE expandable list
    EP2.applyCssToFooterSBE = function () {
        var expandable = $('dd > .expand');
        var ordinaryLink = $('.listColumn > dl > dd > .sbe');
        expandable.each(function (i, v) {
            var findSpan = $(this).find('> span');
            console.log();
            if (!findSpan.length) {
                $(this).append('<span></span>');
            }
        });
        ordinaryLink.each(function (i, v) {
            var findLink = $(this).find('> span');
            if (!findLink.length) {
                $(this).append('<span></span>');
            }
        });
    }();
</script>
<!-- Engine tag - loading '/EP2/body/cars/yaxis/Body::SystemFooter' -->
<!-- Loading sitesetup -->
<!-- '/EP2/body/cars/yaxis/Body' is calling DoubleClick from 'SystemFooter' -->
<script>
    if (typeof isDoubleclickTriggered == 'undefined') {
        var isDoubleclickTriggered = 'false';
    }
    var eusedDevice;
    if (typeof deviceCheck != 'undefined') {
        if (deviceCheck == 'mobile') {
            eusedDevice = "nwp:mobile";
        } else {
            eusedDevice = "nwp:desktop";
        }
    }
    var pageTitle = null;
</script>
<script type="text/javascript">
    function getCookie(c_name) {
        var c_value = document.cookie;
        var c_start = c_value.indexOf(" " + c_name + "=");
        if (c_start == -1) {
            c_start = c_value.indexOf(c_name + "=");
        }
        if (c_start == -1) {
            c_value = null;
        } else {
            c_start = c_value.indexOf("=", c_start) + 1;
            var c_end = c_value.indexOf(";", c_start);
            if (c_end == -1) {
                c_end = c_value.length;
            }
            c_value = unescape(c_value.substring(c_start, c_end));
        }
        return c_value;
    }
    function doubleclickeUsedCompare(str) {
//alert(str);
    }
    ;
    if (isDoubleclickTriggered === 'false') {
        var isLogin = getCookie("isOwnerAuthenticated");
        var visitorLoginState;
        if (isLogin === 'true') {
            visitorLoginState = 'login';
        } else {
            visitorLoginState = 'not login';
        }
        var currentURL = document.URL;
        dataLayer = [];
        dataLayer.push({"URL": currentURL});
        dataLayer.push({"visitorLoginState": visitorLoginState});
        if (navigator && navigator.userAgent) {
            dataLayer.push({"userAgent": navigator.userAgent});
        }
        if (typeof siteID != 'undefined') {
            dataLayer.push({"siteID": siteID});
        }
        /*else {
         dataLayer.push({"siteID":'1204961250932'});
         }
         */
        countryName = "ford-" + 'ro';
        dataLayer.push({"country": countryName});
        if (typeof googleAdServerNameplateId != 'undefined') {
            dataLayer.push({"nameplateID": googleAdServerNameplateId});
        }
        if (typeof controllerCommand != 'undefined') {
            if (controllerCommand === "VehicleCompare") {
                googleAdServerNameplateName = EUSED.Tagging.getCompareList();
                dataLayer.push({"nameplateName": googleAdServerNameplateName});
            } else if (controllerCommand === "VehicleShortlist") {
                googleAdServerNameplateName = EUSED.Tagging.getShortlistList();
                dataLayer.push({"nameplateName": googleAdServerNameplateName});
            } else if (controllerCommand === "Search") {
                googleAdServerNameplateName = EUSED.Tagging.getSelectedVehicleList();
                dataLayer.push({"nameplateName": googleAdServerNameplateName});
            }
            else if (controllerCommand === "VehicleDetail" && typeof googleAdServerNameplateName != 'undefined') {
                googleAdServerNameplateName = "ford " + googleAdServerNameplateName.toLowerCase();
                dataLayer.push({"nameplateName": googleAdServerNameplateName});
            }
        }
        var nameplateName = 'ford ecosport';
        googleAdServerNameplateName = nameplateName.toLowerCase();
        dataLayer.push({"nameplateName": googleAdServerNameplateName});
        if (typeof osbNameplateName != 'undefined') {
            osbNameplateName = osbNameplateName.toLowerCase();
            dataLayer.push({"nameplateName": osbNameplateName});
        }
        if (typeof bookingReferenceNumber != 'undefined') {
            dataLayer.push({"leadID": bookingReferenceNumber});
        }
        dataLayer.push({"pageTitle": 'EcoSport Autoturisme Modele | Ford RO'});
        dataLayer.push({"pageCategory": 'ford-brand'});
        if (typeof osb_pageId != 'undefined') {
            dataLayer.push({"pageID": osb_pageId});
        } else {
            if (typeof mobile_bnp_pageId != 'undefined') {
                dataLayer.push({"pageID": mobile_bnp_pageId});
            } else if (typeof pageID_eused != 'undefined') {
                console.log(pageID_eused);
                pageID_eused = "brand:used vehicles:search inventory:" + pageID_eused;
                dataLayer.push({"pageID": pageID_eused });
            } else {
            }
        }
        dataLayer.push({"language": 'rum'});
    }
</script>
<!-- Google Tag Manager -->
<!-- if condition -->
<noscript>
    <iframe
        src="http://www.googletagmanager.com/ns.html?id=GTM-WL5HW9" height="0"
        width="0" style="display: none; visibility: hidden"></iframe>
</noscript>
<script type="text/javascript">
    if (isDoubleclickTriggered === 'false') {
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WL5HW9');
    }
    isDoubleclickTriggered = 'true';
</script>
<!-- End Google Tag Manager -->
<script>
</script>
<!-- enableiPerceptions is - 'null' -->
<script type='text/javascript'>var OM = OM || {};
    //ONCLICK 1205060261500om_he_pv_tc
    OM.om_he_pv_tc = { "tag": "pv nav true choice link", "clickType": "o"};</script>
<!-- OMNITURE ME -->
<script type="text/javascript"
        src="http://www.ford.ro/cs/ContentServer?cid=1204986890525&amp;pagename=ENGInE%2Ftagging%2FOmnitureScript"></script>
<script type="text/javascript">var sford = new Object;
    sford.tabName = '';
    sford.pageName = 'brand:passenger:vehicle:model:side by side:<tab name>:ford ecosport';
    sford.dlwasSent = false;
    sford.eVar11 = 'brand:passenger:vehicle:model:side by side:<tab name>';
    sford.hier1 = 'vehicle:models:car:ford ecosport:2013';
    sford.tagViewPhoto = '';
    sford.tagHighlights = '';
    sford.tagDownload = '';
    s.pageName = 'brand:passenger:vehicle:model:side by side:<tab name>:ford ecosport';
    s.hier1 = 'vehicle:models:car:ford ecosport:2013';
    s.channel = 'vehicle';
    s.eVar4 = 'rum';
    s.prop4 = 'rum';
    s.eVar11 = 'brand:passenger:vehicle:model:side by side:<tab name>';
    s.prop11 = 'brand:passenger:vehicle:model:side by side:<tab name>';
    s.eVar12 = '2013';
    s.prop12 = '2013';
    sford.my = '2013';
    s.eVar14 = 'ford-ro';
    s.prop14 = 'ford-ro';
    s.eVar15 = 'ford-brand';
    s.prop15 = 'ford-brand';
    s.eVar16 = 'ford ecosport';
    s.prop16 = 'ford ecosport';
    sford.np = 'ford ecosport';
    sford.vc = 'car';</script>
<script type="text/javascript">
    // <![CDATA[
    var __dOC = false;
    if (typeof(sford) == 'object') {
        s.pageName = s.pageName.replace(":<tab name>", "");
        s.eVar11 = s.eVar11.replace(":<tab name>", "");
        s.prop11 = s.eVar11;
// searchResultPageNumber
        if (typeof searchResultPageNumber == "string") {
            sford.searchPagenumber = searchResultPageNumber;
        }
    }
    if (typeof(attachLoadEvent) == 'function') {
        attachLoadEvent(onPageLoad);
    } else {
        $(document).ready(onPageLoad);
    }
    // ]]>
</script>
<script>
    var TagIT = TagIT || {};
</script>
<script
    src='http://www.ford.ro/cs/ContentServer?cid=1&amp;isMobile=false&amp;pagename=RORO4_ENGINE%2Fscript%2Ftagit%2Fassembler&amp;require=NONE&amp;location=load&amp;c=Page'
    defer></script>
<script
    src='http://www.ford.ro/cs/ContentServer?cid=1&amp;isMobile=false&amp;pagename=RORO4_ENGINE%2Fscript%2Ftagit%2Fstatic&amp;require=NONE&amp;location=load&amp;c=Page'></script>
<!-- Engine tag - loading '/EP2/body/cars/yaxis/Body::BodyBottom' -->
<!-- Loading sitesetup -->
<script>
</script>

