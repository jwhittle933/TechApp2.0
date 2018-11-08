<template>
    <div id="solution-content-div" v-if="roomDescriptionShow">
        <h2>Room Details</h2>
        <p v-if="roomDescription"> {{ roomDescription }} </p>
        <p v-else>Loading...</p>
    </div>
</template>
<script>
export default {
        name: "SolutionsComponent",
        data: () => {
            return {
                roomDescriptionShow: false,
                roomDescription: "This is repeating text to test the room description window. This is repeating text to test the room description window. This is repeating text to test the room description window. This is repeating text to test the room description window. This is repeating text to test the room description window. This is repeating text to test the room description window. This is repeating text to test the room description window. This is repeating text to test the room description window.",
            }
        }

}
</script>
<style scoped>
svg {
    height:100px;
}
#solution-content-div{
  background: #FFF;
  color: #fff;
  max-width: 50vw;
  flex-grow: 2;
  padding: 15px;
  border-bottom: 2px solid black;
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
</style>
