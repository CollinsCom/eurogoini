<?php 

//***************************************************
//  Archivo de funciones para Eurogoini
//  
//  *Este archivo contiene las funciones necesarias
//  para que funcione el sitio web, favor de no
//  borrar el contenido.
//***************************************************

    // include_once('conexion.php');
    // include_once('menu.php');
  define('_path','http://sitios.collinscom.com/eurogoini/');

?>

<?php
  function get_head($titulo){
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php $titulo ?></title>
<link rel="stylesheet" src="<?php echo _path; ?>normalize.css" />
<link rel="stylesheet" href="<?php echo _path; ?>css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo _path; ?>css/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo _path; ?>css/vanadium.css" type="text/css" media="screen" />

<script type="text/javascript" src="<?php echo _path; ?>scripts/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="<?php echo _path; ?>scripts/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="<?php echo _path; ?>scripts/vanadium.js"></script>
<!--<script type="text/javascript">
  function MM_preloadImages() { 
    var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
      var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
      if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
  }

  function MM_swapImgRestore() { //v3.0
    var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
  }1

  function MM_findObj(n, d) { //v4.01
    var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
      d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
    if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
    for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
    if(!x && d.getElementById) x=d.getElementById(n); return x;
  }

  function MM_swapImage() { //v3.0
    var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
     if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
  }
  
  
</script>-->
<!-- <script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script> -->

</head>
<?php
}
?>

<?php
function get_header(){
?>
  <tr>
      <td background="<?php echo _path; ?>ima/bck01.jpg">&nbsp;</td>
      <td width="56" align="right" background="<?php echo _path; ?>ima/bck01.jpg">
        <img src="<?php echo _path; ?>ima/bck02.jpg" width="48" height="131" />
      </td>
      <td width="794" height="131" align="center">
        <a href="<?php echo _path; ?>inicio.php">
          <img src="<?php echo _path; ?>ima/top.jpg" width="794" height="131" />
        </a>
      </td>
      <td width="52" align="left" background="<?php echo _path; ?>ima/bck04.jpg"><img src="<?php echo _path; ?>ima/bck03.jpg" width="52" height="131" /></td>
      <td background="<?php echo _path; ?>ima/bck04.jpg">&nbsp;</td>
    </tr>
    <tr>
      <td background="<?php echo _path; ?>ima/bck05.jpg">&nbsp;</td>
      <td align="right" background="<?php echo _path; ?>ima/bck05.jpg"><img src="<?php echo _path; ?>ima/bck06.jpg" width="48" height="154" /></td>
      <td align="center" valign="middle" background="<?php echo _path; ?>ima/bck07.jpg">
         <div id="banner">
          <div id="wrapper">
            <div class="slider-wrapper theme-default"> 
              <div id="slider" class="nivoSlider">
                <img src="<?php echo _path; ?>images/banner0.png"/>
                <img src="<?php echo _path; ?>images/banner1.png" alt="Termopl&aacute;sticas"/>
                <img src="<?php echo _path; ?>images/banner2.png" alt="Placas"/>
                <img src="<?php echo _path; ?>images/banner3.png" alt="Sistemas de Tuber&iacute;as"/>
                <img src="<?php echo _path; ?>images/banner4.png" alt="V&aacute;lvulas"/>
                <img src="<?php echo _path; ?>images/banner5.png" alt="Accesorios y más."/>                
              </div>              
            </div>
          </div>
        </div>
        <script>
                $(window).load(function() {
                  $('#slider').nivoSlider({
                    effect: 'sliceDownLeft',
                    slices: 15,
                    boxCols: 8,
                    boxRows: 8,
                    animSpeed: 250,
                    pauseTime: 3000,
                    startSlide: 0,
                    directionNav: false,
                    controlNav: false,
                    controlNavThumbs: false,
                    pauseOnHover: false,
                    manualAdvance: false,
                    prevText: '',
                    nextText: '',
                    randomStart: false,
                    beforeChange: function(){},
                    afterChange: function(){},
                    slideshowEnd: function(){},
                    lastSlide: function(){},
                    afterLoad: function(){}
                    });
                  });
                </script>
         <!--<script type="text/javascript">
           AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','794','height','155','src','top','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','top' ); end AC code
        </script>
         <noscript>
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="794" height="155">
            <param name="movie" value="top.swf" />
             <param name="quality" value="high" /> 
            <embed src="top.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="794" height="155"></embed> 
           </object>
        </noscript> --> 
      </td>
      <td align="left" background="<?php echo _path; ?>ima/bck09.jpg">
        <img src="<?php echo _path; ?>ima/bck08.jpg" width="53" height="154" />
      </td>
      <td background="<?php echo _path; ?>ima/bck09.jpg">&nbsp;</td>
    </tr>
    <tr>
      <td background="<?php echo _path; ?>ima/bck10.jpg">&nbsp;</td>
      <td align="right" background="<?php echo _path; ?>ima/bck10.jpg">
        <img src="<?php echo _path; ?>ima/bck11.jpg" width="49" height="39" />
      </td>
      <td align="left" valign="top" background="<?php echo _path; ?>ima/bck12.jpg">
        <table width="100" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><a href="empresa.php"><img src="<?php echo _path; ?>ima/botones/btn_01.jpg" width="108" height="38" border="0" id="Image1" onmouseover="MM_swapImage('Image1','','<?php echo _path; ?>ima/botones/btns_01.jpg',1)" onmouseout="MM_swapImgRestore()" /></a></td>
            <td><a href="actividades.php"><img src="<?php echo _path; ?>ima/botones/btn_02.jpg" width="200" height="38" border="0" id="Image2" onmouseover="MM_swapImage('Image2','','<?php echo _path; ?>ima/botones/btns_02.jpg',1)" onmouseout="MM_swapImgRestore()" /></a></td>
            <td><a href="contacto.php"><img src="<?php echo _path; ?>ima/botones/btn_03.jpg" width="114" height="38" border="0" id="Image3" onmouseover="MM_swapImage('Image3','','<?php echo _path; ?>ima/botones/btns_03.jpg',1)" onmouseout="MM_swapImgRestore()" /></a></td>
          </tr>
        </table>
      </td>
    <td align="left" background="<?php echo _path; ?>ima/bck14.jpg"><img src="<?php echo _path; ?>ima/bck13.jpg" width="53" height="39" /></td>
    <td background="<?php echo _path; ?>ima/bck14.jpg">&nbsp;</td>
  </tr>
<?php
}
?>

<?php
function get_footer(){
?>
  <tr>
    <td height="54" align="center" valign="middle" background="/eurogoini/ima/bck19.jpg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="86%" align="left" valign="middle"><span class="style1">   <a href="<?php echo _path; ?>inicio.php">Inicio</a>  <span class="linea">|</span>  <a href="contacto.php">Contacto</a>  <span class="linea">|</span>  <a href="actividades.php">Actividades Principales</a>  <span class="linea">|</span>  <a href="empresa.php">Empresa</a> </span></td>
        <td width="14%">
          <a href="<?php echo _path; ?>inicio.php">
            <img src="/eurogoini/ima/bck20.jpg" width="172" height="54" /></a>
        </td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="794" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="774" align="right" valign="middle"><a href="http://www.collinscom.com" target="_blank"><img src="/eurogoini/ima/collinscom.gif" width="78" height="13" border="0" /></a></td>
    <td width="20" align="right" valign="middle">&nbsp;</td>
  </tr>
<?php
}
?>

<?php
function base(){
?>

  <!-- Codigo HTML -->

<?php
}
?>
