tinymce.PluginManager.add("preview",function(e){var t=e.settings,n=!tinymce.Env.ie;e.addCommand("mcePreview",function(){e.windowManager.open({title:"Preview",width:parseInt(e.getParam("plugin_preview_width","650"),10),height:parseInt(e.getParam("plugin_preview_height","500"),10),html:'<iframe src="javascript:\'\'" frameborder="0"'+(n?' sandbox="allow-scripts"':"")+"></iframe>",buttons:{text:"Close",onclick:function(){this.parent().parent().close()}},onPostRender:function(){var r,i="";i+='<base href="'+e.documentBaseURI.getURI()+'">',tinymce.each(e.contentCSS,function(t){i+='<link type="text/css" rel="stylesheet" href="'+e.documentBaseURI.toAbsolute(t)+'">'});var o=t.body_id||"tinymce";-1!=o.indexOf("=")&&(o=e.getParam("body_id","","hash"),o=o[e.id]||o);var a=t.body_class||"";-1!=a.indexOf("=")&&(a=e.getParam("body_class","","hash"),a=a[e.id]||"");var s=e.settings.directionality?' dir="'+e.settings.directionality+'"':"";if(r="<!DOCTYPE html><html><head>"+i+'</head><body id="'+o+'" class="mce-content-body '+a+'"'+s+">"+e.getContent()+"</body></html>",n)this.getEl("body").firstChild.src="data:text/html;charset=utf-8,"+encodeURIComponent(r);else{var l=this.getEl("body").firstChild.contentWindow.document;l.open(),l.write(r),l.close()}}})}),e.addButton("preview",{title:"Preview",cmd:"mcePreview"}),e.addMenuItem("preview",{text:"Preview",cmd:"mcePreview",context:"view"})});