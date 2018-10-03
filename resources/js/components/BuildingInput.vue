<template>
    <form class="form">
      <label for="buildop">{{ text }}</label>
      <select id="buildop" name="buildop" v-model="value" @change="$emit('buildingData', value)">
        <option v-for="option in options"  :key="option">{{ option }}</option>
      </select>
    </form>
</template>

<script>
export default {
    name: "BuildingInput",
    props: [],
    data: function(){
      return{
        text: "What building are you in?",
        options: ["", "Norton", "Carver", "Rankin", "Library", "Cooke"],
        value: ""
      }
    },
    methods: {
      populateRooms: function(){
        
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