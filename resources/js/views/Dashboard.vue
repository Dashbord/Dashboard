<template>
  <div class="content">
    <div class="row">
      <!-- NEW -->
      <div class="col-md-2">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">New</h4>
          </div>
          <div class="card-body">
            <div class="card-footer">
              <h1>{{ ticketsQueueStateNew.length}} </h1>
            </div>
          </div>
        </div>
      </div> 
      <!-- Open -->
      <div class="col-md-2">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Open</h4>
          </div>
          <div class="card-body">
            <div class="card-footer">
              <h1>{{ ticketsQueueStateOpen.length }} </h1>
            </div>
          </div>
        </div>
      </div> 
      <!-- close -->
      <div class="col-md-2">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">close</h4>
          </div>
          <div class="card-body">
            <div class="card-footer">
              <h1>{{ ticketsQueueStateClose.length }} </h1>
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
                  <tr>
                    <td>
                      CORE
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer"></div>
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
            <div class="card-footer"></div>
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
          <br /><br />
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
          <br /><br />
          <line-chart v-for="call in calls" :key="call.id"
            :data ="[ 
              [call.collaborator, call.duration],
            ]">
          </line-chart >
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data: () => ({
    ticketsCORES: [],
    ticketsQueueStateNew: [],
    ticketsQueueStateOpen: [],
    ticketsQueueStateClose: [],
    i: 1,
    Queue: [],
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
    calls: [],
  }),
  mounted() {
     axios.get("/queueSate/CORE").then((res) => {
      this.ticketsQueueStateNew = res.data;
    });
    // axios.get("/queueSate/CORE/open").then((res) => {
    //   this.ticketsQueueStateOpen = res.data;
    // });
    // axios.get("/queueSate/CORE/close").then((res) => {
    //   this.ticketsQueueStateClose = res.data;
    // });
    axios.get("/call").then((res) => {
      this.calls = res.data;
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