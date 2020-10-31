<template>
	

				<div>
					         <div class="box box-primary" v-for="item in articles">
                          
                              <div class="box-header with-border">
                                <h3 class="box-title">{{ item.title }}</h3>
                              </div>

                              <div class="box-body">
                                
                              </div>
                            </div>
					
			        <div class="blog-list-item" v-for="item in articles">
			            <!--blogmage--> 
			            <a v-bind:href="item.link">
			                <div class="blog-item-img mb-5 hover-effect">
			                   <img v-bind:src=" item.path ">
			                </div>
			            </a>
			            <!--blog contetn-->
			            <div class="blog-item-content">
			                <span class="category third-color tex">{{ item.category }}</span> - <span class="date">{{ item.created_at }}</span>
			                <h4 class="mt-2 mb-3"><a v-bind:href="item.link"></a></h4>
			                <p class="mb-4">{{ item.title }}</p>
			                <!--button-->
			                <a v-bind:href="item.link" class="btn btn-large btn-gradient btn-rounded" target="_blacnk"> Ver Mais </a>
			            </div>
			            
			        </div>

			                        <!--pagination-->
			        <ul class="blog-pagination p-0 list-unstyled text-center text-md-left">
			            <li v-bind:class="[{disable: !pagination.prev_page_url}]"><a href="#."      @click="fetchArticles(pagination.prev_page_url)"><i class="fas fa-angle-left" aria-hidden="true"></i></a></li>
			            <!--li><a href="#.">1</a></li>
			            <li class="active"><a href="#.">2</a></li>
			            <li><a href="#.">3</a></li>
			            <li><a href="#.">...</a></li>
			            <li><a href="#.">7</a></li-->
			            <li v-bind:class="[{disable: !pagination.next_page_url}]"><a href="#" @click="fetchArticles(pagination.next_page_url)"><i class="fas fa-angle-right" aria-hidden="true"></i></a></li>

			        </ul>
			        <span>Página {{ pagination.current_page }} de {{ pagination.last_page}}</span>

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
			pagination: {},
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
			console.log(res);
			var link = 'https://blog.feelbit.pt/api/articles';

			if(res[0] === 'http:'){
				var link = 'http://localhost/feel-blog/api/articles';
			}
			page_url = page_url || link
			fetch(page_url)
			.then(res => res.json())
			.then(res => {
				this.articles = res['data'];

				vm.makePagination(res.meta, res.links);
			})
			.catch(err => console.log(err));
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