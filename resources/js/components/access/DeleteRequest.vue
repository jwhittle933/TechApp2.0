<template>
    <div class="form-group ml-5">
        <form action="">
            <label for="name">Full Name</label>
            <input class="form-control" type="text" name="name">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email">
            <button class="btn btn-danger mt-3">Delete</button>
        </form>
    </div>
</template>

<script>
export default {
    name: "DeleteRequest",
    props: ['firstname', 'lastname', 'accessid', 'email'],
}
</script>

<style scoped>

</style>
