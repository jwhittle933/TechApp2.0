<template>
    <div id="solution-content-div" v-if="solutionsShow">
        <div class="slate">
            <h2>Room Details</h2>
            <p v-if="roomDescription"> {{ roomDescription }} </p>
            <p v-else>Loading...</p>
        </div>
    </div>
</template>
<script>
export default {
        name: "SolutionsComponent",
        props: ['solutionsShow'],
        data: () => {
            return {
                roomDescription: "This is repeating text to test the room description window. This is repeating text to test the room description window. This is repeating text to test the room description window. This is repeating text to test the room description window. This is repeating text to test the room description window. This is repeating text to test the room description window. This is repeating text to test the room description window. This is repeating text to test the room description window.",
            }
        }

}
</script>
<style scoped>
svg {
    height:100px;
}
h2 {
    color: #fff;
}
p {
    color: #fff;
}
#solution-content-div{
  background: #FFF;
  max-width: 50vw;
  height: 60vh;
  flex-grow: 2;
  padding: 10px;
  animation: slide-in .7s ease-out forwards;
  overflow: hidden;
}
.slate {
    background-color: #393E46;
    height: 50vh;
    border-radius: 8px;
    box-shadow: 3px 3px 3px 3px rgba(0, 0, 0, 0.6);
}
#solution-content-div h2 {
  font-family: Sawarabi Mincho;
  text-align: center;
}
#solution-content-div p {
  font-family: Sawarabi Mincho;
  font-size: 1.25em;
  margin: 5px;
  padding: 5px;
}
/*
|-----------------
| Animations
|-----------------
*/
@keyframes slide-in {
    0% {
        height: 0;
        width: 0;
        opacity: 0;
    }
    50% {
        height: 30vh;
        width: 0;
        opacity: 0.5;
    }
    100% {
        height: 60vh;
        width: 20vw;
        opacity: 1;
    }
}


</style>
