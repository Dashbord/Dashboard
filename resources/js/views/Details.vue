<template>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Details de {{id}} </h4>
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
    // id: this.$route.params.id,
  }),
  //  mounted() {
  //   axios.get(`/details/${{id}}`).then((res) => {
  //     this.tickets = res.data;
  //   });
  // mounted() {
  //   axios.get("/details",this.$router.params.id).then((res) => {
  //     this.tickets = res.data;
  //   });
    mounted() {
    axios.get('/details/'+ this.id).then((res) => {
      this.tickets = res.data;
    });

   }
};

</script>

<style>
</style>