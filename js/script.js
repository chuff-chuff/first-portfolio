$(function(){
$('#hamburger').on('click touchstart', function(){
  $(this).children().toggleClass('click');
  $($(this).attr('href')).slideToggle();
  return false;
});
});