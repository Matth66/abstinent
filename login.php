<!DOCTYPE html>
<html>
<head>
<script>
function onload(){
    var dloc= window.location.href;
    dloc = dloc.split("?");
    if(dloc[1]!=null) alert1(dloc[1]);
    function alert1(dloc){
        switch (dloc) {
        case "state":
            alert('wrong user');
            break;
        case "right":
            console.log('The fourth item is free!!');
            break;
        default:
            console.log('Idk error');
    }
    }
}
</script>
</head>

<body onload="onload()">

<form action="index.php" method="POST">
    <h1>Użytkownik</h1>
    <input type="text" id="user" name="user"><br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>