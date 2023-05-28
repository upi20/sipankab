
let meta_list_is_edit = true;
const meta_list = new Map();
$(document).ready(function () {
    var msnry = new Masonry(document.querySelector('.grid'), {
        itemSelector: '.grid-item',
        columnWidth: '.grid-sizer'
    });

    // Hero ===================================================================================================
    $('#hero-form').submit(function (e) {
        const load_el = $(this).parent().parent();
        e.preventDefault();
        var formData = new FormData(this);
        load_el.LoadingOverlay("show");
        $.ajax({
            type: "POST",
            url: `{{ route(l_prefix($hpu, 'hero')) }}`,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: (data) => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Data saved successfully',
                    showConfirmButton: false,
                    timer: 1500
                })

                // set foto
                $('#deskripsi_foto_1').attr('onclick',
                    `viewImage('${data.foto}', 'Hero Image View')`);
                $(this).find('input[name=file]').val('');
            },
            error: function (data) {
                const res = data.responseJSON ?? {};
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: res.message ?? 'Something went wrong',
                    showConfirmButton: false,
                    timer: 1500
                })
            },
            complete: function () {
                load_el.LoadingOverlay("hide");
            }
        });
    });

    // Galeri Kegiatan ========================================================================================
    $('#galeri-form').submit(function (e) {
        const load_el = $(this).parent().parent();
        e.preventDefault();
        var formData = new FormData(this);
        load_el.LoadingOverlay("show");
        $.ajax({
            type: "POST",
            url: `{{ route(l_prefix($hpu, 'galeri')) }}`,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: (data) => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Data saved successfully',
                    showConfirmButton: false,
                    timer: 1500
                })
            },
            error: function (data) {
                const res = data.responseJSON ?? {};
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: res.message ?? 'Something went wrong',
                    showConfirmButton: false,
                    timer: 1500
                })
            },
            complete: function () {
                load_el.LoadingOverlay("hide");
            }
        });
    });

    // Artikel Kegiatan =======================================================================================
    $('#artikel-form').submit(function (e) {
        const load_el = $(this).parent().parent();
        e.preventDefault();
        var formData = new FormData(this);
        load_el.LoadingOverlay("show");
        $.ajax({
            type: "POST",
            url: `{{ route(l_prefix($hpu, 'artikel')) }}`,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: (data) => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Data saved successfully',
                    showConfirmButton: false,
                    timer: 1500
                })
            },
            error: function (data) {
                const res = data.responseJSON ?? {};
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: res.message ?? 'Something went wrong',
                    showConfirmButton: false,
                    timer: 1500
                })
            },
            complete: function () {
                load_el.LoadingOverlay("hide");
            }
        });
    });
})

function viewImage(image, title) {
    $('#modal-image').modal('show');
    $('#modal-image-title').html(title);
    const ele = $('#modal-image-element');
    ele.attr('src', `{{ url('') }}${image}`);
    ele.attr('alt', title);
};
