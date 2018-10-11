<template>
    <div id="solutions-div">
        <div id = "suggestion-div">
            <h2>Suggestions:</h2>
            <ul id="suggestion-ul">
                <li class="clickable" v-for="(option, index) in fillOptions" :key="index">{{ option }}</li>
            </ul>
            <button class="solutionButton"
                @click="openRoomDescription">Get Info</button>
            <button class="solutionButton">Report a problem</button>
        </div>
        <div id="solution-content-div" v-if="roomDescriptionShow">
            <button class="solution-close"
                @click="closeRoomDescription">X</button>
            <h2>Room Details</h2>
            <p id="populate"> {{ roomDescription }} </p>
        </div>
    </div>
</template>

<script>
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
            options: [],
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
                appleTV: ["Is it on but won't connect?", "Is your computer not detecting the device?"],
                smartBoard: ["Have you powered it on?", "Is the USB plugged in?", "Is the HDMI plugged in?", "Have you connected via the mobile app?"]
            },
            tempRoomDescription: "This is temporary textThis is temporary textThis is temporary textThis is temporary textThis is temporary textThis is temporary textThis is temporary textThis is temporary textThis is temporary textThis is temporary textThis is temporary textThis is temporary textThis is temporary textThis is temporary textThis is temporary textThis is temporary textThis is temporary textThis is temporary textThis is temporary text"

        }
    },
    methods: {
        openRoomDescription(){
            this.roomDescriptionShow = true
        },
        closeRoomDescription(){
            this.roomDescriptionShow = false
        }
    },
    computed: {
        fillOptions(){
            let building = this.getFormBuilding
            let room = this.getFormRoom
            let problem = this.getFormProblem
            //L1 conditional Norton
            if (building === "Norton"){
                //L2 conditional Rooms 11/15/17/20/204
                if(room === "11" || room === "15" || room === "17" ||
                   room === "20" || room === "204"){
                    //L3 conditional Norton 11/15/17/20 Projector
                    if (problem === "Projector"){
                        this.options = this.possibleOptions.projector
                        this.roomDescription = this.nortonRooms.room11.Projector
                        return this.options
                    //L3 conditional Norton 11/15/17/20 Video
                    } else if (problem === "Computer"){
                        this.options = this.possibleOptions.computer
                        this.roomDescription = this.nortonRooms.room11.Computer
                        return this.options
                    //L3 conditional Norton 11/15/17/20 Audio
                    } else if (problem === "Screen"){
                        this.options = this.possibleOptions.screen
                        this.roomDescription = this.nortonRooms.room11.Screen
                        return this.options
                    //L3 conditional Norton 11/15/17/20 Audio
                    } else if (problem === "Video"){
                        this.options = this.possibleOptions.video
                        this.roomDescription = this.nortonRooms.room11.Video
                        return this.options
                    //L3 conditional Norton 11/15/17/20 Audio
                    } else if (problem === "Audio"){
                        this.options = this.possibleOptions.audio
                        this.roomDescription = this.nortonRooms.room11.Audio
                        return this.options
                    //L3 conditional Norton 11/15/17/20 Apple TV
                    } else if (problem === "Power"){
                        this.options = this.possibleOptions.power
                        this.roomDescription = this.nortonRooms.room11.Power
                        return this.options
                    //L3 conditional Norton 11/15/17/20 Audio
                    } else if (problem === "DVD"){
                        this.options = this.possibleOptions.playDisc
                        this.roomDescription = this.nortonRooms.room11.DVD
                        return this.options
                    //L3 conditional Norton 11/15/17/20 Audio
                    } else if (problem === "Adapter"){
                        this.options = this.possibleOptions.adapter
                        this.roomDescription = this.nortonRooms.room11.Adapter
                        return this.options
                    //L3 conditional Norton 11/15/17/20 Audio
                    } else if(problem === "Apple TV"){
                        this.options = this.possibleOptions.appleTV
                        this.roomDescription = this.nortonRooms.room11.AppleTV
                        return this.options
                    }
                //L2 conditional Rooms 12/16/203/205/207
                } else if(room === "12" || room === "16" ||
                          room === "203"|| room === "205"||
                          room === "207"){
                    //L3 conditional Norton 12/16 Projector
                    if (problem === "Projector"){
                        this.options = this.possibleOptions.projector
                        this.roomDescription = this.nortonRooms.room12.Projector
                        return this.options
                    //L3 conditional Norton 12/16 Video
                    } else if (problem === "Computer"){
                        this.options = this.possibleOptions.computer
                        this.roomDescription = this.nortonRooms.room12.Computer
                        return this.options
                    //L3 conditional Norton 11/15/17/20 Audio
                    } else if (problem === "Screen"){
                        this.options = this.possibleOptions.screen
                        this.roomDescription = this.nortonRooms.room12.Screen
                        return this.options
                    //L3 conditional Norton 11/15/17/20 Audio
                    } else if (problem === "Video"){
                        this.options = this.possibleOptions.video
                        this.roomDescription = this.nortonRooms.room12.Video
                        return this.options
                    //L3 conditional Norton 12/16 Audio
                    } else if (problem === "Audio"){
                        this.options = this.possibleOptions.audio
                        this.roomDescription = this.nortonRooms.room12.Audio
                        return this.options
                    //L3 conditional Norton 12/16 Extron
                    } else if (problem === "Extron"){
                        this.options = this.possibleOptions.extron
                        this.roomDescription = this.nortonRooms.room12.Extron
                        return this.options
                    //L3 conditional Norton 12/16 Apple TV
                    } else if (problem === "Power"){
                        this.options = this.possibleOptions.power
                        this.roomDescription = this.nortonRooms.room12.Power
                        return this.options
                    //L3 conditional Norton 11/15/17/20 Audio
                    } else if (problem === "DVD"){
                        this.options = this.possibleOptions.playDisc
                        this.roomDescription = this.nortonRooms.room12.DVD
                        return this.options
                    //L3 conditional Norton 11/15/17/20 Audio
                    } else if (problem === "Adapter"){
                        this.options = this.possibleOptions.adapter
                        this.roomDescription = this.nortonRooms.room12.Adapter
                        return this.options
                    //L3 conditional Norton 11/15/17/20 Audio
                    } else if(problem === "Apple TV"){
                        this.options = this.possibleOptions.appleTV
                        this.roomDescription = this.nortonRooms.room12.AppleTV
                        return this.options
                    }
                //L2 conditional Room 13
                } else if(room === "13"){
                    //L3 conditional Norton 13 Projector
                    if (problem === "Projector"){
                        this.options = this.possibleOptions.projector
                        this.roomDescription = this.nortonRooms.room13.Projector
                        return this.options
                    //L3 conditional Norton 13 Video
                    } else if (problem === "Computer"){
                        this.options = this.possibleOptions.computer
                        this.roomDescription = this.nortonRooms.room13.Computer
                        return this.options
                    //L3 conditional Norton 11/15/17/20 Audio
                    } else if (problem === "Screen"){
                        this.options = this.possibleOptions.screen
                        this.roomDescription = this.nortonRooms.room13.Screen
                        return this.options
                    //L3 conditional Norton 11/15/17/20 Audio
                    } else if (problem === "Video"){
                        this.options = this.possibleOptions.video
                        this.roomDescription = this.nortonRooms.room13.Video
                        return this.options
                    //L3 conditional Norton 13 Audio
                    } else if (problem === "Audio"){
                        this.options = this.possibleOptions.audio
                        this.roomDescription = this.nortonRooms.room13.Audio
                        return this.options
                    //L3 conditional Norton 13 Extron
                    } else if (problem === "Power"){
                        this.options = this.possibleOptions.power
                        this.roomDescription = this.nortonRooms.room13.Power
                        return this.options
                    //L3 conditional Norton 13 Apple TV
                    } else if (problem === "DVD"){
                        this.options = this.possibleOptions.playDisc
                        this.roomDescription = this.nortonRooms.room13.DVD
                        return this.options
                    //L3 conditional Norton 11/15/17/20 Audio
                    } else if (problem === "Adapter"){
                        this.options = this.possibleOptions.adapter
                        this.roomDescription = this.nortonRooms.room13.Adapter
                        return this.options
                    //L3 conditional Norton 11/15/17/20 Audio
                    } else if(problem === "Apple TV"){
                        this.options = this.possibleOptions.appleTV
                        this.roomDescription = this.nortonRooms.room13.AppleTV
                        return this.options
                    }
                //L2 conditional Rooms 101/102/103/104/105/201/202/206/209
                } else if (room === "101" || room === "102" || room === "103" ||
                           room === "104" || room === "105" || room === "201" ||
                           room === "202" || room === "206" || room === "209"){
                    //L3 conditional Norton 100200 Projector
                    if (this.problemSelection === "Projector"){
                        this.options = this.possibleOptions.projector
                        this.roomDescription = this.nortonRooms.room100200.Projector
                        return this.options
                    //L3 conditional Norton 100200 Computer
                    } else if (this.problemSelection === "Computer"){
                        this.options = this.possibleOptions.computer
                        this.roomDescription = this.nortonRooms.room100200.Computer
                        return this.options
                    //L3 conditional Norton 11/15/17/20 Video
                    } else if (this.problemSelection === "Screen"){
                        this.options = this.possibleOptions.screen
                        this.roomDescription = this.nortonRooms.room100200.Screen
                        return this.options
                    //L3 conditional Norton 11/15/17/20 Audio
                    } else if (this.problemSelection === "Video"){
                        this.options = this.possibleOptions.video
                        this.roomDescription = this.nortonRooms.room100200.Video
                        return this.options
                    //L3 conditional Norton 100200 Audio
                    } else if (this.problemSelection === "Audio"){
                        this.options = this.possibleOptions.audio
                        this.roomDescription = this.nortonRooms.room100200.Audio
                        return this.options
                    //L3 conditional Norton 100200 Crestron
                    } else if (this.problemSelection === "Crestron"){
                        this.options = this.possibleOptions.crestron
                        this.roomDescription = this.nortonRooms.room100200.Crestron
                        return this.options
                    //L3 conditional Norton 100200 Apple TV
                    } else if (this.problemSelection === "Power"){
                        this.options = this.possibleOptions.power
                        this.roomDescription = this.nortonRooms.room100200.Power
                        return this.options
                    //L3 conditional Norton 11/15/17/20 Audio
                    } else if (this.problemSelection === "DVD"){
                        this.options = this.possibleOptions.playDisc
                        this.roomDescription = this.nortonRooms.room100200.DVD
                        return this.options
                    //L3 conditional Norton 11/15/17/20 Audio
                    } else if (this.problemSelection === "Adapter"){
                        this.options = this.possibleOptions.adapter
                        this.roomDescription = this.nortonRooms.room100200.Adapter
                        return this.options
                    //L3 conditional Norton 11/15/17/20 Audio
                    } else if(this.problemSelection === "Apple TV"){
                        this.options = this.possibleOptions.appleTV
                        this.roomDescription = this.nortonRooms.room100200.AppleTV
                        return this.options
                    } else if(this.problemSelection === "Smart Board"){
                        this.options = this.possibleOptions.smartBoard
                        this.roomDescription = this.nortonRooms.room100200.SmartBoard
                        return this.options
                    }
                //L2 conditional Norton 195
                } else if(room === "195"){
                    //L3 conditional Norton 195 Projector
                    if (problem === "Projector"){
                        this.options = this.possibleOptions.projector
                        this.roomDescription = this.nortonRooms.room195.Projector
                        return this.options
                    //L3 conditional Norton 195 Video
                    } else if (problem === "Computer"){
                        this.options = this.possibleOptions.computer
                        this.roomDescription = this.nortonRooms.room195.Computer
                        return this.options
                    //L3 conditional Norton 11/15/17/20 Audio
                    } else if (problem === "Screen"){
                        this.options = this.possibleOptions.screen
                        this.roomDescription = this.nortonRooms.room195.Screen
                        return this.options
                    //L3 conditional Norton 11/15/17/20 Audio
                    } else if (problem === "Video"){
                        this.options = this.possibleOptions.video
                        this.roomDescription = this.nortonRooms.room195.Video
                        return this.options
                    //L3 conditional Norton 195 Audio
                    } else if (problem === "Audio"){
                        this.options = this.possibleOptions.audio
                        this.roomDescription = this.nortonRooms.room195.Audio
                        return this.options
                    //L3 conditional Norton 195 Crestron
                    } else if (problem === "Crestron"){
                        this.options = this.possibleOptions.crestron
                        this.roomDescription = this.nortonRooms.room195.Crestron
                        return this.options
                    //L3 conditional Norton 195 Apple TV
                    } else if (problem === "Power"){
                        this.options = this.possibleOptions.power
                        this.roomDescription = this.nortonRooms.room195.Power
                        return this.options
                    //L3 conditional Norton 11/15/17/20 Audio
                    } else if (problem === "DVD"){
                        this.options = this.possibleOptions.playDisc
                        this.roomDescription = this.nortonRooms.room195.DVD
                        return this.options
                    //L3 conditional Norton 11/15/17/20 Audio
                    } else if (problem === "Adapter"){
                        this.options = this.possibleOptions.adapter
                        this.roomDescription = this.nortonRooms.room195.Adapter
                        return this.options
                    //L3 conditional Norton 11/15/17/20 Audio
                    } else if(problem === "Apple TV"){
                        this.options = this.possibleOptions.appleTV
                        this.roomDescription = this.nortonRooms.room195.AppleTV
                        return this.options
                    }
                //L2 conditional Norton 232
                } else if (room === "232"){
                    //L3 conditional Norton 232 Projector
                    if (this.problemSelection === "TV"){
                        this.options = this.possibleOptions.tv
                        this.roomDescription = this.nortonRooms.room232.TV
                        return this.options
                    //L3 conditional Norton 232 Video
                    } else if (this.problemSelection === "Computer"){
                        this.options = this.possibleOptions.computer
                        this.roomDescription = this.nortonRooms.room232.Computer
                        return this.options
                    //L3 conditional Norton 11/15/17/20 Audio
                    } else if (this.problemSelection === "Video"){
                        this.options = this.possibleOptions.video
                        this.roomDescription = this.nortonRooms.room232.Video
                        return this.options
                    //L3 conditional Norton 232 Audio
                    } else if (this.problemSelection === "Audio"){
                        this.options = this.possibleOptions.audio
                        this.roomDescription = this.nortonRooms.room232.Audio
                        return this.options
                    //L3 conditional Norton 232 Crestron
                    } else if (this.problemSelection === "Power"){
                        this.options = this.possibleOptions.power
                        this.roomDescription = this.nortonRooms.room232.Power
                        return this.options
                    //L3 conditional Norton 11/15/17/20 Audio
                    } else if (this.problemSelection === "DVD"){
                        this.options = this.possibleOptions.playDisc
                        this.roomDescription = this.nortonRooms.room232.DVD
                        return this.options
                    //L3 conditional Norton 11/15/17/20 Audio
                    } else if (this.problemSelection === "Adapter"){
                        this.options = this.possibleOptions.adapter
                        this.roomDescription = this.nortonRooms.room232.Adapter
                        return this.options
                    //L3 conditional Norton 11/15/17/20 Audio
                    } else if(this.problemSelection === "Apple TV"){
                        this.options = this.possibleOptions.appleTV
                        this.roomDescription = this.nortonRooms.room232.AppleTV
                        return this.options
                    }
                }//close Norton Rooms Conditionals
            //L1 conditional Carver
            } else if (building === "Carver"){
                //L2 conditional Carver 108
                if (room === "108"){
                    //L3 conditional Carver 108 Projector
                    if (problem === "Projector"){
                        this.options = this.possibleOptions.projector
                        this.roomDescription = this.carverRooms.room108.Projector
                        return this.options
                    //L3 conditional Carver 108 Video
                    } else if (problem === "Computer"){
                        this.options = this.possibleOptions.computer
                        this.roomDescription = this.carverRooms.room108.Computer
                        return this.options
                    //L3 conditional Carver 108 Audio
                    } else if (problem === "Screen"){
                        this.options = this.possibleOptions.screen
                        this.roomDescription = this.carverRooms.room108.Screen
                        return this.options
                    //L3 conditional Carver 108 Audio
                    } else if (problem === "Video"){
                        this.options = this.possibleOptions.video
                        this.roomDescription = this.carverRooms.room108.Video
                        return this.options
                    //L3 conditional Carver 108 Audio
                    } else if (problem === "Audio"){
                        this.options = this.possibleOptions.audio
                        this.roomDescription = this.carverRooms.room108.Audio
                        return this.options
                    //L3 conditional Carver 108 Apple TV
                    } else if (problem === "Power"){
                        this.options = this.possibleOptions.power
                        this.roomDescription = this.carverRooms.room108.Power
                        return this.options
                    //L3 conditional Carver 108 Audio
                    } else if (problem === "DVD"){
                        this.options = this.possibleOptions.playDisc
                        this.roomDescription = this.carverRooms.room108.DVD
                        return this.options
                    //L3 conditional Carver 108 Audio
                    } else if (problem === "Adapter"){
                        this.options = this.possibleOptions.adapter
                        this.roomDescription = this.carverRooms.room108.Adapter
                        return this.options
                    //L3 conditional Carver 108 Audio
                    } else if(problem === "Apple TV"){
                        this.options = this.possibleOptions.appleTV
                        this.roomDescription = this.carverRooms.room108.AppleTV
                        return this.options
                    }
                //L2 conditional Carver 135
                } else if (room === "135"){
                    //L3 conditional Carver 135 Projector
                    if (problem === "Projector"){
                        this.options = this.possibleOptions.projector
                        this.roomDescription = this.carverRooms.room108.Projector
                        return this.options
                    //L3 conditional Carver 135 Video
                    } else if (problem === "Computer"){
                        this.options = this.possibleOptions.computer
                        this.roomDescription = this.carverRooms.room108.Computer
                        return this.options
                    //L3 conditional Carver 108 Audio
                    } else if (problem === "Screen"){
                        this.options = this.possibleOptions.screen
                        this.roomDescription = this.carverRooms.room108.Screen
                        return this.options
                    //L3 conditional Carver 108 Audio
                    } else if (problem === "Video"){
                        this.options = this.possibleOptions.video
                        this.roomDescription = this.carverRooms.room108.Video
                        return this.options
                    //L3 conditional Carver 135 Audio
                    } else if (problem === "Audio"){
                        this.options = this.possibleOptions.audio
                        this.roomDescription = this.carverRooms.room108.Audio
                        return this.options
                    //L3 conditional Carver 135 Apple TV
                    } else if (problem === "Power"){
                        this.options = this.possibleOptions.power
                        this.roomDescription = this.carverRooms.room108.Power
                        return this.options
                    //L3 conditional Carver 108 Audio
                    } else if (problem === "DVD"){
                        this.options = this.possibleOptions.playDisc
                        this.roomDescription = this.carverRooms.room108.DVD
                        return this.options
                    //L3 conditional Carver 108 Audio
                    } else if (problem === "Adapter"){
                        this.options = this.possibleOptions.adapter
                        this.roomDescription = this.carverRooms.room108.Adapter
                        return this.options
                    //L3 conditional Carver 108 Audio
                    } else if(problem === "Apple TV"){
                        this.options = this.possibleOptions.appleTV
                        this.roomDescription = this.carverRooms.room108.AppleTV
                        return this.options
                    }
                }//end L2 Carver rooms
            //L1 conditional Rankin
            } else if (building === "Rankin"){
                if (room === "101"){
                    //L3 conditional Rankin 101 Projector
                    if (problem === "Projector"){
                        this.options = this.possibleOptions.projector
                        this.roomDescription = this.rankinRooms.room101.Projector
                        return this.options
                    //L3 conditional Rankin 101 Video
                    } else if (problem === "Computer"){
                        this.options = this.possibleOptions.computer
                        this.roomDescription = this.rankinRooms.room101.Computer
                        return this.options
                    //L3 conditional Rankin 101 Audio
                    } else if (problem === "Screen"){
                        this.options = this.possibleOptions.screen
                        this.roomDescription = this.rankinRooms.room101.Screen
                        return this.options
                    //L3 conditional Rankin 101 Audio
                    } else if (problem === "Video"){
                        this.options = this.possibleOptions.video
                        this.roomDescription = this.rankinRooms.room101.Video
                        return this.options
                    //L3 conditional Rankin 101 Audio
                    } else if (problem === "Audio"){
                        this.options = this.possibleOptions.audio
                        this.roomDescription = this.rankinRooms.room101.Audio
                        return this.options
                    //L3 conditional Rankin 101 Apple TV
                    } else if (problem === "Power"){
                        this.options = this.possibleOptions.power
                        this.roomDescription = this.rankinRooms.room101.Power
                        return this.options
                    //L3 conditional Rankin 101 Audio
                    } else if (problem === "DVD"){
                        this.options = this.possibleOptions.playDisc
                        this.roomDescription = this.rankinRooms.room101.DVD
                        return this.options
                    //L3 conditional Rankin 101 Audio
                    } else if (problem === "Adapter"){
                        this.options = this.possibleOptions.adapter
                        this.roomDescription = this.rankinRooms.room101.Adapter
                        return this.options
                    //L3 conditional Rankin 101 Audio
                    } else if(problem === "Apple TV"){
                        this.options = this.possibleOptions.appleTV
                        this.roomDescription = this.rankinRooms.room101.AppleTV
                        return this.options
                    }
                } else if (room === "201"){
                    //L3 conditional Rankin 201 Projector
                    if (problem === "Projector"){
                        this.options = this.possibleOptions.projector
                        this.roomDescription = this.rankinRooms.room201.Projector
                        return this.options
                    //L3 conditional Rankin 201 Video
                    } else if (problem === "Computer"){
                        this.options = this.possibleOptions.computer
                        this.roomDescription = this.rankinRooms.room201.Computer
                        return this.options
                    //L3 conditional Rankin 101 Audio
                    } else if (problem === "Screen"){
                        this.options = this.possibleOptions.screen
                        this.roomDescription = this.rankinRooms.room201.Screen
                        return this.options
                    //L3 conditional Rankin 101 Audio
                    } else if (problem === "Video"){
                        this.options = this.possibleOptions.video
                        this.roomDescription = this.rankinRooms.room201.Video
                        return this.options
                    //L3 conditional Rankin 201 Audio
                    } else if (problem === "Audio"){
                        this.options = this.possibleOptions.audio
                        this.roomDescription = this.rankinRooms.room201.Audio
                        return this.options
                    //L3 conditional Rankin 201 Apple TV
                    } else if (problem === "Power"){
                        this.options = this.possibleOptions.power
                        this.roomDescription = this.rankinRooms.room201.Power
                        return this.options
                    //L3 conditional Rankin 101 Audio
                    } else if (problem === "DVD"){
                        this.options = this.possibleOptions.playDisc
                        this.roomDescription = this.rankinRooms.room201.DVD
                        return this.options
                    //L3 conditional Rankin 101 Audio
                    } else if (problem === "Adapter"){
                        this.options = this.possibleOptions.adapter
                        this.roomDescription = this.rankinRooms.room201.Adapter
                        return this.options
                    //L3 conditional Rankin 101 Audio
                    } else if(problem === "Apple TV"){
                        this.options = this.possibleOptions.appleTV
                        this.roomDescription = this.rankinRooms.room201.AppleTV
                        return this.options
                    }
                }//end Rankin rooms
            //L1 conditional Library
            } else if (building === "Library"){
                //L2 conditional Crismon Hall
                if (room === "Crismon Hall"){
                    //L3 conditional Library Crismon Projector
                    if (problem === "Projector"){
                        this.options = this.possibleOptions.projector
                        this.roomDescription = this.libraryRooms.CrismonHall.Projector
                        return this.options
                    //L3 conditional Library Crismon Video
                    } else if (problem === "Computer"){
                        this.options = this.possibleOptions.computer
                        this.roomDescription = this.libraryRooms.CrismonHall.Computer
                        return this.options
                    //L3 conditional Library Crismon Audio
                    } else if (problem === "Screen"){
                        this.options = this.possibleOptions.screen
                        this.roomDescription = this.libraryRooms.CrismonHall.Screen
                        return this.options
                    //L3 conditional Library Crismon Audio
                    } else if (problem === "Video"){
                        this.options = this.possibleOptions.video
                        this.roomDescription = this.libraryRooms.CrismonHall.Video
                        return this.options
                    //L3 conditional Library Crismon Audio
                    } else if (problem === "Audio"){
                        this.options = this.possibleOptions.audio
                        this.roomDescription = this.libraryRooms.CrismonHall.Audio
                        return this.options
                    //L3 conditional Library Crismon Apple TV
                    } else if (problem === "Power"){
                        this.options = this.possibleOptions.power
                        this.roomDescription = this.libraryRooms.CrismonHall.Power
                        return this.options
                    //L3 conditional Library Crismon Audio
                    } else if (problem === "DVD"){
                        this.options = this.possibleOptions.playDisc
                        this.roomDescription = this.libraryRooms.CrismonHall.DVD
                        return this.options
                    //L3 conditional Library Crismon Audio
                    } else if (problem === "Adapter"){
                        this.options = this.possibleOptions.adapter
                        this.roomDescription = this.libraryRooms.CrismonHall.Adapter
                        return this.options
                    //L3 conditional Library Crismon Audio
                    } else if(problem === "Apple TV"){
                        this.options = this.possibleOptions.appleTV
                        this.roomDescription = this.libraryRooms.CrismonHall.AppleTV
                        return this.options
                    }
                //L2 conditional Library curriculum lab
                } else if (room === "Curriculum Lab"){
                    //L3 conditional Library Curriculum Lab Video
                    if (problem === "Computer"){
                        this.options = this.possibleOptions.computer
                        this.roomDescription = this.libraryRooms.CurriculumLab.Computer
                        return this.options
                    //L3 conditional Library Curriculum Lab Audio
                    } else if (problem === "Screen"){
                        this.options = this.possibleOptions.screen
                        this.roomDescription = this.libraryRooms.CurriculumLab.Screen
                        return this.options
                    //L3 conditional Library Curriculum Lab Apple TV
                    } else if (problem === "Video"){
                        this.options = this.possibleOptions.video
                        this.roomDescription = this.libraryRooms.CurriculumLab.Video
                        return this.options
                    //L3 conditional Library Curriculum Lab Apple TV
                    } else if (problem === "Audio"){
                        this.options = this.possibleOptions.audio
                        this.roomDescription = this.libraryRooms.CurriculumLab.Audio
                        return this.options
                    //L3 conditional Library Curriculum Lab Apple TV
                    } else if (problem === "Power"){
                        this.options = this.possibleOptions.power
                        this.roomDescription = this.libraryRooms.CurriculumLab.Power
                        return this.options
                    //L3 conditional Library Curriculum Lab Apple TV
                    } else if (problem === "DVD"){
                        this.options = this.possibleOptions.playDisc
                        this.roomDescription = this.libraryRooms.CurriculumLab.DVD
                        return this.options
                    //L3 conditional Library Curriculum Lab Apple TV
                    } else if (problem === "Adapter"){
                        this.options = this.possibleOptions.adapter
                        this.roomDescription = this.libraryRooms.CurriculumLab.Adapter
                        return this.options
                    //L3 conditional Library Curriculum Lab Apple TV
                    } else if(problem === "Apple TV"){
                        this.options = this.possibleOptions.appleTV
                        this.roomDescription = this.libraryRooms.CurriculumLab.AppleTV
                        return this.options
                    //L3 conditional Library Curriculum Lab Smart Board
                    } else if (problem === "Smart Board"){
                        this.options = this.possibleOptions.smartBoard
                        this.roomDescription = this.libraryRooms.CurriculumLab.SmartBoard
                        return this.options
                    }
                //L2 conditional Library Mullins Room
                } else if (room === "Mullins Room"){
                    //L3 conditional Library Mullins Room Video
                    if (problem === "TV"){
                        this.options = this.possibleOptions.tv
                        this.roomDescription = this.libraryRooms.CurriculumLab.TV
                        return this.options
                    //L3 conditional Library Mullins Room Audio
                    } else if (problem === "Computer"){
                        this.options = this.possibleOptions.computer
                        this.roomDescription = this.libraryRooms.CurriculumLab.Computer
                        return this.options
                    //L3 conditional Library Mullins Room Apple TV
                    } else if (problem === "Video"){
                        this.options = this.possibleOptions.video
                        this.roomDescription = this.libraryRooms.CurriculumLab.Video
                        return this.options
                    //L3 conditional Library Mullins Room Apple TV
                    } else if (problem === "Audio"){
                        this.options = this.possibleOptions.audio
                        this.roomDescription = this.libraryRooms.CurriculumLab.Audio
                        return this.options
                    //L3 conditional Library Mullins Room Apple TV
                    } else if (problem === "Power"){
                        this.options = this.possibleOptions.power
                        this.roomDescription = this.libraryRooms.CurriculumLab.Power
                        return this.options
                    //L3 conditional Library Mullins Room Apple TV
                    } else if (problem === "DVD"){
                        this.options = this.possibleOptions.playDisc
                        this.roomDescription = this.libraryRooms.CurriculumLab.DVD
                        return this.options
                    //L3 conditional Library Mullins Room Apple TV
                    } else if (problem === "Adapter"){
                        this.options = this.possibleOptions.adapter
                        this.roomDescription = this.libraryRooms.CurriculumLab.Adapter
                        return this.options
                    //L3 conditional Library Mullins Room Apple TV
                    } else if(problem === "Apple TV"){
                        this.options = this.possibleOptions.appleTV
                        this.roomDescription = this.libraryRooms.CurriculumLab.AppleTV
                        return this.options
                    //L3 conditional Library Mullins Room Smart Board
                    } else if (problem === "Smart Board"){
                        this.options = this.possibleOptions.smartBoard
                        this.roomDescription = this.libraryRooms.CurriculumLab.SmartBoard
                        return this.options
                    }
                }//end Library rooms
            //L1 conditional Cooke
            } else if (building === "Cooke"){
                //L2 conditional Cooke 8
                if (room === "8"){
                    //L3 conditional Cooke 8 Projector
                    if (problem === "Projector"){
                        this.options = this.possibleOptions.projector
                        this.roomDescription = this.cookeRooms.room8.Projector
                        return this.options
                    //L3 conditional Cooke 8 Video
                    } else if (problem === "Computer"){
                        this.options = this.possibleOptions.computer
                        this.roomDescription = this.cookeRooms.room8.Computer
                        return this.options
                    //L3 conditional Cooke 8 Audio
                    } else if (problem === "Screen"){
                        this.options = this.possibleOptions.screen
                        this.roomDescription = this.cookeRooms.room8.Screen
                        return this.options
                    //L3 conditional Cooke 8 Audio
                    } else if (problem === "Video"){
                        this.options = this.possibleOptions.video
                        this.roomDescription = this.cookeRooms.room8.Video
                        return this.options
                    //L3 conditional Cooke 8 Audio
                    } else if (problem === "Audio"){
                        this.options = this.possibleOptions.audio
                        this.roomDescription = this.cookeRooms.room8.Audio
                        return this.options
                    ///L3 conditional Cooke 8 Apple TV
                    } else if (problem === "Power"){
                        this.options = this.possibleOptions.power
                        this.roomDescription = this.cookeRooms.room8.Power
                        return this.options
                    //L3 conditional Cooke 8 Audio
                    } else if (problem === "DVD"){
                        this.options = this.possibleOptions.playDisc
                        this.roomDescription = this.cookeRooms.room8.DVD
                        return this.options
                    //L3 conditional Cooke 8 Audio
                    } else if (problem === "Adapter"){
                        this.options = this.possibleOptions.adapter
                        this.roomDescription = this.cookeRooms.room8.Adapter
                        return this.options
                    //L3 conditional Cooke 8 Audio
                    } else if(problem === "Apple TV"){
                        this.options = this.possibleOptions.appleTV
                        this.roomDescription = this.cookeRooms.room8.AppleTV
                        return this.options
                    }
                //L2 conditional Cooke 221
                } else if (room === "221"){
                    //L3 conditional Cooke 221 Projector
                    if (problem === "Projector"){
                        this.options = this.possibleOptions.projector
                        this.roomDescription = this.cookeRooms.room221.Projector
                        return this.options
                    //L3 conditional Cooke 221 Video
                    } else if (problem === "Computer"){
                        this.options = this.possibleOptions.computer
                        this.roomDescription = this.cookeRooms.room221.Computer
                        return this.options
                    //L3 conditional Cooke 8 Audio
                    } else if (problem === "Screen"){
                        this.options = this.possibleOptions.screen
                        this.roomDescription = this.cookeRooms.room221.Screen
                        return this.options
                    //L3 conditional Cooke 8 Audio
                    } else if (problem === "Video"){
                        this.options = this.possibleOptions.video
                        this.roomDescription = this.cookeRooms.room221.Video
                        return this.options
                    //L3 conditional Cooke 221 Audio
                    } else if (problem === "Audio"){
                        this.options = this.possibleOptions.audio
                        this.roomDescription = this.cookeRooms.room221.Audio
                        return this.options
                    ///L3 conditional Cooke 221 Apple TV
                    } else if (problem === "Power"){
                        this.options = this.possibleOptions.power
                        this.roomDescription = this.cookeRooms.room221.Power
                        return this.options
                    //L3 conditional Cooke 8 Audio
                    } else if (problem === "DVD"){
                        this.options = this.possibleOptions.playDisc
                        this.roomDescription = this.cookeRooms.room221.DVD
                        return this.options
                    //L3 conditional Cooke 8 Audio
                    } else if (problem === "Adapter"){
                        this.options = this.possibleOptions.adapter
                        this.roomDescription = this.cookeRooms.room221.Adapter
                        return this.options
                    //L3 conditional Cooke 8 Audio
                    } else if(problem === "Apple TV"){
                        this.options = this.possibleOptions.appleTV
                        this.roomDescription = this.cookeRooms.room221.AppleTV
                        return this.options
                    }
                //L2 conditional Cooke 224
                } else if (room === "224"){
                    //L3 conditional Cooke 224 Projector
                    if (problem === "Projector"){
                        this.options = this.possibleOptions.projector
                        this.roomDescription = this.cookeRooms.room224.Projector
                        return this.options
                    //L3 conditional Cooke 224 Video
                    } else if (problem === "Computer"){
                        this.options = this.possibleOptions.computer
                        this.roomDescription = this.cookeRooms.room224.Computer
                        return this.options
                    //L3 conditional Cooke 8 Audio
                    } else if (problem === "Screen"){
                        this.options = this.possibleOptions.screen
                        this.roomDescription = this.cookeRooms.room224.Screen
                        return this.options
                    //L3 conditional Cooke 8 Audio
                    } else if (problem === "Video"){
                        this.options = this.possibleOptions.video
                        this.roomDescription = this.cookeRooms.room224.Video
                        return this.options
                    //L3 conditional Cooke 224 Audio
                    } else if (problem === "Audio"){
                        this.options = this.possibleOptions.audio
                        this.roomDescription = this.cookeRooms.room224.Audio
                        return this.options
                    ///L3 conditional Cooke 224 Apple TV
                    } else if (problem === "Power"){
                        this.options = this.possibleOptions.power
                        this.roomDescription = this.cookeRooms.room224.Power
                        return this.options
                    //L3 conditional Cooke 8 Audio
                    } else if (problem === "DVD"){
                        this.options = this.possibleOptions.playDisc
                        this.roomDescription = this.cookeRooms.room224.DVD
                        return this.options
                    //L3 conditional Cooke 8 Audio
                    } else if (problem === "Adapter"){
                        this.options = this.possibleOptions.adapter
                        this.roomDescription = this.cookeRooms.room224.Adapter
                        return this.options
                    //L3 conditional Cooke 8 Audio
                    } else if(problem === "Apple TV"){
                        this.options = this.possibleOptions.appleTV
                        this.roomDescription = this.cookeRooms.room224.AppleTV
                        return this.options
                    }
                //L2 conditional Cooke CCRH
                } else if (room === "CCRH"){
                    //L3 conditional Cooke CCRH Projector
                    if (problem === "Projector"){
                        this.options = this.possibleOptions.projector
                        this.roomDescription = this.cookeRooms.CCRH.Projector
                        return this.options
                    //L3 conditional Cooke CCRH Video
                    } else if (problem === "Computer"){
                        this.options = this.possibleOptions.computer
                        this.roomDescription = this.cookeRooms.CCRH.Computer
                        return this.options
                    //L3 conditional Cooke 8 Audio
                    } else if (problem === "Screen"){
                        this.options = this.possibleOptions.screen
                        this.roomDescription = this.cookeRooms.CCRH.Screen
                        return this.options
                    //L3 conditional Cooke 8 Audio
                    } else if (problem === "Video"){
                        this.options = this.possibleOptions.video
                        this.roomDescription = this.cookeRooms.CCRH.Video
                        return this.options
                    //L3 conditional Cooke CCRH Audio
                    } else if (problem === "Audio"){
                        this.options = this.possibleOptions.audio
                        this.roomDescription = this.cookeRooms.CCRH.Audio
                        return this.options
                    ///L3 conditional Cooke CCRH Apple TV
                    } else if (problem === "Power"){
                        this.options = this.possibleOptions.power
                        this.roomDescription = this.cookeRooms.CCRH.Power
                        return this.options
                    //L3 conditional Cooke 8 Audio
                    } else if (problem === "DVD"){
                        this.options = this.possibleOptions.playDisc
                        this.roomDescription = this.cookeRooms.CCRH.DVD
                        return this.options
                    //L3 conditional Cooke 8 Audio
                    } else if (problem === "Adapter"){
                        this.options = this.possibleOptions.adapter
                        this.roomDescription = this.cookeRooms.CCRH.Adapter
                        return this.options
                    //L3 conditional Cooke 8 Audio
                    } else if(problem === "Apple TV"){
                        this.options = this.possibleOptions.appleTV
                        this.roomDescription = this.cookeRooms.CCRH.AppleTV
                        return this.options
                    //L3 conditional Cooke CCRH Smart Board
                    } else if (problem === "Smart Board"){
                        this.options = this.possibleOptions.smartBoard
                        this.roomDescription = this.cookeRooms.CCRH.SmartBoard
                        return this.options
                    }
                } else if (room === "IRH"){
                    //L3 conditional Cooke IRH Projector
                    if (problem === "Projector"){
                        this.options = this.possibleOptions.projector
                        this.roomDescription = this.cookeRooms.IRH.Projector
                        return this.options
                    //L3 conditional Cooke IRH Video
                    } else if (problem === "Computer"){
                        this.options = this.possibleOptions.computer
                        this.roomDescription = this.cookeRooms.IRH.Computer
                        return this.options
                    //L3 conditional Cooke IRH Audio
                    } else if (problem === "Screen"){
                        this.options = this.possibleOptions.screen
                        this.roomDescription = this.cookeRooms.IRH.Screen
                        return this.options
                    //L3 conditional Cooke IRH Audio
                    } else if (problem === "Video"){
                        this.options = this.possibleOptions.video
                        this.roomDescription = this.cookeRooms.IRH.Video
                        return this.options
                    //L3 conditional Cooke IRH Audio
                    } else if (problem === "Audio"){
                        this.options = this.possibleOptions.audio
                        return this.options
                    ///L3 conditional Cooke IRH Apple TV
                    } else if (problem === "Power"){
                        this.options = this.possibleOptions.power
                        this.roomDescription = this.cookeRooms.IRH.Power
                        return this.options
                    //L3 conditional Cooke IRH Audio
                    } else if (problem === "DVD"){
                        this.options = this.possibleOptions.playDisc
                        this.roomDescription = this.cookeRooms.IRH.DVD
                        return this.options
                    //L3 conditional Cooke IRH Audio
                    } else if (problem === "Adapter"){
                        this.options = this.possibleOptions.adapter
                        this.roomDescription = this.cookeRooms.IRH.Adapter
                        return this.options
                    //L3 conditional Cooke IRH Audio
                    } else if(problem === "Apple TV"){
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
        ...mapGetters(['getFormBuilding', 'getFormRoom', 'getFormProblem'])
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
