<?php
if (isset($chart_data)){
    ?>
    <div class="row">
        <div class="col-md-7 p-3">
            <div class="card card-primary shadow-pro" >
                <div class="card-header p-2" style="background-color: #cae0fa; border:0!important;color: #2a6eb6; ">
                    <h3 class="card-title" style="font-weight: 600!important;font-size: 15px;"><i class="bi bi-people-fill"></i> CLASS WISE STUDENT COUNT</h3>
                </div>
                <div class="card-body">
                    <div class="chart">
                        <canvas id="student_count_chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                </div>

            </div>
        </div>
        <?php
        if (is_super_admin()){
            ?>
            <div class="col-md-5 p-3">
                <div class="card card-primary shadow-pro">
                    <div class="card-header p-2" style="background-color: #f6e0fc; border:0!important;color: #c262d0; ">
                        <h3 class="card-title" style="font-weight: 600!important;font-size: 15px;"><i class="bi bi-buildings-fill"></i> CATEGORY WISE SCHOOL COUNT</h3>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="school_count_chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>

    </div>
    <script src="<?=base_url('assets/plugins/chart.js/Chart.min.js')?>"></script>
    <script>
        $(function () {
            //-------------
            //- BAR CHART - STUDENT COUNT --------------------------------
            //-------------
            var student_data = {
                labels  : <?= json_encode(array_column($chart_data['student_count'], 'title')); ?>,
                datasets: [
                    {
                        label               : 'Female',
                        backgroundColor     : 'rgb(246,182,198)',
                        borderColor         : 'rgb(246,182,198)',
                        pointRadius         : false,
                        pointColor          : 'rgba(210, 214, 222, 1)',
                        pointStrokeColor    : '#c1c7d1',
                        pointHighlightFill  : '#fff',
                        pointHighlightStroke: 'rgba(220,220,220,1)',
                        data                : <?= json_encode(array_column($chart_data['student_count'], 'male')); ?>
                    },
                    {
                        label               : 'Male',
                        backgroundColor     : 'rgba(71,105,218,0.9)',
                        borderColor         : 'rgba(60,141,188,0.8)',
                        pointRadius          : false,
                        pointColor          : '#3b8bba',
                        pointStrokeColor    : 'rgba(60,141,188,1)',
                        pointHighlightFill  : '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data                : <?= json_encode(array_column($chart_data['student_count'], 'female')); ?>
                    }
                ]
            }
            var barChartCanvas = $('#student_count_chart').get(0).getContext('2d')
            var barChartData = $.extend(true, {}, student_data)
            var temp0 = student_data.datasets[0]
            var temp1 = student_data.datasets[1]
            barChartData.datasets[0] = temp1
            barChartData.datasets[1] = temp0

            var barChartOptions = {
                responsive              : true,
                maintainAspectRatio     : false,
                datasetFill             : false
            }

            new Chart(barChartCanvas, {
                type: 'bar',
                data: barChartData,
                options: barChartOptions
            })


            //---------------------
            //- STACKED BAR CHART - SCHOOL COUNT ---------------------
            //---------------------
            var school_data = {
                labels  : <?= json_encode(array_column($chart_data['school_count'], 'title')); ?>,
                datasets: [
                    {
                        label               : 'Active',
                        backgroundColor     : 'rgba(68,187,155,0.9)',
                        borderColor         : 'rgba(68,187,155,0.9)',
                        pointRadius          : false,
                        pointColor          : '#44BB9BE5',
                        pointStrokeColor    : 'rgba(68,187,155,0.9)',
                        pointHighlightFill  : '#fff',
                        pointHighlightStroke: 'rgba(62,140,109,0.9)',
                        data                : <?= json_encode(array_column($chart_data['school_count'], 'active')); ?>
                    },
                    {
                        label               : 'In Active',
                        backgroundColor     : 'rgb(246,158,168)',
                        borderColor         : 'rgb(246,182,198)',
                        pointRadius         : false,
                        pointColor          : 'rgba(210, 214, 222, 1)',
                        pointStrokeColor    : '#c1c7d1',
                        pointHighlightFill  : '#fff',
                        pointHighlightStroke: 'rgba(220,220,220,1)',
                        data                : <?= json_encode(array_column($chart_data['school_count'], 'in_active')); ?>
                    }
                ]
            }

            var stackedBarChartCanvas = $('#school_count_chart').get(0).getContext('2d')
            var stackedBarChartData = $.extend(true, {}, school_data)

            var stackedBarChartOptions = {
                responsive              : true,
                maintainAspectRatio     : false,
                scales: {
                    xAxes: [{
                        stacked: true,
                    }],
                    yAxes: [{
                        stacked: true
                    }]
                }
            }

            new Chart(stackedBarChartCanvas, {
                type: 'bar',
                data: stackedBarChartData,
                options: stackedBarChartOptions
            })
        })
    </script>
    <?php
}
?>
