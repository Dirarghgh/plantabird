window.addEventListener('DOMContentLoaded', function() {
    var myDiv = document.querySelector('.main_header');
    var scrollPosition = window.scrollY;
  
    if (scrollPosition >= 120) {
      myDiv.classList.add('scrolled');
    }
  
    window.addEventListener('scroll', function() {
      scrollPosition = window.scrollY;
  
      if (scrollPosition >= 120) {
        myDiv.classList.add('scrolled');
      } else {
        myDiv.classList.remove('scrolled');
      }
    });
  });