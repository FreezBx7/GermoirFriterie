<template>
    <div id="App">
        <b-row>
            <b-col cols="9">
                <b-navbar toggleable="sm" type="light" variant="light">
                <b-navbar-toggle target="nav-text-collapse"></b-navbar-toggle>
                <b-navbar-brand>Friterie Germoir</b-navbar-brand>
                </b-navbar>
                <router-view/>
            </b-col>
        </b-row>
    </div>
</template>

<script>

    export default {
        created() {
            console.log('app');
        },
    };
</script>
