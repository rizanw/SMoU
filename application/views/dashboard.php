<div id="dataTableStat" style="height: 250px;"></div>

<script type="text/javascript">
	new Morris.Bar({
  // ID of the element in which to draw the chart.
  element: 'dataTableStat',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
    { year: 'Student Exchange', value: 20 },
    { year: 'Research', value: 10 },
    { year: 'Short Programs', value: 5 },
    { year: 'International Conferences', value: 5 },
    { year: 'International Paper', value: 20 }

  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'year',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Value']
});
</script>