<div>
    <section class="module-small directorio-filtros">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <h2 class="module-title font-alt directorio-titulo">DIRECTORIO DE EMPRESAS EXPORTADORAS</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-3 mb-sm-20">
                    <input type="text" 
                        class="form-input"
                        style="width:100%" 
                        wire:model="buscar"
                        placeholder="Nombre de empresa a buscar">
                </div>
                <div class="col-sm-6 col-md-3 mb-sm-20">
                    <select class="form-control">
                        <option wire:click="sortable('razon_social')">Razon social - Ascendente</option>
                        <option wire:click="sortable('razon_social')">Razon social - Descendente</option>
                    </select>
                </div>
                <div class="col-sm-6 col-md-2">
                    <select wire:model="porPagina" class="form-control">
                        <option value="16">15 empresas</option>
                        <option value="32">30 empresas</option>
                        <option value="64">60 empresas</option>
                    </select>
                </div>
                <button wire:click="limpiar" class="col-sm-6 col-md-1" class="ml-6">
                    <span class="fa fa-eraser"> Borrar filtros</span>
                </button>
            </div>
        </div>
    </section>
    <hr class="divider-w">
    
    <section class="module-small directorio-lista">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-9 col-lg-9">
                  @if ($presentacion == 1)
                    @foreach($empresas as $emp)
                        <div class="col-sm-6 col-md-4 col-lg-4" style="height: 145px;">
                            <div class="shop-item">
                                <!--div class="shop-item-image">
                                    @if($emp->id % 2 ===0)
                                        <img src="{{asset('portal/images/exportadores/ypfb.png')}}" style="width:120px"/>
                                    @else
                                    <img src="{{asset('portal/images/exportadores/agro.jpg')}}" style="width:120px"/>
                                    @endif
                                </div-->
                                <h4 class="shop-item-title font-alt">
                                    <a href="#">{{$emp->razon_social}}</a><!--{{$emp->id}} --> 
                                </h4>
                                Email: {{$emp->email}}<br/>
                                Telf: {{$emp->telefono}}<br/>
                                Av. Arce No 2017 esq. C. Goitia
                            </div>
                        </div>
                    @endforeach
                  @else
                    <table class="table table-striped table-border checkout-table">
                      <tbody>
                        <tr>
                          <th class="hidden-xs">No.</th>
                          <th>Empresa</th>
                          <th class="hidden-xs">Email</th>
                          <th>Telefono</th>
                          <th>Direccion</th>
                        </tr>
                        @php
                          $i=($page*$porPagina)-$porPagina;
                        @endphp
                        @foreach($empresas as $emp)
                        @php
                          $i++;
                        @endphp
                        <tr>
                          <td class="hidden-xs"><a href="#">{{$i}}</a></td>
                          <td>{{$emp->razon_social}}</td>
                          <td class="hidden-xs">{{$emp->email}}</td>
                          <td>{{$emp->telefono}}</td>
                          <td>Av. Arce No 2017 esq. C. Goitia</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  @endif
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="">
                      <button class="{{$presentacion==1?'btn btn-success btn-round':'btn btn-border-d btn-round'}}" wire:click="$set('presentacion', 1)"><span class="fa fa-th-large"></span> - En grilla</button>
                      <br>
                      <button class="{{$presentacion==2?'btn btn-success btn-round':'btn btn-border-d btn-round'}}" wire:click="$set('presentacion', 2)"><span class="fa fa-table"></span> - En tabla</button>
                    </div>
                    <h5 class="widget-title font-alt">-</h5>
                    <div class="widget">
                        <h5 class="widget-title font-alt">Departamentos</h5>
                        <select class="form-control" wire:model="depto">
                            <option selected="selected" value="0">Todos</option>
                            <option value="1">Chuquisaca</option>
                            <option value="2">La Paz</option>
                            <option value="3">Cochabamba</option>
                            <option value="4">Oruro</option>
                            <option value="5">Potosi</option>
                            <option value="6">Tarija</option>
                            <option value="7">Santa Cruz</option>
                            <option value="8">Beni</option>
                            <option value="9">Pando</option>
                        </select>
                    </div>
                    {{--<h5 class="widget-title font-alt">-</h5>
                    <div class="widget">
                        <h5 class="widget-title font-alt">Sectores</h5>
                        <select class="form-control">
                            <option selected="selected">Todos</option>
                            <option>Sector Agroindustrial</option>
                            <option>Sector Pecuarios</option>
                            <option>Sector Mineras</option>
                            <option>Sector Cueros</option>
                        </select>
                    </div>--}}
                </div>
            </div>
            <div class="row">
                
            </div>
            {!!$empresas->links()!!}  
        </div>
    </section>
</div>