$(document).ready(function(){$(".flexslider").flexslider({animation:"slide",directionNav:!1});$("#filter a").click(function(){$("ul#filter .current").removeClass("current");$(this).parent().addClass("current");var e=$(this).find("span").text().toLowerCase().replace(" ","-");e=="all"?$("ul#portfolio li.hidden").fadeIn("slow").removeClass("hidden"):$("ul#portfolio li").each(function(){$(this).hasClass(e)?$(this).fadeIn("slow").removeClass("hidden"):$(this).fadeOut("normal").addClass("hidden")});return!1});$("#hireForm .btn").click(function(){var e=$("#name").val(),t=$("#email").val(),n=$("#company").val(),r=$("#budget").val(),i=$("#message").val(),s="name="+e+"&email="+t+"&company="+n+"&budget="+r+"&message="+i;if(e===""){$("#name").css({"background-color":"#FAFFBD"});$("#name").click(function(){$(this).css({"background-color":"#ffffff"})})}else if(t===""){$("#email").css({"background-color":"#FAFFBD"});$("#email").click(function(){$(this).css({"background-color":"#ffffff"})})}else if(n===""){$("#company").css({"background-color":"#FAFFBD"});$("#company").click(function(){$(this).css({"background-color":"#ffffff"})})}else if(r==="DEFAULT"){$("#budget").css({"background-color":"#FAFFBD"});$("#budget").click(function(){$(this).css({"background-color":"#ffffff"})})}else if(i===""){$("#message").css({"background-color":"#FAFFBD"});$("#message").click(function(){$(this).css({"background-color":"#ffffff"})})}else $.ajax({type:"POST",url:"/hireMail.php",data:s,success:function(){$(".success").fadeIn(1e3)}});return!1})});