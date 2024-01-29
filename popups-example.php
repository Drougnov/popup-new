<!-- popup-stylesheet & script -->
<link rel="stylesheet" href="https://fs.codelinden.com/wp-content/plugins/fansocial/assets/css/dev/popup.css">
<script src="https://fs.codelinden.com/wp-content/plugins/fansocial/assets/js/dev/popup.js"></script>
<!-- profile-stylesheet & js -->
<link rel="stylesheet" id="new-profile-stylesheet-css"
    href="https://fs.codelinden.com/wp-content/plugins/fansocial/assets/css/dev/profileStylesheet.css?ver=6.4.2"
    media="all">
<script src="https://fs.codelinden.com/wp-content/plugins/fansocial/assets/js/dev/profileScripts.js"></script>

<link rel="stylesheet" id="hello-elementor-child-style-css"
    href="https://fs.codelinden.com/wp-content/themes/hello-child/style.css?ver=3" media="all">
<link rel="stylesheet" href="https://unpkg.com/tachyons/css/tachyons.min.css">
<link rel="stylesheet" id="tachyons-stylesheet-css"
    href="https://fs.codelinden.com/wp-content/plugins/fansocial/assets/css/dev/customTachyonsStylesheet.css?ver=6.4.2"
    media="all">
<script src="https://fs.codelinden.com/wp-content/plugins/fansocial/assets/FINAL/js/main.js?ver=1.0" id="main-js">
</script>

