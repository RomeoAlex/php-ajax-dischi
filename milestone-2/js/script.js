Vue.config.devtools = true;
const app =  new Vue ({
    el:'#root',
    data: {
        message:'Hello',
        // dichiaro un array vuoto per riempirlo con i get di axios
        datas: [],
    },
    methods:{
        getDataApi: function(){

        }
    }.
    created:function() {
        for(let i = 0; i < 10; i++){
            axios.get('https://localhost:8888//php-ajax-dischi/milestone-1/database.php')
            // utilizzo arrow function
            .then((risposta) =>{
                // creo variabile per allocare il dato ricevuto dal server già ridotto all'informazione desiderata dall'array di oggetti ricevuto inizialmente
                const newMail = risposta.data.response;
                // pusho il dato nell'array dichiarato nel data di VUe
                this.datas = .push(newMail);

});
        }
    }
});