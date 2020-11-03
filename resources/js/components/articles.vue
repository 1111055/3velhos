<template>
				



				<div>
					       <div class="box box-primary" v-for="item in articles">
                          
                              <div class="box-header with-border">
                                <h3 class="box-title">{{ item.title }}</h3>
                              </div>

                              <div class="box-body">
				                  <img v-bind:src=" item.path "  class="rounded responsive zoomA">
				                  <div class="blog-item-content">
					              <span v-html="item.body"></span> 
					            </div>
                              </div>
                                 <div class="box-footer">
                                 	<span>Fonte: </span>
                                 </div>
                            </div>
					

                             <infinite-loading @distance="1" @infinite="infiniteHandler"></infinite-loading>	
			             
			     

				</div>
	   
</template>

<script type="text/javascript">
	
export default{

	data() {

		return {

			articles: [],
			article:{
				id: '',
				title: '',
				body:'',
				path:'',
				link:'',
				category: '',
				created_at: ''
			},
			article_id: '',
			page: 1,
			edit: false
		}
	},

	created() {
			this.fetchArticles();
	},

	methods: {
		fetchArticles(page_url){
			let vm = this;
			var res = window.location.href.split("/");
			
		//	var link = 'https://blog.feelbit.pt/api/articles';

		//	if(res[0] === 'http:'){
				var link = 'http://localhost/3velhos/api/articles';
		//	}
			page_url = page_url || link
			fetch(page_url)
			.then(res => res.json())
			.then(res => {
				this.articles = res['data'];

				vm.makePagination(res.meta, res.links);
			})
			.catch(err => console.log(err));
		},
		infiniteHandler($state) {
     
                 	fetch('http://localhost/3velhos/api/articles?page='+this.page)

                    .then(response => {
                        return response.json();
                        
                    }).then(data => {
                    	console.log(data);
                    	console.log(data.data.length);
                    	if(data.data.length > 0){
	                        $.each(data.data, (key, value)=> {
	                        		console.log(value);
	                                this.articles.push(value);
	                        });

                            $state.loaded();
                        } else{
                         	$state.complete();
                         }

                    });
 
                this.page = this.page + 1;
            },
		makePagination(meta, links){
			let pagination = {

				current_page: meta.current_page,
				last_page: meta.last_page,
				next_page_url: links.next,
				prev_page_url: links.prev,
			}

			this.pagination = pagination;

		},
		deleteArticle($id){

			if(confirm("Tem a certeza?")){
				var link = '/api/articles/' + $id;

				fetch(link, {
					method: 'delete'

				})
				.then(res => res.json())
				.then(data => {
					alert('Removido com sucesso');
					this.fetchArticles();

				})
				.catch(err => console.log(err));
			}

		}
	}
}

</script>