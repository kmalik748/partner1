<?php   
        define('WP_USE_THEMES', true);
        define('ICL_LANGUAGE_CODE', 'pt-pt');
        require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
//        $sitepress->set_default_language('pt-pt');
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
                        <a class="logo" href="https://bkfx.io/pt-pt/"><img src="../images/bkfx_logo.svg" class="logo-pic img-fluid" alt=""></a>
                    </div>
                    <div class="float-right" style="display: inline-block; float: right; margin: 26px 108px 0px 0px !important;">
                        <div class="dropdown">
                            <a href="#" class="lan dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i><span>PT</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="../index.php"><img src="https://secure.bkfx.io/images/flags/gb.png">English</a></li>
                                <li><a href="../es"><img src="https://secure.bkfx.io/images/flags/es.png">Español</a></li>
                                <li><a href="../pt"><img src="https://secure.bkfx.io/images/flags/pt.png">Português</a></li>
                                <li><a href="../ko"><img src="https://secure.bkfx.io/images/flags/ko.png">한국어</a></li>
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
                        <strong>Sucesso!</strong> Enviamos a você as credenciais de login em seu e-mail registrado!<br>
                        <a href="https://secure.bkfx.io/login" class="btn btn-success">LOGIN</a>
                    </div>
                    <?php
                }
                if(isset($_GET["success"]) && $_GET["success"]=='false'){
                    ?>
                    <div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Erro!</strong> Por favor, verifique se você está usando um novo e-mail.
                    </div>
                    <?php
                }
                ?>

                <div class="form-flex">
                    <h3>Criação de conta de demonstração</h3>
                    <div class="tbs">
                        <ul class="nav nav-tabs">
<!--                            <li class="nav-item">-->
<!--                              <a class="nav-link active" data-toggle="tab" href="#home">Individual Client</a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                              <a class="nav-link" data-toggle="tab" href="#menu1">Corporate Client</a>-->
<!--                            </li>-->
                            <li class="nav-item active"><a class="nav-link" data-toggle="tab" href="#home">Rápida</a></li>
                            <li class="nav-item"><a  class="nav-link" data-toggle="tab" href="#menu1">Personalizada</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="home" class="tab-pane active">
                                <div class="frm-bx">
                                    <form method="get" action="../post.php">
                                        <input type="hidden" name="redirect" value="pt/index.php">
                                        <input type="hidden" name="IB" value="true">
                                        <input type="hidden" name="step1[clientType]" value="Individual">
                                        <input type="text" class="input" name="step1[firstName]" placeholder="Primeiro nome" required  oninvalid="this.setCustomValidity('Por favor, preencha este campo')" oninput="setCustomValidity('')">
                                        <input type="text" class="input" name="step1[lastName]" placeholder="Último nome" required  oninvalid="this.setCustomValidity('Por favor, preencha este campo')" oninput="setCustomValidity('')">
