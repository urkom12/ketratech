  function checkVisibility() {
      const boxes = document.querySelectorAll('.box');
      const windowHeight = window.innerHeight;
  
      boxes.forEach((box, index) => {
          const boxTop = box.getBoundingClientRect().top;
  
          if (boxTop <= windowHeight * 0.8) { 
              setTimeout(() => {
                  box.classList.add('visible');
              }, index * 200); 
          }
      });
  }
  
  window.addEventListener('scroll', checkVisibility);
  
  checkVisibility();

