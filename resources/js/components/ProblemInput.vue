<template>
    <form id="probform" class="form" method="post" action=""
            v-on:submit.prevent="populatesolutions">
      <label for="probop">{{ text }}</label>
      <select id="probop" v-model="value" name="probop" @change="$emit('problemData', value)">
          <option v-for="option in options" :key="option">{{option}}</option>
      </select>
    </form>
</template>

<script>
export default {
    data: function (){
        return {
            text: "What's the problem?",
            options: ["", "Projector", "Audio", "Video", "Screen"],
            value: "",
            problemShow: true
        }
    },
    methods: {
        populatesolutions: function(){
            axios
            .get('')
            .then()
            .catch(error => console.error(error))
            this.options = ""
        }
    }
}
</script>

<style scoped>
form {
  margin-top: 25px;
}
label {
  font-family: Montserrat;
  font-size: 1.5em;
}
select {
  width: 100px;
  margin: 5px;
}

</style>
