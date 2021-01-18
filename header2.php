
$_SESSION['credits'] = $solde;
?>
<div data-role="footer" data-theme="b" class="ui-navbar-custom ui-footer ui-bar-b ui-footer-fixed slideup" data-position="fixed" id="footer" data-tap-toggle="false" role="contentinfo">
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