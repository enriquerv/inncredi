
<div class="form-group form-row">
    <div class="col-md-12">
        <div class="row mb-3">
            <div class="col-md-3 mb-3 mb-md-0">
                <label for="date">ID:</label>
                <input id="id" type="text" class="form-control" readonly="" name="id" value="1" required="">
            </div>
            <div class="col-md-3 mb-3 mb-md-0">
                <label for="date">Fecha:</label>
                {!! Form::text('created_at', date('Y-m-d H:i:s'), ['id' => 'date', 'class' => 'form-control', 'required', 'readonly']) !!}
            </div>
            <div class="col-md-3 mb-3 mb-md-0">
                <label for="date">Nombre:</label>
                 {!! Form::text('name', old('name'), ['id' => 'name', 'class' => 'form-control', 'required']) !!}
            </div>
            <div class="col-md-3 mb-3 mb-md-0">
                <label for="version">Versión:</label>
                {!! Form::text('version', old('version'), ['id' => 'version', 'class' => 'form-control', 'required']) !!}
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3 mb-3 mb-md-0">
                <label for="area">Área:</label>
                <select id="area_id" class="form-control" name="area_id" required="">
                    <option value="null" selected="">Selecciona...</option>
                    @foreach ($areas as $id => $name)
                        <option value="{{ $id }}" {{ isset($item) ? ($item->area_id == $id ? 'selected' : '') : '' }}>{{ $name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3 mb-3 mb-md-0">
                <label for="contact_fsr_id">Asistentes:</label>
                <select id="contact_fsr_id" class="form-control selectpicker" multiple data-live-search="true" name="attendees[]" required="" title="Selecciona..." tabindex="-98">
                    @foreach ($users as $id => $name)
                        <option value="{{ $id }}" {{ isset($attendees) ? (in_array($id, $attendees) ? 'selected' : '') : '' }}>{{ $name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3 mb-3 mb-md-0">
                <label for="contact_fsr_id">Contacto Inncredi:</label>
                <select id="contact_fsr_id" class="form-control" name="contact_fsr_id" required="">
                    <option value="null" selected="" disabled="">Selecciona...</option>
                    @foreach ($users as $id => $name)
                        <option value="{{ $id }}" {{ isset($item) ? ($item->contact_fsr_id == $id ? 'selected' : '') : '' }}>{{ $name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3 mb-3 mb-md-0">
                <label for="contact_amc_customs">Cliente:</label>
                {!! Form::text('client', old('client'), ['id' => 'client', 'class' => 'form-control', 'required']) !!}
            </div>
        </div>
    </div>
</div>

<div class="form-group form-row">
    <div class="col-md-12">
        <label for="assistants_client">Asistente(s) cliente:</label>
        <textarea id="assistants_client" name="assistants_client" class="form-control fc-admin" required="">{{ isset($item) ? $item->assistants_client : '' }}</textarea>
    </div>
</div>

<div class="form-group form-row">
    <div class="col-md-12">
        <label for="topics">Temas tratados:</label>
        <textarea id="topics" name="topics" class="form-control fc-admin" required="">{{ isset($item) ? $item->topics : '' }}</textarea>
    </div>
</div>

<div class="form-group form-row">
    <div class="col-md-12">
        <label for="commitments_fsr">Compromisos Inncredi:</label>
        <textarea id="commitments_fsr" name="commitments_fsr" class="form-control fc-admin" required="">{{ isset($item) ? $item->commitments_fsr : '' }}</textarea>
    </div>
</div>

<div class="form-group form-row">
    <div class="col-md-12">
        <label for="commitments_client">Compromisos Clientes:</label>
        <textarea id="commitments_client" name="commitments_client" class="form-control fc-admin" required="">{{ isset($item) ? $item->commitments_client : '' }}</textarea>
    </div>
</div>

<div class="form-group form-row d-none">
    <div class="col-md-12">
        <label for="pending_fsr">Pendientes Inncredi:</label>
        <textarea id="pending_fsr" name="pending_fsr" class="form-control fc-admin" required="">{{ isset($item) ? $item->pending_fsr : '' }}</textarea>
    </div>
</div>

<div class="form-group form-row d-none">
    <div class="col-md-12">
        <label for="pending_client">Pendientes Cliente:</label>
        <textarea id="pending_client" name="pending_client" class="form-control fc-admin" required="">{{ isset($item) ? $item->pending_client : '' }}</textarea>
    </div>
</div>

<div class="form-group form-row">
    <div class="col-md-12">
        <label for="extra_comments">Comentarios Extra:</label>
        <textarea id="extra_comments" name="extra_comments" class="form-control fc-admin" required="">{{ isset($item) ? $item->extra_comments : '' }}</textarea>
    </div>
</div>

