<div id="email_modal" class="modal fade container-fluid" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="user_mail_confirm_title">Enviar por correo</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body row">
        <input type="hidden" id="meeting_id" value="0">
        <input type="hidden" id="meeting_model" value="unset">
        <input type="hidden" id="meeting_route" value="unset">

        <div class="col-md-12 mt-2 mb-md-0">
            <label for="users">Para:</label>
            <select id="users" class="form-control selectpicker" multiple data-live-search="true" name="attendees[]" required="" title="Selecciona...">
                @foreach ($users as $id => $name)
                    <option value="{{ $id }}" {{ isset($attendees) ? (in_array($id, $attendees) ? 'selected' : '') : '' }}>{{ $name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-12 mt-2 mb-md-0">
            <label for="subject">Asunto:</label>
            <input type="text" id="subject" class="form-control" required="">

        </div>
        <div class="col-md-12 mt-2 mb-md-0">
            <label for="body">Cuerpo del correo:</label>
        <textarea id="body" name="body" class="form-control fc-admin" required=""></textarea>
        </div>

      </div>
      <div class="modal-footer">
        <div class="col-12" id="msg-success" style="display: none;">
          <div class="alert alert-success">Enviado correctamente</div>
        </div>
        <div class="col-12" id="msg-error" style="display: none;">
          <div class="alert alert-danger">
            Error al enviar, contacte al administrador del sistema
          </div>
        </div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="sendMail">Enviar</button>
      </div>
    </div>
  </div>
</div>
<script>
    CKEDITOR.replace('body');
</script>
