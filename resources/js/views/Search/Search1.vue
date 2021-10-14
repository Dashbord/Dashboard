<template>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Search:</h4>
             <br />
          <input type="text" v-model="search" placeholder="search titles" />
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class="text-primary">
                  <th>Ticket Number</th>
                  <th>Title</th>
                  <th>State</th>
                  <th>Queue</th>
                  <th>Priority</th>
                </thead>
                <tbody>
                  <tr v-for="ticket in filteredTicket1" :key="ticket.id">
                    <td>
                      <a :href="`/Details/${ticket.ticket_id}`">{{
                        ticket.ticket_number
                      }}</a>
                    </td>
                    <td>
                      {{ ticket.title }}
                    </td>
                    <td>
                      {{ ticket.state_type }}
                    </td>
                    <td>
                      {{ ticket.queue }}
                    </td>
                    <td>
                      {{ ticket.priority }}
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
  data: () => ({
    search: "",
    tickets: [],
  }),
  mounted() {
    axios.get("/ticket").then((res) => {
      this.tickets = res.data;
    });
  },
  computed: {
    filteredTicket1: function () {
      return this.tickets.filter((ticket) => {
        return ticket.title.match(this.search);
      });
    },
  },
};
</script>

<style>
</style>