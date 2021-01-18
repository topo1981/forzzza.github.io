<?php

include('../session.php');



 ?>

<head><base href="http://localhost/forzza/">
<noscript>
<meta http-equiv="refresh" content="0; URL=noscript.aspx" />
</noscript>
<meta charset="utf-8"><script type="text/javascript" src="https://bam-cell.nr-data.net/1/0cedf0d3d6?a=127913867&amp;v=1194.94d5a62&amp;to=YwEGYBYFDERRVERQXFpLJWc0SwZSVlZFVUcaBRdEHA%3D%3D&amp;rst=4102&amp;ck=1&amp;ref=https://m.forzza.com/Default.aspx&amp;ap=5&amp;be=903&amp;fe=3015&amp;dc=1908&amp;perf=%7B%22timing%22:%7B%22of%22:1610950145997,%22n%22:0,%22u%22:868,%22ue%22:870,%22f%22:1,%22dn%22:199,%22dne%22:201,%22c%22:201,%22s%22:319,%22ce%22:433,%22rq%22:434,%22rp%22:859,%22rpe%22:859,%22dl%22:867,%22di%22:1866,%22ds%22:1907,%22de%22:1964,%22dc%22:3014,%22l%22:3014,%22le%22:3021%7D,%22navigation%22:%7B%22ty%22:1%7D%7D&amp;fcp=2251&amp;jsonp=NREUM.setToken"></script><script src="https://js-agent.newrelic.com/nr-1194.min.js"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript">window.NREUM||(NREUM={});NREUM.info = {"beacon":"bam-cell.nr-data.net","errorBeacon":"bam-cell.nr-data.net","licenseKey":"0cedf0d3d6","applicationID":"127913867","transactionName":"YwEGYBYFDERRVERQXFpLJWc0SwZSVlZFVUcaBRdEHA==","queueTime":0,"applicationTime":5,"agent":"","atts":""}</script><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={licenseKey:"0cedf0d3d6",applicationID:"127913867"};window.NREUM||(NREUM={}),__nr_require=function(e,t,n){function r(n){if(!t[n]){var i=t[n]={exports:{}};e[n][0].call(i.exports,function(t){var i=e[n][1][t];return r(i||t)},i,i.exports)}return t[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var i=0;i<n.length;i++)r(n[i]);return r}({1:[function(e,t,n){function r(){}function i(e,t,n){return function(){return o(e,[u.now()].concat(c(arguments)),t?null:this,n),t?void 0:this}}var o=e("handle"),a=e(6),c=e(7),f=e("ee").get("tracer"),u=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],p="api-",l=p+"ixn-";a(d,function(e,t){s[t]=i(p+t,!0,"api")}),s.addPageAction=i(p+"addPageAction",!0),s.setCurrentRouteName=i(p+"routeName",!0),t.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,t){var n={},r=this,i="function"==typeof t;return o(l+"tracer",[u.now(),e,n],r),function(){if(f.emit((i?"":"no-")+"fn-start",[u.now(),r,i],n),i)try{return t.apply(this,arguments)}catch(e){throw f.emit("fn-err",[arguments,this,e],n),e}finally{f.emit("fn-end",[u.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,t){m[t]=i(l+t)}),newrelic.noticeError=function(e,t){"string"==typeof e&&(e=new Error(e)),o("err",[e,u.now(),!1,t])}},{}],2:[function(e,t,n){function r(){return c.exists&&performance.now?Math.round(performance.now()):(o=Math.max((new Date).getTime(),o))-a}function i(){return o}var o=(new Date).getTime(),a=o,c=e(8);t.exports=r,t.exports.offset=a,t.exports.getLastTimestamp=i},{}],3:[function(e,t,n){function r(e,t){var n=e.getEntries();n.forEach(function(e){"first-paint"===e.name?d("timing",["fp",Math.floor(e.startTime)]):"first-contentful-paint"===e.name&&d("timing",["fcp",Math.floor(e.startTime)])})}function i(e,t){var n=e.getEntries();n.length>0&&d("lcp",[n[n.length-1]])}function o(e){e.getEntries().forEach(function(e){e.hadRecentInput||d("cls",[e])})}function a(e){if(e instanceof m&&!g){var t=Math.round(e.timeStamp),n={type:e.type};t<=p.now()?n.fid=p.now()-t:t>p.offset&&t<=Date.now()?(t-=p.offset,n.fid=p.now()-t):t=p.now(),g=!0,d("timing",["fi",t,n])}}function c(e){d("pageHide",[p.now(),e])}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var f,u,s,d=e("handle"),p=e("loader"),l=e(5),m=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){f=new PerformanceObserver(r);try{f.observe({entryTypes:["paint"]})}catch(v){}u=new PerformanceObserver(i);try{u.observe({entryTypes:["largest-contentful-paint"]})}catch(v){}s=new PerformanceObserver(o);try{s.observe({type:"layout-shift",buffered:!0})}catch(v){}}if("addEventListener"in document){var g=!1,w=["click","keydown","mousedown","pointerdown","touchstart"];w.forEach(function(e){document.addEventListener(e,a,!1)})}l(c)}},{}],4:[function(e,t,n){function r(e,t){if(!i)return!1;if(e!==i)return!1;if(!t)return!0;if(!o)return!1;for(var n=o.split("."),r=t.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var i=null,o=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var c=navigator.userAgent,f=c.match(a);f&&c.indexOf("Chrome")===-1&&c.indexOf("Chromium")===-1&&(i="Safari",o=f[1])}t.exports={agent:i,version:o,match:r}},{}],5:[function(e,t,n){function r(e){function t(){e(a&&document[a]?document[a]:document[i]?"hidden":"visible")}"addEventListener"in document&&o&&document.addEventListener(o,t,!1)}t.exports=r;var i,o,a;"undefined"!=typeof document.hidden?(i="hidden",o="visibilitychange",a="visibilityState"):"undefined"!=typeof document.msHidden?(i="msHidden",o="msvisibilitychange"):"undefined"!=typeof document.webkitHidden&&(i="webkitHidden",o="webkitvisibilitychange",a="webkitVisibilityState")},{}],6:[function(e,t,n){function r(e,t){var n=[],r="",o=0;for(r in e)i.call(e,r)&&(n[o]=t(r,e[r]),o+=1);return n}var i=Object.prototype.hasOwnProperty;t.exports=r},{}],7:[function(e,t,n){function r(e,t,n){t||(t=0),"undefined"==typeof n&&(n=e?e.length:0);for(var r=-1,i=n-t||0,o=Array(i<0?0:i);++r<i;)o[r]=e[t+r];return o}t.exports=r},{}],8:[function(e,t,n){t.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,t,n){function r(){}function i(e){function t(e){return e&&e instanceof r?e:e?u(e,f,a):a()}function n(n,r,i,o,a){if(a!==!1&&(a=!0),!l.aborted||o){e&&a&&e(n,r,i);for(var c=t(i),f=v(n),u=f.length,s=0;s<u;s++)f[s].apply(c,r);var p=d[h[n]];return p&&p.push([b,n,r,c]),c}}function o(e,t){y[e]=v(e).concat(t)}function m(e,t){var n=y[e];if(n)for(var r=0;r<n.length;r++)n[r]===t&&n.splice(r,1)}function v(e){return y[e]||[]}function g(e){return p[e]=p[e]||i(n)}function w(e,t){s(e,function(e,n){t=t||"feature",h[n]=t,t in d||(d[t]=[])})}var y={},h={},b={on:o,addEventListener:o,removeEventListener:m,emit:n,get:g,listeners:v,context:t,buffer:w,abort:c,aborted:!1};return b}function o(e){return u(e,f,a)}function a(){return new r}function c(){(d.api||d.feature)&&(l.aborted=!0,d=l.backlog={})}var f="nr@context",u=e("gos"),s=e(6),d={},p={},l=t.exports=i();t.exports.getOrSetContext=o,l.backlog=d},{}],gos:[function(e,t,n){function r(e,t,n){if(i.call(e,t))return e[t];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:r,writable:!0,enumerable:!1}),r}catch(o){}return e[t]=r,r}var i=Object.prototype.hasOwnProperty;t.exports=r},{}],handle:[function(e,t,n){function r(e,t,n,r){i.buffer([e],r),i.emit(e,t,n)}var i=e("ee").get("handle");t.exports=r,r.ee=i},{}],id:[function(e,t,n){function r(e){var t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===window?0:a(e,o,function(){return i++})}var i=1,o="nr@id",a=e("gos");t.exports=r},{}],loader:[function(e,t,n){function r(){if(!x++){var e=b.info=NREUM.info,t=p.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&t))return u.abort();f(y,function(t,n){e[t]||(e[t]=n)});var n=a();c("mark",["onload",n+b.offset],null,"api"),c("timing",["load",n]);var r=p.createElement("script");r.src="https://"+e.agent,t.parentNode.insertBefore(r,t)}}function i(){"complete"===p.readyState&&o()}function o(){c("mark",["domContent",a()+b.offset],null,"api")}var a=e(2),c=e("handle"),f=e(6),u=e("ee"),s=e(4),d=window,p=d.document,l="addEventListener",m="attachEvent",v=d.XMLHttpRequest,g=v&&v.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:v,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var w=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1194.min.js"},h=v&&g&&g[l]&&!/CriOS/.test(navigator.userAgent),b=t.exports={offset:a.getLastTimestamp(),now:a,origin:w,features:{},xhrWrappable:h,userAgent:s};e(1),e(3),p[l]?(p[l]("DOMContentLoaded",o,!1),d[l]("load",r,!1)):(p[m]("onreadystatechange",i),d[m]("onload",r)),c("mark",["firstbyte",a.getLastTimestamp()],null,"api");var x=0},{}],"wrap-function":[function(e,t,n){function r(e,t){function n(t,n,r,f,u){function nrWrapper(){var o,a,s,p;try{a=this,o=d(arguments),s="function"==typeof r?r(o,a):r||{}}catch(l){i([l,"",[o,a,f],s],e)}c(n+"start",[o,a,f],s,u);try{return p=t.apply(a,o)}catch(m){throw c(n+"err",[o,a,m],s,u),m}finally{c(n+"end",[o,a,p],s,u)}}return a(t)?t:(n||(n=""),nrWrapper[p]=t,o(t,nrWrapper,e),nrWrapper)}function r(e,t,r,i,o){r||(r="");var c,f,u,s="-"===r.charAt(0);for(u=0;u<t.length;u++)f=t[u],c=e[f],a(c)||(e[f]=n(c,s?f+r:r,i,f,o))}function c(n,r,o,a){if(!m||t){var c=m;m=!0;try{e.emit(n,r,o,t,a)}catch(f){i([f,n,r,o],e)}m=c}}return e||(e=s),n.inPlace=r,n.flag=p,n}function i(e,t){t||(t=s);try{t.emit("internal-error",e)}catch(n){}}function o(e,t,n){if(Object.defineProperty&&Object.keys)try{var r=Object.keys(e);return r.forEach(function(n){Object.defineProperty(t,n,{get:function(){return e[n]},set:function(t){return e[n]=t,t}})}),t}catch(o){i([o],n)}for(var a in e)l.call(e,a)&&(t[a]=e[a]);return t}function a(e){return!(e&&e instanceof Function&&e.apply&&!e[p])}function c(e,t){var n=t(e);return n[p]=e,o(e,n,s),n}function f(e,t,n){var r=e[t];e[t]=c(r,n)}function u(){for(var e=arguments.length,t=new Array(e),n=0;n<e;++n)t[n]=arguments[n];return t}var s=e("ee"),d=e(7),p="nr@original",l=Object.prototype.hasOwnProperty,m=!1;t.exports=r,t.exports.wrapFunction=c,t.exports.wrapInPlace=f,t.exports.argsToArray=u},{}]},{},["loader"]);</script><title>Configurations du compte</title><meta content="index,follow,snippet" name="googlebot"><meta content="index,follow" name="robots"><meta content="notranslate" name="google"><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"><meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black"><meta id="appleTitle" name="apple-mobile-web-app-title" content="Forzza Mobile"><meta content="telephone=no" name="format-detection"><meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE"><link rel="apple-touch-icon" href="Content/images/other/logo-touch.png"><link rel="apple-touch-icon" sizes="76x76" href="Content/images/other/logo-touch76.png"><link rel="apple-touch-icon" sizes="120x120" href="Content/images/other/logo-touch120.png"><link rel="apple-touch-icon" sizes="152x152" href="Content/images/other/logo-touch152.png"><link type="text/x-component" rel="Shortcut Icon" href="Content/images/app-snapshot.ico">
<style type="text/css">
#Loading_aspx, #Loading_aspx .ui-content {
background: #084772;
height: 100%;
margin:0 !important;
padding: 0 !important;
width:100%;
}

