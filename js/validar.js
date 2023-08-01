const btnProcesar = document.querySelector('#procesar');
const _ = jQuery;
const a = Swal;


btnProcesar.addEventListener('click', () => {
    const form = $('form');
    let formData = form.serialize();
    _.ajax({
        url: 'procesar.php',
        type: 'POST',
        dataType: 'html',
        data: formData,
        beforeSend: () => {
            a.fire({
                title: 'Cargando...',
                icon: 'info',
                allowOutsideClick: false,
                showConfirmButton: false
            });
        },
        success: function ( data ) {
            a.fire({
                icon: 'success',
                title: 'Good job!',
                text: 'La solicitud se ha completado'
            });
            form.remove();
            btnProcesar.remove();
            const table = $("<table></table>");
            table.append(data);
            $('body').append(table);
        },
        error: () => {
            a.fire({
                icon: 'error',
                title: '¡Error!',
                text: 'Hubo un error en la solicitud.'
            });
        }
    });
});
