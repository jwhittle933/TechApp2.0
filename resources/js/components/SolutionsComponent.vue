<template>
    <div id="solutions-div">
        <suggestion-component @show-description="this.roomDescriptionShow = !this.roomDescriptionShow">
            <h3 slot="selections">Your Selections: {{ buildingSelection }} – {{ roomSelection}} – {{ problemSelection}}</h3>
            <li class="clickable" v-for="(option, index) in fillOptions" :key="index" slot="li">{{ option }}</li>
        </suggestion-component>
        <!--
        <room-description v-if="roomDescriptionShow" />
        -->
        <div id="solution-content-div">
            <button class="solution-close" type="submit">X</button>
            <h2>Room Details</h2>
            <p id="populate"></p>
        </div>
    </div>
</template>

<script>
//import RoomDescription from './RoomDescription.vue';
import SuggestionComponent from './SuggestionComponent.vue';

import { mapState, mapGetters, mapMutations } from 'vuex';

export default {
    name: "SolutionsComponent",
    props: {
        buildingSelection: String,
        roomSelection: String,
        problemSelection: String
    },
    data: function() {
        return {
            roomDescriptionShow: true,
            roomDescription: "",
            options: [],
            possibleOptions: {
                projector: ["Is the light green?", "Is there a blue screen?", "Is the projector on?"],
                computer: ["Is it a seminary issued laptop?", "Is it powered on?", "Can't connect to the internet?"],
                screen: ["Is your computer plugged in?", "Is the screen blue?"],
                audio: ["Is the cable plugged in?", "Is your computer muted?", "Is the Crestron muted?"],
                video: ["Is the projector on?", "Are you plugged in?"],
                extron: ["Is the screen responsive?", "Are you on the correct input?", "Have you checked the 'Room Options' button?"],
                crestron: ["Is the screen responsive?", "Have you selected the correct input?", "Is the screen blue?"],
	            power: ["Are the desks connected?"],
	            playDisc: ["Are you using a BluRay Player?", "Are you using your computer?"],
                adapter: ["Does your computer plug straight in?"],
                appleTV: ["Is it on but won't connect?", "Is your computer not detecting the device?"],
                smartBoard: ["Have you powered it on?", "Is the USB plugged in?", "Is the HDMI plugged in?", "Have you connected via the mobile app?"]
            },

        }
    },
    components: {
        RoomDescription,
        SuggestionComponent
    },
    methods: mapMutations(['setBuildingChoice', 'setRoomChoice', 'setProblemChoice']),
    computed: {
        fillOptions(){
            //L1 conditional Norton
            if (this.buildingSelection === "Norton"){
                //NORTON BASEMENT ROOMS
                //L2 conditional Rooms 11/15/17/20/204
                if(this.roomSelection === "11" ||
                   this.roomSelection === "15" ||
                   this.roomSelection === "17" ||
                   this.roomSelection === "20" ||
                   this.roomSelection === "204"){
                    //L3 conditional Norton 11/15/17/20 Projector
                    if (this.problemSelection === "Projector"){
                        this.options = this.possibleOptions.projector
                        return this.options
                    //L3 conditional Norton 11/15/17/20 Video
                    } else if (this.problemSelection === "Video"){
                        this.options = this.possibleOptions.video
                        return this.options
                    //L3 conditional Norton 11/15/17/20 Audio
                    } else if (this.problemSelection === "Audio"){
                        this.options = this.possibleOptions.audio
                        return this.options
                    //L3 conditional Norton 11/15/17/20 Apple TV
                    } else if(this.problemSelection === "Apple TV"){
                        this.options = this.possibleOptions.appleTV
                        return this.options
                    }
                //L2 conditional Rooms 12/16/203/205/207
                } else if(this.roomSelection === "12" ||
                          this.roomSelection === "16" ||
                          this.roomSelection === "203"||
                          this.roomSelection === "205"||
                          this.roomSelection === "207"){
                    //L3 conditional Norton 12/16 Projector
                    if (this.problemSelection === "Projector"){
                        this.options = this.possibleOptions.projector
                        return this.options
                    //L3 conditional Norton 12/16 Video
                    } else if (this.problemSelection === "Video"){
                        this.options = this.possibleOptions.video
                        return this.options
                    //L3 conditional Norton 12/16 Audio
                    } else if (this.problemSelection === "Audio"){
                        this.options = this.possibleOptions.audio
                        return this.options
                    //L3 conditional Norton 12/16 Extron
                    } else if (this.problemSelection === "Extron"){
                        this.options = this.possibleOptions.extron
                        return this.options
                    //L3 conditional Norton 12/16 Apple TV
                    } else if(this.problemSelection === "Apple TV"){
                        this.options = this.possibleOptions.appleTV
                        return this.options
                    }
                //L2 conditional Room 13
                } else if(this.roomSelection === "13"){
                    //L3 conditional Norton 13 Projector
                    if (this.problemSelection === "Projector"){
                        this.options = this.possibleOptions.projector
                        return this.options
                    //L3 conditional Norton 13 Video
                    } else if (this.problemSelection === "Video"){
                        this.options = this.possibleOptions.video
                        return this.options
                    //L3 conditional Norton 13 Audio
                    } else if (this.problemSelection === "Audio"){
                        this.options = this.possibleOptions.audio
                        return this.options
                    //L3 conditional Norton 13 Extron
                    } else if (this.problemSelection === "Extron"){
                        this.options = this.possibleOptions.extron
                        return this.options
                    //L3 conditional Norton 13 Apple TV
                    } else if(this.problemSelection === "Apple TV"){
                        this.options = this.possibleOptions.appleTV
                        return this.options
                    }
                //L2 conditional Rooms 101/102/103/104/105/201/202/206/209
                } else if (this.roomSelection === "101" ||
                           this.roomSelection === "102" ||
                           this.roomSelection === "103" ||
                           this.roomSelection === "104" ||
                           this.roomSelection === "105" ||
                           this.roomSelection === "201" ||
                           this.roomSelection === "202" ||
                           this.roomSelection === "206" ||
                           this.roomSelection === "209"){
                    //L3 conditional Norton 100200 Projector
                    if (this.problemSelection === "Projector"){
                        this.options = this.possibleOptions.projector
                        return this.options
                    //L3 conditional Norton 100200 Video
                    } else if (this.problemSelection === "Video"){
                        this.options = this.possibleOptions.video
                        return this.options
                    //L3 conditional Norton 100200 Audio
                    } else if (this.problemSelection === "Audio"){
                        this.options = this.possibleOptions.audio
                        return this.options
                    //L3 conditional Norton 100200 Crestron
                    } else if (this.problemSelection === "Crestron"){
                        this.options = this.possibleOptions.crestron
                        return this.options
                    //L3 conditional Norton 100200 Apple TV
                    } else if(this.problemSelection === "Apple TV"){
                        this.options = this.possibleOptions.appleTV
                        return this.options
                    } else if(this.problemSelection === "Smart Board"){
                        this.options = this.possibleOptions.smartBoard
                        return this.options
                    }
                //L2 conditional Norton 195
                } else if(this.roomSelection === "195"){
                    //L3 conditional Norton 195 Projector
                    if (this.problemSelection === "Projector"){
                        this.options = this.possibleOptions.projector
                        return this.options
                    //L3 conditional Norton 195 Video
                    } else if (this.problemSelection === "Video"){
                        this.options = this.possibleOptions.video
                        return this.options
                    //L3 conditional Norton 195 Audio
                    } else if (this.problemSelection === "Audio"){
                        this.options = this.possibleOptions.audio
                        return this.options
                    //L3 conditional Norton 195 Crestron
                    } else if (this.problemSelection === "Crestron"){
                        this.options = this.possibleOptions.crestron
                        return this.options
                    //L3 conditional Norton 195 Apple TV
                    } else if(this.problemSelection === "Apple TV"){
                        this.options = this.possibleOptions.appleTV
                        return this.options
                    }
                //L2 conditional Norton 232
                } else if (this.roomSelection === "232"){
                    //L3 conditional Norton 232 Projector
                    if (this.problemSelection === "Projector"){
                        this.options = this.possibleOptions.projector
                        return this.options
                    //L3 conditional Norton 232 Video
                    } else if (this.problemSelection === "Video"){
                        this.options = this.possibleOptions.video
                        return this.options
                    //L3 conditional Norton 232 Audio
                    } else if (this.problemSelection === "Audio"){
                        this.options = this.possibleOptions.audio
                        return this.options
                    //L3 conditional Norton 232 Crestron
                    } else if (this.problemSelection === "Crestron"){
                        this.options = this.possibleOptions.crestron
                        return this.options
                    //L3 conditional Norton 232 Apple TV
                    } else if(this.problemSelection === "Apple TV"){
                        this.options = this.possibleOptions.appleTV
                        return this.options
                    }
                }//close Norton Rooms Conditionals
            //L1 conditional Carver
            } else if (this.buildingSelection === "Carver"){
                //L2 conditional Carver 108
                if (this.roomSelection === "108"){
                    //L3 conditional Carver 108 Projector
                    if (this.problemSelection === "Projector"){
                        this.options = this.possibleOptions.projector
                        return this.options
                    //L3 conditional Carver 108 Video
                    } else if (this.problemSelection === "Video"){
                        this.options = this.possibleOptions.video
                        return this.options
                    //L3 conditional Carver 108 Audio
                    } else if (this.problemSelection === "Audio"){
                        this.options = this.possibleOptions.audio
                        return this.options
                    //L3 conditional Carver 108 Apple TV
                    } else if(this.problemSelection === "Apple TV"){
                        this.options = this.possibleOptions.appleTV
                        return this.options
                    }
                //L2 conditional Carver 135
                } else if (this.roomSelection === "135"){
                    //L3 conditional Carver 135 Projector
                    if (this.problemSelection === "Projector"){
                        this.options = this.possibleOptions.projector
                        return this.options
                    //L3 conditional Carver 135 Video
                    } else if (this.problemSelection === "Video"){
                        this.options = this.possibleOptions.video
                        return this.options
                    //L3 conditional Carver 135 Audio
                    } else if (this.problemSelection === "Audio"){
                        this.options = this.possibleOptions.audio
                        return this.options
                    //L3 conditional Carver 135 Apple TV
                    } else if(this.problemSelection === "Apple TV"){
                        this.options = this.possibleOptions.appleTV
                        return this.options
                    }
                }//end L2 Carver rooms
            //L1 conditional Rankin
            } else if (this.buildingSelection === "Rankin"){
                if (this. roomSelection === "101"){
                    //L3 conditional Rankin 101 Projector
                    if (this.problemSelection === "Projector"){
                        this.options = this.possibleOptions.projector
                        return this.options
                    //L3 conditional Rankin 101 Video
                    } else if (this.problemSelection === "Video"){
                        this.options = this.possibleOptions.video
                        return this.options
                    //L3 conditional Rankin 101 Audio
                    } else if (this.problemSelection === "Audio"){
                        this.options = this.possibleOptions.audio
                        return this.options
                    //L3 conditional Rankin 101 Apple TV
                    } else if(this.problemSelection === "Apple TV"){
                        this.options = this.possibleOptions.appleTV
                        return this.options
                    }
                } else if (this.roomSelection === "201"){
                    //L3 conditional Rankin 201 Projector
                    if (this.problemSelection === "Projector"){
                        this.options = this.possibleOptions.projector
                        return this.options
                    //L3 conditional Rankin 201 Video
                    } else if (this.problemSelection === "Video"){
                        this.options = this.possibleOptions.video
                        return this.options
                    //L3 conditional Rankin 201 Audio
                    } else if (this.problemSelection === "Audio"){
                        this.options = this.possibleOptions.audio
                        return this.options
                    //L3 conditional Rankin 201 Apple TV
                    } else if(this.problemSelection === "Apple TV"){
                        this.options = this.possibleOptions.appleTV
                        return this.options
                    }
                }//end Rankin rooms
            //L1 conditional Library
            } else if (this.buildingSelection === "Library"){
                //L2 conditional Crismon Hall
                if (this.roomSelection === "Crismon Hall"){
                    //L3 conditional Library Crismon Projector
                    if (this.problemSelection === "Projector"){
                        this.options = this.possibleOptions.projector
                        return this.options
                    //L3 conditional Library Crismon Video
                    } else if (this.problemSelection === "Video"){
                        this.options = this.possibleOptions.video
                        return this.options
                    //L3 conditional Library Crismon Audio
                    } else if (this.problemSelection === "Audio"){
                        this.options = this.possibleOptions.audio
                        return this.options
                    //L3 conditional Library Crismon Apple TV
                    } else if(this.problemSelection === "Apple TV"){
                        this.options = this.possibleOptions.appleTV
                        return this.options
                    }
                //L2 conditional Library curriculum lab
                } else if (this.roomSelection === "Curriculum Lab"){
                    //L3 conditional Library Curriculum Lab Video
                    if (this.problemSelection === "Video"){
                        this.options = this.possibleOptions.video
                        return this.options
                    //L3 conditional Library Curriculum Lab Audio
                    } else if (this.problemSelection === "Audio"){
                        this.options = this.possibleOptions.audio
                        return this.options
                    //L3 conditional Library Curriculum Lab Apple TV
                    } else if(this.problemSelection === "Apple TV"){
                        this.options = this.possibleOptions.appleTV
                        return this.options
                    //L3 conditional Library Curriculum Lab Smart Board
                    } else if (this.problemSelection === "Smart Board"){
                        this.options = this.possibleOptions.smartBoard
                        return this.options
                    }
                //L2 conditional Library Mullins Room
                } else if (this.roomSelection === "Mullins Room"){
                    //L3 conditional Library Mullins Room Video
                    if (this.problemSelection === "Video"){
                        this.options = this.possibleOptions.video
                        return this.options
                    //L3 conditional Library Mullins Room Audio
                    } else if (this.problemSelection === "Audio"){
                        this.options = this.possibleOptions.audio
                        return this.options
                    //L3 conditional Library Mullins Room Apple TV
                    } else if(this.problemSelection === "Apple TV"){
                        this.options = this.possibleOptions.appleTV
                        return this.options
                    //L3 conditional Library Mullins Room Smart Board
                    } else if (this.problemSelection === "Smart Board"){
                        this.options = this.possibleOptions.smartBoard
                        return this.options
                    }
                }//end Library rooms
            //L1 conditional Cooke
            } else if (this.buildingSelection === "Cooke"){
                //L2 conditional Cooke 8
                if (this.roomSelection === "8"){
                    //L3 conditional Cooke 8 Projector
                    if (this.problemSelection === "Projector"){
                        this.options = this.possibleOptions.projector
                        return this.options
                    //L3 conditional Cooke 8 Video
                    } else if (this.problemSelection === "Video"){
                        this.options = this.possibleOptions.video
                        return this.options
                    //L3 conditional Cooke 8 Audio
                    } else if (this.problemSelection === "Audio"){
                        this.options = this.possibleOptions.audio
                        return this.options
                    ///L3 conditional Cooke 8 Apple TV
                    } else if(this.problemSelection === "Apple TV"){
                        this.options = this.possibleOptions.appleTV
                        return this.options
                    }
                //L2 conditional Cooke 221
                } else if (this.roomSelection === "221"){
                    //L3 conditional Cooke 221 Projector
                    if (this.problemSelection === "Projector"){
                        this.options = this.possibleOptions.projector
                        return this.options
                    //L3 conditional Cooke 221 Video
                    } else if (this.problemSelection === "Video"){
                        this.options = this.possibleOptions.video
                        return this.options
                    //L3 conditional Cooke 221 Audio
                    } else if (this.problemSelection === "Audio"){
                        this.options = this.possibleOptions.audio
                        return this.options
                    ///L3 conditional Cooke 221 Apple TV
                    } else if(this.problemSelection === "Apple TV"){
                        this.options = this.possibleOptions.appleTV
                        return this.options
                    }
                //L2 conditional Cooke 224
                } else if (this.roomSelection === "224"){
                    //L3 conditional Cooke 224 Projector
                    if (this.problemSelection === "Projector"){
                        this.options = this.possibleOptions.projector
                        return this.options
                    //L3 conditional Cooke 224 Video
                    } else if (this.problemSelection === "Video"){
                        this.options = this.possibleOptions.video
                        return this.options
                    //L3 conditional Cooke 224 Audio
                    } else if (this.problemSelection === "Audio"){
                        this.options = this.possibleOptions.audio
                        return this.options
                    ///L3 conditional Cooke 224 Apple TV
                    } else if(this.problemSelection === "Apple TV"){
                        this.options = this.possibleOptions.appleTV
                        return this.options
                    }
                //L2 conditional Cooke CCRH
                } else if (this.roomSelection === "CCRH"){
                    //L3 conditional Cooke CCRH Projector
                    if (this.problemSelection === "Projector"){
                        this.options = this.possibleOptions.projector
                        return this.options
                    //L3 conditional Cooke CCRH Video
                    } else if (this.problemSelection === "Video"){
                        this.options = this.possibleOptions.video
                        return this.options
                    //L3 conditional Cooke CCRH Audio
                    } else if (this.problemSelection === "Audio"){
                        this.options = this.possibleOptions.audio
                        return this.options
                    ///L3 conditional Cooke CCRH Apple TV
                    } else if(this.problemSelection === "Apple TV"){
                        this.options = this.possibleOptions.appleTV
                        return this.options
                    //L3 conditional Cooke CCRH Smart Board
                    } else if (this.problemSelection === "Smart Board"){
                        this.options = this.possibleOptions.smartBoard
                        return this.options
                    }
                } else if (this.roomSelection === "IRH"){
                    //L3 conditional Cooke IRH Projector
                    if (this.problemSelection === "Projector"){
                        this.options = this.possibleOptions.projector
                        return this.options
                    //L3 conditional Cooke IRH Video
                    } else if (this.problemSelection === "Video"){
                        this.options = this.possibleOptions.video
                        return this.options
                    //L3 conditional Cooke IRH Audio
                    } else if (this.problemSelection === "Audio"){
                        this.options = this.possibleOptions.audio
                        return this.options
                    ///L3 conditional Cooke IRH Apple TV
                    } else if(this.problemSelection === "Apple TV"){
                        this.options = this.possibleOptions.appleTV
                        return this.options
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
        ...mapGetters(['getNorton', 'getCarver', 'getRankin', 'getLibrary', 'getCooke'])
    }//close computed hook
}//close component
</script>

<style scoped>
#solutions-div{
    float: right;
    width: 50%;
}
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
