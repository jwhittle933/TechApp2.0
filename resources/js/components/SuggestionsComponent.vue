<template>
    <transition name="solution">
            <div id="solutions-div"  v-if="suggestionsShow">
                <div id="suggestion-div" >
                    <h2>Suggestions:</h2>
                    <ul id="suggestion-ul">
                        <div v-for="(option, index) in fillOptions" :key="index"            class="clickable"
                            @click="openSolutions">
                            <li>{{ option }}</li>
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
    props: ['suggestionsShow'],
    data: () => {
        return {
            roomDescriptionShow: false,
            possibleOptions: {
                projector: ["Is the light green?", "Is there a blue screen?", "Is the projector on?"],
                tv: ["Is it powered on?", "Is it on the correct input?", "Is your device plugged in?"],
                computer: ["Is it a seminary issued laptop?", "Is it powered on?", "Can't connect to the internet?"],
                screen: ["Is your computer plugged in?", "Is the screen blue?"],
                audio: ["Is the cable plugged in?", "Is your computer muted?", "Is the Crestron muted?"],
                video: ["Is the projector on?", "Are you plugged in?"],
                extron: ["Is the screen responsive?", "Are you on the correct input?", "Have you checked the 'Room Options' button?"],
                crestron: ["Is the screen responsive?", "Have you selected the correct input?", "Is the screen blue?"],
	            power: ["Are the desks connected?"],
	            playDisc: ["Are you using a BluRay Player?", "Are you using your computer?"],
                adapter: ["Does your computer plug straight in?"],
                appleTV: ["Is it on but won't connect?", "Not detecting the device?"],
                smartBoard: ["Have you powered it on?", "Is the USB plugged in?", "Is the HDMI plugged in?", "Have you connected via the mobile app?"]
            },
        }
    },
    methods: {
        openSolutions() {
            this.$emit('open-solutions')
        }
    },
    computed: {
        fillOptions(){
            let building = this.getFormBuilding
            let room = this.getFormRoom
            let problem = this.getFormProblem
            if (building === "Norton"){
                if(room === "11" || room === "15" || room === "17" ||
                   room === "20" || room === "204"){
                    if (problem === "Projector"){
                        return this.possibleOptions.projector
                    } else if (problem === "Computer"){
                        return this.possibleOptions.computer
                    } else if (problem === "Screen"){
                        return this.possibleOptions.screen
                    } else if (problem === "Video"){
                        return this.possibleOptions.video
                    } else if (problem === "Audio"){
                        return this.possibleOptions.audio
                    } else if (problem === "Power"){
                        return this.possibleOptions.power
                    } else if (problem === "DVD"){
                        return this.possibleOptions.playDisc
                    } else if (problem === "Adapter"){
                        return this.possibleOptions.adapter
                    } else if(problem === "Apple TV"){
                        return this.possibleOptions.appleTV
                    }
                } else if(room === "12" || room === "16" ||
                          room === "203"|| room === "205"||
                          room === "207"){
                    if (problem === "Projector"){
                        return this.possibleOptions.projector
                    } else if (problem === "Computer"){
                        return this.possibleOptions.computer
                    } else if (problem === "Screen"){
                        return this.possibleOptions.screen
                    } else if (problem === "Video"){
                        return this.possibleOptions.video
                    } else if (problem === "Audio"){
                        return this.possibleOptions.audio
                    } else if (problem === "Extron"){
                        return this.possibleOptions.extron
                    } else if (problem === "Power"){
                        return this.possibleOptions.power
                    } else if (problem === "DVD"){
                        return this.possibleOptions.playDisc
                    } else if (problem === "Adapter"){
                        return this.possibleOptions.adapter
                    } else if(problem === "Apple TV"){
                        return this.possibleOptions.appleTV
                    }
                } else if(room === "13"){
                    if (problem === "Projector"){
                        return this.possibleOptions.projector
                    } else if (problem === "Computer"){
                        return this.possibleOptions.computer
                    } else if (problem === "Screen"){
                        return this.possibleOptions.screen
                    } else if (problem === "Video"){
                        return this.possibleOptions.video
                    } else if (problem === "Audio"){
                        return this.possibleOptions.audio
                    } else if (problem === "Power"){
                        return this.possibleOptions.power
                    } else if (problem === "DVD"){
                        return this.possibleOptions.playDisc
                    } else if (problem === "Adapter"){
                        return this.possibleOptions.adapter
                    } else if(problem === "Apple TV"){
                        return this.possibleOptions.appleTV
                    }
                } else if (room === "101" || room === "102" || room === "103"||
                           room === "104" || room === "105" || room === "201"||
                           room === "202" || room === "206" || room === "209"){
                    if (problem === "Projector"){
                        return this.possibleOptions.projector
                    } else if (problem === "Computer"){
                        return this.possibleOptions.computer
                    } else if (problem === "Screen"){
                        return this.possibleOptions.screen
                    } else if (problem === "Video"){
                        return this.possibleOptions.video
                    } else if (problem === "Audio"){
                        return this.possibleOptions.audio
                    } else if (problem === "Crestron"){
                        return this.possibleOptions.crestron
                    } else if (problem === "Power"){
                        return this.possibleOptions.power
                    } else if (problem === "DVD"){
                        return this.possibleOptions.playDisc
                    } else if (problem === "Adapter"){
                        return this.possibleOptions.adapter
                    } else if(problem === "Apple TV"){
                        return this.possibleOptions.appleTV
                    } else if(problem === "Smart Board"){
                        return this.possibleOptions.smartBoard
                    }
                } else if(room === "195"){
                    if (problem === "Projector"){
                        return this.possibleOptions.projector
                    } else if (problem === "Computer"){
                        return this.possibleOptions.computer
                    } else if (problem === "Screen"){
                        return this.possibleOptions.screen
                    } else if (problem === "Video"){
                        return this.possibleOptions.video
                    } else if (problem === "Audio"){
                        return this.possibleOptions.audio
                    } else if (problem === "Crestron"){
                        return this.possibleOptions.crestron
                    } else if (problem === "Power"){
                        return this.possibleOptions.power
                    } else if (problem === "DVD"){
                        return this.possibleOptions.playDisc
                    } else if (problem === "Adapter"){
                        return this.possibleOptions.adapter
                    } else if(problem === "Apple TV"){
                        return this.possibleOptions.appleTV
                    }
                } else if (room === "232"){
                    if (this.problemSelection === "TV"){
                        return this.possibleOptions.tv
                    } else if (this.problemSelection === "Computer"){
                        return this.possibleOptions.computer
                    } else if (this.problemSelection === "Video"){
                        return this.possibleOptions.video
                    } else if (this.problemSelection === "Audio"){
                        return this.possibleOptions.audio
                    } else if (this.problemSelection === "Power"){
                        return this.possibleOptions.power
                    } else if (this.problemSelection === "DVD"){
                        return this.possibleOptions.playDisc
                    } else if (this.problemSelection === "Adapter"){
                        return this.possibleOptions.adapter
                    } else if(this.problemSelection === "Apple TV"){
                        return this.possibleOptions.appleTV
                    }
                }//close Norton Rooms Conditionals
            } else if (building === "Carver"){
                if (room === "108"){
                    if (problem === "Projector"){
                        return this.possibleOptions.projector
                    } else if (problem === "Computer"){
                        return this.possibleOptions.computer
                    } else if (problem === "Screen"){
                        return this.possibleOptions.screen
                    } else if (problem === "Video"){
                        return this.possibleOptions.video
                    } else if (problem === "Audio"){
                        return this.possibleOptions.audio
                    } else if (problem === "Power"){
                        return this.possibleOptions.power
                    } else if (problem === "DVD"){
                        return this.possibleOptions.playDisc
                    } else if (problem === "Adapter"){
                        return this.possibleOptions.adapter
                    } else if(problem === "Apple TV"){
                        return this.possibleOptions.appleTV
                    }
                } else if (room === "135"){
                    if (problem === "Projector"){
                        return this.possibleOptions.projector
                    } else if (problem === "Computer"){
                        return this.possibleOptions.computer
                    } else if (problem === "Screen"){
                        return this.possibleOptions.screen
                    } else if (problem === "Video"){
                        return this.possibleOptions.video
                    } else if (problem === "Audio"){
                        return this.possibleOptions.audio
                    } else if (problem === "Power"){
                        return this.possibleOptions.power
                    } else if (problem === "DVD"){
                        return this.possibleOptions.playDisc
                    } else if (problem === "Adapter"){
                        return this.possibleOptions.adapter
                    } else if(problem === "Apple TV"){
                        return this.possibleOptions.appleTV
                    }
                }//end L2 Carver rooms
            } else if (building === "Rankin"){
                if (room === "101"){
                    if (problem === "Projector"){
                        return this.possibleOptions.projector
                    } else if (problem === "Computer"){
                        return this.possibleOptions.computer
                    } else if (problem === "Screen"){
                        return this.possibleOptions.screen
                    } else if (problem === "Video"){
                        return this.possibleOptions.video
                    } else if (problem === "Audio"){
                        return this.possibleOptions.audio
                    } else if (problem === "Power"){
                        return this.possibleOptions.power
                    } else if (problem === "DVD"){
                        return this.possibleOptions.playDisc
                    } else if (problem === "Adapter"){
                        return this.possibleOptions.adapter
                    } else if(problem === "Apple TV"){
                        return this.possibleOptions.appleTV
                    }
                } else if (room === "201"){
                    if (problem === "Projector"){
                        return this.possibleOptions.projector
                    } else if (problem === "Computer"){
                        return this.possibleOptions.computer
                    } else if (problem === "Screen"){
                        return this.possibleOptions.screen
                    } else if (problem === "Video"){
                        return this.possibleOptions.video
                    } else if (problem === "Audio"){
                        return this.possibleOptions.audio
                    } else if (problem === "Power"){
                        return this.possibleOptions.power
                    } else if (problem === "DVD"){
                        return this.possibleOptions.playDisc
                    } else if (problem === "Adapter"){
                        return this.possibleOptions.adapter
                    } else if(problem === "Apple TV"){
                        return this.possibleOptions.appleTV
                    }
                }//end Rankin rooms
            } else if (building === "Library"){
                if (room === "Crismon Hall"){
                    if (problem === "Projector"){
                        return this.possibleOptions.projector
                    } else if (problem === "Computer"){
                        return this.possibleOptions.computer
                    } else if (problem === "Screen"){
                        return this.possibleOptions.screen
                    } else if (problem === "Video"){
                        return this.possibleOptions.video
                    } else if (problem === "Audio"){
                        return this.possibleOptions.audio
                    } else if (problem === "Power"){
                        return this.possibleOptions.power
                    } else if (problem === "DVD"){
                        return this.possibleOptions.playDisc
                    } else if (problem === "Adapter"){
                        return this.possibleOptions.adapter
                    } else if(problem === "Apple TV"){
                        return this.possibleOptions.appleTV
                    }
                } else if (room === "Curriculum Lab"){
                    if (problem === "Computer"){
                        return this.possibleOptions.computer
                    } else if (problem === "Screen"){
                        return this.possibleOptions.screen
                    } else if (problem === "Video"){
                        return this.possibleOptions.video
                    } else if (problem === "Audio"){
                        return this.possibleOptions.audio
                    } else if (problem === "Power"){
                        return this.possibleOptions.power
                    } else if (problem === "DVD"){
                        return this.possibleOptions.playDisc
                    } else if (problem === "Adapter"){
                        return this.possibleOptions.adapter
                    } else if(problem === "Apple TV"){
                        return this.possibleOptions.appleTV
                    } else if (problem === "Smart Board"){
                        return this.possibleOptions.smartBoard
                    }
                } else if (room === "Mullins Room"){
                    if (problem === "TV"){
                        return this.possibleOptions.tv
                    } else if (problem === "Computer"){
                        return this.possibleOptions.computer
                    } else if (problem === "Video"){
                        return this.possibleOptions.video
                    } else if (problem === "Audio"){
                        return this.possibleOptions.audio
                    } else if (problem === "Power"){
                        return this.possibleOptions.power
                    } else if (problem === "DVD"){
                        return this.possibleOptions.playDisc
                    } else if (problem === "Adapter"){
                        return this.possibleOptions.adapter
                    } else if(problem === "Apple TV"){
                        return this.possibleOptions.appleTV
                    } else if (problem === "Smart Board"){
                        return this.possibleOptions.smartBoard
                    }
                }//end Library rooms
            } else if (building === "Cooke"){
                if (room === "8"){
                    if (problem === "Projector"){
                        return this.possibleOptions.projector
                    } else if (problem === "Computer"){
                        return this.possibleOptions.computer
                    } else if (problem === "Screen"){
                        return this.possibleOptions.screen
                    } else if (problem === "Video"){
                        return this.possibleOptions.video
                    } else if (problem === "Audio"){
                        return this.possibleOptions.audio
                    } else if (problem === "Power"){
                        return this.possibleOptions.power
                    } else if (problem === "DVD"){
                        return this.possibleOptions.playDisc
                    } else if (problem === "Adapter"){
                        return this.possibleOptions.adapter
                    } else if(problem === "Apple TV"){
                        return this.possibleOptions.appleTV
                    }
                } else if (room === "221"){
                    if (problem === "Projector"){
                        return this.possibleOptions.projector
                    } else if (problem === "Computer"){
                        return this.possibleOptions.computer
                    } else if (problem === "Screen"){
                        return this.possibleOptions.screen
                    } else if (problem === "Video"){
                        return this.possibleOptions.video
                    } else if (problem === "Audio"){
                        return this.possibleOptions.audio
                    } else if (problem === "Power"){
                        return this.possibleOptions.power
                    } else if (problem === "DVD"){
                        return this.possibleOptions.playDisc
                    } else if (problem === "Adapter"){
                        return this.possibleOptions.adapter
                    } else if(problem === "Apple TV"){
                        return this.possibleOptions.appleTV
                    }
                } else if (room === "224"){
                    if (problem === "Projector"){
                        return this.possibleOptions.projector
                    } else if (problem === "Computer"){
                        return this.possibleOptions.computer
                    } else if (problem === "Screen"){
                        return this.possibleOptions.screen
                    } else if (problem === "Video"){
                        return this.possibleOptions.video
                    } else if (problem === "Audio"){
                        return this.possibleOptions.audio
                    } else if (problem === "Power"){
                        return this.possibleOptions.power
                    } else if (problem === "DVD"){
                        return this.possibleOptions.playDisc
                    } else if (problem === "Adapter"){
                        return this.possibleOptions.adapter
                    } else if(problem === "Apple TV"){
                        return this.possibleOptions.appleTV
                    }
                } else if (room === "CCRH"){
                    if (problem === "Projector"){
                        return this.possibleOptions.projector
                    } else if (problem === "Computer"){
                        return this.possibleOptions.computer
                    } else if (problem === "Screen"){
                        return this.possibleOptions.screen
                    } else if (problem === "Video"){
                        return this.possibleOptions.video
                    } else if (problem === "Audio"){
                        return this.possibleOptions.audio
                    } else if (problem === "Power"){
                        return this.possibleOptions.power
                    } else if (problem === "DVD"){
                        return this.possibleOptions.playDisc
                    } else if (problem === "Adapter"){
                        return this.possibleOptions.adapter
                    } else if(problem === "Apple TV"){
                        return this.possibleOptions.appleTV
                    } else if (problem === "Smart Board"){
                        return this.possibleOptions.smartBoard
                    }
                } else if (room === "IRH"){
                    if (problem === "Projector"){
                        return this.possibleOptions.projector
                    } else if (problem === "Computer"){
                        return this.possibleOptions.computer
                    } else if (problem === "Screen"){
                        return this.possibleOptions.screen
                    } else if (problem === "Video"){
                        return this.possibleOptions.video
                    } else if (problem === "Audio"){
                        return this.possibleOptions.audio
                    } else if (problem === "Power"){
                        return this.possibleOptions.power
                    } else if (problem === "DVD"){
                        return this.possibleOptions.playDisc
                    } else if (problem === "Adapter"){
                        return this.possibleOptions.adapter
                    } else if(problem === "Apple TV"){
                        return this.possibleOptions.appleTV
                    }
                }//close L2 building selections
            }//close Cooke rooms
        },
        ...mapState({
            nortonRooms: (state) => state.roomTech.Norton,
            carverRooms: (state) => state.roomTech.Carver,
            rankinRooms: (state) => state.roomTech.Rankin,
            libraryRooms: (state) => state.roomTech.Library,
            cookeRooms: (state) => state.roomTech.Cooke
        }),
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
