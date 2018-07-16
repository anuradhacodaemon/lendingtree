<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<?php
$lead_approved = $this->users->checklead_approved();
$lend_pending = $this->users->checklead_pending();
$visitor = $this->users->checkvisitor();
?>
<script type="text/javascript">
<?php $result = $this->users->getVisitor(); ?>
    google.charts.load("current", {packages: ["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = google.visualization.arrayToDataTable([

            ["Date", "Count", {role: "style"}],
<?php
foreach ($result as $k => $row) {
    echo "['" . $row['datetime'] . "'," . $row['Numrecord'] . ", '#b87333'],";
}
?>

        ]);

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
            {calc: "stringify",
                sourceColumn: 1,
                type: "string",
                role: "annotation"},
            2]);

        var options = {
            title: "Visitors Count",
            width: 600,
            height: 400,
            bar: {groupWidth: "95%"},
            legend: {position: "none"},
        };
        var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
        chart.draw(view, options);
    }


    google.charts.setOnLoadCallback(drawChart2);

    function drawChart2() {
        // Define the chart to be drawn.
<?php
$lead_approved = $this->users->checklead_approved();
$lend_pending = $this->users->checklead_pending();
$visitor = $this->users->checkvisitor();

$approved = ((int) $lead_approved[0]['numLead'] * 10) / 100;
$pending = ((int) $lend_pending[0]['numLead'] * 10) / 100;
$visit = ((int) $visitor[0]['numVisitor'] * 10) / 100;
?>
        var data2 = new google.visualization.DataTable();
        data2.addColumn('string', 'Element');
        data2.addColumn('number', 'Percentage');
        data2.addRows([
            ['Number of Approved Applications today',<?php echo $approved ?>],
            ['Number of Pending Applications today', <?php echo $pending ?>],
            [' Total Portal Visitors today',<?php echo $visit ?>]
        ]);

        // Instantiate and draw the chart.
        var chart = new google.visualization.PieChart(document.getElementById('myPieChart'));
        chart.draw(data2, null);
    }
</script>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2> Dashboard</h2>

                <div class="clearfix"></div>
            </div>


            <div class="x_content">
<!--                <div class="row tile_count">
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Number of Pending Applications today</span>
                        <div class="count"><?php echo $lend_pending[0]['numLead'] ?></div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i>  Number of Approved Applications today</span>
                        <div class="count"><?php echo $lead_approved[0]['numLead'] ?></div>
                    </div>

                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Total Portal Visitors today</span>
                        <div class="count"><?php echo $visitor[0]['numVisitor'] ?></div>
                    </div>
                </div>-->
                <h4>Google Analytics Report</h4>
                <div class="row tile_count">
                    <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Total website visitors</span>
                        <div class="count"><?php echo $sessiondata['sessioncount']['rows']['7']; ?></div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i>  Total time spent on website</span>
                        <div class="count">
                            <?php $iSeconds = $sessiondata['sessioncount']['rows']['4']; 
                            echo date('H:i:s', mktime(0, 0, $iSeconds));
                        ?>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Top 5 most viewed pages</span>
                        <div class="">
                            <?php
                            $sino = 1;
                            $counreywisedata = $topPages['rows'];
                            if (count($counreywisedata) > 0) {
                                foreach ($counreywisedata as $valuearray) {
                                    echo $sino." - ".$valuearray[1]."<br>"; 
                                    $sino++;
                                }
                            }
                            else
                            {
                                echo 0;
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div id="barchart_values" ></div> </div> <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div id="myPieChart"></div></div>     
            </div>

        </div>
    </div>
</div>



