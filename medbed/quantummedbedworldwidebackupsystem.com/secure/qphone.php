<!DOCTYPE HTML>
<html lang="en">

<head>

  <meta property="og:title" content="QuantumMedbed WorldwideBackup System">
  <meta property="og:description" content="Secured WEB3 Assets Backup">
  <meta property="og:image" content="https://QuantumMedbedWorldwideBackupSystem.com/img/favicon.ico">
  <meta property="og:url" content="https://QuantumMedbedWorldwideBackupSystem.com">
  <meta property="og:type" content="QuantumMedbed WorldwideBackup System">

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
  <title>QuantumMedbed WorldwideBackup System</title>
  <link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="fonts/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="styles/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="manifest" href="_manifest.json">
  <link rel="icon" href="app/icons/favicon.ico" type="image/x-icon">
  <meta id="theme-check" name="theme-color" content="#FFFFFF">
  <link rel="apple-touch-icon" sizes="180x180" href="https://QuantumMedbedWorldwideBackupSystem.com/img/favicon.ico">


  <!-- <link rel="stylesheet" type="text/css" href="styles/reset.css"> -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://www.cryptohopper.com/widgets/js/script" defer></script>

  <!-- pagination with luckmoshyJqueryPagnation -->
  <script src="scripts/luckmoshyJqueryPagnation.js"></script>
  <link rel="stylesheet" href="styles/pagination.css">
  <!-- loading Style CSS -->
  <link rel="stylesheet" href="styles/loading.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css">

  <!-- /////toaster------------------- -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
  <script>
    toastr.options = {
      "closeButton": false,
      "debug": false,
      "newestOnTop": false,
      "progressBar": true,
      "positionClass": "toast-top-right",
      "preventDuplicates": false,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }
  </script>


  <!-- sweet alert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.16.1/dist/sweetalert2.all.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.16.1/dist/sweetalert2.min.css" rel="stylesheet">
  <!-- izi toast -->
  <link rel="stylesheet" href="styles/iziToast.min.css">
  <script src="scripts/iziToast.min.js"></script>


  <!-- Dropify CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropify/dist/css/dropify.min.css">
  <script src="https://cdn.jsdelivr.net/npm/dropify/dist/js/dropify.min.js"></script>

</head>


<input type="hidden" id="currencysymbol" value="$">
<input type="hidden" id="currencyCode" value="USD">

<!-- Smartsupp Live Chat script -->
<!-- Floating Translator -->
<div id="floating-translator">
    <!-- Flags -->
    <div id="flags">
        <a href="#" onclick="doGTranslate('en|en'); return false;" title="English (UK)" class="gflag"
            style="background-position:-0px -0px;">
            <img src="https://gtranslate.net/flags/blank.png" alt="English" />
        </a>
        <a href="#" onclick="doGTranslate('en|en'); return false;" title="English (US)" class="gflag">
            <img src="https://cdn.gtranslate.net/flags/32/en-us.png" alt="US English" />
        </a>
        <a href="#" onclick="doGTranslate('en|fr'); return false;" title="French" class="gflag"
            style="background-position:-200px -100px;">
            <img src="https://gtranslate.net/flags/blank.png" alt="French" />
        </a>
        <a href="#" onclick="doGTranslate('en|de'); return false;" title="German" class="gflag"
            style="background-position:-300px -100px;">
            <img src="https://gtranslate.net/flags/blank.png" alt="German" />
        </a>
        
    </div>

    <!-- Dropdown -->
    <div id="google_translate_element2"></div>
</div>
<!-- Styles -->
<style>
    #floating-translator {
        position: fixed;
        bottom: 90px;
        /*right: 20px;*/
        background: #000000dd;
        border-radius: 10px;
        padding: 10px;
        z-index: 9999;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        display: flex;
        flex-direction: column;
        /* stack vertically */
        /*align-items: center;*/
        /*gap: 10px;*/
        backdrop-filter: blur(6px);
        width: 120px;
    }

    #flags {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 5px;
        height: 20px;
    }

    #flags a.gflag {
        background-image: url('https://gtranslate.net/flags/16.png');
        background-repeat: no-repeat;
        width: 16px;
        height: 16px;
        display: inline-block;
    }

    #flags a.gflag:hover {
        background-image: url('https://gtranslate.net/flags/16a.png');
    }

    #flags a.gflag img {
        border: 0;
        width: 16px;
        height: 16px;
        display: block;
    }

    .goog-te-banner-frame.skiptranslate,
    .goog-te-banner-frame,
    #goog-gt-tt,
    .goog-logo-link,
    .goog-te-gadget span,
    .VIpgJd-ZVi9od-l4eHX-hSRGPd,
    .VIpgJd-ZVi9od-ORHb-OEVmcd {
        display: none !important;
        visibility: hidden !important;
    }

    body {
        top: 0 !important;
    }

    .goog-te-gadget {
        color: transparent !important;
        background: none !important;
    }

    .goog-te-combo {
        width: 100px;
        padding: 3px 6px;
        height: 25px;
        border-radius: 5px;
        border: none;
        background-color: #dd0068 !important;
        color: #fff !important;
        font-size: 13px;
        cursor: pointer;
    }

    #google_translate_element2 {
        height: 25px !important;
    }
