document.addEventListener("DOMContentLoaded", function() {

  const input = document.getElementById("pesquisa");
  const items = document.querySelectorAll(".item");

  input.addEventListener("keyup", function() {
    const filtro = input.value.toLowerCase();

    items.forEach(item => {
      const nome = item.querySelector(".nome").textContent.toLowerCase();

      item.style.display = nome.includes(filtro) ? "block" : "none";
    });

  });

});