<template>
  <div class="content">
    <div class="row">
      <!-- primeiro tabela -->
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Reminder Tickets</h4>
            <button style='float: right;' class="butt butt1" v-on:click="muda3()" type="submit">
                3
              </button>
              <button style='float: right;' class="butt butt1" v-on:click="muda2()" type="submit">
                2
              </button>
              <button style='float: right;' class="butt butt1" v-on:click="muda1()" type="submit">
                1
              </button>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class="text-primary">
                  <th>Ticket</th>
                  <th>Age</th>
                  <th>Title</th>
                </thead>
                <tbody v-if="this.i == 1">
                  <tr v-for="ticket in tickets" :key="ticket.id">
                    <td>
                      <a :href="`/Details/${ticket.TicketID}`">{{ ticket.TicketNumber}}</a>
                    </td>
                    <td>
                      {{ ((ticket.Age * 0.000116) / 10).toFixed(1) }} Dias.Horas
                    </td>
                    <td>
                      {{ ticket.Title }}
                    </td>
                  </tr>
                </tbody>
                <tbody v-if="this.i == 2">
                  <tr v-for="ticket in tickets2" :key="ticket.id">
                    <td>
                      <a :href="`/Details/${ticket.TicketID}`">{{ ticket.TicketNumber}}</a>
                    </td>
                    <td>
                      {{ ((ticket.Age * 0.000116) / 10).toFixed(1) }} Dias.Horas
                    </td>
                    <td>
                      {{ ticket.Title }}
                    </td>
                  </tr>
                </tbody>
                <tbody v-if="this.i == 3">
                  <tr v-for="ticket in tickets3" :key="ticket.id">
                    <td>
                      <a :href="`/Details/${ticket.TicketID}`">{{ ticket.TicketNumber}}</a>
                    </td>
                    <td>
                      {{ ((ticket.Age * 0.000116) / 10).toFixed(1) }} Dias.Horas
                    </td>
                    <td>
                      {{ ticket.Title }}
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer">
            </div>
          </div>
        </div>
      </div>
      <!-- terceiro tabela -->
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Ticket Overview Queue</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class="text-primary">
                  <th>Queue</th>
                  <th>New</th>
                  <th>Open</th>
                  <th>Pending Reminder</th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <a :href="`/Raw`">RAW</a>
                    </td>
                    <td>{{ ticketQueueNew2.length }}</td>
                    <td v-if="ticketQueueOpen2 == null">0</td>
                    <td v-else>{{ ticketQueueOpen2.length }}</td>
                    <td v-if="ticketQueuePending2 == null">0</td>
                    <td v-else>{{ ticketQueuePending2.length }}</td>
                  </tr>
                  <tr>
                    <td>
                      <a :href="`/Junk`">JUNK</a>
                    </td>
                    <td>{{ ticketQueueNew3.length }}</td>
                    <td v-if="ticketQueueOpen3 == null">0</td>
                    <td v-else>{{ ticketQueueOpen3.length }}</td>
                    <td v-if="ticketQueuePending3 == null">0</td>
                    <td v-else>{{ ticketQueuePending3.length }}</td>
                  </tr>
                  <tr>
                    <td>
                      <a :href="`/Com`">COMUNICAÇÕES</a>
                    </td>
                    <td>{{ ticketQueueNew5.length }}</td>
                    <td v-if="ticketQueueOpen5 == null">0</td>
                    <td v-else>{{ ticketQueueOpen5.length }}</td>
                    <td v-if="ticketQueuePending5 == null">0</td>
                    <td v-else>{{ ticketQueuePending5.length }}</td>
                  </tr>
                  <tr>
                    <td>
                      <a :href="`/ServiceDesk`">SERVICE DESK</a>
                    </td>
                    <td>{{ ticketQueueNew6.length }}</td>
                    <td v-if="ticketQueueOpen6 == null">0</td>
                    <td v-else>{{ ticketQueueOpen6.length }}</td>
                    <td v-if="ticketQueuePending6 == null">0</td>
                    <td v-else>{{ ticketQueuePending6.length }}</td>
                  </tr>
                  <tr>
                     <td>
                      <a :href="`/Seguranca`">SEGURANÇA</a>
                    </td>
                    <td>{{ ticketQueueNew7.length }}</td>
                    <td v-if="ticketQueueOpen7 == null">0</td>
                    <td v-else>{{ ticketQueueOpen7.length }}</td>
                    <td v-if="ticketQueuePending7 == null">0</td>
                    <td v-else>{{ ticketQueuePending7.length }}</td>
                  </tr>
                  <tr>
                     <td>
                      <a :href="`/AdSistemas`">Administração de Sistemas</a>
                    </td>
                    <td>{{ ticketQueueNew8.length }}</td>
                    <td>{{ ticketQueueOpen8.length }}</td>
                    <td v-if="ticketQueuePending8 == null">0</td>
                    <td v-else>{{ ticketQueuePending8.length }}</td>
                  </tr>
                  <tr>
                     <td>
                      <a :href="`/core`">CORE</a>
                    </td>
                    <td>{{ ticketQueueNew9.length }}</td>
                    <td v-if="ticketQueueOpen9 == null">0</td>
                    <td v-else>{{ ticketQueueOpen9.length }}</td>
                    <td>{{ ticketQueuePending9.length }}</td>
                  </tr>
                  <tr>
                     <td>
                      <a :href="`/SupInformatico`">Suporte Informático</a>
                    </td>
                    <td>{{ ticketQueueNew10.length }}</td>
                    <td v-if="ticketQueueOpen10 == null">0</td>
                    <td v-else>{{ ticketQueueOpen10.length }}</td>
                    <td v-if="ticketQueuePending10 == null">0</td>
                    <td v-else>{{ ticketQueuePending10.length }}</td>
                  </tr>
                  <tr>
                     <td>
                      <a :href="`/Helpdesk`">Helpdesk</a>
                    </td>
                    <td>{{ ticketQueueNew11.length }}</td>
                    <td v-if="ticketQueueOpen11 == null">0</td>
                    <td v-else>{{ ticketQueueOpen11.length }}</td>
                    <td>{{ ticketQueuePending11.length }}</td>
                  </tr>
                  <tr>
                     <td>
                      <a :href="`/Monitorizacao`">Monitorização</a>
                    </td>
                    <td>{{ ticketQueueNew12.length }}</td>
                    <td v-if="ticketQueueOpen12 == null">0</td>
                    <td v-else>{{ ticketQueueOpen12.length }}</td>
                    <td v-if="ticketQueuePending12 == null">0</td>
                    <td v-else>{{ ticketQueuePending12.length }}</td>
                  </tr>
                  <tr>
                     <td>
                      <a :href="`/Servicos`">Serviços</a>
                    </td>
                    <td>{{ ticketQueueNew13.length }}</td>
                    <td v-if="ticketQueueOpen13 == null">0</td>
                    <td v-else>{{ ticketQueueOpen13.length }}</td>
                    <td v-if="ticketQueuePending13 == null">0</td>
                    <td v-else>{{ ticketQueuePending13.length }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer">
            </div>
          </div>
        </div>
      </div>
      <!-- Quarta tabela -->
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
                <tbody>
                  <tr>
                    <td>
                      {{ ticketNew.length }}
                    </td>
                    <td>
                      {{ ticketClosed.length }}
                    </td>
                    <td>
                      {{
                        (
                          (ticketNew.length * 100) /
                          (ticketNew.length + ticketClosed.length)
                        ).toFixed(1)
                      }}%
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer">
            </div>
          </div>
        </div>
      </div>
      <!-- Primeiro grafico -->
      <div class="col-lg-6">
        <div class="card card-chart">
          <div class="card-header">
            <h4 class="card-title">Ticket Resolution</h4>
          </div>
          <pie-chart
            :data="[
              ['Opened Tickets', ticketNew.length],
              ['Resolved Tickets', ticketClosed.length],
            ]"
          >
          </pie-chart>
          <br><br>
        </div>
      </div>
      <!-- Segundo grafico -->
      <div class="col-lg-6">
        <div class="card card-chart">
          <div class="card-header">
            <h4 class="card-title">Ticket Overview Queue (open)</h4>
          </div>
          <pie-chart
            :data="[
              ['Serviços', ticketQueueNew13.length],
              ['Monitorização', ticketQueueNew12.length],
              ['Helpdesk', ticketQueueNew11.length],
              ['Suporte Informático', ticketQueueNew10.length],
              ['CORE', ticketQueueNew9.length],
              ['Administração de Sistemas ', ticketQueueNew8.length],
              ['SEGURANÇA', ticketQueueNew7.length],
              ['SERVICE DESK', ticketQueueNew6.length],
              ['COMUNICAÇÕES', ticketQueueNew5.length],
              ['JUNK', ticketQueueNew3.length],
              ['RAW', ticketQueueNew2.length],
            ]"
          ></pie-chart>
          <br><br>
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
    //Ticket Resolution percentage
    ticketNew: [],
    ticketClosed: [],
    //pending Tickets
    tickets: [],
    tickets2: [],
    tickets3: [],
    //Ticket Overview Queue
    ticketQueueNew2: [],
    ticketQueueOpen2: [],
    ticketQueuePending2: [],
    ticketQueueNew3: [],
    ticketQueueOpen3: [],
    ticketQueuePending3: [],
    ticketQueueNew5: [],
    ticketQueueOpen5: [],
    ticketQueuePending5: [],
    ticketQueueNew6: [],
    ticketQueueOpen6: [],
    ticketQueuePending6: [],
    ticketQueueNew7: [],
    ticketQueueOpen7: [],
    ticketQueuePending7: [],
    ticketQueueNew8: [],
    ticketQueueOpen8: [],
    ticketQueuePending8: [],
    ticketQueueNew9: [],
    ticketQueueOpen9: [],
    ticketQueuePending9: [],
    ticketQueueNew10: [],
    ticketQueueOpen10: [],
    ticketQueuePending10: [],
    ticketQueueNew11: [],
    ticketQueueOpen11: [],
    ticketQueuePending11: [],
    ticketQueueNew12: [],
    ticketQueueOpen12: [],
    ticketQueuePending12: [],
    ticketQueueNew13: [],
    ticketQueueOpen13: [],
    ticketQueuePending13: [],
  }),
  mounted() {
    axios.get("/ticket/new").then((res) => {
      this.ticketNew = res.data.TicketID;
    });
    axios.get("/ticket/closed successful").then((res) => {
      this.ticketClosed = res.data.TicketID;
    });
    axios.get("/ticket").then((res) => {
      this.tickets = res.data;
    });
    axios.get("/ticket2").then((res) => {
      this.tickets2 = res.data;
    });
    axios.get("/ticket3").then((res) => {
      this.tickets3 = res.data;
    });
    axios.get("/ticket/2/new").then((res) => {
      this.ticketQueueNew2 = res.data.TicketID;
    });
    axios.get("/ticket/2/open").then((res) => {
      this.ticketQueueOpen2 = res.data.TicketID;
    });
    axios.get("/ticket/2/pending reminder").then((res) => {
      this.ticketQueuePending2 = res.data.TicketID;
    });
    axios.get("/ticket/3/new").then((res) => {
      this.ticketQueueNew3 = res.data.TicketID;
    });
    axios.get("/ticket/3/open").then((res) => {
      this.ticketQueueOpen3 = res.data.TicketID;
    });
    axios.get("/ticket/3/pending reminder").then((res) => {
      this.ticketQueuePending3 = res.data.TicketID;
    });
    axios.get("/ticket/5/new").then((res) => {
      this.ticketQueueNew5 = res.data.TicketID;
    });
    axios.get("/ticket/5/open").then((res) => {
      this.ticketQueueOpen5 = res.data.TicketID;
    });
    axios.get("/ticket/5/pending reminder").then((res) => {
      this.ticketQueuePending5 = res.data.TicketID;
    });
    axios.get("/ticket/6/new").then((res) => {
      this.ticketQueueNew6 = res.data.TicketID;
    });
    axios.get("/ticket/6/open").then((res) => {
      this.ticketQueueOpen6 = res.data.TicketID;
    });
    axios.get("/ticket/6/pending reminder").then((res) => {
      this.ticketQueuePending6 = res.data.TicketID;
    });
    axios.get("/ticket/7/new").then((res) => {
      this.ticketQueueNew7 = res.data.TicketID;
    });
    axios.get("/ticket/7/open").then((res) => {
      this.ticketQueueOpen7 = res.data.TicketID;
    });
    axios.get("/ticket/7/pending reminder").then((res) => {
      this.ticketQueuePending7 = res.data.TicketID;
    });
    axios.get("/ticket/8/new").then((res) => {
      this.ticketQueueNew8 = res.data.TicketID;
    });
    axios.get("/ticket/8/open").then((res) => {
      this.ticketQueueOpen8 = res.data.TicketID;
    });
    axios.get("/ticket/8/pending reminder").then((res) => {
      this.ticketQueuePending8 = res.data.TicketID;
    });
    axios.get("/ticket/9/new").then((res) => {
      this.ticketQueueNew9 = res.data.TicketID;
    });
    axios.get("/ticket/9/open").then((res) => {
      this.ticketQueueOpen9 = res.data.TicketID;
    });
    axios.get("/ticket/9/pending reminder").then((res) => {
      this.ticketQueuePending9 = res.data.TicketID;
    });
    axios.get("/ticket/10/new").then((res) => {
      this.ticketQueueNew10 = res.data.TicketID;
    });
    axios.get("/ticket/10/open").then((res) => {
      this.ticketQueueOpen10 = res.data.TicketID;
    });
    axios.get("/ticket/10/pending reminder").then((res) => {
      this.ticketQueuePending10 = res.data.TicketID;
    });
    axios.get("/ticket/11/new").then((res) => {
      this.ticketQueueNew11 = res.data.TicketID;
    });
    axios.get("/ticket/11/open").then((res) => {
      this.ticketQueueOpen11 = res.data.TicketID;
    });
    axios.get("/ticket/11/pending reminder").then((res) => {
      this.ticketQueuePending11 = res.data.TicketID;
    });
    axios.get("/ticket/12/new").then((res) => {
      this.ticketQueueNew12 = res.data.TicketID;
    });
    axios.get("/ticket/12/open").then((res) => {
      this.ticketQueueOpen12 = res.data.TicketID;
    });
    axios.get("/ticket/12/pending reminder").then((res) => {
      this.ticketQueuePending12 = res.data.TicketID;
    });
    axios.get("/ticket/13/new").then((res) => {
      this.ticketQueueNew13 = res.data.TicketID;
    });
    axios.get("/ticket/13/open").then((res) => {
      this.ticketQueueOpen13 = res.data.TicketID;
    });
    axios.get("/ticket/13/pending reminder").then((res) => {
      this.ticketQueuePending13 = res.data.TicketID;
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
</style>