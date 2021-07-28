<template>
  <div>
   {{ data }}
    <h1>salut</h1>
    <input type="submit" >
  </div>
</template>

<script>
import axios from 'axios';

export default {
    
  name: "GetPage",
  data() {
    return {
      data: [],
    };
  },

  mounted () {
    axios
      .get('https://127.0.0.1:8000/api/cities')
      .then(response => (this.data = response))
  }
};
</script>

<style>
</style>