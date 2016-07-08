/*swiper*/
;function Swiper(n,t){"use strict";function e(){w=x.children,m=w.length,w.length<2&&(t.continuous=!1),f.transitions&&t.continuous&&w.length<3&&(x.appendChild(w[0].cloneNode(!0)),x.appendChild(x.children[1].cloneNode(!0)),w=x.children),p=new Array(w.length),E=n.getBoundingClientRect().width||n.offsetWidth,x.style.width=w.length*E+"px";for(var e=w.length;e--;){var i=w[e];i.style.width=E+"px",i.setAttribute("data-index",e),f.transitions&&(i.style.left=e*-E+"px",a(e,b>e?-E:e>b?E:0,0))}t.continuous&&f.transitions&&(a(s(b-1),-E,0),a(s(b+1),E,0)),f.transitions||(x.style.left=b*-E+"px"),n.style.visibility="visible"}function i(){t.continuous?r(b-1):b&&r(b-1)}function o(){t.continuous?r(b+1):b<w.length-1&&r(b+1)}function s(n){return(w.length+n%w.length)%w.length}function r(n,e){if(b!=n){if(f.transitions){var i=Math.abs(b-n)/(b-n);if(t.continuous){var o=i;i=-p[s(n)]/E,i!==o&&(n=-i*w.length+n)}for(var r=Math.abs(b-n)-1;r--;)a(s((n>b?n:b)-r-1),E*i,0);n=s(n),a(b,E*i,e||g),a(n,0,e||g),t.continuous&&a(s(n-i),-(E*i),0)}else n=s(n),c(b*-E,n*-E,e||g);b=n,h(t.callback&&t.callback(b,w[b]))}}function a(n,t,e){u(n,t,e),p[n]=t}function u(n,t,e){var i=w[n],o=i&&i.style;o&&(o.webkitTransitionDuration=o.MozTransitionDuration=o.msTransitionDuration=o.OTransitionDuration=o.transitionDuration=e+"ms",o.webkitTransform="translate("+t+"px,0)"+"translateZ(0)",o.msTransform=o.MozTransform=o.OTransform="translateX("+t+"px)")}function c(n,e,i){if(!i)return x.style.left=e+"px",void 0;var o=+new Date,s=setInterval(function(){var r=+new Date-o;return r>i?(x.style.left=e+"px",L&&d(),t.transitionEnd&&t.transitionEnd.call(event,b,w[b]),clearInterval(s),void 0):(x.style.left=(e-n)*(Math.floor(100*(r/i))/100)+n+"px",void 0)},4)}function d(){T=setTimeout(o,L)}function l(){L=0,clearTimeout(T)}var v=function(){},h=function(n){setTimeout(n||v,0)},f={addEventListener:!!window.addEventListener,touch:"ontouchstart"in window||window.DocumentTouch&&document instanceof DocumentTouch,transitions:function(n){var t=["transitionProperty","WebkitTransition","MozTransition","OTransition","msTransition"];for(var e in t)if(void 0!==n.style[t[e]])return!0;return!1}(document.createElement("swiper"))};if(n){var w,p,E,m,x=n.children[0];t=t||{};var b=parseInt(t.startSlide,10)||0,g=t.speed||300;t.continuous=void 0!==t.continuous?t.continuous:!0;var T,y,L=t.auto||0,k={},D={},M={handleEvent:function(n){switch(n.type){case"touchstart":this.start(n);break;case"touchmove":this.move(n);break;case"touchend":h(this.end(n));break;case"webkitTransitionEnd":case"msTransitionEnd":case"oTransitionEnd":case"otransitionend":case"transitionend":h(this.transitionEnd(n));break;case"resize":h(e)}t.stopPropagation&&n.stopPropagation()},start:function(n){var t=n.touches[0];k={x:t.pageX,y:t.pageY,time:+new Date},y=void 0,D={},x.addEventListener("touchmove",this,!1),x.addEventListener("touchend",this,!1)},move:function(n){if(!(n.touches.length>1||n.scale&&1!==n.scale)){t.disableScroll&&n.preventDefault();var e=n.touches[0];D={x:e.pageX-k.x,y:e.pageY-k.y},"undefined"==typeof y&&(y=!!(y||Math.abs(D.x)<Math.abs(D.y))),y||(n.preventDefault(),l(),t.continuous?(u(s(b-1),D.x+p[s(b-1)],0),u(b,D.x+p[b],0),u(s(b+1),D.x+p[s(b+1)],0)):(D.x=D.x/(!b&&D.x>0||b==w.length-1&&D.x<0?Math.abs(D.x)/E+1:1),u(b-1,D.x+p[b-1],0),u(b,D.x+p[b],0),u(b+1,D.x+p[b+1],0)))}},end:function(){var n=+new Date-k.time,e=Number(n)<250&&Math.abs(D.x)>20||Math.abs(D.x)>E/2,i=!b&&D.x>0||b==w.length-1&&D.x<0;t.continuous&&(i=!1);var o=D.x<0;y||(e&&!i?(o?(t.continuous?(a(s(b-1),-E,0),a(s(b+2),E,0)):a(b-1,-E,0),a(b,p[b]-E,g),a(s(b+1),p[s(b+1)]-E,g),b=s(b+1)):(t.continuous?(a(s(b+1),E,0),a(s(b-2),-E,0)):a(b+1,E,0),a(b,p[b]+E,g),a(s(b-1),p[s(b-1)]+E,g),b=s(b-1)),t.callback&&t.callback(b,w[b])):t.continuous?(a(s(b-1),-E,g),a(b,0,g),a(s(b+1),E,g)):(a(b-1,-E,g),a(b,0,g),a(b+1,E,g))),x.removeEventListener("touchmove",M,!1),x.removeEventListener("touchend",M,!1)},transitionEnd:function(n){parseInt(n.target.getAttribute("data-index"),10)==b&&(L&&d(),t.transitionEnd&&t.transitionEnd.call(n,b,w[b]))}};return e(),L&&d(),f.addEventListener?(f.touch&&x.addEventListener("touchstart",M,!1),f.transitions&&(x.addEventListener("webkitTransitionEnd",M,!1),x.addEventListener("msTransitionEnd",M,!1),x.addEventListener("oTransitionEnd",M,!1),x.addEventListener("otransitionend",M,!1),x.addEventListener("transitionend",M,!1)),window.addEventListener("resize",M,!1)):window.onresize=function(){e()},{setup:function(){e()},slide:function(n,t){l(),r(n,t)},prev:function(){l(),i()},next:function(){l(),o()},stop:function(){delay = options.auto > 0 ? options.auto : 0;
    clearTimeout(interval);},getPos:function(){return b},getNumSlides:function(){return m},kill:function(){l(),x.style.width="",x.style.left="";for(var n=w.length;n--;){var t=w[n];t.style.width="",t.style.left="",f.transitions&&u(n,0,0)}f.addEventListener?(x.removeEventListener("touchstart",M,!1),x.removeEventListener("webkitTransitionEnd",M,!1),x.removeEventListener("msTransitionEnd",M,!1),x.removeEventListener("oTransitionEnd",M,!1),x.removeEventListener("otransitionend",M,!1),x.removeEventListener("transitionend",M,!1),window.removeEventListener("resize",M,!1)):window.onresize=null}}}}(window.jQuery||window.Zepto)&&function(n){n.fn.Swiper=function(t){return this.each(function(){n(this).data("Swiper",new Swipe(n(this)[0],t))})}}(window.jQuery||window.Zepto);
