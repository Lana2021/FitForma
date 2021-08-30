<template >
    <nav>
        <div id="app">
            <b-navbar toggleable="lg" type="dark" variant="dark">
                <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

                <b-collapse id="nav-collapse" is-nav>
                    <b-navbar-nav class="topnav">
                        <b-nav-item ><a><router-link class="active" to="/" exact>FIT FORMA</router-link></a></b-nav-item>
                        <b-nav-item ><a><router-link class="active" to="/onama" exact>O nama</router-link></a></b-nav-item>
                        <b-nav-item ><a><router-link class="active" to="/plan" exact>Plan i program</router-link></a></b-nav-item>
                    </b-navbar-nav>
                
                    <b-navbar-nav class="ml-auto" >
                        <b-nav-form right v-if="!loggedin">
                            <a><router-link to="/login" exact>Prijava</router-link></a>
                            <a><router-link to="/register" exact>Registracija</router-link></a>
                        </b-nav-form>

                        <b-nav-form v-else>
                            <a @click="mojProfil();"><router-link :to="`/vjezbeM`">Vježbe</router-link></a>
                            <a @click.prevent="logout"><router-link to="/home">Log out</router-link></a>
                        </b-nav-form>
                    </b-navbar-nav>
                </b-collapse>
            </b-navbar>
        </div>
    </nav>
</template>

<script>
    export default{
        data(){
            return{
                loggedin: 0,
                isAdmin: 0,
                user: null,
            }
        
        },
        methods: {
            logout(){
                axios.post('/logout').then(()=>{
                })
                this.$router.push('/')
                this.$router.go()
            },
            mojProfil() {
                window.location.href = "/vjezbeM"
            },
        },

        mounted() {
            axios.get('/api/user').then((res)=>{
                this.user = res.data;
                console.log(this.user)
                //If the currently logged in user is banned, then log them out and redirect to a site.
                if(this.user.isBanned == 1) {
                    axios.post('/api/logout').then(()=>{
                        alert('Zabranjen vam je pristup uslugama stranice. Za više informacija, kontaktirajte nas.');
                        this.$router.push('banned');
                        this.$router.go(); 
                    })
                }
                //If the current session has a logged in user, display the logout button. Also check if the user is an admin.
                if (this.user.name != null) {
                    this.loggedin = 1
                    if (this.user.role > 0) {
                        this.isAdmin = 1
                    }
                }
                //If the user is not logged in then the request will return an error
            }).catch(error=>{
                this.loggedin = 0
            });
        },
    }
</script>

<style scoped>
#app{
    background-color: black !important;
    overflow: hidden;
    font-size: 20px;
}
.ml-auto a{
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 10px 12px;
  text-decoration: none;
  
}
.topnav a {
  float: left;
  text-align: center;
  padding: 7px 6px;
  text-decoration: none;
  font-size: 20px;
}

.topnav a.active {
  color: white;
}
.topnav-right {
  float: right;
}
#nav {
    background-color: black;
}
</style>