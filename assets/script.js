document.addEventListener("DOMContentLoaded", () => {
  const forms = document.querySelectorAll("form");

  forms.forEach((form) => {
    const labels = form.querySelectorAll("label");
    const radios = form.querySelectorAll('input[type="radio"]');

    // Clique na label
    labels.forEach((label) => {
      const radio = label.querySelector('input[type="radio"]');

      label.addEventListener("click", () => {
        // Desmarca todas as labels
        labels.forEach((l) => l.classList.remove("ativo"));

        // Marca a label clicada
        label.classList.add("ativo");
        radio.checked = true; // garante que o rádio seja realmente selecionado
      });
    });

    // Verificação antes de enviar
    form.addEventListener("submit", (event) => {
      const selecionado = Array.from(radios).some((radio) => radio.checked);

      if (!selecionado) {
        event.preventDefault();
        alert("Selecione uma resposta!");
      }
    });
  });
});

