jQuery(document).ready(function($) {
    $("#loading").show();//显示loading
    setTimeout("$('#loading').hide();", 2500);//隐藏loading

    $(".icon-menu").click(function(){
  $("#navbar").slideToggle();
});
});
