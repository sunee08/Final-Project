    <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-edit"></i>
                Workload</h3>
            </div> <!-- /.card-body -->
            <div class="card-body">

              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/canvasjs/1.7.0/canvasjs.js"></script>
              <script type="text/javascript">
                $(document).ready(function () {

                  $.getJSON("get_data.php", function (result) {

                    var chart = new CanvasJS.Chart("chartContainer", {
                      animationEnabled: true,
                      title: {
                        text: "Project Monitoring"
                      },
                      axisY: {
                        title: "Forms",
                        prefix: "PF",
                        suffix: ""
                      },
                      data: [{
                        type: "bar",
                        yValueFormatString: "PF#",
                        indexLabel: "{y}",
                        indexLabelPlacement: "inside",
                        indexLabelFontWeight: "bolder",
                        indexLabelFontColor: "white",
                        dataPoints: result
                      }]
                    });
                    chart.render();
                  });
                });
              </script>

              <div class="body">
                <div id="chartContainer" style="height: 400px; width: 90%;"></div>
              </div>


            </div><!-- /.card-body -->
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->

