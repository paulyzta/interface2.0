<template>
    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
            Links para as redes sociais...?
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; {{year}} <a href="http://instant.com.br/">Instant Solutions</a></strong> All rights reserved.
    </footer>
</template>

<script>
    export default {
        name: "ContentComponent",
        data: function () {
            return {
                year: null
            }
        },
        created() {
            let now = new Date();
            this.year = now.getFullYear();
        }
    }
</script>

<style scoped>

</style>
