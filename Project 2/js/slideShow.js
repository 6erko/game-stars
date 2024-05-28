const slides = document.getElementsByClassName('slide');
let currentIndex = 0;

function reviewStyleGiven() {
  for (const slide of slides) {
    slide.style.fontSize = '20px';
    slide.style.color = 'white';
    slide.style.backgroundColor = '#808CAB';
    slide.style.borderRadius = '20px';
    slide.style.position = 'relative';
    slide.style.left = '22%';
  }
}

reviewStyleGiven();

function switchSlide() {
  let nextSlideIndex = currentIndex + 1;

  if (nextSlideIndex == slides.length) {
    nextSlideIndex = 0;
  }

  slides[currentIndex].style.display = 'none';
  slides[nextSlideIndex].style.display = 'block';

  currentIndex = nextSlideIndex;
}

setInterval(switchSlide, 3000);
