<!-- Header -->
<!-- <Start> -->
<div id="top_anchor"><a name="top"></a></div>
<!--<START_MHB001 >-->
<div id="masthead">
    <img src="/cs/BlobServer?blobtable=MungoBlobs&#38;blobcol=urldata&#38;blobwhere=1214489546414&#38;blobkey=id" border="0" alt="Ford" title="Ford"  height = '115'  width = '980' />
</div>
<!--<END_MHB001 >-->
<!-- <End> -->
<!-- Navigation -->
<!-- <Start> -->
<div id="container_navi">
    <div class="left_item">
    </div>
    <div class="left_item">
    </div>
</div>
<!-- <End> -->
<div id="container_main">
<div style="height: 115px">&nbsp;</div>
<div id="container_center">
<div class="center_item">
    <div class="btoArticleTitle"></div>
    <div class="btoArticleText">
        <div class="btoArticleAbstract">
            <h1 style="color:#425968; font-famlily:FordAntennaRegular,Arial,Verdana,Tahoma,Helvetica,sans-serif; font-size:2.2em; line-height:100%;">Vezi broşurile interactive</h1>
            Broşurile interactive &icirc;ţi oferă aceleaşi informaţii ca broşurile tipărite, dar sunt mai rapide şi mai prietenoase cu mediul.
        </div>
    </div>
</div>
<div class="center_item">
<!-- TD No:8174 This method has been added to escape special characters
-->
<img src="/cs/ENGInE/img/arrow_r_o_tab.gif" alt="" style="display:none">
<script type="text/javascript" language="javascript">
    // <![CDATA[
    function tab001GetFirstTab(element) {
// getFirst is Buggy in IE6 var first = el.getFirst() 
        while ((typeof (element.getPrevious()) != "undefined") &&
                element.getPrevious().hasClass("tab001_item")) {
            element = element.getPrevious();
        }
        return element;
    }
    function tab001SelectTab(id) {
        var el = document.id("tab001-tab-" + id);
        var currentItem = tab001GetFirstTab(el);
        do {
// remove ie6 union junk
            currentItem.removeClass("selected_first");
            currentItem.removeClass("selected_last");
// remove the selected item
            currentItem.removeClass("selected");
            currentItem.addClass("unselected");
            currentItem.removeClass("before");
            currentItem = currentItem.getNext();
        } while (currentItem);
        if (el.getPrevious()) {
            if (el.getPrevious().hasClass("tab001_item")) {
                el.getPrevious().addClass("before");
            }
        }
        el.removeClass("unselected");
        el.removeClass("unselected_first");
        el.addClass("selected");
        var currentItem = tab001GetFirstTab(el);
        do {
// now build css unions because ie6 !@$#
            if (currentItem.hasClass("selected") && currentItem.hasClass("first") ) currentItem.addClass("selected_first");
            if (currentItem.hasClass("selected") && currentItem.hasClass("last") ) currentItem.addClass("selected_last");
            currentItem = currentItem.getNext();
        } while (currentItem);
        var contentPane = document.id('tab001-contentpane-0');
        do {
            contentPane.removeClass("tab001-pane-selected");
            contentPane.addClass("tab001-pane-unselected");
            contentPane = contentPane.getNext();
        } while (contentPane);
// now add the visible one.
        document.id('tab001-contentpane-' + id).removeClass("tab001-pane-unselected");
        document.id('tab001-contentpane-' + id).addClass("tab001-pane-selected");
        if( id > 0 ){
            document.id("tab001-tab-0").removeClass("selected_first");
        }else{
            document.id("tab001-tab-0").addClass("selected_first");
        }
        if(el.getParent().hasClass("tab001_header")){
            var lastTabItemIndex = ( el.getParent().getChildren(".tab001_item").length - 1);
            if( id == lastTabItemIndex){
                document.id("tab001-tab-"+ lastTabItemIndex).removeClass("unselected_last");
                document.id("tab001-tab-"+ lastTabItemIndex).addClass("selected selected_last");
            }else{
                document.id("tab001-tab-"+ lastTabItemIndex).removeClass("selected_last");
            }
        }
    }
    function tab001HoverTab(id, isHovering) {
        if (isHovering) {
            if (! document.id("tab001-tab-" + id).hasClass('selected'))
                document.id("tab001-tab-" + id).addClass('hover')
        } else {
            document.id("tab001-tab-" + id).removeClass('hover')
        }
    }
    // ]]>
