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

  /* background: rgb(34,193,195);
background: linear-gradient(114deg, rgba(34,193,195,1) 0%, rgba(255,239,0,1) 100%); */