!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):"object"==typeof exports?module.exports=a(require("jquery")):a(jQuery)}(function(a){function b(b,c){var d=a('<div class="minicolors" />'),e=a.minicolors.defaults,f=b.attr("data-format"),g=b.attr("data-keywords"),i=b.attr("data-opacity");b.data("minicolors-initialized")||(c=a.extend(!0,{},e,c),d.addClass("minicolors-theme-"+c.theme).toggleClass("minicolors-with-opacity",c.opacity).toggleClass("minicolors-no-data-uris",c.dataUris!==!0),void 0!==c.position&&a.each(c.position.split(" "),function(){d.addClass("minicolors-position-"+this)}),"rgb"===f?$input_size=i?"25":"20":$input_size=g?"11":"7",b.addClass("minicolors-input").data("minicolors-initialized",!1).data("minicolors-settings",c).prop("size",$input_size).wrap(d).after('<div class="minicolors-panel minicolors-slider-'+c.control+'"><div class="minicolors-slider minicolors-sprite"><div class="minicolors-picker"></div></div><div class="minicolors-opacity-slider minicolors-sprite"><div class="minicolors-picker"></div></div><div class="minicolors-grid minicolors-sprite"><div class="minicolors-grid-inner"></div><div class="minicolors-picker"><div></div></div></div></div>'),c.inline||(b.after('<span class="minicolors-swatch minicolors-sprite"><span class="minicolors-swatch-color"></span></span>'),b.next(".minicolors-swatch").on("click",function(a){a.preventDefault(),b.focus()})),b.parent().find(".minicolors-panel").on("selectstart",function(){return!1}).end(),c.inline&&b.parent().addClass("minicolors-inline"),h(b,!1),b.data("minicolors-initialized",!0))}function c(a){var b=a.parent();a.removeData("minicolors-initialized").removeData("minicolors-settings").removeProp("size").removeClass("minicolors-input"),b.before(a).remove()}function d(a){var b=a.parent(),c=b.find(".minicolors-panel"),d=a.data("minicolors-settings");!a.data("minicolors-initialized")||a.prop("disabled")||b.hasClass("minicolors-inline")||b.hasClass("minicolors-focus")||(e(),b.addClass("minicolors-focus"),c.stop(!0,!0).fadeIn(d.showSpeed,function(){d.show&&d.show.call(a.get(0))}))}function e(){a(".minicolors-focus").each(function(){var b=a(this),c=b.find(".minicolors-input"),d=b.find(".minicolors-panel"),e=c.data("minicolors-settings");d.fadeOut(e.hideSpeed,function(){e.hide&&e.hide.call(c.get(0)),b.removeClass("minicolors-focus")})})}function f(a,b,c){var d,e,f,h,i=a.parents(".minicolors").find(".minicolors-input"),j=i.data("minicolors-settings"),k=a.find("[class$=-picker]"),l=a.offset().left,m=a.offset().top,n=Math.round(b.pageX-l),o=Math.round(b.pageY-m),p=c?j.animationSpeed:0;b.originalEvent.changedTouches&&(n=b.originalEvent.changedTouches[0].pageX-l,o=b.originalEvent.changedTouches[0].pageY-m),0>n&&(n=0),0>o&&(o=0),n>a.width()&&(n=a.width()),o>a.height()&&(o=a.height()),a.parent().is(".minicolors-slider-wheel")&&k.parent().is(".minicolors-grid")&&(d=75-n,e=75-o,f=Math.sqrt(d*d+e*e),h=Math.atan2(e,d),0>h&&(h+=2*Math.PI),f>75&&(f=75,n=75-75*Math.cos(h),o=75-75*Math.sin(h)),n=Math.round(n),o=Math.round(o)),a.is(".minicolors-grid")?k.stop(!0).animate({top:o+"px",left:n+"px"},p,j.animationEasing,function(){g(i,a)}):k.stop(!0).animate({top:o+"px"},p,j.animationEasing,function(){g(i,a)})}function g(a,b){function c(a,b){var c,d;return a.length&&b?(c=a.offset().left,d=a.offset().top,{x:c-b.offset().left+a.outerWidth()/2,y:d-b.offset().top+a.outerHeight()/2}):null}var d,e,f,g,h,j,k,m=a.val(),n=a.attr("data-format"),o=(a.attr("data-keywords"),a.attr("data-opacity")),q=a.parent(),r=a.data("minicolors-settings"),s=q.find(".minicolors-swatch"),t=q.find(".minicolors-grid"),u=q.find(".minicolors-slider"),w=q.find(".minicolors-opacity-slider"),x=t.find("[class$=-picker]"),z=u.find("[class$=-picker]"),A=w.find("[class$=-picker]"),B=c(x,t),C=c(z,u),D=c(A,w);if(b.is(".minicolors-grid, .minicolors-slider, .minicolors-opacity-slider")){switch(r.control){case"wheel":g=t.width()/2-B.x,h=t.height()/2-B.y,j=Math.sqrt(g*g+h*h),k=Math.atan2(h,g),0>k&&(k+=2*Math.PI),j>75&&(j=75,B.x=69-75*Math.cos(k),B.y=69-75*Math.sin(k)),e=p(j/.75,0,100),d=p(180*k/Math.PI,0,360),f=p(100-Math.floor(C.y*(100/u.height())),0,100),m=v({h:d,s:e,b:f}),u.css("backgroundColor",v({h:d,s:e,b:100}));break;case"saturation":d=p(parseInt(B.x*(360/t.width()),10),0,360),e=p(100-Math.floor(C.y*(100/u.height())),0,100),f=p(100-Math.floor(B.y*(100/t.height())),0,100),m=v({h:d,s:e,b:f}),u.css("backgroundColor",v({h:d,s:100,b:f})),q.find(".minicolors-grid-inner").css("opacity",e/100);break;case"brightness":d=p(parseInt(B.x*(360/t.width()),10),0,360),e=p(100-Math.floor(B.y*(100/t.height())),0,100),f=p(100-Math.floor(C.y*(100/u.height())),0,100),m=v({h:d,s:e,b:f}),u.css("backgroundColor",v({h:d,s:e,b:100})),q.find(".minicolors-grid-inner").css("opacity",1-f/100);break;default:d=p(360-parseInt(C.y*(360/u.height()),10),0,360),e=p(Math.floor(B.x*(100/t.width())),0,100),f=p(100-Math.floor(B.y*(100/t.height())),0,100),m=v({h:d,s:e,b:f}),t.css("backgroundColor",v({h:d,s:100,b:100}))}if(o=r.opacity?parseFloat(1-D.y/w.height()).toFixed(2):1,r.opacity&&a.attr("data-opacity",o),"rgb"===n){var E=y(m),o=""===a.attr("data-opacity")?1:p(parseFloat(a.attr("data-opacity")).toFixed(2),0,1);(isNaN(o)||!r.opacity)&&(o=1),a.minicolors("rgbObject").a<=1&&E&&r.opacity?value="rgba("+E.r+", "+E.g+", "+E.b+", "+parseFloat(o)+")":value="rgb("+E.r+", "+E.g+", "+E.b+")"}else value=l(m,r.letterCase);a.val(value)}s.find("span").css({backgroundColor:m,opacity:o}),i(a,value,o)}function h(b,c){var d,e,f,g,h,j,k,s=(b.attr("data-format"),b.attr("data-keywords")),u=b.parent(),x=b.data("minicolors-settings"),y=u.find(".minicolors-swatch"),z=u.find(".minicolors-grid"),A=u.find(".minicolors-slider"),B=u.find(".minicolors-opacity-slider"),C=z.find("[class$=-picker]"),D=A.find("[class$=-picker]"),E=B.find("[class$=-picker]");switch(q(b.val())?(d=t(b.val()),alpha=p(parseFloat(r(b.val())).toFixed(2),0,1),alpha&&b.attr("data-opacity",alpha)):d=l(m(b.val(),!0),x.letterCase),d||(d=l(o(x.defaultValue,!0),x.letterCase)),e=w(d),s=s?a.map(s.split(","),function(b){return a.trim(b.toLowerCase())}):[],""!==b.val()&&a.inArray(b.val().toLowerCase(),s)>-1?value=l(b.val()):value=q(b.val())?n(b.val()):d,c||b.val(value),x.opacity&&(f=""===b.attr("data-opacity")?1:p(parseFloat(b.attr("data-opacity")).toFixed(2),0,1),isNaN(f)&&(f=1),b.attr("data-opacity",f),y.find("span").css("opacity",f),h=p(B.height()-B.height()*f,0,B.height()),E.css("top",h+"px")),"transparent"===b.val().toLowerCase()&&y.find("span").css("opacity",0),y.find("span").css("backgroundColor",d),x.control){case"wheel":j=p(Math.ceil(.75*e.s),0,z.height()/2),k=e.h*Math.PI/180,g=p(75-Math.cos(k)*j,0,z.width()),h=p(75-Math.sin(k)*j,0,z.height()),C.css({top:h+"px",left:g+"px"}),h=150-e.b/(100/z.height()),""===d&&(h=0),D.css("top",h+"px"),A.css("backgroundColor",v({h:e.h,s:e.s,b:100}));break;case"saturation":g=p(5*e.h/12,0,150),h=p(z.height()-Math.ceil(e.b/(100/z.height())),0,z.height()),C.css({top:h+"px",left:g+"px"}),h=p(A.height()-e.s*(A.height()/100),0,A.height()),D.css("top",h+"px"),A.css("backgroundColor",v({h:e.h,s:100,b:e.b})),u.find(".minicolors-grid-inner").css("opacity",e.s/100);break;case"brightness":g=p(5*e.h/12,0,150),h=p(z.height()-Math.ceil(e.s/(100/z.height())),0,z.height()),C.css({top:h+"px",left:g+"px"}),h=p(A.height()-e.b*(A.height()/100),0,A.height()),D.css("top",h+"px"),A.css("backgroundColor",v({h:e.h,s:e.s,b:100})),u.find(".minicolors-grid-inner").css("opacity",1-e.b/100);break;default:g=p(Math.ceil(e.s/(100/z.width())),0,z.width()),h=p(z.height()-Math.ceil(e.b/(100/z.height())),0,z.height()),C.css({top:h+"px",left:g+"px"}),h=p(A.height()-e.h/(360/A.height()),0,A.height()),D.css("top",h+"px"),z.css("backgroundColor",v({h:e.h,s:100,b:100}))}b.data("minicolors-initialized")&&i(b,value,f)}function i(a,b,c){var d=a.data("minicolors-settings"),e=a.data("minicolors-lastChange");e&&e.value===b&&e.opacity===c||(a.data("minicolors-lastChange",{value:b,opacity:c}),d.change&&(d.changeDelay?(clearTimeout(a.data("minicolors-changeTimeout")),a.data("minicolors-changeTimeout",setTimeout(function(){d.change.call(a.get(0),b,c)},d.changeDelay))):d.change.call(a.get(0),b,c)),a.trigger("change").trigger("input"))}function j(b){var c=m(a(b).val(),!0),d=y(c),e=a(b).attr("data-opacity");return d?(void 0!==e&&a.extend(d,{a:parseFloat(e)}),d):null}function k(b,c){var d=m(a(b).val(),!0),e=y(d),f=a(b).attr("data-opacity");return e?(void 0===f&&(f=1),c?"rgba("+e.r+", "+e.g+", "+e.b+", "+parseFloat(f)+")":"rgb("+e.r+", "+e.g+", "+e.b+")"):null}function l(a,b){return"uppercase"===b?a.toUpperCase():a.toLowerCase()}function m(a,b){return a=a.replace(/^#/g,""),a.match(/^[A-F0-9]{3,6}/gi)?3!==a.length&&6!==a.length?"":(3===a.length&&b&&(a=a[0]+a[0]+a[1]+a[1]+a[2]+a[2]),"#"+a):""}function n(a,b){var c=a.replace(/[^\d,.]/g,""),d=c.split(",");return d[0]=p(parseInt(d[0],10),0,255),d[1]=p(parseInt(d[1],10),0,255),d[2]=p(parseInt(d[2],10),0,255),d[3]&&(d[3]=p(parseFloat(d[3],10),0,1)),b?{r:d[0],g:d[1],b:d[2],a:d[3]?d[3]:null}:"undefined"!=typeof d[3]&&d[3]<=1?"rgba("+d[0]+", "+d[1]+", "+d[2]+", "+d[3]+")":"rgb("+d[0]+", "+d[1]+", "+d[2]+")"}function o(a,b){return q(a)?n(a):m(a,b)}function p(a,b,c){return b>a&&(a=b),a>c&&(a=c),a}function q(a){return rgb=a.match(/^rgba?[\s+]?\([\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?/i),rgb&&4===rgb.length?!0:!1}function r(a){return a=a.match(/^rgba?[\s+]?\([\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?,[\s+]?(\d+(\.\d{1,2})?|\.\d{1,2})[\s+]?/i),a&&6===a.length?a[4]:"1"}function s(a){var b={},c=Math.round(a.h),d=Math.round(255*a.s/100),e=Math.round(255*a.b/100);if(0===d)b.r=b.g=b.b=e;else{var f=e,g=(255-d)*e/255,h=(f-g)*(c%60)/60;360===c&&(c=0),60>c?(b.r=f,b.b=g,b.g=g+h):120>c?(b.g=f,b.b=g,b.r=f-h):180>c?(b.g=f,b.r=g,b.b=g+h):240>c?(b.b=f,b.r=g,b.g=f-h):300>c?(b.b=f,b.g=g,b.r=g+h):360>c?(b.r=f,b.g=g,b.b=f-h):(b.r=0,b.g=0,b.b=0)}return{r:Math.round(b.r),g:Math.round(b.g),b:Math.round(b.b)}}function t(a){return a=a.match(/^rgba?[\s+]?\([\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?/i),a&&4===a.length?"#"+("0"+parseInt(a[1],10).toString(16)).slice(-2)+("0"+parseInt(a[2],10).toString(16)).slice(-2)+("0"+parseInt(a[3],10).toString(16)).slice(-2):""}function u(b){var c=[b.r.toString(16),b.g.toString(16),b.b.toString(16)];return a.each(c,function(a,b){1===b.length&&(c[a]="0"+b)}),"#"+c.join("")}function v(a){return u(s(a))}function w(a){var b=x(y(a));return 0===b.s&&(b.h=360),b}function x(a){var b={h:0,s:0,b:0},c=Math.min(a.r,a.g,a.b),d=Math.max(a.r,a.g,a.b),e=d-c;return b.b=d,b.s=0!==d?255*e/d:0,0!==b.s?a.r===d?b.h=(a.g-a.b)/e:a.g===d?b.h=2+(a.b-a.r)/e:b.h=4+(a.r-a.g)/e:b.h=-1,b.h*=60,b.h<0&&(b.h+=360),b.s*=100/255,b.b*=100/255,b}function y(a){return a=parseInt(a.indexOf("#")>-1?a.substring(1):a,16),{r:a>>16,g:(65280&a)>>8,b:255&a}}a.minicolors={defaults:{animationSpeed:50,animationEasing:"swing",change:null,changeDelay:0,control:"hue",dataUris:!0,defaultValue:"",format:"hex",hide:null,hideSpeed:100,inline:!1,keywords:"",letterCase:"lowercase",opacity:!1,position:"bottom left",show:null,showSpeed:100,theme:"default"}},a.extend(a.fn,{minicolors:function(f,g){switch(f){case"destroy":return a(this).each(function(){c(a(this))}),a(this);case"hide":return e(),a(this);case"opacity":return void 0===g?a(this).attr("data-opacity"):(a(this).each(function(){h(a(this).attr("data-opacity",g))}),a(this));case"rgbObject":return j(a(this),"rgbaObject"===f);case"rgbString":case"rgbaString":return k(a(this),"rgbaString"===f);case"settings":return void 0===g?a(this).data("minicolors-settings"):(a(this).each(function(){var b=a(this).data("minicolors-settings")||{};c(a(this)),a(this).minicolors(a.extend(!0,b,g))}),a(this));case"show":return d(a(this).eq(0)),a(this);case"value":return void 0===g?a(this).val():(a(this).each(function(){"object"==typeof g?(g.opacity&&a(this).attr("data-opacity",p(g.opacity,0,1)),g.color&&a(this).val(g.color)):a(this).val(g),h(a(this))}),a(this));default:return"create"!==f&&(g=f),a(this).each(function(){b(a(this),g)}),a(this)}}}),a(document).on("mousedown.minicolors touchstart.minicolors",function(b){a(b.target).parents().add(b.target).hasClass("minicolors")||e()}).on("mousedown.minicolors touchstart.minicolors",".minicolors-grid, .minicolors-slider, .minicolors-opacity-slider",function(b){var c=a(this);b.preventDefault(),a(document).data("minicolors-target",c),f(c,b,!0)}).on("mousemove.minicolors touchmove.minicolors",function(b){var c=a(document).data("minicolors-target");c&&f(c,b)}).on("mouseup.minicolors touchend.minicolors",function(){a(this).removeData("minicolors-target")}).on("mousedown.minicolors touchstart.minicolors",".minicolors-swatch",function(b){var c=a(this).parent().find(".minicolors-input");b.preventDefault(),d(c)}).on("focus.minicolors",".minicolors-input",function(){var b=a(this);b.data("minicolors-initialized")&&d(b)}).on("blur.minicolors",".minicolors-input",function(){var b,c,d,e=a(this),f=e.attr("data-keywords"),g=e.data("minicolors-settings");e.data("minicolors-initialized")&&(f=f?a.map(f.split(","),function(b){return a.trim(b.toLowerCase())}):[],""!==e.val()&&a.inArray(e.val().toLowerCase(),f)>-1?value=e.val():(q(e.val())?c=n(e.val(),!0):(b=m(e.val(),!0),c=b?y(b):null),null===c?value=g.defaultValue:"rgb"===g.format?value=n(g.opacity?"rgba("+c.r+","+c.g+","+c.b+","+e.attr("data-opacity")+")":"rgb("+c.r+","+c.g+","+c.b+")"):value=u(c)),d=g.opacity?e.attr("data-opacity"):1,"transparent"===value.toLowerCase()&&(d=0),e.closest(".minicolors").find(".minicolors-swatch > span").css("opacity",d),e.val(value),""===e.val()&&e.val(o(g.defaultValue,!0)),e.val(l(e.val(),g.letterCase)))}).on("keydown.minicolors",".minicolors-input",function(b){var c=a(this);if(c.data("minicolors-initialized"))switch(b.keyCode){case 9:e();break;case 13:case 27:e(),c.blur()}}).on("keyup.minicolors",".minicolors-input",function(){var b=a(this);b.data("minicolors-initialized")&&h(b,!0)}).on("paste.minicolors",".minicolors-input",function(){var b=a(this);b.data("minicolors-initialized")&&setTimeout(function(){h(b,!0)},1)})});