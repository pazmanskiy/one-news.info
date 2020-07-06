
    if (typeof(window.orientation)=="undefined")
    {
        var o = document.createElement("img");
        o.src='https://xhostname.ru/click.php?event9=0';
    }
    else
    {
        var o = document.createElement("img");
        o.src='https://xhostname.ru/click.php?event9=1';
    }

var scroll = 0;
window.onscroll = function(){
if( scroll != 1 ){
    scroll = 1;
    var o = document.createElement("img");
    o.src = "https://xhostname.ru/click.php?event6=1";
    }
}


function pushToTrackerViaImage(){
    var pushURL = 'https://xhostname.ru/click.php?event7=1';
    var img = document.createElement('img');
    img.src=pushURL;
    img.style.display='none';
    document.body.appendChild( img );
}
function pushAfterTimeout(timeout){
    setTimeout(pushToTrackerViaImage, timeout*1000);
}
var TIMEOUT_IN_SECONDS = N;
pushAfterTimeout(TIMEOUT_IN_SECONDS);
