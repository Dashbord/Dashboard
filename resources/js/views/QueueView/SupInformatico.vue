<template>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <button class="butt butt1" v-on:click="muda()" type="submit">
            Junk
          </button>
          <button class="butt butt1" v-on:click="muda()" type="submit">
            Raw
          </button>
          <button class="butt butt1" v-on:click="muda()" type="submit">
            Comunicações
          </button>
          <button class="butt butt1" v-on:click="muda()" type="submit">
            Service Desk
          </button>
          <button class="butt butt1" v-on:click="muda()" type="submit">
           Segurança
          </button>
          <button class="butt butt1" v-on:click="muda()" type="submit">
            Administração de Sistemas
          </button>
          <button class="butt butt1" v-on:click="muda()" type="submit">
            CORE
          </button>
          <button class="butt butt1" v-on:click="muda()" type="submit">
            Helpdesk
          </button>
          <button class="butt butt1" v-on:click="muda()" type="submit">
            Monitorização
          </button>
          <button class="butt butt1" v-on:click="muda()" type="submit">
            Serviços
          </button>
          <div class="card-header">
            <h4 class="card-title">QueueView: Suporte Informático</h4>
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
                      {{ ticket.TicketNumber }}
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
                      {{ ticket.TicketNumber }}
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
                      {{ ticket.TicketNumber }}
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
    axios.get("/SuporteInformático").then((res) => {
      this.tickets = res.data;
    });
    axios.get("/SuporteInformático2").then((res) => {
      this.tickets2 = res.data;
    });
    axios.get("/SuporteInformático3").then((res) => {
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
.butt {
  background-color: #2ca8ff;
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