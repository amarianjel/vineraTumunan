window.addEventListener("scroll", function() {
    var header = document.querySelector("header");
    header.classList.toggle("abajo", window.scrollY > 0);
})

const searchButton = document.getElementById('search-button');
const searchInput = document.getElementById('search-input');
searchButton.addEventListener('click', () => {
  const inputValue = searchInput.value;
  alert(inputValue);
});