</script>
<div id="tab001_container">
<div class="tab001_header">
    <div class="tab001_top_left"></div>
    <div
            id="tab001-tab-0"
            class="tab001_item first selected_first selected "
            style="text-align:center;">
        <table cellpadding="0" cellspacing="0" border="0" title="Autoturisme">
            <thead>
            <tr>
                <td class="tab001_header_arrow"><a href="/SBE/Brosura/VeziBrosuri/tabid=tab0" class="tab_anchor"></a></td>
                <td class="tab001_header_label" valign="middle" style="height:41px;vertical-align:middle;">
                    <!-- 	TD 8174 jhe method has been called from here to escape special characters -->
                    <a
                            href="/SBE/Brosura/VeziBrosuri/tabid=tab0"
                            onclick="tab001SelectTab('0');
if(typeof(sford)=='object')setOmnitureTabName('Autoturisme');
return false;"
                            onmouseover="tab001HoverTab('0', true);"
                            onmouseout="tab001HoverTab('0', false);"
                            class="tab_anchor">Autoturisme</a></td>
            </tr>
            </thead>
        </table>
    </div>
    <div
            id="tab001-tab-1"
            class="tab001_item last unselected_last unselected "
            style="text-align:center;">
        <table cellpadding="0" cellspacing="0" border="0" title="Vehicule comerciale">
            <thead>
            <tr>
                <td class="tab001_header_arrow"><a href="/SBE/Brosura/VeziBrosuri/tabid=tab1" class="tab_anchor"></a></td>
                <td class="tab001_header_label" valign="middle" style="height:41px;vertical-align:middle;">
                    <!-- 	TD 8174 jhe method has been called from here to escape special characters -->
                    <a
                            href="/SBE/Brosura/VeziBrosuri/tabid=tab1"
                            onclick="tab001SelectTab('1');
if(typeof(sford)=='object')setOmnitureTabName('Vehicule comerciale');
return false;"
                            onmouseover="tab001HoverTab('1', true);"
                            onmouseout="tab001HoverTab('1', false);"
                            class="tab_anchor">Vehicule comerciale</a></td>
            </tr>
            </thead>
        </table>
    </div>
