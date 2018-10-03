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
        <button v-if="buttonShow" @click.prevent="submitForm">Submit</button>
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
            buildOptions: ["", "Norton", "Carver", "Rankin", "Library", "Cook"],
            roomOptions: [],
            probOptions: ["", "Projector", "Video"],
            roomShow: false,
            problemShow: false,
            buttonShow: false
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
                this.roomOptions = ["", 12, 13, 15, 16, 17, 20, 101, 102, 103, 104, 105, 195, 201, 202, 203, 204, 205, 206, 207, 208, 209, 232]
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
            if (this.roomSelection != ""){
                this.problemShow = true;
            } else {
                this.problemShow = false;
            }

            axios.get('')
                .then(response => {
                    this.problemSelection = response.data
                })
                .catch(error => {
                    console.error(error)
                })
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
