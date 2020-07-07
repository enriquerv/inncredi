@if ($errors->any())
    <!-- Modal -->
    <div id="myModalAlertErrors" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-danger">
            <h4>Por favor revisa el formulario en busca de errores.</h4>
            <ul>
                @foreach($errors->all() as $error)
                    <li><h5>{{ $error }}</h5></li>
                @endforeach
            </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#myModalAlertErrors').modal('show');
        });
    </script>
@endif

@if ($message = Session::get('success'))
    <!-- Modal -->
    <div id="myModalAlertSuccess" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-success">
            <h4>{{ $message }}</h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#myModalAlertSuccess').modal('show');
        });
    </script>
@endif

@if ($message = Session::get('error'))
    <!-- Modal -->
    <div id="myModalAlertError" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-success">
            <h4>{{ $message }}</h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#myModalAlertError').modal('show');
        });
    </script>
@endif

@if ($message = Session::get('warning'))
    <!-- Modal -->
    <div id="myModalAlertWarning" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-warning">
            <h4>{{ $message }}</h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#myModalAlertWarning').modal('show');
        });
    </script>
@endif

@if ($message = Session::get('info'))
    <!-- Modal -->
    <div id="myModalAlertInfo" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-info">
            <h4>{{ $message }}</h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#myModalAlertInfo').modal('show');
        });
    </script>
@endif
