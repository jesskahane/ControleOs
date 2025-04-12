<div class="modal fade" id="alterar_tipo">
    <div class="modal-dialog">
        <div class="modal-content bg-warning">
            <div class="modal-header">
                <h4 class="modal-title">Alterar Tipo</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">


                <input type="hidden" name="id_alterar" id="id_alterar">
                <div class="form-group">
                    <label>Tipo de equipamento</label>
                    <input class="form-control obg" name="tipo_alterar" id="tipo_alterar" placeholder="Digite aqui...">
                </div>



            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Cancelar</button>
                <button class="btn btn-outline-dark" name="btn_alterar" onclick="return NotificarCampos('formAlt')">Gravar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>