<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<script>
var dloc= window.location.href;
dloc = dloc.split("?");
var st = dloc[1];
</script>
<script type="text/javascript" src="data.js"></script>
<script>
if(st==null) window.location.href = "login.php?"
else try {
    var obj = JSON.parse(data);
    console.log(obj[0][st].username);
    console.log(st)
    if(st==obj[0][st].username) console.log("same")
    else window.location.href = "login.php?state";
} catch (error) {
  console.error(error);
  window.location.href = "login.php?state";
}
    



function onload(){
    var obj = JSON.parse(data);
    document.getElementById("username").innerHTML = st;
    startTime();
}
function startTime() {
    
    var today = new Date();
    lastdate = new Date(obj[0][st].date);
    document.getElementById('lastdate').innerHTML = lastdate.toLocaleString("es-MX");
    document.getElementById('currdate').innerHTML = today.toLocaleString("es-MX");
    var diffMs = (today-lastdate); // milliseconds between now & Christmas
    var diffDays = Math.floor(diffMs / 86400000); // days
    var diffHrs = Math.floor((diffMs % 86400000) / 3600000); // hours
    var diffMins = Math.round(((diffMs % 86400000) % 3600000) / 60000);
    var dif = diffDays + " days\n" + diffHrs + " hours\n" + diffMins + " minutes";
    document.getElementById('datedif').innerHTML = dif;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>
</head>

<body onload="onload()" >
<button onclick="window.location.href='login.php'">Logout</button>  
<div id="username">s</div> 
<div class="container">
  <div class="dates" id="lastdate"></div>
  <div class="dates" id="datedif"></div>
  <div class="dates" id="currdate"></div>
</div>




</body>
</html>
