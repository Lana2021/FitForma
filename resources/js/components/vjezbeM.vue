<template>
    <div id="home" class="main" >
        <div class="button">
            <a class="btn btn-primary" v-if="userIsAdmin" href="/dodajVjezbu" role="button" id="dodaj">Dodaj novi post</a>
        </div>
        <div class="photos">
            <ul class="display">
                <li v-for="post in posts" :key="post.id">
                    <span><a href="#">
                        <img :id="'slika' + post.id" width="350" height="200" />
                        </a></span>
                    <span>{{post.naslov}}</span>
                    <p>{{post.tekst}}</p>
                   <!-- <p>{{post.info}}</p>-->
                    <a :id="'post_' + post.id" href="viewPost/${post.id}" target="_blank">Detaljnije</a>
                </li>                
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                user: null,
                posts: null,
                loggedIn: 0,
                userIsAdmin: 0,
            }
        },
        methods: {
            
        },
        mounted() {
            //Get data of the currently logged in user
            axios.get('/api/user').then((res)=>{
                this.user = res.data;
            });

        //Checks if the user is an admin
        axios.get(`/api/user`).then( (res) => {
            this.loggedIn = 1;
            this.user = res.data;
            if (this.user.role > 0) {
                this.userIsAdmin = 1;
                setTimeout( () => {
                  document.getElementById("dodaj").href=`/dodajVjezbu`;
                }, 0);
            }
        });

        axios.get('/api/getPosts').then((res) => {
            this.posts = res.data;
            this.posts.forEach( post => {
                //Needs to wait a negligible amount of time before trying to access the associated "<img>" and "<href>" tags because the v-for needs time to create them
                setTimeout(() => {
                    document.getElementById("slika" + post.id).src=`/images/${post.slika}`;
                    document.getElementById("post_" + post.id).href=`viewPost/${post.id}`;
                }, 0);
            })
        });
        },
    }
</script>
<style scoped>
.home{
    margin: auto;
}
.display{
  padding: 0;      
  margin: 0;       
  width: 70%;
  max-width:100%;
  min-width: 350px;
  max-height:100%;
  min-height: 400px;
  margin: auto;
  position:relative;
  border-radius:30%;
}
.photos {
    display: block;
}
.photos ul {
    list-style: none;
}
.photos ul li { 
    display: inline;
    list-style: none;
    float: left;
    padding: 20px;
    margin: 10px;
    text-align:center; 
    background-color: #fff;  
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);  
}
.photos ul li span {
    color: rgb(5, 5, 5);
}

.photos ul li a {
    display: block;
    -webkit-transition: all 0.3s linear;
    -moz-transition: all 0.3s linear;
    transition: all 0.3s linear;
}
.btn {
    position:absolute;
    top:120px;
    
}
div.button {
    position:relative;
    top:-130px;
    left:45%;
}
.a {
    text-decoration:none;
}
</style>