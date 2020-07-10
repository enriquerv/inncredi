<div id="tab1" class="tab-pane fade show active">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th>
                                            ID
                                        </th>
                                        <td>
                                            {{ $item->id }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Nombre
                                        </th>
                                        <td>
                                            {{ $item->name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Versión
                                        </th>
                                        <td>
                                            {{ $item->version }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Área
                                        </th>
                                        <td>
                                            {{ $item->area_name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Contacto Fábrica RAK
                                        </th>
                                        <td>
                                            {{ $item->contact_fsr_name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Cliente
                                        </th>
                                        <td>
                                            {{ $item->client }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Asistentes
                                        </th>
                                        <td>
                                            <ul>
                                                @foreach ($attendees_names as $att_name)
                                                    <li>{{ $att_name }}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Temas tratados
                                        </th>
                                        <td>
                                            {!! $item->topics !!}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Compromisos Fábrica de Soluciones
                                        </th>
                                        <td>
                                            {!! $item->commitments_fsr !!}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Compromisos cliente
                                        </th>
                                        <td>
                                            {!! $item->commitments_client !!}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Pendientes Fábrica de Soluciones
                                        </th>
                                        <td>
                                            {!! $item->pending_fsr !!}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Pendientes cliente
                                        </th>
                                        <td>
                                            {!! $item->pending_client !!}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                           Comentarios extra
                                        </th>
                                        <td>
                                            {!! $item->extra_comments !!}
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 mt-4 text-right">
            <button class="btn btn-primary" data-toggle="modal" data-target="#email_modal">Enviar minuta</button>
        </div>
    </div>
</div>