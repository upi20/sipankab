const can_update = "{{ $can_update == 'true' ? 'true' : 'false' }}" === "true";
const can_delete = "{{ $can_delete == 'true' ? 'true' : 'false' }}" === "true";
const table_html = $('#tbl_main');
let isEdit = true;
$(document).ready(function () {
    $('#filter_kategori_id').select2({
        theme: "bootstrap-5",
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
    });
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
        // responsive: true,
        scrollX: true,
        aAutoWidth: false,
        bAutoWidth: false,
        type: 'GET',
        ajax: {
            url: "{{ route(l_prefix($hpu)) }}",
            data: function (d) {
                d['filter[tampilkan_di_halaman_utama]'] =
                    $('#filter_tampilkan_di_halaman_utama').val();
                d['filter[kategori_id]'] = $('#filter_kategori_id').val();
            }
        },
        columns: [{
            data: null,
            name: 'id',
            orderable: false,
        },
        {
            data: 'foto_link',
            name: 'foto_link',
            render(data, type, full, meta) {
                return data ? `
                            <img class="table-foto" src="${data}" alt="${full.nama}" onclick="viewImage('${data}', 'Foto icon ${full.nama}')">
                            ` : '';
            },
            orderable: false
        },
        {
            data: 'nama',
            name: 'nama'
        },
        {
            data: 'kategori_nama',
            name: 'kategori_nama'
        },
        {
            data: 'created',
            name: 'created_at'
        },
        {
            data: 'id',
            name: 'id',
            render(data, type, full, meta) {
                const btn_lihat = `<a type="button" target="_blank" href="{{ url('katalog') }}/${full.slug}" class="btn btn-rounded btn-info btn-sm me-1"data-toggle="tooltip" title="Lihat Data">
                                <i class="fas fa-paper-plane"></i></a>`;
                const btn_update = can_update ? `<a type="button" href="{{ url(l_prefix_uri($hpu,'ubah')) }}/${data}" class="btn btn-rounded btn-primary btn-sm me-1"data-toggle="tooltip" title="Ubah Data">
                                <i class="fas fa-edit"></i></a>` : '';
                const btn_delete = can_delete ? `<button type="button" class="btn btn-rounded btn-danger btn-sm me-1" data-toggle="tooltip" title="Hapus Data" onClick="deleteFunc('${data}')">
                                <i class="fas fa-trash"></i> </button>` : '';
                return btn_update + btn_delete;
            },
            orderable: false,
            className: 'text-nowrap'
        },
        ],
        order: [
            [2, 'asc']
        ],
        language: {
            url: datatable_indonesia_language_url
        }
    });

    new_table.on('draw.dt', function () {
        tooltip_refresh();
        var PageInfo = table_html.DataTable().page.info();
        new_table.column(0, {
            page: 'current'
        }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });

    $('#FilterForm').submit(function (e) {
        e.preventDefault();
        var oTable = table_html.dataTable();
        oTable.fnDraw(false);
    });

    $('#setting_form').submit(function (e) {
        e.preventDefault();
        resetErrorAfterInput();
        var formData = new FormData(this);
        setBtnLoading('#setting_btn_submit', 'Simpan');
        $.ajax({
            type: "POST",
            url: "{{ route(l_prefix($hpu,'setting')) }}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: (data) => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Data berhasil disimpan',
                    showConfirmButton: false,
                    timer: 1500
                })
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
                setBtnLoading('#setting_btn_submit',
                    '<li class="fas fa-save mr-1"></li> Simpan',
                    false);
            }
        });
    });
});

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
                        title: '{{$page_title}} deleted successfully',
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
    ele.attr('src', image);
    ele.attr('alt', title);
};
