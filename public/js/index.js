$(document).ready(function(){

    $("#toggler").click(function(event){
        $('#wrap').toggleClass('toggled');

        var right = $('.sidebar').css("right");
        if (right == '0px')
        {
            $('.sidebar').css({ 'right': '-17rem' });
            $('.layer').fadeOut();
        }
        else {
            $('.sidebar').css({ 'right': '0' });
            $('.layer').fadeIn(); 
        }
    });

    $('.layer').click(function () {
        $('.sidebar').css({ 'right': '-17rem' });
        $('.layer').fadeOut();
    });

    $(".search-icon").click(function () {
        $(".search-input").slideToggle("slow");
    });
});

// Disable right-click
document.addEventListener('contextmenu', event => event.preventDefault());

// Disable certain keypress events (e.g., Print Screen, Ctrl+Shift+I)
document.addEventListener('keydown', event => {
  if ((event.key === 'PrintScreen') ||
      (event.ctrlKey && event.shiftKey && event.key === 'I')) { // Example: DevTools
    event.preventDefault();
    alert('This action is not allowed.');
  }
});