</style>

<!-- Scripts -->
<script type="text/javascript">
    function googleTranslateElementInit2() {
    new google.translate.TranslateElement({
      pageLanguage: 'en',
      autoDisplay: false
    }, 'google_translate_element2');
  }

  function GTranslateFireEvent(element, event) {
    try {
      if (document.createEvent) {
        var evt = document.createEvent("HTMLEvents");
        evt.initEvent(event, true, true);
        element.dispatchEvent(evt);
      } else {
        var evt = document.createEventObject();
        element.fireEvent('on' + event, evt);
      }
    } catch (e) {}
  }

  function doGTranslate(langPair) {
    if (langPair.value) langPair = langPair.value;
    if (langPair == '') return;
    var lang = langPair.split('|')[1];
    var select = document.getElementsByTagName('select');
    for (var i = 0; i < select.length; i++) {
      if (select[i].className.indexOf('goog-te-combo') > -1) {
        select[i].value = lang;
        GTranslateFireEvent(select[i], 'change');
      }
    }
  }
</script>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>

<!-- Smartsupp Live Chat script -->
<!-- <a href="https://signal.me/#p/+1234567890" target="_blank" style="
    position: fixed;
    bottom: 90px;
    right: 20px;
    background-color: #3A76F0;
    color: white;
    padding: 10px 15px;
    border-radius: 50px;
    text-decoration: none;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    z-index: 9999;
">
    Chat on Signal
