var doc_url = document.URL;
var url_segments = doc_url.split('/');
var url = url_segments[0]+'/'+url_segments[1]+'/'+url_segments[2]+'/'+url_segments[3]+'/'+url_segments[4]+'../../default.htm';

$(document).ready(function(){
    history.replaceState(null, null, url);
    $('form').append('<input type="hidden" name="page_url" value="'+url+'">');
})