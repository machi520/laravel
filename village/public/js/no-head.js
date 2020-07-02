// Google charts用に新しい配列を作る
let garray = Object.keys(prefectures).map(function (aaa) {
    let int = parseInt(prefectures[aaa].population);
    let array = [prefectures[aaa].prefecture, int];
    return array;
})
garray.unshift(['都道府県', '人口']);

console.log(garray);

let test = [
    ['都道府県', '人口','県庁所在地'],

    ['北海道', 0,'札幌'],

    ['青森', 0,'aaa'],

    ['秋田', 0,'rrr'],

    ['岩手', 0,'iii'],
];

        google.charts.load('current', {
            'packages':['geochart'],
        // Note: you will need to get a mapsApiKey for your project.
        // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
        'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
      });
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
          var data = google.visualization.arrayToDataTable(
            garray
        );

        //   ここに日本地図の設定をする
          var options = {
              region: 'JP',
              resolution: 'provinces'
        };

        var chart = new google.visualization.GeoChart(document.getElementById('map'));

        chart.draw(data, options);
      }