<template>
  <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          CT
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            SoftInsa
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
            <router-link tag="li" to="/test" active-class="active">
                <a>
                    <i class="now-ui-icons design_app"></i>
                    <p>Test</p>
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