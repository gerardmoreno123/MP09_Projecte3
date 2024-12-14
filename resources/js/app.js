import './bootstrap';

// Función para realizar la búsqueda en tiempo real
document.getElementById('searchInput').addEventListener('input', function() {
    const searchQuery = this.value.toLowerCase(); // Convertir la búsqueda a minúsculas
    const rows = document.querySelectorAll('#filmsTable tbody tr'); // Obtener todas las filas de la tabla

    rows.forEach(function(row) {
        const titleCell = row.querySelector('.title'); // Obtener la celda del título
        const titleText = titleCell.textContent.toLowerCase(); // Convertir el texto del título a minúsculas

        // Si el texto del título contiene la búsqueda, mostrar la fila; de lo contrario, ocultarla
        if (titleText.includes(searchQuery)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
});

window.openDeleteModal = function(button) {
    const form = document.getElementById('deleteForm');
    form.action = button.getAttribute('data-url'); // Usar data-url del botón
    document.getElementById('deleteModal').classList.remove('hidden');
};

window.closeDeleteModal = function() {
    document.getElementById('deleteModal').classList.add('hidden');
};


