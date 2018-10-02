<template>
    <form id = "roomform" class="form"  method="get" action="roompopulate.php"
          v-on:submit.prevent="populateProblemMenu">
      <label for="roomop">{{ text }}</label>
      <select id="roomop" name="roomop" v-model="value" @change="$emit('roomData', value)">
        <option v-for="option in options" :key="option">{{ option }}</option>
      </select>
    </form>
</template>

<script>
export default {
    name: "RoomInput",
    props: ['buildingSelection'],
    data: function(){
      return {
        text: "What room are you in?",
        options: ["", 12, 13, 15, 16, 17, 20, 101, 102, 103, 104, 105],
        value: "",
        roomShow: true
      }
    },
    methods: {
      
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
#forms-div {
  float:left;
  width: 40%;
}
#forms-div li {
  list-style: none;
  display: flex; 
}
</style>