console.log('totor');

import axios from 'axios';


export default {
 
    data () {
        return {
            clients: []
        }
    },
   
    methods: {
        getDatas(){
        
            this.clients = [];
            axios.get('/api/clients')

                .then(({data}) => {
                 //   console.log(data);
                     //console.log(data.data);

                    data.data.forEach(_data => {
                       // console.log(_data);
                        this.clients.push(_data);
                    })
                    console.log(this.clients);
                    
                })


                
                .catch(error=> {
                    console.log(error);
                });
        }
    },
    created(){
        this.getDatas();
    },

    
    
}
