<?php    session_start();   $_SESSION['sendmail'] = TRUE;?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link href="google.ico" rel="shortcut icon">
<link href="styles.css" media="screen" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="prettyForms/prettyForms.js"></script>
<link rel="stylesheet" href="prettyForms/prettyForms.css" type="text/css" media="screen" />
<title>GDG Lima - Mensaje Navideño</title>
</head>
<body onload="prettyForms()">
<!--
<div id="" style=" float:right;width:150px;" align="center"> <img src="2.jpg" width="150" height="150"><img src="1.jpg" width="150" height="150"><img src="3.jpg" width="150" height="150"><img src="4.jpg" width="150" height="150"><img src="5.jpg" width="150" height="150"></div> -->

<div id="page-wrap" style="margin-left:50%;; margin-right:50%;">
  <h1 style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Mensaje Navideño del GDG Lima</h1>
  <br>
  <form id="myForm" action="card.php">
    <table width="826" height="303">
      <tr>
        <td width="263"><label>Tu Nombre:</label></td>
        <td colspan="2"><input name="txt_from_name" type="text" placeholder="Nombre" value="" style="width:300px;"></td>
      </tr>
      <tr> 
        <!-- <td><label>Tu Correo:</label></td>
            <td><input type="text" name="txt_from_mail"/> </td>--> 
      </tr>
      <tr>
        <td><label>Nombre (Destinatario):</label></td>
        <td colspan="2"><input type="text" name="txt_to_name" placeholder="Dirigido a:"  style="width:300px;"/></td>
      </tr>
      <tr> 
        <!-- <td><label>Correo(Destinatario):</label></td>
            <td><input type="text" name="txt_to_mail"/></td> ---> 
      </tr>
      <tr>
        <td><label>Mensaje (Destinatario):</label></td>
        <td width="318"><textarea  name="txt_to_message" style="width:300px; height:190px; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;"> </textarea></td>
        <td width="229"><img src="GDG-Logo.png" width="200" height="200"></td>
      </tr>
      <tr>
        <td><label>URL Perfil Facebook (Destinatario):</label></td>
        <td colspan="2"><input type="text" name="txt_to_linkfbaccount" placeholder="http://www.facebook.com/gdglima" style="width:300px;" /></td>
      </tr>
      <br>
      <tr>
        <td><input type="submit" value="Enviar"></td>
      </tr>
    </table>
  </form>
  
  
  <div  style=" float:right;width:150px;" align="center"> <img src="5.jpg" width="150" height="150"></div>
  <div  style=" float:right;width:150px;" align="center"> <img src="4.jpg" width="150" height="150"></div>
  <div  style=" float:right;width:150px;" align="center"> <img src="3.jpg" width="150" height="150"></div>
  <div  style=" float:right;width:150px;" align="center"> <img src="2.jpg" width="150" height="150"></div>
  <div  style=" float:right;width:150px;" align="center"> <img src="1.jpg" width="150" height="150"></div>
 
  
</div>



<script type="text/javascript">
	var _gaq = _gaq || []; _gaq.push(['_setAccount', 'UA-68528-29']); _gaq.push(['_trackPageview']); (function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'; (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga); })();
</script>
</body>

<!--
<div id="" style="float:left; margin-top:-500px; margin-left:70%; margin-right:50%;" align="center"> <img src="2.jpg" width="150" height="150"><img src="1.jpg" width="150" height="150"><img src="3.jpg" width="150px" height="150px;"><img src="4.jpg" width="150" height="150"><img src="5.jpg" width="150" height="150"></div>--->



</html>
