<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>

<figure class="highcharts-figure">
    <div id="highcharts"></div>
</figure>
<script>
    Highcharts.chart('highcharts', {
        chart: {
            type: 'pie'
        },
        title: {
            text: ''
        },
        tooltip: {
            pointFormat: '{point.name}: {point.y: f}'
        },
        series: [{
            data: [{
                name: 'Andijon',
                y: 20
            }, {
                name: 'Buxoro',
                y: 30
            }, {
                name: 'Jizzax',
                y: 20
            }, {
                name: 'Namangan',
                y: 25
            }, {
                name: 'Navoiy',
                y: 5
            },{
                name: 'Farg\'ona',
                y: 5
            },{
                name: 'Toshkent shahar',
                y: 5
            },{
                name: 'Toshkent viloyati',
                y: 5
            },{
                name: 'Qoraqalpog\'iston respublikasi',
                y: 5
            },{
                name: 'Qashqadaryo',
                y: 5
            },{
                name: 'Surxondaryo',
                y: 5
            },{
                name: 'Samarqand',
                y: 5
            },{
                name: 'Sirdaryo',
                y: 5
            },{
                name: 'Xorazm',
                y: 5
            }]
        }]
    });

</script>
</body>
</html>
