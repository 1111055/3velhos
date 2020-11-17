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
                                 	<span>Fonte:  {{ item.fonte }} </span>
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
				created_at: '',
			    fonte: '',
			},
			article_id: '',
			page: 1,
			edit: false
		}
	},


	methods: {

		infiniteHandler($state) {
					
                 	fetch('http://velhos3.herokuapp.com/api/articles?page='+this.page)

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