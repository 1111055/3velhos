<template>

<div>
                <div class="widget d-flex bg-light mb-4">
                    <input class="search" placeholder="Search.." type="text">
                    <a href="#." class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></a>
                </div>
                <!--recent post-->
                <div class="widget bg-light">
                    <h5 class="mb-4">Recent Post</h5>
                    <!--recent post item-->
                    <div class="recent-post d-flex">
                        <img src="" alt="image">
                        <div class="text alt-font">
                            <a href="#.">At the end of the day go forward</a>
                            <span class="date">August 23, 2019</span>
                        </div>
                    </div>
                    <!--recent post item-->
                    <div class="recent-post d-flex">
                        <img src="" alt="image">
                        <div class="text alt-font">
                            <a href="#.">At the end of the day go forward</a>
                            <span class="date">August 23, 2019</span>
                        </div>
                    </div>
                    <!--recent post item-->
                    <div class="recent-post d-flex">
                        <img src="" alt="image">
                        <div class="text alt-font">
                            <a href="#.">At the end of the day go forward</a>
                            <span class="date">August 23, 2019</span>
                        </div>
                    </div>
                </div>
                <!--category-->
                <div class="widget bg-light">
                    <h5 class="mb-4">Category</h5>
                    <!--list-->
                    <ul class="list-unstyled blog-category m-0 alt-font">
                        <li><a href="#.">Corporate <span class="float-right">113</span></a></li>
                        <li><a href="#.">Creative <span class="float-right">87</span></a></li>
                        <li><a href="#.">Finance <span class="float-right">66</span></a></li>
                        <li><a href="#.">Digital <span class="float-right">98</span></a></li>
                        <li><a href="#.">Onepage <span class="float-right">47</span></a></li>
                        <li><a href="#.">Single Post <span class="float-right">76</span></a></li>
                    </ul>
                </div>
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
			page_url = page_url || '/feel-blog/api/articles'
			fetch(page_url)
			.then(res => res.json())
			.then(res => {
				console.log(res['data']);
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
				var link = '/feel-blog/api/articles/' + $id;

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