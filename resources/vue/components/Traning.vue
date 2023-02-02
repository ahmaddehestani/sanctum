<template>



    vue test page
    <h1 v-if="data_form.hide_name">test {{data_form.hide_name}}</h1>
    <h1 v-show="false">ahmad </h1>
    <div v-for="user in users">
        <h3>{{user.name}}</h3>
        <h3>{{user.age}}</h3>

    </div>


    <label>enter yor skill</label>
    <input type="text" v-model="data_form.title">
    <button @click="click_handler" class="btn btn-primary">+</button>
    <h3>{{data_form.title}}</h3>
    <div v-for="skill in skills " :key="index">
        <h3>{{skill}}</h3>
    </div>
</template>
<script>




export default {


    data(){
        return{
            header:'is test header',
            text:'is test text',
            data_form:{
                hide_name:false,
                title:'',
            },
            users:[
                {name:"ahmad",age:27},
                {name:"ahmad",age:7},
                {name:"ahmad",age:227},
            ],
            skills:[],

        }
    },
    methods:{
        click_handler(){
            this.data_form.hide_name=! this.data_form.hide_name
            this.skills.push(this.data_form.title)
            this.data_form.title=''

        }
    },
}

</script>
