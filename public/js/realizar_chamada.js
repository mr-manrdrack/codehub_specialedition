const divsConteudo = document.querySelectorAll('.conteudo');

for (let i = 0; i < divsConteudo.length; i++) {
    const checkboxes = document.querySelectorAll(`.checkbox${i}`);

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            if (this.checked) {
                checkboxes.forEach(otherCheckbox => {
                    if (otherCheckbox !== this) {
                        otherCheckbox.checked = false;
                    }
                });
            }
        });
    });
}

for (let i = 0; i < divsConteudo.length; i++) {
    const mostrarPopupCheckbox = document.getElementById(`fj${i}`);
    const meuPopup = document.getElementById('meu-popup');
    const fecharPopup = document.getElementById('fechar-popup');

    mostrarPopupCheckbox.addEventListener('change', function() {
    if (this.checked) {
        meuPopup.style.display = 'block';
    } else {
        meuPopup.style.display = 'none';
    }
    });

    fecharPopup.addEventListener('click', function() {
    meuPopup.style.display = 'none';
    mostrarPopupCheckbox.checked = false;
    });
}