#Loading_aspx img {
bottom: 0;
height: 45px;
left: 0;
margin: 0 auto;
position: absolute;
right: 0;
top: 60%;
width: 108px;
z-index: 10;
overflow-x:hidden;
overflow-y:hidden;
}
#initWrap {
margin: 0 1em;
position: relative;
top: 15%;
z-index: 11;
}
</style>
<link rel="stylesheet" type="text/css" href="/static-content/styles-master/fbecb8da84974bd7a88b3c7e29e24dfb/"><link rel="stylesheet" type="text/css" href="/static-content/styles-custom/a5b65f45f9c143759cc2a6e6a94bac3c/"><link rel="stylesheet" type="text/css" href="/static-content/gaming-styles/fe3ffe58ee904c1bac27fb39f114158b/"><script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=UA-135004575-2"></script>
<script type="text/javascript">
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());
                gtag('config', 'UA-135004575-2');
            </script><meta name="description" content="Bet in real time on soccer, basketball, tennis and other sports directly via your mobile phone or tablet,  anytime and anywhere"><meta name="keywords" content="forzza, mobile betting, Forzza mobile app, in-play odds, live bets, mobile live betting, live games, real time betting"><link rel="stylesheet" href="https://api.wirecard.com:443/engine/skin/default/embeddedLoader.css"></head>
