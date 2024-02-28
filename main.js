const {createApp} = Vue

createApp({
    data() {
    return {
        title: 'ciao',
        apiUrl: 'server.php',
        currentDiscIndex: null,
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
            this.currentDiscIndex= index
            console.log(this.currentDiscIndex);
        },

        reloadPage() {
            location.reload();
        }
        
    


    }
}).mount('#app')

