Vue.config.devtools = true;
const app =  new Vue ({
    el:'#root',
    data: {
        message:'Hello',
        // dichiaro un array vuoto per riempirlo con i get di axios
        albums: [],
    },
    methods:{
        getDataApi: function() {
            axios.get('http://localhost:8888/php-ajax-dischi/milestone-2/server.php')
            .then((response) =>{
                 this.albums = response.data;
                // console.log(response);
            
            });
        }

    },

    created: function() {
        // faccio partire la funzione al caricamento della pagina
        this.getDataApi();
    }
    
    });

    
