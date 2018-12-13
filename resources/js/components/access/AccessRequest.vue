<template>
    <div class="d-md-flex p-2 mb-5 bd-highlight">
        <div>
            <h3 class="">{{ firstname }} {{ lastname }}</h3>
            <p>Access ID: {{ accessid }}</p>
            <p>Email: {{ email }}</p>
            <button @click="openAdd" class="btn btn-success">Add User</button>
            <button @click="openDelete" class="btn btn-danger">Cancel Request</button>
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
                :firstname="firstname"
                :lastname="lastname"
                :email="email"
                :accessid="accessid"
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
            deleteShow: false,
            addShow: false
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
