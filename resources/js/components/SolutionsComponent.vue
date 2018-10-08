<template>
    <div id="solutions-div">
        <suggestion-component>
            <h3 slot="selections">Your Selections: {{ buildingSelection }} – {{ roomSelection}} – {{ problemSelection}}</h3>
            <li class="clickable" v-for="(option, index) in fillOptions" :key="index" slot="li">{{ option }}</li>
        </suggestion-component>
        <room-description v-if="roomDescriptionShow" />
    </div>
</template>

<script>
import RoomDescription from './RoomDescription.vue';
import SuggestionComponent from './SuggestionComponent.vue';

import { mapState, mapGetters } from 'vuex';

export default {
    name: "SolutionsComponent",
    props: {
        buildingSelection: String,
        roomSelection: String,
        problemSelection: String
    },
    data: function() {
        return {
            roomDescriptionShow: false,
            roomDescription: "",
            roomDescriptionOptions: {//CONVERT TO DATA STORE
                Norton: {
                    room11: "The projector system in most of the basement rooms of Norton has two inputs: HDMI(small and thin) and VGA(slightly larger). Check the wall jack to make sure that it has not been damaged. These rooms also reqire a remote to power on the projector. If one is not present, check the surrounding rooms as there is sure to be one present. Also, you may reach up and manually push the power button on the remote.",
                    room12: "This room contains an Extron room control system. The touch panel on the lecturn controls the projector and inputs. To turn the projector on, select Room Controls on the touch screen and then select from the Apple TV or wall jack inputs. Selection of eiter should turn the projector on for you. The wall jack inputs are automatic and will detect your computer. If you are connected but there is no video, check the cable in the wall to make sure it's inserted completely.",
                    room13: "Room 13 contains a short throw projector, situated right above the white board. You can connect to this projector the same way as many of the other rooms, by plugging your computer into the wall jack. If youa are plugged in and there is still no video (the screen will be blue), check the cable in the wall to make sure its plugged all the way in.",
                    room17: "This room is like others in the basement of Norton, but unlike them this room does not have an HDMI input. If your computer does not have a VGA port built in, it will be necessary to check out an adapter. As well, VGA does not trasmit audio, so if you desire to play a video or any form of audio, make sure that the audio cable in the wall is plugged into your headphone jack.",
                    room100200: "This room contains a Crestron room controller. The touch screen on the lecturn powers on the projector, so you will not find a projector remote. To start the system, just select which input you'd like to use (House PC, HDMI, or VGA), and plug in your device.",
                    room195: "This room contains two different projection systems. One is a Crestron, similar to the 100 classrooms in Norton. To start up, simply select the input you'd like from either HDMI or VGA (the touch screen includes House PC, but this is not functional). Selecting the input will turn the projectors on. Ensure that your computer is connected to one of the cables coming from the wooden lecturn and an image will appear after the projectors warm up. Unfortunately, this system does not have audio capability at this time. The other system projects direcly down the middle and includes audio. To start this system, plug your computer into the blue-tipped VGA cable coming from the metal cabinet and push the selector button until the light is on the side labeld Computer. For this system, you'll need the white projector remote to turn it on. The remote has two sections: one power button at the top to turn the speaker on and another section to power the projector.",
                    room203: "Room 203 is similar to the preaching labs in the basement, rooms 12 and 16. The projector is controlled by the touch panel on the wall. Make sure you select the Room Controls options at the bottom of the screen and select your input. If you desire to plug your device in, select the button that images a wall plate. If you desire to use the Apple TV, selec the image of the Apple TV.",
                    room208: "Room 208 contains a Crestron room controller like many other rooms in Norton. The touch screen on the lecturn powers on the projector, so you will not find a projector remote. To start the system, just select which input you'd like to use (House PC, HDMI, or VGA), and plug in your device. This room also comes with a gooseneck microphone for amplification. If you desire to use the microphone, find the mute button on the left side of the touch display and unselect it. Above that button is a volume control that will allow you to adjust your amplification.",
                    room232: "This room contains a TV with an HDMI cable for you to plug into."
                    //Norton room groups: Group 1 {11, 15}, Group 2 {13}, Group 3 {17, 20, 204}, Group 4 {101, 102, 103, 104, 105, 201, 202, 206, 209}, Group 5 {203, 205, 207}, Group 6 {208}
                },
                Carver: {

                },
                Rankin: {

                },
                Library: {

                },
                Cooke: {

                }
            },
            suggestionCompomentShow: true,
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
            nortonRooms: (state) => state.Norton,
            carverRooms: (state) => state.Carver,
            rankinRooms: (state) => state.Rankin,
            libraryRooms: (state) => state.Library,
            cookeRooms: (state) => state.Cooke
        }),
        ...mapGetters(['getNorton'])
    }//close computed hook
}//close component
</script>

<style scoped>
#solutions-div{
    float: right;
    width: 50%;
}
</style>
