$(document).ready(function(){
$("ul.menu li ").click(function(){
    $(".headerbotton").slideToggle("1000");
    $("ul.menu li ol").toggle("1000");
  });
	

});