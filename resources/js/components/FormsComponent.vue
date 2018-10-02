<template>
    <form class="float-left">
        <building-input @buildingData="roomsAppear" />
        <room-input v-if="roomShow" @roomData="problemsAppear"/>
        <problem-input v-if="problemShow" @problemData="solutionsAppear"/>
        <button v-if="buttonShow" @click.prevent="submitForm">Submit</button>
    </form>
</template>

<script>
import BuildingInput from './BuildingInput.vue';
import RoomInput from './RoomInput.vue';
import ProblemInput from './ProblemInput.vue';

export default {
    name: "FormsComponent",
    data: function(){
        return {
            buildingSelection: "",
            roomSelection: "",
            problemSelection: "",
            roomShow: false,
            problemShow: false,
            buttonShow: false,
            formData: [],
            output: "Output"
        }
    },
    components: {
        BuildingInput,
        RoomInput,
        ProblemInput
    },
    computed: {

    },
    methods: {
        roomsAppear: function($event){
            this.buildingSelection = $event;
            this.formData.push($event);
            if($event === ""){
                this.roomShow = false; 
                this.problemShow = false; 
                this.buttonShow = false;
            } else {
                this.roomShow = true;
            }
        },
        problemsAppear: function($event){
            this.roomSelection = $event;
            this.formData.push($event);
            if ($event === ""){
                this.problemShow = false;
                this.buttonShow = false; 
            } else {
                this.problemShow = true;
            }
        },
        solutionsAppear: function($event){
            this.problemSelection = $event;
            this.formData.push($event);
            if ($event === ""){
                this.buttonShow = false;
                return 
            } else {
                this.buttonShow = true;
                this.$emit('solutionShow');
            }
        },
        submitForm: function(){
            this.$emit('formsData', this.formData);
            this.formData = [];
        }
    }
}
</script>

<style scoped>
 .float-left{
     float: left;
     width: 40%;
     height: 300px;
 }
 button {
     border-radius: 10px; 
     margin-top: 15px; 
     background-color:lightblue;
     font-family: Lobster;
     font-size: 1.1em;
     height: 25px; 
     width: auto; 
 }
</style>
