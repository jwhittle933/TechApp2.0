<template>
    <div class="form-group mb-5">
        <form class="container form" action="" method="POST">
            <input type="hidden" name="_token" :value="csrf">
            <input type="hidden" name="_method" value="patch">
            <h1 class="display-4 mt-5">Edit Your Information</h1>
            <p class="mt-3">User ID: {{ userid }}</p>
            <input type="hidden" name="id" :value="userid">
            <label for="name" class="lead">Name:</label>
            <input name="name" class="form-control w-75" :value="name" required><br>
            <label for="email" class="lead">Email:</label>
            <input name="email" type="email" class="form-control w-75" :value="email" required><br>
            <div class="alert alert-warning alert-dismissible fade show w-75" role="alert" v-if="error">
                <strong>Uh oh!</strong> The passwords don't match.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <label for="password" class="lead">Password:</label>
            <input name="password" type="password" class="form-control w-75" v-model="password" required><br>
            <label for="pwcheck" class="lead">Re-type Password:</label>
            <input name="pwcheck" type="password" class="form-control w-75" v-model="pwcheck" @input="check" required><br>
            <label class="lead">Address:</label>
            <div class="ml-2">
                <label for="streetaddress">Street:</label>
                <input name="streetaddress" type="text" :value="streetaddress" class="form-control w-50"><br>
                <label for="city">City:</label>
                <input name="city" type="text" :value="city" class="form-control w-50"><br>
                <label for="state">State:</label>
                <input name="state" type="text" :value="state" class="form-control w-50"><br>
            </div>
            <p class="lead">Administrator: {{ administrator }}</p>
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
            error: false,
            password: "",
            pwcheck: ""
        }
    },
    methods: {
        check(){
            this.password === this.pwcheck ? this.error = false : this.error = true
        }
    }
}
</script>

<style scoped>

</style>
