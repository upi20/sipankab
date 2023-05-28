const can_update = "{{ $can_update == 'true' ? 'true' : 'false' }}" === "true";
const can_delete = "{{ $can_delete == 'true' ? 'true' : 'false' }}" === "true";
const table_html = $('#tbl_main');
let isEdit = true;
const image_url = '{{ asset($image_folder) }}';
$(document).ready(function () {
    // datatable ====================================================================================
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    const new_table = table_html.DataTable({
        searchDelay: 500,
        processing: true,
        serverSide: true,
        responsive: true,
        scrollX: true,
        aAutoWidth: false,
        bAutoWidth: false,
        type: 'GET',
        ajax: {
            url: "{{ route(l_prefix($hpu)) }}",
            data: function (d) {
                d['filter[tampilkan]'] = $('#filter_tampilkan').val();
            }
        },
        columns: [{
            data: 'urutan',
            name: 'urutan',
        },
        {
            data: 'foto',
            name: 'foto',
            render(data, type, full, meta) {
                return data ? `
                    <img class="table-foto" src="${image_url}/${data}" alt="${full.nama}" onclick="viewImage('${full.foto_link}', '${full.nama}')">
                    ` : '';
            },
            orderable: false
        },
        {
            data: 'nama',
            name: 'nama',
            render(data, type, full, meta) {
                return `<b>${data}</b><br><small>${full.sebagai}</small>`;
            },
        },
        {
            data: 'nama',
            name: 'nama',
            render(data, type, full, meta) {
                const no_telepon = full.no_telepon ?
                    `<a target="_blank" href="tel:${full.no_telepon}"><i class="fas fa-phone me-1"></i> ${full.no_telepon}</a>` :
                    '';

                const no_whatsapp = full.no_whatsapp ?
                    `<a target="_blank" href="https://api.whatsapp.com/send?phone=${full.no_whatsapp}"><i class="fab fa-whatsapp me-1"></i> ${full.no_whatsapp}</a>` :
                    '';

                const facebook = full.facebook ?
                    `<a target="_blank" href="${full.facebook}"><i class="fab fa-facebook-square me-1"></i> ${full.facebook}</a>` :
                    '';

                const instagram = full.instagram ?
                    `<a target="_blank" href="${full.instagram}"><i class="fab fa-instagram me-1"></i> ${full.instagram}</a>` :
                    '';

                const twitter = full.twitter ?
                    `<a target="_blank" href="${full.twitter}"><i class="fab fa-twitter me-1"></i> ${full.twitter}</a>` :
                    '';


                let kontak = no_telepon;
                kontak += ((kontak && no_whatsapp ? '<br>' : '') + no_whatsapp);
                kontak += ((kontak && facebook ? '<br>' : '') + facebook);
                kontak += ((kontak && instagram ? '<br>' : '') + instagram);
                kontak += ((kontak && twitter ? '<br>' : '') + twitter);

                return `<small>${kontak}</small>`;
            },
            orderable: false
        },
        {
            data: 'tampilkan',
            name: 'tampilkan',
            render(data, type, full, meta) {
                const class_el = data == 'Ya' ? 'text-success' : 'text-danger';
                return `<i class="fas fa-circle me-2 ${class_el}"></i>${data}`;
            },
        },
        ...(can_update || can_delete ? [{
            data: 'id',
            name: 'id',
            render(data, type, full, meta) {
                const btn_update = can_update ? `<button type="button" class="btn btn-rounded btn-primary btn-sm me-1 mt-1" data-toggle="tooltip" title="Ubah Data" onClick="editFunc('${data}')">
                        <i class="fas fa-edit"></i></button>` : '';
                const btn_delete = can_delete ? `<button type="button" class="btn btn-rounded btn-danger btn-sm me-1 mt-1" data-toggle="tooltip" title="Hapus Data" onClick="deleteFunc('${data}')">
                        <i class="fas fa-trash"></i></button>` : '';
                return btn_update + btn_delete;
            },
            orderable: false
        }] : []),
        ],
        order: [
            [0, 'asc']
        ],
        language: {
            url: datatable_indonesia_language_url
        }
    });

    new_table.on('draw.dt', function () {
        tooltip_refresh();
    });

    $('#FilterForm').submit(function (e) {
        e.preventDefault();
        var oTable = table_html.dataTable();
        oTable.fnDraw(false);
    });

    // insertForm ===================================================================================
    $('#MainForm').submit(function (e) {
        e.preventDefault();
        resetErrorAfterInput();
        var formData = new FormData(this);
        setBtnLoading('#btn-save', 'Simpan');
        const route = ($('#id').val() == '') ?
            "{{ route(l_prefix($hpu,'insert')) }}" :
            "{{ route(l_prefix($hpu,'update')) }}";
        $.ajax({
            type: "POST",
            url: route,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: (data) => {
                $("#modal-default").modal('hide');
                var oTable = table_html.dataTable();
                oTable.fnDraw(false);
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Data saved successfully',
                    showConfirmButton: false,
                    timer: 1500
                })
                isEdit = true;

            },
            error: function (data) {
                const res = data.responseJSON ?? {};
                errorAfterInput = [];
                for (const property in res.errors) {
                    errorAfterInput.push(property);
                    setErrorAfterInput(res.errors[property], `#${property}`);
                }
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: res.message ?? 'Something went wrong',
                    showConfirmButton: false,
                    timer: 1500
                })
            },
            complete: function () {
                setBtnLoading('#btn-save',
                    '<li class="fas fa-save mr-1"></li> Simpan',
                    false);
            }
        });
    });

    $('#setting_form').submit(function (e) {
        const load_el = $(this).parent().parent();
        e.preventDefault();
        var formData = new FormData(this);
        load_el.LoadingOverlay("show");
        $.ajax({
            type: "POST",
            url: `{{ route(l_prefix($hpu,'setting')) }}`,
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
                $('#deskripsi_foto').attr('onclick',
                    `viewImage('${data.foto}', 'Foto Latar Belakang')`);
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
});

function addFunc() {
    if (!isEdit) return false;
    $('#MainForm').trigger("reset");
    $('#modal-default-title').html("Tambah");
    $('#modal-default').modal('show');
    $('#id').val('');
    $('#foto').val('');
    $('#lihat-foto').hide();
    $('#foto').attr('required', '');
    resetErrorAfterInput();
    isEdit = false;
    return true;
}

function editFunc(id) {
    $.LoadingOverlay("show");
    $.ajax({
        type: "GET",
        url: `{{ route(l_prefix($hpu,'find')) }}`,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            id
        },
        success: (data) => {
            isEdit = true;
            $('#modal-default-title').html("Ubah");
            $('#modal-default').modal('show');
            $('#id').val(data.id);
            $('#urutan').val(data.urutan);
            $('#nama').val(data.nama);
            $('#sebagai').val(data.sebagai);
            $('#tampilkan').val(data.tampilkan);
            $('#no_whatsapp').val(data.no_whatsapp);
            $('#no_telepon').val(data.no_telepon);
            $('#facebook').val(data.facebook);
            $('#twitter').val(data.twitter);
            $('#instagram').val(data.instagram);
            $('#lihat-foto').fadeIn();
            $('#lihat-foto').attr('onclick', `viewImage('${data.foto_link}', '${data.nama}')`);
            $('#foto').removeAttr('required');
            $('#foto').val('');
        },
        error: function (data) {
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'Something went wrong',
                showConfirmButton: false,
                timer: 1500
            })
        },
        complete: function () {
            $.LoadingOverlay("hide");
        }
    });

}

function deleteFunc(id) {
    swal.fire({
        title: 'Are you sure?',
        text: "Are you sure you want to proceed ?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes'
    }).then(function (result) {
        if (result.value) {
            $.ajax({
                url: `{{ url(l_prefix_uri($hpu)) }}/${id}`,
                type: 'DELETE',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function () {
                    swal.fire({
                        title: 'Please Wait..!',
                        text: 'Is working..',
                        onOpen: function () {
                            Swal.showLoading()
                        }
                    })
                },
                success: function (data) {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: '{{ $page_title }} deleted successfully',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    var oTable = table_html.dataTable();
                    oTable.fnDraw(false);
                },
                complete: function () {
                    swal.hideLoading();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    swal.hideLoading();
                    swal.fire("!Opps ", "Something went wrong, try again later", "error");
                }
            });
        }
    });
}

function viewImage(image, title) {
    $('#modal-image').modal('show');
    $('#modal-image-title').html(title);
    const ele = $('#modal-image-element');
    ele.attr('src', `${image}`);
    ele.attr('alt', title);
};
