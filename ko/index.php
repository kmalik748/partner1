<?php   
        define('WP_USE_THEMES', true);
        define('ICL_LANGUAGE_CODE', 'ko');
        require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
//        $sitepress->set_default_language('ko');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, maximum-scale=5.0, initial-scale=1.0, user-scalable=no" />
<title>Registration</title>

    <link rel="icon" type="image/png" sizes="16x16" href="https://bkfx.io/wp-content/themes/bkfx/assets/images/favicon/favicon-16x16.png">
    <link href="../css/responsive.css" type="text/css" rel="stylesheet">

    <link rel='stylesheet' id='font-awesome-css'  href='https://bkfx.io/wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min.css' />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!--    Date Picker-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>


    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js">    </script>

    <script type="text/javascript" src="../vendor/ajax.js"></script>


    <link href="../css/style.css?v=<?php echo rand(); ?>" type="text/css" rel="stylesheet">
    <link href="../vendor/style.css?v=<?php echo rand(); ?>" type="text/css" rel="stylesheet">

</head>

<body>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker3').datetimepicker({
            format: 'DD-MM-YYYY'
        });
    });
    (function()
        {
          if( window.localStorage )
          {
            if( !localStorage.getItem('firstLoad') )
            {
              localStorage['firstLoad'] = true;
              window.location.reload();
            }  
            else
              localStorage.removeItem('firstLoad');
          }
        })();
</script>
<div class="let's-make-code">
    <div class="preempdia">
        <div class="header">
            <div class="container">
                <div class="" style="">
                    <div class="float-left" style="display: inline-block">
                        <a class="logo" href="https://bkfx.io/ko/"><img src="../images/bkfx_logo.svg" class="logo-pic img-fluid" alt=""></a>
                    </div>
                    <div class="float-right" style="display: inline-block; float: right; margin: 26px 108px 0px 0px !important;">
                        <div class="dropdown">
                            <a href="#" class="lan dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i><span>KO</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="../index.php"><img src="https://secure.bkfx.io/images/flags/gb.png">English</a></li>
                                <li><a href="../es"><img src="https://secure.bkfx.io/images/flags/es.png">Espa??ol</a></li>
                                <li><a href="../pt"><img src="https://secure.bkfx.io/images/flags/pt.png">Portugu??s</a></li>
                                <li><a href="../ko"><img src="https://secure.bkfx.io/images/flags/ko.png">?????????</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="btn-group">
<!--                    <button id="myid" type="button" class="btn btn-default dropdown-toggle" data-    toggle="dropdown">-->
<!--                        Action <span class="caret"></span>-->
<!--                    </button>-->
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="form-box">
            <div class="container">

                <?php
                if(isset($_GET["success"]) && $_GET["success"]=='true'){
                    ?>
                    <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>??????!</strong>  ??? ???????????? ???????????? ????????? ??????????????????<br>
                        <a href="https://secure.bkfx.io/login" class="btn btn-success">LOGIN</a>
                    </div>
                    <?php
                }
                if(isset($_GET["success"]) && $_GET["success"]=='false'){
                    ?>
                    <div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>??????!</strong> ?????? ?????? +??? ??????????????? ????????? ?????? ????????? ???????????? ??????????????????.
                    </div>
                    <?php
                }
                ?>



                <div class="form-flex">
                    <h3>?????? ?????? ??????</h3>
                    <div class="tbs">
                        <ul class="nav nav-tabs">
