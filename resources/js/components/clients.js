import axios from 'axios';
import Formulaire from './Formulaire.vue';


export default {


    components: {
        Formulaire
    },

    data() {
        return {
            clients: [],
            variableParent: 'TOTO'
        }
    },

    methods: {
        getDatas() {
            this.clients = [];
            axios.get('/api/clients')

                .then(({ data }) => {
                    //   console.log(data);
                    //console.log(data.data);

                  //  console.log(data);
                    data.data.forEach(_data => {
                      
                        this.clients.push(_data);
                       // console.log(_data);
                    })
                    console.log(clients);
                })
        },
        addClient(client) {
           // console.log("client :");
            this.clients.push(client);
         //   console.log(clients);
        }
    },
    created() {
        this.getDatas();
    },

}