/*微信相关*/
$(function () {
//tab
 $(".weui_tab .weui_navbar_item").click(function(){
        $(this).addClass("tab-green").siblings().removeClass('tab-green');
        });
 $(".weui_tab_red .weui_navbar_item").click(function(){
        $(this).addClass("tab-red").siblings().removeClass('tab-red');
        });
 $(".weui_tab_blue .weui_navbar_item").click(function(){
        $(this).addClass("tab-blue").siblings().removeClass('tab-blue');
        }); 

 $('#search_input').focus(function(){//获得焦点
 var $weuiSearchBar = $('#search_bar');
$weuiSearchBar.addClass('weui_search_focusing');
$('#search-fixed').addClass('search-fixed');
 });
 $('#search_input').blur(function(){//失去焦点
  var $weuiSearchBar = $('#search_bar');
                    $weuiSearchBar.removeClass('weui_search_focusing');
                    $('#search-fixed').removeClass('search-fixed');
                    if($(this).val()){
                        $('#search_text').hide();
                    }else{
                        $('#search_text').show();
                    }
 });
  $('#search_input').focus(function(){
 var $searchShow = $("#search_show");
                    if($(this).val()){
                        $searchShow.show();
                    }else{
                        $searchShow.hide();
                    }
 }); 
   $('#search_cancel').tap(function(){
   $("#search_show").hide();
                    $('#search_input').val('');
 }); 
  $('#search_clear').tap(function(){
$("#search_show").hide();
                    $('#search_input').val('');
 });  
});

