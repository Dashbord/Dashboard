<template>
  <div class="wrapper ">
    <Sidebar />
    <div class="main-panel" id="main-panel">
      <NavbarS />
      <div class="panel-header panel-header-lg">
        <canvas id="bigDashboardChart"></canvas>
      </div>
      <router-view />
      <footer class="footer">
        <div class=" container-fluid ">
        </div>
      </footer>
    </div>
  </div>
</template>

<script>
import Sidebar from './Sidebar.vue'
import NavbarS from './NavbarS.vue'
export default {
    components: { 
        Sidebar,
        NavbarS,
    },
    name: "App",
}
</script>

<style scoped>
</style>