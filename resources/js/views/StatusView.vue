<template>
    <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Status View: Open tickets</h4>
            
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
        tickets: null,
    }),
    mounted() {
        axios.get("/tickets").then((res) => {
        this.tickets = res.data;
        });
     },
}
</script>
<style>

</style>