</div><!-- END OF HEADER -->
<div class="tab001_divider"></div>
<div class="tab001_content_container">
    <div class="tab001_content">
        <div id="tab001-contentpane-0" class="tab001-pane-selected">
            <div class='tab001_TabReco_ShowCATCollection' >
                <div class="CATWrapper">
                    <div class="CATRow">
                        <div class="CATItem">
                            <div class="CATarticleTitle">
                                <div class="CATarticleTitle_2">
                                    Ford B-MAX
                                </div>
                            </div>
                            <div class="CATarticleImg">
                                <div class="imgNonZoom">
                                    <img
                                            src="/cs/BlobServer?blobtable=MungoBlobs&#38;blobcol=urldata&#38;blobwhere=1214428898077&#38;blobkey=id"
                                            border="0" width="178"
                                            height="100"
                                            alt="Ford B-MAX"
                                            title="Ford B-MAX"
                                            style="border: solid 1px #999999;">
                                </div>
                            </div>
                            <div class="CATarticleBody">
                                <div class="CATarticleText">
                                    <a HREF="/Hidden/B-MAX" CONTENTEDITABLE="false" >Vezi broşura interactivă noul Ford B-MAX</a></div>
                            </div>
                        </div>
                        <div class="CATItem_2and3">
                            <div class="CATarticleTitle">
                                <div class="CATarticleTitle_2">
                                    Ford Ka
                                </div>
                            </div>
                            <div class="CATarticleImg">
                                <div class="imgNonZoom">
                                    <img
                                            src="/cs/BlobServer?blobtable=MungoBlobs&#38;blobcol=urldata&#38;blobwhere=1214421985844&#38;blobkey=id"
                                            border="0" width="178"
                                            height="100"
                                            alt="Ford Ka"
                                            title="Ford Ka"
                                            style="border: solid 1px #999999;">
                                </div>
                            </div>
                            <div class="CATarticleBody">
                                <div class="CATarticleText">
                                    <a HREF="/Hidden/Ka" CONTENTEDITABLE="false" >Vezi broşura interactivă Ford Ka</a></div>
                            </div>
                        </div>
                        <div class="CATItem_2and3">
                            <div class="CATarticleTitle">
                                <div class="CATarticleTitle_2">
                                    Ford Fiesta
                                </div>
                            </div>
                            <div class="CATarticleImg">
                                <div class="imgNonZoom">
                                    <img
                                            src="/cs/BlobServer?blobtable=MungoBlobs&#38;blobcol=urldata&#38;blobwhere=1214421985966&#38;blobkey=id"
                                            border="0" width="178"
                                            height="100"
                                            alt="Ford Fiesta"
                                            title="Ford Fiesta"
                                            style="border: solid 1px #999999;">
                                </div>
                            </div>
                            <div class="CATarticleBody">
                                <div class="CATarticleText">
                                    <a HREF="/Hidden/Fiesta" CONTENTEDITABLE="false" >Vezi broşura interactivă Ford Fiesta</a></div>
                            </div>
                        </div>
                    </div><div style="height:0; overflow:hidden; margin:-1px 0 0 0; clear:both;"></div>
                    <div class="CATRow">
                        <div class="CATItem">
                            <div class="CATarticleTitle">
                                <div class="CATarticleTitle_2">
                                    Ford Kuga
                                </div>
                            </div>
                            <div class="CATarticleImg">
                                <div class="imgZoom">
                                    <a href="/cs/BlobServer?blobtable=MungoBlobs&#38;blobcol=urldata&#38;blobwhere=1214439609448&#38;blobkey=id" target="_blank" onmouseover="changeClassbyID('izid64992011205023529538','imgZoom_png_hovern')" onmouseout="changeClassbyID('izid64992011205023529538','imgZoom_png')"
                                       onclick="overlayStart('/cs/BlobServer?blobtable=MungoBlobs&#38;blobcol=urldata&#38;blobwhere=1214439609448&#38;blobkey=id','image','Ford Kuga - manevrabilitate','Închide'); return false;">
                                        <img
                                                src="/cs/BlobServer?blobtable=MungoBlobs&#38;blobcol=urldata&#38;blobwhere=1214439609456&#38;blobkey=id"
                                                border="0" width="178"
                                                height="100"
                                                alt="Ford Kuga - manevrabilitate"
                                                title="Ford Kuga - manevrabilitate"
                                                style="border: solid 1px #999999;">
                                    </a>
                                    <div>
                                        <a href="/cs/BlobServer?blobtable=MungoBlobs&#38;blobcol=urldata&#38;blobwhere=1214439609448&#38;blobkey=id" target="_blank" id="izid64992011205023529538" class="imgZoom_png" title='Zoom' onclick="overlayStart('/cs/BlobServer?blobtable=MungoBlobs&#38;blobcol=urldata&#38;blobwhere=1214439609448&#38;blobkey=id','image','Ford Kuga - manevrabilitate','Închide'); return false;"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="CATarticleBody">
                                <div class="CATarticleText">
                                    <a HREF="/Hidden/Kuga" CONTENTEDITABLE="false" >Vezi broşura interactivă Ford Kuga</a></div>
                            </div>
                        </div>
                        <div class="CATItem_2and3">
                            <div class="CATarticleTitle">
                                <div class="CATarticleTitle_2">
                                    Ford Tourneo Connect
                                </div>
                            </div>
                            <div class="CATarticleImg">
                                <div class="imgNonZoom">
                                    <img
                                            src="/cs/BlobServer?blobtable=MungoBlobs&#38;blobcol=urldata&#38;blobwhere=1214455334634&#38;blobkey=id"
                                            border="0" width="178"
                                            height="100"
                                            alt="Noul Tourneo Connect"
                                            title="Noul Tourneo Connect"
                                            style="border: solid 1px #999999;">
                                </div>
                            </div>
                            <div class="CATarticleBody">
                                <div class="CATarticleText">
                                    <a HREF="/Hidden/TourneoConnect" CONTENTEDITABLE="false" >Vezi broşura interactivă Ford Tourneo Connect</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="collectionClear"></div>
                </div>
            </div>
        </div>
        <div id="tab001-contentpane-1" class="tab001-pane-unselected">
            <div class='tab001_TabReco_ShowCATCollection' >
                <div class="CATWrapper">
                    <div class="CATRow">
                        <div class="CATItem">
                            <div class="CATarticleTitle">
                                <div class="CATarticleTitle_2">
                                    Ford Tourneo Custom
                                </div>
                            </div>
                            <div class="CATarticleImg">
                                <div class="imgZoom">
                                    <a href="/cs/BlobServer?blobtable=MungoBlobs&#38;blobcol=urldata&#38;blobwhere=1214435531317&#38;blobkey=id" target="_blank" onmouseover="changeClassbyID('izid69997081205022345036','imgZoom_png_hovern')" onmouseout="changeClassbyID('izid69997081205022345036','imgZoom_png')"
                                       onclick="overlayStart('/cs/BlobServer?blobtable=MungoBlobs&#38;blobcol=urldata&#38;blobwhere=1214435531317&#38;blobkey=id','image','Tourneo Custom Exterior','Închide'); return false;">
                                        <img
                                                src="/cs/BlobServer?blobtable=MungoBlobs&#38;blobcol=urldata&#38;blobwhere=1214435531319&#38;blobkey=id"
                                                border="0" width="178"
                                                height="100"
                                                alt="Tourneo Custom Exterior"
                                                title="Tourneo Custom Exterior"
                                                style="border: solid 1px #999999;">
                                    </a>
                                    <div>
                                        <a href="/cs/BlobServer?blobtable=MungoBlobs&#38;blobcol=urldata&#38;blobwhere=1214435531317&#38;blobkey=id" target="_blank" id="izid69997081205022345036" class="imgZoom_png" title='Zoom' onclick="overlayStart('/cs/BlobServer?blobtable=MungoBlobs&#38;blobcol=urldata&#38;blobwhere=1214435531317&#38;blobkey=id','image','Tourneo Custom Exterior','Închide'); return false;"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="CATarticleBody">
                                <div class="CATarticleText">
                                    <a HREF="/Hidden/TourneoCustom" CONTENTEDITABLE="false" >Vezi broşura interactivă Ford Tourneo Custom</a></div>
                            </div>
                        </div>
                        <div class="CATItem_2and3">
                            <div class="CATarticleTitle">
                                <div class="CATarticleTitle_2">
                                    Ford Ranger
                                </div>
                            </div>
                            <div class="CATarticleImg">
                                <div class="imgNonZoom">
                                    <img
                                            src="/cs/BlobServer?blobtable=MungoBlobs&#38;blobcol=urldata&#38;blobwhere=1214423961853&#38;blobkey=id"
                                            border="0" width="178"
                                            height="100"
                                            alt="Noul Ford Ranger"
                                            title="Noul Ford Ranger"
                                            style="border: solid 1px #999999;">
                                </div>
                            </div>
                            <div class="CATarticleBody">
                                <div class="CATarticleText">
                                    <a HREF="/Hidden/Ranger" CONTENTEDITABLE="false" >Vezi broşura interactivă Ford Ranger</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="collectionClear"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tab001_footer"><!-- CLOSES THE BOTTOM OF THE CONTENT --></div>
