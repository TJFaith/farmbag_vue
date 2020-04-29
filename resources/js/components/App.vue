<template>
    <div>
        <h1>Vue Router Demo App</h1>

        <p>
           <router-link to="/" class="nav-item nav-link">Home</router-link>
            <router-link to="/Hello" class="nav-item nav-link">Hello</router-link>
        </p>

        <div class="container">
            <router-view></router-view>
        </div>
    </div>
</template>
<script>
    export default {}
</script>