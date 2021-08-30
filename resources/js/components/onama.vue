<template>
<div class="bg-img">
<div class="container mx-auto mt-5 col-md-10 mt-100">
    <div class="h">
        <div class="title">Kako smo došle na ideju?</div>
        <p> Potaknute trenutnom situacijom covid-19 virusa došle smo na ideju da napravimo 
            aplikaciju koja omogućuje ljudima da vježbaju od kuće,na način da prate određene vježbe po svom izboru. </p>
           
    </div>

<div class="row" style="justify-content: center">
        <div class="card col-md-3 mt-100">
            <div class="card-content">
                <div class="card-body p-0">
                    <div class="profile"> <img src="/images/l.jpg"> </div>
                    <div class="card-title"> Lana Pajević<br /></div>
                    <div class="card-subtitle">
                        <p> <small class="text-muted">Treća sam godina FSRE fakulteta, smjer računarstvo.Željela bih se baviti programiranjem u budućnosti. Za sada pokušavam kroz studij prikupiti što više znanja o ovoj struci te tako biti sretna i zadovoljna poslom koji jednog dana budem radila.</small> </p>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="card col-md-3 mt-100">
            <div class="card-content">
                <div class="card-body p-0">
                    <div class="profile"> <img src="/images/a.jpg"> </div>
                    <div class="card-title"> Ankica Katić<br /></div>
                    <div class="card-subtitle">
                        <p> <small class="text-muted"> Imam 22 godinu. Studentica sam treće godine računarstva.Ovaj projekt je tek početak onoga što učim 
                            
                            i što me zanima. Nadam se da ću u budućnosti ovo što bolje  usavršiti te  sve buduće projekte lako savladati. </small> </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ft">
        <div class="btn btn-outline"><a target="_blank" href="https://drive.google.com/file/d/1OmzNvh17Et8-cLFbtTJluTh3-2BA2Q-S/view">LINK VIZIJE</a></div>
    </div>
    <div class="header">
        <div class="title">TEHNOLOGIJE</div>
    </div>
      <div class="tehnologije">
            <div class="logos">
                <b-row>
                <b-col><img src="/images/b.png" >
                <p>BOOTSTRAP-VUE</p>
                </b-col>
                <b-col><img src="/images/Vuejs.png" >
                <p>VUE JS</p>
                </b-col>
                <b-col><img src="/images/laravel.jpg" >
                <p>LARAVEL</p>
                </b-col>
                </b-row>
            </div>
      </div>             
  </div>  
</div>
</template>


<style scoped>
.logos{
  top: 50px;
  padding: 15px 15px 0px 15px;
  text-align: center;
}
.logos img{
  margin:auto;
  border-radius: 20%;
  display: block;
  min-width: 100px;
  max-width: 100px;
  min-height: 100px;
  max-height: 100px;
}
.button{
    position: absolute;
}
.container {
    background-color: white;
    text-align: center;
    border-radius: 20px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, .2);
    margin-bottom: 50px
}
.title {
    font-size: 25px;
    font-weight: 100
}

.icon {
    position: relative;
    bottom: 11px
}

.mt-100 {
    margin-top: 100px
}

.profile img {
    width: 100px;
    height: 100px;
    border-radius: 50%
}

.card {
    border-radius: 15px;
    margin-left: 30px;
    margin-right: 30px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, .2)
}

.card-body {
    position: relative;
    bottom: 35px
}

.btn {
    background-color: grey;
    border: none;
    color: #fff
}

.btn:hover {
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05);
    color: #fff
}

.header title{
    padding-top: 40px;
    margin-left: 30%;
}
.h {
    padding-top: 40px;
    margin-left: 10%;
}
.bg-img {
    height: 1000px;
    width: 100%; 
}
</style>