<!--                                        <input type="date" class="input" name="step1[birthDate]" placeholder="Data de nascimento" required  oninvalid="this.setCustomValidity('Por favor, preencha este campo')" oninput="setCustomValidity('')">-->

                                        <select class="form-group selectpicker countrypicker country_box dateinput select2 input"
                                                data-live-search="true" data-flag="false" name="step1[country]" id="country1" required>
                                            <option value="">País</option><option value="AF"  data-phone-prefix="+93">
                                                Afeganistão
                                            </option><option value="ZA"  data-phone-prefix="+27">
                                                África do Sul
                                            </option><option value="AL"  data-phone-prefix="+355">
                                                Albânia
                                            </option><option value="DE"  data-phone-prefix="+49">
                                                Alemanha
                                            </option><option value="AD"  data-phone-prefix="+376">
                                                Andorra
                                            </option><option value="AO"  data-phone-prefix="+244">
                                                Angola
                                            </option><option value="AI"  data-phone-prefix="+1">
                                                Anguila
                                            </option><option value="AQ"  data-phone-prefix="">
                                                Antártida
                                            </option><option value="AG"  data-phone-prefix="+1">
                                                Antígua e Barbuda
                                            </option><option value="SA"  data-phone-prefix="+966">
                                                Arábia Saudita
                                            </option><option value="DZ"  data-phone-prefix="+213">
                                                Argélia
                                            </option><option value="AR"  data-phone-prefix="+54">
                                                Argentina
                                            </option><option value="AM"  data-phone-prefix="+374">
                                                Armênia
                                            </option><option value="AW"  data-phone-prefix="+297">
                                                Aruba
                                            </option><option value="AU"  data-phone-prefix="+61">
                                                Austrália
                                            </option><option value="AT"  data-phone-prefix="+43">
                                                Áustria
                                            </option><option value="AZ"  data-phone-prefix="+994">
                                                Azerbaijão
                                            </option><option value="BS"  data-phone-prefix="+1">
                                                Bahamas
                                            </option><option value="BD"  data-phone-prefix="+880">
                                                Bangladesh
                                            </option><option value="BB"  data-phone-prefix="+1">
                                                Barbados
                                            </option><option value="BH"  data-phone-prefix="+973">
                                                Barein
                                            </option><option value="BE"  data-phone-prefix="+32">
                                                Bélgica
                                            </option><option value="BZ"  data-phone-prefix="+501">
                                                Belize
                                            </option><option value="BJ"  data-phone-prefix="+229">
                                                Benin
                                            </option><option value="BM"  data-phone-prefix="+1">
                                                Bermudas
                                            </option><option value="BY"  data-phone-prefix="+375">
                                                Bielorrússia
                                            </option><option value="BO"  data-phone-prefix="+591">
                                                Bolívia
                                            </option><option value="BA"  data-phone-prefix="+387">
                                                Bósnia e Herzegovina
                                            </option><option value="BW"  data-phone-prefix="+267">
                                                Botsuana
                                            </option><option value="BR"  data-phone-prefix="+55">
                                                Brasil
                                            </option><option value="BN"  data-phone-prefix="+673">
                                                Brunei
                                            </option><option value="BG"  data-phone-prefix="+359">
                                                Bulgária
                                            </option><option value="BF"  data-phone-prefix="+226">
                                                Burquina Faso
                                            </option><option value="BI"  data-phone-prefix="+257">
                                                Burundi
                                            </option><option value="BT"  data-phone-prefix="+975">
                                                Butão
                                            </option><option value="CV"  data-phone-prefix="+238">
                                                Cabo Verde
                                            </option><option value="CM"  data-phone-prefix="+237">
                                                Camarões
                                            </option><option value="KH"  data-phone-prefix="+855">
                                                Camboja
                                            </option><option value="CA"  data-phone-prefix="+1">
                                                Canadá
                                            </option><option value="QA"  data-phone-prefix="+974">
                                                Catar
                                            </option><option value="KZ"  data-phone-prefix="+7">
                                                Cazaquistão
                                            </option><option value="TD"  data-phone-prefix="+235">
                                                Chade
                                            </option><option value="CL"  data-phone-prefix="+56">
                                                Chile
                                            </option><option value="CN"  data-phone-prefix="+86">
                                                China
                                            </option><option value="CY"  data-phone-prefix="+357">
                                                Chipre
                                            </option><option value="VA"  data-phone-prefix="+39">
                                                Cidade do Vaticano
                                            </option><option value="CO"  data-phone-prefix="+57">
                                                Colômbia
                                            </option><option value="KM"  data-phone-prefix="+269">
                                                Comores
                                            </option><option value="CD"  data-phone-prefix="+243">
                                                Congo - Kinshasa
                                            </option><option value="KP"  data-phone-prefix="+850">
                                                Coreia do Norte
                                            </option><option value="KR"  data-phone-prefix="+82">
                                                Coreia do Sul
                                            </option><option value="CI"  data-phone-prefix="+225">
                                                Costa do Marfim
                                            </option><option value="CR"  data-phone-prefix="+506">
                                                Costa Rica
                                            </option><option value="HR"  data-phone-prefix="+385">
                                                Croácia
                                            </option><option value="CU"  data-phone-prefix="+53">
                                                Cuba
                                            </option><option value="CW"  data-phone-prefix="+599">
                                                Curaçao
                                            </option><option value="DK"  data-phone-prefix="+45">
                                                Dinamarca
                                            </option><option value="DJ"  data-phone-prefix="+253">
                                                Djibuti
                                            </option><option value="DM"  data-phone-prefix="+1">
                                                Dominica
                                            </option><option value="EG"  data-phone-prefix="+20">
                                                Egito
                                            </option><option value="SV"  data-phone-prefix="+503">
                                                El Salvador
                                            </option><option value="AE"  data-phone-prefix="+971">
                                                Emirados Árabes Unidos
                                            </option><option value="EC"  data-phone-prefix="+593">
                                                Equador
                                            </option><option value="ER"  data-phone-prefix="+291">
                                                Eritreia
                                            </option><option value="SK"  data-phone-prefix="+421">
                                                Eslováquia
                                            </option><option value="SI"  data-phone-prefix="+386">
                                                Eslovênia
                                            </option><option value="ES"  data-phone-prefix="+34">
                                                Espanha
                                            </option><option value="SZ"  data-phone-prefix="+268">
                                                Essuatíni
                                            </option><option value="US"  data-phone-prefix="+1">
                                                Estados Unidos
                                            </option><option value="EE"  data-phone-prefix="+372">
                                                Estônia
                                            </option><option value="ET"  data-phone-prefix="+251">
                                                Etiópia
                                            </option><option value="FJ"  data-phone-prefix="+679">
                                                Fiji
                                            </option><option value="PH"  data-phone-prefix="+63">
                                                Filipinas
                                            </option><option value="FI"  data-phone-prefix="+358">
                                                Finlândia
                                            </option><option value="FR"  data-phone-prefix="+33">
                                                França
                                            </option><option value="GA"  data-phone-prefix="+241">
                                                Gabão
                                            </option><option value="GM"  data-phone-prefix="+220">
                                                Gâmbia
                                            </option><option value="GH"  data-phone-prefix="+233">
                                                Gana
                                            </option><option value="GE"  data-phone-prefix="+995">
                                                Geórgia
                                            </option><option value="GI"  data-phone-prefix="+350">
                                                Gibraltar
                                            </option><option value="GD"  data-phone-prefix="+1">
                                                Granada
                                            </option><option value="GR"  data-phone-prefix="+30">
                                                Grécia
                                            </option><option value="GL"  data-phone-prefix="+299">
                                                Groenlândia
                                            </option><option value="GP"  data-phone-prefix="+590">
                                                Guadalupe
                                            </option><option value="GU"  data-phone-prefix="+1">
                                                Guam
                                            </option><option value="GT"  data-phone-prefix="+502">
                                                Guatemala
                                            </option><option value="GG"  data-phone-prefix="+44">
                                                Guernsey
                                            </option><option value="GY"  data-phone-prefix="+592">
                                                Guiana
                                            </option><option value="GF"  data-phone-prefix="+594">
                                                Guiana Francesa
                                            </option><option value="GN"  data-phone-prefix="+224">
                                                Guiné
                                            </option><option value="GQ"  data-phone-prefix="+240">
                                                Guiné Equatorial
                                            </option><option value="GW"  data-phone-prefix="+245">
                                                Guiné-Bissau
                                            </option><option value="HT"  data-phone-prefix="+509">
                                                Haiti
                                            </option><option value="HN"  data-phone-prefix="+504">
                                                Honduras
                                            </option><option value="HK"  data-phone-prefix="+852">
                                                Hong Kong, RAE da China
                                            </option><option value="HU"  data-phone-prefix="+36">
                                                Hungria
                                            </option><option value="YE"  data-phone-prefix="+967">
                                                Iêmen
                                            </option><option value="BV"  data-phone-prefix="">
                                                Ilha Bouvet
                                            </option><option value="CX"  data-phone-prefix="+61">
                                                Ilha Christmas
                                            </option><option value="IM"  data-phone-prefix="+44">
                                                Ilha de Man
                                            </option><option value="NF"  data-phone-prefix="+672">
                                                Ilha Norfolk
                                            </option><option value="AX"  data-phone-prefix="+358">
                                                Ilhas Aland
                                            </option><option value="KY"  data-phone-prefix="+1">
                                                Ilhas Cayman
                                            </option><option value="CC"  data-phone-prefix="+61">
                                                Ilhas Cocos (Keeling)
                                            </option><option value="CK"  data-phone-prefix="+682">
                                                Ilhas Cook
                                            </option><option value="FO"  data-phone-prefix="+298">
                                                Ilhas Faroé
                                            </option><option value="GS"  data-phone-prefix="">
                                                Ilhas Geórgia do Sul e Sandwich do Sul
                                            </option><option value="HM"  data-phone-prefix="">
                                                Ilhas Heard e McDonald
                                            </option><option value="FK"  data-phone-prefix="+500">
                                                Ilhas Malvinas
                                            </option><option value="MP"  data-phone-prefix="+1">
                                                Ilhas Marianas do Norte
                                            </option><option value="MH"  data-phone-prefix="+692">
                                                Ilhas Marshall
                                            </option><option value="UM"  data-phone-prefix="">
                                                Ilhas Menores Distantes dos EUA
                                            </option><option value="PN"  data-phone-prefix="">
                                                Ilhas Pitcairn
                                            </option><option value="SB"  data-phone-prefix="+677">
                                                Ilhas Salomão
                                            </option><option value="TC"  data-phone-prefix="+1">
                                                Ilhas Turcas e Caicos
                                            </option><option value="VI"  data-phone-prefix="+1">
                                                Ilhas Virgens Americanas
                                            </option><option value="VG"  data-phone-prefix="+1">
                                                Ilhas Virgens Britânicas
                                            </option><option value="IN"  data-phone-prefix="+91">
                                                Índia
                                            </option><option value="ID"  data-phone-prefix="+62">
                                                Indonésia
                                            </option><option value="IR"  data-phone-prefix="+98">
                                                Irã
                                            </option><option value="IQ"  data-phone-prefix="+964">
                                                Iraque
                                            </option><option value="IE"  data-phone-prefix="+353">
                                                Irlanda
                                            </option><option value="IS"  data-phone-prefix="+354">
                                                Islândia
                                            </option><option value="IL"  data-phone-prefix="+972">
                                                Israel
                                            </option><option value="IT"  data-phone-prefix="+39">
                                                Itália
                                            </option><option value="JM"  data-phone-prefix="+1">
                                                Jamaica
                                            </option><option value="JP"  data-phone-prefix="+81">
                                                Japão
                                            </option><option value="JE"  data-phone-prefix="+44">
                                                Jersey
                                            </option><option value="JO"  data-phone-prefix="+962">
                                                Jordânia
                                            </option><option value="KW"  data-phone-prefix="+965">
                                                Kuwait
                                            </option><option value="LA"  data-phone-prefix="+856">
                                                Laos
                                            </option><option value="LS"  data-phone-prefix="+266">
                                                Lesoto
                                            </option><option value="LV"  data-phone-prefix="+371">
                                                Letônia
                                            </option><option value="LB"  data-phone-prefix="+961">
                                                Líbano
                                            </option><option value="LR"  data-phone-prefix="+231">
                                                Libéria
                                            </option><option value="LY"  data-phone-prefix="+218">
                                                Líbia
                                            </option><option value="LI"  data-phone-prefix="+423">
                                                Liechtenstein
                                            </option><option value="LT"  data-phone-prefix="+370">
                                                Lituânia
                                            </option><option value="LU"  data-phone-prefix="+352">
                                                Luxemburgo
                                            </option><option value="MO"  data-phone-prefix="+853">
                                                Macau, RAE da China
                                            </option><option value="MK"  data-phone-prefix="+389">
                                                Macedônia do Norte
                                            </option><option value="MG"  data-phone-prefix="+261">
                                                Madagascar
                                            </option><option value="MY"  data-phone-prefix="+60">
                                                Malásia
                                            </option><option value="MW"  data-phone-prefix="+265">
                                                Malaui
                                            </option><option value="MV"  data-phone-prefix="+960">
                                                Maldivas
                                            </option><option value="ML"  data-phone-prefix="+223">
                                                Mali
                                            </option><option value="MT"  data-phone-prefix="+356">
                                                Malta
                                            </option><option value="MA"  data-phone-prefix="+212">
                                                Marrocos
                                            </option><option value="MQ"  data-phone-prefix="+596">
                                                Martinica
                                            </option><option value="MU"  data-phone-prefix="+230">
                                                Maurício
                                            </option><option value="MR"  data-phone-prefix="+222">
                                                Mauritânia
                                            </option><option value="YT"  data-phone-prefix="+262">
                                                Mayotte
                                            </option><option value="MX"  data-phone-prefix="+52">
                                                México
                                            </option><option value="MM"  data-phone-prefix="+95">
                                                Mianmar (Birmânia)
                                            </option><option value="FM"  data-phone-prefix="+691">
                                                Micronésia
                                            </option><option value="MZ"  data-phone-prefix="+258">
                                                Moçambique
                                            </option><option value="MD"  data-phone-prefix="+373">
                                                Moldávia
                                            </option><option value="MC"  data-phone-prefix="+377">
                                                Mônaco
                                            </option><option value="MN"  data-phone-prefix="+976">
                                                Mongólia
                                            </option><option value="ME"  data-phone-prefix="+382">
                                                Montenegro
                                            </option><option value="MS"  data-phone-prefix="+1">
                                                Montserrat
                                            </option><option value="NA"  data-phone-prefix="+264">
                                                Namíbia
                                            </option><option value="NR"  data-phone-prefix="+674">
                                                Nauru
                                            </option><option value="NP"  data-phone-prefix="+977">
                                                Nepal
                                            </option><option value="NI"  data-phone-prefix="+505">
                                                Nicarágua
                                            </option><option value="NE"  data-phone-prefix="+227">
                                                Níger
                                            </option><option value="NG"  data-phone-prefix="+234">
                                                Nigéria
                                            </option><option value="NU"  data-phone-prefix="+683">
                                                Niue
                                            </option><option value="NO"  data-phone-prefix="+47">
                                                Noruega
                                            </option><option value="NC"  data-phone-prefix="+687">
                                                Nova Caledônia
                                            </option><option value="NZ"  data-phone-prefix="+64">
                                                Nova Zelândia
                                            </option><option value="OM"  data-phone-prefix="+968">
                                                Omã
                                            </option><option value="NL"  data-phone-prefix="+31">
                                                Países Baixos
                                            </option><option value="BQ"  data-phone-prefix="+599">
                                                Países Baixos Caribenhos
                                            </option><option value="PW"  data-phone-prefix="+680">
                                                Palau
                                            </option><option value="PA"  data-phone-prefix="+507">
                                                Panamá
                                            </option><option value="PG"  data-phone-prefix="+675">
                                                Papua-Nova Guiné
                                            </option><option value="PK"  data-phone-prefix="+92">
                                                Paquistão
                                            </option><option value="PY"  data-phone-prefix="+595">
                                                Paraguai
                                            </option><option value="PE"  data-phone-prefix="+51">
                                                Peru
                                            </option><option value="PF"  data-phone-prefix="+689">
                                                Polinésia Francesa
                                            </option><option value="PL"  data-phone-prefix="+48">
                                                Polônia
                                            </option><option value="PR"  data-phone-prefix="+1">
                                                Porto Rico
                                            </option><option value="PT"  data-phone-prefix="+351">
                                                Portugal
                                            </option><option value="KE"  data-phone-prefix="+254">
                                                Quênia
                                            </option><option value="KG"  data-phone-prefix="+996">
                                                Quirguistão
                                            </option><option value="KI"  data-phone-prefix="+686">
                                                Quiribati
                                            </option><option value="GB"  data-phone-prefix="+44">
                                                Reino Unido
                                            </option><option value="CF"  data-phone-prefix="+236">
                                                República Centro-Africana
                                            </option><option value="CG"  data-phone-prefix="+242">
                                                República do Congo
                                            </option><option value="DO"  data-phone-prefix="+1">
                                                República Dominicana
                                            </option><option value="RE"  data-phone-prefix="+262">
                                                Reunião
                                            </option><option value="RO"  data-phone-prefix="+40">
                                                Romênia
                                            </option><option value="RW"  data-phone-prefix="+250">
                                                Ruanda
                                            </option><option value="RU"  data-phone-prefix="+7">
                                                Rússia
                                            </option><option value="EH"  data-phone-prefix="+212">
                                                Saara Ocidental
                                            </option><option value="WS"  data-phone-prefix="+685">
                                                Samoa
                                            </option><option value="AS"  data-phone-prefix="+1">
                                                Samoa Americana
                                            </option><option value="SM"  data-phone-prefix="+378">
                                                San Marino
                                            </option><option value="SH"  data-phone-prefix="+290">
                                                Santa Helena
                                            </option><option value="LC"  data-phone-prefix="+1">
                                                Santa Lúcia
                                            </option><option value="BL"  data-phone-prefix="+590">
                                                São Bartolomeu
                                            </option><option value="KN"  data-phone-prefix="+1">
                                                São Cristóvão e Névis
                                            </option><option value="MF"  data-phone-prefix="+590">
                                                São Martinho
                                            </option><option value="PM"  data-phone-prefix="+508">
                                                São Pedro e Miquelão
                                            </option><option value="ST"  data-phone-prefix="+239">
                                                São Tomé e Príncipe
                                            </option><option value="VC"  data-phone-prefix="+1">
                                                São Vicente e Granadinas
                                            </option><option value="SC"  data-phone-prefix="+248">
                                                Seicheles
                                            </option><option value="SN"  data-phone-prefix="+221">
                                                Senegal
                                            </option><option value="SL"  data-phone-prefix="+232">
                                                Serra Leoa
                                            </option><option value="RS"  data-phone-prefix="+381">
                                                Sérvia
                                            </option><option value="SG"  data-phone-prefix="+65">
                                                Singapura
                                            </option><option value="SX"  data-phone-prefix="+1">
                                                Sint Maarten
                                            </option><option value="SY"  data-phone-prefix="+963">
                                                Síria
                                            </option><option value="SO"  data-phone-prefix="+252">
                                                Somália
                                            </option><option value="LK"  data-phone-prefix="+94">
                                                Sri Lanka
                                            </option><option value="SD"  data-phone-prefix="+249">
                                                Sudão
                                            </option><option value="SS"  data-phone-prefix="+211">
                                                Sudão do Sul
                                            </option><option value="SE"  data-phone-prefix="+46">
                                                Suécia
                                            </option><option value="CH"  data-phone-prefix="+41">
                                                Suíça
                                            </option><option value="SR"  data-phone-prefix="+597">
                                                Suriname
                                            </option><option value="SJ"  data-phone-prefix="+47">
                                                Svalbard e Jan Mayen
                                            </option><option value="TJ"  data-phone-prefix="+992">
                                                Tadjiquistão
                                            </option><option value="TH"  data-phone-prefix="+66">
                                                Tailândia
                                            </option><option value="TW"  data-phone-prefix="+886">
                                                Taiwan
                                            </option><option value="TZ"  data-phone-prefix="+255">
                                                Tanzânia
                                            </option><option value="CZ"  data-phone-prefix="+420">
                                                Tchéquia
                                            </option><option value="IO"  data-phone-prefix="+246">
                                                Território Britânico do Oceano Índico
                                            </option><option value="TF"  data-phone-prefix="">
                                                Territórios Franceses do Sul
                                            </option><option value="PS"  data-phone-prefix="+970">
                                                Territórios palestinos
                                            </option><option value="TL"  data-phone-prefix="+670">
                                                Timor-Leste
                                            </option><option value="TG"  data-phone-prefix="+228">
                                                Togo
                                            </option><option value="TK"  data-phone-prefix="+690">
                                                Tokelau
                                            </option><option value="TO"  data-phone-prefix="+676">
                                                Tonga
                                            </option><option value="TT"  data-phone-prefix="+1">
                                                Trinidad e Tobago
                                            </option><option value="TN"  data-phone-prefix="+216">
                                                Tunísia
                                            </option><option value="TM"  data-phone-prefix="+993">
                                                Turcomenistão
                                            </option><option value="TR"  data-phone-prefix="+90">
                                                Turquia
                                            </option><option value="TV"  data-phone-prefix="+688">
                                                Tuvalu
                                            </option><option value="UA"  data-phone-prefix="+380">
                                                Ucrânia
                                            </option><option value="UG"  data-phone-prefix="+256">
                                                Uganda
                                            </option><option value="UY"  data-phone-prefix="+598">
                                                Uruguai
                                            </option><option value="UZ"  data-phone-prefix="+998">
                                                Uzbequistão
                                            </option><option value="VU"  data-phone-prefix="+678">
                                                Vanuatu
                                            </option><option value="VE"  data-phone-prefix="+58">
                                                Venezuela
                                            </option><option value="VN"  data-phone-prefix="+84">
                                                Vietnã
                                            </option><option value="WF"  data-phone-prefix="+681">
                                                Wallis e Futuna
                                            </option><option value="ZM"  data-phone-prefix="+260">
                                                Zâmbia
                                            </option><option value="ZW"  data-phone-prefix="+263">
                                                Zimbábue
                                            </option>
                                        </select>
                                        <input pattern="^[+][0-9]{5,}$" title="+[código do prefixo do país][seguido pelo número do telefone]" style="margin-top: 6px;" type="text" class="input" name="step1[phone]" id="phone1" placeholder="Número de telefone" required>
                                        <input type="email" class="input" name="step1[email]" placeholder="Email" required>