/***select**/
+function(a){"use strict";a.Template7=a.t7=function(){function a(a){return"[object Array]"===Object.prototype.toString.apply(a)}function c(a){return"function"==typeof a}function e(a){var d,e,f,g,h,i,j,k,b=a.replace(/[{}#}]/g,"").split(" "),c=[];for(e=0;e<b.length;e++)if(g=b[e],0===e)c.push(g);else if(0===g.indexOf('"'))if(2===g.match(/"/g).length)c.push(g);else{for(d=0,f=e+1;f<b.length;f++)if(g+=" "+b[f],b[f].indexOf('"')>=0){d=f,c.push(g);break}d&&(e=d)}else if(g.indexOf("=")>0){if(h=g.split("="),i=h[0],j=h[1],2!==j.match(/"/g).length){for(d=0,f=e+1;f<b.length;f++)if(j+=" "+b[f],b[f].indexOf('"')>=0){d=f;break}d&&(e=d)}k=[i,j.replace(/"/g,"")],c.push(k)}else c.push(g);return c}function f(b){var d,f,h,i,j,k,l,m,n,p,q,r,s,t,u,w,c=[];if(!b)return[];for(h=b.split(/({{[^{^}]*}})/),d=0;d<h.length;d++)if(i=h[d],""!==i)if(i.indexOf("{{")<0)c.push({type:"plain",content:i});else{if(i.indexOf("{/")>=0)continue;if(i.indexOf("{#")<0&&i.indexOf(" ")<0&&i.indexOf("else")<0){c.push({type:"variable",contextName:i.replace(/[{}]/g,"")});continue}for(j=e(i),k=j[0],l=[],m={},f=1;f<j.length;f++)n=j[f],a(n)?m[n[0]]="false"===n[1]?!1:n[1]:l.push(n);if(i.indexOf("{#")>=0){for(p="",q="",r=0,t=!1,u=!1,w=0,f=d+1;f<h.length;f++)if(h[f].indexOf("{{#")>=0&&w++,h[f].indexOf("{{/")>=0&&w--,h[f].indexOf("{{#"+k)>=0)p+=h[f],u&&(q+=h[f]),r++;else if(h[f].indexOf("{{/"+k)>=0){if(!(r>0)){s=f,t=!0;break}r--,p+=h[f],u&&(q+=h[f])}else h[f].indexOf("else")>=0&&0===w?u=!0:(u||(p+=h[f]),u&&(q+=h[f]));t&&(s&&(d=s),c.push({type:"helper",helperName:k,contextName:l,content:p,inverseContent:q,hash:m}))}else i.indexOf(" ")>0&&c.push({type:"helper",helperName:k,contextName:l,hash:m})}return c}var h,g=function(a){function c(a,b){return a.content?h(a.content,b):function(){return""}}function d(a,b){return a.inverseContent?h(a.inverseContent,b):function(){return""}}function e(a,b){var c,d,g,h,i,e=0;for(0===a.indexOf("../")?(e=a.split("../").length-1,g=b.split("_")[1]-e,b="ctx_"+(g>=1?g:1),d=a.split("../")[e].split(".")):0===a.indexOf("@global")?(b="$.Template7.global",d=a.split("@global.")[1].split(".")):0===a.indexOf("@root")?(b="ctx_1",d=a.split("@root.")[1].split(".")):d=a.split("."),c=b,h=0;h<d.length;h++)i=d[h],0===i.indexOf("@")?h>0?c+="[(data && data."+i.replace("@","")+")]":c="(data && data."+a.replace("@","")+")":isFinite(i)?c+="["+i+"]":0===i.indexOf("this")?c=i.replace("this",b):c+="."+i;return c}function g(a,b){var d,c=[];for(d=0;d<a.length;d++)0===a[d].indexOf('"')?c.push(a[d]):c.push(e(a[d],b));return c.join(", ")}function h(a,h){var i,j,k,l,o,p,q;if(h=h||1,a=a||b.template,"string"!=typeof a)throw new Error("Template7: Template must be a string");if(i=f(a),0===i.length)return function(){return""};for(j="ctx_"+h,k="(function ("+j+", data) {\n",1===h&&(k+="function isArray(arr){return Object.prototype.toString.apply(arr) === '[object Array]';}\n",k+="function isFunction(func){return (typeof func === 'function');}\n",k+='function c(val, ctx) {if (typeof val !== "undefined") {if (isFunction(val)) {return val.call(ctx);} else return val;} else return "";}\n'),k+="var r = '';\n",l=0;l<i.length;l++)if(o=i[l],"plain"!==o.type){if("variable"===o.type&&(p=e(o.contextName,j),k+="r += c("+p+", "+j+");"),"helper"===o.type)if(o.helperName in b.helpers)q=g(o.contextName,j),k+="r += ($.Template7.helpers."+o.helperName+").call("+j+", "+(q&&q+", ")+"{hash:"+JSON.stringify(o.hash)+", data: data || {}, fn: "+c(o,h+1)+", inverse: "+d(o,h+1)+", root: ctx_1});";else{if(o.contextName.length>0)throw new Error('Template7: Missing helper: "'+o.helperName+'"');p=e(o.helperName,j),k+="if ("+p+") {",k+="if (isArray("+p+")) {",k+="r += ($.Template7.helpers.each).call("+j+", "+p+", {hash:"+JSON.stringify(o.hash)+", data: data || {}, fn: "+c(o,h+1)+", inverse: "+d(o,h+1)+", root: ctx_1});",k+="}else {",k+="r += ($.Template7.helpers.with).call("+j+", "+p+", {hash:"+JSON.stringify(o.hash)+", data: data || {}, fn: "+c(o,h+1)+", inverse: "+d(o,h+1)+", root: ctx_1});",k+="}}"}}else k+="r +='"+o.content.replace(/\r/g,"\\r").replace(/\n/g,"\\n").replace(/'/g,"\\'")+"';";return k+="\nreturn r;})",eval.call(window,k)}var b=this;b.template=a,b.compile=function(a){return b.compiled||(b.compiled=h(a)),b.compiled}};return g.prototype={options:{},helpers:{"if":function(a,b){return c(a)&&(a=a.call(this)),a?b.fn(this,b.data):b.inverse(this,b.data)},unless:function(a,b){return c(a)&&(a=a.call(this)),a?b.inverse(this,b.data):b.fn(this,b.data)},each:function(b,d){var g,e="",f=0;if(c(b)&&(b=b.call(this)),a(b)){for(d.hash.reverse&&(b=b.reverse()),f=0;f<b.length;f++)e+=d.fn(b[f],{first:0===f,last:f===b.length-1,index:f});d.hash.reverse&&(b=b.reverse())}else for(g in b)f++,e+=d.fn(b[g],{key:g});return f>0?e:d.inverse(this)},"with":function(a,b){return c(a)&&(a=a.call(this)),b.fn(a)},join:function(a,b){return c(a)&&(a=a.call(this)),a.join(b.hash.delimiter||b.hash.delimeter)},js:function(a){var c;return c=a.indexOf("return")>=0?"(function(){"+a+"})":"(function(){return ("+a+")})",eval.call(this,c).call(this)},js_compare:function(a,b){var c,d;return c=a.indexOf("return")>=0?"(function(){"+a+"})":"(function(){return ("+a+")})",d=eval.call(this,c).call(this),d?b.fn(this,b.data):b.inverse(this,b.data)}}},h=function(a,b){var c,d;return 2===arguments.length?(c=new g(a),d=c.compile()(b),c=null,d):new g(a)},h.registerHelper=function(a,b){g.prototype.helpers[a]=b},h.unregisterHelper=function(a){g.prototype.helpers[a]=void 0,delete g.prototype.helpers[a]},h.compile=function(a,b){var c=new g(a,b);return c.compile()},h.options=g.prototype.options,h.helpers=g.prototype.helpers,h}()}($);+function(a){"use strict";a.openPopup=function(b){a.closePopup(),b=a(b),b.addClass("weui-popup-container-visible");var d=b.find(".weui-popup-modal");d.width(),d.addClass("weui-popup-modal-visible")},a.closePopup=function(b,c){a(".weui-popup-modal-visible").removeClass("weui-popup-modal-visible").transitionEnd(function(){a(this).parent().removeClass("weui-popup-container-visible"),c&&a(this).parent().remove()}).trigger("close")},a(document).on("click",".close-popup",function(){a.closePopup()}),a(document).on("click",".open-popup",function(){a(a(this).data("target")).popup()}),a.fn.popup=function(){return this.each(function(){a.openPopup(this)})}}($);+function(a){"use strict";var b,c=function(b,c){var e,d=this;this.config=c,this.$input=a(b),e=a.t7.compile("<div class='weui-picker-modal weui-select-modal'>"+c.toolbarTemplate+(c.multi?c.checkboxTemplate:c.radioTemplate)+"</div>"),this.$input.prop("readOnly",!0),this.$input.click(function(){d.parseInitValue();var b=d.dialog=a.openPicker(e({items:c.items,title:c.title,closeText:c.closeText}));b.on("change",function(){var f=b.find("input:checked"),g=f.map(function(){return a(this).val()}),h=f.map(function(){return a(this).data("title")});d.updateInputValue(g,h),c.autoClose&&!c.multi&&a.closePicker()})}),a(document).on("click",function(){})};c.prototype.updateInputValue=function(a,b){var c,d,e;this.config.multi?(c=a.join(this.config.split),d=b.join(this.config.split)):(c=a[0],d=b[0]),this.$input.val(d).data("values",c),this.$input.attr("value",d).attr("data-values",c),e={values:c,titles:d},this.$input.trigger("change",e),this.config.onChange&&this.config.onChange.call(this,e)},c.prototype.parseInitValue=function(){var c,d,e,a=this.$input.val(),b=this.config.items;if(void 0!==a&&null!=a&&""!==a)for(c=this.config.multi?a.split(this.config.split):[a],d=0;d<b.length;d++)for(b[d].checked=!1,e=0;e<c.length;e++)b[d].title===c[e]&&(b[d].checked=!0)},a.fn.select=function(d){var e=a.extend({},b,d);if(e.items&&e.items.length)return e.items=e.items.map(function(a){return"string"==typeof a?{title:a,value:a}:a}),this.each(function(){var d,b=a(this);return b.data("weui-select")||b.data("weui-select",new c(this,e)),d=b.data("weui-select")})},b=a.fn.select.prototype.defaults={items:[],title:"请选择",multi:!1,closeText:"关闭",autoClose:!0,onChange:void 0,split:",",toolbarTemplate:'<div class="toolbar">      <div class="toolbar-inner">      <a href="javascript:;" class="picker-button close-picker">{{closeText}}</a>      <h1 class="title">{{title}}</h1>      </div>      </div>',radioTemplate:'<div class="weui_cells weui_cells_radio">        {{#items}}        <label class="weui_cell weui_check_label" for="weui-select-id-{{this.title}}">          <div class="weui_cell_bd weui_cell_primary">            <p>{{this.title}}</p>          </div>          <div class="weui_cell_ft">            <input type="radio" class="weui_check" name="weui-select" id="weui-select-id-{{this.title}}" value="{{this.value}}" {{#if this.checked}}checked="checked"{{/if}} data-title="{{this.title}}">            <span class="weui_icon_checked"></span>          </div>        </label>        {{/items}}      </div>',checkboxTemplate:'<div class="weui_cells weui_cells_checkbox">        {{#items}}        <label class="weui_cell weui_check_label" for="weui-select-id-{{this.title}}">          <div class="weui_cell_bd weui_cell_primary">            <p>{{this.title}}</p>          </div>          <div class="weui_cell_ft">            <input type="checkbox" class="weui_check" name="weui-select" id="weui-select-id-{{this.title}}" value="{{this.value}}" {{#if this.checked}}checked="checked"{{/if}} data-title="{{this.title}}" >            <span class="weui_icon_checked"></span>          </div>        </label>        {{/items}}      </div>'}}($);