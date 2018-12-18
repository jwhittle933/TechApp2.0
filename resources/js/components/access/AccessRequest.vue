<template>
    <div class="d-md-flex p-4 mb-5 bd-highlight rounded shadow">
        <div>
            <h3 class="">{{ firstname }} {{ lastname }}</h3>
            <p>Access ID: {{ accessid }}</p>
            <p>Email: {{ email }}</p>
            <button @click="openAdd" class="btn btn-info">Add {{ userFirst }} {{ userLast }}</button>
            <button @click="openDelete" class="btn btn-danger">Deny {{ userFirst}} {{ userLast }}'s Request</button>
        </div>
        <div>
            <add-request
                v-if="addShow"
                :firstname="firstname"
                :lastname="lastname"
                :email="email"
            ></add-request>
            <delete-request
                v-if="deleteShow"
                :firstname="userFirst"
                :lastname="userLast"
                :email="userEmail"
                :accessid="userId"
            ></delete-request>
        </div>
    </div>
</template>

<script>
import AddRequest from './AddRequest.vue'
import DeleteRequest from './DeleteRequest.vue'


export default {
    name: "AccessRequest",
    props: ['firstname', 'lastname', 'accessid', 'email'],
    data() {
        return {
            addShow: false,
            deleteShow: false,
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            userFirst: this.firstname,
            userLast: this.lastname,
            userId: this.accessid,
            userEmail: this.email
        }
    },
    methods: {
        openAdd() {
            this.addShow = !this.addShow
            this.deleteShow = false
        },
        openDelete() {
            this.deleteShow = !this.deleteShow
            this.addShow = false
        }
    }
}
</script>

<style scoped>

</style>
