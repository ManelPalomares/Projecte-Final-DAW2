var xhttp:any;
var xmlDoc:any;

function crearPlaylist(){
    var nomP:any = document.getElementById("nomPlaylist").value;
    var descP:any = document.getElementById("descripcio").value;
       
    if(nomP == "" || descP == ""){
        alert("No poden haver-hi camps buits");
    }
    else{
        if (window.XMLHttpRequest) {
            xhttp = new XMLHttpRequest();
        }
        else if (window.ActiveXObject) {
            xhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xhttp.onreadystatechange = playlistCreada;
        xhttp.open('POST', '../php/controlador/crearPlaylist.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("nomP="+nomP+"&"+"descP="+descP);
    }
}

function playlistCreada(){
    if (xhttp.readyState == 4 && xhttp.status == 200) {
        history.go(-1);
    }
}