<template>
    <div id="main-div">
        <header-component />
        <div class="inner-content">
            <forms-component
                @show-suggestions="showSuggestions"
            />
            <suggestions-component
                :suggestionsShow="suggestionsShow"
                @open-solutions="openSolutions"
            />
            <solutions-component
                :solutionsShow="solutionsShow"
            />
        </div>
        <footer-component />
    </div>
</template>

<script>

import HeaderComponent from './HeaderComponent.vue'
import FormsComponent from './FormsComponent.vue'
import SuggestionsComponent from './SuggestionsComponent.vue'
import SolutionsComponent from './SolutionsComponent.vue'
import FooterComponent from './FooterComponent.vue'


export default {
    name: "App",
    data: function(){
        return {
            suggestionsShow: false,
            solutionsShow: false
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
        showSuggestions(){
            this.suggestionsShow = true;
        },
        openSolutions(){
            this.solutionsShow = true;
        }
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
