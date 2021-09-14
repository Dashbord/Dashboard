<template>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <tr>
            <th>
              <form method="get" action="/Junk">
                <button class="butt2 butt1" type="submit">Junk</button>
              </form>
            </th>
            <th>
              <form method="get" action="/Com">
                <button class="butt2 butt1" type="submit">Comunicações</button>
              </form>
            </th>
            <th>
              <form method="get" action="/ServiceDesk">
                <button class="butt2 butt1" type="submit">Service Desk</button>
              </form>
            </th>
            <th>
              <form method="get" action="/Seguranca">
                <button class="butt2 butt1" type="submit">Segurança</button>
              </form>
            </th>
            <th>
              <form method="get" action="/core">
                <button class="butt2 butt1" type="submit">CORE</button>
              </form>
            </th>
            <th>
              <form method="get" action="/SupInformatico">
                <button class="butt2 butt1" type="submit">
                  Suporte Informático
                </button>
              </form>
            </th>
            <th>
              <form method="get" action="/HelpDesk">
                <button class="butt2 butt1" type="submit">Helpdesk</button>
              </form>
            </th>
            <th>
              <form method="get" action="/Monitorizacao">
                <button class="butt2 butt1" type="submit">Monitorização</button>
              </form>
            </th>
            <th>
              <form method="get" action="/Servicos">
                <button class="butt2 butt1" type="submit">Serviços</button>
              </form>
            </th>
            <th>
              <form method="get" action="/AdSistemas">
                <button class="butt2 butt1" type="submit">
                  Administração de Sistemas
                </button>
              </form>
            </th>
          </tr>
          <div class="card-header">
            <h4 class="card-title">QueueView:Raw</h4>
            <button class="butt butt1" v-on:click="muda1()" type="submit">
              1
            </button>
            <button class="butt butt1" v-on:click="muda2()" type="submit">
              2
            </button>
            <button class="butt butt1" v-on:click="muda3()" type="submit">
              3
            </button>
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
                  <th>Customer id</th>
                  <th>Priority</th>
                  <th>Lock</th>
                </thead>
                <tbody v-if="this.i == 1">
                  <tr v-for="ticket in tickets" :key="ticket.id">
                    <td>
                     <a :href="`/Details/${ticket.TicketID}`">{{ ticket.TicketNumber}}</a>
                    </td>
                    <td>
                      {{ ticket.Title }}
                    </td>
                    <td>
                      {{ ticket.Created }}
                    </td>
                    <td>
                      {{ ticket.Changed }}
                    </td>
                    <td>
                      {{ ticket.StateType }}
                    </td>
                    <td>
                      {{ ticket.Queue }}
                    </td>
                    <td>
                      {{ ticket.Owner }}
                    </td>
                    <td>
                      {{ ticket.CustomerUserID }}
                    </td>
                    <td>
                      {{ ticket.Priority }}
                    </td>
                    <td>
                      {{ ticket.Lock }}
                    </td>
                  </tr>
                </tbody>
                <tbody v-if="this.i == 2">
                  <tr v-for="ticket in tickets2" :key="ticket.id">
                    <td>
                     <a :href="`/Details/${ticket.TicketID}`">{{ ticket.TicketNumber}}</a>
                    </td>
                    <td>
                      {{ ticket.Title }}
                    </td>
                    <td>
                      {{ ticket.Created }}
                    </td>
                    <td>
                      {{ ticket.Changed }}
                    </td>
                    <td>
                      {{ ticket.StateType }}
                    </td>
                    <td>
                      {{ ticket.Queue }}
                    </td>
                    <td>
                      {{ ticket.Owner }}
                    </td>
                    <td>
                      {{ ticket.CustomerUserID }}
                    </td>
                    <td>
                      {{ ticket.Priority }}
                    </td>
                    <td>
                      {{ ticket.Lock }}
                    </td>
                  </tr>
                </tbody>
                <tbody v-if="this.i == 3">
                  <tr v-for="ticket in tickets3" :key="ticket.id">
                    <td>
                      <a :href="`/Details/${ticket.TicketID}`">{{ ticket.TicketNumber}}</a>
                    </td>
                    <td>
                      {{ ticket.Title }}
                    </td>
                    <td>
                      {{ ticket.Created }}
                    </td>
                    <td>
                      {{ ticket.Changed }}
                    </td>
                    <td>
                      {{ ticket.StateType }}
                    </td>
                    <td>
                      {{ ticket.Queue }}
                    </td>
                    <td>
                      {{ ticket.Owner }}
                    </td>
                    <td>
                      {{ ticket.CustomerUserID }}
                    </td>
                    <td>
                      {{ ticket.Priority }}
                    </td>
                    <td>
                      {{ ticket.Lock }}
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
    i: 1,
    tickets: null,
    tickets2: null,
    tickets3: null,
  }),
  mounted() {
    axios.get("/ticketRaw").then((res) => {
      this.tickets = res.data;
    });
    axios.get("/ticketRaw2").then((res) => {
      this.tickets2 = res.data;
    });
    axios.get("/ticketRaw3").then((res) => {
      this.tickets3 = res.data;
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
  },
};
</script>
<style>
.butt2 {
  background-color: #2ca8ff;
  color: white;
  border: none;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  font-size: 13px;
}
.butt1 {
  border-radius: 12px;
}
</style>