<!-- outer wrapper -->
<section class="YEFiA gsCWf zaSgn KIZab">

    <!-- Inner container -->
    <div>

        <!-- popups-wrapper -->
        <div>

            <button onclick="open_popup({'target': '#call-popup'});">Open Call Popup</button>
            <!-- call popup -->
            <div class="elm_UoRWYY items-center justify-center fixed dn top-0 left-0 w-100 h-100 z-9999 overflow-auto"
                id="call-popup" data-popup-overlay-color="rgba(0,0,0,0.65)" data-popup-type="call-popup">
                <!-- inner wrapper -->
                <div class="elm_yNwqwJ top-0 w-100 flex items-center justify-center absolute">
                    <!-- container -->
                    <div class="elm_qJBugX flex flex-column pt24 pb24 pl24 pr24 bg-white relative">
                        <!-- header -->
                        <div class="elm_nZyPEx flex items-center justify-between absolute top-1 right-1">
                            <div class="elm_UOkrrN pointer">
                                <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'close', false, 'common_elm_SKjJTT, w1, h1' ); ?>
                            </div>
                        </div>

                        <!-- contents -->
                        <div class="elm_wdBhkC flex flex-column">
                            <!-- call_top-container -->
                            <div class="flex flex-column items-center gap10">
                                <!-- avatar-container -->
                                <div class="common_elm_luRCAg db bg-center cover br-100 relative pointer z-0  w3 h3"
                                    data-is-online="1" data-is-online-id=""
                                    style="background-image: url('<?php echo esc_url( $user->get_user_headshot_url( $creator_profile_id ) ); ?>');">
                                </div>
                                <div class="flex flex-column justify-center items-center gap4">
                                    <h4 class="f18 fw6 lh-24 black">Jenny’s Play house</h4>
                                    <span class="f7 lh-copy custom-text-secondary-color">@whamiko</span>
                                </div>
                            </div>

                            <!-- call_action-wrapper -->
                            <div class="flex flex-column gap16">
                                <!-- audio-call-button wrapper -->
                                <div
                                    class="common_elm_pRuaBa flex justify-center items-center gap16 pa3 bg-white custom-pale-blue-border active">
                                    <!-- audio-call-button container -->
                                    <div class="flex flex-column gap16 w-100">
                                        <!-- icon & text container -->
                                        <div class="common_elm_kISYmH flex items-center">
                                            <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'phone', false, 'common_elm_ltrLtN, common_elm_FSMoIG' ); ?>
                                            <div class="flex flex-column gap8">
                                                <h4 class="f4 fw6 lh-24 ttc black">Audio Call</h4>
                                                <div class="flex items-center gap8">
                                                    <div class="flex justify-center items-center gap4">
                                                        <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'token', false ); ?>
                                                        <span class="f4 fw6 lh-copy custom-text-primary-color">20</span>
                                                    </div>
                                                    <span class="f7 fw5 lh-copy custom-text-primary-color">every
                                                        30 seconds</span>
                                                </div>
                                            </div>
                                        </div>
                                        <button
                                            class="common_elm_HyHjWf dn justify-center items-center gap10 pt2 pb2 pl3 pr2 h48 br15 border-none custom-blue-button-bg-color"
                                            onclick="open_popup({'target': '#audio-call-popup'});">
                                            <span class="f6 fw5 lh-24 ttc tc white">Start Call</span>
                                            <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'arrow_right', false, 'common_elm_wPflhb, w20, h20' ); ?>
                                        </button>
                                    </div>
                                </div>

                                <!-- video-call-button wrapper -->
                                <div
                                    class="common_elm_pRuaBa flex justify-center items-center gap16 pa3 bg-white custom-pale-blue-border active">
                                    <!-- video-call-button container -->
                                    <div class="flex flex-column gap16 w-100">
                                        <!-- icon & text container -->
                                        <div class="common_elm_kISYmH flex items-center">
                                            <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'video call', false, 'common_elm_ltrLtN, common_elm_FSMoIG' ); ?>
                                            <div class="flex flex-column gap8">
                                                <h4 class="f4 fw6 lh-24 ttc black">Video Call</h4>
                                                <div class="flex items-center gap8">
                                                    <div class="flex justify-center items-center gap4">
                                                        <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'token', false ); ?>
                                                        <span
                                                            class="f4 fw6 lh-copy custom-text-primary-color">200</span>
                                                    </div>
                                                    <span class="f7 fw5 lh-copy custom-text-primary-color">every
                                                        30 seconds</span>
                                                </div>
                                            </div>
                                        </div>
                                        <button
                                            class="common_elm_HyHjWf dn justify-center items-center gap10 pt2 pb2 pl3 pr2 h48 br15 border-none custom-blue-button-bg-color"
                                            onclick="open_popup({'target': '#video-call-popup'});">
                                            <span class="f6 fw5 lh-24 ttc tc white">Start Call</span>
                                            <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'arrow_right', false, 'common_elm_wPflhb, w20, h20' ); ?>
                                        </button>
                                    </div>
                                </div>

                                <!-- balance button wrapper -->
                                <div
                                    class="common_elm_YwadSp flex justify-between items-center gap8 pt2 pb2 pl3 pr2 mt3">
                                    <div class="flex items-center gap8">
                                        <span class="f6 fw5 lh-24 black">Your balance</span>
                                        <div class="flex items-center gap4">
                                            <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'token', false, 'w20, h20' ); ?>
                                            <span class="f6 fw6 lh-copy black">1000</span>
                                        </div>
                                    </div>
                                    <button class="custom-add-token-button flex items-center gap4 pt1 pb1 pl2 pr2 br4">
                                        <span class="f7 fw5 black">Add Token</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button onclick="open_popup({'target': '#audio-call-popup'});">Open Audio Call Popup</button>
            <!-- audio-call popup -->
            <div class="elm_UoRWYY items-center justify-center fixed dn top-0 left-0 w-100 h-100 z-9999 overflow-auto"
                id="audio-call-popup" data-popup-overlay-color="rgba(0,0,0,0.65)" data-popup-type="audio-call-popup"
                data-popup-position="centered">
                <!-- inner wrapper -->
                <div class="elm_yNwqwJ top-0 w-100 flex items-center justify-center absolute">
                    <!-- container -->
                    <div class="elm_qJBugX flex flex-column pt24 pb24 pl24 pr24 bg-white relative">
                        <!-- header -->
                        <div class="elm_nZyPEx flex items-start justify-between">
                            <!-- header-left -->
                            <div class="flex items-center gap10">
                                <!-- avatar-container -->
                                <div class="elm_lnMqFi common_elm_luRCAg db bg-center cover br-100 relative pointer z-0 w40 h40"
                                    data-is-online="1" data-is-online-id=""
                                    style="background-image: url('<?php echo esc_url( $user->get_user_headshot_url( $creator_profile_id ) ); ?>');">
                                </div>
                                <h4 class="f18 fw6 lh-24 black">Jenny’s Play house</h4>
                                <span class="f6 lh-24 dark-gray o-50">@whamiko</span>
                            </div>
                            <!-- close-icon -->
                            <div class="elm_UOkrrN pointer">
                                <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'close', false, 'common_elm_SKjJTT, w24, h24' ); ?>
                            </div>
                        </div>

                        <!-- contents -->
                        <div class="elm_wdBhkC flex flex-column">
                            <!-- popup-contents container -->
                            <div class="elm_yZbEaP flex flex-column items-center">
                                <!-- audio-container -->
                                <div class="elm_MfHKEl w-100 db br3 relative">
                                    <span class="common_elm_JEFjTk f6 white absolute">00:00:00</span>
                                    <!-- audio/video buttons container -->
                                    <div class="elm_QjZWHZ flex justify-end items-center pl2 pr24 absolute w-100">
                                        <!-- mic, end call button container -->
                                        <div
                                            class="elm_lXexhu flex gap14 pt2 pb2 pl10 pr10 absolute bottom-0 left-0 right-0 center">
                                            <div
                                                class="common_elm_IdweWm flex justify-center items-center gap10 w40 h40 pointer">
                                                <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'microphone_off', false, 'common_elm_wPflhb, w24, h24' ); ?>
                                            </div>
                                            <div
                                                class="common_elm_IdweWm flex justify-center items-center gap10 w40 h40 custom-pink-button-bg-color pointer">
                                                <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'phone_off', false, 'common_elm_SKjJTT, w24, h24' ); ?>
                                            </div>
                                        </div>

                                        <div class="elm_cgJmHg flex items-center mb3">
                                            <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'private_chat', false, 'common_elm_wPflhb, w24, h24, pointer' ); ?>
                                            <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'fullscreen', false, 'common_elm_wPflhb, w24, h24, pointer' ); ?>
                                        </div>
                                    </div>
                                </div>

                                <!-- balance button wrapper -->
                                <div class="common_elm_YwadSp flex justify-between items-center gap8 pt2 pb2 pl3 pr2">
                                    <div class="flex items-center gap8">
                                        <span class="f6 fw5 lh-24 black">Your balance</span>
                                        <div class="flex items-center gap4">
                                            <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'token', false, 'w20, h20' ); ?>
                                            <span class="f6 fw6 lh-copy black">1000</span>
                                        </div>
                                    </div>
                                    <button class="custom-add-token-button flex items-center gap4 pt1 pb1 pl2 pr2 br4">
                                        <span class="f7 fw5 black">Add Token</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button onclick="open_popup({'target': '#video-call-popup'});">Open Video Call Popup</button>
            <!-- video-call popup -->
            <div class="elm_UoRWYY items-center justify-center fixed dn top-0 left-0 w-100 h-100 z-9999 overflow-auto"
                id="video-call-popup" data-popup-overlay-color="rgba(0,0,0,0.65)" data-popup-type="video-call-popup"
                data-popup-position="centered">
                <!-- inner wrapper -->
                <div class="elm_yNwqwJ top-0 w-100 flex items-center justify-center absolute">
                    <!-- container -->
                    <div class="elm_qJBugX flex flex-column pt24 pb24 pl24 pr24 bg-white relative">
                        <!-- header -->
                        <div class="elm_nZyPEx flex items-start justify-between">
                            <!-- header-left -->
                            <div class="flex items-center gap10">
                                <!-- avatar-container -->
                                <div class="elm_lnMqFi common_elm_luRCAg db bg-center cover br-100 relative pointer z-0 w40 h40"
                                    data-is-online="1" data-is-online-id=""
                                    style="background-image: url('<?php echo esc_url( $user->get_user_headshot_url( $creator_profile_id ) ); ?>');">
                                </div>
                                <h4 class="f18 fw6 lh-24 black">Jenny’s Play house</h4>
                                <span class="f6 lh-24 dark-gray o-50">@whamiko</span>
                            </div>
                            <!-- close-icon -->
                            <div class="elm_UOkrrN pointer">
                                <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'close', false, 'common_elm_SKjJTT, w24, h24' ); ?>
                            </div>
                        </div>

                        <!-- contents -->
                        <div class="elm_wdBhkC flex flex-column">
                            <!-- popup-contents container -->
                            <div class="elm_yZbEaP flex flex-column items-center">
                                <!-- video-container -->
                                <div class="elm_tkDREF w-100 db br3 relative">
                                    <span class="common_elm_JEFjTk f6 white absolute">00:00:00</span>
                                    <!-- audio/video buttons container -->
                                    <div class="elm_QjZWHZ flex justify-between items-center pl2 pr24 absolute w-100">
                                        <!-- mini-video-container -->
                                        <div class="elm_bvwScm db o-90 custom-pale-blue-bg-color"></div>
                                        <!-- mic, video, end call button container -->
                                        <div class="elm_lXexhu flex gap14 pt2 pb2 pl10 pr10">
                                            <div
                                                class="common_elm_IdweWm flex justify-center items-center gap10 w40 h40 pointer">
                                                <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'video_off', false, 'common_elm_wPflhb, w24, h24' ); ?>
                                            </div>
                                            <div
                                                class="common_elm_IdweWm flex justify-center items-center gap10 w40 h40 pointer">
                                                <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'microphone_off', false, 'common_elm_wPflhb, w24, h24' ); ?>
                                            </div>
                                            <div
                                                class="common_elm_IdweWm flex justify-center items-center gap10 w40 h40 custom-pink-button-bg-color pointer">
                                                <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'phone_off', false, 'common_elm_SKjJTT, w24, h24' ); ?>
                                            </div>
                                        </div>

                                        <div class="elm_cgJmHg flex items-center">
                                            <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'private_chat', false, 'common_elm_wPflhb, w24, h24, pointer' ); ?>
                                            <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'fullscreen', false, 'common_elm_wPflhb, w24, h24, pointer' ); ?>
                                        </div>
                                    </div>
                                </div>

                                <!-- balance button wrapper -->
                                <div class="common_elm_YwadSp flex justify-between items-center gap8 pt2 pb2 pl3 pr2">
                                    <div class="flex items-center gap8">
                                        <span class="f6 fw5 lh-24 black">Your balance</span>
                                        <div class="flex items-center gap4">
                                            <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'token', false, 'w20, h20' ); ?>
                                            <span class="f6 fw6 lh-copy black">1000</span>
                                        </div>
                                    </div>
                                    <button class="custom-add-token-button flex items-center gap4 pt1 pb1 pl2 pr2 br4">
                                        <span class="f7 fw5 black">Add Token</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button onclick="open_popup({'target': '#allow-permission-popup'});">Open Allow Permission Popup</button>
            <!-- allow-permission popup -->
            <div class="elm_UoRWYY items-center justify-center fixed dn top-0 left-0 w-100 h-100 z-9999 overflow-auto"
                id="allow-permission-popup" data-popup-overlay-color="rgba(0,0,0,0.65)"
                data-popup-type="allow-permission-popup" data-popup-position="centered">
                <!-- inner wrapper -->
                <div class="elm_yNwqwJ top-0 w-100 flex items-center justify-center absolute">
                    <!-- container -->
                    <div class="elm_qJBugX flex flex-column pt24 pb24 pl24 pr24 bg-white relative">
                        <!-- header -->
                        <div class="elm_nZyPEx flex items-start justify-between gap10">
                            <h2 class="f4 fw6 lh-24 black">Please allow below permission to start call:</h2>
                            <!-- close-icon -->
                            <div class="elm_UOkrrN pointer">
                                <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'close', false, 'common_elm_SKjJTT, w24, h24' ); ?>
                            </div>
                        </div>

                        <!-- contents -->
                        <div class="elm_wdBhkC flex flex-column">
                            <p class="f6 fw5 lh-copy black mb0">Please allow below permission to start call:</p>
                            <!-- icon-wrapper -->
                            <div class="elm_mIhnWn flex items-center">
                                <div class="flex flex-column items-center gap16 pt3 pb3 pl24 pr24">
                                    <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'microphone_off', false, 'common_elm_yKlMTD, common_elm_hQwnHR' ); ?>
                                    <span class="fw6 fw5 custom-pink-text-color">Camera</span>
                                </div>
                                <div class="flex flex-column items-center gap16 pt3 pb3 pl24 pr24">
                                    <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'microphone_off', false, 'common_elm_yKlMTD, common_elm_hQwnHR' ); ?>
                                    <span class="fw6 fw5 custom-pink-text-color">Microphone</span>
                                </div>
                            </div>

                            <!-- accordion-container -->
                            <div data-accordion="10" class="elm_EMJuop flex flex-column">
                                <div class="elm_hofqVA flex items-center gap8 accordion-trigger"
                                    data-accordion-trigger="10">
                                    <span>Troubleshoot</span>
                                    <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'arrow_down', false, 'common_elm_qEZSJD, w1, h1' ); ?>
                                </div>
                                <div class="accordion-content" data-accordion-content="10">
                                    <div class="flex flex-column gap8">
                                        <div class="flex flex-start gap8">
                                            <p class="f6 fw5 mb0 custom-soft-blue-text-color">Use your camera and
                                                microphone
                                                (Chrome)</p>
                                            <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'arrow_right up', false, 'common_elm_PdkEBD, w20, h20' ); ?>
                                        </div>
                                        <div class="flex flex-start gap8">
                                            <p class="f6 fw5 mb0 custom-soft-blue-text-color">Change Websites settings
                                                in
                                                Safari on Mac</p>
                                            <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'arrow_right up', false, 'common_elm_PdkEBD, w20, h20' ); ?>
                                        </div>
                                        <div class="flex flex-start gap8">
                                            <p class="f6 fw5 mb0 custom-soft-blue-text-color">How to manage your camera
                                                and
                                                microphone permissions with Firefox</p>
                                            <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'arrow_right up', false, 'common_elm_PdkEBD, w20, h20' ); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button onclick="open_popup({'target': '#sign-in-popup'});">Open Sign In Popup</button>
            <!-- sign-in popup -->
            <div class="elm_UoRWYY items-center justify-center fixed dn top-0 left-0 w-100 h-100 z-9999 overflow-auto"
                id="sign-in-popup" data-popup-overlay-color="rgba(0,0,0,0.65)" data-popup-type="sign-in-popup">
                <!-- inner wrapper -->
                <div class="elm_yNwqwJ top-0 w-100 flex items-center justify-center absolute">
                    <!-- container -->
                    <div class="elm_qJBugX flex flex-column relative">
                        <!-- contents -->
                        <div class="elm_wdBhkC flex justify-center items-center bg-white overflow-hidden">
                            <!-- img-container -->
                            <div class="elm_BaWZBP db w-100 h-100 cover bg-center"
                                style="background: url(https://images.pexels.com/photos/414612/pexels-photo-414612.jpeg?cs=srgb&dl=pexels-james-wheeler-414612.jpg&fm=jpg);">
                            </div>
                            <!-- text-container -->
                            <div class="elm_QFRNzh flex flex-column w-100 h-100">
                                <h1 class="f3 fw6 custom-text-primary-color">Sign in</h1>
                                <!-- form -->
                                <form class="elm_rbxswH flex flex-column">
                                    <!-- warning-bar -->
                                    <div
                                        class="flex items-center gap10 pt10 pb10 pl10 pr10 br10 custom-warning-bg-color">
                                        <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'info', false, 'common_elm_wPflhb, w24, h24, o-90' ); ?>
                                        <p class="f6 lh-copy white mb0">You must sign in before making any purchase.</p>
                                    </div>
                                    <!-- input-field -->
                                    <div class="flex flex-column">
                                        <label for="email" class="f7 lh-24 custom-text-primary-color">Email</label>
                                        <input type="email" id="email" name="email" placeholder="Enter your email"
                                            class="h48 pt12 pb12 pl10 pr10 br10 custom-pale-blue-border bg-white f5 lh-24 custom-text-primary-color">
                                    </div>
                                    <!-- input-field -->
                                    <div class="flex flex-column">
                                        <label for="password"
                                            class="f7 lh-24 custom-text-primary-color">Password</label>
                                        <input type="password" id="password" name="password"
                                            placeholder="Enter your password"
                                            class="h48 pt12 pb12 pl10 pr10 br10 custom-pale-blue-border bg-white f5 lh-24 custom-text-primary-color">
                                    </div>
                                    <!-- checkbox-container -->
                                    <div class="flex items-start gap10">
                                        <input class="common_elm_OcNOvg o-0 mr0" type="checkbox" id="remember-me"
                                            name="remember-me" value="remember-me">
                                        <label for="remember"
                                            class="common_elm_EdoBKC relative f5 lh-24 custom-text-primary-color">Remember
                                            me</label>
                                    </div>
                                    <button
                                        class="flex justify-center items-center gap10 br10 pt2 pb2 pl24 pr24 h48 custom-brand-pink-button-bg-color">
                                        <span class="f4 fw5 lh-24 white">Sign in</span>
                                    </button>
                                    <a href="" class="f7 fw6 tc ttc custom-pink-button-text-color">Forgot Password</a>
                                    <button
                                        class="h48 flex justify-center items-center gap16 pt2 pb2 pl2 pr24 br10 bg-white-50 custom-pale-blue-border-big">
                                        <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'google', false, 'w2, h2' ); ?>
                                        <span class="f5 fw5 lh-24 custom-text-secondary-color">Sign in with
                                            google</span>
                                    </button>
                                    <button
                                        class="h48 flex justify-center items-center gap16 pt2 pb2 pl2 pr24 br10 bg-white-50 custom-pale-blue-border-big">
                                        <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'X', false, 'w2, h2' ); ?>
                                        <span class="f5 fw5 lh-24 custom-text-secondary-color">Sign in with
                                            twitter</span>
                                    </button>
                                </form>
                                <p class="f6 lh-24 tc custom-text-primary-color">Don't have an account? <a
                                        class="f6 fw6 lh-24 custom-pink-button-text-color"
                                        href="https://fs.codelinden.com/sign-up/">Sign Up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button onclick="open_popup({'target': '#subscription-popup'});">Open Subscription Popup</button>
            <!-- subscription popup -->
            <div class="elm_UoRWYY items-center justify-center fixed dn top-0 left-0 w-100 h-100 z-9999 overflow-auto"
                id="subscription-popup" data-popup-type="subscription-popup">
                <!-- inner wrapper -->
                <div class="elm_yNwqwJ top-0 w-100 flex items-center justify-center absolute">
                    <!-- container -->
                    <div class="elm_qJBugX flex flex-column bg-white relative">
                        <!-- header -->
                        <div class="elm_UOkrrN pointer">
                            <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'close', false, 'common_elm_GRbGNf, AYaOY, absolute, right-2, top-2, pointer, w40, h40' ); ?>
                        </div>

                        <!-- contents -->
                        <div class="elm_wdBhkC flex flex-column">
                            <!-- popup contents container -->
                            <div class="elm_LkrQrx flex flex-column">
                                <!-- profile-container -->
                                <div class="elm_fgcaQs flex flex-column items-center" data-verified="true">
                                    <!-- avatar-container -->
                                    <div class="elm_iiWBxk common_elm_luRCAg db bg-center cover br-100 relative pointer z-0"
                                        data-is-online="1" data-is-online-id=""
                                        style="background-image: url('<?php echo esc_html( $user->get_user_headshot_url( $creator_profile_id ) ); ?>');">
                                    </div>

                                    <div class="flex justify-center items-start gap8" data-verified="true">
                                        <h4 class="f3 fw6 lh-24 custom-text-primary-color">
                                            <?php echo esc_html( $display_name ); ?></h4>
                                        <div class="elm_XsLwut dn justify-center items-center">
                                            <?php if ( $user->is_premium_user( $profile_owner_id ) ) {
                                                echo \MadLinksCoding\UI_Components::render_svg_icon( 'verified', false, 'common_elm_FSMoIG, dn, w24, h24' );
                                            } ?>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap16">
                                        <div class="flex items-start gap4 o-70">
                                            <span class="f6 custom-text-primary-color">
                                                <?php echo esc_html( formatNumber( $profile_followers ) ); ?>
                                            </span>
                                            <span class="f6 custom-text-primary-color">
                                                <?php echo esc_html( pluralize_word( $profile_followers, 'Follower', 'Followers', 'fansocial' ) ); ?>
                                            </span>
                                        </div>
                                        <div class="flex items-start gap4 o-70">
                                            <span class="f6 custom-text-primary-color">
                                                <?php echo esc_html( formatNumber( $profile_subscribers ) ); ?>
                                            </span>
                                            <span class="f6 custom-text-primary-color">
                                                <?php echo esc_html( pluralize_word( $profile_subscribers, 'Subscriber', 'Subscribers', 'fansocial' ) ); ?>
                                            </span>
                                        </div>
                                        <div class="flex items-start gap4 o-70">
                                            <span class="f6 custom-text-primary-color">
                                                <?php echo esc_html( formatNumber( $profile_likes ) ); ?>
                                            </span>
                                            <span class="f6 custom-text-primary-color">
                                                <?php echo esc_html( pluralize_word( $profile_likes, 'Like', 'Likes', 'fansocial' ) ); ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <h1 class="f2 fw6 mt0 mb0 tc">
                                    <?php _e( 'Subscribe & Unlock', 'fansocial' ); ?> <span
                                        class="f2 fw6 custom-pink-button-text-color"><?php _e( 'My Exclusive Contents', 'fansocial' ); ?></span>
                                </h1>

                                <!-- tier-container -->
                                <div class="elm_aKooqp">
                                    <div class="splide">
                                        <div class="splide__track">
                                            <ul class="splide__list">
                                                <li class="splide__slide">
                                                    <!-- slide-content__container -->
                                                    <div
                                                        class="elm_QsQGRv flex flex-column pt24 pb24 pl24 pr24 bg-white relative">
                                                        <!-- slide-content__top-container -->
                                                        <div class="elm_XSuDmw flex flex-column">
                                                            <h2 class="common_elm_gkofRa fw7 custom-text-primary-color">
                                                                <?php _e( 'Free Tier', 'fansocial' ); ?>
                                                            </h2>

                                                            <!-- img video gallery count container -->
                                                            <div class="flex items-center gap8">
                                                                <div class="common_elm_cJanhR flex items-center">
                                                                    <span
                                                                        class="f5 custom-text-secondary-color">69</span>
                                                                    <div
                                                                        class="common_elm_hDDUsS flex justify-center items-center">
                                                                        <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'video', false, 'common_elm_qEZSJD, w20, h20' ); ?>
                                                                    </div>
                                                                </div>
                                                                <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'livestream_dot', false, 'common_elm_qEZSJD, w8, h8' ); ?>
                                                                <div class="common_elm_cJanhR flex items-center">
                                                                    <span
                                                                        class="f5 custom-text-secondary-color">80</span>
                                                                    <div
                                                                        class="common_elm_hDDUsS flex justify-center items-center">
                                                                        <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'image', false, 'common_elm_qEZSJD, w20, h20' ); ?>
                                                                    </div>
                                                                </div>
                                                                <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'livestream_dot', false, 'common_elm_qEZSJD, w8, h8' ); ?>
                                                                <div class="common_elm_cJanhR flex items-center">
                                                                    <span
                                                                        class="f5 custom-text-secondary-color">80</span>
                                                                    <div
                                                                        class="common_elm_hDDUsS flex justify-center items-center">
                                                                        <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'media', false, 'common_elm_qEZSJD, w20, h20' ); ?>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <p class="f5 lh-24 ma0 custom-text-primary-color"
                                                                data-read-more="4">Become the Premium
                                                                chicken member! Watch all my chicken +
                                                                fruit eat...<a
                                                                    class="f7 lh-24 custom-text-secondary-color"
                                                                    data-read-more-link="3"><span
                                                                        class="f5 lh-24 ma0 custom-text-primary-color">...</span>
                                                                    Read more</a><span data-read-more-content="4"
                                                                    class="f5 lh-24 ma0 custom-text-primary-color">ing
                                                                    content! updates weekly</span>
                                                            </p>

                                                            <!-- price-container -->
                                                            <div class="common_elm_fharid flex items-center br4">
                                                                <section class="flex items-end gap4">
                                                                    <h1
                                                                        class="common_elm_wULoUY f1 fw5 custom-text-primary-color ma0">
                                                                        Free</h1>
                                                                </section>
                                                            </div>
                                                        </div>

                                                        <!-- feature__list-wrapper -->
                                                        <div class="flex flex-column gap16 br4">
                                                            <span
                                                                class="f5 fw6 custom-text-secondary-color"><?php _e( 'Member benefits', 'fansocial' ); ?></span>
                                                            <ul class="flex flex-column gap16 pt2 pb2 br4">
                                                                <li class="flex items-center gap8 ma0">
                                                                    <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'check', false, 'common_elm_wvkNnj, w24, h24' ); ?>
                                                                    <p
                                                                        class="common_elm_wnoARd f5 fw5 custom-text-secondary-color ma0">
                                                                        10% off on all Merchandise</p>
                                                                </li>
                                                                <li class="flex items-center gap8 ma0">
                                                                    <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'check', false, 'common_elm_wvkNnj, w24, h24' ); ?>
                                                                    <p class="f5 fw5 custom-text-primary-color ma0">
                                                                        <span
                                                                            class="common_elm_wnoARd f5 fw5 custom-text-secondary-color">10%</span>
                                                                        off on custom request
                                                                    </p>
                                                                </li>
                                                                <li class="flex items-center gap8 ma0">
                                                                    <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'check', false, 'common_elm_wvkNnj, w24, h24' ); ?>
                                                                    <p class="f5 fw5 custom-text-primary-color ma0">
                                                                        <span
                                                                            class="common_elm_wnoARd f5 fw5 custom-text-secondary-color">10%</span>
                                                                        off on pay per view videos
                                                                    </p>
                                                                </li>
                                                                <li class="flex items-center gap8 ma0">
                                                                    <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'check', false, 'common_elm_wvkNnj, w24, h24' ); ?>
                                                                    <p class="f5 fw5 custom-text-primary-color ma0">
                                                                        Receive <span
                                                                            class="common_elm_wnoARd f5 fw5 custom-text-secondary-color">100
                                                                            Free tokens</span> each
                                                                        month</p>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <!-- subscribe__button-container -->
                                                        <div class="common_elm_CjMfES flex justify-center items-end tc">
                                                            <button
                                                                class="common_elm_BHmrNz flex justify-center items-center gap10 w-100 pt2 pb2 pl24 pr24 o-20 br10 border-none">
                                                                <span
                                                                    class="common_elm_yFoPSW f4 fw6 lh-24 custom-pink-text-color">Subscribe</span>
                                                            </button>
                                                            <p
                                                                class="common_elm_wEItrd dn f4 fw7 ma0 custom-pink-text-color">
                                                                You are a member of this tier</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="splide__slide">
                                                    <!-- slide-content__container -->
                                                    <div
                                                        class="elm_QsQGRv flex flex-column pt24 pb24 pl24 pr24 bg-white relative subscribed">
                                                        <!-- slide-content__top-container -->
                                                        <div class="elm_XSuDmw flex flex-column">
                                                            <h2 class="common_elm_gkofRa fw7 custom-text-primary-color">
                                                                Orange Tier</h2>

                                                            <!-- img video gallery count container -->
                                                            <div class="flex items-center gap8">
                                                                <div class="common_elm_cJanhR flex items-center">
                                                                    <span
                                                                        class="f5 custom-text-secondary-color">10</span>
                                                                    <div
                                                                        class="common_elm_hDDUsS flex justify-center items-center">
                                                                        <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'video', false, 'common_elm_qEZSJD, w20, h20' ); ?>
                                                                    </div>
                                                                </div>
                                                                <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'livestream_dot', false, 'common_elm_qEZSJD, w8, h8' ); ?>
                                                                <div class="common_elm_cJanhR flex items-center">
                                                                    <span
                                                                        class="f5 custom-text-secondary-color">8</span>
                                                                    <div
                                                                        class="common_elm_hDDUsS flex justify-center items-center">
                                                                        <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'image', false, 'common_elm_qEZSJD, w20, h20' ); ?>
                                                                    </div>
                                                                </div>
                                                                <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'livestream_dot', false, 'common_elm_qEZSJD, w8, h8' ); ?>
                                                                <div class="common_elm_cJanhR flex items-center">
                                                                    <span
                                                                        class="f5 custom-text-secondary-color">10</span>
                                                                    <div
                                                                        class="common_elm_hDDUsS flex justify-center items-center">
                                                                        <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'media', false, 'common_elm_qEZSJD, w20, h20' ); ?>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <p class="f5 lh-24 ma0 custom-text-primary-color">
                                                                Become the orange member! Watch all my
                                                                orange eating content! updates weekly
                                                            </p>

                                                            <!-- price-container -->
                                                            <div class="common_elm_fharid flex flex-column gap4 br4">
                                                                <section class="flex items-end gap4">
                                                                    <h1
                                                                        class="common_elm_wULoUY f1 fw5 custom-text-primary-color ma0">
                                                                        $2.99</h1>
                                                                    <span
                                                                        class="common_elm_VlTiRj f5 fw5 strike custom-text-primary-color">$5.99</span>
                                                                </section>
                                                                <span
                                                                    class="common_elm_jiTacp f6 fw5 custom-text-primary-color">Per
                                                                    month</span>
                                                            </div>
                                                        </div>

                                                        <!-- feature__list-wrapper -->
                                                        <div class="flex flex-column gap16 br4">
                                                            <span class="f5 fw6 custom-text-secondary-color">Member
                                                                benefits</span>
                                                            <ul class="flex flex-column gap16 pt2 pb2 br4">
                                                                <li class="flex items-center gap8 ma0">
                                                                    <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'check', false, 'common_elm_wvkNnj, w24, h24' ); ?>
                                                                    <p
                                                                        class="common_elm_wnoARd f5 fw5 custom-text-secondary-color ma0">
                                                                        10% off on all Merchandise</p>
                                                                </li>
                                                                <li class="flex items-center gap8 ma0">
                                                                    <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'check', false, 'common_elm_wvkNnj, w24, h24' ); ?>
                                                                    <p class="f5 fw5 custom-text-primary-color ma0">
                                                                        <span
                                                                            class="common_elm_wnoARd f5 fw5 custom-text-secondary-color">10%</span>
                                                                        off on custom request
                                                                    </p>
                                                                </li>
                                                                <li class="flex items-center gap8 ma0">
                                                                    <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'check', false, 'common_elm_wvkNnj, w24, h24' ); ?>
                                                                    <p class="f5 fw5 custom-text-primary-color ma0">
                                                                        <span
                                                                            class="common_elm_wnoARd f5 fw5 custom-text-secondary-color">10%</span>
                                                                        off on pay per view videos
                                                                    </p>
                                                                </li>
                                                                <li class="flex items-center gap8 ma0">
                                                                    <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'check', false, 'common_elm_wvkNnj, w24, h24' ); ?>
                                                                    <p class="f5 fw5 custom-text-primary-color ma0">
                                                                        Receive <span
                                                                            class="common_elm_wnoARd f5 fw5 custom-text-secondary-color">100
                                                                            Free tokens</span> each
                                                                        month</p>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <!-- subscribe__button-container -->
                                                        <div class="common_elm_CjMfES flex justify-center items-end tc">
                                                            <button
                                                                class="common_elm_BHmrNz flex justify-center items-center gap10 w-100 pt2 pb2 pl24 pr24 o-20 br10 border-none">
                                                                <span
                                                                    class="common_elm_yFoPSW f4 fw6 lh-24 custom-pink-text-color">Subscribe</span>
                                                            </button>
                                                            <p
                                                                class="common_elm_wEItrd dn f4 fw7 ma0 custom-pink-text-color">
                                                                You are a member of this tier</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="splide__slide">
                                                    <!-- slide-content__container -->
                                                    <div
                                                        class="elm_QsQGRv flex flex-column pt24 pb24 pl24 pr24 bg-white relative">
                                                        <!-- slide-content__top-container -->
                                                        <div class="elm_XSuDmw flex flex-column">
                                                            <h2 class="common_elm_gkofRa fw7 custom-text-primary-color">
                                                                Mango Tier</h2>

                                                            <!-- img video gallery count container -->
                                                            <div class="flex items-center gap8">
                                                                <div class="common_elm_cJanhR flex items-center">
                                                                    <span
                                                                        class="f5 custom-text-secondary-color">20</span>
                                                                    <div
                                                                        class="common_elm_hDDUsS flex justify-center items-center">
                                                                        <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'video', false, 'common_elm_qEZSJD, w20, h20' ); ?>
                                                                    </div>
                                                                </div>
                                                                <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'livestream_dot', false, 'common_elm_qEZSJD, w8, h8' ); ?>
                                                                <div class="common_elm_cJanhR flex items-center">
                                                                    <span
                                                                        class="f5 custom-text-secondary-color">40</span>
                                                                    <div
                                                                        class="common_elm_hDDUsS flex justify-center items-center">
                                                                        <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'image', false, 'common_elm_qEZSJD, w20, h20' ); ?>
                                                                    </div>
                                                                </div>
                                                                <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'livestream_dot', false, 'common_elm_qEZSJD, w8, h8' ); ?>
                                                                <div class="common_elm_cJanhR flex items-center">
                                                                    <span
                                                                        class="f5 custom-text-secondary-color">8</span>
                                                                    <div
                                                                        class="common_elm_hDDUsS flex justify-center items-center">
                                                                        <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'media', false, 'common_elm_qEZSJD, w20, h20' ); ?>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <p class="f5 lh-24 ma0 custom-text-primary-color">
                                                                Become the Mango member! Watch all my
                                                                mango eating content! updates weekly</p>

                                                            <!-- price-container -->
                                                            <div class="common_elm_fharid flex flex-column gap4 br4">
                                                                <section class="flex items-end gap4">
                                                                    <h1
                                                                        class="common_elm_wULoUY f1 fw5 custom-text-primary-color ma0">
                                                                        $6.99</h1>
                                                                    <span
                                                                        class="common_elm_VlTiRj f5 fw5 strike custom-text-primary-color">$12.99</span>
                                                                </section>
                                                                <span
                                                                    class="common_elm_jiTacp f6 fw5 custom-text-primary-color">Per
                                                                    month</span>
                                                            </div>
                                                        </div>

                                                        <!-- feature__list-wrapper -->
                                                        <div class="flex flex-column gap16 br4">
                                                            <span class="f5 fw6 custom-text-secondary-color">Member
                                                                benefits</span>
                                                            <ul class="flex flex-column gap16 pt2 pb2 br4">
                                                                <li class="flex items-center gap8 ma0">
                                                                    <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'check', false, 'common_elm_wvkNnj, w24, h24' ); ?>
                                                                    <p
                                                                        class="common_elm_wnoARd f5 fw5 custom-text-secondary-color ma0">
                                                                        10% off on all Merchandise</p>
                                                                </li>
                                                                <li class="flex items-center gap8 ma0">
                                                                    <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'check', false, 'common_elm_wvkNnj, w24, h24' ); ?>
                                                                    <p class="f5 fw5 custom-text-primary-color ma0">
                                                                        <span
                                                                            class="common_elm_wnoARd f5 fw5 custom-text-secondary-color">10%</span>
                                                                        off on custom request
                                                                    </p>
                                                                </li>
                                                                <li class="flex items-center gap8 ma0">
                                                                    <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'check', false, 'common_elm_wvkNnj, w24, h24' ); ?>
                                                                    <p class="f5 fw5 custom-text-primary-color ma0">
                                                                        <span
                                                                            class="common_elm_wnoARd f5 fw5 custom-text-secondary-color">10%</span>
                                                                        off on pay per view videos
                                                                    </p>
                                                                </li>
                                                                <li class="flex items-center gap8 ma0">
                                                                    <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'check', false, 'common_elm_wvkNnj, w24, h24' ); ?>
                                                                    <p class="f5 fw5 custom-text-primary-color ma0">
                                                                        Receive <span
                                                                            class="common_elm_wnoARd f5 fw5 custom-text-secondary-color">100
                                                                            Free tokens</span> each
                                                                        month</p>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <!-- subscribe__button-container -->
                                                        <div class="common_elm_CjMfES flex justify-center items-end tc">
                                                            <button
                                                                class="common_elm_BHmrNz flex justify-center items-center gap10 w-100 pt2 pb2 pl24 pr24 o-20 br10 border-none">
                                                                <span
                                                                    class="common_elm_yFoPSW f4 fw6 lh-24 custom-pink-text-color">Subscribe</span>
                                                            </button>
                                                            <p
                                                                class="common_elm_wEItrd dn f4 fw7 ma0 custom-pink-text-color">
                                                                You are a member of this tier</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="splide__slide">
                                                    <!-- slide-content__container -->
                                                    <div
                                                        class="elm_QsQGRv flex flex-column pt24 pb24 pl24 pr24 bg-white relative">
                                                        <!-- slide-content__top-container -->
                                                        <div class="elm_XSuDmw flex flex-column">
                                                            <h2 class="common_elm_gkofRa fw7 custom-text-primary-color">
                                                                Chicken Tier</h2>

                                                            <!-- img video gallery count container -->
                                                            <div class="flex items-center gap8">
                                                                <div class="common_elm_cJanhR flex items-center">
                                                                    <span
                                                                        class="f5 custom-text-secondary-color">69</span>
                                                                    <div
                                                                        class="common_elm_hDDUsS flex justify-center items-center">
                                                                        <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'video', false, 'common_elm_qEZSJD, w20, h20' ); ?>
                                                                    </div>
                                                                </div>
                                                                <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'livestream_dot', false, 'common_elm_qEZSJD, w8, h8' ); ?>
                                                                <div class="common_elm_cJanhR flex items-center">
                                                                    <span
                                                                        class="f5 custom-text-secondary-color">80</span>
                                                                    <div
                                                                        class="common_elm_hDDUsS flex justify-center items-center">
                                                                        <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'image', false, 'common_elm_qEZSJD, w20, h20' ); ?>
                                                                    </div>
                                                                </div>
                                                                <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'livestream_dot', false, 'common_elm_qEZSJD, w8, h8' ); ?>
                                                                <div class="common_elm_cJanhR flex items-center">
                                                                    <span
                                                                        class="f5 custom-text-secondary-color">80</span>
                                                                    <div
                                                                        class="common_elm_hDDUsS flex justify-center items-center">
                                                                        <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'media', false, 'common_elm_qEZSJD, w20, h20' ); ?>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <p class="f5 lh-24 ma0 custom-text-primary-color"
                                                                data-read-more="5">Become the Premium
                                                                chicken member! Watch all my chicken +
                                                                fruit eat...<a
                                                                    class="f7 lh-24 custom-text-secondary-color"
                                                                    data-read-more-link="5"><span
                                                                        class="f5 lh-24 ma0 custom-text-primary-color">...</span>
                                                                    Read more</a><span data-read-more-content="5"
                                                                    class="f5 lh-24 ma0 custom-text-primary-color">ing
                                                                    content! updates weekly</span>
                                                            </p>

                                                            <!-- price-container -->
                                                            <div class="common_elm_fharid flex flex-column gap4 br4">
                                                                <section class="flex items-end gap4">
                                                                    <h1
                                                                        class="common_elm_wULoUY f1 fw5 custom-text-primary-color ma0">
                                                                        $8.99</h1>
                                                                    <span
                                                                        class="common_elm_VlTiRj f5 fw5 strike custom-text-primary-color">$15.99</span>
                                                                </section>
                                                                <span
                                                                    class="common_elm_jiTacp f6 fw5 custom-text-primary-color">Per
                                                                    month</span>
                                                            </div>
                                                        </div>

                                                        <!-- feature__list-wrapper -->
                                                        <div class="flex flex-column gap16 br4">
                                                            <span class="f5 fw6 custom-text-secondary-color">Member
                                                                benefits</span>
                                                            <ul class="flex flex-column gap16 pt2 pb2 br4">
                                                                <li class="flex items-center gap8 ma0">
                                                                    <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'check', false, 'common_elm_wvkNnj, w24, h24' ); ?>
                                                                    <p
                                                                        class="common_elm_wnoARd f5 fw5 custom-text-secondary-color ma0">
                                                                        10% off on all Merchandise</p>
                                                                </li>
                                                                <li class="flex items-center gap8 ma0">
                                                                    <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'check', false, 'common_elm_wvkNnj, w24, h24' ); ?>
                                                                    <p class="f5 fw5 custom-text-primary-color ma0">
                                                                        <span
                                                                            class="common_elm_wnoARd f5 fw5 custom-text-secondary-color">10%</span>
                                                                        off on custom request
                                                                    </p>
                                                                </li>
                                                                <li class="flex items-center gap8 ma0">
                                                                    <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'check', false, 'common_elm_wvkNnj, w24, h24' ); ?>
                                                                    <p class="f5 fw5 custom-text-primary-color ma0">
                                                                        <span
                                                                            class="common_elm_wnoARd f5 fw5 custom-text-secondary-color">10%</span>
                                                                        off on pay per view videos
                                                                    </p>
                                                                </li>
                                                                <li class="flex items-center gap8 ma0">
                                                                    <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'check', false, 'common_elm_wvkNnj, w24, h24' ); ?>
                                                                    <p class="f5 fw5 custom-text-primary-color ma0">
                                                                        Receive <span
                                                                            class="common_elm_wnoARd f5 fw5 custom-text-secondary-color">100
                                                                            Free tokens</span> each
                                                                        month</p>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <!-- subscribe__button-container -->
                                                        <div class="common_elm_CjMfES flex justify-center items-end tc">
                                                            <button
                                                                class="common_elm_BHmrNz flex justify-center items-center gap10 w-100 pt2 pb2 pl24 pr24 o-20 br10 border-none">
                                                                <span
                                                                    class="common_elm_yFoPSW f4 fw6 lh-24 custom-pink-text-color">Subscribe</span>
                                                            </button>
                                                            <p
                                                                class="common_elm_wEItrd dn f4 fw7 ma0 custom-pink-text-color">
                                                                You are a member of this tier</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="splide__slide">
                                                    <!-- slide-content__container -->
                                                    <div
                                                        class="elm_QsQGRv flex flex-column pt24 pb24 pl24 pr24 bg-white relative">
                                                        <!-- slide-content__top-container -->
                                                        <div class="elm_XSuDmw flex flex-column">
                                                            <h2 class="common_elm_gkofRa fw7 custom-text-primary-color">
                                                                Buffet</h2>

                                                            <!-- img video gallery count container -->
                                                            <div class="flex items-center gap8">
                                                                <div class="common_elm_cJanhR flex items-center">
                                                                    <span
                                                                        class="f5 custom-text-secondary-color">69</span>
                                                                    <div
                                                                        class="common_elm_hDDUsS flex justify-center items-center">
                                                                        <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'video', false, 'common_elm_qEZSJD, w20, h20' ); ?>
                                                                    </div>
                                                                </div>
                                                                <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'livestream_dot', false, 'common_elm_qEZSJD, w8, h8' ); ?>
                                                                <div class="common_elm_cJanhR flex items-center">
                                                                    <span
                                                                        class="f5 custom-text-secondary-color">80</span>
                                                                    <div
                                                                        class="common_elm_hDDUsS flex justify-center items-center">
                                                                        <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'image', false, 'common_elm_qEZSJD, w20, h20' ); ?>
                                                                    </div>
                                                                </div>
                                                                <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'livestream_dot', false, 'common_elm_qEZSJD, w8, h8' ); ?>
                                                                <div class="common_elm_cJanhR flex items-center">
                                                                    <span
                                                                        class="f5 custom-text-secondary-color">80</span>
                                                                    <div
                                                                        class="common_elm_hDDUsS flex justify-center items-center">
                                                                        <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'media', false, 'common_elm_qEZSJD, w20, h20' ); ?>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <p class="f5 lh-24 ma0 custom-text-primary-color"
                                                                data-read-more="6">Become the Premium
                                                                chicken member! Watch all my chicken +
                                                                fruit eat...<a
                                                                    class="f7 lh-24 custom-text-secondary-color"
                                                                    data-read-more-link="6"><span
                                                                        class="f5 lh-24 ma0 custom-text-primary-color">...</span>
                                                                    Read more</a><span data-read-more-content="6"
                                                                    class="f5 lh-24 ma0 custom-text-primary-color">ing
                                                                    content! updates weekly</span>
                                                            </p>

                                                            <!-- price-container -->
                                                            <div class="common_elm_fharid flex flex-column gap4 br4">
                                                                <section class="flex items-end gap4">
                                                                    <h1
                                                                        class="common_elm_wULoUY f1 fw5 custom-text-primary-color ma0">
                                                                        $18.99</h1>
                                                                    <span
                                                                        class="common_elm_VlTiRj f5 fw5 strike custom-text-primary-color">$15.99</span>
                                                                </section>
                                                                <span
                                                                    class="common_elm_jiTacp f6 fw5 custom-text-primary-color">Per
                                                                    month</span>
                                                            </div>
                                                        </div>

                                                        <!-- feature__list-wrapper -->
                                                        <div class="flex flex-column gap16 br4">
                                                            <span class="f5 fw6 custom-text-secondary-color">Member
                                                                benefits</span>
                                                            <ul class="flex flex-column gap16 pt2 pb2 br4">
                                                                <li class="flex items-center gap8 ma0">
                                                                    <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'check', false, 'common_elm_wvkNnj, w24, h24' ); ?>
                                                                    <p
                                                                        class="common_elm_wnoARd f5 fw5 custom-text-secondary-color ma0">
                                                                        10% off on all Merchandise</p>
                                                                </li>
                                                                <li class="flex items-center gap8 ma0">
                                                                    <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'check', false, 'common_elm_wvkNnj, w24, h24' ); ?>
                                                                    <p class="f5 fw5 custom-text-primary-color ma0">
                                                                        <span
                                                                            class="common_elm_wnoARd f5 fw5 custom-text-secondary-color">10%</span>
                                                                        off on custom request
                                                                    </p>
                                                                </li>
                                                                <li class="flex items-center gap8 ma0">
                                                                    <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'check', false, 'common_elm_wvkNnj, w24, h24' ); ?>
                                                                    <p class="f5 fw5 custom-text-primary-color ma0">
                                                                        <span
                                                                            class="common_elm_wnoARd f5 fw5 custom-text-secondary-color">10%</span>
                                                                        off on pay per view videos
                                                                    </p>
                                                                </li>
                                                                <li class="flex items-center gap8 ma0">
                                                                    <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'check', false, 'common_elm_wvkNnj, w24, h24' ); ?>
                                                                    <p class="f5 fw5 custom-text-primary-color ma0">
                                                                        Receive <span
                                                                            class="common_elm_wnoARd f5 fw5 custom-text-secondary-color">100
                                                                            Free tokens</span> each
                                                                        month</p>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <!-- subscribe__button-container -->
                                                        <div class="common_elm_CjMfES flex justify-center items-end tc">
                                                            <button
                                                                class="common_elm_BHmrNz flex justify-center items-center gap10 w-100 pt2 pb2 pl24 pr24 o-20 br10 border-none">
                                                                <span
                                                                    class="common_elm_yFoPSW f4 fw5 lh-24 custom-pink-text-color">Subscribe</span>
                                                            </button>
                                                            <p
                                                                class="common_elm_wEItrd dn f4 fw7 ma0 custom-pink-text-color">
                                                                You are a member of this tier</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button onclick="open_popup({'target': '#edit-post-popup'});">Open Edit Post Popup</button>
            <!-- edit-post-popup -->
            <div class="elm_UoRWYY items-center justify-center fixed dn top-0 left-0 w-100 h-100 z-9999 overflow-auto"
                id="edit-post-popup" data-popup-type="edit-post-popup">
                <!-- inner wrapper -->
                <div class="elm_yNwqwJ top-0 w-100 flex items-center justify-center absolute">
                    <!-- container -->
                    <div class="elm_qJBugX flex flex-column gap16 p24 bg-white relative">
                        <!-- header -->
                        <div class="elm_nZyPEx flex justify-between items-start gap10 pa0">
                            <!-- header-left -->
                            <h1 class="f3 fw7 lh-24 ma0 black"><?php _e( 'Edit Post', 'fansocial' ); ?></h1>
                            <!-- header right -->
                            <div class="elm_UOkrrN pointer">
                                <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'close', false, 'common_elm_SKjJTT, w24, h24' ); ?>
                            </div>
                        </div>

                        <!-- contents -->
                        <div class="elm_wdBhkC">
                            <!-- feed form -->
                            <form action="#" class="elm_CWUlpX flex flex-column gap16 form-filled">
                                <!-- text-input-containter -->
                                <div class="elm_jSmsko relative">
                                    <textarea
                                        class="elm_XlxeoP common_elm_VZVCdW w-100 h-100 br10 bg-white custom-pale-blue-border"
                                        id="post-title" name="post-title"
                                        placeholder="What should I eat tonight? Vote before 8pm tonight!"></textarea>
                                    <div class="elm_VxRbzo absolute pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M12 22C17.5229 22 22 17.5229 22 12C22 6.47715 17.5229 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5229 6.47715 22 12 22Z"
                                                stroke="#B9CEE2" stroke-width="2" stroke-linejoin="round" />
                                            <path d="M15.5 9V9.5" stroke="#B9CEE2" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8.5 9V9.5" stroke="#B9CEE2" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M15.5 15.5C15.5 15.5 14.5 17.5 12 17.5C9.5 17.5 8.5 15.5 8.5 15.5"
                                                stroke="#B9CEE2" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>

                                <!-- poll-input-wrapper -->
                                <div>

                                    <!-- poll-input-container -->
                                    <div class="elm_SKbbSy flex flex-column gap16 pt15 pb15 pl15 pr15 br15">
                                        <!-- poll-input__header -->
                                        <div class="flex justify-between items-center gap5">
                                            <div class="flex items-center gap5">
                                                <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'dashboard', false, 'common_elm_FSMoIG, w20, h20' ); ?>
                                                <span
                                                    class="f6 fw5 lh24 tc ttc custom-blue-text-color"><?php _e( 'Poll', 'fansocial' ); ?></span>
                                            </div>

                                            <button type="button"
                                                class="elm_tdZJzd flex justify-center items-center gap5 br2 pt2 pb2 pl2 pr10">
                                                <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'close_circle', false, 'elm_gMOqMC, w20, h20' ); ?>
                                                <span
                                                    class="f6 fw5 lh24 tc ttc custom-red-text-color"><?php _e( 'Remove poll', 'fansocial' ); ?></span>
                                            </button>
                                        </div>

                                        <!-- poll-input__section -->
                                        <div class="flex flex-column gap10">
                                            <span
                                                class="f7 lh-24 custom-blue-text-color"><?php _e( 'Poll Options', 'fansocial' ); ?></span>
                                            <!-- inputs-wrapper -->
                                            <div class="elm_dixKCP flex flex-column gap10">
                                                <!-- input-container -->
                                                <div class="flex items-center gap10">
                                                    <input type="text" placeholder="Orange"
                                                        class="common_elm_eSaJXr common_elm_VZVCdW br10 ba custom-pale-blue-border bg-white">
                                                </div>
                                                <!-- input-container -->
                                                <div class="flex items-center gap10">
                                                    <input type="text" placeholder="Mango"
                                                        class="common_elm_eSaJXr common_elm_VZVCdW br10 ba custom-pale-blue-border bg-white">
                                                </div>
                                                <!-- input-container -->
                                                <div class="flex items-center gap10">
                                                    <input type="text" placeholder="Apple"
                                                        class="common_elm_VZVCdW br10 ba custom-pale-blue-border bg-white">
                                                    <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'minus_circle', false, 'common_elm_FSMoIG, w20, h20, pointer' ); ?>
                                                </div>
                                            </div>
                                            <button type="button"
                                                class="elm_hVZihk flex justify-center items-center gap10 pt2 pb2 pl2 pr3 br10 border-none custom-blue-button-bg-color">
                                                <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'add', false, 'common_elm_wPflhb, w20, h20' ); ?>
                                                <span><?php _e( 'Add choice', 'fansocial' ); ?></span>
                                            </button>
                                        </div>

                                        <!-- poll-expiry-input wrapper -->
                                        <div>
                                            <span
                                                class="f7 lh-24 custom-blue-text-color"><?php _e( 'Poll expiry date and time', 'fansocial' ); ?></span>
                                            <div class="relative">
                                                <input type="number" placeholder="12/21/2023   8:00pm"
                                                    class="common_elm_VZVCdW br10 custom-pale-blue-border bg-white">
                                                <div class="elm_iFyKeH absolute pointer">
                                                    <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'calendar', false, 'common_elm_GRbGNf, w20, h20' ); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- upload-wrapper -->
                                <div class="elm_FZSwFZ flex items-center pt15 pb15 pl15 pr15 br15 upload-complete">
                                    <!-- uploaded-img wrapper -->
                                    <div class="elm_gqnwAx relative bg-center cover br3"
                                        style="background-image: url('https://fs.codelinden.com/wp-content/plugins/fansocial/assets/img/placeholder.jpeg');">
                                        <!-- delete icon container -->
                                        <div class="elm_QsSqkI flex justify-center items-center br2 w20 h20 absolute">
                                            <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'trash', false, 'common_elm_wPflhb, w20, h20' ); ?>
                                        </div>
                                        <!-- media-icon container -->
                                        <div
                                            class="common_elm_mZpRgh flex justify-center items-center w24 h24 absolute">
                                            <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'image', false, 'common_elm_wPflhb, w1, h1' ); ?>
                                        </div>
                                    </div>
                                </div>

                                <!-- save-post-btn -->
                                <button type="button"
                                    class="elm_dhVDyo h48 flex justify-center items-center pt2 pb2 pl2 pr24 ml-auto br10 border-none custom-brand-pink-button-bg-color">
                                    <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'check', false, 'common_elm_wPflhb, w2, h2' ); ?>
                                    <span
                                        class="elm_nwWIKn f4 fw5 lh-24 tc white"><?php _e( 'Save Post', 'fansocial' ); ?></span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <button onclick="open_popup({'target': '#delete-post-popup'});">Open Delete Post Popup</button>
            <!-- delete-post-popup -->
            <div class="elm_UoRWYY items-center justify-center fixed dn top-0 left-0 w-100 h-100 z-9999 overflow-auto"
                id="delete-post-popup" data-popup-type="delete-post-popup" data-popup-position="centered">
                <!-- inner wrapper -->
                <div class="elm_yNwqwJ top-0 w-100 flex items-center justify-center absolute">
                    <!-- container -->
                    <div class="elm_qJBugX flex flex-column bg-white relative">
                        <!-- header -->
                        <div class="elm_nZyPEx flex justify-between items-start pa0">
                            <!-- header-left -->
                            <h1 class="f4 fw7 lh-24 ma0 black"><?php _e( 'Delete post', 'fansocial' ); ?></h1>
                            <!-- header right -->
                            <div class="elm_UOkrrN pointer">
                                <?php echo \MadLinksCoding\UI_Components::render_svg_icon( 'close', false, 'common_elm_SKjJTT, w24, h24' ); ?>
                            </div>
                        </div>

                        <!-- contents -->
                        <div class="elm_wdBhkC flex flex-column items-start">
                            <p class="f5 fw5 lh-24 black ma0">You won’t be able to undo this action, continue?</p>
                            <button
                                class="flex justify-center items-center gap10 pt2 pb2 pl24 pr24 h48 br10 custom-dark-pink-button-bg-color">
                                <span class="f4 fw5 lh-24 white">Delete post</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>