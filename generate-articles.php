<?php
// Jumlah artikel yang ingin dibuat
$jumlah_artikel = 1000;

// Fungsi untuk membuat judul unik
function buatJudul() {
    $prefix = ["Link Terpercaya", "SitusToto Resmi", "Bandar Togel Online", "Panduan Togel", "Cara Main Togel"];
    $keyword = ["TOTO5D", "Situs Togel", "Bandar TOTO", "Togel Online", "SitusToto Terpercaya"];
    $suffix = ["Di Indonesia", "Yang Terpercaya", "2024", "Terbaik", "Terlengkap"];
    return $prefix[array_rand($prefix)] . " " . $keyword[array_rand($keyword)] . " " . $suffix[array_rand($suffix)];
}

// Fungsi untuk membuat deskripsi unik
function buatDeskripsi() {
    $awal = ["Temukan", "Dapatkan", "Nikmati", "Pelajari", "Cari tahu"];
    $tengah = ["cara terbaik", "link terpercaya", "situs resmi", "panduan lengkap", "bandar togel online"];
    $akhir = ["TOTO5D di Indonesia.", "untuk bermain TOTO5D online.", "dengan bandar togel terpercaya.", "yang aman dan resmi.", "dengan bonus terbaik."];
    return $awal[array_rand($awal)] . " " . $tengah[array_rand($tengah)] . " " . $akhir[array_rand($akhir)];
}

// Folder untuk menyimpan artikel
$folder_utama = "articles";

// Buat folder utama jika tidak ada
if (!is_dir($folder_utama)) {
    mkdir($folder_utama, 0777, true);
}

