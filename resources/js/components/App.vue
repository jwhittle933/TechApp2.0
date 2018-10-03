<template>
    <div id="main-div">
        <header-component />
        <div class="flex-box">
            <forms-component @revealSolutions="this.solutionsShow = true"/>
            <solutions-component v-if="solutionsShow" />
        </div>
        <footer-component />
    </div>
</template>

<script>

import HeaderComponent from './HeaderComponent.vue';
import FormsComponent from './FormsComponent.vue';
import SolutionsComponent from './SolutionsComponent.vue';
import FooterComponent from './FooterComponent.vue';

class Errors 
{
    constructor(){
        this.errors = {};
    }
}

class Form
{
    constructor(data){
        this.originalData = data; 
        for (let field in data){
            this[field] = data[field];
        }
        this.errors = new Errors();
    }
    data(){
        let data = {};
        for (let property in this.originalData) {
            data[property] = this[property];
        }
        return data;
    }
    reset(){
        for  (let field in this.originalData){
            this[field] = '';
        }
        this.errors.clear();
    }
    post(url){
        return this.submit('post', url)
    }
    put(url){
        return this.submit('put', url)
    }
    patch(url){
        return this.submit('patch', url)
    }
    submit(requestType, url) {
        return new Promise((resolve, reject) => {
            axios[requestType](url, this.data())
                .then(response => {
                    this.onSuccess(response.data);

                    resolve(response.data);
                })
                .catch(error => {
                    this.onFail(error.response.data);

                    reject(error.response.data);
                });
        });
    }
    onSuccess(response){
        alert(response.data.message);
        this.reset();
    }
    onFailure(error){
        this.errors.record(errors)
    }
}

export default {
    name: "App",
    data: function(){
        return {
            solutionsShow: false,
            form: new Form({
                buildingName: "",
                roomNumber: "",
                problem: ""
            })
        }
    },
    components: {
        HeaderComponent,
        FormsComponent,
        SolutionsComponent,
        FooterComponent
    },
    methods: {
        retrieveData: function($event) {
            this.form.buildingName = $event[0]
            this.form.roomNumber = $event[1]
            this.form.problem = $event[2]
            this.solutionsShow = true
            console.log(this.formDataStore)
        },
        onSubmit: function(){
            this.form.post('/projects')
                    .then(response => alert('Wahoo!'))
        }
    }
} 

</script>

<style scoped>
#main-div{
    margin-bottom: 100px; 
}
</style>
