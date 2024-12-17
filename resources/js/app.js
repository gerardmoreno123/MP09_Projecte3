import './bootstrap';

// Funció genèrica per a filtrar les files de qualsevol taula
document.querySelectorAll('input[data-table]').forEach(function(input) {
    input.addEventListener('input', function() {
        const tableId = this.getAttribute('data-table'); // Obtenim l'ID de la taula des de data-table
        const searchQuery = this.value.toLowerCase();
        const rows = document.querySelectorAll(`#${tableId} tbody tr`); // Obtenim totes les files de la taula

        rows.forEach(function(row) {
            const relevantCell = row.querySelector('.name') || row.querySelector('.title');
            if (relevantCell) {
                const cellText = relevantCell.textContent.toLowerCase();

                // Mostrem o amaguem la fila segons el text de cerca
                if (cellText.includes(searchQuery)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            }
        });
    });
});


// Funció per a obrir i tancar el modal de eliminació
window.openDeleteModal = function(button) {
    const form = document.getElementById('deleteForm');
    form.action = button.getAttribute('data-url');
    document.getElementById('deleteModal').classList.remove('hidden');
};

window.closeDeleteModal = function() {
    document.getElementById('deleteModal').classList.add('hidden');
};