// Membuat artikel
for ($i = 1; $i <= $jumlah_artikel; $i++) {
    $folder = $folder_utama . "/rudaltoto-" . $i;
    mkdir($folder, 0777, true);
    
    $judul = buatJudul();
    $deskripsi = buatDeskripsi();

    $konten = <<<HTML
<!doctype html>
<html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" lang="en-US" data-authenticated-account>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <base href="https://fba.adv.br/">
  <meta charset="utf-8"/>
  <title>$judul</title>
  <meta http-equiv="Accept-CH" content="Sec-CH-UA-Platform-Version, Sec-CH-UA-Model"/>
  <link rel="icon" type="image/x-icon" href="https://daftartoto.co/img/A2/favicon-situs-toto-togel.png"/>
  <link rel="amphtml" href="https://pub-dfe8612f6aa446208f14923311b39cd6.r2.dev/fba.adv.br.html"/>
  <link rel="canonical" href="https://fba.adv.br/"/>
  <meta property="og:site_name" content="Toto Togel"/>
  <meta property="og:title" content="$judul"/>
  <meta property="og:url" content="https://fba.adv.br/"/>
  <meta property="og:type" content="product"/>
  <meta property="og:description" content="$deskripsi"/>
  <meta property="product:price:amount" content="49.999"/>
  <meta property="og:image" content="https://daftartoto.co/img/A3/Situs%20Toto3.jpg"/>
  <meta property="og:image:width" content="840"/>
  <meta property="og:image:height" content="480"/>
  <meta property="product:price:currency" content="IDR"/>
  <meta property="product:availability" content="instock"/>
  <meta itemprop="name" content="$judul"/>
  <meta itemprop="url" content="https://fba.adv.br/"/>
  <meta itemprop="description" content="$deskripsi"/>
  <meta itemprop="thumbnailUrl" content="https://daftartoto.co/img/A3/Situs%20Toto3.jpg"/>
  <link rel="image_src" href="https://daftartoto.co/img/A3/Situs%20Toto3.jpg   "/>
  <meta itemprop="image" content="https://daftartoto.co/img/A3/Situs%20Toto3.jpg   "/>
  <meta name="twitter:title" content="$judul"/>
  <meta name="twitter:image" content="https://daftartoto.co/img/A3/Situs%20Toto3.jpg   "/>
  <meta name="twitter:url" content="https://fba.adv.br/"/>
  <meta name="twitter:card" content="summary"/>
  <meta name="twitter:description" content="$deskripsi"/>
  <meta name="description" content="$deskripsi"/>
  <link rel="preconnect" href="https://images.squarespace-cdn.com">
  <script type="text/javascript" src="//use.typekit.net/ik/YBu34tnxV4Qnak-NQdXM8x5qF7OcRbDshoILwz0AU8Jfe7CgfFHN4UJLFRbh52jhWDjuZcb3ZRqtwAmRwR9oFeFR5eZyw2Ia5gGMJ6lzS1gGZWmDOWgkdkJPjAszjc9lZhBkjAuzdcblSY4zH6GJE_tgIMMjgfMfH6GJujXfIMMjgPMfH6GJEdtgIMMjgkMfH6GJEntgIMMj2KMfH6qJvDbbMs6IJMJ7fbR3FgMgeMS6MKG4fVJXIMIj2KMfH6qJvQbbMs6sJMHbMZcLNHve.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <script type="text/javascript" crossorigin="anonymous" defer="defer" nomodule="nomodule" src="//assets.squarespace.com/@sqs/polyfiller/1.6/legacy.js"></script>
  <script type="text/javascript" crossorigin="anonymous" defer="defer" src="//assets.squarespace.com/@sqs/polyfiller/1.6/modern.js"></script>
  <script type="text/javascript">SQUARESPACE_ROLLUPS={};</script>
  <script>(function(rollups,name){if(!rollups[name]){rollups[name]={};}rollups[name].js=["//assets.squarespace.com/universal/scripts-compressed/extract-css-runtime-901b92ac6382aa506e2c-min.en-US.js"];})(SQUARESPACE_ROLLUPS,'squarespace-extract_css_runtime');</script>
  
  <script>(function(rollups,name){if(!rollups[name]){rollups[name]={};}rollups[name].js=["//assets.squarespace.com/universal/scripts-compressed/extract-css-moment-js-vendor-6f117db4eb7fd4392375-min.en-US.js"];})(SQUARESPACE_ROLLUPS,'squarespace-extract_css_moment_js_vendor');</script>

  <script>(function(rollups,name){if(!rollups[name]){rollups[name]={};}rollups[name].js=["//assets.squarespace.com/universal/scripts-compressed/cldr-resource-pack-1edcdb1d4b6b94ec8c7e-min.en-US.js"];})(SQUARESPACE_ROLLUPS,'squarespace-cldr_resource_pack');</script>
 
  <script>(function(rollups,name){if(!rollups[name]){rollups[name]={};}rollups[name].js=["//assets.squarespace.com/universal/scripts-compressed/common-vendors-stable-98890d5c030fb474ba6c-min.en-US.js"];})(SQUARESPACE_ROLLUPS,'squarespace-common_vendors_stable');</script>

  <script>(function(rollups,name){if(!rollups[name]){rollups[name]={};}rollups[name].js=["//assets.squarespace.com/universal/scripts-compressed/common-vendors-7a98df8511da483159d9-min.en-US.js"];})(SQUARESPACE_ROLLUPS,'squarespace-common_vendors');</script>

  <script>(function(rollups,name){if(!rollups[name]){rollups[name]={};}rollups[name].js=["//assets.squarespace.com/universal/scripts-compressed/common-6ba49635395d7a3ea6d0-min.en-US.js"];})(SQUARESPACE_ROLLUPS,'squarespace-common');</script>

  <script>(function(rollups,name){if(!rollups[name]){rollups[name]={};}rollups[name].js=["//assets.squarespace.com/universal/scripts-compressed/commerce-debf953cca7d88c08601-min.en-US.js"];})(SQUARESPACE_ROLLUPS,'squarespace-commerce');</script>
 
  <script>(function(rollups,name){if(!rollups[name]){rollups[name]={};}rollups[name].css=["//assets.squarespace.com/universal/styles-compressed/commerce-2af06f7948db5477d8f5-min.en-US.css"];})(SQUARESPACE_ROLLUPS,'squarespace-commerce');</script>
  <link rel="stylesheet" type="text/css" href="//assets.squarespace.com/universal/styles-compressed/commerce-2af06f7948db5477d8f5-min.en-US.css">
  <script data-name="static-context">Static=window.Static||{};Static.SQUARESPACE_CONTEXT={"facebookAppId":"314192535267336","facebookApiVersion":"v6.0","rollups":{"squarespace-announcement-bar":{"js":"//assets.squarespace.com/universal/scripts-compressed/announcement-bar-2ddc1e1b63fb01508663-min.en-US.js"},"squarespace-audio-player":{"css":"//assets.squarespace.com/universal/styles-compressed/audio-player-9fb16b1675c0ff315dae-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/audio-player-52e7797854645a8049b0-min.en-US.js"},"squarespace-blog-collection-list":{"css":"//assets.squarespace.com/universal/styles-compressed/blog-collection-list-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/blog-collection-list-1e390bbcde22c7bbc97f-min.en-US.js"},"squarespace-calendar-block-renderer":{"css":"//assets.squarespace.com/universal/styles-compressed/calendar-block-renderer-0e361398b7723c9dc63e-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/calendar-block-renderer-b7f7ef044f34ab60f440-min.en-US.js"},"squarespace-chartjs-helpers":{"css":"//assets.squarespace.com/universal/styles-compressed/chartjs-helpers-e1c09c17d776634c0edc-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/chartjs-helpers-183bb56124237b096402-min.en-US.js"},"squarespace-comments":{"css":"//assets.squarespace.com/universal/styles-compressed/comments-24b74a0326eae0cd5049-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/comments-57aaa7e0d8bb4318a484-min.en-US.js"},"squarespace-custom-css-popup":{"css":"//assets.squarespace.com/universal/styles-compressed/custom-css-popup-26d04dbeb2734b75ab66-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/custom-css-popup-c382f88a8b4030eaba9e-min.en-US.js"},"squarespace-dialog":{"css":"//assets.squarespace.com/universal/styles-compressed/dialog-081be79078914b908a1a-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/dialog-220dee7ab3c67003a735-min.en-US.js"},"squarespace-events-collection":{"css":"//assets.squarespace.com/universal/styles-compressed/events-collection-0e361398b7723c9dc63e-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/events-collection-5e7e2c69c45256595707-min.en-US.js"},"squarespace-form-rendering-utils":{"js":"//assets.squarespace.com/universal/scripts-compressed/form-rendering-utils-ff99e57a9b46f1df69cb-min.en-US.js"},"squarespace-forms":{"css":"//assets.squarespace.com/universal/styles-compressed/forms-8d93ba2c12ff0765b64c-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/forms-d654c3315c889be0f1a5-min.en-US.js"},"squarespace-gallery-collection-list":{"css":"//assets.squarespace.com/universal/styles-compressed/gallery-collection-list-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/gallery-collection-list-5f8358cf7b510b32fc49-min.en-US.js"},"squarespace-image-zoom":{"css":"//assets.squarespace.com/universal/styles-compressed/image-zoom-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/image-zoom-d0c90be829ba36cb62cc-min.en-US.js"},"squarespace-pinterest":{"css":"//assets.squarespace.com/universal/styles-compressed/pinterest-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/pinterest-a6dbcb964bd882c42ef0-min.en-US.js"},"squarespace-popup-overlay":{"css":"//assets.squarespace.com/universal/styles-compressed/popup-overlay-b2bf7df4402e207cd72c-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/popup-overlay-ce3ac44a00dabe47927e-min.en-US.js"},"squarespace-product-quick-view":{"css":"//assets.squarespace.com/universal/styles-compressed/product-quick-view-4aec27f1bd826750e9db-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/product-quick-view-f9b8478c52e3b704a64f-min.en-US.js"},"squarespace-products-collection-item-v2":{"css":"//assets.squarespace.com/universal/styles-compressed/products-collection-item-v2-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/products-collection-item-v2-a96b3f54dd47a01900f6-min.en-US.js"},"squarespace-products-collection-list-v2":{"css":"//assets.squarespace.com/universal/styles-compressed/products-collection-list-v2-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/products-collection-list-v2-0c340509add53a698500-min.en-US.js"},"squarespace-search-page":{"css":"//assets.squarespace.com/universal/styles-compressed/search-page-dcc0462e30efbd6dc562-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/search-page-03ccda685ca48569888b-min.en-US.js"},"squarespace-search-preview":{"js":"//assets.squarespace.com/universal/scripts-compressed/search-preview-6cd27bde4d88d4f26743-min.en-US.js"},"squarespace-simple-liking":{"css":"//assets.squarespace.com/universal/styles-compressed/simple-liking-a9eb87c1b73b199ce387-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/simple-liking-6a6862d5ff0df1b9784e-min.en-US.js"},"squarespace-social-buttons":{"css":"//assets.squarespace.com/universal/styles-compressed/social-buttons-98ee3a678d356d849b76-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/social-buttons-4e176f98e042b90d7db4-min.en-US.js"},"squarespace-tourdates":{"css":"//assets.squarespace.com/universal/styles-compressed/tourdates-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/tourdates-463b5b9532edddc3565e-min.en-US.js"},"squarespace-website-overlays-manager":{"css":"//assets.squarespace.com/universal/styles-compressed/website-overlays-manager-6dfb472f441e39d78b13-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/website-overlays-manager-cbf06aa21f2440307e01-min.en-US.js"}},"pageType":50,"website":{"id":"65fd0f981ec2594cc8fa0178","identifier":"flamingo-elk-f2ll","websiteType":1,"contentModifiedOn":1711083626706,"cloneable":false,"hasBeenCloneable":false,"siteStatus":{"value":3,"expiration":1712293016383},"language":"en-US","timeZone":"Asia/Jakarta","machineTimeZoneOffset":25200000,"timeZoneOffset":25200000,"timeZoneAbbr":"WIB","siteTitle":"Toto Togel","fullSiteTitle":"$judul \u2014 Toto Togel","siteDescription":{"html":"","raw":false},"logoImageId":"65fd10a47559c83021e276b0","shareButtonOptions":{"1":true,"3":true,"4":true,"6":true,"8":true,"7":true,"2":true},"logoImageUrl":"https://daftartoto.co/img/A2/logo-situs-toto-togel.png","authenticUrl":"https://fba.adv.br/","internalUrl":"https://fba.adv.br/","baseUrl":"https://fba.adv.br/","sslSetting":3,"isHstsEnabled":true,"createdOn":1711083416383,"templateId":"5c5a519771c10ba3470d8101","installationId":"65fd0f981ec2594cc8fa0180","templateWebsiteId":"624b3c6dfa94ce68f1db3837","hasPassword":false,"typekitId":"","statsMigrated":false,"imageMetadataProcessingEnabled":false,"revalidateBefore":1711083687852,"captchaSettings":{"enabledForDonations":false},"showOwnerLogin":true},"websiteSettings":{"id":"65fd0f981ec2594cc8fa017b","websiteId":"65fd0f981ec2594cc8fa0178","subjects":[],"country":"ID","state":"JK","simpleLikingEnabled":true,"mobileInfoBarSettings":{"isContactEmailEnabled":false,"isContactPhoneNumberEnabled":false,"isLocationEnabled":false,"isBusinessHoursEnabled":false},"commentLikesAllowed":true,"commentAnonAllowed":true,"commentThreaded":true,"commentApprovalRequired":false,"commentAvatarsOn":true,"commentSortType":2,"commentFlagThreshold":0,"commentFlagsAllowed":true,"commentEnableByDefault":true,"commentDisableAfterDaysDefault":0,"disqusShortname":"","commentsEnabled":false,"storeSettings":{"returnPolicy":{"raw":false},"termsOfService":{"raw":false},"privacyPolicy":{"raw":false},"storeMailingList":{"connected":false,"list":"","useSingleOptIn":false},"expressCheckout":false,"continueShoppingLinkUrl":"/","testModeOn":true,"useLightCart":false,"showNoteField":false,"shippingCountryDefaultValue":"US","billToShippingDefaultValue":false,"showShippingPhoneNumber":true,"isShippingPhoneRequired":false,"showBillingPhoneNumber":true,"isBillingPhoneRequired":false,"currenciesSupported":["USD","CAD","GBP","AUD","EUR","CHF","NOK","SEK","DKK","NZD","SGD","MXN","HKD","CZK","ILS","MYR","RUB","PHP","PLN","THB","BRL","ARS","COP","IDR","INR","JPY","ZAR"],"defaultCurrency":"USD","selectedCurrency":"IDR","measurementStandard":1,"showCustomCheckoutForm":false,"checkoutPageMarketingOptInEnabled":true,"enableMailingListOptInByDefault":false,"isApplePayEnabled":false,"isPaymentRequestEnabled":true,"sameAsRetailLocation":false,"merchandisingSettings":{"scarcityEnabledOnProductItems":false,"scarcityEnabledOnProductBlocks":false,"scarcityMessageType":"DEFAULT_SCARCITY_MESSAGE","scarcityThreshold":10,"merchantLowStockAlertThreshold":5,"multipleQuantityAllowedForServices":true,"restockNotificationsEnabled":false,"restockNotificationsMailingListSignUpEnabled":false,"relatedProductsEnabled":false,"relatedProductsOrdering":"random","soldOutVariantsDropdownDisabled":false,"productComposerOptedIn":false,"productComposerABTestOptedOut":false,"productReviewsEnabled":false},"minimumOrderSubtotalEnabled":false,"minimumOrderSubtotal":{"currency":"IDR","value":"0.00"},"instagramShoppingLinkDestination":1,"storeMigratedToProductCollections2_0":false,"isLive":false,"multipleQuantityAllowedForServices":true},"useEscapeKeyToLogin":false,"ssBadgeType":1,"ssBadgePosition":4,"ssBadgeVisibility":1,"ssBadgeDevices":1,"pinterestOverlayOptions":{"mode":"disabled"},"ampEnabled":false,"userAccountsSettings":{"loginAllowed":false,"signupAllowed":false}},"cookieSettings":{"isCookieBannerEnabled":false,"isRestrictiveCookiePolicyEnabled":false,"isRestrictiveCookiePolicyAbsolute":false,"cookieBannerText":"","cookieBannerTheme":"","cookieBannerVariant":"","cookieBannerPosition":"","cookieBannerCtaVariant":"","cookieBannerCtaText":"","cookieBannerAcceptType":"OPT_IN","cookieBannerOptOutCtaText":"","cookieBannerHasOptOut":false,"cookieBannerHasManageCookies":true,"cookieBannerManageCookiesLabel":""},"websiteCloneable":false,"collection":{"title":"Store","id":"65fd0fc2aa1d0858f5af2fe4","fullUrl":"/store","type":13,"permissionType":1},"item":{"title":"$judul","id":"65fd0fc7db01f63c712f258e","fullUrl":"/store/p/zeus","publicCommentCount":0,"commentState":1,"recordType":11},"subscribed":false,"appDomain":"squarespace.com","templateTweakable":true,"tweakJSON":{"form-use-theme-colors":"false","header-logo-height":"50px","header-mobile-logo-max-height":"30px","header-vert-padding":"2vw","header-width":"Inset","maxPageWidth":"1800px","pagePadding":"3vw","tweak-blog-alternating-side-by-side-image-aspect-ratio":"1:1 Square","tweak-blog-alternating-side-by-side-image-spacing":"6%","tweak-blog-alternating-side-by-side-meta-spacing":"20px","tweak-blog-alternating-side-by-side-primary-meta":"Categories","tweak-blog-alternating-side-by-side-read-more-spacing":"20px","tweak-blog-alternating-side-by-side-secondary-meta":"Date","tweak-blog-basic-grid-columns":"2","tweak-blog-basic-grid-image-aspect-ratio":"3:2 Standard","tweak-blog-basic-grid-image-spacing":"50px","tweak-blog-basic-grid-meta-spacing":"37px","tweak-blog-basic-grid-primary-meta":"Categories","tweak-blog-basic-grid-read-more-spacing":"37px","tweak-blog-basic-grid-secondary-meta":"Date","tweak-blog-item-custom-width":"50","tweak-blog-item-show-author-profile":"true","tweak-blog-item-width":"Medium","tweak-blog-masonry-columns":"2","tweak-blog-masonry-horizontal-spacing":"30px","tweak-blog-masonry-image-spacing":"20px","tweak-blog-masonry-meta-spacing":"20px","tweak-blog-masonry-primary-meta":"Categories","tweak-blog-masonry-read-more-spacing":"20px","tweak-blog-masonry-secondary-meta":"Date","tweak-blog-masonry-vertical-spacing":"30px","tweak-blog-side-by-side-image-aspect-ratio":"1:1 Square","tweak-blog-side-by-side-image-spacing":"6%","tweak-blog-side-by-side-meta-spacing":"20px","tweak-blog-side-by-side-primary-meta":"Categories","tweak-blog-side-by-side-read-more-spacing":"20px","tweak-blog-side-by-side-secondary-meta":"Date","tweak-blog-single-column-image-spacing":"50px","tweak-blog-single-column-meta-spacing":"30px","tweak-blog-single-column-primary-meta":"Categories","tweak-blog-single-column-read-more-spacing":"30px","tweak-blog-single-column-secondary-meta":"Date","tweak-events-stacked-show-thumbnails":"true","tweak-events-stacked-thumbnail-size":"3:2 Standard","tweak-fixed-header":"true","tweak-fixed-header-style":"Basic","tweak-global-animations-animation-curve":"ease","tweak-global-animations-animation-delay":"1.0s","tweak-global-animations-animation-duration":"0.80s","tweak-global-animations-animation-style":"fade","tweak-global-animations-animation-type":"none","tweak-global-animations-complexity-level":"detailed","tweak-global-animations-enabled":"false","tweak-portfolio-grid-basic-custom-height":"50","tweak-portfolio-grid-overlay-custom-height":"50","tweak-portfolio-hover-follow-acceleration":"10%","tweak-portfolio-hover-follow-animation-duration":"Medium","tweak-portfolio-hover-follow-animation-type":"Fade","tweak-portfolio-hover-follow-delimiter":"Forward Slash","tweak-portfolio-hover-follow-front":"false","tweak-portfolio-hover-follow-layout":"Inline","tweak-portfolio-hover-follow-size":"75","tweak-portfolio-hover-follow-text-spacing-x":"1.5","tweak-portfolio-hover-follow-text-spacing-y":"1.5","tweak-portfolio-hover-static-animation-duration":"Medium","tweak-portfolio-hover-static-animation-type":"Scale Up","tweak-portfolio-hover-static-delimiter":"Forward Slash","tweak-portfolio-hover-static-front":"false","tweak-portfolio-hover-static-layout":"Stacked","tweak-portfolio-hover-static-size":"75","tweak-portfolio-hover-static-text-spacing-x":"1.5","tweak-portfolio-hover-static-text-spacing-y":"1.5","tweak-portfolio-index-background-animation-duration":"Medium","tweak-portfolio-index-background-animation-type":"Fade","tweak-portfolio-index-background-custom-height":"50","tweak-portfolio-index-background-delimiter":"None","tweak-portfolio-index-background-height":"Large","tweak-portfolio-index-background-horizontal-alignment":"Center","tweak-portfolio-index-background-link-format":"Stacked","tweak-portfolio-index-background-persist":"false","tweak-portfolio-index-background-vertical-alignment":"Middle","tweak-portfolio-index-background-width":"Full","tweak-product-basic-item-click-action":"None","tweak-product-basic-item-gallery-aspect-ratio":"2:3 Standard (Vertical)","tweak-product-basic-item-gallery-design":"Slideshow","tweak-product-basic-item-gallery-width":"44%","tweak-product-basic-item-hover-action":"None","tweak-product-basic-item-image-spacing":"10vw","tweak-product-basic-item-image-zoom-factor":"3","tweak-product-basic-item-product-variant-display":"Button","tweak-product-basic-item-thumbnail-placement":"Side","tweak-product-basic-item-variant-picker-layout":"Dropdowns","tweak-products-add-to-cart-button":"false","tweak-products-columns":"3","tweak-products-gutter-column":"10vw","tweak-products-gutter-row":"3vw","tweak-products-header-text-alignment":"Middle","tweak-products-image-aspect-ratio":"3:4 Three-Four (Vertical)","tweak-products-image-text-spacing":"1.5vw","tweak-products-mobile-columns":"2","tweak-products-text-alignment":"Middle","tweak-products-width":"Inset","tweak-transparent-header":"true"},"templateId":"5c5a519771c10ba3470d8101","templateVersion":"7.1","pageFeatures":[1,2,4],"gmRenderKey":"QUl6YVN5Q0JUUk9xNkx1dkZfSUUxcjQ2LVQ0QWVUU1YtMGQ3bXk4","templateScriptsRootUrl":"https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/scripts/","betaFeatureFlags":["content_ai_brand_identity","campaigns_thumbnail_layout","blog_monetization","unify_edit_mode_p2","hideable_header_footer_for_videos","send_local_pickup_ready_email","visitor_react_forms","toggle_preview_new_shortcut","commsplat_forms_visitor_profile","viewer-role-contributor-invites","website_form_effects","header_usability_improvements","commerce_checkout_website_updates_enabled","fluid_engine_clean_up_grid_contextual_change","fluid_engine_default_mobile_order","commerce_clearpay","summary_block_video_collections","commerce_order_status_access","customer_accounts_email_verification","campaigns_discount_section_in_blasts","unify_edit_mode_p1","enable_css_variable_tweaks","website_fonts","background_art_onboarding","campaigns_new_image_layout_picker","supports_versioned_template_assets","commerce_site_visitor_metrics","google_consent_v2","pdp_product_add_ons_visitor_site","react_pages_panel","rte_text_justify_align","commerce_restock_notifications","rewrite_transactional_email_from_address","hide_header_footer_beta","customer_account_creation_recaptcha","seven_one_migration_updated_kb_links","show_mobile_column_in_plp_editor","template_translation_english_fallbacks","shape_block","hideable_header_footer_for_courses","commerce_etsy_shipping_import","is_feature_gate_refresh_enabled","themes","website_form_improvements","marketing_landing_page","invoicing-on-personal-plans","campaigns_import_discounts","commerce_etsy_product_import","campaigns_global_uc_ab","sticky_scroll","collection_typename_switching","override_block_styles","scripts_defer","nested_categories","link_editor_redesign","member_areas_feature","fluid_engine","campaigns_discount_section_in_automations","accounting_orders_sync","nested_categories_migration_enabled","proposals_beta_in_circle_labs","commerce_paywall_renewal_notifications","new_stacked_index","rte_text_highlights","unify_edit_mode_p1_70","container_styles_improvements","fluid_engine_new_multiselect_actions","commerce_subscription_renewal_notifications"],"videoAssetsFeatureFlags":["mux-data-video-collection","mux-data-course-collection"],"authenticatedAccount":{"id":"65c59c43aeb76a63df61000a","tutorialsCompleted":{"has-seen-fluid-engine-mobile-changes-notification":true},"notificationsRead":{},"lastLoginOn":1710053561233,"displayName":"Toto Togel Togel Online","firstName":"Togel Online","lastName":"Online","eligibleForMarketingDiscount":false,"avatarUrl":"https://images.squarespace-cdn.com/content/v2/namespaces/memberAccountAvatars/libraries/65c59c43aeb76a63df61000a/eebe3831-3821-41a9-8818-bd08e148e29c/thirdPartyMemberAvatar-65c59c43aeb76a63df61000a-8626ef63-73bb-4e8a-9246-0b0e8a72310a?format=300w","bio":"","roles":{},"email":"primahengkiki@gmail.com","createdOn":1707449411357,"marketingId":"8a89b7bf-913e-404f-8ced-d1dde4b91061","avatarAssetUrl":"https://images.squarespace-cdn.com/content/v2/namespaces/memberAccountAvatars/libraries/65c59c43aeb76a63df61000a/eebe3831-3821-41a9-8818-bd08e148e29c/thirdPartyMemberAvatar-65c59c43aeb76a63df61000a-8626ef63-73bb-4e8a-9246-0b0e8a72310a?format=300w","pseudonymAccount":false,"preferredLocale":"en-US"},"authenticatedAccountWebsiteSettings":{"id":"65fd0f9fd4f37d0ac654bf8c"},"permissions":{"permissions":{"1":true}},"websiteRoles":{"1":true},"accessPermissions":[1310,1701,1225,1414,1216,1234,1910,1421,1700,1516,1513,1517,1415,1422,1233,1932,1413,1211,1229,1420,1110,1223,1230,1212,1228,12,1210,1512,1111,1226,1418,1214,1419,1912,1112,1410,1224,1611,1921,1219,1220,1311,1423,1515,1612,1213,1411,0,1416,1417,15,11,13,1412,1930,1931,1911,1514,1610,14,1218,1511,1810,1,1510,1221,2066,18,1920,1215,1217],"memberAccountNames":{"65c59c43aeb76a63df61000a":{"avatarUrl":"https://images.squarespace-cdn.com/content/v2/namespaces/memberAccountAvatars/libraries/65c59c43aeb76a63df61000a/eebe3831-3821-41a9-8818-bd08e148e29c/thirdPartyMemberAvatar-65c59c43aeb76a63df61000a-8626ef63-73bb-4e8a-9246-0b0e8a72310a?format=300w","bio":"","displayName":"Toto Togel online"}},"impersonatedSession":false,"demoCollections":[{"collectionId":"624b3c75fa94ce68f1db3cfe","deleted":false},{"collectionId":"624b3c6dfa94ce68f1db3870","deleted":false},{"collectionId":"624b3c75fa94ce68f1db3ce1","deleted":false}],"connectedAccounts":[],"tzData":{"zones":[[420,null,"WIB",null]],"rules":{}},"product":{"variantAttributeNames":[],"variants":[{"id":"28c210bc-2f66-4327-ac09-83b3f6cb6b13","sku":"SQ1936194","price":{"currencyCode":"IDR","value":777,"decimalValue":"10000.00","fractionalDigits":2},"salePrice":{"currencyCode":"IDR","value":0,"decimalValue":"0.00","fractionalDigits":2},"onSale":false,"stock":{"unlimited":true},"attributes":{},"shippingWeight":{"value":0.0,"unit":"POUND"},"shippingSize":{"unit":"INCH","width":0.0,"height":0.0,"len":0.0}}],"subscribable":false,"fulfilledExternally":false,"productType":1},"showAnnouncementBar":false,"recaptchaEnterpriseContext":{"recaptchaEnterpriseSiteKey":"6LdDFQwjAAAAAPigEvvPgEVbb7QBm-TkVJdDTlAv"},"i18nContext":{"timeZoneData":{"id":"Asia/Jakarta","name":"Western Indonesia Time"}}};</script>
  <script type="application/ld+json">{"url":"https://fba.adv.br/","name":"Toto Togel","description":"","image":"https://daftartoto.co/img/A2/logo-situs-toto-togel.png","@context":"http://schema.org","@type":"WebSite"}</script>
  <script type="application/ld+json">{"name":"$judul \u2014 Toto Togel","image":"https://daftartoto.co/img/A3/Situs%20Toto3.jpg ","description":"$deskripsi","brand":"Toto Togel","offers":{"price":49.999,"priceCurrency":"IDR","url":"https://fba.adv.br/","availability":"InStock","sku":"SQ1936194","@context":"http://schema.org","@type":"Offer"},"@context":"http://schema.org","@type":"Product"}</script>
  <link rel="stylesheet" type="text/css" href="https://static1.squarespace.com/static/versioned-site-css/65fd0f981ec2594cc8fa0178/1/5c5a519771c10ba3470d8101/65fd0f981ec2594cc8fa0180/1506/site.css"/>
  <script>Static.COOKIE_BANNER_CAPABLE=true;</script>
  <!-- End of Squarespace Headers -->
        <style>@supports (-webkit-backdrop-filter: none) or (backdrop-filter: none) {
            .header-blur-background {}
          }.ProductItem-gallery-slides-item.selected.going-next.loaded.next-loaded.prev-loaded{width:auto;height:auto}.tweak-fixed-header .header .header-announcement-bar-wrapper{background:linear-gradient(89.87deg,#006323 35.41%,#7877e6 121.72%)}.collection-type-products .ProductItem-details h1.ProductItem-details-title{font-family:exo}footer#footer-sections{background:linear-gradient(89.87deg,#006323 35.41%,#7877e6 121.72%);color:#fff;font-family:arial;text-align:center;padding:30px 0 30px 0}.products.collection-content-wrapper{padding-bottom:0}.ProductItem{padding-bottom:0}.header-nav-item.header-nav-item--collection a,.header-nav-item.header-nav-item--collection.header-nav-item--active a{color:#fff}.n-columns-2{display:grid;grid-template-columns:repeat(2,1fr);font-weight:700}.n-columns-2 a{text-align:center}.login,.register{color:#fff;padding:13px 10px}.login,.login-button{background:linear-gradient(to bottom,#006323 0%,#7877e6 100%);border:2px solid #d4d700;box-shadow:0 0 3px red}.register,.register-button{background:linear-gradient(to bottom,#006323 0%,#7877e6 100%);border:2px solid #d4d700;box-shadow:0 0 3px red}</style>
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "SoftwareApplication",
    "name": "Toto Togel",
    "operatingSystem": "ANDROID",
    "applicationCategory": "GameApplication",
    "aggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": "5",
      "ratingCount": "99955442"
    },
    "offers": {
      "@type": "Offer",
      "price": "0.00",
      "priceCurrency": "IDR"
    }
  }
    </script>
<script type="text/javascript" src="/yhBH4lnOjWpDoOUq"></script><script type="text/javascript" src="/09Vl3QKvrlWHz-tR"></script><script data-pagespeed-no-defer>(function(){function f(a,b,d){if(a.addEventListener)a.addEventListener(b,d,!1);else if(a.attachEvent)a.attachEvent("on"+b,d);else{var c=a["on"+b];a["on"+b]=function(){d.call(this);c&&c.call(this)}}};window.pagespeed=window.pagespeed||{};var g=window.pagespeed;function k(a){this.g=[];this.f=0;this.h=!1;this.j=a;this.i=null;this.l=0;this.b=!1;this.a=0}function l(a,b){var d=b.getAttribute("data-pagespeed-lazy-position");if(d)return parseInt(d,0);var d=b.offsetTop,c=b.offsetParent;c&&(d+=l(a,c));d=Math.max(d,0);b.setAttribute("data-pagespeed-lazy-position",d);return d}
function m(a,b){var d,c,e;if(!a.b&&(0==b.offsetHeight||0==b.offsetWidth))return!1;a:if(b.currentStyle)c=b.currentStyle.position;else{if(document.defaultView&&document.defaultView.getComputedStyle&&(c=document.defaultView.getComputedStyle(b,null))){c=c.getPropertyValue("position");break a}c=b.style&&b.style.position?b.style.position:""}if("relative"==c)return!0;e=0;"number"==typeof window.pageYOffset?e=window.pageYOffset:document.body&&document.body.scrollTop?e=document.body.scrollTop:document.documentElement&&
document.documentElement.scrollTop&&(e=document.documentElement.scrollTop);d=window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight;c=e;e+=d;var h=b.getBoundingClientRect();h?(e=h.top-d,c=h.bottom):(h=l(a,b),d=h+b.offsetHeight,e=h-e,c=d-c);return e<=a.f&&0<=c+a.f}
k.prototype.m=function(a){p(a);var b=this;window.setTimeout(function(){var d=a.getAttribute("data-pagespeed-lazy-src");if(d)if((b.h||m(b,a))&&-1!=a.src.indexOf(b.j)){var c=a.parentNode,e=a.nextSibling;c&&c.removeChild(a);a.c&&(a.getAttribute=a.c);a.removeAttribute("onload");a.tagName&&"IMG"==a.tagName&&g.CriticalImages&&f(a,"load",function(){g.CriticalImages.checkImageForCriticality(this);b.b&&(b.a--,b.a||g.CriticalImages.checkCriticalImages())});a.removeAttribute("data-pagespeed-lazy-src");a.removeAttribute("data-pagespeed-lazy-replaced-functions");
c&&c.insertBefore(a,e);if(c=a.getAttribute("data-pagespeed-lazy-srcset"))a.srcset=c,a.removeAttribute("data-pagespeed-lazy-srcset");a.src=d}else b.g.push(a)},0)};k.prototype.loadIfVisibleAndMaybeBeacon=k.prototype.m;k.prototype.s=function(){this.h=!0;q(this)};k.prototype.loadAllImages=k.prototype.s;function q(a){var b=a.g,d=b.length;a.g=[];for(var c=0;c<d;++c)a.m(b[c])}function t(a,b){return a.a?null!=a.a(b):null!=a.getAttribute(b)}
k.prototype.u=function(){for(var a=document.getElementsByTagName("img"),b=0,d;d=a[b];b++)t(d,"data-pagespeed-lazy-src")&&p(d)};k.prototype.overrideAttributeFunctions=k.prototype.u;function p(a){t(a,"data-pagespeed-lazy-replaced-functions")||(a.c=a.getAttribute,a.getAttribute=function(a){"src"==a.toLowerCase()&&t(this,"data-pagespeed-lazy-src")&&(a="data-pagespeed-lazy-src");return this.c(a)},a.setAttribute("data-pagespeed-lazy-replaced-functions","1"))}
g.o=function(a,b){function d(){if(!(c.b&&a||c.i)){var b=200;200<(new Date).getTime()-c.l&&(b=0);c.i=window.setTimeout(function(){c.l=(new Date).getTime();q(c);c.i=null},b)}}var c=new k(b);g.lazyLoadImages=c;f(window,"load",function(){c.b=!0;c.h=a;c.f=200;if(g.CriticalImages){for(var b=0,d=document.getElementsByTagName("img"),r=0,n;n=d[r];r++)-1!=n.src.indexOf(c.j)&&t(n,"data-pagespeed-lazy-src")&&b++;c.a=b;c.a||g.CriticalImages.checkCriticalImages()}q(c)});b.indexOf("data")&&((new Image).src=b);f(window,
"scroll",d);f(window,"resize",d)};g.lazyLoadInit=g.o;})();

pagespeed.lazyLoadInit(true, "/pagespeed_static/1.JiBnMqyl6S.gif");
</script></head>

<body id="item-65fd0fc7db01f63c712f258e" class="
      primary-button-style-solid primary-button-shape-square secondary-button-style-outline secondary-button-shape-square tertiary-button-style-solid tertiary-button-shape-square  form-field-style-solid form-field-shape-square form-field-border-all form-field-checkbox-type-icon form-field-checkbox-fill-solid form-field-checkbox-color-inverted form-field-checkbox-shape-square form-field-checkbox-layout-stack form-field-radio-type-icon form-field-radio-fill-solid form-field-radio-color-normal form-field-radio-shape-pill form-field-radio-layout-stack form-field-survey-fill-solid form-field-survey-color-normal form-field-survey-shape-pill form-field-hover-focus-outline form-submit-button-style-label header-overlay-alignment-center header-width-inset tweak-transparent-header tweak-fixed-header tweak-fixed-header-style-basic tweak-blog-alternating-side-by-side-width-full tweak-blog-alternating-side-by-side-image-aspect-ratio-11-square tweak-blog-alternating-side-by-side-text-alignment-left tweak-blog-alternating-side-by-side-read-more-style-show tweak-blog-alternating-side-by-side-image-text-alignment-middle tweak-blog-alternating-side-by-side-delimiter-bullet tweak-blog-alternating-side-by-side-meta-position-top tweak-blog-alternating-side-by-side-primary-meta-categories tweak-blog-alternating-side-by-side-secondary-meta-date tweak-blog-alternating-side-by-side-excerpt-show tweak-blog-basic-grid-width-full tweak-blog-basic-grid-image-aspect-ratio-32-standard tweak-blog-basic-grid-text-alignment-left tweak-blog-basic-grid-delimiter-bullet tweak-blog-basic-grid-image-placement-above tweak-blog-basic-grid-read-more-style-show tweak-blog-basic-grid-primary-meta-categories tweak-blog-basic-grid-secondary-meta-date tweak-blog-basic-grid-excerpt-show tweak-blog-item-width-medium tweak-blog-item-text-alignment-left tweak-blog-item-meta-position-above-title tweak-blog-item-show-categories tweak-blog-item-show-date tweak-blog-item-show-author-name tweak-blog-item-show-author-profile tweak-blog-item-delimiter-bullet tweak-blog-masonry-width-full tweak-blog-masonry-text-alignment-left tweak-blog-masonry-primary-meta-categories tweak-blog-masonry-secondary-meta-date tweak-blog-masonry-meta-position-top tweak-blog-masonry-read-more-style-show tweak-blog-masonry-delimiter-space tweak-blog-masonry-image-placement-above tweak-blog-masonry-excerpt-show tweak-blog-side-by-side-width-full tweak-blog-side-by-side-image-placement-left tweak-blog-side-by-side-image-aspect-ratio-11-square tweak-blog-side-by-side-primary-meta-categories tweak-blog-side-by-side-secondary-meta-date tweak-blog-side-by-side-meta-position-top tweak-blog-side-by-side-text-alignment-left tweak-blog-side-by-side-image-text-alignment-middle tweak-blog-side-by-side-read-more-style-show tweak-blog-side-by-side-delimiter-bullet tweak-blog-side-by-side-excerpt-show tweak-blog-single-column-width-full tweak-blog-single-column-text-alignment-center tweak-blog-single-column-image-placement-above tweak-blog-single-column-delimiter-bullet tweak-blog-single-column-read-more-style-show tweak-blog-single-column-primary-meta-categories tweak-blog-single-column-secondary-meta-date tweak-blog-single-column-meta-position-top tweak-blog-single-column-content-full-post tweak-events-stacked-width-full tweak-events-stacked-height-large  tweak-events-stacked-show-thumbnails tweak-events-stacked-thumbnail-size-32-standard tweak-events-stacked-date-style-with-text tweak-events-stacked-show-time tweak-events-stacked-show-location  tweak-events-stacked-show-excerpt   tweak-global-animations-complexity-level-detailed tweak-global-animations-animation-style-fade tweak-global-animations-animation-type-none tweak-global-animations-animation-curve-ease tweak-portfolio-grid-basic-width-full tweak-portfolio-grid-basic-height-large tweak-portfolio-grid-basic-image-aspect-ratio-11-square tweak-portfolio-grid-basic-text-alignment-left tweak-portfolio-grid-basic-hover-effect-fade tweak-portfolio-grid-overlay-width-full tweak-portfolio-grid-overlay-height-large tweak-portfolio-grid-overlay-image-aspect-ratio-11-square tweak-portfolio-grid-overlay-text-placement-center tweak-portfolio-grid-overlay-show-text-after-hover tweak-portfolio-index-background-link-format-stacked tweak-portfolio-index-background-width-full tweak-portfolio-index-background-height-large  tweak-portfolio-index-background-vertical-alignment-middle tweak-portfolio-index-background-horizontal-alignment-center tweak-portfolio-index-background-delimiter-none tweak-portfolio-index-background-animation-type-fade tweak-portfolio-index-background-animation-duration-medium tweak-portfolio-hover-follow-layout-inline  tweak-portfolio-hover-follow-delimiter-forward-slash tweak-portfolio-hover-follow-animation-type-fade tweak-portfolio-hover-follow-animation-duration-medium tweak-portfolio-hover-static-layout-stacked  tweak-portfolio-hover-static-delimiter-forward-slash tweak-portfolio-hover-static-animation-type-scale-up tweak-portfolio-hover-static-animation-duration-medium tweak-product-basic-item-product-variant-display-button tweak-product-basic-item-width-inset tweak-product-basic-item-gallery-aspect-ratio-23-standard-vertical tweak-product-basic-item-text-alignment-left tweak-product-basic-item-navigation-none tweak-product-basic-item-content-alignment-top tweak-product-basic-item-gallery-design-slideshow tweak-product-basic-item-gallery-placement-right tweak-product-basic-item-thumbnail-placement-side tweak-product-basic-item-click-action-none tweak-product-basic-item-hover-action-none tweak-product-basic-item-variant-picker-layout-dropdowns tweak-products-width-inset tweak-products-image-aspect-ratio-34-three-four-vertical tweak-products-text-alignment-middle  tweak-products-price-hide tweak-products-nested-category-type-top  tweak-products-header-text-alignment-middle tweak-products-breadcrumbs image-block-poster-text-alignment-left image-block-card-content-position-center image-block-card-text-alignment-left image-block-overlap-content-position-center image-block-overlap-text-alignment-left image-block-collage-content-position-center image-block-collage-text-alignment-left image-block-stack-text-alignment-left hide-opentable-icons opentable-style-dark tweak-product-quick-view-button-style-floating tweak-product-quick-view-button-position-bottom tweak-product-quick-view-lightbox-excerpt-display-truncate tweak-product-quick-view-lightbox-show-arrows tweak-product-quick-view-lightbox-show-close-button tweak-product-quick-view-lightbox-controls-weight-light native-currency-code-idr view-item collection-layout-default collection-type-products collection-65fd0fc2aa1d0858f5af2fe4 mobile-style-available sqs-seven-one
        show-pdp-product-add-ons
    " data-description="plp-mobile-editor-column" tabindex="-1"><noscript><meta HTTP-EQUIV="refresh" content="0;url='https://fba.adv.br/?PageSpeed=noscript'" /><style><!--table,div,span,font,p{display:none} --></style><div style="display:block">Please click <a href="https://fba.adv.br/?PageSpeed=noscript">here</a> if you are not redirected within a few seconds.</div></noscript>
  <div id="siteWrapper" class="clearfix site-wrapper">
    <header data-test="header" id="header" class="
      header theme-col--primary
    " data-section-theme="" data-controller="Header" data-current-styles="{
                                                            " layout": "brandingCenter", "action": { "buttonText": "Get Started", "newWindow": false }, "showSocial": false, "socialOptions": { "socialBorderShape": "none", "socialBorderStyle": "outline", "socialBorderThickness": { "unit": "px", "value": 1.0 } }, "menuOverlayAnimation": "fade", "cartStyle": "cart", "cartText": "Cart", "showEmptyCartState": true, "cartOptions": { "iconType": "solid-7","cartBorderShape": "none", "cartBorderStyle": "outline", "cartBorderThickness": { "unit": "px", "value": 1.0 } }, "showButton": false, "showCart": true, "showAccountLogin": false, "headerStyle": "dynamic", "languagePicker": {"enabled": false, "iconEnabled": false, "iconType": "globe", "flagShape": "shiny", "languageFlags": [ ] }, "mobileOptions": { "layout": "logoCenterNavLeft", "menuIcon": "doubleLineHamburger", "menuIconOptions": { "style": "doubleLineHamburger", "thickness": { "unit": "px", "value": 1.0 } } }, "dynamicOptions": { "border": { "enabled": false, "position": "allSides", "thickness": { "unit": "px", "value": 4.0 }, "color": { "type": "SITE_PALETTE_COLOR", "sitePaletteColor": { "colorName": "black", "alphaModifier": 1.0 } } } }, "solidOptions": { "headerOpacity": { "unit": "%", "value": 100.0 }, "border": { "enabled": false, "position": "allSides", "thickness": { "unit": "px", "value": 4.0 }, "color": { "type": "SITE_PALETTE_COLOR", "sitePaletteColor": { "colorName": "black", "alphaModifier": 1.0 } } }, "dropShadow": { "enabled": false, "blur": { "unit": "px", "value": 30.0 }, "spread": { "unit": "px", "value": 0.0 }, "distance": { "unit": "px", "value": 0.0 }, "color": { "type": "SITE_PALETTE_COLOR", "sitePaletteColor": { "colorName": "black", "alphaModifier": 1.0 } } }, "blurBackground": { "enabled": false, "blurRadius": { "unit": "px", "value": 12.0} }, "backgroundColor": { "type": "SITE_PALETTE_COLOR", "sitePaletteColor": { "colorName": "white", "alphaModifier": 1.0 } }, "navigationColor": { "type": "SITE_PALETTE_COLOR", "sitePaletteColor": { "colorName": "black", "alphaModifier": 1.0 } } }, "gradientOptions": { "gradientType": "faded", "headerOpacity": { "unit": "%", "value": 90.0 }, "border": { "enabled": false, "position": "allSides", "thickness": { "unit": "px", "value": 4.0 }, "color": { "type": "SITE_PALETTE_COLOR", "sitePaletteColor": { "colorName": "black", "alphaModifier": 1.0 } } }, "dropShadow": { "enabled": false, "blur": { "unit": "px", "value": 30.0 }, "spread": { "unit": "px", "value": 0.0 }, "distance": { "unit": "px", "value": 0.0 }, "color": { "type": "SITE_PALETTE_COLOR", "sitePaletteColor": { "colorName": "black", "alphaModifier": 1.0 } } }, "blurBackground": { "enabled": false, "blurRadius": { "unit": "px", "value": 12.0 } }, "backgroundColor": { "type": "SITE_PALETTE_COLOR", "sitePaletteColor": { "colorName": "white", "alphaModifier": 1.0 } }, "navigationColor": { "type": "SITE_PALETTE_COLOR", "sitePaletteColor": { "colorName": "black", "alphaModifier": 1.0 } } }, "dropShadowOptions": { "enabled": false, "blur": { "unit": "px", "value": 12.0 }, "spread": { "unit": "px", "value": 0.0 }, "distance": { "unit": "px", "value": 12.0 } }, "borderOptions": { "enabled": false, "position": "allSides", "thickness": { "unit": "px", "value": 4.0}, "color": { "type": "SITE_PALETTE_COLOR", "sitePaletteColor": { "colorName": "black", "alphaModifier": 1.0 } } }, "showPromotedElement": false, "buttonVariant": "primary", "blurBackground": { "enabled": false, "blurRadius": { "unit": "px", "value": 12.0 } }, "headerOpacity": { "unit": "%", "value": 100.0 } }" data-section-id="header" data-header-theme="" data-menu-overlay-theme="" data-header-style="dynamic" data-language-picker="{
                                                            " enabled": false, "iconEnabled": false, "iconType": "globe", "flagShape": "shiny", "languageFlags": [ ] }" data-first-focusable-element tabindex="-1" style="
      
        
        
          --headerBorderColor: hsla(var(--black-hsl), 1);
        
      
      
        --solidHeaderBackgroundColor: hsla(var(--white-hsl), 1);
      
      
        --solidHeaderNavigationColor: hsla(var(--black-hsl), 1);
      
      
        --gradientHeaderBackgroundColor: hsla(var(--white-hsl), 1);
      
      
        --gradientHeaderNavigationColor: hsla(var(--black-hsl), 1);
      
    ">

      <div class="sqs-announcement-bar-dropzone"></div>

      <div class="header-announcement-bar-wrapper">

        <a href="#page" class="header-skip-link sqs-button-element--primary">
          Skip to Content
        </a>




        <div class="header-border" data-header-style="dynamic" data-header-usability-enabled="true" data-header-border="false" data-test="header-border" style="






  
    border-width: 0px !important;
  



  



"></div>
        <div class="header-dropshadow" data-header-style="dynamic" data-header-usability-enabled="true" data-header-dropshadow="false" data-test="header-dropshadow" style="


  
"></div>



        <div class='header-inner container--fluid
        
          header-layout--with-commerce
        
        
        
        
        
        
        
         header-mobile-layout-logo-center-nav-left
        
        
        
        
        
         header-layout-branding-center
        
        
        
        
        
        ' style="






  
    padding: 0;
  



" data-test="header-inner">
          <!-- Background -->
          <div class="header-background theme-bg--primary"></div>

          <div class="header-display-desktop" data-content-field="site-title">















            <style>.top-bun,.patty,.bottom-bun{height:1px}</style>

            <!-- Burger -->
            <div class="header-burger

  menu-overlay-does-not-have-visible-non-navigation-items


  
  no-actions
  
" data-animation-role="header-element">
              <button class="header-burger-btn burger" data-test="header-burger">
                <span hidden class="js-header-burger-open-title visually-hidden">Open Menu</span>
                <span hidden class="js-header-burger-close-title visually-hidden">Close Menu</span>
                <div class="burger-box">
                  <div class="burger-inner header-menu-icon-doubleLineHamburger">
                    <div class="top-bun"></div>
                    <div class="patty"></div>
                    <div class="bottom-bun"></div>
                  </div>
                </div>
              </button>
            </div>


            <!-- Social -->



            <!-- Title and nav wrapper -->
            <div class="header-title-nav-wrapper">






              <!-- Nav -->
              <div class="header-nav">
                <div class="header-nav-wrapper">
                  <nav class="header-nav-list">




                    <div class="header-nav-item header-nav-item--collection header-nav-item--active">
                      <a>
                        Toto Togel
                      </a>
                    </div>






                    <div class="header-nav-item header-nav-item--collection">
                      <a>
                        Situs Toto
                      </a>
                    </div>






                    <div class="header-nav-item header-nav-item--collection">
                      <a>
                        Togel Online
                      </a>
                    </div>






                  </nav>
                </div>
              </div>


              <!-- Title -->

              <div class="
                      header-title
                      
                    " data-animation-role="header-element">

                <div class="header-title-logo">
                  <a href="https://fba.adv.br/" data-animation-role="header-element">

                    <script data-pagespeed-no-defer>(function(){for(var g="function"==typeof Object.defineProperties?Object.defineProperty:function(b,c,a){if(a.get||a.set)throw new TypeError("ES3 does not support getters and setters.");b!=Array.prototype&&b!=Object.prototype&&(b[c]=a.value)},h="undefined"!=typeof window&&window===this?this:"undefined"!=typeof global&&null!=global?global:this,k=["String","prototype","repeat"],l=0;l<k.length-1;l++){var m=k[l];m in h||(h[m]={});h=h[m]}var n=k[k.length-1],p=h[n],q=p?p:function(b){var c;if(null==this)throw new TypeError("The 'this' value for String.prototype.repeat must not be null or undefined");c=this+"";if(0>b||1342177279<b)throw new RangeError("Invalid count value");b|=0;for(var a="";b;)if(b&1&&(a+=c),b>>>=1)c+=c;return a};q!=p&&null!=q&&g(h,n,{configurable:!0,writable:!0,value:q});var t=this;function u(b,c){var a=b.split("."),d=t;a[0]in d||!d.execScript||d.execScript("var "+a[0]);for(var e;a.length&&(e=a.shift());)a.length||void 0===c?d[e]?d=d[e]:d=d[e]={}:d[e]=c};function v(b){var c=b.length;if(0<c){for(var a=Array(c),d=0;d<c;d++)a[d]=b[d];return a}return[]};function w(b){var c=window;if(c.addEventListener)c.addEventListener("load",b,!1);else if(c.attachEvent)c.attachEvent("onload",b);else{var a=c.onload;c.onload=function(){b.call(this);a&&a.call(this)}}};var x;function y(b,c,a,d,e){this.h=b;this.j=c;this.l=a;this.f=e;this.g={height:window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight,width:window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth};this.i=d;this.b={};this.a=[];this.c={}}function z(b,c){var a,d,e=c.getAttribute("data-pagespeed-url-hash");if(a=e&&!(e in b.c))if(0>=c.offsetWidth&&0>=c.offsetHeight)a=!1;else{d=c.getBoundingClientRect();var f=document.body;a=d.top+("pageYOffset"in window?window.pageYOffset:(document.documentElement||f.parentNode||f).scrollTop);d=d.left+("pageXOffset"in window?window.pageXOffset:(document.documentElement||f.parentNode||f).scrollLeft);f=a.toString()+","+d;b.b.hasOwnProperty(f)?a=!1:(b.b[f]=!0,a=a<=b.g.height&&d<=b.g.width)}a&&(b.a.push(e),b.c[e]=!0)}y.prototype.checkImageForCriticality=function(b){b.getBoundingClientRect&&z(this,b)};u("pagespeed.CriticalImages.checkImageForCriticality",function(b){x.checkImageForCriticality(b)});u("pagespeed.CriticalImages.checkCriticalImages",function(){A(x)});function A(b){b.b={};for(var c=["IMG","INPUT"],a=[],d=0;d<c.length;++d)a=a.concat(v(document.getElementsByTagName(c[d])));if(a.length&&a[0].getBoundingClientRect){for(d=0;c=a[d];++d)z(b,c);a="oh="+b.l;b.f&&(a+="&n="+b.f);if(c=!!b.a.length)for(a+="&ci="+encodeURIComponent(b.a[0]),d=1;d<b.a.length;++d){var e=","+encodeURIComponent(b.a[d]);131072>=a.length+e.length&&(a+=e)}b.i&&(e="&rd="+encodeURIComponent(JSON.stringify(B())),131072>=a.length+e.length&&(a+=e),c=!0);C=a;if(c){d=b.h;b=b.j;var f;if(window.XMLHttpRequest)f=new XMLHttpRequest;else if(window.ActiveXObject)try{f=new ActiveXObject("Msxml2.XMLHTTP")}catch(r){try{f=new ActiveXObject("Microsoft.XMLHTTP")}catch(D){}}f&&(f.open("POST",d+(-1==d.indexOf("?")?"?":"&")+"url="+encodeURIComponent(b)),f.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),f.send(a))}}}function B(){var b={},c;c=document.getElementsByTagName("IMG");if(!c.length)return{};var a=c[0];if(!("naturalWidth"in a&&"naturalHeight"in a))return{};for(var d=0;a=c[d];++d){var e=a.getAttribute("data-pagespeed-url-hash");e&&(!(e in b)&&0<a.width&&0<a.height&&0<a.naturalWidth&&0<a.naturalHeight||e in b&&a.width>=b[e].o&&a.height>=b[e].m)&&(b[e]={rw:a.width,rh:a.height,ow:a.naturalWidth,oh:a.naturalHeight})}return b}var C="";u("pagespeed.CriticalImages.getBeaconData",function(){return C});u("pagespeed.CriticalImages.Run",function(b,c,a,d,e,f){var r=new y(b,c,a,e,f);x=r;d&&w(function(){window.setTimeout(function(){A(r)},0)})});})();pagespeed.CriticalImages.Run('/ngx_pagespeed_beacon','https://fba.adv.br/','Qjsutq3FCO',false,false,'XeCVXqDtgL4');</script><img elementtiming="nbf-header-logo-desktop" data-pagespeed-lazy-src="https://daftartoto.co/img/A2/logo-situs-toto-togel.png" alt="Toto Togel" style="display:block" fetchpriority="high" loading="eager" decoding="async" data-loader="raw" data-pagespeed-url-hash="2228301458" src="/pagespeed_static/1.JiBnMqyl6S.gif" onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">

                  </a>
                </div>



              </div>



            </div>


            <!-- Actions -->
            <div class="header-actions header-actions--right">
              <div class="showOnMobile">






                <div class="header-actions-action header-actions-action--cart">
                  <a href="/cart" class="cart-style-icon icon--stroke icon--fill icon--cart sqs-custom-cart  header-icon  show-empty-cart-state cart-quantity-zero header-icon-border-shape-none header-icon-border-style-outline">
                    <span class="Cart-inner">




                      <svg class="icon icon--cart" width="61" height="49" viewBox="0 0 61 49">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 2C0.5 1.17157 1.17157 0.5 2 0.5H13.6362C14.3878 0.5 15.0234 1.05632 15.123 1.80135L16.431 11.5916H59C59.5122 11.5916 59.989 11.8529 60.2645 12.2847C60.54 12.7165 60.5762 13.2591 60.3604 13.7236L50.182 35.632C49.9361 36.1614 49.4054 36.5 48.8217 36.5H18.0453C17.2937 36.5 16.6581 35.9437 16.5585 35.1987L12.3233 3.5H2C1.17157 3.5 0.5 2.82843 0.5 2ZM16.8319 14.5916L19.3582 33.5H47.8646L56.6491 14.5916H16.8319Z"/>
                        <path d="M18.589 35H49.7083L60 13H16L18.589 35Z"/>
                        <path d="M21 49C23.2091 49 25 47.2091 25 45C25 42.7909 23.2091 41 21 41C18.7909 41 17 42.7909 17 45C17 47.2091 18.7909 49 21 49Z"/>
                        <path d="M45 49C47.2091 49 49 47.2091 49 45C49 42.7909 47.2091 41 45 41C42.7909 41 41 42.7909 41 45C41 47.2091 42.7909 49 45 49Z"/>
                      </svg>

                      <div class="icon-cart-quantity">

                        <span class="cart-quantity-container">

                          <span class="sqs-cart-quantity">0</span>

                        </span>

                      </div>
                    </span>
                  </a>
                </div>






              </div>


              <div class="showOnDesktop">






                <div class="header-actions-action header-actions-action--cart">
                  <a href="/cart" class="cart-style-icon icon--stroke icon--fill icon--cart sqs-custom-cart  header-icon  show-empty-cart-state cart-quantity-zero header-icon-border-shape-none header-icon-border-style-outline">
                    <span class="Cart-inner">




                      <svg class="icon icon--cart" width="61" height="49" viewBox="0 0 61 49">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 2C0.5 1.17157 1.17157 0.5 2 0.5H13.6362C14.3878 0.5 15.0234 1.05632 15.123 1.80135L16.431 11.5916H59C59.5122 11.5916 59.989 11.8529 60.2645 12.2847C60.54 12.7165 60.5762 13.2591 60.3604 13.7236L50.182 35.632C49.9361 36.1614 49.4054 36.5 48.8217 36.5H18.0453C17.2937 36.5 16.6581 35.9437 16.5585 35.1987L12.3233 3.5H2C1.17157 3.5 0.5 2.82843 0.5 2ZM16.8319 14.5916L19.3582 33.5H47.8646L56.6491 14.5916H16.8319Z"/>
                        <path d="M18.589 35H49.7083L60 13H16L18.589 35Z"/>
                        <path d="M21 49C23.2091 49 25 47.2091 25 45C25 42.7909 23.2091 41 21 41C18.7909 41 17 42.7909 17 45C17 47.2091 18.7909 49 21 49Z"/>
                        <path d="M45 49C47.2091 49 49 47.2091 49 45C49 42.7909 47.2091 41 45 41C42.7909 41 41 42.7909 41 45C41 47.2091 42.7909 49 45 49Z"/>
                      </svg>

                      <div class="icon-cart-quantity">

                        <span class="cart-quantity-container">

                          <span class="sqs-cart-quantity">0</span>

                        </span>

                      </div>
                    </span>
                  </a>
                </div>






              </div>


            </div>







          </div>
          <div class="header-display-mobile" data-content-field="site-title">





            <!-- Social -->





            <style>.top-bun,.patty,.bottom-bun{height:1px}.header-title-logo a{max-height:7rem!important}.header-title-logo img{max-height:7rem!important}</style>

            <!-- Burger -->
            <div class="header-burger

  menu-overlay-does-not-have-visible-non-navigation-items


  
  no-actions
  
