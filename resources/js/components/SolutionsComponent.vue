<template>
    <div id="solution-content-div" v-if="solutionsShow">
        <div class="slate">
            <h2>{{ selection }}</h2>
            <p> {{ `You selected '${selection}'` }} </p>
            <p> {{ suggestion }} </p>
        </div>
    </div>
</template>
<script>
export default {
        name: "SolutionsComponent",
        props: ['solutionsShow', 'selection', 'suggestion'],

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
  width: 40vw;
  height: 60vh;
  flex-grow: 2;
  padding: 10px;
  animation: slide-in .9s ease-out forwards;
  overflow: hidden;
}
.slate {
    background-color: #393E46;
    padding-left: 8px;
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
  font-size: 1em;
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
        flex-grow: 0;
    }
    50% {
        height: 60vh;
        flex-grow: 1;
    }
    100% {
        height: 60vh;
        opacity: 1;
        flex-grow: 2;
    }
}


</style>
