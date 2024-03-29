import { ref } from '@vue/reactivity';
import axios from 'axios';

const getlogedUser =( ) =>{
let user = ref({})
const error = ref(null)

const logedUser = async()=>{
     await axios.get('api/getUserDetail',{
        headers:{
        Authorization: `Bearer ${localStorage.getItem('token')}`,
        Accept :'application/json',
        }

    }).then((resUser)=>{
        user.value=resUser.data;
        // console.log(user.value);

    }).catch((err)=>{
        error.value = err.message;
        // console.log(error.value);
    })
}
return {user,error,logedUser}
}
export default getlogedUser;


