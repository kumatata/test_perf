<template>
  <div class="wrapper">
    <div style="position:relative;">
      <div class="row no-gutters">
        <div class="col-xs-12 col-md-6 px-5" style="background-color: #659dbd; padding-bottom: 150px;">
          <h2 class="text-center mb-5 pt-5 text-white">API</h2>
          <p class="text-white">
            You are currently
            <span v-if="user">
                            authenticated as {{ user.username }}

                            <a href="/logout" class="btn btn-warning btn-sm">Log out</a>
               Check out the API Docs: <a v-bind:href="entrypoint" class="text-white"><u>{{ entrypoint }}</u></a>
                        </span>
            <span v-else>not authenticated</span>
          </p>
          <p class="text-white">
          </p>
        </div>
        <div class="col-xs-12 col-md-6 px-5" style="background-color: #7FB7D7; padding-bottom: 150px;">
          <h2 class="text-center mb-5 pt-5 text-white">Login</h2>
          <loginForm
              v-on:user-authenticated="onUserAuthenticated"
          ></loginForm>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
import loginForm from './LoginForm';
import GetPage from './GetPage.vue';

export default {
  components: {
    loginForm,
    GetPage
  },
  props: ['entrypoint'],
  methods: {
    onUserAuthenticated(userUri) {
      axios
          .get(userUri)
          .then(response => (this.user = response.data))
    }
  },
  data() {
    return {
      user: null
    }
  },
  mounted() {
    if (window.user) {
      this.user = window.user;
    }
  }
}
</script>

<style scoped lang="scss">

</style>