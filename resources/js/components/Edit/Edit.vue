<template>
    <div class="form-group mb-5">
        <form class="container form" action="">
            <h1 class="display-4 mt-5">Edit Your Information</h1>
            <p class="mt-3">User ID: {{ userid }}</p>
            <label for="name">Name:</label>
            <input name="name" class="form-control w-75" :value="name" required><br>
            <label for="email">Email:</label>
            <input name="email" type="email" class="form-control w-75" :value="email" required><br>
            <label for="password">Password:</label>
            <input name="password" type="password" class="form-control w-75" required><br>
            <label for="pwcheck">Re-type Password:</label>
            <input name="pwcheck" type="password" class="form-control w-75" required><br>
            <label for="">Address:</label>
            <div class="ml-2">
                <label for="streetaddress">Street:</label>
                <input name="streetaddress" type="text" class="form-control w-50" required><br>
                <label for="city">City:</label>
                <input name="city" type="text" class="form-control w-50" required><br>
                <label for="state">State:</label>
                <input name="state" type="text" class="form-control w-50" required><br>
            </div>
            <p>Administrator: {{ administrator }}</p>
            <button type="submit" class="btn btn-outline-primary">Submit</button>
        </form>
    </div>
</template>

<script>
export default {
    name: "Edit",
    props: ['userid', 'name', 'email', 'administrator', 'streetaddress']
}
</script>

<style scoped>

</style>
