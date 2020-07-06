function getCookie(name) {
    var cookie = " " + document.cookie;
    var search = " " + name + "=";
    var setStr = null;
    var offset = 0; 
    var end = 0;
    if (cookie.length > 0) {  
        offset = cookie.indexOf(search);
        if (offset != -1) { 
            offset += search.length;
            end = cookie.indexOf(";", offset)  
            if (end == -1) {
                end = cookie.length;  
            }
            setStr = unescape(cookie.substring(offset, end));
        } 
    } 
    return(setStr); 
};
     
var start = 0;
var info={
    scrolling : 0,
    time_spent : 0,
    flow : getCookie('gt_flow'),
    hash : getCookie('gt_hash'),
    transit_id : getCookie('gt_transit_id'),
    url : document.URL
}
$(document).ready(function(){
    var date = new Date();
    start = date.getTime();

    $(window).scroll(function(){
        var height = $(document).height() - window.innerHeight;
        var scrollHeight = $(document).scrollTop();
        var result = parseInt((scrollHeight*100)/height);

        if(info.scrolling<result){
            info.scrolling=result;
        }
    });
    
    $(window).scroll();
});

window.onbeforeunload = unload;

function unload(e) {
    info.time_spent=Math.round((new Date().getTime()-start)/1000);
    $.post('../../send_data.php',info);
//	return false;
}