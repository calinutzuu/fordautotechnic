
if (typeof console === "undefined"){	 console={};	 console.log = function(){	 return;	 };	}
/*
---
script: Core.js
description: The core of MooTools, contains all the base functions and the Native and Hash implementations. Required by all the other scripts.
license: MIT-style license.
copyright: Copyright (c) 2006-2008 [Valerio Proietti](http://mad4milk.net/).
authors: The MooTools production team (http://mootools.net/developers/)
inspiration:
- Class implementation inspired by [Base.js](http://dean.edwards.name/weblog/2006/03/base/) Copyright (c) 2006 Dean Edwards, [GNU Lesser General Public License](http://opensource.org/licenses/lgpl-license.php)
- Some functionality inspired by [Prototype.js](http://prototypejs.org) Copyright (c) 2005-2007 Sam Stephenson, [MIT License](http://opensource.org/licenses/mit-license.php)
provides: [Mootools, Native, Hash.base, Array.each, $util]
...
*/
var MooTools = {
'version': '1.2.4',
'build': '0d9113241a90b9cd5643b926795852a2026710d4'
};
var Native = function(options){
options = options || {};
var name = options.name;
var legacy = options.legacy;
var protect = options.protect;
var methods = options.implement;
var generics = options.generics;
var initialize = options.initialize;
var afterImplement = options.afterImplement || function(){};
var object = initialize || legacy;
generics = generics !== false;
object.constructor = Native;
object.$family = {name: 'native'};
if (legacy && initialize) object.prototype = legacy.prototype;
object.prototype.constructor = object;
if (name){
var family = name.toLowerCase();
object.prototype.$family = {name: family};
Native.typize(object, family);
}
var add = function(obj, name, method, force){
if (!protect || force || !obj.prototype[name]) obj.prototype[name] = method;
if (generics) Native.genericize(obj, name, protect);
afterImplement.call(obj, name, method);
return obj;
};
object.alias = function(a1, a2, a3){
if (typeof a1 == 'string'){
var pa1 = this.prototype[a1];
if ((a1 = pa1)) return add(this, a2, a1, a3);
}
for (var a in a1) this.alias(a, a1[a], a2);
return this;
};
object.implement = function(a1, a2, a3){
if (typeof a1 == 'string') return add(this, a1, a2, a3);
for (var p in a1) add(this, p, a1[p], a2);
return this;
};
if (methods) object.implement(methods);
return object;
};
Native.genericize = function(object, property, check){
if ((!check || !object[property]) && typeof object.prototype[property] == 'function') object[property] = function(){
var args = Array.prototype.slice.call(arguments);
return object.prototype[property].apply(args.shift(), args);
};
};
Native.implement = function(objects, properties){
for (var i = 0, l = objects.length; i < l; i++) objects[i].implement(properties);
};
Native.typize = function(object, family){
if (!object.type) object.type = function(item){
return ($type(item) === family);
};
};
(function(){
var natives = {'Array': Array, 'Date': Date, 'Function': Function, 'Number': Number, 'RegExp': RegExp, 'String': String};
for (var n in natives) new Native({name: n, initialize: natives[n], protect: true});
var types = {'boolean': Boolean, 'native': Native, 'object': Object};
for (var t in types) Native.typize(types[t], t);
var generics = {
'Array': ["concat", "indexOf", "join", "lastIndexOf", "pop", "push", "reverse", "shift", "slice", "sort", "splice", "toString", "unshift", "valueOf"],
'String': ["charAt", "charCodeAt", "concat", "indexOf", "lastIndexOf", "match", "replace", "search", "slice", "split", "substr", "substring", "toLowerCase", "toUpperCase", "valueOf"]
};
for (var g in generics){
for (var i = generics[g].length; i--;) Native.genericize(natives[g], generics[g][i], true);
}
})();
var Hash = new Native({
name: 'Hash',
initialize: function(object){
if ($type(object) == 'hash') object = $unlink(object.getClean());
for (var key in object) this[key] = object[key];
return this;
}
});
Hash.implement({
forEach: function(fn, bind){
for (var key in this){
if (this.hasOwnProperty(key)) fn.call(bind, this[key], key, this);
}
},
getClean: function(){
var clean = {};
for (var key in this){
if (this.hasOwnProperty(key)) clean[key] = this[key];
}
return clean;
},
getLength: function(){
var length = 0;
for (var key in this){
if (this.hasOwnProperty(key)) length++;
}
return length;
}
});
Hash.alias('forEach', 'each');
Array.implement({
forEach: function(fn, bind){
for (var i = 0, l = this.length; i < l; i++) fn.call(bind, this[i], i, this);
}
});
Array.alias('forEach', 'each');
function $A(iterable){
if (iterable.item){
var l = iterable.length, array = new Array(l);
while (l--) array[l] = iterable[l];
return array;
}
return Array.prototype.slice.call(iterable);
};
function $arguments(i){
return function(){
return arguments[i];
};
};
function $chk(obj){
return !!(obj || obj === 0);
};
function $clear(timer){
clearTimeout(timer);
clearInterval(timer);
return null;
};
function $defined(obj){
return (obj != undefined);
};
function $each(iterable, fn, bind){
var type = $type(iterable);
((type == 'arguments' || type == 'collection' || type == 'array') ? Array : Hash).each(iterable, fn, bind);
};
function $empty(){};
function $extend(original, extended){
for (var key in (extended || {})) original[key] = extended[key];
return original;
};
function $H(object){
return new Hash(object);
};
function $lambda(value){
return ($type(value) == 'function') ? value : function(){
return value;
};
};
function $merge(){
var args = Array.slice(arguments);
args.unshift({});
return $mixin.apply(null, args);
};
function $mixin(mix){
for (var i = 1, l = arguments.length; i < l; i++){
var object = arguments[i];
if ($type(object) != 'object') continue;
for (var key in object){
var op = object[key], mp = mix[key];
mix[key] = (mp && $type(op) == 'object' && $type(mp) == 'object') ? $mixin(mp, op) : $unlink(op);
}
}
return mix;
};
function $pick(){
for (var i = 0, l = arguments.length; i < l; i++){
if (arguments[i] != undefined) return arguments[i];
}
return null;
};
function $random(min, max){
return Math.floor(Math.random() * (max - min + 1) + min);
};
function $splat(obj){
var type = $type(obj);
return (type) ? ((type != 'array' && type != 'arguments') ? [obj] : obj) : [];
};
var $time = Date.now || function(){
return +new Date;
};
function $try(){
for (var i = 0, l = arguments.length; i < l; i++){
try {
return arguments[i]();
} catch(e){}
}
return null;
};
function $type(obj){
if (obj == undefined) return false;
if (obj.$family) return (obj.$family.name == 'number' && !isFinite(obj)) ? false : obj.$family.name;
if (obj.nodeName){
switch (obj.nodeType){
case 1: return 'element';
case 3: return (/\S/).test(obj.nodeValue) ? 'textnode' : 'whitespace';
}
} else if (typeof obj.length == 'number'){
if (obj.callee) return 'arguments';
else if (obj.item) return 'collection';
}
return typeof obj;
};
function $unlink(object){
var unlinked;
switch ($type(object)){
case 'object':
unlinked = {};
for (var p in object) unlinked[p] = $unlink(object[p]);
break;
case 'hash':
unlinked = new Hash(object);
break;
case 'array':
unlinked = [];
for (var i = 0, l = object.length; i < l; i++) unlinked[i] = $unlink(object[i]);
break;
default: return object;
}
return unlinked;
};
/*
---
script: Browser.js
description: The Browser Core. Contains Browser initialization, Window and Document, and the Browser Hash.
license: MIT-style license.
requires: 
- /Native
- /$util
provides: [Browser, Window, Document, $exec]
...
*/
var Browser = $merge({
Engine: {name: 'unknown', version: 0},
Platform: {name: (window.orientation != undefined) ? 'ipod' : (navigator.platform.match(/mac|win|linux/i) || ['other'])[0].toLowerCase()},
Features: {xpath: !!(document.evaluate), air: !!(window.runtime), query: !!(document.querySelector)},
Plugins: {},
Engines: {
presto: function(){
return (!window.opera) ? false : ((arguments.callee.caller) ? 960 : ((document.getElementsByClassName) ? 950 : 925));
},
trident: function(){
return (!window.ActiveXObject) ? false : ((window.XMLHttpRequest) ? ((document.querySelectorAll) ? 6 : 5) : 4);
},
webkit: function(){
return (navigator.taintEnabled) ? false : ((Browser.Features.xpath) ? ((Browser.Features.query) ? 525 : 420) : 419);
},
gecko: function(){
return (!document.getBoxObjectFor && window.mozInnerScreenX == null) ? false : ((document.getElementsByClassName) ? 19 : 18);
}
}
}, Browser || {});
Browser.Platform[Browser.Platform.name] = true;
Browser.detect = function(){
for (var engine in this.Engines){
var version = this.Engines[engine]();
if (version){
this.Engine = {name: engine, version: version};
this.Engine[engine] = this.Engine[engine + version] = true;
break;
}
}
return {name: engine, version: version};
};
Browser.detect();
Browser.Request = function(){
return $try(function(){
return new XMLHttpRequest();
}, function(){
return new ActiveXObject('MSXML2.XMLHTTP');
}, function(){
return new ActiveXObject('Microsoft.XMLHTTP');
});
};
Browser.Features.xhr = !!(Browser.Request());
Browser.Plugins.Flash = (function(){
var version = ($try(function(){
return navigator.plugins['Shockwave Flash'].description;
}, function(){
return new ActiveXObject('ShockwaveFlash.ShockwaveFlash').GetVariable('$version');
}) || '0 r0').match(/\d+/g);
return {version: parseInt(version[0] || 0 + '.' + version[1], 10) || 0, build: parseInt(version[2], 10) || 0};
})();
function $exec(text){
if (!text) return text;
if (window.execScript){
window.execScript(text);
} else {
var script = document.createElement('script');
script.setAttribute('type', 'text/javascript');
script[(Browser.Engine.webkit && Browser.Engine.version < 420) ? 'innerText' : 'text'] = text;
document.head.appendChild(script);
document.head.removeChild(script);
}
return text;
};
Native.UID = 1;
var $uid = (Browser.Engine.trident) ? function(item){
return (item.uid || (item.uid = [Native.UID++]))[0];
} : function(item){
return item.uid || (item.uid = Native.UID++);
};
var Window = new Native({
name: 'Window',
legacy: (Browser.Engine.trident) ? null: window.Window,
initialize: function(win){
$uid(win);
if (!win.Element){
win.Element = $empty;
if (Browser.Engine.webkit) win.document.createElement("iframe"); //fixes safari 2
win.Element.prototype = (Browser.Engine.webkit) ? window["[[DOMElement.prototype]]"] : {};
}
win.document.window = win;
return $extend(win, Window.Prototype);
},
afterImplement: function(property, value){
window[property] = Window.Prototype[property] = value;
}
});
Window.Prototype = {$family: {name: 'window'}};
new Window(window);
var Document = new Native({
name: 'Document',
legacy: (Browser.Engine.trident) ? null: window.Document,
initialize: function(doc){
$uid(doc);
doc.head = doc.getElementsByTagName('head')[0];
doc.html = doc.getElementsByTagName('html')[0];
if (Browser.Engine.trident && Browser.Engine.version <= 4) $try(function(){
doc.execCommand("BackgroundImageCache", false, true);
});
if (Browser.Engine.trident) doc.window.attachEvent('onunload', function(){
doc.window.detachEvent('onunload', arguments.callee);
doc.head = doc.html = doc.window = null;
});
return $extend(doc, Document.Prototype);
},
afterImplement: function(property, value){
document[property] = Document.Prototype[property] = value;
}
});
Document.Prototype = {$family: {name: 'document'}};
new Document(document);
/*
---
script: Array.js
description: Contains Array Prototypes like each, contains, and erase.
license: MIT-style license.
requires:
- /$util
- /Array.each
provides: [Array]
...
*/
Array.implement({
every: function(fn, bind){
for (var i = 0, l = this.length; i < l; i++){
if (!fn.call(bind, this[i], i, this)) return false;
}
return true;
},
filter: function(fn, bind){
var results = [];
for (var i = 0, l = this.length; i < l; i++){
if (fn.call(bind, this[i], i, this)) results.push(this[i]);
}
return results;
},
clean: function(){
return this.filter($defined);
},
indexOf: function(item, from){
var len = this.length;
for (var i = (from < 0) ? Math.max(0, len + from) : from || 0; i < len; i++){
if (this[i] === item) return i;
}
return -1;
},
map: function(fn, bind){
var results = [];
for (var i = 0, l = this.length; i < l; i++) results[i] = fn.call(bind, this[i], i, this);
return results;
},
some: function(fn, bind){
for (var i = 0, l = this.length; i < l; i++){
if (fn.call(bind, this[i], i, this)) return true;
}
return false;
},
associate: function(keys){
var obj = {}, length = Math.min(this.length, keys.length);
for (var i = 0; i < length; i++) obj[keys[i]] = this[i];
return obj;
},
link: function(object){
var result = {};
for (var i = 0, l = this.length; i < l; i++){
for (var key in object){
if (object[key](this[i])){
result[key] = this[i];
delete object[key];
break;
}
}
}
return result;
},
contains: function(item, from){
return this.indexOf(item, from) != -1;
},
extend: function(array){
for (var i = 0, j = array.length; i < j; i++) this.push(array[i]);
return this;
},
getLast: function(){
return (this.length) ? this[this.length - 1] : null;
},
getRandom: function(){
return (this.length) ? this[$random(0, this.length - 1)] : null;
},
include: function(item){
if (!this.contains(item)) this.push(item);
return this;
},
combine: function(array){
for (var i = 0, l = array.length; i < l; i++) this.include(array[i]);
return this;
},
erase: function(item){
for (var i = this.length; i--; i){
if (this[i] === item) this.splice(i, 1);
}
return this;
},
empty: function(){
this.length = 0;
return this;
},
flatten: function(){
var array = [];
for (var i = 0, l = this.length; i < l; i++){
var type = $type(this[i]);
if (!type) continue;
array = array.concat((type == 'array' || type == 'collection' || type == 'arguments') ? Array.flatten(this[i]) : this[i]);
}
return array;
},
hexToRgb: function(array){
if (this.length != 3) return null;
var rgb = this.map(function(value){
if (value.length == 1) value += value;
return value.toInt(16);
});
return (array) ? rgb : 'rgb(' + rgb + ')';
},
rgbToHex: function(array){
if (this.length < 3) return null;
if (this.length == 4 && this[3] == 0 && !array) return 'transparent';
var hex = [];
for (var i = 0; i < 3; i++){
var bit = (this[i] - 0).toString(16);
hex.push((bit.length == 1) ? '0' + bit : bit);
}
return (array) ? hex : '#' + hex.join('');
}
});
/*
---
script: Function.js
description: Contains Function Prototypes like create, bind, pass, and delay.
license: MIT-style license.
requires:
- /Native
- /$util
provides: [Function]
...
*/
Function.implement({
extend: function(properties){
for (var property in properties) this[property] = properties[property];
return this;
},
create: function(options){
var self = this;
options = options || {};
return function(event){
var args = options.arguments;
args = (args != undefined) ? $splat(args) : Array.slice(arguments, (options.event) ? 1 : 0);
if (options.event) args = [event || window.event].extend(args);
var returns = function(){
return self.apply(options.bind || null, args);
};
if (options.delay) return setTimeout(returns, options.delay);
if (options.periodical) return setInterval(returns, options.periodical);
if (options.attempt) return $try(returns);
return returns();
};
},
run: function(args, bind){
return this.apply(bind, $splat(args));
},
pass: function(args, bind){
return this.create({bind: bind, arguments: args});
},
bind: function(bind, args){
return this.create({bind: bind, arguments: args});
},
bindWithEvent: function(bind, args){
return this.create({bind: bind, arguments: args, event: true});
},
attempt: function(args, bind){
return this.create({bind: bind, arguments: args, attempt: true})();
},
delay: function(delay, bind, args){
return this.create({bind: bind, arguments: args, delay: delay})();
},
periodical: function(periodical, bind, args){
return this.create({bind: bind, arguments: args, periodical: periodical})();
}
});
/*
---
script: Number.js
description: Contains Number Prototypes like limit, round, times, and ceil.
license: MIT-style license.
requires:
- /Native
- /$util
provides: [Number]
...
*/
Number.implement({
limit: function(min, max){
return Math.min(max, Math.max(min, this));
},
round: function(precision){
precision = Math.pow(10, precision || 0);
return Math.round(this * precision) / precision;
},
times: function(fn, bind){
for (var i = 0; i < this; i++) fn.call(bind, i, this);
},
toFloat: function(){
return parseFloat(this);
},
toInt: function(base){
return parseInt(this, base || 10);
}
});
Number.alias('times', 'each');
(function(math){
var methods = {};
math.each(function(name){
if (!Number[name]) methods[name] = function(){
return Math[name].apply(null, [this].concat($A(arguments)));
};
});
Number.implement(methods);
})(['abs', 'acos', 'asin', 'atan', 'atan2', 'ceil', 'cos', 'exp', 'floor', 'log', 'max', 'min', 'pow', 'sin', 'sqrt', 'tan']);
/*
---
script: String.js
description: Contains String Prototypes like camelCase, capitalize, test, and toInt.
license: MIT-style license.
requires:
- /Native
provides: [String]
...
*/
String.implement({
test: function(regex, params){
return ((typeof regex == 'string') ? new RegExp(regex, params) : regex).test(this);
},
contains: function(string, separator){
return (separator) ? (separator + this + separator).indexOf(separator + string + separator) > -1 : this.indexOf(string) > -1;
},
trim: function(){
return this.replace(/^\s+|\s+$/g, '');
},
clean: function(){
return this.replace(/\s+/g, ' ').trim();
},
camelCase: function(){
return this.replace(/-\D/g, function(match){
return match.charAt(1).toUpperCase();
});
},
hyphenate: function(){
return this.replace(/[A-Z]/g, function(match){
return ('-' + match.charAt(0).toLowerCase());
});
},
capitalize: function(){
return this.replace(/\b[a-z]/g, function(match){
return match.toUpperCase();
});
},
escapeRegExp: function(){
return this.replace(/([-.*+?^${}()|[\]\/\\])/g, '\\$1');
},
toInt: function(base){
return parseInt(this, base || 10);
},
toFloat: function(){
return parseFloat(this);
},
hexToRgb: function(array){
var hex = this.match(/^#?(\w{1,2})(\w{1,2})(\w{1,2})$/);
return (hex) ? hex.slice(1).hexToRgb(array) : null;
},
rgbToHex: function(array){
var rgb = this.match(/\d{1,3}/g);
return (rgb) ? rgb.rgbToHex(array) : null;
},
stripScripts: function(option){
var scripts = '';
var text = this.replace(/<script[^>]*>([\s\S]*?)<\/script>/gi, function(){
scripts += arguments[1] + '\n';
return '';
});
if (option === true) $exec(scripts);
else if ($type(option) == 'function') option(scripts, text);
return text;
},
substitute: function(object, regexp){
return this.replace(regexp || (/\\?\{([^{}]+)\}/g), function(match, name){
if (match.charAt(0) == '\\') return match.slice(1);
return (object[name] != undefined) ? object[name] : '';
});
}
});
/*
---
script: Hash.js
description: Contains Hash Prototypes. Provides a means for overcoming the JavaScript practical impossibility of extending native Objects.
license: MIT-style license.
requires:
- /Hash.base
provides: [Hash]
...
*/
Hash.implement({
has: Object.prototype.hasOwnProperty,
keyOf: function(value){
for (var key in this){
if (this.hasOwnProperty(key) && this[key] === value) return key;
}
return null;
},
hasValue: function(value){
return (Hash.keyOf(this, value) !== null);
},
extend: function(properties){
Hash.each(properties || {}, function(value, key){
Hash.set(this, key, value);
}, this);
return this;
},
combine: function(properties){
Hash.each(properties || {}, function(value, key){
Hash.include(this, key, value);
}, this);
return this;
},
erase: function(key){
if (this.hasOwnProperty(key)) delete this[key];
return this;
},
get: function(key){
return (this.hasOwnProperty(key)) ? this[key] : null;
},
set: function(key, value){
if (!this[key] || this.hasOwnProperty(key)) this[key] = value;
return this;
},
empty: function(){
Hash.each(this, function(value, key){
delete this[key];
}, this);
return this;
},
include: function(key, value){
if (this[key] == undefined) this[key] = value;
return this;
},
map: function(fn, bind){
var results = new Hash;
Hash.each(this, function(value, key){
results.set(key, fn.call(bind, value, key, this));
}, this);
return results;
},
filter: function(fn, bind){
var results = new Hash;
Hash.each(this, function(value, key){
if (fn.call(bind, value, key, this)) results.set(key, value);
}, this);
return results;
},
every: function(fn, bind){
for (var key in this){
if (this.hasOwnProperty(key) && !fn.call(bind, this[key], key)) return false;
}
return true;
},
some: function(fn, bind){
for (var key in this){
if (this.hasOwnProperty(key) && fn.call(bind, this[key], key)) return true;
}
return false;
},
getKeys: function(){
var keys = [];
Hash.each(this, function(value, key){
keys.push(key);
});
return keys;
},
getValues: function(){
var values = [];
Hash.each(this, function(value){
values.push(value);
});
return values;
},
toQueryString: function(base){
var queryString = [];
Hash.each(this, function(value, key){
if (base) key = base + '[' + key + ']';
var result;
switch ($type(value)){
case 'object': result = Hash.toQueryString(value, key); break;
case 'array':
var qs = {};
value.each(function(val, i){
qs[i] = val;
});
result = Hash.toQueryString(qs, key);
break;
default: result = key + '=' + encodeURIComponent(value);
}
if (value != undefined) queryString.push(result);
});
return queryString.join('&');
}
});
Hash.alias({keyOf: 'indexOf', hasValue: 'contains'});
/*
---
script: Event.js
description: Contains the Event Class, to make the event object cross-browser.
license: MIT-style license.
requires:
- /Window
- /Document
- /Hash
- /Array
- /Function
- /String
provides: [Event]
...
*/
var Event = new Native({
name: 'Event',
initialize: function(event, win){
win = win || window;
var doc = win.document;
event = event || win.event;
if (event.$extended) return event;
this.$extended = true;
var type = event.type;
var target = event.target || event.srcElement;
while (target && target.nodeType == 3) target = target.parentNode;
if (type.test(/key/)){
var code = event.which || event.keyCode;
var key = Event.Keys.keyOf(code);
if (type == 'keydown'){
var fKey = code - 111;
if (fKey > 0 && fKey < 13) key = 'f' + fKey;
}
key = key || String.fromCharCode(code).toLowerCase();
} else if (type.match(/(click|mouse|menu)/i)){
doc = (!doc.compatMode || doc.compatMode == 'CSS1Compat') ? doc.html : doc.body;
var page = {
x: event.pageX || event.clientX + doc.scrollLeft,
y: event.pageY || event.clientY + doc.scrollTop
};
var client = {
x: (event.pageX) ? event.pageX - win.pageXOffset : event.clientX,
y: (event.pageY) ? event.pageY - win.pageYOffset : event.clientY
};
if (type.match(/DOMMouseScroll|mousewheel/)){
var wheel = (event.wheelDelta) ? event.wheelDelta / 120 : -(event.detail || 0) / 3;
}
var rightClick = (event.which == 3) || (event.button == 2);
var related = null;
if (type.match(/over|out/)){
switch (type){
case 'mouseover': related = event.relatedTarget || event.fromElement; break;
case 'mouseout': related = event.relatedTarget || event.toElement;
}
if (!(function(){
while (related && related.nodeType == 3) related = related.parentNode;
return true;
}).create({attempt: Browser.Engine.gecko})()) related = false;
}
}
return $extend(this, {
event: event,
type: type,
page: page,
client: client,
rightClick: rightClick,
wheel: wheel,
relatedTarget: related,
target: target,
code: code,
key: key,
shift: event.shiftKey,
control: event.ctrlKey,
alt: event.altKey,
meta: event.metaKey
});
}
});
Event.Keys = new Hash({
'enter': 13,
'up': 38,
'down': 40,
'left': 37,
'right': 39,
'esc': 27,
'space': 32,
'backspace': 8,
'tab': 9,
'delete': 46
});
Event.implement({
stop: function(){
return this.stopPropagation().preventDefault();
},
stopPropagation: function(){
if (this.event.stopPropagation) this.event.stopPropagation();
else this.event.cancelBubble = true;
return this;
},
preventDefault: function(){
if (this.event.preventDefault) this.event.preventDefault();
else this.event.returnValue = false;
return this;
}
});
/*
---
script: Class.js
description: Contains the Class Function for easily creating, extending, and implementing reusable Classes.
license: MIT-style license.
requires:
- /$util
- /Native
- /Array
- /String
- /Function
- /Number
- /Hash
provides: [Class]
...
*/
function Class(params){
if (params instanceof Function) params = {initialize: params};
var newClass = function(){
Object.reset(this);
if (newClass._prototyping) return this;
this._current = $empty;
var value = (this.initialize) ? this.initialize.apply(this, arguments) : this;
delete this._current; delete this.caller;
return value;
}.extend(this);
newClass.implement(params);
newClass.constructor = Class;
newClass.prototype.constructor = newClass;
return newClass;
};
Function.prototype.protect = function(){
this._protected = true;
return this;
};
Object.reset = function(object, key){
if (key == null){
for (var p in object) Object.reset(object, p);
return object;
}
delete object[key];
switch ($type(object[key])){
case 'object':
var F = function(){};
F.prototype = object[key];
var i = new F;
object[key] = Object.reset(i);
break;
case 'array': object[key] = $unlink(object[key]); break;
}
return object;
};
new Native({name: 'Class', initialize: Class}).extend({
instantiate: function(F){
F._prototyping = true;
var proto = new F;
delete F._prototyping;
return proto;
},
wrap: function(self, key, method){
if (method._origin) method = method._origin;
return function(){
if (method._protected && this._current == null) throw new Error('The method "' + key + '" cannot be called.');
var caller = this.caller, current = this._current;
this.caller = current; this._current = arguments.callee;
var result = method.apply(this, arguments);
this._current = current; this.caller = caller;
return result;
}.extend({_owner: self, _origin: method, _name: key});
}
});
Class.implement({
implement: function(key, value){
if ($type(key) == 'object'){
for (var p in key) this.implement(p, key[p]);
return this;
}
var mutator = Class.Mutators[key];
if (mutator){
value = mutator.call(this, value);
if (value == null) return this;
}
var proto = this.prototype;
switch ($type(value)){
case 'function':
if (value._hidden) return this;
proto[key] = Class.wrap(this, key, value);
break;
case 'object':
var previous = proto[key];
if ($type(previous) == 'object') $mixin(previous, value);
else proto[key] = $unlink(value);
break;
case 'array':
proto[key] = $unlink(value);
break;
default: proto[key] = value;
}
return this;
}
});
Class.Mutators = {
Extends: function(parent){
this.parent = parent;
this.prototype = Class.instantiate(parent);
this.implement('parent', function(){
var name = this.caller._name, previous = this.caller._owner.parent.prototype[name];
if (!previous) throw new Error('The method "' + name + '" has no parent.');
return previous.apply(this, arguments);
}.protect());
},
Implements: function(items){
$splat(items).each(function(item){
if (item instanceof Function) item = Class.instantiate(item);
this.implement(item);
}, this);
}
};
/*
---
script: Class.Extras.js
description: Contains Utility Classes that can be implemented into your own Classes to ease the execution of many common tasks.
license: MIT-style license.
requires:
- /Class
provides: [Chain, Events, Options]
...
*/
var Chain = new Class({
$chain: [],
chain: function(){
this.$chain.extend(Array.flatten(arguments));
return this;
},
callChain: function(){
return (this.$chain.length) ? this.$chain.shift().apply(this, arguments) : false;
},
clearChain: function(){
this.$chain.empty();
return this;
}
});
var Events = new Class({
$events: {},
addEvent: function(type, fn, internal){
type = Events.removeOn(type);
if (fn != $empty){
this.$events[type] = this.$events[type] || [];
this.$events[type].include(fn);
if (internal) fn.internal = true;
}
return this;
},
addEvents: function(events){
for (var type in events) this.addEvent(type, events[type]);
return this;
},
fireEvent: function(type, args, delay){
type = Events.removeOn(type);
if (!this.$events || !this.$events[type]) return this;
this.$events[type].each(function(fn){
fn.create({'bind': this, 'delay': delay, 'arguments': args})();
}, this);
return this;
},
removeEvent: function(type, fn){
type = Events.removeOn(type);
if (!this.$events[type]) return this;
if (!fn.internal) this.$events[type].erase(fn);
return this;
},
removeEvents: function(events){
var type;
if ($type(events) == 'object'){
for (type in events) this.removeEvent(type, events[type]);
return this;
}
if (events) events = Events.removeOn(events);
for (type in this.$events){
if (events && events != type) continue;
var fns = this.$events[type];
for (var i = fns.length; i--; i) this.removeEvent(type, fns[i]);
}
return this;
}
});
Events.removeOn = function(string){
return string.replace(/^on([A-Z])/, function(full, first){
return first.toLowerCase();
});
};
var Options = new Class({
setOptions: function(){
this.options = $merge.run([this.options].extend(arguments));
if (!this.addEvent) return this;
for (var option in this.options){
if ($type(this.options[option]) != 'function' || !(/^on[A-Z]/).test(option)) continue;
this.addEvent(option, this.options[option]);
delete this.options[option];
}
return this;
}
});
/*
---
script: Element.js
description: One of the most important items in MooTools. Contains the dollar function, the dollars function, and an handful of cross-browser, time-saver methods to let you easily work with HTML Elements.
license: MIT-style license.
requires:
- /Window
- /Document
- /Array
- /String
- /Function
- /Number
- /Hash
provides: [Element, Elements, $, $$, Iframe]
...
*/
var Element = new Native({
name: 'Element',
legacy: window.Element,
initialize: function(tag, props){
var konstructor = Element.Constructors.get(tag);
if (konstructor) return konstructor(props);
if (typeof tag == 'string') return document.newElement(tag, props);
return document.id(tag).set(props);
},
afterImplement: function(key, value){
Element.Prototype[key] = value;
if (Array[key]) return;
Elements.implement(key, function(){
var items = [], elements = true;
for (var i = 0, j = this.length; i < j; i++){
var returns = this[i][key].apply(this[i], arguments);
items.push(returns);
if (elements) elements = ($type(returns) == 'element');
}
return (elements) ? new Elements(items) : items;
});
}
});
Element.Prototype = {$family: {name: 'element'}};
Element.Constructors = new Hash;
var IFrame = new Native({
name: 'IFrame',
generics: false,
initialize: function(){
var params = Array.link(arguments, {properties: Object.type, iframe: $defined});
var props = params.properties || {};
var iframe = document.id(params.iframe);
var onload = props.onload || $empty;
delete props.onload;
props.id = props.name = $pick(props.id, props.name, iframe ? (iframe.id || iframe.name) : 'IFrame_' + $time());
iframe = new Element(iframe || 'iframe', props);
var onFrameLoad = function(){
var host = $try(function(){
return iframe.contentWindow.location.host;
});
if (!host || host == window.location.host){
var win = new Window(iframe.contentWindow);
new Document(iframe.contentWindow.document);
$extend(win.Element.prototype, Element.Prototype);
}
onload.call(iframe.contentWindow, iframe.contentWindow.document);
};
var contentWindow = $try(function(){
return iframe.contentWindow;
});
((contentWindow && contentWindow.document.body) || window.frames[props.id]) ? onFrameLoad() : iframe.addListener('load', onFrameLoad);
return iframe;
}
});
var Elements = new Native({
initialize: function(elements, options){
options = $extend({ddup: true, cash: true}, options);
elements = elements || [];
if (options.ddup || options.cash){
var uniques = {}, returned = [];
for (var i = 0, l = elements.length; i < l; i++){
var el = document.id(elements[i], !options.cash);
if (options.ddup){
if (uniques[el.uid]) continue;
uniques[el.uid] = true;
}
if (el) returned.push(el);
}
elements = returned;
}
return (options.cash) ? $extend(elements, this) : elements;
}
});
Elements.implement({
filter: function(filter, bind){
if (!filter) return this;
return new Elements(Array.filter(this, (typeof filter == 'string') ? function(item){
return item.match(filter);
} : filter, bind));
}
});
Document.implement({
newElement: function(tag, props){
if (Browser.Engine.trident && props){
['name', 'type', 'checked'].each(function(attribute){
if (!props[attribute]) return;
tag += ' ' + attribute + '="' + props[attribute] + '"';
if (attribute != 'checked') delete props[attribute];
});
tag = '<' + tag + '>';
}
return document.id(this.createElement(tag)).set(props);
},
newTextNode: function(text){
return this.createTextNode(text);
},
getDocument: function(){
return this;
},
getWindow: function(){
return this.window;
},
id: (function(){
var types = {
string: function(id, nocash, doc){
id = doc.getElementById(id);
return (id) ? types.element(id, nocash) : null;
},
element: function(el, nocash){
$uid(el);
if (!nocash && !el.$family && !(/^object|embed$/i).test(el.tagName)){
var proto = Element.Prototype;
for (var p in proto) el[p] = proto[p];
};
return el;
},
object: function(obj, nocash, doc){
if (obj.toElement) return types.element(obj.toElement(doc), nocash);
return null;
}
};
types.textnode = types.whitespace = types.window = types.document = $arguments(0);
return function(el, nocash, doc){
if (el && el.$family && el.uid) return el;
var type = $type(el);
return (types[type]) ? types[type](el, nocash, doc || document) : null;
};
})()
});
if (window.$ == null) Window.implement({
$: function(el, nc){
return document.id(el, nc, this.document);
}
});
Window.implement({
$$: function(selector){
if (arguments.length == 1 && typeof selector == 'string') return this.document.getElements(selector);
var elements = [];
var args = Array.flatten(arguments);
for (var i = 0, l = args.length; i < l; i++){
var item = args[i];
switch ($type(item)){
case 'element': elements.push(item); break;
case 'string': elements.extend(this.document.getElements(item, true));
}
}
return new Elements(elements);
},
getDocument: function(){
return this.document;
},
getWindow: function(){
return this;
}
});
Native.implement([Element, Document], {
getElement: function(selector, nocash){
return document.id(this.getElements(selector, true)[0] || null, nocash);
},
getElements: function(tags, nocash){
tags = tags.split(',');
var elements = [];
var ddup = (tags.length > 1);
tags.each(function(tag){
var partial = this.getElementsByTagName(tag.trim());
(ddup) ? elements.extend(partial) : elements = partial;
}, this);
return new Elements(elements, {ddup: ddup, cash: !nocash});
}
});
(function(){
var collected = {}, storage = {};
var props = {input: 'checked', option: 'selected', textarea: (Browser.Engine.webkit && Browser.Engine.version < 420) ? 'innerHTML' : 'value'};
var get = function(uid){
return (storage[uid] || (storage[uid] = {}));
};
var clean = function(item, retain){
if (!item) return;
var uid = item.uid;
if (Browser.Engine.trident){
if (item.clearAttributes){
var clone = retain && item.cloneNode(false);
item.clearAttributes();
if (clone) item.mergeAttributes(clone);
} else if (item.removeEvents){
item.removeEvents();
}
if ((/object/i).test(item.tagName)){
for (var p in item){
if (typeof item[p] == 'function') item[p] = $empty;
}
Element.dispose(item);
}
}	
if (!uid) return;
collected[uid] = storage[uid] = null;
};
var purge = function(){
Hash.each(collected, clean);
if (Browser.Engine.trident) $A(document.getElementsByTagName('object')).each(clean);
if (window.CollectGarbage) CollectGarbage();
collected = storage = null;
};
var walk = function(element, walk, start, match, all, nocash){
var el = element[start || walk];
var elements = [];
while (el){
if (el.nodeType == 1 && (!match || Element.match(el, match))){
if (!all) return document.id(el, nocash);
elements.push(el);
}
el = el[walk];
}
return (all) ? new Elements(elements, {ddup: false, cash: !nocash}) : null;
};
var attributes = {
'html': 'innerHTML',
'class': 'className',
'for': 'htmlFor',
'defaultValue': 'defaultValue',
'text': (Browser.Engine.trident || (Browser.Engine.webkit && Browser.Engine.version < 420)) ? 'innerText' : 'textContent'
};
var bools = ['compact', 'nowrap', 'ismap', 'declare', 'noshade', 'checked', 'disabled', 'readonly', 'multiple', 'selected', 'noresize', 'defer'];
var camels = ['value', 'type', 'defaultValue', 'accessKey', 'cellPadding', 'cellSpacing', 'colSpan', 'frameBorder', 'maxLength', 'readOnly', 'rowSpan', 'tabIndex', 'useMap'];
bools = bools.associate(bools);
Hash.extend(attributes, bools);
Hash.extend(attributes, camels.associate(camels.map(String.toLowerCase)));
var inserters = {
before: function(context, element){
if (element.parentNode) element.parentNode.insertBefore(context, element);
},
after: function(context, element){
if (!element.parentNode) return;
var next = element.nextSibling;
(next) ? element.parentNode.insertBefore(context, next) : element.parentNode.appendChild(context);
},
bottom: function(context, element){
element.appendChild(context);
},
top: function(context, element){
var first = element.firstChild;
(first) ? element.insertBefore(context, first) : element.appendChild(context);
}
};
inserters.inside = inserters.bottom;
Hash.each(inserters, function(inserter, where){
where = where.capitalize();
Element.implement('inject' + where, function(el){
inserter(this, document.id(el, true));
return this;
});
Element.implement('grab' + where, function(el){
inserter(document.id(el, true), this);
return this;
});
});
Element.implement({
set: function(prop, value){
switch ($type(prop)){
case 'object':
for (var p in prop) this.set(p, prop[p]);
break;
case 'string':
var property = Element.Properties.get(prop);
(property && property.set) ? property.set.apply(this, Array.slice(arguments, 1)) : this.setProperty(prop, value);
}
return this;
},
get: function(prop){
var property = Element.Properties.get(prop);
return (property && property.get) ? property.get.apply(this, Array.slice(arguments, 1)) : this.getProperty(prop);
},
erase: function(prop){
var property = Element.Properties.get(prop);
(property && property.erase) ? property.erase.apply(this) : this.removeProperty(prop);
return this;
},
setProperty: function(attribute, value){
var key = attributes[attribute];
if (value == undefined) return this.removeProperty(attribute);
if (key && bools[attribute]) value = !!value;
(key) ? this[key] = value : this.setAttribute(attribute, '' + value);
return this;
},
setProperties: function(attributes){
for (var attribute in attributes) this.setProperty(attribute, attributes[attribute]);
return this;
},
getProperty: function(attribute){
var key = attributes[attribute];
var value = (key) ? this[key] : this.getAttribute(attribute, 2);
return (bools[attribute]) ? !!value : (key) ? value : value || null;
},
getProperties: function(){
var args = $A(arguments);
return args.map(this.getProperty, this).associate(args);
},
removeProperty: function(attribute){
var key = attributes[attribute];
(key) ? this[key] = (key && bools[attribute]) ? false : '' : this.removeAttribute(attribute);
return this;
},
removeProperties: function(){
Array.each(arguments, this.removeProperty, this);
return this;
},
hasClass: function(className){
return this.className.contains(className, ' ');
},
addClass: function(className){
if (!this.hasClass(className)) this.className = (this.className + ' ' + className).clean();
return this;
},
removeClass: function(className){
this.className = this.className.replace(new RegExp('(^|\\s)' + className + '(?:\\s|$)'), '$1');
return this;
},
toggleClass: function(className){
return this.hasClass(className) ? this.removeClass(className) : this.addClass(className);
},
adopt: function(){
Array.flatten(arguments).each(function(element){
element = document.id(element, true);
if (element) this.appendChild(element);
}, this);
return this;
},
appendText: function(text, where){
return this.grab(this.getDocument().newTextNode(text), where);
},
grab: function(el, where){
inserters[where || 'bottom'](document.id(el, true), this);
return this;
},
inject: function(el, where){
inserters[where || 'bottom'](this, document.id(el, true));
return this;
},
replaces: function(el){
el = document.id(el, true);
el.parentNode.replaceChild(this, el);
return this;
},
wraps: function(el, where){
el = document.id(el, true);
return this.replaces(el).grab(el, where);
},
getPrevious: function(match, nocash){
return walk(this, 'previousSibling', null, match, false, nocash);
},
getAllPrevious: function(match, nocash){
return walk(this, 'previousSibling', null, match, true, nocash);
},
getNext: function(match, nocash){
return walk(this, 'nextSibling', null, match, false, nocash);
},
getAllNext: function(match, nocash){
return walk(this, 'nextSibling', null, match, true, nocash);
},
getFirst: function(match, nocash){
return walk(this, 'nextSibling', 'firstChild', match, false, nocash);
},
getLast: function(match, nocash){
return walk(this, 'previousSibling', 'lastChild', match, false, nocash);
},
getParent: function(match, nocash){
return walk(this, 'parentNode', null, match, false, nocash);
},
getParents: function(match, nocash){
return walk(this, 'parentNode', null, match, true, nocash);
},
getSiblings: function(match, nocash){
return this.getParent().getChildren(match, nocash).erase(this);
},
getChildren: function(match, nocash){
return walk(this, 'nextSibling', 'firstChild', match, true, nocash);
},
getWindow: function(){
return this.ownerDocument.window;
},
getDocument: function(){
return this.ownerDocument;
},
getElementById: function(id, nocash){
var el = this.ownerDocument.getElementById(id);
if (!el) return null;
for (var parent = el.parentNode; parent != this; parent = parent.parentNode){
if (!parent) return null;
}
return document.id(el, nocash);
},
getSelected: function(){
return new Elements($A(this.options).filter(function(option){
return option.selected;
}));
},
getComputedStyle: function(property){
if (this.currentStyle) return this.currentStyle[property.camelCase()];
var computed = this.getDocument().defaultView.getComputedStyle(this, null);
return (computed) ? computed.getPropertyValue([property.hyphenate()]) : null;
},
toQueryString: function(){
var queryString = [];
this.getElements('input, select, textarea', true).each(function(el){
if (!el.name || el.disabled || el.type == 'submit' || el.type == 'reset' || el.type == 'file') return;
var value = (el.tagName.toLowerCase() == 'select') ? Element.getSelected(el).map(function(opt){
return opt.value;
}) : ((el.type == 'radio' || el.type == 'checkbox') && !el.checked) ? null : el.value;
$splat(value).each(function(val){
if (typeof val != 'undefined') queryString.push(el.name + '=' + encodeURIComponent(val));
});
});
return queryString.join('&');
},
clone: function(contents, keepid){
contents = contents !== false;
var clone = this.cloneNode(contents);
var clean = function(node, element){
if (!keepid) node.removeAttribute('id');
if (Browser.Engine.trident){
node.clearAttributes();
node.mergeAttributes(element);
node.removeAttribute('uid');
if (node.options){
var no = node.options, eo = element.options;
for (var j = no.length; j--;) no[j].selected = eo[j].selected;
}
}
var prop = props[element.tagName.toLowerCase()];
if (prop && element[prop]) node[prop] = element[prop];
};
if (contents){
var ce = clone.getElementsByTagName('*'), te = this.getElementsByTagName('*');
for (var i = ce.length; i--;) clean(ce[i], te[i]);
}
clean(clone, this);
return document.id(clone);
},
destroy: function(){
Element.empty(this);
Element.dispose(this);
clean(this, true);
return null;
},
empty: function(){
$A(this.childNodes).each(function(node){
Element.destroy(node);
});
return this;
},
dispose: function(){
return (this.parentNode) ? this.parentNode.removeChild(this) : this;
},
hasChild: function(el){
el = document.id(el, true);
if (!el) return false;
if (Browser.Engine.webkit && Browser.Engine.version < 420) return $A(this.getElementsByTagName(el.tagName)).contains(el);
return (this.contains) ? (this != el && this.contains(el)) : !!(this.compareDocumentPosition(el) & 16);
},
match: function(tag){
return (!tag || (tag == this) || (Element.get(this, 'tag') == tag));
}
});
Native.implement([Element, Window, Document], {
addListener: function(type, fn){
if (type == 'unload'){
var old = fn, self = this;
fn = function(){
self.removeListener('unload', fn);
old();
};
} else {
collected[this.uid] = this;
}
if (this.addEventListener) this.addEventListener(type, fn, false);
else this.attachEvent('on' + type, fn);
return this;
},
removeListener: function(type, fn){
if (this.removeEventListener) this.removeEventListener(type, fn, false);
else this.detachEvent('on' + type, fn);
return this;
},
retrieve: function(property, dflt){
var storage = get(this.uid), prop = storage[property];
if (dflt != undefined && prop == undefined) prop = storage[property] = dflt;
return $pick(prop);
},
store: function(property, value){
var storage = get(this.uid);
storage[property] = value;
return this;
},
eliminate: function(property){
var storage = get(this.uid);
delete storage[property];
return this;
}
});
window.addListener('unload', purge);
})();
Element.Properties = new Hash;
Element.Properties.style = {
set: function(style){
this.style.cssText = style;
},
get: function(){
return this.style.cssText;
},
erase: function(){
this.style.cssText = '';
}
};
Element.Properties.tag = {
get: function(){
return this.tagName.toLowerCase();
}
};
Element.Properties.html = (function(){
var wrapper = document.createElement('div');
var translations = {
table: [1, '<table>', '</table>'],
select: [1, '<select>', '</select>'],
tbody: [2, '<table><tbody>', '</tbody></table>'],
tr: [3, '<table><tbody><tr>', '</tr></tbody></table>']
};
translations.thead = translations.tfoot = translations.tbody;
var html = {
set: function(){
var html = Array.flatten(arguments).join('');
var wrap = Browser.Engine.trident && translations[this.get('tag')];
if (wrap){
var first = wrapper;
first.innerHTML = wrap[1] + html + wrap[2];
for (var i = wrap[0]; i--;) first = first.firstChild;
this.empty().adopt(first.childNodes);
} else {
this.innerHTML = html;
}
}
};
html.erase = html.set;
return html;
})();
if (Browser.Engine.webkit && Browser.Engine.version < 420) Element.Properties.text = {
get: function(){
if (this.innerText) return this.innerText;
var temp = this.ownerDocument.newElement('div', {html: this.innerHTML}).inject(this.ownerDocument.body);
var text = temp.innerText;
temp.destroy();
return text;
}
};
/*
---
script: Element.Event.js
description: Contains Element methods for dealing with events. This file also includes mouseenter and mouseleave custom Element Events.
license: MIT-style license.
requires: 
- /Element
- /Event
provides: [Element.Event]
...
*/
Element.Properties.events = {set: function(events){
this.addEvents(events);
}};
Native.implement([Element, Window, Document], {
addEvent: function(type, fn){
var events = this.retrieve('events', {});
events[type] = events[type] || {'keys': [], 'values': []};
if (events[type].keys.contains(fn)) return this;
events[type].keys.push(fn);
var realType = type, custom = Element.Events.get(type), condition = fn, self = this;
if (custom){
if (custom.onAdd) custom.onAdd.call(this, fn);
if (custom.condition){
condition = function(event){
if (custom.condition.call(this, event)) return fn.call(this, event);
return true;
};
}
realType = custom.base || realType;
}
var defn = function(){
return fn.call(self);
};
var nativeEvent = Element.NativeEvents[realType];
if (nativeEvent){
if (nativeEvent == 2){
defn = function(event){
event = new Event(event, self.getWindow());
if (condition.call(self, event) === false) event.stop();
};
}
this.addListener(realType, defn);
}
events[type].values.push(defn);
return this;
},
removeEvent: function(type, fn){
var events = this.retrieve('events');
if (!events || !events[type]) return this;
var pos = events[type].keys.indexOf(fn);
if (pos == -1) return this;
events[type].keys.splice(pos, 1);
var value = events[type].values.splice(pos, 1)[0];
var custom = Element.Events.get(type);
if (custom){
if (custom.onRemove) custom.onRemove.call(this, fn);
type = custom.base || type;
}
return (Element.NativeEvents[type]) ? this.removeListener(type, value) : this;
},
addEvents: function(events){
for (var event in events) this.addEvent(event, events[event]);
return this;
},
removeEvents: function(events){
var type;
if ($type(events) == 'object'){
for (type in events) this.removeEvent(type, events[type]);
return this;
}
var attached = this.retrieve('events');
if (!attached) return this;
if (!events){
for (type in attached) this.removeEvents(type);
this.eliminate('events');
} else if (attached[events]){
while (attached[events].keys[0]) this.removeEvent(events, attached[events].keys[0]);
attached[events] = null;
}
return this;
},
fireEvent: function(type, args, delay){
var events = this.retrieve('events');
if (!events || !events[type]) return this;
events[type].keys.each(function(fn){
fn.create({'bind': this, 'delay': delay, 'arguments': args})();
}, this);
return this;
},
cloneEvents: function(from, type){
from = document.id(from);
var fevents = from.retrieve('events');
if (!fevents) return this;
if (!type){
for (var evType in fevents) this.cloneEvents(from, evType);
} else if (fevents[type]){
fevents[type].keys.each(function(fn){
this.addEvent(type, fn);
}, this);
}
return this;
}
});
Element.NativeEvents = {
click: 2, dblclick: 2, mouseup: 2, mousedown: 2, contextmenu: 2, //mouse buttons
mousewheel: 2, DOMMouseScroll: 2, //mouse wheel
mouseover: 2, mouseout: 2, mousemove: 2, selectstart: 2, selectend: 2, //mouse movement
keydown: 2, keypress: 2, keyup: 2, //keyboard
focus: 2, blur: 2, change: 2, reset: 2, select: 2, submit: 2, //form elements
load: 1, unload: 1, beforeunload: 2, resize: 1, move: 1, DOMContentLoaded: 1, readystatechange: 1, //window
error: 1, abort: 1, scroll: 1 //misc
};
(function(){
var $check = function(event){
var related = event.relatedTarget;
if (related == undefined) return true;
if (related === false) return false;
return ($type(this) != 'document' && related != this && related.prefix != 'xul' && !this.hasChild(related));
};
Element.Events = new Hash({
mouseenter: {
base: 'mouseover',
condition: $check
},
mouseleave: {
base: 'mouseout',
condition: $check
},
mousewheel: {
base: (Browser.Engine.gecko) ? 'DOMMouseScroll' : 'mousewheel'
}
});
})();
/*
---
script: Element.Style.js
description: Contains methods for interacting with the styles of Elements in a fashionable way.
license: MIT-style license.
requires:
- /Element
provides: [Element.Style]
...
*/
Element.Properties.styles = {set: function(styles){
this.setStyles(styles);
}};
Element.Properties.opacity = {
set: function(opacity, novisibility){
if (!novisibility){
if (opacity == 0){
if (this.style.visibility != 'hidden') this.style.visibility = 'hidden';
} else {
if (this.style.visibility != 'visible') this.style.visibility = 'visible';
}
}
if (!this.currentStyle || !this.currentStyle.hasLayout) this.style.zoom = 1;
if (Browser.Engine.trident) this.style.filter = (opacity == 1) ? '' : 'alpha(opacity=' + opacity * 100 + ')';
this.style.opacity = opacity;
this.store('opacity', opacity);
},
get: function(){
return this.retrieve('opacity', 1);
}
};
Element.implement({
setOpacity: function(value){
return this.set('opacity', value, true);
},
getOpacity: function(){
return this.get('opacity');
},
setStyle: function(property, value){
switch (property){
case 'opacity': return this.set('opacity', parseFloat(value));
case 'float': property = (Browser.Engine.trident) ? 'styleFloat' : 'cssFloat';
}
property = property.camelCase();
if ($type(value) != 'string'){
var map = (Element.Styles.get(property) || '@').split(' ');
value = $splat(value).map(function(val, i){
if (!map[i]) return '';
return ($type(val) == 'number') ? map[i].replace('@', Math.round(val)) : val;
}).join(' ');
} else if (value == String(Number(value))){
value = Math.round(value);
}
this.style[property] = value;
return this;
},
getStyle: function(property){
switch (property){
case 'opacity': return this.get('opacity');
case 'float': property = (Browser.Engine.trident) ? 'styleFloat' : 'cssFloat';
}
property = property.camelCase();
var result = this.style[property];
if (!$chk(result)){
result = [];
for (var style in Element.ShortStyles){
if (property != style) continue;
for (var s in Element.ShortStyles[style]) result.push(this.getStyle(s));
return result.join(' ');
}
result = this.getComputedStyle(property);
}
if (result){
result = String(result);
var color = result.match(/rgba?\([\d\s,]+\)/);
if (color) result = result.replace(color[0], color[0].rgbToHex());
}
if (Browser.Engine.presto || (Browser.Engine.trident && !$chk(parseInt(result, 10)))){
if (property.test(/^(height|width)$/)){
var values = (property == 'width') ? ['left', 'right'] : ['top', 'bottom'], size = 0;
values.each(function(value){
size += this.getStyle('border-' + value + '-width').toInt() + this.getStyle('padding-' + value).toInt();
}, this);
return this['offset' + property.capitalize()] - size + 'px';
}
if ((Browser.Engine.presto) && String(result).test('px')) return result;
if (property.test(/(border(.+)Width|margin|padding)/)) return '0px';
}
return result;
},
setStyles: function(styles){
for (var style in styles) this.setStyle(style, styles[style]);
return this;
},
getStyles: function(){
var result = {};
Array.flatten(arguments).each(function(key){
result[key] = this.getStyle(key);
}, this);
return result;
}
});
Element.Styles = new Hash({
left: '@px', top: '@px', bottom: '@px', right: '@px',
width: '@px', height: '@px', maxWidth: '@px', maxHeight: '@px', minWidth: '@px', minHeight: '@px',
backgroundColor: 'rgb(@, @, @)', backgroundPosition: '@px @px', color: 'rgb(@, @, @)',
fontSize: '@px', letterSpacing: '@px', lineHeight: '@px', clip: 'rect(@px @px @px @px)',
margin: '@px @px @px @px', padding: '@px @px @px @px', border: '@px @ rgb(@, @, @) @px @ rgb(@, @, @) @px @ rgb(@, @, @)',
borderWidth: '@px @px @px @px', borderStyle: '@ @ @ @', borderColor: 'rgb(@, @, @) rgb(@, @, @) rgb(@, @, @) rgb(@, @, @)',
zIndex: '@', 'zoom': '@', fontWeight: '@', textIndent: '@px', opacity: '@'
});
Element.ShortStyles = {margin: {}, padding: {}, border: {}, borderWidth: {}, borderStyle: {}, borderColor: {}};
['Top', 'Right', 'Bottom', 'Left'].each(function(direction){
var Short = Element.ShortStyles;
var All = Element.Styles;
['margin', 'padding'].each(function(style){
var sd = style + direction;
Short[style][sd] = All[sd] = '@px';
});
var bd = 'border' + direction;
Short.border[bd] = All[bd] = '@px @ rgb(@, @, @)';
var bdw = bd + 'Width', bds = bd + 'Style', bdc = bd + 'Color';
Short[bd] = {};
Short.borderWidth[bdw] = Short[bd][bdw] = All[bdw] = '@px';
Short.borderStyle[bds] = Short[bd][bds] = All[bds] = '@';
Short.borderColor[bdc] = Short[bd][bdc] = All[bdc] = 'rgb(@, @, @)';
});
/*
---
script: Element.Dimensions.js
description: Contains methods to work with size, scroll, or positioning of Elements and the window object.
license: MIT-style license.
credits:
- Element positioning based on the [qooxdoo](http://qooxdoo.org/) code and smart browser fixes, [LGPL License](http://www.gnu.org/licenses/lgpl.html).
- Viewport dimensions based on [YUI](http://developer.yahoo.com/yui/) code, [BSD License](http://developer.yahoo.com/yui/license.html).
requires:
- /Element
provides: [Element.Dimensions]
...
*/
(function(){
Element.implement({
scrollTo: function(x, y){
if (isBody(this)){
this.getWindow().scrollTo(x, y);
} else {
this.scrollLeft = x;
this.scrollTop = y;
}
return this;
},
getSize: function(){
if (isBody(this)) return this.getWindow().getSize();
return {x: this.offsetWidth, y: this.offsetHeight};
},
getScrollSize: function(){
if (isBody(this)) return this.getWindow().getScrollSize();
return {x: this.scrollWidth, y: this.scrollHeight};
},
getScroll: function(){
if (isBody(this)) return this.getWindow().getScroll();
return {x: this.scrollLeft, y: this.scrollTop};
},
getScrolls: function(){
var element = this, position = {x: 0, y: 0};
while (element && !isBody(element)){
position.x += element.scrollLeft;
position.y += element.scrollTop;
element = element.parentNode;
}
return position;
},
getOffsetParent: function(){
var element = this;
if (isBody(element)) return null;
if (!Browser.Engine.trident) return element.offsetParent;
while ((element = element.parentNode) && !isBody(element)){
if (styleString(element, 'position') != 'static') return element;
}
return null;
},
getOffsets: function(){
if (this.getBoundingClientRect){
var bound = this.getBoundingClientRect(),
html = document.id(this.getDocument().documentElement),
htmlScroll = html.getScroll(),
elemScrolls = this.getScrolls(),
elemScroll = this.getScroll(),
isFixed = (styleString(this, 'position') == 'fixed');
return {
x: bound.left.toInt() + elemScrolls.x - elemScroll.x + ((isFixed) ? 0 : htmlScroll.x) - html.clientLeft,
y: bound.top.toInt()  + elemScrolls.y - elemScroll.y + ((isFixed) ? 0 : htmlScroll.y) - html.clientTop
};
}
var element = this, position = {x: 0, y: 0};
if (isBody(this)) return position;
while (element && !isBody(element)){
position.x += element.offsetLeft;
position.y += element.offsetTop;
if (Browser.Engine.gecko){
if (!borderBox(element)){
position.x += leftBorder(element);
position.y += topBorder(element);
}
var parent = element.parentNode;
if (parent && styleString(parent, 'overflow') != 'visible'){
position.x += leftBorder(parent);
position.y += topBorder(parent);
}
} else if (element != this && Browser.Engine.webkit){
position.x += leftBorder(element);
position.y += topBorder(element);
}
element = element.offsetParent;
}
if (Browser.Engine.gecko && !borderBox(this)){
position.x -= leftBorder(this);
position.y -= topBorder(this);
}
return position;
},
getPosition: function(relative){
if (isBody(this)) return {x: 0, y: 0};
var offset = this.getOffsets(),
scroll = this.getScrolls();
var position = {
x: offset.x - scroll.x,
y: offset.y - scroll.y
};
var relativePosition = (relative && (relative = document.id(relative))) ? relative.getPosition() : {x: 0, y: 0};
return {x: position.x - relativePosition.x, y: position.y - relativePosition.y};
},
getCoordinates: function(element){
if (isBody(this)) return this.getWindow().getCoordinates();
var position = this.getPosition(element),
size = this.getSize();
var obj = {
left: position.x,
top: position.y,
width: size.x,
height: size.y
};
obj.right = obj.left + obj.width;
obj.bottom = obj.top + obj.height;
return obj;
},
computePosition: function(obj){
return {
left: obj.x - styleNumber(this, 'margin-left'),
top: obj.y - styleNumber(this, 'margin-top')
};
},
setPosition: function(obj){
return this.setStyles(this.computePosition(obj));
}
});
Native.implement([Document, Window], {
getSize: function(){
if (Browser.Engine.presto || Browser.Engine.webkit){
var win = this.getWindow();
return {x: win.innerWidth, y: win.innerHeight};
}
var doc = getCompatElement(this);
return {x: doc.clientWidth, y: doc.clientHeight};
},
getScroll: function(){
var win = this.getWindow(), doc = getCompatElement(this);
return {x: win.pageXOffset || doc.scrollLeft, y: win.pageYOffset || doc.scrollTop};
},
getScrollSize: function(){
var doc = getCompatElement(this), min = this.getSize();
return {x: Math.max(doc.scrollWidth, min.x), y: Math.max(doc.scrollHeight, min.y)};
},
getPosition: function(){
return {x: 0, y: 0};
},
getCoordinates: function(){
var size = this.getSize();
return {top: 0, left: 0, bottom: size.y, right: size.x, height: size.y, width: size.x};
}
});
// private methods
var styleString = Element.getComputedStyle;
function styleNumber(element, style){
return styleString(element, style).toInt() || 0;
};
function borderBox(element){
return styleString(element, '-moz-box-sizing') == 'border-box';
};
function topBorder(element){
return styleNumber(element, 'border-top-width');
};
function leftBorder(element){
return styleNumber(element, 'border-left-width');
};
function isBody(element){
return (/^(?:body|html)$/i).test(element.tagName);
};
function getCompatElement(element){
var doc = element.getDocument();
return (!doc.compatMode || doc.compatMode == 'CSS1Compat') ? doc.html : doc.body;
};
})();
//aliases
Element.alias('setPosition', 'position'); //compatability
Native.implement([Window, Document, Element], {
getHeight: function(){
return this.getSize().y;
},
getWidth: function(){
return this.getSize().x;
},
getScrollTop: function(){
return this.getScroll().y;
},
getScrollLeft: function(){
return this.getScroll().x;
},
getScrollHeight: function(){
return this.getScrollSize().y;
},
getScrollWidth: function(){
return this.getScrollSize().x;
},
getTop: function(){
return this.getPosition().y;
},
getLeft: function(){
return this.getPosition().x;
}
});
/*
---
script: Selectors.js
description: Adds advanced CSS-style querying capabilities for targeting HTML Elements. Includes pseudo selectors.
license: MIT-style license.
requires:
- /Element
provides: [Selectors]
...
*/
Native.implement([Document, Element], {
getElements: function(expression, nocash){
expression = expression.split(',');
var items, local = {};
for (var i = 0, l = expression.length; i < l; i++){
var selector = expression[i], elements = Selectors.Utils.search(this, selector, local);
if (i != 0 && elements.item) elements = $A(elements);
items = (i == 0) ? elements : (items.item) ? $A(items).concat(elements) : items.concat(elements);
}
return new Elements(items, {ddup: (expression.length > 1), cash: !nocash});
}
});
Element.implement({
match: function(selector){
if (!selector || (selector == this)) return true;
var tagid = Selectors.Utils.parseTagAndID(selector);
var tag = tagid[0], id = tagid[1];
if (!Selectors.Filters.byID(this, id) || !Selectors.Filters.byTag(this, tag)) return false;
var parsed = Selectors.Utils.parseSelector(selector);
return (parsed) ? Selectors.Utils.filter(this, parsed, {}) : true;
}
});
var Selectors = {Cache: {nth: {}, parsed: {}}};
Selectors.RegExps = {
id: (/#([\w-]+)/),
tag: (/^(\w+|\*)/),
quick: (/^(\w+|\*)$/),
splitter: (/\s*([+>~\s])\s*([a-zA-Z#.*:\[])/g),
combined: (/\.([\w-]+)|\[(\w+)(?:([!*^$~|]?=)(["']?)([^\4]*?)\4)?\]|:([\w-]+)(?:\(["']?(.*?)?["']?\)|$)/g)
};
Selectors.Utils = {
chk: function(item, uniques){
if (!uniques) return true;
var uid = $uid(item);
if (!uniques[uid]) return uniques[uid] = true;
return false;
},
parseNthArgument: function(argument){
if (Selectors.Cache.nth[argument]) return Selectors.Cache.nth[argument];
var parsed = argument.match(/^([+-]?\d*)?([a-z]+)?([+-]?\d*)?$/);
if (!parsed) return false;
var inta = parseInt(parsed[1], 10);
var a = (inta || inta === 0) ? inta : 1;
var special = parsed[2] || false;
var b = parseInt(parsed[3], 10) || 0;
if (a != 0){
b--;
while (b < 1) b += a;
while (b >= a) b -= a;
} else {
a = b;
special = 'index';
}
switch (special){
case 'n': parsed = {a: a, b: b, special: 'n'}; break;
case 'odd': parsed = {a: 2, b: 0, special: 'n'}; break;
case 'even': parsed = {a: 2, b: 1, special: 'n'}; break;
case 'first': parsed = {a: 0, special: 'index'}; break;
case 'last': parsed = {special: 'last-child'}; break;
case 'only': parsed = {special: 'only-child'}; break;
default: parsed = {a: (a - 1), special: 'index'};
}
return Selectors.Cache.nth[argument] = parsed;
},
parseSelector: function(selector){
if (Selectors.Cache.parsed[selector]) return Selectors.Cache.parsed[selector];
var m, parsed = {classes: [], pseudos: [], attributes: []};
while ((m = Selectors.RegExps.combined.exec(selector))){
var cn = m[1], an = m[2], ao = m[3], av = m[5], pn = m[6], pa = m[7];
if (cn){
parsed.classes.push(cn);
} else if (pn){
var parser = Selectors.Pseudo.get(pn);
if (parser) parsed.pseudos.push({parser: parser, argument: pa});
else parsed.attributes.push({name: pn, operator: '=', value: pa});
} else if (an){
parsed.attributes.push({name: an, operator: ao, value: av});
}
}
if (!parsed.classes.length) delete parsed.classes;
if (!parsed.attributes.length) delete parsed.attributes;
if (!parsed.pseudos.length) delete parsed.pseudos;
if (!parsed.classes && !parsed.attributes && !parsed.pseudos) parsed = null;
return Selectors.Cache.parsed[selector] = parsed;
},
parseTagAndID: function(selector){
var tag = selector.match(Selectors.RegExps.tag);
var id = selector.match(Selectors.RegExps.id);
return [(tag) ? tag[1] : '*', (id) ? id[1] : false];
},
filter: function(item, parsed, local){
var i;
if (parsed.classes){
for (i = parsed.classes.length; i--; i){
var cn = parsed.classes[i];
if (!Selectors.Filters.byClass(item, cn)) return false;
}
}
if (parsed.attributes){
for (i = parsed.attributes.length; i--; i){
var att = parsed.attributes[i];
if (!Selectors.Filters.byAttribute(item, att.name, att.operator, att.value)) return false;
}
}
if (parsed.pseudos){
for (i = parsed.pseudos.length; i--; i){
var psd = parsed.pseudos[i];
if (!Selectors.Filters.byPseudo(item, psd.parser, psd.argument, local)) return false;
}
}
return true;
},
getByTagAndID: function(ctx, tag, id){
if (id){
var item = (ctx.getElementById) ? ctx.getElementById(id, true) : Element.getElementById(ctx, id, true);
return (item && Selectors.Filters.byTag(item, tag)) ? [item] : [];
} else {
return ctx.getElementsByTagName(tag);
}
},
search: function(self, expression, local){
var splitters = [];
var selectors = expression.trim().replace(Selectors.RegExps.splitter, function(m0, m1, m2){
splitters.push(m1);
return ':)' + m2;
}).split(':)');
var items, filtered, item;
for (var i = 0, l = selectors.length; i < l; i++){
var selector = selectors[i];
if (i == 0 && Selectors.RegExps.quick.test(selector)){
items = self.getElementsByTagName(selector);
continue;
}
var splitter = splitters[i - 1];
var tagid = Selectors.Utils.parseTagAndID(selector);
var tag = tagid[0], id = tagid[1];
if (i == 0){
items = Selectors.Utils.getByTagAndID(self, tag, id);
} else {
var uniques = {}, found = [];
for (var j = 0, k = items.length; j < k; j++) found = Selectors.Getters[splitter](found, items[j], tag, id, uniques);
items = found;
}
var parsed = Selectors.Utils.parseSelector(selector);
if (parsed){
filtered = [];
for (var m = 0, n = items.length; m < n; m++){
item = items[m];
if (Selectors.Utils.filter(item, parsed, local)) filtered.push(item);
}
items = filtered;
}
}
return items;
}
};
Selectors.Getters = {
' ': function(found, self, tag, id, uniques){
var items = Selectors.Utils.getByTagAndID(self, tag, id);
for (var i = 0, l = items.length; i < l; i++){
var item = items[i];
if (Selectors.Utils.chk(item, uniques)) found.push(item);
}
return found;
},
'>': function(found, self, tag, id, uniques){
var children = Selectors.Utils.getByTagAndID(self, tag, id);
for (var i = 0, l = children.length; i < l; i++){
var child = children[i];
if (child.parentNode == self && Selectors.Utils.chk(child, uniques)) found.push(child);
}
return found;
},
'+': function(found, self, tag, id, uniques){
while ((self = self.nextSibling)){
if (self.nodeType == 1){
if (Selectors.Utils.chk(self, uniques) && Selectors.Filters.byTag(self, tag) && Selectors.Filters.byID(self, id)) found.push(self);
break;
}
}
return found;
},
'~': function(found, self, tag, id, uniques){
while ((self = self.nextSibling)){
if (self.nodeType == 1){
if (!Selectors.Utils.chk(self, uniques)) break;
if (Selectors.Filters.byTag(self, tag) && Selectors.Filters.byID(self, id)) found.push(self);
}
}
return found;
}
};
Selectors.Filters = {
byTag: function(self, tag){
return (tag == '*' || (self.tagName && self.tagName.toLowerCase() == tag));
},
byID: function(self, id){
return (!id || (self.id && self.id == id));
},
byClass: function(self, klass){
return (self.className && self.className.contains && self.className.contains(klass, ' '));
},
byPseudo: function(self, parser, argument, local){
return parser.call(self, argument, local);
},
byAttribute: function(self, name, operator, value){
var result = Element.prototype.getProperty.call(self, name);
if (!result) return (operator == '!=');
if (!operator || value == undefined) return true;
switch (operator){
case '=': return (result == value);
case '*=': return (result.contains(value));
case '^=': return (result.substr(0, value.length) == value);
case '$=': return (result.substr(result.length - value.length) == value);
case '!=': return (result != value);
case '~=': return result.contains(value, ' ');
case '|=': return result.contains(value, '-');
}
return false;
}
};
Selectors.Pseudo = new Hash({
// w3c pseudo selectors
checked: function(){
return this.checked;
},
empty: function(){
return !(this.innerText || this.textContent || '').length;
},
not: function(selector){
return !Element.match(this, selector);
},
contains: function(text){
return (this.innerText || this.textContent || '').contains(text);
},
'first-child': function(){
return Selectors.Pseudo.index.call(this, 0);
},
'last-child': function(){
var element = this;
while ((element = element.nextSibling)){
if (element.nodeType == 1) return false;
}
return true;
},
'only-child': function(){
var prev = this;
while ((prev = prev.previousSibling)){
if (prev.nodeType == 1) return false;
}
var next = this;
while ((next = next.nextSibling)){
if (next.nodeType == 1) return false;
}
return true;
},
'nth-child': function(argument, local){
argument = (argument == undefined) ? 'n' : argument;
var parsed = Selectors.Utils.parseNthArgument(argument);
if (parsed.special != 'n') return Selectors.Pseudo[parsed.special].call(this, parsed.a, local);
var count = 0;
local.positions = local.positions || {};
var uid = $uid(this);
if (!local.positions[uid]){
var self = this;
while ((self = self.previousSibling)){
if (self.nodeType != 1) continue;
count ++;
var position = local.positions[$uid(self)];
if (position != undefined){
count = position + count;
break;
}
}
local.positions[uid] = count;
}
return (local.positions[uid] % parsed.a == parsed.b);
},
// custom pseudo selectors
index: function(index){
var element = this, count = 0;
while ((element = element.previousSibling)){
if (element.nodeType == 1 && ++count > index) return false;
}
return (count == index);
},
even: function(argument, local){
return Selectors.Pseudo['nth-child'].call(this, '2n+1', local);
},
odd: function(argument, local){
return Selectors.Pseudo['nth-child'].call(this, '2n', local);
},
selected: function(){
return this.selected;
},
enabled: function(){
return (this.disabled === false);
}
});
/*
---
script: DomReady.js
description: Contains the custom event domready.
license: MIT-style license.
requires:
- /Element.Event
provides: [DomReady]
...
*/
Element.Events.domready = {
onAdd: function(fn){
if (Browser.loaded) fn.call(this);
}
};
(function(){
var domready = function(){
if (Browser.loaded) return;
Browser.loaded = true;
window.fireEvent('domready');
document.fireEvent('domready');
};
window.addEvent('load', domready);
if (Browser.Engine.trident){
var temp = document.createElement('div');
(function(){
($try(function(){
temp.doScroll(); // Technique by Diego Perini
return document.id(temp).inject(document.body).set('html', 'temp').dispose();
})) ? domready() : arguments.callee.delay(50);
})();
} else if (Browser.Engine.webkit && Browser.Engine.version < 525){
(function(){
(['loaded', 'complete'].contains(document.readyState)) ? domready() : arguments.callee.delay(50);
})();
} else {
document.addEvent('DOMContentLoaded', domready);
}
})();
/*
---
script: JSON.js
description: JSON encoder and decoder.
license: MIT-style license.
See Also: <http://www.json.org/>
requires:
- /Array
- /String
- /Number
- /Function
- /Hash
provides: [JSON]
...
*/
var JSON = new Hash(this.JSON && {
stringify: JSON.stringify,
parse: JSON.parse
}).extend({
$specialChars: {'\b': '\\b', '\t': '\\t', '\n': '\\n', '\f': '\\f', '\r': '\\r', '"' : '\\"', '\\': '\\\\'},
$replaceChars: function(chr){
return JSON.$specialChars[chr] || '\\u00' + Math.floor(chr.charCodeAt() / 16).toString(16) + (chr.charCodeAt() % 16).toString(16);
},
encode: function(obj){
switch ($type(obj)){
case 'string':
return '"' + obj.replace(/[\x00-\x1f\\"]/g, JSON.$replaceChars) + '"';
case 'array':
return '[' + String(obj.map(JSON.encode).clean()) + ']';
case 'object': case 'hash':
var string = [];
Hash.each(obj, function(value, key){
var json = JSON.encode(value);
if (json) string.push(JSON.encode(key) + ':' + json);
});
return '{' + string + '}';
case 'number': case 'boolean': return String(obj);
case false: return 'null';
}
return null;
},
decode: function(string, secure){
if ($type(string) != 'string' || !string.length) return null;
if (secure && !(/^[,:{}\[\]0-9.\-+Eaeflnr-u \n\r\t]*$/).test(string.replace(/\\./g, '@').replace(/"[^"\\\n\r]*"/g, ''))) return null;
return eval('(' + string + ')');
}
});
Native.implement([Hash, Array, String, Number], {
toJSON: function(){
return JSON.encode(this);
}
});
/*
---
script: Cookie.js
description: Class for creating, reading, and deleting browser Cookies.
license: MIT-style license.
credits:
- Based on the functions by Peter-Paul Koch (http://quirksmode.org).
requires:
- /Options
provides: [Cookie]
...
*/
var Cookie = new Class({
Implements: Options,
options: {
path: false,
domain: false,
duration: false,
secure: false,
document: document
},
initialize: function(key, options){
this.key = key;
this.setOptions(options);
},
write: function(value){
value = encodeURIComponent(value);
if (this.options.domain) value += '; domain=' + this.options.domain;
if (this.options.path) value += '; path=' + this.options.path;
if (this.options.duration){
var date = new Date();
date.setTime(date.getTime() + this.options.duration * 24 * 60 * 60 * 1000);
value += '; expires=' + date.toGMTString();
}
if (this.options.secure) value += '; secure';
this.options.document.cookie = this.key + '=' + value;
return this;
},
read: function(){
var value = this.options.document.cookie.match('(?:^|;)\\s*' + this.key.escapeRegExp() + '=([^;]*)');
return (value) ? decodeURIComponent(value[1]) : null;
},
dispose: function(){
new Cookie(this.key, $merge(this.options, {duration: -1})).write('');
return this;
}
});
Cookie.write = function(key, value, options){
return new Cookie(key, options).write(value);
};
Cookie.read = function(key){
return new Cookie(key).read();
};
Cookie.dispose = function(key, options){
return new Cookie(key, options).dispose();
};
/*
---
script: Swiff.js
description: Wrapper for embedding SWF movies. Supports External Interface Communication.
license: MIT-style license.
credits: 
- Flash detection & Internet Explorer + Flash Player 9 fix inspired by SWFObject.
requires:
- /Options
- /$util
provides: [Swiff]
...
*/
var Swiff = new Class({
Implements: [Options],
options: {
id: null,
height: 1,
width: 1,
container: null,
properties: {},
params: {
quality: 'high',
allowScriptAccess: 'always',
wMode: 'transparent',
swLiveConnect: true
},
callBacks: {},
vars: {}
},
toElement: function(){
return this.object;
},
initialize: function(path, options){
this.instance = 'Swiff_' + $time();
this.setOptions(options);
options = this.options;
var id = this.id = options.id || this.instance;
var container = document.id(options.container);
Swiff.CallBacks[this.instance] = {};
var params = options.params, vars = options.vars, callBacks = options.callBacks;
var properties = $extend({height: options.height, width: options.width}, options.properties);
var self = this;
for (var callBack in callBacks){
Swiff.CallBacks[this.instance][callBack] = (function(option){
return function(){
return option.apply(self.object, arguments);
};
})(callBacks[callBack]);
vars[callBack] = 'Swiff.CallBacks.' + this.instance + '.' + callBack;
}
params.flashVars = Hash.toQueryString(vars);
if (Browser.Engine.trident){
properties.classid = 'clsid:D27CDB6E-AE6D-11cf-96B8-444553540000';
params.movie = path;
} else {
properties.type = 'application/x-shockwave-flash';
properties.data = path;
}
var build = '<object id="' + id + '"';
for (var property in properties) build += ' ' + property + '="' + properties[property] + '"';
build += '>';
for (var param in params){
if (params[param]) build += '<param name="' + param + '" value="' + params[param] + '" />';
}
build += '</object>';
this.object = ((container) ? container.empty() : new Element('div')).set('html', build).firstChild;
},
replaces: function(element){
element = document.id(element, true);
element.parentNode.replaceChild(this.toElement(), element);
return this;
},
inject: function(element){
document.id(element, true).appendChild(this.toElement());
return this;
},
remote: function(){
return Swiff.remote.apply(Swiff, [this.toElement()].extend(arguments));
}
});
Swiff.CallBacks = {};
Swiff.remote = function(obj, fn){
var rs = obj.CallFunction('<invoke name="' + fn + '" returntype="javascript">' + __flash__argumentsToXML(arguments, 2) + '</invoke>');
return eval(rs);
};
/*
---
script: Fx.js
description: Contains the basic animation logic to be extended by all other Fx Classes.
license: MIT-style license.
requires:
- /Chain
- /Events
- /Options
provides: [Fx]
...
*/
var Fx = new Class({
Implements: [Chain, Events, Options],
options: {
/*
onStart: $empty,
onCancel: $empty,
onComplete: $empty,
*/
fps: 50,
unit: false,
duration: 500,
link: 'ignore'
},
initialize: function(options){
this.subject = this.subject || this;
this.setOptions(options);
this.options.duration = Fx.Durations[this.options.duration] || this.options.duration.toInt();
var wait = this.options.wait;
if (wait === false) this.options.link = 'cancel';
},
getTransition: function(){
return function(p){
return -(Math.cos(Math.PI * p) - 1) / 2;
};
},
step: function(){
var time = $time();
if (time < this.time + this.options.duration){
var delta = this.transition((time - this.time) / this.options.duration);
this.set(this.compute(this.from, this.to, delta));
} else {
this.set(this.compute(this.from, this.to, 1));
this.complete();
}
},
set: function(now){
return now;
},
compute: function(from, to, delta){
return Fx.compute(from, to, delta);
},
check: function(){
if (!this.timer) return true;
switch (this.options.link){
case 'cancel': this.cancel(); return true;
case 'chain': this.chain(this.caller.bind(this, arguments)); return false;
}
return false;
},
start: function(from, to){
if (!this.check(from, to)) return this;
this.from = from;
this.to = to;
this.time = 0;
this.transition = this.getTransition();
this.startTimer();
this.onStart();
return this;
},
complete: function(){
if (this.stopTimer()) this.onComplete();
return this;
},
cancel: function(){
if (this.stopTimer()) this.onCancel();
return this;
},
onStart: function(){
this.fireEvent('start', this.subject);
},
onComplete: function(){
this.fireEvent('complete', this.subject);
if (!this.callChain()) this.fireEvent('chainComplete', this.subject);
},
onCancel: function(){
this.fireEvent('cancel', this.subject).clearChain();
},
pause: function(){
this.stopTimer();
return this;
},
resume: function(){
this.startTimer();
return this;
},
stopTimer: function(){
if (!this.timer) return false;
this.time = $time() - this.time;
this.timer = $clear(this.timer);
return true;
},
startTimer: function(){
if (this.timer) return false;
this.time = $time() - this.time;
this.timer = this.step.periodical(Math.round(1000 / this.options.fps), this);
return true;
}
});
Fx.compute = function(from, to, delta){
return (to - from) * delta + from;
};
Fx.Durations = {'short': 250, 'normal': 500, 'long': 1000};
/*
---
script: Fx.CSS.js
description: Contains the CSS animation logic. Used by Fx.Tween, Fx.Morph, Fx.Elements.
license: MIT-style license.
requires:
- /Fx
- /Element.Style
provides: [Fx.CSS]
...
*/
Fx.CSS = new Class({
Extends: Fx,
//prepares the base from/to object
prepare: function(element, property, values){
values = $splat(values);
var values1 = values[1];
if (!$chk(values1)){
values[1] = values[0];
values[0] = element.getStyle(property);
}
var parsed = values.map(this.parse);
return {from: parsed[0], to: parsed[1]};
},
//parses a value into an array
parse: function(value){
value = $lambda(value)();
value = (typeof value == 'string') ? value.split(' ') : $splat(value);
return value.map(function(val){
val = String(val);
var found = false;
Fx.CSS.Parsers.each(function(parser, key){
if (found) return;
var parsed = parser.parse(val);
if ($chk(parsed)) found = {value: parsed, parser: parser};
});
found = found || {value: val, parser: Fx.CSS.Parsers.String};
return found;
});
},
//computes by a from and to prepared objects, using their parsers.
compute: function(from, to, delta){
var computed = [];
(Math.min(from.length, to.length)).times(function(i){
computed.push({value: from[i].parser.compute(from[i].value, to[i].value, delta), parser: from[i].parser});
});
computed.$family = {name: 'fx:css:value'};
return computed;
},
//serves the value as settable
serve: function(value, unit){
if ($type(value) != 'fx:css:value') value = this.parse(value);
var returned = [];
value.each(function(bit){
returned = returned.concat(bit.parser.serve(bit.value, unit));
});
return returned;
},
//renders the change to an element
render: function(element, property, value, unit){
element.setStyle(property, this.serve(value, unit));
},
//searches inside the page css to find the values for a selector
search: function(selector){
if (Fx.CSS.Cache[selector]) return Fx.CSS.Cache[selector];
var to = {};
Array.each(document.styleSheets, function(sheet, j){
var href = sheet.href;
if (href && href.contains('://') && !href.contains(document.domain)) return;
var rules = sheet.rules || sheet.cssRules;
Array.each(rules, function(rule, i){
if (!rule.style) return;
var selectorText = (rule.selectorText) ? rule.selectorText.replace(/^\w+/, function(m){
return m.toLowerCase();
}) : null;
if (!selectorText || !selectorText.test('^' + selector + '$')) return;
Element.Styles.each(function(value, style){
if (!rule.style[style] || Element.ShortStyles[style]) return;
value = String(rule.style[style]);
to[style] = (value.test(/^rgb/)) ? value.rgbToHex() : value;
});
});
});
return Fx.CSS.Cache[selector] = to;
}
});
Fx.CSS.Cache = {};
Fx.CSS.Parsers = new Hash({
Color: {
parse: function(value){
if (value.match(/^#[0-9a-f]{3,6}$/i)) return value.hexToRgb(true);
return ((value = value.match(/(\d+),\s*(\d+),\s*(\d+)/))) ? [value[1], value[2], value[3]] : false;
},
compute: function(from, to, delta){
return from.map(function(value, i){
return Math.round(Fx.compute(from[i], to[i], delta));
});
},
serve: function(value){
return value.map(Number);
}
},
Number: {
parse: parseFloat,
compute: Fx.compute,
serve: function(value, unit){
return (unit) ? value + unit : value;
}
},
String: {
parse: $lambda(false),
compute: $arguments(1),
serve: $arguments(0)
}
});
/*
---
script: Fx.Tween.js
description: Formerly Fx.Style, effect to transition any CSS property for an element.
license: MIT-style license.
requires: 
- /Fx.CSS
provides: [Fx.Tween, Element.fade, Element.highlight]
...
*/
Fx.Tween = new Class({
Extends: Fx.CSS,
initialize: function(element, options){
this.element = this.subject = document.id(element);
this.parent(options);
},
set: function(property, now){
if (arguments.length == 1){
now = property;
property = this.property || this.options.property;
}
this.render(this.element, property, now, this.options.unit);
return this;
},
start: function(property, from, to){
if (!this.check(property, from, to)) return this;
var args = Array.flatten(arguments);
this.property = this.options.property || args.shift();
var parsed = this.prepare(this.element, this.property, args);
return this.parent(parsed.from, parsed.to);
}
});
Element.Properties.tween = {
set: function(options){
var tween = this.retrieve('tween');
if (tween) tween.cancel();
return this.eliminate('tween').store('tween:options', $extend({link: 'cancel'}, options));
},
get: function(options){
if (options || !this.retrieve('tween')){
if (options || !this.retrieve('tween:options')) this.set('tween', options);
this.store('tween', new Fx.Tween(this, this.retrieve('tween:options')));
}
return this.retrieve('tween');
}
};
Element.implement({
tween: function(property, from, to){
this.get('tween').start(arguments);
return this;
},
fade: function(how){
var fade = this.get('tween'), o = 'opacity', toggle;
how = $pick(how, 'toggle');
switch (how){
case 'in': fade.start(o, 1); break;
case 'out': fade.start(o, 0); break;
case 'show': fade.set(o, 1); break;
case 'hide': fade.set(o, 0); break;
case 'toggle':
var flag = this.retrieve('fade:flag', this.get('opacity') == 1);
fade.start(o, (flag) ? 0 : 1);
this.store('fade:flag', !flag);
toggle = true;
break;
default: fade.start(o, arguments);
}
if (!toggle) this.eliminate('fade:flag');
return this;
},
highlight: function(start, end){
if (!end){
end = this.retrieve('highlight:original', this.getStyle('background-color'));
end = (end == 'transparent') ? '#fff' : end;
}
var tween = this.get('tween');
tween.start('background-color', start || '#ffff88', end).chain(function(){
this.setStyle('background-color', this.retrieve('highlight:original'));
tween.callChain();
}.bind(this));
return this;
}
});
/*
---
script: Fx.Morph.js
description: Formerly Fx.Styles, effect to transition any number of CSS properties for an element using an object of rules, or CSS based selector rules.
license: MIT-style license.
requires:
- /Fx.CSS
provides: [Fx.Morph]
...
*/
Fx.Morph = new Class({
Extends: Fx.CSS,
initialize: function(element, options){
this.element = this.subject = document.id(element);
this.parent(options);
},
set: function(now){
if (typeof now == 'string') now = this.search(now);
for (var p in now) this.render(this.element, p, now[p], this.options.unit);
return this;
},
compute: function(from, to, delta){
var now = {};
for (var p in from) now[p] = this.parent(from[p], to[p], delta);
return now;
},
start: function(properties){
if (!this.check(properties)) return this;
if (typeof properties == 'string') properties = this.search(properties);
var from = {}, to = {};
for (var p in properties){
var parsed = this.prepare(this.element, p, properties[p]);
from[p] = parsed.from;
to[p] = parsed.to;
}
return this.parent(from, to);
}
});
Element.Properties.morph = {
set: function(options){
var morph = this.retrieve('morph');
if (morph) morph.cancel();
return this.eliminate('morph').store('morph:options', $extend({link: 'cancel'}, options));
},
get: function(options){
if (options || !this.retrieve('morph')){
if (options || !this.retrieve('morph:options')) this.set('morph', options);
this.store('morph', new Fx.Morph(this, this.retrieve('morph:options')));
}
return this.retrieve('morph');
}
};
Element.implement({
morph: function(props){
this.get('morph').start(props);
return this;
}
});
/*
---
script: Fx.Transitions.js
description: Contains a set of advanced transitions to be used with any of the Fx Classes.
license: MIT-style license.
credits:
- Easing Equations by Robert Penner, <http://www.robertpenner.com/easing/>, modified and optimized to be used with MooTools.
requires:
- /Fx
provides: [Fx.Transitions]
...
*/
Fx.implement({
getTransition: function(){
var trans = this.options.transition || Fx.Transitions.Sine.easeInOut;
if (typeof trans == 'string'){
var data = trans.split(':');
trans = Fx.Transitions;
trans = trans[data[0]] || trans[data[0].capitalize()];
if (data[1]) trans = trans['ease' + data[1].capitalize() + (data[2] ? data[2].capitalize() : '')];
}
return trans;
}
});
Fx.Transition = function(transition, params){
params = $splat(params);
return $extend(transition, {
easeIn: function(pos){
return transition(pos, params);
},
easeOut: function(pos){
return 1 - transition(1 - pos, params);
},
easeInOut: function(pos){
return (pos <= 0.5) ? transition(2 * pos, params) / 2 : (2 - transition(2 * (1 - pos), params)) / 2;
}
});
};
Fx.Transitions = new Hash({
linear: $arguments(0)
});
Fx.Transitions.extend = function(transitions){
for (var transition in transitions) Fx.Transitions[transition] = new Fx.Transition(transitions[transition]);
};
Fx.Transitions.extend({
Pow: function(p, x){
return Math.pow(p, x[0] || 6);
},
Expo: function(p){
return Math.pow(2, 8 * (p - 1));
},
Circ: function(p){
return 1 - Math.sin(Math.acos(p));
},
Sine: function(p){
return 1 - Math.sin((1 - p) * Math.PI / 2);
},
Back: function(p, x){
x = x[0] || 1.618;
return Math.pow(p, 2) * ((x + 1) * p - x);
},
Bounce: function(p){
var value;
for (var a = 0, b = 1; 1; a += b, b /= 2){
if (p >= (7 - 4 * a) / 11){
value = b * b - Math.pow((11 - 6 * a - 11 * p) / 4, 2);
break;
}
}
return value;
},
Elastic: function(p, x){
return Math.pow(2, 10 * --p) * Math.cos(20 * p * Math.PI * (x[0] || 1) / 3);
}
});
['Quad', 'Cubic', 'Quart', 'Quint'].each(function(transition, i){
Fx.Transitions[transition] = new Fx.Transition(function(p){
return Math.pow(p, [i + 2]);
});
});
/*
---
script: Request.js
description: Powerful all purpose Request Class. Uses XMLHTTPRequest.
license: MIT-style license.
requires:
- /Element
- /Chain
- /Events
- /Options
- /Browser
provides: [Request]
...
*/
var Request = new Class({
Implements: [Chain, Events, Options],
options: {/*
onRequest: $empty,
onComplete: $empty,
onCancel: $empty,
onSuccess: $empty,
onFailure: $empty,
onException: $empty,*/
url: '',
data: '',
headers: {
'X-Requested-With': 'XMLHttpRequest',
'Accept': 'text/javascript, text/html, application/xml, text/xml, */*'
},
async: true,
format: false,
method: 'post',
link: 'ignore',
isSuccess: null,
emulation: true,
urlEncoded: true,
encoding: 'utf-8',
evalScripts: false,
evalResponse: false,
noCache: false
},
initialize: function(options){
this.xhr = new Browser.Request();
this.setOptions(options);
this.options.isSuccess = this.options.isSuccess || this.isSuccess;
this.headers = new Hash(this.options.headers);
},
onStateChange: function(){
if (this.xhr.readyState != 4 || !this.running) return;
this.running = false;
this.status = 0;
$try(function(){
this.status = this.xhr.status;
}.bind(this));
this.xhr.onreadystatechange = $empty;
if (this.options.isSuccess.call(this, this.status)){
this.response = {text: this.xhr.responseText, xml: this.xhr.responseXML};
this.success(this.response.text, this.response.xml);
} else {
this.response = {text: null, xml: null};
this.failure();
}
},
isSuccess: function(){
return ((this.status >= 200) && (this.status < 300));
},
processScripts: function(text){
if (this.options.evalResponse || (/(ecma|java)script/).test(this.getHeader('Content-type'))) return $exec(text);
return text.stripScripts(this.options.evalScripts);
},
success: function(text, xml){
this.onSuccess(this.processScripts(text), xml);
},
onSuccess: function(){
this.fireEvent('complete', arguments).fireEvent('success', arguments).callChain();
},
failure: function(){
this.onFailure();
},
onFailure: function(){
this.fireEvent('complete').fireEvent('failure', this.xhr);
},
setHeader: function(name, value){
this.headers.set(name, value);
return this;
},
getHeader: function(name){
return $try(function(){
return this.xhr.getResponseHeader(name);
}.bind(this));
},
check: function(){
if (!this.running) return true;
switch (this.options.link){
case 'cancel': this.cancel(); return true;
case 'chain': this.chain(this.caller.bind(this, arguments)); return false;
}
return false;
},
send: function(options){
if (!this.check(options)) return this;
this.running = true;
var type = $type(options);
if (type == 'string' || type == 'element') options = {data: options};
var old = this.options;
options = $extend({data: old.data, url: old.url, method: old.method}, options);
var data = options.data, url = String(options.url), method = options.method.toLowerCase();
switch ($type(data)){
case 'element': data = document.id(data).toQueryString(); break;
case 'object': case 'hash': data = Hash.toQueryString(data);
}
if (this.options.format){
var format = 'format=' + this.options.format;
data = (data) ? format + '&' + data : format;
}
if (this.options.emulation && !['get', 'post'].contains(method)){
var _method = '_method=' + method;
data = (data) ? _method + '&' + data : _method;
method = 'post';
}
if (this.options.urlEncoded && method == 'post'){
var encoding = (this.options.encoding) ? '; charset=' + this.options.encoding : '';
this.headers.set('Content-type', 'application/x-www-form-urlencoded' + encoding);
}
if (this.options.noCache){
var noCache = 'noCache=' + new Date().getTime();
data = (data) ? noCache + '&' + data : noCache;
}
var trimPosition = url.lastIndexOf('/');
if (trimPosition > -1 && (trimPosition = url.indexOf('#')) > -1) url = url.substr(0, trimPosition);
if (data && method == 'get'){
url = url + (url.contains('?') ? '&' : '?') + data;
data = null;
}
this.xhr.open(method.toUpperCase(), url, this.options.async);
this.xhr.onreadystatechange = this.onStateChange.bind(this);
this.headers.each(function(value, key){
try {
this.xhr.setRequestHeader(key, value);
} catch (e){
this.fireEvent('exception', [key, value]);
}
}, this);
this.fireEvent('request');
this.xhr.send(data);
if (!this.options.async) this.onStateChange();
return this;
},
cancel: function(){
if (!this.running) return this;
this.running = false;
this.xhr.abort();
this.xhr.onreadystatechange = $empty;
this.xhr = new Browser.Request();
this.fireEvent('cancel');
return this;
}
});
(function(){
var methods = {};
['get', 'post', 'put', 'delete', 'GET', 'POST', 'PUT', 'DELETE'].each(function(method){
methods[method] = function(){
var params = Array.link(arguments, {url: String.type, data: $defined});
return this.send($extend(params, {method: method}));
};
});
Request.implement(methods);
})();
Element.Properties.send = {
set: function(options){
var send = this.retrieve('send');
if (send) send.cancel();
return this.eliminate('send').store('send:options', $extend({
data: this, link: 'cancel', method: this.get('method') || 'post', url: this.get('action')
}, options));
},
get: function(options){
if (options || !this.retrieve('send')){
if (options || !this.retrieve('send:options')) this.set('send', options);
this.store('send', new Request(this.retrieve('send:options')));
}
return this.retrieve('send');
}
};
Element.implement({
send: function(url){
var sender = this.get('send');
sender.send({data: this, url: url || sender.options.url});
return this;
}
});
/*
---
script: Request.HTML.js
description: Extends the basic Request Class with additional methods for interacting with HTML responses.
license: MIT-style license.
requires:
- /Request
- /Element
provides: [Request.HTML]
...
*/
Request.HTML = new Class({
Extends: Request,
options: {
update: false,
append: false,
evalScripts: true,
filter: false
},
processHTML: function(text){
var match = text.match(/<body[^>]*>([\s\S]*?)<\/body>/i);
text = (match) ? match[1] : text;
var container = new Element('div');
return $try(function(){
var root = '<root>' + text + '</root>', doc;
if (Browser.Engine.trident){
doc = new ActiveXObject('Microsoft.XMLDOM');
doc.async = false;
doc.loadXML(root);
} else {
doc = new DOMParser().parseFromString(root, 'text/xml');
}
root = doc.getElementsByTagName('root')[0];
if (!root) return null;
for (var i = 0, k = root.childNodes.length; i < k; i++){
var child = Element.clone(root.childNodes[i], true, true);
if (child) container.grab(child);
}
return container;
}) || container.set('html', text);
},
success: function(text){
var options = this.options, response = this.response;
response.html = text.stripScripts(function(script){
response.javascript = script;
});
var temp = this.processHTML(response.html);
response.tree = temp.childNodes;
response.elements = temp.getElements('*');
if (options.filter) response.tree = response.elements.filter(options.filter);
if (options.update) document.id(options.update).empty().set('html', response.html);
else if (options.append) document.id(options.append).adopt(temp.getChildren());
if (options.evalScripts) $exec(response.javascript);
this.onSuccess(response.tree, response.elements, response.html, response.javascript);
}
});
Element.Properties.load = {
set: function(options){
var load = this.retrieve('load');
if (load) load.cancel();
return this.eliminate('load').store('load:options', $extend({data: this, link: 'cancel', update: this, method: 'get'}, options));
},
get: function(options){
if (options || ! this.retrieve('load')){
if (options || !this.retrieve('load:options')) this.set('load', options);
this.store('load', new Request.HTML(this.retrieve('load:options')));
}
return this.retrieve('load');
}
};
Element.implement({
load: function(){
this.get('load').send(Array.link(arguments, {data: Object.type, url: String.type}));
return this;
}
});
/*
---
script: Request.JSON.js
description: Extends the basic Request Class with additional methods for sending and receiving JSON data.
license: MIT-style license.
requires:
- /Request JSON
provides: [Request.HTML]
...
*/
Request.JSON = new Class({
Extends: Request,
options: {
secure: true
},
initialize: function(options){
this.parent(options);
this.headers.extend({'Accept': 'application/json', 'X-Request': 'JSON'});
},
success: function(text){
this.response.json = JSON.decode(text, this.options.secure);
this.onSuccess(this.response.json, text);
}
});
//MooTools More, <http://mootools.net/more>. Copyright (c) 2006-2009 Aaron Newton <http://clientcide.com/>, Valerio Proietti <http://mad4milk.net> & the MooTools team <http://mootools.net/developers>, MIT Style License.
/*
---
script: More.js
description: MooTools More
license: MIT-style license
authors:
- Guillermo Rauch
- Thomas Aylott
- Scott Kyle
requires:
- core:1.2.4/MooTools
provides: [MooTools.More]
...
*/
MooTools.More = {
'version': '1.2.4.4',
'build': '6f6057dc645fdb7547689183b2311063bd653ddf'
};
/*
---
script: MooTools.Lang.js
description: Provides methods for localization.
license: MIT-style license
authors:
- Aaron Newton
requires:
- core:1.2.4/Events
- /MooTools.More
provides: [MooTools.Lang]
...
*/
(function(){
var data = {
language: 'en-US',
languages: {
'en-US': {}
},
cascades: ['en-US']
};
var cascaded;
MooTools.lang = new Events();
$extend(MooTools.lang, {
setLanguage: function(lang){
if (!data.languages[lang]) return this;
data.language = lang;
this.load();
this.fireEvent('langChange', lang);
return this;
},
load: function() {
var langs = this.cascade(this.getCurrentLanguage());
cascaded = {};
$each(langs, function(set, setName){
cascaded[setName] = this.lambda(set);
}, this);
},
getCurrentLanguage: function(){
return data.language;
},
addLanguage: function(lang){
data.languages[lang] = data.languages[lang] || {};
return this;
},
cascade: function(lang){
var cascades = (data.languages[lang] || {}).cascades || [];
cascades.combine(data.cascades);
cascades.erase(lang).push(lang);
var langs = cascades.map(function(lng){
return data.languages[lng];
}, this);
return $merge.apply(this, langs);
},
lambda: function(set) {
(set || {}).get = function(key, args){
return $lambda(set[key]).apply(this, $splat(args));
};
return set;
},
get: function(set, key, args){
if (cascaded && cascaded[set]) return (key ? cascaded[set].get(key, args) : cascaded[set]);
},
set: function(lang, set, members){
this.addLanguage(lang);
langData = data.languages[lang];
if (!langData[set]) langData[set] = {};
$extend(langData[set], members);
if (lang == this.getCurrentLanguage()){
this.load();
this.fireEvent('langChange', lang);
}
return this;
},
list: function(){
return Hash.getKeys(data.languages);
}
});
})();
/*
---
script: Log.js
description: Provides basic logging functionality for plugins to implement.
license: MIT-style license
authors:
- Guillermo Rauch
- Thomas Aylott
- Scott Kyle
requires:
- core:1.2.4/Class
- /MooTools.More
provides: [Log]
...
*/
(function(){
var global = this;
var log = function(){
if (global.console && console.log){
try {
console.log.apply(console, arguments);
} catch(e) {
console.log(Array.slice(arguments));
}
} else {
Log.logged.push(arguments);
}
return this;
};
var disabled = function(){
this.logged.push(arguments);
return this;
};
this.Log = new Class({
logged: [],
log: disabled,
resetLog: function(){
this.logged.empty();
return this;
},
enableLog: function(){
this.log = log;
this.logged.each(function(args){
this.log.apply(this, args);
}, this);
return this.resetLog();
},
disableLog: function(){
this.log = disabled;
return this;
}
});
Log.extend(new Log).enableLog();
// legacy
Log.logger = function(){
return this.log.apply(this, arguments);
};
})();
/*
---
script: Depender.js
description: A stand alone dependency loader for the MooTools library.
license: MIT-style license
authors:
- Aaron Newton
requires:
- core:1.2.4/Element.Events
- core:1.2.4/Request.JSON
- /MooTools.More
- /Log
provides: Depender
...
*/
var Depender = {
options: {
/* 
onRequire: $empty(options),
onRequirementLoaded: $empty([scripts, options]),
onScriptLoaded: $empty({
script: script, 
totalLoaded: percentOfTotalLoaded, 
loaded: scriptsState
}),
serial: false,
target: null,
noCache: false,
log: false,*/
loadedSources: [],
loadedScripts: ['Core', 'Browser', 'Array', 'String', 'Function', 'Number', 'Hash', 'Element', 'Event', 'Element.Event', 'Class', 'DomReady', 'Class.Extras', 'Request', 'JSON', 'Request.JSON', 'More', 'Depender', 'Log'],
useScriptInjection: true
},
loaded: [],
sources: {},
libs: {},
include: function(libs){
this.log('include: ', libs);
this.mapLoaded = false;
var loader = function(data){
this.libs = $merge(this.libs, data);
$each(this.libs, function(data, lib){
if (data.scripts) this.loadSource(lib, data.scripts);
}, this);
}.bind(this);
if ($type(libs) == 'string'){
this.log('fetching libs ', libs);
this.request(libs, loader);
} else {
loader(libs);
}
return this;
},
required: [],
require: function(options){
var loaded = function(){
var scripts = this.calculateDependencies(options.scripts);
if (options.sources){
options.sources.each(function(source){
scripts.combine(this.libs[source].files);
}, this);
}
if (options.serial) scripts.combine(this.getLoadedScripts());
options.scripts = scripts;
this.required.push(options);
this.fireEvent('require', options);
this.loadScripts(options.scripts);
};
if (this.mapLoaded) loaded.call(this);
else this.addEvent('mapLoaded', loaded.bind(this));
return this;
},
cleanDoubleSlash: function(str){
if (!str) return str;
var prefix = '';
if (str.test(/^http:\/\//)){
prefix = 'http://';
str = str.substring(7, str.length);
}
str = str.replace(/\/\//g, '/');
return prefix + str;
},
request: function(url, callback){
new Request.JSON({
url: url,
secure: false,
onSuccess: callback
}).send();
},
loadSource: function(lib, source){
if (this.libs[lib].files){
this.dataLoaded();
return;
}
this.log('loading source: ', source);
this.request(this.cleanDoubleSlash(source + '/scripts.json'), function(result){
this.log('loaded source: ', source);
this.libs[lib].files = result;
this.dataLoaded();
}.bind(this));
},
dataLoaded: function(){
var loaded = true;
$each(this.libs, function(v, k){
if (!this.libs[k].files) loaded = false;
}, this);
if (loaded){
this.mapTree();
this.mapLoaded = true;
this.calculateLoaded();
this.lastLoaded = this.getLoadedScripts().getLength();
this.fireEvent('mapLoaded');
this.removeEvents('mapLoaded');
}
},
calculateLoaded: function(){
var set = function(script){
this.scriptsState[script] = true;
}.bind(this);
if (this.options.loadedScripts) this.options.loadedScripts.each(set);
if (this.options.loadedSources){
this.options.loadedSources.each(function(lib){
$each(this.libs[lib].files, function(dir){
$each(dir, function(data, file){
set(file);
}, this);
}, this);
}, this);
}
},
deps: {},
pathMap: {},
mapTree: function(){
$each(this.libs, function(data, source){
$each(data.files, function(scripts, folder){
$each(scripts, function(details, script){
var path = source + ':' + folder + ':' + script;
if (this.deps[path]) return;
this.deps[path] = details.deps;
this.pathMap[script] = path;
}, this);
}, this);
}, this);
},
getDepsForScript: function(script){
return this.deps[this.pathMap[script]] || [];
},
calculateDependencies: function(scripts){
var reqs = [];
$splat(scripts).each(function(script){
if (script == 'None' || !script) return;
var deps = this.getDepsForScript(script);
if (!deps){
if (window.console && console.warn) console.warn('dependencies not mapped: script: %o, map: %o, :deps: %o', script, this.pathMap, this.deps);
} else {
deps.each(function(scr){
if (scr == script || scr == 'None' || !scr) return;
if (!reqs.contains(scr)) reqs.combine(this.calculateDependencies(scr));
reqs.include(scr);
}, this);
}
reqs.include(script);
}, this);
return reqs;
},
getPath: function(script){
try {
var chunks = this.pathMap[script].split(':');
var lib = this.libs[chunks[0]];
var dir = (lib.path || lib.scripts) + '/';
chunks.shift();
return this.cleanDoubleSlash(dir + chunks.join('/') + '.js');
} catch(e){
return script;
}
},
loadScripts: function(scripts){
scripts = scripts.filter(function(s){
if (!this.scriptsState[s] && s != 'None'){
this.scriptsState[s] = false;
return true;
}
}, this);
if (scripts.length){
scripts.each(function(scr){
this.loadScript(scr);
}, this);
} else {
this.check();
}
},
toLoad: [],
loadScript: function(script){
if (this.scriptsState[script] && this.toLoad.length){
this.loadScript(this.toLoad.shift());
return;
} else if (this.loading){
this.toLoad.push(script);
return;
}
var finish = function(){
this.loading = false;
this.scriptLoaded(script);
if (this.toLoad.length) this.loadScript(this.toLoad.shift());
}.bind(this);
var error = function(){
this.log('could not load: ', scriptPath);
}.bind(this);
this.loading = true;
var scriptPath = this.getPath(script);
if (this.options.useScriptInjection){
this.log('injecting script: ', scriptPath);
var loaded = function(){
this.log('loaded script: ', scriptPath);
finish();
}.bind(this);
new Element('script', {
src: scriptPath + (this.options.noCache ? '?noCache=' + new Date().getTime() : ''),
events: {
load: loaded,
readystatechange: function(){
if (['loaded', 'complete'].contains(this.readyState)) loaded();
},
error: error
}
}).inject(this.options.target || document.head);
} else {
this.log('requesting script: ', scriptPath);
new Request({
url: scriptPath,
noCache: this.options.noCache,
onComplete: function(js){
this.log('loaded script: ', scriptPath);
$exec(js);
finish();
}.bind(this),
onFailure: error,
onException: error
}).send();
}
},
scriptsState: $H(),
getLoadedScripts: function(){
return this.scriptsState.filter(function(state){
return state;
});
},
scriptLoaded: function(script){
this.log('loaded script: ', script);
this.scriptsState[script] = true;
this.check();
var loaded = this.getLoadedScripts();
var loadedLength = loaded.getLength();
var toLoad = this.scriptsState.getLength();
this.fireEvent('scriptLoaded', {
script: script,
totalLoaded: (loadedLength / toLoad * 100).round(),
currentLoaded: ((loadedLength - this.lastLoaded) / (toLoad - this.lastLoaded) * 100).round(),
loaded: loaded
});
if (loadedLength == toLoad) this.lastLoaded = loadedLength;
},
lastLoaded: 0,
check: function(){
var incomplete = [];
this.required.each(function(required){
var loaded = [];
required.scripts.each(function(script){
if (this.scriptsState[script]) loaded.push(script);
}, this);
if (required.onStep){
required.onStep({
percent: loaded.length / required.scripts.length * 100,
scripts: loaded
});
};
if (required.scripts.length != loaded.length) return;
required.callback();
this.required.erase(required);
this.fireEvent('requirementLoaded', [loaded, required]);
}, this);
}
};
$extend(Depender, new Events);
$extend(Depender, new Options);
$extend(Depender, new Log);
Depender._setOptions = Depender.setOptions;
Depender.setOptions = function(){
Depender._setOptions.apply(Depender, arguments);
if (this.options.log) Depender.enableLog();
return this;
};
/*
---
script: Class.Refactor.js
description: Extends a class onto itself with new property, preserving any items attached to the class's namespace.
license: MIT-style license
authors:
- Aaron Newton
requires:
- core:1.2.4/Class
- /MooTools.More
provides: [Class.refactor]
...
*/
Class.refactor = function(original, refactors){
$each(refactors, function(item, name){
var origin = original.prototype[name];
if (origin && (origin = origin._origin) && typeof item == 'function') original.implement(name, function(){
var old = this.previous;
this.previous = origin;
var value = item.apply(this, arguments);
this.previous = old;
return value;
}); else original.implement(name, item);
});
return original;
};
/*
---
script: Class.Binds.js
description: Automagically binds specified methods in a class to the instance of the class.
license: MIT-style license
authors:
- Aaron Newton
requires:
- core:1.2.4/Class
- /MooTools.More
provides: [Class.Binds]
...
*/
Class.Mutators.Binds = function(binds){
return binds;
};
Class.Mutators.initialize = function(initialize){
return function(){
$splat(this.Binds).each(function(name){
var original = this[name];
if (original) this[name] = original.bind(this);
}, this);
return initialize.apply(this, arguments);
};
};
/*
---
script: Class.Occlude.js
description: Prevents a class from being applied to a DOM element twice.
license: MIT-style license.
authors:
- Aaron Newton
requires: 
- core/1.2.4/Class
- core:1.2.4/Element
- /MooTools.More
provides: [Class.Occlude]
...
*/
Class.Occlude = new Class({
occlude: function(property, element){
element = document.id(element || this.element);
var instance = element.retrieve(property || this.property);
if (instance && !$defined(this.occluded))
return this.occluded = instance;
this.occluded = false;
element.store(property || this.property, this);
return this.occluded;
}
});
/*
---
script: Chain.Wait.js
description: value, Adds a method to inject pauses between chained events.
license: MIT-style license.
authors:
- Aaron Newton
requires: 
- core:1.2.4/Chain 
- core:1.2.4/Element
- core:1.2.4/Fx
- /MooTools.More
provides: [Chain.Wait]
...
*/
(function(){
var wait = {
wait: function(duration){
return this.chain(function(){
this.callChain.delay($pick(duration, 500), this);
}.bind(this));
}
};
Chain.implement(wait);
if (window.Fx){
Fx.implement(wait);
['Css', 'Tween', 'Elements'].each(function(cls){
if (Fx[cls]) Fx[cls].implement(wait);
});
}
Element.implement({
chains: function(effects){
$splat($pick(effects, ['tween', 'morph', 'reveal'])).each(function(effect){
effect = this.get(effect);
if (!effect) return;
effect.setOptions({
link:'chain'
});
}, this);
return this;
},
pauseFx: function(duration, effect){
this.chains(effect).get($pick(effect, 'tween')).wait(duration);
return this;
}
});
})();
/*
---
script: Array.Extras.js
description: Extends the Array native object to include useful methods to work with arrays.
license: MIT-style license
authors:
- Christoph Pojer
requires:
- core:1.2.4/Array
provides: [Array.Extras]
...
*/
Array.implement({
min: function(){
return Math.min.apply(null, this);
},
max: function(){
return Math.max.apply(null, this);
},
average: function(){
return this.length ? this.sum() / this.length : 0;
},
sum: function(){
var result = 0, l = this.length;
if (l){
do {
result += this[--l];
} while (l);
}
return result;
},
unique: function(){
return [].combine(this);
},
shuffle: function(){
for (var i = this.length; i && --i;){
var temp = this[i], r = Math.floor(Math.random() * ( i + 1 ));
this[i] = this[r];
this[r] = temp;
}
return this;
}
});
/*
---
script: Date.js
description: Extends the Date native object to include methods useful in managing dates.
license: MIT-style license
authors:
- Aaron Newton
- Nicholas Barthelemy - https://svn.nbarthelemy.com/date-js/
- Harald Kirshner - mail [at] digitarald.de; http://digitarald.de
- Scott Kyle - scott [at] appden.com; http://appden.com
requires:
- core:1.2.4/Array
- core:1.2.4/String
- core:1.2.4/Number
- core:1.2.4/Lang
- core:1.2.4/Date.English.US
- /MooTools.More
provides: [Date]
...
*/
(function(){
var Date = this.Date;
if (!Date.now) Date.now = $time;
Date.Methods = {
ms: 'Milliseconds',
year: 'FullYear',
min: 'Minutes',
mo: 'Month',
sec: 'Seconds',
hr: 'Hours'
};
['Date', 'Day', 'FullYear', 'Hours', 'Milliseconds', 'Minutes', 'Month', 'Seconds', 'Time', 'TimezoneOffset',
'Week', 'Timezone', 'GMTOffset', 'DayOfYear', 'LastMonth', 'LastDayOfMonth', 'UTCDate', 'UTCDay', 'UTCFullYear',
'AMPM', 'Ordinal', 'UTCHours', 'UTCMilliseconds', 'UTCMinutes', 'UTCMonth', 'UTCSeconds'].each(function(method){
Date.Methods[method.toLowerCase()] = method;
});
var pad = function(what, length){
return new Array(length - String(what).length + 1).join('0') + what;
};
Date.implement({
set: function(prop, value){
switch ($type(prop)){
case 'object':
for (var p in prop) this.set(p, prop[p]);
break;
case 'string':
prop = prop.toLowerCase();
var m = Date.Methods;
if (m[prop]) this['set' + m[prop]](value);
}
return this;
},
get: function(prop){
prop = prop.toLowerCase();
var m = Date.Methods;
if (m[prop]) return this['get' + m[prop]]();
return null;
},
clone: function(){
return new Date(this.get('time'));
},
increment: function(interval, times){
interval = interval || 'day';
times = $pick(times, 1);
switch (interval){
case 'year':
return this.increment('month', times * 12);
case 'month':
var d = this.get('date');
this.set('date', 1).set('mo', this.get('mo') + times);
return this.set('date', d.min(this.get('lastdayofmonth')));
case 'week':
return this.increment('day', times * 7);
case 'day':
return this.set('date', this.get('date') + times);
}
if (!Date.units[interval]) throw new Error(interval + ' is not a supported interval');
return this.set('time', this.get('time') + times * Date.units[interval]());
},
decrement: function(interval, times){
return this.increment(interval, -1 * $pick(times, 1));
},
isLeapYear: function(){
return Date.isLeapYear(this.get('year'));
},
clearTime: function(){
return this.set({hr: 0, min: 0, sec: 0, ms: 0});
},
diff: function(date, resolution){
if ($type(date) == 'string') date = Date.parse(date);
return ((date - this) / Date.units[resolution || 'day'](3, 3)).toInt(); // non-leap year, 30-day month
},
getLastDayOfMonth: function(){
return Date.daysInMonth(this.get('mo'), this.get('year'));
},
getDayOfYear: function(){
return (Date.UTC(this.get('year'), this.get('mo'), this.get('date') + 1) 
- Date.UTC(this.get('year'), 0, 1)) / Date.units.day();
},
getWeek: function(){
return (this.get('dayofyear') / 7).ceil();
},
getOrdinal: function(day){
return Date.getMsg('ordinal', day || this.get('date'));
},
getTimezone: function(){
return this.toString()
.replace(/^.*? ([A-Z]{3}).[0-9]{4}.*$/, '$1')
.replace(/^.*?\(([A-Z])[a-z]+ ([A-Z])[a-z]+ ([A-Z])[a-z]+\)$/, '$1$2$3');
},
getGMTOffset: function(){
var off = this.get('timezoneOffset');
return ((off > 0) ? '-' : '+') + pad((off.abs() / 60).floor(), 2) + pad(off % 60, 2);
},
setAMPM: function(ampm){
ampm = ampm.toUpperCase();
var hr = this.get('hr');
if (hr > 11 && ampm == 'AM') return this.decrement('hour', 12);
else if (hr < 12 && ampm == 'PM') return this.increment('hour', 12);
return this;
},
getAMPM: function(){
return (this.get('hr') < 12) ? 'AM' : 'PM';
},
parse: function(str){
this.set('time', Date.parse(str));
return this;
},
isValid: function(date) {
return !!(date || this).valueOf();
},
format: function(f){
if (!this.isValid()) return 'invalid date';
f = f || '%x %X';
f = formats[f.toLowerCase()] || f; // replace short-hand with actual format
var d = this;
return f.replace(/%([a-z%])/gi,
function($0, $1){
switch ($1){
case 'a': return Date.getMsg('days')[d.get('day')].substr(0, 3);
case 'A': return Date.getMsg('days')[d.get('day')];
case 'b': return Date.getMsg('months')[d.get('month')].substr(0, 3);
case 'B': return Date.getMsg('months')[d.get('month')];
case 'c': return d.toString();
case 'd': return pad(d.get('date'), 2);
case 'H': return pad(d.get('hr'), 2);
case 'I': return ((d.get('hr') % 12) || 12);
case 'j': return pad(d.get('dayofyear'), 3);
case 'm': return pad((d.get('mo') + 1), 2);
case 'M': return pad(d.get('min'), 2);
case 'o': return d.get('ordinal');
case 'p': return Date.getMsg(d.get('ampm'));
case 'S': return pad(d.get('seconds'), 2);
case 'U': return pad(d.get('week'), 2);
case 'w': return d.get('day');
case 'x': return d.format(Date.getMsg('shortDate'));
case 'X': return d.format(Date.getMsg('shortTime'));
case 'y': return d.get('year').toString().substr(2);
case 'Y': return d.get('year');
case 'T': return d.get('GMTOffset');
case 'Z': return d.get('Timezone');
}
return $1;
}
);
},
toISOString: function(){
return this.format('iso8601');
}
});
Date.alias('toISOString', 'toJSON');
Date.alias('diff', 'compare');
Date.alias('format', 'strftime');
var formats = {
db: '%Y-%m-%d %H:%M:%S',
compact: '%Y%m%dT%H%M%S',
iso8601: '%Y-%m-%dT%H:%M:%S%T',
rfc822: '%a, %d %b %Y %H:%M:%S %Z',
'short': '%d %b %H:%M',
'long': '%B %d, %Y %H:%M'
};
var parsePatterns = [];
var nativeParse = Date.parse;
var parseWord = function(type, word, num){
var ret = -1;
var translated = Date.getMsg(type + 's');
switch ($type(word)){
case 'object':
ret = translated[word.get(type)];
break;
case 'number':
ret = translated[month - 1];
if (!ret) throw new Error('Invalid ' + type + ' index: ' + index);
break;
case 'string':
var match = translated.filter(function(name){
return this.test(name);
}, new RegExp('^' + word, 'i'));
if (!match.length)    throw new Error('Invalid ' + type + ' string');
if (match.length > 1) throw new Error('Ambiguous ' + type);
ret = match[0];
}
return (num) ? translated.indexOf(ret) : ret;
};
Date.extend({
getMsg: function(key, args) {
return MooTools.lang.get('Date', key, args);
},
units: {
ms: $lambda(1),
second: $lambda(1000),
minute: $lambda(60000),
hour: $lambda(3600000),
day: $lambda(86400000),
week: $lambda(608400000),
month: function(month, year){
var d = new Date;
return Date.daysInMonth($pick(month, d.get('mo')), $pick(year, d.get('year'))) * 86400000;
},
year: function(year){
year = year || new Date().get('year');
return Date.isLeapYear(year) ? 31622400000 : 31536000000;
}
},
daysInMonth: function(month, year){
return [31, Date.isLeapYear(year) ? 29 : 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31][month];
},
isLeapYear: function(year){
return ((year % 4 === 0) && (year % 100 !== 0)) || (year % 400 === 0);
},
parse: function(from){
var t = $type(from);
if (t == 'number') return new Date(from);
if (t != 'string') return from;
from = from.clean();
if (!from.length) return null;
var parsed;
parsePatterns.some(function(pattern){
var bits = pattern.re.exec(from);
return (bits) ? (parsed = pattern.handler(bits)) : false;
});
return parsed || new Date(nativeParse(from));
},
parseDay: function(day, num){
return parseWord('day', day, num);
},
parseMonth: function(month, num){
return parseWord('month', month, num);
},
parseUTC: function(value){
var localDate = new Date(value);
var utcSeconds = Date.UTC(
localDate.get('year'),
localDate.get('mo'),
localDate.get('date'),
localDate.get('hr'),
localDate.get('min'),
localDate.get('sec')
);
return new Date(utcSeconds);
},
orderIndex: function(unit){
return Date.getMsg('dateOrder').indexOf(unit) + 1;
},
defineFormat: function(name, format){
formats[name] = format;
},
defineFormats: function(formats){
for (var name in formats) Date.defineFormat(name, formats[name]);
},
parsePatterns: parsePatterns, // this is deprecated
defineParser: function(pattern){
parsePatterns.push((pattern.re && pattern.handler) ? pattern : build(pattern));
},
defineParsers: function(){
Array.flatten(arguments).each(Date.defineParser);
},
define2DigitYearStart: function(year){
startYear = year % 100;
startCentury = year - startYear;
}
});
var startCentury = 1900;
var startYear = 70;
var regexOf = function(type){
return new RegExp('(?:' + Date.getMsg(type).map(function(name){
return name.substr(0, 3);
}).join('|') + ')[a-z]*');
};
var replacers = function(key){
switch(key){
case 'x': // iso8601 covers yyyy-mm-dd, so just check if month is first
return ((Date.orderIndex('month') == 1) ? '%m[.-/]%d' : '%d[.-/]%m') + '([.-/]%y)?';
case 'X':
return '%H([.:]%M)?([.:]%S([.:]%s)?)? ?%p? ?%T?';
}
return null;
};
var keys = {
d: /[0-2]?[0-9]|3[01]/,
H: /[01]?[0-9]|2[0-3]/,
I: /0?[1-9]|1[0-2]/,
M: /[0-5]?\d/,
s: /\d+/,
o: /[a-z]*/,
p: /[ap]\.?m\.?/,
y: /\d{2}|\d{4}/,
Y: /\d{4}/,
T: /Z|[+-]\d{2}(?::?\d{2})?/
};
keys.m = keys.I;
keys.S = keys.M;
var currentLanguage;
var recompile = function(language){
currentLanguage = language;
keys.a = keys.A = regexOf('days');
keys.b = keys.B = regexOf('months');
parsePatterns.each(function(pattern, i){
if (pattern.format) parsePatterns[i] = build(pattern.format);
});
};
var build = function(format){
if (!currentLanguage) return {format: format};
var parsed = [];
var re = (format.source || format) // allow format to be regex
.replace(/%([a-z])/gi,
function($0, $1){
return replacers($1) || $0;
}
).replace(/\((?!\?)/g, '(?:') // make all groups non-capturing
.replace(/ (?!\?|\*)/g, ',? ') // be forgiving with spaces and commas
.replace(/%([a-z%])/gi,
function($0, $1){
var p = keys[$1];
if (!p) return $1;
parsed.push($1);
return '(' + p.source + ')';
}
).replace(/\[a-z\]/gi, '[a-z\\u00c0-\\uffff]'); // handle unicode words
return {
format: format,
re: new RegExp('^' + re + '$', 'i'),
handler: function(bits){
bits = bits.slice(1).associate(parsed);
var date = new Date().clearTime();
if ('d' in bits) handle.call(date, 'd', 1);
if ('m' in bits || 'b' in bits || 'B' in bits) handle.call(date, 'm', 1);
for (var key in bits) handle.call(date, key, bits[key]);
return date;
}
};
};
var handle = function(key, value){
if (!value) return this;
switch(key){
case 'a': case 'A': return this.set('day', Date.parseDay(value, true));
case 'b': case 'B': return this.set('mo', Date.parseMonth(value, true));
case 'd': return this.set('date', value);
case 'H': case 'I': return this.set('hr', value);
case 'm': return this.set('mo', value - 1);
case 'M': return this.set('min', value);
case 'p': return this.set('ampm', value.replace(/\./g, ''));
case 'S': return this.set('sec', value);
case 's': return this.set('ms', ('0.' + value) * 1000);
case 'w': return this.set('day', value);
case 'Y': return this.set('year', value);
case 'y':
value = +value;
if (value < 100) value += startCentury + (value < startYear ? 100 : 0);
return this.set('year', value);
case 'T':
if (value == 'Z') value = '+00';
var offset = value.match(/([+-])(\d{2}):?(\d{2})?/);
offset = (offset[1] + '1') * (offset[2] * 60 + (+offset[3] || 0)) + this.getTimezoneOffset();
return this.set('time', this - offset * 60000);
}
return this;
};
Date.defineParsers(
'%Y([-./]%m([-./]%d((T| )%X)?)?)?', // "1999-12-31", "1999-12-31 11:59pm", "1999-12-31 23:59:59", ISO8601
'%Y%m%d(T%H(%M%S?)?)?', // "19991231", "19991231T1159", compact
'%x( %X)?', // "12/31", "12.31.99", "12-31-1999", "12/31/2008 11:59 PM"
'%d%o( %b( %Y)?)?( %X)?', // "31st", "31st December", "31 Dec 1999", "31 Dec 1999 11:59pm"
'%b( %d%o)?( %Y)?( %X)?', // Same as above with month and day switched
'%Y %b( %d%o( %X)?)?', // Same as above with year coming first
'%o %b %d %X %T %Y' // "Thu Oct 22 08:11:23 +0000 2009"
);
MooTools.lang.addEvent('langChange', function(language){
if (MooTools.lang.get('Date')) recompile(language);
}).fireEvent('langChange', MooTools.lang.getCurrentLanguage());
})();
/*
---
script: Date.Extras.js
description: Extends the Date native object to include extra methods (on top of those in Date.js).
license: MIT-style license
authors:
- Aaron Newton
- Scott Kyle
requires:
- /Date
provides: [Date.Extras]
...
*/
Date.implement({
timeDiffInWords: function(relative_to){
return Date.distanceOfTimeInWords(this, relative_to || new Date);
},
timeDiff: function(to, joiner){
if (to == null) to = new Date;
var delta = ((to - this) / 1000).toInt();
if (!delta) return '0s';
var durations = {s: 60, m: 60, h: 24, d: 365, y: 0};
var duration, vals = [];
for (var step in durations){
if (!delta) break;
if ((duration = durations[step])){
vals.unshift((delta % duration) + step);
delta = (delta / duration).toInt();
} else {
vals.unshift(delta + step);
}
}
return vals.join(joiner || ':');
}
});
Date.alias('timeDiffInWords', 'timeAgoInWords');
Date.extend({
distanceOfTimeInWords: function(from, to){
return Date.getTimePhrase(((to - from) / 1000).toInt());
},
getTimePhrase: function(delta){
var suffix = (delta < 0) ? 'Until' : 'Ago';
if (delta < 0) delta *= -1;
var units = {
minute: 60,
hour: 60,
day: 24,
week: 7,
month: 52 / 12,
year: 12,
eon: Infinity
};
var msg = 'lessThanMinute';
for (var unit in units){
var interval = units[unit];
if (delta < 1.5 * interval){
if (delta > 0.75 * interval) msg = unit;
break;
}
delta /= interval;
msg = unit + 's';
}
return Date.getMsg(msg + suffix).substitute({delta: delta.round()});
}
});
Date.defineParsers(
{
// "today", "tomorrow", "yesterday"
re: /^(?:tod|tom|yes)/i,
handler: function(bits){
var d = new Date().clearTime();
switch(bits[0]){
case 'tom': return d.increment();
case 'yes': return d.decrement();
default: 	return d;
}
}
},
{
// "next Wednesday", "last Thursday"
re: /^(next|last) ([a-z]+)$/i,
handler: function(bits){
var d = new Date().clearTime();
var day = d.getDay();
var newDay = Date.parseDay(bits[2], true);
var addDays = newDay - day;
if (newDay <= day) addDays += 7;
if (bits[1] == 'last') addDays -= 7;
return d.set('date', d.getDate() + addDays);
}
}
);
/*
---
script: Hash.Extras.js
description: Extends the Hash native object to include getFromPath which allows a path notation to child elements.
license: MIT-style license
authors:
- Aaron Newton
requires:
- core:1.2.4/Hash.base
- /MooTools.More
provides: [Hash.Extras]
...
*/
Hash.implement({
getFromPath: function(notation){
var source = this.getClean();
notation.replace(/\[([^\]]+)\]|\.([^.[]+)|[^[.]+/g, function(match){
if (!source) return null;
var prop = arguments[2] || arguments[1] || arguments[0];
source = (prop in source) ? source[prop] : null;
return match;
});
return source;
},
cleanValues: function(method){
method = method || $defined;
this.each(function(v, k){
if (!method(v)) this.erase(k);
}, this);
return this;
},
run: function(){
var args = arguments;
this.each(function(v, k){
if ($type(v) == 'function') v.run(args);
});
}
});
/*
---
script: String.Extras.js
description: Extends the String native object to include methods useful in managing various kinds of strings (query strings, urls, html, etc).
license: MIT-style license
authors:
- Aaron Newton
- Guillermo Rauch
requires:
- core:1.2.4/String
- core:1.2.4/$util
- core:1.2.4/Array
provides: [String.Extras]
...
*/
(function(){
var special = ['Ãƒâ‚¬','Ãƒ ','ÃƒÂ�','ÃƒÂ¡','Ãƒâ€š','ÃƒÂ¢','ÃƒÆ’','ÃƒÂ£','Ãƒâ€ž','ÃƒÂ¤','Ãƒâ€¦','ÃƒÂ¥','Ã„â€š','Ã„Æ’','Ã„â€ž','Ã„â€¦','Ã„â€ ','Ã„â€¡','Ã„Å’','Ã„Â�','Ãƒâ€¡','ÃƒÂ§', 'Ã„Å½','Ã„Â�','Ã„Â�','Ã„â€˜', 'ÃƒË†','ÃƒÂ¨','Ãƒâ€°','ÃƒÂ©','ÃƒÅ ','ÃƒÂª','Ãƒâ€¹','ÃƒÂ«','Ã„Å¡','Ã„â€º','Ã„Ëœ','Ã„â„¢', 'Ã„Å¾','Ã„Å¸','ÃƒÅ’','ÃƒÂ¬','ÃƒÂ�','ÃƒÂ­','ÃƒÅ½','ÃƒÂ®','ÃƒÂ�','ÃƒÂ¯', 'Ã„Â¹','Ã„Âº','Ã„Â½','Ã„Â¾','Ã…Â�','Ã…â€š', 'Ãƒâ€˜','ÃƒÂ±','Ã…â€¡','Ã…Ë†','Ã…Æ’','Ã…â€ž','Ãƒâ€™','ÃƒÂ²','Ãƒâ€œ','ÃƒÂ³','Ãƒâ€�','ÃƒÂ´','Ãƒâ€¢','ÃƒÂµ','Ãƒâ€“','ÃƒÂ¶','ÃƒËœ','ÃƒÂ¸','Ã…â€˜','Ã…Ëœ','Ã…â„¢','Ã…â€�','Ã…â€¢','Ã… ','Ã…Â¡','Ã…Å¾','Ã…Å¸','Ã…Å¡','Ã…â€º', 'Ã…Â¤','Ã…Â¥','Ã…Â¤','Ã…Â¥','Ã…Â¢','Ã…Â£','Ãƒâ„¢','ÃƒÂ¹','ÃƒÅ¡','ÃƒÂº','Ãƒâ€º','ÃƒÂ»','ÃƒÅ“','ÃƒÂ¼','Ã…Â®','Ã…Â¯', 'Ã…Â¸','ÃƒÂ¿','ÃƒÂ½','ÃƒÂ�','Ã…Â½','Ã…Â¾','Ã…Â¹','Ã…Âº','Ã…Â»','Ã…Â¼', 'ÃƒÅ¾','ÃƒÂ¾','ÃƒÂ�','ÃƒÂ°','ÃƒÅ¸','Ã…â€™','Ã…â€œ','Ãƒâ€ ','ÃƒÂ¦','Ã‚Âµ'];
var standard = ['A','a','A','a','A','a','A','a','Ae','ae','A','a','A','a','A','a','C','c','C','c','C','c','D','d','D','d', 'E','e','E','e','E','e','E','e','E','e','E','e','G','g','I','i','I','i','I','i','I','i','L','l','L','l','L','l', 'N','n','N','n','N','n', 'O','o','O','o','O','o','O','o','Oe','oe','O','o','o', 'R','r','R','r', 'S','s','S','s','S','s','T','t','T','t','T','t', 'U','u','U','u','U','u','Ue','ue','U','u','Y','y','Y','y','Z','z','Z','z','Z','z','TH','th','DH','dh','ss','OE','oe','AE','ae','u'];
var tidymap = {
"[\xa0\u2002\u2003\u2009]": " ",
"\xb7": "*",
"[\u2018\u2019]": "'",
"[\u201c\u201d]": '"',
"\u2026": "...",
"\u2013": "-",
"\u2014": "--",
"\uFFFD": "&raquo;"
};
var getRegForTag = function(tag, contents) {
tag = tag || '';
var regstr = contents ? "<" + tag + "[^>]*>([\\s\\S]*?)<\/" + tag + ">" : "<\/?" + tag + "([^>]+)?>";
reg = new RegExp(regstr, "gi");
return reg;
};
String.implement({
standardize: function(){
var text = this;
special.each(function(ch, i){
text = text.replace(new RegExp(ch, 'g'), standard[i]);
});
return text;
},
repeat: function(times){
return new Array(times + 1).join(this);
},
pad: function(length, str, dir){
if (this.length >= length) return this;
var pad = (str == null ? ' ' : '' + str).repeat(length - this.length).substr(0, length - this.length);
if (!dir || dir == 'right') return this + pad;
if (dir == 'left') return pad + this;
return pad.substr(0, (pad.length / 2).floor()) + this + pad.substr(0, (pad.length / 2).ceil());
},
getTags: function(tag, contents){
return this.match(getRegForTag(tag, contents)) || [];
},
stripTags: function(tag, contents){
return this.replace(getRegForTag(tag, contents), '');
},
tidy: function(){
var txt = this.toString();
$each(tidymap, function(value, key){
txt = txt.replace(new RegExp(key, 'g'), value);
});
return txt;
}
});
})();
/*
---
script: String.QueryString.js
description: Methods for dealing with URI query strings.
license: MIT-style license
authors:
- Sebastian MarkbÃƒÂ¥ge, Aaron Newton, Lennart Pilon, Valerio Proietti
requires:
- core:1.2.4/Array
- core:1.2.4/String
- /MooTools.More
provides: [String.QueryString]
...
*/
String.implement({
parseQueryString: function(){
var vars = this.split(/[&;]/), res = {};
if (vars.length) vars.each(function(val){
var index = val.indexOf('='),
keys = index < 0 ? [''] : val.substr(0, index).match(/[^\]\[]+/g),
value = decodeURIComponent(val.substr(index + 1)),
obj = res;
keys.each(function(key, i){
var current = obj[key];
if(i < keys.length - 1)
obj = obj[key] = current || {};
else if($type(current) == 'array')
current.push(value);
else
obj[key] = $defined(current) ? [current, value] : value;
});
});
return res;
},
cleanQueryString: function(method){
return this.split('&').filter(function(val){
var index = val.indexOf('='),
key = index < 0 ? '' : val.substr(0, index),
value = val.substr(index + 1);
return method ? method.run([key, value]) : $chk(value);
}).join('&');
}
});
/*
---
script: URI.js
description: Provides methods useful in managing the window location and uris.
license: MIT-style license
authors:
- Sebastian MarkbÃ¥ge
- Aaron Newton
requires:
- core:1.2.4/Selectors
- /String.QueryString
provides: URI
...
*/
var URI = new Class({
Implements: Options,
options: {
/*base: false*/
},
regex: /^(?:(\w+):)?(?:\/\/(?:(?:([^:@\/]*):?([^:@\/]*))?@)?([^:\/?#]*)(?::(\d*))?)?(\.\.?$|(?:[^?#\/]*\/)*)([^?#]*)(?:\?([^#]*))?(?:#(.*))?/,
parts: ['scheme', 'user', 'password', 'host', 'port', 'directory', 'file', 'query', 'fragment'],
schemes: {http: 80, https: 443, ftp: 21, rtsp: 554, mms: 1755, file: 0},
initialize: function(uri, options){
this.setOptions(options);
var base = this.options.base || URI.base;
if(!uri) uri = base;
if (uri && uri.parsed) this.parsed = $unlink(uri.parsed);
else this.set('value', uri.href || uri.toString(), base ? new URI(base) : false);
},
parse: function(value, base){
var bits = value.match(this.regex);
if (!bits) return false;
bits.shift();
return this.merge(bits.associate(this.parts), base);
},
merge: function(bits, base){
if ((!bits || !bits.scheme) && (!base || !base.scheme)) return false;
if (base){
this.parts.every(function(part){
if (bits[part]) return false;
bits[part] = base[part] || '';
return true;
});
}
bits.port = bits.port || this.schemes[bits.scheme.toLowerCase()];
bits.directory = bits.directory ? this.parseDirectory(bits.directory, base ? base.directory : '') : '/';
return bits;
},
parseDirectory: function(directory, baseDirectory) {
directory = (directory.substr(0, 1) == '/' ? '' : (baseDirectory || '/')) + directory;
if (!directory.test(URI.regs.directoryDot)) return directory;
var result = [];
directory.replace(URI.regs.endSlash, '').split('/').each(function(dir){
if (dir == '..' && result.length > 0) result.pop();
else if (dir != '.') result.push(dir);
});
return result.join('/') + '/';
},
combine: function(bits){
return bits.value || bits.scheme + '://' +
(bits.user ? bits.user + (bits.password ? ':' + bits.password : '') + '@' : '') +
(bits.host || '') + (bits.port && bits.port != this.schemes[bits.scheme] ? ':' + bits.port : '') +
(bits.directory || '/') + (bits.file || '') +
(bits.query ? '?' + bits.query : '') +
(bits.fragment ? '#' + bits.fragment : '');
},
set: function(part, value, base){
if (part == 'value'){
var scheme = value.match(URI.regs.scheme);
if (scheme) scheme = scheme[1];
if (scheme && !$defined(this.schemes[scheme.toLowerCase()])) this.parsed = { scheme: scheme, value: value };
else this.parsed = this.parse(value, (base || this).parsed) || (scheme ? { scheme: scheme, value: value } : { value: value });
} else if (part == 'data') {
this.setData(value);
} else {
this.parsed[part] = value;
}
return this;
},
get: function(part, base){
switch(part){
case 'value': return this.combine(this.parsed, base ? base.parsed : false);
case 'data' : return this.getData();
}
return this.parsed[part] || '';
},
go: function(){
document.location.href = this.toString();
},
toURI: function(){
return this;
},
getData: function(key, part){
var qs = this.get(part || 'query');
if (!$chk(qs)) return key ? null : {};
var obj = qs.parseQueryString();
return key ? obj[key] : obj;
},
setData: function(values, merge, part){
if (typeof values == 'string'){
data = this.getData();
data[arguments[0]] = arguments[1];
values = data;
} else if (merge) {
values = $merge(this.getData(), values);
}
return this.set(part || 'query', Hash.toQueryString(values));
},
clearData: function(part){
return this.set(part || 'query', '');
}
});
URI.prototype.toString = URI.prototype.valueOf = function(){
return this.get('value');
};
URI.regs = {
endSlash: /\/$/,
scheme: /^(\w+):/,
directoryDot: /\.\/|\.$/
};
URI.base = new URI(document.getElements('base[href]', true).getLast(), {base: document.location});
String.implement({
toURI: function(options){
return new URI(this, options);
}
});
/*
---
script: URI.Relative.js
description: Extends the URI class to add methods for computing relative and absolute urls.
license: MIT-style license
authors:
- Sebastian MarkbÃƒÂ¥ge
requires:
- /Class.refactor
- /URI
provides: [URI.Relative]
...
*/
URI = Class.refactor(URI, {
combine: function(bits, base){
if (!base || bits.scheme != base.scheme || bits.host != base.host || bits.port != base.port)
return this.previous.apply(this, arguments);
var end = bits.file + (bits.query ? '?' + bits.query : '') + (bits.fragment ? '#' + bits.fragment : '');
if (!base.directory) return (bits.directory || (bits.file ? '' : './')) + end;
var baseDir = base.directory.split('/'),
relDir = bits.directory.split('/'),
path = '',
offset;
var i = 0;
for(offset = 0; offset < baseDir.length && offset < relDir.length && baseDir[offset] == relDir[offset]; offset++);
for(i = 0; i < baseDir.length - offset - 1; i++) path += '../';
for(i = offset; i < relDir.length - 1; i++) path += relDir[i] + '/';
return (path || (bits.file ? '' : './')) + end;
},
toAbsolute: function(base){
base = new URI(base);
if (base) base.set('directory', '').set('file', '');
return this.toRelative(base);
},
toRelative: function(base){
return this.get('value', new URI(base));
}
});
/*
---
script: Elements.From.js
description: Returns a collection of elements from a string of html.
license: MIT-style license
authors:
- Aaron Newton
requires:
- core:1.2.4/Element
- /MooTools.More
provides: [Elements.from]
...
*/
Elements.from = function(text, excludeScripts){
if ($pick(excludeScripts, true)) text = text.stripScripts();
var container, match = text.match(/^\s*<(t[dhr]|tbody|tfoot|thead)/i);
if (match){
container = new Element('table');
var tag = match[1].toLowerCase();
if (['td', 'th', 'tr'].contains(tag)){
container = new Element('tbody').inject(container);
if (tag != 'tr') container = new Element('tr').inject(container);
}
}
return (container || new Element('div')).set('html', text).getChildren();
};
/*
---
script: Element.Delegation.js
description: Extends the Element native object to include the delegate method for more efficient event management.
credits:
- "Event checking based on the work of Daniel Steigerwald. License: MIT-style license.	Copyright: Copyright (c) 2008 Daniel Steigerwald, daniel.steigerwald.cz"
license: MIT-style license
authors:
- Aaron Newton
- Daniel Steigerwald
requires:
- core:1.2.4/Element.Event
- core:1.2.4/Selectors
- /MooTools.More
provides: [Element.Delegation]
...
*/
(function(addEvent, removeEvent){
var match = /(.*?):relay\(([^)]+)\)$/,
combinators = /[+>~\s]/,
splitType = function(type){
var bits = type.match(match);
return !bits ? {event: type} : {
event: bits[1],
selector: bits[2]
};
},
check = function(e, selector){
var t = e.target;
if (combinators.test(selector = selector.trim())){
var els = this.getElements(selector);
for (var i = els.length; i--; ){
var el = els[i];
if (t == el || el.hasChild(t)) return el;
}
} else {
for ( ; t && t != this; t = t.parentNode){
if (Element.match(t, selector)) return document.id(t);
}
}
return null;
};
Element.implement({
addEvent: function(type, fn){
var splitted = splitType(type);
if (splitted.selector){
var monitors = this.retrieve('$moo:delegateMonitors', {});
if (!monitors[type]){
var monitor = function(e){
var el = check.call(this, e, splitted.selector);
if (el) this.fireEvent(type, [e, el], 0, el);
}.bind(this);
monitors[type] = monitor;
addEvent.call(this, splitted.event, monitor);
}
}
return addEvent.apply(this, arguments);
},
removeEvent: function(type, fn){
var splitted = splitType(type);
if (splitted.selector){
var events = this.retrieve('events');
if (!events || !events[type] || (fn && !events[type].keys.contains(fn))) return this;
if (fn) removeEvent.apply(this, [type, fn]);
else removeEvent.apply(this, type);
events = this.retrieve('events');
if (events && events[type] && events[type].keys.length == 0){
var monitors = this.retrieve('$moo:delegateMonitors', {});
removeEvent.apply(this, [splitted.event, monitors[type]]);
delete monitors[type];
}
return this;
}
return removeEvent.apply(this, arguments);
},
fireEvent: function(type, args, delay, bind){
var events = this.retrieve('events');
if (!events || !events[type]) return this;
events[type].keys.each(function(fn){
fn.create({bind: bind || this, delay: delay, arguments: args})();
}, this);
return this;
}
});
})(Element.prototype.addEvent, Element.prototype.removeEvent);
/*
---
script: Element.Measure.js
description: Extends the Element native object to include methods useful in measuring dimensions.
credits: "Element.measure / .expose methods by Daniel Steigerwald License: MIT-style license. Copyright: Copyright (c) 2008 Daniel Steigerwald, daniel.steigerwald.cz"
license: MIT-style license
authors:
- Aaron Newton
requires:
- core:1.2.4/Element.Style
- core:1.2.4/Element.Dimensions
- /MooTools.More
provides: [Element.Measure]
...
*/
Element.implement({
measure: function(fn){
var vis = function(el) {
return !!(!el || el.offsetHeight || el.offsetWidth);
};
if (vis(this)) return fn.apply(this);
var parent = this.getParent(),
restorers = [],
toMeasure = []; 
while (!vis(parent) && parent != document.body) {
toMeasure.push(parent.expose());
parent = parent.getParent();
}
var restore = this.expose();
var result = fn.apply(this);
restore();
toMeasure.each(function(restore){
restore();
});
return result;
},
expose: function(){
if (this.getStyle('display') != 'none') return $empty;
var before = this.style.cssText;
this.setStyles({
display: 'block',
position: 'absolute',
visibility: 'hidden'
});
return function(){
this.style.cssText = before;
}.bind(this);
},
getDimensions: function(options){
options = $merge({computeSize: false},options);
var dim = {};
var getSize = function(el, options){
return (options.computeSize)?el.getComputedSize(options):el.getSize();
};
var parent = this.getParent('body');
if (parent && this.getStyle('display') == 'none'){
dim = this.measure(function(){
return getSize(this, options);
});
} else if (parent){
try { //safari sometimes crashes here, so catch it
dim = getSize(this, options);
}catch(e){}
} else {
dim = {x: 0, y: 0};
}
return $chk(dim.x) ? $extend(dim, {width: dim.x, height: dim.y}) : $extend(dim, {x: dim.width, y: dim.height});
},
getComputedSize: function(options){
options = $merge({
styles: ['padding','border'],
plains: {
height: ['top','bottom'],
width: ['left','right']
},
mode: 'both'
}, options);
var size = {width: 0,height: 0};
switch (options.mode){
case 'vertical':
delete size.width;
delete options.plains.width;
break;
case 'horizontal':
delete size.height;
delete options.plains.height;
break;
}
var getStyles = [];
//this function might be useful in other places; perhaps it should be outside this function?
$each(options.plains, function(plain, key){
plain.each(function(edge){
options.styles.each(function(style){
getStyles.push((style == 'border') ? style + '-' + edge + '-' + 'width' : style + '-' + edge);
});
});
});
var styles = {};
getStyles.each(function(style){ styles[style] = this.getComputedStyle(style); }, this);
var subtracted = [];
$each(options.plains, function(plain, key){ //keys: width, height, plains: ['left', 'right'], ['top','bottom']
var capitalized = key.capitalize();
size['total' + capitalized] = size['computed' + capitalized] = 0;
plain.each(function(edge){ //top, left, right, bottom
size['computed' + edge.capitalize()] = 0;
getStyles.each(function(style, i){ //padding, border, etc.
//'padding-left'.test('left') size['totalWidth'] = size['width'] + [padding-left]
if (style.test(edge)){
styles[style] = styles[style].toInt() || 0; //styles['padding-left'] = 5;
size['total' + capitalized] = size['total' + capitalized] + styles[style];
size['computed' + edge.capitalize()] = size['computed' + edge.capitalize()] + styles[style];
}
//if width != width (so, padding-left, for instance), then subtract that from the total
if (style.test(edge) && key != style &&
(style.test('border') || style.test('padding')) && !subtracted.contains(style)){
subtracted.push(style);
size['computed' + capitalized] = size['computed' + capitalized]-styles[style];
}
});
});
});
['Width', 'Height'].each(function(value){
var lower = value.toLowerCase();
if(!$chk(size[lower])) return;
size[lower] = size[lower] + this['offset' + value] + size['computed' + value];
size['total' + value] = size[lower] + size['total' + value];
delete size['computed' + value];
}, this);
return $extend(styles, size);
}
});
/*
---
script: Element.Pin.js
description: Extends the Element native object to include the pin method useful for fixed positioning for elements.
license: MIT-style license
authors:
- Aaron Newton
requires:
- core:1.2.4/Element.Event
- core:1.2.4/Element.Dimensions
- core:1.2.4/Element.Style
- /MooTools.More
provides: [Element.Pin]
...
*/
(function(){
var supportsPositionFixed = false;
window.addEvent('domready', function(){
var test = new Element('div').setStyles({
position: 'fixed',
top: 0,
right: 0
}).inject(document.body);
supportsPositionFixed = (test.offsetTop === 0);
test.dispose();
});
Element.implement({
pin: function(enable){
if (this.getStyle('display') == 'none') return null;
var p,
scroll = window.getScroll();
if (enable !== false){
p = this.getPosition();
if (!this.retrieve('pinned')){
var pos = {
top: p.y - scroll.y,
left: p.x - scroll.x
};
if (supportsPositionFixed){
this.setStyle('position', 'fixed').setStyles(pos);
} else {
this.store('pinnedByJS', true);
this.setStyles({
position: 'absolute',
top: p.y,
left: p.x
}).addClass('isPinned');
this.store('scrollFixer', (function(){
if (this.retrieve('pinned'))
var scroll = window.getScroll();
this.setStyles({
top: pos.top.toInt() + scroll.y,
left: pos.left.toInt() + scroll.x
});
}).bind(this));
window.addEvent('scroll', this.retrieve('scrollFixer'));
}
this.store('pinned', true);
}
} else {
var op;
if (!Browser.Engine.trident){
var parent = this.getParent();
op = (parent.getComputedStyle('position') != 'static' ? parent : parent.getOffsetParent());
}
p = this.getPosition(op);
this.store('pinned', false);
var reposition;
if (supportsPositionFixed && !this.retrieve('pinnedByJS')){
reposition = {
top: p.y + scroll.y,
left: p.x + scroll.x
};
} else {
this.store('pinnedByJS', false);
window.removeEvent('scroll', this.retrieve('scrollFixer'));
reposition = {
top: p.y,
left: p.x
};
}
this.setStyles($merge(reposition, {position: 'absolute'})).removeClass('isPinned');
}
return this;
},
unpin: function(){
return this.pin(false);
},
togglepin: function(){
this.pin(!this.retrieve('pinned'));
}
});
})();
/*
---
script: Element.Position.js
description: Extends the Element native object to include methods useful positioning elements relative to others.
license: MIT-style license
authors:
- Aaron Newton
requires:
- core:1.2.4/Element.Dimensions
- /Element.Measure
provides: [Elements.Position]
...
*/
(function(){
var original = Element.prototype.position;
Element.implement({
position: function(options){
//call original position if the options are x/y values
if (options && ($defined(options.x) || $defined(options.y))) return original ? original.apply(this, arguments) : this;
$each(options||{}, function(v, k){ if (!$defined(v)) delete options[k]; });
options = $merge({
// minimum: { x: 0, y: 0 },
// maximum: { x: 0, y: 0},
relativeTo: document.body,
position: {
x: 'center', //left, center, right
y: 'center' //top, center, bottom
},
edge: false,
offset: {x: 0, y: 0},
returnPos: false,
relFixedPosition: false,
ignoreMargins: false,
ignoreScroll: false,
allowNegative: false
}, options);
//compute the offset of the parent positioned element if this element is in one
var parentOffset = {x: 0, y: 0}, 
parentPositioned = false;
/* dollar around getOffsetParent should not be necessary, but as it does not return
* a mootools extended element in IE, an error occurs on the call to expose. See:
* http://mootools.lighthouseapp.com/projects/2706/tickets/333-element-getoffsetparent-inconsistency-between-ie-and-other-browsers */
var offsetParent = this.measure(function(){
return document.id(this.getOffsetParent());
});
if (offsetParent && offsetParent != this.getDocument().body){
parentOffset = offsetParent.measure(function(){
return this.getPosition();
});
parentPositioned = offsetParent != document.id(options.relativeTo);
options.offset.x = options.offset.x - parentOffset.x;
options.offset.y = options.offset.y - parentOffset.y;
}
//upperRight, bottomRight, centerRight, upperLeft, bottomLeft, centerLeft
//topRight, topLeft, centerTop, centerBottom, center
var fixValue = function(option){
if ($type(option) != 'string') return option;
option = option.toLowerCase();
var val = {};
if (option.test('left')) val.x = 'left';
else if (option.test('right')) val.x = 'right';
else val.x = 'center';
if (option.test('upper') || option.test('top')) val.y = 'top';
else if (option.test('bottom')) val.y = 'bottom';
else val.y = 'center';
return val;
};
options.edge = fixValue(options.edge);
options.position = fixValue(options.position);
if (!options.edge){
if (options.position.x == 'center' && options.position.y == 'center') options.edge = {x:'center', y:'center'};
else options.edge = {x:'left', y:'top'};
}
this.setStyle('position', 'absolute');
var rel = document.id(options.relativeTo) || document.body,
calc = rel == document.body ? window.getScroll() : rel.getPosition(),
top = calc.y, left = calc.x;
var dim = this.getDimensions({computeSize: true, styles:['padding', 'border','margin']});
var pos = {},
prefY = options.offset.y,
prefX = options.offset.x,
winSize = window.getSize();
switch(options.position.x){
case 'left':
pos.x = left + prefX;
break;
case 'right':
pos.x = left + prefX + rel.offsetWidth;
break;
default: //center
pos.x = left + ((rel == document.body ? winSize.x : rel.offsetWidth)/2) + prefX;
break;
}
switch(options.position.y){
case 'top':
pos.y = top + prefY;
break;
case 'bottom':
pos.y = top + prefY + rel.offsetHeight;
break;
default: //center
pos.y = top + ((rel == document.body ? winSize.y : rel.offsetHeight)/2) + prefY;
break;
}
if (options.edge){
var edgeOffset = {};
switch(options.edge.x){
case 'left':
edgeOffset.x = 0;
break;
case 'right':
edgeOffset.x = -dim.x-dim.computedRight-dim.computedLeft;
break;
default: //center
edgeOffset.x = -(dim.totalWidth/2);
break;
}
switch(options.edge.y){
case 'top':
edgeOffset.y = 0;
break;
case 'bottom':
edgeOffset.y = -dim.y-dim.computedTop-dim.computedBottom;
break;
default: //center
edgeOffset.y = -(dim.totalHeight/2);
break;
}
pos.x += edgeOffset.x;
pos.y += edgeOffset.y;
}
pos = {
left: ((pos.x >= 0 || parentPositioned || options.allowNegative) ? pos.x : 0).toInt(),
top: ((pos.y >= 0 || parentPositioned || options.allowNegative) ? pos.y : 0).toInt()
};
var xy = {left: 'x', top: 'y'};
['minimum', 'maximum'].each(function(minmax) {
['left', 'top'].each(function(lr) {
var val = options[minmax] ? options[minmax][xy[lr]] : null;
if (val != null && pos[lr] < val) pos[lr] = val;
});
});
if (rel.getStyle('position') == 'fixed' || options.relFixedPosition){
var winScroll = window.getScroll();
pos.top+= winScroll.y;
pos.left+= winScroll.x;
}
if (options.ignoreScroll) {
var relScroll = rel.getScroll();
pos.top-= relScroll.y;
pos.left-= relScroll.x;
}
if (options.ignoreMargins) {
pos.left += (
options.edge.x == 'right' ? dim['margin-right'] : 
options.edge.x == 'center' ? -dim['margin-left'] + ((dim['margin-right'] + dim['margin-left'])/2) : 
- dim['margin-left']
);
pos.top += (
options.edge.y == 'bottom' ? dim['margin-bottom'] : 
options.edge.y == 'center' ? -dim['margin-top'] + ((dim['margin-bottom'] + dim['margin-top'])/2) : 
- dim['margin-top']
);
}
pos.left = Math.ceil(pos.left);
pos.top = Math.ceil(pos.top);
if (options.returnPos) return pos;
else this.setStyles(pos);
return this;
}
});
})();
/*
---
script: Element.Shortcuts.js
description: Extends the Element native object to include some shortcut methods.
license: MIT-style license
authors:
- Aaron Newton
requires:
- core:1.2.4/Element.Style
- /MooTools.More
provides: [Element.Shortcuts]
...
*/
Element.implement({
isDisplayed: function(){
return this.getStyle('display') != 'none';
},
isVisible: function(){
var w = this.offsetWidth,
h = this.offsetHeight;
return (w == 0 && h == 0) ? false : (w > 0 && h > 0) ? true : this.isDisplayed();
},
toggle: function(){
return this[this.isDisplayed() ? 'hide' : 'show']();
},
hide: function(){
var d;
try {
//IE fails here if the element is not in the dom
d = this.getStyle('display');
} catch(e){}
return this.store('originalDisplay', d || '').setStyle('display', 'none');
},
show: function(display){
display = display || this.retrieve('originalDisplay') || 'block';
return this.setStyle('display', (display == 'none') ? 'block' : display);
},
swapClass: function(remove, add){
return this.removeClass(remove).addClass(add);
}
});
/*
---
script: Fx.Elements.js
description: Effect to change any number of CSS properties of any number of Elements.
license: MIT-style license
authors:
- Valerio Proietti
requires:
- core:1.2.4/Fx.CSS
- /MooTools.More
provides: [Fx.Elements]
...
*/
Fx.Elements = new Class({
Extends: Fx.CSS,
initialize: function(elements, options){
this.elements = this.subject = $$(elements);
this.parent(options);
},
compute: function(from, to, delta){
var now = {};
for (var i in from){
var iFrom = from[i], iTo = to[i], iNow = now[i] = {};
for (var p in iFrom) iNow[p] = this.parent(iFrom[p], iTo[p], delta);
}
return now;
},
set: function(now){
for (var i in now){
var iNow = now[i];
for (var p in iNow) this.render(this.elements[i], p, iNow[p], this.options.unit);
}
return this;
},
start: function(obj){
if (!this.check(obj)) return this;
var from = {}, to = {};
for (var i in obj){
var iProps = obj[i], iFrom = from[i] = {}, iTo = to[i] = {};
for (var p in iProps){
var parsed = this.prepare(this.elements[i], p, iProps[p]);
iFrom[p] = parsed.from;
iTo[p] = parsed.to;
}
}
return this.parent(from, to);
}
});
/*
---
script: Fx.Accordion.js
description: An Fx.Elements extension which allows you to easily create accordion type controls.
license: MIT-style license
authors:
- Valerio Proietti
requires:
- core:1.2.4/Element.Event
- /Fx.Elements
provides: [Fx.Accordion]
...
*/
Fx.Accordion = new Class({
Extends: Fx.Elements,
options: {/*
onActive: $empty(toggler, section),
onBackground: $empty(toggler, section),
fixedHeight: false,
fixedWidth: false,
*/
display: 0,
show: false,
height: true,
width: false,
opacity: true,
alwaysHide: false,
trigger: 'click',
initialDisplayFx: true,
returnHeightToAuto: true
},
initialize: function(){
var params = Array.link(arguments, {
'container': Element.type, //deprecated
'options': Object.type,
'togglers': $defined,
'elements': $defined
});
this.parent(params.elements, params.options);
this.togglers = $$(params.togglers);
this.previous = -1;
this.internalChain = new Chain();
if (this.options.alwaysHide) this.options.wait = true;
if ($chk(this.options.show)){
this.options.display = false;
this.previous = this.options.show;
}
if (this.options.start){
this.options.display = false;
this.options.show = false;
}
this.effects = {};
if (this.options.opacity) this.effects.opacity = 'fullOpacity';
if (this.options.width) this.effects.width = this.options.fixedWidth ? 'fullWidth' : 'offsetWidth';
if (this.options.height) this.effects.height = this.options.fixedHeight ? 'fullHeight' : 'scrollHeight';
for (var i = 0, l = this.togglers.length; i < l; i++) this.addSection(this.togglers[i], this.elements[i]);
this.elements.each(function(el, i){
if (this.options.show === i){
this.fireEvent('active', [this.togglers[i], el]);
} else {
for (var fx in this.effects) el.setStyle(fx, 0);
}
}, this);
if ($chk(this.options.display) || this.options.initialDisplayFx === false) this.display(this.options.display, this.options.initialDisplayFx);
if (this.options.fixedHeight !== false) this.options.returnHeightToAuto = false;
this.addEvent('complete', this.internalChain.callChain.bind(this.internalChain));
},
addSection: function(toggler, element){
toggler = document.id(toggler);
element = document.id(element);
var test = this.togglers.contains(toggler);
this.togglers.include(toggler);
this.elements.include(element);
var idx = this.togglers.indexOf(toggler);
var displayer = this.display.bind(this, idx);
toggler.store('accordion:display', displayer);
toggler.addEvent(this.options.trigger, displayer);
if (this.options.height) element.setStyles({'padding-top': 0, 'border-top': 'none', 'padding-bottom': 0, 'border-bottom': 'none'});
if (this.options.width) element.setStyles({'padding-left': 0, 'border-left': 'none', 'padding-right': 0, 'border-right': 'none'});
element.fullOpacity = 1;
if (this.options.fixedWidth) element.fullWidth = this.options.fixedWidth;
if (this.options.fixedHeight) element.fullHeight = this.options.fixedHeight;
element.setStyle('overflow', 'hidden');
if (!test){
for (var fx in this.effects) element.setStyle(fx, 0);
}
return this;
},
detach: function(){
this.togglers.each(function(toggler) {
toggler.removeEvent(this.options.trigger, toggler.retrieve('accordion:display'));
}, this);
},
display: function(index, useFx){
if (!this.check(index, useFx)) return this;
useFx = $pick(useFx, true);
if (this.options.returnHeightToAuto){
var prev = this.elements[this.previous];
if (prev && !this.selfHidden){
for (var fx in this.effects){
prev.setStyle(fx, prev[this.effects[fx]]);
}
}
}
index = ($type(index) == 'element') ? this.elements.indexOf(index) : index;
if ((this.timer && this.options.wait) || (index === this.previous && !this.options.alwaysHide)) return this;
this.previous = index;
var obj = {};
this.elements.each(function(el, i){
obj[i] = {};
var hide;
if (i != index){
hide = true;
} else if (this.options.alwaysHide && ((el.offsetHeight > 0 && this.options.height) || el.offsetWidth > 0 && this.options.width)){
hide = true;
this.selfHidden = true;
}
this.fireEvent(hide ? 'background' : 'active', [this.togglers[i], el]);
for (var fx in this.effects) obj[i][fx] = hide ? 0 : el[this.effects[fx]];
}, this);
this.internalChain.chain(function(){
if (this.options.returnHeightToAuto && !this.selfHidden){
var el = this.elements[index];
if (el) el.setStyle('height', 'auto');
};
}.bind(this));
return useFx ? this.start(obj) : this.set(obj);
}
});
/*
Compatibility with 1.2.0
*/
var Accordion = new Class({
Extends: Fx.Accordion,
initialize: function(){
this.parent.apply(this, arguments);
var params = Array.link(arguments, {'container': Element.type});
this.container = params.container;
},
addSection: function(toggler, element, pos){
toggler = document.id(toggler);
element = document.id(element);
var test = this.togglers.contains(toggler);
var len = this.togglers.length;
if (len && (!test || pos)){
pos = $pick(pos, len - 1);
toggler.inject(this.togglers[pos], 'before');
element.inject(toggler, 'after');
} else if (this.container && !test){
toggler.inject(this.container);
element.inject(this.container);
}
return this.parent.apply(this, arguments);
}
});
/*
---
script: Fx.Move.js
description: Defines Fx.Move, a class that works with Element.Position.js to transition an element from one location to another.
license: MIT-style license
authors:
- Aaron Newton
requires:
- core:1.2.4/Fx.Morph
- /Element.Position
provides: [Fx.Move]
...
*/
Fx.Move = new Class({
Extends: Fx.Morph,
options: {
relativeTo: document.body,
position: 'center',
edge: false,
offset: {x: 0, y: 0}
},
start: function(destination){
return this.parent(this.element.position($merge(this.options, destination, {returnPos: true})));
}
});
Element.Properties.move = {
set: function(options){
var morph = this.retrieve('move');
if (morph) morph.cancel();
return this.eliminate('move').store('move:options', $extend({link: 'cancel'}, options));
},
get: function(options){
if (options || !this.retrieve('move')){
if (options || !this.retrieve('move:options')) this.set('move', options);
this.store('move', new Fx.Move(this, this.retrieve('move:options')));
}
return this.retrieve('move');
}
};
Element.implement({
move: function(options){
this.get('move').start(options);
return this;
}
});
/*
---
script: Fx.Reveal.js
description: Defines Fx.Reveal, a class that shows and hides elements with a transition.
license: MIT-style license
authors:
- Aaron Newton
requires:
- core:1.2.4/Fx.Morph
- /Element.Shortcuts
- /Element.Measure
provides: [Fx.Reveal]
...
*/
Fx.Reveal = new Class({
Extends: Fx.Morph,
options: {/*	  
onShow: $empty(thisElement),
onHide: $empty(thisElement),
onComplete: $empty(thisElement),
heightOverride: null,
widthOverride: null, */
link: 'cancel',
styles: ['padding', 'border', 'margin'],
transitionOpacity: !Browser.Engine.trident4,
mode: 'vertical',
display: 'block',
hideInputs: Browser.Engine.trident ? 'select, input, textarea, object, embed' : false
},
dissolve: function(){
try {
if (!this.hiding && !this.showing){
if (this.element.getStyle('display') != 'none'){
this.hiding = true;
this.showing = false;
this.hidden = true;
this.cssText = this.element.style.cssText;
var startStyles = this.element.getComputedSize({
styles: this.options.styles,
mode: this.options.mode
});
this.element.setStyle('display', this.options.display);
if (this.options.transitionOpacity) startStyles.opacity = 1;
var zero = {};
$each(startStyles, function(style, name){
zero[name] = [style, 0];
}, this);
this.element.setStyle('overflow', 'hidden');
var hideThese = this.options.hideInputs ? this.element.getElements(this.options.hideInputs) : null;
this.$chain.unshift(function(){
if (this.hidden){
this.hiding = false;
$each(startStyles, function(style, name){
startStyles[name] = style;
}, this);
this.element.style.cssText = this.cssText;
this.element.setStyle('display', 'none');
if (hideThese) hideThese.setStyle('visibility', 'visible');
}
this.fireEvent('hide', this.element);
this.callChain();
}.bind(this));
if (hideThese) hideThese.setStyle('visibility', 'hidden');
this.start(zero);
} else {
this.callChain.delay(10, this);
this.fireEvent('complete', this.element);
this.fireEvent('hide', this.element);
}
} else if (this.options.link == 'chain'){
this.chain(this.dissolve.bind(this));
} else if (this.options.link == 'cancel' && !this.hiding){
this.cancel();
this.dissolve();
}
} catch(e){
this.hiding = false;
this.element.setStyle('display', 'none');
this.callChain.delay(10, this);
this.fireEvent('complete', this.element);
this.fireEvent('hide', this.element);
}
return this;
},
reveal: function(){
try {
if (!this.showing && !this.hiding){
if (this.element.getStyle('display') == 'none' ||
this.element.getStyle('visiblity') == 'hidden' ||
this.element.getStyle('opacity') == 0){
this.showing = true;
this.hiding = this.hidden =  false;
var startStyles;
this.cssText = this.element.style.cssText;
//toggle display, but hide it
this.element.measure(function(){
//create the styles for the opened/visible state
startStyles = this.element.getComputedSize({
styles: this.options.styles,
mode: this.options.mode
});
}.bind(this));
$each(startStyles, function(style, name){
startStyles[name] = style;
});
//if we're overridding height/width
if ($chk(this.options.heightOverride)) startStyles.height = this.options.heightOverride.toInt();
if ($chk(this.options.widthOverride)) startStyles.width = this.options.widthOverride.toInt();
if (this.options.transitionOpacity) {
this.element.setStyle('opacity', 0);
startStyles.opacity = 1;
}
//create the zero state for the beginning of the transition
var zero = {
height: 0,
display: this.options.display
};
$each(startStyles, function(style, name){ zero[name] = 0; });
//set to zero
this.element.setStyles($merge(zero, {overflow: 'hidden'}));
//hide inputs
var hideThese = this.options.hideInputs ? this.element.getElements(this.options.hideInputs) : null;
if (hideThese) hideThese.setStyle('visibility', 'hidden');
//start the effect
this.start(startStyles);
this.$chain.unshift(function(){
this.element.style.cssText = this.cssText;
this.element.setStyle('display', this.options.display);
if (!this.hidden) this.showing = false;
if (hideThese) hideThese.setStyle('visibility', 'visible');
this.callChain();
this.fireEvent('show', this.element);
}.bind(this));
} else {
this.callChain();
this.fireEvent('complete', this.element);
this.fireEvent('show', this.element);
}
} else if (this.options.link == 'chain'){
this.chain(this.reveal.bind(this));
} else if (this.options.link == 'cancel' && !this.showing){
this.cancel();
this.reveal();
}
} catch(e){
this.element.setStyles({
display: this.options.display,
visiblity: 'visible',
opacity: 1
});
this.showing = false;
this.callChain.delay(10, this);
this.fireEvent('complete', this.element);
this.fireEvent('show', this.element);
}
return this;
},
toggle: function(){
if (this.element.getStyle('display') == 'none' ||
this.element.getStyle('visiblity') == 'hidden' ||
this.element.getStyle('opacity') == 0){
this.reveal();
} else {
this.dissolve();
}
return this;
},
cancel: function(){
this.parent.apply(this, arguments);
this.element.style.cssText = this.cssText;
this.hidding = false;
this.showing = false;
}
});
Element.Properties.reveal = {
set: function(options){
var reveal = this.retrieve('reveal');
if (reveal) reveal.cancel();
return this.eliminate('reveal').store('reveal:options', options);
},
get: function(options){
if (options || !this.retrieve('reveal')){
if (options || !this.retrieve('reveal:options')) this.set('reveal', options);
this.store('reveal', new Fx.Reveal(this, this.retrieve('reveal:options')));
}
return this.retrieve('reveal');
}
};
Element.Properties.dissolve = Element.Properties.reveal;
Element.implement({
reveal: function(options){
this.get('reveal', options).reveal();
return this;
},
dissolve: function(options){
this.get('reveal', options).dissolve();
return this;
},
nix: function(){
var params = Array.link(arguments, {destroy: Boolean.type, options: Object.type});
this.get('reveal', params.options).dissolve().chain(function(){
this[params.destroy ? 'destroy' : 'dispose']();
}.bind(this));
return this;
},
wink: function(){
var params = Array.link(arguments, {duration: Number.type, options: Object.type});
var reveal = this.get('reveal', params.options);
reveal.reveal().chain(function(){
(function(){
reveal.dissolve();
}).delay(params.duration || 2000);
});
}
});
/*
---
script: Fx.Scroll.js
description: Effect to smoothly scroll any element, including the window.
license: MIT-style license
authors:
- Valerio Proietti
requires:
- core:1.2.4/Fx
- core:1.2.4/Element.Event
- core:1.2.4/Element.Dimensions
- /MooTools.More
provides: [Fx.Scroll]
...
*/
Fx.Scroll = new Class({
Extends: Fx,
options: {
offset: {x: 0, y: 0},
wheelStops: true
},
initialize: function(element, options){
this.element = this.subject = document.id(element);
this.parent(options);
var cancel = this.cancel.bind(this, false);
if ($type(this.element) != 'element') this.element = document.id(this.element.getDocument().body);
var stopper = this.element;
if (this.options.wheelStops){
this.addEvent('start', function(){
stopper.addEvent('mousewheel', cancel);
}, true);
this.addEvent('complete', function(){
stopper.removeEvent('mousewheel', cancel);
}, true);
}
},
set: function(){
var now = Array.flatten(arguments);
if (Browser.Engine.gecko) now = [Math.round(now[0]), Math.round(now[1])];
this.element.scrollTo(now[0], now[1]);
},
compute: function(from, to, delta){
return [0, 1].map(function(i){
return Fx.compute(from[i], to[i], delta);
});
},
start: function(x, y){
if (!this.check(x, y)) return this;
var scrollSize = this.element.getScrollSize(),
scroll = this.element.getScroll(), 
values = {x: x, y: y};
for (var z in values){
var max = scrollSize[z];
if ($chk(values[z])) values[z] = ($type(values[z]) == 'number') ? values[z] : max;
else values[z] = scroll[z];
values[z] += this.options.offset[z];
}
return this.parent([scroll.x, scroll.y], [values.x, values.y]);
},
toTop: function(){
return this.start(false, 0);
},
toLeft: function(){
return this.start(0, false);
},
toRight: function(){
return this.start('right', false);
},
toBottom: function(){
return this.start(false, 'bottom');
},
toElement: function(el){
var position = document.id(el).getPosition(this.element);
return this.start(position.x, position.y);
},
scrollIntoView: function(el, axes, offset){
axes = axes ? $splat(axes) : ['x','y'];
var to = {};
el = document.id(el);
var pos = el.getPosition(this.element);
var size = el.getSize();
var scroll = this.element.getScroll();
var containerSize = this.element.getSize();
var edge = {
x: pos.x + size.x,
y: pos.y + size.y
};
['x','y'].each(function(axis) {
if (axes.contains(axis)) {
if (edge[axis] > scroll[axis] + containerSize[axis]) to[axis] = edge[axis] - containerSize[axis];
if (pos[axis] < scroll[axis]) to[axis] = pos[axis];
}
if (to[axis] == null) to[axis] = scroll[axis];
if (offset && offset[axis]) to[axis] = to[axis] + offset[axis];
}, this);
if (to.x != scroll.x || to.y != scroll.y) this.start(to.x, to.y);
return this;
},
scrollToCenter: function(el, axes, offset){
axes = axes ? $splat(axes) : ['x', 'y'];
el = $(el);
var to = {},
pos = el.getPosition(this.element),
size = el.getSize(),
scroll = this.element.getScroll(),
containerSize = this.element.getSize(),
edge = {
x: pos.x + size.x,
y: pos.y + size.y
};
['x','y'].each(function(axis){
if(axes.contains(axis)){
to[axis] = pos[axis] - (containerSize[axis] - size[axis])/2;
}
if(to[axis] == null) to[axis] = scroll[axis];
if(offset && offset[axis]) to[axis] = to[axis] + offset[axis];
}, this);
if (to.x != scroll.x || to.y != scroll.y) this.start(to.x, to.y);
return this;
}
});
/*
---
script: Fx.Slide.js
description: Effect to slide an element in and out of view.
license: MIT-style license
authors:
- Valerio Proietti
requires:
- core:1.2.4/Fx Element.Style
- /MooTools.More
provides: [Fx.Slide]
...
*/
Fx.Slide = new Class({
Extends: Fx,
options: {
mode: 'vertical',
wrapper: false,
hideOverflow: true
},
initialize: function(element, options){
this.addEvent('complete', function(){
this.open = (this.wrapper['offset' + this.layout.capitalize()] != 0);
if (this.open) this.wrapper.setStyle('height', '');
if (this.open && Browser.Engine.webkit419) this.element.dispose().inject(this.wrapper);
}, true);
this.element = this.subject = document.id(element);
this.parent(options);
var wrapper = this.element.retrieve('wrapper');
var styles = this.element.getStyles('margin', 'position', 'overflow');
if (this.options.hideOverflow) styles = $extend(styles, {overflow: 'hidden'});
if (this.options.wrapper) wrapper = document.id(this.options.wrapper).setStyles(styles);
this.wrapper = wrapper || new Element('div', {
styles: styles
}).wraps(this.element);
this.element.store('wrapper', this.wrapper).setStyle('margin', 0);
this.now = [];
this.open = true;
},
vertical: function(){
this.margin = 'margin-top';
this.layout = 'height';
this.offset = this.element.offsetHeight;
},
horizontal: function(){
this.margin = 'margin-left';
this.layout = 'width';
this.offset = this.element.offsetWidth;
},
set: function(now){
this.element.setStyle(this.margin, now[0]);
this.wrapper.setStyle(this.layout, now[1]);
return this;
},
compute: function(from, to, delta){
return [0, 1].map(function(i){
return Fx.compute(from[i], to[i], delta);
});
},
start: function(how, mode){
if (!this.check(how, mode)) return this;
this[mode || this.options.mode]();
var margin = this.element.getStyle(this.margin).toInt();
var layout = this.wrapper.getStyle(this.layout).toInt();
var caseIn = [[margin, layout], [0, this.offset]];
var caseOut = [[margin, layout], [-this.offset, 0]];
var start;
switch (how){
case 'in': start = caseIn; break;
case 'out': start = caseOut; break;
case 'toggle': start = (layout == 0) ? caseIn : caseOut;
}
return this.parent(start[0], start[1]);
},
slideIn: function(mode){
return this.start('in', mode);
},
slideOut: function(mode){
return this.start('out', mode);
},
hide: function(mode){
this[mode || this.options.mode]();
this.open = false;
return this.set([-this.offset, 0]);
},
show: function(mode){
this[mode || this.options.mode]();
this.open = true;
return this.set([0, this.offset]);
},
toggle: function(mode){
return this.start('toggle', mode);
}
});
Element.Properties.slide = {
set: function(options){
var slide = this.retrieve('slide');
if (slide) slide.cancel();
return this.eliminate('slide').store('slide:options', $extend({link: 'cancel'}, options));
},
get: function(options){
if (options || !this.retrieve('slide')){
if (options || !this.retrieve('slide:options')) this.set('slide', options);
this.store('slide', new Fx.Slide(this, this.retrieve('slide:options')));
}
return this.retrieve('slide');
}
};
Element.implement({
slide: function(how, mode){
how = how || 'toggle';
var slide = this.get('slide'), toggle;
switch (how){
case 'hide': slide.hide(mode); break;
case 'show': slide.show(mode); break;
case 'toggle':
var flag = this.retrieve('slide:flag', slide.open);
slide[flag ? 'slideOut' : 'slideIn'](mode);
this.store('slide:flag', !flag);
toggle = true;
break;
default: slide.start(how, mode);
}
if (!toggle) this.eliminate('slide:flag');
return this;
}
});
/*
---
script: Fx.SmoothScroll.js
description: Class for creating a smooth scrolling effect to all internal links on the page.
license: MIT-style license
authors:
- Valerio Proietti
requires:
- core:1.2.4/Selectors
- /Fx.Scroll
provides: [Fx.SmoothScroll]
...
*/
var SmoothScroll = Fx.SmoothScroll = new Class({
Extends: Fx.Scroll,
initialize: function(options, context){
context = context || document;
this.doc = context.getDocument();
var win = context.getWindow();
this.parent(this.doc, options);
this.links = $$(this.options.links || this.doc.links);
var location = win.location.href.match(/^[^#]*/)[0] + '#';
this.links.each(function(link){
if (link.href.indexOf(location) != 0) {return;}
var anchor = link.href.substr(location.length);
if (anchor) this.useLink(link, anchor);
}, this);
if (!Browser.Engine.webkit419) {
this.addEvent('complete', function(){
win.location.hash = this.anchor;
}, true);
}
},
useLink: function(link, anchor){
var el;
link.addEvent('click', function(event){
if (el !== false && !el) el = document.id(anchor) || this.doc.getElement('a[name=' + anchor + ']');
if (el) {
event.preventDefault();
this.anchor = anchor;
this.toElement(el).chain(function(){
this.fireEvent('scrolledTo', [link, el]);
}.bind(this));
link.blur();
}
}.bind(this));
}
});
/*
---
script: Fx.Sort.js
description: Defines Fx.Sort, a class that reorders lists with a transition.
license: MIT-style license
authors:
- Aaron Newton
requires:
- core:1.2.4/Element.Dimensions
- /Fx.Elements
- /Element.Measure
provides: [Fx.Sort]
...
*/
Fx.Sort = new Class({
Extends: Fx.Elements,
options: {
mode: 'vertical'
},
initialize: function(elements, options){
this.parent(elements, options);
this.elements.each(function(el){
if (el.getStyle('position') == 'static') el.setStyle('position', 'relative');
});
this.setDefaultOrder();
},
setDefaultOrder: function(){
this.currentOrder = this.elements.map(function(el, index){
return index;
});
},
sort: function(newOrder){
if ($type(newOrder) != 'array') return false;
var top = 0,
left = 0,
next = {},
zero = {},
vert = this.options.mode == 'vertical';
var current = this.elements.map(function(el, index){
var size = el.getComputedSize({styles: ['border', 'padding', 'margin']});
var val;
if (vert){
val = {
top: top,
margin: size['margin-top'],
height: size.totalHeight
};
top += val.height - size['margin-top'];
} else {
val = {
left: left,
margin: size['margin-left'],
width: size.totalWidth
};
left += val.width;
}
var plain = vert ? 'top' : 'left';
zero[index] = {};
var start = el.getStyle(plain).toInt();
zero[index][plain] = start || 0;
return val;
}, this);
this.set(zero);
newOrder = newOrder.map(function(i){ return i.toInt(); });
if (newOrder.length != this.elements.length){
this.currentOrder.each(function(index){
if (!newOrder.contains(index)) newOrder.push(index);
});
if (newOrder.length > this.elements.length)
newOrder.splice(this.elements.length-1, newOrder.length - this.elements.length);
}
var margin = top = left = 0;
newOrder.each(function(item, index){
var newPos = {};
if (vert){
newPos.top = top - current[item].top - margin;
top += current[item].height;
} else {
newPos.left = left - current[item].left;
left += current[item].width;
}
margin = margin + current[item].margin;
next[item]=newPos;
}, this);
var mapped = {};
$A(newOrder).sort().each(function(index){
mapped[index] = next[index];
});
this.start(mapped);
this.currentOrder = newOrder;
return this;
},
rearrangeDOM: function(newOrder){
newOrder = newOrder || this.currentOrder;
var parent = this.elements[0].getParent();
var rearranged = [];
this.elements.setStyle('opacity', 0);
//move each element and store the new default order
newOrder.each(function(index){
rearranged.push(this.elements[index].inject(parent).setStyles({
top: 0,
left: 0
}));
}, this);
this.elements.setStyle('opacity', 1);
this.elements = $$(rearranged);
this.setDefaultOrder();
return this;
},
getDefaultOrder: function(){
return this.elements.map(function(el, index){
return index;
});
},
forward: function(){
return this.sort(this.getDefaultOrder());
},
backward: function(){
return this.sort(this.getDefaultOrder().reverse());
},
reverse: function(){
return this.sort(this.currentOrder.reverse());
},
sortByElements: function(elements){
return this.sort(elements.map(function(el){
return this.elements.indexOf(el);
}, this));
},
swap: function(one, two){
if ($type(one) == 'element') one = this.elements.indexOf(one);
if ($type(two) == 'element') two = this.elements.indexOf(two);
var newOrder = $A(this.currentOrder);
newOrder[this.currentOrder.indexOf(one)] = two;
newOrder[this.currentOrder.indexOf(two)] = one;
return this.sort(newOrder);
}
});
/*
---
script: Drag.js
description: The base Drag Class. Can be used to drag and resize Elements using mouse events.
license: MIT-style license
authors:
- Valerio Proietti
- Tom Occhinno
- Jan Kassens
requires:
- core:1.2.4/Events
- core:1.2.4/Options
- core:1.2.4/Element.Event
- core:1.2.4/Element.Style
- /MooTools.More
provides: [Drag]
*/
var Drag = new Class({
Implements: [Events, Options],
options: {/*
onBeforeStart: $empty(thisElement),
onStart: $empty(thisElement, event),
onSnap: $empty(thisElement)
onDrag: $empty(thisElement, event),
onCancel: $empty(thisElement),
onComplete: $empty(thisElement, event),*/
snap: 6,
unit: 'px',
grid: false,
style: true,
limit: false,
handle: false,
invert: false,
preventDefault: false,
stopPropagation: false,
modifiers: {x: 'left', y: 'top'}
},
initialize: function(){
var params = Array.link(arguments, {'options': Object.type, 'element': $defined});
this.element = document.id(params.element);
this.document = this.element.getDocument();
this.setOptions(params.options || {});
var htype = $type(this.options.handle);
this.handles = ((htype == 'array' || htype == 'collection') ? $$(this.options.handle) : document.id(this.options.handle)) || this.element;
this.mouse = {'now': {}, 'pos': {}};
this.value = {'start': {}, 'now': {}};
this.selection = (Browser.Engine.trident) ? 'selectstart' : 'mousedown';
this.bound = {
start: this.start.bind(this),
check: this.check.bind(this),
drag: this.drag.bind(this),
stop: this.stop.bind(this),
cancel: this.cancel.bind(this),
eventStop: $lambda(false)
};
this.attach();
},
attach: function(){
this.handles.addEvent('mousedown', this.bound.start);
return this;
},
detach: function(){
this.handles.removeEvent('mousedown', this.bound.start);
return this;
},
start: function(event){
if (event.rightClick) return;
if (this.options.preventDefault) event.preventDefault();
if (this.options.stopPropagation) event.stopPropagation();
this.mouse.start = event.page;
this.fireEvent('beforeStart', this.element);
var limit = this.options.limit;
this.limit = {x: [], y: []};
for (var z in this.options.modifiers){
if (!this.options.modifiers[z]) continue;
if (this.options.style) this.value.now[z] = this.element.getStyle(this.options.modifiers[z]).toInt();
else this.value.now[z] = this.element[this.options.modifiers[z]];
if (this.options.invert) this.value.now[z] *= -1;
this.mouse.pos[z] = event.page[z] - this.value.now[z];
if (limit && limit[z]){
for (var i = 2; i--; i){
if ($chk(limit[z][i])) this.limit[z][i] = $lambda(limit[z][i])();
}
}
}
if ($type(this.options.grid) == 'number') this.options.grid = {x: this.options.grid, y: this.options.grid};
this.document.addEvents({mousemove: this.bound.check, mouseup: this.bound.cancel});
this.document.addEvent(this.selection, this.bound.eventStop);
},
check: function(event){
if (this.options.preventDefault) event.preventDefault();
var distance = Math.round(Math.sqrt(Math.pow(event.page.x - this.mouse.start.x, 2) + Math.pow(event.page.y - this.mouse.start.y, 2)));
if (distance > this.options.snap){
this.cancel();
this.document.addEvents({
mousemove: this.bound.drag,
mouseup: this.bound.stop
});
this.fireEvent('start', [this.element, event]).fireEvent('snap', this.element);
}
},
drag: function(event){
if (this.options.preventDefault) event.preventDefault();
this.mouse.now = event.page;
for (var z in this.options.modifiers){
if (!this.options.modifiers[z]) continue;
this.value.now[z] = this.mouse.now[z] - this.mouse.pos[z];
if (this.options.invert) this.value.now[z] *= -1;
if (this.options.limit && this.limit[z]){
if ($chk(this.limit[z][1]) && (this.value.now[z] > this.limit[z][1])){
this.value.now[z] = this.limit[z][1];
} else if ($chk(this.limit[z][0]) && (this.value.now[z] < this.limit[z][0])){
this.value.now[z] = this.limit[z][0];
}
}
if (this.options.grid[z]) this.value.now[z] -= ((this.value.now[z] - (this.limit[z][0]||0)) % this.options.grid[z]);
if (this.options.style) {
this.element.setStyle(this.options.modifiers[z], this.value.now[z] + this.options.unit);
} else {
this.element[this.options.modifiers[z]] = this.value.now[z];
}
}
this.fireEvent('drag', [this.element, event]);
},
cancel: function(event){
this.document.removeEvent('mousemove', this.bound.check);
this.document.removeEvent('mouseup', this.bound.cancel);
if (event){
this.document.removeEvent(this.selection, this.bound.eventStop);
this.fireEvent('cancel', this.element);
}
},
stop: function(event){
this.document.removeEvent(this.selection, this.bound.eventStop);
this.document.removeEvent('mousemove', this.bound.drag);
this.document.removeEvent('mouseup', this.bound.stop);
if (event) this.fireEvent('complete', [this.element, event]);
}
});
Element.implement({
makeResizable: function(options){
var drag = new Drag(this, $merge({modifiers: {x: 'width', y: 'height'}}, options));
this.store('resizer', drag);
return drag.addEvent('drag', function(){
this.fireEvent('resize', drag);
}.bind(this));
}
});
/*
---
script: Drag.Move.js
description: A Drag extension that provides support for the constraining of draggables to containers and droppables.
license: MIT-style license
authors:
- Valerio Proietti
- Tom Occhinno
- Jan Kassens
- Aaron Newton
- Scott Kyle
requires:
- core:1.2.4/Element.Dimensions
- /Drag
provides: [Drag.Move]
...
*/
Drag.Move = new Class({
Extends: Drag,
options: {/*
onEnter: $empty(thisElement, overed),
onLeave: $empty(thisElement, overed),
onDrop: $empty(thisElement, overed, event),*/
droppables: [],
container: false,
precalculate: false,
includeMargins: true,
checkDroppables: true
},
initialize: function(element, options){
this.parent(element, options);
element = this.element;
this.droppables = $$(this.options.droppables);
this.container = document.id(this.options.container);
if (this.container && $type(this.container) != 'element')
this.container = document.id(this.container.getDocument().body);
var styles = element.getStyles('left', 'top', 'position');
if (styles.left == 'auto' || styles.top == 'auto')
element.setPosition(element.getPosition(element.getOffsetParent()));
if (styles.position == 'static')
element.setStyle('position', 'absolute');
this.addEvent('start', this.checkDroppables, true);
this.overed = null;
},
start: function(event){
if (this.container) this.options.limit = this.calculateLimit();
if (this.options.precalculate){
this.positions = this.droppables.map(function(el){
return el.getCoordinates();
});
}
this.parent(event);
},
calculateLimit: function(){
var offsetParent = this.element.getOffsetParent(),
containerCoordinates = this.container.getCoordinates(offsetParent),
containerBorder = {},
elementMargin = {},
elementBorder = {},
containerMargin = {},
offsetParentPadding = {};
['top', 'right', 'bottom', 'left'].each(function(pad){
containerBorder[pad] = this.container.getStyle('border-' + pad).toInt();
elementBorder[pad] = this.element.getStyle('border-' + pad).toInt();
elementMargin[pad] = this.element.getStyle('margin-' + pad).toInt();
containerMargin[pad] = this.container.getStyle('margin-' + pad).toInt();
offsetParentPadding[pad] = offsetParent.getStyle('padding-' + pad).toInt();
}, this);
var width = this.element.offsetWidth + elementMargin.left + elementMargin.right,
height = this.element.offsetHeight + elementMargin.top + elementMargin.bottom,
left = 0,
top = 0,
right = containerCoordinates.right - containerBorder.right - width,
bottom = containerCoordinates.bottom - containerBorder.bottom - height;
if (this.options.includeMargins){
left += elementMargin.left;
top += elementMargin.top;
} else {
right += elementMargin.right;
bottom += elementMargin.bottom;
}
if (this.element.getStyle('position') == 'relative'){
var coords = this.element.getCoordinates(offsetParent);
coords.left -= this.element.getStyle('left').toInt();
coords.top -= this.element.getStyle('top').toInt();
left += containerBorder.left - coords.left;
top += containerBorder.top - coords.top;
right += elementMargin.left - coords.left;
bottom += elementMargin.top - coords.top;
if (this.container != offsetParent){
left += containerMargin.left + offsetParentPadding.left;
top += (Browser.Engine.trident4 ? 0 : containerMargin.top) + offsetParentPadding.top;
}
} else {
left -= elementMargin.left;
top -= elementMargin.top;
if (this.container == offsetParent){
right -= containerBorder.left;
bottom -= containerBorder.top;
} else {
left += containerCoordinates.left + containerBorder.left;
top += containerCoordinates.top + containerBorder.top;
}
}
return {
x: [left, right],
y: [top, bottom]
};
},
checkAgainst: function(el, i){
el = (this.positions) ? this.positions[i] : el.getCoordinates();
var now = this.mouse.now;
return (now.x > el.left && now.x < el.right && now.y < el.bottom && now.y > el.top);
},
checkDroppables: function(){
var overed = this.droppables.filter(this.checkAgainst, this).getLast();
if (this.overed != overed){
if (this.overed) this.fireEvent('leave', [this.element, this.overed]);
if (overed) this.fireEvent('enter', [this.element, overed]);
this.overed = overed;
}
},
drag: function(event){
this.parent(event);
if (this.options.checkDroppables && this.droppables.length) this.checkDroppables();
},
stop: function(event){
this.checkDroppables();
this.fireEvent('drop', [this.element, this.overed, event]);
this.overed = null;
return this.parent(event);
}
});
Element.implement({
makeDraggable: function(options){
var drag = new Drag.Move(this, options);
this.store('dragger', drag);
return drag;
}
});
/*
---
script: Slider.js
description: Class for creating horizontal and vertical slider controls.
license: MIT-style license
authors:
- Valerio Proietti
requires:
- core:1.2.4/Element.Dimensions
- /Class.Binds
- /Drag
- /Element.Dimensions
- /Element.Measure
provides: [Slider]
...
*/
var Slider = new Class({
Implements: [Events, Options],
Binds: ['clickedElement', 'draggedKnob', 'scrolledElement'],
options: {/*
onTick: $empty(intPosition),
onChange: $empty(intStep),
onComplete: $empty(strStep),*/
onTick: function(position){
if (this.options.snap) position = this.toPosition(this.step);
this.knob.setStyle(this.property, position);
},
initialStep: 0,
snap: false,
offset: 0,
range: false,
wheel: false,
steps: 100,
mode: 'horizontal'
},
initialize: function(element, knob, options){
this.setOptions(options);
this.element = document.id(element);
this.knob = document.id(knob);
this.previousChange = this.previousEnd = this.step = -1;
var offset, limit = {}, modifiers = {'x': false, 'y': false};
switch (this.options.mode){
case 'vertical':
this.axis = 'y';
this.property = 'top';
offset = 'offsetHeight';
break;
case 'horizontal':
this.axis = 'x';
this.property = 'left';
offset = 'offsetWidth';
}
this.full = this.element.measure(function(){ 
this.half = this.knob[offset] / 2; 
return this.element[offset] - this.knob[offset] + (this.options.offset * 2); 
}.bind(this));
this.min = $chk(this.options.range[0]) ? this.options.range[0] : 0;
this.max = $chk(this.options.range[1]) ? this.options.range[1] : this.options.steps;
this.range = this.max - this.min;
this.steps = this.options.steps || this.full;
this.stepSize = Math.abs(this.range) / this.steps;
this.stepWidth = this.stepSize * this.full / Math.abs(this.range) ;
this.knob.setStyle('position', 'relative').setStyle(this.property, this.options.initialStep ? this.toPosition(this.options.initialStep) : - this.options.offset);
modifiers[this.axis] = this.property;
limit[this.axis] = [- this.options.offset, this.full - this.options.offset];
var dragOptions = {
snap: 0,
limit: limit,
modifiers: modifiers,
onDrag: this.draggedKnob,
onStart: this.draggedKnob,
onBeforeStart: (function(){
this.isDragging = true;
}).bind(this),
onCancel: function() {
this.isDragging = false;
}.bind(this),
onComplete: function(){
this.isDragging = false;
this.draggedKnob();
this.end();
}.bind(this)
};
if (this.options.snap){
dragOptions.grid = Math.ceil(this.stepWidth);
dragOptions.limit[this.axis][1] = this.full;
}
this.drag = new Drag(this.knob, dragOptions);
this.attach();
},
attach: function(){
this.element.addEvent('mousedown', this.clickedElement);
if (this.options.wheel) this.element.addEvent('mousewheel', this.scrolledElement);
this.drag.attach();
return this;
},
detach: function(){
this.element.removeEvent('mousedown', this.clickedElement);
this.element.removeEvent('mousewheel', this.scrolledElement);
this.drag.detach();
return this;
},
set: function(step){
if (!((this.range > 0) ^ (step < this.min))) step = this.min;
if (!((this.range > 0) ^ (step > this.max))) step = this.max;
this.step = Math.round(step);
this.checkStep();
this.fireEvent('tick', this.toPosition(this.step));
this.end();
return this;
},
clickedElement: function(event){
if (this.isDragging || event.target == this.knob) return;
var dir = this.range < 0 ? -1 : 1;
var position = event.page[this.axis] - this.element.getPosition()[this.axis] - this.half;
position = position.limit(-this.options.offset, this.full -this.options.offset);
this.step = Math.round(this.min + dir * this.toStep(position));
this.checkStep();
this.fireEvent('tick', position);
this.end();
},
scrolledElement: function(event){
var mode = (this.options.mode == 'horizontal') ? (event.wheel < 0) : (event.wheel > 0);
this.set(mode ? this.step - this.stepSize : this.step + this.stepSize);
event.stop();
},
draggedKnob: function(){
var dir = this.range < 0 ? -1 : 1;
var position = this.drag.value.now[this.axis];
position = position.limit(-this.options.offset, this.full -this.options.offset);
this.step = Math.round(this.min + dir * this.toStep(position));
this.checkStep();
},
checkStep: function(){
if (this.previousChange != this.step){
this.previousChange = this.step;
this.fireEvent('change', this.step);
}
},
end: function(){
if (this.previousEnd !== this.step){
this.previousEnd = this.step;
this.fireEvent('complete', this.step + '');
}
},
toStep: function(position){
var step = (position + this.options.offset) * this.stepSize / this.full * this.steps;
return this.options.steps ? Math.round(step -= step % this.stepSize) : step;
},
toPosition: function(step){
return (this.full * Math.abs(this.min - step)) / (this.steps * this.stepSize) - this.options.offset;
}
});
/*
---
script: Sortables.js
description: Class for creating a drag and drop sorting interface for lists of items.
license: MIT-style license
authors:
- Tom Occhino
requires:
- /Drag.Move
provides: [Slider]
...
*/
var Sortables = new Class({
Implements: [Events, Options],
options: {/*
onSort: $empty(element, clone),
onStart: $empty(element, clone),
onComplete: $empty(element),*/
snap: 4,
opacity: 1,
clone: false,
revert: false,
handle: false,
constrain: false
},
initialize: function(lists, options){
this.setOptions(options);
this.elements = [];
this.lists = [];
this.idle = true;
this.addLists($$(document.id(lists) || lists));
if (!this.options.clone) this.options.revert = false;
if (this.options.revert) this.effect = new Fx.Morph(null, $merge({duration: 250, link: 'cancel'}, this.options.revert));
},
attach: function(){
this.addLists(this.lists);
return this;
},
detach: function(){
this.lists = this.removeLists(this.lists);
return this;
},
addItems: function(){
Array.flatten(arguments).each(function(element){
this.elements.push(element);
var start = element.retrieve('sortables:start', this.start.bindWithEvent(this, element));
(this.options.handle ? element.getElement(this.options.handle) || element : element).addEvent('mousedown', start);
}, this);
return this;
},
addLists: function(){
Array.flatten(arguments).each(function(list){
this.lists.push(list);
this.addItems(list.getChildren());
}, this);
return this;
},
removeItems: function(){
return $$(Array.flatten(arguments).map(function(element){
this.elements.erase(element);
var start = element.retrieve('sortables:start');
(this.options.handle ? element.getElement(this.options.handle) || element : element).removeEvent('mousedown', start);
return element;
}, this));
},
removeLists: function(){
return $$(Array.flatten(arguments).map(function(list){
this.lists.erase(list);
this.removeItems(list.getChildren());
return list;
}, this));
},
getClone: function(event, element){
if (!this.options.clone) return new Element('div').inject(document.body);
if ($type(this.options.clone) == 'function') return this.options.clone.call(this, event, element, this.list);
var clone = element.clone(true).setStyles({
margin: '0px',
position: 'absolute',
visibility: 'hidden',
'width': element.getStyle('width')
});
//prevent the duplicated radio inputs from unchecking the real one
if (clone.get('html').test('radio')) {
clone.getElements('input[type=radio]').each(function(input, i) {
input.set('name', 'clone_' + i);
});
}
return clone.inject(this.list).setPosition(element.getPosition(element.getOffsetParent()));
},
getDroppables: function(){
var droppables = this.list.getChildren();
if (!this.options.constrain) droppables = this.lists.concat(droppables).erase(this.list);
return droppables.erase(this.clone).erase(this.element);
},
insert: function(dragging, element){
var where = 'inside';
if (this.lists.contains(element)){
this.list = element;
this.drag.droppables = this.getDroppables();
} else {
where = this.element.getAllPrevious().contains(element) ? 'before' : 'after';
}
this.element.inject(element, where);
this.fireEvent('sort', [this.element, this.clone]);
},
start: function(event, element){
if (!this.idle) return;
this.idle = false;
this.element = element;
this.opacity = element.get('opacity');
this.list = element.getParent();
this.clone = this.getClone(event, element);
this.drag = new Drag.Move(this.clone, {
snap: this.options.snap,
container: this.options.constrain && this.element.getParent(),
droppables: this.getDroppables(),
onSnap: function(){
event.stop();
this.clone.setStyle('visibility', 'visible');
this.element.set('opacity', this.options.opacity || 0);
this.fireEvent('start', [this.element, this.clone]);
}.bind(this),
onEnter: this.insert.bind(this),
onCancel: this.reset.bind(this),
onComplete: this.end.bind(this)
});
this.clone.inject(this.element, 'before');
this.drag.start(event);
},
end: function(){
this.drag.detach();
this.element.set('opacity', this.opacity);
if (this.effect){
var dim = this.element.getStyles('width', 'height');
var pos = this.clone.computePosition(this.element.getPosition(this.clone.offsetParent));
this.effect.element = this.clone;
this.effect.start({
top: pos.top,
left: pos.left,
width: dim.width,
height: dim.height,
opacity: 0.25
}).chain(this.reset.bind(this));
} else {
this.reset();
}
},
reset: function(){
this.idle = true;
this.clone.destroy();
this.fireEvent('complete', this.element);
},
serialize: function(){
var params = Array.link(arguments, {modifier: Function.type, index: $defined});
var serial = this.lists.map(function(list){
return list.getChildren().map(params.modifier || function(element){
return element.get('id');
}, this);
}, this);
var index = params.index;
if (this.lists.length == 1) index = 0;
return $chk(index) && index >= 0 && index < this.lists.length ? serial[index] : serial;
}
});
/*
---
script: Request.JSONP.js
description: Defines Request.JSONP, a class for cross domain javascript via script injection.
license: MIT-style license
authors:
- Aaron Newton
- Guillermo Rauch
requires:
- core:1.2.4/Element
- core:1.2.4/Request
- /Log
provides: [Request.JSONP]
...
*/
Request.JSONP = new Class({
Implements: [Chain, Events, Options, Log],
options: {/*
onRetry: $empty(intRetries),
onRequest: $empty(scriptElement),
onComplete: $empty(data),
onSuccess: $empty(data),
onCancel: $empty(),
log: false,
*/
url: '',
data: {},
retries: 0,
timeout: 0,
link: 'ignore',
callbackKey: 'callback',
injectScript: document.head
},
initialize: function(options){
this.setOptions(options);
if (this.options.log) this.enableLog();
this.running = false;
this.requests = 0;
this.triesRemaining = [];
},
check: function(){
if (!this.running) return true;
switch (this.options.link){
case 'cancel': this.cancel(); return true;
case 'chain': this.chain(this.caller.bind(this, arguments)); return false;
}
return false;
},
send: function(options){
if (!$chk(arguments[1]) && !this.check(options)) return this;
var type = $type(options), 
old = this.options, 
index = $chk(arguments[1]) ? arguments[1] : this.requests++;
if (type == 'string' || type == 'element') options = {data: options};
options = $extend({data: old.data, url: old.url}, options);
if (!$chk(this.triesRemaining[index])) this.triesRemaining[index] = this.options.retries;
var remaining = this.triesRemaining[index];
(function(){
var script = this.getScript(options);
this.log('JSONP retrieving script with url: ' + script.get('src'));
this.fireEvent('request', script);
this.running = true;
(function(){
if (remaining){
this.triesRemaining[index] = remaining - 1;
if (script){
script.destroy();
this.send(options, index).fireEvent('retry', this.triesRemaining[index]);
}
} else if(script && this.options.timeout){
script.destroy();
this.cancel().fireEvent('failure');
}
}).delay(this.options.timeout, this);
}).delay(Browser.Engine.trident ? 50 : 0, this);
return this;
},
cancel: function(){
if (!this.running) return this;
this.running = false;
this.fireEvent('cancel');
return this;
},
getScript: function(options){
var index = Request.JSONP.counter,
data;
Request.JSONP.counter++;
switch ($type(options.data)){
case 'element': data = document.id(options.data).toQueryString(); break;
case 'object': case 'hash': data = Hash.toQueryString(options.data);
}
var src = options.url + 
(options.url.test('\\?') ? '&' :'?') + 
(options.callbackKey || this.options.callbackKey) + 
'=Request.JSONP.request_map.request_'+ index + 
(data ? '&' + data : '');
if (src.length > 2083) this.log('JSONP '+ src +' will fail in Internet Explorer, which enforces a 2083 bytes length limit on URIs');
var script = new Element('script', {type: 'text/javascript', src: src});
Request.JSONP.request_map['request_' + index] = function(){ this.success(arguments, script); }.bind(this);
return script.inject(this.options.injectScript);
},
success: function(args, script){
if (script) script.destroy();
this.running = false;
this.log('JSONP successfully retrieved: ', args);
this.fireEvent('complete', args).fireEvent('success', args).callChain();
}
});
Request.JSONP.counter = 0;
Request.JSONP.request_map = {};
/*
---
script: Request.Queue.js
description: Controls several instances of Request and its variants to run only one request at a time.
license: MIT-style license
authors:
- Aaron Newton
requires:
- core:1.2.4/Element
- core:1.2.4/Request
- /Log
provides: [Request.Queue]
...
*/
Request.Queue = new Class({
Implements: [Options, Events],
Binds: ['attach', 'request', 'complete', 'cancel', 'success', 'failure', 'exception'],
options: {/*
onRequest: $empty(argsPassedToOnRequest),
onSuccess: $empty(argsPassedToOnSuccess),
onComplete: $empty(argsPassedToOnComplete),
onCancel: $empty(argsPassedToOnCancel),
onException: $empty(argsPassedToOnException),
onFailure: $empty(argsPassedToOnFailure),
onEnd: $empty,
*/
stopOnFailure: true,
autoAdvance: true,
concurrent: 1,
requests: {}
},
initialize: function(options){
if(options){
var requests = options.requests;
delete options.requests;	
}
this.setOptions(options);
this.requests = new Hash;
this.queue = [];
this.reqBinders = {};
if(requests) this.addRequests(requests);
},
addRequest: function(name, request){
this.requests.set(name, request);
this.attach(name, request);
return this;
},
addRequests: function(obj){
$each(obj, function(req, name){
this.addRequest(name, req);
}, this);
return this;
},
getName: function(req){
return this.requests.keyOf(req);
},
attach: function(name, req){
if (req._groupSend) return this;
['request', 'complete', 'cancel', 'success', 'failure', 'exception'].each(function(evt){
if(!this.reqBinders[name]) this.reqBinders[name] = {};
this.reqBinders[name][evt] = function(){
this['on' + evt.capitalize()].apply(this, [name, req].extend(arguments));
}.bind(this);
req.addEvent(evt, this.reqBinders[name][evt]);
}, this);
req._groupSend = req.send;
req.send = function(options){
this.send(name, options);
return req;
}.bind(this);
return this;
},
removeRequest: function(req){
var name = $type(req) == 'object' ? this.getName(req) : req;
if (!name && $type(name) != 'string') return this;
req = this.requests.get(name);
if (!req) return this;
['request', 'complete', 'cancel', 'success', 'failure', 'exception'].each(function(evt){
req.removeEvent(evt, this.reqBinders[name][evt]);
}, this);
req.send = req._groupSend;
delete req._groupSend;
return this;
},
getRunning: function(){
return this.requests.filter(function(r){
return r.running;
});
},
isRunning: function(){
return !!(this.getRunning().getKeys().length);
},
send: function(name, options){
var q = function(){
this.requests.get(name)._groupSend(options);
this.queue.erase(q);
}.bind(this);
q.name = name;
if (this.getRunning().getKeys().length >= this.options.concurrent || (this.error && this.options.stopOnFailure)) this.queue.push(q);
else q();
return this;
},
hasNext: function(name){
return (!name) ? !!this.queue.length : !!this.queue.filter(function(q){ return q.name == name; }).length;
},
resume: function(){
this.error = false;
(this.options.concurrent - this.getRunning().getKeys().length).times(this.runNext, this);
return this;
},
runNext: function(name){
if (!this.queue.length) return this;
if (!name){
this.queue[0]();
} else {
var found;
this.queue.each(function(q){
if (!found && q.name == name){
found = true;
q();
}
});
}
return this;
},
runAll: function() {
this.queue.each(function(q) {
q();
});
return this;
},
clear: function(name){
if (!name){
this.queue.empty();
} else {
this.queue = this.queue.map(function(q){
if (q.name != name) return q;
else return false;
}).filter(function(q){ return q; });
}
return this;
},
cancel: function(name){
this.requests.get(name).cancel();
return this;
},
onRequest: function(){
this.fireEvent('request', arguments);
},
onComplete: function(){
this.fireEvent('complete', arguments);
if (!this.queue.length) this.fireEvent('end');
},
onCancel: function(){
if (this.options.autoAdvance && !this.error) this.runNext();
this.fireEvent('cancel', arguments);
},
onSuccess: function(){
if (this.options.autoAdvance && !this.error) this.runNext();
this.fireEvent('success', arguments);
},
onFailure: function(){
this.error = true;
if (!this.options.stopOnFailure && this.options.autoAdvance) this.runNext();
this.fireEvent('failure', arguments);
},
onException: function(){
this.error = true;
if (!this.options.stopOnFailure && this.options.autoAdvance) this.runNext();
this.fireEvent('exception', arguments);
}
});
/*
---
script: Request.Periodical.js
description: Requests the same URL to pull data from a server but increases the intervals if no data is returned to reduce the load
license: MIT-style license
authors:
- Christoph Pojer
requires:
- core:1.2.4/Request
- /MooTools.More
provides: [Request.Periodical]
...
*/
Request.implement({
options: {
initialDelay: 5000,
delay: 5000,
limit: 60000
},
startTimer: function(data){
var fn = function(){
if (!this.running) this.send({data: data});
};
this.timer = fn.delay(this.options.initialDelay, this);
this.lastDelay = this.options.initialDelay;
this.completeCheck = function(response){
$clear(this.timer);
this.lastDelay = (response) ? this.options.delay : (this.lastDelay + this.options.delay).min(this.options.limit);
this.timer = fn.delay(this.lastDelay, this);
};
return this.addEvent('complete', this.completeCheck);
},
stopTimer: function(){
$clear(this.timer);
return this.removeEvent('complete', this.completeCheck);
}
});
/*
---
script: Group.js
description: Class for monitoring collections of events
license: MIT-style license
authors:
- Valerio Proietti
requires:
- core:1.2.4/Events
- /MooTools.More
provides: [Group]
...
*/
var Group = new Class({
initialize: function(){
this.instances = Array.flatten(arguments);
this.events = {};
this.checker = {};
},
addEvent: function(type, fn){
this.checker[type] = this.checker[type] || {};
this.events[type] = this.events[type] || [];
if (this.events[type].contains(fn)) return false;
else this.events[type].push(fn);
this.instances.each(function(instance, i){
instance.addEvent(type, this.check.bind(this, [type, instance, i]));
}, this);
return this;
},
check: function(type, instance, i){
this.checker[type][i] = true;
var every = this.instances.every(function(current, j){
return this.checker[type][j] || false;
}, this);
if (!every) return;
this.checker[type] = {};
this.events[type].each(function(event){
event.call(this, this.instances, instance);
}, this);
}
});
/*
---
script: Hash.Cookie.js
description: Class for creating, reading, and deleting Cookies in JSON format.
license: MIT-style license
authors:
- Valerio Proietti
- Aaron Newton
requires:
- core:1.2.4/Cookie
- core:1.2.4/JSON
- /MooTools.More
provides: [Hash.Cookie]
...
*/
Hash.Cookie = new Class({
Extends: Cookie,
options: {
autoSave: true
},
initialize: function(name, options){
this.parent(name, options);
this.load();
},
save: function(){
var value = JSON.encode(this.hash);
if (!value || value.length > 4096) return false; //cookie would be truncated!
if (value == '{}') this.dispose();
else this.write(value);
return true;
},
load: function(){
this.hash = new Hash(JSON.decode(this.read(), true));
return this;
}
});
Hash.each(Hash.prototype, function(method, name){
if (typeof method == 'function') Hash.Cookie.implement(name, function(){
var value = method.apply(this.hash, arguments);
if (this.options.autoSave) this.save();
return value;
});
});
/*
---
script: IframeShim.js
description: Defines IframeShim, a class for obscuring select lists and flash objects in IE.
license: MIT-style license
authors:
- Aaron Newton
requires:
- core:1.2.4/Element.Event
- core:1.2.4/Element.Style
- core:1.2.4/Options Events
- /Element.Position
- /Class.Occlude
provides: [IframeShim]
...
*/
var IframeShim = new Class({
Implements: [Options, Events, Class.Occlude],
options: {
className: 'iframeShim',
src: 'javascript:false;document.write("");',
display: false,
zIndex: null,
margin: 0,
offset: {x: 0, y: 0},
browsers: (Browser.Engine.trident4 || (Browser.Engine.gecko && !Browser.Engine.gecko19 && Browser.Platform.mac))
},
property: 'IframeShim',
initialize: function(element, options){
this.element = document.id(element);
if (this.occlude()) return this.occluded;
this.setOptions(options);
this.makeShim();
return this;
},
makeShim: function(){
if(this.options.browsers){
var zIndex = this.element.getStyle('zIndex').toInt();
if (!zIndex){
zIndex = 1;
var pos = this.element.getStyle('position');
if (pos == 'static' || !pos) this.element.setStyle('position', 'relative');
this.element.setStyle('zIndex', zIndex);
}
zIndex = ($chk(this.options.zIndex) && zIndex > this.options.zIndex) ? this.options.zIndex : zIndex - 1;
if (zIndex < 0) zIndex = 1;
this.shim = new Element('iframe', {
src: this.options.src,
scrolling: 'no',
frameborder: 0,
styles: {
zIndex: zIndex,
position: 'absolute',
border: 'none',
filter: 'progid:DXImageTransform.Microsoft.Alpha(style=0,opacity=0)'
},
'class': this.options.className
}).store('IframeShim', this);
var inject = (function(){
this.shim.inject(this.element, 'after');
this[this.options.display ? 'show' : 'hide']();
this.fireEvent('inject');
}).bind(this);
if (!IframeShim.ready) window.addEvent('load', inject);
else inject();
} else {
this.position = this.hide = this.show = this.dispose = $lambda(this);
}
},
position: function(){
if (!IframeShim.ready || !this.shim) return this;
var size = this.element.measure(function(){ 
return this.getSize(); 
});
if (this.options.margin != undefined){
size.x = size.x - (this.options.margin * 2);
size.y = size.y - (this.options.margin * 2);
this.options.offset.x += this.options.margin;
this.options.offset.y += this.options.margin;
}
this.shim.set({width: size.x, height: size.y}).position({
relativeTo: this.element,
offset: this.options.offset
});
return this;
},
hide: function(){
if (this.shim) this.shim.setStyle('display', 'none');
return this;
},
show: function(){
if (this.shim) this.shim.setStyle('display', 'block');
return this.position();
},
dispose: function(){
if (this.shim) this.shim.dispose();
return this;
},
destroy: function(){
if (this.shim) this.shim.destroy();
return this;
}
});
window.addEvent('load', function(){
IframeShim.ready = true;
});
/*
---
script: HtmlTable.js
description: Builds table elements with methods to add rows.
license: MIT-style license
authors:
- Aaron Newton
requires:
- core:1.2.4/Options
- core:1.2.4/Events
- /Class.Occlude
provides: [HtmlTable]
...
*/
var HtmlTable = new Class({
Implements: [Options, Events, Class.Occlude],
options: {
properties: {
cellpadding: 0,
cellspacing: 0,
border: 0
},
rows: [],
headers: [],
footers: []
},
property: 'HtmlTable',
initialize: function(){
var params = Array.link(arguments, {options: Object.type, table: Element.type});
this.setOptions(params.options);
this.element = params.table || new Element('table', this.options.properties);
if (this.occlude()) return this.occluded;
this.build();
},
build: function(){
this.element.store('HtmlTable', this);
this.body = document.id(this.element.tBodies[0]) || new Element('tbody').inject(this.element);
$$(this.body.rows);
if (this.options.headers.length) this.setHeaders(this.options.headers);
else this.thead = document.id(this.element.tHead);
if (this.thead) this.head = document.id(this.thead.rows[0]);
if (this.options.footers.length) this.setFooters(this.options.footers);
this.tfoot = document.id(this.element.tFoot);
if (this.tfoot) this.foot = document.id(this.thead.rows[0]);
this.options.rows.each(function(row){
this.push(row);
}, this);
['adopt', 'inject', 'wraps', 'grab', 'replaces', 'dispose'].each(function(method){
this[method] = this.element[method].bind(this.element);
}, this);
},
toElement: function(){
return this.element;
},
empty: function(){
this.body.empty();
return this;
},
set: function(what, items) {
var target = (what == 'headers') ? 'tHead' : 'tFoot';
this[target.toLowerCase()] = (document.id(this.element[target]) || new Element(target.toLowerCase()).inject(this.element, 'top')).empty();
var data = this.push(items, {}, this[target.toLowerCase()], what == 'headers' ? 'th' : 'td');
if (what == 'headers') this.head = document.id(this.thead.rows[0]);
else this.foot = document.id(this.thead.rows[0]);
return data;
},
setHeaders: function(headers){
this.set('headers', headers);
return this;
},
setFooters: function(footers){
this.set('footers', footers);
return this;
},
push: function(row, rowProperties, target, tag){
var tds = row.map(function(data){
var td = new Element(tag || 'td', data.properties),
type = data.content || data || '',
element = document.id(type);
if($type(type) != 'string' && element) td.adopt(element);
else td.set('html', type);
return td;
});
return {
tr: new Element('tr', rowProperties).inject(target || this.body).adopt(tds),
tds: tds
};
}
});
/*
---
script: HtmlTable.Zebra.js
description: Builds a stripy table with methods to add rows.
license: MIT-style license
authors:
- Harald Kirschner
- Aaron Newton
requires:
- /HtmlTable
- /Class.refactor
provides: [HtmlTable.Zebra]
...
*/
HtmlTable = Class.refactor(HtmlTable, {
options: {
classZebra: 'table-tr-odd',
zebra: true
},
initialize: function(){
this.previous.apply(this, arguments);
if (this.occluded) return this.occluded;
if (this.options.zebra) this.updateZebras();
},
updateZebras: function(){
Array.each(this.body.rows, this.zebra, this);
},
zebra: function(row, i){
return row[((i % 2) ? 'remove' : 'add')+'Class'](this.options.classZebra);
},
push: function(){
var pushed = this.previous.apply(this, arguments);
if (this.options.zebra) this.updateZebras();
return pushed;
}
});
/*
---
script: HtmlTable.Sort.js
description: Builds a stripy, sortable table with methods to add rows.
license: MIT-style license
authors:
- Harald Kirschner
- Aaron Newton
requires:
- core:1.2.4/Hash
- /HtmlTable
- /Class.refactor
- /Element.Delegation
- /Date
provides: [HtmlTable.Sort]
...
*/
HtmlTable = Class.refactor(HtmlTable, {
options: {/*
onSort: $empty, */
sortIndex: 0,
sortReverse: false,
parsers: [],
defaultParser: 'string',
classSortable: 'table-sortable',
classHeadSort: 'table-th-sort',
classHeadSortRev: 'table-th-sort-rev',
classNoSort: 'table-th-nosort',
classGroupHead: 'table-tr-group-head',
classGroup: 'table-tr-group',
classCellSort: 'table-td-sort',
classSortSpan: 'table-th-sort-span',
sortable: false
},
initialize: function () {
this.previous.apply(this, arguments);
if (this.occluded) return this.occluded;
this.sorted = {index: null, dir: 1};
this.bound = {
headClick: this.headClick.bind(this)
};
this.sortSpans = new Elements();
if (this.options.sortable) {
this.enableSort();
if (this.options.sortIndex != null) this.sort(this.options.sortIndex, this.options.sortReverse);
}
},
attachSorts: function(attach){
this.element.removeEvents('click:relay(th)');
this.element[$pick(attach, true) ? 'addEvent' : 'removeEvent']('click:relay(th)', this.bound.headClick);
},
setHeaders: function(){
this.previous.apply(this, arguments);
if (this.sortEnabled) this.detectParsers();
},
detectParsers: function(force){
if (!this.head) return;
var parsers = this.options.parsers, 
rows = this.body.rows;
// auto-detect
this.parsers = $$(this.head.cells).map(function(cell, index) {
if (!force && (cell.hasClass(this.options.classNoSort) || cell.retrieve('htmltable-parser'))) return cell.retrieve('htmltable-parser');
var thDiv = new Element('div');
$each(cell.childNodes, function(node) {
thDiv.adopt(node);
});
thDiv.inject(cell);
var sortSpan = new Element('span', {'html': '&#160;', 'class': this.options.classSortSpan}).inject(thDiv, 'top');
this.sortSpans.push(sortSpan);
var parser = parsers[index], 
cancel;
switch ($type(parser)) {
case 'function': parser = {convert: parser}; cancel = true; break;
case 'string': parser = parser; cancel = true; break;
}
if (!cancel) {
HtmlTable.Parsers.some(function(current) {
var match = current.match;
if (!match) return false;
for (var i = 0, j = rows.length; i < j; i++) {
var text = $(rows[i].cells[index]).get('html').clean();
if (text && match.test(text)) {
parser = current;
return true;
}
}
});
}
if (!parser) parser = this.options.defaultParser;
cell.store('htmltable-parser', parser);
return parser;
}, this);
},
headClick: function(event, el) {
if (!this.head || el.hasClass(this.options.classNoSort)) return;
var index = Array.indexOf(this.head.cells, el);
this.sort(index);
return false;
},
sort: function(index, reverse, pre) {
if (!this.head) return;
pre = !!(pre);
var classCellSort = this.options.classCellSort;
var classGroup = this.options.classGroup, 
classGroupHead = this.options.classGroupHead;
if (!pre) {
if (index != null) {
if (this.sorted.index == index) {
this.sorted.reverse = !(this.sorted.reverse);
} else {
if (this.sorted.index != null) {
this.sorted.reverse = false;
this.head.cells[this.sorted.index].removeClass(this.options.classHeadSort).removeClass(this.options.classHeadSortRev);
} else {
this.sorted.reverse = true;
}
this.sorted.index = index;
}
} else {
index = this.sorted.index;
}
if (reverse != null) this.sorted.reverse = reverse;
var head = document.id(this.head.cells[index]);
if (head) {
head.addClass(this.options.classHeadSort);
if (this.sorted.reverse) head.addClass(this.options.classHeadSortRev);
else head.removeClass(this.options.classHeadSortRev);
}
this.body.getElements('td').removeClass(this.options.classCellSort);
}
var parser = this.parsers[index];
if ($type(parser) == 'string') parser = HtmlTable.Parsers.get(parser);
if (!parser) return;
if (!Browser.Engine.trident) {
var rel = this.body.getParent();
this.body.dispose();
}
var data = Array.map(this.body.rows, function(row, i) {
var value = parser.convert.call(document.id(row.cells[index]));
return {
position: i,
value: value,
toString:  function() {
return value.toString();
}
};
}, this);
data.reverse(true);
data.sort(function(a, b){
if (a.value === b.value) return 0;
return a.value > b.value ? 1 : -1;
});
if (!this.sorted.reverse) data.reverse(true);
var i = data.length, body = this.body;
var j, position, entry, group;
while (i) {
var item = data[--i];
position = item.position;
var row = body.rows[position];
if (row.disabled) continue;
if (!pre) {
if (group === item.value) {
row.removeClass(classGroupHead).addClass(classGroup);
} else {
group = item.value;
row.removeClass(classGroup).addClass(classGroupHead);
}
if (this.zebra) this.zebra(row, i);
row.cells[index].addClass(classCellSort);
}
body.appendChild(row);
for (j = 0; j < i; j++) {
if (data[j].position > position) data[j].position--;
}
};
data = null;
if (rel) rel.grab(body);
return this.fireEvent('sort', [body, index]);
},
reSort: function(){
if (this.sortEnabled) this.sort.call(this, this.sorted.index, this.sorted.reverse);
return this;
},
enableSort: function(){
this.element.addClass(this.options.classSortable);
this.attachSorts(true);
this.detectParsers();
this.sortEnabled = true;
return this;
},
disableSort: function(){
this.element.removeClass(this.options.classSortable);
this.attachSorts(false);
this.sortSpans.each(function(span) { span.destroy(); });
this.sortSpans.empty();
this.sortEnabled = false;
return this;
}
});
HtmlTable.Parsers = new Hash({
'date': {
match: /^\d{2}[-\/ ]\d{2}[-\/ ]\d{2,4}$/,
convert: function() {
return Date.parse(this.get('text')).format('db');
},
type: 'date'
},
'input-checked': {
match: / type="(radio|checkbox)" /,
convert: function() {
return this.getElement('input').checked;
}
},
'input-value': {
match: /<input/,
convert: function() {
return this.getElement('input').value;
}
},
'number': {
match: /^\d+[^\d.,]*$/,
convert: function() {
return this.get('text').toInt();
},
number: true
},
'numberLax': {
match: /^[^\d]+\d+$/,
convert: function() {
return this.get('text').replace(/[^-?^0-9]/, '').toInt();
},
number: true
},
'float': {
match: /^[\d]+\.[\d]+/,
convert: function() {
return this.get('text').replace(/[^-?^\d.]/, '').toFloat();
},
number: true
},
'floatLax': {
match: /^[^\d]+[\d]+\.[\d]+$/,
convert: function() {
return this.get('text').replace(/[^-?^\d.]/, '');
},
number: true
},
'string': {
match: null,
convert: function() {
return this.get('text');
}
},
'title': {
match: null,
convert: function() {
return this.title;
}
}
});
/*
---
script: HtmlTable.Select.js
description: Builds a stripy, sortable table with methods to add rows. Rows can be selected with the mouse or keyboard navigation.
license: MIT-style license
authors:
- Harald Kirschner
- Aaron Newton
requires:
- /Keyboard
- /HtmlTable
- /Class.refactor
- /Element.Delegation
provides: [HtmlTable.Select]
...
*/
HtmlTable = Class.refactor(HtmlTable, {
options: {
/*onRowFocus: $empty,
onRowUnfocus: $empty,*/
useKeyboard: true,
classRowSelected: 'table-tr-selected',
classRowHovered: 'table-tr-hovered',
classSelectable: 'table-selectable',
allowMultiSelect: true,
selectable: false
},
initialize: function(){
this.previous.apply(this, arguments);
if (this.occluded) return this.occluded;
this.selectedRows = new Elements();
this.bound = {
mouseleave: this.mouseleave.bind(this),
focusRow: this.focusRow.bind(this)
};
if (this.options.selectable) this.enableSelect();
},
enableSelect: function(){
this.selectEnabled = true;
this.attachSelects();
this.element.addClass(this.options.classSelectable);
},
disableSelect: function(){
this.selectEnabled = false;
this.attach(false);
this.element.removeClass(this.options.classSelectable);
},
attachSelects: function(attach){
attach = $pick(attach, true);
var method = attach ? 'addEvents' : 'removeEvents';
this.element[method]({
mouseleave: this.bound.mouseleave
});
this.body[method]({
'click:relay(tr)': this.bound.focusRow
});
if (this.options.useKeyboard || this.keyboard){
if (!this.keyboard) this.keyboard = new Keyboard({
events: {
down: function(e) {
e.preventDefault();
this.shiftFocus(1);
}.bind(this),
up: function(e) {
e.preventDefault();
this.shiftFocus(-1);
}.bind(this),
enter: function(e) {
e.preventDefault();
if (this.hover) this.focusRow(this.hover);
}.bind(this)
},
active: true
});
this.keyboard[attach ? 'activate' : 'deactivate']();
}
this.updateSelects();
},
mouseleave: function(){
if (this.hover) this.leaveRow(this.hover);
},
focus: function(){
if (this.keyboard) this.keyboard.activate();
},
blur: function(){
if (this.keyboard) this.keyboard.deactivate();
},
push: function(){
var ret = this.previous.apply(this, arguments);
this.updateSelects();
return ret;
},
updateSelects: function(){
Array.each(this.body.rows, function(row){
var binders = row.retrieve('binders');
if ((binders && this.selectEnabled) || (!binders && !this.selectEnabled)) return;
if (!binders){
binders = {
mouseenter: this.enterRow.bind(this, [row]),
mouseleave: this.leaveRow.bind(this, [row])
};
row.store('binders', binders).addEvents(binders);
} else {
row.removeEvents(binders);
}
}, this);
},
enterRow: function(row){
if (this.hover) this.hover = this.leaveRow(this.hover);
this.hover = row.addClass(this.options.classRowHovered);
},
shiftFocus: function(offset){
if (!this.hover) return this.enterRow(this.body.rows[0]);
var to = Array.indexOf(this.body.rows, this.hover) + offset;
if (to < 0) to = 0;
if (to >= this.body.rows.length) to = this.body.rows.length - 1;
if (this.hover == this.body.rows[to]) return this;
this.enterRow(this.body.rows[to]);
},
leaveRow: function(row){
row.removeClass(this.options.classRowHovered);
},
focusRow: function(){
var row = arguments[1] || arguments[0]; //delegation passes the event first
if (!this.body.getChildren().contains(row)) return;
var unfocus = function(row){
this.selectedRows.erase(row);
row.removeClass(this.options.classRowSelected);
this.fireEvent('rowUnfocus', [row, this.selectedRows]);
}.bind(this);
if (!this.options.allowMultiSelect) this.selectedRows.each(unfocus);
if (!this.selectedRows.contains(row)) {
this.selectedRows.push(row);
row.addClass(this.options.classRowSelected);
this.fireEvent('rowFocus', [row, this.selectedRows]);
} else {
unfocus(row);
}
return false;
},
selectAll: function(status){
status = $pick(status, true);
if (!this.options.allowMultiSelect && status) return;
if (!status) this.selectedRows.removeClass(this.options.classRowSelected).empty();
else this.selectedRows.combine(this.body.rows).addClass(this.options.classRowSelected);
return this;
},
selectNone: function(){
return this.selectAll(false);
}
});
/*
---
script: Keyboard.js
description: KeyboardEvents used to intercept events on a class for keyboard and format modifiers in a specific order so as to make alt+shift+c the same as shift+alt+c.
license: MIT-style license
authors:
- Perrin Westrich
- Aaron Newton
- Scott Kyle
requires:
- core:1.2.4/Events
- core:1.2.4/Options
- core:1.2.4/Element.Event
- /Log
provides: [Keyboard]
...
*/
(function(){
var Keyboard = this.Keyboard = new Class({
Extends: Events,
Implements: [Options, Log],
options: {
/*
onActivate: $empty,
onDeactivate: $empty,
*/
defaultEventType: 'keydown',
active: false,
events: {},
nonParsedEvents: ['activate', 'deactivate', 'onactivate', 'ondeactivate', 'changed', 'onchanged']
},
initialize: function(options){
this.setOptions(options);
this.setup();
}, 
setup: function(){
this.addEvents(this.options.events);
//if this is the root manager, nothing manages it
if (Keyboard.manager && !this.manager) Keyboard.manager.manage(this);
if (this.options.active) this.activate();
},
handle: function(event, type){
//Keyboard.stop(event) prevents key propagation
if (event.preventKeyboardPropagation) return;
var bubbles = !!this.manager;
if (bubbles && this.activeKB){
this.activeKB.handle(event, type);
if (event.preventKeyboardPropagation) return;
}
this.fireEvent(type, event);
if (!bubbles && this.activeKB) this.activeKB.handle(event, type);
},
addEvent: function(type, fn, internal){
return this.parent(Keyboard.parse(type, this.options.defaultEventType, this.options.nonParsedEvents), fn, internal);
},
removeEvent: function(type, fn){
return this.parent(Keyboard.parse(type, this.options.defaultEventType, this.options.nonParsedEvents), fn);
},
toggleActive: function(){
return this[this.active ? 'deactivate' : 'activate']();
},
activate: function(instance){
if (instance) {
//if we're stealing focus, store the last keyboard to have it so the relenquish command works
if (instance != this.activeKB) this.previous = this.activeKB;
//if we're enabling a child, assign it so that events are now passed to it
this.activeKB = instance.fireEvent('activate');
Keyboard.manager.fireEvent('changed');
} else if (this.manager) {
//else we're enabling ourselves, we must ask our parent to do it for us
this.manager.activate(this);
}
return this;
},
deactivate: function(instance){
if (instance) {
if(instance === this.activeKB) {
this.activeKB = null;
instance.fireEvent('deactivate');
Keyboard.manager.fireEvent('changed');
}
}
else if (this.manager) {
this.manager.deactivate(this);
}
return this;
},
relenquish: function(){
if (this.previous) this.activate(this.previous);
},
//management logic
manage: function(instance){
if (instance.manager) instance.manager.drop(instance);
this.instances.push(instance);
instance.manager = this;
if (!this.activeKB) this.activate(instance);
else this._disable(instance);
},
_disable: function(instance){
if (this.activeKB == instance) this.activeKB = null;
},
drop: function(instance){
this._disable(instance);
this.instances.erase(instance);
},
instances: [],
trace: function(){
Keyboard.trace(this);
},
each: function(fn){
Keyboard.each(this, fn);
}
});
var parsed = {};
var modifiers = ['shift', 'control', 'alt', 'meta'];
var regex = /^(?:shift|control|ctrl|alt|meta)$/;
Keyboard.parse = function(type, eventType, ignore){
if (ignore && ignore.contains(type.toLowerCase())) return type;
type = type.toLowerCase().replace(/^(keyup|keydown):/, function($0, $1){
eventType = $1;
return '';
});
if (!parsed[type]){
var key, mods = {};
type.split('+').each(function(part){
if (regex.test(part)) mods[part] = true;
else key = part;
});
mods.control = mods.control || mods.ctrl; // allow both control and ctrl
var keys = [];
modifiers.each(function(mod){
if (mods[mod]) keys.push(mod);
});
if (key) keys.push(key);
parsed[type] = keys.join('+');
}
return eventType + ':' + parsed[type];
};
Keyboard.each = function(keyboard, fn){
var current = keyboard || Keyboard.manager;
while (current){
fn.run(current);
current = current.activeKB;
}
};
Keyboard.stop = function(event){
event.preventKeyboardPropagation = true;
};
Keyboard.manager = new Keyboard({
active: true
});
Keyboard.trace = function(keyboard){
keyboard = keyboard || Keyboard.manager;
keyboard.enableLog();
keyboard.log('the following items have focus: ');
Keyboard.each(keyboard, function(current){
keyboard.log(document.id(current.widget) || current.wiget || current);
});
};
var handler = function(event){
var keys = [];
modifiers.each(function(mod){
if (event[mod]) keys.push(mod);
});
if (!regex.test(event.key)) keys.push(event.key);
Keyboard.manager.handle(event, event.type + ':' + keys.join('+'));
};
document.addEvents({
'keyup': handler,
'keydown': handler
});
Event.Keys.extend({
'shift': 16,
'control': 17,
'alt': 18,
'capslock': 20,
'pageup': 33,
'pagedown': 34,
'end': 35,
'home': 36,
'numlock': 144,
'scrolllock': 145,
';': 186,
'=': 187,
',': 188,
'-': Browser.Engine.Gecko ? 109 : 189,
'.': 190,
'/': 191,
'`': 192,
'[': 219,
'\\': 220,
']': 221,
"'": 222
});
})();
/*
---
script: Mask.js
description: Creates a mask element to cover another.
license: MIT-style license
authors:
- Aaron Newton
requires:
- core:1.2.4/Options
- core:1.2.4/Events
- core:1.2.4/Element.Event
- /Class.Binds
- /Element.Position
- /IframeShim
provides: [Mask]
...
*/
var Mask = new Class({
Implements: [Options, Events],
Binds: ['position'],
options: {
// onShow: $empty,
// onHide: $empty,
// onDestroy: $empty,
// onClick: $empty,
//inject: {
//  where: 'after',
//  target: null,
//},
// hideOnClick: false,
// id: null,
// destroyOnHide: false,
style: {},
'class': 'mask',
maskMargins: false,
useIframeShim: true,
iframeShimOptions: {}
},
initialize: function(target, options){
this.target = document.id(target) || document.id(document.body);
this.target.store('Mask', this);
this.setOptions(options);
this.render();
this.inject();
},
render: function() {
this.element = new Element('div', {
'class': this.options['class'],
id: this.options.id || 'mask-' + $time(),
styles: $merge(this.options.style, {
display: 'none'
}),
events: {
click: function(){
this.fireEvent('click');
if (this.options.hideOnClick) this.hide();
}.bind(this)
}
});
this.hidden = true;
},
toElement: function(){
return this.element;
},
inject: function(target, where){
where = where || this.options.inject ? this.options.inject.where : '' || this.target == document.body ? 'inside' : 'after';
target = target || this.options.inject ? this.options.inject.target : '' || this.target;
this.element.inject(target, where);
if (this.options.useIframeShim) {
this.shim = new IframeShim(this.element, this.options.iframeShimOptions);
this.addEvents({
show: this.shim.show.bind(this.shim),
hide: this.shim.hide.bind(this.shim),
destroy: this.shim.destroy.bind(this.shim)
});
}
},
position: function(){
this.resize(this.options.width, this.options.height);
this.element.position({
relativeTo: this.target,
position: 'topLeft',
ignoreMargins: !this.options.maskMargins,
ignoreScroll: this.target == document.body
});
return this;
},
resize: function(x, y){
var opt = {
styles: ['padding', 'border']
};
if (this.options.maskMargins) opt.styles.push('margin');
var dim = this.target.getComputedSize(opt);
if (this.target == document.body) {
var win = window.getSize();
if (dim.totalHeight < win.y) dim.totalHeight = win.y;
if (dim.totalWidth < win.x) dim.totalWidth = win.x;
}
this.element.setStyles({
width: $pick(x, dim.totalWidth, dim.x),
height: $pick(y, dim.totalHeight, dim.y)
});
return this;
},
show: function(){
if (!this.hidden) return this;
window.addEvent('resize', this.position);
this.position();
this.showMask.apply(this, arguments);
return this;
},
showMask: function(){
this.element.setStyle('display', 'block');
this.hidden = false;
this.fireEvent('show');
},
hide: function(){
if (this.hidden) return this;
window.removeEvent('resize', this.position);
this.hideMask.apply(this, arguments);
if (this.options.destroyOnHide) return this.destroy();
return this;
},
hideMask: function(){
this.element.setStyle('display', 'none');
this.hidden = true;
this.fireEvent('hide');
},
toggle: function(){
this[this.hidden ? 'show' : 'hide']();
},
destroy: function(){
this.hide();
this.element.destroy();
this.fireEvent('destroy');
this.target.eliminate('mask');
}
});
Element.Properties.mask = {
set: function(options){
var mask = this.retrieve('mask');
return this.eliminate('mask').store('mask:options', options);
},
get: function(options){
if (options || !this.retrieve('mask')){
if (this.retrieve('mask')) this.retrieve('mask').destroy();
if (options || !this.retrieve('mask:options')) this.set('mask', options);
this.store('mask', new Mask(this, this.retrieve('mask:options')));
}
return this.retrieve('mask');
}
};
Element.implement({
mask: function(options){
this.get('mask', options).show();
return this;
},
unmask: function(){
this.get('mask').hide();
return this;
}
});
/*
---
script: Tips.js
description: Class for creating nice tips that follow the mouse cursor when hovering an element.
license: MIT-style license
authors:
- Valerio Proietti
- Christoph Pojer
requires:
- core:1.2.4/Options
- core:1.2.4/Events
- core:1.2.4/Element.Event
- core:1.2.4/Element.Style
- core:1.2.4/Element.Dimensions
- /MooTools.More
provides: [Tips]
...
*/
(function(){
var read = function(option, element){
return (option) ? ($type(option) == 'function' ? option(element) : element.get(option)) : '';
};
this.Tips = new Class({
Implements: [Events, Options],
options: {
/*
onAttach: $empty(element),
onDetach: $empty(element),
*/
onShow: function(){
this.tip.setStyle('display', 'block');
},
onHide: function(){
this.tip.setStyle('display', 'none');
},
title: 'title',
text: function(element){
return element.get('rel') || element.get('href');
},
showDelay: 100,
hideDelay: 100,
className: 'tip-wrap',
offset: {x: 16, y: 16},
windowPadding: {x:0, y:0},
fixed: false
},
initialize: function(){
var params = Array.link(arguments, {options: Object.type, elements: $defined});
this.setOptions(params.options);
if (params.elements) this.attach(params.elements);
this.container = new Element('div', {'class': 'tip'});
},
toElement: function(){
if (this.tip) return this.tip;
return this.tip = new Element('div', {
'class': this.options.className,
styles: {
position: 'absolute',
top: 0,
left: 0
}
}).adopt(
new Element('div', {'class': 'tip-top'}),
this.container,
new Element('div', {'class': 'tip-bottom'})
).inject(document.body);
},
attach: function(elements){
$$(elements).each(function(element){
var title = read(this.options.title, element),
text = read(this.options.text, element);
element.erase('title').store('tip:native', title).retrieve('tip:title', title);
element.retrieve('tip:text', text);
this.fireEvent('attach', [element]);
var events = ['enter', 'leave'];
if (!this.options.fixed) events.push('move');
events.each(function(value){
var event = element.retrieve('tip:' + value);
if (!event) event = this['element' + value.capitalize()].bindWithEvent(this, element);
element.store('tip:' + value, event).addEvent('mouse' + value, event);
}, this);
}, this);
return this;
},
detach: function(elements){
$$(elements).each(function(element){
['enter', 'leave', 'move'].each(function(value){
element.removeEvent('mouse' + value, element.retrieve('tip:' + value)).eliminate('tip:' + value);
});
this.fireEvent('detach', [element]);
if (this.options.title == 'title'){ // This is necessary to check if we can revert the title
var original = element.retrieve('tip:native');
if (original) element.set('title', original);
}
}, this);
return this;
},
elementEnter: function(event, element){
this.container.empty();
['title', 'text'].each(function(value){
var content = element.retrieve('tip:' + value);
if (content) this.fill(new Element('div', {'class': 'tip-' + value}).inject(this.container), content);
}, this);
$clear(this.timer);
this.timer = (function(){
this.show(this, element);
this.position((this.options.fixed) ? {page: element.getPosition()} : event);
}).delay(this.options.showDelay, this);
},
elementLeave: function(event, element){
$clear(this.timer);
this.timer = this.hide.delay(this.options.hideDelay, this, element);
this.fireForParent(event, element);
},
fireForParent: function(event, element){
element = element.getParent();
if (!element || element == document.body) return;
if (element.retrieve('tip:enter')) element.fireEvent('mouseenter', event);
else this.fireForParent(event, element);
},
elementMove: function(event, element){
this.position(event);
},
position: function(event){
if (!this.tip) document.id(this);
var size = window.getSize(), scroll = window.getScroll(),
tip = {x: this.tip.offsetWidth, y: this.tip.offsetHeight},
props = {x: 'left', y: 'top'},
obj = {};
for (var z in props){
obj[props[z]] = event.page[z] + this.options.offset[z];
if ((obj[props[z]] + tip[z] - scroll[z]) > size[z] - this.options.windowPadding[z]) obj[props[z]] = event.page[z] - this.options.offset[z] - tip[z];
}
this.tip.setStyles(obj);
},
fill: function(element, contents){
if(typeof contents == 'string') element.set('html', contents);
else element.adopt(contents);
},
show: function(element){
if (!this.tip) document.id(this);
this.fireEvent('show', [this.tip, element]);
},
hide: function(element){
if (!this.tip) document.id(this);
this.fireEvent('hide', [this.tip, element]);
}
});
})();
/*
---
script: Spinner.js
description: Adds a semi-transparent overlay over a dom element with a spinnin ajax icon.
license: MIT-style license
authors:
- Aaron Newton
requires:
- core:1.2.4/Fx.Tween
- /Class.refactor
- /Mask
provides: [Spinner]
...
*/
var Spinner = new Class({
Extends: Mask,
options: {
/*message: false,*/
'class':'spinner',
containerPosition: {},
content: {
'class':'spinner-content'
},
messageContainer: {
'class':'spinner-msg'
},
img: {
'class':'spinner-img'
},
fxOptions: {
link: 'chain'
}
},
initialize: function(){
this.parent.apply(this, arguments);
this.target.store('spinner', this);
//add this to events for when noFx is true; parent methods handle hide/show
var deactivate = function(){ this.active = false; }.bind(this);
this.addEvents({
hide: deactivate,
show: deactivate
});
},
render: function(){
this.parent();
this.element.set('id', this.options.id || 'spinner-'+$time());
this.content = document.id(this.options.content) || new Element('div', this.options.content);
this.content.inject(this.element);
if (this.options.message) {
this.msg = document.id(this.options.message) || new Element('p', this.options.messageContainer).appendText(this.options.message);
this.msg.inject(this.content);
}
if (this.options.img) {
this.img = document.id(this.options.img) || new Element('div', this.options.img);
this.img.inject(this.content);
}
this.element.set('tween', this.options.fxOptions);
},
show: function(noFx){
if (this.active) return this.chain(this.show.bind(this));
if (!this.hidden) {
this.callChain.delay(20, this);
return this;
}
this.active = true;
return this.parent(noFx);
},
showMask: function(noFx){
var pos = function(){
this.content.position($merge({
relativeTo: this.element
}, this.options.containerPosition));
}.bind(this);
if (noFx) {
this.parent();
pos();
} else {
this.element.setStyles({
display: 'block',
opacity: 0
}).tween('opacity', this.options.style.opacity || 0.9);
pos();
this.hidden = false;
this.fireEvent('show');
this.callChain();
}
},
hide: function(noFx){
if (this.active) return this.chain(this.hide.bind(this));
if (this.hidden) {
this.callChain.delay(20, this);
return this;
}
this.active = true;
return this.parent(noFx);
},
hideMask: function(noFx){
if (noFx) return this.parent();
this.element.tween('opacity', 0).get('tween').chain(function(){
this.element.setStyle('display', 'none');
this.hidden = true;
this.fireEvent('hide');
this.callChain();
}.bind(this));
},
destroy: function(){
this.content.destroy();
this.parent();
this.target.eliminate('spinner');
}
});
Spinner.implement(new Chain);
if (window.Request) {
Request = Class.refactor(Request, {
options: {
useSpinner: false,
spinnerOptions: {},
spinnerTarget: false
},
initialize: function(options){
this._send = this.send;
this.send = function(options){
if (this.spinner) this.spinner.chain(this._send.bind(this, options)).show();
else this._send(options);
return this;
};
this.previous(options);
var update = document.id(this.options.spinnerTarget) || document.id(this.options.update);
if (this.options.useSpinner && update) {
this.spinner = update.get('spinner', this.options.spinnerOptions);
['onComplete', 'onException', 'onCancel'].each(function(event){
this.addEvent(event, this.spinner.hide.bind(this.spinner));
}, this);
}
},
getSpinner: function(){
return this.spinner;
}
});
}
Element.Properties.spinner = {
set: function(options){
var spinner = this.retrieve('spinner');
return this.eliminate('spinner').store('spinner:options', options);
},
get: function(options){
if (options || !this.retrieve('spinner')){
if (this.retrieve('spinner')) this.retrieve('spinner').destroy();
if (options || !this.retrieve('spinner:options')) this.set('spinner', options);
new Spinner(this, this.retrieve('spinner:options'));
}
return this.retrieve('spinner');
}
};
Element.implement({
spin: function(options){
this.get('spinner', options).show();
return this;
},
unspin: function(){
var opt = Array.link(arguments, {options: Object.type, callback: Function.type});
this.get('spinner', opt.options).hide(opt.callback);
return this;
}
});
/*
---
script: Date.English.US.js
description: Date messages for US English.
license: MIT-style license
authors:
- Aaron Newton
requires:
- /Lang
- /Date
provides: [Date.English.US]
...
*/
MooTools.lang.set('en-US', 'Date', {
months: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
days: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
//culture's date order: MM/DD/YYYY
dateOrder: ['month', 'date', 'year'],
shortDate: '%m/%d/%Y',
shortTime: '%I:%M%p',
AM: 'AM',
PM: 'PM',
/* Date.Extras */
ordinal: function(dayOfMonth){
//1st, 2nd, 3rd, etc.
return (dayOfMonth > 3 && dayOfMonth < 21) ? 'th' : ['th', 'st', 'nd', 'rd', 'th'][Math.min(dayOfMonth % 10, 4)];
},
lessThanMinuteAgo: 'less than a minute ago',
minuteAgo: 'about a minute ago',
minutesAgo: '{delta} minutes ago',
hourAgo: 'about an hour ago',
hoursAgo: 'about {delta} hours ago',
dayAgo: '1 day ago',
daysAgo: '{delta} days ago',
weekAgo: '1 week ago',
weeksAgo: '{delta} weeks ago',
monthAgo: '1 month ago',
monthsAgo: '{delta} months ago',
yearAgo: '1 year ago',
yearsAgo: '{delta} years ago',
lessThanMinuteUntil: 'less than a minute from now',
minuteUntil: 'about a minute from now',
minutesUntil: '{delta} minutes from now',
hourUntil: 'about an hour from now',
hoursUntil: 'about {delta} hours from now',
dayUntil: '1 day from now',
daysUntil: '{delta} days from now',
weekUntil: '1 week from now',
weeksUntil: '{delta} weeks from now',
monthUntil: '1 month from now',
monthsUntil: '{delta} months from now',
yearUntil: '1 year from now',
yearsUntil: '{delta} years from now'
});
$A = function(iterable, start, length){
if (Browser.Engine.trident && $type(iterable) == 'collection'){
start = start || 0;
if (start < 0) start = iterable.length + start;
length = length || (iterable.length - start);
var array = [];
for (var i = 0; i < length; i++) array[i] = iterable[start++];
return array;
}
start = (start || 0) + ((start < 0) ? iterable.length : 0);
var end = ((!$chk(length)) ? iterable.length : length) + start;
return Array.prototype.slice.call(iterable, start, end);
};
(function(){
var natives = [Array, Function, String, RegExp, Number];
for (var i = 0, l = natives.length; i < l; i++) natives[i].extend = natives[i].implement;
})();
window.extend = document.extend = function(properties){
for (var property in properties) this[property] = properties[property];
};
window[Browser.Engine.name] = window[Browser.Engine.name + Browser.Engine.version] = true;
window.ie = window.trident;
window.ie6 = window.trident4;
window.ie7 = window.trident5;
Class.empty = $empty;
//legacy .extend support
Class.prototype.extend = function(properties){
properties.Extends = this;
return new Class(properties);
};
Array.implement({
copy: function(start, length){
return $A(this, start, length);
}
});
Array.alias({erase: 'remove', combine: 'merge'});
Function.extend({
bindAsEventListener: function(bind, args){
return this.create({'bind': bind, 'event': true, 'arguments': args});
}
});
Function.empty = $empty;
Hash.alias({getKeys: 'keys', getValues: 'values', has: 'hasKey', combine: 'merge'});
var Abstract = Hash;
Element.extend = Element.implement;
Elements.extend = Elements.implement;
Element.implement({
getFormElements: function(){
return this.getElements('input, textarea, select');
},
replaceWith: function(el){
el = $(el);
this.parentNode.replaceChild(el, this);
return el;
},
removeElements: function(){
return this.dispose();
}
});
Element.alias({'dispose': 'remove', 'getLast': 'getLastChild'});
Element.implement({
getText: function(){
return this.get('text');
},
setText: function(text){
return this.set('text', text);
},
setHTML: function(){
return this.set('html', arguments);
},
getHTML: function(){
return this.get('html');
},
getTag: function(){
return this.get('tag');
}
});
Event.keys = Event.Keys;
Element.implement({
setOpacity: function(op){
return this.set('opacity', op);
}
});
Object.toQueryString = Hash.toQueryString;
var XHR = new Class({
Extends: Request,
options: {
update: false
},
initialize: function(url, options){
this.parent(options);
this.url = url;
},
request: function(data){
return this.send(this.url, data || this.options.data);
},
send: function(url, data){
if (!this.check(arguments.callee, url, data)) return this;
return this.parent({url: url, data: data});
},
success: function(text, xml){
text = this.processScripts(text);
if (this.options.update) $(this.options.update).empty().set('html', text);
this.onSuccess(text, xml);
},
failure: function(){
this.fireEvent('failure', this.xhr);
}
});
var Ajax = XHR;
JSON.Remote = new Class({
options: {
key: 'json'
},
Extends: Request.JSON,
initialize: function(url, options){
this.parent(options);
this.onComplete = $empty;
this.url = url;
},
send: function(data){
if (!this.check(arguments.callee, data)) return this;
return this.parent({url: this.url, data: {json: Json.encode(data)}});
},
failure: function(){
this.fireEvent('failure', this.xhr);
}
});
Fx.implement({
custom: function(from, to){
return this.start(from, to);
},
clearTimer: function(){
return this.cancel();
},
stop: function(){
return this.cancel();
}
});
Fx.Base = Fx;
Fx.Style = function(element, property, options){
return new Fx.Tween(element, $extend({property: property}, options));
};
Element.implement({
effect: function(property, options){
return new Fx.Tween(this, $extend({property: property}, options));
}
});
Fx.Styles = Fx.Morph;
Element.implement({
effects: function(options){
return new Fx.Morph(this, options);
}
});
Native.implement([Element, Document], {
getElementsByClassName: function(className){
return this.getElements('.' + className);
},
getElementsBySelector: function(selector){
return this.getElements(selector);
}
});
Elements.implement({
filterByTag: function(tag){
return this.filter(tag);
},
filterByClass: function(className){
return this.filter('.' + className);
},
filterById: function(id){
return this.filter('#' + id);
},
filterByAttribute: function(name, operator, value){
return this.filter('[' + name + (operator || '') + (value || '') + ']');
}
});
var $E = function(selector, filter){
return (document.id(filter) || document).getElement(selector);
};
var $ES = function(selector, filter){
return (document.id(filter) || document).getElements(selector);
};
var Json = JSON;
JSON.toString = JSON.encode;
JSON.evaluate = JSON.decode;
Cookie.set = function(key, value, options){
return new Cookie(key, options).write(value);
};
Cookie.get = function(key){
var value = new Cookie(key).read();
return (value) ? new Cookie(key).read() : false;
};
Cookie.remove = function(key, options){
return new Cookie(key, options).dispose();
};
var Template = new Class({
options: {
'before': '%',
'after': '%'
},
initialize: function(string, options){
this.string = string;
this.setOptions(options);
this.regExp = new RegExp(this.options.before.escapeRegExp() +
'([\\w-]+)' + this.options.after.escapeRegExp(), 'g');
},
parse: function(data){
var options = this.options;
return this.string.replace(this.regExp, function(match){
return $pick(data[match.substring(
options.before.length,
match.length - options.after.length)
], match);
});
}
}); Template.implement(new Options);
/*
Script: Slider.js
Contains <Slider>
License:
MIT-style license.
*/
/*
Class: Slider
Creates a slider with two elements: a knob and a container. Returns the values.
Note:
The Slider requires an XHTML doctype.
Arguments:
element - the knob container
knob - the handle
options - see Options below
Options:
steps - the number of steps for your slider.
mode - either 'horizontal' or 'vertical'. defaults to horizontal.
offset - relative offset for knob position. default to 0.
Events:
onChange - a function to fire when the value changes.
onComplete - a function to fire when you're done dragging.
onTick - optionally, you can alter the onTick behavior, for example displaying an effect of the knob moving to the desired position.
Passes as parameter the new position.
*/
var Slider = new Class({
options: {
onChange: Class.empty,
onComplete: Class.empty,
onTick: function(pos){
this.knob.setStyle(this.p, pos);
},
mode: 'horizontal',
steps: 100,
offset: 0
},
initialize: function(el, knob, options){
this.element = document.id(el);
this.knob = document.id(knob);
this.setOptions(options);
this.previousChange = -1;
this.previousEnd = -1;
this.step = -1;
this.element.addEvent('mousedown', this.clickedElement.bindWithEvent(this));
var mod, offset;
switch(this.options.mode){
case 'horizontal':
this.z = 'x';
this.p = 'left';
mod = {'x': 'left', 'y': false};
offset = 'offsetWidth';
break;
case 'vertical':
this.z = 'y';
this.p = 'top';
mod = {'x': false, 'y': 'top'};
offset = 'offsetHeight';
}
this.max = this.element[offset] - this.knob[offset] + (this.options.offset * 2);
this.half = this.knob[offset]/2;
this.getPos = this.element['get' + this.p.capitalize()].bind(this.element);
this.knob.setStyle('position', 'relative').setStyle(this.p, - this.options.offset);
var lim = {};
lim[this.z] = [- this.options.offset, this.max - this.options.offset];
this.drag = new Drag(this.knob, {
limit: lim,
modifiers: mod,
snap: 0,
onStart: function(){
this.draggedKnob();
}.bind(this),
onDrag: function(){
this.draggedKnob();
}.bind(this),
onComplete: function(){
this.draggedKnob();
this.end();
}.bind(this)
});
if (this.options.initialize) this.options.initialize.call(this);
},
/*
Property: set
The slider will get the step you pass.
Arguments:
step - one integer
*/
set: function(step){
this.step = step.limit(0, this.options.steps);
this.checkStep();
this.end();
this.fireEvent('onTick', this.toPosition(this.step));
return this;
},
clickedElement: function(event){
var position = event.page[this.z] - this.getPos() - this.half;
position = position.limit(-this.options.offset, this.max -this.options.offset);
this.step = this.toStep(position);
this.checkStep();
this.end();
this.fireEvent('onTick', position);
},
draggedKnob: function(){
this.step = this.toStep(this.drag.value.now[this.z]);		
this.checkStep();
},
checkStep: function(){
if (this.previousChange != this.step){
this.previousChange = this.step;
this.fireEvent('onChange', this.step);
}
},
end: function(){
if (this.previousEnd !== this.step){
this.previousEnd = this.step;
this.fireEvent('onComplete', this.step + '');
}
},
toStep: function(position){
return Math.round((position + this.options.offset) / this.max * this.options.steps);
},
toPosition: function(step){
if (window.ie6) return this.max * step / this.options.steps - this.options.offset;
else return this.max * step / this.options.steps;
}
});
Slider.implement(new Events);
Slider.implement(new Options);
if(typeof engine == "undefined") engine = new Object();
// debugging related
engine.debug = function(v) {
if(typeof console != "undefined") {
console.log(engine.debug.arguments);
}
}
// blob related
if(typeof engine.blob == "undefined") engine.blob = new Object();
engine.blob.tag = "___id___";
engine.blob.getBlobUrl = function(id, filename, mime) {
if(this.baseUrl) {
var url = this.baseUrl.replace(this.tag, id);
if(typeof filename != "undefined") {
if(typeof mime != "undefined") {
url +="&blobheader=" + mime;
}
url += "&blobheadername1=Content-Disposition&blobheadervalue1=attachment;filename%3d%22"
+ filename.replace(/ /g, '_') + '%22'; // replacing spaces in filename with _
}
return url;
}
return null;
}
engine.blob.getBasicAssetBlobURL = function(blobtable, blobcol, blobwhere){
return '/cs/BlobServer?blobtable=' + blobtable + '&#38;blobcol=' + blobcol + '&#38;blobwhere=' + blobwhere + '&#38;blobkey=id';
}
engine.blob.getBasicAssetBlobURLScript = function(blobtable, blobcol, blobwhere){
return '/cs/BlobServer?blobtable=' + blobtable + '&blobcol=' + blobcol + '&blobwhere=' + blobwhere + '&blobkey=id';
}
// browser detection
if(typeof engine.browser == "undefined") engine.browser = new Object();
engine.browser.isIE = navigator.appName == 'Microsoft Internet Explorer';
if (engine.browser.isIE) {
if(typeof engine.browser.ie == "undefined") engine.browser.ie = new Object();
if(typeof engine.browser.ie.majorVersion) engine.browser.ie.majorVersion = new Object();
if (/MSIE (\d+\.\d+);/.test(navigator.userAgent)){ 
var ieversion=new Number(RegExp.$1) 
if (ieversion>=8)
engine.browser.ie.majorVersion = 8;
else if (ieversion>=7)
engine.browser.ie.majorVersion = 7;
else if (ieversion>=6)
engine.browser.ie.majorVersion = 6;
else engine.browser.ie.majorVersion = 5;
} 
}
engine.browser.ShowDocument = function(parm){
//-- parm.title, parm.mimetype not used currently
if(typeof(parm) == 'object'){
if(typeof(parm.url) != 'undefined'){
var thisURL = parm.url;
thisURL = thisURL.split('%26').join('&');
thisURL = thisURL.split('escape%3Aamp').join('%26');
document.location.href = thisURL;
}
}
}
// flash related
if(typeof engine.flash == "undefined") engine.flash = new Object();
engine.flash.paramList = new Array("id", "width", "height", "play", "loop", "quality", "bgcolor", 
"align", "salign", "scale", "wmode", "menu", "base", "flashvars");
engine.flash.blobParamList = new Array("movie", "subst");
engine.flash.getFlashHTML = function(obj, idIsNotABlob) {
if(typeof this.template == "undefined") return "";
var s = this.template;
for(var i=0, len=this.paramList.length; i<len; ++i) {
var key = this.paramList[i];
var replaceKey = "___" + key + "___";
var value = typeof obj[key] == "undefined" ? '' : obj[key];
s = s.replace(new RegExp(replaceKey, "g"), value);
}
for(var i=0, len=this.blobParamList.length; i<len; ++i) {
var key = this.blobParamList[i];
var replaceKey = "___" + key + "___";
var value;
if(typeof idIsNotABlob != 'undefined' && idIsNotABlob) {
value = obj[key];
} else {
value = engine.blob.getBlobUrl(obj[key]);
}
s = s.replace(new RegExp(replaceKey, "g"), value);
}    
return s;
};
/*******************************************************************************
* <cookie_management>
*******************************************************************************/
/* for further explanation: http://www.quirksmode.org/js/cookies.html#expl    */
if(typeof engine.cookie == "undefined") engine.cookie = new Object();
engine.cookie.create = function(name,value,days) {
if (days) {
var date = new Date();
date.setTime(date.getTime()+(days*24*60*60*1000));
var expires = "; expires="+date.toGMTString();
}
else var expires = "";
document.cookie = name+"="+value+expires+"; path=/";
}
engine.cookie.read = function(name) {
var nameEQ = name + "=";
var ca = document.cookie.split(';');
for(var i=0;i < ca.length;i++) {
var c = ca[i];
while (c.charAt(0)==' ') c = c.substring(1,c.length);
if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
}
return null;
}
engine.cookie.erase = function(name) {
engine.cookie.create(name,"",-1);
}
/*******************************************************************************
* </cookie_management>
*******************************************************************************/
/*******************************************************************************
* <AJAX> (AJAH)
*******************************************************************************/
/* for further explanation: http://www.quirksmode.org/js/cookies.html#expl    */
if(typeof engine.ajax == "undefined") engine.ajax = new Object();
engine.ajax.getXHR = function(){
var xmlHttp;
try{
// Firefox, Opera 8.0+, Safari
xmlHttp=new XMLHttpRequest();
}
catch (e)  {
// Internet Explorer
try    {
xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
}
catch (e)    {
try      {
xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
}
catch (e)      {
alert("Your browser does not support AJAX!");
return false;
}
}
}
return xmlHttp
}
engine.ajax.onGet = function(url, callback) {
var xhr=engine.ajax.getXHR()
xhr.onreadystatechange=function(){
if(xhr.readyState==4){
callback(xhr)
}
}
xhr.open("GET",url,true);
xhr.send(null);
}
/*******************************************************************************
* </AJAX> (AJAH)
*******************************************************************************/
/*******************************************************************************
* <browser_events>
*******************************************************************************/
if(typeof engine.event == "undefined") engine.event = new Object();
engine.event.bindTo=function(args){
/**
* args.element     the element to bind the event to
* args.event       event name without the "on" part.
* args.callback    function to be executed when the event happens
*/
if(args.element)
engine.event.bindToElement(args)
}
if(document.addEventListener){
/* W3C event binding */
engine.event.bindToElement=function(args){
args.element.addEventListener(args.event, args.callback, false)
}
}else{
/* Event binding that works in IE */
engine.event.bindToElement=function(args){
args.element["on"+args.event]=args.callback
}
}
/*******************************************************************************
* </browser_events>
*******************************************************************************/
/*******************************************************************************
* <CSS>
*******************************************************************************/
if(typeof engine.css == "undefined") engine.css = new Object();
engine.css.switchStyleOneInMany = function (args){
/**
* args.element  the element that you want to switch "on"
* args.on       the name of the CSS class to switch this element to
* args.off      the name of the CSS class to switch the siblings of this element to
*/
//engine.debug("[switchStyleOneInMany] "+args.element.id+"::"+args.on+"::"+args.off)
/* Set the passed element to selected */
args.element.className=args.on
/* Set the other elements to unselected... */
var sibling=args.element
/* From the event origin "upwards" */
while(sibling=sibling.previousSibling){
sibling.className=args.off
}
sibling=args.element
/* From the event origin "downwards" */
while(sibling=sibling.nextSibling){
sibling.className=args.off
}
}
/*******************************************************************************
* </CSS>
*******************************************************************************/
// toggles the details area of articel and swaps the link string
function switchHide(divId,spanId,hideDetailText,readMoreText){
if (eval(document.getElementById(divId).style.display=='none')){ 
document.getElementById(divId).style.display = "block";
document.getElementById(spanId).innerHTML='<a href="javascript:switchHide(\''+divId+'\',\''+spanId+'\',\''+hideDetailText+'\',\''+readMoreText+'\');" style="color:#fa5514;text-decoration:none;"><img id="articlemoreArrow"  src="/cs/ENGInE/img/arrow_orange.gif">'+hideDetailText+'</a>';
}else{ 
document.getElementById(divId).style.display= "none";
document.getElementById(spanId).innerHTML='<a href="javascript:switchHide(\''+divId+'\',\''+spanId+'\',\''+hideDetailText+'\',\''+readMoreText+'\');" style="color:#0d4bb3;text-decoration:none;"><img id="articlemoreArrow"  src="/cs/ENGInE/img/arrow_blue.gif">'+readMoreText+'</a>';
}
}
function switchShowHide(divId){
if (eval(document.getElementById(divId).style.display=='none')){ 
document.getElementById(divId).style.display = "block";
}else{ 
document.getElementById(divId).style.display= "none";
}
}
function switchLinkText(linkTextId, text1, text2){
if (eval(document.getElementById(linkTextId).innerHTML == text1)){ 
document.getElementById(linkTextId).innerHTML = text2;
}else{ 
document.getElementById(linkTextId).innerHTML = text1;
}
}
// marks the string in the search box
function jsSearchBoxSelected(){
document.frmSiteSearchBox.frmSiteSearchText.select();
/*    document.frmSiteSearchBox.submit(); */
}
// JavaScript Document
// remove IE ActiveX-block for a browser object (e.g. flash), id = element-id of object
function RemoveIEActiveXBlock(id){
if (navigator.appVersion.indexOf("MSIE") != -1){
document.getElementById(id).outerHTML = document.getElementById(id).outerHTML;
}
}
// remove IE ActiveX-block for all browser objects, call this script at end of your source code or at body onload
/*function RemoveAllIEActiveXBlocks(){
/*
if (navigator.appVersion.indexOf("MSIE") != -1){
var allObjects = document.getElementsByTagName("object");
for (var i = 0; i < allObjects.length; i++) {
alert(allObjects[i].outerHTML );
// allObjects[i].outerHTML = allObjects[i].outerHTML;
}
} 
var strBrowser = navigator.userAgent.toLowerCase();
if(strBrowser.indexOf("msie") > -1 && strBrowser.indexOf("mac") < 0){
var theObjects = document.getElementsByTagName('OBJECT');
var theObjectsLen = theObjects.length;
for (var i = 0; i < theObjectsLen; i++) {
if(theObjects[i].outerHTML){
if(theObjects[i].data){
theObjects[i].removeAttribute('data');
}
var theParams = theObjects[i].getElementsByTagName("PARAM");
var theParamsLength = theParams.length;
var theFlashVars = "";
for (var j = 0; j < theParamsLength; j++) {
if(theParams[j].name.toLowerCase() == 'flashvars'){
theFlashVars = theParams[j].value;
if(theFlashVars != '') break;
}
}
var theOuterHTML = theObjects[i].outerHTML;
var re = /<param name="FlashVars" value="">/ig;
theOuterHTML = theOuterHTML.replace(re,"<param name='FlashVars' value='" + theFlashVars + "'>");
theObjects[i].outerHTML = theOuterHTML;
}
}
}
}*/
/*******************************************************************************
* change class by id
*******************************************************************************/
function changeClassbyID(cID,newclass)
{
var newClass = document.getElementById(cID);
newClass.className = newclass;
}
/*******************************************************************************
* Flash Detection
*******************************************************************************/
/*-new flash detection----------------------------------------------------------------------*/
// Globals
// Major version of Flash required 
var requiredMajorVersion = 9; //-> site term
// Minor version of Flash required
var requiredMinorVersion = 0; //-> site term
// Minor version of Flash required
var requiredRevision = 124;//-> site term
// the version of javascript supported
var jsVersion = 1.0;
// Detect Client Browser type
var isIE  = (navigator.appVersion.indexOf("MSIE") != -1) ? true : false;
var isWin = (navigator.appVersion.toLowerCase().indexOf("win") != -1) ? true : false;
var isOpera = (navigator.userAgent.indexOf("Opera") != -1) ? true : false;
jsVersion = 1.1;
var browser = navigator.userAgent.toLowerCase();
if ( browser.indexOf("msie") != -1 && parseInt(navigator.appVersion) >= 4 && browser.indexOf("win")!= -1 && browser.indexOf("16bit")== -1 ) {
document.write('<scr' + 'ipt language="VBScript"\> \n');
document.write('Function VBGetSwfVer(i) \n');
document.write('	on error resume next \n');
document.write('	Dim swControl, swVersion \n');
document.write('	swVersion = 0 \n');
document.write('	set swControl = CreateObject("ShockwaveFlash.ShockwaveFlash." + CStr(i)) \n');
document.write('	if (IsObject(swControl)) then \n');
document.write('		swVersion = swControl.GetVariable("$version") \n');
document.write('	end if \n');
document.write('	VBGetSwfVer = swVersion \n');
document.write('End Function \n');
document.write('</scr' + 'ipt\> \n');
}
// JavaScript helper required to detect Flash Player PlugIn version information
function JSGetSwfVer(i){
// NS/Opera version >= 3 check for Flash plugin in plugin array
if (navigator.plugins != null && navigator.plugins.length > 0) {
if (navigator.plugins["Shockwave Flash 2.0"] || navigator.plugins["Shockwave Flash"]) {
var swVer2 = navigator.plugins["Shockwave Flash 2.0"] ? " 2.0" : "";
var flashDescription = navigator.plugins["Shockwave Flash" + swVer2].description;
descArray = flashDescription.split(" ");
tempArrayMajor = descArray[2].split(".");
versionMajor = tempArrayMajor[0];
versionMinor = tempArrayMajor[1];
if ( descArray[3] != "" ){
tempArrayMinor = descArray[3].split("r");
} else{
tempArrayMinor = descArray[4].split("r");
}
versionRevision = tempArrayMinor[1] > 0 ? tempArrayMinor[1] : 0;
flashVer = versionMajor + "." + versionMinor + "." + versionRevision;
} else{
flashVer = -1;
}
}
// MSN/WebTV 2.6 supports Flash 4
else if (navigator.userAgent.toLowerCase().indexOf("webtv/2.6") != -1) flashVer = 4;
// WebTV 2.5 supports Flash 3
else if (navigator.userAgent.toLowerCase().indexOf("webtv/2.5") != -1) flashVer = 3;
// older WebTV supports Flash 2
else if (navigator.userAgent.toLowerCase().indexOf("webtv") != -1) flashVer = 2;
// Can't detect in all other cases
else {
flashVer = -1;
}
//	alert (flashVer);
return flashVer;
} 
// When called with reqMajorVer, reqMinorVer, reqRevision returns true if that version or greater is available
function DetectFlashVer(reqMajorVer, reqMinorVer, reqRevision){
reqVer = parseFloat(reqMajorVer + "." + reqRevision);
// loop backwards through the versions until we find the newest version	
for (i = 25; i > 0; i--){	
if (isIE && isWin && !isOpera){
versionStr = VBGetSwfVer(i);
}
else{
versionStr = JSGetSwfVer(i);		
}
if (versionStr == -1 ){ 
return false;
}
else if (versionStr != 0){
if(isIE && isWin && !isOpera){
tempArray         = versionStr.split(" ");
tempString        = tempArray[1];
versionArray      = tempString .split(",");				
}
else{
versionArray      = versionStr.split(".");
}
versionMajor      = versionArray[0];
versionMinor      = versionArray[1];
versionRevision   = versionArray[2];
versionString     = versionMajor + "." + versionRevision;   // 7.0r24 == 7.24
versionNum        = parseFloat(versionString);
// is the major.revision >= requested major.revision AND the minor version >= requested minor
if ((versionMajor > reqMajorVer) && (versionNum >= reqVer)){
return true;
}
else{
return ((versionNum >= reqVer && versionMinor >= reqMinorVer) ? true : false );	
}
}
}	
}
var hasReqestedVersion = DetectFlashVer(requiredMajorVersion, requiredMinorVersion, requiredRevision);
var pageWidth = 980;
var pageHeight = 482;
var menuWidth = 195;
var messageWidth = 439;
var messageHeight = 231;
var detectBW = false;
var	blnDebug = false;
function debug(debugMessage){
if(blnDebug){
engine.debug(debugMessage);
}
}
function FlashDetection(name){
this.id			= "noFlash";
this.name		= name;
this.width		= messageWidth;
this.height		= messageHeight;
this.top		= parseInt((pageHeight-messageHeight)/2);
this.left		= parseInt(((pageWidth-menuWidth-messageWidth)/2) + menuWidth);
this.noFlash	= false;
//from site terms
this.reqVersion = reqVersion;
this.header		= headerText;
this.text		= messageText;
this.button		= buttonText;
this.link		= FDlink;
this.checkDetection	= checkDetection;
this.createMessage	= createMessage;
this.doDetection	= doDetection;
this.show			= show;
this.hide			= hide;
}
function doDetection(){
this.noFlash = this.checkDetection();
if(this.noFlash){
this.show(arguments[0]);
}
}
function checkDetection(){
this.reqVersion = reqVersion.replace(/ /g, "");;
arrTemp = this.reqVersion.split(".");
requiredMajorVersion = parseInt(arrTemp[0]);
requiredMinorVersion = parseInt(arrTemp[1]);
requiredRevision = parseInt(arrTemp[2]);
hasReqestedVersion = DetectFlashVer(requiredMajorVersion, requiredMinorVersion, requiredRevision);
var noFlash = false;
if (engine.cookie.read("noFlash")== null){
if (detectBW){
if(checkBW(connectionSpeed)){
if(!hasReqestedVersion){
noFlash = true;
}
}
}
else{
if(!hasReqestedVersion){
noFlash = true;
}
}
}
return noFlash;
}
function createMessage(){
var msgHTML = "";
this.header		= headerText;
this.text		= messageText;
this.button		= buttonText;
this.link		= FDlink;
msgHTML += "<div class=\"header\">" + this.header + "</div>";
msgHTML += "<div class=\"text\">" + this.text + "</div>";
msgHTML += "<div class=\"buttonrow\">";
msgHTML += "<div class=\"btnFlash\">";
msgHTML += "<a href=\"" + this.link + "\" target=\"_blank\"></a>";
msgHTML += "</div>";
msgHTML += "<div class=\"btnDecline\">";
msgHTML += "<a href=\"javascript: " + this.name + ".hide();\">";
msgHTML += "<div class=\"btnDeclineLeft\"></div>";
msgHTML += "<div class=\"btnDeclineMid\">" + this.button + "</div>";
msgHTML += "<div class=\"btnDeclineRight\"></div>";
msgHTML += "</a>";
msgHTML += "</div>";
msgHTML += "</div>";
msgHTML += "<div class=\"bottom\"></div>";
return msgHTML;
}
function show(){
if(document.getElementById(this.id)){
this.hide();
}
var objNoFlash = document.createElement("div");
objNoFlash.setAttribute('id','noFlash');
var objParent;
if(arguments[0]=="over"){
objParent = document.getElementById("overlayContent");
}else if (arguments[0]=="img"){
objParent = document.getElementById("overlayButton");
}else if (document.getElementById("frame")){
objParent = document.getElementById("frame");
}else if (document.getElementById("frame_lo1")) {
objParent = document.getElementById("frame_lo1");
}
else{
objParent = document.getElementsByTagName("body").item(0);
}
objParent.appendChild(objNoFlash);
if(document.getElementById(this.id) != null){
document.getElementById(this.id).innerHTML = this.createMessage();
}
objStyle		= document.getElementById(this.id).style;
objStyle.width	= this.width + "px";
objStyle.height	= this.height + "px";
objStyle.top	= this.top + "px";
objStyle.left	= this.left + "px";
if(arguments[0]=="over"){
objStyle.left = (document.getElementById("overlayContent").clientWidth - this.width)/2 + "px";
objStyle.top = (document.getElementById("overlayContent").clientHeight - this.height)/2 + "px";
objStyle.top	= "75px";
}
document.getElementById(this.id).style.display = "block";
}
function hide(){
engine.cookie.create("noFlash","true",0);
objparent = document.getElementById(this.id).parentNode;
objparent.removeChild(document.getElementById(this.id));
}
var fd = new FlashDetection("fd");
/******************************************************************************/
//******************************************************************
//* Copyright (c) 2008 Ford Motor Company. All Rights Reserved.
//*
//*
//* $$Workfile:   CSElement: ENGInE/script/Events  $$
//* $$Revision:   1.0  $$
//* $$Author:   GNOIREAU  $$
//* $$Date:   July 29 2008  $$
//*
//* Description:
//* The core of the event-handling system.
//* Event publishing, controller checking and rules grafting all happen here.
//******************************************************************
// TODO
function log(arg) {
//throw(arg);
}
String.prototype.isUppercase=function(){ return this.match(/^[A-Z_]+$/) }
function uppercaseFunctionMembers(obj){
var ufm=new Array()
for(var x in obj){
if(obj[x] instanceof Function){
if(x.isUppercase()){
ufm.push(x)
}
}
}
return ufm
}
if (typeof engine == 'undefined') { engine=new Object() }
engine.Publisher= new Object();
engine.Publisher.publish=function(source,event,arg){
log(">>> "+(source.name||source) +" sent "+event+" "+(arg||""))
for(var i in engine.Publisher.receivers){ 
//        if (engine.Publisher.receivers.hasOwnProperty(i)) {
var c=engine.Publisher.receivers[i]
var msg=""
if (typeof c[event] != 'function') {
msg+="Function does not exist"
}else{
//                try{
//we call the event rule method on the control
c[event](source,arg)
//                    msg+="STD: Invocation"
//                }catch(err){
//                    msg+="ERR: Invocation error:"
//                    msg+=err
//                    throw(err)
//                }
}
//log(msg+", calling: \""+event+"("+(source.name||source)+","+arg+")\" on \""+ c.name+"\".") 
//            log(err) 
//        }
}
}
engine.Publisher.receivers = new Array()
engine.Publisher.fail=function(msg){alert(msg);throw(msg)}
engine.Publisher.addReceiver=function(Receiver){
engine.Publisher.checkRequirements(Receiver)
engine.Publisher.failOnPreviousRulesFunctions(Receiver)
engine.Publisher.graftRulesFunctions(Receiver)
engine.Publisher.receivers.push(Receiver)
}
engine.Publisher.checkRequirements=function(Receiver){
// Controllers must have a 'name' and a 'category' property
var requiredMembers=["name","category"]
for (var i in requiredMembers){
if (requiredMembers.hasOwnProperty(i)) {
if (typeof Receiver[requiredMembers[i]] == 'undefined'){
engine.Publisher.fail(requiredMembers[i]+ " missing in: "+
Receiver.name)
}
}
}
}
engine.Publisher.failOnPreviousRulesFunctions=function(Receiver){
// we do not want "opportunistic" functions in the controller
// to be invoked by event publishing.
// Rules methods must come from the rules file,
// so we check for uppercase-and-underscore functions in the controller.
if (uppercaseFunctionMembers(Receiver).length!=0){
engine.Publisher.fail("Found uppercase function(s) in: "+
Receiver.name)
}
}
engine.Publisher.graftRulesFunctions=function(Receiver){
var categoryRules=engine.Publisher.rules[Receiver.category]
if (typeof categoryRules != 'undefined') {
for(var i in categoryRules){
if (categoryRules.hasOwnProperty(i)) {
Receiver[i]=categoryRules[i]
}
}
}
}
engine.Publisher.rules = {}
// JavaScript Document
// 04.04.2012	grathnas	Mobile Sniffer redirection for NWP Home page only
// 08.05.2012	grathnas	Mobile Sniffer redirection for the equivalent mobile page
// Act only if there is an URL to redirect to
var mobileSnifferCheckRedirect = function() {
var MobileSnifferCookieName, userAgent, forceAgents, i, n;
if (MobileHomePageRedirectURL != 'null') {
MobileSnifferCookieName = "ford_mobile_sniffer_forcefullsite";
// Check further only if "ford_mobile_sniffer_forcefullsite" cookie was not set
if (engine.cookie.read(MobileSnifferCookieName) === null) {
processRedirect = true;
// Check if we are bypassing the check for certain user agents:
if (ForceRedirectUserAgentsBypass !== 'null' && ForceRedirectUserAgentsBypass.length > 2) {
userAgent = window.navigator.userAgent.toLowerCase();
forceAgents = ForceRedirectUserAgentsBypass.split(",");
for (i = 0, n = forceAgents.length; i < n; i++) {
if (userAgent.indexOf(forceAgents[i].toLowerCase()) > -1) {
processRedirect = false;
}
}
}
// Check user agent
if (ForceRedirectUserAgents !== 'null' && processRedirect) {
userAgent = window.navigator.userAgent.toLowerCase();
forceAgents = ForceRedirectUserAgents.split(",");
for (i = 0, n = forceAgents.length; i < n; i++) {
if (userAgent.indexOf(forceAgents[i].toLowerCase()) > -1) {
redirect();
}
}
}
// Check width
if (ForceRedirectMinWidth !== 'null' && screen !== undefined && screen.width !== undefined) {
if (screen.width < Number(ForceRedirectMinWidth)) {
redirect();
}
}
}
}
};
var redirect = function(){
var path = window.location.pathname;
//Redirect for nwp homepage on mobile devices
//eg: www.ford.co.uk
//www.ford.co.uk/ or www.ford.co.uk/home//////
var pattern=new RegExp("^/+(home/*)$","i");
if(path=="/" || path.search(pattern) != -1){
window.location.href = MobileHomePageRedirectURL;
} else if(MobileRedirectURL) {
window.location.href = MobileRedirectURL;
}
};
try {
mobileSnifferCheckRedirect();
} catch (ignore) {
}
//******************************************************************
//* Copyright (c) 2007 Ford Motor Company. All Rights Reserved.
//*
//*
//* $$Workfile:   Media.js  $$
//* $$Revision:   1.3  $$
//* $$Author:   MSELVAND  $$
//* $$Date:   Mar 19 2009 17:56:22  $$
//*
//* Description:
//* Media related javascript code (mdc001, mdp001, mdp002)
//* Raghu(sraghuku)		26/May/2010		TD 7997. Commented code , so that "photos and media" will hide for flash360
//* Raghu(sraghuku)		19/Jul/2010		TD 8020. instead of escape(caption) changed to encodeURI(caption)
//* Raghu(sraghuku)		19/Aug/2010		TD 8025. added loop, menu in flashparam to fix fullscreen issue in IE
//* 16-Feb-2011	 rsrivid4	ENG-8108	Global Look & Style Layout changes to load the lockup even while loading flash and video on mdp
//* 08-Apr-2011  iklein1	ENG-8135    Modify changes for ENG-8108 to fix mashead overlay bug
//* 12-June-2012 csrini12   ENG-9006    Fix for image-name display or save with spl characters properly
//* 06-AUG-2014	 vsowjan1	ENG-11504	Special Characters in image asset's Alt Text is not getting displayed properly
//* 08-SEP-2014	 vsowjan1   END-11958	Issue with Image zoom title coming from gallery description is not displaying special characters
//******************************************************************
if(typeof engine.media == "undefined") engine.media = new Object();
// mdp
engine.media.mdp = {
id : null, // image id
zoomId : null, // zoom image id
caption : null, // image caption
alt: null, // alt text for the image
labelClose: null, // close label
fullCaption: null, //Complete Caption label
getControl : function(id) {
return document.getElementById(id);
},
showImageBar : function(bShow, bShowHeader) {
var display = bShow ? '' : 'none';
var displayHeader = '';
if(typeof bShowHeader == "undefined") {
displayHeader = bShow ? '' : 'none';
} else {
displayHeader = bShowHeader ? '' : 'none';
}
var control;
control = this.getControl('mdpImageControl');
if(control) control.style.display = display;
control = this.getControl('mdcHeader');
if(control) control.style.display = displayHeader;
},
onFullScreen : function(defaultUrl, defaultCaption) {
var url = this.zoomId == null ? defaultUrl : engine.blob.getBlobUrl(this.zoomId);
//ENG-12347 The gallery description is not changing when the image is zoomed
var newCaption  = this.zoomId == null ?  escape(defaultCaption) : escape(encodeURIComponent(this.fullCaption));
// ENG#6492 - defaultCaption has been escaped to resolve the truncation of text when it contains double quotes (")
// ENG-9006 Fix for image title to display with spl characters
overlayStart(url, 'image', newCaption, this.labelClose);
},
onSave : function(defaultId, defaultFilename) {
var id;
var filename;
if(this.id == null) {
id = defaultId;
filename = defaultFilename;
} else {
id = this.id;
filename = this.alt.replace(/ /g, '_');
}
// ENG#6492 - Replaced " with space in filename text to construct proper file name.
filename = filename.replace(/"/g, '');
// ENG-9006 Fix for image name to save with proper spl characters
filename = encodeURI(filename);
var url = engine.blob.getBlobUrl(id, filename + '.jpg', 'image/jpeg');
engine.debug('id', id, url);
document.location.href = url;
},
play : function(src, arg) {
var subst = arg.subst;
var type = arg.type;
var control = this.getControl('mdp');
this.id = arg.id;
this.caption = arg.caption == null ? '' : arg.caption;
if(this.caption.length > 50) {
this.caption = arg.caption.substring(0, 47) + '...';
}
this.fullCaption = arg.caption == null ? '' : arg.caption;
this.alt = arg.alt == null ? '' : arg.alt;
this.zoomId = arg.zoomId;
var html = "";
if(type == 'image') {
html = '<img src="' + engine.blob.getBlobUrl(this.id) + '" alt="' + this.alt + '">';
this.showImageBar(true);
} else if(type == 'flash') {
html = engine.flash.getFlashHTML(engine.flash[this.id]);
this.showImageBar(false);
} else if(type == 'video' || type == 'flash360' ) {
var ids = this.id.split('_');
var flashVars = 'xml=' + escape(engine.media.playerXml);
if(type == 'video') {
// HighResVideo,MediumResVideo,LowResVideo,ControlFile
flashVars = flashVars
+ '&amp;flv_high_bandwidth=' + escape(engine.blob.getBlobUrl(ids[0]))
+ '&amp;flv_medium_bandwidth=' + escape(engine.blob.getBlobUrl(ids[1]))
+ '&amp;flv_low_bandwidth=' + escape(engine.blob.getBlobUrl(ids[2]))
+ '&amp;subtitles_xml=' + escape(engine.blob.getBlobUrl(ids[3]))
+ '&amp;static_image=' + escape(engine.blob.getBlobUrl(subst));
} else {
// HighResVideo,MediumResVideo,LowResVideo,ControlFile,SubstImage
flashVars =	flashVars 
+ '&amp;caption=' + encodeURI(this.caption)
+ '&amp;flv_360=' + escape(engine.blob.getBlobUrl(ids[0]))
+ '&amp;static_image=' + escape(engine.blob.getBlobUrl(subst));
}
//added loop, menu in flashparam to fix fullscreen issue in IE. TD 8025	
var flashParam = {
movie: '/cs/ENGInE/flash/ENGInE_media_player.swf',
base: '/cs/ENGInE/flash',
width: '780',
height: '439', 
play: 'True',
wmode: 'Transparent',
loop:'true',
menu:'true',
flashvars: flashVars,
subst: engine.blob.getBlobUrl(subst)
};
html = engine.flash.getFlashHTML(flashParam, true);
//commented for TD 7997
//if(type == 'flash360') {
//this.showImageBar(false, true);
//} else {
this.showImageBar(false);
//}
}
control.innerHTML = html;
if(control.innerHTML == "") {
// IE focked up object tags, use img 
control.innerHTML = "<img src='" + engine.blob.getBlobUrl(subst) + "' alt='" + this.caption + "' width='780' height='439' />";
}
this.getControl('mdpCaption').innerHTML = this.caption;
// scroll to the player
window.scroll(0,0);
}
}
// Prototype for igg and media controls
engine.media.base = function(controlId, prefix, selectedCss, unselectedCss, rexp) {
return {
controlId : controlId,
prefix : prefix,
selectedCssName : selectedCss,
unselectedCssName : unselectedCss,
aRegexp : new RegExp(rexp), // regular expression to find patterns like mdc001_	
control : null,
getControl : function() {
if(this.control == null) {
this.control = document.getElementById(this.controlId);
}
return this.control;
},	
unselect : function() {
if(this.getControl()) {
var as = this.getControl().getElementsByTagName('A');
for(var i in as) {
var a = as[i];
var isMatch = this.aRegexp.test(a.id);
if(isMatch) {
a.setAttribute('className', this.unselectedCssName); // IE
a.setAttribute('class', this.unselectedCssName);			
}
}		
}
},
select : function(src, arg) {
var a = document.getElementById(prefix + arg.id);
if(a && a.tagName == 'A') {
a.setAttribute('className', this.selectedCssName); // IE
a.setAttribute('class', this.selectedCssName);
}
}
}
}
// mdc001 
engine.media.mdc = new Object();
engine.media.mdc.count = 0;
engine.media.mdc.controls = new Object();
engine.media.mdc.register =  function(controlId) {
var n = engine.media.mdc.count++;
engine.media.mdc.controls[n] = engine.media.base(controlId, controlId+'_', 'mdc001Selected', '',  "^" + controlId + "[0-9,_]+");
}
// igg
engine.media.igg = new Object();
engine.media.igg.count = 0;
engine.media.igg.controls = new Object();
engine.media.igg.register = function(controlId) {
var n = engine.media.igg.count++; 
engine.media.igg.controls[n] = engine.media.base(controlId,controlId + '_', 'IGGSelected', '', "^" + controlId + "[0-9,_]+");
}
// lockup
engine.media.lockup = new Object();
engine.media.lockup.show = function() {this.doshow('')};
engine.media.lockup.hide = function() {this.doshow('none')};
// ENG-8135 - set z-index of masthead
engine.media.lockup.doshow = function(style) {
if (style == "none"){
var masthead = document.getElementById("masthead");
if(masthead) {
masthead.style.zIndex = -1;
}
}
else {
var lockup = document.getElementById("lockup_container");
if(lockup) {
lockup.style.display = style;
}
}
}
// rules
engine.Publisher.rules.mediaPlayers = 	{    
SELECT_MEDIA:function(src,arg) {
this.play(src, arg);
}
}
engine.Publisher.rules.mediaControls = 	{    
SELECT_MEDIA:function(src,arg) {
this.unselect(src, arg);
this.select(src, arg);
}
}
engine.Publisher.rules.lockups = {
SELECT_MEDIA:function(src,arg) {
var type = arg.type;
if(type == 'flash' || type == 'video' || type == 'flash360') {
this.hide();
} else {
this.show();
}
}
}
// receivers
engine.Publisher.addReceiver({
name:'mdp',
version:'1.0.0',
category:'mediaPlayers',
play:function(src, arg){
// do stuff
engine.media.mdp.play(src, arg);
}
})
engine.Publisher.addReceiver({
name:'mdc',
version:'1.0.0',
category:'mediaControls',
unselect: function(src, arg) {
for(var i in engine.media.mdc.controls) {
engine.media.mdc.controls[i].unselect(src, arg);
}
},
select: function(src, arg) {
for(var i in engine.media.mdc.controls) {
engine.media.mdc.controls[i].select(src, arg);
}    
}
})	
engine.Publisher.addReceiver({
name:'igg',
version:'1.0.0',
category:'mediaControls',
unselect: function(src, arg) {
for(var i in engine.media.igg.controls) {
engine.media.igg.controls[i].unselect(src, arg)
}
},
select: function(src, arg) {
for(var i in engine.media.igg.controls) {
engine.media.igg.controls[i].select(src, arg)
}
}
})
engine.Publisher.addReceiver({
name:'lockup',
version:'1.0.0',
category:'lockups',
show: function(src, arg) {engine.media.lockup.show(src, arg)},
hide: function(src, arg) {engine.media.lockup.hide(src, arg)}
})
if (typeof engine == 'undefined') { engine = new Object() }
engine.navigation = new Object();
// Initialize menu structure, based on ul/Items
// Items get "menu" (parent UL) and submenu (child UL, if any) attributes
// ULs get "container" (element that controls ULs visibility) and "parent" (parent UL) attribute
// Items and ULs get unique ids as "uid" parameter, it equals to the index of that LI in "Items" array
// since we can't pass objects as an argument of setTimeout function, we are forced 
// to store them in array, and use index
engine.navigation = {
// Constants
// Delay between mouse event and related menu response
menuShowDelay : 300,
menuHideDelay : 300,
flyoutShowDelay : 0,
selClass : 'sel',
// Variables
uid: 0,
root: null, 
scheduledId: null,
nextAction: {action: null, arg: null},
lastShownUl: null,
menuItems: new Array(),
onAction : function() {
with(engine.navigation) {
if(nextAction.action == 'show') {
showChain(nextAction.arg);
} else if(nextAction.action == 'hide') {
hideAll();
}
resetScheduled();
}
// Reset mouse cursor
document.body.style.cursor="default";
},
// Schedule some action
schedule : function(delay, action, arg) {
if(this.scheduledId != null) {
throw 'Error, some action is already scheduled';
}
this.nextAction.action = action;
this.nextAction.arg = arg;
this.scheduledId = window.setTimeout(this.onAction, delay);
},
// Resets scheduled function and clears nextAction variable
resetScheduled : function() {
if(this.scheduledId != null) {
window.clearTimeout(this.scheduledId);
this.scheduledId = null;
this.nextAction.action = null;
this.nextAction.arg = null;
}
},	
// Hides all UL elements (well, actually only last shown elements)
hideAll : function() {
var ul = this.lastShownUl;
while(ul) {
if(!ul.isRoot) {
var pUI=ul.parent;
// hide element
ul.container.style.display = 'none';
//ENG-8574: Added this for deselecting the style for "Cars" in navmenus on mouseout.
if(typeof pUI.parentLi == "undefined"){
//ENG-8574: Unselects the old applied style for last visited item in the menu.
ul.parentLi.a.oldClassName='';					
} 		
else {					
pUI.parentLi.a.className = '';				
}					
// and unselects its anchor(flyout)
if(ul.parentLi.a.oldClassName) {
ul.parentLi.a.className = ul.parentLi.a.oldClassName
} else {
ul.parentLi.a.className = '';
}
}
ul = ul.parent
}
this.lastShownUl = null
// Hide applet hover
var hover = document.getElementById("layout7AppletHoverIFrame")
if(hover != null) {
hover.style.display = 'none'
}
// Show combo box from iklein1
if(engine.browser.isIE) {
var hover2 = document.getElementById("sbxCatFS")
if(hover2 != null) {
hover2.style.visibility = 'visible'
}
}
},
// Shows menu chain up to ul
showChain : function(ul) {
// if selected UL is the same, nothing to change
if(ul == this.lastShownUl) {
return;
}
// if UL isn't root UL, we have to hide applet tag behind iframe
if(!ul.isRoot) {
// Show applet hover (
var hover = document.getElementById("layout7AppletHoverIFrame");
if(hover != null) {
hover.style.display = '';
}
// Hide combo box from iklein1
if(engine.browser.isIE) {
var hover2 = document.getElementById("sbxCatFS");
if(hover2 != null) {
// hover2.style.display = 'none';
hover2.style.visibility = 'hidden';
}
}
}
var tempUl = ul;
var ulsToKeepVisible = {};
// Show new path
while(tempUl) {
ulsToKeepVisible[tempUl.uid] =	 true;
if(typeof tempUl.parentLi != 'undefined') {
// Save old class name
tempUl.parentLi.a.oldClassName = tempUl.parentLi.a.className
tempUl.parentLi.a.className = this.selClass;
}
tempUl.container.style.display = 'block';
// Show UL
var container = tempUl.container;	
var top = 0;
// if ul is not root, we are showing flyout
if(tempUl.parent != null && tempUl.parent.isRoot) {
// padding
top -= 3;
// ie needs offset for submenu
if(engine.browser.isIE) {
//TD 8451 condition added to display the flyout properly in nextsteps,calculating the child nodes of current context to solve IE alignment issue
if(tempUl.parent.className=="nextSteps"){
top+=tempUl.parentLi.offsetTop+(document.getElementById("currentContext").childNodes.length*25);
}else{
top += tempUl.parentLi.offsetTop;
}}
}
container.style.top = top + "px";
if(container.style.display != 'block') {
container.style.display = 'block';
}		
tempUl = tempUl.parent;
}
// Hide previously shown path
var lastUl = this.lastShownUl;
while(lastUl) {				 			
if(!lastUl.isRoot) {			  
if(!(lastUl.uid in ulsToKeepVisible)) {
lastUl.container.style.display = 'none';
//ENG-8574: Added this for Cars menu to be deselected when visiting other items in navmenus
if(typeof lastUl.parentLi != "undefined"){						
lastUl.parentLi.a.oldClassName='';
}							
if(lastUl.parentLi.a.oldClassName) {
lastUl.parentLi.a.className = lastUl.parentLi.a.oldClassName;
} else{
lastUl.parentLi.a.className = '';
}
}
}
lastUl = lastUl.parent;
}		
this.lastShownUl = ul;
},
// Initializes the whole stuff
// In the end we get structure that looks like:
//  UL elements with fields: 
//		id	=> id of the element (in items array)
//		parent => parent UL
//		parentLi => parent LI
//		container => DIV that contains this UL
//		isRoot => true if this is a root UL, false otherwise
//		isFlyout => true if this UL is a flyout (if it has less than 2 sub LIs)
//	LI elements, with fields:
// 		id => id of the element (in items array)
//		submenu => submenu UL
//		menu => UL that contains this LI
//		a => first anchor tag in this LI
init : function(element, root, ieAnchor) {
if(element == null) {
return
}
if(!ieAnchor) {
ieAnchor = "navAnchor"
}
// Treat element depending on it's type
var tagName = element.tagName;
if(tagName == 'LI') {
// assign uid and save it in Items array
element.uid = this.uid;
this.menuItems[this.uid] = element;
this.uid++;
element.menu = element.parentNode; // must be of type UL
var submenu = null;
var a;
var i;
for(i = 0; i < element.childNodes.length; i++) {
var child = element.childNodes[i];
submenu = submenu || this.init(child, root, ieAnchor);
if(child.tagName == "A") {
a = child;
}
}
element.submenu = submenu;
if(a) {
a.onmouseover = this.onMouseOver;
a.onmouseout = this.onMouseOut;	
element.a = a;		
} else {
element.a = null;
}
if(element.menu && engine.browser.isIE && element.menu.isRoot && submenu) {
if(typeof submenu.parentNode != "undefined") {
// this div contains UL list 
var containingDiv = element.submenu.parentNode;
// detach menu and reattach it to anchor, if IE, to fix z-index bug
containingDiv.parentNode.removeChild(containingDiv);
var anchor = document.getElementById(ieAnchor);
if(anchor) anchor.appendChild(containingDiv);
}
} 
//return null;
} else if(tagName == 'UL') {
element.uid = this.uid;
this.menuItems[this.uid] = element;
this.uid++;
if(root == null) {
// root element is a container for itself
element.container = element;
element.isRoot = true;
element.parent = null;
root = element;
this.root = root;
} else {
// ULs container is the first parent after LI tag
var container = element.parentNode;
while(container != null && container.tagName != 'LI') {
element.container = container;
container = container.parentNode;
}
// ULs parent menu is Items parent
element.parent = container.parentNode;
element.parentLi = container;
element.isRoot = false;												
}
// is it a flyout or not? root cannot be a flyout
if(!element.isRoot) {
element.isFlyout = element.getElementsByTagName("LI").length < 2;
} else {
element.isFlyout = false;
}
// process children
for(i = 0; i < element.childNodes.length; i++) {
this.init(element.childNodes[i], root, ieAnchor);
}
return element;
} else {
// process children
var i, submenu;
for (i = 0; i < element.childNodes.length; i++) {
submenu = submenu || this.init(element.childNodes[i], root, ieAnchor);
}
setTimeout(function() {
isOwnerAuthenticated = Cookie.read('isOwnerAuthenticated');
if (typeof isOwnerAuthenticated == "string" && "true" == isOwnerAuthenticated) {
$$('LI.AUTH').addClass("NAVSHOW");
$$('LI.AUTH').removeClass("NAVHIDE");
$$('LI.WEAK-AUTH').addClass("NAVSHOW");
$$('LI.WEAK-AUTH').removeClass("NAVHIDE");
$$('LI.NOAUTH').addClass("NAVHIDE");
$$('LI.NOAUTH').removeClass("NAVSHOW");
} else {
$$('LI.AUTH').addClass("NAVHIDE");
$$('LI.AUTH').removeClass("NAVSHOW");
$$('LI.WEAK-AUTH').addClass("NAVHIDE");
$$('LI.WEAK-AUTH').removeClass("NAVSHOW");
$$('LI.NOAUTH').addClass("NAVSHOW");
$$('LI.NOAUTH').removeClass("NAVHIDE");								
} 
}, 0);
return submenu;
}		
},
// Returns first UL or LI that is the owner of event source
// or root object
getEventSource : function (e) {
e = e || event;
var obj  = e.srcElement || e.target;
while(obj.parentNode != null && obj.tagName != 'LI' && obj.tagName != 'UL') {
obj = obj.parentNode;
}
return obj;
},
// on mouse out handler 
// if there is a parent LI associated with event, calls scheduleHide
onMouseOut : function (e) {	
with(engine.navigation) {
resetScheduled();
schedule(menuHideDelay, "hide", null);
}
return false;
},
// on mouse out handler 
// if there is a parent LI associated with event, calls scheduleShow and keepVisible
onMouseOver : function onMouseOut(e) {
with(engine.navigation) {
resetScheduled();
var obj = getEventSource(e);
// show up to hovered UL (essentially hide everything else)
var ul = null;
if(obj.tagName == 'LI') {
ul = obj.menu;
} else if(obj.tagName == 'UL') {
ul = obj;
}
if(ul != null) {
schedule(menuShowDelay, "show", ul);
}
// if obj was an LI, schedule show submenu
if(obj.tagName == 'LI' && obj.submenu != null) {
resetScheduled();
var delay;
if(obj.submenu.isFlyout) {
delay = flyoutShowDelay;
} else {
delay = menuShowDelay;
}
if(delay > 0) {
schedule(delay, "show", obj.submenu);
} else {
showChain(obj.submenu);
}
}
}
return false;
}
}
// this is to fix IE9 left navigation submenu alignment 
// I'm sure the problem might be the css is not well written/chained
window.addEvent('domready',function(){
function getInternetExplorerVersion() {
var rv = -1; // Return value assumes failure.
if (navigator.appName == 'Microsoft Internet Explorer') {
var ua = navigator.userAgent;
var re = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
if (re.exec(ua) != null) {
rv = parseFloat(RegExp.$1);
}
}
return rv;
}
function checkVersion() {
var msg = "You're not using Windows Internet Explorer.";
var ver = getInternetExplorerVersion();
if (ver > -1) {
if (ver >= 9.0){
//msg = "You're using a recent copy of Windows Internet Explorer.";
var getBody = $$('body').setProperty('class','ie9');
var htmlClass = $$('body').getProperty('class');
//console.log(htmlClass);
var getParentId = document.id('nextSteps');
if(getParentId.hasClass('nextSteps')){
getParentId.removeClass('nextSteps');
}
}else{
msg = "You should upgrade your copy of Windows Internet Explorer.";
}
}
//console.log(msg);
}
checkVersion();
});
engine.sbe = {
COOKIE : 'FavoriteDealer',
DealerLocatorSearchBox : 'the search box element',
favoriteDealerTemplate : '',
displayFavoriteDealer : function(){
if($$('#favoriteDealer').length == 0){
var cookie = Cookie.get(this.COOKIE)
if( cookie !== false ){
this.DealerLocatorSearchBox.remove()
var MARKET_LANG = unescape( cookie.split('+')[0] )
var DEALER_CODE = unescape( cookie.split('+')[1] )
var DEALER_NAME = unescape( cookie.split('+')[2] )
var DEALER_DETAILS = unescape( cookie.split('+')[3] )
if ((DEALER_DETAILS.lastIndexOf('<br />') != -1) & (DEALER_DETAILS.lastIndexOf('<br />') == DEALER_DETAILS.length - 6)) {
DEALER_DETAILS = DEALER_DETAILS.substring(0, DEALER_DETAILS.lastIndexOf('<br />'));
}
var DEALER_TELEPHONE = unescape( cookie.split('+')[4] )
var DEALER_EMAIL = unescape( cookie.split('+')[5] )
new Element('div',{id:'favoriteDealer'}).setHTML(
this.favoriteDealerTemplate.parse({'DEALER_CODE':DEALER_CODE,
'DEALER_NAME':DEALER_NAME,
'MARKET_LANG':MARKET_LANG,
'DEALER_DETAILS':DEALER_DETAILS,
'DEALER_TELEPHONE':DEALER_TELEPHONE,
'DEALER_EMAIL':DEALER_EMAIL})
).injectInside( 'SbeDealerLocator' )
/* remove cookie */
$('DlSearchAgainLink').addEvent('click', function(e){
engine.cookie.erase(this.COOKIE)
}.bind(this));
}
}
},
displaySearchBox : function(){
if($$('#SbeDealerLocator .DealerLocatorSearchBox').length == 0){
// only one element but more direct than otherwise.
$$('#favoriteDealer').each(function(el){el.remove()})
this.DealerLocatorSearchBox.injectInside('SbeDealerLocator')
}
},
init : function(){
this.DealerLocatorSearchBox =
$$('#SbeDealerLocator .DealerLocatorSearchBox')[0]
var url = $('dealerDetailsURL').href
$('dealerDetailsURL').href = url.replace(/%25([\w-]+)%25/g,'%$1%')
this.favoriteDealerTemplate =
new Template( $('DealerLocatorMemorizedTemplate').innerHTML )
$('DealerLocatorMemorizedTemplate').remove()
this.displayFavoriteDealer()
// Defect #5695 - Dealer Locator no text return submits search
// get the Advanced Dealer Locator to be displayed with an empty search box.
$$(document.sbedlform).addEvent('submit', function(){
if(document.sbedlform.addresssearchstring.value.length == 0){
document.sbedlform.addresssearchstring.value =
$('SbeDL-addresssearchstring-searchPrompt').value
}
});
}
}
/*******************************************************************************************
* Calendar component.
* Author: Mikheil Sukhiashvili
*
* 2011 (c) Ford
*******************************************************************************************/
// shortcut to getElementById
var ge = function(id) {
return document.getElementById(id);
};
var Calendar = function (maxMonth, monthCaptions, style, selectedStyle, disabledStyle, emptyStyle) {
MAX_MONTH = maxMonth;
MONTH_CAPTIONS = monthCaptions;
STYLE = style;
SELECTED_STYLE = selectedStyle;
DISABLED_STYLE = disabledStyle;
EMPTY_STYLE = emptyStyle;
};
// Initializes calendar
// 
Calendar.prototype.init = function (date) {
// Current day (1-31)
var day = date.getDate();
// Year (4 digit)
var year = date.getFullYear();
// Month (0-11)
var month = date.getMonth();
// Save starting month and day to restrict changing them
this.startingYear = year;
this.startingMonth = month;
this.startingDay = day;
this.setMonth(year, month);
this.select(day);
};
// Returns difference in month between starting and given date
Calendar.prototype.monthOffset = function (year, month) {
return 12 * (year - this.startingYear) + month - this.startingMonth;
};
// 
Calendar.prototype.selectMonth = function (shift) {
// Determine difference between current month and starting month
var year = this.currentYear;
var month = this.currentMonth;
// Current month offset
var monthOffset = this.monthOffset(year, month);
var desiredOffset = monthOffset + shift;
if (desiredOffset >= 0 && desiredOffset <= MAX_MONTH) {
month = this.startingMonth + desiredOffset;
year = this.startingYear + Math.floor(month / 12);
month = month % 12;
this.setMonth(year, month);
}
};
// Set current month view, disables days in the past 
//
Calendar.prototype.setMonth = function (year, month) {
this.currentYear = year;
this.currentMonth = month;
// Day of week of the first day of this month (0 is Sunday)
this.dayOfWeek = new Date(year, month, 1).getDay();
if (this.dayOfWeek === 0) {
// prefer sunday to be the last day of the week
this.dayOfWeek = 7;
}
// Number of days in this month
var daysInMonth = 32 - new Date(year, month, 32).getDate();
for (var i = 1; i <= 42; i++) {
var cell = ge("calendarCell" + i);
var day = i - this.dayOfWeek + 1;
if (day > 0 && day <= daysInMonth) {
// Cell used for displaying actual day
cell.innerHTML = day;
if (this.startingYear === year && this.startingMonth === month && this.startingDay > day) {
// Disable days from the past
cell.tag = undefined;
cell.disabled = true;
cell.className = DISABLED_STYLE;
this.setCellDecoration(i);
} else {
cell.tag = day;
cell.disabled = false;
cell.className = STYLE;
// Call decorator
if (this.decorator) {
this.decorator(this, i, year, month, day, (i - 1) % 7 /* day of the week 0 is Monday */);
}
} 			
} else {
// Unused cells
cell.innerHTML = "";
cell.className = EMPTY_STYLE;
cell.tag = undefined;
this.setCellDecoration(i);
}
}
// Select current day
if (this.currentMonth === this.selectedMonth && this.currentYear === this.selectedYear) {
this.select(this.selectedDay);
}
// set header
ge("calendarHeader").innerHTML = MONTH_CAPTIONS[month] + " " + year; 
};
// Decorates cell
Calendar.prototype.setCellDecoration = function (cellId, greyCross, redCross, stripe, exclamation) {
ge("cellCrossGrey" + cellId).style.display = greyCross ? "inline-block" : "none";
ge("cellCrossRed" + cellId).style.display = redCross ? "inline-block" : "none";
ge("cellStripeRed" + cellId).style.display = stripe ? "inline-block" : "none";
ge("cellExclamation" + cellId).style.display = exclamation ? "inline-block" : "none";
};
// Selects particular day
//
Calendar.prototype.select = function (day) {
// unselect old cell
var oldCell = ge("calendarCell" + (this.dayOfWeek + this.selectedDay - 1));
if (oldCell && oldCell.className !== EMPTY_STYLE && oldCell.className != DISABLED_STYLE) {
oldCell.className = STYLE;
}
// select new cell
var cell = ge("calendarCell" + (this.dayOfWeek + day - 1));
cell.className = SELECTED_STYLE;
this.selectedYear = this.currentYear;
this.selectedMonth = this.currentMonth;
this.selectedDay = day;
};
// Fired when calendar cell is clicked
//
Calendar.prototype.onClick = function (id) {
var control = ge("calendarCell" + id);
var day = control.tag;
if (day === undefined) {
// day from the past, nothing to do
return;
}
this.onClickHandler(this, this.currentYear, this.currentMonth, day, (id - 1) % 7 /* day of week */);
};
// Function to call when calendar is clicked
//
Calendar.prototype.setOnClickHandler = function (handler) {
this.onClickHandler = handler;
this.onClickHandler(this, this.currentYear, this.currentMonth, this.selectedDay, (this.dayOfWeek + this.selectedDay - 2) % 7  /* day of week */);
};
// Function to ask how to decorate particular day
Calendar.prototype.setDecorator = function (decorator) {
this.decorator = decorator;
};
/*******************************************************************************************
* Controller for ajax stuff.
* Author: Mikheil Sukhiashvili
*
* 2012 (c) Ford
*******************************************************************************************/
var Controller = function (prefix, ajaxPrefix) {
this.prefix = prefix;
this.ajaxPrefix = ajaxPrefix;
REDIRECT_HEADER = "engine-redirect";
RESULT_HEADER = "engine-ajax-result";
this.submit = function(forward, command, ignoreToken) {
if (forward !== undefined) {
document.getElementById(this.prefix + "Forward").value = forward;
}
if (command !== undefined) {
document.getElementById(this.prefix + "Command").value = command;
}
if (ignoreToken !== undefined) {
document.getElementById(this.prefix + "Token").value = 'null';
}
document.getElementById(this.prefix + "Form").submit();
};
// Checks headers for possible redirect from controller 
// does redirect if needed. Returns true if no redirect is needed
var checkHeadersForRedirect = function (request) {
var redirect = request.getHeader(REDIRECT_HEADER); 
if (redirect !== null && redirect !== "") {
location.href = redirect;
return true;
}
return false;
};
// Synchronous loading of element content
// id, url, params, onError
this.ajaxLoadSync = function(params) {
var result = undefined;
var request = new Request.HTML({
async: false,
url: params.url,
method: "post",
noCache: true,
data: params.params
});
request.onSuccess = function(responseTree, responseElements, responseHTML) {
if (checkHeadersForRedirect(request)) {
return;
}
if (params.id !== undefined) {
document.id(params.id).set('html', responseHTML);
}
var resultHeader = request.getHeader(RESULT_HEADER);
if (resultHeader !== null && resultHeader === 'failed') {
result = false;
} else {
result = true;
}
};
request.onCancel = function() {
this.onFailure(null);
};
request.onFailure = function() {
if (checkHeadersForRedirect(request)) {
return;
}
var s = params.onError;
if (typeof s === 'function') {
s = s.call(this);
}
if (params.id !== undefined) {
document.id(params.id).set('html', s);
}
};
try {
request.send();
} catch (whatever) {
this.onFailure();
}
return result;
};
// Synchronous calling of element
// url, params
this.ajaxGetSync = function (params) {
var engResult = true;
var request = new Request({
async: false,
url: params.url,
method: "post",
noCache: true,
data: params.params
});
request.onSuccess = function(responseText) {
if (checkHeadersForRedirect(request)) {
return;
}
var resultHeader = request.getHeader(RESULT_HEADER);
if (resultHeader !== null && resultHeader === 'failed') {
this.onFailure();
} else {
try {
engResult = JSON.decode(responseText);
} catch (whatever) {
engResult = false;
}
}
};
request.onCancel = function() {
this.onFailure();
};
request.onFailure = function() {
if (checkHeadersForRedirect(request)) {
// don't want redirect to be processed on client side
engResult = "timeout"; 
return;
}
engResult = request.getHeader(RESULT_HEADER);
if (engResult === null || engResult === undefined) {
engResult = false;
}
};
request.send();
return engResult;
};
// Helps updating fields with ajax results
this.processAjaxErrors = function(fields, errors, errorClass) {
var focused = false;
for (var i = 0, n = fields.length; i < n; i++) {
var f = fields[i];
var error, gotError;
if (errors[f] !== undefined) {
error = errors[f];
gotError = true;
} else {
error = '';
gotError = false;
}
document.id(f + 'Error').setText(error);
if (document.id(f)) {
if (gotError) {
// Focus first erroneous field
if (!focused) {
focused = true;
document.id(f).focus();
}
document.id(f).addClass(errorClass);
} else {
document.id(f).removeClass(errorClass);
}
}
}								
};
var myOnKeyDown = function(elem, event, targetEvent,  target, ignoreEmpty) {
if (event.key === targetEvent) {
event.stopPropagation();			
event.stop();
if (!ignoreEmpty || !!(document.id(elem).get('value'))) {
if (typeof target === 'function') {
target.call(this, event);
} else {
var elem = document.id(target);
if (elem) {
setTimeout(function() {
elem.focus();
if (typeof elem.select === 'function') {
elem.select();
}	
}, 0);
}
}
}
return false;
}
};
// Calls function on enter or focuses $(what)
// if provided "what" parameter is a string
this.onEnterDo = function (elem, what, ignoreEmpty) {
document.id(elem).addEvent('keypress', function(event) {myOnKeyDown(elem, event, 'enter', what, ignoreEmpty);});
};
// Calls function on escape or focuses $(what)
// if provided "what" parameter is a string
this.onEscapeDo = function (elem, what) {
document.id(elem).addEvent('keypress', function(event) {myOnKeyDown(elem, event, 'esc', what);});
};
// Clears whitespace (left, right and consecutive) from the input field
this.clearWhiteSpace = function (fields) {
for (var i = 0, n = fields.length; i < n; i++) {
var wsfield = document.id(fields[i]).get('value');
wsfield = wsfield.replace(/\s{2,}/g,' ');
wsfield = wsfield.replace(/^\s*/, '').replace(/\s*$/, '');
document.id(fields[i]).set('text', wsfield);
document.id(fields[i]).set('value', wsfield);
}
};
// Allows to "ping" the server, to check if it is still alive
var ajaxGetSync = this.ajaxGetSync;
var url = this.ajaxPrefix + "Ajax_KeepAlive";
this.keepAlive = function () {
ajaxGetSync({url: url});
};
// Allows to display tooltip, taking care to show only one tooltip at a time
this.initTooltips = function (postfix, fields, onFocusOnlyFields) {
var onFocus = function (id) {
var tt;
// hide blur & focus
for (var i = 0, n = fields.length; i < n; i++) {
if (fields[i] === id) continue;
tt = document.id(fields[i] + postfix);
if (tt) tt.hide();
}
// hide focus only
if (onFocusOnlyFields) {
for (var i = 0, n = onFocusOnlyFields.length; i < n; i++) {
if (onFocusOnlyFields[i] === id) continue;
tt = document.id(onFocusOnlyFields[i] + postfix);
if (tt) tt.hide();
}
}
tt = document.id(id + postfix);
if (tt) tt.show();
};
var onBlur = function (id) {
var elem = document.id(id + postfix);
if (elem) {
elem.hide();
}
};
var doHook = function (id, focusOnly) {
var elem = document.id(id);
elem.addEvent('focus', function() { onFocus(id);});
if (!focusOnly) {
elem.addEvent('blur', function() { onBlur(id);});
}		
};
// hook both blur & focus
for (var i = 0, n = fields.length; i < n; i++) {
doHook(fields[i], false);		
}
// hook focus only
if (onFocusOnlyFields) {
for (var i = 0, n = onFocusOnlyFields.length; i < n; i++) {
doHook(onFocusOnlyFields[i], true);		
}	
}
};
};
//******************************************************************
//* Copyright (c) 2007 Ford Motor Company. All Rights Reserved.
//*
//*
//* $$Workfile:	CookieLegislation.js  $$
//* $$Author:   grathnas  $$
//* $$Date:   	May 14 2012 16:56:22  $$
//*
//* Description:
//* Cookie legislation related javascript code
//******************************************************************
if(typeof engine.cookieLegislation == "undefined") engine.cookieLegislation = new Object();
//name of the cookie
//value - true/false
engine.cookieLegislation.cookieName = 'ford_cookie_legislation_seen';
//Expiry in number of days (2 years)
engine.cookieLegislation.cookieExpiryDays = 730;
//function to trigger the cookieLe 
engine.cookieLegislation.trigger = function(){
if(this.hasSeenCookieLegislation()){
// do nothing..no popup
// console.log("cookie present already seen it");
}else{
// User not accepted the cookie legislation
// show the pop up
this.display();
}
};
//function to check for engine domain specific cookieLegislation
//has the user seen it already
engine.cookieLegislation.hasSeenCookieLegislation = function(){
return (engine.cookie.read(this.cookieName) == "true") ? true : false;
};
//function to display the legislation pop up
engine.cookieLegislation.display = function (){
$$('#cookieAlertBoxID').setStyle('display','block');
var closCookieAlert = function(){
var closebtn = $$('#closeBtnID, #btnLinkID');
var otherBtn = $$('#linkID');
closebtn.addEvent('click', function(e){
engine.cookieLegislation.create(engine.cookieLegislation.cookieExpiryDays);
e.preventDefault();
$$('#cookieAlertBoxID').setStyle('display','none');
});
otherBtn.addEvent('click', function(e){
engine.cookieLegislation.create(engine.cookieLegislation.cookieExpiryDays);
e.preventDefault();
var getHREF = this.getProperty('href');
$$('#cookieAlertBoxID').setStyle('display','none');
location.href = getHREF;
});
};
closCookieAlert();
};
//function to create legislation cookie
engine.cookieLegislation.create = function (days){
engine.cookie.create(this.cookieName, "true", days);
};
//function to append the source tag of the IFrame based on cookie legislation
engine.cookieLegislation.appendIFrameSrc = function(elementId){
var src = $$(elementId).get('src');
if(engine.cookieLegislation.hasSeenCookieLegislation()){
src = src + "&hc=true";
}else{
src = src + "&hc=false";
}
$$(elementId).set('src', src);	
};
function FNCObject(){
//-----------------------------------------------------------------------------*
//--	begin FNC object
//-----------------------------------------------------------------------------*
//-- use 'that' instead of reserved word 'this' and return the that-object at the end,
//-- this allows to easily implement 'public' and 'private' methods/properties
var that = new Object();
var FVDparms = new Object();
that.FVDparms = FVDparms;
FVDparms['vehID'] 		= null;
FVDparms['vehName'] 	= null;
FVDparms['vehSeries']	= null;
FVDparms['vehMediaID']	= null;
var HMCparms = new Object();
that.HMCparms = HMCparms;
//-----------------------------------------------------------------------------*
//-- initialize texts with default values, to be overwritten in FNC module
//-----------------------------------------------------------------------------*	
that.msgAlreadySelected	= 'You have already selected this model.';
that.msgTooManyModels	= 'You cannot compare more than 3 models. Please remove a model and try again.';
that.msgTooFewModels	= 'This is the only model shown on this page. You cannot remove it.';
that.txtRemoveModel		= 'Remove';
that.txtButton			= 'Compare';
that.txtTargetURL		= '';
that.blnLayout6			= false;
//-----------------------------------------------------------------------------*
//-- initialize arrays
//-----------------------------------------------------------------------------*	
var modelkey	= new Array('', '', '', ''); //-- model key for the i-th list item, [0] not used
var modelHTML	= new Array('', '', '', ''); //-- full HTML for the i-th list item, [0] not used
var HMCparmlist	= new Array(4);
var modelindex	= 0;						 //-- the number of vehicles shown
//-----------------------------------------------------------------------------*
that.swapTitle = function(){
//--
//-- triggered when clicking on the FNC title ('Find and Compare')
//-- expands/collapses the title body text
//-----------------------------------------------------------------------------*
var objTitleCopy = document.getElementById('FNCTitleCopy');
var objTitleHeader = document.getElementById('FNCTitleHeader');
if (objTitleCopy.style.display == 'block' || objTitleCopy.style.display == ''){
objTitleHeader.className = 'collapsed';
objTitleCopy.style.display = 'none';
}
else{
objTitleHeader.className = 'expanded';
objTitleCopy.style.display = 'block';
}				
}
//-----------------------------------------------------------------------------*
that.addDerivative = function(parms, blnUpdateHTML){
//--
//-- executed when pressing the add-to-compare-link in FVD
//-----------------------------------------------------------------------------*
var vehID		= parms['vehID'];
var vehName		= parms['vehName'];
var vehSeries	= parms['vehSeries'];
var vehMediaID	= parms['vehMediaID'];
if (that.isModelSelected(vehID)){
if (blnUpdateHTML){
alert(that.msgAlreadySelected);
}
return false;
}
if (modelindex < 3){
modelindex++;
var imgURL = engine.blob.getBasicAssetBlobURL('FSMedia', 'urlfcicon', vehMediaID);
modelHTML[modelindex] = getListItem(vehID, imgURL, vehName, vehSeries);
modelkey[modelindex] = vehID;
if (blnUpdateHTML){
createHTML();
storeHMCItems(modelindex);
}
return true;
}
else{
if (blnUpdateHTML){
alert(that.msgTooManyModels);
}
return false;
}
}
//-----------------------------------------------------------------------------*
that.removeDerivative = function(key, blnUpdateHTML){
//--
//-- executed when pressing the remove-link in FVD or FNC
//-----------------------------------------------------------------------------*
//-- do not remove last model in Layout6
if (modelindex <=1 && that.blnLayout6){
alert(that.msgTooFewModels);
return true;
}
var m = modelselected(key);
//-- shift array items
if (m > 0){
for (var i=m; i < modelindex; i++){
modelkey[i] = modelkey[i+1];
modelHTML[i] = modelHTML[i+1];
HMCparmlist[i] = new Object();
for (var key in HMCparmlist[i+1]){
HMCparmlist[i][key] = HMCparmlist[i+1][key];
}
}
modelindex--;
if (blnUpdateHTML){
createHTML();
}
}
}
//-----------------------------------------------------------------------------*
that.submitCompare = function(){
//--
//-- get values for all selected models and submit to Layout2/FVC
//-----------------------------------------------------------------------------*	
var parms = '';
//-- collect all FNC and HMC data from previous states (when user clicked add-to-compare)
for (var i = 0; i <= modelindex; i++){
if (i == 0){
//-- collect current HMC data
storeHMCItems(0);
}
else{
parms += '/' + 'dei' + i + '=' + modelkey[i];
}
for (var key in HMCparmlist[i]){
parms += '/' + key + i + '=' + HMCparmlist[i][key];
}
}
//-- submit
document.location.href = that.txtTargetURL + parms;
}
//-----------------------------------------------------------------------------*
that.getmodelindex = function(){
//--
//-- get the number of vehicles shown in FNC
//-----------------------------------------------------------------------------*	
return modelindex;
}
//-----------------------------------------------------------------------------*
that.isModelSelected = function(id){
//--
//-- is this model already contained in FNC?
//-----------------------------------------------------------------------------*	
if (modelselected(id) == 0){
return false;
}
else{
return true;
}
}
//-----------------------------------------------------------------------------*	
that.getSelectedDerivatives = function(){
//--
//-- 
//-----------------------------------------------------------------------------*
var derivatives  = new Array();
for (var i=1; i <= modelindex; i++){
derivatives[i-1] = modelkey[i];
}
return derivatives;
}
//-----------------------------------------------------------------------------*
function createHTML(){
//--
//-- (re-)builds entire HTML for <ul>-tag in FNC
//-----------------------------------------------------------------------------*
var html = '';
var listitem;
if (document.getElementById('FNCVehicleBox')){
if (modelindex > 0){
html += '<ul>';
for (var i=1; i <= modelindex; i++){
html += modelHTML[i];
}
html += '<\/ul>';
}				
document.getElementById('FNCVehicleBox').innerHTML = html;
updateCompareButton();
}				
}	
//-----------------------------------------------------------------------------*
function getListItem(key, imageURL, nameplate, series){
//--
//-- returns HTML for FNC <li>-tag
//-----------------------------------------------------------------------------*
var listitem = '';
listitem += '<li>';
listitem += '<!--[if lte IE 6]>';
listitem += '<img src="/cs/ENGInE/img/blank.gif" alt="' + nameplate + ' ' + series + '" style="filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src=\'' + imageURL + '\',sizingMethod=\'crop\')\;"/>';
listitem += '<![endif]-->';
listitem += '<img class="hidefromIE6" src="' + imageURL + '" alt="' + nameplate + ' ' + series + '"/>';	            			
listitem += '	<div>';
listitem += '		<p class="nameplate">' + nameplate + '<\/p>';
listitem += '		<p class="series">' + series + '<\/p>';
listitem += '		<a class="remove" href="javascript:void(0)\;" onclick="javascript:engine.Publisher.publish(\'FVD\', \'REMOVE_FROM_COMPARE\', \'' + key + '\');return false\;">' + that.txtRemoveModel + '<\/a>';
listitem += '	<\/div>';
listitem += '<\/li>';
return listitem;
}
//-----------------------------------------------------------------------------*
function modelselected(key){
//--
//-- returns the position of a selected model (1, 2, or 3), 0 if model not found
//-- key = vehID (assetID delivered by FVD) 
//-----------------------------------------------------------------------------*
var k = 0;
for (var i=1; i <= modelindex; i++){
if (key == modelkey[i]){
k = i;
break;
}
}
return k;
}
//-----------------------------------------------------------------------------*
function updateCompareButton(){
//--
//-- updates the FNC compare-button depending on the number of selected models
//-----------------------------------------------------------------------------*
var button = '';
if (modelindex > 1 || that.blnLayout6){
button += '<button id="FNCButton" class="selected" type="submit">';
button += '	<div>' + that.txtButton + '<img id="FNCIcon" src="/cs/ENGInE/img/fnc_arrow_right_hover.gif" border="0" alt=""><\/div>';
button += '<\/button>';
}
else{
button += '<button id="FNCButton" class="default" type="reset">';
button += '	<div>' + that.txtButton + '<img id="FNCIcon" src="/cs/ENGInE/img/fnc_arrow_right_default.gif" border="0" alt=""><\/div>';
button += '<\/button>';
}
document.getElementById('FNCForm').innerHTML = button;
}
//-----------------------------------------------------------------------------*
function storeHMCItems(i){
//--
//-- get all chosen items from HMC and store in an associative array 'HMCparmlist[i]'
//-----------------------------------------------------------------------------*	
var joinArray = '';
var delimiter;
if(typeof(hmc) != 'undefined'){
HMCparmlist[i] = new Object();
$each(
hmc.gatherUserInput(), function(value, key){
if($type(value) == 'array'){
if (value.length > 0 ){
delimiter = '';
joinArray = '';
value.forEach(
function(item,index){
joinArray += delimiter + encodeURIComponent(item);
delimiter = ';';
}
)
HMCparmlist[i][key] = joinArray;
}
}
else{
HMCparmlist[i][key] = encodeURIComponent(value);
}
}
)
}
}
//-----------------------------------------------------------------------------*
that.storeHMCItemsOnload = function(i, parms){
//--
//-- get all HMC items from URL and store in an associative array 'HMCparmlist[i]'
//-----------------------------------------------------------------------------*	
HMCparmlist[i] = new Object();
for (var key in parms){
HMCparmlist[i][key] = parms[key];
}
}
//-----------------------------------------------------------------------------*
//-- end FNC object
//-----------------------------------------------------------------------------*	
return that;
}
function IePngFixer() {}
var Ie6PngMouseOverHash = {};
var Ie6PngMouseOver = new Class({
initialize: function(normalSrc, highlightSrc){
var i = new Image();
this.normalSrc = normalSrc;
i.src = this.normalSrc;
this.normalW = i.width;
this.normalH = i.height;
this.highlightSrc = highlightSrc;
i.src = this.highlightSrc;
this.highlightW = i.width;
this.highlightH = i.height;        
}
});
function IeSwapBlockFilter (elementId, src) {
var e = document.getElementById(elementId);
if (typeof(e) != "unknown") {
e.style.backgroundImage = "none";
e.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='" + src + "', sizingMethod='crop');" 
}
}
var blankImage = "/cs/ENGInE/img/blank.gif";
function IePngImageSwitch (imageElement, height, width) {
// swaps a PNG and moves it to background image...
if (! imageElement.src.match(blankImage)) {
var pushImage = imageElement.src;
var pushHeight = imageElement.height;
var pushWidth = imageElement.width;
if (typeof height != "undefined") pushHeight = height;
if (typeof width != "undefined") pushWidth = width;		
imageElement.src = blankImage;
//		imageElement.width = pushWidth;
//		imageElement.height = pushHeight;
imageElement.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='" + pushImage + "', sizingMethod='crop');" 
}
}
function IePngDivSwitch (divElement) {
if (divElement.currentStyle.backgroundImage != null && divElement.currentStyle.backgroundImage != "none") {
if (divElement.className.toLowerCase().indexOf("pngfix") > -1) {
var pushImageArray = divElement.currentStyle.backgroundImage.split('\"');
if (pushImageArray[1] != "") {
divElement.style.backgroundImage = "none";
divElement.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='" + pushImageArray[1] + "', sizingMethod='crop');" 
}  
}
}
} 
function IePngCreateRollOvers() {
$$('img[class$="iepngme"]').forEach(function(item){ 
// attaches mouse over effect for PNG images
if (item.hasClass("hmc-icon")) {
// create our mouse over object
aRef = item.id.split('hmc-icon');
if (typeof Ie6PngMouseOverHash[aRef[1]] == "undefined") {
// Create new Ie6PngMouseOver
var normal = document.getElementById('hmc-icon' + aRef[1]);
var highlight = document.getElementById('hmc-rollover' + aRef[1]);
if (normal && highlight) {
var mo = new Ie6PngMouseOver(normal.src, highlight.src);
Ie6PngMouseOverHash[aRef[1]] = mo;
// Fix transparency
IePngImageSwitch(item, mo.normalH, mo.normalW); 
}
}
}		
})
}
function IePngFixer() {
var arVersion = navigator.appVersion.split("MSIE")
var version = parseFloat(arVersion[1]) 
if ((version >= 5.5) && (version < 7.0) && (typeof(document.body.filters) != "unknown")) {
IePngCreateRollOvers();
$$('img[class$="pngfix"]').forEach(function(item) {
IePngImageSwitch(item);
})		
$$('div[class$="pngfix"]').forEach(function(item) {
IePngDivSwitch(item);
})
}
}
/*	Unobtrusive Flash Objects (UFO) v3.21 <http://www.bobbyvandersluis.com/ufo/>
Copyright 2005, 2006 Bobby van der Sluis
This software is licensed under the CC-GNU LGPL <http://creativecommons.org/licenses/LGPL/2.1/>
*/
var UFO = {
req: ["movie", "width", "height", "majorversion", "build"],
opt: ["play", "loop", "menu", "quality", "scale", "salign", "wmode", "bgcolor", "base", "flashvars", "devicefont", "allowscriptaccess", "seamlesstabbing", "allowfullscreen"],
optAtt: ["id", "name", "align"],
optExc: ["swliveconnect"],
ximovie: "ufo.swf",
xiwidth: "215",
xiheight: "138",
ua: navigator.userAgent.toLowerCase(),
pluginType: "",
fv: [0,0],
foList: [],
create: function(FO, id) {
if (!UFO.uaHas("w3cdom") || UFO.uaHas("ieMac")) return;
UFO.getFlashVersion();
UFO.foList[id] = UFO.updateFO(FO);
UFO.createCSS("#" + id, "visibility:hidden;");
UFO.domLoad(id);
},
updateFO: function(FO) {
if (typeof FO.xi != "undefined" && FO.xi == "true") {
if (typeof FO.ximovie == "undefined") FO.ximovie = UFO.ximovie;
if (typeof FO.xiwidth == "undefined") FO.xiwidth = UFO.xiwidth;
if (typeof FO.xiheight == "undefined") FO.xiheight = UFO.xiheight;
}
FO.mainCalled = false;
return FO;
},
domLoad: function(id) {
var _t = setInterval(function() {
if ((document.getElementsByTagName("body")[0] != null || document.body != null) && document.getElementById(id) != null) {
UFO.main(id);
clearInterval(_t);
}
}, 250);
if (typeof document.addEventListener != "undefined") {
document.addEventListener("DOMContentLoaded", function() { UFO.main(id); clearInterval(_t); } , null); // Gecko, Opera 9+
}
},
main: function(id) {
var _fo = UFO.foList[id];
if (_fo.mainCalled) return;
UFO.foList[id].mainCalled = true;
document.getElementById(id).style.visibility = "hidden";
if (UFO.hasRequired(id)) {
if (UFO.hasFlashVersion(parseInt(_fo.majorversion, 10), parseInt(_fo.build, 10))) {
if (typeof _fo.setcontainercss != "undefined" && _fo.setcontainercss == "true") UFO.setContainerCSS(id);
UFO.writeSWF(id);
}
else if (_fo.xi == "true" && UFO.hasFlashVersion(6, 65)) {
UFO.createDialog(id);
}
}
document.getElementById(id).style.visibility = "visible";
},
createCSS: function(selector, declaration) {
var _h = document.getElementsByTagName("head")[0]; 
var _s = UFO.createElement("style");
if (!UFO.uaHas("ieWin")) _s.appendChild(document.createTextNode(selector + " {" + declaration + "}")); // bugs in IE/Win
_s.setAttribute("type", "text/css");
_s.setAttribute("media", "screen"); 
_h.appendChild(_s);
if (UFO.uaHas("ieWin") && document.styleSheets && document.styleSheets.length > 0) {
var _ls = document.styleSheets[document.styleSheets.length - 1];
if (typeof _ls.addRule == "object") _ls.addRule(selector, declaration);
}
},
setContainerCSS: function(id) {
var _fo = UFO.foList[id];
var _w = /%/.test(_fo.width) ? "" : "px";
var _h = /%/.test(_fo.height) ? "" : "px";
UFO.createCSS("#" + id, "width:" + _fo.width + _w +"; height:" + _fo.height + _h +";");
if (_fo.width == "100%") {
UFO.createCSS("body", "margin-left:0; margin-right:0; padding-left:0; padding-right:0;");
}
if (_fo.height == "100%") {
UFO.createCSS("html", "height:100%; overflow:hidden;");
UFO.createCSS("body", "margin-top:0; margin-bottom:0; padding-top:0; padding-bottom:0; height:100%;");
}
},
createElement: function(el) {
return (UFO.uaHas("xml") && typeof document.createElementNS != "undefined") ?  document.createElementNS("http://www.w3.org/1999/xhtml", el) : document.createElement(el);
},
createObjParam: function(el, aName, aValue) {
var _p = UFO.createElement("param");
_p.setAttribute("name", aName);	
_p.setAttribute("value", aValue);
el.appendChild(_p);
},
uaHas: function(ft) {
var _u = UFO.ua;
switch(ft) {
case "w3cdom":
return (typeof document.getElementById != "undefined" && typeof document.getElementsByTagName != "undefined" && (typeof document.createElement != "undefined" || typeof document.createElementNS != "undefined"));
case "xml":
var _m = document.getElementsByTagName("meta");
var _l = _m.length;
for (var i = 0; i < _l; i++) {
if (/content-type/i.test(_m[i].getAttribute("http-equiv")) && /xml/i.test(_m[i].getAttribute("content"))) return true;
}
return false;
case "ieMac":
return /msie/.test(_u) && !/opera/.test(_u) && /mac/.test(_u);
case "ieWin":
return /msie/.test(_u) && !/opera/.test(_u) && /win/.test(_u);
case "gecko":
return /gecko/.test(_u) && !/applewebkit/.test(_u);
case "opera":
return /opera/.test(_u);
case "safari":
return /applewebkit/.test(_u);
default:
return false;
}
},
getFlashVersion: function() {
if (UFO.fv[0] != 0) return;  
if (navigator.plugins && typeof navigator.plugins["Shockwave Flash"] == "object") {
UFO.pluginType = "npapi";
var _d = navigator.plugins["Shockwave Flash"].description;
if (typeof _d != "undefined") {
_d = _d.replace(/^.*\s+(\S+\s+\S+$)/, "$1");
var _m = parseInt(_d.replace(/^(.*)\..*$/, "$1"), 10);
var _r = /r/.test(_d) ? parseInt(_d.replace(/^.*r(.*)$/, "$1"), 10) : 0;
UFO.fv = [_m, _r];
}
}
else if (window.ActiveXObject) {
UFO.pluginType = "ax";
try { // avoid fp 6 crashes
var _a = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.7");
}
catch(e) {
try { 
var _a = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.6");
UFO.fv = [6, 0];
_a.AllowScriptAccess = "always"; // throws if fp < 6.47 
}
catch(e) {
if (UFO.fv[0] == 6) return;
}
try {
var _a = new ActiveXObject("ShockwaveFlash.ShockwaveFlash");
}
catch(e) {}
}
if (typeof _a == "object") {
var _d = _a.GetVariable("$version"); // bugs in fp 6.21/6.23
if (typeof _d != "undefined") {
_d = _d.replace(/^\S+\s+(.*)$/, "$1").split(",");
UFO.fv = [parseInt(_d[0], 10), parseInt(_d[2], 10)];
}
}
}
},
hasRequired: function(id) {
var _l = UFO.req.length;
for (var i = 0; i < _l; i++) {
if (typeof UFO.foList[id][UFO.req[i]] == "undefined") return false;
}
return true;
},
hasFlashVersion: function(major, release) {
return (UFO.fv[0] > major || (UFO.fv[0] == major && UFO.fv[1] >= release)) ? true : false;
},
writeSWF: function(id) {
var _fo = UFO.foList[id];
var _e = document.getElementById(id);
if (UFO.pluginType == "npapi") {
if (UFO.uaHas("gecko") || UFO.uaHas("xml")) {
while(_e.hasChildNodes()) {
_e.removeChild(_e.firstChild);
}
var _obj = UFO.createElement("object");
_obj.setAttribute("type", "application/x-shockwave-flash");
_obj.setAttribute("data", _fo.movie);
_obj.setAttribute("width", _fo.width);
_obj.setAttribute("height", _fo.height);
var _l = UFO.optAtt.length;
for (var i = 0; i < _l; i++) {
if (typeof _fo[UFO.optAtt[i]] != "undefined") _obj.setAttribute(UFO.optAtt[i], _fo[UFO.optAtt[i]]);
}
var _o = UFO.opt.concat(UFO.optExc);
var _l = _o.length;
for (var i = 0; i < _l; i++) {
if (typeof _fo[_o[i]] != "undefined") UFO.createObjParam(_obj, _o[i], _fo[_o[i]]);
}
_e.appendChild(_obj);
}
else {
var _emb = "";
var _o = UFO.opt.concat(UFO.optAtt).concat(UFO.optExc);
var _l = _o.length;
for (var i = 0; i < _l; i++) {
if (typeof _fo[_o[i]] != "undefined") _emb += ' ' + _o[i] + '="' + _fo[_o[i]] + '"';
}
_e.innerHTML = '<embed type="application/x-shockwave-flash" src="' + _fo.movie + '" width="' + _fo.width + '" height="' + _fo.height + '" pluginspage="http://www.macromedia.com/go/getflashplayer"' + _emb + '></embed>';
}
}
else if (UFO.pluginType == "ax") {
var _objAtt = "";
var _l = UFO.optAtt.length;
for (var i = 0; i < _l; i++) {
if (typeof _fo[UFO.optAtt[i]] != "undefined") _objAtt += ' ' + UFO.optAtt[i] + '="' + _fo[UFO.optAtt[i]] + '"';
}
var _objPar = "";
var _l = UFO.opt.length;
for (var i = 0; i < _l; i++) {
if (typeof _fo[UFO.opt[i]] != "undefined") _objPar += '<param name="' + UFO.opt[i] + '" value="' + _fo[UFO.opt[i]] + '" />';
}
var _p = window.location.protocol == "https:" ? "https:" : "http:";
_e.innerHTML = '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"' + _objAtt + ' width="' + _fo.width + '" height="' + _fo.height + '" codebase="' + _p + '//download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=' + _fo.majorversion + ',0,' + _fo.build + ',0"><param name="movie" value="' + _fo.movie + '" />' + _objPar + '</object>';
}
},
createDialog: function(id) {
var _fo = UFO.foList[id];
UFO.createCSS("html", "height:100%; overflow:hidden;");
UFO.createCSS("body", "height:100%; overflow:hidden;");
UFO.createCSS("#xi-con", "position:absolute; left:0; top:0; z-index:1000; width:100%; height:100%; background-color:#fff; filter:alpha(opacity:75); opacity:0.75;");
UFO.createCSS("#xi-dia", "position:absolute; left:50%; top:50%; margin-left: -" + Math.round(parseInt(_fo.xiwidth, 10) / 2) + "px; margin-top: -" + Math.round(parseInt(_fo.xiheight, 10) / 2) + "px; width:" + _fo.xiwidth + "px; height:" + _fo.xiheight + "px;");
var _b = document.getElementsByTagName("body")[0];
var _c = UFO.createElement("div");
_c.setAttribute("id", "xi-con");
var _d = UFO.createElement("div");
_d.setAttribute("id", "xi-dia");
_c.appendChild(_d);
_b.appendChild(_c);
var _mmu = window.location;
if (UFO.uaHas("xml") && UFO.uaHas("safari")) {
var _mmd = document.getElementsByTagName("title")[0].firstChild.nodeValue = document.getElementsByTagName("title")[0].firstChild.nodeValue.slice(0, 47) + " - Flash Player Installation";
}
else {
var _mmd = document.title = document.title.slice(0, 47) + " - Flash Player Installation";
}
var _mmp = UFO.pluginType == "ax" ? "ActiveX" : "PlugIn";
var _uc = typeof _fo.xiurlcancel != "undefined" ? "&xiUrlCancel=" + _fo.xiurlcancel : "";
var _uf = typeof _fo.xiurlfailed != "undefined" ? "&xiUrlFailed=" + _fo.xiurlfailed : "";
UFO.foList["xi-dia"] = { movie:_fo.ximovie, width:_fo.xiwidth, height:_fo.xiheight, majorversion:"6", build:"65", flashvars:"MMredirectURL=" + _mmu + "&MMplayerType=" + _mmp + "&MMdoctitle=" + _mmd + _uc + _uf };
UFO.writeSWF("xi-dia");
},
expressInstallCallback: function() {
var _b = document.getElementsByTagName("body")[0];
var _c = document.getElementById("xi-con");
_b.removeChild(_c);
UFO.createCSS("body", "height:auto; overflow:auto;");
UFO.createCSS("html", "height:auto; overflow:auto;");
},
cleanupIELeaks: function() {
var _o = document.getElementsByTagName("object");
var _l = _o.length
for (var i = 0; i < _l; i++) {
_o[i].style.display = "none";
for (var x in _o[i]) {
if (typeof _o[i][x] == "function") {
_o[i][x] = null;
}
}
}
}
};
if (typeof window.attachEvent != "undefined" && UFO.uaHas("ieWin")) {
window.attachEvent("onunload", UFO.cleanupIELeaks);
}
/*
example_hmc_filters_data = {
1234567890001:[20000,91,92,93,94,511],
1234567890002:[30000,95,96,97,98,512]
}
*/
function Checker(data,lpb,hpb){
this.data = data
this.LOW_PRICE_BOUNDARY = lpb
this.HIGH_PRICE_BOUNDARY = hpb
/* internal init */
this.price = this.priceCheck
for(var criterion in {bodyBits:1,gearBits:2,fuelBits:3,seatBits:4,featuresBits:5} ){
this[criterion] = this.bitmapCheck
}
}
Checker.prototype = {
INDEX:{price:0,bodyBits:1,gearBits:2,fuelBits:3,seatBits:4,featuresBits:5},
true_func : function(){return true},
false_func : function(){return false},
echo_input : function( carId, criterion, value ){
document.writeln(criterion+":"+value+ "<br />")
},
echo_data : function( carId, criterion, value ){
document.writeln(criterion+":"+this.data[carId][ this.INDEX[criterion] ]+ "<br />")
},
bitmapCheck : function( carId, criterion, hmc_user_input ){
var derivative_data = this.data[carId][ this.INDEX[criterion] ]
/* true if all bits in hmc_user_input are also set in derivative_data */
return ( hmc_user_input & derivative_data ) == hmc_user_input
},
priceCheck : function( carId, criterion, hmc_user_input ){
var derivative_data = this.data[carId][ this.INDEX[criterion] ]
return ( derivative_data > hmc_user_input*this.LOW_PRICE_BOUNDARY ) &&
( derivative_data < hmc_user_input*this.HIGH_PRICE_BOUNDARY )
},
testAllCars : function(criteria){
var valid_cars = []
for(var carId in this.data ){
if( this.carMeetsCriteria(carId, criteria) )
valid_cars.push(carId)
}
return valid_cars
},
carMeetsCriteria : function(carId, criteria){
var car_is_valid = true
for(var criterion in criteria){
var value = criteria[criterion]
if ( ! this[criterion]( carId, criterion, value ) )
car_is_valid = false
}
return car_is_valid
}
}
function displaySummaryView(siteTermJSON, bookingJSON, amendFlag){
document.getElementById("bookingRefNO").innerHTML = "<b>" + siteTermJSON.SiteTerm.YourBookingNo + " : " + bookingJSON.bookingCustomerRefNum + "</b>" + "<br>";
if(document.getElementById("titleID") != null){
document.getElementById("titleID").innerHTML = siteTermJSON.SiteTerm.summaryScreen;
}
var leftResult = "<h3 class='osbTabTitle'>" + siteTermJSON.SiteTerm.PersDetsCrumb +  
"<a href=\"javascript:OSB.submit('Action_AmendCustomerBooking','amendPersonalDetails',true);\" class='osbAmendButton'>";
if (amendFlag){
leftResult += siteTermJSON.SiteTerm.amend;
}
leftResult+= "</a>"+	    
"</h3>" +
"<div class='osbBordered'>" +
checkNull(bookingJSON.customer.title) + "&nbsp;" + checkNull(bookingJSON.customer.firstName) + "&nbsp;" + checkNull(bookingJSON.customer.lastName) + "<br>"+
siteTermJSON.SiteTerm.phone+ "&nbsp;" + checkNull(bookingJSON.customer.phone) + "<br>"+
siteTermJSON.SiteTerm.email + "&nbsp;" + checkNull(bookingJSON.customer.email)+	                     
"</div>";
var rightResult = "<h3 class='osbTabTitle'>"+ siteTermJSON.SiteTerm.YourCarLabel + "</h3>"+
"<div class='osbBordered'>"+
"<div class='osbVehicleInfoSummary'>"+
"<h3>"+ checkNull(bookingJSON.vehicle.vehicleLineDescription) +"</h3>"+
"<table>"+
"<tr>"+ 
"<th align='left'>"+ siteTermJSON.SiteTerm.Engine + "</th>" +
"<td>" + checkNull(bookingJSON.vehicle.engineType) + "</td>"+
"</tr>" +
"<tr>"+ 
"<th align='left'>"+ siteTermJSON.SiteTerm.FuelType + "</th>" +
"<td>" + checkNull(bookingJSON.vehicle.fuelType) + "</td>"+
"</tr>" +
"<tr>"+ 
"<th align='left'>"+ siteTermJSON.SiteTerm.Colour + "</th>" +
"<td>" + checkNull(bookingJSON.vehicle.exteriorPaint) + "</td>"+
"</tr>" +
"<tr>"+ 
"<th align='left'>"+ siteTermJSON.SiteTerm.SummaryVIN + "</th>" +
"<td>" + checkNull(bookingJSON.vehicle.vin) + "</td>"+
"</tr>";
if('Y' == siteTermJSON.SiteTerm.ShowRegistrationField){
rightResult	+=	"<tr>"+ 
"<th align='left'>"+ siteTermJSON.SiteTerm.RegistrationNo + "</th>" +
"<td>" + checkNull(bookingJSON.vehicle.licenseplate) + "</td>"+
"</tr>";
}
rightResult	+=	"<tr>"+ 
"<th align='left'>"+ siteTermJSON.SiteTerm.mileage + "</th>" +
"<td>" + checkNull(bookingJSON.odometer) + "</td>"+
"</tr>" +
"</table>"+
"</div>"+
"</div>";
var FSADesc = " - "+siteTermJSON.SiteTerm.FSADesc;
if(siteTermJSON.SiteTerm.FSADesc == 'FSADesc'){
FSADesc = '';
}
rightResult += "<h3 class='osbTabTitle'>"+siteTermJSON.SiteTerm.FSAAction+FSADesc+"</h3>" +
"<div class='osbBordered'>"+
"<span>"+
"<table>";
var splits = [];
var descOnly = [];			
var FsaDecsription = bookingJSON.fsaActions;
if(FsaDecsription != null && FsaDecsription !=''){
splits = FsaDecsription.split("||");
for(var i=0; i<splits.length; i++){
var desc = splits[i];
if(desc != null && desc !=''){
descOnly = desc.split(" - ");
rightResult += "<tr>" +
"<td>&#x25cf;&nbsp;"+descOnly[1]+"</td>"+
"</tr>";
}
}
} else {
rightResult += "<tr><td>"+siteTermJSON.SiteTerm.NoFSAAction+"</td></tr>";
}
rightResult += "</table>"+
"</span>"+
"</div>";
rightResult += "<h3 class='osbTabTitle'>"+ siteTermJSON.SiteTerm.service_appointment +		
"<a href=\"javascript:OSB.submit('Action_AmendCustomerBooking','amendServiceAppointments',true);\" class='osbAmendButton'>"; 
if (amendFlag){
rightResult += siteTermJSON.SiteTerm.amend;
} 
rightResult += "</a>"+			
"</h3>"+					    
"<div class='osbBordered'>";							   
rightResult += bookingJSON.appointmentDate +"&nbsp;" + bookingJSON.appointmentTime +
"</div>"; 
rightResult += "<h3 class='osbTabTitle'>" + siteTermJSON.SiteTerm.RegMainServices + "</h3>"+
"<div class='osbBordered'>"+ 
checkNull(bookingJSON.customerServiceDescription) + "&nbsp;";
var siteTermMainServiceDescription = "";		 					  
if("55555" == bookingJSON.mainServiceId){
if(bookingJSON.mainServicePrice == -1) {
rightResult += siteTermJSON.SiteTerm.WinterServicePrice_NotAvailableMsg;
siteTermMainServiceDescription = siteTermJSON.SiteTerm.WinterServicePrice_NotAvailableMsg;
}else{
rightResult +=bookingJSON.newMainServicePrice; 
}
}else{
if(bookingJSON.mainServicePrice == -1) {
rightResult += siteTermJSON.SiteTerm.Price_NotAvailable;
siteTermMainServiceDescription = siteTermJSON.SiteTerm.Price_NotAvailable;;
}else{
rightResult += bookingJSON.newMainServicePrice; 
}
}
rightResult +=	"<br><br>"+
siteTermJSON.SiteTerm.STDisclaimer +
"</div>";
if("55555" != bookingJSON.mainServiceId){				
rightResult += "<h3 class='osbTabTitle'>"+	siteTermJSON.SiteTerm.AddServices +		 
"<a href=\"javascript:OSB.submit('Action_AmendCustomerBooking','amendAdditionalServices',true);\" class='osbAmendButton'>";
if (amendFlag){
rightResult += siteTermJSON.SiteTerm.amend;
} 
rightResult += "</a>"+
"</h3>"+
"<div class='osbBordered'>"+ "<p>";
if(siteTermJSON.SiteTerm.showFreeService != 'Y'){		
rightResult += siteTermJSON.SiteTerm.VisualHealthCheck_Title  + "<br>";
}
var additionalServicePrices = 0; 
if(bookingJSON.bookedAdditionalServices != null && bookingJSON.bookedAdditionalServices.length > 0){
for(var i = 0; i< bookingJSON.bookedAdditionalServices.length; i++){
//  var serviceID = "AdditionalServiceName_Id_" + bookingJSON.bookedAdditionalServices[i].additionalServiceID;
additionalServicePrices = additionalServicePrices + bookingJSON.bookedAdditionalServices[i].price;
//var additionalSaerviceName = siteTermJSON.SiteTerm.AdditionalServiceName_Id_1;
rightResult += getAdditionalServiceName(bookingJSON.bookedAdditionalServices[i].additionalServiceID, siteTermJSON) + "&nbsp;" + bookingJSON.bookedAdditionalServices[i].newPrice+ "<br>";
}
}
/*var totalPrice;
if(bookingJSON.mainServicePrice == -1) {
totalPrice = siteTermJSON.SiteTerm.MainPriceMessage;
}else{
totalPrice = additionalServicePrices + bookingJSON.mainServicePrice;
}*/
rightResult += "</p>";
rightResult += "<p>" + 
"<strong>" + siteTermJSON.SiteTerm.ExpectedTotal + "</strong>" + "&nbsp;" + bookingJSON.totalServicePrice + "</p>" + "</div>";   
}
if("55555" != bookingJSON.mainServiceId){
rightResult += "<h3 class='osbTabTitle'>" + siteTermJSON.SiteTerm.Your_annotations +		
"<a href=\"javascript:OSB.submit('Action_AmendCustomerBooking','amendAnnotations',true);\" class='osbAmendButton'>";		
if (amendFlag){
rightResult += siteTermJSON.SiteTerm.amend;
} 		
rightResult += "</a>" +				
"</h3>" + 
"<div class='osbBordered word-break' >"+
"<p>"+ checkNull(bookingJSON.customerAnnotation) + "</p>"+			
"</div>";
}else if("55555" == bookingJSON.mainServiceId){
rightResult += "<h3 class='osbBorderedTitle'>"+siteTermJSON.SiteTerm.AnnotationsTxt+"</h3>"
+"<p>"+siteTermJSON.SiteTerm.AnnotationsDesc+"</p>"
+"<br>";
if(amendFlag){
rightResult += "<textarea name='note' title='textID' rows='9' id='textID' onchange='validateTextAreaSize();' onkeydown='limitText();' onkeyup='limitText();'>"
+checkNull(bookingJSON.customerAnnotation)
+"</textarea>";			
}else{
rightResult += "<textarea name='note' title='textID' rows='9' id='textID' onchange='validateTextAreaSize();' onkeydown='limitText();' onkeyup='limitText();' disabled='true'>"
+checkNull(bookingJSON.customerAnnotation)
+"</textarea>";
}
}
document.getElementById('blockLeftID').innerHTML = leftResult;
document.getElementById('blockRightID').innerHTML = rightResult;
document.getElementById('footerID').innerHTML = siteTermJSON.SiteTerm.SummaryFootnote;
document.getElementById("bookingJSON").value = bookingJSON;
}
function getAdditionalServiceName(serviceID, siteTermJSON){
var serviceName = "";	    
switch(serviceID){
case '1':			
serviceName = siteTermJSON.SiteTerm.AdditionalServiceName_Id_1;
break;
case '2':
serviceName = siteTermJSON.SiteTerm.AdditionalServiceName_Id_2;
break;
case '3':
serviceName = siteTermJSON.SiteTerm.AdditionalServiceName_Id_3;
break;
case '4':
serviceName = siteTermJSON.SiteTerm.AdditionalServiceName_Id_4;
break;
case '5':
serviceName = siteTermJSON.SiteTerm.AdditionalServiceName_Id_5;
break;
case '6':
serviceName = siteTermJSON.SiteTerm.AdditionalServiceName_Id_6;
break;
case '7':
serviceName = siteTermJSON.SiteTerm.AdditionalServiceName_Id_7;
break;
case '8':
serviceName = siteTermJSON.SiteTerm.AdditionalServiceName_Id_8;
break;
} 			
return serviceName;     
}
function displayAmendContactDetails(siteTermJSON, bookingJSON){
var spanResult	=	siteTermJSON.SiteTerm.EnterContactDetls;
var		result  =	"<label for='title'>"+siteTermJSON.SiteTerm.Title+"</label>";
result	+=	"<br>";	
result	+=	"<select id='title' name='title' class='title'>";
var customerTitle	=	siteTermJSON.SiteTerm.Customer_Title;
var titleArray		=	customerTitle.split(',');
for(var i = 0; i < titleArray.length; i++)
{
title = titleArray[i].replace(/(^\s+|\s+$)/g,'');
if(title == checkNull(bookingJSON.customer.title)){
result	+=	"<option value="+title+" selected='selected'>"+title+"</option>";
}else{
result	+=	"<option value="+title+">"+title+"</option>";
}
}
result	+=	"</select>";
result	+=	"<br>";
result	+=	"<label for='firstname'>"+siteTermJSON.SiteTerm.FirstName+"</label>";
result	+=	"<br>";
result	+=	"<input type='text' name='firstname' id='firstname' value='"+checkNull(bookingJSON.customer.firstName)+"'/>";
result	+=	"<br>";
result	+=	"<label for='lastname'>"+siteTermJSON.SiteTerm.LastName+"</label>";
result	+=	"<br>";
result	+=	"<input type='text' id='lastname' name='lastname' value='"+checkNull(bookingJSON.customer.lastName)+"'/>";
result	+=	"<br>";					
result	+=	"<label  for='contactno'>"+siteTermJSON.SiteTerm.ContactNo+"</label>";
result	+=	"<br>";
result	+=	"<input type='text' id='contactno' name='contactno' value='"+checkNull(bookingJSON.customer.phone)+"' />";
result	+=	"<br>";
result	+=	"<label  for='email'>"+siteTermJSON.SiteTerm.Email+"</label>";
result	+=	"<br>";
result	+=	"<input type='text' name='email' id='email' readonly value='"+checkNull(bookingJSON.customer.email)+"'/>";
result	+=	"<br>";
result	+=	"<label for='confirmEmail'>"+siteTermJSON.SiteTerm.RetypeEmail+"</label>";
result	+=	"<br>";
result	+=	"<input type='text' name='confirmEmail' id='confirmEmail' readonly value='"+checkNull(bookingJSON.customer.email)+"'/>";
// Privacy Statement starts 
var	privacyResult  =  "<strong>"+siteTermJSON.SiteTerm.PrivacyStmt+"</strong>";
privacyResult	+=	"<br>";
privacyResult	+=	siteTermJSON.SiteTerm.PrivacyStmt;
// TODO move style to CSS file 
var	checkResult	= "<input type='checkbox' name='privacystmt' id='privacystmt' value='accepted' checked='checked' onclick='return false;' onkeydown='return false;' style='vertical-align: middle'/>";
/*		var	checkResult	= "<input type='checkbox' name='privacystmt' id='privacystmt' value='accepted'  style='vertical-align: middle' onclick='validateCheckBox();' />";
function validateCheckBox(){
if (document.getElementById('privacystmt').checked){
console.log("checked");
privacystmt = "accepted";
console.log(privacystmt);
}else{
console.log("unchecked");
privacystmt = "";
console.log(privacystmt);
}
}*/
checkResult  += "<label for='privacystmt' style='vertical-align: middle; margin: 0; padding: 10px 5px'>"+siteTermJSON.SiteTerm.AcceptPrivacyStmt+"</label>";
checkResult	+= "<br>";
checkResult	+= "<br>";
//Privacy Statement ends 
var	Mandresult	= "<p>"+siteTermJSON.SiteTerm.MandatoryInfo+"</p>";
document.getElementById('amendSpan').innerHTML 			= spanResult;
document.getElementById('amendInnerBlock').innerHTML	= result;
document.getElementById('osbPrivacyStmt').innerHTML		= privacyResult;
document.getElementById('osbPrivacyCheck').innerHTML	= checkResult;
document.getElementById('osbMandatory').innerHTML		= Mandresult;
}
function displayAmendDateAndTime(siteTermJSON, bookingJSON){
var hResult	=	siteTermJSON.SiteTerm.PleaseSelect;
var prevAppiontmentDate = parseAppointmentDate(siteTermJSON, bookingJSON.appointmentTimeAsDate);
var	sResult	= "Previous appointment date and time :&nbsp;"+ prevAppiontmentDate.weekName +",&nbsp;" + prevAppiontmentDate.date + prevAppiontmentDate.month +"&nbsp;"+ prevAppiontmentDate.year+"&nbsp;"+prevAppiontmentDate.time;
document.getElementById('osbBlueTitleCalendarId').innerHTML = hResult;
document.getElementById('previousDateID').innerHTML = sResult;
}
function displayDealerDetails(bookingJSON, siteTermJSON, hideShowMap){  
var result = "<h3 class=\"osbTabTitle\">" + siteTermJSON.SiteTerm.YourSelectedDealer + "</h3> ";
result += "<div class=\"osbBordered\">";	
result += checkNull(bookingJSON.dealer.dealerProfile.dealerName) + "<br>";
result += checkNull(bookingJSON.dealer.dealerProfile.street) + "<br>";
result += checkNull(bookingJSON.dealer.dealerProfile.town) + "<br>";
result += checkNull(bookingJSON.dealer.dealerProfile.country) + "<br>";
result += checkNull(bookingJSON.dealer.dealerProfile.postalCode) + "<br>";
if(hideShowMap == "null" || hideShowMap == null ) {
result +=  "<a href=\"javascript:showDealerDetails('');\">" + siteTermJSON.SiteTerm.Showmap + "</a>";
} 		
result += "<input type=\"hidden\" name=\"addressSearchString\" id=\"dlAddressSearchString\" value=\"london\" >";
result += "<input type=\"hidden\" name=\"dlRangeString\" id=\"dlRangeString\" value=\"10\" >";
result += "<br><br>";
// suppress Dealer Opening Hours
if(siteTermJSON.SiteTerm.OpeningDealerHours == 'Y'){
result += "<strong>" + siteTermJSON.SiteTerm.BusinessHours + "</strong><br>";
result += siteTermJSON.SiteTerm.weekdays + "<br>";
result += checkNull(bookingJSON.dealer.dealerProfile.openingHoursServiceMonday) + "<br>";
result += checkNull(bookingJSON.dealer.dealerProfile.openingHoursServiceTuesday) + "<br>";
result += checkNull(bookingJSON.dealer.dealerProfile.openingHoursServiceWednesday) + "<br>";
result += checkNull(bookingJSON.dealer.dealerProfile.openingHoursServiceThursday) + "<br>";
result += checkNull(bookingJSON.dealer.dealerProfile.openingHoursServiceFriday) + "<br>";
result += siteTermJSON.SiteTerm.Saturday + "<br>";
result += checkNull(bookingJSON.dealer.dealerProfile.openingHoursServiceSaturday) + "<br>";
result += siteTermJSON.SiteTerm.Sunday + "<br>";
result += checkNull(bookingJSON.dealer.dealerProfile.openingHoursServiceSunday) + "<br>";
}
result += "<strong>" + siteTermJSON.SiteTerm.contact + "</strong><br>";
result += siteTermJSON.SiteTerm.phone + checkNull(bookingJSON.dealer.dealerProfile.phone) + "<br>";
result += siteTermJSON.SiteTerm.fax + checkNull(bookingJSON.dealer.dealerProfile.fax) + "<br>";
result += siteTermJSON.SiteTerm.email + checkNull(bookingJSON.dealer.dealerProfile.osbEmails) + "<br>";
result += "</div>";
document.getElementById("osbDealerID").innerHTML = result;
}
function checkNull(objValue){
var strValue = "";
if(objValue != "null" && objValue != null){
strValue = objValue;
}
return strValue;	
}
function parseAppointmentDate(siteTermJSON, dateString){
var dateTimeString = {
"month":"",
"weekName":"",
"year":"",
"date":"",
"time":""
};
//var reggie = /(\d{4})-(\d{2})-(\d{2}) (\d{2}):(\d{2}):(\d{2})/;
//var dateArray = reggie.exec(dateString); 
var months = siteTermJSON.SiteTerm.MonthCaptions;
var weeks = siteTermJSON.SiteTerm.WeekDays;
/*var dateObject = new Date(
(+dateArray[1]),
(+dateArray[2])-1, // Careful, month starts at 0!
(+dateArray[3]),
(+dateArray[4]),
(+dateArray[5]),
(+dateArray[6])
);*/
//var day = dateObject.getDay();
var day = dateString.day;
if(months != null && months != ''){
var monthsNames = months.split(',');
dateTimeString.month = monthsNames[dateString.month];
}	
if(weeks != null && weeks != ''){
var weeksNames = weeks.split(',');
dateTimeString.weekName = weeksNames[day-1];
}
dateTimeString.year = dateString.year;
dateTimeString.date = dateString.date;
if(dateString.minutes < 9){
dateTimeString.time = dateString.hours+":"+dateString.minutes+"0";
}else{
dateTimeString.time = dateString.hours+":"+dateString.minutes;
}
return dateTimeString;
}
function getAdditionalServiceDescription(serviceID, siteTermJSON){
var serviceName = ""; 
switch(serviceID){
case '1': 
serviceName = siteTermJSON.SiteTerm.AdditonalService_Id_1;
break;
case '2':
serviceName = siteTermJSON.SiteTerm.AdditonalService_Id_2;
break;
case '3':
serviceName = siteTermJSON.SiteTerm.AdditonalService_Id_3;
break;
case '4':
serviceName = siteTermJSON.SiteTerm.AdditonalService_Id_4;
break;
case '5':
serviceName = siteTermJSON.SiteTerm.AdditonalService_Id_5;
break;
case '6':
serviceName = siteTermJSON.SiteTerm.AdditonalService_Id_6;
break;
case '7':
serviceName = siteTermJSON.SiteTerm.AdditonalService_Id_7;
break;
case '8':
serviceName = siteTermJSON.SiteTerm.AdditonalService_Id_8;
break;
} 
return serviceName; 
}
//to check the dealer additional service id is available in booked services.
function checkAvailableInBookedService(bookingJSON, dealerAdditionalServiceID, bookedAdditionalService){
var flag = false;	
if(bookingJSON.bookedAdditionalServices != null && bookingJSON.bookedAdditionalServices.length > 0){
for(var k = 0; k < bookingJSON.bookedAdditionalServices.length; k++){
if(bookingJSON.bookedAdditionalServices[k].additionalServiceID == dealerAdditionalServiceID) {
flag = true;
bookedAdditionalService.push({
"price" : bookingJSON.bookedAdditionalServices[k].newPrice
});
break;					
}					
}				
}
return flag;		
}
//to check the booked additional service id is available in dealer services.
function checkAvailableInDealerService(dealer, bookedAdditionalServiceID){
var flag = false;	
if(dealer.dealerAddlServicesList != null && dealer.dealerAddlServicesList.length > 0){
for(var i = 0; i < dealer.dealerAddlServicesList.length; i++){
if(dealer.dealerAddlServicesList[i].additionalService.additionalServiceId == bookedAdditionalServiceID) {
flag = true;
break;					
}					
}				
}
return flag;		
}
function displayAdditionalServices(sitetermJSON, bookingJSON){
dealerJSON = bookingJSON.dealer;
siteTermJSON = sitetermJSON;
var dealer = bookingJSON.dealer;
var finalAdditionalServices = [];    
var amendAdditional_Services = ""; 
amendAdditional_Services += '<span class="osbAdditionalServicesBlock">';
if(dealer != null ){
if(siteTermJSON.SiteTerm.showFreeService != 'Y'){
amendAdditional_Services += '<h3 class="osbTabTitle">';  
amendAdditional_Services += '<input type="checkbox" name="selectedAdditionalServices"  checked="true" disabled="true" id="checkId" value="0"/>';
amendAdditional_Services += '&nbsp;'+'<label for="checkId">'+siteTermJSON.SiteTerm.VisualHealthCheck_Title+'</label>';
amendAdditional_Services += '</h3>';
amendAdditional_Services += '<div class="osbBordered osbAdditionalServiceInfo" style="position: relative">'+siteTermJSON.SiteTerm.Visualhealthchecktext+'</div>';
}
var serviceSelected = "false";
if(dealer.dealerAddlServicesList != null){
for(var i = 0; i < dealer.dealerAddlServicesList.length; i++){
var bookedAdditionalService = [];
var flag = checkAvailableInBookedService(bookingJSON, dealer.dealerAddlServicesList[i].additionalService.additionalServiceId, bookedAdditionalService);
//to display booked service price
if(flag){
finalAdditionalServices.push({
"additionalServiceID": dealer.dealerAddlServicesList[i].additionalService.additionalServiceId,
"serviceSelected" : flag,
"serviceAvailability": flag,
"message" : "",
"price" : bookedAdditionalService[0].price
});	
}
// to display dealer original service price
else{
finalAdditionalServices.push({
"additionalServiceID": dealer.dealerAddlServicesList[i].additionalService.additionalServiceId,
"serviceSelected" : flag,
"serviceAvailability": flag,
"message" : "",
"price" : dealer.dealerAddlServicesList[i].newPrice
});	
}				
}
}
if(bookingJSON.bookedAdditionalServices != null){
for(var i = 0; i < bookingJSON.bookedAdditionalServices.length; i++){
var flag = checkAvailableInDealerService(dealer, bookingJSON.bookedAdditionalServices[i].additionalServiceID);
if(!flag){
finalAdditionalServices.push({
"additionalServiceID": bookingJSON.bookedAdditionalServices[i].additionalServiceID,
"serviceSelected" : true,
"serviceAvailability": flag,
"message" : "This service is no longer available, please check with dealer.",
"price" : bookingJSON.bookedAdditionalServices[i].newPrice
});	
}
}
}
if(finalAdditionalServices.length > 0) { 
for(var i = 0; i < finalAdditionalServices.length; i++){			
var serviceId = finalAdditionalServices[i].additionalServiceID;
amendAdditional_Services += '<h3 class="osbTabTitle" id="'+ 'osbTabTitleID'+serviceId + '" >';
amendAdditional_Services += '<input type="hidden" name="checkBoxChanged" id="checkBoxChangedID" value="">';
if(finalAdditionalServices[i].serviceSelected == true){
amendAdditional_Services += '<input type="checkbox" checked="'+finalAdditionalServices[i].serviceSelected+'" name="selectedAdditionalServices" value="'+serviceId+'" onClick="updateAdditionalServicePrice('+serviceId+')">';
}else{
amendAdditional_Services += '<input type="checkbox" name="selectedAdditionalServices" value="'+serviceId+'" onClick="updateAdditionalServicePrice('+serviceId+')">';
}
amendAdditional_Services += '&nbsp;'+'<label for="checkId'+i+'">'+getAdditionalServiceName(serviceId,siteTermJSON)+'</label>';
amendAdditional_Services += '</h3>';
amendAdditional_Services += '<div class="osbBordered osbAdditionalServiceInfo" style="position: relative" id="'+ 'osbBorderedID'+serviceId + '">';
amendAdditional_Services += '&nbsp;'+'<label class="osbAdditionalServicePrice" id="'+ 'servicePriceID'+serviceId + '" >' + finalAdditionalServices[i].price + '</label>';
amendAdditional_Services += getAdditionalServiceDescription(serviceId,siteTermJSON);
if(finalAdditionalServices[i].message != ''){
amendAdditional_Services += "<br><b><font color=\"red\">"+finalAdditionalServices[i].message +"</font></b>";
}
amendAdditional_Services +='</div>';
//serviceSelected = "false";
}
}	
}
amendAdditional_Services += '</span>';
var customerAnnotation = "";
customerAnnotation += '<h3 class="osbBorderedTitle">'+siteTermJSON.SiteTerm.AnnotationsTxt+'</h3>';
customerAnnotation += '<p>'+siteTermJSON.SiteTerm.AnnotationsDesc+'</p><br>';	
customerAnnotation += '<textarea name="note" title="textID" rows="9" id="textID" onchange="validateTextAreaSize();" onkeydown="limitText();" onkeyup="limitText();">';
customerAnnotation += checkNull(bookingJSON.customerAnnotation)+'</textarea>';	
document.getElementById('additionalServicesTitle').innerHTML = siteTermJSON.SiteTerm.AddServices;
document.getElementById('amendAdditionalServices').innerHTML = amendAdditional_Services;
document.getElementById('customerAnnotation').innerHTML = customerAnnotation;
}
function displayMainServicePrice(siteTermJSON, bookingJSON){	
var mainServicePriceResult = "";
mainServicePriceResult += "<h3 class='osbTabTitle'>" + siteTermJSON.SiteTerm.RegMainServices + "</h3>"+
"<div class='osbBordered'>"+ 
bookingJSON.customerServiceDescription + "&nbsp;";
if(bookingJSON.mainServicePrice == -1) {
mainServicePriceResult += siteTermJSON.SiteTerm.Price_NotAvailable;
}else{
if(bookingJSON.mainServicePrice != "" && bookingJSON.mainServicePrice != null && bookingJSON.mainServicePrice != undefined){
mainServicePriceResult +=	bookingJSON.newMainServicePrice;
}else{
mainServicePriceResult += " ";
}
}
mainServicePriceResult += "<br>"				
+"</div>";
document.getElementById('mainServicePrice').innerHTML	= mainServicePriceResult;
}
//to update the original dealer price and hide the service which are not in dealer.
function updateAdditionalServicePrice(serviceId){
var priceID = "servicePriceID" + serviceId;
var titleID = "osbTabTitleID" + serviceId;
var boarderID = "osbBorderedID" + serviceId;
var flag = false;
for(var i = 0; i < dealerJSON.dealerAddlServicesList.length; i++){
if(dealerJSON.dealerAddlServicesList[i].additionalService.additionalServiceId == serviceId){
document.getElementById(priceID).innerHTML = dealerJSON.dealerAddlServicesList[i].newPrice;
flag = true;
break;
}
}
if(!flag){
document.getElementById(titleID).style.display = 'none';
document.getElementById(boarderID).style.display = 'none';
}
//checkBoxChanged	
if(document.getElementById("checkBoxChangedID") == null){
var div = document.getElementById("amendAdditionalServices");
var input = document.createElement("input");
input.setAttribute("type", "hidden");
input.setAttribute("name", "checkBoxChanged");
input.setAttribute("value", "");
input.setAttribute("id", "checkBoxChangedID");
div.appendChild(atag);
}
var checkBoxServiceID = document.getElementById("checkBoxChangedID").value;	
var chengedList = 0;
if(checkBoxServiceID == ''){
chengedList = serviceId;
}else{
if(checkBoxServiceID.indexOf(serviceId) == -1){
chengedList = checkBoxServiceID + ',' + serviceId;
}else{
chengedList = checkBoxServiceID;
}			 
}
document.getElementById('checkBoxChangedID').value = chengedList;		
}	
function validateTextAreaSize(){     
var textvalue = document.getElementById('textID').value;
if(textvalue.length > 300){
alert("Text entered is more than 300 characters. Please enter less than 300 ");
document.getElementById('textID').focus(); 
}
}
function limitText() {
var customerComments=document.getElementById('textID').value;
if (customerComments.length > 300) {
document.getElementById('textID').value = customerComments.substring(0, 300);
} 
}
var OM = OM || {};
console = typeof console === 'undefined' ? {} : console;
OM.util = OM.util || {};
OM.util.readEmpty = function(o) {
if (typeof o == "string") {
return o;
} else {
return "";
}
};
OM.util.readNumber = function(o) {
if (typeof o == "number") {
return o;
} else {
return "";
}
};
OM.init = function() {
if (typeof jQuery != 'undefined') {
OM.bp = OM.bp || {};
OM.bp = OM.bp || {};
OM.bp.financeCalc = OM.bp.financeCalc || {}; 
OM.bp.financeCalc = function(step, opts) {
switch (step) {
case "paymentQuote":
var pev2 = parseVars("brand:build:payment quote:estimator:<nameplate>"); // pev2
s.channel = "payment estimator";
s.hier1 = parseVars("shopping tools:payment estimator:<vehicle category>:<nameplate>");
s.prop5 = "estimate payment quote";
omnitureOnClick('o', pev2);
break;
case "details":
//brand:build:payment quote:details:<nameplate>
s.pageName = parseVars("brand:build:payment quote:details:<nameplate>");
s.channel = "payment estimator";
s.hier1 = parseVars("shopping tools:payment estimator:<vehicle category>:<nameplate>");
s.eVar11 = "brand:build:payment quote:details";
s.prop11 = s.eVar11;
s.eVar48 = "event: payment estimator";
s.prop48 = s.eVar48;
s.eVar49 = "finance quote details";
s.prop49 = s.eVar49;
s.events = "event21, event43";
s.linkTrackEvents = s.events;
s.linkTrackVars += ",eVar48,sProp48";
generatePageLoad();
s.linkTrackEvents = "";
s.eVar48 = "";
s.prop48 = "";
s.eVar49 = "";
s.prop49 = "";
s.events = "";
break;
case "apply now":
s.pageName = parseVars("brand:build:payment quote:apply now:<nameplate>");
s.channel = "payment estimator";
s.hier1 = parseVars("shopping tools:payment estimator:<vehicle category>:<nameplate>");
s.eVar11 = "brand:build:payment quote:details";
s.prop11 = s.eVar11;
generatePageLoad();
break;
}
};
OM.bp.userjourney = OM.bp.userjourney || {};
OM.bp.userjourney = function(step, opts) {
// small hack
if (step == 'LHMvehicle,pv') {
step = 'LHMvehicle';
opts = 'pv';
}
isPV = opts == "pv" ? true : false;
if (isPV) {
sford.vc = 'cars';
} else {
sford.vc = 'trucks';
}
// TODO: - check the accuracy here.
s.linkTrackVars = "channel,hier1,eVar4,eVar6,eVar11,eVar14,eVar15,prop4,prop5,prop11,prop14,prop15";
if (arguments.length > 2 && arguments[3] != null) {
// called with additional data - send it.
if (isPV) {
var f = arguments[3];
sford.vc = f.omvc;
s.eVar12 = f.ommy;
s.eVar16 = f.omnp;
sford.my = f.ommy;
sford.np = f.omnp;
} else {
var f = arguments[3];
sford.vc = f.omvc;
s.eVar12 = f.ommy;
s.eVar16 = f.omnp;
sford.my = f.ommy;
sford.np = f.omnp;
}
s.prop12 = s.eVar12;
s.prop16 = s.eVar16;
s.linkTrackVars = s.linkTrackVars
+ ",eVar12,prop12,eVar16,prop16";
}
var isOk = false;
switch (step) {
case "#infoStage":
break;
case "LHMvehicle":
s.pageName = buildPageName()
+ parseVars(":0:vehicle selection:<vehicle category>");
s.hier1 = sford.hier1 + parseVars(":<vehicle category>");
s.eVar11 = sford.eVar11 + ":0:vehicle selection";
s.prop11 = s.eVar11;
isOk = true;
break;
case "Model":
case "#modelsPanel":
// TODO - CV Should send BP start under Bodystyle...!!
if(isPV || EP2._bootstrappedIsConversion){
s.eVar48 = "event: bp start", s.prop48 = s.eVar48;
s.events = "event6,event43";
}
s.linkTrackEvents = s.events;
s.linkTrackVars += ",eVar48,sProp48";
s.pageName = buildPageName()
+ parseVars(":2:series:<nameplate>");
s.hier1 = sford.hier1
+ parseVars(":<vehicle category>:<nameplate>");
s.eVar11 = sford.eVar11 + ":2:series";
s.prop11 = s.eVar11;
if (typeof sford.my == "string")
isOk = true;
break;
case "Bodystyle":
case "#bodystyleLoadspacePayloadPanel":
case "#carouselBodystyle":
if(!isPV){
s.eVar48 = "event: bp start", s.prop48 = s.eVar48;
s.events = "event6,event43";
}
s.pageName = buildPageName()
+ parseVars(":1:bodystyle:<nameplate>");
s.hier1 = sford.hier1
+ parseVars(":<vehicle category>:<nameplate>");
s.eVar11 = sford.eVar11 + ":1:bodystyle";
s.prop11 = s.eVar11;
s.prop48 = s.eVar48 = "event: bp start";
if (typeof sford.my == "string")
isOk = true;
break;
case "EngineTransmission":
case "#engineTransmissionPanel":
//phone home
s.pageName = buildPageName()
+ parseVars(":3:engine:<nameplate>");
s.hier1 = sford.hier1
+ parseVars(":<vehicle category>:<nameplate>");
s.eVar11 = sford.eVar11 + ":3:engine";
s.prop11 = s.eVar11;
if (typeof sford.my == "string")
isOk = true;
break;
case "Color":
case "#colorPanel":
s.pageName = buildPageName()
+ parseVars(":4:colour:<nameplate>");
s.hier1 = sford.hier1
+ parseVars(":<vehicle category>:<nameplate>");
s.eVar11 = sford.eVar11 + ":4:colour";
s.prop11 = s.eVar11;
if (typeof sford.my == "string")
isOk = true;
break;
case "Trim":
s.pageName = buildPageName() + parseVars(":5:trim:<nameplate>");
s.hier1 = sford.hier1
+ parseVars(":<vehicle category>:<nameplate>");
s.eVar11 = sford.eVar11 + ":5:trim";
s.prop11 = s.eVar11;
isOk = true;
break;
case "Extras":
case "#featuresPanel":
s.pageName = buildPageName()
+ parseVars(":6:options:<nameplate>");
s.hier1 = s.hier1
+ parseVars(":<vehicle category>:<nameplate>");
s.eVar11 = sford.eVar11 + ":6:options";
s.prop11 = s.eVar11;
if (typeof sford.my == "string")
isOk = true;
break;
case "Summary":
case "#summaryPanel":
//cv = (opts) ? true : false;
if (!isPV) {
f = arguments[2];
OM.bp.b = f.bodystyle.WERSCode;
OM.bp.pl = f.payload.WERSCode;
OM.bp.n = EP2._bootstrappedCode + " " + EP2._bootstrappedSGname;
OM.bp.c = f.color.WERSCode;
OM.bp.s = f.series.WERSCode;
// TODO: who broke this?
// OM.bp.t = f.trim.code;
OM.bp.e = f.extras.WERSCode;
// TODO: - what about height, driveType, length,
// bodystyleLengthHeightDrivePayload
OM.bp.et = f.engineTransDriveAxle.WERSCode;
// TODO: net or with VAT
OM.bp.p = f.totalPriceNoVat;
} else {
f = bp.context;
OM.bp.b = f.bodystyle.uscCode;
OM.bp.c = f.color.uscCode;
OM.bp.s = f.series.uscCode;
OM.bp.t = f.trim.uscCode;
OM.bp.e = f.extras;
OM.bp.et = f.engineTransmission.uscCode;
OM.bp.p = f.totalPrice;
}
s.eVar48 = "event: bp complete", s.prop48 = s.eVar48;
s.eVar49 = "full build", s.prop49 = s.eVar49;
s.events = "event2,event43";
s.linkTrackEvents = s.events;
s.pageName = buildPageName()
+ parseVars(":7:vehicle summary:<nameplate>");
s.eVar18 = OM.util.readEmpty(OM.bp.n) +":" + OM.util.readEmpty(OM.bp.s); //+ ":" + OM.util.readEmpty(OM.bp.pl);
s.eVar19 = OM.util.readEmpty(OM.bp.c) + ":"	+ OM.util.readEmpty(OM.bp.t);
s.eVar20 = OM.util.readEmpty(OM.bp.b);
s.eVar21 = "";
if (typeof OM.bp.e == "object" && OM.bp.e.length > 0) {
var delim = "";
s.eVar23 = "";
for ( var i = 0; i < OM.bp.e.length; i++) {
s.eVar23 += delim
+ OM.util
.readEmpty((OM.bp.e[i].uscCode) ? OM.bp.e[i].uscCode
: OM.bp.e[i].code);
delim = ":";
}
}
s.hier1 = sford.hier1
+ parseVars(":<vehicle category>:<nameplate>");
s.eVar11 = sford.eVar11 + ":7:vehicle summary";
s.prop11 = sford.eVar11;
s.eVar24 = OM.util.readEmpty(OM.bp.et);
s.eVar25 = OM.util.readNumber(OM.bp.p);
if (!isPV) {
s.eVar40 = OM.util.readEmpty(OM.bp.pl);
}
s.linkTrackVars = "channel,hier1,eVar4,eVar6,eVar11,eVar14,eVar15,eVar18,eVar19,eVar23,eVar48,eVar49,prop4,prop5,prop11,prop14,prop15,prop48,prop49,eVar24,eVar25,eVar40,eVar20";
if (typeof sford.my == "string")
isOk = true;
break;
}
if (isOk) {
generatePageLoad();
}
s.linkTrackEvents = "";
s.eVar48 = "";
s.prop48 = "";
s.eVar49 = "";
s.prop49 = "";
s.events = "";
};
OM.defaultlinkTrackVars = "channel,hier1,eVar4,eVar11,eVar12,eVar14,eVar15,eVar16,prop4,prop5,prop11,prop12,prop14,prop15,prop16";
OM.cookie = OM.cookie || {};
OM.cookie.create = function(name, value, days) {
var expires;
if (days) {
var date = new Date();
date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
expires = "" + date.toGMTString();
} else
expires = "";
document.cookie = name + "=" + value + expires + "; path=/";
};
OM.cookie.read = function(name) {
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
OM.cookie.erase = function(name) {
OM.cookie.create(name, "", -1);
};
OM.debug = OM.debug || false;
OM.debug = OM.cookie.read('omnidebug');
if (OM.debug) {
//var myOmnidiv = $('<div id="omnidiv" style="background-color:#EEEEEE;z-index:99999;position:fixed;top: 0px; left: 0px;">+</div').prependTo(document.body);
$('[class*="om_"]').bind( {
mouseenter : function() {
var classTokens = this.className.split(/\s+/);
for ( var c = 0; c < classTokens.length; c++) {
if (classTokens[c].indexOf("om_") == 0) {
var s = classTokens[c];
var el = jQuery._data(this, "events");
for (e in el) {
if (el[e][0].data != null) {
s += "<br>" + e + "|" + el[e][0].data.cls;
} else {
s += "<br>" + e;
}
}
$('#omnidiv').html(s);
}
}
},
mouseleave : function() {
$('#omnidiv').html("");
}
});
}
$('[class*="om_"]')
.each( function() {
var classTokens = this.className.split(/\s+/);
for ( var c = 0; c < classTokens.length; c++) {
if (classTokens[c].indexOf("om_") == 0) {
// 	get the class and install the onlink handler
if (OM.debug)
console.log("BIND:" + this.href + "|"
+ classTokens[c]);
$(this)
.bind(
'click',
{
cls : classTokens[c]
},
function(event) {
if (OM.debug)
console.debug("FIRE:"
+ event.data.cls);
if (OM[event.data.cls] !== undefined) {
var _pushV;
_pushV = s.linkTrackVars;
s.linkTrackVars = "channel,hier1,eVar4,eVar11,eVar12,eVar14,eVar15,eVar16,prop4,prop5,prop11,prop12,prop14,prop15,prop16";
s.prop5 = OM[event.data.cls].tag;
omnitureOnClick(
OM[event.data.cls].clickType,
getOmniturePageContext()
+ ":"
+ OM[event.data.cls].tag);
s.linkTrackVars = _pushV;
} else if (OM.debug)
console
.debug("No onclick defined for "
+ event.data.cls);
});
}
}
}	);
$('[class*="omv_"]').each( function() {
var classTokens = this.className.split(/\s+/);
for ( var c = 0; c < classTokens.length; c++) {
if (classTokens[c].indexOf("omv_") == 0) {
// 	get the class and install the onlink handler
if (OM.debug)
console.log("BIND:" + this.href + "|" + classTokens[c]);
$(this).bind('click',
{
cls : classTokens[c]
},
function(event) {
if (OM.debug)
console.debug("FIRE:" + event.data.cls);
// TODO: implement collection of selection data
if (OM[event.data.cls] !== undefined) {
omnitureOnClick(eval(event.data.cls).clickType,
eval(event.data.cls).tag);
} else if (OM.debug)
console.debug("No onclick defined for "
+ event.data.cls);
});
}
}
}	);
$('[class*="om_mt_ti"]').each( function() { //FBolaji : added nameplate detail page primary tabs
var classTokens = this.className.split(/\s+/);
for ( var c = 0; c < classTokens.length; c++) {
if (classTokens[c].indexOf("om_mt_") == 0) {
// 	get the class and install the onlink handler
if (OM.debug)
console.log("BIND:" + this.href + "|" + classTokens[c]);
$(this).bind('click', {
cls : classTokens[c]
}, function(event) {
if (OM.debug)
console.debug("FIRE:" + event.data.cls);
// TODO: implement collection of selection data
// if (OM[event.data.cls] !== undefined) {
//console.log("primary :",this.innerHTML);
//setOmnitureTabName(this.innerHTML);
// } else if (OM.debug) console.debug("No onclick
// defined for " + event.data.cls);
});
}
}
});		
$("div.secondary-tabs nav.sub-nav").delegate($('[class*="omt_"]'), "click", function (event) { 
if (event.srcElement.className === "omt_") {
// workaround for delegate bug in our version
if (OM.debug) console.debug("FIRE:" + event.srcElement);
TK.broadcast(document.body, "pageload", {"tabName" : event.srcElement.innerHTML});
}
});
/*
$('[class*="omt_"]').each( function() {  //FBolaji : added nameplate detail page secondary[sub tabmenu] tabs
var classTokens = this.className.split(/\s+/);
for ( var c = 0; c < classTokens.length; c++) {
if (classTokens[c].indexOf("omt_") == 0) {
// 	get the class and install the onlink handler
if (OM.debug)
console.log("BIND:" + this.href + "|" + classTokens[c]);
$(this).bind('click', {
cls : classTokens[c]
}, function(event) {
if (OM.debug) console.debug("FIRE:" + event.data.cls);
TK.broadcast(document.body, "pageload", {"tabName" : this.innerHTML});					
// TODO: implement collection of selection data
// if (OM[event.data.cls] !== undefined) {
//console.log(this.innerHTML);
//setOmnitureTabName(this.innerHTML); 
// } else if (OM.debug) console.debug("No onclick
// defined for " + event.data.cls);
});
}
}
}	);
*/
$('[id*="LHM"]').each( function() {
$(this).bind('click', function(event) {
OM.bp.userjourney(this.id);
});
});
if (OM.onPageLoad) {
if (OM.debug)
console.log(OM.onPageLoad);
var _ref = OM.onPageLoad.split(/[|_]/);
if (_ref.length > 0) {
var f = _ref[0];
var p = "";
for ( var i = 1; i < _ref.length; i++) {
if (i > 1)
p += ',';
p += _ref[i];
}
// TODO - switch to generic namespace call
var fn = eval("OM." + f);
if (typeof fn == "function") {
fn(p);
}
}
}
} else {
//console.debug("jQuery was not available."); 
}
};
OM.OSBOV = OM.OSBOV || {};
OM.OSBOV.sn = function(nameplate) {
sford.setNp = nameplate;
};
OM.OSBOV.price = function(price) {
sford.setPrice = price;
};
var OSBOVDealerCode = '';
OM.OSBOV.osbovdc = function(dealerCode) {
OSBOVDealerCode = dealerCode;
};
var OSBOVTotalServcesPrice = '';
OM.OSBOV.osbovtsp = function(totalPrice) {
OSBOVTotalServcesPrice = totalPrice;
};
var OSBOVBookingID = '';
OM.OSBOV.osbovbid = function(bookingID) {
OSBOVBookingID = "osbov " + bookingID;
};
OM.OSBOV.pl = function(step, opts) {
np = function() {
if ($("#OSBOVNP").length > 0)
return "ford " + $("#OSBOVNP").val();
return "";
}
price = function() {
if ($("#OSBOVPR").length > 0)
return $("#OSBOVPR").val();
return "";
}
s.hier = sford.hier1;
s.linkTrackVars = "channel,hier1,eVar4,eVar11,eVar12,eVar14,eVar15,eVar16,prop4,prop5,prop11,prop12,prop14,prop15,prop16,eVar48,prop48,eVar49,prop49";
switch (step) {
case "sve":
s.pageName = buildPageName() + ":" + parseVars("select vehicle");
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
s.eVar48 = "event:schedule service start", s.prop48 = s.eVar48;
s.eVar49 = 'osbov';
s.prop49 = s.eVar49;
s.events = "event43,event63";
s.linkTrackEvents = s.events;
break;
case "smy":
break;
case "cs":
s.pageName = buildPageName() + ":" + parseVars("choose service");
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
s.eVar16 = np();
s.prop16 = s.eVar16;
break;
case "fde":
s.pageName = buildPageName() + ":" + parseVars("find dealer");
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
s.eVar16 = np();
s.prop16 = s.eVar16;
break;
case "der":
s.pageName = buildPageName() + ":" + parseVars("dealer results");
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
s.eVar16 = np();
s.prop16 = s.eVar16;
s.eVar48 = "event:find dealer", s.prop48 = s.eVar48;
s.eVar49 = 'osbov';
s.prop49 = s.eVar49;
s.events = "event1, event43";
s.linkTrackEvents = s.events;
break;
case "dt":
s.pageName = buildPageName() + ":" + parseVars("choose date time");
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
s.eVar16 = np();
s.prop16 = s.eVar16;
s.eVar1 = OSBOVDealerCode;
break;
case "cd":
s.pageName = buildPageName() + ":" + parseVars("contact details");
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
s.eVar16 = np();
s.prop16 = s.eVar16;
s.eVar1 = OSBOVDealerCode;
break;
case "bs":
s.pageName = buildPageName() + ":" + parseVars("booking summary");
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
s.eVar16 = np();
s.prop16 = s.eVar16;
s.eVar1 = OSBOVDealerCode;
s.eVar25 = OSBOVTotalServcesPrice;
s.linkTrackVars += ",eVar25";
break;
case "bc":
s.pageName = buildPageName() + ":" + parseVars("booking confirmation");
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
s.eVar16 = np();
s.prop16 = s.eVar16;
s.eVar48 = "event:find dealer", s.prop48 = s.eVar48;
s.eVar49 = 'osbov';
s.prop49 = s.eVar49;
s.eVar25 = price();
s.eVar28 = "service appointment scheduled";
s.prop18 = s.eVar28;
s.eVar48 = "event:schedule service complete";
s.prop48 = s.eVar48;
s.linkTrackVars += ",eVar25,eVar28,sProp18";
s.events = "event10,event43,event64";
s.linkTrackEvents = s.events;
s.eVar1 = OSBOVDealerCode;
s.eVar17 = OSBOVBookingID;
break;
case "bsl":
// overwrite hier1
s.hier = "owners:ford owner:osb:view existing booking summary";
s.hier1 = "owners:ford owner:osb:view existing booking";
sford.pageName = "owner:osbov:view service";
s.pageName = buildPageName() + ":" + parseVars("booking summary");
s.eVar11 = "owner:osb:schedule service:existing booking summary";
s.prop11 = s.eVar11;
s.eVar16 = np();
s.prop16 = s.eVar16;
s.eVar48 = "event:view existing service booking", s.prop48 = s.eVar48;
s.eVar49 = 'osbov';
s.prop49 = s.eVar49;
s.eVar1 = OSBOVDealerCode;
s.eVar17 = OSBOVBookingID;
s.eVar25 = OSBOVTotalServcesPrice;
s.linkTrackVars += ",eVar25,eVar17,eVar1,eVar16";
break;
case "ccl":
s.hier = "owners:ford owner:osb:cancel booking";
s.hier1 = "owners:ford owner:osb:cancel booking";
s.pageName = "owner:osbov:view service:cancel confirmation";
s.eVar11 = "owner:osb:schedule service:cancel confirmation";
s.prop11 = s.eVar11;
s.eVar16 = np();
s.prop16 = s.eVar16;
s.eVar48 = "event:cancel service booking", s.prop48 = s.eVar48;
s.eVar49 = 'osbov';
s.prop49 = s.eVar49;
s.events = "event65,event43";
s.linkTrackEvents = s.events;
s.eVar1 = OSBOVDealerCode;
s.eVar17 = OSBOVBookingID;
s.eVar25 = OSBOVTotalServcesPrice;
s.linkTrackVars += ",eVar25,eVar17,eVar1,eVar16";
break;
default:
}
generatePageLoad();
s.linkTrackEvents = "";
s.eVar48 = "";
s.prop48 = "";
s.eVar49 = "";
s.prop49 = "";
s.events = "";
};
OM.OSBOV.oc = function(step) {
var ln = "";
switch (step) {
case "smy":
break;
case "ccl":
ln = "owner:osbov:cancel booking";
s.eVar25 = price();
s.linkTrackVars += ",eVar25";
s.eVar17 = OSBOVBookingID;
s.eVar1 = OSBOVDealerCode;
s.linkTrackVars += ",eVar1";
s.prop5 = "cancel booking";
s.hier1 = "owners:ford owner:osb:cancel booking";
s.eVar25 = OSBOVTotalServcesPrice;
s.eVar16 = np();
s.prop16 = s.eVar16;
s.linkTrackVars += ",eVar25,eVar17,eVar16";
break;
case "cs":
// TODO Events
ln = "owner:osb:choose service";
s.prop5 = "choose service";
s.eVar48 = "event:choose service", s.prop48 = s.eVar48;
s.eVar49 = 'osbov';
s.prop49 = s.eVar49;
s.events = "event43";
s.linkTrackEvents = s.events;
break;
case "des":
ln = "owner:osbov:dealer search";
s.prop5 = "find dealer";
// dealer search
break;
case "ded":
ln = "owner:osbov:view dealer details";
s.eVar48 = "event:view dealer details", s.prop48 = s.eVar48;
s.eVar49 = 'osbov';
s.prop49 = s.eVar49;
s.prop5 = "view dealer details";
s.events = "event43";
s.linkTrackEvents = s.events;
s.eVar1 = OSBOVDealerCode;
s.linkTrackVars += ",eVar1";
break;
case "ade":
ln = "owner:osbov:amend dealer";
s.channel = "osb";
s.hier1 = "owners:ford owner:osb:new service";
s.prop5 = "amend booking details";
s.eVar1 = OSBOVDealerCode;
s.linkTrackVars += ",eVar1";
s.eVar16 = np();
s.prop16 = s.eVar16;
s.eVar25 = OSBOVTotalServcesPrice;
s.linkTrackVars += ",eVar25,eVar1,eVar16";
break;
case "acd":
ln = "owner:osbov:amend contact details";
s.prop5 = "amend booking details";
s.eVar1 = OSBOVDealerCode;
s.linkTrackVars += ",eVar1";
break;
case "adt":
ln = "owner:osbov:amend date";
s.prop5 = "amend booking details";
s.eVar1 = OSBOVDealerCode;
s.linkTrackVars += ",eVar1";
break;
case "ave":
ln = "owner:osbov:amend vehicle info";
s.prop5 = "amend booking details";
s.eVar1 = OSBOVDealerCode;
s.linkTrackVars += ",eVar1";
break;
case "as":
ln = "owner:osbov:amend service";
s.prop5 = "amend booking details";
s.eVar1 = OSBOVDealerCode;
s.linkTrackVars += ",eVar1";
break;
case "bn":
ln = "owner:osbov:schedule service:book now";
s.prop5 = "confirm service booking";
s.eVar1 = OSBOVDealerCode;
s.linkTrackVars += ",eVar1";
break;
case "ps":
ln = "owner:osbov:print summary";
s.prop5 = "print booking summary";
s.eVar1 = OSBOVDealerCode;
s.linkTrackVars += ",eVar1";
s.eVar28 = "";
break;
}
if (ln != "")
omnitureOnClick('o', ln);
s.linkTrackEvents = "";
s.eVar48 = "";
s.prop48 = "";
s.eVar49 = "";
s.prop49 = "";
s.events = "";
};
function omnitureOwnerManualsResults() {
if (typeof sford == "object") {
s.linkTrackVars = "channel,hier1,eVar4,eVar11,eVar14,eVar15,prop4,prop11,prop15";
s.pageName = buildPageName() + ":results";
s.linkTrackEvents = "";
s.eVar11 = s.pageName;
s.prop11 = s.pageName;
}
}
function omnitureOwnerManualsNoResults() {
if (typeof sford == "object") {
s.linkTrackVars = "channel,hier1,eVar4,eVar11,eVar14,eVar15,prop4,prop11,prop15";
s.pageName = buildPageName() + ":no results";
s.linkTrackEvents = "";
s.eVar11 = s.pageName;
s.prop11 = s.pageName;
}
}
function getOmniturePageContext() {
return (sford.pageName.replace("<nameplate>", ""));
}
function parseVars(str) {
if (typeof sford == "object") {
if (typeof sford.np != "string") {
sford.np = "";
}
if (typeof sford.my != "string") {
sford.my = "";
}
if (typeof sford.vc != "string") {
sford.vc = "";
}
if (typeof sford.tabName != "string") {
sford.tabName = "";
}
if (typeof sford.pageNumber != "number") {
sford.pageNumber = "";
}
}
str = str.replace("<nameplate>", sford.np);
str = str.replace("<model year>", sford.my);
str = str.replace("<vehicle category>", sford.vc);
str = str.replace("<page number>", sford.pageNumber);
if (typeof sford.tabName == "string" && sford.tabName.length > 1) {
str = str.replace("<tab name>", sford.tabName);
} else {
str = str.replace(":<tab name>", "");
}
if (typeof sford.action != "string" || sford.action.length == 0) {
str = str.replace(":<action>", "");
} else {
str = str.replace("<action>", sford.action.toLowerCase());
}
if (typeof sford.value != "string" || sford.value.length == 0) {
str = str.replace(":<value>", "");
} else {
str = str.replace("<value>", sford.value.toLowerCase());
}
if (typeof sford.bodystyle != "string" || sford.bodystyle.length == 0) {
str = str.replace(":<bodystyle>", "");
} else {
str = str.replace("<bodystyle>", sford.bodystyle.toLowerCase());
}
if (typeof sford.assetId != "string" || sford.assetId.length == 0) {
str = str.replace(":<asset id>", "");
} else {
str = str.replace("<asset id>", sford.assetId);
}
if (typeof sford.itemNumber != "number") {
str = str.replace(":<item number>", "");
} else {
str = str.replace("<item number>", sford.itemNumber);
}
str = str.replace("<blank>", "");
return str;
}
function parseNpVars(str, np, my, vc, pn, tn) {
str = str.replace("<nameplate>", np);
str = str.replace("<model year>", my);
str = str.replace("<vehicle category>", vc);
str = str.replace("<page number>", pn);
if (tn.length > 1) {
str = str.replace("<tab name>", tn);
} else {
str = str.replace(":<tab name>", "");
}
str.replace("<blank>", "");
return str;
}
function checkVars(str) {
return true;
}
function buildPageName() {
var pageName = parseVars(sford.pageName);
pageName = pageName.replace(/&(lt|gt);/g, function(s, p) {
return (p == "lt") ? "<" : ">";
});
pageName = pageName.replace(/<\/?[^>]+(>|$)/g, "");
return pageName;
}
function setOmnitureTabName(tabName) {
sford.tabName = tabName;
s.linkTrackVars = "channel,hier1,eVar4,eVar11,eVar12,eVar14,eVar15,eVar16,prop4,prop11,prop12,prop14,prop15,prop16";
s.pageName = buildPageName();
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
generatePageLoad();
}
function setOmnitureSearchResults(pageNumber, nor, searchTerm, norpp) {
sford.totalSearchResults = nor;
sford.pageNumber = pageNumber;
s.eVar22 = searchTerm;
s.prop22 = searchTerm;
s.eVar35 = "0:" + nor;
s.prop21 = "0:" + nor;
s.linkTrackVars = "channel,hier1,eVar4,eVar11,eVar14,eVar15,prop4,prop5,prop11,prop14,prop15,eVar22,eVar35,prop4,prop21,prop22,prop34";
s.pageName = buildPageName();
s.prop11 = s.pageName;
s.eVar11 = s.pageName;
s.prop34 = pageNumber;
onPageLoad();
}
function setOmnitureSearchResult(resultNumber) {
var num1 = parseInt(resultNumber) + 1;
var num2 = sford.pageNumber * 1;
var resultClicked = (num1 + ((num2 - 1) * 10));
s.linkTrackVars = "channel,hier1,eVar4,eVar11,eVar14,evar15,eVar35,prop4,prop5,prop11,prop14,prop15,prop21,prop34";
s.eVar35 = resultClicked + ":" + sford.totalSearchResults;
s.prop21 = resultClicked + ":" + sford.totalSearchResults;
s.prop34 = sford.pageNumber;
s.prop11 = s.pageName;
s.eVar11 = s.pageName;
s.prop5 = 'site search result:natural';
omnitureOnClick('o', "brand:site search:search index");
}
function omniturePromoExit(href) {
s.linkTrackVars = "channel,hier1,eVar4,eVar11,eVar14,evar15,prop4,prop5,prop11,prop14,prop15";
s.prop5 = "promo box exit:" + s.channel + "-" + href;
// changed to avoid nameplate in evar11 and prop11(TD 8175)
// s.eVar11 = sford.eVar11.replace("<tab name>",sford.tabName);
// s.prop11=s.eVar11;
omnitureOnClick('e', "promo box:site exit");
}
function omnitureViewPhoto(assetid) {
if (typeof sford == "object") {
if (typeof sford.tagViewPhoto == "string") {
s.linkTrackVars = "channel,hier1,eVar4,eVar11,eVar12,eVar14,evar15,evar16,prop4,prop5,prop11,prop12,prop14,prop15,prop16";
s.prop5 = 'media viewer photo view';
s.eVar11 = buildPageName();
s.prop11 = s.eVar11;
omnitureOnClick('o', parseVars(sford.tagViewPhoto));
}
}
}
function omnitureLinkEmailClick(tag, linkType) {
s.linkTrackVars = "channel,hier1,eVar4,eVar11,eVar14,prop5,prop11,prop14,prop15";
s.prop5 = 'email start';
s.eVar11 = buildPageName();
s.prop11 = buildPageName();
omnitureOnClick(linkType, tag);
}
function omnitureLinkDownloadClick(tag, events, eVar28, eVar48, eVar49, prop5,
prop18, isGlobal, np, my, vc) {
//var trackNameplate = typeof (s.eVar16) == "String" && tag.indexOf("<nameplate>") > 1 ? "eVar16," : ""; 
var linkName = "";
s.linkTrackVars = "channel,hier1,eVar4,eVar11,eVar14,eVar15,eVar28,eVar48,eVar49,prop4,prop5,prop11,prop14,prop15,prop18,prop48,prop49,events";
s.linkTrackEvents = events;
s.eVar11 = s.pageName;
s.prop11 = s.pageName;
s.eVar28 = eVar28;
s.eVar48 = eVar48;
s.prop48 = s.eVar48;
s.eVar49 = eVar49;
s.prop49 = s.eVar49;
s.prop18 = prop18;
s.prop5 = prop5;
s.events = events;
if (s.channel == "brochure") {
if (typeof np == "string") {
tag = parseNpVars(tag, np, my, vc, "", "");
s.eVar12 = my;
s.prop12 = my;
s.eVar16 = np;
s.prop16 = np;
s.hier1 = parseNpVars(sford.hier1, np, my, vc, "", "");
s.linkTrackVars = s.linkTrackVars + ",eVar12,eVar16,prop12,prop16";
} else {
// use tagname from page, np goes in eVar16/prop16
if (typeof np == "string") {
s.eVar16 = np;
s.prop16 = np;
s.eVar12 = my;
s.prop12 = my;
s.linkTrackVars = s.linkTrackVars
+ ",eVar12,eVar16,prop12,prop16";
}
}
} else {
if (!isGlobal && (typeof sford.tagDownload == "string")
&& (sford.tagDownload != "")) {
linkName = sford.tagDownload.replace("<download>", tag);
} else {
linkName = tag;
}
if (typeof np == "string") {
linkName = parseNpVars(linkName, np, my, vc, "", "");
if (typeof np == "string") {
s.eVar16 = np;
s.prop16 = np;
s.eVar12 = my;
s.prop12 = my;
s.linkTrackVars = s.linkTrackVars
+ ",eVar12,eVar16,prop12,prop16";
}
}
}
omnitureOnClick('d', linkName);
}
function setOmnitureFindDealer() {
sford.pageNumber = 1;
s.linkTrackVars = "channel,hier1,eVar4,eVar11,eVar14,eVar15,eVar48,eVar49,prop4,prop11,prop14,prop15,prop48,prop49";
s.linkTrackEvents = "";
s.pageName = buildPageName();
s.eVar11 = s.pageName;
s.prop11 = s.pageName;
generatePageLoad();
}
function setOmnitureDealerPageNumber(pageNumber) {
s.linkTrackVars = "channel,hier1,eVar4,eVar11,eVar14,eVar15,eVar48,eVar49,prop4,prop11,prop14,prop15,prop48,prop49";
s.linkTrackEvents = "";
s.events = "";
sford.pageNumber = pageNumber;
s.pageName = buildPageName();
s.eVar11 = s.pageName;
s.prop11 = s.pageName;
s.eVar48 = "";
s.prop48 = "";
console.log("inside dealer results page");
if ((typeof sford.dlwasSent == "boolean") && (!sford.dlwasSent)) {
// process events
console.log("inside dealer events");
s.linkTrackVars = s.linkTrackVars + ",events";
s.events = "event1,event43";
s.linkTrackEvents = s.events;
s.eVar48 = "event:find dealer";
s.prop48 = "event:find dealer";
sford.dlwasSent = true;
}
console.log("before page load");
generatePageLoad();
console.log("after page load");
// reset vars
s.events = "";
s.eVar48 = "";
s.prop48 = "";
}
function omnitureDealerExit() {
s.linkTrackVars = "channel,hier1,eVar4,eVar6,eVar11,eVar14,eVar15,prop4,prop5,prop11,prop14,prop15";
s.eVar6 = "referral:ford dealer website";
s.prop5 = s.eVar6;
s.eVar11 = s.pageName;
s.prop11 = s.pageName;
omnitureOnClick('e', 'referral:dealer exit');
}
function omnitureFSCClick() {
s.linkTrackVars = "channel,hier1,eVar4,eVar11,eVar12,eVar14,eVar15,eVar16,prop4,prop11,prop12,prop13,prop14,prop15,prop16";
s.eVar11 = s.pageName;
s.prop11 = s.pageName;
omnitureOnClick('o', "brand:vehicle:specs:carousel click:<nameplate>");
}
function setOmnitureTHL() {
if (typeof sford == "object") {
if (typeof sford.tagHighlights == "string") {
s.linkTrackVars = "channel,hier1,eVar4,eVar11,eVar12,eVar14,eVar15,eVar16,prop4,prop11,prop12,prop14,prop15,prop16";
s.eVar11 = s.pageName;
s.prop11 = s.pageName;
omnitureOnClick('o', sford.tagHighlights);
}
}
}
function onPageLoad() {
if (!OM.onPageLoad) {
var s_code = s.t();
if (s_code) {
document.write(s_code);
}
}
OM.init();
}
function attachLoadEvent(myFunc) {
var fp = window.onload;
if (typeof window.onload != 'function') {
window.onload = myFunc;
} else {
if (typeof jQuery != 'undefined') {
$(document).ready(function() {
myFunc();
});
} else {
window.addEvent('domready', function() {
myFunc();
});
}
}
}
function omnitureSetVars(v, val) {
var va = v.split(',');
for (i = 0, len = va.length; attribute = va[i], i < len; i++) {
try {
eval("s." + attribute + "='" + parseVars(val) + "'");
} catch (e) {
}
}
}
function generatePageLoad() {
if (typeof jQuery != 'undefined') {
OM.webdriver = OM.webdriver || {};
OM.webdriver.s = jQuery.extend({}, s);
}	
if (typeof __dOC == "boolean" && __dOC)
return;
if (typeof s == "object")
s.t();
s.events = "";
s.linkTrackEvents = "";
}
function omnitureOnClick(clickType, linkName) {
s.pageName = buildPageName();
linkName = parseVars(linkName);
if (typeof __dOC == "boolean" && __dOC)
return;
if ((typeof linkName == "string") && (linkName != "")) {
s.tl(this.window, clickType, linkName);
} else {
s.tl(this.window, clickType);
}
if (typeof jQuery != 'undefined') {
OM.webdriver = OM.webdriver || {};
OM.webdriver.s = jQuery.extend({}, s);
}	
s.events = "";
s.linkTrackEvents = "";
}
function fasOmniturePromoExit(href) {
s.linkTrackVars = "channel,hier1,eVar4,eVar11,eVar14,evar15,prop4,prop5,prop11,prop14,prop15";
s.prop5 = "promo box exit:" + s.channel + "-" + href;
s.eVar11 = s.pageName;
s.prop11 = s.pageName;
omnitureOnClick('e', "promo box:site exit");
}
function fasOmnitureOnClick(appcode, clickType, linkName) {
omnitureOnClick(clickType, linkName);
}
function fasOmniturePageLoad(appcode) {
generatePageLoad();
}
function fasOmnitureSetVars(appcode, v, val) {
omnitureSetVars(v, val);
}
function fasOmnitureImageZoom() {
var _pushV;
_pushV = s.linkTrackVars;
s.linkTrackVars = "channel,hier1,eVar4,eVar11,eVar12,eVar14,eVar15,eVar16,prop4,prop5,prop11,prop12,prop14,prop15,prop16";
s.prop5 = "photo view:zoom";
omnitureOnClick('o', getOmniturePageContext() + ":image:zoom:<nameplate>");
s.linkTrackVars = _pushV;
}
function fasOmnitureHPPromo(position) {
//var _pushV;
// _pushV = s.linkTrackVars;
s.linkTrackVars = "channel,hier1,eVar4,eVar11,eVar12,eVar14,eVar15,eVar16,prop4,prop11,prop12,prop14,prop15,prop16";
var opt = "";
switch (position.toLowerCase()) {
case "left":
opt = ":left promo";
break;
case "center":
opt = ":center promo";
break;
case "right":
opt = ":right promo";
break;
}
s.pageName = buildPageName() + ":hp promo" + opt;
s.hier1 = "home" + opt;
s.eVar11 = s.pageName;
s.prop11 = s.pageName;
generatePageLoad();
s.pageName = sford.pageName;
s.eVar11 = s.pageName;
s.prop11 = s.pageName;
// s.linkTrackVars = _pushV;
}
function fasOmnitureHPTab(itemNumber) {
var _pushV;
_pushV = s.linkTrackVars;
s.linkTrackVars = "channel,hier1,eVar4,eVar11,eVar12,eVar14,eVar15,eVar16,prop4,prop5,prop11,prop12,prop14,prop15,prop16";
sford.itemNumber = itemNumber;
s.prop5 = "home:thumbnail click";
omnitureOnClick('o', getOmniturePageContext() + ":thumbnail:<item number>");
s.prop5 = "";
s.linkTrackVars = _pushV;
}
function fasOmnitureHPCTA() {
var _pushV;
_pushV = s.linkTrackVars;
s.linkTrackVars = "channel,hier1,eVar4,eVar11,eVar12,eVar14,eVar15,eVar16,prop4,prop5,prop11,prop12,prop14,prop15,prop16";
s.prop5 = "home:cta click";
omnitureOnClick('o', getOmniturePageContext() + ":cta");
s.prop5 = "";
s.linkTrackVars = _pushV;
}
function fasOmnitureHPCarousel() {
var _pushV;
_pushV = s.linkTrackVars;
s.linkTrackVars = "channel,hier1,eVar4,eVar11,eVar12,eVar14,eVar15,eVar16,prop4,prop5,prop11,prop12,prop14,prop15,prop16";
s.prop5 = "home:carousel click";
omnitureOnClick('o', getOmniturePageContext() + ":thumbnail:carousel");
s.prop5 = "";
s.linkTrackVars = _pushV;
}
function fasOmnitureVidMilestone(mediaName, message, t) {
var _pushV;
_pushV = s.linkTrackVars;
if (typeof t == "undefined")
t = 0;
// TODO: clarify t w/
// TODO: clarify Media.trackEvents, Media.trackVars w/ Andrew
// TODO: Doc states on p.53 - Only need to call the media tracking methods
// if player cannot be tracked using s.Media.autoTrack = true
// TODO: is this page load or onclick ?
switch (message) {
case "vidStart":
s.events = "event56";
s.eVar55 = "1:M:0-25";
s.eVar56 = mediaName;
s.eVar57 = mediaName + ":0%";
s.prop55 = "" + ":" + mediaName;
s.prop56 = mediaName;
s.prop57 = s.eVar57;
break;
case "vid25":
s.events = "event58,event61=" + t + ",event62";
s.eVar55 = "1:M:0-25";
s.eVar56 = mediaName;
s.eVar57 = mediaName + ":25%";
s.prop55 = "" + ":" + mediaName;
s.prop56 = mediaName;
s.prop57 = s.eVar57;
break;
case "vid50":
s.events = "event59,event61=" + t + ",event62";
s.eVar55 = "2:M:25-50";
s.eVar56 = mediaName;
s.eVar57 = mediaName + ":50%";
s.prop55 = "" + ":" + mediaName;
s.prop56 = mediaName;
s.prop57 = s.eVar57;
break;
case "vid75":
s.events = "event57,event61=" + t + ",event62";
s.eVar55 = "3:M:50-75";
s.eVar56 = mediaName;
s.eVar57 = mediaName + ":75%";
s.prop55 = "" + ":" + mediaName;
s.prop56 = mediaName;
s.prop57 = s.eVar57;
break;
case "vidEnd":
s.events = "event60,event61=" + t + ",event62";
s.eVar55 = "4:M:75-100";
s.eVar56 = mediaName;
s.eVar57 = mediaName + ":100%";
s.prop55 = "" + ":" + mediaName;
s.prop56 = mediaName;
s.prop57 = s.eVar57;
break;
}
s.linkTrackVars = "channel,hier1,eVar4,eVar11,eVar12,eVar14,eVar15,eVar16,prop4,prop11,prop12,prop14,prop15,prop16";
s.linkTrackVars = s.linkTrackVars
+ ",eVar55,eVar56,eVar57,prop55,prop56,prop57,events";
s.linkTrackEvents = s.events;
omnitureOnClick('o', "video");
s.linkTrackVars = _pushV;
s.linkTrackEvents = "";
}
function omnitureMDPFullScreen(assetId) {
//<pagecontext>:image:<asset id>:fullscreen:<nameplate>
var _pushV;
_pushV = s.linkTrackVars;
s.linkTrackVars = "channel,hier1,eVar4,eVar11,eVar12,eVar14,eVar15,eVar16,prop4,prop5,prop11,prop12,prop14,prop15,prop16";
sford.assetId = assetId;
s.prop5 = 'photo view:fullscreen';
omnitureOnClick('o', getOmniturePageContext()
+ ":image:<asset id>:fullscreen:<nameplate>");
sford.assetId = "";
s.prop5 = "";
s.linkTrackVars = _pushV;
}
function omnitureMDPDownload(assetId) {
//	<prefix>:<Site section name>:image:<asset id>:download:<nameplate>
var _pushV;
_pushV = s.linkTrackVars;
s.linkTrackVars = "channel,hier1,eVar4,eVar11,eVar12,eVar14,eVar15,eVar16,prop4,prop5,prop11,prop12,prop14,prop15,prop16";
sford.assetId = assetId;
s.prop5 = 'photo view:download';
omnitureOnClick('o', getOmniturePageContext()
+ ":image:<asset id>:download:<nameplate>");
sford.assetId = "";
s.prop5 = "";
s.linkTrackVars = _pushV;
}
function fasOmnitureWalkaround360(bodystyle, action, value) {
//brand:vehicle:360:exterior:colorizer:ford focus
var _pushV;
_pushV = s.linkTrackVars;
s.linkTrackVars = "channel,hier1,eVar4,eVar11,eVar12,eVar14,eVar15,eVar16,eVar18,prop4,prop5,prop11,prop12,prop14,prop15,prop16";
sford.action = action;
sford.bodystyle = bodystyle;
sford.value = value;
s.hier1 = parseVars("vehicle:360:<vehicle category>:<nameplate>");
s.eVar11 = parseVars("brand:360view:<bodystyle>");
s.eVar18 = sford.bodystyle;
s.prop5 = parseVars("360:<bodystyle>:<action>:<value>");
s.prop11 = s.eVar11;
omnitureOnClick('o', "brand:vehicle:360:<bodystyle>:<action>:<nameplate>");
s.linkTrackVars = _pushV;
}
function fasOmniture360Rotate() {
var _pushV;
_pushV = s.linkTrackVars;
s.linkTrackVars = "channel,hier1,eVar4,eVar11,eVar12,eVar14,eVar15,eVar16,prop4,prop5,prop11,prop12,prop14,prop15,prop16";
// sford.assetId = assetId;
s.hier1 = parseVars("vehicle:360:<vehicle category>:<nameplate>");
s.prop5 = parseVars("360:vehicle rotate");
s.prop11 = s.eVar11;
omnitureOnClick('o', getOmniturePageContext() + "360:rotate:<nameplate>");
s.linkTrackVars = _pushV;
}
function fasOmnitureSet(o) {
}
function ownOmniture(mod, action) {
switch (mod) {
case "P010":
generatePageLoad();
break;
case "P020":
switch (action) {
case "load":
s.eVar2 = "logged in";
generatePageLoad();
break;
case "add":
s.pageName = buildPageName() + ":add car";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
generatePageLoad();
break;
case "edit":
s.pageName = buildPageName() + ":1:edit car";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
generatePageLoad();
break;
case "editconfirm":
s.pageName = buildPageName() + ":2:edit car:confirm";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
generatePageLoad();
break;
case "delete":
s.pageName = buildPageName() + ":1:delete";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
generatePageLoad();
break;
case "deleteconfirm":
s.pageName = buildPageName() + ":2:delete:confirm";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
generatePageLoad();
break;
}
break;
case "P110":
switch (action) {
case "info":
s.pageName = buildPageName() + ":1:info";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
s.eVar48 = "event:myford register-start";
s.prop48 = s.eVar48;
generatePageLoad();
break;
case "thanks":
s.pageName = buildPageName() + "2:thank you";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
s.eVar2 = "logged in";
s.eVar3 = "registered";
s.eVar28 = "myford register";
s.eVar48 = "event:myford register";
s.prop18 = "myford register";
s.prop48 = s.eVar48;
// email opt-in full
if (typeof sford.ownpermemail == "boolean") {
if (sford.ownpermemail) {
}
}
s.events = "event10,event14,event43";
s.linkTrackEvents = s.events;
generatePageLoad();
break;
}
break;
case "P400":
switch (action) {
case "load":
s.pageName = buildPageName() + ":profile details";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
generatePageLoad();
break;
}
break;
case "P410":
switch (action) {
case "email":
s.pageName = buildPageName() + ":1:edit email";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
generatePageLoad();
break;
case "emailconfirm":
s.pageName = buildPageName() + ":2:edit email:confirm";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
generatePageLoad();
break;
case "password":
s.pageName = buildPageName() + ":1:edit password";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
generatePageLoad();
break;
case "passwordconfirm":
s.pageName = buildPageName() + ":2:edit password:confirm";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
generatePageLoad();
break;
}
break;
case "P420":
switch (action) {
case "personal":
s.pageName = buildPageName() + ":personal:1:edit details";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
generatePageLoad();
break;
case "personalconfirm":
s.pageName = buildPageName() + ":personal:2:edit details:confirm";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
generatePageLoad();
break;
}
break;
case "P430":
switch (action) {
case "contact":
s.pageName = buildPageName() + ":contact:1:edit contact";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
generatePageLoad();
break;
case "contactconfirm":
s.pageName = buildPageName() + ":contact:2:edit contact:confirm";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
generatePageLoad();
break;
}
break;
}
}
//Omniture Tagging for Sync landing pages.
function syncOmniture(mod, action) {
switch (mod) {
case "P44":
switch (action) {
case "initiated":
s.pageName = buildPageName() + ":findcar:initiated";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
break;
case "completed":
s.pageName = buildPageName() + ":findcar:completed";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
break;
}
break;
case "P48":
switch (action) {
case "vin":
s.pageName = buildPageName() + ":result:vin";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
break;
case "anonymous":
s.pageName = buildPageName() + ":result:anonymous";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
break;
}
break;
case "P11":
switch (action) {
case "helpfindvin":
s.pageName = buildPageName() + ":helpfindvin";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
break;
}
break;
case "P18":
switch (action) {
case "vininvalid":
s.pageName = buildPageName() + ":error:vininvalid";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
break;
}
break;
case "P19":
switch (action) {
case "vinnosystem":
s.pageName = buildPageName() + ":error:vinnosystem";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
break;
}
break;
}
}
//Omniture for Sync Button Click
function syncOmnitureButtonClick(mod, buttonLabel) {
switch (mod) {
case "vin":
var Pagename = buildPageName() + ":result:vin";
switch (buttonLabel) {
case "find":
s.linkTrackVars = "channel,hier1,eVar11,prop11";
s.pageName = Pagename;
s.eVar11 = Pagename;
s.prop11 = s.eVar11;
omnitureOnClick('o', buildPageName() + ":find");
break;
case "comparenow":
s.linkTrackVars = "channel,hier1,eVar11,prop11";
s.pageName = Pagename;
s.eVar11 = Pagename;
s.prop11 = s.eVar11;
omnitureOnClick('o', buildPageName() + ":comparenow");
break;
case "addtocompare":
s.linkTrackVars = "channel,hier1,eVar11,prop11";
s.pageName = Pagename;
s.eVar11 = Pagename;
s.prop11 = s.eVar11;
omnitureOnClick('o', buildPageName() + ":addtocompare");
break;
case "print":
s.linkTrackVars = "channel,hier1,eVar11,prop11";
s.pageName = Pagename;
s.eVar11 = Pagename;
s.prop11 = s.eVar11;
omnitureOnClick('o', buildPageName() + ":print");
break;
}
break;
case "anonymous":
var Pagename = buildPageName() + ":result:anonymous";
switch (buttonLabel) {
case "find":
s.linkTrackVars = "channel,hier1,eVar11,prop11";
s.pageName = Pagename;
s.eVar11 = Pagename;
s.prop11 = s.eVar11;
omnitureOnClick('o', buildPageName() + ":find");
break;
case "comparenow":
s.linkTrackVars = "channel,hier1,eVar11,prop11";
s.pageName = Pagename;
s.eVar11 = Pagename;
s.prop11 = s.eVar11;
omnitureOnClick('o', buildPageName() + ":comparenow");
break;
case "addtocompare":
s.linkTrackVars = "channel,hier1,eVar11,prop11";
s.pageName = Pagename;
s.eVar11 = Pagename;
s.prop11 = s.eVar11;
omnitureOnClick('o', buildPageName() + ":addtocompare");
break;
case "print":
s.linkTrackVars = "channel,hier1,eVar11,prop11";
s.pageName = Pagename;
s.eVar11 = Pagename;
s.prop11 = s.eVar11;
omnitureOnClick('o', buildPageName() + ":print");
break;
}
break;
}
}
// OSB Pageload Omniture stuff...
OM.OSB = OM.OSB || {};
var OSBNamePlate = '';
var OSBModelYear = '';
OM.OSB.np = function(nameplate) {
OSBNamePlate = "ford " + nameplate;
};
OM.OSB.my = function(modelYear) {
if (modelYear.length > 4) {
modelYear = modelYear.substring(0, 4);
}
OSBModelYear = modelYear;
};
var OSBBookingID = '';
OM.OSB.bi = function(bookingID) {
OSBBookingID = bookingID;
};
var OSBTotalPrice = '';
OM.OSB.tp = function(totalPrice) {
OSBTotalPrice = totalPrice;
};
var OSBDealerCode = '';
OM.OSB.osbdc = function(dealerCode) {
OSBDealerCode = dealerCode;
};
OM.OSB.pl = function(step, opts) {
s.hier = sford.hier1;
s.linkTrackVars = "channel,hier1,eVar4,eVar11,eVar12,eVar14,eVar15,eVar16,prop4,prop5,prop11,prop12,prop14,prop15,prop16,eVar48,prop48,eVar49,prop49";
switch (step) {
case "home":
s.pageName = buildPageName() + ":home";
s.hier1 = s.hier + ":home";
break;
case "vi":
s.pageName = buildPageName() + ":vehicle info";
s.hier1 = "owners:ford owner:osb:new service";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
s.eVar48 = "event:schedule service start";
s.prop48 = s.eVar48;
s.eVar49 = "osb";
s.prop49 = s.eVar49;
s.events = "event63,event43";
s.linkTrackEvents = s.events;
break;
case "cs":
s.pageName = buildPageName() + ":choose service";
s.eVar11 = s.pageName;
s.hier1 = "owners:ford owner:osb:new service";
s.prop11 = s.eVar11;
s.eVar12 = OSBModelYear;
s.prop12 = s.eVar12;
s.eVar16 = OSBNamePlate;
s.prop16 = s.eVar16;
s.linkTrackVars += ",eVar12,eVar16";
break;
case "fd":
s.pageName = buildPageName() + ":find dealer";
s.eVar11 = s.pageName;
s.hier1 = "owners:ford owner:osb:new service";
s.prop11 = s.eVar11;
s.eVar12 = OSBModelYear;
s.prop12 = s.eVar12;
s.eVar16 = OSBNamePlate;
s.prop16 = s.eVar16;
break;
case "dr":
s.pageName = buildPageName() + ":dealer results";
s.hier1 = "owners:ford owner:osb:new service";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
s.eVar12 = OSBModelYear;
s.prop12 = s.eVar12;
s.eVar16 = OSBNamePlate;
s.prop16 = s.eVar16;
s.events = "event1,event43";
s.linkTrackEvents = s.events;
s.eVar48 = "event:find dealer";
s.prop48 = s.eVar48;
s.eVar49 = "osb";
s.prop49 = s.eVar49;
s.linkTrackVars += ",eVar48,eVar49";
break;
case "ads":
s.pageName = buildPageName() + ":additional services";
s.hier1 = "owners:ford owner:osb:new service";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
s.eVar12 = OSBModelYear;
s.prop12 = s.eVar12;
s.eVar16 = OSBNamePlate;
s.prop16 = s.eVar16;
s.eVar1 = OSBDealerCode;
break;
case "cdt":
s.pageName = buildPageName() + ":choose date time";
s.hier1 = "owners:ford owner:osb:new service";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
s.eVar12 = OSBModelYear;
s.prop12 = s.eVar12;
s.eVar16 = OSBNamePlate;
s.prop16 = s.eVar16;
s.eVar1 = OSBDealerCode;
break;
case "cd":
s.pageName = buildPageName() + ":contact details";
s.hier1 = "owners:ford owner:osb:new service";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
s.eVar12 = OSBModelYear;
s.prop12 = s.eVar12;
s.eVar16 = OSBNamePlate;
s.prop16 = s.eVar16;
s.eVar1 = OSBDealerCode;
break;
case "bs":
s.pageName = buildPageName() + ":booking summary";
s.hier1 = "owners:ford owner:osb:new service";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
s.eVar12 = OSBModelYear;
s.prop12 = s.eVar12;
s.eVar16 = OSBNamePlate;
s.prop16 = s.eVar16;
s.eVar1 = OSBDealerCode;
break;
case "cc":
s.pageName = "owner:osb:view service:cancel confirmation";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
s.hier1 = "owners:ford owner:osb:cancel booking";
s.eVar48 = "event:cancel service booking";
s.eVar49 = "osb";
s.prop48 = s.eVar48;
s.prop49 = s.eVar49;
s.events = "event43,event65";
s.eVar12 = OSBModelYear;
s.prop12 = s.eVar12;
s.eVar16 = OSBNamePlate;
s.prop16 = s.eVar16;
s.eVar17 = "osb " + OSBBookingID;
s.eVar25 = OSBTotalPrice;
s.eVar1 = OSBDealerCode;
break;
case "bsp":
s.pageName = buildPageName() + ":booking summary print";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
s.eVar12 = OSBModelYear;
s.prop12 = s.eVar12;
s.eVar16 = OSBNamePlate;
s.prop16 = s.eVar16;
s.eVar1 = OSBDealerCode;
break;
case "bc":
s.pageName = buildPageName() + ":booking confimation";
s.hier1 = "owners:ford owner:osb:new service";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
s.eVar12 = OSBModelYear;
s.prop12 = s.eVar12;
s.eVar16 = OSBNamePlate;
s.prop16 = s.eVar16;
s.eVar17 = "osb " + OSBBookingID;
s.eVar25 = OSBTotalPrice;
s.eVar28 = "service appointment scheduled";
s.eVar48 = "event:schedule service complete";
s.eVar49 = "osb";
s.prop18 = "service appointment scheduled";
s.prop48 = "event:schedule service complete";
s.prop49 = "osb";
s.events = "event10,event43,event64";
s.eVar1 = OSBDealerCode;
break;
case "vbs":
s.pageName = "owner:osb:view service:booking summary";
s.hier1 = "owners:ford owner:osb:view existing booking";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
s.eVar12 = OSBModelYear;
s.prop12 = s.eVar12;
s.eVar16 = OSBNamePlate;
s.prop16 = s.eVar16;
s.eVar17 = "osb " + OSBBookingID;
s.eVar25 = OSBTotalPrice;
s.eVar48 = "event:view existing service booking";
s.eVar49 = "osb";
s.prop18 = "service appointment scheduled";
s.prop48 = s.eVar48;
s.prop49 = s.eVar49;
s.eVar1 = OSBDealerCode;
break;
default:
}
generatePageLoad();
s.linkTrackEvents = "";
s.eVar48 = "";
s.prop48 = "";
s.eVar49 = "";
s.prop49 = "";
s.events = "";
};
OM.EUSED = OM.EUSED || {};
var EUSED = EUSED || {},
selectedCV,
shortPageName,
buildOmPageStr,
buildOmModelStr,
vehicleObj,
vehiclePath,
vehicleType;
OM.EUSED.buildOmPageStr = '';
OM.EUSED.buildOmModelStr = '';
OM.EUSED.pl = function(step) {
switch (controllerCommand){
case "Home":
OM.EUSED.shortPageName = 'overview';
break;
case "Search":
OM.EUSED.shortPageName = 'search results';
break;
default:
console.log('page not listed');
break;
};
OM.EUSED.vehicleType = UC.vehicleType;
OM.EUSED.vehicleObj = {
'PERSONAL' : 'cars',
'COMMERCIAL' : 'commercial'
};
OM.EUSED.vehiclePath = OM.EUSED.vehicleObj[OM.EUSED.vehicleType];
OM.EUSED.buildOmPageStr = buildPageName() + ":" + OM.EUSED.vehiclePath  + EUSED.Tagging.getSelectedCvId();
if (typeof sford !== "object") { return; }
s.hier1 = sford.hier1.replace(':shopping tools','');
s.linkTrackVars = "channel,hier1,eVar4,eVar11,eVar12,eVar14,eVar15,eVar16,prop4,prop5,prop11,prop12,prop14,prop15,prop16";
switch (step) {
case "vso":
s.hier1 = OM.EUSED.buildOmPageStr = buildPageName() + ":" + OM.EUSED.vehiclePath;
s.pageName = OM.EUSED.buildOmPageStr + ":overview";		
s.eVar11 = s.prop11 = s.pageName;
break;
case "vsr":
s.linkTrackVars += ",eVar35,prop21,eVar37,prop37,eVar38,prop38";
s.linkTrackVars += ",eVar48,prop48,list1,zip";
s.eVar11 = s.prop11 = OM.EUSED.buildOmPageStr + ":results"; 
s.pageName = s.eVar11 + ":pg " + EUSED.Tagging.currentPage;
s.eVar35 = s.prop21 = "0:" + EUSED.Tagging.getTotalResults() + "";
s.eVar37 = s.prop37 = EUSED.Tagging.getSearchRadius();
s.list1 = EUSED.Tagging.getSelectedVehicleList();
s.eVar38 = EUSED.Tagging.getVehicleList();
s.eVar48 = s.prop48 = "event:search inventory used";  
s.zip = EUSED.Tagging.getLocation();
// only fire event on first page - TODO: figure out (reset) if user refines results - TBD w/Andrea
if (EUSED.Tagging.currentPage == 1) {
s.events = "event25, event43";
}
break;
case "vsrr":
s.linkTrackVars += ",eVar35,prop21,eVar37,prop37,eVar38,prop38";
s.linkTrackVars += ",eVar48,prop48,eVar49,prop49,list1,zip";
s.eVar11 = s.prop11 = OM.EUSED.buildOmPageStr + ":results:refine"; 
s.pageName = s.eVar11 + ":pg " + EUSED.Tagging.currentPage;
s.eVar35 = s.prop21 = "0:" + EUSED.Tagging.getTotalResults();
s.eVar37 = s.prop37 = EUSED.Tagging.getSearchRadius();
s.eVar38 = EUSED.Tagging.getVehicleList();
s.list1 = EUSED.Tagging.getSelectedVehicleList();
s.eVar48 = s.prop48 = "event:search inventory used:refine";
s.eVar49 = s.prop49 = "used:search inventory refine:" + EUSED.Tagging.getLastCategory() + ":" + EUSED.Tagging.getLastValue();
s.zip = EUSED.Tagging.getLocation();
if (EUSED.Tagging.currentPage == 1) {
s.events = "event43";
}
break;
case "vss":
s.linkTrackVars += ",eVar35,prop21,eVar37,prop37,eVar38,prop38";
s.linkTrackVars += ",eVar48,prop48,eVar49,prop49,listvar1,zip";
s.eVar11 = s.prop11 = OM.EUSED.buildOmPageStr + ":results:sort";
s.pageName = s.eVar11 + ":pg " + EUSED.Tagging.currentPage;
s.eVar35 = s.prop21 = "0:" + EUSED.Tagging.getTotalResults();
s.eVar37 = s.prop37 = EUSED.Tagging.getSearchRadius();
s.list1 = EUSED.Tagging.getSelectedVehicleList();
s.eVar38 = EUSED.Tagging.getVehicleList();
s.eVar48 = s.prop48 = "event:search inventory used:sort";
s.eVar49 = s.prop49 = "used:search inventory sort:" + EUSED.Tagging.getLastCategory() + ":" + EUSED.Tagging.getLastValue();		
s.zip = EUSED.Tagging.getLocation();
if (EUSED.Tagging.currentPage == 1) {
s.events = "event43";
}
break;
case "vszr":
s.linkTrackVars += ",eVar35,prop21,eVar37,prop37,eVar38,prop38";
s.linkTrackVars += ",listvar1,zip,list3";
s.pageName = OM.EUSED.buildOmPageStr + ":zero results";
s.eVar11 = s.prop11 = s.pageName;
s.eVar35 = s.prop21 = "0:0";
s.eVar37 = s.prop37 = EUSED.Tagging.getSearchRadius();
s.eVar38 = EUSED.Tagging.getVehicleList();
s.list1 = EUSED.Tagging.getSelectedVehicleList();
s.list3 = "search results:zero results";
s.zip = EUSED.Tagging.getLocation();
s.events = "event22";				
break;
// Here
case "vsel": // Vehicle Search Empty loaction 
s.linkTrackVars += ",eVar35,prop21,eVar37,prop37,eVar38,prop38";
s.linkTrackVars += ",list1,zip,list3";
s.pageName = OM.EUSED.buildOmPageStr  + ":empty location entry";
s.eVar11 = s.prop11 = s.pageName;
s.eVar35 = s.prop21 = "0:0";
s.eVar37 = s.prop37 = EUSED.Tagging.getSearchRadius();	
s.eVar38 = EUSED.Tagging.getVehicleList();
s.list1 = EUSED.Tagging.getSelectedVehicleList();	
s.list3 = OM.EUSED.shortPageName + ":empty location entry";
s.zip = EUSED.Tagging.getLocation();
s.events = "event22,event43";				
break;
case "vsle": // Vehicle Search error loaction 
s.linkTrackVars += ",eVar35,prop21,eVar37,prop37,eVar38,prop38";
s.linkTrackVars += ",list1,zip,list3";
s.pageName = OM.EUSED.buildOmPageStr  + ":location error";
s.eVar11 = s.prop11 = s.pageName;
s.eVar35 = s.prop21 = "0:0";
s.eVar37 = s.prop37 = EUSED.Tagging.getSearchRadius();
s.eVar38 = EUSED.Tagging.getVehicleList();
s.list1 = EUSED.Tagging.getSelectedVehicleList();
s.list3 = OM.EUSED.shortPageName +":location error";
s.zip = EUSED.Tagging.getLocation();
s.events = "event22,event43";				
break;
// End 
/*case "vsld":
s.linkTrackVars += ",eVar35,prop21,eVar37,prop37,eVar38,prop38";
s.linkTrackVars += ",list1,zip,list3";
s.pageName = buildPageName() + ":location disambiguation";
s.eVar11 = s.prop11 = s.pageName;
s.eVar35 = s.prop21 = "0:0";
s.eVar37 = s.prop37 = EUSED.Tagging.getSearchRadius();
s.eVar38 = EUSED.Tagging.getVehicleList();
s.list1 = EUSED.Tagging.getSelectedVehicleList();
s.list3 = "search results:location disambiguation";
s.zip = EUSED.Tagging.getLocation();
s.events = "event22,event43";				
break;*/
case "vsvv":
s.hier1 += ":vehicle";
s.linkTrackVars += ",eVar35,prop21,eVar37,prop37,eVar48,prop48";
s.linkTrackVars += ",list1,zip,eVar1,eVar12,prop12,eVar16,prop16,eVar18,eVar25,products";
s.eVar11 = s.prop11 = OM.EUSED.buildOmPageStr + ":vehicle view";
s.pageName = OM.EUSED.buildOmPageStr + ":vehicle view:" + EUSED.Tagging.getNameplate();
s.hier1 = sford.hier1 + ":vehicle";
s.eVar35 = s.prop21 = EUSED.Tagging.currentItem  + ":" + EUSED.Tagging.getTotalResults();
s.eVar37 = s.prop37 = EUSED.Tagging.getSearchRadius();
s.eVar38 =  EUSED.Tagging.getNameplate();
s.list1 = s.eVar38;
s.eVar1 = EUSED.Tagging.getDealer();
s.eVar12 = s.prop12 = EUSED.Tagging.getModelYear();
s.eVar16 = s.prop16 = EUSED.Tagging.getNameplate();
s.eVar18  = EUSED.Tagging.getSeries();
s.eVar25  = EUSED.Tagging.getPrice();
s.eVar48 = s.prop48 = "event:used:view used vehicle";
s.products= EUSED.Tagging.getSingleProduct();
s.zip = EUSED.Tagging.getLocation();
s.events = "event43,prodView";
break;
case "vsso":
s.hier1 += ":shortlist:" + OM.EUSED.vehiclePath;
s.linkTrackVars += ",list1,zip,eVar48,prop48";
s.pageName = OM.EUSED.buildOmPageStr = buildPageName() + ":" + OM.EUSED.vehiclePath + ":shortlist:quick view";
s.eVar11 = s.prop11 = s.pageName;
s.eVar35 = "";s.eVar37 = s.prop37 = "";s.eVar16="";s.eVar18="";s.eVar25="";s.prop21="";
s.eVar48 = s.prop48 = "event:used:view shortlist:quick view";
s.eVar38 = EUSED.Tagging.getShortlistList();
s.list1 = EUSED.Tagging.getShortlistList();
s.zip = EUSED.Tagging.getLocation();
s.eVar37 = s.prop37 = EUSED.Tagging.getSearchRadius();
s.products = EUSED.Tagging.getShortlistProducts();
s.events = "event43";				
break;		
case "vssd":
s.hier1 += ":shortlist:" + OM.EUSED.vehiclePath;
s.linkTrackVars += ",list1,zip,eVar48,prop48";
s.linkTrackVars += ",list1,zip,eVar1,eVar12,prop12,eVar16,prop16,eVar18,eVar25,products";
s.pageName = OM.EUSED.buildOmPageStr +  ":shortlist:full view";
s.eVar37 = s.prop37 = EUSED.Tagging.getSearchRadius();
s.eVar35 = "";s.eVar37 = s.prop37 = "";s.eVar16="";s.eVar18="";s.eVar25="";s.prop21="";
s.eVar11 = s.prop11 = s.pageName;
s.eVar48 = s.prop48 = "event:used:view shortlist:full view";
s.eVar38 = EUSED.Tagging.getShortlistList();
s.list1 = EUSED.Tagging.getShortlistList();
s.zip = EUSED.Tagging.getLocation();
s.products = EUSED.Tagging.getShortlistProducts();
s.events = "event43,scView";
break;		
case "vsco":
s.hier1 += ":compare:" + OM.EUSED.vehiclePath;
s.linkTrackVars += ",list1,zip,eVar37,prop37,eVar48,prop48";
s.pageName = OM.EUSED.buildOmPageStr = buildPageName() + ":" + OM.EUSED.vehiclePath + ":compare:quick view";	
s.eVar11 = s.prop11 = s.pageName;
s.eVar37 = s.prop37 = EUSED.Tagging.getSearchRadius();
s.eVar35 = "";s.eVar16="";s.eVar18="";s.eVar25="";s.prop21="";
s.eVar48 = s.prop48 = "event:used:compare vehicles:quick view";
s.eVar38 = EUSED.Tagging.getCompareList();
s.list1 = EUSED.Tagging.getCompareList();
s.zip = EUSED.Tagging.getLocation();
s.products = EUSED.Tagging.getCompareProducts();
s.events = "event43";				
break;		
case "vscd":
s.hier1 += ":compare:" + OM.EUSED.vehiclePath;
s.linkTrackVars += ",list1,zip,eVar37,prop37,eVar48,prop48";
s.linkTrackVars += ",list1,zip,eVar1,eVar12,prop12,eVar16,prop16,eVar18,eVar25,products";
s.pageName = OM.EUSED.buildOmPageStr + ":compare:full view";
s.eVar11 = s.prop11 = s.pageName;
s.eVar37 = s.prop37 = EUSED.Tagging.getSearchRadius();
s.eVar35 = "";s.eVar16="";s.eVar18="";s.eVar25="";s.prop21="";
s.eVar48 = s.prop48 = "event:used:compare vehicles:full view";
s.eVar38 = EUSED.Tagging.getCompareList();
s.list1 = EUSED.Tagging.getCompareList();
s.zip = EUSED.Tagging.getLocation();
s.products = EUSED.Tagging.getCompareProducts();		
s.events = "event12,event43";				
break;	
default:
console.error("Undefined page" + step);
break;
}
s.linkTrackEvents = s.events;
generatePageLoad();
s.linkTrackEvents = "";
s.list3 = "";
s.eVar48 = s.prop48 = s.eVar49 = s.prop49 = s.events = "";
console.log(step);
};
OM.EUSED.oc = function(step) {
if (typeof sford != "object") { return; }
var ln = "";
//s.hier1 = sford.hier1; 
s.hier1 = sford.hier1.replace(':shopping tools','');
// TODO: verify context has been set previously by a page load
switch (step) {
case "vvie":
var contentLabel = "";		
if (arguments.length >= 2) {
contentLabel =  arguments[1];
}
s.hier1 = sford.hier1 + ":vehicle:" + OM.EUSED.vehiclePath;
ln = OM.EUSED.buildOmPageStr + ":view vehicle:expand content:" + contentLabel.toLowerCase();
s.eVar48 = s.prop48 = "event:used:expand content";
s.events = "event43";
s.linkTrackVars += ",eVar48,prop48";
s.prop5 = "expand content";
break;
case "vvrt":
var contentLabel = "";
if (arguments.length >= 2) {
contentLabel =  arguments[1];
}
s.hier1 = sford.hier1 + ":vehicle:" + OM.EUSED.vehiclePath;
ln = OM.EUSED.buildOmPageStr + ":view vehicle:play feature video:" + contentLabel.toLowerCase();
s.eVar48 = s.prop48 = "event:used:play video";
s.events = "event43";
s.linkTrackVars += ",eVar48,prop48";
s.prop5 = "play video";
break;
case "vsca":
s.hier1 = sford.hier1 + ":compare:" + OM.EUSED.vehiclePath;
s.linkTrackVars += ",list1,eVar1,eVar12,eVar16,eVar18,eVar25,products";
ln = OM.EUSED.buildOmPageStr + ":add to compare";
s.prop5 = "add to compare";
s.events = "event43";
s.eVar12 = s.prop12 = EUSED.Tagging.getTargetModelYear();
s.eVar16 = s.prop16 = EUSED.Tagging.getTargetNameplate();
s.eVar18 = EUSED.Tagging.getTargetSeries();
s.eVar25  = EUSED.Tagging.getTargetPrice();
s.eVar35 = s.prop35 = EUSED.Tagging.lastSelectedItem  + ":" + EUSED.Tagging.getTotalResults();
s.list1 = s.eVar38 = s.eVar16;
s.products = EUSED.Tagging.getSingleProduct();
s.eVar48 = s.prop48 = "event:used:add to compare";
break;
case "vssa":
s.linkTrackVars += ",list1,eVar1,eVar12,eVar16,eVar18,eVar25,products";
s.hier1 = sford.hier1 + ":shortlist:" + OM.EUSED.vehiclePath;
ln = OM.EUSED.buildOmPageStr + ":add to shortlist";
s.eVar48 = s.prop48 = "event:used:add to shortlist";
s.eVar12 = s.prop12 = EUSED.Tagging.getTargetModelYear();
s.eVar16 = s.prop16 = EUSED.Tagging.getTargetNameplate();
s.eVar18 = EUSED.Tagging.getTargetSeries();
s.eVar25 = EUSED.Tagging.getTargetPrice();
s.eVar35 = s.prop35 = EUSED.Tagging.lastSelectedItem  + ":" + EUSED.Tagging.getTotalResults();
s.list1 = s.eVar38 = s.eVar16;
s.events = "event43,scOpen,scAdd";
s.products = EUSED.Tagging.getSingleProduct();
s.prop5 = "add to shortlist";
break;
case "vssr":
s.linkTrackVars += ",list1,eVar1,eVar12,eVar16,eVar18,eVar25,products";
s.hier1 = sford.hier1 + ":shortlist:" + OM.EUSED.vehiclePath;
s.events = "event43";
s.events += ",scRemove";
ln = "used search inventory:remove from shortlist";
s.eVar48 = s.prop48 = "event:used:remove from shortlist";
s.eVar12 = s.prop12 = EUSED.Tagging.getTargetModelYear();
s.eVar16 = s.prop16 = EUSED.Tagging.getTargetNameplate();
s.eVar18 = EUSED.Tagging.getTargetSeries();
s.eVar25 = EUSED.Tagging.getTargetPrice();
s.list1 = s.eVar38 = s.eVar16;
s.products = EUSED.Tagging.getSingleProduct();
s.prop5 = "remove from shortlist";		
break;
case "vscr":
s.linkTrackVars += ",list1,eVar1,eVar12,eVar16,eVar18,eVar25,products";
s.hier1 = sford.hier1 + ":compare:" + OM.EUSED.vehiclePath;
ln = OM.EUSED.buildOmPageStr + "remove from compare";
s.eVar48 = s.prop48 = "event:used:remove from compare";
s.events = "event43";
s.eVar12 = s.prop12 = EUSED.Tagging.getTargetModelYear();
s.eVar16 = s.prop16 = EUSED.Tagging.getTargetNameplate();
s.eVar18 = EUSED.Tagging.getTargetSeries();
s.eVar25  = EUSED.Tagging.getTargetPrice();
s.list1 = s.eVar38 = s.eVar16;
s.products = EUSED.Tagging.getSingleProduct();
s.prop5 = "remove from compare";
break;
case "vsde":
s.hier1 = sford.hier1 + ":contact dealer:" + OM.EUSED.vehiclePath;
s.linkTrackVars += ",eVar48,prop48";
s.linkTrackVars += ",products";
ln = OM.EUSED.buildOmPageStr + ":email dealer";
s.prop5 = "email dealer:initiate";
s.eVar48 = s.prop48 = "event:used:contact dealer:email";
s.eVar12 = s.prop12 = EUSED.Tagging.getTargetModelYear();
s.eVar16 = s.prop16 = EUSED.Tagging.getTargetNameplate();
s.eVar18 = EUSED.Tagging.getTargetSeries();
s.eVar25 = EUSED.Tagging.getTargetPrice();
s.list1 = s.eVar38 = s.eVar16;
s.products = EUSED.Tagging.getSingleProduct();
s.events = "event26,event43";		
break;
case "vsdc":
s.hier1 = sford.hier1 + ":contact dealer:" + OM.EUSED.vehiclePath;
s.linkTrackVars += ",eVar48,prop48";
s.linkTrackVars += ",products";
ln = OM.EUSED.buildOmPageStr + ":c2c dealer";
s.prop5 = "c2c dealer:initiate";
s.eVar48 = s.prop48 = "event:used:contact dealer:c2c";
s.eVar12 = s.prop12 = EUSED.Tagging.getTargetModelYear();
s.eVar16 = s.prop16 = EUSED.Tagging.getTargetNameplate();
s.eVar18 = EUSED.Tagging.getTargetSeries();
s.eVar25 = EUSED.Tagging.getTargetPrice();
s.list1 = s.eVar38 = s.eVar16;
s.products = EUSED.Tagging.getSingleProduct();
s.events = "event26,event43";		
break;	
case "vsvv":
s.hier1 = sford.hier1;
s.linkTrackVars += ",eVar1,evar30";
s.linkTrackVars += ",products";
ln = OM.EUSED.buildOmPageStr + ":view vehicle:view accessory:" + EUSED.Tagging.getTargetNameplate();
s.zip = EUSED.Tagging.getLocation();
s.prop5 = "view accessory";
s.eVar1 = EUSED.Tagging.getVendorCode();
s.eVar12 = s.prop12 = EUSED.Tagging.getTargetModelYear();
s.eVar16 = s.prop16 = EUSED.Tagging.getTargetNameplate();
s.eVar18 = EUSED.Tagging.getTargetSeries();
s.eVar25 = EUSED.Tagging.getTargetPrice();
s.list1 = s.eVar38 = s.eVar16;		
s.products = EUSED.Tagging.getSingleProduct();
s.events = "event17,event52,event53,event54";	
break;		
default:
console.error("Undefined click" + step);		
break;		
}
s.linkTrackEvents = s.events;
if (ln != "") omnitureOnClick('o', ln);
s.linkTrackEvents = "";
s.eVar48 = s.prop48 = s.eVar49 = s.prop49 = s.events = "";
console.log(step);
};
OM.SURVEY = OM.SURVEY || {};
var SURVEY = SURVEY || {};
OM.SURVEY.pl = function(step) {
if (typeof sford != "object") { 
console.log("Survey omniture not fired");
return;
}
s.hier1 = "survey:dealer contact survey";
s.linkTrackVars = "channel,hier1,eVar4,eVar11,eVar12,eVar14,eVar15,eVar16,eVar48,evar49,prop4,prop5,prop11,prop12,prop14,prop15,prop16,prop33,prop39,prop48,prop49";
s.eVar48 ="";
switch (step) {
case "expired":
s.pageName = buildPageName() + ":dealer contact survey:0:expired";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
s.events = "";
break;
case "previouslyCompleted":
s.pageName = buildPageName() + ":dealer contact survey:0:previously completed";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;			
s.events = "";
break;
case "dealerContact":
s.pageName = buildPageName() + ":dealer contact survey:1";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
s.eVar48 = "event:dealer contact survey start";
s.events = "event43";
break;
case "confirmContact":
s.pageName = buildPageName() + ":dealer contact survey:2:confirm:contact";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
s.eVar48 = "event:dealer contact survey complete:contact";
s.events = "event43";
break;
case "thankyouContactFinal":
s.pageName = buildPageName() + ":dealer contact survey:3:complete";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
s.eVar48 = "event:dealer contact survey complete:contact:full survey complete";
s.events = "event43";
break;
case "noContact":
s.pageName = buildPageName() + ":dealer contact survey:2:confirm:no contact";
s.eVar11 = s.pageName;
s.prop11 = s.eVar11;
s.eVar48 = "event:dealer contact survey complete:no contact";
s.events = "event43";
break;
default:
console.error("Undefined page" + step);
break;
}
s.linkTrackEvents = s.events;
s.prop48 = s.eVar48 ;
s.prop33 =s.eVar49 = s.prop49= "";
s.prop39 = s.pageName;
generatePageLoad();
};
// OSB onclick stuff
OM.OSB.oc = function(step) {
var ln = "";
switch (step) {
case "des":
ln = "owner:osb:dealer search";
s.pageName = "owner:osb:schedule service";
s.prop5 = "find dealer";
break;
case "ded":
ln = "owner:osb:view dealer details";
s.eVar48 = "event:view dealer details", s.prop48 = s.eVar48;
s.eVar49 = 'osb';
s.prop49 = s.eVar49;
s.prop5 = "view dealer details";
s.eVar1 = OSBDealerCode;
s.linkTrackVars += ",eVar1";
s.hier1 = "owners:ford owner:osb:new service";
s.events = "event43";
s.linkTrackEvents = s.events;
break;
case "acd":
ln = "owner:osb:amend contact details";
s.hier1 = "owners:ford owner:osb:new service";
s.prop5 = "amend booking details";
s.eVar1 = OSBDealerCode;
s.linkTrackVars += ",eVar1";
break;
case "ave":
ln = "owner:osb:amend vehicle info";
s.hier1 = "owners:ford owner:osb:new service";
s.prop5 = "amend booking details";
s.eVar1 = OSBDealerCode;
s.linkTrackVars += ",eVar1";
break;
case "adt":
ln = "owner:osb:amend date";
s.hier1 = "owners:ford owner:osb:new service";
s.prop5 = "amend booking details";
s.eVar1 = OSBDealerCode;
s.linkTrackVars += ",eVar1";
break;
case "as":
ln = "owner:osb:amend service";
s.hier1 = "owners:ford owner:osb:new service";
s.prop5 = "amend booking details";
s.eVar1 = OSBDealerCode;
s.linkTrackVars += ",eVar1";
break;
case "aas":
ln = "owner:osb:amend additional service";
s.hier1 = "owners:ford owner:osb:new service";
s.prop5 = "amend booking details";
s.eVar1 = OSBDealerCode;
s.linkTrackVars += ",eVar1";
break;
case "adf":
ln = "owner:osb:amend dealer";
s.hier1 = "owners:ford owner:osb:new service";
s.prop5 = "amend booking details";
s.eVar1 = OSBDealerCode;
s.linkTrackVars += ",eVar1";
break;
case "ps":
ln = "owner:osb:amend print summary";
s.hier1 = "owners:ford owner:osb:new service";
s.prop5 = "amend booking details";
s.eVar1 = OSBDealerCode;
s.linkTrackVars += ",eVar1";
break;
case "ccl":
ln = "owner:osb:cancel booking";
s.hier1 = "owners:ford owner:osb:cancel booking";
s.prop5 = "cancel booking";
s.eVar12 = OSBModelYear;
s.prop12 = s.eVar12;
s.eVar16 = OSBNamePlate;
s.prop16 = s.eVar16;
s.eVar17 = "osb " + OSBBookingID;
s.eVar25 = OSBTotalPrice;
s.eVar1 = OSBDealerCode;
s.linkTrackVars += ",eVar1,eVar25,eVar17";
break;
case "pbs":
ln = "owner:osb:print summary";
s.hier1 = "owners:ford owner:osb:new service";
s.prop5 = "print booking summary";
s.eVar1 = OSBDealerCode;
s.eVar12 = OSBModelYear;
s.prop12 = s.eVar12;
s.eVar16 = OSBNamePlate;
s.prop16 = s.eVar16;
s.linkTrackVars += ",eVar1,eVar12,eVar16";
break;
default:
}
if (ln != "")
omnitureOnClick('o', ln); 
s.linkTrackEvents = "";
s.eVar48 = "";
s.prop48 = "";
s.eVar49 = "";
s.prop49 = "";
s.events = "";
};
/* GoFurther Tagging.... */
function goFurtherBarrelRecPL(articleName) {
s.pageName = buildPageName() + ":" + articleName;
s.prop11 = s.pageName;
s.eVar11 = "brand:tech:gofurther:" + articleName;
s.linkTrackVars = "channel,hier1,eVar4,eVar7,eVar8,eVar11,eVar13,eVar14,eVar15,eVar30,eVar33,eVar50,eVar52,prop4,prop5,prop7,prop8,prop10,prop11,prop13,prop14,prop15,prop17,prop19,prop30,prop31,prop33,prop35,prop37,prop39,prop50,prop52";
s.events = "event17,event52,event53,event54";
onPageLoad();
};
function goFurtherPhotofeed(articleName) {
s.prop5 = "photofeed interact";
s.eVar11 = "brand:tech:gofurther:" + articleName + ":photofeed";
s.linkTrackVars = "channel,hier1,eVar4,eVar7,eVar8,eVar11,eVar13,eVar14,eVar15,eVar30,eVar33,eVar50,eVar52,prop4,prop5,prop7,prop8,prop10,prop11,prop13,prop14,prop15,prop17,prop19,prop30,prop31,prop33,prop35,prop37,prop39,prop50,prop52";
s.events = "event17,event52,event53,event54";
var ln = s.eVar11;
if (ln != "")
omnitureOnClick('o', ln);
};
OM.goFurther = OM.goFurther || {};
OM.goFurther.pl = function(step) {
s.hier = sford.hier1;
s.linkTrackVars = "channel,hier1,eVar4,eVar7,eVar8,eVar11,eVar13,eVar14,eVar15,eVar30,eVar33,eVar50,eVar52,prop4,prop7,prop8,prop10,prop11,prop13,prop14,prop15,prop17,prop19,prop30,prop31,prop33,prop35,prop37,prop39,prop50,prop52,eVar49";
s.events = "event17,event52,event53,event54";
switch (step) {
case "home":
s.pageName = buildPageName() + ":overview";
s.prop11 = s.eVar11 = s.pageName;
s.events = "event17,event52,event53,event54";
break;
default:
}
generatePageLoad();
};
/* Sync Applink Tagging..... */
function setTabName(tabName) {
s.pageName = buildPageName() + ":sync applink:" + tabName;
s.prop11 = s.eVar11 = s.pageName;
s.linkTrackVars = "channel,hier1,eVar4,eVar7,eVar8,eVar11,eVar13,eVar14,eVar15,eVar30,eVar33,eVar50,eVar52,prop4,prop7,prop8,prop10,prop11,prop13,prop14,prop15,prop17,prop19,prop30,prop31,prop33,prop35,prop37,prop39,prop50,prop52,eVar49";
}
var categorySelected = "";
function appCatalogue(app, category) {
categSelected = category
s.prop5 = "sync:refine results";
var ln = buildPageName() + ":sync applink:" + app + ":" + category;
if (ln != "")
omnitureOnClick('o', ln);
s.linkTrackVars = "channel,hier1,eVar4,eVar7,eVar8,eVar11,eVar13,eVar14,eVar15,eVar30,eVar33,eVar50,eVar52,prop4,prop7,prop8,prop10,prop11,prop13,prop14,prop15,prop17,prop19,prop30,prop31,prop33,prop35,prop37,prop39,prop50,prop52,eVar49";
}
function appLinkOverview(pageDesc) {
s.pageName = buildPageName() + ":sync applink:" + pageDesc;
s.prop11 = s.eVar11 = s.pageName;
generatePageLoad();
}
var appName = "";
function appDetailsOnload(appname) {
appName = appname;
s.pageName = buildPageName() + ":sync applink:catalogue:" + appname + ":"
+ "overview";
s.evar11 = s.prop11 = s.pageName;
s.linkTrackVars = "channel,hier1,eVar4,eVar7,eVar8,eVar11,eVar13,eVar14,eVar15,eVar30,eVar33,eVar50,eVar52,prop4,prop7,prop8,prop10,prop11,prop13,prop14,prop15,prop17,prop19,prop30,prop31,prop33,prop35,prop37,prop39,prop50,prop52,eVar49";
generatePageLoad();
}
function appDetailsOnTabClick(tabid) {
var tabname = "";
if (tabid == 'linkapptabs0') {
tabname = "overview";
} else if (tabid == 'linkapptabs1') {
tabname = "instructions";
}
s.pageName = buildPageName() + ":sync applink:catalogue:" + appName + ":"
+ tabname;
s.evar11 = s.prop11 = s.pageName;
s.linkTrackVars = "channel,hier1,eVar4,eVar7,eVar8,eVar11,eVar13,eVar14,eVar15,eVar30,eVar33,eVar50,eVar52,prop4,prop7,prop8,prop10,prop11,prop13,prop14,prop15,prop17,prop19,prop30,prop31,prop33,prop35,prop37,prop39,prop50,prop52,eVar49";
generatePageLoad();
}
function appStore() {
}
// JavaScript Document
// 17.06.2008	hschlar1	changes with hsw marked
// 10.09.2008	tknapp5		TD5896 - added interval to wait for object tag
// 17.12.2008	iklein1		ENG-5545 - set overlay background to 100%
// 09.03.2009	iklein1		ENG-6538 - set flash base directory
// 12.06.2009	rsrivid3	ENG-6844 - to display the title with special characters
// 09-Mar-2010	mvenka21	ENG-7899   Flash bottom line break fixed
// 09-Mar-2010	mvenka21	ENG-7591 Overlay content resize on window resize fixed for images
// 29.04.2010	iklein1		ENG-7573 CR R071 Flash Version Detection
// 10.08.2011	iklein1		OWNERS changes to support ajax form submit and redirect
// 28.10.2011	rsrivid4	ENG-8588 Overlay CR changes
// 15.01.2012	msukhia1	OWNERS added alternative, non-timeout driven overlay that allows to center element over particular element
// 03.02.2012	fbolaji		ENG-8719 Tweaking of triggerOverlay function. Added new function getViewPoint inorder to get the viewpoint.
// 29.02.2012	msukhia1	OWNERS, added closeCallback
// 22.07.2012	msukhia1	MyGarage, fixes to overlay
/*-global var---------------------------------------------------------------------------------------------------*/
var intDuration = 250;										/* duration of fading background in milliseconds	*/
var intOpacityStart = 0;									/* start opacitay in %								*/
var intOpacityEnd = 80;										/* end opacitay in %								*/
var intBorder = 19;											/* border top, right, bottom left in PX				*/
var intFrame = intBorder * 2;								/* border * 2 to calculate space					*/
var strPathFlashBase = '/cs/ENGInE/flash/';					/* path to flash base directory						*/
var strPathFlashZoom = '/cs/ENGInE/flash/ENGInE_zoom.swf';	/* path to zooming flash							*/
var strPathFeatureDemoFrame = '/cs/ENGInE/flash/ENGInE_feature_demo_frame.swf';	/* path to feature demo flash	*/
var callBackOverlayHandler = null;
var contentValue = null;
var type = null;
var title = null;
var close = null;
// Forced to use it as a global variable, instead of function parameter, 
// because of the weird way that overlay is initialized
var closeCallback = null;
/*var ajaxTemp = 'leer';*/
/*---------------------------------------------------------------------------------------------------------------*/
//This will resize the overlayContent based on the window size. TD#7591 
window.onresize = overLayResize;
function overLayResize()
{
if(contentValue != null){
overlayStart(contentValue,type,title,close);}
}
/*---------------------------------------------------------------------------------------------------------------*/
function ajaxSubmit(url, frmName){
var query = "";
query = getForm(frmName);
xmlhttpPost(url, query);
}
/*---------------------------------------------------------------------------------------------------------------*/
function getForm(frmName){
var query = "";
var frm;
var elm;
var eType;
var eValue;
var eName;
if (document.forms[frmName] != undefined){
frm = document.forms[frmName];
for (var i = 0; i < frm.elements.length; i++){
elm = frm.elements[i];
eType = elm.type;
eValue = elm.value;
eName = elm.name;
switch (eType){
case "text":
case "hidden":
case "password":
case "textarea":
if (i > 0) query += "&";
query += eName + "=" + eValue;
break;
case "checkbox":
case "radio":
if (elm.checked){
if (i > 0) query += "&";
query += eName + "=" + eValue;
}
break;
case "select-one":
if (i > 0) query += "&";
query += eName + "=" + elm.options[elm.selectedIndex].value;
break;
}
}
}
return query;
}
/*---------------------------------------------------------------------------------------------------------------*/
function evalScript(scripts)
{	try
{	if(scripts != '')
{	var script = "";
scripts = scripts.replace(/<script[^>]*>([\s\S]*?)<\/script>/gi, function(){
if (scripts !== null) script += arguments[1] + '\n';
return '';});
if(script) (window.execScript) ? window.execScript(script) : window.setTimeout(script, 0);
}
return false;
}
catch(e)
{	alert(e)
}
}
/*---------------------------------------------------------------------------------------------------------------*/
function xmlhttpPost(strURL){
var xmlHttpReq = false;
// Mozilla/Safari
if (window.XMLHttpRequest){
xmlHttpReq = new XMLHttpRequest();
if (xmlHttpReq.overrideMimeType){
xmlHttpReq.overrideMimeType('text/xml');
// See note below about this line
}
// IE
}else if (window.ActiveXObject){ // IE
try{
xmlHttpReq = new ActiveXObject("Msxml2.XMLHTTP");
}catch (e){
try{
xmlHttpReq = new ActiveXObject("Microsoft.XMLHTTP");
} catch (e){}
}
}
if (!xmlHttpReq) {
alert('ERROR AJAX:( Cannot create an XMLHTTP instance');
return false;
}
//	xmlHttpReq.open('GET', strURL, true);
xmlHttpReq.open('POST', strURL, true);
xmlHttpReq.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
xmlHttpReq.onreadystatechange = function(){
callBackFunction(xmlHttpReq);
};
var params = "";
if(arguments[1] != undefined){
params = arguments[1];
}
xmlHttpReq.send(params);
}
/*---------------------------------------------------------------------------------------------------------------*/
function callBackFunction(http_request){
var arrayPageSize = getPageSize();
if (http_request.readyState == 4){
if (http_request.status == 200){
var responceString = http_request.responseText;
//TODO implement your function e.g.
//alert(responceString); 
document.id('innerOverlayContent').set('html',responceString);
evalScript(http_request.responseText);
//document.getElementById('overlayContent').style.top = ((arrayPageSize[3]- document.getElementById('overlayContent').clientHeight)/2) + document.documentElement.scrollTop + "px";
var oWrapper = document.id('overlayContent');
// change for OnlineServices
if (type == 'os'){
//$('overlayContent').style.top = document.documentElement.scrollTop + 150 + "px";
var getContentSize = document.id('innerOverlayContent').getSize();
var thisEl = document.documentElement;
//console.log("x:"+getContentSize.x +",y:"+getContentSize.y );
oWrapper.setStyles({'height':getContentSize.y+'px','width':getContentSize.x+'px'});
rePosOverlay();
} else if (type == 'overlay') {
/* Made this condition so that it does not enter else for overlay **/
document.getElementById('overlayContent').style.top = document.documentElement.scrollTop + 150 + "px";
}
else{
oWrapper.scrollIntoView();
oWrapper.setStyle('top', ((document.documentElement.scrollTop)/3)+ "px");
}
oWrapper.setStyle('left',(arrayPageSize[0]- oWrapper.clientWidth)/2 + "px");
document.id('overlay').setStyle('display', 'block');
// do Flash Detection and write message into overlayContent too
window.addEvent('domready', function(){
fd.doDetection("over");
});
} else{
return ('ERROR: AJAX request status = ' + http_request.status);
}
}
}
/*----------------------------------------------------------------------------------------------------------------------*/
function overlayStart(s_content, s_type, s_title, s_close, synchronous, s_closeCallback){
closeCallback = s_closeCallback;
//alert("overlay");
var arrayPageSize = getPageSize();
var content = "";
if (document.getElementById("sbxCatFS")){
document.getElementById("sbxCatFS").style.display = "none";
}
//Assigning it to global variables used for OverLayResize
contentValue = s_content;
type =  s_type;
title= s_title;
close = s_close;
fadeBG(synchronous);
/*for testing
if (document.getElementById('overlayButton') != null){
document.getElementById('overlayButton').style.backgroundcolor = 'red';
document.getElementById('overlayButton').style.border = '1px solid red';
}
for testing*/
if (document.getElementById('player') != null){;
document.getElementById('player').style.display = 'none';
document.getElementById('player-none').style.display = 'block';
}
if (s_type == 'glossary' || s_type == 'demo'){
content = unescape(s_content); //unescape blobserver url!!!
xmlhttpPost(content);
}
if (s_type == 'os'){
//console.log("overlayStart :" + s_type);
content = unescape(s_content); //unescape blobserver url!!!
xmlhttpPost(content);
}else if (s_type == 'image'){
var thisObj = document.documentElement;
//console.log(s_type);
//ENG-6844: Changes made to display the title with special characters correctly
s_title = unescape(s_title);
content = escape(s_content); //escape blobserver image url for flash!!!
//console.log("height:" + thisObj.clientHeight + ",width:" + thisObj.clientWidth);
//console.log("height:" + thisObj.offsetHeight + ",width:" + thisObj.offsetWidth);
//document.getElementById('overlayContent').style.left = intBorder + "px";
//document.getElementById('overlayContent').style.top = document.documentElement.scrollTop + intBorder + "px";
if (window.webkit420) {
document.id('overlayContent').style.top = document.body.scrollTop + intBorder + "px";
}	// Safari 3+
// hsw		document.getElementById('overlayContent').style.top = document.body.scrollTop + intBorder + "px";
//	document.getElementById('overlayButton').style.top = document.getElementById('innerOverlayContent').style.top;
//	document.getElementById('overlayButton').style.left = document.getElementById('innerOverlayContent').style.left;
//	setWidth('overlayButton', arrayPageSize[0] - intFrame);
//	setWidth('overlayButtonImg', arrayPageSize[0] - intFrame);
var lc = Math.floor(Math.random()*100000);
var FO3 = {
movie: strPathFlashZoom,
id:"flash_zoom_",
wmode:"transparent",
menu:"false",
height:(arrayPageSize[2]-intFrame),
width:(arrayPageSize[2]-intFrame),
bgcolor:"#000000",
majorversion:"8",
build:"0",
base: strPathFlashBase,
flashvars:"img=" + content + "&r=" + ((arrayPageSize[2]-intFrame)/(arrayPageSize[3]-intFrame)) + "&title=" + s_title+"&lc=" + lc + "&close=" + s_close };
UFO.create(FO3, "innerOverlayContent");
//		document.getElementById('overlay').style.display = 'block';
// hsw          for ie:
//$('overlayButton').setStyle('top','0px');
//	document.getElementById('overlayButtonImg').style.height = "30px";		
document.id('overlayContent').setStyles({
'height':(arrayPageSize[2]-intFrame) + 'px',
'width':(arrayPageSize[2]-intFrame) + 'px',
'left': 10,
'top': getScrollTop() + intBorder  + 'px'
});
document.id('overlayButton').setStyle('top',0);
rePosOverlay;
window.addEvent('domready', function(){
fd.doDetection("img");
});
}
callBackOverlayHandler = window.setInterval(function() {
if(document.id("innerOverlayContent") != null){
var el = document.id("innerOverlayContent").getElementsByTagName("object");
var el1 = document.id("innerOverlayContent").getElementsByTagName("embed");
var el1 = document.id("innerOverlayContent").getElementsByTagName("div");
//console.log("flash obj" + el + el1);
if (el.length > 0 || el1.length > 0) {
document.id("overlay").onclick = function () {overlayEnd();};
// clear our callback
window.clearInterval(callBackOverlayHandler);
}
}
}, 100);
// 	
}
function getScrollTop(){
if(typeof pageYOffset!= 'undefined'){
//most browsers
return pageYOffset;
}
else{
var dbody = document.body; //IE 'quirks'
var ddocEle = document.documentElement; //IE with doctype
ddocEle= (ddocEle.clientHeight)? ddocEle: dbody;
return ddocEle.scrollTop;
}
}
/*--------------------------------------------------------------------------------------------------------------------*/
function overlayEnd() {
if (document.getElementById("sbxCatFS")){
document.getElementById("sbxCatFS").style.display = "inline";
}
document.id("overlay").onclick = null;
opacity('overlay', intOpacityEnd, intOpacityStart, intDuration);
document.id('overlay').setStyle('display','none');
document.id('overlayContent').empty().dispose();
contentValue = null;
type = null;
title = null;
close = null;
if (document.id('player') != null){;
document.id('player-none').setStyle('display','none');
document.id('player').setStyle('display','block');
}
if (typeof closeCallback === "function") {
closeCallback();
closeCallback = null;
}
}
/*--------------------------------------------------------------------------------------------------------------------*/
function fadeBG(synchronous) {
createOverlay();
document.getElementById("overlay").style.display = 'block';
if (synchronous) {
// when fade is called synchronously timer won't fire
changeOpac(intOpacityEnd, 'overlay');
} else {
opacity('overlay', intOpacityStart, intOpacityEnd, intDuration);
}
}
/*--------------------------------------------------------------------------------------------------------------------*/
function createOverlay(){
var arrayPageSize = getPageSize();
var overlayElement = document.id('overlay');
var overlayMainContent = document.id('overlayContent');
//create new elements
var objOverlay = new Element('div', {
id: 'overlay',
styles: {
display: 'block',
height: arrayPageSize[1] + 50,
width: '100%'
}
});
var objOverlayContent = new Element('div', {
id:'overlayContent',
html:'<div id="innerOverlayContent" style="visibility:visible;"></div>',
styles:{
top:'100px'
}
});
var objOverlayButton = new Element('div',{
id:'overlayButton',
'class':'overlayButton',
html:'<img src="/cs/ENGInE/img/blank.gif" id="overlayButtonImg" width="100" height="30">',
styles:{
top:'16px'
},
events: {
click: function(){
overlayEnd();
}
}
});
if (overlayElement == null) {
$$('body').adopt(objOverlay);
}
if (overlayMainContent == null) {
$$('body').adopt(objOverlayContent);
document.id(objOverlayContent).grab(objOverlayButton, 'top');
}
if(type == "os" && document.id("overlay")){
document.id("overlay").setStyle('background','#222');
}
}
/*--------------------------------------------------------------------------------------------------------------------*/
function getPageSize(){
var xScroll, yScroll;
if (window.innerHeight && window.scrollMaxY) {
xScroll = document.body.scrollWidth;
yScroll = window.innerHeight + window.scrollMaxY;
} else if (document.body.scrollHeight > document.body.offsetHeight){ // all but Explorer Mac
xScroll = document.body.scrollWidth;
yScroll = document.body.scrollHeight;
} else { // Explorer Mac...would also work in Explorer 6 Strict, Mozilla and Safari
xScroll = document.body.offsetWidth;
yScroll = document.body.offsetHeight;
}
var windowWidth, windowHeight;
if (self.innerHeight) {	// all except Explorer
windowWidth = self.innerWidth;
windowHeight = self.innerHeight;
} else if (document.documentElement && document.documentElement.clientHeight) { // Explorer 6 Strict Mode
windowWidth = document.documentElement.clientWidth;
windowHeight = document.documentElement.clientHeight;
} else if (document.body) { // other Explorers
windowWidth = document.body.clientWidth;
windowHeight = document.body.clientHeight;
}
// for small pages with total height less then height of the viewport
if(yScroll < windowHeight){
pageHeight = windowHeight;
} else {
pageHeight = yScroll;
}
// for small pages with total width less then width of the viewport
if(xScroll < windowWidth){
pageWidth = windowWidth;
} else {
pageWidth = xScroll;
}
//correct width in Firefox
var usrAgt = navigator.userAgent.toLowerCase();
if (usrAgt.indexOf("firefox") != -1){
pageWidth -= 17;
}
arrayPageSize = new Array(pageWidth,pageHeight,windowWidth,windowHeight);
//alert(arrayPageSize);
return arrayPageSize;
}
/*--------------------------------------------------------------------------------------------------------------------*/
function setHeight(element,h) {
document.getElementById(element).style.height = h + "px";
}
/*--------------------------------------------------------------------------------------------------------------------*/
function setWidth(element,h) {
document.getElementById(element).style.width = h + "px";
}
/*-blendtrans---------------------------------------------------------------------------------------------------------*/
function opacity(id, opacStart, opacEnd, millisec) {
//speed for each frame
var speed = Math.round(millisec / 100);
var timer = 0;
//determine the direction for the blending, if start and end are the same nothing happens
if(opacStart > opacEnd) {
for(i = opacStart; i >= opacEnd; i--) {
setTimeout("changeOpac(" + i + ",'" + id + "')",(timer * speed));
timer++;
}
//-------------------
} else if(opacStart < opacEnd) {
for(i = opacStart; i <= opacEnd; i++)
{
setTimeout("changeOpac(" + i + ",'" + id + "')",(timer * speed));
timer++;
}
}
return true;
}
//change the opacity for different browsers
function changeOpac(opacity, id) {
var object = document.getElementById(id).style;
object.opacity = (opacity / 100);
object.MozOpacity = (opacity / 100);
object.KhtmlOpacity = (opacity / 100);
object.filter = "alpha(opacity=" + opacity + ")";
}
function shiftOpacity(id, millisec) {
//if an element is invisible, make it visible, else make it ivisible
if(document.getElementById(id).style.opacity == 0) {
opacity(id, 0, 100, millisec);
} else {
opacity(id, 100, 0, millisec);
}
}
function blendimage(divid, imageid, imagefile, millisec) {
var speed = Math.round(millisec / 100);
var timer = 0;
//set the current image as background
document.getElementById(divid).style.backgroundImage = "url(" + document.getElementById(imageid).src + ")";
//make image transparent
changeOpac(0, imageid);
//make new image
document.getElementById(imageid).src = imagefile;
//fade in image
for(i = 0; i <= 100; i++) {
setTimeout("changeOpac(" + i + ",'" + imageid + "')",(timer * speed));
timer++;
}
}
function currentOpac(id, opacEnd, millisec) {
//standard opacity is 100
var currentOpac = 100;
//if the element has an opacity set, get it
if(document.getElementById(id).style.opacity < 100) {
currentOpac = document.getElementById(id).style.opacity * 100;
}
//call for the function that changes the opacity
opacity(id, currentOpac, opacEnd, millisec)
}
function triggerOverlay(s_content, s_type, s_title, s_close, height, width){
//var posY = getViewPoint()/2;
var winW = document.documentElement.offsetWidth;
var arrayPageSize = getPageSize();
var content = "";
if (document.id("sbxCatFS")){
document.id("sbxCatFS").setStyle('display','none');
}
//Assigning it to global variables used for OverLayResize
contentValue = s_content;
type =  s_type;
title= s_title;
close = s_close;
if(document.id('innerOverlayContent') == null || document.id('innerOverlayContent').get('html') == ''){
fadeBG();
if (document.id('player') != null){
document.id('player').setStyle('display','none');
document.id('player-none').setStyle('display','block');
}
if (s_type == 'glossary' || s_type == 'demo'){
content = unescape(s_content); //unescape blobserver url!!!
xmlhttpPost(content);
}else if (s_type == 'image'){
//ENG-6844: Changes made to display the title with special characters correctly
s_title = unescape(s_title);
content = escape(s_content); //escape blobserver image url for flash!!
if (window.webkit420) {
document.id('overlayContent').setStyle('top',document.body.scrollTop + intBorder + "px");
}	// Safari 3+
document.id('overlayContent').setStyles({'height':height+'px','width':width+'px'});
var lc = Math.floor(Math.random()*100000);
var FO3 = {
movie: strPathFlashZoom,
id:"flash_zoom_",
wmode:"transparent",
menu:"false",
height:height,
width:width,
//height:(arrayPageSize[2]-intFrame),
//width:(arrayPageSize[2]-intFrame),
bgcolor:"#000000",
majorversion:"8",
build:"0",
base: strPathFlashBase,
flashvars:"img=" + content + "&r=" + ((arrayPageSize[2]-intFrame)/(arrayPageSize[3]-intFrame)) + "&title=" + s_title+"&lc=" + lc + "&close=" + s_close };
UFO.create(FO3, "innerOverlayContent");
document.id('overlay').setStyle('display','block');
// hsw for ie:
document.id('overlayButtonImg').setStyle('height','30px');
rePosOverlay();
window.addEvent('domready', function(){
fd.doDetection("img");
});
} else if (s_type == 'overlay'){
s_title = unescape(s_title);
content = unescape(s_content); //unescape blobserver url!!!
if (window.webkit420) {
document.id('overlayContent').setStyle('top',document.body.scrollTop + intBorder + "px");
}	// Safari 3+
document.id('overlayContent').setStyles({'height':height+'px','width':width+'px'});
rePosOverlay();
xmlhttpPost(content);
}
callBackOverlayHandler = window.setInterval(function() {
if(document.id("innerOverlayContent") != null){
var el = document.id("innerOverlayContent").getElementsByTagName("object");
var el1 = document.id("innerOverlayContent").getElementsByTagName("embed");
var el1 = document.id("innerOverlayContent").getElementsByTagName("div");
//console.log("flash obj" + el + el1);
if (el.length > 0 || el1.length > 0) {
document.id("overlay").onclick = function () {overlayEnd();};
// clear our callback
window.clearInterval(callBackOverlayHandler);
}
}
}, 100);
}
window.addEvent('resize', function(){rePosOverlay();});
}
function rePosOverlay(){
var thisEle = document.documentElement;
if (document.id('overlayContent') != null) {
var getW = document.id('innerOverlayContent').getStyle('width');
document.id('overlayContent').position({
offset: {
'left': (thisEle.offsetWidth / 2 - getW / 2) + thisEle.scrollLeft,
'top': (thisEle.offsetHeight / 2 - thisEle.clientHeight / 2) + thisEle.scrollTop
},
ignoreScroll: false
}).setStyles({
'display': 'block',
'position': 'absolute'
});
}
}
function overlayTimer(c, triggers, overlayparams){
//console.log("counter is ::"+c);
var counter =c;
for (var j=0;j<triggers.length;j++){
if (triggers[j] != null && overlayparams[j][0] != null) {
if(triggers[j] == c){
//console.log("Triggering overlay");
triggerOverlay(overlayparams[j][0],overlayparams[j][1],overlayparams[j][2],'Close',overlayparams[j][3],overlayparams[j][4]);
}
}
}
c++;
setSessionCookie(c);
t = setTimeout(function(){overlayTimer(c,triggers,overlayparams);},1000);
}
function setSessionCookie(counter){
var host = window.location.host;
var idx1 = host.lastIndexOf(".");
if (idx1 > -1) {
var idx2 = host.substr(0, idx1).lastIndexOf(".");
if (idx2 > -1) {
if (host.substring(idx2).length < 7) {
idx2 = host.substr(0, idx2).lastIndexOf(".");
if (idx2 < 0) {
idx2 = 0;
}
}
var domain = host.substring(idx2);
//console.log("domain is ::"+domain);
//var cookieValue = "ford_engine_fullsite_cookietimer="+counter+";Domain="+ domain +";Path = /;expires=" + exp.toGMTString();
//document.cookie = cookieValue;
Cookie.write("ford_engine_fullsite_cookietimer",c,{domain:domain},{duration:0});
//console.log("cookie value in setCookie method ::"+cookie);
}
}
}
// Alternative overlay	
if (engine === undefined) {
engine = {};
}
if (engine.overlay === undefined) {
engine.overlay = {};
}
engine.overlay.hide = function (id) {
document.getElementById(id).style.display = "none";
};
// Params
// parentId - id of the element over which to center/which to grey out
// id - how to name newly created overlay element
//element - actual element to center inside created overlay frame, or URL than needs to be loaded into an element
//
engine.overlay.show = function (parentId, id, element, blurBkgrd) {
var elem = document.getElementById(id);
var parent = document.getElementById(parentId);
var overlayDim = document.getElementById(id + 'Dim');
if (blurBkgrd === true){  //create the overlay dim element.
if (!overlayDim) {
overlayDim = new Element('div',{
id: id + 'Dim',
styles: {
background:'#222',
position: 'absolute',
left: 0,
top: 0,
opacity: 0.8,
height: document.documentElement.offsetHeight,
width: '100%',
zIndex:100000
}
});
} else {
overlayDim.show();
}
$$('body').adopt(overlayDim);
}
if (elem === null) {
elem = document.createElement(id);
parent.appendChild(elem);
elem.style.position = "absolute";
elem.style.zIndex = 999999;
}
elem.style.display = "inline-block";
elem.id = id;
// Remove old nodes
if (elem.hasChildNodes()) {
while (elem.childNodes.length > 0) {
elem.removeChild(elem.firstChild);
}
}
if (typeof element === "string") {
element = new Element("div").load(element);
}
// Add new
elem.appendChild(element);
elem.zIndex = 999999;
// Determine screen width and height
var w = window.innerWidth;
var h = window.innerHeight;
if (w === undefined) {
// bloody IE
w = document.documentElement.offsetWidth;
h = document.documentElement.offsetHeight;
}
// Element's width and height
var elemW = elem.offsetWidth;
var elemH = elem.offsetHeight;
// Parent's width
var parentW = parent.offsetWidth;
// Parent's top offset
var parentTop = parent.offsetTop;
var parentLeft = parent.offsetLeft;
var p = parent.offsetParent;
while (p) {
parentTop += p.offsetTop;
parentLeft += parent.offsetLeft;
p = p.offsetParent;
}
// Scroll offset
var scrollTop = document.body.scrollTop || document.documentElement.scrollTop;
elem.style.left = ((parentW - elemW) / 2) + "px";
elem.style.top = ((h - elemH) / 2) - parentTop + scrollTop + "px";
};
/*--------------------------------------------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------------------------------------------*/
