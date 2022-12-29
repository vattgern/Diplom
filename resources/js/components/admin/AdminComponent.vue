<template>
    <section class="admin">
        <AdminSideBar></AdminSideBar>
        <div class="admin-view">
            <div class="admin-view-header">
                <div class="admin-view-header-search">
                    <input type="search" name="search" id="search" placeholder="Поиск...">
                </div>
                <div class="admin-view-header-profile">
                    <img src="" alt="">
                    <p>Admin</p>
                </div>
            </div>
            <div class="admin-view-body">
                
            </div>
        </div>
    </section>
</template>

<script>
    import AdminSideBar from './AdminSideBar.vue';
    export default {
        components:{
            AdminSideBar,
        },
    }
</script>

<style scoped>
    .admin{
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: row;
    }
    .admin-view{
        width: 85vw;
        height: 100vh;
        border: 2px red solid;
        display: flex;
        flex-direction: column;
    }
    .admin-view-header{
        width: 100%;
        height: 100px;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: flex-end;
    }
    .admin-view-header-profile{
        height: 100%;
        display: flex;
        flex-direction: row;
        align-items: center;
        color: white;
        gap: 20px;
        margin-right: 5%;
    }
    .admin-view-header-profile img{
        width: 50px;
        height: 50px;
        border-radius: 100px;
        background-color: white;
    }
    .admin-view-header-profile p{
        font-family: "Montserrat", sans-serif;
        letter-spacing: 2px;
    }
    .admin-view-header-search{
        height: 100%;
        width: 75%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .admin-view-header-search input{
        width: 75%;
        height: 65%;
        padding-left: 2.5%;
        border-radius: 20px;

        outline: none;
        border: 2px #FF7E00 solid;
        color: white;
        background: transparent;

        font-family: "Montserrat", sans-serif;
        letter-spacing: 2px;
        font-size: 16px;
    }
    .admin-view-header-search input::placeholder{
        color: white;
        font-family: "Montserrat", sans-serif;
        font-size: 16px;
    }
</style>