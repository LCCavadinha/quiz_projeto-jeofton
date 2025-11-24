// assets/script.js - versão com logs e tratamento robusto
document.addEventListener("DOMContentLoaded", () => {
  try {
    const forms = Array.from(document.querySelectorAll("form"));
    if (!forms.length) {
      console.log("script.js: nenhum <form> encontrado nesta página.");
      return;
    }

    forms.forEach((form, formIndex) => {
      // Delegação: captura cliques nas labels dentro do formulário
      form.addEventListener("click", (event) => {
        // procura a label mais próxima do alvo do clique
        const label = event.target.closest("label");
        if (!label || !form.contains(label)) return;

        const radio = label.querySelector('input[type="radio"]');
        if (!radio) return;

        // remove classe 'ativo' de todas as labels deste form
        const allLabels = Array.from(form.querySelectorAll("label"));
        allLabels.forEach((l) => l.classList.remove("ativo"));

        // marca e destaca a label clicada
        label.classList.add("ativo");
        radio.checked = true;

        // log para debug
        console.log(`script.js: form ${formIndex} - opção selecionada:`, radio.value);
      });

      // validação de envio
      form.addEventListener("submit", (event) => {
        const radios = Array.from(form.querySelectorAll('input[type="radio"]'));
        const selecionado = radios.some((r) => r.checked);
        if (!selecionado) {
          event.preventDefault();
          // Use alert como fallback simples
          alert("Selecione uma resposta antes de enviar.");
          console.warn("script.js: envio bloqueado — nenhuma opção selecionada.");
          return false;
        }
        // opcional: log de envio
        console.log("script.js: formulário enviado (validação OK).");
      });
    });
  } catch (err) {
    // mostra erro inesperado no console para você copiar/colar aqui
    console.error("script.js: erro inesperado:", err);
  }
});
