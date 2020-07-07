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
                                            {{ trans('validation.attributes.state_id') }}
                                        </th>
                                        <td>
                                            {{ $item->state_id }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('validation.attributes.name') }}
                                        </th>
                                        <td>
                                            {{ $item->name }}
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
