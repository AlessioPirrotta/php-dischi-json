const {createApp} = Vue

createApp({
    data() {
    return {
        title: 'ciao',
        apiUrl: 'server.php',
        currentDisc: false,
        discs: []
    }
    },
    mounted(){
        this.readList()
    },
    methods: {
        readList(){
            axios.get( this.apiUrl)
            .then((response)=> {
                this.discs = response.data 
            })
        },

        showDisc(index) {
            // Ora puoi utilizzare l'indice qui come desideri
            console.log("Indice del disco cliccato:", index);
        }


    }
}).mount('#app')

