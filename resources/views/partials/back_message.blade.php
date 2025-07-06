<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        @if ($errors->any())
        Toastify({
            text: "{{ $errors->first() }}",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#ff4d4d",
            style: {
                borderRadius: "10px",
                width: "300px",
            },
        }).showToast();
        @endif

        @if (session('success'))
        Toastify({
            text: "{{ session('success') }}",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#28a745",
            style: {
                borderRadius: "10px",
                width: "300px",
            },
        }).showToast();
        @endif

        @if (session('warning'))
        Toastify({
            text: "{{ session('warning') }}",
            duration: 5000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#ffc107", // Couleur warning standard de Bootstrap
            style: {
                borderRadius: "10px",
                width: "300px",
                color: "#000", // Texte en noir pour meilleure lisibilité sur fond jaune
            },
        }).showToast();
        @endif

        @if(session('error'))
        Toastify({
            text: "{{ session('error') }}",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#ff4d4d",
            style: {
                borderRadius: "10px",
                width: "300px",
            },
        }).showToast();
        @endif
    });
</script>
