document.addEventListener("DOMContentLoaded", function () {
    let list = document.querySelectorAll(".navigation li");
  
    function activeLink() {
        list.forEach((item) => {
            item.classList.remove("hovered");
        });
        this.classList.add("hovered");
    }
  
    list.forEach((item) => item.addEventListener("mouseover", activeLink));
  
    // Menu Toggle
    let toggle = document.querySelector(".toggle");
    let navigation = document.querySelector(".navigation");
    let main = document.querySelector(".main");
  
    toggle.addEventListener("click", function () {
        navigation.classList.toggle("active");
        main.classList.toggle("active");
    });
  });