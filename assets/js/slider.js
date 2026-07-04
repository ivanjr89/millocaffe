const sliderTitle = document.getElementById('slider-title');
const sliderDescription = document.getElementById('slider-description');

const featuredItems = [
  {
    title: 'Espresso Romano',
    description: 'Um café intenso, encorpado e profundamente refinado.'
  },
  {
    title: 'Cappuccino Oro',
    description: 'Espuma cremosa com notas de caramelo e baunilha.'
  },
  {
    title: 'Latte Velvet',
    description: 'Uma textura sedosa e um acabamento singular em cada gole.'
  }
];

let sliderIndex = 0;

if (sliderTitle && sliderDescription) {
  setInterval(() => {
    sliderIndex = (sliderIndex + 1) % featuredItems.length;
    sliderTitle.textContent = featuredItems[sliderIndex].title;
    sliderDescription.textContent = featuredItems[sliderIndex].description;
  }, 3500);
}
