<template>
    <div id="main-div">
        <header-component />
        <div class="flex-box">
            <forms-component @show-solutions="showSolutions"/>
            <solutions-component v-if="solutionsShow"/>
        </div>
        <footer-component />
    </div>
</template>

<script>

import HeaderComponent from './HeaderComponent.vue'
import FormsComponent from './FormsComponent.vue'
import SolutionsComponent from './SolutionsComponent.vue'
import FooterComponent from './FooterComponent.vue'


export default {
    name: "App",
    data: function(){
        return {
            solutionsShow: false,
        }
    },
    components: {
        HeaderComponent,
        FormsComponent,
        SolutionsComponent,
        FooterComponent
    },
    methods: {
        showSolutions: function(){
            this.solutionsShow = true;
        }
    }
}

</script>

<style scoped>
#main-div{
    margin-bottom: 100px;
}
</style>
