<div class="modal-content">
    <form class="needs-validation" wire:submit.prevent="store" autocomplete="off" method="post" >

        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">ALERTA</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            Essa função esta temporariamente indisponivel pois o servidor de dado NoSql não esta acessivel no momento.
            <br>
            [QRECAS-2143] - Solicite auxilio ao administrador do sistema.
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>

    </form>
</div>

