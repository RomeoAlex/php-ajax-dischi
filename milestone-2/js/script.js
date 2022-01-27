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
            axios.get('https://localhost:8888//php-ajax-dischi/milestone-1/database.php')
            .then((risposta) =>{
                const data = risposta.data;
        }
    }.

    }
});