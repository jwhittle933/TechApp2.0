<template>
    <form class="form-sidebar">
        <div class="form">
            <label for="buildop">{{ buildingLabel }}</label><br />
            <select name="buildop" v-model="formSelections.buildingSelection"                   @change="setBuilding">
                <option v-for="buildOption in buildOptions"
                        :key="buildOption">
                    {{ buildOption }}
                </option>
            </select>
        </div>
        <div class="form">
            <label for="roomop">{{ roomLabel }}</label><br />
            <select name="roomop"                                                        v-model="formSelections.roomSelection"                                      @change="setRoom">
                <option v-for="roomOption in roomOptions"
                        :key="roomOption">
                    {{ roomOption }}
                </option>
            </select>
        </div>
        <div class="form">
             <label for="probop">{{ problemLabel }}</label><br />
            <select name="probop"                                                        v-model="formSelections.problemSelection"
                    @change="setProblem">
                <option v-for="probOption in probOptions"
                        :key="probOption">
                    {{ probOption }}
                </option>
            </select>
        </div>
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
            probOptions: []
        }
    },
    methods: {
        setBuilding: function(){
            this.setBuildingChoice(this.formSelections.buildingSelection)
            let building = this.getFormBuilding
            this.roomOptions = (building == "Norton") ? this.nortonRooms :
            (building == "Carver") ? this.carverRooms :
            (building == "Rankin") ? this.rankinRooms :
            (building == "Library") ? this.libraryRooms :
            (building == "Cooke") ? this.cookeRooms : []
        },
        setRoom: function(){
            this.setRoomChoice(this.formSelections.roomSelection)
            let building = this.getFormBuilding
            let room = this.getFormRoom
            this.probOptions =
            (building === "Norton") ?
                ((room == 11 || room == 15 || room == 17 || room == 20 ||
                    room == 207) ? this.nortonProblems.room11 :
                (room == 12 || room == 16 || room == 204 || room == 205) ?                                  this.nortonProblems.room12 :
                (room == 13) ? this.nortonProblems.room13 :
                (room == 101 || room == 102 || room == 103 || room == 104 ||
                    room == 105 || room == 201 || room == 202 || room == 206 ||
                    room == 209) ? this.nortonProblems.room100200 :
                (room == 195) ? this.nortonProblems.room195 :
                (room == 232) ? this.nortonProblems.room232 : "Invalid") :
            (building === "Carver") ? this.carverProblems.room108 :
            (building === "Rankin") ?
                ((room == 101) ? this.rankinProblems.room101 :
                (room == 201) ? this.rankinProblems.room201 : "Invalid") :
            (building === "Library") ?
                ((room === "Crismon Hall") ? this.libraryProblems.CrismonHall :
                (room === "Curriculum Lab") ? this.libraryProblems.CurriculumLab :
                (room === "Mullins Room") ? this.libraryProblems.MullinsRoom : "Invalid") :
            (building === "Cooke") ?
                ((room == 8 || room == 221 || room == 224) ? this.cookeProblems.room8 :
                (room === "CCRH") ? this.cookeProblems.CCRH :
                (room === "IRH") ? this.cookeProblems.IRH : "Invalid") : []
        },
        setProblem: function(){
            this.$emit('show-suggestions', this.formSelections)
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
@media screen and (min-width: 768px) {
    label {
        font-family: Montserrat;
        font-size: 1em;
    }
    select {
        width: 100px;
        margin: 5px;
    }
    .form {
        margin: 3vh;
    }
    .form-sidebar {
        max-width: 22vw;
        height: 60vh;
        padding: 15px;
        border-right: 2px solid black;
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
 }
</style>
