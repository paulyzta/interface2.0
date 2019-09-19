<template>
    <div>
        <header-component/>
        <main-sidebar-component/>
        <content-component/>
        <FooterComponent/>
        <control-sidebar-component/>

    </div>
</template>

<script>
    import HeaderComponent from "./header/HeaderComponent";
    import MainSidebarComponent from "./sidebar/main/MainSidebarComponent";
    import ContentComponent from "./content/ContentComponent";
    import FooterComponent from "./footer/FooterComponent";
    import ControlSidebarComponent from "./sidebar/control/ControlSidebarComponent";

    export default {
        name: "TemplateComponent",
        components: {
            HeaderComponent,
            MainSidebarComponent,
            ContentComponent,
            FooterComponent,
            ControlSidebarComponent
        }
    }
</script>

<style scoped>

</style>
