<template>
    <form class="float-left">
        <form class="form">
            <label for="buildop">{{ buildingLabel }}</label>
            <select id="buildop" name="buildop" v-model="buildingSelection" @change="roomsAppear">
                <option v-for="buildOption in buildOptions"  :key="buildOption">{{ buildOption }}</option>
            </select>
        </form>
        <form id = "roomform" class="form"  method="get" action="roompopulate.php"
          v-on:submit.prevent="populateProblemMenu"
          v-if="roomShow">
            <label for="roomop">{{ roomLabel }}</label>
            <select id="roomop" name="roomop" v-model="roomSelection" @change="problemsAppear">
                <option v-for="roomOption in roomOptions" :key="roomOption">{{ roomOption }}</option>
            </select>
        </form>
        <form id="probform" class="form" method="post" action=""
            v-on:submit.prevent="populatesolutions"
            v-if="problemShow">
             <label for="probop">{{ problemLabel }}</label>
            <select id="probop" v-model="problemSelection" name="probop" >
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
            buildingSelection: "",
            roomSelection: "",
            problemSelection: "",
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
                this.$emit('revealSolutions')
            }
        }
    },
    methods: {
        roomsAppear: function(){
            if(this.buildingSelection == "Norton"){
                this.roomOptions = ["", 11, 12, 13, 15, 16, 17, 20, 101, 102, 103, 104, 105, 195, 201, 202, 203, 204, 205, 206, 207, 208, 209, 232]
                this.roomShow = true;
            } else if(this.buildingSelection == "Carver"){
                this.roomOptions = ["", 108, 135]
                this.roomShow = true;
            } else if(this.buildingSelection == "Rankin"){
                this.roomOptions = ["", 101, 201]
                this.roomShow = true;
            } else if(this.buildingSelection == "Library"){
                this.roomOptions = ["", "Crismon Hall", "Curriculum Lab", "Mullins Room"]
                this.roomShow = true;
            } else if(this.buildingSelection == "Cooke"){
                this.roomOptions = ["", 8, 221, 224, "CCRH", "IRH", "Heeren Hall"]
                this.roomShow = true;
            } else {
                this.roomShow = false;
                this.problemShow = false;
            }
        },
        problemsAppear: function(){
            this.problemShow=true;
            if (this.buildingSelection === "Norton"){
                if (this.roomSelection == 11 || this.roomSelection == 15 || this.roomSelection == 17 || this.roomSelection == 20 || this.roomSelection == 207){
                    this.probOptions = ["", "Projector", "Video", "Audio", "Apple TV"];
                    this.problemShow = true;
                } else if (this.roomSelection == 12 || this.roomSelection == 16 || this.roomSelection == 204 || this.roomSelection == 205) {
                    this.probOptions = ["", "Projector", "Video", "Audio", "Extron", "Apple TV"];
                    this.problemShow = true;
                } else if (this.roomSelection == 13) {
                    this.probOptions = ["", "Projector", "Video", "Audio", "Extron", "Apple TV"];
                    this.problemShow = true;
                } else if (this.roomSelection == 101 || this.roomSelection == 102 || this.roomSelection == 103 || this.roomSelection == 104 || this.roomSelection == 105 || this.roomSelection == 201 || this.roomSelection == 202 || this.roomSelection == 206 || this.roomSelection == 209){
                    this.probOptions = ["", "Projector", "Video", "Audio", "Crestron", "Apple TV", "Smart Board"];
                    this.problemShow = true;
                } else if (this.roomSelection == 195) {
                    this.probOptions = ["", "Projector", "Video", "Audio", "Crestron", "Apple TV"];
                    this.problemShow = true;
                } else {
                    this.problemShow = false;
                }
            } else if (this.buildingSelection === "Carver"){
                this.probOptions = ["", "Projector", "Video", "Audio", "Apple TV"];
                this.problemShow = true;
            } else if (this.buildingSelection === "Rankin"){
                if (this.roomSelection == 101){
                    this.probOptions = ["", "Projector", "Video", "Audio", "Apple TV"];
                    this.problemShow = true;
                } else if(this.roomSelection == 201){
                    this.probOptions = ["", "Projector", "Video", "Audio", "Apple TV", "Smart Board"];
                    this.problemShow = true;
                }
            } else if (this.buildingSelection === "Library"){
                if (this.roomSelection === "Crismon Hall"){
                    this.probOptions = ["", "Projector", "Video", "Audio", "Apple TV"];
                    this.problemShow = true;
                } else if (this.roomSelection === "Curriculum Lab"){
                    this.probOptions = ["", "Projector", "Video", "Audio", "Apple TV", "Smart Board"];
                    this.problemShow = true;
                } else if (this.roomSelection === "Mullins Room"){
                    this.probOptions = ["", "Projector", "Video", "Audio", "Apple TV"];
                    this.problemShow = true;
                }
            } else if (this.buildingSelection === "Cooke"){
                if (this.roomSelection == 8 || this.roomSelection == 221 || this.roomSelection == 224){
                    this.probOptions = ["", "Projector", "Video", "Audio", "Apple TV"];
                    this.problemShow = true;
                } else if(this.roomSelection === "CCRH"){
                    this.probOptions = ["", "Projector", "Video", "Audio", "Apple TV", "Smart Board"];
                    this.problemShow = true;
                } else if(this.roomSelection === "IRH"){
                    this.probOptions = ["", "Projector", "Video", "Audio", "Apple TV"];
                    this.problemShow = true;
                } else if (this.roomSelection === "Heeren Hall"){
                    window.alert("We do not service Heeren Hall")
                }
            }

            // axios.get('')
            //     .then(response => {
            //         this.problemSelection = response.data
            //     })
            //     .catch(error => {
            //         console.error(error)
            //     })
        },
        solutionsAppear: function(){
            
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
