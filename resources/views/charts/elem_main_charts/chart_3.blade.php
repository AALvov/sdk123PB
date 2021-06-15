


<script language="JavaScript">


    // Themes begin
    am4core.useTheme(am4themes_animated);
    // Themes end

    var Ip_elem = {{$this_elem->elem_to_calc->first()->op_r}};

    // Create chart instance
    var chart = am4core.create("chartdiv2",
        am4charts.RadarChart,
        am4core.addLicense("ch-custom-attribution"));

    // Add data
    chart.data = [{
        "category": "ОП Ррег",
        "value": Ip_elem,
        "full": 1
    }];

    // Make chart not full circle
    chart.startAngle = -250;
    chart.endAngle = 70;
    chart.radius = am4core.percent(100);
    chart.innerRadius = am4core.percent(70);
    chart.colors.saturation = 0.9;


    // Set number format
    //chart.numberFormatter.numberFormat = "#.#";


    // Create axes
    var categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
    categoryAxis.dataFields.category = "category";
    categoryAxis.renderer.grid.template.location = 0;
    categoryAxis.renderer.grid.template.strokeOpacity = 0;
    categoryAxis.renderer.labels.template.disabled = true
    categoryAxis.renderer.grid.template.disabled = true;

    //categoryAxis.renderer.labels.template.horizontalCenter = "right";
    //categoryAxis.renderer.labels.template.fontWeight = 100;
    /* categoryAxis.renderer.labels.template.adapter.add("fill", function(fill, target) {
      return (target.dataItem.index >= 0) ? chart.colors.getIndex(target.dataItem.index) : fill;
    }); */
    categoryAxis.renderer.minGridDistance = 40;

    var valueAxis = chart.xAxes.push(new am4charts.ValueAxis());
    valueAxis.renderer.grid.template.strokeOpacity = 0;
    valueAxis.min = 0;
    valueAxis.max = 1;
    valueAxis.renderer.labels.template.disabled = true
    valueAxis.strictMinMax = true;

    var yearLabel = chart.radarContainer.createChild(am4core.Label);
    yearLabel.text = "[bold]{{$this_elem->elem_to_calc->first()->op_r}}[/]";
    yearLabel.horizontalCenter = 'middle'
    yearLabel.verticalCenter = 'middle'
    yearLabel.x = am4core.percent(100);
    yearLabel.y = am4core.percent(100);
    yearLabel.fontSize = 35; // irrelevant, can be omitted



    // Create series
    var series1 = chart.series.push(new am4charts.RadarColumnSeries());
    series1.dataFields.valueX = "full";
    series1.dataFields.categoryY = "category";
    series1.clustered = false;
    series1.columns.template.fill = new am4core.InterfaceColorSet().getFor("alternativeBackground");
    series1.columns.template.fillOpacity = 0.04;
    series1.columns.template.cornerRadiusTopLeft = 60;
    series1.columns.template.strokeWidth = 0;
    series1.columns.template.radarColumn.cornerRadius = 60;


    var series2 = chart.series.push(new am4charts.RadarColumnSeries());
    series2.dataFields.valueX = "value";
    series2.dataFields.categoryY = "category";
    series2.clustered = false;
    if (Ip_elem >= 0.8) {
        series2.columns.template.fill = am4core.color("rgba(105,175,112,0.5)");
    }
    if ((Ip_elem >= 0.5) && (Ip_elem < 0.8)) {
        series2.columns.template.fill = am4core.color("rgba(255,225,73,0.47)");
    }
    if ((Ip_elem >= 0.2) && (Ip_elem < 0.5)) {
        series2.columns.template.fill = am4core.color("rgb(242,177,64)");
    }
    if ((Ip_elem >= 0.0) && (Ip_elem < 0.2))
        series2.columns.template.fill = am4core.color("rgba(234,87,87,0.5)");
    series2.columns.template.strokeOpacity = 0.4;
    series2.columns.template.strokeWidth = 0;
    series2.columns.template.tooltipText = "{category}: [bold]{value.formatNumber('#.00')}[/]";
    series2.columns.template.radarColumn.cornerRadius = 60;


    // Add cursor
    //chart.cursor = new am4charts.RadarCursor();
</script>