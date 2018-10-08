<template>
    <div id = "suggestion-div">
      <slot name="selections"></slot>
      <h2>Suggestions:</h2>
      <ul id="suggestion-ul">
        <slot name="li"></slot>
      </ul>
      <button class="solutionButton">Get Info</button>
      <button class="solutionButton">Report a problem</button>
    </div>
</template>

<script>

export default {
    name: "SuggestionComponent",
    props: [],
    data: function (){
        return {
            solutionsShow: true
        }
    }
}
</script>

<style scoped>
h3 {
    font-family: Sawarabi Mincho;
    font-size: 1.25em;
}
#suggestion-div{
  width:100%;
  margin-bottom: 25px;
}
#suggestion-ul {
  padding-left: 0;
  width: 80%;
}
#suggestion-ul p {
  /*display: none;*/
  font-family: Sawarabi Mincho;
}
.solutionButton {
  height: auto;
  width: auto;
  font-family: monospace;
  font-size: 1.25em;
  color: black;
  border-radius: 5px;
  background-color: darkgrey;
}
.solution-button a:clicked{
  color: black;
}
.clickable{
  display: flex;
  justify-content: space-between;
  font-family: Montserrat;
  font-size: 1.75em;
  list-style: none;
  width: 100%;
  margin-bottom: 5px;
  padding: 5px;
  border-top: solid 2px #243441;
  border-right: solid 2px #243441;
  border-bottom: solid 1px #243441;
  border-left: solid 5px #0468BF;
  background-color: #FFFDFA;
  box-shadow: 3px 3px grey;
}
</style>