<body class="ui-mobile-viewport bnormal ui-overlay-a">

<script type="text/javascript" src="/static-content/jquery-core/132923384d264bcda9f372cd605377ab/"></script>
<script type="text/javascript" src="/static-content/mobile-config/eb9a772ea16448b6af9b9b5a900565da/"></script>
<script type="text/javascript" src="/static-content/mobile-core/132923384d264bcda9f372cwerewr7ab/"></script>
<script type="text/javascript" src="/static-content/client-utility/1437850e137b42b186ee6f02ae53fbdf/"></script>
<script type="text/javascript" src="/static-content/client-misc/ff55de9c53a844afa9d473faa23ad12b/"></script>
<script type="text/javascript" src="/static-content/app-locale/e45df6aa4b584f23b925ea7e438fe9cd/"></script>
<script type="text/javascript" src="/static-content/live-odds-core/adbd9b8f243b425982ef9ad26c56a20e/"></script>
<script type="text/javascript" src="/static-content/live-odds-client/f1867e63dd704a09bf450fca2b96dd8f/"></script>
<script type="text/javascript" src="/static-content/games-results/1931477112484d9fa6852bb47af699ab/"></script>
<script type="text/javascript" src="/static-content/games-stats/1a146d07ba1749a99d25c403fae9177d/"></script>
<script type="text/javascript" src="/static-content/countdown/2e090a59a3024787b2fb317d8257b0db/"></script>
<script type="text/javascript" src="/static-content/cashout/2f2a2bd968d948f784dc5708d876c13e/"></script>
<script type="text/javascript" src="/static-content/casinoHelper/deb36340c2af4cef8e72dd9bd5fa44ea/"></script>
<script type="text/javascript" src="/static-content/vgames-client/e99353db6a7b42cba3b8b9b9d1feea9a/"></script>
<script type="text/javascript">
var _appConfigGlobal = {
    appName: "Forzza",
    desktopAppUrl: "https://www.forzza.com",
    appCookies: {
        userPrefs: "userPrefs",
        userLocale: "ulang"
    }
};
</script>
<script type="text/javascript" src="/static-content/wd-payment-loader/f58023c8d30042a482600bebeb3c42ba/"></script>

