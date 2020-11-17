<template>
				



				<div>                        <tr><td colspan="3" class="text-cente " >
                                                      <div class="col-xs-10">

                                                                <div class="col-xs-2" id="fec">
                                                                  <button type="button"  idjogo="" class="btn btn-sm btn-xs btn-warning btn-flat fechar">
                                                                          Fechar Jogo
                                                                  </button>
                                                                </div>
                                                              
                                                                 <div class="col-xs-2">
                                                                   <span class="label label-info" style="margin-top: 1%;">A decorrer</span>
                                                                 </div>
                                                               
                                                           
                                                        </div>
                                                      <div class="col-xs-2" style="margin-top: 1%;">
                                                      <span class="label label-default  text-center"></span>
                                                    </div>
                                                  </td>
                                               
                                            </tr>
                                                  <!--tr>

                                                    <td class="col-xs-2  text-right">
                                                      
                                                      

                                                          <button type="button" idjogo="{{ $item->id }}" app="1"  class="btn btn-success btn-sm apptmp">{{ $item->eq1 }}   </button>
                                                   
                                                       
                                                          <button type="button" idjogo="{{ $item->id }}" app="1"  class="btn btn-default btn-sm apptmp">{{ $item->eq1 }}  </button>
                                                    
                                                   
                                                    </td>
                                                    <td class="col-xs-1  text-center">
                                                   
                                                 
                                                         <button type="button" idjogo="{{ $item->id }}" app="x"  class="btn btn-success btn-sm apptmp">X</button>
                                                    
                                                          <button type="button" idjogo="{{ $item->id }}" app="x"  class="btn btn-default btn-sm apptmp">X</button>
                                                     
                                                    </td>
                                                    <td class="col-xs-2">
                                               
                                                  
                                                         <button type="button" app="2"  idjogo="{{ $item->id }}" class="btn btn-success btn-sm apptmp">{{ $item->eq2 }}</button>
                                                  
                                                         <button type="button" app="2"  idjogo="{{ $item->id }}" class="btn btn-default btn-sm apptmp">{{ $item->eq2 }}</button>
                                                     
                                                    </td>

                                                  </tr-->
					

                             <infinite-loading @distance="1" @infinite="infiniteHandler"></infinite-loading>	
			             
			     

				</div>
	   
</template>

<script type="text/javascript">
	
export default{

	data() {

		return {

			jogos: [],
			jogo:{
				id: '',
				eq1: '',
				eq2:'',
				classaposta:'',
				vencedor:'',
				_aposta: '',
				situacao: '',
			    cancelado: '',
			    hora: ''
			},
			jogo_id: '',
			page: 1,
			edit: false
		}
	},


	methods: {

		infiniteHandler($state) {
				alert();
					
                 	fetch('http://localhost/api/jogo')

                    .then(response => {
                        return response.json();
                        
                    }).then(data => {
                    	console.log(data);
                    	console.log(data.length);
                    	if(data.length > 0){
	                        $.each(data, (key, value)=> {
	                        		console.log(value);
	                                this.jogos.push(value);
	                        });

                            $state.loaded();
                        } else{
                         	$state.complete();
                         }

                    });
 
                this.page = this.page + 1;
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