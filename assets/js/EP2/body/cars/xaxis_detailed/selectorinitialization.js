
EP2=EP2||{};EP2.initVehicleNameplate=function(){var $vvmRoot=$('#vvmRoot');if($vvmRoot.length===0)
return null;var xmediator=EP2.Globals.Mediator||new EP2.Mediator();if(Modernizr.history&&EP2.historyEnabled){var axisPointerController=new EP2.XAxis.NavControls.ViewController({clickableElements:$('.pointer'),mediator:xmediator});}
EP2.Globals.ssv=new EP2.SelectorView({mediator:xmediator});EP2.Globals.npd=EP2.NameplateDetailsView({mediator:xmediator});EP2.Globals.cta=EP2.CTAView({mediator:xmediator});xmediator.subscribe('vehicleChange',function(payload){var bounds;if((payload.vehicleIndex===0)||payload.vehicleIndex===bootstrapVehicleData.vehicles.length-1){bounds=(payload.vehicleIndex===0)?'start':'end';}else{bounds='active';}
if(Modernizr.history&&EP2.historyEnabled){xmediator.notify(EP2.XAxis.Events.THRESHOLD,{bounds:bounds});}else{if(payload.vehicleIndex===0){$('.x-axis-wrapper > .pointer.right').show();}else if(payload.vehicleIndex===bootstrapVehicleData.vehicles.length-1){$('.x-axis-wrapper > .pointer.left').show();}else{$('.x-axis-wrapper > .pointer').show();}}},this);EP2.VehicleRolloverController(xmediator,bootstrapVehicleData);EP2.Globals.dc=new EP2.VehicleDataCache(bootstrapVehicleData,xmediator);EP2.Globals.vvm=new EP2.VehicleTemplateRenderer(bootstrapVehicleData,xmediator);EP2.Globals.vvm.render();EP2.InteriorImageCarouselFacade(xmediator);xmediator.subscribe('vehicleChange',function(payload){$('.breadCrumb ul li:eq(2)').text(payload.data.nameplate);$.ajax({url:'/cs/ContentServer?pagename='
+EP2.getSiteName()
+'/EP2/body/cars/xaxis_detailed/M24_PrimaryTabsBlock&site='
+EP2.getSiteName()+'&cid='
+payload.data.cid+'&c=Page',success:function(data){$('.nameplate-tab-content').get(0).innerHTML=data;var jaxer=new EP2.Link({mediator:EP2.Globals.Mediator,selector:'.js-link',target:'.nameplate-main-content'});$('.js-link').click(function(){$(this).closest('li').siblings('li').removeClass('selected');$(this).closest('li').addClass('selected');});EP2.initializeMidpageTabs();}});},this);if(EP2.Globals.promoCarousel){EP2.Globals.mameplateCarouselFacade=EP2.NameplateCarouselFacade(xmediator,EP2.Globals.promoCarousel.carousel);}
var hoverIn=function(e){var $el=$(this),$parent=$el.parent();if($parent.hasClass('left')){$('.vehicle-preview-rollover.left').addClass('active');}
if($parent.hasClass('right')){$('.vehicle-preview-rollover.right').addClass('active');}};var hoverOut=function(e){var $el=$(this),$parent=$el.parent();if($parent.hasClass('left')){$('.vehicle-preview-rollover.left').removeClass('active');}
if($parent.hasClass('right')){$('.vehicle-preview-rollover.right').removeClass('active');}};$('.vehicle-preview-rollover').on('mouseover click',function(e){if(e.type==='click'){if($(this).hasClass('left'))document.location=$('a.pointer.left').attr('href');else document.location=$('a.pointer.right').attr('href');}else{if($(this).hasClass('left'))$('a.pointer.left').toggleClass("hover");else $('a.pointer.right').toggleClass("hover");}
$(this).addClass('active');});$('.vehicle-preview-rollover').on('mouseout',function(){if($(this).hasClass('left'))$('a.pointer.left').toggleClass("hover");else $('a.pointer.right').toggleClass("hover");$(this).removeClass('active');});$(function(){new EP2.DeferredImageLoader();$('#vvmWrapper .pointer span').hover(hoverIn,hoverOut);});};EP2.initSeriesDetailsSelectors=function(){if($('#yAxis-detailed').length===0){return;}
var url='/cs/ContentServer?pagename='
+EP2.getSiteName()
+'/EP2/body/cars/yaxis_detailed/SeriesSelectorBlock&seriesUscCode='
+seriesUscCode+'&nameplateUscCode='+nameplateUscCode
+'&gforceMode='+EP2.getGforceMode();var bootstrap={data:{uscCode:nameplateUscCode,seriesCode:seriesUscCode}};var baseLink=$('#bp-yaxis-links a').attr('href');var ymediator=EP2.Globals.Mediator||new EP2.Mediator();ymediator.subscribe('userConfigChange',function(payload){$('#bp-yaxis-links a').attr('href',baseLink+'?features=C'+seriesUscCode+':C'+payload.b.usc
+':C'+payload.c.usc);},this);EP2.Globals.ssv=new EP2.SelectorView({mediator:ymediator});EP2.Globals.ssv.updateUSC(bootstrap);$.ajax({url:url,dataType:'json',success:function(data){data.exteriorImagePack={};data.exteriorImages={};data.interiorImages={};ymediator.notify('vehicleDataRequested',data);}})
var VehicleHeroFacade=function(mediator){this.hero=$('#series-hero-holder');this.background=$('.vehicle-background');this.disclaimer=$('#disclaimerColor');mediator.subscribe('vehicleImageChange',this.onVehicleImageChange,this);mediator.subscribe('imageResourceUnavailable',this.onResourceUnavailable,this);};VehicleHeroFacade.prototype={suppressImageChange:true,onVehicleImageChange:function(payload){if(this.suppressImageChange){return this.suppressImageChange=false;}
this.hero.stop(true,true).fadeOut();var rl=new EP2.ResourceLoader({url:payload.images,callback:this.renderImages.bind(this)}).load();var bgImage=bootstrapVehicleData.backgroundImagePath[payload.index];var currentImage=this.background.css('background-image');if(bgImage!==('null'||null)){if(currentImage.indexOf(bgImage)===-1){bgImage=[bgImage];this.background.stop(true,true).fadeOut(350);var backgroundImageLoader=new EP2.ResourceLoader({url:bgImage,callback:this.updateBackgroundImage.bind(this)}).load();}}else{this.background.css('background-image','none');}
var color=bootstrapVehicleData.disclaimerTextColor[payload.index];if(color!=(null||"null")){this.disclaimer.css('color','#'+color);}else{this.disclaimer.css('color','');}},renderImages:function(images){var len=images.length,i=0;this.hero.empty();for(i;i<len;i++){this.hero.append(images[i].resource);}
this.hero.stop(true,true).fadeIn();},updateBackgroundImage:function(images){this.background.css('background-image','url("'+images[0].url+'")');this.background.css('background-size','cover');this.background.stop(true,true).fadeIn(750);},onResourceUnavailable:function(){if(this.suppressImageChange){this.suppressImageChange=false;return;}
this.hero.stop(true,true).fadeOut();}};new VehicleHeroFacade(ymediator);EP2.InteriorImageCarouselFacade(ymediator);};$(function(){EP2.initVehicleNameplate();EP2.initSeriesDetailsSelectors();});