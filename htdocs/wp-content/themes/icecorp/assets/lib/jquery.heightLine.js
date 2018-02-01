/*!--------------------------------------------------------------------------*
 *
 *  jquery.heightLine.js 1.0.0
 *
 *  MIT-style license.
 *
 *  2013 Kazuma Nishihata
 *  http://www.to-r.net
 *
 *--------------------------------------------------------------------------*/
!function(a){"object"==typeof module&&"object"==typeof module.exports?a(require("jquery"),window,document):a(jQuery,window,document)}(function(a,b,c,d){a.fn.heightLine=function(){var d,c=this,e=Math.random(),f={op:{maxWidth:1e4,minWidth:0,fontSizeCheck:!1},setOption:function(b){this.op=a.extend(this.op,b)},destroy:function(){c.css("height","")},create:function(d){var e=this,f=0,g=a(b).width();e.setOption(d),g<=e.op.maxWidth&&g>=e.op.minWidth&&c.each(function(){a(this).outerHeight()>f&&(f=a(this).outerHeight())}).each(function(){var b=f-parseInt(a(this).css("padding-top"))-parseInt(a(this).css("padding-bottom"));a(this).height(b)})},refresh:function(a){this.destroy(),this.create(a)},removeEvent:function(){a(b).off("resize."+e),c.off("destroy refresh"),clearInterval(d)}};if("string"==typeof arguments[0]&&"destroy"===arguments[0])c.trigger("destroy");else if("string"==typeof arguments[0]&&"refresh"===arguments[0])c.trigger("refresh");else if(f.create(arguments[0]),a(b).on("resize."+e,function(){f.refresh()}),c.on("destroy",function(){f.removeEvent(),f.destroy()}).on("refresh",function(){f.refresh()}),f.op.fontSizeCheck){if(a("#fontSizeChange").length<=0){a("<span id='fontSizeChange'></span>").css({width:0,height:"1em",position:"absolute",left:0,top:0}).appendTo("body")}var h=a("#fontSizeChange").height();d=setInterval(function(){h!=a("#fontSizeChange").height()&&f.refresh()},100)}return c}});