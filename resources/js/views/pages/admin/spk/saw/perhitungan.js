const jml_header = Number('{{$jml_header}}');
console.log(jml_header);
$(document).ready(function () {
    function renderTable({ element, beforeRender = () => { }, order = [[1, 'asc']], hasNumber = true }) {
        $(element).dataTable().fnDestroy();
        if ($.fn.DataTable.isDataTable(element)) {
            element.DataTable().destroy();
        }

        beforeRender();

        const tableUser = $(element).DataTable({
            columnDefs: [{
                orderable: false,
                targets: [0]
            }],
            scrollX: true,
            aAutoWidth: true,
            bAutoWidth: true,
            order,
            language: {
                url: datatable_indonesia_language_url
            }
        });
        if (hasNumber) {
            tableUser.on('draw.dt', function () {
                tooltip_refresh();
                var PageInfo = $(element).DataTable().page.info();
                tableUser.column(0, {
                    page: 'current'
                }).nodes().each(function (cell, i) {
                    cell.innerHTML = i + 1 + PageInfo.start;
                });
            });
        }
    }
    renderTable({ element: '#tbl_main1' });
    renderTable({ element: '#tbl_main2' });
    renderTable({ element: '#tbl_main3' });
    renderTable({ element: '#tbl_main4', order: [[jml_header + 3, 'asc']] });
})

