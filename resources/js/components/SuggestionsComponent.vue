<template>
    <transition name="solution">
            <div id="solutions-div"  v-if="suggestionsShow">
                <div id="suggestion-div" >
                    <h2>Suggestions:</h2>
                    <ul id="suggestion-ul">
                        <div v-for="(option, index) in suggestionsOptions" :key="index" class="clickable"
                            @click="openSolutions(index, option)">
                            <li :id="index">{{ option }}</li>
                        </div>
                    </ul>
                </div>
            </div>
    </transition>
</template>

<script>
import { mapState, mapGetters } from 'vuex';

export default {
    name: "SuggestionsComponent",
    props: ['suggestionsShow', 'suggestionsOptions'],
    data: () => {
        return {
            roomDescriptionShow: false,
        }
    },
    methods: {
        openSolutions: function(id, text) {
            let payload = [id, text]
            this.$emit('open-solutions', payload)
            this.setSuggestion(payload[1])
        },
        populateSuggestions(data){
            this.suggestionOptions = data
        },
        //Mutations
        setSuggestion: function(payload){
            return this.$store.commit('setSuggestionChoice', payload)
        }
    },
    computed: {
        ...mapGetters(['getFormBuilding', 'getFormRoom', 'getFormProblem'])
    }
}
</script>

<style scoped>

#solutions-div {
    height: 60vh;
    margin-top: 0;
    padding: 15px;
    border-right: 2px solid black;
    overflow: hidden;
}
h2 {
    font-family: Sawarabi Mincho;
    font-size: 1.25em;
}
#suggestion-div{
  width: 25vw;
  margin-bottom: 25px;
}
#suggestion-ul {
  padding-left: 0;
  width: 80%;
}
#suggestion-ul p {
  font-family: Sawarabi Mincho;
}
li {
  font-family: Montserrat;
  font-size: 1rem;
  list-style: none;
}
.clickable{
    width: 20vw;
    height: 10vh;
    margin-bottom: 5px;
    padding: 5px;
    overflow:hidden;
    border-top: solid 2px #243441;
    border-right: solid 2px #243441;
    border-bottom: solid 2px #243441;
    border-left: solid 5px #0468BF;
    background-color: #FFFDFA;
    box-shadow: 3px 3px rgba(0, 0, 0, 0.4);
    animation: slide-in 1s ease-in forwards;
    -webkit-animation: slide-in 1s ease-in forwards;
    -moz-animation: slide-in 1s ease-in forwards;
}
.clickable:hover{
    cursor: pointer;
}
.clickable:active{
    box-shadow: 1px 1px rgba(0, 0, 0, 0.4);
}

/*
|----------------
| Animations
|----------------
*/
.solution-enter-active {
    animation: slide-out .4s;
  }
.solution-leave-active {
    animation: slide-out .4s reverse;
}
@keyframes slide-out {
    0% {
      height: 0;
      width: 0;
      opacity: 0;
    }
    50% {
      height: 60vh;
      width: 0;
    }
    100% {
      height: 60vh;
      width: 25vw;
    }
  }

@keyframes slide-in {
    0% {
        height: 0;
        width: 0;
        opacity: 0;
    }
    50% {
        height: 3vh;
        width: 0;
        opacity: 0.5;
    }
    100% {
        height: 3vh;
        width: 20vw;
        opacity: 1;
    }
}
</style>
