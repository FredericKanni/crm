import axios from 'axios';

export default {

    props: ['variableEnfant'],
    data() {
        return {
            adresse: null,
            code_postal: null,
            ville: null,


            nom: null,
            nometp: null,
            prenom: null,

            tel: null,
            mail: null,
            poste: null,
        }
    },

    methods: {
        formulaireClient(e) {
            e.preventDefault();
            axios.post('/api/clients/', {
                adresse: this.adresse,
                code_postal: this.code_postal,
                ville: this.ville,

                nom:  this.nom,
                nometp: this.nometp,
                prenom: this.prenom,
    
                tel: this.tel,
                mail: this.mail,
                poste: this.poste,
            })
                .then(({ data }) => {
                    console.log("data:");
                    console.log(data);
                    this.$emit('formulaireClient',data.data);
                })
        }
    },
    // created() {
    //     console.log('TOTO');
    // },


};