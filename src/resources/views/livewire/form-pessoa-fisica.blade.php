<div class="modal-content">
    <form class="needs-validation" wire:submit.prevent="store" autocomplete="off" method="post" >

        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Cadastro Proponente</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <nav>
            
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active show" id="nav-1-tab" data-toggle="tab" href="#nav-1" role="tab"
                        aria-controls="nav-1" aria-selected="true">Dados pessoais</a>
                        <a class="nav-item nav-link" id="nav-2-tab" data-toggle="tab" href="#nav-2" role="tab"
                        aria-controls="nav-2" aria-selected="true">Dados conjuge</a>
                        
                        <a class="nav-item nav-link" id="nav-3-tab" data-toggle="tab" href="#nav-3" role="tab"
                        aria-controls="nav-3" aria-selected="true">Endereço</a>
                        
                        <a class="nav-item nav-link" id="nav-4-tab" data-toggle="tab" href="#nav-4" role="tab"
                        aria-controls="nav-4" aria-selected="true">Contato</a>

                        <a class="nav-item nav-link" id="nav-5-tab" data-toggle="tab" href="#nav-5" role="tab"
                        aria-controls="nav-5" aria-selected="true">Dados contratuais</a>
                        
                        <a class="nav-item nav-link" id="nav-6-tab" data-toggle="tab" href="#nav-6" role="tab"
                        aria-controls="nav-6" aria-selected="true">Contratos vinculados</a>
                </div>

            </nav>
            <div class="tab-content ul-tab__content" id="nav-tabContent">

                <div class="tab-pane fade active show" id="nav-1" role="tabpanel" aria-labelledby="nav-1-tab">

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="nomeCompleto">Nome completo</label>
                                <input type="text" class="form-control" wire:model="nomeCompleto" id="nomeCompleto" placeholder="Nome Completo"
                                    value="" required>
                                    @error('nomeCompleto') 
                                        <div class="invalid-feedback" style="display:block">
                                            {{$message}}
                                        </div>
                                    @enderror
                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="cpf">CPF</label>
                                <input type="text" class="form-control" wire:model="cpf" id="cpf" placeholder="___.___.___-__" value=""
                                    required>
                                @error('cpf') 
                                    <div class="invalid-feedback" style="display:block">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="dataNascimento">Data Nascimento</label>
                                <input type="date" class="form-control" wire:model="dataNascimento" id="dataNascimento" value="" required>
                                @error('dataNascimento') 
                                    <div class="invalid-feedback" style="display:block">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                        </div>

                        <div class="form-row">

                            <div class="col-md-3 mb-3">
                                <label for="rg">RG</label>
                                <input type="text" class="form-control" wire:model="rg" id="rg" placeholder="RG" value="" required>
                                @error('rg') 
                                    <div class="invalid-feedback" style="display:block">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="dataEmissao">Data Emissão</label>
                                <input type="date" class="form-control" wire:model="dataEmissao" id="dataEmissao" value="" required>
                                @error('dataEmissao') 
                                    <div class="invalid-feedback" style="display:block">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="emissor">Órgão Emissor</label>
                                <input type="text" class="form-control" wire:model="emissor" id="emissor" placeholder="Órgão Emissor" value=""
                                    required>
                                    @error('emissor') 
                                    <div class="invalid-feedback" style="display:block">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="genero">Gênero</label>
                                <select class="form-control" wire:model="genero" id="genero">
                                    <option value="" disabled selected>Selecione o gênero</option>n>
                                    <option value="0">Masculino</option>
                                    <option value="1">Feminino</option>
                                </select>
                                @error('genero') 
                                    <div class="invalid-feedback" style="display:block">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                        </div>

                        <div class="form-row">

                            <div class="col-md-3 mb-3">
                                <label for="nacionalidade">Nacionalidade</label>
                                <select class="form-control" wire:model="nacionalidade" id="nacionalidade">
                                    <option value="" disabled selected>Selecione a nacionalidade</option>n>
                                    <option value="brasil">Brasil</option>
                                    <option value="jamaica">Jamaicas</option>
                                </select>
                                @error('nacionalidade') 
                                    <div class="invalid-feedback" style="display:block">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="profissao">Profissão</label>
                                <input type="text" class="form-control" wire:model="profissao" id="profissao" placeholder="Profissão" value=""
                                    required>
                                    @error('profissao') 
                                    <div class="invalid-feedback" style="display:block">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="estadoCivil">Estado Civil</label>
                                <select class="form-control" wire:model="estadoCivil" id="estadoCivil">
                                    <option value="" disabled selected>Selecione o estado civil</option>n>
                                    <option value="solteiro">Solteiro</option>
                                    <option value="casado">Casado</option>
                                </select>
                                @error('nacionalidade') 
                                    <div class="invalid-feedback" style="display:block">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                        </div>

                        <div class="custom-separator"></div>

                        <div class="form-row">

                            <div class="col-md-6 mb-3">
                                <label class="switch switch-primary mr-3">
                                    <span>Pai Desconhecido</span>
                                    <input type="checkbox" id="paiDesconhecido">
                                    <span class="slider"></span>
                                </label>
                                <input type="text" class="form-control" wire:model="nomePai" id="nomePai" placeholder="Nome do pai" value=""
                                    required>
                                    @error('nomePai') 
                                    <div class="invalid-feedback" style="display:block">
                                        {{$message}}
                                    </div>
                                @enderror
                                
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="switch switch-primary mr-3">
                                    <span>Mãe Desconhecida</span>
                                    <input type="checkbox" id="maeDesconhecido">
                                    <span class="slider"></span>
                                </label>
                                <input type="text" class="form-control" wire:model="nomeMae" id="nomeMae" placeholder="Nome da mãe" value=""
                                    required>
                                    @error('nomeMae') 
                                    <div class="invalid-feedback" style="display:block">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                        </div>
                </div>

                <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab">

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="nomeCompleto">Nome completo</label>
                                <input type="text" class="form-control" wire:model="nomeCompleto" id="nomeCompleto" placeholder="Nome Completo"
                                    value="" required>
                                    @error('nomeCompleto') 
                                        <div class="invalid-feedback" style="display:block">
                                            {{$message}}
                                        </div>
                                    @enderror
                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="cpf">CPF</label>
                                <input type="text" class="form-control" wire:model="cpf" id="cpf" placeholder="___.___.___-__" value=""
                                    required>
                                @error('cpf') 
                                    <div class="invalid-feedback" style="display:block">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="dataNascimento">Data Nascimento</label>
                                <input type="date" class="form-control" wire:model="dataNascimento" id="dataNascimento" value="" required>
                                @error('dataNascimento') 
                                    <div class="invalid-feedback" style="display:block">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                        </div>

                        <div class="form-row">

                            <div class="col-md-3 mb-3">
                                <label for="rg">RG</label>
                                <input type="text" class="form-control" wire:model="rg" id="rg" placeholder="RG" value="" required>
                                @error('rg') 
                                    <div class="invalid-feedback" style="display:block">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="dataEmissao">Data Emissão</label>
                                <input type="date" class="form-control" wire:model="dataEmissao" id="dataEmissao" value="" required>
                                @error('dataEmissao') 
                                    <div class="invalid-feedback" style="display:block">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="emissor">Órgão Emissor</label>
                                <input type="text" class="form-control" wire:model="emissor" id="emissor" placeholder="Órgão Emissor" value=""
                                    required>
                                    @error('emissor') 
                                    <div class="invalid-feedback" style="display:block">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="genero">Gênero</label>
                                <select class="form-control" wire:model="genero" id="genero">
                                    <option value="" disabled selected>Selecione o gênero</option>n>
                                    <option value="0">Masculino</option>
                                    <option value="1">Feminino</option>
                                </select>
                                @error('genero') 
                                    <div class="invalid-feedback" style="display:block">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                        </div>

                        <div class="form-row">

                            <div class="col-md-3 mb-3">
                                <label for="nacionalidade">Nacionalidade</label>
                                <select class="form-control" wire:model="nacionalidade" id="nacionalidade">
                                    <option value="" disabled selected>Selecione a nacionalidade</option>n>
                                    <option value="brasil">Brasil</option>
                                    <option value="jamaica">Jamaicas</option>
                                </select>
                                @error('nacionalidade') 
                                    <div class="invalid-feedback" style="display:block">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="profissao">Profissão</label>
                                <input type="text" class="form-control" wire:model="profissao" id="profissao" placeholder="Profissão" value=""
                                    required>
                                    @error('profissao') 
                                    <div class="invalid-feedback" style="display:block">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            

                        </div>

                        <div class="custom-separator"></div>

                        <div class="form-row">

                            <div class="col-md-6 mb-3">
                                <label class="switch switch-primary mr-3">
                                    <span>Pai Desconhecido</span>
                                    <input type="checkbox" id="paiDesconhecido">
                                    <span class="slider"></span>
                                </label>
                                <input type="text" class="form-control" wire:model="nomePai" id="nomePai" placeholder="Nome do pai" value=""
                                    required>
                                    @error('nomePai') 
                                    <div class="invalid-feedback" style="display:block">
                                        {{$message}}
                                    </div>
                                @enderror
                                
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="switch switch-primary mr-3">
                                    <span>Mãe Desconhecida</span>
                                    <input type="checkbox" id="maeDesconhecido">
                                    <span class="slider"></span>
                                </label>
                                <input type="text" class="form-control" wire:model="nomeMae" id="nomeMae" placeholder="Nome da mãe" value=""
                                    required>
                                    @error('nomeMae') 
                                    <div class="invalid-feedback" style="display:block">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                        </div>
                </div>

            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
        
    </form>
</div>

