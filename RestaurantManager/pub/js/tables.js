document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById("reservationModal");
    const closeModalSpan = document.querySelector(".close");
    const tableIdInput = document.getElementById("tableId");
    const modalTableName = document.getElementById("modalTableName");
    const availableTables = document.querySelectorAll(".table-item.available");

    availableTables.forEach(item => {
        item.addEventListener('click', function() {
            const tableId = this.dataset.id;
            const tableName = this.dataset.name;
            
            tableIdInput.value = tableId;
            modalTableName.textContent = tableName;
            
            modal.style.display = "block";
        });
    });

    closeModalSpan.addEventListener('click', function() {
        modal.style.display = "none";
    });

    window.addEventListener('click', function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    });
});