<template>
    <div id="solutions-div">
        <suggestion-component>
            <h3 slot="selections">{{ buildingSelection }} – {{ roomSelection}} – {{ problemSelection}}</h3>
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
            if (this.buildingSelection === "Norton"){ //L1 conditional
                if(this.roomSelection === "12"){ //L2 conditional
                    if (this.problemSelection === "Projector"){//L3 conditional
                        this.options = this.possibleOptions.projector
                        return this.options
                    } else if (this.problemSelection === "Video"){
                        this.options = this.possibleOptions.video
                        return this.options
                    } else if (this.problemSelection === "Audio"){
                        this.options = this.possibleOptions.audio
                        return this.options
                    } else if (this.problemSelection === "Extron"){
                        this.options = this.possibleOptions.extron
                        return this.options
                    } else if(this.problemSelection === "Apple TV"){
                        this.options = this.possibleOptions.appleTV
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
