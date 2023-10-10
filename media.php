<?php
if(!isset($_SESSION))
{
	session_start();
}
?>

<?php
include"fungsi/koneksi.php";
require("fungsi/koneksi1.php");
include"fungsi/fungsi_kalender.php";

?>
<script src="includes/ajax/libs/jquery.js"></script>
<script src="includes/js/jsDate/Scripts/DateTimePicker.js" type="text/javascript"></script>
    <script type="text/javascript" src="includes/ajax/libs/jquery.ui.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="includes/ajax/libs/jquery.ui.css">
<script src="js/jquery-1.9.1.js">
</script>
<script> 
$(document).ready(function(){
  $("#flip2").click(function(){
    $("#panel2").slideToggle("slow2");
  });
});
</script>

<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome To E-Learning<?php echo $_GET['dir']."-".$_GET['module']; ?></title>
<link rel="shortcut icon" HREF="">
<link href="css.css" rel="stylesheet" type="text/css" />
<link href="css/helper.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/dropdown/dropdown.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/dropdown/themes/nvidia.com/default.advanced.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="css.css">
<link rel="stylesheet" type="text/css" href="css/style6.css">
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript">
$(function() {
    $('.date-picker').datepicker( {
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        dateFormat: 'MM yy',
        onClose: function(dateText, inst) { 
            var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
            var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
            $(this).datepicker('setDate', new Date(year, month, 1));
        }
    });
});
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}

function altRows(id){
	if(document.getElementsByTagName){  
		
		var table = document.getElementById(id);  
		var rows = table.getElementsByTagName("tr"); 
		 
		for(i = 0; i < rows.length; i++){          
			if(i % 2 == 0){
				rows[i].className = "evenrowcolor";
			}else{
				rows[i].className = "oddrowcolor";
			}      
		}
	}
}

window.onload=function(){
	altRows('alternatecolor');
}
</script>

<style type="text/css">body, a:hover {cursor: url(http://cur.cursors-4u.net/cursors/cur-11/cur1026.ani) url(http://cur.cursors-4u.net/cursors/cur-11/cur1026.png),, progress;}</style>

<style type="text/css">
    body { font-family:tahoma; font-size:12px; }
    #container { width:450px; padding:20px 40px; margin:50px auto; border:0px solid #555; box-shadow:0px 0px 2px #555; }
    input[type="text"] { width:200px; }
    input[type="text"], textarea { padding:5px; margin:2px 0px; border: 1px solid #777; }
    input[type="submit"], input[type="reset"],input[type="button"] { padding: 3px 15px; margin:2px 0px; font-weight:bold; cursor:pointer; }
 	#error { border:1px solid red; background:#ffc0c0; padding:5px; }
</style>

	<link rel="stylesheet" href="galery/galery_files/vlb_files1/vlightbox1.css" type="text/css" />
		<link rel="stylesheet" href="galery/galery_files/vlb_files1/visuallightbox.css" type="text/css" media="screen" />
<script src="galery/galery_files/vlb_engine/jquery.min.js" type="text/javascript"></script>
		<script src="galery/galery_files/vlb_engine/visuallightbox.js" type="text/javascript"></script>
</head>

<body>
 
<center>
<div id="awal"><div class="box1">

<table width="100%" border="0" align="center" cellpadding="3" cellspacing="3" bgcolor="#FFFFFF">
   <tr>
    <td colspan="4" align="left" valign="top"><table width="100%" border="0" cellspacing="3" cellpadding="3" class="altrowstable">
    	<tr>
     	<td colspan="4" align="center"><img src="" width="1081" height="193" />    	</td>
    	</tr>
        <!--
   	 	<tr>
    	<td  colspan="2" align="center"><p class="wadah-mengetik">Welcome To E-Discussion SMAN 12 Padang</a></p></td>
      	</tr> -->
<!---------------------------------------------------#Header------------------------------------------------------------------------------------->


<!---------------------------------------------------#Menu--------------------------------------------------------------------------------------->
		<tr>
		<td colspan="4">
		<div class="fly">
   <div class="content">
       <ul id="nav" class="dropdown dropdown-horizontal" class="kotak_fixed">
        <li><a href="./" >Home</a></li>
          		<li><a href="./" title="">&nbsp;Profil Sekolah</a>
                	<ul>
                    	
                        <li><a href="./media.php?page=visi" title="">&nbsp;Visi Misi</a></li>
                        <li><a href="./media.php?page=struktur" title="">&nbsp;About Sekolah</a></li>
                    </ul>        
                </li>
			 	
              <?
			  if(empty($_SESSION[id_acount])){
			  ?>
			  
			  <li><a href="./media.php?page=registrasi">Registrasi</a></li>
			  
			  <?
			  }else{
			  ?>
			  <li><a href="./media.php?page=download">Download Materi</a></li>
			  <li><a href="./media.php?page=ulangan">Quiz</a></li>
			  <li><a href="./media.php?page=nilai">Nilai</a></li>
			  <li><a href="./media.php?page=diskusi">Forum Diskusi</a></li>
			  <li><a href="">Setting</a>
                	<ul>
                    	<li><a href="./media.php?page=edit_akun" title="">&nbsp;Edit Akun</a></li>
                    </ul>        
                </li>
			<?
			}
			?>  	
	</ul>
	</div>
	</div>
	</td>
	</tr>
<!---------------------------------------------------#Sidebar------------------------------------------------------------------------------------->

<!---------------------------------------------------#Content------------------------------------------------------------------------------------->
    <tr>
        <td width="80%" valign="top" align="justify" colspan="3">
		<?
		$page=$_GET[page];
		if($page=='home'){
			if(empty($_SESSION[id_acount])){
			include"home.php";
			}else{
			include"home.php";
			}
		}
		else if($page=='profile'){
		include"profile.php";
		}
		else if($page=='registrasi'){
		include"registrasi.php";
		}
		else if($page=='sejarah'){
		include"sejarah.php";
		}
		else if($page=='visi'){
		include"visimisi.php";
		}
		else if($page=='struktur'){
		include"strukture.php";
		}
		else if($page=='surat'){
		include"materi.php";
		}
		else if($page=='edit_akun'){
		include"modul/mod_registrasi/edit_akun.php";
		}
		else if($page=='laporan'){
		include"laporan_surat.php";
		}
		else if($page=='status'){
		include"status.php";
		}
		else if($page=='laporan'){
		include"laporan_surat.php";
		}
		else if($page=='ulangan'){
		include"s_ulangan.php";
		}
		else if($page=='nilai'){
		include"s_nilai.php";
		}
        else if($page=='download'){
		include"download.php";
		}
		else if($page=='diskusi'){
		include"diskusi.php";
		}

		?>
        </td>
                <td width="20%" align="left" valign="top">
		<?php
		if(isset($_SESSION[id_acount]))
		{
		include("logout.php");
		include("jam.php");
		}else{
		include("login.php");
		include("jam.php");
		}
		?>
<br>

		</td>
		</tr>
		    
  </table>
  </td>
  </tr>
  
<!---------------------------------------------------#Footer------------------------------------------------------------------------------------->
  <tr>
    <td colspan="2" align="center" valign="top" bgcolor="#0099FF"><div id="bawah">Copyright &copy; 2015 by: <a href="#">R</a><br />
    </div></td>
  </tr>
</table>
</div>
</div>
</body>
</html>