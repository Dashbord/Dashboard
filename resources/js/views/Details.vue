<template>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Details:Ticket{{id}}ID </h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class="text-primary">
                  <th>Ticket Number</th>
                  <th>Title</th>
                  <th>Created</th>
                  <th>Changed</th>
                  <th>State</th>
                  <th>Queue</th>
                  <th>Owner</th>
                  <th>Priority</th>
                  <th>Lock</th>
                  <th>Age</th>
                  <th>Responsible</th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      {{ tickets.TicketNumber}}
                    </td>
                    <td>
                      {{ tickets.Title }}
                    </td>
                    <td>
                      {{ tickets.Created }}
                    </td>
                    <td>
                      {{ tickets.Changed }}
                    </td>
                    <td>
                      {{ tickets.StateType }}
                    </td>
                    <td>
                      {{ tickets.Queue }}
                    </td>
                    <td>
                      {{ tickets.Owner }}
                    </td>
                    <td>
                      {{ tickets.Priority }}
                    </td>
                    <td>
                      {{ tickets.Lock }}
                    </td>
                    <td>
                      {{ ((tickets.Age * 0.000116) / 10).toFixed(1) }} D.H
                    </td>
                    <td>
                      {{ tickets.Responsible }}
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props:['id'],
  data: () => ({
    tickets: null,
  }),
    mounted() {
    axios.get('/details/'+ this.id).then((res) => {
      this.tickets = res.data;
    });

   }
};

</script>

<style>
</style>