<template>
    <div id = "suggestion-div">
      <h2>Suggestions:</h2>
      <ul id="suggestion-ul">
        <li class="clickable" v-for="(option, index) in options" :key="index">{{ option }}</li>
      </ul>
      <span class="solutionButton"><a>Room Info</a></span>
      <span class="solutionButton"><a href='/reportform'>Report a problem</a></span>
    </div>
</template>

<script>

export default {
    name: "SuggestionComponent",
    props: [],
    data: function (){
        return {
            possibleOptions: {
              projector: ["Is the light green?", "Is there a blue screen?", "Is the projector on?"],
              computer: ["Is it a seminary issued laptop?", "Is it powered on?", "Can't connect to the internet?"],
              screen: ["Is your computer plugged in?", "Is the screen blue?"],
              audio: ["Is the cable plugged in?", "Is your computer muted?", "Is the Crestron muted?"],
              video: ["Is the projector on?", "Are you plugged in?"],
	            power: ["Are the desks connected?"],
	            playDisc: ["Are you using a BluRay Player?", "Are you using your computer?"],
              adapter: ["Does your computer plug straight in?"],
              appleTV: ["Is it on but won't connect?", "Is your computer not detecting the device?"],
              smartBoard: ["Have you powered it on?", "Is the USB plugged in?", "Is the HDMI plugged in?", "Have you connected via the mobile app?"]
            },
            options: [],
            solutionsShow: true
        }
    }
}
</script>

<style scoped>
#suggestion-div{
  width:100%;
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