<!--                            <li class="nav-item">-->
<!--                              <a class="nav-link active" data-toggle="tab" href="#home">Individual Client</a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                              <a class="nav-link" data-toggle="tab" href="#menu1">Corporate Client</a>-->
<!--                            </li>-->
                            <li class="nav-item active"><a class="nav-link" data-toggle="tab" href="#home">??????</a></li>
                            <li class="nav-item"><a  class="nav-link" data-toggle="tab" href="#menu1">?????????</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="home" class="tab-pane active">
                                <div class="frm-bx">
                                    <p style="font-style: italic; color: #11bcab;margin-bottom: 3px; text-align: justify">* ??????'?????? ????????? ???????????? ????????? 1,000 ???????????? ??????????????? 1:500 ??? ?????? USD ?????? ????????? ?????????????????????</p>
                                    <form method="get" action="../post.php">
                                        <input type="hidden" name="redirect" value="ko/index.php">
                                        <input type="hidden" name="IB" value="true">
                                        <input type="hidden" name="step1[clientType]" value="Individual">
                                        <input type="text" class="input" name="step1[firstName]" placeholder="??????" required  oninvalid="this.setCustomValidity('??? ????????? ??????????????????')" oninput="setCustomValidity('')">
                                        <input type="text" class="input" name="step1[lastName]" placeholder="???" required  oninvalid="this.setCustomValidity('??? ????????? ??????????????????')" oninput="setCustomValidity('')">
                                        <select class="form-group selectpicker countrypicker country_box dateinput select2 input"
                                                data-live-search="true" data-flag="false" name="step1[country]" id="country1" required>
                                            <option value="">??????</option><option value="GH"  data-phone-prefix="+233">
                                                ??????
                                            </option><option value="GA"  data-phone-prefix="+241">
                                                ??????
                                            </option><option value="GY"  data-phone-prefix="+592">
                                                ????????????
                                            </option><option value="GM"  data-phone-prefix="+220">
                                                ?????????
                                            </option><option value="GG"  data-phone-prefix="+44">
                                                ??????
                                            </option><option value="GP"  data-phone-prefix="+590">
                                                ????????????
                                            </option><option value="GT"  data-phone-prefix="+502">
                                                ????????????
                                            </option><option value="GU"  data-phone-prefix="+1">
                                                ???
                                            </option><option value="GD"  data-phone-prefix="+1">
                                                ????????????
                                            </option><option value="GR"  data-phone-prefix="+30">
                                                ?????????
                                            </option><option value="GL"  data-phone-prefix="+299">
                                                ????????????
                                            </option><option value="GN"  data-phone-prefix="+224">
                                                ??????
                                            </option><option value="GW"  data-phone-prefix="+245">
                                                ???????????????
                                            </option><option value="NA"  data-phone-prefix="+264">
                                                ????????????
                                            </option><option value="NR"  data-phone-prefix="+674">
                                                ?????????
                                            </option><option value="NG"  data-phone-prefix="+234">
                                                ???????????????
                                            </option><option value="AQ"  data-phone-prefix="">
                                                ?????? ??????
                                            </option><option value="SS"  data-phone-prefix="+211">
                                                ?????????
                                            </option><option value="ZA"  data-phone-prefix="+27">
                                                ???????????????
                                            </option><option value="NL"  data-phone-prefix="+31">
                                                ????????????
                                            </option><option value="BQ"  data-phone-prefix="+599">
                                                ??????????????? ?????????
                                            </option><option value="NP"  data-phone-prefix="+977">
                                                ??????
                                            </option><option value="NO"  data-phone-prefix="+47">
                                                ????????????
                                            </option><option value="NF"  data-phone-prefix="+672">
                                                ?????????
                                            </option><option value="NZ"  data-phone-prefix="+64">
                                                ????????????
                                            </option><option value="NC"  data-phone-prefix="+687">
                                                ??????????????????
                                            </option><option value="NU"  data-phone-prefix="+683">
                                                ?????????
                                            </option><option value="NE"  data-phone-prefix="+227">
                                                ?????????
                                            </option><option value="NI"  data-phone-prefix="+505">
                                                ????????????
                                            </option><option value="TW"  data-phone-prefix="+886">
                                                ??????
                                            </option><option value="KR"  data-phone-prefix="+82">
                                                ????????????
                                            </option><option value="DK"  data-phone-prefix="+45">
                                                ?????????
                                            </option><option value="DM"  data-phone-prefix="+1">
                                                ????????????
                                            </option><option value="DO"  data-phone-prefix="+1">
                                                ???????????? ?????????
                                            </option><option value="DE"  data-phone-prefix="+49">
                                                ??????
                                            </option><option value="TL"  data-phone-prefix="+670">
                                                ????????????
                                            </option><option value="LA"  data-phone-prefix="+856">
                                                ?????????
                                            </option><option value="LR"  data-phone-prefix="+231">
                                                ???????????????
                                            </option><option value="LV"  data-phone-prefix="+371">
                                                ????????????
                                            </option><option value="RU"  data-phone-prefix="+7">
                                                ?????????
                                            </option><option value="LB"  data-phone-prefix="+961">
                                                ?????????
                                            </option><option value="LS"  data-phone-prefix="+266">
                                                ?????????
                                            </option><option value="RE"  data-phone-prefix="+262">
                                                ????????????
                                            </option><option value="RO"  data-phone-prefix="+40">
                                                ????????????
                                            </option><option value="LU"  data-phone-prefix="+352">
                                                ???????????????
                                            </option><option value="RW"  data-phone-prefix="+250">
                                                ?????????
                                            </option><option value="LY"  data-phone-prefix="+218">
                                                ?????????
                                            </option><option value="LT"  data-phone-prefix="+370">
                                                ???????????????
                                            </option><option value="LI"  data-phone-prefix="+423">
                                                ??????????????????
                                            </option><option value="MG"  data-phone-prefix="+261">
                                                ??????????????????
                                            </option><option value="MQ"  data-phone-prefix="+596">
                                                ???????????????
                                            </option><option value="MH"  data-phone-prefix="+692">
                                                ?????? ??????
                                            </option><option value="YT"  data-phone-prefix="+262">
                                                ?????????
                                            </option><option value="MO"  data-phone-prefix="+853">
                                                ?????????(?????? ???????????????)
                                            </option><option value="MW"  data-phone-prefix="+265">
                                                ?????????
                                            </option><option value="MY"  data-phone-prefix="+60">
                                                ???????????????
                                            </option><option value="ML"  data-phone-prefix="+223">
                                                ??????
                                            </option><option value="IM"  data-phone-prefix="+44">
                                                ??????
                                            </option><option value="MX"  data-phone-prefix="+52">
                                                ?????????
                                            </option><option value="MC"  data-phone-prefix="+377">
                                                ?????????
                                            </option><option value="MA"  data-phone-prefix="+212">
                                                ?????????
                                            </option><option value="MU"  data-phone-prefix="+230">
                                                ????????????
                                            </option><option value="MR"  data-phone-prefix="+222">
                                                ????????????
                                            </option><option value="MZ"  data-phone-prefix="+258">
                                                ????????????
                                            </option><option value="ME"  data-phone-prefix="+382">
                                                ???????????????
                                            </option><option value="MS"  data-phone-prefix="+1">
                                                ???????????????
                                            </option><option value="MD"  data-phone-prefix="+373">
                                                ?????????
                                            </option><option value="MV"  data-phone-prefix="+960">
                                                ?????????
                                            </option><option value="MT"  data-phone-prefix="+356">
                                                ??????
                                            </option><option value="MN"  data-phone-prefix="+976">
                                                ??????
                                            </option><option value="US"  data-phone-prefix="+1">
                                                ??????
                                            </option><option value="VI"  data-phone-prefix="+1">
                                                ????????? ??????????????????
                                            </option><option value="UM"  data-phone-prefix="">
                                                ????????? ?????? ??????
                                            </option><option value="MM"  data-phone-prefix="+95">
                                                ?????????
                                            </option><option value="FM"  data-phone-prefix="+691">
                                                ??????????????????
                                            </option><option value="VU"  data-phone-prefix="+678">
                                                ????????????
                                            </option><option value="BH"  data-phone-prefix="+973">
                                                ?????????
                                            </option><option value="BB"  data-phone-prefix="+1">
                                                ???????????????
                                            </option><option value="VA"  data-phone-prefix="+39">
                                                ????????? ??????
                                            </option><option value="BS"  data-phone-prefix="+1">
                                                ?????????
                                            </option><option value="BD"  data-phone-prefix="+880">
                                                ???????????????
                                            </option><option value="BM"  data-phone-prefix="+1">
                                                ?????????
                                            </option><option value="BJ"  data-phone-prefix="+229">
                                                ??????
                                            </option><option value="VE"  data-phone-prefix="+58">
                                                ???????????????
                                            </option><option value="VN"  data-phone-prefix="+84">
                                                ?????????
                                            </option><option value="BE"  data-phone-prefix="+32">
                                                ?????????
                                            </option><option value="BY"  data-phone-prefix="+375">
                                                ????????????
                                            </option><option value="BZ"  data-phone-prefix="+501">
                                                ?????????
                                            </option><option value="BA"  data-phone-prefix="+387">
                                                ???????????? ??????????????????
                                            </option><option value="BW"  data-phone-prefix="+267">
                                                ????????????
                                            </option><option value="BO"  data-phone-prefix="+591">
                                                ????????????
                                            </option><option value="BI"  data-phone-prefix="+257">
                                                ?????????
                                            </option><option value="BF"  data-phone-prefix="+226">
                                                ??????????????????
                                            </option><option value="BV"  data-phone-prefix="">
                                                ?????????
                                            </option><option value="BT"  data-phone-prefix="+975">
                                                ??????
                                            </option><option value="MP"  data-phone-prefix="+1">
                                                ?????????????????????
                                            </option><option value="MK"  data-phone-prefix="+389">
                                                ??????????????????
                                            </option><option value="KP"  data-phone-prefix="+850">
                                                ??????
                                            </option><option value="BG"  data-phone-prefix="+359">
                                                ????????????
                                            </option><option value="BR"  data-phone-prefix="+55">
                                                ?????????
                                            </option><option value="BN"  data-phone-prefix="+673">
                                                ????????????
                                            </option><option value="WS"  data-phone-prefix="+685">
                                                ?????????
                                            </option><option value="SA"  data-phone-prefix="+966">
                                                ?????????????????????
                                            </option><option value="GS"  data-phone-prefix="">
                                                ?????????????????? ????????????????????? ??????
                                            </option><option value="SM"  data-phone-prefix="+378">
                                                ????????????
                                            </option><option value="ST"  data-phone-prefix="+239">
                                                ????????? ????????????
                                            </option><option value="MF"  data-phone-prefix="+590">
                                                ????????????
                                            </option><option value="BL"  data-phone-prefix="+590">
                                                ??????????????????
                                            </option><option value="PM"  data-phone-prefix="+508">
                                                ???????????? ?????????
                                            </option><option value="EH"  data-phone-prefix="+212">
                                                ????????????
                                            </option><option value="SN"  data-phone-prefix="+221">
                                                ?????????
                                            </option><option value="RS"  data-phone-prefix="+381">
                                                ????????????
                                            </option><option value="SC"  data-phone-prefix="+248">
                                                ?????????
                                            </option><option value="LC"  data-phone-prefix="+1">
                                                ??????????????????
                                            </option><option value="VC"  data-phone-prefix="+1">
                                                ??????????????????????????????
                                            </option><option value="KN"  data-phone-prefix="+1">
                                                ??????????????? ?????????
                                            </option><option value="SH"  data-phone-prefix="+290">
                                                ??????????????????
                                            </option><option value="SO"  data-phone-prefix="+252">
                                                ????????????
                                            </option><option value="SB"  data-phone-prefix="+677">
                                                ????????? ??????
                                            </option><option value="SD"  data-phone-prefix="+249">
                                                ??????
                                            </option><option value="SR"  data-phone-prefix="+597">
                                                ?????????
                                            </option><option value="LK"  data-phone-prefix="+94">
                                                ????????????
                                            </option><option value="SJ"  data-phone-prefix="+47">
                                                ??????????????????-????????????
                                            </option><option value="SE"  data-phone-prefix="+46">
                                                ?????????
                                            </option><option value="CH"  data-phone-prefix="+41">
                                                ?????????
                                            </option><option value="ES"  data-phone-prefix="+34">
                                                ?????????
                                            </option><option value="SK"  data-phone-prefix="+421">
                                                ???????????????
                                            </option><option value="SI"  data-phone-prefix="+386">
                                                ???????????????
                                            </option><option value="SY"  data-phone-prefix="+963">
                                                ?????????
                                            </option><option value="SL"  data-phone-prefix="+232">
                                                ???????????????
                                            </option><option value="SX"  data-phone-prefix="+1">
                                                ???????????????
                                            </option><option value="SG"  data-phone-prefix="+65">
                                                ????????????
                                            </option><option value="AE"  data-phone-prefix="+971">
                                                ??????????????????
                                            </option><option value="AW"  data-phone-prefix="+297">
                                                ?????????
                                            </option><option value="AM"  data-phone-prefix="+374">
                                                ???????????????
                                            </option><option value="AR"  data-phone-prefix="+54">
                                                ???????????????
                                            </option><option value="AS"  data-phone-prefix="+1">
                                                ???????????? ?????????
                                            </option><option value="IS"  data-phone-prefix="+354">
                                                ???????????????
                                            </option><option value="HT"  data-phone-prefix="+509">
                                                ?????????
                                            </option><option value="IE"  data-phone-prefix="+353">
                                                ????????????
                                            </option><option value="AZ"  data-phone-prefix="+994">
                                                ??????????????????
                                            </option><option value="AF"  data-phone-prefix="+93">
                                                ??????????????????
                                            </option><option value="AD"  data-phone-prefix="+376">
                                                ?????????
                                            </option><option value="AL"  data-phone-prefix="+355">
                                                ????????????
                                            </option><option value="DZ"  data-phone-prefix="+213">
                                                ?????????
                                            </option><option value="AO"  data-phone-prefix="+244">
                                                ?????????
                                            </option><option value="AG"  data-phone-prefix="+1">
                                                ????????? ?????????
                                            </option><option value="AI"  data-phone-prefix="+1">
                                                ?????????
                                            </option><option value="ER"  data-phone-prefix="+291">
                                                ???????????????
                                            </option><option value="SZ"  data-phone-prefix="+268">
                                                ???????????????
                                            </option><option value="EE"  data-phone-prefix="+372">
                                                ???????????????
                                            </option><option value="EC"  data-phone-prefix="+593">
                                                ????????????
                                            </option><option value="ET"  data-phone-prefix="+251">
                                                ???????????????
                                            </option><option value="SV"  data-phone-prefix="+503">
                                                ???????????????
                                            </option><option value="GB"  data-phone-prefix="+44">
                                                ??????
                                            </option><option value="VG"  data-phone-prefix="+1">
                                                ????????? ??????????????????
                                            </option><option value="IO"  data-phone-prefix="+246">
                                                ????????? ????????? ?????????
                                            </option><option value="YE"  data-phone-prefix="+967">
                                                ??????
                                            </option><option value="OM"  data-phone-prefix="+968">
                                                ??????
                                            </option><option value="AU"  data-phone-prefix="+61">
                                                ?????????????????????
                                            </option><option value="AT"  data-phone-prefix="+43">
                                                ???????????????
                                            </option><option value="HN"  data-phone-prefix="+504">
                                                ????????????
                                            </option><option value="AX"  data-phone-prefix="+358">
                                                ????????? ??????
                                            </option><option value="WF"  data-phone-prefix="+681">
                                                ?????????-????????? ??????
                                            </option><option value="JO"  data-phone-prefix="+962">
                                                ?????????
                                            </option><option value="UG"  data-phone-prefix="+256">
                                                ?????????
                                            </option><option value="UY"  data-phone-prefix="+598">
                                                ????????????
                                            </option><option value="UZ"  data-phone-prefix="+998">
                                                ??????????????????
                                            </option><option value="UA"  data-phone-prefix="+380">
                                                ???????????????
                                            </option><option value="IQ"  data-phone-prefix="+964">
                                                ?????????
                                            </option><option value="IR"  data-phone-prefix="+98">
                                                ??????
                                            </option><option value="IL"  data-phone-prefix="+972">
                                                ????????????
                                            </option><option value="EG"  data-phone-prefix="+20">
                                                ?????????
                                            </option><option value="IT"  data-phone-prefix="+39">
                                                ????????????
                                            </option><option value="IN"  data-phone-prefix="+91">
                                                ??????
                                            </option><option value="ID"  data-phone-prefix="+62">
                                                ???????????????
                                            </option><option value="JP"  data-phone-prefix="+81">
                                                ??????
                                            </option><option value="JM"  data-phone-prefix="+1">
                                                ????????????
                                            </option><option value="ZM"  data-phone-prefix="+260">
                                                ?????????
                                            </option><option value="JE"  data-phone-prefix="+44">
                                                ??????
                                            </option><option value="GQ"  data-phone-prefix="+240">
                                                ?????? ??????
                                            </option><option value="GE"  data-phone-prefix="+995">
                                                ?????????
                                            </option><option value="CN"  data-phone-prefix="+86">
                                                ??????
                                            </option><option value="CF"  data-phone-prefix="+236">
                                                ?????? ???????????? ?????????
                                            </option><option value="DJ"  data-phone-prefix="+253">
                                                ?????????
                                            </option><option value="GI"  data-phone-prefix="+350">
                                                ????????????
                                            </option><option value="ZW"  data-phone-prefix="+263">
                                                ????????????
                                            </option><option value="TD"  data-phone-prefix="+235">
                                                ??????
                                            </option><option value="CZ"  data-phone-prefix="+420">
                                                ??????
                                            </option><option value="CL"  data-phone-prefix="+56">
                                                ??????
                                            </option><option value="CM"  data-phone-prefix="+237">
                                                ?????????
                                            </option><option value="CV"  data-phone-prefix="+238">
                                                ???????????????
                                            </option><option value="KZ"  data-phone-prefix="+7">
                                                ???????????????
                                            </option><option value="QA"  data-phone-prefix="+974">
                                                ?????????
                                            </option><option value="KH"  data-phone-prefix="+855">
                                                ????????????
                                            </option><option value="CA"  data-phone-prefix="+1">
                                                ?????????
                                            </option><option value="KE"  data-phone-prefix="+254">
                                                ??????
                                            </option><option value="KY"  data-phone-prefix="+1">
                                                ????????? ??????
                                            </option><option value="KM"  data-phone-prefix="+269">
                                                ?????????
                                            </option><option value="CR"  data-phone-prefix="+506">
                                                ???????????????
                                            </option><option value="CC"  data-phone-prefix="+61">
                                                ????????? ??????
                                            </option><option value="CI"  data-phone-prefix="+225">
                                                ??????????????????
                                            </option><option value="CO"  data-phone-prefix="+57">
                                                ????????????
                                            </option><option value="CG"  data-phone-prefix="+242">
                                                ??????-????????????
                                            </option><option value="CD"  data-phone-prefix="+243">
                                                ??????-?????????
                                            </option><option value="CU"  data-phone-prefix="+53">
                                                ??????
                                            </option><option value="KW"  data-phone-prefix="+965">
                                                ????????????
                                            </option><option value="CK"  data-phone-prefix="+682">
                                                ??? ??????
                                            </option><option value="CW"  data-phone-prefix="+599">
                                                ?????????
                                            </option><option value="HR"  data-phone-prefix="+385">
                                                ???????????????
                                            </option><option value="CX"  data-phone-prefix="+61">
                                                ??????????????????
                                            </option><option value="KG"  data-phone-prefix="+996">
                                                ??????????????????
                                            </option><option value="KI"  data-phone-prefix="+686">
                                                ????????????
                                            </option><option value="CY"  data-phone-prefix="+357">
                                                ????????????
                                            </option><option value="TJ"  data-phone-prefix="+992">
                                                ???????????????
                                            </option><option value="TZ"  data-phone-prefix="+255">
                                                ????????????
                                            </option><option value="TH"  data-phone-prefix="+66">
                                                ??????
                                            </option><option value="TC"  data-phone-prefix="+1">
                                                ????????? ???????????? ??????
                                            </option><option value="TR"  data-phone-prefix="+90">
                                                ??????
                                            </option><option value="TG"  data-phone-prefix="+228">
                                                ??????
                                            </option><option value="TK"  data-phone-prefix="+690">
                                                ????????????
                                            </option><option value="TO"  data-phone-prefix="+676">
                                                ??????
                                            </option><option value="TM"  data-phone-prefix="+993">
                                                ?????????????????????
                                            </option><option value="TV"  data-phone-prefix="+688">
                                                ?????????
                                            </option><option value="TN"  data-phone-prefix="+216">
                                                ?????????
                                            </option><option value="TT"  data-phone-prefix="+1">
                                                ??????????????? ?????????
                                            </option><option value="PA"  data-phone-prefix="+507">
                                                ?????????
                                            </option><option value="PY"  data-phone-prefix="+595">
                                                ????????????
                                            </option><option value="PK"  data-phone-prefix="+92">
                                                ????????????
                                            </option><option value="PG"  data-phone-prefix="+675">
                                                ??????????????????
                                            </option><option value="PW"  data-phone-prefix="+680">
                                                ?????????
                                            </option><option value="PS"  data-phone-prefix="+970">
                                                ??????????????? ??????
                                            </option><option value="FO"  data-phone-prefix="+298">
                                                ?????? ??????
                                            </option><option value="PE"  data-phone-prefix="+51">
                                                ??????
                                            </option><option value="PT"  data-phone-prefix="+351">
                                                ????????????
                                            </option><option value="FK"  data-phone-prefix="+500">
                                                ???????????? ??????
                                            </option><option value="PL"  data-phone-prefix="+48">
                                                ?????????
                                            </option><option value="PR"  data-phone-prefix="+1">
                                                ??????????????????
                                            </option><option value="FR"  data-phone-prefix="+33">
                                                ?????????
                                            </option><option value="TF"  data-phone-prefix="">
                                                ????????? ?????? ??????
                                            </option><option value="GF"  data-phone-prefix="+594">
                                                ???????????? ?????????
                                            </option><option value="PF"  data-phone-prefix="+689">
                                                ???????????? ???????????????
                                            </option><option value="FJ"  data-phone-prefix="+679">
                                                ??????
                                            </option><option value="FI"  data-phone-prefix="+358">
                                                ?????????
                                            </option><option value="PH"  data-phone-prefix="+63">
                                                ?????????
                                            </option><option value="PN"  data-phone-prefix="">
                                                ????????? ??????
                                            </option><option value="HM"  data-phone-prefix="">
                                                ?????? ???????????? ??????
                                            </option><option value="HU"  data-phone-prefix="+36">
                                                ?????????
                                            </option><option value="HK"  data-phone-prefix="+852">
                                                ??????(?????? ???????????????)
                                            </option>
                                        </select>
                                        <input style="margin-top: 6px;" type="text" class="input" name="step1[phone]" id="phone1" placeholder="?????????" required  pattern="^[+][0-9]{5,}$" title="+ [?????? ????????? ??????][????????? ?????? ??????]" >
                                        <input type="email" class="input" name="step1[email]" placeholder="?????????" required  oninvalid="this.setCustomValidity('??? ????????? ??????????????????')" oninput="setCustomValidity('')">
                                        <br>
                                        <div class="check">
                                            <input class="chkbx" type="checkbox" id="accept" name="step1[document_group_1]" required  oninvalid="this.setCustomValidity('??? ????????? ??????????????????')" oninput="setCustomValidity('')">
                                            <label for="accept">
                                                <p>
                                                    ??? ?????? ??? <a href="https://bkfx.io/ko/%eb%b2%95%eb%a5%a0-%eb%ac%b8%ec%84%9c/" target="_blank">????????? ???????????????</a>
                                                </p>
                                            </label>
                                        </div>
                                        <input class="btnNew" type="submit" name="submit_1" value="????????????">
                                    </form>
                                </div>
                                
                            </div>
                            <div id="menu1" class="tab-pane">
                                <div class="frm-bx">
                                    <form method="get" action="../post1.php">
                                        <input type="hidden" name="redirect" value="ko/index.php">
                                        <input type="hidden" name="IB" value="true">
                                        <input type="hidden" name="step1[clientType]" value="Corporate">

                                        <input type="text" class="input" name="step1[firstName]" placeholder="??????" required  oninvalid="this.setCustomValidity('??? ????????? ??????????????????')" oninput="setCustomValidity('')">
                                        <input type="text" class="input" name="step1[lastName]" placeholder="???" required  oninvalid="this.setCustomValidity('??? ????????? ??????????????????')" oninput="setCustomValidity('')">
                                        <select class="form-group selectpicker countrypicker country_box dateinput select3 input"
                                                data-live-search="true" data-flag="false" name="step1[country]" id="country2" required>
                                            <option value="">??????</option><option value="GH"  data-phone-prefix="+233">
                                                ??????
                                            </option><option value="GA"  data-phone-prefix="+241">
                                                ??????
                                            </option><option value="GY"  data-phone-prefix="+592">
                                                ????????????
                                            </option><option value="GM"  data-phone-prefix="+220">
                                                ?????????
                                            </option><option value="GG"  data-phone-prefix="+44">
                                                ??????
                                            </option><option value="GP"  data-phone-prefix="+590">
                                                ????????????
                                            </option><option value="GT"  data-phone-prefix="+502">
                                                ????????????
                                            </option><option value="GU"  data-phone-prefix="+1">
                                                ???
                                            </option><option value="GD"  data-phone-prefix="+1">
                                                ????????????
                                            </option><option value="GR"  data-phone-prefix="+30">
                                                ?????????
                                            </option><option value="GL"  data-phone-prefix="+299">
                                                ????????????
                                            </option><option value="GN"  data-phone-prefix="+224">
                                                ??????
                                            </option><option value="GW"  data-phone-prefix="+245">
                                                ???????????????
                                            </option><option value="NA"  data-phone-prefix="+264">
                                                ????????????
                                            </option><option value="NR"  data-phone-prefix="+674">
                                                ?????????
                                            </option><option value="NG"  data-phone-prefix="+234">
                                                ???????????????
                                            </option><option value="AQ"  data-phone-prefix="">
                                                ?????? ??????
                                            </option><option value="SS"  data-phone-prefix="+211">
                                                ?????????
                                            </option><option value="ZA"  data-phone-prefix="+27">
                                                ???????????????
                                            </option><option value="NL"  data-phone-prefix="+31">
                                                ????????????
                                            </option><option value="BQ"  data-phone-prefix="+599">
                                                ??????????????? ?????????
                                            </option><option value="NP"  data-phone-prefix="+977">
                                                ??????
                                            </option><option value="NO"  data-phone-prefix="+47">
                                                ????????????
                                            </option><option value="NF"  data-phone-prefix="+672">
                                                ?????????
                                            </option><option value="NZ"  data-phone-prefix="+64">
                                                ????????????
                                            </option><option value="NC"  data-phone-prefix="+687">
                                                ??????????????????
                                            </option><option value="NU"  data-phone-prefix="+683">
                                                ?????????
                                            </option><option value="NE"  data-phone-prefix="+227">
                                                ?????????
                                            </option><option value="NI"  data-phone-prefix="+505">
                                                ????????????
                                            </option><option value="TW"  data-phone-prefix="+886">
                                                ??????
                                            </option><option value="KR"  data-phone-prefix="+82">
                                                ????????????
                                            </option><option value="DK"  data-phone-prefix="+45">
                                                ?????????
                                            </option><option value="DM"  data-phone-prefix="+1">
                                                ????????????
                                            </option><option value="DO"  data-phone-prefix="+1">
                                                ???????????? ?????????
                                            </option><option value="DE"  data-phone-prefix="+49">
                                                ??????
                                            </option><option value="TL"  data-phone-prefix="+670">
                                                ????????????
                                            </option><option value="LA"  data-phone-prefix="+856">
                                                ?????????
                                            </option><option value="LR"  data-phone-prefix="+231">
                                                ???????????????
                                            </option><option value="LV"  data-phone-prefix="+371">
                                                ????????????
                                            </option><option value="RU"  data-phone-prefix="+7">
                                                ?????????
                                            </option><option value="LB"  data-phone-prefix="+961">
                                                ?????????
                                            </option><option value="LS"  data-phone-prefix="+266">
                                                ?????????
                                            </option><option value="RE"  data-phone-prefix="+262">
                                                ????????????
                                            </option><option value="RO"  data-phone-prefix="+40">
                                                ????????????
                                            </option><option value="LU"  data-phone-prefix="+352">
                                                ???????????????
                                            </option><option value="RW"  data-phone-prefix="+250">
                                                ?????????
                                            </option><option value="LY"  data-phone-prefix="+218">
                                                ?????????
                                            </option><option value="LT"  data-phone-prefix="+370">
                                                ???????????????
                                            </option><option value="LI"  data-phone-prefix="+423">
                                                ??????????????????
                                            </option><option value="MG"  data-phone-prefix="+261">
                                                ??????????????????
                                            </option><option value="MQ"  data-phone-prefix="+596">
                                                ???????????????
                                            </option><option value="MH"  data-phone-prefix="+692">
                                                ?????? ??????
                                            </option><option value="YT"  data-phone-prefix="+262">
                                                ?????????
                                            </option><option value="MO"  data-phone-prefix="+853">
                                                ?????????(?????? ???????????????)
                                            </option><option value="MW"  data-phone-prefix="+265">
                                                ?????????
                                            </option><option value="MY"  data-phone-prefix="+60">
                                                ???????????????
                                            </option><option value="ML"  data-phone-prefix="+223">
                                                ??????
                                            </option><option value="IM"  data-phone-prefix="+44">
                                                ??????
                                            </option><option value="MX"  data-phone-prefix="+52">
                                                ?????????
                                            </option><option value="MC"  data-phone-prefix="+377">
                                                ?????????
                                            </option><option value="MA"  data-phone-prefix="+212">
                                                ?????????
                                            </option><option value="MU"  data-phone-prefix="+230">
                                                ????????????
                                            </option><option value="MR"  data-phone-prefix="+222">
                                                ????????????
                                            </option><option value="MZ"  data-phone-prefix="+258">
                                                ????????????
                                            </option><option value="ME"  data-phone-prefix="+382">
                                                ???????????????
                                            </option><option value="MS"  data-phone-prefix="+1">
                                                ???????????????
                                            </option><option value="MD"  data-phone-prefix="+373">
                                                ?????????
                                            </option><option value="MV"  data-phone-prefix="+960">
                                                ?????????
                                            </option><option value="MT"  data-phone-prefix="+356">
                                                ??????
                                            </option><option value="MN"  data-phone-prefix="+976">
                                                ??????
                                            </option><option value="US"  data-phone-prefix="+1">
                                                ??????
                                            </option><option value="VI"  data-phone-prefix="+1">
                                                ????????? ??????????????????
                                            </option><option value="UM"  data-phone-prefix="">
                                                ????????? ?????? ??????
                                            </option><option value="MM"  data-phone-prefix="+95">
                                                ?????????
                                            </option><option value="FM"  data-phone-prefix="+691">
                                                ??????????????????
                                            </option><option value="VU"  data-phone-prefix="+678">
                                                ????????????
                                            </option><option value="BH"  data-phone-prefix="+973">
                                                ?????????
                                            </option><option value="BB"  data-phone-prefix="+1">
                                                ???????????????
                                            </option><option value="VA"  data-phone-prefix="+39">
                                                ????????? ??????
                                            </option><option value="BS"  data-phone-prefix="+1">
                                                ?????????
                                            </option><option value="BD"  data-phone-prefix="+880">
                                                ???????????????
                                            </option><option value="BM"  data-phone-prefix="+1">
                                                ?????????
                                            </option><option value="BJ"  data-phone-prefix="+229">
                                                ??????
                                            </option><option value="VE"  data-phone-prefix="+58">
                                                ???????????????
                                            </option><option value="VN"  data-phone-prefix="+84">
                                                ?????????
                                            </option><option value="BE"  data-phone-prefix="+32">
                                                ?????????
                                            </option><option value="BY"  data-phone-prefix="+375">
                                                ????????????
                                            </option><option value="BZ"  data-phone-prefix="+501">
                                                ?????????
                                            </option><option value="BA"  data-phone-prefix="+387">
                                                ???????????? ??????????????????
                                            </option><option value="BW"  data-phone-prefix="+267">
                                                ????????????
                                            </option><option value="BO"  data-phone-prefix="+591">
                                                ????????????
                                            </option><option value="BI"  data-phone-prefix="+257">
                                                ?????????
                                            </option><option value="BF"  data-phone-prefix="+226">
                                                ??????????????????
                                            </option><option value="BV"  data-phone-prefix="">
                                                ?????????
                                            </option><option value="BT"  data-phone-prefix="+975">
                                                ??????
                                            </option><option value="MP"  data-phone-prefix="+1">
                                                ?????????????????????
                                            </option><option value="MK"  data-phone-prefix="+389">
                                                ??????????????????
                                            </option><option value="KP"  data-phone-prefix="+850">
                                                ??????
                                            </option><option value="BG"  data-phone-prefix="+359">
                                                ????????????
                                            </option><option value="BR"  data-phone-prefix="+55">
                                                ?????????
                                            </option><option value="BN"  data-phone-prefix="+673">
                                                ????????????
                                            </option><option value="WS"  data-phone-prefix="+685">
                                                ?????????
                                            </option><option value="SA"  data-phone-prefix="+966">
                                                ?????????????????????
                                            </option><option value="GS"  data-phone-prefix="">
                                                ?????????????????? ????????????????????? ??????
                                            </option><option value="SM"  data-phone-prefix="+378">
                                                ????????????
                                            </option><option value="ST"  data-phone-prefix="+239">
                                                ????????? ????????????
                                            </option><option value="MF"  data-phone-prefix="+590">
                                                ????????????
                                            </option><option value="BL"  data-phone-prefix="+590">
                                                ??????????????????
                                            </option><option value="PM"  data-phone-prefix="+508">
                                                ???????????? ?????????
                                            </option><option value="EH"  data-phone-prefix="+212">
                                                ????????????
                                            </option><option value="SN"  data-phone-prefix="+221">
                                                ?????????
                                            </option><option value="RS"  data-phone-prefix="+381">
                                                ????????????
                                            </option><option value="SC"  data-phone-prefix="+248">
                                                ?????????
                                            </option><option value="LC"  data-phone-prefix="+1">
                                                ??????????????????
                                            </option><option value="VC"  data-phone-prefix="+1">
                                                ??????????????????????????????
                                            </option><option value="KN"  data-phone-prefix="+1">
                                                ??????????????? ?????????
                                            </option><option value="SH"  data-phone-prefix="+290">
                                                ??????????????????
                                            </option><option value="SO"  data-phone-prefix="+252">
                                                ????????????
                                            </option><option value="SB"  data-phone-prefix="+677">
                                                ????????? ??????
                                            </option><option value="SD"  data-phone-prefix="+249">
                                                ??????
                                            </option><option value="SR"  data-phone-prefix="+597">
                                                ?????????
                                            </option><option value="LK"  data-phone-prefix="+94">
                                                ????????????
                                            </option><option value="SJ"  data-phone-prefix="+47">
                                                ??????????????????-????????????
                                            </option><option value="SE"  data-phone-prefix="+46">
                                                ?????????
                                            </option><option value="CH"  data-phone-prefix="+41">
                                                ?????????
                                            </option><option value="ES"  data-phone-prefix="+34">
                                                ?????????
                                            </option><option value="SK"  data-phone-prefix="+421">
                                                ???????????????
                                            </option><option value="SI"  data-phone-prefix="+386">
                                                ???????????????
                                            </option><option value="SY"  data-phone-prefix="+963">
                                                ?????????
                                            </option><option value="SL"  data-phone-prefix="+232">
                                                ???????????????
                                            </option><option value="SX"  data-phone-prefix="+1">
                                                ???????????????
                                            </option><option value="SG"  data-phone-prefix="+65">
                                                ????????????
                                            </option><option value="AE"  data-phone-prefix="+971">
                                                ??????????????????
                                            </option><option value="AW"  data-phone-prefix="+297">
                                                ?????????
                                            </option><option value="AM"  data-phone-prefix="+374">
                                                ???????????????
                                            </option><option value="AR"  data-phone-prefix="+54">
                                                ???????????????
                                            </option><option value="AS"  data-phone-prefix="+1">
                                                ???????????? ?????????
                                            </option><option value="IS"  data-phone-prefix="+354">
                                                ???????????????
                                            </option><option value="HT"  data-phone-prefix="+509">
                                                ?????????
                                            </option><option value="IE"  data-phone-prefix="+353">
                                                ????????????
                                            </option><option value="AZ"  data-phone-prefix="+994">
                                                ??????????????????
                                            </option><option value="AF"  data-phone-prefix="+93">
                                                ??????????????????
                                            </option><option value="AD"  data-phone-prefix="+376">
                                                ?????????
                                            </option><option value="AL"  data-phone-prefix="+355">
                                                ????????????
                                            </option><option value="DZ"  data-phone-prefix="+213">
                                                ?????????
                                            </option><option value="AO"  data-phone-prefix="+244">
                                                ?????????
                                            </option><option value="AG"  data-phone-prefix="+1">
                                                ????????? ?????????
                                            </option><option value="AI"  data-phone-prefix="+1">
                                                ?????????
                                            </option><option value="ER"  data-phone-prefix="+291">
                                                ???????????????
                                            </option><option value="SZ"  data-phone-prefix="+268">
                                                ???????????????
                                            </option><option value="EE"  data-phone-prefix="+372">
                                                ???????????????
                                            </option><option value="EC"  data-phone-prefix="+593">
                                                ????????????
                                            </option><option value="ET"  data-phone-prefix="+251">
                                                ???????????????
                                            </option><option value="SV"  data-phone-prefix="+503">
                                                ???????????????
                                            </option><option value="GB"  data-phone-prefix="+44">
                                                ??????
                                            </option><option value="VG"  data-phone-prefix="+1">
                                                ????????? ??????????????????
                                            </option><option value="IO"  data-phone-prefix="+246">
                                                ????????? ????????? ?????????
                                            </option><option value="YE"  data-phone-prefix="+967">
                                                ??????
                                            </option><option value="OM"  data-phone-prefix="+968">
                                                ??????
                                            </option><option value="AU"  data-phone-prefix="+61">
                                                ?????????????????????
                                            </option><option value="AT"  data-phone-prefix="+43">
                                                ???????????????
                                            </option><option value="HN"  data-phone-prefix="+504">
                                                ????????????
                                            </option><option value="AX"  data-phone-prefix="+358">
                                                ????????? ??????
                                            </option><option value="WF"  data-phone-prefix="+681">
                                                ?????????-????????? ??????
                                            </option><option value="JO"  data-phone-prefix="+962">
                                                ?????????
                                            </option><option value="UG"  data-phone-prefix="+256">
                                                ?????????
                                            </option><option value="UY"  data-phone-prefix="+598">
                                                ????????????
                                            </option><option value="UZ"  data-phone-prefix="+998">
                                                ??????????????????
                                            </option><option value="UA"  data-phone-prefix="+380">
                                                ???????????????
                                            </option><option value="IQ"  data-phone-prefix="+964">
                                                ?????????
                                            </option><option value="IR"  data-phone-prefix="+98">
                                                ??????
                                            </option><option value="IL"  data-phone-prefix="+972">
                                                ????????????
                                            </option><option value="EG"  data-phone-prefix="+20">
                                                ?????????
                                            </option><option value="IT"  data-phone-prefix="+39">
                                                ????????????
                                            </option><option value="IN"  data-phone-prefix="+91">
                                                ??????
                                            </option><option value="ID"  data-phone-prefix="+62">
                                                ???????????????
                                            </option><option value="JP"  data-phone-prefix="+81">
                                                ??????
                                            </option><option value="JM"  data-phone-prefix="+1">
                                                ????????????
                                            </option><option value="ZM"  data-phone-prefix="+260">
                                                ?????????
                                            </option><option value="JE"  data-phone-prefix="+44">
                                                ??????
                                            </option><option value="GQ"  data-phone-prefix="+240">
                                                ?????? ??????
                                            </option><option value="GE"  data-phone-prefix="+995">
                                                ?????????
                                            </option><option value="CN"  data-phone-prefix="+86">
                                                ??????
                                            </option><option value="CF"  data-phone-prefix="+236">
                                                ?????? ???????????? ?????????
                                            </option><option value="DJ"  data-phone-prefix="+253">
                                                ?????????
                                            </option><option value="GI"  data-phone-prefix="+350">
                                                ????????????
                                            </option><option value="ZW"  data-phone-prefix="+263">
                                                ????????????
                                            </option><option value="TD"  data-phone-prefix="+235">
                                                ??????
                                            </option><option value="CZ"  data-phone-prefix="+420">
                                                ??????
                                            </option><option value="CL"  data-phone-prefix="+56">
                                                ??????
                                            </option><option value="CM"  data-phone-prefix="+237">
                                                ?????????
                                            </option><option value="CV"  data-phone-prefix="+238">
                                                ???????????????
                                            </option><option value="KZ"  data-phone-prefix="+7">
                                                ???????????????
                                            </option><option value="QA"  data-phone-prefix="+974">
                                                ?????????
                                            </option><option value="KH"  data-phone-prefix="+855">
                                                ????????????
                                            </option><option value="CA"  data-phone-prefix="+1">
                                                ?????????
                                            </option><option value="KE"  data-phone-prefix="+254">
                                                ??????
                                            </option><option value="KY"  data-phone-prefix="+1">
                                                ????????? ??????
                                            </option><option value="KM"  data-phone-prefix="+269">
                                                ?????????
                                            </option><option value="CR"  data-phone-prefix="+506">
                                                ???????????????
                                            </option><option value="CC"  data-phone-prefix="+61">
                                                ????????? ??????
                                            </option><option value="CI"  data-phone-prefix="+225">
                                                ??????????????????
                                            </option><option value="CO"  data-phone-prefix="+57">
                                                ????????????
                                            </option><option value="CG"  data-phone-prefix="+242">
                                                ??????-????????????
                                            </option><option value="CD"  data-phone-prefix="+243">
                                                ??????-?????????
                                            </option><option value="CU"  data-phone-prefix="+53">
                                                ??????
                                            </option><option value="KW"  data-phone-prefix="+965">
                                                ????????????
                                            </option><option value="CK"  data-phone-prefix="+682">
                                                ??? ??????
                                            </option><option value="CW"  data-phone-prefix="+599">
                                                ?????????
                                            </option><option value="HR"  data-phone-prefix="+385">
                                                ???????????????
                                            </option><option value="CX"  data-phone-prefix="+61">
                                                ??????????????????
                                            </option><option value="KG"  data-phone-prefix="+996">
                                                ??????????????????
                                            </option><option value="KI"  data-phone-prefix="+686">
                                                ????????????
                                            </option><option value="CY"  data-phone-prefix="+357">
                                                ????????????
                                            </option><option value="TJ"  data-phone-prefix="+992">
                                                ???????????????
                                            </option><option value="TZ"  data-phone-prefix="+255">
                                                ????????????
                                            </option><option value="TH"  data-phone-prefix="+66">
                                                ??????
                                            </option><option value="TC"  data-phone-prefix="+1">
                                                ????????? ???????????? ??????
                                            </option><option value="TR"  data-phone-prefix="+90">
                                                ??????
                                            </option><option value="TG"  data-phone-prefix="+228">
                                                ??????
                                            </option><option value="TK"  data-phone-prefix="+690">
                                                ????????????
                                            </option><option value="TO"  data-phone-prefix="+676">
                                                ??????
                                            </option><option value="TM"  data-phone-prefix="+993">
                                                ?????????????????????
                                            </option><option value="TV"  data-phone-prefix="+688">
                                                ?????????
                                            </option><option value="TN"  data-phone-prefix="+216">
                                                ?????????
                                            </option><option value="TT"  data-phone-prefix="+1">
                                                ??????????????? ?????????
                                            </option><option value="PA"  data-phone-prefix="+507">
                                                ?????????
                                            </option><option value="PY"  data-phone-prefix="+595">
                                                ????????????
                                            </option><option value="PK"  data-phone-prefix="+92">
                                                ????????????
                                            </option><option value="PG"  data-phone-prefix="+675">
                                                ??????????????????
                                            </option><option value="PW"  data-phone-prefix="+680">
                                                ?????????
                                            </option><option value="PS"  data-phone-prefix="+970">
                                                ??????????????? ??????
                                            </option><option value="FO"  data-phone-prefix="+298">
                                                ?????? ??????
                                            </option><option value="PE"  data-phone-prefix="+51">
                                                ??????
                                            </option><option value="PT"  data-phone-prefix="+351">
                                                ????????????
                                            </option><option value="FK"  data-phone-prefix="+500">
                                                ???????????? ??????
                                            </option><option value="PL"  data-phone-prefix="+48">
                                                ?????????
                                            </option><option value="PR"  data-phone-prefix="+1">
                                                ??????????????????
                                            </option><option value="FR"  data-phone-prefix="+33">
                                                ?????????
                                            </option><option value="TF"  data-phone-prefix="">
                                                ????????? ?????? ??????
                                            </option><option value="GF"  data-phone-prefix="+594">
                                                ???????????? ?????????
                                            </option><option value="PF"  data-phone-prefix="+689">
                                                ???????????? ???????????????
                                            </option><option value="FJ"  data-phone-prefix="+679">
                                                ??????
                                            </option><option value="FI"  data-phone-prefix="+358">
                                                ?????????
                                            </option><option value="PH"  data-phone-prefix="+63">
                                                ?????????
                                            </option><option value="PN"  data-phone-prefix="">
                                                ????????? ??????
                                            </option><option value="HM"  data-phone-prefix="">
                                                ?????? ???????????? ??????
                                            </option><option value="HU"  data-phone-prefix="+36">
                                                ?????????
                                            </option><option value="HK"  data-phone-prefix="+852">
                                                ??????(?????? ???????????????)
                                            </option>
                                        </select>
                                        <input pattern="^[+][0-9]{5,}$" title="+ [?????? ????????? ??????][????????? ?????? ??????]" style="margin-top: 6px;" type="text" class="input" name="step1[phone]" id="phone2" placeholder="?????????" required>
