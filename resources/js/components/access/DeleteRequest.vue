<template>
    <transition name="delete">
        <div class="form-group border rounded shadow-sm p-3 ml-5">
            <form action="/newuser/delete" method="POST">
                <h4 class="">Cancel {{ firstname}} {{ lastname }}'s request?</h4>
                <input type="hidden" name="_token" :value="csrf">
                <input type="hidden" name="firstname" :value="firstname">
                <input type="hidden" name="lastname" :value="lastname">
                <input type="hidden" name="email" :value="email">
                <input type="hidden" name="accessid" :value="accessid">
                <button type="submit" class="btn btn-danger mt-3">Delete</button>
            </form>
        </div>
    </transition>
</template>

<script>
export default {
    name: "DeleteRequest",
    props: ['firstname', 'lastname', 'accessid', 'email'],
    data() {
        return {
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        }
    }
}
</script>

<style scoped>
.delete-enter-active, .delete-leave-active {
    transition: opacity .1s;
}
.delete-enter, .delete-leave-to {
    opacity: 0;
}
</style>
