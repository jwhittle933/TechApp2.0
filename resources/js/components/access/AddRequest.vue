<template>
    <transition name="add">
        <div class="border rounded shadow-sm w-100 p-3 ml-5">
            <div class="alert alert-warning alert-dismissible fade show" role="alert" v-if="error">
                <strong>Uh oh!</strong> The passwords don't match.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="form-group">
                <form class="d-flex" action="/newuser" method="POST">
                    <div class="">
                        <input type="hidden" name="_token" :value="csrf">
                        <label for="name" class="m-1">Full Name</label>
                        <input class="form-control m-1" type="text" name="name" :value="firstname + ' ' + lastname">
                        <label for="email" class="m-1">Email</label>
                        <input class="form-control m-1" type="email" name="email" :value="email">
                    </div>
                    <div class="ml-3">
                        <label for="password" class="m-1">Set Password</label>
                        <input class="form-control m-1" type="password" name="password" v-model="password">
                        <label class="m-1">Confirm Password</label>
                        <input class="form-control m-1" type="password" v-model="pwcheck" @input="check">
                        <label class="m-1" for="administrator">Grant Administrator Priviledges:</label>
                        <input type="checkbox" name="administrator" value="True">
                        <button type="submit" class="btn btn-success m-2">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </transition>
</template>

<script>
export default {
    name: "AddRequest",
    props: ['firstname', 'lastname', 'email'],
    data(){
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
.add-enter-active, .add-leave-active {
    transition: opacity .1s;
}
.add-enter, .add-leave-to {
    opacity: 0;
}
</style>