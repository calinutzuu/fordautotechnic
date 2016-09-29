
!function(){var root=this;var DefaultConfigModel=function(data){this.attributes={};this.init(data);};DefaultConfigModel.prototype=new root.Mediator();DefaultConfigModel.prototype.constructor=DefaultConfigModel;DefaultConfigModel.prototype.init=function(data){this.baseData=data;this.set('bodystyles',this.extractData(data,'bodystyles'));this.set('interiorImages',this.extractData(data,'interiorImages'));this.set('exteriorImages',this.extractData(data,'exteriorImages'));this.setColors(0);this.set('idf',this.extractData(data,'idf'));};DefaultConfigModel.prototype.extractData=function(data,key,outKey){if(!data)
return null;var out={};if(outKey){out[outKey]=key?data[key]:data;}
else{out=key?data[key]:data;}
return out;};DefaultConfigModel.prototype.indexIt=function(data){for(var i=0;i<data.length;i++){data[i].idx=(function(in_i){return in_i;})(i);}
return data;};DefaultConfigModel.prototype.setColors=function(index){var indx=index;if(indx===(undefined||'null'||null))return;this.set('colors',this.get('bodystyles').options[index].availableColors);};DefaultConfigModel.prototype.get=function(key){return this.attributes[key];};DefaultConfigModel.prototype.set=function(key,data){if(!data)
return;if(data.options)
this.indexIt(data.options);this.attributes[key]=data;this.notify('change:'+key,data);};root.SelectorDefaultConfigModel=function(data){return new DefaultConfigModel(data);};}.call(EP2);
