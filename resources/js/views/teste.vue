<template>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Ticket Queue Overview</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class="text-primary">
                  <th>Queue</th>
                  <th>In Progress</th>
                  <th>Open Tickets</th>
                  <th>Pending Customers</th>
                  <th>Resolved</th>
                  <th>Total</th>
                </thead>
                <tbody>
                  <div v-for="post in posts" :key="post.id">
                    <th>{{ post.id }}.{{ post.title }}</th>
                  </div>
                </tbody>
              </table>
              <div>
                <button @click="getposts">load posts</button>
              </div>
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
  name: "Teste",
  data() {
    return {
      posts: [],
    };
  },
  methods: {
    getposts() {
      axios
        .get(
          "http://localhost:8000/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj",
          {
            headers: {
                "Content-Type": "application/json"
            },
          }
        )
        .then((response) => {
          console.log(response.data);
          this.posts = response.data;
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>
<style scoped>
</style>