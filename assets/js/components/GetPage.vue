<template>
    <div id="app">

      <div v-for="data in datas" :key="data.id">
        {{ datas }}
      </div>
       
    </div>
</template>

<script>
import axios from "axios";

export default {
  name: "GetPage",
  data() {
    return {
      datas: null,
    };
  },

  mounted() {
    axios
      .get("https://127.0.0.1:8000/api/cities")
      .then((response) => (this.datas = response.data));
  },
};
</script>

<style>
</style>