const sidebar = document.querySelector('.sidebar');
const toggleButton = document.querySelector('.toggle-btn');

toggleButton.addEventListener("click", function(){
  sidebar.classList.toggle('display-sidebar');
});
