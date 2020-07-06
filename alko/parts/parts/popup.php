<div class="eeee" id="myBack" style="cursor: default; display: none;"></div>
<div style="display: none;" class="fadepopup modal_div" id="myModal">      
    <div id="kmacb-form" class="modalx kmacb-form kmacb-form2 eoxp">
        <div class="modal-block">
            <div class="oui">
               <div class="close"><a href="https://tracker.el-slim.in.ua/click.php?lp=1" target="_blank" style="text-decoration: none; color:red;">Х</a></div>
                <div class="ouimain">
                    <p class="ouimainp">Подождите!</p>
                    <div class="ouimain-text-img">
                        <div class="ouimain-text" style="width: 100%;">
                            <br><p style="position: relative; top: -60px">Для Вас действует уникальное предложение. <br>Только до <strong><script>var d = new Date();d.setDate(d.getDate());c = d.toLocaleString();document.write(c.substr(0,10));</script></strong> 
                            	Вы можете cэкономить более 40%! Нажимайте "Узнать подробнее", чтобы не упустить эту возможность!<br></p>
                        </div>
                    </div>
                    <a href="https://tracker.el-slim.in.ua/click.php?lp=1" target="_blank" style="text-decoration: none; margin-left:auto; margin-right:auto; width:681px; color: white;"><center><button type="submit" class="submit">УЗНАТЬ ПОДРОБНЕЕ!</button></center></a>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
.oui { width: 681px; height: 360px; background: transparent linear-gradient(135deg, rgb(60, 114, 181) 0%, rgb(123, 159, 204) 100%) repeat scroll 0% 0%; font-family: Roboto !important; position: relative; border: 5px solid rgb(221, 221, 221); }
.eeee { background-color: rgba(0, 0, 0, 0.7); display: none; width: 100%; height: 100%; z-index: 333; position: fixed; top: 0;}
.kmacb-form2 .modal-block { left: 50%; margin-left: -396px; position: fixed; top: 6%; z-index: 8105; width: 792px; height: 470px; border-radius: 5px; border: 0px none; box-shadow: none; font-family: Arial,sans-serif; overflow: hidden; color: rgb(34, 34, 34); }
.ouimainp { font-size: 30px; font-family: Arial,Helvetica,sans-serif; font-weight: bold; padding-top: 30px; display: block; color: rgb(255, 255, 255); text-align: center; }
.ouimain-text-img { display: block; width: 100%; padding: 0px 5%; margin-top: 60px; }
.ouimain-text { display: block; margin-top: -10px; }
.ouimain-text p { font-family: Arial,Helvetica,sans-serif; line-height: 1.5; text-align: left; color: rgb(255, 255, 255); font-size: 22px; padding-bottom: 5px; }
.ouimain-text-img::after { content: ""; display: block; clear: both; }
.close { margin-top: 10px; margin-right: 10px ;position: absolute; top: 1px; right: 5px; font-size: 40px; cursor: pointer; }
.submit { margin: 0px 0px; text-align: center; width: 100%; height: auto; background: transparent none repeat scroll 0px center; position: static; padding: 0px; border: 0px none; }
.submit { box-sizing: border-box; }
.submit { float: none; }
.submit[type="text"] { height: 56px; line-height: 56px; color: rgb(34, 34, 34); border: 2px solid rgb(189, 189, 189); padding: 0px 15px; width: 100%; display: inline-block; text-indent: 0px; border-radius: 3px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; font-size: 20px; font-style: normal; box-shadow: none; position: static; margin: 0px 0px 10px; }
.submit[type="submit"] { position: relative; cursor: pointer; border: 1px solid rgb(73, 155, 234); background: transparent linear-gradient(135deg, rgb(222, 69, 92) 0%, rgb(222, 69, 92) 13%, rgb(192, 31, 55) 76%, rgb(192, 31, 55) 100%) repeat scroll 0% 0%; color: rgb(255, 255, 255); padding: 0px 10px; text-transform: uppercase; line-height: 60px; vertical-align: top; display: block; text-indent: 0px; font-style: normal; font-family: Arial,Helvetica,sans-serif; width: 402px; height: 64px; opacity: 1; bottom: 30px; /*margin-left: 195px;*/ text-align: center; font-size: 28px; font-weight: 900; border-radius: 10px; transition: all 0.6s ease 0s; }
.submit[type="submit"]:hover { background: transparent linear-gradient(to bottom, rgb(222, 69, 92) 0%, rgb(222, 69, 92) 13%, rgb(192, 31, 55) 76%, rgb(192, 31, 55) 100%) repeat scroll 0% 0%; }
   .blink {
    animation: blink 2s infinite; /* Параметры анимации */
   }
   @keyframes blink {
    from { opacity: 1; /* Непрозрачный текст */ }
    to { opacity: 0; /* Прозрачный текст */ }
   }
</style>

<script type="text/javascript">
  var flag = true;
  $(window).mouseout(function(e){
    if(e.pageY - $(window).scrollTop() < 1 && flag == true){
        $('.fadepopup, .eoxp').fadeIn(300);
          $('.eeee').fadeIn(300);
        flag = false;
    }
  });

  var modal = document.getElementById('myModal');
  var close = document.getElementsByClassName("close")[0];
  var back = document.getElementById('myBack');
  close.onclick = function () {
    back.style.display = "none";
    modal.style.display = "none";
  }
</script>