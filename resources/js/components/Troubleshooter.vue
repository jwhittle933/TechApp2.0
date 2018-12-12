<template>
    <div id="main-div">
        <header-component />
        <div class="inner-content">
            <forms-component
                @show-suggestions="showSuggestions"
            />
            <suggestions-component
                :suggestionsShow="suggestionsShow"
                :suggestionsOptions="suggestionOptions"
                @open-solutions="openSolutions"
            />
            <solutions-component
                :solutionsShow="solutionsShow"
                :selection="clicked"
                :suggestion="suggestionText"
            />
        </div>
        <footer-component />
    </div>
</template>

<script>

import HeaderComponent from './troubleshooter/HeaderComponent.vue'
import FormsComponent from './troubleshooter/FormsComponent.vue'
import SuggestionsComponent from './troubleshooter/SuggestionsComponent.vue'
import SolutionsComponent from './troubleshooter/SolutionsComponent.vue'
import FooterComponent from './troubleshooter/FooterComponent.vue'

import { mapState } from 'vuex'

export default {
    name: "App",
    data(){
        return {
            suggestionsShow: false,
            suggestionOptions: [],
            solutionsShow: false,
            clicked: "",
            suggestionText: "",
            formSelections: {}
        }
    },
    components: {
        HeaderComponent,
        FormsComponent,
        SuggestionsComponent,
        SolutionsComponent,
        FooterComponent
    },
    methods: {
        showSuggestions($event){
            this.formSelections = $event
            this.suggestionsShow = true
            let building = this.formSelections.buildingSelection
            let room = this.formSelections.roomSelection
            let problem = this.formSelections.problemSelection
            this.suggestionOptions = []
            axios.get('/api/suggestions', {
                params: {
                    building: building,
                    room: room,
                    problem: problem
                }
            }).then(response => this.suggestionOptions = response.data)
            .catch(e => console.error(e))
        },
        openSolutions($event){
            this.clicked = $event[1]
            this.solutionsShow = true
            let building = this.formSelections.buildingSelection
            let room = this.formSelections.roomSelection
            let problem = this.formSelections.problemSelection
            /**
            * Fetches data from DB through SolutionsController
            *
            * Isses:
            *
            * Norton 195 Projector Text doesn't fit the suggestion pane
            *
            * Norton rooms 101-209 won't retrieve database descriptions because
            * the search field is for specific room  #s (i.e., 1XX), but the
            * database stores them as 100200
            *
            * TypeError – some properties for search are undefined,
            * need to update database model to match suggestion
            * options and cull relevant data.
            */
            axios.get('/api/solution', {
                params: {
                    building: building,
                    room: room,
                    problem: problem,
                    suggestion: this.clicked
            } }).then(response => this.suggestionText = response.data[0].description)
            .catch(e => console.error(e) )
        }
    },
    computed: {
        ...mapState({
            getBuilding: state => state.formSelections.buildingSelection,
            getRoom: state => state.formSelections.roomSelection,
            getProblem: state => state.formSelections.problemSelection
        })
    }
}

</script>

<style>
html {
    margin: 0;
    padding: 0;
}
body {
    margin: 0;
    padding: 0;
    background-color: #f0f4f7;
}
#main-div{
    margin-bottom: 100px;
    top: 0;
}
.inner-content{
    display: flex;
    min-height: 80vh;
    width: 100vw;
}
</style>
