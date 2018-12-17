<template>
    <div class="form-group mb-5">
        <form class="container form" action="" method="POST">
            <input type="hidden" name="_token" :value="csrf">
            <input type="hidden" name="_method" value="patch">
            <h1 class="display-4 mt-5">Edit Your Information</h1>
            <p class="mt-3">User ID: {{ Id }}</p>
            <input type="hidden" name="id" :value="userid">

            <label for="name" class="lead">Name:</label>
            <div v-if="nameEdit === true" class="d-flex mb-3">
                <input name="name" class="form-control w-50" v-model="userName" required>
                <button class="btn btn-sm btn-outline-success ml-2" @click.prevent="submit($event)">Accept</button>
                <button class="btn btn-sm btn-outline-danger ml-2" @click.prevent="closeEdit">Cancel</button>
            </div>
            <p v-else class="w-25" @click="input">{{ userName }}</p>

            <label for="email" class="lead">Email:</label>
            <div v-if="emailEdit === true" class="d-flex mb-3">
                <input name="email" type="email" class="form-control w-50" v-model="userEmail" required><br>
                <button class="btn btn-sm btn-outline-success ml-2" @click.prevent="closeEdit">Accept</button>
            </div>
            <p class="w-25" @click="input" v-else>{{ userEmail }}</p>

            <div class="alert alert-warning alert-dismissible fade show w-75" role="alert" v-if="error">
                <strong>Uh oh!</strong> The passwords don't match.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <label for="password" class="lead">Password: </label>
            <button v-if="reveal" class="btn btn-outline-success btn-sm ml-3" @click.prevent="showPassword">Hide Password</button>
            <button v-else class="btn btn-outline-danger btn-sm ml-3" @click.prevent="showPassword">Show Password</button>
            <input id="password" name="password" :type="type" class="form-control w-75" v-model="password" required><br>
            <label for="pwcheck" class="lead">Re-type Password:</label>
            <input name="pwcheck" type="password" class="form-control w-75" v-model="pwcheck" @input="check" required><br>
            <label for="prphone" class="lead">Primary Phone:</label>
            <input name="prphone" type="tel" class="form-control w-75"><br>
            <label for="secphone" class="lead">Secondary Phone:</label>
            <input name="secphone" type="tel" class="form-control w-75"><br>
            <label class="lead">Address:</label>
            <div class="ml-2">
                <label for="streetaddress">Street:</label>
                <input name="streetaddress" type="text" :value="userStreet" class="form-control w-50"><br>
                <label for="city">City:</label>
                <input name="city" type="text" :value="userCity" class="form-control w-50"><br>
                <label for="state">State:</label>
                <input name="state" type="text" :value="userState" class="form-control w-50"><br>
            </div>
            <p class="lead">Administrator: {{ admin }}</p>
            <button type="submit" class="btn btn-outline-primary">Submit</button>
        </form>
    </div>
</template>

<script>
export default {
    name: "Edit",
    props: ['userid', 'name', 'email', 'administrator', 'streetaddress', 'city', 'state'],
    data() {
        return {
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            Id: this.userid,
            userName: this.name,
            userEmail: this.email,
            admin: this.administrator,
            userStreet: this.streetaddress,
            userCity: this.city,
            userState: this.state,
            error: false,
            password: "",
            pwcheck: "",
            reveal: false,
            type: "password",
            nameEdit: false,
            emailEdit: false,
            pwEdit: true,
            prPhoneEdit: true,
            secPhoneEdit: true,
            streetEdit: true,
            cityEdit: true,
            stateEdit: true,
        }
    },
    methods: {
        check(){
            this.password === this.pwcheck ? this.error = false : this.error = true
        },
        showPassword() {
            this.reveal = !this.reveal
            this.reveal === false ? this.type = "password" : this.type = "text"
        },
        input(){
            this.nameEdit = !this.nameEdit
        },
        closeEdit() {
            this.nameEdit = !this.nameEdit
        },
        submit(e) {
            let columnName = e.target.previousElementSibling.name
            let columnValue = e.target.previousElementSibling.value
            axios.patch('/api/update/' + $userid, {
                params: {
                    userID: this.Id,
                    columnName: columnName,
                    columnValue: columnValue
                }
            }).then(response => console.log(response.data))
            .catch(e => console.error(e.message))
        }
    }
}
</script>

<style scoped>

</style>
