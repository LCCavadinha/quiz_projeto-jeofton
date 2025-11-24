document.addEventListener('DOMContentLoaded', function () {
    try {
        const forms = Array.from(document.querySelectorAll('form'));

        forms.forEach((form) => {
            const radios = Array.from(form.querySelectorAll('input[type="radio"]'));
            const labels = Array.from(form.querySelectorAll('label'));

            // Marca visualmente o rádio já selecionado (se houver)
            radios.forEach((input) => {
                const label = form.querySelector('label[for="' + input.id + '"]');
                if (!label) return;

                if (input.checked) {
                    label.classList.add('ativo');
                }

                input.addEventListener('change', function () {
                    labels.forEach((l) => l.classList.remove('ativo'));
                    label.classList.add('ativo');
                });
            });

            // Garantir que clicar na label marque visual imediatamente
            labels.forEach((label) => {
                label.addEventListener('click', () => {
                    setTimeout(() => {
                        labels.forEach((l) => l.classList.remove('ativo'));
                        label.classList.add('ativo');
                    }, 10);
                });
            });

            // Segurança extra antes de enviar
            form.addEventListener('submit', function (event) {
                const checked = radios.some((r) => r.checked);
                if (!checked) {
                    event.preventDefault();
                    alert('Selecione uma resposta antes de enviar.');
                }
            });
        });
    } catch (err) {
        console.error('quiz.js error:', err);
    }
});