<div class="ui-loader ui-corner-all ui-body-a ui-loader-default"><span class="ui-icon-loading"></span><h1>loading</h1></div><div data-role="page" id="user-settings" data-url="user-settings_aspx" data-lang="fr" tabindex="0" class="ui-page ui-page-theme-a ui-page-active" style="padding-bottom: 54px;"><div class="panel left ui-panel ui-panel-position-right ui-panel-display-overlay ui-panel-closed ui-body-inherit" data-rel="close" data-role="panel" data-position="right" data-animate="false" data-display="overlay" id="panel-right"><div class="ui-panel-inner"><ul data-role="listview" class="ui-listview"><li data-icon="false" class="ui-first-child"><a data-role="button" href="javascript:void(0);" data-rel="close" data-icon="delete" data-iconpos="right" class="ui-link ui-btn ui-icon-delete ui-btn-icon-right ui-shadow ui-corner-all" role="button">Fermer</a></li><li data-icon="false"><a class="leftMenuItem ui-btn" href="language-selection"><div class="categoryIconContainer tw-language"></div>Réglages</a></li><li data-icon="false"><a class="leftMenuItem ui-btn" href="info/payment-options"><div class="categoryIconContainer tw-paymentcode"></div>Methodes payement</a></li><li data-icon="false"><a class="leftMenuItem ui-btn" href="contact"><div class="categoryIconContainer tw-contact"></div>Contact</a></li><li data-icon="false"><a class="leftMenuItem ui-btn" href="info"><div class="categoryIconContainer tw-msg-info-circle"></div>Infos</a></li><li data-icon="false"><a class="leftMenuItem ui-btn" href="search"><div class="categoryIconContainer tw-search"></div>Recherche</a></li><li data-icon="false" class="ui-last-child"><a class="leftMenuItem ui-btn" href="info/about-us"><div class="categoryIconContainer tw-settings"></div>Sur nous</a></li></ul></div></div><div data-tap-toggle="false" data-role="header" data-theme="b" class="tw-header ui-header ui-bar-b" id="navHeader" data-add-back-btn="true" role="banner"><a role="button" href="javascript:void(0);" class="ui-btn ui-corner-all ui-shadow ui-btn-left ui-btn-a ui-toolbar-back-btn ui-icon-carat-l ui-btn-icon-left" data-rel="back">&nbsp;</a><h1 class="tw-header-title ui-title" role="heading" aria-level="1">Configurations du compte</h1><img src="Content/images/panel-home.png" class="ui-btn-right tw-home-right-panel" onclick="openHomeMenu();" alt="open panel"></div><div data-role="content" id="mobileMainContent" class="ui-content" role="main"><div id="twMainContentView"><input name="__RequestVerificationToken" type="hidden" value="w-FYVCeKSWnVAf4H_vSJKaFkqC-sKhsOC_Q4CiNC46gmReuWf9a7lPn0dGH7mca3ZUtokWhnyFOXtblOfa9vtSyUQDHVc2C7U2EvBSBXg2o1"><ul data-role="listview" data-inset="false" id="accountMainMenu" class="ui-listview">        <li data-role="list-divider" data-theme="b" role="heading" class="ui-li-divider ui-bar-b ui-first-child">            <div class="ui-grid-a">                <div class="ui-block-a" style="width:70%;">                    <div class="categoryIconContainer tw-user"></div>54549963                </div>                <div class="ui-block-b" style="width:30%;padding-top:6px;">                    <div class="ui-btn ui-input-btn ui-btn-c ui-corner-all ui-shadow ui-btn-inline ui-icon-refresh ui-btn-icon-notext"><input type="button" data-theme="c" data-icon="refresh" data-inline="true" data-iconpos="notext" onclick="TwNavigation.forceReload();"></div>                </div>            </div>        </li>        <li style="padding:4px 8px;" class="ui-li-static ui-body-inherit">            <div class="account-grid-3" style="font-size:12px; font-weight:normal;">                <div>                    <div>Compte sportif</div>                    <div class="ba-saldo"><?php echo $solde; ?></i></b></span> TND</div>                </div>                    <div>                        <div>Live casino</div>                        <div class="ba-saldo"><?php echo $livecasino; ?> TND</div>                    </div>                                    <div>                        <div>Casino games</div>                        <div class="ba-saldo"><?php echo $casino; ?> TND</div>                    </div>                            </div>        </li>        <li><a href="user-settings/funds-transfer" class="noPadding ui-btn ui-btn-icon-right ui-icon-carat-r"><div class="categoryIconContainer tw-funds-transfer"></div>Funds transfer</a></li>    <li><a href="user-bets" class="noPadding ui-btn ui-btn-icon-right ui-icon-carat-r"><div class="categoryIconContainer tw-mybets"></div>Mes paris</a></li>    <li><a href="account-statement" class="noPadding ui-btn ui-btn-icon-right ui-icon-carat-r"><div class="categoryIconContainer tw-transactions"></div>Extrait de compte</a></li>            <li><a href="gaming-history" class="noPadding ui-btn ui-btn-icon-right ui-icon-carat-r"><div class="categoryIconContainer tw-games-history"></div>Gaming history</a></li>    <li><a href="user-settings/profile" class="noPadding ui-btn ui-btn-icon-right ui-icon-carat-r"><div class="categoryIconContainer tw-user"></div>Données sur l'utilisateur</a></li>        <li><a href="user-settings/password-change" class="noPadding ui-btn ui-btn-icon-right ui-icon-carat-r"><div class="categoryIconContainer tw-passwordchange"></div>Changement de mot de passe</a></li>        <li><a href="user-settings/email-change" class="noPadding ui-btn ui-btn-icon-right ui-icon-carat-r"><div class="categoryIconContainer tw-emailchange"></div>Changement d'adresse email</a></li>    <li><a href="user-settings/betting-limits" class="noPadding ui-btn ui-btn-icon-right ui-icon-carat-r"><div class="categoryIconContainer tw-limit"></div>Limites pour parier</a></li>    <li><a href="user-settings/blocking" class="noPadding ui-btn ui-btn-icon-right ui-icon-carat-r"><div class="categoryIconContainer tw-blockaccount"></div>Blocage du compte</a></li>    <li class="ui-last-child"><a href="javascript:void(0);" onclick="TwLogoutUser(this);" class="noPadding ui-btn ui-btn-icon-right ui-icon-carat-r"><div class="categoryIconContainer tw-logout"></div>Me déconnecter</a></li></ul><button class="tw-scroll-top ui-btn ui-icon-arrow-u ui-btn-icon-right ui-shadow ui-corner-all" style="display:none" onclick="TwNavigation.PageTop(this);">Top</button></div><div id="twInfoContentView" class="fieldHide"></div></div><div data-role="footer" data-theme="b" class="ui-navbar-custom ui-footer ui-bar-b ui-footer-fixed slideup" data-position="fixed" id="footer" data-tap-toggle="false" role="contentinfo">
<div data-role="navbar" class="ui-navbar-custom ui-navbar" id="main_navbar" role="navigation">
<ul class="ui-grid-d">
<li class="ui-block-a">
<a href="home" id="homeLink" data-icon="custom" class="ui-btn-active ui-link ui-btn ui-icon-custom ui-btn-icon-top">
<div class="tw-menu-text">home</div>
<span class="ui-btn-icon-top-home tw-home">&nbsp;</span>
</a>
</li>

