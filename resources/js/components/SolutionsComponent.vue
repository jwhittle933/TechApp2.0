<template>
    <div id="solutions-div">
        <suggestion-component>
            <li class="clickable" v-for="(option, index) in options" :key="index" slot="li">{{ option }}</li>
        </suggestion-component>
        <room-description v-if="roomDescriptionShow" />
    </div>
</template>

<script>
import RoomDescription from './RoomDescription.vue';
import SuggestionComponent from './SuggestionComponent.vue';

export default {
    name: "SolutionsComponent",
    props: ['form'],
    data: function() {
        return {
            roomDescriptionShow: false,
            suggestionCompomentShow: true,
            options: ["Have you powered it on?", "Is the USB plugged in?", "Is the HDMI plugged in?", "Have you connected via the mobile app?"],
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
        }
    },
    components: {
        RoomDescription,
        SuggestionComponent
    },
    watch: {

    }
}
</script>

<style scoped>
#solutions-div{
    float: right;
    width: 50%;
}
</style>