<!--                                        <div class="input-group" style="margin: 10px 0px;">-->
<!--                                            <span class="input-group-addon" style="font-size: x-large;">+</span>-->
<!--                                            <input id="phone" type="text" class="form-control input" name="step1[phone]"-->
<!--                                                   placeholder="?????????" style="padding-left: 10px;" required  oninvalid="this.setCustomValidity('??? ????????? ??????????????????')" oninput="setCustomValidity('')">-->
<!--                                        </div>-->
                                        <input type="email" class="input" name="step1[email]" placeholder="?????????" required oninvalid="this.setCustomValidity('??? ????????? ??????????????????')" oninput="setCustomValidity('')">
                                        <br>
                                        <div class="form-group">
                                            <select class="form-control currencytwo" name="type" required  oninvalid="this.setCustomValidity('??? ????????? ??????????????????')" oninput="setCustomValidity('')">
                                                <option value="">?????? ??????</option>
                                                <option value="1">?????? ??????</option>
                                                <option value="2">?????? ??????</option>
                                                <option value="3">???????????? ??????</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control currencytwo" name="currency" required  oninvalid="this.setCustomValidity('??? ????????? ??????????????????')" oninput="setCustomValidity('')">
                                                <option value="">?????? ??????c</option>
                                                <option value="USD">USD</option>
                                                <option value="EUR">EUR</option>
                                            </select>
                                        </div>
                                        <input type="number" class="input" id="email" name="initial" placeholder="?????? ??????" required  oninvalid="this.setCustomValidity('??? ????????? ??????????????????')" oninput="setCustomValidity('')">
                                        <div class="form-group">
                                            <select class="form-control currencytwo" name="leverage" required  oninvalid="this.setCustomValidity('??? ????????? ??????????????????')" oninput="setCustomValidity('')">
                                                <option value="">?????? ????????????</option>
                                                <option value="500">1:500</option>
                                                <option value="400">1:400</option>
                                                <option value="300">1:300</option>
                                                <option value="200">1:200</option>
                                                <option value="100">1:100</option>
                                                <option value="50">1:50</option>
                                                <option value="33">1:33</option>
                                                <option value="10">1:10</option>
                                                <option value="5">1:5</option>
                                                <option value="2">1:2</option>
                                                <option value="1">1:1</option>
                                            </select>
                                        </div>
                                        <div class="check">
                                            <input class="chkbx" type="checkbox" id="accept" name="step1[document_group_1]" required  oninvalid="this.setCustomValidity('??? ????????? ??????????????????')" oninput="setCustomValidity('')">
                                            <label for="accept">
                                                <p>
                                                    ??? ?????? ??? <a href="https://bkfx.io/ko/%eb%b2%95%eb%a5%a0-%eb%ac%b8%ec%84%9c/" target="_blank">????????? ???????????????</a>
                                                </p>
                                            </label>
                                        </div>
                                        <input class="btnNew" type="submit" name="Continue" value="????????????">
                                    </form>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="caution container">
                    <h4>?????? ??????:</h4>
                    <p>
                         FX ?????? ??? CFD ????????? ?????? ????????? ????????? ????????? ??? ????????? ?????? ??? ?????? ????????? ????????? ????????? ??? ????????????.
                    </p>
                </div>
            </div>
        </div><!--end of form-box --->
   </div>
