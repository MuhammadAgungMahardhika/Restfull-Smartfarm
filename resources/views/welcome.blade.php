<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel 9 vite with react</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="adminkit/img/icons/icon-48x48.png" />
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <link rel="canonical" href="https://demo-basic.adminkit.io/" />
    <link rel="canonical" href="https://demo-basic.adminkit.io/charts-chartjs.html" />
    <link href="adminkit/css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    @viteReactRefresh
    @vite('resources/js/app.jsx')
</head>

<body>
    <div id="root"></div>
    <script src="adminkit/js/app.js"></script>
    {{-- chart --}}
    <script src="adminkit/js/charts.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
            var defaultDate =
                date.getUTCFullYear() +
                "-" +
                (date.getUTCMonth() + 1) +
                "-" +
                date.getUTCDate();
            document.getElementById("datetimepicker-dashboard").flatpickr({
                inline: true,
                prevArrow: '<span title="Previous month">&laquo;</span>',
                nextArrow: '<span title="Next month">&raquo;</span>',
                defaultDate: defaultDate,
            });
        });
        document.addEventListener("DOMContentLoaded", function() {
            // Bar chart
            new Chart(document.getElementById("chartjs-dashboard-bar"), {
                type: "bar",
                data: {
                    labels: [
                        "Jan",
                        "Feb",
                        "Mar",
                        "Apr",
                        "May",
                        "Jun",
                        "Jul",
                        "Aug",
                        "Sep",
                        "Oct",
                        "Nov",
                        "Dec",
                    ],
                    datasets: [{
                        label: "This year",
                        backgroundColor: window.theme.primary,
                        borderColor: window.theme.primary,
                        hoverBackgroundColor: window.theme.primary,
                        hoverBorderColor: window.theme.primary,
                        data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
                        barPercentage: 0.75,
                        categoryPercentage: 0.5,
                    }, ],
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        display: false,
                    },
                    scales: {
                        yAxes: [{
                            gridLines: {
                                display: false,
                            },
                            stacked: false,
                            ticks: {
                                stepSize: 20,
                            },
                        }, ],
                        xAxes: [{
                            stacked: false,
                            gridLines: {
                                color: "transparent",
                            },
                        }, ],
                    },
                },
            });
        });
    </script>

</body>

</html>
