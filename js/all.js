jQuery(document).ready(function($) {
      $(".container").show();//显示loading
      setTimeout("$('.container').hide();", 2500);//隐藏loading

      $('#toggle').click(function() {
   $(this).toggleClass('active');
   $('#overlay').toggleClass('open');
  });
});
