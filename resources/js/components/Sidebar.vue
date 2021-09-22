<template>
  <div class="sidebar" data-color="blue">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
    <div class="logo">
      <a>
        <img src="/images/softinsa-logo.png" />
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
            <i class="now-ui-icons design_bullet-list-67"></i>
            <p>Status View</p>
          </a>
        </router-link>
        <router-link tag="li" to="/Raw" active-class="active">
          <a>
            <i class="now-ui-icons design_bullet-list-67"></i>
            <p>Queue View</p>
          </a>
        </router-link>
        <!-- <router-link tag="li" to="/customers" active-class="active">
          <a>
            <i class="now-ui-icons design_app"></i>
            <p>Customers</p>
          </a> 
        </router-link>-->
        <li class="">
          <a href="./full-calender">
            <i class="now-ui-icons education_agenda-bookmark"></i>
            <p>Calendar</p>
          </a>
        </li>

        <li class="">
          <a href="./admin/users">
            <i class="now-ui-icons users_circle-08"></i>
            <p>Users</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style>
</style>