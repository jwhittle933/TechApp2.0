<template>
    <form class="float-left">
        <form class="form">
            <label for="buildop">{{ buildingLabel }}</label>
            <select id="buildop" name="buildop" v-model="formSelections.buildingSelection"                                                      @change="roomsAppear">
                <option v-for="buildOption in buildOptions"  :key="buildOption">{{ buildOption }}</option>
            </select>
        </form>
        <form id = "roomform" class="form"  method="get" action="roompopulate.php"
          v-on:submit.prevent="populateProblemMenu"
          v-if="roomShow">
            <label for="roomop">{{ roomLabel }}</label>
            <select id="roomop" name="roomop"                                       v-model="formSelections.roomSelection"                              @change="problemsAppear">
                <option v-for="roomOption in roomOptions" :key="roomOption">{{ roomOption }}</option>
            </select>
        </form>
        <form id="probform" class="form" method="post" action=""
            v-on:submit.prevent="populatesolutions"
            v-if="problemShow">
             <label for="probop">{{ problemLabel }}</label>
            <select id="probop" name="probop" v-model="formSelections.problemSelection"
                                              @change="revealSolutions">
                <option v-for="probOption in probOptions" :key="probOption">{{ probOption }}</option>
            </select>
        </form>
    </form>

</template>

<script>
import Axios from 'axios';

