<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>PHP YOUTUBE DOWNLOADER</title>
	<link href="download_css.css" type="text/css" rel="stylesheet">
	<script>
function getVideo(videoID) {
document.getElementById("video_info").innerHTML="Getting information... Please wait";
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("video_info").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","download.php?videoid="+videoID,true);
  xmlhttp.send();
}
</script>
</head>


<body>
<div class="main" style="width:460px; min-height:400px; border:#333333 1px solid; padding:10px;">
<div class="video_form">
<form>
<input type="text" name="videoID" onKeyUp="getVideo(this.value)" placeholder="Paste URL Here" style="height:25px;width:96%; padding:6px; border:#00CCFF 2px solid">
</form>
</div>

<div id="video_info" style="margin-top:20px;">
</div>
</div>

</div>
</body>
</html>
