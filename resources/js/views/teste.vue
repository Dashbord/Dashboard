<template>
  <div>
    <line-chart :data="chartData"></line-chart>
    <pie-chart :data="[['ola',ticketNew.length],['ole',1000]]"></pie-chart>
  </div>
</template>
<script>
export default {
  data() {
    return {
        tickets: null,
        ticketNew: null,
        chartData: {
            2124324: 2,
            212424: 4,
            21324: 2,
      },
    };
  },
  mounted() {
    axios.get("/ticket/new").then((res) => {
      this.ticketNew = res.data.TicketID;
    });
    axios.get("/ticket").then((res) => {
      this.tickets = res.data;
    });
  },
};
</script>
  <style >
</style>