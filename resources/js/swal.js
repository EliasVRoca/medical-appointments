import swal from 'sweetalert2';
document.addEventListener('DOMContentLoaded', function() {
    const swalData = document.querySelector('meta[name="swal"]');
    if (swalData) {
        const { icon, title, text } = JSON.parse(swalData.content);
        swal.fire({
            icon: icon,
            title: title,
            text: text,
        });
    }
});