<!--                                        <select class="form-group selectpicker countrypicker country_box dateinput"-->
<!--                                                data-live-search="true" data-default="South Africa"-->
<!--                                                data-flag="false" name="step1[country]">-->
<!--                                        </select>-->
                                        <div class="check">
                                            <input class="chkbx" type="checkbox" id="accept" name="step1[document_group_1]" required  oninvalid="this.setCustomValidity('Por favor, preencha este campo')" oninput="setCustomValidity('')">
                                            <label for="accept">
                                                <p>
                                                    Eu aceito as <a href="https://bkfx.io/pt-pt/legal-documents/" target="_blank">Políticas e Termos e Condições de BKFX</a>
                                                </p>
                                            </label>
                                        </div>
                                        <input class="btnNew" type="submit" name="submit_1" value="Continuar">
                                    </form>
                                </div>
                                
                            </div>
                            <div id="menu1" class="tab-pane">
                                <div class="frm-bx">
                                    <form method="get" action="../post1.php">
                                        <input type="hidden" name="redirect" value="pt/index.php">
                                        <input type="hidden" name="IB" value="true">
                                        <input type="hidden" name="step1[clientType]" value="Corporate">
                                        <input type="text" class="input" name="step1[firstName]" placeholder="Primeiro nome" required  oninvalid="this.setCustomValidity('Por favor, preencha este campo')" oninput="setCustomValidity('')">
                                        <input type="text" class="input" name="step1[lastName]" placeholder="Último nome" required  oninvalid="this.setCustomValidity('Por favor, preencha este campo')" oninput="setCustomValidity('')">
                                        <select class="form-group selectpicker countrypicker country_box dateinput select3 input"
                                                data-live-search="true" data-flag="false" name="step1[country]" id="country2" required>
                                            <option value="">País</option><option value="AF"  data-phone-prefix="+93">
                                                Afeganistão
                                            </option><option value="ZA"  data-phone-prefix="+27">
                                                África do Sul
                                            </option><option value="AL"  data-phone-prefix="+355">
                                                Albânia
                                            </option><option value="DE"  data-phone-prefix="+49">
                                                Alemanha
                                            </option><option value="AD"  data-phone-prefix="+376">
                                                Andorra
                                            </option><option value="AO"  data-phone-prefix="+244">
                                                Angola
                                            </option><option value="AI"  data-phone-prefix="+1">
                                                Anguila
                                            </option><option value="AQ"  data-phone-prefix="">
                                                Antártida
                                            </option><option value="AG"  data-phone-prefix="+1">
                                                Antígua e Barbuda
                                            </option><option value="SA"  data-phone-prefix="+966">
                                                Arábia Saudita
                                            </option><option value="DZ"  data-phone-prefix="+213">
                                                Argélia
                                            </option><option value="AR"  data-phone-prefix="+54">
                                                Argentina
                                            </option><option value="AM"  data-phone-prefix="+374">
                                                Armênia
                                            </option><option value="AW"  data-phone-prefix="+297">
                                                Aruba
                                            </option><option value="AU"  data-phone-prefix="+61">
                                                Austrália
                                            </option><option value="AT"  data-phone-prefix="+43">
                                                Áustria
                                            </option><option value="AZ"  data-phone-prefix="+994">
                                                Azerbaijão
                                            </option><option value="BS"  data-phone-prefix="+1">
                                                Bahamas
                                            </option><option value="BD"  data-phone-prefix="+880">
                                                Bangladesh
                                            </option><option value="BB"  data-phone-prefix="+1">
                                                Barbados
                                            </option><option value="BH"  data-phone-prefix="+973">
                                                Barein
                                            </option><option value="BE"  data-phone-prefix="+32">
                                                Bélgica
                                            </option><option value="BZ"  data-phone-prefix="+501">
                                                Belize
                                            </option><option value="BJ"  data-phone-prefix="+229">
                                                Benin
                                            </option><option value="BM"  data-phone-prefix="+1">
                                                Bermudas
                                            </option><option value="BY"  data-phone-prefix="+375">
                                                Bielorrússia
                                            </option><option value="BO"  data-phone-prefix="+591">
                                                Bolívia
                                            </option><option value="BA"  data-phone-prefix="+387">
                                                Bósnia e Herzegovina
                                            </option><option value="BW"  data-phone-prefix="+267">
                                                Botsuana
                                            </option><option value="BR"  data-phone-prefix="+55">
                                                Brasil
                                            </option><option value="BN"  data-phone-prefix="+673">
                                                Brunei
                                            </option><option value="BG"  data-phone-prefix="+359">
                                                Bulgária
                                            </option><option value="BF"  data-phone-prefix="+226">
                                                Burquina Faso
                                            </option><option value="BI"  data-phone-prefix="+257">
                                                Burundi
                                            </option><option value="BT"  data-phone-prefix="+975">
                                                Butão
                                            </option><option value="CV"  data-phone-prefix="+238">
                                                Cabo Verde
                                            </option><option value="CM"  data-phone-prefix="+237">
                                                Camarões
                                            </option><option value="KH"  data-phone-prefix="+855">
                                                Camboja
                                            </option><option value="CA"  data-phone-prefix="+1">
                                                Canadá
                                            </option><option value="QA"  data-phone-prefix="+974">
                                                Catar
                                            </option><option value="KZ"  data-phone-prefix="+7">
                                                Cazaquistão
                                            </option><option value="TD"  data-phone-prefix="+235">
                                                Chade
                                            </option><option value="CL"  data-phone-prefix="+56">
                                                Chile
                                            </option><option value="CN"  data-phone-prefix="+86">
                                                China
                                            </option><option value="CY"  data-phone-prefix="+357">
                                                Chipre
                                            </option><option value="VA"  data-phone-prefix="+39">
                                                Cidade do Vaticano
                                            </option><option value="CO"  data-phone-prefix="+57">
                                                Colômbia
                                            </option><option value="KM"  data-phone-prefix="+269">
                                                Comores
                                            </option><option value="CD"  data-phone-prefix="+243">
                                                Congo - Kinshasa
                                            </option><option value="KP"  data-phone-prefix="+850">
                                                Coreia do Norte
                                            </option><option value="KR"  data-phone-prefix="+82">
                                                Coreia do Sul
                                            </option><option value="CI"  data-phone-prefix="+225">
                                                Costa do Marfim
                                            </option><option value="CR"  data-phone-prefix="+506">
                                                Costa Rica
                                            </option><option value="HR"  data-phone-prefix="+385">
                                                Croácia
                                            </option><option value="CU"  data-phone-prefix="+53">
                                                Cuba
                                            </option><option value="CW"  data-phone-prefix="+599">
                                                Curaçao
                                            </option><option value="DK"  data-phone-prefix="+45">
                                                Dinamarca
                                            </option><option value="DJ"  data-phone-prefix="+253">
                                                Djibuti
                                            </option><option value="DM"  data-phone-prefix="+1">
                                                Dominica
                                            </option><option value="EG"  data-phone-prefix="+20">
                                                Egito
                                            </option><option value="SV"  data-phone-prefix="+503">
                                                El Salvador
                                            </option><option value="AE"  data-phone-prefix="+971">
                                                Emirados Árabes Unidos
                                            </option><option value="EC"  data-phone-prefix="+593">
                                                Equador
                                            </option><option value="ER"  data-phone-prefix="+291">
                                                Eritreia
                                            </option><option value="SK"  data-phone-prefix="+421">
                                                Eslováquia
                                            </option><option value="SI"  data-phone-prefix="+386">
                                                Eslovênia
                                            </option><option value="ES"  data-phone-prefix="+34">
                                                Espanha
                                            </option><option value="SZ"  data-phone-prefix="+268">
                                                Essuatíni
                                            </option><option value="US"  data-phone-prefix="+1">
                                                Estados Unidos
                                            </option><option value="EE"  data-phone-prefix="+372">
                                                Estônia
                                            </option><option value="ET"  data-phone-prefix="+251">
                                                Etiópia
                                            </option><option value="FJ"  data-phone-prefix="+679">
                                                Fiji
                                            </option><option value="PH"  data-phone-prefix="+63">
                                                Filipinas
                                            </option><option value="FI"  data-phone-prefix="+358">
                                                Finlândia
                                            </option><option value="FR"  data-phone-prefix="+33">
                                                França
                                            </option><option value="GA"  data-phone-prefix="+241">
                                                Gabão
                                            </option><option value="GM"  data-phone-prefix="+220">
                                                Gâmbia
                                            </option><option value="GH"  data-phone-prefix="+233">
                                                Gana
                                            </option><option value="GE"  data-phone-prefix="+995">
                                                Geórgia
                                            </option><option value="GI"  data-phone-prefix="+350">
                                                Gibraltar
                                            </option><option value="GD"  data-phone-prefix="+1">
                                                Granada
                                            </option><option value="GR"  data-phone-prefix="+30">
                                                Grécia
                                            </option><option value="GL"  data-phone-prefix="+299">
                                                Groenlândia
                                            </option><option value="GP"  data-phone-prefix="+590">
                                                Guadalupe
                                            </option><option value="GU"  data-phone-prefix="+1">
                                                Guam
                                            </option><option value="GT"  data-phone-prefix="+502">
                                                Guatemala
                                            </option><option value="GG"  data-phone-prefix="+44">
                                                Guernsey
                                            </option><option value="GY"  data-phone-prefix="+592">
                                                Guiana
                                            </option><option value="GF"  data-phone-prefix="+594">
                                                Guiana Francesa
                                            </option><option value="GN"  data-phone-prefix="+224">
                                                Guiné
                                            </option><option value="GQ"  data-phone-prefix="+240">
                                                Guiné Equatorial
                                            </option><option value="GW"  data-phone-prefix="+245">
                                                Guiné-Bissau
                                            </option><option value="HT"  data-phone-prefix="+509">
                                                Haiti
                                            </option><option value="HN"  data-phone-prefix="+504">
                                                Honduras
                                            </option><option value="HK"  data-phone-prefix="+852">
                                                Hong Kong, RAE da China
                                            </option><option value="HU"  data-phone-prefix="+36">
                                                Hungria
                                            </option><option value="YE"  data-phone-prefix="+967">
                                                Iêmen
                                            </option><option value="BV"  data-phone-prefix="">
                                                Ilha Bouvet
                                            </option><option value="CX"  data-phone-prefix="+61">
                                                Ilha Christmas
                                            </option><option value="IM"  data-phone-prefix="+44">
                                                Ilha de Man
                                            </option><option value="NF"  data-phone-prefix="+672">
                                                Ilha Norfolk
                                            </option><option value="AX"  data-phone-prefix="+358">
                                                Ilhas Aland
                                            </option><option value="KY"  data-phone-prefix="+1">
                                                Ilhas Cayman
                                            </option><option value="CC"  data-phone-prefix="+61">
                                                Ilhas Cocos (Keeling)
                                            </option><option value="CK"  data-phone-prefix="+682">
                                                Ilhas Cook
                                            </option><option value="FO"  data-phone-prefix="+298">
                                                Ilhas Faroé
                                            </option><option value="GS"  data-phone-prefix="">
                                                Ilhas Geórgia do Sul e Sandwich do Sul
                                            </option><option value="HM"  data-phone-prefix="">
                                                Ilhas Heard e McDonald
                                            </option><option value="FK"  data-phone-prefix="+500">
                                                Ilhas Malvinas
                                            </option><option value="MP"  data-phone-prefix="+1">
                                                Ilhas Marianas do Norte
                                            </option><option value="MH"  data-phone-prefix="+692">
                                                Ilhas Marshall
                                            </option><option value="UM"  data-phone-prefix="">
                                                Ilhas Menores Distantes dos EUA
                                            </option><option value="PN"  data-phone-prefix="">
                                                Ilhas Pitcairn
                                            </option><option value="SB"  data-phone-prefix="+677">
                                                Ilhas Salomão
                                            </option><option value="TC"  data-phone-prefix="+1">
                                                Ilhas Turcas e Caicos
                                            </option><option value="VI"  data-phone-prefix="+1">
                                                Ilhas Virgens Americanas
                                            </option><option value="VG"  data-phone-prefix="+1">
                                                Ilhas Virgens Britânicas
                                            </option><option value="IN"  data-phone-prefix="+91">
                                                Índia
                                            </option><option value="ID"  data-phone-prefix="+62">
                                                Indonésia
                                            </option><option value="IR"  data-phone-prefix="+98">
                                                Irã
                                            </option><option value="IQ"  data-phone-prefix="+964">
                                                Iraque
                                            </option><option value="IE"  data-phone-prefix="+353">
                                                Irlanda
                                            </option><option value="IS"  data-phone-prefix="+354">
                                                Islândia
                                            </option><option value="IL"  data-phone-prefix="+972">
                                                Israel
                                            </option><option value="IT"  data-phone-prefix="+39">
                                                Itália
                                            </option><option value="JM"  data-phone-prefix="+1">
                                                Jamaica
                                            </option><option value="JP"  data-phone-prefix="+81">
                                                Japão
                                            </option><option value="JE"  data-phone-prefix="+44">
                                                Jersey
                                            </option><option value="JO"  data-phone-prefix="+962">
                                                Jordânia
                                            </option><option value="KW"  data-phone-prefix="+965">
                                                Kuwait
                                            </option><option value="LA"  data-phone-prefix="+856">
                                                Laos
                                            </option><option value="LS"  data-phone-prefix="+266">
                                                Lesoto
                                            </option><option value="LV"  data-phone-prefix="+371">
                                                Letônia
                                            </option><option value="LB"  data-phone-prefix="+961">
                                                Líbano
                                            </option><option value="LR"  data-phone-prefix="+231">
                                                Libéria
                                            </option><option value="LY"  data-phone-prefix="+218">
                                                Líbia
                                            </option><option value="LI"  data-phone-prefix="+423">
                                                Liechtenstein
                                            </option><option value="LT"  data-phone-prefix="+370">
                                                Lituânia
                                            </option><option value="LU"  data-phone-prefix="+352">
                                                Luxemburgo
                                            </option><option value="MO"  data-phone-prefix="+853">
                                                Macau, RAE da China
                                            </option><option value="MK"  data-phone-prefix="+389">
                                                Macedônia do Norte
                                            </option><option value="MG"  data-phone-prefix="+261">
                                                Madagascar
                                            </option><option value="MY"  data-phone-prefix="+60">
                                                Malásia
                                            </option><option value="MW"  data-phone-prefix="+265">
                                                Malaui
                                            </option><option value="MV"  data-phone-prefix="+960">
                                                Maldivas
                                            </option><option value="ML"  data-phone-prefix="+223">
                                                Mali
                                            </option><option value="MT"  data-phone-prefix="+356">
                                                Malta
                                            </option><option value="MA"  data-phone-prefix="+212">
                                                Marrocos
                                            </option><option value="MQ"  data-phone-prefix="+596">
                                                Martinica
                                            </option><option value="MU"  data-phone-prefix="+230">
                                                Maurício
                                            </option><option value="MR"  data-phone-prefix="+222">
                                                Mauritânia
                                            </option><option value="YT"  data-phone-prefix="+262">
                                                Mayotte
                                            </option><option value="MX"  data-phone-prefix="+52">
                                                México
                                            </option><option value="MM"  data-phone-prefix="+95">
                                                Mianmar (Birmânia)
                                            </option><option value="FM"  data-phone-prefix="+691">
                                                Micronésia
                                            </option><option value="MZ"  data-phone-prefix="+258">
                                                Moçambique
                                            </option><option value="MD"  data-phone-prefix="+373">
                                                Moldávia
                                            </option><option value="MC"  data-phone-prefix="+377">
                                                Mônaco
                                            </option><option value="MN"  data-phone-prefix="+976">
                                                Mongólia
                                            </option><option value="ME"  data-phone-prefix="+382">
                                                Montenegro
                                            </option><option value="MS"  data-phone-prefix="+1">
                                                Montserrat
                                            </option><option value="NA"  data-phone-prefix="+264">
                                                Namíbia
                                            </option><option value="NR"  data-phone-prefix="+674">
                                                Nauru
                                            </option><option value="NP"  data-phone-prefix="+977">
                                                Nepal
                                            </option><option value="NI"  data-phone-prefix="+505">
                                                Nicarágua
                                            </option><option value="NE"  data-phone-prefix="+227">
                                                Níger
                                            </option><option value="NG"  data-phone-prefix="+234">
                                                Nigéria
                                            </option><option value="NU"  data-phone-prefix="+683">
                                                Niue
                                            </option><option value="NO"  data-phone-prefix="+47">
                                                Noruega
                                            </option><option value="NC"  data-phone-prefix="+687">
                                                Nova Caledônia
                                            </option><option value="NZ"  data-phone-prefix="+64">
                                                Nova Zelândia
                                            </option><option value="OM"  data-phone-prefix="+968">
                                                Omã
                                            </option><option value="NL"  data-phone-prefix="+31">
                                                Países Baixos
                                            </option><option value="BQ"  data-phone-prefix="+599">
                                                Países Baixos Caribenhos
                                            </option><option value="PW"  data-phone-prefix="+680">
                                                Palau
                                            </option><option value="PA"  data-phone-prefix="+507">
                                                Panamá
                                            </option><option value="PG"  data-phone-prefix="+675">
                                                Papua-Nova Guiné
                                            </option><option value="PK"  data-phone-prefix="+92">
                                                Paquistão
                                            </option><option value="PY"  data-phone-prefix="+595">
                                                Paraguai
                                            </option><option value="PE"  data-phone-prefix="+51">
                                                Peru
                                            </option><option value="PF"  data-phone-prefix="+689">
                                                Polinésia Francesa
                                            </option><option value="PL"  data-phone-prefix="+48">
                                                Polônia
                                            </option><option value="PR"  data-phone-prefix="+1">
                                                Porto Rico
                                            </option><option value="PT"  data-phone-prefix="+351">
                                                Portugal
                                            </option><option value="KE"  data-phone-prefix="+254">
                                                Quênia
                                            </option><option value="KG"  data-phone-prefix="+996">
                                                Quirguistão
                                            </option><option value="KI"  data-phone-prefix="+686">
                                                Quiribati
                                            </option><option value="GB"  data-phone-prefix="+44">
                                                Reino Unido
                                            </option><option value="CF"  data-phone-prefix="+236">
                                                República Centro-Africana
                                            </option><option value="CG"  data-phone-prefix="+242">
                                                República do Congo
                                            </option><option value="DO"  data-phone-prefix="+1">
                                                República Dominicana
                                            </option><option value="RE"  data-phone-prefix="+262">
                                                Reunião
                                            </option><option value="RO"  data-phone-prefix="+40">
                                                Romênia
                                            </option><option value="RW"  data-phone-prefix="+250">
                                                Ruanda
                                            </option><option value="RU"  data-phone-prefix="+7">
                                                Rússia
                                            </option><option value="EH"  data-phone-prefix="+212">
                                                Saara Ocidental
                                            </option><option value="WS"  data-phone-prefix="+685">
                                                Samoa
                                            </option><option value="AS"  data-phone-prefix="+1">
                                                Samoa Americana
                                            </option><option value="SM"  data-phone-prefix="+378">
                                                San Marino
                                            </option><option value="SH"  data-phone-prefix="+290">
                                                Santa Helena
                                            </option><option value="LC"  data-phone-prefix="+1">
                                                Santa Lúcia
                                            </option><option value="BL"  data-phone-prefix="+590">
                                                São Bartolomeu
                                            </option><option value="KN"  data-phone-prefix="+1">
                                                São Cristóvão e Névis
                                            </option><option value="MF"  data-phone-prefix="+590">
                                                São Martinho
                                            </option><option value="PM"  data-phone-prefix="+508">
                                                São Pedro e Miquelão
                                            </option><option value="ST"  data-phone-prefix="+239">
                                                São Tomé e Príncipe
                                            </option><option value="VC"  data-phone-prefix="+1">
                                                São Vicente e Granadinas
                                            </option><option value="SC"  data-phone-prefix="+248">
                                                Seicheles
                                            </option><option value="SN"  data-phone-prefix="+221">
                                                Senegal
                                            </option><option value="SL"  data-phone-prefix="+232">
                                                Serra Leoa
                                            </option><option value="RS"  data-phone-prefix="+381">
                                                Sérvia
                                            </option><option value="SG"  data-phone-prefix="+65">
                                                Singapura
                                            </option><option value="SX"  data-phone-prefix="+1">
                                                Sint Maarten
                                            </option><option value="SY"  data-phone-prefix="+963">
                                                Síria
                                            </option><option value="SO"  data-phone-prefix="+252">
                                                Somália
                                            </option><option value="LK"  data-phone-prefix="+94">
                                                Sri Lanka
                                            </option><option value="SD"  data-phone-prefix="+249">
                                                Sudão
                                            </option><option value="SS"  data-phone-prefix="+211">
                                                Sudão do Sul
                                            </option><option value="SE"  data-phone-prefix="+46">
                                                Suécia
                                            </option><option value="CH"  data-phone-prefix="+41">
                                                Suíça
                                            </option><option value="SR"  data-phone-prefix="+597">
                                                Suriname
                                            </option><option value="SJ"  data-phone-prefix="+47">
                                                Svalbard e Jan Mayen
                                            </option><option value="TJ"  data-phone-prefix="+992">
                                                Tadjiquistão
                                            </option><option value="TH"  data-phone-prefix="+66">
                                                Tailândia
                                            </option><option value="TW"  data-phone-prefix="+886">
                                                Taiwan
                                            </option><option value="TZ"  data-phone-prefix="+255">
                                                Tanzânia
                                            </option><option value="CZ"  data-phone-prefix="+420">
                                                Tchéquia
                                            </option><option value="IO"  data-phone-prefix="+246">
                                                Território Britânico do Oceano Índico
                                            </option><option value="TF"  data-phone-prefix="">
                                                Territórios Franceses do Sul
                                            </option><option value="PS"  data-phone-prefix="+970">
                                                Territórios palestinos
                                            </option><option value="TL"  data-phone-prefix="+670">
                                                Timor-Leste
                                            </option><option value="TG"  data-phone-prefix="+228">
                                                Togo
                                            </option><option value="TK"  data-phone-prefix="+690">
                                                Tokelau
                                            </option><option value="TO"  data-phone-prefix="+676">
                                                Tonga
                                            </option><option value="TT"  data-phone-prefix="+1">
                                                Trinidad e Tobago
                                            </option><option value="TN"  data-phone-prefix="+216">
                                                Tunísia
                                            </option><option value="TM"  data-phone-prefix="+993">
                                                Turcomenistão
                                            </option><option value="TR"  data-phone-prefix="+90">
                                                Turquia
                                            </option><option value="TV"  data-phone-prefix="+688">
                                                Tuvalu
                                            </option><option value="UA"  data-phone-prefix="+380">
                                                Ucrânia
                                            </option><option value="UG"  data-phone-prefix="+256">
                                                Uganda
                                            </option><option value="UY"  data-phone-prefix="+598">
                                                Uruguai
                                            </option><option value="UZ"  data-phone-prefix="+998">
                                                Uzbequistão
                                            </option><option value="VU"  data-phone-prefix="+678">
                                                Vanuatu
                                            </option><option value="VE"  data-phone-prefix="+58">
                                                Venezuela
                                            </option><option value="VN"  data-phone-prefix="+84">
                                                Vietnã
                                            </option><option value="WF"  data-phone-prefix="+681">
                                                Wallis e Futuna
                                            </option><option value="ZM"  data-phone-prefix="+260">
                                                Zâmbia
                                            </option><option value="ZW"  data-phone-prefix="+263">
                                                Zimbábue
                                            </option>
                                        </select>
                                        <input pattern="^[+][0-9]{5,}$" title="+[código do prefixo do país][seguido pelo número do telefone]" style="margin-top: 6px;" type="text" class="input" name="step1[phone]" id="phone2" placeholder="Número de telefone" required>
                                        <input type="email" class="input" name="step1[email]" placeholder="Email" required>
                                        <br>
                                        <div class="form-group">
                                            <select class="form-control currencytwo" name="type" required>
                                                <option value="">Tipo de conta</option>
                                                <option value="1">Conta Cent</option>
                                                <option value="2">Conta Padrão</option>
                                                <option value="3">Conta Premium</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control currencytwo" name="currency" required  oninvalid="this.setCustomValidity('Por favor, preencha este campo')" oninput="setCustomValidity('')">
                                                <option value="">Moeda da carteira</option>
                                                <option value="USD">USD</option>
                                                <option value="EUR">EUR</option>
                                            </select>
                                        </div>

                                        <input type="text" class="input" id="email" name="initial" placeholder="Balanço inicial" required>
                                        <div class="form-group">
                                            <select class="form-control currencytwo" name="leverage" required>
                                                <option value="">Aproveitar</option>
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
                                            <input class="chkbx" type="checkbox" id="accept" name="step1[document_group_1]" required  oninvalid="this.setCustomValidity('Por favor, preencha este campo')" oninput="setCustomValidity('')">
                                            <label for="accept">
                                                <p>
                                                    Eu aceito as <a href="https://bkfx.io/pt-pt/legal-documents/" target="_blank">Políticas e Termos e Condições de BKFX</a>
                                                </p>
                                            </label>
                                        </div>
                                        <input class="btnNew" type="submit" name="Continue" value="Continuar">
                                    </form>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="caution container">
                    <h4>Aviso de risco:</h4>
                    <p>
                        Negociar instrumentos de câmbio e CFDs pode incorrer em um alto nível de risco e pode resultar na perda de todo o seu capital investido.
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
        console.log(phone);
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




