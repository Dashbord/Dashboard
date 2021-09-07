<template>
    <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Status View: Open tickets</h4>           
            <button class="butt butt1" v-on:click="muda();" type="submit">Closed </button>
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
                <tbody>
                  <tr v-for="ticket in tickets" :key="ticket.id">
                    <td>
                     {{ticket.TicketNumber}}
                    </td> 
                    <td>
                      {{ticket.Title}}
                    </td>
                    <td>
                      {{ticket.Created}}
                    </td>
                    <td>
                      {{ticket.Changed}}
                    </td>
                    <td>
                      {{ticket.StateType}}
                    </td>
                     <td>
                      {{ticket.Queue}}
                    </td>
                    <td>
                      {{ticket.Owner}}
                    </td>
                    <td>
                      {{ticket.CustomerUserID}}
                    </td>
                    <td>
                      {{ticket.Priority}}
                    </td>
                     <td>
                      {{ticket.Lock}}
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
      </div>
    </div>
</template>
<script>
import axios from "axios";
export default {
    data: () => ({  
        i:1,
        tickets: null,
    }),
    mounted() {
        if(this.i==1){
          axios.get("/ticketOpen").then((res) => {
          this.tickets = res.data;
          });
        }
        else{
          axios.get("/ticketClose").then((res) => {
          this.tickets = res.data;
          });
        }
    },
     methods: {
      muda:function () {
      this.i==2
    }
  }
}

</script>
<style>
.butt {
    background-color: #2CA8FF;
    color: white;
    border: none;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
}
.butt1 {border-radius: 12px;}
</style>