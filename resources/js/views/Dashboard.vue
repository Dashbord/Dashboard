<template>
  <div class="content">
    <div class="row">
      <!-- primeiro tabela -->
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Ticket Queue Overview</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class="text-primary">
                  <th>Queue ids</th>
                  <th>In Progress</th>
                  <th>Open Tickets</th>
                  <th>Pending Customers</th>
                  <th>Resolved</th>
                  <th>Total</th>
                </thead>
                <tbody>
                  <!-- <tr v-for="ticketAll in ticketsAll" :key="ticketAll.id">
                    <td>
                    {{ticketAll.queue}}
                    </td>
                    <td>
                    {{ticketAll.id}}
                    </td>
                    <td>
                    </td>
                  </tr> -->
                </tbody>
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
      <!-- segundo tabela -->
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">New Tickets</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class="text-primary">
                  <th>Ticket</th>
                  <th>Age</th>
                  <th>Title</th>
                </thead>
                <tbody>
                  <tr v-for="ticket in tickets" :key="ticket.id">
                    <td>
                      {{ ticket.TicketNumber }}
                    </td>
                    <td>
                      {{ ticket.Created }}
                    </td>
                    <td>
                      {{ ticket.Title }}
                    </td>
                  </tr>
                </tbody>
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
                    <td>RAW</td>
                    <td>{{ ticketQueueNew2.length }}</td>
                    <td>{{ ticketQueueOpen2 }}</td>
                    <td>{{ ticketQueuePending2 }}</td>
                  </tr>
                  <tr>
                    <td>JUNK</td>
                    <td>{{ ticketQueueNew3.length }}</td>
                    <td>{{ ticketQueueOpen3 }}</td>
                    <td>{{ ticketQueuePending3 }}</td>
                  </tr>
                  <tr>
                    <td>COMUNICAÇÕES</td>
                    <td>{{ ticketQueueNew5.length }}</td>
                    <td>{{ ticketQueueOpen5 }}</td>
                    <td>{{ ticketQueuePending5 }}</td>
                  </tr>
                  <tr>
                    <td>SERVICE DESK</td>
                    <td>{{ ticketQueueNew6.length }}</td>
                    <td>{{ ticketQueueOpen6 }}</td>
                    <td>{{ ticketQueuePending6 }}</td>
                  </tr>
                  <tr>
                    <td>SEGURANÇA</td>
                    <td>{{ ticketQueueNew7.length }}</td>
                    <td>{{ ticketQueueOpen7 }}</td>
                    <td>{{ ticketQueuePending7 }}</td>
                  </tr>
                  <tr>
                    <td>Administração de Sistemas</td>
                    <td>{{ ticketQueueNew8.length }}</td>
                    <td>{{ ticketQueueOpen8.length }}</td>
                    <td>{{ ticketQueuePending8 }}</td>
                  </tr>
                  <tr>
                    <td>CORE</td>
                    <td>{{ ticketQueueNew9.length }}</td>
                    <td>{{ ticketQueueOpen9 }}</td>
                    <td>{{ ticketQueuePending9.length }}</td>
                  </tr>
                  <tr>
                    <td>Suporte Informático</td>
                    <td>{{ ticketQueueNew10.length }}</td>
                    <td>{{ ticketQueueOpen10 }}</td>
                    <td>{{ ticketQueuePending10 }}</td>
                  </tr>
                  <tr>
                    <td>Helpdesk</td>
                    <td>{{ ticketQueueNew11.length }}</td>
                    <td>{{ ticketQueueOpen11 }}</td>
                    <td>{{ ticketQueuePending11.length }}</td>
                  </tr>
                  <tr>
                    <td>Monitorização</td>
                    <td>{{ ticketQueueNew12.length }}</td>
                    <td>{{ ticketQueueOpen12 }}</td>
                    <td>{{ ticketQueuePending12 }}</td>
                  </tr>
                  <tr>
                    <td>Serviços</td>
                    <td>{{ ticketQueueNew13.length }}</td>
                    <td>{{ ticketQueueOpen13 }}</td>
                    <td>{{ ticketQueuePending13 }}</td>
                  </tr>
                  <tr>
                    <td>Total</td>
                    <td>
                      {{
                        ticketQueueNew13.length +
                        ticketQueueNew12.length +
                        ticketQueueNew11.length +
                        ticketQueueNew10.length +
                        ticketQueueNew9.length +
                        ticketQueueNew8.length +
                        ticketQueueNew7.length +
                        ticketQueueNew6.length +
                        ticketQueueNew5.length +
                        ticketQueueNew3.length +
                        ticketQueueNew2.length
                      }}
                    </td>
                  </tr>
                </tbody>
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
                        (ticketNew.length * 100) /
                        (ticketNew.length + ticketClosed.length)
                      }}%
                    </td>
                  </tr>
                </tbody>
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
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data: () => ({
    //Ticket Resolution percentage
    ticketNew: null,
    ticketClosed: null,
    //New Tickets
    tickets: null,
    //Ticket Overview Queue
    ticketQueueNew2: null,
    ticketQueueOpen2: null,
    ticketQueuePending2: null,
    ticketQueueNew3: null,
    ticketQueueOpen3: null,
    ticketQueuePending3: null,
    ticketQueueNew5: null,
    ticketQueueOpen5: null,
    ticketQueuePending5: null,
    ticketQueueNew6: null,
    ticketQueueOpen6: null,
    ticketQueuePending6: null,
    ticketQueueNew7: null,
    ticketQueueOpen7: null,
    ticketQueuePending7: null,
    ticketQueueNew8: null,
    ticketQueueOpen8: null,
    ticketQueuePending8: null,
    ticketQueueNew9: null,
    ticketQueueOpen9: null,
    ticketQueuePending9: null,
    ticketQueueNew10: null,
    ticketQueueOpen10: null,
    ticketQueuePending10: null,
    ticketQueueNew11: null,
    ticketQueueOpen11: null,
    ticketQueuePending11: null,
    ticketQueueNew12: null,
    ticketQueueOpen12: null,
    ticketQueuePending12: null,
    ticketQueueNew13: null,
    ticketQueueOpen13: null,
    ticketQueuePending13: null,
    // ticketsAll: null,
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
    //  axios.get("/ticket").then((res) => {
    //   this.ticketsAll = res.data;
    // });
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
};
</script>
    
<style>
</style>