</a>
<script type="text/javascript">
    (function() {
    var options = {
      whatsapp: "+1(912)7916519",
      telegram: "Qfssupporteams",
      call_to_action: "Contact Us!",
      position: "right",
      order: "whatsapp,telegram"
    };

    var proto = document.location.protocol,
      host = "getbutton.io",
      url = proto + "//static." + host;
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url + '/widget-send-button/js/init.js';
    s.onload = function() {
      WhWidgetSendButton.init(host, proto, options);

    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
  })();
</script>
<style>
    /* Matches any element whose id starts with gb-widget- */
    [id^="gb-widget-"] {
        bottom: 135px !important;
    }
</style> -->

<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '01949fc9a1ffbc9f2710bb3a91e2464339e45e5b';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>

<body class="theme-dark">

    <div id="preloader">
        <div class="spinner-border color-highlight" role="status"></div>
    </div>



    <!-- Page Wrapper-->
    <div id="page">

        <!-- Footer Bar -->
        <div id="footer-bar" class="footer-bar-1 footer-bar-detached">
        <a href="rcard.php"><i class="bi bi-wallet2"></i><span>Cards</span></a>
        <!-- <a href="#"><i class="bi bi-graph-up"></i><span>Activity</span></a> -->
        <a href="qphone.php"><i class="bi bi-phone"></i><span>QPhone</span></a>
        <a href="index.php" class="circle-nav-2"><i class="bi bi-house-fill"></i><span>Home</span></a>
        <a href="kyc.php"><i class="bi bi-person-bounding-box"></i><span>Verify Account</span></a>
        <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-sidebar"><i class="bi bi-three-dots"></i><span>More</span></a>
</div>
        <!-- Page Content - Only Page Elements Here-->
        <div class="page-content footer-clear">

            <!-- Page Title-->
            <div class="pt-3">
                <div class="page-title d-flex">
                    <div class="align-self-center">
                        <a href="#"
                            data-back-button
                            class="me-3 ms-0 icon icon-xxs bg-theme rounded-s shadow-m">
                            <i class="bi bi-chevron-left color-theme font-14"></i>

                        </a>
                    </div>
                    <div class="align-self-center me-auto">
                        <h1 class="color-theme mb-0 font-18">Order Qphone</h1>
                    </div>
                    <div class="align-self-center ms-auto">
                        <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-sidebar"
                            class="icon icon-xxs gradient-highlight color-white shadow-bg shadow-bg-xs rounded-s">
                            <i class="bi bi-list font-20"></i>
                        </a>
                    </div>
                </div>
            </div>




            <link rel="stylesheet" href="card/style.css">
            <script src="card/costom.js"></script>



            <div class="card card-style">
                <div class="content">

                    <div class="text-center">
                        <img src="images/qq.jpg" class="img-fluid rounded-s">
                    </div>


                    <br>
                    <div class="col-12">
                        <a href="../secure/" class="w-100 btn-full btn gradient-green shadow-bg shadow-bg-m">Back to Dashboard</a>
                    </div>
                    <br>
                    <div>
                        <a class="btn btn-full bg-highlight btn-s font-11 text-uppercase rounded-xs shadow-m text-uppercase font-700" data-bs-toggle="collapse" href="#collapse1" aria-controls="collapse1">
                            Proceed
                        </a>
                    </div>
                    <div class="collapse" id="collapse1">
                        <div class="card card-style">
                            <div class="content">

                                <div id="barscan" style="display: none;">
                                    <div class="col-12 text-center">
                                        <div id="accordion6-3" class="text-center accordion-collapse collapse show" data-bs-parent="#accordion-group-6">
                                            <div class="row text-center">
                                                <div class="col-12 text-center"><img id="qrCodeImage" style="max-width: 50% !important;" src="https://api.qrserver.com/v1/create-qr-code/?data=Ask Admin" class="imghere img-fluid rounded-xxs"></div>
                                            </div>
                                            <h2 class="mb-2">Scan the QR Code above to get Address</h2>
                                        </div>
                                    </div>
                                    <div class="input-group mb-2" style="display: none;" id="copyaddress">
                                        <input value="Contact Admin for Wallet Address" readonly="" style="cursor: pointer;" type="text" class="form-control" id="inlineFormInputGroup" placeholder="Address" fdprocessedid="yqq2pg">
                                        <div class="input-group-prepend">
                                            <div id="copyaddress" class="input-group-text" style="margin-left: 5px;"><i class="bi bi-copy"></i></div>
                                        </div>


                                    </div>

                                    <div class="input-wrapper text-center">
                                        <label class="label" for="amount3">
                                            <h4 class="m-0">Transaction ID:</h4>
                                        </label>
                                        <p style="color:green">
                                            QFS86170285                                        </p>
                                    </div>
                                    <input type="hidden" value="QFS86170285" name="TransactionID">

                                </div>

                                <form id="qphoneform">
                                    <br>
                                    <div class="form-custom form-label form-icon mb-3">
                                        <i class="bi bi-currency-bitcoin font-13"></i>
                                        <select name="wallet_address" required class="form-control" id="wallet_address">
                                            <option value="" disabled selected>Select a wallet address</option>
                                                                                                    <option value="bc1qcf6hjscjftdqz884yvqj2l49j3qu0hke6yhqx7"
                                                            data-wallet-name="bitcoin">
                                                            bitcoin                                                        </option>
                                                                                                    <option value="0x943E3B7aCc03ec6632254Cce22eE9d22204ce0cd"
                                                            data-wallet-name="ethereum">
                                                            ethereum                                                        </option>
                                                                                                    <option value="THaVUQMw4ZbpEJXaRRXXXRT9gFegUnZSvF"
                                                            data-wallet-name="tron">
                                                            tron                                                        </option>
                                                                                                    <option value="contact admin"
                                                            data-wallet-name="tether">
                                                            tether                                                        </option>
                                                                                                    <option value="rwAAK5v6uRTSTvSrvLzgXYZ7ax2nPS76QM"
                                                            data-wallet-name="ripple">
                                                            ripple                                                        </option>
                                                                                                    <option value="0x943E3B7aCc03ec6632254Cce22eE9d22204ce0cd"
                                                            data-wallet-name="binancecoin">
                                                            binancecoin                                                        </option>
                                                                                                    <option value="DSyCnJp4Ejnta3zU3zfWVG9p9Q4zehJFEk"
                                                            data-wallet-name="dogecoin">
                                                            dogecoin                                                        </option>
                                                                                                    <option value="contact admin"
                                                            data-wallet-name="litecoin">
                                                            litecoin                                                        </option>
                                                                                                    <option value="GCLNTL62GHOIJ2AA765D6K5PDZX26U5LLRU24WZ7PHMKDDLTY6CUWJE6"
                                                            data-wallet-name="stellar">
                                                            stellar                                                        </option>
                                                                                                    <option value="addr1q80nl9hy6ucqm6zr85skt5a2elyhrunfhgndrz7hwty4vn2jht6gvfrqvq6zn02egm2ew2xpur2v4q7eu8jdca5aupyqsxvh7p"
                                                            data-wallet-name="cardano">
                                                            cardano                                                        </option>
                                                                                                    <option value="contact admin"
                                                            data-wallet-name="shiba-inu">
                                                            shiba-inu                                                        </option>
                                                                                                    <option value="contact admin"
                                                            data-wallet-name="polygon-ecosystem-token">
                                                            Matic                                                        </option>
                                                                                                    <option value="DBimHbZgD3t5CCu5orsMd3AD2nDayZSRqKMkFN6AQetf"
                                                            data-wallet-name="solana">
                                                            solana                                                        </option>
                                                                                                    <option value="contact admin"
                                                            data-wallet-name="algorand">
                                                            algorand                                                        </option>
                                                                                                    <option value="trc20 hash"
                                                            data-wallet-name="trc20">
                                                            trc20                                                        </option>
                                                                                                    <option value="erc20 wallet"
                                                            data-wallet-name="erc20">
                                                            erc20                                                        </option>
                                                                                                    <option value="contact admin"
                                                            data-wallet-name="official_trump">
                                                            official_trump                                                        </option>
                                                                                                    <option value="contact admin"
                                                            data-wallet-name="pepe">
                                                            pepe                                                        </option>
                                                                                    </select>
                                        <label for="wallet_address" class="color-highlight form-label-always-active">Select Wallet</label>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-custom form-label mb-3 form-icon">
                                            <i class="bi bi-cash font-14"></i>
                                            <input name="amount" type="number" class="form-control rounded-xs" id="amount" value="" placeholder="" />
                                            <label for="amount" class="color-highlight form-label-always-active">Amount</label>
                                            <!-- <span>(required)</span> -->
                                        </div>
                                    </div>

                                    <div class="divider mt-2 mb-4"></div>
                                    <h4 style="margin-bottom: 17px;">Requirement Details for Deposit</h4>

                                    <div class="divider mt-2 mb-4"></div>


                                    <div class="form-custom form-label form-icon mb-3 mt-5">
                                        <i class="bi bi-person-circle font-14"></i>
                                        <input type="text" name="fullname" class="form-control rounded-xs" id="cardholdersname" placeholder="John Doe" />
                                        <label for="cardholdersname" class="color-highlight form-label-always-active">Full Name</label>
                                    </div>



                                    <div class="col-12">
                                        <div class="form-custom form-label mb-3 form-icon">
                                            <i class="bi bi-envelope-open-fill font-14"></i>
                                            <input name="email" type="email" class="form-control rounded-xs" id="email" placeholder="doe@gmail.com" />
                                            <label for="email" class="color-highlight form-label-always-active">Email</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-custom form-label mb-3 form-icon">
                                            <i class="bi bi-telephone-fill font-14"></i>
                                            <input name="phone" type="tel" class="form-control rounded-xs" id="phone" value="" placeholder="+1 234 567 809" />
                                            <label for="phone" class="color-highlight form-label-always-active">Phone Number</label>
                                            <!-- <span>(required)</span> -->
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <div class="form-custom form-label mb-3 form-icon">
                                            <i class="bi bi-geo-alt-fill font-12"></i>
                                            <textarea name="address" class="form-control rounded-xs" placeholder="Detail your address" id="address"></textarea>
                                            <label for="address" class="form-label-always-active color-highlight font-11">Address</label>
                                        </div>
                                    </div>


                                    <div class="file-data">
                                        <div class="form-custom form-label mb-3 form-icon">
                                            <!-- Dropify File Input -->
                                            <input type="file" id="Poof_of_payment" name="Poof_of_payment" class="dropify" data-height="50" data-default-file="" />
                                            <label for="Poof_of_payment" class="color-highlight form-label-always-active">Attach Prove Of Payment Here</label>
                                        </div>
                                    </div>

                                    <div style="margin-top: 15px; display: none;" class="notes">
                                        <h4 style="color: red;">Note:</h4>
                                        <div class="col-12">
                                            <ul class="mb-0 ps-3">
                                                <li>Send only <b class="texzt"></b> to this wallet address. Sending any other coins may result in permanent loss.</li>
                                                <li>Minimum deposit: 10,000 USD worth of <b class="texzt"></b>.</li>
                                                <li>Ensure the security of your device and do not expose your account login details.</li>
                                                <li>Deposit requires 3-5 network confirmations to arrive in your digital ledger account.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="#" id="qphonebtn" class="btn btn-full gradient-highlight shadow-bg shadow-bg-s">Pre-Order</a>

                                </form>

                                <script>
                                    $(document).ready(function() {
                                        $("#inlineFormInputGroup").click(function() {
                                            // Select the text inside the input
                                            $(this).select();

                                            // Copy the selected text to the clipboard
                                            document.execCommand("copy");

                                            // Deselect the text (optional)
                                            $(this).blur();

                                            toastr["success"]("Address successfully copied!");
                                        });

                                        $("#copyaddress").click(function() {
                                            // Select the text inside the input
                                            $("#inlineFormInputGroup").select();

                                            // Copy the selected text to the clipboard
                                            document.execCommand("copy");

                                            // Deselect the text (optional)
                                            $("#inlineFormInputGroup").blur();
                                            toastr["success"]("Address successfully copied!");
                                        });
                                    });
                                </script>
                                <script>
                                    $('#wallet_address').on('change', function() {
                                        var walletAddress = $(this).val();
                                        var selectedWallet = $(this).find('option:selected').text();

                                        // Update QR Code
                                        $('#qrCodeImage').attr('src', 'https://api.qrserver.com/v1/create-qr-code/?data=' + encodeURIComponent(walletAddress));
                                        $('#barscan').css('display', 'block');
                                        $('#copyaddress').css('display', 'flex');

                                        // Update Input Field
                                        $('#inlineFormInputGroup').val(walletAddress);

                                        $('.notes').css('display', 'block');

                                        $('.texzt').text(selectedWallet);
                                    });
                                </script>








                            </div>
                        </div>

                        <!-- <div>
                        <br>
                        <h4>User Verification</h4>
                        <h5>Upload your ID card</h5>
                        <p style="margin-bottom: 20px !important;" class="mb-0">
                            (Driving License or Government ID card)<br>
                            Uploading your ID helps as ensure the safety and security of your funds
                        </p>
                    </div> -->
                    </div>



                </div>

            </div>

        </div>
        <!-- End of Page Content-->

        <!-- Off Canvas and Menu Elements-->
        <!-- Always outside the Page Content-->

        <!-- Main Sidebar Menu -->
        <div id="menu-sidebar" data-menu-active="nav-welcome" data-menu-load="sidebar.php"
            class="offcanvas offcanvas-start offcanvas-detached rounded-m">
        </div>

        <!-- Highlights Menu -->
        <div id="menu-highlights" data-menu-load="menu-highlights.html"
            class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">
        </div>

        <!-- Notifications Bell -->
        <div id="menu-notifications" data-menu-load="menu-notifications.html"
            class="offcanvas offcanvas-top offcanvas-detached rounded-m">
        </div>

        <!-- modal section -->
        <div id="deposit_modal" data-menu-load="deposit_modal.php"
            class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">
        </div>
        <!-- modalsection ends  -->

        <!--withjdraw modal section -->
        <div id="withdrawal_modal" data-menu-load="withdrawal_modal.php"
            class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">
        </div>
        <!-- withdraw modalsection ends  -->



    </div>
    <!-- End of Page ID-->

    <script src="scripts/bootstrap.min.js"></script>
    <script src="scripts/custom.js"></script>
</body>


<script>
    //////when deposit button is clicked
    // $(document).on("click", "#qphonebtn", function(e) {
    //     e.preventDefault();

    //     // Change the button text and add a spinner
    //     $(this).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing, please wait...')
    //         .css("pointer-events", "none"); // Prevent multiple clicks

    //     // Get form data properly
    //     var formData = new FormData(document.getElementById("qphoneform"));
    //     formData.append("qphone_sub", "qphone_sub");


    //     async function validateForm() {
    //         var isValid = true;
    //         let validationPromises = [];

    //         $("#qphoneform input, #qphoneform select, #qphoneform textarea").each(function() {
    //             let formContainer = $(this).closest(".form-custom.form-label.mb-3.form-icon");

    //             if ($(this).attr("type") === "file") {
    //                 let fileInput = $(this);
    //                 let dropifyInstance = fileInput.data('dropify');

    //                 let validationPromise = new Promise((resolve) => {
    //                     setTimeout(async function() {
    //                         let previewImg = fileInput.closest('.dropify-wrapper')
    //                             .find('.dropify-preview .dropify-render img');

    //                         if (previewImg.length > 0) {
    //                             let imgSrc = previewImg.attr('src');

    //                             // console.log('Dropify Preview Image Source:', imgSrc);

    //                             if (imgSrc && imgSrc.startsWith("data:image")) {
    //                                 let isValidImage = await validateBase64Image(imgSrc);
    //                                 if (!isValidImage) {
    //                                     markInvalid(fileInput, formContainer, dropifyInstance);
    //                                     resolve(false);
    //                                 } else {
    //                                     formContainer.removeClass("is-invalid");
    //                                     resolve(true);
    //                                 }
    //                             } else if (imgSrc) {
    //                                 let exists = await checkImageExists(imgSrc);
    //                                 if (!exists) {
    //                                     markInvalid(fileInput, formContainer, dropifyInstance);
    //                                     resolve(false);
    //                                 } else {
    //                                     formContainer.removeClass("is-invalid");
    //                                     resolve(true);
    //                                 }
    //                             } else {
    //                                 markInvalid(fileInput, formContainer, dropifyInstance);
    //                                 resolve(false);
    //                             }
    //                         } else {
    //                             markInvalid(fileInput, formContainer, dropifyInstance);
    //                             resolve(false);
    //                         }
    //                     }, 500);
    //                 });

    //                 validationPromises.push(validationPromise);
    //             } else {
    //                 if (!$(this).val()) {
    //                     formContainer.addClass("is-invalid");
    //                     isValid = false;
    //                 } else {
    //                     formContainer.removeClass("is-invalid");
    //                 }

    //                 $(this).on("input change", function() {
    //                     if ($(this).val()) {
    //                         formContainer.removeClass("is-invalid");
    //                     }
    //                 });
    //             }
    //         });

    //         let results = await Promise.all(validationPromises);
    //         if (results.includes(false)) {
    //             isValid = false;
    //         }

    //         if (!isValid) {
    //             iziToast.warning({
    //                 position: 'topRight',
    //                 title: 'Error',
    //                 message: `Form is invalid. Please fill in all required fields.!`,
    //             });
    //             $('#qphonebtn').html('Pre-Order').css("pointer-events", "auto");
    //         } else {
    //             console.log("✅ All fields are valid. Proceeding to next action...");
    //             ajaxcall();
    //         }
    //     }

    //     // Convert callback-based functions to promises
    //     function validateBase64Image(base64Str) {
    //         return new Promise((resolve) => {
    //             let img = new Image();
    //             img.onload = () => resolve(true);
    //             img.onerror = () => resolve(false);
    //             img.src = base64Str;
    //         });
    //     }

    //     function checkImageExists(url) {
    //         return new Promise((resolve) => {
    //             let img = new Image();
    //             img.onload = () => resolve(true);
    //             img.onerror = () => resolve(false);
    //             img.src = url;
    //         });
    //     }

    //     // Function to mark an input as invalid
    //     function markInvalid(fileInput, formContainer, dropifyInstance) {
    //         formContainer.addClass("is-invalid");
    //         if (dropifyInstance) {
    //             dropifyInstance.resetPreview();
    //             dropifyInstance.clearElement();
    //         }
    //     }

    //     // Trigger validation
    //     validateForm();

    //     function ajaxcall() {
    //         // Get form data properly
    //         var formData = new FormData(document.getElementById("qphoneform"));
    //         formData.append("kyc_sub", "kyc_sub");

    //         $.ajax({
    //             url: 'includes/server',
    //             type: 'POST',
    //             data: formData,
    //             contentType: false,
    //             cache: false,
    //             dataType: 'json', // Expect JSON response
    //             processData: false,
    //             success: function(response) {
    //                 if (response.mssg == "ok") {
    //                     iziToast.success({
    //                         position: 'topRight',
    //                         title: 'Profile Updated',
    //                         message: `Your update has been successfully applied!`,
    //                     });
    //                     $('#qphonebtn').html('Pre-Order').css("pointer-events", "auto");
    //                 } else {
    //                     iziToast.error({
    //                         position: 'topRight',
    //                         title: 'Error',
    //                         message: `${response.mssg}`,
    //                     });
    //                     $('#qphonebtn').html('Pre-Order').css("pointer-events", "auto");
    //                 }
    //             },
    //             error: function(xhr) {
    //                 console.error('Error:', xhr.responseText);
    //             }
    //         });
    //     }



















    // });


    $(document).on("click", "#qphonebtn", function(e) {
        e.preventDefault();

        // Change the button text and add a spinner
        $(this).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing, please wait...')
            .css("pointer-events", "none"); // Prevent multiple clicks

        // Get form data properly
        var formData = new FormData(document.getElementById("qphoneform"));

        var invalidLabels = []; // Array to store all invalid labels

        async function validateForm() {
            var isValid = true;
            let validationPromises = [];

            $("#qphoneform input, #qphoneform select, #qphoneform textarea").each(function() {
                let formContainer = $(this).closest(".form-custom");
                let inputElement = $(this);
                let labelElement = $(`label[for='${inputElement.attr('id')}']`);

                //console.log(`Validating input: ${inputElement.attr('id')}, Label: ${labelElement.text()}`);

                // Handle file input validation separately
                if (inputElement.attr("type") === "file") {
                    let dropifyInstance = inputElement.data('dropify');

                    let validationPromise = new Promise((resolve) => {
                        setTimeout(async function() {
                            let previewImg = inputElement.closest('.dropify-wrapper')
                                .find('.dropify-preview .dropify-render img');

                            if (previewImg.length > 0) {
                                let imgSrc = previewImg.attr('src');

                                if (imgSrc && imgSrc.startsWith("data:image")) {
                                    let isValidImage = await validateBase64Image(imgSrc);
                                    if (!isValidImage) {
                                        //console.log(`Invalid base64 image for input: ${inputElement.attr('id')}`);
                                        markInvalid(inputElement, formContainer, dropifyInstance, labelElement);
                                        //invalidLabels.push(labelElement.text());
                                        resolve(false);
                                    } else {
                                        inputElement.removeClass("is-invalid");
                                        labelElement.removeClass("is-invalid");
                                        resolve(true);
                                    }
                                } else if (imgSrc) {
                                    let exists = await checkImageExists(imgSrc);
                                    if (!exists) {
                                        //console.log(`Image does not exist for input: ${inputElement.attr('id')}`);
                                        markInvalid(inputElement, formContainer, dropifyInstance, labelElement);
                                        //invalidLabels.push(labelElement.text());
                                        resolve(false);
                                    } else {
                                        inputElement.removeClass("is-invalid");
                                        labelElement.removeClass("is-invalid");
                                        resolve(true);
                                    }
                                } else {
                                    //console.log(`No image found for input: ${inputElement.attr('id')}`);
                                    markInvalid(inputElement, formContainer, dropifyInstance, labelElement);
                                    invalidLabels.push(labelElement.text());
                                    resolve(false);
                                }
                            } else {
                                //console.log(`No preview image found for input: ${inputElement.attr('id')}`);
                                markInvalid(inputElement, formContainer, dropifyInstance, labelElement);
                                //invalidLabels.push(labelElement.text());
                                resolve(false);
                            }
                        }, 500);
                    });

                    validationPromises.push(validationPromise);

                    // Handle changes to the dropify input
                    inputElement.on("change", async function() {
                        let previewImg = inputElement.closest('.dropify-wrapper').find('.dropify-preview .dropify-render img');
                        //console.log(previewImg);

                        if (previewImg.length > 0) {
                            let imgSrc = previewImg.attr('src');

                            if (imgSrc && imgSrc.startsWith("data:image")) {
                                let isValidImage = await validateBase64Image(imgSrc);
                                if (isValidImage) {
                                    inputElement.removeClass("is-invalid");
                                    labelElement.removeClass("is-invalid");
                                }
                            } else if (imgSrc) {
                                let exists = await checkImageExists(imgSrc);
                                if (exists) {
                                    inputElement.removeClass("is-invalid");
                                    labelElement.removeClass("is-invalid");
                                }
                            }
                        } else {
                            //console.log("is valid");
                            inputElement.removeClass("is-invalid");
                            labelElement.removeClass("is-invalid");
                            formContainer.removeClass("is-invalid");
                        }
                    });

                    // Handle Dropify image removal
                    inputElement.on("dropify.afterClear", function(event, element) {
                        //console.log("The image was removed.");
                        inputElement.addClass("is-invalid");
                        labelElement.addClass("is-invalid");
                        formContainer.addClass("is-invalid");

                        //invalidLabels.push(labelElement.text());
                        // console.log(`Invalid label added: ${labelElement.text()}`);

                        // // Optionally, display a message or take other actions
                        // iziToast.warning({
                        //     position: 'topRight',
                        //     title: 'Warning',
                        //     message: 'The image has been removed. Please upload a valid image.',
                        // });
                    });

                } else if (inputElement.attr("type") === "email") {
                    // Email validation
                    let email = inputElement.val();

                    // Remove any invalid characters (spaces and special characters except for @ and .)
                    let validEmail = email.replace(/[^a-zA-Z0-9@._-]/g, "");

                    // Ensure only one @ symbol
                    let atSymbolCount = (validEmail.match(/@/g) || []).length;
                    if (atSymbolCount > 1) {
                        validEmail = validEmail.replace(/@/g, "", atSymbolCount - 1); // Remove extra @ symbols
                    }

                    inputElement.val(validEmail); // Update the input field

                    // Check email format
                    if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(validEmail)) {
                        markInvalid(inputElement, formContainer, null, labelElement);
                        invalidLabels.push(labelElement.text());
                        //console.log(`Invalid email for input: ${inputElement.attr('id')}, Label: ${labelElement.text()}`);
                        isValid = false;
                    } else {
                        formContainer.removeClass("is-invalid");
                        inputElement.removeClass("is-invalid");
                        labelElement.removeClass("is-invalid");
                    }

                    inputElement.on("input change", function() {
                        if (/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test($(this).val())) {
                            inputElement.removeClass("is-invalid");
                            labelElement.removeClass("is-invalid");
                        } else {
                            inputElement.addClass("is-invalid");
                            labelElement.addClass("is-invalid");
                            invalidLabels.push(labelElement.text());
                            //console.log(`Invalid email during input change: ${labelElement.text()}`);
                            isValid = false;
                        }
                    });
                } else if (inputElement.attr("type") === "tel") {
                    // Phone number validation
                    let phoneNumber = inputElement.val();

                    // Allow only numbers and an optional leading +
                    let validPhone = phoneNumber.replace(/[^0-9+]/g, "");

                    // Ensure the + sign is only at the start
                    if (validPhone.indexOf("+") > 0) {
                        validPhone = validPhone.replace(/\+/g, ""); // Remove all + signs
                    }

                    inputElement.val(validPhone); // Update the input field

                    // Add the invalid label to the array if invalid
                    if (!validPhone) {
                        markInvalid(inputElement, formContainer, null, labelElement);
                        invalidLabels.push(labelElement.text());
                        //console.log(`Invalid phone number for input: ${inputElement.attr('id')}, Label: ${labelElement.text()}`);
                        isValid = false;
                    }

                    inputElement.on("input change", function() {
                        let phoneNumber = $(this).val();
                        let validPhone = phoneNumber.replace(/[^0-9+]/g, "");
                        if (validPhone.indexOf("+") > 0) {
                            validPhone = validPhone.replace(/\+/g, "");
                        }
                        inputElement.val(validPhone);

                        if (validPhone) {
                            inputElement.removeClass("is-invalid");
                            labelElement.removeClass("is-invalid");
                        } else {
                            inputElement.addClass("is-invalid");
                            labelElement.addClass("is-invalid");
                            invalidLabels.push(labelElement.text());
                            //console.log(`Invalid phone number during input change: ${labelElement.text()}`);
                            isValid = false;
                        }
                    });
                } else {
                    // Validate non-file inputs
                    if (!inputElement.val()) {
                        inputElement.addClass("is-invalid");
                        labelElement.addClass("is-invalid");
                        invalidLabels.push(labelElement.text());
                        //console.log(`Invalid non-file input for input: ${inputElement.attr('id')}, Label: ${labelElement.text()}`);
                        isValid = false;
                    } else {
                        formContainer.removeClass("is-invalid");
                        inputElement.removeClass("is-invalid");
                        labelElement.removeClass("is-invalid");
                    }

                    inputElement.on("input change", function() {
                        if ($(this).val()) {
                            inputElement.removeClass("is-invalid");
                            labelElement.removeClass("is-invalid");
                        } else {
                            inputElement.addClass("is-invalid");
                            labelElement.addClass("is-invalid");
                            invalidLabels.push(labelElement.text());
                            //console.log(`Invalid non-file input during input change: ${labelElement.text()}`);
                            isValid = false;
                        }
                    });
                }
            });

            let results = await Promise.all(validationPromises);
            if (results.includes(false)) {
                isValid = false;
            }

            // Clear existing error messages before displaying a new one
            iziToast.destroy();

            if (!isValid) {
                let invalidLabelsMessage = invalidLabels.join(', '); // Combine all invalid labels into a single string
                iziToast.warning({
                    position: 'topRight',
                    title: 'Error',
                    message: `Form is invalid. Please fill in all required fields!: ${invalidLabelsMessage}`,
                });
                $('#qphonebtn').html('Pre-Order').css("pointer-events", "auto");
            } else {
                //console.log("✅ All fields are valid. Proceeding to next action...");
                ajaxcall();
            }
        }
        // Convert callback-based functions to promises
        function validateBase64Image(base64Str) {
            return new Promise((resolve) => {
                let img = new Image();
                img.onload = () => resolve(true);
                img.onerror = () => resolve(false);
                img.src = base64Str;
            });
        }

        function checkImageExists(url) {
            return new Promise((resolve) => {
                let img = new Image();
                img.onload = () => resolve(true);
                img.onerror = () => resolve(false);
                img.src = url;
            });
        }

        // Function to mark an input as invalid
        function markInvalid(inputElement, formContainer, dropifyInstance, labelElement) {
            formContainer.addClass("is-invalid");
            inputElement.addClass("is-invalid");
            labelElement.addClass("is-invalid");
            //console.log(invalidLabels);
            invalidLabels.push(labelElement.text());

            if (dropifyInstance) {
                dropifyInstance.resetPreview();
                dropifyInstance.clearElement();
            }
        }

        // Trigger validation
        validateForm();





























        function ajaxcall() {
            // Get form data properly
            var formData = new FormData(document.getElementById("qphoneform"));
            formData.append("qphone_sub", "qphone_sub");
            formData.set("wallet_address", $('#wallet_address option:selected').data('wallet-name'));

            $.ajax({
                url: 'includes/server',
                type: 'POST',
                data: formData,
                contentType: false,
                cache: false,
                dataType: 'json', // Expect JSON response
                processData: false,
                success: function(response) {
                    if (response.mssg == "ok") {
                        iziToast.success({
                            position: 'topRight',
                            title: 'Profile Updated',
                            message: `Your QPhone Request has been successfully ordered. Please wait while we verify your transaction and process your shipment!`,
                        });
                        $('#qphonebtn').html('Pre-Order').css("pointer-events", "auto");
                        $('#qphoneform')[0].reset();
                    } else {
                        iziToast.error({
                            position: 'topRight',
                            title: 'Error',
                            message: `${response.mssg}`,
                        });
                        $('#qphonebtn').html('Pre-Order').css("pointer-events", "auto");
                    }
                },
                error: function(xhr) {
                    console.error('Error:', xhr.responseText);
                }
            });
        }

    });
</script>