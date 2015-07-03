//******************************************************************
//* Copyright (c) 2014 Ford Motor Company. All Rights Reserved.
//*
//* $$Workfile:   CSElement: ENGInE/script/messaging/core
//* $$Revision:   0.1
//* $$Author:   tknapp5
//*
//* Description:
//*
//******************************************************************
if (typeof define != 'function') {
var define = function (a,b,c) {return c;}; 	
}
if (!Object.keys) {
Object.keys = function(o) {
var k = [];
for (var i in o) {
if (o.hasOwnProperty(i)) {
k.push(i);
}
}
return k;
};
}
if ( typeof Function.getPrototypeOf !== "function" ) {
if ( typeof "string".__proto__ === "object" ) {
Function.getPrototypeOf = function(o){
return o.__proto__;
};
} else {
Function.getPrototypeOf = function(o){
return o.constructor.prototype;
};
}
}
define('core/core',['main'], (function () {
"use strict";
/*console = typeof console === 'undefined' ? {} : console;*/
var TagManager, MessageQueue, RootObject, CacheManager, RestManager;
var MQ = "MQ-";
var LogLevel = {
TRACE : "trace", 
DEBUG : "debug", 
ERROR : "error"
};
RootObject = function () {};
function objectifier(name, members, args) {
var Superclass = null, objectized;
if (typeof members === 'function') {
args = args || []; // IE issues
members = members.apply(null, args);
if (typeof members !== 'object') {
return false;
}
}
objectized = members.constructor;
Superclass = members.superclass || RootObject;
members.superclass = new Superclass();
objectized.prototype = new Superclass();
for (var m in members) {
objectized.prototype[m] = members[m];
}
objectized.prototype.constructor = members.constructor; // IE issues
for (var m in Superclass) {
if (!(Superclass.prototype[m]) && m !== "prototype") {
objectized[m] = Superclass[m];
}
}
return objectized;
}
var ProviderBase = function() {
var constructor = function () {
};
var initialize = function () {
//console.debug("Base initialized.");
};
var load = function () {
};
var click = function () {
};	
var started = function () {
};	
var getDataProvider = function () {
};
var stateChange = function () {
};
var hasMethod = function (prop) {
if ( typeof "string".__proto__ === "object" ) {
return typeof this.__proto__[prop] === "function";
} else {
return constructor.prototype.hasOwnProperty(prop);
}
};
return {
constructor : constructor,
initialize : initialize,
load : load,
click : click,
started : started,
stateChange : stateChange,
getDataProvider : getDataProvider,
hasMethod : hasMethod
};
};
MessageQueue = objectifier("MessageQueue",{
constructor: function () {
this.queueMode = true;
this.MQ = [];
},
makeEventName : function (eventName) {
return eventName.replace(" ", "_").replace(".", "||");
},		
broadcast: function (element, event, data) {
event = this.makeEventName(event);
if (this.queueMode) {
this.MQ.push({
event: MQ + event,
element: element,
data: data || {}
});
this.log(LogLevel.DEBUG,"Queued " + MQ + event);
} else {
this.log(LogLevel.DEBUG,"Broadcast " + MQ + event);
// todo 
try {
var _o = $._data (document, "events").hasOwnProperty(MQ + event);
if (! _o) {
this.log(LogLevel.TRACE,"No one is listening for the event " + MQ + event);	
}
}
catch (e) {
this.log(LogLevel.TRACE,"Unable to determine if event is bound due to Jquery version " + MQ + event);	
}
jQuery(element).trigger(MQ + event, [data]);
}
},
listen : function (elements, event, callback, isDelegate) {
event = this.makeEventName(event);
//event = event.replace(" ", "_").replace(".", "||");
if (isDelegate) {
jQuery(document).delegate(elements, MQ + event, callback);
} else {
jQuery(elements).bind(MQ + event, callback);
}
this.log(LogLevel.DEBUG,"Listening for " + MQ + event);
},
remove: function (elements, event, callback) {
event = this.makeEventName(event);
if (callback) {
jQuery(elements).unbind(MQ + event, callback);
} else {
jQuery(elements).unbind(MQ + event);
}
this.log(LogLevel.DEBUG,"Removed listener for " + MQ + event);
},
pause: function () {
this.queueMode = true;
},
resume: function () {
var len;
for (var i = 0, len = this.MQ.length; i < len; i++) {
var q = this.MQ[i];
this.log(LogLevel.DEBUG,"Unqueued " + q.event);
jQuery(q.element).trigger(q.event, [q.data]);
}
this.MQ = [];
this.queueMode = false;
},
log : function (level, s) {
var read = function(name) {
var nameEQ = name + "=";
var ca = document.cookie.split(';');
for ( var i = 0; i < ca.length; i++) {
var c = ca[i];
while (c.charAt(0) == ' ')
c = c.substring(1, c.length);
if (c.indexOf(nameEQ) == 0)
return c.substring(nameEQ.length, c.length);
}
return null;
};
var test = read("omnidebug");
if (typeof test != null && test == "true") {
if (level=="log") console.log(s);
else if (level=="trace") console.debug(s);
else if (level=="debug") console.debug(s);
else if (level=="error") console.error(s);
}
var remdebug = read("remdebug");
if (typeof remdebug != null && remdebug == "true") {
$.fx.off = true;
}
}
});
CacheManager = objectifier("CacheManager", {
constructor : function () {
},
getCacheKey : function () {
},
set : function () {
},
get : function () {
}
});
RestManager = objectifier("RestManager", {
constructor : function ( ) {
this.services = {};
},
add : function ( serviceString ) {
var service = {};
service.dataType = "json";
var s = serviceString.split("~");
service.version = s[0].substring(3, s[0].length);
service.sd = s[1].split("#");
service.name = service.sd[0];
service.scope = service.sd[1];
service.parameters = service.sd[2];
service.returnValues = service.sd[3];
s = service.parameters.split("\^");
service.key = s[0];
service.field = s[1];			
service.data = {};
this.services[service.name] = service;
},
contains : function (serviceString) {
if (typeof this.services[this.getServiceName(serviceString)] == "object") return true;
return false;
},
getServiceName : function (serviceString) {
var service = {};
service.dataType = "json";
var s = serviceString.split("~");
service.version = s[0].substring(3, s[0].length);
service.sd = s[1].split("#");
service.name = service.sd[0];
service.scope = service.sd[1];
service.parameters = service.sd[2];
service.returnValues = service.sd[3];			
return service.name;
},
getService : function (serviceString) {
var serviceName = this.getServiceName(serviceString);
return this.services[serviceName];
},
load : function ( serviceString ) {
var service = this.getService(serviceString);
jQuery.ajax({cache:false, async:false, url:"/cs/ContentServer?pagename=WEBA_ENGInE/service/Rest/v" + service.version + "/" + service.name}).done( function (jsonData) {
// TODO: only support for a global load, still some hardcodes.
var d = jsonData[service.name]; 
for (var i = 0; i < d.length; i++) {
service.data[d[i][service.key]] = d[i];
}
TK.log(LogLevel.DEBUG, d.length + " elements loaded from " + service.name);											
}.bind(this));
},
set : function () {
},
get : function ( serviceString, key ) {
var serviceName = this.getServiceName(serviceString);
var service = this.services[serviceName];
var test = service.data[key][service.returnValues];
return test;
}
});
TagManager = objectifier("TagManager",{
constructor: function () {
this.tags = [];
this.providers = [];
this.eventHandlers = [];
},
getObjectRef : function (obj, s) {
return s.split(".").reduce(function(o, ref) { return o[ref] }, obj);
},
replacePlaceholders : function (property, data, forceLc) {
for (var d in data) {
if (typeof data[d] == "string" && forceLc) { 
property = property.replace("<" + d + ">", data[d].toLowerCase());
} else {
property = property.replace("<" + d + ">", data[d]);										
}
}
return property;
},
replaceReferences : function(property, data, optional, forceLc) {
//<([a-z][a-z0-9\(\).]*)[^>]*>
// TODO: remove comments after completion, integrate with replacePlaceholders
// two cases here - either a single replacement or an omniture replacement with ":" delimeter
var tokens;
if (property.indexOf(":") > - 1) {
tokens = property.split(":");	
} else {
tokens = [property];
}
// captures
//
//MATCH 1
//1.	`[<tab name>]`
//2.	`tab`
//MATCH 2
//1.	`<nameplate>`
//2.	`nameplate`
var tlen = tokens.length;
for (var t = 0; t<tlen; t++) {
// REALLY weird chromium bug - need to reset the pattern - TODO: issue with the global flag
//var pattern = /\[?<([a-z][a-z0-9\s\(\).]*)[^>]*>\]?/gi; - 
var pattern = /<([a-z][a-z0-9\s\(\).]*)[^>]*>/gi;
var matches;
//var matches = pattern.exec(tokens[t]);
while ((matches = pattern.exec(tokens[t])) != null) {
if (matches.index === pattern.lastIndex) {
pattern.lastIndex++;
}
for (var i = 0; i < matches.length; i++) {
if (matches[i].substring(0,1) == '<') {
var p = matches[i].substring(1, matches[i].length-1);
try {
// check for json
//"JSA100~nameplates~modelYear~{config.model}"
if (p.lastIndexOf("JSA",0) === 0) {
// JSON
TK.log(LogLevel.DEBUG, p);
if (! TK.RestManager.contains(p)) {
TK.RestManager.add(p);
TK.RestManager.load(p);
}
property = property.replace("<" + p + ">", TK.RestManager.get(p, this.getObjectRef(data, TK.RestManager.getService(p).field)));
} else if (typeof eval("data." + p) != 'undefined') {
// specific data is prioritized
//property = property.replace(matches[i], eval("data." + p)).toLowerCase();
// GUX WE.
if (forceLc) {
property = property.replace(matches[i], eval("data." + p)).toLowerCase();
} else {
property = property.replace(matches[i], eval("data." + p));
}
} else throw("Undefined");
} 
catch (e) {
try {
if (typeof eval(p) != 'undefined') {
if (p !== "location") {
property = property.replace(matches[i], eval(p));
} else {  //location brings window location
property = property.replace(matches[i], "");
}
} else throw("Undefined");
}
catch (e1) {
try {
// 	lastly let the provider decide
if (typeof optional[p] != 'undefined') {
property = property.replace(matches[i], optional[p]);
} else throw("Undefined");
} 
catch (e2) {
TK.log(LogLevel.ERROR, "ERR:UNRESOLVED_ELEMENT [" + p + "]");
}
}
}
}
}
}
}
return property;
},
bootstrap: function(provider, data) {
var inst = this.providers[provider];
if (inst.hasMethod("started")) {
inst["started"](data);
} 			
if (data.events != undefined) {
for (var i = 0; i < data.events.length; i++) {
//Object.keys(data.events[i])[0]
var key = TK.makeEventName(Object.keys(data.events[i])[0]);
this.tags[key] = data.events[i][Object.keys(data.events[i])[0]];
if (this.tags[key].hasOwnProperty("_default")) {
if (typeof this.providers[provider]["pageload"] != "undefined") {
delete this.providers[provider]["pageload"];
} 
this.providers[provider]["pageload"] = this.tags[key];	
}
this.providers[provider][key] = this.tags[key];
if (this.tags[key].hasOwnProperty("_event")) {
if (this.tags[key].hasOwnProperty("_default")) {
// Default pageload							
if (typeof this.eventHandlers["pageload"] != 'undefined') {
TK.remove(document, "pageload");
delete this.eventHandlers["pageload"];
}
TK.listen(document.body, "pageload", function (e, data) {
TK.TagManager.invokeProviders(e, data);
}, true);
this.eventHandlers["pageload"] = "pageload";
}
if (typeof this.eventHandlers[key] != 'undefined') {
TK.remove(document, key);
delete this.eventHandlers[key];
}
TK.listen(document.body, key, function (e, data) {
TK.TagManager.invokeProviders(e, data);
}, true);
this.eventHandlers[key] = key;
} else {
TK.log(LogLevel.ERROR,"ERR:EVENTTYPE_NOT_SPECIFIED");
}
}
}
},
stateChange : function(provider, data) {
var inst = this.providers[provider];
if (inst) {
if (inst.hasOwnProperty("stateChange")) {
inst["stateChange"](data);
}
} else {
TK.listen(document.body, "stateChange", function (e, data) {
var inst = TK.TagManager.providers[data["provider"]];
if (inst) {
inst["stateChange"](data);
} else TK.log(LogLevel.ERROR,"ERR:PROVIDER_UNAVAILABLE_STATE_CHANGE " + data["provider"]);
}, true);
data["provider"] = provider;
TK.broadcast(document.body, 'stateChange', data);		
}
//this.bootstrap (provider, data);
// fire the provider's state change with the data payload
/*
TK.listen(document.body, "stateChange", function (provider, data) {
//TK.TagManager.invokeProviders(e, data);
TK.TagManager.bootstrap (provider, data);
}, true);
TK.broadcast(document.body, 'stateChange', provider,data);			
//			this.bootstrap (provider, data);
*/
}, 		
get : function(tag) {
return this.tags[provider][tag];
},
registerProvider : function (provider, c, data) {
var p = objectifier(provider, c);
if (! this.providers[provider]) {
this.providers[provider] = new p(data);
} else throw "Provider " + provider + " already initialized";
if (typeof data == "object") {
TK.TagManager.bootstrap(provider, data);
}
},
invokeProviders : function (event, data) {
//TK.resume();
var eventName = event.type.substr(MQ.length);
try {
for (var p in this.providers) {
var inst = this.providers[p];
if (inst[eventName] != undefined) {
var def = this.providers[p][eventName];
if (inst.hasMethod(def["_event"])) {
inst[def["_event"]](event, def, data);
} else {
TK.log(LogLevel.ERROR,"ERR:METHOD_UNSUPPORTED_BY_PROVIDER [" + def["_event"] + "]");
}
} else { 
// provider not interested 
TK.log(LogLevel.TRACE, p + " is not interested in event [" + eventName + "]");
}
}
}
catch (e) {
TK.log(LogLevel.ERROR, e);
}
}
});
window.TK = new MessageQueue();
window.TK.LogLevel = LogLevel;	
window.TK.TagManager = new TagManager();
window.TK.CacheManager = new CacheManager();
window.TK.RestManager = new RestManager();
window.TK.ProviderBase = ProviderBase;
}())
);