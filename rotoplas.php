<?php

include_once('funciones.php');

get_head('EUROGOINI');
?>
<body onload="MM_preloadImages('/eurogoini/ima/botones/btns_01.jpg','/eurogoini/ima/botones/btns_02.jpg','/eurogoini/ima/botones/btns_03.jpg')">
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
            <tr><td ><span style="float:right;"><p class="Titulo" >&nbsp;&nbsp;Distribuidor Autorizado</p></span></td></tr>                
            <tr align="right"  ><td ><img src="/eurogoini/ima/linea.jpg" height="3" width="500"/></td></tr>
            <tr><td valign="top"><span style="padding-top: 6px"><p align="left" class="Titulo">&nbsp;&nbsp;Seleccione una opción</p></span></td></tr> 
          </tr>

          <tr height="50"> </tr>
            <td colspan="2" align="center">

            <div class="divMenu" onclick="location.href='gobierno.php'">
              <span class="titMenu"><span class="cap">G</span>OBIERNO</span>
              <img class="imgMenu" src="/eurogoini/ima/menus/img_tinaco2.png"/>
            </div>
            <div class="divMenu" onclick="location.href='construccion.php'">
              <span class="titMenu"><span class="cap">C</span>ONSTRUCCIÓN</span>
              <img class="imgMenu" src="/eurogoini/ima/menus/img-cisternaGd2.png"/>
            </div>
            
            <div class="divMenu" onclick="location.href='rotoplas/agroindustrias'">
              <span class="titMenu"><span class="cap">A</span>GROINDUSTRIAS</span>
              <img class="imgMenu" src="/eurogoini/ima/menus/img-tVertagro.png"/>
            </div>
            <!-- <img src="/eurogoini/ima/menus/construccion.png" height="160" width="200"/>
            <img src="/eurogoini/ima/menus/gobierno.png" height="160" width="200"/> --></td>

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
