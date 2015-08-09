$(document).ready(function () {


  
  $('[data-toggle="offcanvas"]').click(function () {
    $('.row-offcanvas').toggleClass('active')
  });



  function changeTopContect (content) {
    console.log(content);
     $('.top-info').text(content);
  }

  changeTopContect('test');



});