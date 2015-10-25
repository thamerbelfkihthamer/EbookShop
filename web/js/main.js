$("document").ready(function() { 
    $(".cp").keyup(function() {
        if ($(this).val().length === 5) {
            $.ajax({
               type: 'get',
               url: Routing.generate('villes', {cp:  $(this).val()}),
               beforeSend: function() {
                   if ($(".loading").length == 0) {
                       $("form .ville").parent().append('<div class="loading"></div>');
                   }
                   $(".ville option").remove();
               },
               success: function(data) {
                   $.each(data.ville, function(index,value) {
                       $(".ville").append($('<option>',{ value : value , text: value }));
                   });
                   $(".loading").remove();
               }
            });
        } else {
            $(".ville").val('');
        }
    });
   
         //--------------- scroll -------------------------------
   $("html").niceScroll({

    cursorcolor: "#1dba9b",
    scrollspeed: 150,
    cursordragspeed: 0.9,
  });

   var ht = $("html").getNiceScroll();
     ht.resize();
     $(".separatora").hide();
     $(".separatora").slideDown(1000);
     $(".separatorb").hide();
     $(".separatorb").slideDown(1000);
     $(".lastearticle").hide();
     $(".lastearticle").slideDown(1000);
     $(".entrer").hide();
     $(".entrer").slideDown(1000);

  $(".logo img").mouseover(function(){
      $(this).animate({
       height: 175,
       width: 225
      },1000).animate({
          height: 150,
       width: 200
      },1000);
  });
  
  $(".reseau_sociaux img").mouseover(function(){
      $(this).animate({
       height: 50,
	width: 50
      },1000).animate({
          height: 40,
	width: 40
      },1000);
  });
  
  $("#produitacceuil li").mousemove(function(e) {
          var y = e.pageY;
          var x = e.pageX;
          $('#xy').html("x = " + x + ", y = " + y);
         });
         $("#produitacceuil li").hide();
         $("#produitacceuil li").slideDown(2000);
  
});