</div>
</div>
<div class="center_item">
</div>
<div class="center_item">
</div>
<div class="center_item">
</div>
<div id="center_btt">
</div>
<!-- TD 8042 - AddThis Social Book Marking tool display Starts-->
<div style="height: 10px">&nbsp;</div>
<div class="center_item">
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
    <a class='addthis_button' href="http://www.addthis.com/bookmark.php?v=250&amp;username=engineps">
        <img src="/cs/BlobServer?blobtable=MungoBlobs&#38;blobcol=urldata&#38;blobwhere=1214384086466&#38;blobkey=id" border="0" alt="Adaugă" title="Adaugă"  height = '24'  width = '186' />
    </a>
    <script type="text/javascript" src='http://s7.addthis.com/js/250/addthis_widget.js?username=engineps'></script>
    <script type="text/javascript">
        var addthis_config = addthis_preconfig_variables;
        var addthis_localize = {share_caption:'Marchează şi partajează',favorites:'Favorite',print:'Printează',more:'Mai multe'};
    </script>
    <!-- AddThis Button END -->
</div>
<!-- TD 8042 - AddThis Ends-->
</div>
<div id="container_right">
    <div class="right_item">
    </div>
    <!-- Technical Highlights -->
    <!-- <Start> -->
    <div class="right_item">
    </div>
    <!-- <End> -->
    <div class="right_item">
    </div>
</div>
</div>