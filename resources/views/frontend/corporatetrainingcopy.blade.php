<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edifycons</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Edifycons</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <script type="text/javascript">
        (window.NREUM||(NREUM={})).loader_config={xpid:"UgYHVF5UGwIDUVZTAgIH"};window.NREUM||(NREUM={}),__nr_require=function(t,n,e){function r(e){if(!n[e]){var o=n[e]={exports:{}};t[e][0].call(o.exports,function(n){var o=t[e][1][n];return r(o||n)},o,o.exports)}return n[e].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<e.length;o++)r(e[o]);return r}({1:[function(t,n,e){function r(t){try{s.console&&console.log(t)}catch(n){}}var o,i=t("ee"),a=t(18),s={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(s.console=!0,o.indexOf("dev")!==-1&&(s.dev=!0),o.indexOf("nr_dev")!==-1&&(s.nrDev=!0))}catch(c){}s.nrDev&&i.on("internal-error",function(t){r(t.stack)}),s.dev&&i.on("fn-err",function(t,n,e){r(e.stack)}),s.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(s,function(t,n){return t}).join(", ")))},{}],2:[function(t,n,e){function r(t,n,e,r,s){try{p?p-=1:o(s||new UncaughtException(t,n,e),!0)}catch(f){try{i("ierr",[f,c.now(),!0])}catch(d){}}return"function"==typeof u&&u.apply(this,a(arguments))}function UncaughtException(t,n,e){this.message=t||"Uncaught error with no additional information",this.sourceURL=n,this.line=e}function o(t,n){var e=n?null:c.now();i("err",[t,e])}var i=t("handle"),a=t(19),s=t("ee"),c=t("loader"),f=t("gos"),u=window.onerror,d=!1,l="nr@seenError",p=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(h){"stack"in h&&(t(8),t(7),"addEventListener"in window&&t(5),c.xhrWrappable&&t(9),d=!0)}s.on("fn-start",function(t,n,e){d&&(p+=1)}),s.on("fn-err",function(t,n,e){d&&!e[l]&&(f(e,l,function(){return!0}),this.thrown=!0,o(e))}),s.on("fn-end",function(){d&&!this.thrown&&p>0&&(p-=1)}),s.on("internal-error",function(t){i("ierr",[t,c.now(),!0])})},{}],3:[function(t,n,e){t("loader").features.ins=!0},{}],4:[function(t,n,e){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(8),s=t(7),c="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",l="resource",p="-start",h="-end",m="fn"+p,w="fn"+h,v="bstTimer",y="pushState",g=t("loader");g.features.stn=!0,t(6);var x=NREUM.o.EV;o.on(m,function(t,n){var e=t[0];e instanceof x&&(this.bstStart=g.now())}),o.on(w,function(t,n){var e=t[0];e instanceof x&&i("bst",[e,n,this.bstStart,g.now()])}),a.on(m,function(t,n,e){this.bstStart=g.now(),this.bstType=e}),a.on(w,function(t,n){i(v,[n,this.bstStart,g.now(),this.bstType])}),s.on(m,function(){this.bstStart=g.now()}),s.on(w,function(t,n){i(v,[n,this.bstStart,g.now(),"requestAnimationFrame"])}),o.on(y+p,function(t){this.time=g.now(),this.startPath=location.pathname+location.hash}),o.on(y+h,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+c]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["c"+c]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["webkitC"+c]()},!1)),document[f]("scroll",r,{passive:!0}),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],5:[function(t,n,e){function r(t){for(var n=t;n&&!n.hasOwnProperty(u);)n=Object.getPrototypeOf(n);n&&o(n)}function o(t){s.inPlace(t,[u,d],"-",i)}function i(t,n){return t[1]}var a=t("ee").get("events"),s=t(21)(a,!0),c=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";n.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,n){var e=t[1],r=c(e,"nr@wrapped",function(){function t(){if("function"==typeof e.handleEvent)return e.handleEvent.apply(e,arguments)}var n={object:t,"function":e}[typeof e];return n?s(n,"fn-",null,n.name||"anonymous"):e});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],6:[function(t,n,e){var r=t("ee").get("history"),o=t(21)(r);n.exports=r;var i=window.history&&window.history.constructor&&window.history.constructor.prototype,a=window.history;i&&i.pushState&&i.replaceState&&(a=i),o.inPlace(a,["pushState","replaceState"],"-")},{}],7:[function(t,n,e){var r=t("ee").get("raf"),o=t(21)(r),i="equestAnimationFrame";n.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],8:[function(t,n,e){function r(t,n,e){t[0]=a(t[0],"fn-",null,e)}function o(t,n,e){this.method=e,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,e)}var i=t("ee").get("timer"),a=t(21)(i),s="setTimeout",c="setInterval",f="clearTimeout",u="-start",d="-";n.exports=i,a.inPlace(window,[s,"setImmediate"],s+d),a.inPlace(window,[c],c+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(c+u,r),i.on(s+u,o)},{}],9:[function(t,n,e){function r(t,n){d.inPlace(n,["onreadystatechange"],"fn-",s)}function o(){var t=this,n=u.context(t);t.readyState>3&&!n.resolved&&(n.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,y,"fn-",s)}function i(t){g.push(t),h&&(b?b.then(a):w?w(a):(E=-E,R.data=E))}function a(){for(var t=0;t<g.length;t++)r([],g[t]);g.length&&(g=[])}function s(t,n){return n}function c(t,n){for(var e in t)n[e]=t[e];return n}t(5);var f=t("ee"),u=f.get("xhr"),d=t(21)(u),l=NREUM.o,p=l.XHR,h=l.MO,m=l.PR,w=l.SI,v="readystatechange",y=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],g=[];n.exports=u;var x=window.XMLHttpRequest=function(t){var n=new p(t);try{u.emit("new-xhr",[n],n),n.addEventListener(v,o,!1)}catch(e){try{u.emit("internal-error",[e])}catch(r){}}return n};if(c(p,x),x.prototype=p.prototype,d.inPlace(x.prototype,["open","send"],"-xhr-",s),u.on("send-xhr-start",function(t,n){r(t,n),i(n)}),u.on("open-xhr-start",r),h){var b=m&&m.resolve();if(!w&&!m){var E=1,R=document.createTextNode(E);new h(a).observe(R,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===v||a()})},{}],10:[function(t,n,e){function r(){var t=window.NREUM,n=t.info.accountID||null,e=t.info.agentID||null,r=t.info.trustKey||null,i="btoa"in window&&"function"==typeof window.btoa;if(!n||!e||!i)return null;var a={v:[0,1],d:{ty:"Browser",ac:n,ap:e,id:o.generateCatId(),tr:o.generateCatId(),ti:Date.now()}};return r&&n!==r&&(a.d.tk=r),btoa(JSON.stringify(a))}var o=t(16);n.exports={generateTraceHeader:r}},{}],11:[function(t,n,e){function r(t){var n=this.params,e=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<p;r++)t.removeEventListener(l[r],this.listener,!1);n.aborted||(e.duration=s.now()-this.startTime,this.loadCaptureCalled||4!==t.readyState?null==n.status&&(n.status=0):a(this,t),e.cbTime=this.cbTime,d.emit("xhr-done",[t],t),c("xhr",[n,e,this.startTime]))}}function o(t,n){var e=t.responseType;if("json"===e&&null!==n)return n;var r="arraybuffer"===e||"blob"===e||"json"===e?t.response:t.responseText;return w(r)}function i(t,n){var e=f(n),r=t.params;r.host=e.hostname+":"+e.port,r.pathname=e.pathname,t.sameOrigin=e.sameOrigin}function a(t,n){t.params.status=n.status;var e=o(n,t.lastSize);if(e&&(t.metrics.rxSize=e),t.sameOrigin){var r=n.getResponseHeader("X-NewRelic-App-Data");r&&(t.params.cat=r.split(", ").pop())}t.loadCaptureCalled=!0}var s=t("loader");if(s.xhrWrappable){var c=t("handle"),f=t(12),u=t(10).generateTraceHeader,d=t("ee"),l=["load","error","abort","timeout"],p=l.length,h=t("id"),m=t(15),w=t(14),v=window.XMLHttpRequest;s.features.xhr=!0,t(9),d.on("new-xhr",function(t){var n=this;n.totalCbs=0,n.called=0,n.cbTime=0,n.end=r,n.ended=!1,n.xhrGuids={},n.lastSize=null,n.loadCaptureCalled=!1,t.addEventListener("load",function(e){a(n,t)},!1),m&&(m>34||m<10)||window.opera||t.addEventListener("progress",function(t){n.lastSize=t.loaded},!1)}),d.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),d.on("open-xhr-end",function(t,n){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&n.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid);var e=!1;if("init"in NREUM&&"distributed_tracing"in NREUM.init&&(e=!!NREUM.init.distributed_tracing.enabled),e&&this.sameOrigin){var r=u();r&&n.setRequestHeader("newrelic",r)}}),d.on("send-xhr-start",function(t,n){var e=this.metrics,r=t[0],o=this;if(e&&r){var i=w(r);i&&(e.txSize=i)}this.startTime=s.now(),this.listener=function(t){try{"abort"!==t.type||o.loadCaptureCalled||(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof n.onload))&&o.end(n)}catch(e){try{d.emit("internal-error",[e])}catch(r){}}};for(var a=0;a<p;a++)n.addEventListener(l[a],this.listener,!1)}),d.on("xhr-cb-time",function(t,n,e){this.cbTime+=t,n?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof e.onload||this.end(e)}),d.on("xhr-load-added",function(t,n){var e=""+h(t)+!!n;this.xhrGuids&&!this.xhrGuids[e]&&(this.xhrGuids[e]=!0,this.totalCbs+=1)}),d.on("xhr-load-removed",function(t,n){var e=""+h(t)+!!n;this.xhrGuids&&this.xhrGuids[e]&&(delete this.xhrGuids[e],this.totalCbs-=1)}),d.on("addEventListener-end",function(t,n){n instanceof v&&"load"===t[0]&&d.emit("xhr-load-added",[t[1],t[2]],n)}),d.on("removeEventListener-end",function(t,n){n instanceof v&&"load"===t[0]&&d.emit("xhr-load-removed",[t[1],t[2]],n)}),d.on("fn-start",function(t,n,e){n instanceof v&&("onload"===e&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=s.now()))}),d.on("fn-end",function(t,n){this.xhrCbStart&&d.emit("xhr-cb-time",[s.now()-this.xhrCbStart,this.onload,n],n)})}},{}],12:[function(t,n,e){n.exports=function(t){var n=document.createElement("a"),e=window.location,r={};n.href=t,r.port=n.port;var o=n.href.split("://");!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=n.hostname||e.hostname,r.pathname=n.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname);var i=!n.protocol||":"===n.protocol||n.protocol===e.protocol,a=n.hostname===document.domain&&n.port===e.port;return r.sameOrigin=i&&(!n.hostname||a),r}},{}],13:[function(t,n,e){function r(){}function o(t,n,e){return function(){return i(t,[f.now()].concat(s(arguments)),n?null:this,e),n?void 0:this}}var i=t("handle"),a=t(18),s=t(19),c=t("ee").get("tracer"),f=t("loader"),u=NREUM;"undefined"==typeof window.newrelic&&(newrelic=u);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",p=l+"ixn-";a(d,function(t,n){u[n]=o(l+n,!0,"api")}),u.addPageAction=o(l+"addPageAction",!0),u.setCurrentRouteName=o(l+"routeName",!0),n.exports=newrelic,u.interaction=function(){return(new r).get()};var h=r.prototype={createTracer:function(t,n){var e={},r=this,o="function"==typeof n;return i(p+"tracer",[f.now(),t,e],r),function(){if(c.emit((o?"":"no-")+"fn-start",[f.now(),r,o],e),o)try{return n.apply(this,arguments)}catch(t){throw c.emit("fn-err",[arguments,this,t],e),t}finally{c.emit("fn-end",[f.now()],e)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,n){h[n]=o(p+n)}),newrelic.noticeError=function(t,n){"string"==typeof t&&(t=new Error(t)),i("err",[t,f.now(),!1,n])}},{}],14:[function(t,n,e){n.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(n){return}}}},{}],15:[function(t,n,e){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),n.exports=r},{}],16:[function(t,n,e){function r(){function t(){return n?15&n[e++]:16*Math.random()|0}var n=null,e=0,r=window.crypto||window.msCrypto;r&&r.getRandomValues&&(n=r.getRandomValues(new Uint8Array(31)));for(var o,i="xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx",a="",s=0;s<i.length;s++)o=i[s],"x"===o?a+=t().toString(16):"y"===o?(o=3&t()|8,a+=o.toString(16)):a+=o;return a}function o(){function t(){return n?15&n[e++]:16*Math.random()|0}var n=null,e=0,r=window.crypto||window.msCrypto;r&&r.getRandomValues&&Uint8Array&&(n=r.getRandomValues(new Uint8Array(31)));for(var o=[],i=0;i<16;i++)o.push(t().toString(16));return o.join("")}n.exports={generateUuid:r,generateCatId:o}},{}],17:[function(t,n,e){function r(t,n){if(!o)return!1;if(t!==o)return!1;if(!n)return!0;if(!i)return!1;for(var e=i.split("."),r=n.split("."),a=0;a<r.length;a++)if(r[a]!==e[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var s=navigator.userAgent,c=s.match(a);c&&s.indexOf("Chrome")===-1&&s.indexOf("Chromium")===-1&&(o="Safari",i=c[1])}n.exports={agent:o,version:i,match:r}},{}],18:[function(t,n,e){function r(t,n){var e=[],r="",i=0;for(r in t)o.call(t,r)&&(e[i]=n(r,t[r]),i+=1);return e}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],19:[function(t,n,e){function r(t,n,e){n||(n=0),"undefined"==typeof e&&(e=t?t.length:0);for(var r=-1,o=e-n||0,i=Array(o<0?0:o);++r<o;)i[r]=t[n+r];return i}n.exports=r},{}],20:[function(t,n,e){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],21:[function(t,n,e){function r(t){return!(t&&t instanceof Function&&t.apply&&!t[a])}var o=t("ee"),i=t(19),a="nr@original",s=Object.prototype.hasOwnProperty,c=!1;n.exports=function(t,n){function e(t,n,e,o){function nrWrapper(){var r,a,s,c;try{a=this,r=i(arguments),s="function"==typeof e?e(r,a):e||{}}catch(f){l([f,"",[r,a,o],s])}u(n+"start",[r,a,o],s);try{return c=t.apply(a,r)}catch(d){throw u(n+"err",[r,a,d],s),d}finally{u(n+"end",[r,a,c],s)}}return r(t)?t:(n||(n=""),nrWrapper[a]=t,d(t,nrWrapper),nrWrapper)}function f(t,n,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<n.length;c++)s=n[c],a=t[s],r(a)||(t[s]=e(a,f?s+o:o,i,s))}function u(e,r,o){if(!c||n){var i=c;c=!0;try{t.emit(e,r,o,n)}catch(a){l([a,e,r,o])}c=i}}function d(t,n){if(Object.defineProperty&&Object.keys)try{var e=Object.keys(t);return e.forEach(function(e){Object.defineProperty(n,e,{get:function(){return t[e]},set:function(n){return t[e]=n,n}})}),n}catch(r){l([r])}for(var o in t)s.call(t,o)&&(n[o]=t[o]);return n}function l(n){try{t.emit("internal-error",n)}catch(e){}}return t||(t=o),e.inPlace=f,e.flag=a,e}},{}],ee:[function(t,n,e){function r(){}function o(t){function n(t){return t&&t instanceof r?t:t?c(t,s,i):i()}function e(e,r,o,i){if(!l.aborted||i){t&&t(e,r,o);for(var a=n(o),s=m(e),c=s.length,f=0;f<c;f++)s[f].apply(a,r);var d=u[g[e]];return d&&d.push([x,e,r,a]),a}}function p(t,n){y[t]=m(t).concat(n)}function h(t,n){var e=y[t];if(e)for(var r=0;r<e.length;r++)e[r]===n&&e.splice(r,1)}function m(t){return y[t]||[]}function w(t){return d[t]=d[t]||o(e)}function v(t,n){f(t,function(t,e){n=n||"feature",g[e]=n,n in u||(u[n]=[])})}var y={},g={},x={on:p,addEventListener:p,removeEventListener:h,emit:e,get:w,listeners:m,context:n,buffer:v,abort:a,aborted:!1};return x}function i(){return new r}function a(){(u.api||u.feature)&&(l.aborted=!0,u=l.backlog={})}var s="nr@context",c=t("gos"),f=t(18),u={},d={},l=n.exports=o();l.backlog=u},{}],gos:[function(t,n,e){function r(t,n,e){if(o.call(t,n))return t[n];var r=e();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(t,n,e){function r(t,n,e,r){o.buffer([t],r),o.emit(t,n,e)}var o=t("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(t,n,e){function r(t){var n=typeof t;return!t||"object"!==n&&"function"!==n?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");n.exports=r},{}],loader:[function(t,n,e){function r(){if(!E++){var t=b.info=NREUM.info,n=p.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&n))return u.abort();f(g,function(n,e){t[n]||(t[n]=e)}),c("mark",["onload",a()+b.offset],null,"api");var e=p.createElement("script");e.src="https://"+t.agent,n.parentNode.insertBefore(e,n)}}function o(){"complete"===p.readyState&&i()}function i(){c("mark",["domContent",a()+b.offset],null,"api")}function a(){return R.exists&&performance.now?Math.round(performance.now()):(s=Math.max((new Date).getTime(),s))-b.offset}var s=(new Date).getTime(),c=t("handle"),f=t(18),u=t("ee"),d=t(17),l=window,p=l.document,h="addEventListener",m="attachEvent",w=l.XMLHttpRequest,v=w&&w.prototype;NREUM.o={ST:setTimeout,SI:l.setImmediate,CT:clearTimeout,XHR:w,REQ:l.Request,EV:l.Event,PR:l.Promise,MO:l.MutationObserver};var y=""+location,g={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1130.min.js"},x=w&&v&&v[h]&&!/CriOS/.test(navigator.userAgent),b=n.exports={offset:s,now:a,origin:y,features:{},xhrWrappable:x,userAgent:d};t(13),p[h]?(p[h]("DOMContentLoaded",i,!1),l[h]("load",r,!1)):(p[m]("onreadystatechange",o),l[m]("onload",r)),c("mark",["firstbyte",s],null,"api");var E=0,R=t(20)},{}]},{},["loader",2,11,4,3]);
    </script>
    <link rel="icon" href="{{ URL::asset('assets/images/frontend/Them-logo/Favicon-1.png')}}" />
    
    

    <!-- Meta tags : Start -->
    <meta name="description"
        content="Get Simplilearn's online and live corporate training in IT, project management, digital marketing, big data, cloud, and other emerging technologies.">
    <meta name="keywords"
        content="corporate training, it corporate training, corporate training programs, online courses, Simplilearn.com" />

    <link rel="canonical" href="https://www.simplilearn.com/corporate-training" />
    <meta property="og:locale" content="en-US" />
    <meta property="og:site_name" content="Simplilearn.com" />
    <meta property="og:url" content="https://www.simplilearn.com/corporate-training">
    <meta property="og:title" content="Corporate Training in IT, PMP & Digital Marketing | Simplilearn">
    <meta property="og:description"
        content="Get Simplilearn's online and live corporate training in IT, project management, digital marketing, big data, cloud, and other emerging technologies.">
    <meta property="og:image" content="https://www.simplilearn.com/ice9/general/1pixel_img.png">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:url" content="https://www.simplilearn.com/corporate-training">
    <meta name="twitter:site" content="@simplilearn" />
    <meta name="twitter:title" content="Corporate Training in IT, PMP & Digital Marketing | Simplilearn">
    <meta name="twitter:description"
        content="Get Simplilearn's online and live corporate training in IT, project management, digital marketing, big data, cloud, and other emerging technologies.">
    <meta name="twitter:image" content="https://www.simplilearn.com/ice9/general/1pixel_img.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" />
    <!--            <script>(function (u, n, i, v, e, r, s, a, l) {u[r] = {}; u[r].uid = '144f549d-9d4f-43c0-9c75-473403758420';a = n.createElement(v); a.src = e; a.async = s;n.getElementsByTagName(i)[0].appendChild(a);})(window, document, 'head', 'script', 'https://cdn.getambassador.com/us.js', 'mbsy', true);</script>-->
    <!-- Meta tags : End -->
    <style type="text/css">
        [ng\:cloak],
        [ng-cloak],
        [data-ng-cloak],
        [x-ng-cloak],
        .ng-cloak,
        .x-ng-cloak {
            display: none !important
        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://www.simplilearn.com/static/frontend/css/corporate-taining/ct-page.1564657612.css" />

    <script type="text/javascript">
        var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-32079340-1']);
    _gaq.push(['_setDomainName', 'simplilearn.com']);
    _gaq.push(['_addIgnoredRef', 'http://lms.simplilearn.com']);
    _gaq.push(['_setSiteSpeedSampleRate', 20]);
    _gaq.push(['_trackPageview']);
    _gaq.push(['_setCustomVar', 1, 'SL_Category', 'NA']);
    _gaq.push(['_setCustomVar', 2, 'SL_Citypage', 0]);
   // _gaq.push(['_setCustomVar', 3, 'SL_IsFrs', 0]);
    setTimeout("_gaq.push(['_trackEvent', '30_seconds', 'read','',0,true])", 30000);
    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
    </script>
    <script type='text/javascript'>
        (function() {
                  window.zarget=true;
                  var protocol = ('https:' == document.location.protocol ? 'https:' : 'http:');
                  var scriptTag = document.createElement('script');
                  scriptTag.type = 'text/javascript';
                  scriptTag.async = true;
                  scriptTag.src = protocol +'//cdn.zarget.com/114939/212078.js';
                  var s = document.getElementsByTagName('script')[0];
                  s.parentNode.insertBefore(scriptTag, s);
    })();
    function zargetTimeout() {
                  window.zarget = false;
    }
    window.zargetTimer = setTimeout(zargetTimeout, 3000);
    </script>
    <script type="text/javascript">
        // var isB2BLandingPage = false
    </script>
</head>

<body>
    <div lazy-load-img="" class="corporate-page ng-scope" data-controller="CorporatePortalController"
        ng-controller="CorporatePortalController as cpc" ng-init="previewEvent()">
        <div ng-controller="CoursePageCtrl as cpg" class="ng-scope">
            <div class="banner_section">
                <span class="banner-bg"></span>
                <div class="container">
                    <h1><b>Learn by Doing</b> Not Just Watching</h1>
                    <a href="#" class="btn"
                        ng-click="cpg.setTemplateTitle('Start Team Pilot', 'Start_team_pilot');cpg.showMarketoForm(1);cpg.addRemoveClassInBody(1);">START
                        TEAM PILOT</a>
                </div>
            </div>
            <div class="bg-clr">
                <div class="container people_grow">
                    <h2>The Edifycons <b>Advantage</b></h2>
                    <p>Edifycons provides corporate training in the emerging technologies that are transforming our
                        economy. Our blended learning approach drives learner engagement and the industry’s highest
                        completion rates.</p>
                    <ul>
                        <li class="col-md-4">
                            <span class="aap_icon cls_trainer"></span>
                            <h3><span>High Engagement, Outcome-Centric Learning</span></h3>
                            <p>We blend online learning and live virtual classroom training with mentorship and labs to
                                get results.</p>
                        </li>
                        <li class="col-md-4">
                            <span class="aap_icon accredited"></span>
                            <h3><span>Your Size, Not One-Size</span></h3>
                            <p>From learning portal integration to contextualized content and learning paths, we're
                                committed to your success.</p>
                        </li>
                        <li class="col-md-4">
                            <span class="aap_icon convenient"></span>
                            <h3><span>The Latest Curriculum, from Industry Experts</span></h3>
                            <p>We partner with global luminaries and update our courses several times a year.</p>
                        </li>
                    </ul>
                    <a href="#" class="brd-btn" data-toggle="modal" data-target="#myModal">Contact Us</a>
                </div>
                <div class="container act-lrng p-t-b-80">
                    <h2><b>Active Learning,</b> Not Passive Learning</h2>
                    <p>Research shows that hands-on, interactive learning is 5-7 times more effective than simply
                        reading or watching course material.</p>
                    <div class="row">
                        <div class="col-md-6 col-lg-5">
                            <h4>That’s why Edigycons curriculum includes:</h4>
                            <ul>
                                <li class="col-sm-7 col-md-12">Live online classes</li>
                                <li class="col-sm-5 col-md-12">Mentoring</li>
                                <li class="col-sm-7 col-md-12">Labs</li>
                                <li class="col-sm-5 col-md-12">Projects</li>
                                <li class="col-sm-12 col-md-12">Self-paced videos &amp; more</li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-7 u-video">
                            <img width="640" height="378"
                                src="https://www.simplilearn.com/static/frontend/images/corporate-training/lms_animate.gif"
                                alt="LMS animation">
                        </div>
                    </div>
                </div>
            </div>
            <div class="unlock-teams p-t-b-80">
                <h2><b>Unlock</b> Your Team's Potential</h2>
                <div class="container">
                    <div class="row">
                        @foreach($record as $rec)
                        <div class="col-md-3">
                            <div class="unlock-list">
                                <h3>{{ $rec->menu_name }}</h3>
                                @foreach($rec->submenucourses as $re)
                                <a href="https://www.simplilearn.com/digital-marketing/?source=b2b_site&amp;referrer=corporate-training"
                                    target="_blank" class="dm">{{ $re->course_name }}</a>

                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="tailored p-t-b-80">
                <h2>Tailored <b>Solutions</b></h2>
                <p>Every company is navigating its own unique digital transformation and skills gap. Our implementation
                    consultants work with you to design the best training program for your team and company.</p>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="level">
                                <div class="level-header">
                                    <h3>Level Setting &amp; Upskilling</h3>
                                    <span></span>
                                </div>
                                <ul>
                                    <li>Develop &amp; reinforce common language and skillset</li>
                                    <li>Offer ongoing training and upskilling aligned with your development plans</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="level">
                                <div class="level-header">
                                    <h3>Onboarding New Hires</h3>
                                    <span></span>
                                </div>
                                <ul>
                                    <li>Provide hands-on applied learning critical for new hires</li>
                                    <li>Reduce ramp-up time for new employees</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="level">
                                <div class="level-header">
                                    <h3>Digital Academy</h3>
                                    <span></span>
                                </div>
                                <ul>
                                    <li>Align learning paths to roles</li>
                                    <li>Integrate with your company’s broader training curriculum and learning portal
                                    </li>
                                </ul>
                                <a href="https://www.simplilearn.com/digital-transformation-training/"
                                    target="_blank">Learn More</a>
                            </div>
                        </div>
                        <a href="#" class="brd-btn"
                            ng-click="cpg.setTemplateTitle('Contact Us');cpg.showMarketoForm(1);cpg.addRemoveClassInBody(1);">Contact
                            Us</a>
                    </div>
                </div>
            </div>

            <div class="supporting p-t-b-80">
                <h2>Supporting Enterprises <b>Around the Globe</b></h2>
                <div class="container">
                    <span class="round-img logo-m"><img
                            src="https://www.simplilearn.com/static/frontend/images/corporate-training/company-logos/visa.png"
                            alt="Visa"></span>
                    <span class="round-img logo-m"><img
                            src="https://www.simplilearn.com/static/frontend/images/corporate-training/company-logos/amz.png"
                            alt="Amazon"></span>
                    <span class="round-img logo-m"><img
                            src="https://www.simplilearn.com/static/frontend/images/corporate-training/company-logos/ibm.png"
                            alt="IBM"></span>
                    <span class="round-img logo-m"><img
                            src="https://www.simplilearn.com/static/frontend/images/corporate-training/company-logos/act.png"
                            alt="Accenture"></span>
                    <span class="round-img logo-m"><img
                            src="https://www.simplilearn.com/static/frontend/images/corporate-training/company-logos/cisco.png"
                            alt="CISCO"></span>
                    <span class="round-img logo-m"><img
                            src="https://www.simplilearn.com/static/frontend/images/corporate-training/company-logos/pepsi.png"
                            alt="Pepsi"></span>
                    <span class="round-img logo-m"><img
                            src="https://www.simplilearn.com/static/frontend/images/corporate-training/company-logos/pf.png"
                            alt="P&amp;G"></span>
                    <span class="round-img logo-m"><img
                            src="https://www.simplilearn.com/static/frontend/images/corporate-training/company-logos/duke.png"
                            alt="Duke"></span>
                    <span class="round-img logo-t"><img
                            src="https://www.simplilearn.com/static/frontend/images/corporate-training/company-logos/mc.png"
                            alt="Master Card"></span>
                    <span class="round-img logo-t"><img
                            src="https://www.simplilearn.com/static/frontend/images/corporate-training/company-logos/dell.png"
                            alt="Dell"></span>
                    <span class="round-img logo-t"><img
                            src="https://www.simplilearn.com/static/frontend/images/corporate-training/company-logos/wpp.png"
                            alt="WPP"></span>
                    <span class="round-img logo-t"><img
                            src="https://www.simplilearn.com/static/frontend/images/corporate-training/company-logos/vmware.png"
                            alt="Vmware"></span>
                    <span class="round-img"><img
                            src="https://www.simplilearn.com/static/frontend/images/corporate-training/company-logos/schneider.png"
                            alt="Schneider"></span>
                    <span class="round-img"><img
                            src="https://www.simplilearn.com/static/frontend/images/corporate-training/company-logos/sf.png"
                            alt="Salesforce"></span>
                    <span class="round-img"><img
                            src="https://www.simplilearn.com/static/frontend/images/corporate-training/company-logos/hsbc.png"
                            alt="HSBC"></span>
                    <span class="round-img"><img
                            src="https://www.simplilearn.com/static/frontend/images/corporate-training/company-logos/cg.png"
                            alt="Capgemini"></span>
                    <span class="round-img"><img
                            src="https://www.simplilearn.com/static/frontend/images/corporate-training/company-logos/ms.png"
                            alt="Microsoft"></span>
                    <span class="round-img"><img
                            src="https://www.simplilearn.com/static/frontend/images/corporate-training/company-logos/ford.png"
                            alt="Ford"></span>
                    <!--                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://www.simplilearn.com/static/frontend/images/ct-logo-m.png" alt="Supporting Enterpris logos" class="hidden-sm hidden-md hidden-lg">
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://www.simplilearn.com/static/frontend/images/ct-logo-t.png" alt="Supporting Enterpris logos" class="hidden-xs hidden-lg">
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://www.simplilearn.com/static/frontend/images/ct-logo-d.png" alt="Supporting Enterpris logos" class="hidden-xs hidden-sm hidden-md">-->
                </div>
            </div>
            <div class="cp-faqs p-t-b-80">
                <div class="container">
                    <h2>Common <b>Questions</b></h2>
                    <div class="course-faq">
                        <ul id="faqs-tab">
                            <li class="active-tab cp-faqs" id="cpFaq0">
                                <h3 ng-click="cpc.toggleFaqs($event,'0');" class="first-qa">What is corporate training?
                                    <span class="acc-arrow arrow-down"></span></h3>
                                <div class="acc-active">
                                    <p>Corporate training is the process of improving necessary job skills and knowledge
                                        of a company's employees through an organized method of instruction. It usually
                                        takes the form of online or offline instructional content (textual or video),
                                        online or face-to-face lectures and mentorship, actual or virtual group
                                        interaction and/or online or physical lab exercises or practical projects.</p>
                                </div>
                            </li>
                            <li id="cpFaq1" class="cp-faqs">
                                <h3 ng-click="cpc.toggleFaqs($event,'1');">Why is corporate training important
                                    enterprises? <span class="acc-arrow arrow-down"></span></h3>
                                <div>
                                    <p>Corporate training benefits organizations and employees alike by ensuring swift
                                        acquisition of the capabilities needed to accomplish corporate goals and
                                        success, as well as improving teamwork, employee satisfaction and retention, as
                                        well as each employee's personal skillset, job value and career development.
                                        According to a <a
                                            href="https://www.huffpost.com/entry/not-investing-in-employee_b_5545222"
                                            target="_blank">study by the American Society of Training and
                                            Development</a>, corporate training has helped enterprises enjoy more than
                                        24% higher profit margins. By adding high-value skills and certifications to
                                        their offerings, it has even enabled some organizations to generate more than
                                        200 percent more revenue from each trained employee. Corporate training programs
                                        also improve employer reputation and the ability to attract new talent.</p>
                                </div>
                            </li>
                            <li id="cpFaq2" class="cp-faqs">
                                <h3 ng-click="cpc.toggleFaqs($event,'2');">What sets Edifycon's corporate training
                                    program apart? <span class="acc-arrow arrow-down"></span></h3>
                                <div>
                                    <p>Simplilearn's outcome-centric training programs are different because they focus
                                        on the IT and digital economy skills most in demand by enterprises today. Each
                                        curriculum is developed and updated by leading experts in each field and aligned
                                        to authoritative certification bodies. Our blended learning process combines the
                                        convenience of self-paced online learning with the interactivity of
                                        instructor-led, live virtual classrooms, the hands-on practice of applied
                                        projects or online labs, and a learning management system (LMS) dashboard that
                                        provides visibility and support for managers and learners alike. These features
                                        drive our industry-leading course completion rates (72 percent) and help our
                                        enterprise clients cost-effectively upskill their teams.</p>
                                </div>
                            </li>
                            <li id="cpFaq3" class="cp-faqs">
                                <h3 ng-click="cpc.toggleFaqs($event,'3');">What skills are covered in Edifycon's
                                    corporate training program? <span class="acc-arrow arrow-down"></span></h3>
                                <div>
                                    <p>Edifycons provides corporate training in over 15 specialized programs that are
                                        focused around four core industry verticals, including Marketing and Automation,
                                        Full Stack Development, People &amp; Process, and Data Science/Artificial
                                        Intelligence (AI). Our corporate training courses include Digital Marketing,
                                        Salesforce, Cloud Computing, DevOps, Cyber Security, Software Development, Agile
                                        and Scrum, IT Service and Architecture, Project Management, Quality Management,
                                        UX and Design Thinking, Business Productivity Tools, AI and Machine Learning,
                                        Big Data, and Data Science and Business Intelligence (BI). These programs are
                                        further divided into specific courses and learning paths that enterprises can
                                        choose from.</p>
                                </div>
                            </li>
                            <li id="cpFaq4" class="cp-faqs">
                                <h3 ng-click="cpc.toggleFaqs($event,'4');">Is there any minimum team size requirement
                                    for Edifycon's corporate training program? <span
                                        class="acc-arrow arrow-down"></span></h3>
                                <div>
                                    <p>There is no minimum team size required to participate in Edifycon's corporate
                                        training program. No matter what your team size is, our Customer Success experts
                                        will help you develop a learning path that’s ideal for your organization,
                                        whether you need to train one single team member or an entire division.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div close-on-escape="cpg.showMarketoForm(0);cpg.addRemoveClassInBody(0);"
                ng-click="cpg.showMarketoForm(0, $event);cpg.addRemoveClassInBody(0);"
                class="popup_country_wrapper corporate-marketo ng-isolate-scope"
                ng-style="{display:(cpg.disMarketoFrm)?&quot;block&quot;:&quot;none&quot;}" style="display: none;">
                <div ng-click="$event.stopPropagation()" class="dropdown_country "
                    ng-controller="CoursePageFormController" ng-init="form_init('', 'Select Course', '', '', '', '')"
                    ng-class="(displayState == 1 || displayState == 2) ? 'add-state-length' : ''">
                    <span class="close_country_btn pull-right"
                        ng-click="cpg.showMarketoForm(0);cpg.addRemoveClassInBody(0);"></span>
                    <div class="dropdown_country-ins">
                        <div class="choose_location">
                            <p class="default-text-bold ng-binding"></p>
                        </div>
                        <div class="webi_reg_form">
                            <p ng-show="displayMarketoMsg" class="success_text etrp-suc thanku-text ng-hide">A Edifycons
                                representative will get back to you in one business day.</p>
                            <form id="enterprise-form-1" ng-hide="displayMarketoMsg"
                                class="market-form course_marketo ng-pristine ng-invalid ng-invalid-required"
                                name="enterpriseContactUs" novalidate="" ng-init="setFormName('enterpriseContactUs')">
                                <input type="hidden" name="cSiteModule"
                                    ng-init="catTitle='';pageType='';cSiteModule='b2b_query_corporate_page';cpg.setSiteModule('b2b_query_corporate_page');">
                                <div class="form-control-wrapper">
                                    <input type="text"
                                        class="form-control-material ng-pristine ng-invalid ng-invalid-required"
                                        required="" name="cFirstName" ng-model="cFirstName"
                                        ng-keyup="initiateEvent('enterpriseContactUs');"
                                        ng-class="(enterpriseContactUs.cFirstName.$dirty &amp;&amp; enterpriseContactUs.cFirstName.$error.required) ? 'error' : ''">
                                    <div class="floating-label">First Name*</div>
                                    <div class="floating-label_border"></div>
                                </div>
                                <div class="form-control-wrapper">
                                    <input type="text"
                                        class="form-control-material ng-pristine ng-invalid ng-invalid-required"
                                        required="" name="cLastName" ng-model="cLastName"
                                        ng-keyup="initiateEvent('enterpriseContactUs');"
                                        ng-class="(enterpriseContactUs.cLastName.$dirty &amp;&amp; enterpriseContactUs.cLastName.$error.required) ? 'error' : ''">
                                    <div class="floating-label">Last Name*</div>
                                    <div class="floating-label_border"></div>
                                </div>
                                <div class="form-control-wrapper">
                                    <input type="email"
                                        class="form-control-material ng-pristine ng-invalid ng-invalid-required ng-valid-email"
                                        required="" name="cEmail" ng-model="cEmail"
                                        ng-keyup="initiateEvent('enterpriseContactUs');"
                                        ng-class="((enterpriseContactUs.cEmail.$dirty &amp;&amp; enterpriseContactUs.cEmail.$error.required)  || (enterpriseContactUs.cEmail.$dirty &amp;&amp; enterpriseContactUs.cEmail.$error.email)) ? 'error' : ''">
                                    <div class="floating-label">Email*</div>
                                    <div class="floating-label_border"></div>
                                    <span class="suggestion-box"></span>
                                </div>
                                <div class="support_coutry_code"
                                    ng-class="(enterpriseContactUs.userPhoneB.$dirty &amp;&amp; enterpriseContactUs.userPhoneB.$error.required)? 'error' : ''">
                                    <div class="placeholder_wrap ie_class">
                                        <div class="select_box select_wraper dr_cun">
                                            <select class="sel_cr monospace_class ng-pristine ng-valid"
                                                ng-model="phoneCode">
                                                <!-- ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+1-"
                                                    class="ng-binding ng-scope">
                                                    US&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;United States
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+61-"
                                                    class="ng-binding ng-scope">
                                                    AU&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Australia
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+44-"
                                                    class="ng-binding ng-scope">
                                                    GB&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;United Kingdom
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+91-"
                                                    class="ng-binding ng-scope" selected="selected">
                                                    IN&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;India
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+966-"
                                                    class="ng-binding ng-scope">
                                                    SA&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Saudi Arabia
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+971-"
                                                    class="ng-binding ng-scope">
                                                    AE&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;United Arab Emirates
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+1-"
                                                    class="ng-binding ng-scope">
                                                    CA&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Canada
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+65-"
                                                    class="ng-binding ng-scope">
                                                    SG&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Singapore
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+41-"
                                                    class="ng-binding ng-scope">
                                                    CH&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Switzerland
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+27-"
                                                    class="ng-binding ng-scope">
                                                    ZA&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;South Africa
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+93-"
                                                    class="ng-binding ng-scope" disabled="disabled">
                                                    ---------------------------------------------------
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+358-"
                                                    class="ng-binding ng-scope">
                                                    AX&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Aland Islands
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+355-"
                                                    class="ng-binding ng-scope">
                                                    AL&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Albania
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+213-"
                                                    class="ng-binding ng-scope">
                                                    DZ&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Algeria
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+1684-"
                                                    class="ng-binding ng-scope">
                                                    AS&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;American Samoa
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+376-"
                                                    class="ng-binding ng-scope">
                                                    AD&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Andorra
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+244-"
                                                    class="ng-binding ng-scope">
                                                    AO&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Angola
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+1264-"
                                                    class="ng-binding ng-scope">
                                                    AI&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Anguilla
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+672-"
                                                    class="ng-binding ng-scope">
                                                    AQ&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Antarctica
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+1268-"
                                                    class="ng-binding ng-scope">
                                                    AG&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Antigua and Barbuda
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+54-"
                                                    class="ng-binding ng-scope">
                                                    AR&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Argentina
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+374-"
                                                    class="ng-binding ng-scope">
                                                    AM&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Armenia
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+297-"
                                                    class="ng-binding ng-scope">
                                                    AW&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Aruba
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+43-"
                                                    class="ng-binding ng-scope">
                                                    AT&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Austria
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+994-"
                                                    class="ng-binding ng-scope">
                                                    AZ&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Azerbaijan
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+1242-"
                                                    class="ng-binding ng-scope">
                                                    BS&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Bahamas
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+973-"
                                                    class="ng-binding ng-scope">
                                                    BH&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Bahrain
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+880-"
                                                    class="ng-binding ng-scope">
                                                    BD&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Bangladesh
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+1246-"
                                                    class="ng-binding ng-scope">
                                                    BB&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Barbados
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+375-"
                                                    class="ng-binding ng-scope">
                                                    BY&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Belarus
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+32-"
                                                    class="ng-binding ng-scope">
                                                    BE&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Belgium
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+501-"
                                                    class="ng-binding ng-scope">
                                                    BZ&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Belize
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+229-"
                                                    class="ng-binding ng-scope">
                                                    BJ&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Benin
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+1441-"
                                                    class="ng-binding ng-scope">
                                                    BM&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Bermuda
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+975-"
                                                    class="ng-binding ng-scope">
                                                    BT&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Bhutan
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+591-"
                                                    class="ng-binding ng-scope">
                                                    BO&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Bolivia
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+387-"
                                                    class="ng-binding ng-scope">
                                                    BA&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Bosnia and Herzegovina
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+267-"
                                                    class="ng-binding ng-scope">
                                                    BW&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Botswana
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+47-"
                                                    class="ng-binding ng-scope">
                                                    BV&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Bouvet Island
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+55-"
                                                    class="ng-binding ng-scope">
                                                    BR&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Brazil
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+246-"
                                                    class="ng-binding ng-scope">
                                                    IO&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;British Indian Ocean Territory
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+673-"
                                                    class="ng-binding ng-scope">
                                                    BN&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Brunei Darussalam
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+359-"
                                                    class="ng-binding ng-scope">
                                                    BG&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Bulgaria
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+226-"
                                                    class="ng-binding ng-scope">
                                                    BF&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Burkina Faso
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+257-"
                                                    class="ng-binding ng-scope">
                                                    BI&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Burundi
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+855-"
                                                    class="ng-binding ng-scope">
                                                    KH&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Cambodia
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+237-"
                                                    class="ng-binding ng-scope">
                                                    CM&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Cameroon
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+238-"
                                                    class="ng-binding ng-scope">
                                                    CV&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Cape Verde
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+599-"
                                                    class="ng-binding ng-scope">
                                                    BQ&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Caribbean Netherlands
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+1345-"
                                                    class="ng-binding ng-scope">
                                                    KY&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Cayman Islands
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+236-"
                                                    class="ng-binding ng-scope">
                                                    CF&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Central African Republic
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+235-"
                                                    class="ng-binding ng-scope">
                                                    TD&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Chad
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+56-"
                                                    class="ng-binding ng-scope">
                                                    CL&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Chile
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+86-"
                                                    class="ng-binding ng-scope">
                                                    CN&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;China
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+61-"
                                                    class="ng-binding ng-scope">
                                                    CX&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Christmas Island
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+61-"
                                                    class="ng-binding ng-scope">
                                                    CC&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Cocos (Keeling) Islands
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+57-"
                                                    class="ng-binding ng-scope">
                                                    CO&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Colombia
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+269-"
                                                    class="ng-binding ng-scope">
                                                    KM&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Comoros
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+242-"
                                                    class="ng-binding ng-scope">
                                                    CG&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Congo
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+243-"
                                                    class="ng-binding ng-scope">
                                                    CD&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Congo, Democratic Republic of
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+682-"
                                                    class="ng-binding ng-scope">
                                                    CK&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Cook Islands
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+506-"
                                                    class="ng-binding ng-scope">
                                                    CR&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Costa Rica
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+225-"
                                                    class="ng-binding ng-scope">
                                                    CI&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Cote d'Ivoire
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+385-"
                                                    class="ng-binding ng-scope">
                                                    HR&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Croatia
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+53-"
                                                    class="ng-binding ng-scope">
                                                    CU&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Cuba
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+599-"
                                                    class="ng-binding ng-scope">
                                                    CW&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Curacao
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+357-"
                                                    class="ng-binding ng-scope">
                                                    CY&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Cyprus
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+420-"
                                                    class="ng-binding ng-scope">
                                                    CZ&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Czech Republic
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+45-"
                                                    class="ng-binding ng-scope">
                                                    DK&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Denmark
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+253-"
                                                    class="ng-binding ng-scope">
                                                    DJ&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Djibouti
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+1767-"
                                                    class="ng-binding ng-scope">
                                                    DM&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Dominica
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+1809-"
                                                    class="ng-binding ng-scope">
                                                    DO&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Dominican Republic
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+593-"
                                                    class="ng-binding ng-scope">
                                                    EC&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Ecuador
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+20-"
                                                    class="ng-binding ng-scope">
                                                    EG&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Egypt
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+503-"
                                                    class="ng-binding ng-scope">
                                                    SV&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;El Salvador
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+240-"
                                                    class="ng-binding ng-scope">
                                                    GQ&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Equatorial Guinea
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+291-"
                                                    class="ng-binding ng-scope">
                                                    ER&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Eritrea
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+372-"
                                                    class="ng-binding ng-scope">
                                                    EE&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Estonia
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+251-"
                                                    class="ng-binding ng-scope">
                                                    ET&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Ethiopia
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+500-"
                                                    class="ng-binding ng-scope">
                                                    FK&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Falkland Islands
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+298-"
                                                    class="ng-binding ng-scope">
                                                    FO&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Faroe Islands
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+679-"
                                                    class="ng-binding ng-scope">
                                                    FJ&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Fiji
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+358-"
                                                    class="ng-binding ng-scope">
                                                    FI&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Finland
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+33-"
                                                    class="ng-binding ng-scope">
                                                    FR&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;France
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+594-"
                                                    class="ng-binding ng-scope">
                                                    GF&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;French Guiana
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+689-"
                                                    class="ng-binding ng-scope">
                                                    PF&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;French Polynesia
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+262-"
                                                    class="ng-binding ng-scope">
                                                    TF&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;French Southern Territories
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+241-"
                                                    class="ng-binding ng-scope">
                                                    GA&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Gabon
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+220-"
                                                    class="ng-binding ng-scope">
                                                    GM&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Gambia
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+995-"
                                                    class="ng-binding ng-scope">
                                                    GE&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Georgia
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+49-"
                                                    class="ng-binding ng-scope">
                                                    DE&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Germany
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+233-"
                                                    class="ng-binding ng-scope">
                                                    GH&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Ghana
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+350-"
                                                    class="ng-binding ng-scope">
                                                    GI&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Gibraltar
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+30-"
                                                    class="ng-binding ng-scope">
                                                    GR&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Greece
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+299-"
                                                    class="ng-binding ng-scope">
                                                    GL&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Greenland
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+1473-"
                                                    class="ng-binding ng-scope">
                                                    GD&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Grenada
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+590-"
                                                    class="ng-binding ng-scope">
                                                    GP&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Guadeloupe
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+1671-"
                                                    class="ng-binding ng-scope">
                                                    GU&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Guam
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+502-"
                                                    class="ng-binding ng-scope">
                                                    GT&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Guatemala
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+44-"
                                                    class="ng-binding ng-scope">
                                                    GG&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Guernsey
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+224-"
                                                    class="ng-binding ng-scope">
                                                    GN&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Guinea
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+245-"
                                                    class="ng-binding ng-scope">
                                                    GW&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Guinea-Bissau
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+592-"
                                                    class="ng-binding ng-scope">
                                                    GY&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Guyana
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+509-"
                                                    class="ng-binding ng-scope">
                                                    HT&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Haiti
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+-" class="ng-binding ng-scope">
                                                    HM&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Heard and McDonald Islands
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+504-"
                                                    class="ng-binding ng-scope">
                                                    HN&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Honduras
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+852-"
                                                    class="ng-binding ng-scope">
                                                    HK&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Hong Kong
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+36-"
                                                    class="ng-binding ng-scope">
                                                    HU&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Hungary
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+354-"
                                                    class="ng-binding ng-scope">
                                                    IS&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Iceland
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+62-"
                                                    class="ng-binding ng-scope">
                                                    ID&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Indonesia
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+98-"
                                                    class="ng-binding ng-scope">
                                                    IR&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Iran
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+964-"
                                                    class="ng-binding ng-scope">
                                                    IQ&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Iraq
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+353-"
                                                    class="ng-binding ng-scope">
                                                    IE&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Ireland
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+44-"
                                                    class="ng-binding ng-scope">
                                                    IM&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Isle of Man
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+972-"
                                                    class="ng-binding ng-scope">
                                                    IL&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Israel
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+39-"
                                                    class="ng-binding ng-scope">
                                                    IT&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Italy
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+1876-"
                                                    class="ng-binding ng-scope">
                                                    JM&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Jamaica
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+81-"
                                                    class="ng-binding ng-scope">
                                                    JP&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Japan
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+44-"
                                                    class="ng-binding ng-scope">
                                                    JE&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Jersey
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+962-"
                                                    class="ng-binding ng-scope">
                                                    JO&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Jordan
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+7-"
                                                    class="ng-binding ng-scope">
                                                    KZ&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Kazakhstan
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+254-"
                                                    class="ng-binding ng-scope">
                                                    KE&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Kenya
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+686-"
                                                    class="ng-binding ng-scope">
                                                    KI&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Kiribati
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+965-"
                                                    class="ng-binding ng-scope">
                                                    KW&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Kuwait
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+996-"
                                                    class="ng-binding ng-scope">
                                                    KG&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Kyrgyzstan
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+856-"
                                                    class="ng-binding ng-scope">
                                                    LA&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Lao People's Democratic Republic
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+371-"
                                                    class="ng-binding ng-scope">
                                                    LV&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Latvia
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+961-"
                                                    class="ng-binding ng-scope">
                                                    LB&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Lebanon
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+266-"
                                                    class="ng-binding ng-scope">
                                                    LS&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Lesotho
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+231-"
                                                    class="ng-binding ng-scope">
                                                    LR&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Liberia
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+218-"
                                                    class="ng-binding ng-scope">
                                                    LY&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Libya
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+423-"
                                                    class="ng-binding ng-scope">
                                                    LI&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Liechtenstein
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+370-"
                                                    class="ng-binding ng-scope">
                                                    LT&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Lithuania
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+352-"
                                                    class="ng-binding ng-scope">
                                                    LU&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Luxembourg
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+853-"
                                                    class="ng-binding ng-scope">
                                                    MO&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Macau
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+389-"
                                                    class="ng-binding ng-scope">
                                                    MK&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Macedonia
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+261-"
                                                    class="ng-binding ng-scope">
                                                    MG&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Madagascar
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+265-"
                                                    class="ng-binding ng-scope">
                                                    MW&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Malawi
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+60-"
                                                    class="ng-binding ng-scope">
                                                    MY&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Malaysia
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+960-"
                                                    class="ng-binding ng-scope">
                                                    MV&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Maldives
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+223-"
                                                    class="ng-binding ng-scope">
                                                    ML&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Mali
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+356-"
                                                    class="ng-binding ng-scope">
                                                    MT&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Malta
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+692-"
                                                    class="ng-binding ng-scope">
                                                    MH&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Marshall Islands
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+596-"
                                                    class="ng-binding ng-scope">
                                                    MQ&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Martinique
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+222-"
                                                    class="ng-binding ng-scope">
                                                    MR&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Mauritania
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+230-"
                                                    class="ng-binding ng-scope">
                                                    MU&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Mauritius
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+262-"
                                                    class="ng-binding ng-scope">
                                                    YT&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Mayotte
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+52-"
                                                    class="ng-binding ng-scope">
                                                    MX&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Mexico
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+691-"
                                                    class="ng-binding ng-scope">
                                                    FM&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Micronesia, Federated States of
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+373-"
                                                    class="ng-binding ng-scope">
                                                    MD&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Moldova
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+377-"
                                                    class="ng-binding ng-scope">
                                                    MC&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Monaco
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+976-"
                                                    class="ng-binding ng-scope">
                                                    MN&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Mongolia
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+382-"
                                                    class="ng-binding ng-scope">
                                                    ME&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Montenegro
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+1664-"
                                                    class="ng-binding ng-scope">
                                                    MS&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Montserrat
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+212-"
                                                    class="ng-binding ng-scope">
                                                    MA&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Morocco
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+258-"
                                                    class="ng-binding ng-scope">
                                                    MZ&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Mozambique
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+95-"
                                                    class="ng-binding ng-scope">
                                                    MM&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Myanmar
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+264-"
                                                    class="ng-binding ng-scope">
                                                    NA&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Namibia
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+674-"
                                                    class="ng-binding ng-scope">
                                                    NR&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Nauru
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+977-"
                                                    class="ng-binding ng-scope">
                                                    NP&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Nepal
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+31-"
                                                    class="ng-binding ng-scope">
                                                    NL&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Netherlands
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+687-"
                                                    class="ng-binding ng-scope">
                                                    NC&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;New Caledonia
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+64-"
                                                    class="ng-binding ng-scope">
                                                    NZ&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;New Zealand
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+505-"
                                                    class="ng-binding ng-scope">
                                                    NI&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Nicaragua
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+227-"
                                                    class="ng-binding ng-scope">
                                                    NE&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Niger
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+234-"
                                                    class="ng-binding ng-scope">
                                                    NG&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Nigeria
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+683-"
                                                    class="ng-binding ng-scope">
                                                    NU&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Niue
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+672-"
                                                    class="ng-binding ng-scope">
                                                    NF&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Norfolk Island
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+850-"
                                                    class="ng-binding ng-scope">
                                                    KP&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;North Korea
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+1670-"
                                                    class="ng-binding ng-scope">
                                                    MP&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Northern Mariana Islands
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+47-"
                                                    class="ng-binding ng-scope">
                                                    NO&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Norway
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+968-"
                                                    class="ng-binding ng-scope">
                                                    OM&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Oman
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+92-"
                                                    class="ng-binding ng-scope">
                                                    PK&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Pakistan
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+680-"
                                                    class="ng-binding ng-scope">
                                                    PW&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Palau
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+970-"
                                                    class="ng-binding ng-scope">
                                                    PS&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Palestinian Territory, Occupied
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+507-"
                                                    class="ng-binding ng-scope">
                                                    PA&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Panama
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+675-"
                                                    class="ng-binding ng-scope">
                                                    PG&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Papua New Guinea
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+595-"
                                                    class="ng-binding ng-scope">
                                                    PY&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Paraguay
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+51-"
                                                    class="ng-binding ng-scope">
                                                    PE&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Peru
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+63-"
                                                    class="ng-binding ng-scope">
                                                    PH&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Philippines
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+870-"
                                                    class="ng-binding ng-scope">
                                                    PN&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Pitcairn
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+48-"
                                                    class="ng-binding ng-scope">
                                                    PL&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Poland
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+351-"
                                                    class="ng-binding ng-scope">
                                                    PT&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Portugal
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+1-"
                                                    class="ng-binding ng-scope">
                                                    PR&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Puerto Rico
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+974-"
                                                    class="ng-binding ng-scope">
                                                    QA&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Qatar
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+262-"
                                                    class="ng-binding ng-scope">
                                                    RE&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Reunion
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+40-"
                                                    class="ng-binding ng-scope">
                                                    RO&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Romania
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+7-"
                                                    class="ng-binding ng-scope">
                                                    RU&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Russian Federation
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+250-"
                                                    class="ng-binding ng-scope">
                                                    RW&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Rwanda
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+590-"
                                                    class="ng-binding ng-scope">
                                                    BL&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Saint Barthelemy
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+290-"
                                                    class="ng-binding ng-scope">
                                                    SH&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Saint Helena
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+1869-"
                                                    class="ng-binding ng-scope">
                                                    KN&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Saint Kitts and Nevis
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+1758-"
                                                    class="ng-binding ng-scope">
                                                    LC&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Saint Lucia
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+1784-"
                                                    class="ng-binding ng-scope">
                                                    VC&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Saint Vincent and the Grenadines
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+1599-"
                                                    class="ng-binding ng-scope">
                                                    MF&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Saint-Martin (France)
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+1721-"
                                                    class="ng-binding ng-scope">
                                                    SX&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Saint-Martin (Pays-Bas)
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+685-"
                                                    class="ng-binding ng-scope">
                                                    WS&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Samoa
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+378-"
                                                    class="ng-binding ng-scope">
                                                    SM&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;San Marino
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+239-"
                                                    class="ng-binding ng-scope">
                                                    ST&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Sao Tome and Principe
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+221-"
                                                    class="ng-binding ng-scope">
                                                    SN&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Senegal
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+381-"
                                                    class="ng-binding ng-scope">
                                                    RS&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Serbia
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+248-"
                                                    class="ng-binding ng-scope">
                                                    SC&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Seychelles
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+232-"
                                                    class="ng-binding ng-scope">
                                                    SL&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Sierra Leone
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+421-"
                                                    class="ng-binding ng-scope">
                                                    SK&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Slovakia (Slovak Republic)
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+386-"
                                                    class="ng-binding ng-scope">
                                                    SI&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Slovenia
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+677-"
                                                    class="ng-binding ng-scope">
                                                    SB&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Solomon Islands
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+252-"
                                                    class="ng-binding ng-scope">
                                                    SO&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Somalia
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+500-"
                                                    class="ng-binding ng-scope">
                                                    GS&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;South Georgia and the South
                                                    Sandwich Islands
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+82-"
                                                    class="ng-binding ng-scope">
                                                    KR&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;South Korea
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+211-"
                                                    class="ng-binding ng-scope">
                                                    SS&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;South Sudan
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+34-"
                                                    class="ng-binding ng-scope">
                                                    ES&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Spain
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+94-"
                                                    class="ng-binding ng-scope">
                                                    LK&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Sri Lanka
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+508-"
                                                    class="ng-binding ng-scope">
                                                    PM&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;St. Pierre and Miquelon
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+249-"
                                                    class="ng-binding ng-scope">
                                                    SD&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Sudan
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+597-"
                                                    class="ng-binding ng-scope">
                                                    SR&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Suriname
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+47-"
                                                    class="ng-binding ng-scope">
                                                    SJ&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Svalbard and Jan Mayen Islands
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+268-"
                                                    class="ng-binding ng-scope">
                                                    SZ&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Swaziland
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+46-"
                                                    class="ng-binding ng-scope">
                                                    SE&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Sweden
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+963-"
                                                    class="ng-binding ng-scope">
                                                    SY&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Syria
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+886-"
                                                    class="ng-binding ng-scope">
                                                    TW&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Taiwan
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+992-"
                                                    class="ng-binding ng-scope">
                                                    TJ&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Tajikistan
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+255-"
                                                    class="ng-binding ng-scope">
                                                    TZ&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Tanzania
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+66-"
                                                    class="ng-binding ng-scope">
                                                    TH&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Thailand
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+670-"
                                                    class="ng-binding ng-scope">
                                                    TL&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Timor-Leste
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+228-"
                                                    class="ng-binding ng-scope">
                                                    TG&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Togo
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+690-"
                                                    class="ng-binding ng-scope">
                                                    TK&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Tokelau
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+676-"
                                                    class="ng-binding ng-scope">
                                                    TO&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Tonga
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+1868-"
                                                    class="ng-binding ng-scope">
                                                    TT&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Trinidad and Tobago
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+216-"
                                                    class="ng-binding ng-scope">
                                                    TN&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Tunisia
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+90-"
                                                    class="ng-binding ng-scope">
                                                    TR&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Turkey
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+993-"
                                                    class="ng-binding ng-scope">
                                                    TM&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Turkmenistan
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+1649-"
                                                    class="ng-binding ng-scope">
                                                    TC&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Turks and Caicos Islands
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+688-"
                                                    class="ng-binding ng-scope">
                                                    TV&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Tuvalu
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+256-"
                                                    class="ng-binding ng-scope">
                                                    UG&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Uganda
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+380-"
                                                    class="ng-binding ng-scope">
                                                    UA&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Ukraine
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+699-"
                                                    class="ng-binding ng-scope">
                                                    UM&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;United States Minor Outlying
                                                    Islands
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+598-"
                                                    class="ng-binding ng-scope">
                                                    UY&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Uruguay
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+998-"
                                                    class="ng-binding ng-scope">
                                                    UZ&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Uzbekistan
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+678-"
                                                    class="ng-binding ng-scope">
                                                    VU&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Vanuatu
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+39-"
                                                    class="ng-binding ng-scope">
                                                    VA&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Vatican
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+58-"
                                                    class="ng-binding ng-scope">
                                                    VE&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Venezuela
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+84-"
                                                    class="ng-binding ng-scope">
                                                    VN&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Vietnam
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+1284-"
                                                    class="ng-binding ng-scope">
                                                    VG&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Virgin Islands (British)
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+1340-"
                                                    class="ng-binding ng-scope">
                                                    VI&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Virgin Islands (U.S.)
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+681-"
                                                    class="ng-binding ng-scope">
                                                    WF&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Wallis and Futuna Islands
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+212-"
                                                    class="ng-binding ng-scope">
                                                    EH&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Western Sahara
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+967-"
                                                    class="ng-binding ng-scope">
                                                    YE&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Yemen
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+260-"
                                                    class="ng-binding ng-scope">
                                                    ZM&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Zambia
                                                </option><!-- end ngRepeat: country in countryList -->
                                                <option ng-repeat="country in countryList"
                                                    ng-selected="country.id==queryCountryId"
                                                    ng-disabled="$index == '10'" value="+263-"
                                                    class="ng-binding ng-scope">
                                                    ZW&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Zimbabwe
                                                </option><!-- end ngRepeat: country in countryList -->
                                            </select>
                                            <b class="caret"></b>
                                        </div>
                                        <span class="country_code_span  ng-binding" ng-bind="phoneCode">+91-</span>
                                        <input type="text" name="userPhoneB" ng-style="phoneInputStyle"
                                            ng-model="userPhoneB" required=""
                                            ng-keyup="initiateEvent('enterpriseContactUs');"
                                            ng-class="(enterpriseContactUs.userPhoneB.$dirty &amp;&amp; enterpriseContactUs.userPhoneB.$error.required)? 'error' : ''"
                                            custom-phone-field=""
                                            class="ng-isolate-scope ng-pristine ng-invalid ng-invalid-required"
                                            style="padding-left: 38px;">
                                        <div class="floating-label">Phone Number<sup>*</sup></div>
                                        <div class="floating-label_border"></div>
                                    </div>
                                </div>
                                <div class="form-control-wrapper company_wrap_div">
                                    <input type="text"
                                        class="form-control-material ng-pristine ng-invalid ng-invalid-required"
                                        required="" name="cCompany" ng-model="cCompany"
                                        ng-class="(enterpriseContactUs.cCompany.$dirty &amp;&amp; enterpriseContactUs.cCompany.$error.required) ? 'error' : ''">
                                    <div class="floating-label">Company*</div>
                                    <div class="floating-label_border"></div>
                                </div>
                                <div class="form-control-wrapper ng-hide" ng-show="displayJobTitle">
                                    <input type="text" class="form-control-material job_titl ng-pristine ng-valid"
                                        name="jobTitle" autocomplete="disable-autofill" ng-model="jobTitle"
                                        ng-class="(enterpriseContactUs.jobTitle.$error.required) ? 'error' : ''">
                                    <div class="floating-label">Job Title*</div>
                                    <div class="floating-label_border"></div>
                                </div>
                                <div class="select_wraper select_box form-control-wrapper" ng-class="country_error">
                                    <select ng-model="cCountry"
                                        class="form-control-material sel_cr ng-pristine ng-valid ng-valid-required"
                                        required="" ng-change="updateEntCountry()">
                                        <option value="0">Country*</option>
                                        <option value="United States">United States</option>
                                        <option value="India">India</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Australia">Australia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory
                                        </option>
                                        <option value="British Virgin Islands">British Virgin Islands</option>
                                        <option value="Brunei">Brunei</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burma (Myanmar)">Burma (Myanmar)</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Democratic Republic of the Congo">Democratic Republic of the
                                            Congo</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands">Falkland Islands</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Gaza Strip">Gaza Strip</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Holy See (Vatican City)">Holy See (Vatican City)</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Isle of Man">Isle of Man</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Ivory Coast">Ivory Coast</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jersey">Jersey</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Kosovo">Kosovo</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Laos">Laos</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libya">Libya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macau">Macau</option>
                                        <option value="Macedonia">Macedonia</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia">Micronesia</option>
                                        <option value="Moldova">Moldova</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montenegro">Montenegro</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Pitcairn Islands">Pitcairn Islands</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Republic of the Congo">Republic of the Congo</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russia">Russia</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Barthelemy">Saint Barthelemy</option>
                                        <option value="Saint Helena">Saint Helena</option>
                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Martin">Saint Martin</option>
                                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the
                                            Grenadines</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Korea">South Korea</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Svalbard">Svalbard</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Timor-Leste">Timor-Leste</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Non-Crimea Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="US Virgin Islands">US Virgin Islands</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                                        <option value="West Bank">West Bank</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                    <b class="caret"></b>
                                </div>
                                <div ng-show="(displayState)"
                                    class="select_wraper select_box form-control-wrapper ng-hide"
                                    ng-class="state_error">
                                    <select ng-show="(displayState == 1)"
                                        class="form-control-material sel_cr ng-pristine ng-valid ng-hide" name="cState"
                                        ng-model="cState" ng-change="updateStateCheck();">
                                        <option value="0">Select State*</option>
                                        <option value="AK">AK</option>
                                        <option value="AL">AL</option>
                                        <option value="AR">AR</option>
                                        <option value="AZ">AZ</option>
                                        <option value="CA">CA</option>
                                        <option value="CO">CO</option>
                                        <option value="CT">CT</option>
                                        <option value="DE">DE</option>
                                        <option value="FL">FL</option>
                                        <option value="GA">GA</option>
                                        <option value="HI">HI</option>
                                        <option value="IA">IA</option>
                                        <option value="ID">ID</option>
                                        <option value="IL">IL</option>
                                        <option value="IN">IN</option>
                                        <option value="KS">KS</option>
                                        <option value="KY">KY</option>
                                        <option value="LA">LA</option>
                                        <option value="MA">MA</option>
                                        <option value="MD">MD</option>
                                        <option value="ME">ME</option>
                                        <option value="MI">MI</option>
                                        <option value="MN">MN</option>
                                        <option value="MO">MO</option>
                                        <option value="MS">MS</option>
                                        <option value="MT">MT</option>
                                        <option value="NC">NC</option>
                                        <option value="ND">ND</option>
                                        <option value="NE">NE</option>
                                        <option value="NH">NH</option>
                                        <option value="NJ">NJ</option>
                                        <option value="NM">NM</option>
                                        <option value="NV">NV</option>
                                        <option value="NY">NY</option>
                                        <option value="OH">OH</option>
                                        <option value="OK">OK</option>
                                        <option value="OR">OR</option>
                                        <option value="PA">PA</option>
                                        <option value="RI">RI</option>
                                        <option value="SC">SC</option>
                                        <option value="SD">SD</option>
                                        <option value="TN">TN</option>
                                        <option value="TX">TX</option>
                                        <option value="UT">UT</option>
                                        <option value="VA">VA</option>
                                        <option value="VT">VT</option>
                                        <option value="WA">WA</option>
                                        <option value="WI">WI</option>
                                        <option value="WV">WV</option>
                                    </select>
                                    <select ng-show="(displayState == 2)"
                                        class="form-control-material sel_cr ng-pristine ng-valid ng-hide" name="cState"
                                        ng-model="cState" ng-change="updateStateCheck();">
                                        <option value="0">Select Province*</option>
                                        <option value="AB">Alberta</option>
                                        <option value="BC">British Columbia</option>
                                        <option value="MB">Manitoba</option>
                                        <option value="NB">New Brunswick</option>
                                        <option value="NL">Newfoundland</option>
                                        <option value="NT">Northwest Territories</option>
                                        <option value="NS">Nova Scotia</option>
                                        <option value="NU">Nunavut</option>
                                        <option value="ON">Ontario</option>
                                        <option value="PE">Prince Edward Island</option>
                                        <option value="QC">Quebec</option>
                                        <option value="SK">Saskatchewan</option>
                                        <option value="YT">Yukon Territory</option>
                                    </select>
                                    <b class="caret"></b>
                                </div>
                                <div class="select_wraper select_box form-control-wrapper" ng-class="cNoEmps_error">
                                    <select ng-model="cNoEmps"
                                        class="form-control-material sel_cr ng-pristine ng-valid ng-valid-required"
                                        required="">
                                        <option value="0">Number of Employees*</option>
                                        <option value="< 1,000">&lt; 1,000 employees</option>
                                        <option value="1000 - 5,000">1,000 - 5,000 employees</option>
                                        <option value="5,001 - 10,000">5,001 - 10,000 employees</option>
                                        <option value="> 10,000">10,001+ employees </option>
                                    </select>
                                    <b class="caret"></b>
                                </div>
                                <div class="form-checkbox form-control-wrapper">
                                    <label>
                                        <input type="hidden" name="cContactMe" ng-model="cContactMe"
                                            class="ng-pristine ng-valid">
                                        <input type="checkbox" name="cContactMe" ng-checked="cContactMe"
                                            ng-model="cContactMe" ng-click="toggleMarketoClick()"
                                            ng-class="(cContactMe == 0 &amp;&amp; cAgreeToCnt == 1)?'error':''"
                                            class="ng-pristine ng-valid" checked="checked"><span
                                            class="checkbox-material"><span class="check"></span></span>
                                        By providing your contact details, you agree to our <a
                                            href="https://www.simplilearn.com/terms-and-conditions#/privacy-policy"
                                            target="_blank">Privacy Policy</a>
                                    </label>
                                </div>
                                <button type="button" class="btn btn-success btn-sm btn-flat" id="B2B_lead"
                                    ng-click="submitMarketoEnterpriseForm($event);">SUBMIT</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!---modal area--->

    <!-- Modal -->
    <div ng-app="myApp" ng-controller="personCtrl">
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Contact us</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="firstname">First name</label>
                            <input type="text" class="form-control" id="firstname" ng-model="form.fname">
                        </div>
                        <div class="form-group">
                            <label for="firstname">last name</label>
                            <input type="text" class="form-control" id="firstname" ng-model="form.lname">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com" ng-model="form.email">
                        </div>
                        <div class="form-group">
                            <label for="phonenumber">Phone number</label>
                            <input type="text" class="form-control" id="phonenumber" ng-model="form.pnumber">
                        </div>
                        <div class="form-group">
                            <label for="companyname">Company name</label>
                            <input type="text" class="form-control" id="companyname" ng-model="form.company">
                        </div>
                        <div class="form-group">
                            <label for="country">Country</label>
                            <input type="text" class="form-control" id="country" ng-model="form.country">
                        </div>
                        <div class="form-group">
                            <label for="employee">Number of employee</label>
                            <input type="text" class="form-control" id="employee" ng-model="form.employee">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" ng-click="saveform()">save</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!---modal area close -->

    <script src="{{ URL::asset('assets/js/angular.min.js') }}"></script>
    <script type="text/javascript">
        console.log("1");
	var app = angular.module('myApp', []);
	app.controller('personCtrl', function($scope,$http,$timeout) {
		console.log("e");
		$scope.form ={};

		$scope.records = {!! json_encode($record) !!};
		console.log($scope.records);
		$scope.saveform = function (){
			console.log($scope.form);
			var data = $scope.form;
			if(!$scope.form.email ){
				$scope.form.errormessage = "Please fill all mandatory fields";
			}else{
				$http.post('{!! route('enquirypost') !!}',data).then(function success(e){
					console.log(e.data);
					$scope.successsinfo = e.data.data;
					if(e.data.status == "success"){
						$scope.form.errormessage = "";
						$scope.successMessage = "";
						$scope.successMessagebool = true;
						$timeout(function () {
							$scope.successMessagebool = false;
						}, 2000);
						$scope.form = {};
					}
				},function error(error){
					console.log(error);
				});
			}
		}
	});
    </script>

</body>

</html>