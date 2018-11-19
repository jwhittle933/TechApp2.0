<template>
    <div class="form-sidebar">
        <form class="form" action="" method="POST">
            <label for="buildop">{{ buildingLabel }}</label><br />
            <select name="buildop"
                v-model="formSelections.buildingSelection"                   @change="setBuilding">
                <option v-for="buildOption in buildOptions"
                        :key="buildOption">
                    {{ buildOption }}
                </option>
            </select>
        </form>
        <form class="form" action="" method="POST">
            <label for="roomop">{{ roomLabel }}</label><br />
            <select name="roomop"                                                               v-model="formSelections.roomSelection"                                         @change="setRoom">
                <option v-for="roomOption in roomOptions"
                        :key="roomOption">
                    {{ roomOption }}
                </option>
            </select>
        </form>
        <form class="form" action="" method="POST">
             <label for="probop">{{ problemLabel }}</label><br />
            <select name="probop"                                                              v-model="formSelections.problemSelection"
                @change="setProblem">
                <option v-for="probOption in probOptions"
                        :key="probOption">
                    {{ probOption }}
                </option>
            </select>
        </form>
    </div>
</template>

<script>
import { mapGetters} from 'vuex'
import axios from 'axios'

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
        setBuilding(){
            this.setBuildingChoice(this.formSelections.buildingSelection)
            let building = this.getFormBuilding
            axios.get("/api/rooms", { params: { building: building } })
                 .then(response => this.roomOptions = response.data)
                 .catch(e => console.error(e) )
        },
        setRoom(){
            this.setRoomChoice(this.formSelections.roomSelection)
            let building = this.getFormBuilding
            let room = this.getFormRoom
            axios.get("/api/problems", { params: { room: room, building: building } })
                .then(response => this.probOptions = response.data)
                .catch(e => console.error(e) )

        },
        setProblem(){
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
