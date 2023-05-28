$(document).ready(function () {
    var start = moment().startOf('month');
    var end = moment().endOf('month');

    function cb(start, end) {
        $('#datepicker span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        const date_start = start.format('YYYY-MM-DD');
        const date_end = end.format('YYYY-MM-DD');
        refreshVistor({
            start: date_start,
            end: date_end
        });
    }

    $('#datepicker').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
            'Hari ini': [moment(), moment()],
            'Hari Kemarin': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Bulan ini': [moment().startOf('month'), moment().endOf('month')],
            'Bulan kemarin': [moment().subtract(1, 'month').startOf('month'),
            moment().subtract(1, 'month').endOf('month')
            ],
        }
    }, cb);

    cb(start, end);

    $('#datepicker').on('apply.daterangepicker', function (ev, picker) {
        global_date_start = picker.startDate.format('YYYY-MM-DD');
        global_date_end = picker.endDate.format('YYYY-MM-DD');
    });
});

function refreshVistor(tanggal) {
    // console.log(tanggal);
    const container = $('#penghitung-container');
    container.LoadingOverlay("show");
    $.ajax({
        type: "GET",
        url: "{{ route(l_prefix($hpu,'vistor_counter')) }}",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: tanggal,
        success: (data) => {
            // console.log(data);
            renderVistor(data.vistors);
            renderPlatform(data.platforms);
            renderBrowser(data.browsers);
            container.LoadingOverlay("hide");
        },
        error: function (data) {
            // console.log(data);
            container.LoadingOverlay("hide");
        },
        complete: function () {
            container.LoadingOverlay("hide");
        }
    });
}

function renderVistor(datas) {
    const data = [];
    const categories = [];

    datas.forEach(e => {
        data.push(e.value);
        categories.push(e.title);
    })

    var options = {
        chart: {
            foreColor: '#9ba7b2',
            type: 'bar',
            height: 360
        },
        series: [{
            name: 'Pengunjung',
            data
        }],
        xaxis: {
            categories
        },
        plotOptions: {
            bar: {
                horizontal: false,
            },
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
    }

    var chart = new ApexCharts(document.querySelector("#chart-pengunjung"), options);
    chart.render();
}

function renderPlatform(datas) {
    let counter = 1;
    const columns = [];

    datas.forEach(e => {
        columns.push([e.title, e.value]);
        counter++;
    });

    var chart = c3.generate({
        bindto: '#chart-platform',
        data: {
            columns,
            type: 'donut',
        },
        axis: {},
        legend: {
            show: true,
        },
        padding: {
            bottom: 0,
            top: 0
        },
    });
}

function renderBrowser(datas) {
    let counter = 1;
    const columns = [];

    datas.forEach(e => {
        columns.push([e.title, e.value]);
        counter++;
    });

    var chart = c3.generate({
        bindto: '#chart-browser',
        data: {
            columns,
            type: 'donut',
        },
        axis: {},
        legend: {
            show: true,
        },
        padding: {
            bottom: 0,
            top: 0
        },
    });

}
