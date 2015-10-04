
$(document).ready(function(){


  $.scrollIt({
    topOffset: -60
  });

  $('.clients').find('img').mouseover(function(){
    this.src = this.src.replace('a.jpg', '.jpg');
  }).mouseout(function(){
      this.src = this.src.replace('.jpg', 'a.jpg');
    });

});

