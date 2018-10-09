<template>
    <div id="solution-content-div">
      <button class="solution-close" type="submit">X</button>
      <h2>Room Details</h2>
      <p id="populate"></p>
    </div>
</template>


<script>
export default {
    name: "RoomDescription",
    data: function (){
        return {
            options: []
        }
    }
}
</script>

<style scoped>
#solution-content-div{
  background: #FFF;
  color: #fff;
  position: fixed;
  height: auto;
  width: auto;
  top: 20%;
  left: 13%;
  right: 13%;
  z-index: 2;
  box-shadow: 5px 5px 5px #67696E;
  border: solid 2px #243441;
}
#solution-content-div h2 {
  font-family: Sawarabi Mincho;
  color: black;
  text-align: center;
}
#solution-content-div p {
  font-family: Sawarabi Mincho;
  font-size: 1.25em;
  color: black;
  margin: 5px;
  padding: 5px;
}
.solution-close {
  font-family: monospace;
  border-radius: 40%;
  background-color: #FF5D4E;
  position: absolute;
  left: -10px;
  top: -10px;
}
</style>
