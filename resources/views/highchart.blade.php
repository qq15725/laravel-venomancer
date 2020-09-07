<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title></title>
    <style>
        body div {
            width: 100%;
            margin: 0 auto 40px auto;
        }
    </style>
</head>
<body style="margin: 0; padding: 10px 0; height: 100vh;">
<script src="https://cdn.highcharts.com.cn/highcharts/highcharts.js"></script>
<script>
  var items = {!! json_encode($highcharts, JSON_UNESCAPED_UNICODE) !!};
  if (items.length === undefined) {
    items = [items]
  }
  items.forEach(function (highchart, index) {
    var div = document.createElement('div')
    div.id = 'highchart-' + index
    document.body.appendChild(div)
    Highcharts.chart(div.id, highchart)
  })
</script>
</body>
</html>