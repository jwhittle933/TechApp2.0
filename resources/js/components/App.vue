<template>
    <div id="main-div">
        <header-component />
        <div class="flex-box">
            <forms-component @show-solutions="showSolutions"/>
            <solutions-component v-if="solutionsShow"
                                :building-selection="form.buildingSelection"
                                :room-selection="form.roomSelection"
                                :problem-selection="form.problemSelection"/>
        </div>
        <footer-component />
    </div>
</template>

<script>

import HeaderComponent from './HeaderComponent.vue';
import FormsComponent from './FormsComponent.vue';
import SolutionsComponent from './SolutionsComponent.vue';
import FooterComponent from './FooterComponent.vue';


// const router = new VueRouter({
//     mode: 'history',
//     routes: [
//         {path: '/', component: App},
//         {path: '/reportform', component: ReportForm}
//     ]
// })

export default {
    name: "App",
    data: function(){
        return {
            solutionsShow: false,
            form: "",
        }
    },
    components: {
        HeaderComponent,
        FormsComponent,
        SolutionsComponent,
        FooterComponent
    },
    methods: {
        showSolutions: function($event){
            this.form = $event;
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
