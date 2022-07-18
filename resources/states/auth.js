import  { defineStore } from 'pinia';
import axios from 'axios';
import router from '../js/router';


export const authState= defineStore('authication',{
    state:()=>({
        isAuth:false,
    }),
    actions:{
     async LoginEvent(form){
        try{
            let responde = await axios.post('api/login',form);
            if(responde.data.authorisation.token){
               localStorage.setItem('token',responde.data.authorisation.token);
                this.isAuth=true;
            }
            console.log(localStorage.getItem('token'),this.isAuth);
            router.push({name:'home'})
        }catch(error){
            return error.message;
        }
    },
        checkLogin(){
            if(localStorage.getItem('token')){
                this.isAuth=true;
                router.push({name:'home'})
            }
            else{
                router.push('/login')
                this.isAuth=false;

            }
        },
        logout(){
            if(localStorage.getItem('token')){
                localStorage.setItem('token','');
                this.isAuth=false;
                router.push('/login')
            }
        }
    }

}

);



