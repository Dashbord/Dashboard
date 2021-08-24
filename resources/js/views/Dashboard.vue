    <template>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Ticket Queue Overview</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class="text-primary">
                  <th>Queue</th>
                  <th>In Progress</th>
                  <th>Open Tickets</th>
                  <th>Pending Customers</th>
                  <th>Resolved</th>
                  <th>Total</th>
                </thead>
                <tbody></tbody>
              </table>
            </div>
            <div class="card-footer">
              <hr />
              <div class="stats">
                <i class="now-ui-icons loader_refresh spin"></i> Updated 3
                minutes ago
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Ticket Resolution percentage</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class="text-primary">
                  <th>Opened Tickets</th>
                  <th>Resolved Tickets</th>
                  <th>Resolution percentage</th>
                </thead>
                <tbody></tbody>
              </table>
            </div>
            <div class="card-footer">
              <hr />
              <div class="stats">
                <i class="now-ui-icons loader_refresh spin"></i> Updated 3
                minutes ago
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card card-chart">
          <div class="card-header">
            <h4 class="card-title">Ticket Overview (open)</h4>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="lineChartExample"></canvas>
            </div>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="card card-chart">
          <div class="card-header">
            <h4 class="card-title">Ticket Overview (in progress)</h4>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="lineChartExampleWithNumbersAndGrid"></canvas>
            </div>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="card card-chart">
          <div class="card-header">
            <h4 class="card-title">Ticket Overview (Resolved)</h4>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="barChartSimpleGradientsNumbers"></canvas>
            </div>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="now-ui-icons ui-2_time-alarm"></i> Last 7 days
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="card card-chart">
          <div class="card-header">
            <h4 class="card-title">Ticket Overview (Total Created)</h4>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="barChartSimpleGradientsNumbers1"></canvas>
            </div>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="now-ui-icons ui-2_time-alarm"></i> Last 7 days
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="card card-chart">
          <div class="card-header">
            <h4 class="card-title">Ticket Overview (Total Resolved)</h4>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="bigDashboardChart"></canvas>
            </div>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="now-ui-icons ui-2_time-alarm"></i> Last 7 days
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  import axios from 'axios';
  export default {
    // axios.get("/ticket/Raw/new")
    //   .then((res)=>{console.log(res);
    // })
  };
</script>
    
<style>
</style>