export default {
    name: "FormsComponent",
    data: function(){
        return {
            buildingLabel: "What building are you in?",
            roomLabel: "What room are you in?",
            problemLabel: "What's the problem?",
            formSelections: {
                buildingSelection: "",
                roomSelection: "",
                problemSelection: ""
            },
            buildOptions: ["", "Norton", "Carver", "Rankin", "Library", "Cooke"],
            roomOptions: [],
            probOptions: [],
            roomShow: false,
            problemShow: false
        }
    },
    watch: {
        solutionsAppear: function(){
            if(buildingSelection && roomSelection && problemSelection){
                setProblemChoice(this.formSelections.problemSelection)
                this.$emit('revealSolutions')
            }
        }
    },
    methods: {
        roomsAppear: function(){
            this.problemShow = false;
            this.setBuildingChoice(this.formSelections.buildingSelection)
            if(this.formSelections.buildingSelection == "Norton"){
                this.roomOptions = ["", 11, 12, 13, 15, 16, 17, 20, 101, 102, 103, 104, 105, 195, 201, 202, 203, 204, 205, 206, 207, 208, 209, 232]
                this.roomShow = true;
            } else if(this.formSelections.buildingSelection == "Carver"){
                this.roomOptions = ["", 108, 135]
                this.roomShow = true;
            } else if(this.formSelections.buildingSelection == "Rankin"){
                this.roomOptions = ["", 101, 201]
                this.roomShow = true;
            } else if(this.formSelections.buildingSelection == "Library"){
                this.roomOptions = ["", "Crismon Hall", "Curriculum Lab", "Mullins Room"]
                this.roomShow = true;
            } else if(this.formSelections.buildingSelection == "Cooke"){
                this.roomOptions = ["", 8, 221, 224, "CCRH", "IRH", "Heeren Hall"]
                this.roomShow = true;
            } else {
                this.roomShow = false;
                this.problemShow = false;
            }
        },
        problemsAppear: function(){
            this.problemShow = true;
            this.setRoomChoice(this.formSelections.roomSelection)
            if (this.formSelections.buildingSelection === "Norton"){
                if (this.formSelections.roomSelection == 11 ||
                    this.formSelections.roomSelection == 15 ||
                    this.formSelections.roomSelection == 17 ||
                    this.formSelections.roomSelection == 20 ||
                    this.formSelections.roomSelection == 207) {
                        this.probOptions = ["", "Projector", "Video", "Audio", "Apple TV"];
                        this.problemShow = true;
                } else if (this.formSelections.roomSelection == 12 ||
                           this.formSelections.roomSelection == 16 ||
                           this.formSelections.roomSelection == 204 ||
                           this.formSelections.roomSelection == 205) {
                    this.probOptions = ["", "Projector", "Video", "Audio", "Extron", "Apple TV"];
                    this.problemShow = true;
                } else if (this.formSelections.roomSelection == 13) {
                    this.probOptions = ["", "Projector", "Video", "Audio", "Extron", "Apple TV"];
                    this.problemShow = true;
                } else if (this.formSelections.roomSelection == 101 ||
                           this.formSelections.roomSelection == 102 ||
                           this.formSelections.roomSelection == 103 ||
                           this.formSelections.roomSelection == 104 ||
                           this.formSelections.roomSelection == 105 ||
                           this.formSelections.roomSelection == 201 ||
                           this.formSelections.roomSelection == 202 ||
                           this.formSelections.roomSelection == 206 ||
                           this.formSelections.roomSelection == 209) {
                                this.probOptions = ["", "Projector", "Video", "Audio", "Crestron", "Apple TV", "Smart Board"];
                                this.problemShow = true;
                } else if (this.formSelections.roomSelection == 195) {
                    this.probOptions = ["", "Projector", "Video", "Audio", "Crestron", "Apple TV"];
                    this.problemShow = true;
                } else if (this.formSelections.roomSelection == 232){
                    this.probOptions = ["", "TV", "Video", "Audio", "Apple TV"];
                    this.problemShow = true;
                } else {
                    this.problemShow = false;
                }
            } else if (this.formSelections.buildingSelection === "Carver"){
                this.probOptions = ["", "Projector", "Video", "Audio", "Apple TV"];
                this.problemShow = true;
            } else if (this.formSelections.buildingSelection === "Rankin"){
                if (this.formSelections.roomSelection == 101){
                    this.probOptions = ["", "Projector", "Video", "Audio", "Apple TV"];
                    this.problemShow = true;
                } else if(this.formSelections.roomSelection == 201){
                    this.probOptions = ["", "Projector", "Video", "Audio", "Apple TV", "Smart Board"];
                    this.problemShow = true;
                }
            } else if (this.formSelections.buildingSelection === "Library"){
                if (this.formSelections.roomSelection === "Crismon Hall"){
                    this.probOptions = ["", "Projector", "Video", "Audio", "Apple TV"];
                    this.problemShow = true;
                } else if (this.formSelections.roomSelection === "Curriculum Lab"){
                    this.probOptions = ["", "Projector", "Video", "Audio", "Apple TV", "Smart Board"];
                    this.problemShow = true;
                } else if (this.formSelections.roomSelection === "Mullins Room"){
                    this.probOptions = ["", "Projector", "Video", "Audio", "Apple TV"];
                    this.problemShow = true;
                }
            } else if (this.formSelections.buildingSelection === "Cooke"){
                if (this.formSelections.roomSelection == 8 ||
                    this.formSelections.roomSelection == 221 ||
                    this.formSelections.roomSelection == 224){
                        this.probOptions = ["", "Projector", "Video", "Audio", "Apple TV"];
                        this.problemShow = true;
                } else if(this.formSelections.roomSelection === "CCRH"){
                    this.probOptions = ["", "Projector", "Video", "Audio", "Apple TV", "Smart Board"];
                    this.problemShow = true;
                } else if(this.formSelections.roomSelection === "IRH"){
                    this.probOptions = ["", "Projector", "Video", "Audio", "Apple TV"];
                    this.problemShow = true;
                } else if (this.formSelections.roomSelection === "Heeren Hall"){
                    this.problemShow = false;
                    window.alert("We do not service Heeren Hall. Please contact Event Media.");
                }
            }
        },
        revealSolutions: function(){
            this.$emit('show-solutions', this.formSelections)
            this.setProblemChoice(this.formSelections.problemSelection)
        },
        //Mutations
        setBuildingChoice(payload){
            return this.$store.commit('setBuildingChoice', payload)
        },
        setRoomChoice(payload){
            return this.$store.commit('setRoomChoice', payload)
        },
        setProblemChoice(payload){
            return this.$store.commit('setProblemChoice', payload)
        }
    }
}
</script>

<style scoped>
form {
  margin-top: 25px;
}
label {
  font-family: Montserrat;
  font-size: 1.5em;
}
select {
  width: 100px;
  margin: 5px;
}
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
