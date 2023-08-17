<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chart Pie example</title>
</head>
<body>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<figure class="highcharts-figure">
    <div id="container"></div>
</figure>
<script>
    // Create the chart
    Highcharts.chart('container', {
        chart: {
            type: 'pie'
        },
        title: {
            text: '',
        },
        plotOptions: {
            series: {
                dataLabels: {
                    enabled: true,
                    format: '{point.name}: {point.y:f}'
                }
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:f}</b><br/>'
        },
        series: [
            {
                name: 'Browsers',
                colorByPoint: true,
                data: [
                    {
                        name: 'Chrome',
                        y: 61.04,
                        drilldown: 'Chrome'
                    },
                    {
                        name: 'Safari',
                        y: 9.47,
                        drilldown: 'Safari'
                    },
                    {
                        name: 'Edge',
                        y: 9.32,
                        drilldown: 'Edge'
                    },
                    {
                        name: 'Firefox',
                        y: 8.15,
                        drilldown: 'Firefox'
                    },
                    {
                        name: 'Other',
                        y: 11.02,
                        drilldown: null
                    }
                ]
            }
        ],
        drilldown: {
            series: [
                {
                    name: 'Chrome',
                    id: 'Chrome',
                    data: [
                        [
                            'v91.0',
                            0.31
                        ],
                        [
                            'v90.0',
                            0.13
                        ],
                        [
                            'v89.0',
                            0.14
                        ],
                        [
                            'v88.0',
                            0.1
                        ],
                        [
                            'v87.0',
                            0.35
                        ],
                        [
                            'v80.0',
                            0.16
                        ]
                    ]
                },
                {
                    name: 'Safari',
                    id: 'Safari',
                    data: [
                        [
                            'v15.3',
                            0.1
                        ],
                        [
                            'v15.2',
                            2.01
                        ],
                        [
                            'v15.1',
                            2.29
                        ],
                        [
                            'v15.0',
                            0.49
                        ],
                        [
                            'v14.1',
                            2.48
                        ]
                    ]
                },
                {
                    name: 'Edge',
                    id: 'Edge',
                    data: [
                        [
                            'v97',
                            6.62
                        ],
                        [
                            'v96',
                            2.55
                        ],
                        [
                            'v95',
                            0.15
                        ]
                    ]
                },
                {
                    name: 'Firefox',
                    id: 'Firefox',
                    data: [
                        [
                            'v96.0',
                            4.17
                        ],
                        [
                            'v95.0',
                            3.33
                        ],
                        [
                            'v94.0',
                            0.11
                        ],
                        [
                            'v91.0',
                            0.23
                        ],
                        [
                            'v78.0',
                            0.16
                        ]
                    ]
                }
            ]
        }
    });
</script>
</body>
</html>
