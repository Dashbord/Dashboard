<template>
  <div class="sidebar" data-color="blue">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a>
             <img src="/images/softinsa-logo.png">
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
            <router-link tag="li" to="/dashboard" active-class="active">
                <a>
                    <i class="now-ui-icons design_app"></i>
                    <p>Dashboard</p>
                </a>
            </router-link>
            <router-link tag="li" to="/StatusView" active-class="active">
                <a>
                    <i class="now-ui-icons design_app"></i>
                    <p>Status View</p>
                </a>
            </router-link>
            <router-link tag="li" to="/Raw" active-class="active">
                <a>
                    <i class="now-ui-icons design_app"></i>
                    <p>Queue View</p>
                </a>
            </router-link>
            <router-link tag="li" to="/customers" active-class="active">
                <a>
                    <i class="now-ui-icons design_app"></i>
                    <p>Customers</p>
                </a>
            </router-link>
            <router-link tag="li" to="full-calender" active-class="active">
                <a>
                    <i class="now-ui-icons design_app"></i>
                    <p>Calendar</p>
                </a>
            </router-link>       
        </ul>
      </div>
    </div>
</template>

<script>
export default {

}
</script>

<style>

</style>