<li class="ui-block-b">
<span class="speechAcc" id="fAccbalance" data-enhanced="true"><?php echo $solde; ?></i></b></span>
<a href="user-settings" id="accountLink" data-icon="custom" class="ui-link ui-btn ui-icon-custom ui-btn-icon-top">
<div class="tw-menu-text">Configurations compte</div>
<span class="ui-btn-icon-top-account tw-account"></span>
</a>
</li>
<li class="ui-block-c">
<a href="user-bets" id="myBetsLink" data-icon="custom" class="ui-link ui-btn ui-icon-custom ui-btn-icon-top">
<div class="tw-menu-text">Mes paris</div>
<span class="ui-btn-icon-top-mybets tw-mybets"></span>
</a>
</li>
<li class="ui-block-d">
<a href="betting/sports" id="betsLink" data-icon="custom" class="ui-link ui-btn ui-icon-custom ui-btn-icon-top">
<div class="tw-menu-text">Paris sportifs</div>
<span class="ui-btn-icon-top-betting tw-betting">&nbsp;</span>
</a>
</li>

<li class="ui-block-e">
<span class="speech" id="fbsCounter" data-enhance="true">0</span>
<a href="betslip" id="betslipLink" data-icon="custom" class="ui-link ui-btn ui-icon-custom ui-btn-icon-top">
<div class="tw-menu-text">Fiche web</div>
<span class="ui-btn-icon-top-betslip tw-betslip">&nbsp;</span>
</a>
<span class="speech" id="bsMaxQuota" data-enhance="true">0.0</span>
</li>
</ul>
</div>
</div>
<div id="cookiesConsentPopup" class="box-hidden">
<ul data-role="listview" class="cookies-info ui-listview" data-inset="false">
<li class="ui-li-static ui-body-inherit ui-first-child">This website uses cookies. By using the website you agree to this policy. More information can be found in the privacy policy.</li>
<li style="padding:4px;" class="ui-li-static ui-body-inherit ui-last-child">
<div class="ui-grid-a">
<div class="ui-block-a" style="width:40%;">
<div class="ui-btn ui-input-btn ui-btn-e ui-corner-all ui-shadow ui-mini ui-icon-check ui-btn-icon-left">OK<input type="button" data-iconpos="left" data-icon="check" data-mini="true" data-theme="e" value="OK" onclick="TwNavigation.resolveCookiesInfo(1);"></div>
</div>
<div class="ui-block-b" style="width:60%;">
<div class="ui-btn ui-input-btn ui-btn-c ui-corner-all ui-shadow ui-mini ui-icon-info ui-btn-icon-right">Protection des données personnelles<input type="button" data-iconpos="right" data-icon="info" data-mini="true" data-theme="c" value="Protection des données personnelles" onclick="TwNavigation.resolveCookiesInfo(2);"></div>
</div>
</div>
</li>
</ul>
</div>
</div><div class="ui-panel-dismiss"></div></body></html>