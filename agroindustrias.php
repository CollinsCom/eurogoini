<?php

include_once('funciones.php');

get_head('EUROGOINI');
?>

<body onload="MM_preload../Images('/eurogoini/ima/botones/btns_01.jpg','/eurogoini/ima/botones/btns_02.jpg','/eurogoini/ima/botones/btns_03.jpg')">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <?php get_header();?>  
  <tr>
    <td height="437" background="/eurogoini/ima/bck16.jpg" style="background-repeat:repeat-x;">&nbsp;</td>
    <td align="right" valign="top" background="/eurogoini/ima/bck16.jpg" style="background-repeat:repeat-x;"><img src="/eurogoini/ima/bck17.jpg" width="48" height="264" /></td>
    <td width="794" rowspan="2" align="center" valign="top"><table width="750" border="0" cellspacing="0" cellpadding="0">      
      <tr>
        <td height="120" align="left" valign="bottom">
          
          <table align="center" width="700" border="0" cellspacing="0" cellpadding="0"> 
            <tr>

              <td rowspan="4" align="left" ><img src="/eurogoini/ima/tn_53232_Logo Rotoplas 240.jpg" width="190" border="0px" onclick="location.href='/eurogoini/rotoplas.php'" style="cursor: pointer;"></td>

              <td align="left" valign="top" class="informacion" height="20px" width="500"></td>
            <tr>
              <td>
                <span style="float:left;"><a onclick="history.back(-1)" class="linea" style="margin-bottom:0px; color: #3888cb; cursor: pointer;">&larr;Regresar</a></span>
                <span style="float:right;"><p class="Titulo">&nbsp;&nbsp;Distribuidor Autorizado</p></span>
              </td>
            </tr>                
            <tr align="right"><td ><img src="/eurogoini/ima/linea.jpg" height="3" width="500"/></td></tr>
            <tr> <td valign="top"><span style="padding-top: 6px"><p align="left" class="Titulo">&nbsp;&nbsp;Seleccione una opción</p></span></td></tr> 
          </tr>

          <tr height="50"> </tr>
            <td colspan="2" align="center">
            <!-- <div class="divMenu" onclick="location.href='mejoramiento.php'">
              <span class="titMenu"><span class="cap">M</span>EJORAMIENTO</span>
              <img class="imgMenu" src="/eurogoini/ima/menus/img-banobio.png"/>
            </div>  -->
            <div class="divMenu" onclick="location.href='agroindustrias/tuboplus.php'">
              <span class="titMenu"><span class="cap">C</span>ONDUCCIÓN DE AGUA</span>
              <img class="imgMenu" src="/eurogoini/ima/menus/img-tuboplus_hidraulico.png"/>
            </div> 
            <div class="divMenu" onclick="location.href='agroindustrias/almacenamiento.php'">
              <span class="titMenu"><span class="cap">A</span>LMACENAMIENTO</span>
              <img class="imgMenu" src="/eurogoini/ima/menus/img-tagro.png"/>
            </div>        
            <div class="divMenu" onclick="location.href='agroindustrias/accesorios.php'">
              <span class="titMenu"><span class="cap">A</span>CCESORIOS</span>
              <img class="imgMenu" style="margin-top: 25px;" src="/eurogoini/ima/menus/accesorios.png"/>
            </div> 
            </td>
          </tr>
          </table>

        </td>
      </tr>
      <tr>
        <td align="center" valign="bottom">&nbsp;</td>
      </tr>
    </table></td>
    <td align="left" valign="top" background="/eurogoini/ima/bck16.jpg" style="background-repeat:repeat-x;"><img src="/eurogoini/ima/bck17.jpg" width="48" height="264" /></td>
    <td background="/eurogoini/ima/bck16.jpg" style="background-repeat:repeat-x;">&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="2">&nbsp;</td>
    <td rowspan="2">&nbsp;</td>
    <td rowspan="2">&nbsp;</td>
    <td rowspan="2">&nbsp;</td>
  </tr>
  <?php get_footer(); ?>
</body>
</html>
