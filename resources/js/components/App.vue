<template>
    <div class="wrapper ">
    <Sidebar />
    <div class="main-panel" id="main-panel">
        <Navbar />
      <div class="panel-header panel-header-lg">
        <canvas id="bigDashboardChart"></canvas>
      </div>
      <router-view />
      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; , Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>
    </div>
    </div>
</template>

<script>
import Sidebar from './Sidebar.vue'
import Navbar from './Navbar.vue'
export default {
    components: { 
        Sidebar,
        Navbar,
    },
    name: "App",
}
</script>

<style scoped>
</style>