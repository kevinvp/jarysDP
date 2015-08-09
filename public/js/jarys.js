$(document).ready(function ($) {

  function changeTopContect(content) {
    $('.top-info').html(content);
    $(".top-info").customScrollbar();
  }

  function changeBotContect(content) {
    $('.bot-info').html(content);
    $(".bot-info").customScrollbar();
  }

  changeTopContect('<p>Vestibulum id tortor sit amet velit luctus gravida eget ut felis. Duis a mollis nisl, at tristique odio. Nunc cursus quam augue, vel accumsan nisl luctus quis. Mauris id sapien vehicula, sollicitudin augue accumsan, posuere nisl. Suspendisse semper leo eget aliquet hendrerit. Donec suscipit felis aliquam, auctor odio nec, cursus magna. Nullam in est tortor. Fusce eget est sit amet lorem maximus facilisis. Duis commodo ligula et felis lobortis dapibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis est enim, finibus quis lobortis fringilla, suscipit non mauris.In semper eu urna eu lobortis. Fusce non eros at tortor facilisis posuere id eu neque. In hac habitasse platea dictumst. Curabitur a volutpat risus. Nunc eget enim efficitur, vulputate justo at, ornare turpis. Etiam et lobortis est. Integer id ex non ex porttitor pulvinar. </p>');





});