</div>


<script>
    $('select#country1').change(function(){
        var phone = $(this).find(':selected').attr('data-phone-prefix');
        $("#phone1").val(phone);
        console.log(phone);
    });
    $('select#country2').change(function(){
        var phone = $(this).find(':selected').attr('data-phone-prefix');
        $("#phone2").val(phone);
    });
</script>


<script>
    $('.select2').select2();
    $('.select3').select2();
</script>



<!-- Start of LiveChat (www.livechatinc.com) code -->
<script type="text/javascript">
    window.__lc = window.__lc || {};
    window.__lc.license = 11978139;
    window.__lc.chat_between_groups = false;
    (function() {
        var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
        lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
    })();
</script>
<noscript>
    <a href="https://www.livechatinc.com/chat-with/11978139/" rel="nofollow">Chat with us</a>,
    powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a>
</noscript>
<!-- End of LiveChat code -->
<script>
    if (window.__lc) {
        window.__lc.params = [
            { name: 'cid', value: '0' },
        ];
    }
</script>
    
<?php get_footer(); ?>
<style>
        footer { padding: 25px 0;     min-height: auto; width: 100%; background: #F1F1F1}
        footer .m-container {width: 100%;max-width: 1200px;margin: 0 auto;padding: 0 15px;     display: flex; justify-content: space-between; }
        footer .contact-details p {font-size: 16px;font-weight: 300;}
        footer .footer-right nav a {color: #333;}
        footer .m-container .footer-left .footer-info, footer .m-container .footer-left .company-license {width: 100%;}
        footer .m-container .footer-left {width: 35%;border-right: 1px solid #5B6E78;padding-top: 65px !important;padding-bottom: 30px;}
        footer .navbar-brand {      display: block;padding-top: .3125rem;padding-bottom: .3125rem;margin-right: 1rem;font-size: 1.25rem;line-height: inherit;white-space: nowrap;width: 100%;height: auto;float: none;padding-left: 0;}
        footer .navbar-brand img {width: 205px;height: 65px;}
        footer .m-container .footer-left .footer-info, footer .m-container .footer-left .company-license {width: 100%;}
        footer .footer-info .contact-details, footer .policies {padding: 10px 0;}
        footer ul {margin: 0;padding: 0;float: left;width: 100%;}
        footer .m-container .footer-left .policies a {padding-right: 20px;font-size: 14px;float: left;color: #808080;font-weight: 600;}
        footer .m-container .footer-left .company-license {text-align: justify;max-width: 350px;color: #808080;width: 100%;font-size: 14px;line-height: 24px;font-weight: 300;padding: 45px 0;float: left;margin-top: 0;margin-bottom: 1rem;}
        footer .company-license span {padding: 0px 0 10px;float: left;color: #808080;text-align: justify;width: 100%;line-height: 18px;font-size: 14px !important;font-weight: 300 !important;}
        footer .footer-left #copyright {width: 100%;font-size: 12px;font-weight: 300;margin-top: 20px;float: left;}
        footer .m-container .footer-right {width: 60%;margin-top: 60px;padding-left: 50px;}
        footer .m-container .footer-right nav {display: flex;justify-content: space-between;border-bottom: 1px solid #5B6E78;padding-bottom: 20px;width: 90%;position: relative;}
        footer .m-container .footer-menu li { line-height: 1.5 }
        footer .m-container .footer-menu li {padding: 10px 0;width: 100%;padding: 0;margin: 0;}
        footer .m-container .footer-menu li a {padding: 1px 0;line-height: 1.5; display: inline-block;}
        footer .m-container .footer-left .footer-info #contact-heading, footer .m-container .footer-left .policies a, footer .m-container .footer-menu li a, footer .m-container .footer-right article #disclosure, footer .m-container .footer-left .company-license, footer .footer-info .contact-details p, footer .policies p, footer .m-container .footer-right article #dev a, footer .m-container .footer-left #copyright {color: #808080;}
        footer .m-container .footer-menu li.menu-title a {font-weight: 500;font-size: 16px;color: #808080;}
        footer .m-container .footer-menu li.menu-title a {font-weight: 600;}
        footer .m-container .footer-right article p {font-size: 12px;line-height: 18px;font-weight: 400;color: gray;}
        footer .m-container .footer-right article p {font-size: 14px !important;font-weight: 300 !important;}
        footer .m-container .footer-right article #disclosure {font-size: 14px;line-height: 24px;font-weight: 300;color: #333;padding: 20px 0;margin: 0;text-align: justify;}
        #cookie-notice { display: none; }
        footer .m-container .footer-left .footer-info #contact-heading {   margin-bottom: 1rem;    font-size: 16px;   padding: 15px 0 0 0;  color: #808080; font-weight: 600; }
        footer .m-container .footer-menu li a:hover {color: #009cfc;}
        footer .m-container .footer-left .policies a:hover { color: #009cfc;}
        footer .m-container .footer-right article #dev a { display: none; }
        @media screen and (max-width: 991px){
            footer .m-container { display: block; }
            footer .m-container .footer-left{ width: 100% ; border: none;}
            footer .m-container .footer-right{ width: 100% ;  margin-top: 0;   padding-left: 0;}
        }

        @media screen and (max-width: 600px){
            
            footer ul { float: none; }
            footer .m-container .footer-right nav { display: block; width: 100% }
            footer .footer-left #copyright { float: none; }
            footer .m-container .footer-left .company-license { float: none; }
            footer .m-container .footer-left .policies a { float: none; }
            footer .company-license span {float: none; }
            footer .m-container .footer-left .company-license { padding: 0; max-width: 100% }
            footer .m-container .footer-menu li.menu-title a { padding-top: 25px; }
        }
        @media screen and (max-width:400px){
           .form-flex { width: 330px; }
        }
</style>
</body>
</html>




