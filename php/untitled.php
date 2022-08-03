<?php

$month=date('m');
$count_arr=array();
$booking_date_arr=array();
$query="SELECT count(*) count,reservation_date from (SELECT id, date_format(entrytime, '%d-%m-%Y') reservation_date from Reservation where MONTH(entrytime)=".$month.") as tbl1 GROUP by reservation_date";
$result_sum = mysqli_query($conn, $query);
while($values = mysqli_fetch_assoc($result_sum))
{
  $count_arr[]=$values['count'];
  $ reservation_date_arr[]=date('d M Y', strtotime($values[reservation_date']));
}
$count=implode(',', $count_arr);
$ reservation =implode('","', $ reservation_date_arr);
$ reservation ='"'.$ reservation.'"';
 
?>
 
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';
// -- Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: [<?php echo $reservation; ?>],
    datasets: [{
      label: "Sessions",
      lineTension: 0.3,
      backgroundColor: "rgba(2,117,216,0.2)",
      borderColor: "rgba(2,117,216,1)",
      pointRadius: 5,
      pointBackgroundColor: "rgba(2,117,216,1)",
      pointBorderColor: "rgba(255,255,255,0.😎",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "rgba(2,117,216,1)",
      pointHitRadius: 20,
      pointBorderWidth: 2,
      data: [<?php echo $count; ?>],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 5,
          maxTicksLimit: 5
        },
        gridLines: {
          color: "rgba(0, 0, 0, .125)",
        }
      }],
    },
    legend: {
      display: false
    }
  }
});