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
        fillOptions: function (){
            //L1 conditional Norton
            if (this.buildingSelection === "Norton"){
                //NORTON BASEMENT ROOMS
                //L2 conditional Rooms 11/15/17/20
                if(this.roomSelection === "11" ||
                   this.roomSelection === "15" ||
                   this.roomSelection === "17" ||
                   this.roomSelection === "20"){
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
                    //L3 conditional Norton 11/15/17/20 Extron
                    } else if (this.problemSelection === "Extron"){
                        this.options = this.possibleOptions.extron
                        return this.options
                    //L3 conditional Norton 11/15/17/20 Apple TV
                    } else if(this.problemSelection === "Apple TV"){
                        this.options = this.possibleOptions.appleTV
                        return this.options
                    }
                //L2 conditional Rooms 12/16
                } else if(this.roomSelection === "12" ||
                          this.roomSelection === "16"){
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
                }
            }
        }
    }
}
</script>

<style scoped>
#solutions-div{
    float: right;
    width: 50%;
}
</style>
