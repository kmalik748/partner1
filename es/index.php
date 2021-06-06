<?php   
        define('WP_USE_THEMES', true);
        define('ICL_LANGUAGE_CODE', 'es');
        require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
//        $sitepress->set_default_language('es');
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
                        <a class="logo" href="https://bkfx.io/es/"><img src="../images/bkfx_logo.svg" class="logo-pic img-fluid" alt=""></a>
                    </div>
                    <div class="float-right" style="display: inline-block; float: right; margin: 26px 108px 0px 0px !important;">
                        <div class="dropdown">
                            <a href="#" class="lan dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i><span>ES</span></a>
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
                        <strong>Éxito!</strong> ¡Le hemos enviado las credenciales de inicio de sesión en su correo electrónico registrado!<br>
                        <a href="https://secure.bkfx.io/login" class="btn btn-success">LOGIN</a>
                    </div>
                    <?php
                }
                if(isset($_GET["success"]) && $_GET["success"]=='false'){
                    ?>
                    <div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Error!</strong> Comprueba si estás usando un nuevo correo electrónico..<br>
                    </div>
                    <?php
                }
                ?>


                <div class="form-flex">
                    <h3>Creación de cuenta demo</h3>
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
                                        <input type="hidden" name="redirect" value="es/index.php">
                                        <input type="hidden" name="IB" value="true">
                                        <input type="hidden" name="step1[clientType]" value="Individual">
                                        <input type="text" class="input" name="step1[firstName]" placeholder="Nombre de pila" required  oninvalid="this.setCustomValidity('Por favor complete este campo')" oninput="setCustomValidity('')">
                                        <input type="text" class="input" name="step1[lastName]" placeholder="Apellido" required  oninvalid="this.setCustomValidity('Por favor complete este campo')" oninput="setCustomValidity('')">
                                        <select class="form-group selectpicker countrypicker country_box dateinput select2 input"
                                                data-live-search="true" data-flag="false" name="step1[country]" id="country1" required>
                                            <option value="">País</option><option value="AF"  data-phone-prefix="+93">
                                                Afganistán
                                            </option><option value="AL"  data-phone-prefix="+355">
                                                Albania
                                            </option><option value="DE"  data-phone-prefix="+49">
                                                Alemania
                                            </option><option value="AD"  data-phone-prefix="+376">
                                                Andorra
                                            </option><option value="AO"  data-phone-prefix="+244">
                                                Angola
                                            </option><option value="AI"  data-phone-prefix="+1">
                                                Anguila
                                            </option><option value="AQ"  data-phone-prefix="">
                                                Antártida
                                            </option><option value="AG"  data-phone-prefix="+1">
                                                Antigua y Barbuda
                                            </option><option value="SA"  data-phone-prefix="+966">
                                                Arabia Saudí
                                            </option><option value="DZ"  data-phone-prefix="+213">
                                                Argelia
                                            </option><option value="AR"  data-phone-prefix="+54">
                                                Argentina
                                            </option><option value="AM"  data-phone-prefix="+374">
                                                Armenia
                                            </option><option value="AW"  data-phone-prefix="+297">
                                                Aruba
                                            </option><option value="AU"  data-phone-prefix="+61">
                                                Australia
                                            </option><option value="AT"  data-phone-prefix="+43">
                                                Austria
                                            </option><option value="AZ"  data-phone-prefix="+994">
                                                Azerbaiyán
                                            </option><option value="BS"  data-phone-prefix="+1">
                                                Bahamas
                                            </option><option value="BD"  data-phone-prefix="+880">
                                                Bangladés
                                            </option><option value="BB"  data-phone-prefix="+1">
                                                Barbados
                                            </option><option value="BH"  data-phone-prefix="+973">
                                                Baréin
                                            </option><option value="BE"  data-phone-prefix="+32">
                                                Bélgica
                                            </option><option value="BZ"  data-phone-prefix="+501">
                                                Belice
                                            </option><option value="BJ"  data-phone-prefix="+229">
                                                Benín
                                            </option><option value="BM"  data-phone-prefix="+1">
                                                Bermudas
                                            </option><option value="BY"  data-phone-prefix="+375">
                                                Bielorrusia
                                            </option><option value="BO"  data-phone-prefix="+591">
                                                Bolivia
                                            </option><option value="BA"  data-phone-prefix="+387">
                                                Bosnia y Herzegovina
                                            </option><option value="BW"  data-phone-prefix="+267">
                                                Botsuana
                                            </option><option value="BR"  data-phone-prefix="+55">
                                                Brasil
                                            </option><option value="BN"  data-phone-prefix="+673">
                                                Brunéi
                                            </option><option value="BG"  data-phone-prefix="+359">
                                                Bulgaria
                                            </option><option value="BF"  data-phone-prefix="+226">
                                                Burkina Faso
                                            </option><option value="BI"  data-phone-prefix="+257">
                                                Burundi
                                            </option><option value="BT"  data-phone-prefix="+975">
                                                Bután
                                            </option><option value="CV"  data-phone-prefix="+238">
                                                Cabo Verde
                                            </option><option value="KH"  data-phone-prefix="+855">
                                                Camboya
                                            </option><option value="CM"  data-phone-prefix="+237">
                                                Camerún
                                            </option><option value="CA"  data-phone-prefix="+1">
                                                Canadá
                                            </option><option value="BQ"  data-phone-prefix="+599">
                                                Caribe neerlandés
                                            </option><option value="QA"  data-phone-prefix="+974">
                                                Catar
                                            </option><option value="TD"  data-phone-prefix="+235">
                                                Chad
                                            </option><option value="CZ"  data-phone-prefix="+420">
                                                Chequia
                                            </option><option value="CL"  data-phone-prefix="+56">
                                                Chile
                                            </option><option value="CN"  data-phone-prefix="+86">
                                                China
                                            </option><option value="CY"  data-phone-prefix="+357">
                                                Chipre
                                            </option><option value="VA"  data-phone-prefix="+39">
                                                Ciudad del Vaticano
                                            </option><option value="CO"  data-phone-prefix="+57">
                                                Colombia
                                            </option><option value="KM"  data-phone-prefix="+269">
                                                Comoras
                                            </option><option value="CG"  data-phone-prefix="+242">
                                                Congo
                                            </option><option value="KP"  data-phone-prefix="+850">
                                                Corea del Norte
                                            </option><option value="KR"  data-phone-prefix="+82">
                                                Corea del Sur
                                            </option><option value="CR"  data-phone-prefix="+506">
                                                Costa Rica
                                            </option><option value="CI"  data-phone-prefix="+225">
                                                Côte d’Ivoire
                                            </option><option value="HR"  data-phone-prefix="+385">
                                                Croacia
                                            </option><option value="CU"  data-phone-prefix="+53">
                                                Cuba
                                            </option><option value="CW"  data-phone-prefix="+599">
                                                Curazao
                                            </option><option value="DK"  data-phone-prefix="+45">
                                                Dinamarca
                                            </option><option value="DM"  data-phone-prefix="+1">
                                                Dominica
                                            </option><option value="EC"  data-phone-prefix="+593">
                                                Ecuador
                                            </option><option value="EG"  data-phone-prefix="+20">
                                                Egipto
                                            </option><option value="SV"  data-phone-prefix="+503">
                                                El Salvador
                                            </option><option value="AE"  data-phone-prefix="+971">
                                                Emiratos Árabes Unidos
                                            </option><option value="ER"  data-phone-prefix="+291">
                                                Eritrea
                                            </option><option value="SK"  data-phone-prefix="+421">
                                                Eslovaquia
                                            </option><option value="SI"  data-phone-prefix="+386">
                                                Eslovenia
                                            </option><option value="ES"  data-phone-prefix="+34">
                                                España
                                            </option><option value="US"  data-phone-prefix="+1">
                                                Estados Unidos
                                            </option><option value="EE"  data-phone-prefix="+372">
                                                Estonia
                                            </option><option value="SZ"  data-phone-prefix="+268">
                                                Esuatini
                                            </option><option value="ET"  data-phone-prefix="+251">
                                                Etiopía
                                            </option><option value="PH"  data-phone-prefix="+63">
                                                Filipinas
                                            </option><option value="FI"  data-phone-prefix="+358">
                                                Finlandia
                                            </option><option value="FJ"  data-phone-prefix="+679">
                                                Fiyi
                                            </option><option value="FR"  data-phone-prefix="+33">
                                                Francia
                                            </option><option value="GA"  data-phone-prefix="+241">
                                                Gabón
                                            </option><option value="GM"  data-phone-prefix="+220">
                                                Gambia
                                            </option><option value="GE"  data-phone-prefix="+995">
                                                Georgia
                                            </option><option value="GH"  data-phone-prefix="+233">
                                                Ghana
                                            </option><option value="GI"  data-phone-prefix="+350">
                                                Gibraltar
                                            </option><option value="GD"  data-phone-prefix="+1">
                                                Granada
                                            </option><option value="GR"  data-phone-prefix="+30">
                                                Grecia
                                            </option><option value="GL"  data-phone-prefix="+299">
                                                Groenlandia
                                            </option><option value="GP"  data-phone-prefix="+590">
                                                Guadalupe
                                            </option><option value="GU"  data-phone-prefix="+1">
                                                Guam
                                            </option><option value="GT"  data-phone-prefix="+502">
                                                Guatemala
                                            </option><option value="GF"  data-phone-prefix="+594">
                                                Guayana Francesa
                                            </option><option value="GG"  data-phone-prefix="+44">
                                                Guernesey
                                            </option><option value="GN"  data-phone-prefix="+224">
                                                Guinea
                                            </option><option value="GQ"  data-phone-prefix="+240">
                                                Guinea Ecuatorial
                                            </option><option value="GW"  data-phone-prefix="+245">
                                                Guinea-Bisáu
                                            </option><option value="GY"  data-phone-prefix="+592">
                                                Guyana
                                            </option><option value="HT"  data-phone-prefix="+509">
                                                Haití
                                            </option><option value="HN"  data-phone-prefix="+504">
                                                Honduras
                                            </option><option value="HU"  data-phone-prefix="+36">
                                                Hungría
                                            </option><option value="IN"  data-phone-prefix="+91">
                                                India
                                            </option><option value="ID"  data-phone-prefix="+62">
                                                Indonesia
                                            </option><option value="IQ"  data-phone-prefix="+964">
                                                Irak
                                            </option><option value="IR"  data-phone-prefix="+98">
                                                Irán
                                            </option><option value="IE"  data-phone-prefix="+353">
                                                Irlanda
                                            </option><option value="BV"  data-phone-prefix="">
                                                Isla Bouvet
                                            </option><option value="IM"  data-phone-prefix="+44">
                                                Isla de Man
                                            </option><option value="CX"  data-phone-prefix="+61">
                                                Isla de Navidad
                                            </option><option value="NF"  data-phone-prefix="+672">
                                                Isla Norfolk
                                            </option><option value="IS"  data-phone-prefix="+354">
                                                Islandia
                                            </option><option value="AX"  data-phone-prefix="+358">
                                                Islas Aland
                                            </option><option value="KY"  data-phone-prefix="+1">
                                                Islas Caimán
                                            </option><option value="CC"  data-phone-prefix="+61">
                                                Islas Cocos
                                            </option><option value="CK"  data-phone-prefix="+682">
                                                Islas Cook
                                            </option><option value="FO"  data-phone-prefix="+298">
                                                Islas Feroe
                                            </option><option value="GS"  data-phone-prefix="">
                                                Islas Georgia del Sur y Sandwich del Sur
                                            </option><option value="HM"  data-phone-prefix="">
                                                Islas Heard y McDonald
                                            </option><option value="FK"  data-phone-prefix="+500">
                                                Islas Malvinas
                                            </option><option value="MP"  data-phone-prefix="+1">
                                                Islas Marianas del Norte
                                            </option><option value="MH"  data-phone-prefix="+692">
                                                Islas Marshall
                                            </option><option value="UM"  data-phone-prefix="">
                                                Islas menores alejadas de EE. UU.
                                            </option><option value="PN"  data-phone-prefix="">
                                                Islas Pitcairn
                                            </option><option value="SB"  data-phone-prefix="+677">
                                                Islas Salomón
                                            </option><option value="TC"  data-phone-prefix="+1">
                                                Islas Turcas y Caicos
                                            </option><option value="VG"  data-phone-prefix="+1">
                                                Islas Vírgenes Británicas
                                            </option><option value="VI"  data-phone-prefix="+1">
                                                Islas Vírgenes de EE. UU.
                                            </option><option value="IL"  data-phone-prefix="+972">
                                                Israel
                                            </option><option value="IT"  data-phone-prefix="+39">
                                                Italia
                                            </option><option value="JM"  data-phone-prefix="+1">
                                                Jamaica
                                            </option><option value="JP"  data-phone-prefix="+81">
                                                Japón
                                            </option><option value="JE"  data-phone-prefix="+44">
                                                Jersey
                                            </option><option value="JO"  data-phone-prefix="+962">
                                                Jordania
                                            </option><option value="KZ"  data-phone-prefix="+7">
                                                Kazajistán
                                            </option><option value="KE"  data-phone-prefix="+254">
                                                Kenia
                                            </option><option value="KG"  data-phone-prefix="+996">
                                                Kirguistán
                                            </option><option value="KI"  data-phone-prefix="+686">
                                                Kiribati
                                            </option><option value="KW"  data-phone-prefix="+965">
                                                Kuwait
                                            </option><option value="LA"  data-phone-prefix="+856">
                                                Laos
                                            </option><option value="LS"  data-phone-prefix="+266">
                                                Lesoto
                                            </option><option value="LV"  data-phone-prefix="+371">
                                                Letonia
                                            </option><option value="LB"  data-phone-prefix="+961">
                                                Líbano
                                            </option><option value="LR"  data-phone-prefix="+231">
                                                Liberia
                                            </option><option value="LY"  data-phone-prefix="+218">
                                                Libia
                                            </option><option value="LI"  data-phone-prefix="+423">
                                                Liechtenstein
                                            </option><option value="LT"  data-phone-prefix="+370">
                                                Lituania
                                            </option><option value="LU"  data-phone-prefix="+352">
                                                Luxemburgo
                                            </option><option value="MK"  data-phone-prefix="+389">
                                                Macedonia del Norte
                                            </option><option value="MG"  data-phone-prefix="+261">
                                                Madagascar
                                            </option><option value="MY"  data-phone-prefix="+60">
                                                Malasia
                                            </option><option value="MW"  data-phone-prefix="+265">
                                                Malaui
                                            </option><option value="MV"  data-phone-prefix="+960">
                                                Maldivas
                                            </option><option value="ML"  data-phone-prefix="+223">
                                                Mali
                                            </option><option value="MT"  data-phone-prefix="+356">
                                                Malta
                                            </option><option value="MA"  data-phone-prefix="+212">
                                                Marruecos
                                            </option><option value="MQ"  data-phone-prefix="+596">
                                                Martinica
                                            </option><option value="MU"  data-phone-prefix="+230">
                                                Mauricio
                                            </option><option value="MR"  data-phone-prefix="+222">
                                                Mauritania
                                            </option><option value="YT"  data-phone-prefix="+262">
                                                Mayotte
                                            </option><option value="MX"  data-phone-prefix="+52">
                                                México
                                            </option><option value="FM"  data-phone-prefix="+691">
                                                Micronesia
                                            </option><option value="MD"  data-phone-prefix="+373">
                                                Moldavia
                                            </option><option value="MC"  data-phone-prefix="+377">
                                                Mónaco
                                            </option><option value="MN"  data-phone-prefix="+976">
                                                Mongolia
                                            </option><option value="ME"  data-phone-prefix="+382">
                                                Montenegro
                                            </option><option value="MS"  data-phone-prefix="+1">
                                                Montserrat
                                            </option><option value="MZ"  data-phone-prefix="+258">
                                                Mozambique
                                            </option><option value="MM"  data-phone-prefix="+95">
                                                Myanmar (Birmania)
                                            </option><option value="NA"  data-phone-prefix="+264">
                                                Namibia
                                            </option><option value="NR"  data-phone-prefix="+674">
                                                Nauru
                                            </option><option value="NP"  data-phone-prefix="+977">
                                                Nepal
                                            </option><option value="NI"  data-phone-prefix="+505">
                                                Nicaragua
                                            </option><option value="NE"  data-phone-prefix="+227">
                                                Níger
                                            </option><option value="NG"  data-phone-prefix="+234">
                                                Nigeria
                                            </option><option value="NU"  data-phone-prefix="+683">
                                                Niue
                                            </option><option value="NO"  data-phone-prefix="+47">
                                                Noruega
                                            </option><option value="NC"  data-phone-prefix="+687">
                                                Nueva Caledonia
                                            </option><option value="NZ"  data-phone-prefix="+64">
                                                Nueva Zelanda
                                            </option><option value="OM"  data-phone-prefix="+968">
                                                Omán
                                            </option><option value="NL"  data-phone-prefix="+31">
                                                Países Bajos
                                            </option><option value="PK"  data-phone-prefix="+92">
                                                Pakistán
                                            </option><option value="PW"  data-phone-prefix="+680">
                                                Palaos
                                            </option><option value="PA"  data-phone-prefix="+507">
                                                Panamá
                                            </option><option value="PG"  data-phone-prefix="+675">
                                                Papúa Nueva Guinea
                                            </option><option value="PY"  data-phone-prefix="+595">
                                                Paraguay
                                            </option><option value="PE"  data-phone-prefix="+51">
                                                Perú
                                            </option><option value="PF"  data-phone-prefix="+689">
                                                Polinesia Francesa
                                            </option><option value="PL"  data-phone-prefix="+48">
                                                Polonia
                                            </option><option value="PT"  data-phone-prefix="+351">
                                                Portugal
                                            </option><option value="PR"  data-phone-prefix="+1">
                                                Puerto Rico
                                            </option><option value="HK"  data-phone-prefix="+852">
                                                RAE de Hong Kong (China)
                                            </option><option value="MO"  data-phone-prefix="+853">
                                                RAE de Macao (China)
                                            </option><option value="GB"  data-phone-prefix="+44">
                                                Reino Unido
                                            </option><option value="CF"  data-phone-prefix="+236">
                                                República Centroafricana
                                            </option><option value="CD"  data-phone-prefix="+243">
                                                República Democrática del Congo
                                            </option><option value="DO"  data-phone-prefix="+1">
                                                República Dominicana
                                            </option><option value="RE"  data-phone-prefix="+262">
                                                Reunión
                                            </option><option value="RW"  data-phone-prefix="+250">
                                                Ruanda
                                            </option><option value="RO"  data-phone-prefix="+40">
                                                Rumanía
                                            </option><option value="RU"  data-phone-prefix="+7">
                                                Rusia
                                            </option><option value="EH"  data-phone-prefix="+212">
                                                Sáhara Occidental
                                            </option><option value="WS"  data-phone-prefix="+685">
                                                Samoa
                                            </option><option value="AS"  data-phone-prefix="+1">
                                                Samoa Americana
                                            </option><option value="BL"  data-phone-prefix="+590">
                                                San Bartolomé
                                            </option><option value="KN"  data-phone-prefix="+1">
                                                San Cristóbal y Nieves
                                            </option><option value="SM"  data-phone-prefix="+378">
                                                San Marino
                                            </option><option value="MF"  data-phone-prefix="+590">
                                                San Martín
                                            </option><option value="PM"  data-phone-prefix="+508">
                                                San Pedro y Miquelón
                                            </option><option value="VC"  data-phone-prefix="+1">
                                                San Vicente y las Granadinas
                                            </option><option value="SH"  data-phone-prefix="+290">
                                                Santa Elena
                                            </option><option value="LC"  data-phone-prefix="+1">
                                                Santa Lucía
                                            </option><option value="ST"  data-phone-prefix="+239">
                                                Santo Tomé y Príncipe
                                            </option><option value="SN"  data-phone-prefix="+221">
                                                Senegal
                                            </option><option value="RS"  data-phone-prefix="+381">
                                                Serbia
                                            </option><option value="SC"  data-phone-prefix="+248">
                                                Seychelles
                                            </option><option value="SL"  data-phone-prefix="+232">
                                                Sierra Leona
                                            </option><option value="SG"  data-phone-prefix="+65">
                                                Singapur
                                            </option><option value="SX"  data-phone-prefix="+1">
                                                Sint Maarten
                                            </option><option value="SY"  data-phone-prefix="+963">
                                                Siria
                                            </option><option value="SO"  data-phone-prefix="+252">
                                                Somalia
                                            </option><option value="LK"  data-phone-prefix="+94">
                                                Sri Lanka
                                            </option><option value="ZA"  data-phone-prefix="+27">
                                                Sudáfrica
                                            </option><option value="SD"  data-phone-prefix="+249">
                                                Sudán
                                            </option><option value="SS"  data-phone-prefix="+211">
                                                Sudán del Sur
                                            </option><option value="SE"  data-phone-prefix="+46">
                                                Suecia
                                            </option><option value="CH"  data-phone-prefix="+41">
                                                Suiza
                                            </option><option value="SR"  data-phone-prefix="+597">
                                                Surinam
                                            </option><option value="SJ"  data-phone-prefix="+47">
                                                Svalbard y Jan Mayen
                                            </option><option value="TH"  data-phone-prefix="+66">
                                                Tailandia
                                            </option><option value="TW"  data-phone-prefix="+886">
                                                Taiwán
                                            </option><option value="TZ"  data-phone-prefix="+255">
                                                Tanzania
                                            </option><option value="TJ"  data-phone-prefix="+992">
                                                Tayikistán
                                            </option><option value="IO"  data-phone-prefix="+246">
                                                Territorio Británico del Océano Índico
                                            </option><option value="TF"  data-phone-prefix="">
                                                Territorios Australes Franceses
                                            </option><option value="PS"  data-phone-prefix="+970">
                                                Territorios Palestinos
                                            </option><option value="TL"  data-phone-prefix="+670">
                                                Timor-Leste
                                            </option><option value="TG"  data-phone-prefix="+228">
                                                Togo
                                            </option><option value="TK"  data-phone-prefix="+690">
                                                Tokelau
                                            </option><option value="TO"  data-phone-prefix="+676">
                                                Tonga
                                            </option><option value="TT"  data-phone-prefix="+1">
                                                Trinidad y Tobago
                                            </option><option value="TN"  data-phone-prefix="+216">
                                                Túnez
                                            </option><option value="TM"  data-phone-prefix="+993">
                                                Turkmenistán
                                            </option><option value="TR"  data-phone-prefix="+90">
                                                Turquía
                                            </option><option value="TV"  data-phone-prefix="+688">
                                                Tuvalu
                                            </option><option value="UA"  data-phone-prefix="+380">
                                                Ucrania
                                            </option><option value="UG"  data-phone-prefix="+256">
                                                Uganda
                                            </option><option value="UY"  data-phone-prefix="+598">
                                                Uruguay
                                            </option><option value="UZ"  data-phone-prefix="+998">
                                                Uzbekistán
                                            </option><option value="VU"  data-phone-prefix="+678">
                                                Vanuatu
                                            </option><option value="VE"  data-phone-prefix="+58">
                                                Venezuela
                                            </option><option value="VN"  data-phone-prefix="+84">
                                                Vietnam
                                            </option><option value="WF"  data-phone-prefix="+681">
                                                Wallis y Futuna
                                            </option><option value="YE"  data-phone-prefix="+967">
                                                Yemen
                                            </option><option value="DJ"  data-phone-prefix="+253">
                                                Yibuti
                                            </option><option value="ZM"  data-phone-prefix="+260">
                                                Zambia
                                            </option><option value="ZW"  data-phone-prefix="+263">
                                                Zimbabue
                                            </option>
                                        </select>
                                        <input style="margin-top: 6px;" type="text" class="input" name="step1[phone]" id="phone1" placeholder="Número de teléfono"
                                               required pattern="^[+][0-9]{5,}$" title="+[código de prefijo del país][seguido del número de teléfono]">
                                        <input type="email" class="input" name="step1[email]" placeholder="Email" required >
                                        <br>
                                        <div class="check">
                                            <input class="chkbx" type="checkbox" id="accept" name="step1[document_group_1]" required oninvalid="this.setCustomValidity('Por favor complete este campo')" oninput="setCustomValidity('')">
                                            <label for="accept">
                                                <p>
                                                    Acepto las  <a href="https://bkfx.io/es/legal-documents/" target="_blank">Políticas y Términos y Condiciones de BKFX</a>
                                                </p>
                                            </label>
                                        </div>
                                        <input class="btnNew" type="submit" name="submit_1" value="Seguir">
                                    </form>
                                </div>
                                
                            </div>
                            <div id="menu1" class="tab-pane">
                                <div class="frm-bx">
                                    <form method="get" action="../post1.php">
                                        <input type="hidden" name="redirect" value="es/index.php">
                                        <input type="hidden" name="IB" value="true">
                                        <input type="hidden" name="step1[clientType]" value="Corporate">
                                        <input type="text" class="input" name="step1[firstName]" placeholder="Nombre de pila" required  oninvalid="this.setCustomValidity('Por favor complete este campo')" oninput="setCustomValidity('')">
                                        <input type="text" class="input" name="step1[lastName]" placeholder="Apellido" required  oninvalid="this.setCustomValidity('Por favor complete este campo')" oninput="setCustomValidity('')">

                                        <select class="form-group selectpicker countrypicker country_box dateinput select3 input"
                                                data-live-search="true" data-flag="false" name="step1[country]" id="country2" required>
                                            <option value="">País</option><option value="AF"  data-phone-prefix="+93">
                                                Afganistán
                                            </option><option value="AL"  data-phone-prefix="+355">
                                                Albania
                                            </option><option value="DE"  data-phone-prefix="+49">
                                                Alemania
                                            </option><option value="AD"  data-phone-prefix="+376">
                                                Andorra
                                            </option><option value="AO"  data-phone-prefix="+244">
                                                Angola
                                            </option><option value="AI"  data-phone-prefix="+1">
                                                Anguila
                                            </option><option value="AQ"  data-phone-prefix="">
                                                Antártida
                                            </option><option value="AG"  data-phone-prefix="+1">
                                                Antigua y Barbuda
                                            </option><option value="SA"  data-phone-prefix="+966">
                                                Arabia Saudí
                                            </option><option value="DZ"  data-phone-prefix="+213">
                                                Argelia
                                            </option><option value="AR"  data-phone-prefix="+54">
                                                Argentina
                                            </option><option value="AM"  data-phone-prefix="+374">
                                                Armenia
                                            </option><option value="AW"  data-phone-prefix="+297">
                                                Aruba
                                            </option><option value="AU"  data-phone-prefix="+61">
                                                Australia
                                            </option><option value="AT"  data-phone-prefix="+43">
                                                Austria
                                            </option><option value="AZ"  data-phone-prefix="+994">
                                                Azerbaiyán
                                            </option><option value="BS"  data-phone-prefix="+1">
                                                Bahamas
                                            </option><option value="BD"  data-phone-prefix="+880">
                                                Bangladés
                                            </option><option value="BB"  data-phone-prefix="+1">
                                                Barbados
                                            </option><option value="BH"  data-phone-prefix="+973">
                                                Baréin
                                            </option><option value="BE"  data-phone-prefix="+32">
                                                Bélgica
                                            </option><option value="BZ"  data-phone-prefix="+501">
                                                Belice
                                            </option><option value="BJ"  data-phone-prefix="+229">
                                                Benín
                                            </option><option value="BM"  data-phone-prefix="+1">
                                                Bermudas
                                            </option><option value="BY"  data-phone-prefix="+375">
                                                Bielorrusia
                                            </option><option value="BO"  data-phone-prefix="+591">
                                                Bolivia
                                            </option><option value="BA"  data-phone-prefix="+387">
                                                Bosnia y Herzegovina
                                            </option><option value="BW"  data-phone-prefix="+267">
                                                Botsuana
                                            </option><option value="BR"  data-phone-prefix="+55">
                                                Brasil
                                            </option><option value="BN"  data-phone-prefix="+673">
                                                Brunéi
                                            </option><option value="BG"  data-phone-prefix="+359">
                                                Bulgaria
                                            </option><option value="BF"  data-phone-prefix="+226">
                                                Burkina Faso
                                            </option><option value="BI"  data-phone-prefix="+257">
                                                Burundi
                                            </option><option value="BT"  data-phone-prefix="+975">
                                                Bután
                                            </option><option value="CV"  data-phone-prefix="+238">
                                                Cabo Verde
                                            </option><option value="KH"  data-phone-prefix="+855">
                                                Camboya
                                            </option><option value="CM"  data-phone-prefix="+237">
                                                Camerún
                                            </option><option value="CA"  data-phone-prefix="+1">
                                                Canadá
                                            </option><option value="BQ"  data-phone-prefix="+599">
                                                Caribe neerlandés
                                            </option><option value="QA"  data-phone-prefix="+974">
                                                Catar
                                            </option><option value="TD"  data-phone-prefix="+235">
                                                Chad
                                            </option><option value="CZ"  data-phone-prefix="+420">
                                                Chequia
                                            </option><option value="CL"  data-phone-prefix="+56">
                                                Chile
                                            </option><option value="CN"  data-phone-prefix="+86">
                                                China
                                            </option><option value="CY"  data-phone-prefix="+357">
                                                Chipre
                                            </option><option value="VA"  data-phone-prefix="+39">
                                                Ciudad del Vaticano
                                            </option><option value="CO"  data-phone-prefix="+57">
                                                Colombia
                                            </option><option value="KM"  data-phone-prefix="+269">
                                                Comoras
                                            </option><option value="CG"  data-phone-prefix="+242">
                                                Congo
                                            </option><option value="KP"  data-phone-prefix="+850">
                                                Corea del Norte
                                            </option><option value="KR"  data-phone-prefix="+82">
                                                Corea del Sur
                                            </option><option value="CR"  data-phone-prefix="+506">
                                                Costa Rica
                                            </option><option value="CI"  data-phone-prefix="+225">
                                                Côte d’Ivoire
                                            </option><option value="HR"  data-phone-prefix="+385">
                                                Croacia
                                            </option><option value="CU"  data-phone-prefix="+53">
                                                Cuba
                                            </option><option value="CW"  data-phone-prefix="+599">
                                                Curazao
                                            </option><option value="DK"  data-phone-prefix="+45">
                                                Dinamarca
                                            </option><option value="DM"  data-phone-prefix="+1">
                                                Dominica
                                            </option><option value="EC"  data-phone-prefix="+593">
                                                Ecuador
                                            </option><option value="EG"  data-phone-prefix="+20">
                                                Egipto
                                            </option><option value="SV"  data-phone-prefix="+503">
                                                El Salvador
                                            </option><option value="AE"  data-phone-prefix="+971">
                                                Emiratos Árabes Unidos
                                            </option><option value="ER"  data-phone-prefix="+291">
                                                Eritrea
                                            </option><option value="SK"  data-phone-prefix="+421">
                                                Eslovaquia
                                            </option><option value="SI"  data-phone-prefix="+386">
                                                Eslovenia
                                            </option><option value="ES"  data-phone-prefix="+34">
                                                España
                                            </option><option value="US"  data-phone-prefix="+1">
                                                Estados Unidos
                                            </option><option value="EE"  data-phone-prefix="+372">
                                                Estonia
                                            </option><option value="SZ"  data-phone-prefix="+268">
                                                Esuatini
                                            </option><option value="ET"  data-phone-prefix="+251">
                                                Etiopía
                                            </option><option value="PH"  data-phone-prefix="+63">
                                                Filipinas
                                            </option><option value="FI"  data-phone-prefix="+358">
                                                Finlandia
                                            </option><option value="FJ"  data-phone-prefix="+679">
                                                Fiyi
                                            </option><option value="FR"  data-phone-prefix="+33">
                                                Francia
                                            </option><option value="GA"  data-phone-prefix="+241">
                                                Gabón
                                            </option><option value="GM"  data-phone-prefix="+220">
                                                Gambia
                                            </option><option value="GE"  data-phone-prefix="+995">
                                                Georgia
                                            </option><option value="GH"  data-phone-prefix="+233">
                                                Ghana
                                            </option><option value="GI"  data-phone-prefix="+350">
                                                Gibraltar
                                            </option><option value="GD"  data-phone-prefix="+1">
                                                Granada
                                            </option><option value="GR"  data-phone-prefix="+30">
                                                Grecia
                                            </option><option value="GL"  data-phone-prefix="+299">
                                                Groenlandia
                                            </option><option value="GP"  data-phone-prefix="+590">
                                                Guadalupe
                                            </option><option value="GU"  data-phone-prefix="+1">
                                                Guam
                                            </option><option value="GT"  data-phone-prefix="+502">
                                                Guatemala
                                            </option><option value="GF"  data-phone-prefix="+594">
                                                Guayana Francesa
                                            </option><option value="GG"  data-phone-prefix="+44">
                                                Guernesey
                                            </option><option value="GN"  data-phone-prefix="+224">
                                                Guinea
                                            </option><option value="GQ"  data-phone-prefix="+240">
                                                Guinea Ecuatorial
                                            </option><option value="GW"  data-phone-prefix="+245">
                                                Guinea-Bisáu
                                            </option><option value="GY"  data-phone-prefix="+592">
                                                Guyana
                                            </option><option value="HT"  data-phone-prefix="+509">
                                                Haití
                                            </option><option value="HN"  data-phone-prefix="+504">
                                                Honduras
                                            </option><option value="HU"  data-phone-prefix="+36">
                                                Hungría
                                            </option><option value="IN"  data-phone-prefix="+91">
                                                India
                                            </option><option value="ID"  data-phone-prefix="+62">
                                                Indonesia
                                            </option><option value="IQ"  data-phone-prefix="+964">
                                                Irak
                                            </option><option value="IR"  data-phone-prefix="+98">
                                                Irán
                                            </option><option value="IE"  data-phone-prefix="+353">
                                                Irlanda
                                            </option><option value="BV"  data-phone-prefix="">
                                                Isla Bouvet
                                            </option><option value="IM"  data-phone-prefix="+44">
                                                Isla de Man
                                            </option><option value="CX"  data-phone-prefix="+61">
                                                Isla de Navidad
                                            </option><option value="NF"  data-phone-prefix="+672">
                                                Isla Norfolk
                                            </option><option value="IS"  data-phone-prefix="+354">
                                                Islandia
                                            </option><option value="AX"  data-phone-prefix="+358">
                                                Islas Aland
                                            </option><option value="KY"  data-phone-prefix="+1">
                                                Islas Caimán
                                            </option><option value="CC"  data-phone-prefix="+61">
                                                Islas Cocos
                                            </option><option value="CK"  data-phone-prefix="+682">
                                                Islas Cook
                                            </option><option value="FO"  data-phone-prefix="+298">
                                                Islas Feroe
                                            </option><option value="GS"  data-phone-prefix="">
                                                Islas Georgia del Sur y Sandwich del Sur
                                            </option><option value="HM"  data-phone-prefix="">
                                                Islas Heard y McDonald
                                            </option><option value="FK"  data-phone-prefix="+500">
                                                Islas Malvinas
                                            </option><option value="MP"  data-phone-prefix="+1">
                                                Islas Marianas del Norte
                                            </option><option value="MH"  data-phone-prefix="+692">
                                                Islas Marshall
                                            </option><option value="UM"  data-phone-prefix="">
                                                Islas menores alejadas de EE. UU.
                                            </option><option value="PN"  data-phone-prefix="">
                                                Islas Pitcairn
                                            </option><option value="SB"  data-phone-prefix="+677">
                                                Islas Salomón
                                            </option><option value="TC"  data-phone-prefix="+1">
                                                Islas Turcas y Caicos
                                            </option><option value="VG"  data-phone-prefix="+1">
                                                Islas Vírgenes Británicas
                                            </option><option value="VI"  data-phone-prefix="+1">
                                                Islas Vírgenes de EE. UU.
                                            </option><option value="IL"  data-phone-prefix="+972">
                                                Israel
                                            </option><option value="IT"  data-phone-prefix="+39">
                                                Italia
                                            </option><option value="JM"  data-phone-prefix="+1">
                                                Jamaica
                                            </option><option value="JP"  data-phone-prefix="+81">
                                                Japón
                                            </option><option value="JE"  data-phone-prefix="+44">
                                                Jersey
                                            </option><option value="JO"  data-phone-prefix="+962">
                                                Jordania
                                            </option><option value="KZ"  data-phone-prefix="+7">
                                                Kazajistán
                                            </option><option value="KE"  data-phone-prefix="+254">
                                                Kenia
                                            </option><option value="KG"  data-phone-prefix="+996">
                                                Kirguistán
                                            </option><option value="KI"  data-phone-prefix="+686">
                                                Kiribati
                                            </option><option value="KW"  data-phone-prefix="+965">
                                                Kuwait
                                            </option><option value="LA"  data-phone-prefix="+856">
                                                Laos
                                            </option><option value="LS"  data-phone-prefix="+266">
                                                Lesoto
                                            </option><option value="LV"  data-phone-prefix="+371">
                                                Letonia
                                            </option><option value="LB"  data-phone-prefix="+961">
                                                Líbano
                                            </option><option value="LR"  data-phone-prefix="+231">
                                                Liberia
                                            </option><option value="LY"  data-phone-prefix="+218">
                                                Libia
                                            </option><option value="LI"  data-phone-prefix="+423">
                                                Liechtenstein
                                            </option><option value="LT"  data-phone-prefix="+370">
                                                Lituania
                                            </option><option value="LU"  data-phone-prefix="+352">
                                                Luxemburgo
                                            </option><option value="MK"  data-phone-prefix="+389">
                                                Macedonia del Norte
                                            </option><option value="MG"  data-phone-prefix="+261">
                                                Madagascar
                                            </option><option value="MY"  data-phone-prefix="+60">
                                                Malasia
                                            </option><option value="MW"  data-phone-prefix="+265">
                                                Malaui
                                            </option><option value="MV"  data-phone-prefix="+960">
                                                Maldivas
                                            </option><option value="ML"  data-phone-prefix="+223">
                                                Mali
                                            </option><option value="MT"  data-phone-prefix="+356">
                                                Malta
                                            </option><option value="MA"  data-phone-prefix="+212">
                                                Marruecos
                                            </option><option value="MQ"  data-phone-prefix="+596">
                                                Martinica
                                            </option><option value="MU"  data-phone-prefix="+230">
                                                Mauricio
                                            </option><option value="MR"  data-phone-prefix="+222">
                                                Mauritania
                                            </option><option value="YT"  data-phone-prefix="+262">
                                                Mayotte
                                            </option><option value="MX"  data-phone-prefix="+52">
                                                México
                                            </option><option value="FM"  data-phone-prefix="+691">
                                                Micronesia
                                            </option><option value="MD"  data-phone-prefix="+373">
                                                Moldavia
                                            </option><option value="MC"  data-phone-prefix="+377">
                                                Mónaco
                                            </option><option value="MN"  data-phone-prefix="+976">
                                                Mongolia
                                            </option><option value="ME"  data-phone-prefix="+382">
                                                Montenegro
                                            </option><option value="MS"  data-phone-prefix="+1">
                                                Montserrat
                                            </option><option value="MZ"  data-phone-prefix="+258">
                                                Mozambique
                                            </option><option value="MM"  data-phone-prefix="+95">
                                                Myanmar (Birmania)
                                            </option><option value="NA"  data-phone-prefix="+264">
                                                Namibia
                                            </option><option value="NR"  data-phone-prefix="+674">
                                                Nauru
                                            </option><option value="NP"  data-phone-prefix="+977">
                                                Nepal
                                            </option><option value="NI"  data-phone-prefix="+505">
                                                Nicaragua
                                            </option><option value="NE"  data-phone-prefix="+227">
                                                Níger
                                            </option><option value="NG"  data-phone-prefix="+234">
                                                Nigeria
                                            </option><option value="NU"  data-phone-prefix="+683">
                                                Niue
                                            </option><option value="NO"  data-phone-prefix="+47">
                                                Noruega
                                            </option><option value="NC"  data-phone-prefix="+687">
                                                Nueva Caledonia
                                            </option><option value="NZ"  data-phone-prefix="+64">
                                                Nueva Zelanda
                                            </option><option value="OM"  data-phone-prefix="+968">
                                                Omán
                                            </option><option value="NL"  data-phone-prefix="+31">
                                                Países Bajos
                                            </option><option value="PK"  data-phone-prefix="+92">
                                                Pakistán
                                            </option><option value="PW"  data-phone-prefix="+680">
                                                Palaos
                                            </option><option value="PA"  data-phone-prefix="+507">
                                                Panamá
                                            </option><option value="PG"  data-phone-prefix="+675">
                                                Papúa Nueva Guinea
                                            </option><option value="PY"  data-phone-prefix="+595">
                                                Paraguay
                                            </option><option value="PE"  data-phone-prefix="+51">
                                                Perú
                                            </option><option value="PF"  data-phone-prefix="+689">
                                                Polinesia Francesa
                                            </option><option value="PL"  data-phone-prefix="+48">
                                                Polonia
                                            </option><option value="PT"  data-phone-prefix="+351">
                                                Portugal
                                            </option><option value="PR"  data-phone-prefix="+1">
                                                Puerto Rico
                                            </option><option value="HK"  data-phone-prefix="+852">
                                                RAE de Hong Kong (China)
                                            </option><option value="MO"  data-phone-prefix="+853">
                                                RAE de Macao (China)
                                            </option><option value="GB"  data-phone-prefix="+44">
                                                Reino Unido
                                            </option><option value="CF"  data-phone-prefix="+236">
                                                República Centroafricana
                                            </option><option value="CD"  data-phone-prefix="+243">
                                                República Democrática del Congo
                                            </option><option value="DO"  data-phone-prefix="+1">
                                                República Dominicana
                                            </option><option value="RE"  data-phone-prefix="+262">
                                                Reunión
                                            </option><option value="RW"  data-phone-prefix="+250">
                                                Ruanda
                                            </option><option value="RO"  data-phone-prefix="+40">
                                                Rumanía
                                            </option><option value="RU"  data-phone-prefix="+7">
                                                Rusia
                                            </option><option value="EH"  data-phone-prefix="+212">
                                                Sáhara Occidental
                                            </option><option value="WS"  data-phone-prefix="+685">
                                                Samoa
                                            </option><option value="AS"  data-phone-prefix="+1">
                                                Samoa Americana
                                            </option><option value="BL"  data-phone-prefix="+590">
                                                San Bartolomé
                                            </option><option value="KN"  data-phone-prefix="+1">
                                                San Cristóbal y Nieves
                                            </option><option value="SM"  data-phone-prefix="+378">
                                                San Marino
                                            </option><option value="MF"  data-phone-prefix="+590">
                                                San Martín
                                            </option><option value="PM"  data-phone-prefix="+508">
                                                San Pedro y Miquelón
                                            </option><option value="VC"  data-phone-prefix="+1">
                                                San Vicente y las Granadinas
                                            </option><option value="SH"  data-phone-prefix="+290">
                                                Santa Elena
                                            </option><option value="LC"  data-phone-prefix="+1">
                                                Santa Lucía
                                            </option><option value="ST"  data-phone-prefix="+239">
                                                Santo Tomé y Príncipe
                                            </option><option value="SN"  data-phone-prefix="+221">
                                                Senegal
                                            </option><option value="RS"  data-phone-prefix="+381">
                                                Serbia
                                            </option><option value="SC"  data-phone-prefix="+248">
                                                Seychelles
                                            </option><option value="SL"  data-phone-prefix="+232">
                                                Sierra Leona
                                            </option><option value="SG"  data-phone-prefix="+65">
                                                Singapur
                                            </option><option value="SX"  data-phone-prefix="+1">
                                                Sint Maarten
                                            </option><option value="SY"  data-phone-prefix="+963">
                                                Siria
                                            </option><option value="SO"  data-phone-prefix="+252">
                                                Somalia
                                            </option><option value="LK"  data-phone-prefix="+94">
                                                Sri Lanka
                                            </option><option value="ZA"  data-phone-prefix="+27">
                                                Sudáfrica
                                            </option><option value="SD"  data-phone-prefix="+249">
                                                Sudán
                                            </option><option value="SS"  data-phone-prefix="+211">
                                                Sudán del Sur
                                            </option><option value="SE"  data-phone-prefix="+46">
                                                Suecia
                                            </option><option value="CH"  data-phone-prefix="+41">
                                                Suiza
                                            </option><option value="SR"  data-phone-prefix="+597">
                                                Surinam
                                            </option><option value="SJ"  data-phone-prefix="+47">
                                                Svalbard y Jan Mayen
                                            </option><option value="TH"  data-phone-prefix="+66">
                                                Tailandia
                                            </option><option value="TW"  data-phone-prefix="+886">
                                                Taiwán
                                            </option><option value="TZ"  data-phone-prefix="+255">
                                                Tanzania
                                            </option><option value="TJ"  data-phone-prefix="+992">
                                                Tayikistán
                                            </option><option value="IO"  data-phone-prefix="+246">
                                                Territorio Británico del Océano Índico
                                            </option><option value="TF"  data-phone-prefix="">
                                                Territorios Australes Franceses
                                            </option><option value="PS"  data-phone-prefix="+970">
                                                Territorios Palestinos
                                            </option><option value="TL"  data-phone-prefix="+670">
                                                Timor-Leste
                                            </option><option value="TG"  data-phone-prefix="+228">
                                                Togo
                                            </option><option value="TK"  data-phone-prefix="+690">
                                                Tokelau
                                            </option><option value="TO"  data-phone-prefix="+676">
                                                Tonga
                                            </option><option value="TT"  data-phone-prefix="+1">
                                                Trinidad y Tobago
                                            </option><option value="TN"  data-phone-prefix="+216">
                                                Túnez
                                            </option><option value="TM"  data-phone-prefix="+993">
                                                Turkmenistán
                                            </option><option value="TR"  data-phone-prefix="+90">
                                                Turquía
                                            </option><option value="TV"  data-phone-prefix="+688">
                                                Tuvalu
                                            </option><option value="UA"  data-phone-prefix="+380">
                                                Ucrania
                                            </option><option value="UG"  data-phone-prefix="+256">
                                                Uganda
                                            </option><option value="UY"  data-phone-prefix="+598">
                                                Uruguay
                                            </option><option value="UZ"  data-phone-prefix="+998">
                                                Uzbekistán
                                            </option><option value="VU"  data-phone-prefix="+678">
                                                Vanuatu
                                            </option><option value="VE"  data-phone-prefix="+58">
                                                Venezuela
                                            </option><option value="VN"  data-phone-prefix="+84">
                                                Vietnam
                                            </option><option value="WF"  data-phone-prefix="+681">
                                                Wallis y Futuna
                                            </option><option value="YE"  data-phone-prefix="+967">
                                                Yemen
                                            </option><option value="DJ"  data-phone-prefix="+253">
                                                Yibuti
                                            </option><option value="ZM"  data-phone-prefix="+260">
                                                Zambia
                                            </option><option value="ZW"  data-phone-prefix="+263">
                                                Zimbabue
                                            </option>
                                        </select>
                                        <input pattern="^[+][0-9]{5,}$" title="+[código de prefijo del país][seguido del número de teléfono]" style="margin-top: 6px;" type="text" class="input" name="step1[phone]" id="phone2" placeholder="Número de teléfono" required>
                                        <input type="email" class="input" name="step1[email]" placeholder="Email" required >
                                        <br>
                                        <div class="form-group">
                                            <select class="form-control currencytwo" name="type" required>
                                                <option value="">Tipo de cuenta</option>
                                                <option value="1">Cuenta Cent</option>
                                                <option value="2">Cuenta Estándar</option>
                                                <option value="3">Cuenta Prima</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control currencytwo" name="currency" required  oninvalid="this.setCustomValidity('Por favor complete este campo')" oninput="setCustomValidity('')">
                                                <option value=""> Moneda de la billetera</option>
                                                <option value="USD">USD</option>
                                                <option value="EUR">EUR</option>
                                            </select>
                                        </div>
                                        <input type="text" class="input" id="email" name="initial" placeholder="Saldo inicial" required>
                                        <div class="form-group">
                                            <select class="form-control currencytwo" name="leverage" required>
                                                <option value="">Aprovechar</option>
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
                                            <input class="chkbx" type="checkbox" id="accept" name="step1[document_group_1]" required oninvalid="this.setCustomValidity('Por favor complete este campo')" oninput="setCustomValidity('')">
                                            <label for="accept">
                                                <p>
                                                    Acepto las  <a href="https://bkfx.io/es/legal-documents/" target="_blank">Políticas y Términos y Condiciones de BKFX</a>
                                                </p>
                                            </label>
                                        </div>
                                        <input class="btnNew" type="submit" name="Continue" value="Seguir">
                                    </form>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="caution container">
                    <h4>Advertencia de riesgo:</h4>
                    <p>
                        operar con instrumentos de divisas y CFD puede implicar un alto nivel de riesgo y puede resultar en la pérdida de todo su capital invertido.
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
        footer { padding: 25px 0; min-height: 100%; width: 100%; background: #F1F1F1}
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




