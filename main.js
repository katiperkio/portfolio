const mobileButton = document.querySelector(".mobile");
const navMenu = document.querySelector(".navigation");
const menuItems = document.querySelectorAll(".navigation .navbtn a");

const getOffset = () => {
    const header = document.querySelector('header');
    return header.offsetHeight;
  };
  

const scrollToSection = (elementId) => {
    const element = document.getElementById(elementId);
    if (element) {
      const elementPosition = element.offsetTop - getOffset();
      window.scrollTo({
        top: elementPosition,
        behavior: 'smooth'
      });
    }
  };
  
  document.addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('.navbtn a');
  
    links.forEach(link => {
      link.addEventListener('click', (event) => {
        event.preventDefault();
        const targetId = link.getAttribute('href').substring(1);
        scrollToSection(targetId); 
      });
    });
});

  document.addEventListener('scroll', function() {
    const scrollTop = window.scrollY;
    const bgContainer = document.querySelector('.bg-container');
    bgContainer.style.backgroundPositionY = `${-scrollTop / 3}px`;
  });

  const mobMenu = () => {
    for (const item of menuItems) {
      item.addEventListener("click", mobMenu);
    }
    navMenu.classList.contains("responsive")
      ? navMenu.classList.remove("responsive")
      : navMenu.classList.add("responsive");
  };

  mobileButton.addEventListener("click", mobMenu);