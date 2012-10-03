<?php

include_once('funciones.php');

get_head('EUROGOINI');
?>

<body>
<!-- onload="MM_preloadImages('<?php echo _path; ?>ima/botones/btns_02.jpg','<?php echo _path; ?>ima/botones/btns_01.jpg')" -->
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <?php get_header();?>  
  <tr>
    <td height="357" background="<?php echo _path; ?>ima/bck16.jpg" bgcolor="#FFFFFF" style="background-repeat:repeat-x;">&nbsp;</td>
    <td align="right" valign="top" background="<?php echo _path; ?>ima/bck16.jpg" bgcolor="#FFFFFF" style="background-repeat:repeat-x;"><img src="<?php echo _path; ?>ima/bck17.jpg" width="48" height="264" /></td>
    <td rowspan="2" align="center" valign="middle" bgcolor="#1367B0"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="38" align="center" valign="middle" background="<?php echo _path; ?>ima/bck19.jpg" class="style5">Dirección: <span class="lineaCont">Redactores No. 94 col. Periodistas, Zapopan, Jalisco, México, C.P. 45078</span><span class="style7">   </span>Tel./Fax:<span class="lineaCont"> (33) 3855 8307 </span> eurogoini@eurogoini.com</td>
        </tr>
        </table>
      <table width="594" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="594" height="262" align="center" valign="top" background="imatop/ima-form/cdo_14.gif">
          <form id="form1" name="form1" method="post" action="send-email.php">
            <table width="554" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="32" colspan="4" align="center" valign="middle"><p class="style5">Por favor llene el siguiente formulario y nos comunicaremos con usted a la brevedad posible. </p></td>
                </tr>
              <tr>
                <td width="108" align="right" valign="middle"><span class="style5"> Nombre  </span></td>
                <td height="32" colspan="3" align="left" valign="middle"><input name="nombre" type="text" id="nombre" size="60" class=":required"/></td>
              </tr>             

              <tr>
                <td height="58" align="right" valign="middle" bgcolor="#1367B0"><p class="style5">   Domicilio  </p></td>
                <td height="58" colspan="3" align="left" valign="middle" bgcolor="#1367B0"><textarea name="domicilio" cols="50" rows="3" id="domicilio" style="max-width: 411px" ></textarea></td>
              </tr>
              <tr>
                <td height="32" align="right" valign="middle" bgcolor="#1367B0"><p class="style5">   E-mail  </p></td>
                <td height="32" colspan="3" align="left" valign="middle" bgcolor="#1367B0"><input name="mail" type="text" id="mail" size="60" class=":required :email :only_on_blur" /></td>
              </tr>
              <tr>
                <td height="32" align="right" valign="middle" bgcolor="#1367B0"><p class="style5">   Tel&eacute;fono  </p></td>
                <td height="32" align="left" valign="middle" bgcolor="#1367B0"><input name="telefono" type="text" id="telefono"/></td> <!-- class=":integer :min_length;7 :max_length;13 :only_on_blur"   /></td> -->
                <td height="32" align="left" valign="middle" bgcolor="#1367B0"><p class="style5">Celular</p></td>
                <td height="32" align="left" valign="middle" bgcolor="#1367B0"><input type="text" name="tel" id="celular" size="25" /></td>
              </tr>
              <tr>
                <td height="64" align="right" valign="middle" bgcolor="#1367B0"><p class="style5">   Comentarios   </p></td>
                <td height="64" colspan="3" align="left" valign="middle" bgcolor="#1367B0"><textarea name="comentario" cols="50" rows="3" id="comentario" class=":required" style="max-width: 411px"></textarea></td>
              </tr>
            </table>
          <table width="554" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="235" height="26" align="right" valign="middle" bgcolor="#1367B0"><p class="style5">   ¿Por qué medio se enteró de nosotros?  </p></td>
                <td height="32" align="left" valign="middle" bgcolor="#1367B0"> 
                  <input name="medio" type="text" id="medio" size="39" /></td>
              </tr>
            </table>
          <table width="554" height="43" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="444" height="43" align="center" valign="middle" bgcolor="#1367B0">&nbsp;</td>
                <td width="110" height="43" align="center" valign="middle" bgcolor="#1367B0"><input type="submit" name="boton" id="boton" value="Enviar" /></td>
              </tr>
            </table>
        </form>
            <label></label></td>
      </tr>
    </table>
  </td>
    <td align="left" valign="top" background="<?php echo _path; ?>ima/bck16.jpg" bgcolor="#FFFFFF" style="background-repeat:repeat-x;"><img src="<?php echo _path; ?>ima/bck17.jpg" width="48" height="264" /></td>
    <td background="<?php echo _path; ?>ima/bck16.jpg" bgcolor="#FFFFFF" style="background-repeat:repeat-x;">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" rowspan="2" bgcolor="#FFFFFF">&nbsp;</td>
    <td colspan="2" rowspan="2" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="54" align="center" valign="middle" background="<?php echo _path; ?>ima/bck19.jpg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="86%" align="left" valign="middle">
          <span class="style1">   
            <a href="<?php echo _path; ?>inicio.php">Inicio</a> <span class="lineaCont">|</span>  
            <a href="<?php echo _path; ?>contacto.php">Contacto</a> <span class="lineaCont">|</span>  
            <a href="<?php echo _path; ?>actividades.php">Actividades Principales</a> <span class="lineaCont">|</span>  
            <a href="<?php echo _path; ?>empresa.php">Empresa</a> </span>
          </td>
        <td width="14%"><img src="<?php echo _path; ?>ima/bck20.jpg" width="172" height="54" /></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="794" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="774" align="right" valign="middle"><a href="http://www.collinscom.com" target="_blank"><img src="<?php echo _path; ?>ima/collinscom.gif" width="78" height="13" border="0" /></a></td>
    <td width="20" align="right" valign="middle">&nbsp;</td>
  </tr>
</table>
</body>
</html>
