<template>
    <div class="form-group mb-5">
        <form class="container form" action="" method="POST">
            <input type="hidden" name="_token" :value="csrf">
            <input type="hidden" name="_method" value="patch">
            <h1 class="display-4 mt-5">Edit Your Information</h1>
            <p class="mb-5">*Click the field to edit</p>
            <h3 class="mt-3">User ID: {{ Id }}</h3>
            <input type="hidden" name="id" :value="userid">

            <!-- Name Field -->
            <label for="name" class="lead">Name:</label>
            <div v-if="nameEdit === true" class="d-flex mb-3">
                <input name="name" class="form-control w-50" v-model="userName" required>
                <button id="name" class="btn btn-sm btn-outline-success ml-2" @click.prevent="update($event)">Update</button>
                <button class="btn btn-sm btn-outline-danger ml-2" @click.prevent="closeEdit($event)">Cancel</button>
            </div>
            <p id="name" v-else class="border-left pl-2 w-25" @click="editField($event)">{{ userName }}</p>

            <!-- Email Field -->
            <label for="email" class="lead">Email:</label>
            <div v-if="emailEdit === true" class="d-flex mb-3">
                <input name="email" type="email" class="form-control w-50" v-model="userEmail" required>
                <button id="email" class="btn btn-sm btn-outline-success ml-2" @click.prevent="update($event)">Update</button>
                <button class="btn btn-sm btn-outline-danger ml-2" @click.prevent="closeEdit($event)">Cancel</button>
            </div>
            <p id="email" class="border-left pl-2 w-25" @click="editField($event)" v-else>{{ userEmail }}</p>


            <!-- Phone Field -->
            <label class="lead">Phone:</label><br>
            <div class="border-left pl-2 ml-2">
                <label for="prphone">Primary:</label>
                <div class="d-flex ml-2" v-if="prPhoneEdit">
                    <input name="prphone" type="tel" class="form-control w-50">
                    <button id="prphone" class="btn btn-sm btn-outline-success ml-2" @click.prevent="update($event)">Update</button>
                    <button class="btn btn-sm btn-outline-danger ml-2" @click.prevent="closeEdit($event)">Cancel</button>
                </div>
                <p id="prphone" class=" w-25" v-else @click="editField($event)">{{ userPrPhone }}</p>

                <label for="secphone">Secondary:</label>
                <div class="d-flex ml-2" v-if="secPhoneEdit">
                    <input name="secphone" type="tel" class="form-control w-50">
                    <button id="secphone" class="btn btn-sm btn-outline-success ml-2" @click.prevent="update($event)">Update</button>
                    <button class="btn btn-sm btn-outline-danger ml-2" @click.prevent="closeEdit($event)">Cancel</button>
                </div>
                <p id="secphone" class="w-25" v-else @click="editField($event)">{{ userSecPhone }}</p>
            </div>

            <!-- Address Field -->
            <label class="lead">Address:</label>
            <div class="border-left pl-2 ml-2">
                <label for="streetaddress" class="mt-3">Street:</label>
                <div v-if="streetEdit" class="d-flex ml-2">
                    <input name="streetaddress" type="text" :value="userStreet" class="form-control w-50">
                    <button id="streetaddress" class="btn btn-sm btn-outline-success ml-2" @click.prevent="update($event)">Update</button>
                    <button class="btn btn-sm btn-outline-danger ml-2" @click.prevent="closeEdit($event)">Cancel</button>
                </div>
                <p id="street" v-else @click="editField($event)">{{ userStreet }}</p>

                <label for="city" class="mt-3">City:</label>
                <div v-if="cityEdit" class="d-flex ml-2">
                    <input name="city" type="text" :value="userCity" class="form-control w-50">
                    <button id="city" class="btn btn-sm btn-outline-success ml-2" @click.prevent="update($event)">Update</button>
                    <button class="btn btn-sm btn-outline-danger ml-2" @click.prevent="closeEdit($event)">Cancel</button>
                </div>
                <p id="city" v-else @click="editField($event)">{{ userCity }}</p>

                <label for="state" class="mt-3">State:</label>
                <div v-if="stateEdit" class="d-flex ml-2">
                    <input name="state" type="text" :value="userState" class="form-control w-50">
                    <button id="state" class="btn btn-sm btn-outline-success ml-2" @click.prevent="update($event)">Update</button>
                    <button class="btn btn-sm btn-outline-danger ml-2" @click.prevent="closeEdit($event)">Cancel</button>
                </div>
                <p id="state" v-else @click="editField($event)"> {{ userState }} </p>
            </div><br>
            <hr>

            <!-- Password Field -->
            <div class="alert alert-warning alert-dismissible fade show w-75" role="alert" v-if="error">
                <strong>Uh oh!</strong> The passwords don't match.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <h3 class="mb-4">Change Your Password</h3>
            <div class="ml-2">
                <label for="password" class="lead">New Password: </label>
                <button v-if="reveal" class="btn btn-outline-success btn-sm ml-3" @click.prevent="showPassword">Hide Password</button>
                <button v-else class="btn btn-outline-danger btn-sm ml-3" @click.prevent="showPassword">Show Password</button>
                <input id="password" name="password" :type="type" class="form-control w-75" v-model="password" required><br>

                <label for="pwcheck" class="lead">Re-type Password:</label>
                <input name="pwcheck" type="password" class="form-control mb-4 w-75" v-model="pwcheck" @input="check" required>
            </div>
            <hr>
            <p class="lead">Administrator: {{ admin }}</p>
        </form>
    </div>