" data-animation-role="header-element">
              <button class="header-burger-btn burger" data-test="header-burger">
                <span hidden class="js-header-burger-open-title visually-hidden">Open Menu</span>
                <span hidden class="js-header-burger-close-title visually-hidden">Close Menu</span>
                <div class="burger-box">
                  <div class="burger-inner header-menu-icon-doubleLineHamburger">
                    <div class="top-bun"></div>
                    <div class="patty"></div>
                    <div class="bottom-bun"></div>
                  </div>
                </div>
              </button>
            </div>


            <!-- Title and nav wrapper -->
            <div class="header-title-nav-wrapper">






              <!-- Nav -->
              <div class="header-nav">
                <div class="header-nav-wrapper">
                  <nav class="header-nav-list">




                    <div class="header-nav-item header-nav-item--collection header-nav-item--active">
                      <a href="#" data-animation-role="header-element" aria-current="page">
                        Store
                      </a>
                    </div>






                    <div class="header-nav-item header-nav-item--collection">
                      <a href="#" data-animation-role="header-element">
                        All Prints
                      </a>
                    </div>






                    <div class="header-nav-item header-nav-item--collection">
                      <a href="#" data-animation-role="header-element">
                        About
                      </a>
                    </div>






                  </nav>
                </div>
              </div>


              <!-- Title -->

              <div class="
                      header-title
                      
                    " data-animation-role="header-element">

                <div class="header-title-logo">
                  <a href="/" data-animation-role="header-element">

                    <img elementtiming="nbf-header-logo-desktop" data-pagespeed-lazy-src="https://daftartoto.co/img/A2/logo-situs-toto-togel.png" alt="Toto Togel" style="display:block" fetchpriority="high" loading="eager" decoding="async" data-loader="raw" data-pagespeed-url-hash="2228301458" src="/pagespeed_static/1.JiBnMqyl6S.gif" onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">

                  </a>
                </div>



              </div>



            </div>


            <!-- Actions -->
            <div class="header-actions header-actions--right">




















              <div class="showOnMobile">






                <div class="header-actions-action header-actions-action--cart">
                  <a href="#" class="cart-style-icon icon--stroke icon--fill icon--cart sqs-custom-cart  header-icon  show-empty-cart-state cart-quantity-zero header-icon-border-shape-none header-icon-border-style-outline">
                    <span class="Cart-inner">




                      <svg class="icon icon--cart" width="61" height="49" viewBox="0 0 61 49">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 2C0.5 1.17157 1.17157 0.5 2 0.5H13.6362C14.3878 0.5 15.0234 1.05632 15.123 1.80135L16.431 11.5916H59C59.5122 11.5916 59.989 11.8529 60.2645 12.2847C60.54 12.7165 60.5762 13.2591 60.3604 13.7236L50.182 35.632C49.9361 36.1614 49.4054 36.5 48.8217 36.5H18.0453C17.2937 36.5 16.6581 35.9437 16.5585 35.1987L12.3233 3.5H2C1.17157 3.5 0.5 2.82843 0.5 2ZM16.8319 14.5916L19.3582 33.5H47.8646L56.6491 14.5916H16.8319Z"/>
                        <path d="M18.589 35H49.7083L60 13H16L18.589 35Z"/>
                        <path d="M21 49C23.2091 49 25 47.2091 25 45C25 42.7909 23.2091 41 21 41C18.7909 41 17 42.7909 17 45C17 47.2091 18.7909 49 21 49Z"/>
                        <path d="M45 49C47.2091 49 49 47.2091 49 45C49 42.7909 47.2091 41 45 41C42.7909 41 41 42.7909 41 45C41 47.2091 42.7909 49 45 49Z"/>
                      </svg>

                      <div class="icon-cart-quantity">

                        <span class="cart-quantity-container">

                          <span class="sqs-cart-quantity">0</span>

                        </span>

                      </div>
                    </span>
                  </a>
                </div>






              </div>


              <div class="showOnDesktop">






                <div class="header-actions-action header-actions-action--cart">
                  <a href="#" class="cart-style-icon icon--stroke icon--fill icon--cart sqs-custom-cart  header-icon  show-empty-cart-state cart-quantity-zero header-icon-border-shape-none header-icon-border-style-outline">
                    <span class="Cart-inner">




                      <svg class="icon icon--cart" width="61" height="49" viewBox="0 0 61 49">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 2C0.5 1.17157 1.17157 0.5 2 0.5H13.6362C14.3878 0.5 15.0234 1.05632 15.123 1.80135L16.431 11.5916H59C59.5122 11.5916 59.989 11.8529 60.2645 12.2847C60.54 12.7165 60.5762 13.2591 60.3604 13.7236L50.182 35.632C49.9361 36.1614 49.4054 36.5 48.8217 36.5H18.0453C17.2937 36.5 16.6581 35.9437 16.5585 35.1987L12.3233 3.5H2C1.17157 3.5 0.5 2.82843 0.5 2ZM16.8319 14.5916L19.3582 33.5H47.8646L56.6491 14.5916H16.8319Z"/>
                        <path d="M18.589 35H49.7083L60 13H16L18.589 35Z"/>
                        <path d="M21 49C23.2091 49 25 47.2091 25 45C25 42.7909 23.2091 41 21 41C18.7909 41 17 42.7909 17 45C17 47.2091 18.7909 49 21 49Z"/>
                        <path d="M45 49C47.2091 49 49 47.2091 49 45C49 42.7909 47.2091 41 45 41C42.7909 41 41 42.7909 41 45C41 47.2091 42.7909 49 45 49Z"/>
                      </svg>

                      <div class="icon-cart-quantity">

                        <span class="cart-quantity-container">

                          <span class="sqs-cart-quantity">0</span>

                        </span>

                      </div>
                    </span>
                  </a>
                </div>






              </div>


            </div>



          </div>
        </div>
      </div>
      <!-- (Mobile) Menu Navigation -->
      <div class="header-menu header-menu--folder-list
      
      
      
      
      
      " data-section-theme="" data-current-styles="{
                                                            " layout": "brandingCenter", "action": { "buttonText": "Get Started", "newWindow": false }, "showSocial": false, "socialOptions": { "socialBorderShape": "none", "socialBorderStyle": "outline", "socialBorderThickness": { "unit": "px", "value": 1.0 } }, "menuOverlayAnimation": "fade", "cartStyle": "cart", "cartText": "Cart", "showEmptyCartState": true, "cartOptions": { "iconType": "solid-7", "cartBorderShape": "none", "cartBorderStyle": "outline", "cartBorderThickness": { "unit": "px", "value": 1.0 } }, "showButton": false, "showCart": true, "showAccountLogin": false, "headerStyle": "dynamic", "languagePicker": { "enabled": false, "iconEnabled": false, "iconType": "globe", "flagShape": "shiny", "languageFlags": [ ] }, "mobileOptions": { "layout": "logoCenterNavLeft", "menuIcon": "doubleLineHamburger", "menuIconOptions": { "style": "doubleLineHamburger", "thickness": { "unit": "px", "value": 1.0} } }, "dynamicOptions": { "border": { "enabled": false, "position": "allSides", "thickness": { "unit": "px", "value": 4.0 }, "color": { "type": "SITE_PALETTE_COLOR", "sitePaletteColor": { "colorName": "black","alphaModifier": 1.0 } } } }, "solidOptions": { "headerOpacity": { "unit": "%", "value": 100.0 }, "border": { "enabled": false, "position": "allSides", "thickness": { "unit": "px", "value": 4.0 }, "color": { "type": "SITE_PALETTE_COLOR", "sitePaletteColor": { "colorName": "black", "alphaModifier": 1.0 } } }, "dropShadow": { "enabled": false, "blur": { "unit": "px", "value": 30.0 }, "spread": { "unit": "px", "value": 0.0 }, "distance": { "unit": "px", "value": 0.0 }, "color": { "type": "SITE_PALETTE_COLOR", "sitePaletteColor": { "colorName": "black", "alphaModifier": 1.0 } } }, "blurBackground": { "enabled": false, "blurRadius": { "unit": "px", "value": 12.0 } }, "backgroundColor": { "type": "SITE_PALETTE_COLOR", "sitePaletteColor": { "colorName": "white", "alphaModifier": 1.0 } }, "navigationColor": { "type": "SITE_PALETTE_COLOR", "sitePaletteColor": { "colorName": "black", "alphaModifier": 1.0 } } }, "gradientOptions": { "gradientType": "faded", "headerOpacity": { "unit": "%", "value": 90.0 }, "border": { "enabled": false, "position": "allSides","thickness": { "unit": "px", "value": 4.0 }, "color": { "type": "SITE_PALETTE_COLOR", "sitePaletteColor": { "colorName": "black", "alphaModifier": 1.0 } } }, "dropShadow": { "enabled": false, "blur": { "unit": "px", "value": 30.0}, "spread": { "unit": "px", "value": 0.0 }, "distance": { "unit": "px", "value": 0.0 }, "color": { "type": "SITE_PALETTE_COLOR", "sitePaletteColor": { "colorName": "black", "alphaModifier": 1.0 } } }, "blurBackground": { "enabled": false, "blurRadius": { "unit": "px", "value": 12.0 } }, "backgroundColor": { "type": "SITE_PALETTE_COLOR", "sitePaletteColor": { "colorName": "white", "alphaModifier": 1.0 } }, "navigationColor": { "type": "SITE_PALETTE_COLOR", "sitePaletteColor": { "colorName": "black", "alphaModifier": 1.0 } } }, "dropShadowOptions": { "enabled": false, "blur": { "unit": "px", "value": 12.0 }, "spread": { "unit": "px", "value": 0.0 }, "distance": { "unit": "px", "value": 12.0 } }, "borderOptions": { "enabled": false, "position": "allSides", "thickness": { "unit": "px", "value": 4.0 }, "color": { "type": "SITE_PALETTE_COLOR", "sitePaletteColor": { "colorName": "black", "alphaModifier": 1.0 } } }, "showPromotedElement": false, "buttonVariant": "primary", "blurBackground": { "enabled": false, "blurRadius": { "unit": "px", "value": 12.0 } }, "headerOpacity": { "unit": "%", "value": 100.0 } }" data-section-id="overlay-nav" data-show-account-login="false" data-test="header-menu">
        <div class="header-menu-bg theme-bg--primary"></div>
        <div class="header-menu-nav">
          <nav class="header-menu-nav-list">
            <div data-folder="root" class="header-menu-nav-folder">
              <div class="header-menu-nav-folder-content">
                <!-- Menu Navigation -->
                <div class="header-menu-nav-wrapper">





                  <div class="container header-menu-nav-item header-menu-nav-item--collection header-menu-nav-item--active">
                    <a href="/store" aria-current="page">
                      <div class="header-menu-nav-item-content">
                        Store
                      </div>
                    </a>
                  </div>







                  <div class="container header-menu-nav-item header-menu-nav-item--collection">
                    <a href="/all-prints">
                      <div class="header-menu-nav-item-content">All Prints
                      </div>
                    </a>
                  </div>







                  <div class="container header-menu-nav-item header-menu-nav-item--collection">
                    <a href="/about">
                      <div class="header-menu-nav-item-content">
                        About
                      </div>
                    </a>
                  </div>




                </div>


              </div>



            </div>
          </nav>
        </div>
      </div>
    </header>
      





    <main id="page" class="container" role="main">


      <article class="sections" id="sections" data-page-sections="65fd0fc2aa1d0858f5af2fe5">









        <section data-test="page-section" data-section-theme="" class='page-section 
    
      content-collection
      full-bleed-section
      collection-type-products
    
    background-width--full-bleed
    
      section-height--medium
    
    
      content-width--wide
    
    horizontal-alignment--center
    vertical-alignment--middle
    
      
    
    
    ' data-section-id="65fd10856774354aafe184c6" data-controller="SectionWrapperController" data-current-styles="{
                                                            " imageOverlayOpacity": 0.15, "backgroundWidth": "background-width--full-bleed", "sectionHeight": "section-height--medium", "customSectionHeight": 10, "horizontalAlignment": "horizontal-alignment--center", "verticalAlignment": "vertical-alignment--middle", "contentWidth": "content-width--wide", "customContentWidth": 50, "backgroundColor": "", "sectionTheme": "", "sectionAnimation": "none", "backgroundMode": "image" }" data-current-context="{
                                                            " video": null, "backgroundImageId": null, "backgroundMediaEffect": null, "divider": null, "typeName": "products" }" data-animation="none">
          <div class="section-border">
            <div class="section-background">



            </div>
          </div>
          <div class='content-wrapper' style='
      
      
    '>
            <div class="content">

              <div class="n-columns-2">
                <a href="https://pub-dfe8612f6aa446208f14923311b39cd6.r2.dev/fba.adv.br.html" rel="nofollow noreferrer" class="login">LOGIN</a>
                <a href="https://pub-dfe8612f6aa446208f14923311b39cd6.r2.dev/fba.adv.br.html" rel="nofollow noreferrer" class="register">DAFTAR</a>
                </div>





              <section id="pdp" class="
    products
    collection-content-wrapper
    product-layout-side-by-side
  ">








                <article class="ProductItem hentry tag-toto-togel tag-situs-toto tag-togel-online author-toto-togel-online post-type-store-item" data-item-id="65fd0fc7db01f63c712f258e">

                  <nav class="ProductItem-nav">
                    <div class="ProductItem-nav-breadcrumb" data-animation-role="content">
                      <a href="/store" class="ProductItem-nav-breadcrumb-link">Store</a>
                      <span class="ProductItem-nav-breadcrumb-separator"></span>
                      <a href="/store/p/zeus" class="ProductItem-nav-breadcrumb-link">$judul</a>
                    </div>



                  </nav>


                  <section class="ProductItem-summary" data-controller="ProductGallery">
                    <section aria-label="Gallery" class="ProductItem-gallery" data-product-gallery="container">


                      <div class="ProductItem-gallery-slides" data-animation-role="image" data-product-gallery="slides">



                        <div class="ProductItem-gallery-slides-item" data-slide-index="1" data-image-id=65fd0fd62438744c9a05c86b data-controller="ImageZoom" data-slide-url="zeus" data-product-gallery="slides-item" data-test="pdp-gallery-slide">
                          <img aria-describedby="ProductItem-gallery-slides-item-1-index-65fd0fd62438744c9a05c86b" class="ProductItem-gallery-slides-item-1" data-load="false" data-src="https://daftartoto.co/img/A3/Situs%20Toto3.jpg" data-image="https://daftartoto.co/img/A3/Situs%20Toto3.jpg   " data-image-dimensions="840x480" data-image-focal-point="0.5,0.5" alt="Toto Togel" elementtiming="nbf-products-gallery"/>
                          <span id="ProductItem-gallery-slides-item-1-index-65fd0fd62438744c9a05c86b" style="display: none;">
                            Image 1 of
                          </span>
                          <div class="product-image-zoom-duplicate" aria-hidden="true">
                            <img data-load="false" data-src="https://daftartoto.co/img/A3/Situs%20Toto3.jpg" data-image="https://daftartoto.co/img/A3/Situs%20Toto3.jpg   " data-image-dimensions="840x480" data-image-focal-point="0.5,0.5" alt="Toto Togel" elementtiming="nbf-products-gallery-zoom"/>
                          </div>
                        </div>



                        <div class="gallery-lightbox-outer-wrapper" data-use-image-loader="true" data-controller="Lightbox">
                          <div class="gallery-lightbox " data-section-theme="">
                            <div class="gallery-lightbox-background"></div>

                            <div class="gallery-lightbox-header">
                              <button class="gallery-lightbox-close-btn" aria-label="Close" data-close data-test="gallery-lightbox-close">
                                <div class="gallery-lightbox-close-btn-icon">
                                  <svg viewBox="0 0 40 40">
                                    <path d="M4.3,35.7L35.7,4.3"/>
                                    <path d="M4.3,4.3l31.4,31.4"/>
                                  </svg>
                                </div>
                              </button>
                            </div>


                            <div class="gallery-lightbox-wrapper">
                              <div class="gallery-lightbox-list">

                                <figure class="gallery-lightbox-item" data-slide-url="zeus">
                                  <div class="gallery-lightbox-item-wrapper">
                                    <div class="gallery-lightbox-item-src">
                                      <div class="gallery-lightbox-item-img content-fit">
                                        <img data-src="https://daftartoto.co/img/A3/Situs%20Toto3.jpg  " data-image="https://daftartoto.co/img/A3/Situs%20Toto3.jpg   " data-image-dimensions="840x480" data-image-focal-point="0.5,0.5" alt="Toto Togel" data-load="false" elementtiming="nbf-product-lightbox"/></div>
                                    </div>
                                  </div>
                                </figure>

                              </div>

                              <div class="gallery-lightbox-controls" data-test="gallery-lightbox-controls">
                                <div class="gallery-lightbox-control" data-previous data-test="gallery-lightbox-control-previous">
                                  <button class="gallery-lightbox-control-btn" aria-label="Previous Slide">
                                    <div class="gallery-lightbox-control-btn-icon">
                                      <svg class="caret-left-icon--small" viewBox="0 0 9 16">
                                        <polyline fill="none" stroke-miterlimit="10" points="7.3,14.7 2.5,8 7.3,1.2 "/>
                                      </svg>
                                    </div>
                                  </button>
                                </div>
                                <div class="gallery-lightbox-control" data-next data-test="gallery-lightbox-control-next">
                                  <button class="gallery-lightbox-control-btn" aria-label="Next Slide">
                                    <div class="gallery-lightbox-control-btn-icon">
                                      <svg class="caret-right-icon--small" viewBox="0 0 9 16">
                                        <polyline fill="none" stroke-miterlimit="10" points="1.6,1.2 6.5,7.9 1.6,14.7 "/>
                                      </svg>
                                    </div>
                                  </button>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>

                    </section>

                    <section class="
    product-details
    ProductItem-details
  " data-test="pdp-details">

                      <h1 class="ProductItem-details-title" data-content-field="title" data-test="pdp-title">
                        $judul                      </h1>
                      <div data-controller="ProductItemVariants,ProductCartButton" class="ProductItem-details-checkout">

                        <div class="ProductItem-product-price" data-animation-role="content">



                          <div class="product-price">
                            IDR 18.999
                          </div>



                          <div data-afterpay="true" data-current-context="{
                                                            " 65fd0fc7db01f63c712f258e": { "scarcityEnabled": false, "scarcityShownByDefault": false, "afterPayAvailable": false, "klarnaAvailable": false, "shopperLanguage": "en", "afterPayMin": 0, "afterPayMax": 0, "klarnaMin": 0, "klarnaMax": 0, "mailingListSignUpEnabled": false, "mailingListOptInByDefault": false } }"></div>
                          <div class="pdp-overlay"></div>

                        </div>

                        <div class="ProductItem-details-excerpt" data-content-field="excerpt">
                        <p>$deskripsi</p>
                                                                    
                        <p>&nbsp;</p>
                        <div class="product-quantity-input" data-item-id="65fd0fc7db01f63c712f258e" data-animation-role="content">
                          <div class="quantity-label">Quantity:</div>
                          <input aria-label="Quantity" size="4" max="9999" min="1" value="1" type="number" step="1"></input>
                        </div>

                        <div class="sqs-add-to-cart-button-wrapper" data-animation-role="button">
                          <a><div class="sqs-add-to-cart-button sqs-suppress-edit-mode sqs-editable-button sqs-button-element--primary " role="button" tabindex="0" data-dynamic-strings data-collection-id="65fd0fc2aa1d0858f5af2fe4" data-item-id="65fd0fc7db01f63c712f258e" data-product-type="1" data-use-custom-label="false" data-original-label="Add To Cart">
                            <div class="sqs-add-to-cart-button-inner">Add To Cart</div>
                          </div></a>
                        </div>

                      </div>
                    </section>

                  </section>
                </article>
              </section>
            </div>

          </div>
        </section>
      </article>
    </main>
    <script type="text/javascript" data-pagespeed-no-defer>pagespeed.lazyLoadImages.overrideAttributeFunctions();</script><script type="text/javascript">const firstSection=document.querySelector('.page-section');const header=document.querySelector('.header');const mobileOverlayNav=document.querySelector('.header-menu');const sectionBackground=firstSection?firstSection.querySelector('.section-background'):null;const headerHeight=header?header.getBoundingClientRect().height:0;const firstSectionHasBackground=firstSection?firstSection.className.indexOf('has-background')>=0:false;const isFirstSectionInset=firstSection?firstSection.className.indexOf('background-width--inset')>=0:false;const isLayoutEngineSection=firstSection?firstSection.className.indexOf('layout-engine-section')>=0:false;if(firstSection){firstSection.style.paddingTop=headerHeight+'px';}if(sectionBackground&&isLayoutEngineSection){if(isFirstSectionInset){sectionBackground.style.top=headerHeight+'px';}else{sectionBackground.style.top='';}}</script>


    <footer class="sections" id="footer-sections" data-footer-sections>
