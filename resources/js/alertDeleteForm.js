import Swal from "sweetalert2";
document.addEventListener('DOMContentLoaded', () => {
    const alertDeleteForms = document.querySelectorAll('form[data-form="actionTableDelete"]') ?? [];
    alertDeleteForms.forEach(form => {
        form.addEventListener('submit', (event) => {
            event.preventDefault();
            Swal.fire({
                title: '¿Estás seguro?',
                text: "¡No podrás revertir esto!",
                icon: 'warning',
                showCancelButton: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
});