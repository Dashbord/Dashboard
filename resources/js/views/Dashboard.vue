<template>
  <div class="content">
    <div class="row">
      <!-- NEW -->
      <div class="col-md-3">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">New</h4>
          </div>
          <div class="card-body">
            <div class="card-footer">
              <h4>{{ ticketsQueueStateNew }}</h4>
            </div>
          </div>
        </div>
      </div>
      <!-- Open -->
      <div class="col-md-3">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Open</h4>
          </div>
          <div class="card-body">
            <div class="card-footer">
              <h4>{{ ticketsQueueStateOpen }}</h4>
            </div>
          </div>
        </div>
      </div>
      <!-- close -->
      <div class="col-md-3">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">close</h4>
          </div>
          <div class="card-body">
            <div class="card-footer">
              <h4>{{ ticketsQueueStateClose }}</h4>
            </div>
          </div>
        </div>
      </div>
      <!-- Total -->
      <div class="col-md-12">
            <div class="card card-chart">
          <div class="card-header">
            <h4 class="card-title">Tickets {{queue}}</h4>
            <div class="dropdown">
              <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                <i class="now-ui-icons loader_gear"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <button v-for="q in queues" :key="q" :value="q" class="dropdown-item" @click="queue = q" >{{q}}</button>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="card-footer">
              <h4>{{ ticketsQueueStateTotal }}</h4>
            </div>
          </div>
        </div>
      </div>
          <!--<div class="dropdown">
            <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
              <i class="now-ui-icons loader_gear"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
              <button v-for="q in queues" :key="q" :value="q" class="dropdown-item" @click="queue = q" >{{q}}</button>
            </div>
          </div> -->
      <!-- <select v-model="queue" class="dropdown">
        <option disabled value="">Please select one</option>
        <option v-for="queue in queues" :key="queue" :value="queue">{{queue}}</option>
      </select> -->

      <!-- Primeiro grafico -->
      <div class="col-lg-6">
        <div class="card card-chart">
          <div class="card-header">
            <h4 class="card-title">Ticket Resolution</h4>
          </div>
          <pie-chart
            :data="[
              ['Opened Tickets', resolutionPercentage[0]],
              ['Resolved Tickets', resolutionPercentage[1]],
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
          <column-chart 
            :data="TicketQueue.map(ticket=>[ticket.queue,ticket.total])">
          </column-chart>
        </div>
      </div>
      <!-- tempo médio -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Average first reply time</h4>
          </div>
          <div class="card-body">
            <div class="card-footer">
              <h4>{{new Date((somaReplyTime/calls.length)*1000).toISOString().substr(14,5)}}</h4>
            </div>
          </div>
        </div>
      </div>
      <!-- tempo médio -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Average full resolve time</h4>
          </div>
          <div class="card-body">
            <div class="card-footer">
              <h4>{{new Date((somaDuration/calls.length)*1000).toISOString().substr(14,5)}}</h4>
            </div>
          </div>
        </div>
      </div>
      <!-- Tempo de chamada por cliente -->
      <div class="col-lg-6">
        <div class="card card-chart">
          <div class="card-header">
            <h4 class="card-title">Tempo de chamada por cliente</h4>
          </div>
          <br>
          <line-chart :data="calls.map(call=>[call.collaborator,call.duration])"> </line-chart>
        </div>
      </div>
      <!-- Satisfação do cliente -->
      <div class="col-lg-6">
        <div class="card card-chart">
          <div class="card-header">
            <h4 class="card-title">Satisfação do cliente</h4>
          </div>
          <pie-chart
            :data="[
              ['bom', satisfaction[0]],
              ['mau', satisfaction[1]],
            ]"
          >
          </pie-chart>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data: () => ({
    resolutionPercentage:[],
    satisfaction: [],
    ticketsQueueStateNew: null,
    ticketsQueueStateOpen: null,
    ticketsQueueStateClose: null,
    ticketsQueueStateTotal: null,
    queues: null,
    collaborator: [],
    duration: [],
    calls: [],
    somaDuration: [],
    somaReplyTime: [],
    TicketQueue:[],
    queue:'CORE',
  }),
  mounted() {
    this.updatequeue();
    axios.get("/satisfaction_score").then((res) => {
      this.satisfaction = res.data;
    });
     axios.get("/ResolutionScore").then((res) => {
      this.resolutionPercentage = res.data;
    });
    axios.get("/calls").then((res) => {
      this.calls = res.data;
    });
     axios.get("/somaDuration").then((res) => {
      this.somaDuration = res.data;
    });
    axios.get("/somaReplyTime").then((res) => {
      this.somaReplyTime = res.data;
    });
    axios.get("/TicketQueue").then((res) => {
      this.TicketQueue = res.data;
    });
    
    axios.get("/queues").then((res) => {
      this.queues = res.data;
    });
    // axios.get("/collaborator").then((res) => {
    //   this.collaborator = res.data;
    // });
    // axios.get("/duration").then((res) => {
    //   this.collaborator = res.data;
    // });
  },
  watch:{
    queue(){
      this.updatequeue();
    }
  },
  methods: {
    updatequeue(){
      axios.get("/queueSate/"+this.queue+"/new").then((res) => {
        this.ticketsQueueStateNew = res.data;
      });
      axios.get("/queueSate/"+this.queue+"/open").then((res) => {
        this.ticketsQueueStateOpen = res.data;
      });
      axios.get("/queueSate/"+this.queue+"/closed").then((res) => {
        this.ticketsQueueStateClose = res.data;
      });
      axios.get("/queueTotal/"+this.queue).then((res) => {
        this.ticketsQueueStateTotal = res.data;
      });
    },
  },
};
</script>
    
<style>
</style>