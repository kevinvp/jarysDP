$(document).ready(function ($) {

  function changeTopContent(content) {
    $('.top-info').load('../resources/views/subviews/' + content);
    $(".top-info").customScrollbar();
  }



  function changeBotContent(content) {
    $('.bot-info').load('../resources/views/subviews/' + content);
    $(".bot-info").customScrollbar();
  }


  function changeBotImages() {
    images = $('.bot-info').data('images');

    html = '';

    if(images.length > 0) {

      images.forEach(function (entry) {
        html += '<img class="side-img" src="../public/jarys/dp/folders/' + entry + '" /><p>&nbsp;</p>';
      });

      $('.bot-info').html(html);
      $(".bot-info").customScrollbar();
    }
  }

  changeBotImages();

  changeTopContent('dp/folder.html');


});