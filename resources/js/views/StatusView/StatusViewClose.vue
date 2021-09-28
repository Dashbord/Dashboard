<template>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <form method="get" action="/StatusView">
            <button class="butt butt1" type="submit">Open Tickets</button>
          </form>
          <div class="card-header">
            <h4 class="card-title">Status View: Close tickets</h4>
            <br />
            <input type="text" v-model="search" placeholder="search titles" />
            <button
              style="float: right"
              class="butt butt1"
              v-on:click="muda4()"
              type="submit"
            >
              4
            </button>
            <button
              style="float: right"
              class="butt butt1"
              v-on:click="muda3()"
              type="submit"
            >
              3
            </button>
            <button
              style="float: right"
              class="butt butt1"
              v-on:click="muda2()"
              type="submit"
            >
              2
            </button>
            <button
              style="float: right"
              class="butt butt1"
              v-on:click="muda1()"
              type="submit"
            >
              1
            </button>
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
                <tbody v-if="this.i == 1">
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
                <tbody v-if="this.i == 2">
                  <tr v-for="ticket in tickets2" :key="ticket.id">
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
                <tbody v-if="this.i == 3">
                  <tr v-for="ticket in tickets3" :key="ticket.id">
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
                <tbody v-if="this.i == 4">
                  <tr v-for="ticket in tickets4" :key="ticket.id">
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
import axios from "axios";
export default {
  data: () => ({
    search: "",
    tickets: [],
    tickets2: null,
    tickets3: null,
    tickets4: null,
    i: 1,
  }),
  mounted() {
    axios.get("/ticketClose").then((res) => {
      this.tickets = res.data;
    });
    axios.get("/ticketClose2").then((res) => {
      this.tickets2 = res.data;
    });
    axios.get("/ticketClose3").then((res) => {
      this.tickets3 = res.data;
    });
    axios.get("/ticketClose4").then((res) => {
      this.tickets4 = res.data;
    });
  },
  methods: {
    muda1: function () {
      this.i = 1;
    },
    muda2: function () {
      this.i = 2;
    },
    muda3: function () {
      this.i = 3;
    },
    muda4: function () {
      this.i = 4;
    },
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
.butt {
  background-color: #ff6f2c;
  color: white;
  border: none;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
}
.butt1 {
  border-radius: 12px;
}
</style>