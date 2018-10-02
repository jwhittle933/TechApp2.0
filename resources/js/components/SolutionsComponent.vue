<template>
    <div id="solutions-div">
        <room-description v-if="roomDescriptionShow"/>
        <suggestion-component />
    </div>
    
</template>

<script>
import RoomDescription from './RoomDescription.vue';
import SuggestionComponent from './SuggestionComponent.vue';

export default {
    name: "SolutionsComponent",
    props: [],
    data: function() {
        return {
            roomDescriptionShow: false,
            suggestionCompomentShow: true,
        }
    },
    components: {
        RoomDescription,
        SuggestionComponent
    }
}
</script>

<style scoped>
#solutions-div{
    float: right; 
    width: 50%;
}
</style>
