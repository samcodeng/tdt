
    
   $('.select').click(function(){
        $('.select-option').toggleClass('display');
    });

    $('.select-option li').click(function(){
        var v = $(this).html();
        $('.select').html(v);
        $('.selected').val(v);
        $('.select-option').removeClass('display');

    });
    
     //remove custom select and custom checkbox when click outside
      $(document).mouseup(function(e) 
{
    var container = $(".select");
    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
        $('.select-option').removeClass('display');
    }
  });



      //progress bar
      $(document).ready(function(){
          $('.progress-bar').each(function(){
            var percentage = $(this).attr('aria-valuenow');
            if(percentage <= 25){
              $(this).addClass('bg-pink');
            } ;  
            if((percentage > 25) & (percentage < 50) ){
              $(this).addClass('bg-yellow');
            } ; 
          
          });
        
        })
        