</template>

<script>
export default {
    name: "Edit",
    props: ['userid',
            'name',
            'email',
            'administrator',
            'streetaddress',
            'city',
            'state',
            'primaryphone',
            'alternatephone'],
    data() {
        return {
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            Id: this.userid,
            userName: this.name,
            userEmail: this.email,
            admin: this.administrator,
            userStreet: this.streetaddress === "" ? "Add your street address" : this.streetaddress,
            userCity: this.city === "" ? "Add your city" : this.city,
            userState: this.state === "" ? "Add your state" : this.state,
            userPrPhone: this.primaryphone === "" ? "Add a primary number" : this.primaryphone,
            userSecPhone: this.alternatephone === "" ? "Add a secondary number" : this.alternatephone,
            error: false,
            password: "",
            pwcheck: "",
            reveal: false,
            type: "password",
            nameEdit: false,
            emailEdit: false,
            pwEdit: false,
            prPhoneEdit: false,
            secPhoneEdit: false,
            streetEdit: false,
            cityEdit: false,
            stateEdit: false,
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
        editField(e){
            //rethink switch statement
            let field = e.target.id
            switch (field){
                case "name":
                    this.nameEdit = true
                    break
                case "email":
                    this.emailEdit = true
                    break
                case "prphone":
                    this.prPhoneEdit = true
                    break
                case "secphone":
                    this.secPhoneEdit = true
                    break
                case "street":
                    this.streetEdit = true
                    break
                case "city":
                    this.cityEdit = true
                    break
                case "state":
                    this.stateEdit = true
                    break
            }
        },
        closeEdit(e) {
            //rethink switch
            let field = e.target.previousElementSibling.id
            switch (field){
                case "name":
                    this.nameEdit = false
                    break
                case "email":
                    this.emailEdit = false
                    break
                case "prphone":
                    this.prPhoneEdit = false
                    break
                case "secphone":
                    this.secPhoneEdit = false
                    break
                case "streetaddress":
                    this.streetEdit = false
                    break
                case "city":
                    this.cityEdit = false
                    break
                case "state":
                    this.stateEdit = false
                    break
            }
        },
        update(e) {
            let columnName = e.target.previousElementSibling.name
            console.log(columnName)
            let columnValue = e.target.previousElementSibling.value
            console.log(columnValue)
            // axios.patch('/api/userprofile/' + this.userid, {
            //         userID: this.Id,
            //         columnName: columnName,
            //         columnValue: columnValue
            // }).then(response => console.log(response.data))
            // .catch(e => console.error(e.message))
            console.log(e.target.id)
            // this.closeEdit(e.target.id)
        }
    }
}
</script>

<style scoped>

</style>