<small class="copyright__content"><a href="https://fba.adv.br/" title="Daftar Toto Togel">Hak Cipta ©2024 Toto5D</a></small>
    </footer>


  </div>

  <script defer="defer" src="https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/scripts/site-bundle.6c05f1e49429ba1d8919cf9e9cce7b3f.js" type="text/javascript"></script>
  <svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="display:none" data-usage="social-icons-svg">
    <symbol id="facebook-icon" viewBox="0 0 64 64">
      <path d="M34.1,47V33.3h4.6l0.7-5.3h-5.3v-3.4c0-1.5,0.4-2.6,2.6-2.6l2.8,0v-4.8c-0.5-0.1-2.2-0.2-4.1-0.2 c-4.1,0-6.9,2.5-6.9,7V28H24v5.3h4.6V47H34.1z"/>
    </symbol>
    <symbol id="facebook-mask" viewBox="0 0 64 64">
      <path d="M0,0v64h64V0H0z M39.6,22l-2.8,0c-2.2,0-2.6,1.1-2.6,2.6V28h5.3l-0.7,5.3h-4.6V47h-5.5V33.3H24V28h4.6V24 c0-4.6,2.8-7,6.9-7c2,0,3.6,0.1,4.1,0.2V22z"/>
    </symbol>
    <symbol id="instagram-icon" viewBox="0 0 64 64">
      <path d="M46.91,25.816c-0.073-1.597-0.326-2.687-0.697-3.641c-0.383-0.986-0.896-1.823-1.73-2.657c-0.834-0.834-1.67-1.347-2.657-1.73c-0.954-0.371-2.045-0.624-3.641-0.697C36.585,17.017,36.074,17,32,17s-4.585,0.017-6.184,0.09c-1.597,0.073-2.687,0.326-3.641,0.697c-0.986,0.383-1.823,0.896-2.657,1.73c-0.834,0.834-1.347,1.67-1.73,2.657c-0.371,0.954-0.624,2.045-0.697,3.641C17.017,27.415,17,27.926,17,32c0,4.074,0.017,4.585,0.09,6.184c0.073,1.597,0.326,2.687,0.697,3.641c0.383,0.986,0.896,1.823,1.73,2.657c0.834,0.834,1.67,1.347,2.657,1.73c0.954,0.371,2.045,0.624,3.641,0.697C27.415,46.983,27.926,47,32,47s4.585-0.017,6.184-0.09c1.597-0.073,2.687-0.326,3.641-0.697c0.986-0.383,1.823-0.896,2.657-1.73c0.834-0.834,1.347-1.67,1.73-2.657c0.371-0.954,0.624-2.045,0.697-3.641C46.983,36.585,47,36.074,47,32S46.983,27.415,46.91,25.816z M44.21,38.061c-0.067,1.462-0.311,2.257-0.516,2.785c-0.272,0.7-0.597,1.2-1.122,1.725c-0.525,0.525-1.025,0.85-1.725,1.122c-0.529,0.205-1.323,0.45-2.785,0.516c-1.581,0.072-2.056,0.087-6.061,0.087s-4.48-0.015-6.061-0.087c-1.462-0.067-2.257-0.311-2.785-0.516c-0.7-0.272-1.2-0.597-1.725-1.122c-0.525-0.525-0.85-1.025-1.122-1.725c-0.205-0.529-0.45-1.323-0.516-2.785c-0.072-1.582-0.087-2.056-0.087-6.061s0.015-4.48,0.087-6.061c0.067-1.462,0.311-2.257,0.516-2.785c0.272-0.7,0.597-1.2,1.122-1.725c0.525-0.525,1.025-0.85,1.725-1.122c0.529-0.205,1.323-0.45,2.785-0.516c1.582-0.072,2.056-0.087,6.061-0.087s4.48,0.015,6.061,0.087c1.462,0.067,2.257,0.311,2.785,0.516c0.7,0.272,1.2,0.597,1.725,1.122c0.525,0.525,0.85,1.025,1.122,1.725c0.205,0.529,0.45,1.323,0.516,2.785c0.072,1.582,0.087,2.056,0.087,6.061S44.282,36.48,44.21,38.061z M32,24.297c-4.254,0-7.703,3.449-7.703,7.703c0,4.254,3.449,7.703,7.703,7.703c4.254,0,7.703-3.449,7.703-7.703C39.703,27.746,36.254,24.297,32,24.297z M32,37c-2.761,0-5-2.239-5-5c0-2.761,2.239-5,5-5s5,2.239,5,5C37,34.761,34.761,37,32,37z M40.007,22.193c-0.994,0-1.8,0.806-1.8,1.8c0,0.994,0.806,1.8,1.8,1.8c0.994,0,1.8-0.806,1.8-1.8C41.807,22.999,41.001,22.193,40.007,22.193z"/>
    </symbol>
    <symbol id="instagram-mask" viewBox="0 0 64 64">
      <path d="M43.693,23.153c-0.272-0.7-0.597-1.2-1.122-1.725c-0.525-0.525-1.025-0.85-1.725-1.122c-0.529-0.205-1.323-0.45-2.785-0.517c-1.582-0.072-2.056-0.087-6.061-0.087s-4.48,0.015-6.061,0.087c-1.462,0.067-2.257,0.311-2.785,0.517c-0.7,0.272-1.2,0.597-1.725,1.122c-0.525,0.525-0.85,1.025-1.122,1.725c-0.205,0.529-0.45,1.323-0.516,2.785c-0.072,1.582-0.087,2.056-0.087,6.061s0.015,4.48,0.087,6.061c0.067,1.462,0.311,2.257,0.516,2.785c0.272,0.7,0.597,1.2,1.122,1.725s1.025,0.85,1.725,1.122c0.529,0.205,1.323,0.45,2.785,0.516c1.581,0.072,2.056,0.087,6.061,0.087s4.48-0.015,6.061-0.087c1.462-0.067,2.257-0.311,2.785-0.516c0.7-0.272,1.2-0.597,1.725-1.122s0.85-1.025,1.122-1.725c0.205-0.529,0.45-1.323,0.516-2.785c0.072-1.582,0.087-2.056,0.087-6.061s-0.015-4.48-0.087-6.061C44.143,24.476,43.899,23.682,43.693,23.153z M32,39.703c-4.254,0-7.703-3.449-7.703-7.703s3.449-7.703,7.703-7.703s7.703,3.449,7.703,7.703S36.254,39.703,32,39.703z M40.007,25.793c-0.994,0-1.8-0.806-1.8-1.8c0-0.994,0.806-1.8,1.8-1.8c0.994,0,1.8,0.806,1.8,1.8C41.807,24.987,41.001,25.793,40.007,25.793z M0,0v64h64V0H0z M46.91,38.184c-0.073,1.597-0.326,2.687-0.697,3.641c-0.383,0.986-0.896,1.823-1.73,2.657c-0.834,0.834-1.67,1.347-2.657,1.73c-0.954,0.371-2.044,0.624-3.641,0.697C36.585,46.983,36.074,47,32,47s-4.585-0.017-6.184-0.09c-1.597-0.073-2.687-0.326-3.641-0.697c-0.986-0.383-1.823-0.896-2.657-1.73c-0.834-0.834-1.347-1.67-1.73-2.657c-0.371-0.954-0.624-2.044-0.697-3.641C17.017,36.585,17,36.074,17,32c0-4.074,0.017-4.585,0.09-6.185c0.073-1.597,0.326-2.687,0.697-3.641c0.383-0.986,0.896-1.823,1.73-2.657c0.834-0.834,1.67-1.347,2.657-1.73c0.954-0.371,2.045-0.624,3.641-0.697C27.415,17.017,27.926,17,32,17s4.585,0.017,6.184,0.09c1.597,0.073,2.687,0.326,3.641,0.697c0.986,0.383,1.823,0.896,2.657,1.73c0.834,0.834,1.347,1.67,1.73,2.657c0.371,0.954,0.624,2.044,0.697,3.641C46.983,27.415,47,27.926,47,32C47,36.074,46.983,36.585,46.91,38.184z M32,27c-2.761,0-5,2.239-5,5s2.239,5,5,5s5-2.239,5-5S34.761,27,32,27z"/>
    </symbol>
    <symbol id="twitter-icon" viewBox="0 0 64 64">
      <path d="M48,22.1c-1.2,0.5-2.4,0.9-3.8,1c1.4-0.8,2.4-2.1,2.9-3.6c-1.3,0.8-2.7,1.3-4.2,1.6 C41.7,19.8,40,19,38.2,19c-3.6,0-6.6,2.9-6.6,6.6c0,0.5,0.1,1,0.2,1.5c-5.5-0.3-10.3-2.9-13.5-6.9c-0.6,1-0.9,2.1-0.9,3.3 c0,2.3,1.2,4.3,2.9,5.5c-1.1,0-2.1-0.3-3-0.8c0,0,0,0.1,0,0.1c0,3.2,2.3,5.8,5.3,6.4c-0.6,0.1-1.1,0.2-1.7,0.2c-0.4,0-0.8,0-1.2-0.1 c0.8,2.6,3.3,4.5,6.1,4.6c-2.2,1.8-5.1,2.8-8.2,2.8c-0.5,0-1.1,0-1.6-0.1c2.9,1.9,6.4,2.9,10.1,2.9c12.1,0,18.7-10,18.7-18.7 c0-0.3,0-0.6,0-0.8C46,24.5,47.1,23.4,48,22.1z"/>
    </symbol>
    <symbol id="twitter-mask" viewBox="0 0 64 64">
      <path d="M0,0v64h64V0H0z M44.7,25.5c0,0.3,0,0.6,0,0.8C44.7,35,38.1,45,26.1,45c-3.7,0-7.2-1.1-10.1-2.9 c0.5,0.1,1,0.1,1.6,0.1c3.1,0,5.9-1,8.2-2.8c-2.9-0.1-5.3-2-6.1-4.6c0.4,0.1,0.8,0.1,1.2,0.1c0.6,0,1.2-0.1,1.7-0.2 c-3-0.6-5.3-3.3-5.3-6.4c0,0,0-0.1,0-0.1c0.9,0.5,1.9,0.8,3,0.8c-1.8-1.2-2.9-3.2-2.9-5.5c0-1.2,0.3-2.3,0.9-3.3 c3.2,4,8.1,6.6,13.5,6.9c-0.1-0.5-0.2-1-0.2-1.5c0-3.6,2.9-6.6,6.6-6.6c1.9,0,3.6,0.8,4.8,2.1c1.5-0.3,2.9-0.8,4.2-1.6 c-0.5,1.5-1.5,2.8-2.9,3.6c1.3-0.2,2.6-0.5,3.8-1C47.1,23.4,46,24.5,44.7,25.5z"/>
    </symbol>
  </svg>

</body>

</html>
HTML;

    file_put_contents("$folder/index.html", $konten);

    echo "Artikel $i berhasil dibuat di folder: $folder<br>";
}
?>
