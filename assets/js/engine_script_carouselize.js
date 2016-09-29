
/*
* Author : Fbolaji
* date: 23-07-2014
* description: carouselize - carousel to handle video, flash or image in each slides.
* 							  video take priority if all the media types are authored for one item.
* */
var EP2 = EP2 || {};
//Used by blue hive flash
function controlFlash(string, flashId) {
try {
var f = findFlash(flashId);
return f.controlFlash(string);
} catch(e) {
return 0;
}
}
function flashEvent(string){
}
function getProperty(value, flashId){
var f = findFlash(flashId);
try{
return f.getProperty(value);
} catch(e) {
console.log("Error in getProperty: " + e);
}
}
function propertyReturned(property, value){
flashDuration = value;
return flashDuration;
}
function findFlash(flashId){
return document.getElementById(flashId);
}
!function($, window, document, undefined) {
"use strict";
EP2.fetchedData = {};
EP2.mergedData = {};
EP2.carouselize = function (options) {
var defaults = {
el: 'carouselize', // element id selector .. no class selector allowed
ajaxUrl: '/cs/ContentServer?pagename='+ EP2.Globals.siteName +'/service/CarouselJsonService',
bootStrapJSON: {}
};
this.options = $.extend({}, defaults, options);
this.element = this.options.el;
this.$el = $('#'+this.options.el);
this.site = EP2.Globals.siteName || 'EP2_ENGInE';
this.recId = parseInt($('body').attr('data-carousel'));
this.ajaxUrl = this.options.ajaxUrl + '&site=' + this.site +'&recId=' + this.recId;
this.bootStrapJSON = this.options.bootStrapJSON;        
this.init();
};
EP2.carouselize.prototype = {
init: function () {	
/*var hideElements = '.disclaimer, .innerBox';
this.$el.find('.innerBox').hide('fast');
*/
this.renderSlideList();
//console.log(this.ajaxUrl);
},
setupAjaxCallbacks: function () {//setting for ajax interaction
//whenever ajax is trigger, the ajax setting activated
$(document).ajaxStart(function () {
if(!$('#ajax-status').length){
$('body').append('<div id="ajax-status"><div></div></div>');
}
$('#ajax-status div').html('<div class="loader"></div>');
$('#ajax-status').show();
}).ajaxStop(function (event, xhr, ajaxOptions, thrownError) {
$('#ajax-status').fadeOut();
}).ajaxError(function (event, xhr, ajaxOptions, thrownError) {
$('#ajax-status span').text("Sorry, we are currently unable to load the content you have requested. Please try again later.");
$('#ajax-status').show().delay(700).fadeOut();
});
},
renderSlideList: function(){
var $this = this,
$thisEle = this.$el,
$templateToRender ="",
staticData = this.bootStrapJSON,
listRequest = this.ajaxUrl,	    	      
templateHTML = function(){ // HTML element template to render
for(var i=0; i<EP2.mergedData.CarouselItems.length; i++){
var cssClassPos = ' pos'+ EP2.mergedData.CarouselItems[i].vAlign + EP2.mergedData.CarouselItems[i].hAlign + " " + EP2.mergedData.CarouselItems[i].visualDesign,
cssBlockStyle = EP2.mergedData.CarouselItems[i].visualDesign,
$extLink=EP2.mergedData.CarouselItems[i].extLink,
$intLink=EP2.mergedData.CarouselItems[i].intLink,
$tctas=EP2.mergedData.CarouselItems[i].tctas,
$btnLink =EP2.mergedData.CarouselItems[i].buttonLink,		    					 
$btnTarget=EP2.mergedData.CarouselItems[i].target,
$disclaimer = EP2.mergedData.CarouselItems[i].disclaimers,
mediatype =EP2.mergedData.CarouselItems[i].media.mediaType,
$ctaBlock = '',
$tctasBtnBuild = '',
$target='',
$img = '',
$vid = '',
$flash = '',
$btn='',
cssBlockColor = '',
whichMedia ="";
if(!$.isEmptyObject($tctas)){
for(var j=0; j<$tctas.length; j++){
$target=$tctas[j].target;
//console.log($tctas[j].btnText, $tctas[j].btnUrl, $tctas[j].target);
if($target !== undefined){
$tctasBtnBuild += '<div class="ctaLink"><a href="'+ $tctas[j].btnUrl +'" target="'+$tctas[j].target+'" ><span class="icon ctaArrow"></span>'+ $tctas[j].btnText +'</a></div>';
} else{ 
$tctasBtnBuild += '<div class="ctaLink"><a href="'+ $tctas[j].btnUrl +'"><span class="icon ctaArrow"></span>'+ $tctas[j].btnText +'</a></div>';
}
}
}
if($btnLink !== ""){
if($btnTarget!==""){
$btn = '<div class="btnLink light"><a href="'+EP2.mergedData.CarouselItems[i].buttonLink+'" target="'+$btnTarget+'">'+EP2.mergedData.CarouselItems[i].buttonText+'</a></div>';
}else{
$btn = '<div class="btnLink light"><a href="'+EP2.mergedData.CarouselItems[i].buttonLink+'">'+EP2.mergedData.CarouselItems[i].buttonText+'</a></div>';
}
}else{
$btn ='';
}
if(cssBlockStyle == "GreyBlock"){
cssBlockColor = "blockTransparent";
}else if(cssBlockStyle == "Block"){
cssBlockColor = "blockSlate";
}else{
cssBlockColor = "transparent";
}
$ctaBlock = '<div class="innerBox' + cssClassPos +' "><div class="'+cssBlockColor+'"><h2 class="bigHeading02">'+ EP2.mergedData.CarouselItems[i].headline +'</h2><p class="captionTxt">'+ EP2.mergedData.CarouselItems[i].subline +'</p><div class="btnwrapper">'+$btn +$tctasBtnBuild +'</div></div></div>';
if(!$.isEmptyObject(EP2.mergedData.CarouselItems[i].disclaimers)){
$disclaimer = '<div class="disclaimer"><p class="left-text">'+$disclaimer['left-text']+'</p><p class="right-text">'+$disclaimer['right-text']+'</p></div>';
}else{
$disclaimer ="";
}
if(EP2.mergedData.CarouselItems[i].media.imageUrl !== undefined && mediatype === "image"){
$img = '<img src="' + EP2.mergedData.CarouselItems[i].media.imageUrl + '" alt="'+EP2.mergedData.CarouselItems[i].media.title+'">';
whichMedia= '<article>'+ $img + $ctaBlock + $disclaimer + '</article>';
} else if(EP2.mergedData.CarouselItems[i].media.video !== undefined && mediatype === "video"){
$vid ='<video width="980" height="567" preload="none" xposter="'+  EP2.mergedData.CarouselItems[i].posterImageUrl +'" id="vidplayer'+i +'"><source title="'+ EP2.mergedData.CarouselItems[i].media.title +'" type="video/mp4" src="'+ EP2.mergedData.CarouselItems[i].media.video['mp4'] +'"></source><source title="'+EP2.mergedData.CarouselItems[i].media.title +'" type="video/webm" src="'+ EP2.mergedData.CarouselItems[i].media.video['webm'] +'"></source></video>';
whichMedia = '<article style="background: url('+EP2.mergedData.CarouselItems[i].posterImageUrl+') no-repeat;" class="videoObj">'+ $vid + $ctaBlock + $disclaimer + '</article>';
} else if(EP2.mergedData.CarouselItems[i].media.flash !== undefined && mediatype === "flash"){
$flash = '<div class="flashmovie" id="flashmovie'+i+'" data-name="flashmovie'+[i]+'" data-flash-vars="{}" data-flash-params="{&quot;play&quot;:&quot;True&quot;,&quot;loop&quot;:&quot;&quot;,&quot;quality&quot;:&quot;&quot;,&quot;bgcolor&quot;:&quot;&quot;,&quot;name&quot;:&quot;flashmovie'+i+'&quot;,&quot;wmode&quot;:&quot;transparent&quot;,&quot;align&quot;:&quot;&quot;,&quot;allowScriptAccess&quot;:&quot;sameDomain&quot;,&quot;allowFullScreen&quot;:&quot;false&quot;}" data-flash-dim="{&quot;w&quot;:&quot;980&quot;,&quot;h&quot;:&quot;565&quot;}" data-flash-src="'+EP2.mergedData.CarouselItems[i].media.flash+'" data-flash-selector="flashmovie'+[i]+'"></div>';
whichMedia = '<article style="background: url('+EP2.mergedData.CarouselItems[i].posterImageUrl+') no-repeat;" class="flashObj">'+ $flash + $ctaBlock + $disclaimer + '</article>';
} else if(EP2.mergedData.CarouselItems[i].posterImageUrl !== undefined) {
$img = '<img src="' + EP2.mergedData.CarouselItems[i].posterImageUrl + '" alt="'+EP2.mergedData.CarouselItems[i].buttonText+'">';
whichMedia= '<article>'+ $img + $ctaBlock + $disclaimer + '</article>';		    						
}
//console.log( $vid, $flash, $img );
$templateToRender += whichMedia;
}
$thisEle.empty().append($templateToRender);		    	    	   
//console.log("fetched:", EP2.fetchedData, "merged:",EP2.mergedData);
$this.prepareControls();	
};
EP2.mergedData = $.extend({}, staticData);
//ajax call
if( this.ajaxUrl !== null){
this.setupAjaxCallbacks();
$.getJSON( this.ajaxUrl, function(data){ 
EP2.fetchedData = data;
//console.log('fetching carousel data ..');
}).done(function( data ) {
EP2.mergedData = data;
//console.log("fetched carousel json data :", data);
//EP2.mergedData = $.extend({}, EP2.fetchedData); 
templateHTML();
//console.log("done!", EP2.mergedData);
if (EP2.mergedData.CarouselItems.length == 1) {
$thisEle.off('mouseover');
$thisEle.off('mouseleave');
$thisEle.find('article .innerBox').delay(500).fadeIn();
$('.nextPrevBtn').addClass('visuallyhidden');
}
}).fail(function(){
console.log('fetching carousel data ..failed');
});
}else{
EP2.mergedData = staticData;
templateHTML();
}
/*if($.isEmptyObject(EP2.mergedData)){
console.log("no data to populate..");
return;
}*/
},
prepareControls : function(){
this.pagerElements = '<div class="nextPrevBtn" style="left:0"><a href="#" class="prevSlide"><span class="hideText">previous</span></a><a href="#" class="nextSlide"><span class="hideText">next</span></a></div><div class="pager"><span class="indicatorRightCurve"><span class="indicator"></span></span></div><div class="bg-caption-tran"></div>'; 		
this.$el.children().wrapAll('<div class="carousel-list">');
this.$el.css('position','relative');
this.$el.append(this.pagerElements);
this.setFlashContent();
this.carouselVideoSpecificBrowser();
this.mediaElementIntialization();
this.initializeCycle();
},
carouselVideoSpecificBrowser: function () {
$.browser.safari = ($.browser.webkit && !(/chrome/.test(navigator.userAgent.toLowerCase())));
$.browser.chrome = ($.browser.webkit && !(/safari/.test(navigator.userAgent.toLowerCase())));
var userAgent = window.navigator.userAgent;
$('video').each(function () {
var $thisVid = $(this), 
vidMpeg = $thisVid.find('source[type="video/mp4"]').attr('src'),
vidWebm = $thisVid.find('source[type="video/webm"]').attr('src'), 
vidFlv = $thisVid.find('source[type="video/flv"]').attr('src'),
vidImg = $thisVid.attr('poster');
//console.log(vidImg);
$thisVid.closest('.videoObj').css('background-image','url('+vidImg+')');
if (($.browser.msie && $.browser.version <= 9) || ($.browser.safari && userAgent.match(/Windows/i)) || ($.browser.safari && userAgent.match(/iOS/i))) {
// $thisVid.removeAttr('poster');
$thisVid.attr({src: vidMpeg, type : "video/mp4", preload : "true", controls : "true" });
$thisVid.find('source').remove();
} else if (userAgent.match(/Chrome/i)) {
//$thisVid.removeAttr('poster');
// console.log("chrome browser", vidMpeg);
$thisVid.attr({
src : vidMpeg,
type : "video/mp4",
preload : "true",
controls : "true"
});
$thisVid.find('source').remove();
}
});
},
mediaElementIntialization:function(){
var selector = this.$el.find('.carousel-list');
//var _lastTime = 0, interval;
$('video').mediaelementplayer({
startVolume: 0.7,
alwaysShowControls: false,
pauseOtherPlayers: true,
features: ['loadstart','playpause','progress','current', 'tracks','volume','fullscreen'],
plugins: ['flash'],
pluginPath:'/cs/ENGInE/flash/', //TODO : set sitename
flashName: 'flashmediaelement.swf',
framesPerSecond: 25,
timerRate: 250,
alwaysShowHours: false,
showTimecodeFrameCount: false,
success: function (mediaElement, domObject) {
// repositionControls();
//mediaElement.load();
mediaElement.pause();
var currentTime = "";
mediaElement.addEventListener('pause', function(){
currentTime = 0;
selector.cycle('resume');
mediaElement.load();
console.log("video is paused, resume carousel transition");
},true);
mediaElement.addEventListener('play', function(){
selector.cycle('pause');
//selector.find('article .innerBox').hide();
selector.find('article .disclaimer').hide();
console.log("video is palying, resume carousel transition");
mediaElement.play();
},false);
mediaElement.addEventListener('playing', function(){
selector.cycle('pause');
//selector.find('article .innerBox').hide();
selector.find('article .disclaimer').hide();
mediaElement.play();
},false);
mediaElement.addEventListener('timeupdate', function(){
currentTime = mediaElement.currentTime;
//console.log(currentTime);
if(currentTime > 1.0){
selector.cycle('pause');
//  console.log("carousel should be paused by now..", currentTime);
}
},false);
mediaElement.addEventListener('ended', function(){
selector.cycle('resume');
console.log("resume carousel");
},true);
},
startLanguage:'en',
// automatically translate into these languages
translations:['es','ar','zh','ru'],
// enable the dropdown list of languages
translationSelector: false,
enableKeyboard: true,
// fires when a problem is detected
error: function () {
console.log("error: video not loading");
selector.cycle('resume');
}
});
},
setFlashContent: function () {// embedding flash dynamically
$.browser.safari = ($.browser.webkit && !(/chrome/.test(navigator.userAgent.toLowerCase())));
var userAgent = navigator.userAgent;
$('.flashmovie').each(function () {
var swfContainer = $(this).attr('id');
if (swfContainer != undefined) {
var swfId = $('#' + swfContainer),
swfSource = swfId.data('flash-src'),
swfSelector = swfId.data('flash-selector'),
swfWidth = swfId.data('flash-dim').w,
swfHeight = swfId.data('flash-dim').h,
swfFlashvars = swfId.data('flash-vars'),
swfParams = swfId.data('flash-params'),
swfAttributes = {"name":swfId.data('flash-name'), "id": swfId.data('flash-id')};
if ($.browser.safari && userAgent.match(/Windows/i)) {
var createElement = $('<embed>').attr({
'id': swfAttributes.id,
'name': swfAttributes.name,
'play': 'true',
'loop': 'false',
'quality': 'high',
'src': swfSource,
'width': swfWidth,
'height': swfHeight,
'type': 'application/x-shockwave-flash',
'pluginspage': '//www.macromedia.com/go/getflashplayer',
'wmode': 'transparent',
'allowscriptaccess': 'always',
'allowfullscreen': 'true',
'bgcolor': '#ffffff',
'flashvars': swfFlashvars
});
$(document).ready(function(){$(this).parent('.flashObj').append(createElement);$(this).remove();});
} else {
$(document).ready(function(){swfobject.embedSWF(swfSource, swfSelector, swfWidth, swfHeight, "9.0.0", "/cs/ENGInE/flash/expressInstall.swf", swfFlashvars, swfParams, swfAttributes);});
}
}
});
},		    	
initializeCycle : function(){
var selector = this.$el,
nxt = '#'+this.element + ' .nextSlide',
prv = '#'+this.element + ' .prevSlide',
paginate = '#'+this.element + ' .pager .indicator',
onclickNavs = function(){
var activeSlide = selector.find('.videoObj.activeSlide');
if(activeSlide.length){
$('video')[0].player.pause();
selector.find('.carousel-list').cycle('resume');
console.log("video paused..move to next slide");
}
};
// cycle plugin settings
this.$el.find('.carousel-list').cycle({
activePagerClass: 'activeSlide',
fx:'scrollHorz',
timeout: 7000,
speed:250,
pause:true,
pauseOnPagerHover: true,
pager: paginate,
prev: prv,
next: nxt,
onPrevNextEvent:function(isNext){
onclickNavs();
},
onPagerEvent:function(idx, slideElement){
onclickNavs();
},
before: function () {
selector.find('.activeSlide').removeClass('activeSlide');
selector.find('article .innerBox').hide();
selector.find('article .disclaimer').hide();
$('.mejs-controls').hide('fast');
},
after: function (curr, next, opts) {
var currIndex = opts.currSlide,     	
children = selector.children(),
thisvideo = selector.find('.activeSlide video'),
findflashObject = selector.find('.activeSlide object'),
flashId = findflashObject.attr('id'),
vidIdx = thisvideo.index();
$('.mejs-controls').hide('fast');
selector.find('article:visible').addClass("activeSlide");
selector.find('article:visible .innerBox').delay(500).fadeIn();
selector.find('article:visible .disclaimer').delay(500).fadeIn();
if (findflashObject.length) {
selector.cycle('pause');
controlFlash('gotoStart', flashId);
controlFlash('playAnimation', flashId);
getProperty('duration', flashId);
}
}
});
this.hoverOnCarousel();
}, 
hoverOnCarousel:function(){
this.$el.find('.mejs-controls').remove();
this.$el.on({
'mouseover': function (e) {
$('.mejs-controls').hide('fast');
$('.nextPrevBtn').removeClass('visuallyhidden');
},
'mouseleave':function (e) {
$('.nextPrevBtn').addClass('visuallyhidden');
}
});
},
};
new EP2.carouselize();
}(jQuery, window, document);