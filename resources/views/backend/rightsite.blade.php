  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" id="sidebr">
 
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab" >
        <h3 class="control-sidebar-heading text-center">Filter</h3>
        <ul class="control-sidebar-menu">
          <li>
                 <div class="three-inline-buttons">
                        <p>
                            <label>
                                <a href="{{route('home')}}?op0=1" class="btn @if($ck0==1) btn-warning @else btn-default @endif btn-xs">Todos</a>
                            </label>

                            <label>
                                <a href="{{route('home')}}?op1=1" class="btn @if($ck1==1) btn-warning @else btn-default @endif btn-xs">Abertos</a>
                            </label>

                            <label> 
                              <a href="{{route('home')}}?op2=1" class="btn @if($ck2==1) btn-warning @else btn-default @endif  btn-xs">Fechados</a>
                            </label>

                            <label>
                                <a href="{{route('home')}}?op3=1" class="btn @if($ck3==1) btn-warning @else btn-default @endif btn-xs">Cancelados</a>
                            </label>
                        </p>
                 </div>
          </li>
        </ul>
        <ul class="control-sidebar-menu">
          <li>
            <div class="input-group">

               <span class="input-group-btn">
                <form action="{{route('home.data')}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" value="1" name="data">
                    <button type="submit" class="btn btn-default "><i class="fa fa-arrow-left"></i></button>
                </form>
                 
               </span>
               <input type="text" class="form-control text-center" value="{{ $datatmp }}" readonly="true">
               <span class="input-group-btn">
                <form action="{{route('home.data')}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" value="2" name="data">
                    <button type="submit" class="btn btn-default "><i class="fa fa-arrow-right"></i></button>
                </form>
                    
               </span>
             </div>
          </li>
        </ul>

        <h3 class="control-sidebar-heading text-center">Grupos</h3>

        <ul class="control-sidebar-menu">
          <li class="text-center">
             <input id="grupoactivo" type="hidden" value="0">
             @foreach( $grupos as $item)
               <button type="button" class="btn btn-sm btn-info  btn-xs grupo" idg="{{$item->grupo_id}}" >

                            {{ $item->grupo->nome }}
               </button>
             @endforeach
          </li>
        </ul>
       @if(Auth::user()->isinrule(['supermaster']))
          <ul class="control-sidebar-menu">
            <li class="text-center">
               <button type="button" class="btn btn-sm btn-info  btn-sm" data-toggle="modal" data-target="#exampleModal">
                              Inserir Novo Jogo
               </button>
            </li>
          </ul>
        @endif

      </div>
    
    </div>
  </aside>
   <div class="control-sidebar-bg"></div>