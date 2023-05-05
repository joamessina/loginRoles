<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pronosticos para Centros de Ski</title>
    <link rel="stylesheet" href="{{ asset('formularioPronos/pronos_form.css') }}">
</head>

<body id="main_body">
    <div id="form_container">

        <h1><a>Pronosticos para Centros de Ski</a></h1>
        <form class="appnitro" action="{{ route('formulario.storePronos') }}" method="POST">
            @csrf
            <input type="hidden" name="type" value="Admin">
            <div class="form_description">
                <h2>Pronosticos para Centros de Ski</h2>
                <p></p>
            </div>

            <ul>

                <li id="li_15">
                    <label class="description" for="element_15">Seleccione la estaci&oacute;n de esqui que desea actualizar </label>

                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">

                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td width="50%" height="20"> <input name="tipo" type="radio" value="catedral" checked>
                                Cerro Catedral</td>
                            <td width="50%" height="20"> <input type="radio" name="tipo" value="laslenias">
                                Las Le&ntilde;as</td>
                        </tr>
                        <tr>
                            <td height="20"> <input type="radio" name="tipo" value="chapelco">
                                Chapelco</td>
                            <td height="20"> <input type="radio" name="tipo" value="castor">
                                Cerro Castor</td>
                        </tr>
                        <tr>
                            <td height="20"> <input type="radio" name="tipo" value="bayo">
                                Bayo</td>
                            <td height="20"> <input type="radio" name="tipo" value="penitentes">
                                Penitentes</td>
                        </tr>
                        <tr>
                            <td height="20"> <input type="radio" name="tipo" value="lahoya">
                                La Hoya</td>
                            <td height="20"> <input type="radio" name="tipo" value="caviahue">
                                Caviahue</td>
                        </tr>

                    </table>
                </li>
                <li class="section_break">
                <li id="li_15">
                    <p><label class="description" for="element_15">Pron&oacute;stico oficial de las 18:00 horas</label></p>
                </li>

                <li id="li_15">
                    <p><label class="description" for="element_15">Estado de las Pistas</label></p>
                </li>

                <table width='100%' border='0' align='center' cellpadding='0' cellspacing='0'>
                    <tr>
                        <td width="25%">&nbsp;</td>
                        <td width="17%">&nbsp;</td>
                        <td width="11%">&nbsp;</td>
                        <td width="37%">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Altura de la nieve:</td>
                        <td>&nbsp; </td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>En base:</td>
                        <td><input name='base' type='text' id='base' style='BACKGROUND-COLOR: lightskyblue; COLOR: black; FONT-SIZE:  9pt; WIDTH: 90px' value=""></td>
                        <td>calidad:</td>
                        <td><input name='base_calidad' type='text' id='base_calidad' style='BACKGROUND-COLOR: lightskyblue; COLOR: black; FONT-SIZE:  9pt; WIDTH: 240px' value=""></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>En intermedia:</td>
                        <td><input name='intermedia' type='text' id='intermedia' style='BACKGROUND-COLOR: lightskyblue; COLOR: black; FONT-SIZE:  9pt; WIDTH: 90px' value=""></td>
                        <td>calidad:</td>
                        <td><input name='intermedia_calidad' type='text' id='intermedia_calidad' style='BACKGROUND-COLOR: lightskyblue; COLOR: black; FONT-SIZE:  9pt; WIDTH: 240px' value=""></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>En cumbre:</td>
                        <td><input name='cumbre' type='text' id='cumbre' style='BACKGROUND-COLOR: lightskyblue; COLOR: black; FONT-SIZE:  9pt; WIDTH: 90px' value=""></td>
                        <td>
                            <p>calidad:</p>
                        </td>
                        <td><input name='cumbre_calidad' type='text' id='cumbre_calidad' style='BACKGROUND-COLOR: lightskyblue; COLOR: black; FONT-SIZE:  9pt; WIDTH: 240px' value=""></td>
                    </tr>
                    <tr>
                        <td colspan="4">&nbsp;</td>
                    </tr>
                </table>
                </li>

                <li class="section_break">
                    <p></p>
                </li>
                <li id="li_16">
                    <table width='100%' border='0' align='center' cellpadding='0' cellspacing='0'>
                        <tr>
                            <td width="25%">&nbsp;</td>
                            <td width="17%">&nbsp;</td>
                            <td width="11%">&nbsp;</td>
                            <td width="37%">&nbsp;</td>
                        </tr>
                        <tr>
                            <td height='20' colspan='4' bgcolor="#4B75B3">
                                <font color='#FFFFFF'>Pronostico
                                    para el dia 1</font>
                            </td>
                        </tr>
                        <tr>
                            <td colspan='4'>
                                <table width='100%' border='0' cellpadding='0' cellspacing='0'>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width='25%'>Icono(por la ma&ntilde;ana)</td>
                                        <td width='75%'>
                                            <select name='icono10' size='1' id='icono10'>
                                                <option> Despejado </option><br>
                                                <option> Algo nublado </option><br>
                                                <option> Parcialmente nublado </option><br>
                                                <option> Lluvias </option><br>
                                                <option> Lluvias y tormentas </option><br>
                                                <option> Nevadas </option><br>
                                                <option> Lloviznas </option><br>
                                                <option> Nevadas aisladas </option><br>
                                                <option> Nubosidad en aumento </option><br>
                                                <option> Nubosidad en disminuci�n </option><br>
                                                <option> Nublado </option><br>
                                                <option> Inestable con probables precipitaciones </option><br>
                                                <option> Inestable </option><br>
                                                <option> Lluvias y lloviznas </option><br>
                                                <option> Tormentas aisladas </option><br>
                                                <option> Nubosidad variable </option><br>
                                                <option> Mejorando </option><br>
                                                <option> Lluvia y nieve </option><br>
                                                <option> Desmejorando </option><br>
                                                <option> Viento Blanco </option><br>
                                                <option> Ventoso </option><br>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height='10'></td>
                                        <td height='10'></td>
                                    </tr>
                                    <tr>
                                        <td>Icono(por la tarde/noche)</td>
                                        <td>
                                            <select name='icono11' size='1' id='icono11'>
                                                <option> Despejado </option><br>
                                                <option> Algo nublado </option><br>
                                                <option> Parcialmente nublado </option><br>
                                                <option> Lluvias </option><br>
                                                <option> Lluvias y tormentas </option><br>
                                                <option> Nevadas </option><br>
                                                <option> Lloviznas </option><br>
                                                <option> Nevadas aisladas </option><br>
                                                <option> Nubosidad en aumento </option><br>
                                                <option> Nubosidad en disminuci�n </option><br>
                                                <option> Nublado </option><br>
                                                <option> Inestable con probables precipitaciones </option><br>
                                                <option> Inestable </option><br>
                                                <option> Lluvias y lloviznas </option><br>
                                                <option> Tormentas aisladas </option><br>
                                                <option> Nubosidad variable </option><br>
                                                <option> Mejorando </option><br>
                                                <option> Lluvia y nieve </option><br>
                                                <option> Desmejorando </option><br>
                                                <option> Viento Blanco </option><br>
                                                <option> Ventoso </option><br>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height='10'></td>
                                        <td height='10'></td>
                                    </tr>
                                    <tr>
                                        <td>Temperatura Minima</td>
                                        <td><input name='tminima_hoy' type='text' id='tminima_hoy' style='BACKGROUND-COLOR: lightskyblue; COLOR: black; FONT-SIZE:  9pt; WIDTH: 50px' value="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height='10'></td>
                                        <td height='10'></td>
                                    </tr>
                                    <tr>
                                        <td>Temperatura Maxima</td>
                                        <td><input name='tmaxima_hoy' type='text' id='tmaxima_hoy' style='BACKGROUND-COLOR: lightskyblue; COLOR: black; FONT-SIZE:  9pt; WIDTH: 50px' value="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height='10'></td>
                                        <td height='10'></td>
                                    </tr>
                                    <tr>
                                        <td>Texto para la ma&ntilde;ana</td>
                                        <td><textarea name='texto_sig1' rows='4' id='textarea10' style='BACKGROUND-COLOR: lightskyblue; COLOR: black; FONT-SIZE:  9pt; WIDTH: 390px'></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height='10'></td>
                                        <td height='10'></td>
                                    </tr>
                                    <tr>
                                        <td>Texto para la Tarde/Noche</td>
                                        <td><textarea name='texto_sig2' rows='4' id='textarea11' style='BACKGROUND-COLOR: lightskyblue; COLOR: black; FONT-SIZE:  9pt; WIDTH: 390px'></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="10"></td>
                                        <td height="10"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">&nbsp;</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td height="20" colspan="4" bgcolor="#4B75B3">
                                <font color="#FFFFFF">Pron&oacute;stico para el d&iacute;a
                                    2</font>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <table width='100%' border='0' cellpadding='0' cellspacing='0'>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width='25%'>Icono(por la ma&ntilde;ana)</td>
                                        <td width='75%'>
                                            <select name='icono12' size='1' id='icono12'>
                                                <option> Despejado </option><br>
                                                <option> Algo nublado </option><br>
                                                <option> Parcialmente nublado </option><br>
                                                <option> Lluvias </option><br>
                                                <option> Lluvias y tormentas </option><br>
                                                <option> Nevadas </option><br>
                                                <option> Lloviznas </option><br>
                                                <option> Nevadas aisladas </option><br>
                                                <option> Nubosidad en aumento </option><br>
                                                <option> Nubosidad en disminuci�n </option><br>
                                                <option> Nublado </option><br>
                                                <option> Inestable con probables precipitaciones </option><br>
                                                <option> Inestable </option><br>
                                                <option> Lluvias y lloviznas </option><br>
                                                <option> Tormentas aisladas </option><br>
                                                <option> Nubosidad variable </option><br>
                                                <option> Mejorando </option><br>
                                                <option> Lluvia y nieve </option><br>
                                                <option> Desmejorando </option><br>
                                                <option> Viento Blanco </option><br>
                                                <option> Ventoso </option><br>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height='10'></td>
                                        <td height='10'></td>
                                    </tr>
                                    <tr>
                                        <td>Icono(por la tarde/noche)</td>
                                        <td>
                                            <select name='icono13' size='1' id='icono13'>
                                                <option> Despejado </option><br>
                                                <option> Algo nublado </option><br>
                                                <option> Parcialmente nublado </option><br>
                                                <option> Lluvias </option><br>
                                                <option> Lluvias y tormentas </option><br>
                                                <option> Nevadas </option><br>
                                                <option> Lloviznas </option><br>
                                                <option> Nevadas aisladas </option><br>
                                                <option> Nubosidad en aumento </option><br>
                                                <option> Nubosidad en disminuci�n </option><br>
                                                <option> Nublado </option><br>
                                                <option> Inestable con probables precipitaciones </option><br>
                                                <option> Inestable </option><br>
                                                <option> Lluvias y lloviznas </option><br>
                                                <option> Tormentas aisladas </option><br>
                                                <option> Nubosidad variable </option><br>
                                                <option> Mejorando </option><br>
                                                <option> Lluvia y nieve </option><br>
                                                <option> Desmejorando </option><br>
                                                <option> Viento Blanco </option><br>
                                                <option> Ventoso </option><br>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height='10'></td>
                                        <td height='10'></td>
                                    </tr>
                                    <tr>
                                        <td>Temperatura Minima</td>
                                        <td><input name='tminima_sig' type='text' id='tminima_sig' style='BACKGROUND-COLOR: lightskyblue; COLOR: black; FONT-SIZE:  9pt; WIDTH: 50px' value="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height='10'></td>
                                        <td height='10'></td>
                                    </tr>
                                    <tr>
                                        <td>Temperatura Maxima</td>
                                        <td><input name='tmaxima_sig' type='text' id='tmaxima_sig' style='BACKGROUND-COLOR: lightskyblue; COLOR: black; FONT-SIZE:  9pt; WIDTH: 50px' value="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height='10'></td>
                                        <td height='10'></td>
                                    </tr>
                                    <tr>
                                        <td>Texto para la ma&ntilde;ana</td>
                                        <td><textarea name='texto_sig3' rows='4' id='textarea12' style='BACKGROUND-COLOR: lightskyblue; COLOR: black; FONT-SIZE:  9pt; WIDTH: 390px'></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height='10'></td>
                                        <td height='10'></td>
                                    </tr>
                                    <tr>
                                        <td>Texto para la Tarde/Noche</td>
                                        <td><textarea name='texto_sig4' rows='4' id='textarea13' style='BACKGROUND-COLOR: lightskyblue; COLOR: black; FONT-SIZE:  9pt; WIDTH: 390px'></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="10"></td>
                                        <td height="10"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">&nbsp;</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">&nbsp; </td>
                        </tr>
                        <tr>
                            <td colspan="4" bgcolor="#4B75B3">
                                <font color="#FFFFFF">Pron&oacute;stico para el d&iacute;a 3</font>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <table width='100%' border='0' cellpadding='0' cellspacing='0'>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width='25%'>Icono(por la ma&ntilde;ana)</td>
                                        <td width='75%'>
                                            <select name='icono14' size='1' id='icono14'>
                                                <option> Despejado </option><br>
                                                <option> Algo nublado </option><br>
                                                <option> Parcialmente nublado </option><br>
                                                <option> Lluvias </option><br>
                                                <option> Lluvias y tormentas </option><br>
                                                <option> Nevadas </option><br>
                                                <option> Lloviznas </option><br>
                                                <option> Nevadas aisladas </option><br>
                                                <option> Nubosidad en aumento </option><br>
                                                <option> Nubosidad en disminuci�n </option><br>
                                                <option> Nublado </option><br>
                                                <option> Inestable con probables precipitaciones </option><br>
                                                <option> Inestable </option><br>
                                                <option> Lluvias y lloviznas </option><br>
                                                <option> Tormentas aisladas </option><br>
                                                <option> Nubosidad variable </option><br>
                                                <option> Mejorando </option><br>
                                                <option> Lluvia y nieve </option><br>
                                                <option> Desmejorando </option><br>
                                                <option> Viento Blanco </option><br>
                                                <option> Ventoso </option><br>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height='10'></td>
                                        <td height='10'></td>
                                    </tr>
                                    <tr>
                                        <td>Icono(por la tarde/noche)</td>
                                        <td>
                                            <select name='icono15' size='1' id='icono15'>
                                                <option> Despejado </option><br>
                                                <option> Algo nublado </option><br>
                                                <option> Parcialmente nublado </option><br>
                                                <option> Lluvias </option><br>
                                                <option> Lluvias y tormentas </option><br>
                                                <option> Nevadas </option><br>
                                                <option> Lloviznas </option><br>
                                                <option> Nevadas aisladas </option><br>
                                                <option> Nubosidad en aumento </option><br>
                                                <option> Nubosidad en disminuci�n </option><br>
                                                <option> Nublado </option><br>
                                                <option> Inestable con probables precipitaciones </option><br>
                                                <option> Inestable </option><br>
                                                <option> Lluvias y lloviznas </option><br>
                                                <option> Tormentas aisladas </option><br>
                                                <option> Nubosidad variable </option><br>
                                                <option> Mejorando </option><br>
                                                <option> Lluvia y nieve </option><br>
                                                <option> Desmejorando </option><br>
                                                <option> Viento Blanco </option><br>
                                                <option> Ventoso </option><br>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height='10'></td>
                                        <td height='10'></td>
                                    </tr>
                                    <tr>
                                        <td>Temperatura Minima</td>
                                        <td><input name='tminima_sig3' type='text' id='tminima_sig3' style='BACKGROUND-COLOR: lightskyblue; COLOR: black; FONT-SIZE:  9pt; WIDTH: 50px' value="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height='10'></td>
                                        <td height='10'></td>
                                    </tr>
                                    <tr>
                                        <td>Temperatura Maxima</td>
                                        <td><input name='tmaxima_sig3' type='text' id='tmaxima_sig3' style='BACKGROUND-COLOR: lightskyblue; COLOR: black; FONT-SIZE:  9pt; WIDTH: 50px' value="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height='10'></td>
                                        <td height='10'></td>
                                    </tr>
                                    <tr>
                                        <td>Texto para la ma&ntilde;ana</td>
                                        <td><textarea name='texto_sig5' rows='4' id='textarea14' style='BACKGROUND-COLOR: lightskyblue; COLOR: black; FONT-SIZE:  9pt; WIDTH: 390px'></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height='10'></td>
                                        <td height='10'></td>
                                    </tr>
                                    <tr>
                                        <td>Texto para la Tarde/Noche</td>
                                        <td><textarea name='texto_sig6' rows='4' id='textarea15' style='BACKGROUND-COLOR: lightskyblue; COLOR: black; FONT-SIZE:  9pt; WIDTH: 390px'></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="10"></td>
                                        <td height="10"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">&nbsp;</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="4" bgcolor="#4B75B3">
                                <font color="#FFFFFF">Pron&oacute;stico para el d&iacute;a 4</font>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <table width='100%' border='0' cellpadding='0' cellspacing='0'>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width='25%'>Icono(por la ma&ntilde;ana)</td>
                                        <td width='75%'>
                                            <select name='icono16' size='1' id='icono16'>
                                                <option> Despejado </option><br>
                                                <option> Algo nublado </option><br>
                                                <option> Parcialmente nublado </option><br>
                                                <option> Lluvias </option><br>
                                                <option> Lluvias y tormentas </option><br>
                                                <option> Nevadas </option><br>
                                                <option> Lloviznas </option><br>
                                                <option> Nevadas aisladas </option><br>
                                                <option> Nubosidad en aumento </option><br>
                                                <option> Nubosidad en disminuci�n </option><br>
                                                <option> Nublado </option><br>
                                                <option> Inestable con probables precipitaciones </option><br>
                                                <option> Inestable </option><br>
                                                <option> Lluvias y lloviznas </option><br>
                                                <option> Tormentas aisladas </option><br>
                                                <option> Nubosidad variable </option><br>
                                                <option> Mejorando </option><br>
                                                <option> Lluvia y nieve </option><br>
                                                <option> Desmejorando </option><br>
                                                <option> Viento Blanco </option><br>
                                                <option> Ventoso </option><br>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height='10'></td>
                                        <td height='10'></td>
                                    </tr>
                                    <tr>
                                        <td>Icono(por la tarde/noche)</td>
                                        <td>
                                            <select name='icono17' size='1' id='icono17'>
                                                <option> Despejado </option><br>
                                                <option> Algo nublado </option><br>
                                                <option> Parcialmente nublado </option><br>
                                                <option> Lluvias </option><br>
                                                <option> Lluvias y tormentas </option><br>
                                                <option> Nevadas </option><br>
                                                <option> Lloviznas </option><br>
                                                <option> Nevadas aisladas </option><br>
                                                <option> Nubosidad en aumento </option><br>
                                                <option> Nubosidad en disminuci�n </option><br>
                                                <option> Nublado </option><br>
                                                <option> Inestable con probables precipitaciones </option><br>
                                                <option> Inestable </option><br>
                                                <option> Lluvias y lloviznas </option><br>
                                                <option> Tormentas aisladas </option><br>
                                                <option> Nubosidad variable </option><br>
                                                <option> Mejorando </option><br>
                                                <option> Lluvia y nieve </option><br>
                                                <option> Desmejorando </option><br>
                                                <option> Viento Blanco </option><br>
                                                <option> Ventoso </option><br>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height='10'></td>
                                        <td height='10'></td>
                                    </tr>
                                    <tr>
                                        <td>Temperatura Minima</td>
                                        <td><input name='tminima_sig4' type='text' id='tminima_sig4' style='BACKGROUND-COLOR: lightskyblue; COLOR: black; FONT-SIZE:  9pt; WIDTH: 50px' value="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height='10'></td>
                                        <td height='10'></td>
                                    </tr>
                                    <tr>
                                        <td>Temperatura Maxima</td>
                                        <td><input name='tmaxima_sig4' type='text' id='tmaxima_sig4' style='BACKGROUND-COLOR: lightskyblue; COLOR: black; FONT-SIZE:  9pt; WIDTH: 50px' value="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height='10'></td>
                                        <td height='10'></td>
                                    </tr>
                                    <tr>
                                        <td>Texto para la ma&ntilde;ana</td>
                                        <td><textarea name='texto_sig7' rows='4' id='textarea16' style='BACKGROUND-COLOR: lightskyblue; COLOR: black; FONT-SIZE:  9pt; WIDTH: 390px'></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height='10'></td>
                                        <td height='10'></td>
                                    </tr>
                                    <tr>
                                        <td>Texto para la Tarde/Noche</td>
                                        <td><textarea name='texto_sig8' rows='4' id='textarea17' style='BACKGROUND-COLOR: lightskyblue; COLOR: black; FONT-SIZE:  9pt; WIDTH: 390px'></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="10"></td>
                                        <td height="10"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">&nbsp;</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </li>
            </ul>
            <p>
            <div align='center'>
            <button type="submit">Enviar</button>
            </div>
            </p>
        </form>
    </div>
    
</body>
</html>