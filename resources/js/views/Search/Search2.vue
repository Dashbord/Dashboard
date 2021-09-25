<template>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <br />
          <input type="text" v-model="search" placeholder="search titles" />
          <div class="card-header">
            <h4 class="card-title">Search:</h4>
            <form method="get" action="/Search5">
              <button style="float: right" class="butt butt1" type="submit">
                5
              </button>
            </form>
            <form method="get" action="/Search4">
              <button style="float: right" class="butt butt1" type="submit">
                4
              </button>
            </form>
            <form method="get" action="/Search3">
              <button style="float: right" class="butt butt1" type="submit">
                3
              </button>
            </form>
            <form method="get" action="/Search2">
              <button style="float: right" class="butt butt1" type="submit">
                2
              </button>
            </form>
            <form method="get" action="/Search1">
              <button style="float: right" class="butt butt1" type="submit">
                1
              </button>
            </form>
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
                      <a :href="`/Details/${ticket.TicketID}`">{{
                        ticket.TicketNumber
                      }}</a>
                    </td>
                    <td>
                      {{ ticket.Title }}
                    </td>
                    <td>
                      {{ ticket.StateType }}
                    </td>
                    <td>
                      {{ ticket.Queue }}
                    </td>
                    <td>
                      {{ ticket.Priority }}
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
    axios.get("/search2").then((res) => {
      this.tickets = res.data;
    });
  },
  computed: {
    filteredTicket1: function () {
      return this.tickets.filter((ticket) => {
        return ticket.Title.match(this.search);
      });
    },
  },
};
</script>

<style>
</style>