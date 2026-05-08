const input = document.getElementById("searchInput");
const clearBtn = document.getElementById("clearSearch");

// mostra ou esconde a cruz
input.addEventListener("input", function () {
    if (this.value.length > 0) {
        clearBtn.style.display = "block";
    } else {
        clearBtn.style.display = "none";
    }
});

// limpar pesquisa
clearBtn.addEventListener("click", function () {
    input.value = "";
    clearBtn.style.display = "none";
    window.location.href = window.location.pathname;
}); 

// ao carregar página, se já tiver texto
if (input.value.length > 0) {
    clearBtn.style.display = "block";
}