
var EngineGlobals = EngineGlobals || {};
EngineGlobals.site = 'RORO4_ENGINE';
EngineGlobals.siteSetup = {"DistanceUnit":"km","EcatLocale":"ro-ro","EcatMarketCode":"RO","OmnitureLanguage":"rum","OmnitureScript":"1204986890525","SecureDomain":"wwwprod-ro.engine.ford.com","MarketCode":"ROM","carsPrefixUrl":"Autoturisme","HttpDomain":"www.ford.ro","carsModelsPrefixUrl":"Modele","CookieText":"1205010587650","Locale":"ro_RO","HttpDomainAliases":"wwwprod-ro.engine.ford.com","OmnitureCountry":"ford-ro"};
EngineGlobals.isMobile = false;
// 3 letter ISO code
EngineGlobals.isoCountry = 'ROU';
EngineGlobals.i18n = {
currencySymbol : 'RON',
currencyCode : 'RON',
currencySymbolPosition : 'postfix',
monetaryDecimalSeparator : ',',
thousandSeparator : '.',
currencyCodeToSymbolMap : {"USD":"$","PLN":"z\u0142","HUF":"Ft","BGN":"\u043b\u0432","EUR":"\u20ac","RSD":"\u0414\u0438\u043d.","SEK":"kr","ALL":"Lek","HRK":"kn","LTL":"Lt","BYR":"p.","BAM":"KM","EEK":"kr","RUB":" \u0440\u0443\u0431","UAH":"\u20b4","CHF":"CHF ","ISK":"kr","NOK":"kr","GBP":"\u00a3","TRL":"\u20a4","MKD":"\u0434\u0435\u043d","RON":"lei","CZK":" K\u010d","LVL":"Ls","JPY":"\u00a5"},
// Formats currency in current locale's format
formatCurrency: function (val, currencyCode) {
var currencySymbol;
if (typeof currencyCode !== 'undefined') {
currencySymbol = this.currencyCodeToSymbolMap[currencyCode];
// Couldn't find the currency, stick to the code
if (typeof currencySymbol === 'undefined') {
currencySymbol = currencyCode;
}
} else {
// Moved the below statement within else block. 
// B'coz it's placed outside the else block which overrides currency symbol.
currencySymbol = this.currencySymbol;
}	    		    
// Support strings
if (typeof val !== 'number') {
val = parseFloat(val, 10);
}
if (isNaN(val)) {
val = 0;
}
var intPart = Math.floor(val);
var decimalPart = val - intPart;
intPart = ''+intPart;
// inject thousand separator into int part
var result = '';
for (var i = intPart.length - 1, n = i; i >= 0; i--) {
if ((n - i) % 3 === 0 && result !== '') {
result = this.thousandSeparator + result;
}
result = intPart.charAt(i) + result;
}
// add decimal part, if any
if (decimalPart !== 0) {
decimalPart = ('' + decimalPart.toFixed(2)).substring(2);
result = result + this.monetaryDecimalSeparator + decimalPart;
}
// Currency symbol
if (this.currencySymbolPosition === 'prefix') {
result = currencySymbol + result;
} else {
result = result + currencySymbol;            
}
return result;
}
};
// Event hooker
EngineGlobals.onLoad = function(callback) {
if (!!(window.addEventListener)) {
// normal browsers
window.addEventListener("DOMContentLoaded", callback);
} else {
// internet exploder 
window.attachEvent("onload", callback);
}
};
// Adds javascript to body (jquery does more than it should to do it)
EngineGlobals.injectScript = function(url) {
var tag = document.createElement('script');
tag.type = 'text/javascript';
script.src = url;
document.body.appendChild(tag);
};
// Cookie related methods 
EngineGlobals.cookie = {
// returns cookie value, if found, or nothing (undefined)
read : function(name) {
var nameEQ = name + "=";
var ca = document.cookie.split(';'); 
for(var i=0;i < ca.length;i++) {
var c = ca[i];
while (c.charAt(0)==' ') c = c.substring(1,c.length);
if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
}
}	
};
var GuxGlobals = GuxGlobals || {};
GuxGlobals.personalisationState = false;
GuxGlobals.personalisationUrl = 'PersonalisationURL';
GuxGlobals.personalisationTimeout = 6; 
// Global site terms, accessible from Javascript, used in automatic dialogs
EngineGlobals.txt = {
close: 'close',
closeWindow: 'closeWindow',
cancel: 'cancel',
help:  'help',
ok: 'ok'
};
// EP2 compatibility
var EP2 = EP2 || {};
EP2.Globals = EP2.Globals || {};
EP2.Globals.siteName = EngineGlobals.site; 
