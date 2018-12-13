<template>
    <div class="component">
            <h3 class="">{{ firstname }} {{ lastname }}</h3>
            <p>Access ID: {{ accessid }}</p>
            <label for="administrator">Grant Administrator Priviledges:</label>
            <input name="administrator" type="checkbox" value="True" class="mb-5"><br>
            <button type="submit" class="btn btn-success">Add</button>
            <button type="submit" class="btn btn-danger">Delete</button>
            <hr>
    </div>
</template>

<script>
export default {
    name: "Access",
    props: ['firstname', 'lastname', 'accessid'],

}
</script>

<style scoped>

</style>
