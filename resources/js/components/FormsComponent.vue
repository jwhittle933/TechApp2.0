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
import { mapState, mapGetters} from 'vuex'

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
            this.setBuildingChoice(this.formSelections.buildingSelection)
            let building = this.getFormBuilding
            this.problemShow = false;
            if(building == "Norton"){
                this.roomOptions = this.nortonRooms
                this.roomShow = true;
            } else if(building == "Carver"){
                this.roomOptions = this.carverRooms
                this.roomShow = true;
            } else if(building == "Rankin"){
                this.roomOptions = this.rankinRooms
                this.roomShow = true;
            } else if(building == "Library"){
                this.roomOptions = this.libraryRooms
                this.roomShow = true;
            } else if(building == "Cooke"){
                this.roomOptions = this.cookeRooms
                this.roomShow = true;
            } else {
                this.roomShow = false;
                this.problemShow = false;
            }
        },
        problemsAppear: function(){
            this.problemShow = true;
            this.setRoomChoice(this.formSelections.roomSelection)
            let building = this.getFormBuilding
            let room = this.getFormRoom
            if (building === "Norton"){
                if (room == 11 || room == 15 || room == 17 || room == 20 ||
                    room == 207) {
                        this.probOptions = this.nortonProblems.room11
                        this.problemShow = true
                } else if (room == 12 || room == 16 || room == 204 ||
                           room == 205) {
                    this.probOptions = this.nortonProblems.room12
                    this.problemShow = true
                } else if (room == 13) {
                    this.probOptions = this.nortonProblems.room13
                    this.problemShow = true
                } else if (room == 101 || room == 102 || room == 103 ||
                           room == 104 || room == 105 || room == 201 ||
                           room == 202 || room == 206 || room == 209) {
                                this.probOptions = this.nortonProblems.room100200
                                this.problemShow = true
                } else if (room == 195) {
                    this.probOptions = this.nortonProblems.room195
                    this.problemShow = true
                } else if (room == 232){
                    this.probOptions = this.nortonProblems.room232
                    this.problemShow = true
                } else {
                    this.problemShow = false
                }
            } else if (this.formSelections.buildingSelection === "Carver"){
                this.probOptions = this.carverProblems.room108
                this.problemShow = true
            } else if (this.formSelections.buildingSelection === "Rankin"){
                if (this.formSelections.roomSelection == 101){
                    this.probOptions = this.rankinProblems.room101
                    this.problemShow = true
                } else if(this.formSelections.roomSelection == 201){
                    this.probOptions = this.rankinProblems.room201
                    this.problemShow = true
                }
            } else if (this.formSelections.buildingSelection === "Library"){
                if (this.formSelections.roomSelection === "Crismon Hall"){
                    this.probOptions = this.libraryProblems.CrismonHall;
                    this.problemShow = true;
                } else if (this.formSelections.roomSelection === "Curriculum Lab"){
                    this.probOptions = this.libraryProblems.CurriculumLab;
                    this.problemShow = true;
                } else if (this.formSelections.roomSelection === "Mullins Room"){
                    this.probOptions = this.libraryProblems.MullinsRoom;
                    this.problemShow = true;
                }
            } else if (this.formSelections.buildingSelection === "Cooke"){
                if (this.formSelections.roomSelection == 8 ||
                    this.formSelections.roomSelection == 221 ||
                    this.formSelections.roomSelection == 224){
                        this.probOptions = this.cookeProblems.room8
                        this.problemShow = true
                } else if(this.formSelections.roomSelection === "CCRH"){
                    this.probOptions = this.cookeProblems.CCRH
                    this.problemShow = true
                } else if(this.formSelections.roomSelection === "IRH"){
                    this.probOptions = this.cookeProblems.IRH;
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
    },
    computed: {
        ...mapState({
            nortonTech: (state) => state.roomTech.Norton,
            carverTech: (state) => state.roomTech.Carver,
            rankinTech: (state) => state.roomTech.Rankin,
            libraryTech: (state) => state.roomTech.Library,
            cookeTech: (state) => state.roomTech.Cooke,
            nortonRooms: (state) => state.rooms.Norton,
            carverRooms: (state) => state.rooms.Carver,
            rankinRooms: (state) => state.rooms.Rankin,
            libraryRooms: (state) => state.rooms.Library,
            cookeRooms: (state) => state.rooms.Cooke,
            nortonProblems: (state) => state.problems.Norton,
            carverProblems: (state) => state.problems.Carver,
            rankinProblems: (state) => state.problems.Rankin,
            libraryProblems: (state) => state.problems.Library,
            cookeProblems: (state) => state.problems.Cooke
        }),
        ...mapGetters(['getFormBuilding', 'getFormRoom', 'getFormProblem'])
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
}
 button {
     border-radius: 10px;
     margin-top: 15px;
     background-color: lightblue;
     font-family: Lobster;
     font-size: 1.1em;
     height: 25px;
     width: auto;
 }
</style>
