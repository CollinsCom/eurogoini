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
            <tr>
              <td>
                <span style="float:left;"><a onclick="history.back(-1)" class="linea" style="margin-bottom:0px; color: #3888cb; cursor: pointer;">&larr;Regresar</a></span>
                <span style="float:right;"><p class="TituloArt">&nbsp;&nbsp;Sistema duo</p></span>
              </td>
            </tr>                
            <tr align="right"><td ><img src="/eurogoini/ima/linea.jpg" height="3" width="500"/></td></tr>
            <tr> </td></tr> 
          </tr>

          <tr height="15"> </tr>
            <td align="center" valign="top">             
               <span><p class="TituloArt">Sistema duo</p></span>
               <img src="/eurogoini/ima/linea.jpg" height="3" width="190"/>  

              <div align="left"> 
                <span class="TextList" onclick="location.href='sistemaduo.php'">Beneficios</br></span>
                 <!-- <span class="TextList" onclick="location.href='sistemaduo_carc.php'">Características</br></span> -->
                 <span class="TextList" onclick="window.open('/eurogoini/archivos/manuales/Guiaduo.pdf')">Manual</br></span>
                 <!-- <span class="TextList" onclick="window.open('/eurogoini/archivos/tablasResist/.pdf')">Tabla de resistencias</br></span> -->
                 <!-- <span class="TextList" onclick="window.open('/eurogoini/archivos/fichasTec/.pdf')">Ficha técnica</br></span> -->
                 <!-- <span class="TextList" onclick="location.href=''">Video</br></span> -->
                 <span class="TextList" onclick="window.open('/eurogoini/archivos/garantias/Certificado.pdf')">Garantía  y certificados</br></span></div>
            </td>
            <td align="center" rowspan="2">
              <img class="imgArt" src="/eurogoini/ima/menus/sistemaDuo_B.png" style="margin-top: -30px;"/> 
              <div align="left">
                <p class="Titulo">
                  Adiós a fugas y desperdicios de agua
                </p>         
              
                <ul class="linea">
                  <li>Único con sistema de sellado perfecto CERO FUGAS.</li>
                  <li>Sistema de doble descarga = 3 Litros para líquidos y 5 litros para sólidos.</li>
                  <li>Es de fácil instalación y compatible con cualquier tanque y WC.</li>
                  <li>Ahorra hasta 34,000 litros de agua al año.</li>
                  <li>Cumple con la norma NOM-010-CNA-2000.</li>
</ul>
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
