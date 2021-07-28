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
  name: "GetLoadsData",
  data() {
    return {
      datas: null,
    };
  },

  mounted() {
    axios
      .get("https://localhost:8000/api/elect_municipales?pagination=false")
      .then((response) => (this.datas = response.data));
  },
};
</script>

<style>
</style>