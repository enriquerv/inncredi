<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>{{ env('APP_NAME') }} @yield('title')</title>

        {{-- Admin CSS --}}
        {{ Html::style('assets/css/admin/styles.css') }}

        {{-- Custom CSS --}}
        {{ Html::style('assets/css/custom.css') }}
        {{ Html::style('assets/css/core.css') }}

        {{-- DataTables --}}
        {{ Html::style('https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css') }}

        {{-- FormValidation CSS file --}}
        {{ Html::style('assets/plugins/formvalidation/dist/css/formValidation.min.css') }}

        {{-- DateTimePicker CSS file --}}
        {{ Html::style('https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css') }}

        {{-- TimePicker CSS file --}}
        {{ Html::style('https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css') }}

        {!! Html::style("https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css") !!}

        {{-- Font Awesome --}}
        {!! Html::script("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js") !!}


        {{-- Select Picker --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

        {!! Html::script("https://cdn.ckeditor.com/4.10.0/basic/ckeditor.js") !!}
        {!! Html::style("https://cdn.ckeditor.com/4.10.0/basic/skins/moono-lisa/editor_gecko.css?t=I63C") !!}
        {!! Html::script("https://cdn.ckeditor.com/4.10.0/basic/config.js?t=I63C") !!}
        {!! Html::script("https://cdn.ckeditor.com/4.10.0/basic/lang/es-mx.js?t=I63C") !!}
        {!! Html::script("https://cdn.ckeditor.com/4.10.0/basic/styles.js?t=I63C") !!}


        <script>
            var direction = "{{ env('APP_URL') }}";
        </script>

        @yield('styles')
    </head>

    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            @include('admin.layout.menus.logo')
            <!-- Navbar-->

            @include("admin.layout.menus.top")
        </nav>


        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                @include("admin.layout.menus.principal")
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        @yield('card-breadcrumb')

                        @if( !Request::is("admin") )
                          <div class="row">
                                <div class="col-md-12">
                                    <div class="card mb-4">
                                        <div class="card-header">@yield("card-title")</div>
                                        <div class="card-body">@yield("card-body")</div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                      @include("admin.layout.menus.footer")
                    </div>
                </footer>
            </div>
        </div>

        {{-- jQuery --}}
        {{ Html::script("https://code.jquery.com/jquery-3.4.1.min.js") }}
        {{ Html::script('https://code.jquery.com/ui/1.12.1/jquery-ui.js') }}

        {{-- Popper --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>


        {{-- Bootstrap Core JavaScript --}}
        {{ Html::script("https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js") }}

        {{-- Custom Theme JavaScript --}}
        {{ Html::script("assets/js/scripts.js") }}

        {{ Html::script("https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js") }}
        {{-- {{ Html::script("assets/demo/chart-area-demo.js") }} --}}
        {{-- {{ Html::script("assets/demo/chart-bar-demo.js") }} --}}
        {{ Html::script("https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js") }}
        {{ Html::script("https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js") }}
        {{-- {{ Html::script("assets/demo/datatables-demo.js") }} --}}

        {{-- Bootstrap Wizard --}}
        {{ Html::script('assets/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}

        {{-- DataTables --}}
        {{ Html::script('https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js') }}
        {{ Html::script('https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js') }}

        {{-- FormValidation plugin and the class supports validating Bootstrap form --}}
        {{ Html::script("assets/plugins/formvalidation/dist/js/formValidation.min.js") }}
        {{ Html::script("assets/plugins/formvalidation/dist/js/framework/bootstrap.min.js") }}
        @if(\App::getLocale() == 'es')
            {{ Html::script("assets/plugins/formvalidation/dist/js/language/es_ES.js") }}
        @else
            {{ Html::script("assets/plugins/formvalidation/dist/js/language/en_US.js") }}
        @endif

        {{-- DateTimePicker plugin --}}
        {{ Html::script("assets/plugins/datetimepicker/datepicker.js") }}
        @if(\App::getLocale() == 'es')
            {{ Html::script("assets/plugins/datetimepicker/i18n/datepicker-es.js") }}
        @endif

        {{-- Select picker --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>



        {{-- TimePicker plugin --}}
        {{ Html::script("https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js") }}
        {{ Html::script("assets/plugins/timepicker/timepicker.call.js") }}

        {{-- CkEditor plugin --}}
        {{ Html::script("assets/plugins/ckeditor/ckeditor.js") }}
        {{-- Include CKEditor and jQuery adapter --}}
        {{ Html::script("assets/plugins/ckeditor/adapters/jquery.js") }}

        {{-- Google Maps --}}
        {{-- {{ Html::script("https://maps.googleapis.com/maps/api/js?key=". env('GOOGLE_MAPS_KEY') ."&libraries=places&callback=initAutocomplete", ['async', 'defer']) }} --}}
        {{-- {{ Html::script("assets/plugins/google-maps/google_maps.js") }} --}}

        <script>
            $(".prod_price, .prod_qty, .p-amount, .prod_amount, .product_cost").each(function(index, el) {
                var val = addCommas($(this).val());
                var valHtml = addCommas($(this).html());
                $(this).val(val);
                $(this).html(valHtml);
            });

            $(document).on("keyup",".prod_price, .prod_qty, .product_cost", function(){
                str = $(this).val();
                str = str.toString();
                val = str.replace(/,/g , "");
                commas = addCommas(val);
                $(this).val(commas);

                $("#formValidation").formValidation('revalidateField', $(this).attr("name"));
            });

            function addCommas(nStr) {
                nStr += '';
                var x = nStr.split('.');
                var x1 = x[0];
                var x2 = x.length > 1 ? '.' + x[1] : '';
                var rgx = /(\d+)(\d{3})/;
                while (rgx.test(x1)) {
                    x1 = x1.replace(rgx, '$1' + ',' + '$2');
                }
                return x1 + x2;
            }

            function addDecimals(nStr) {
                nStr += '';
                var x = nStr.split('.');
                var x1 = x[0];
                if(x.length == 1){
                    var x2 = ".00";
                }if(x.length > 1){
                    if(x[1].length == 1){
                        var x2 = "."+x[1]+"0";
                        // console.log(x2);
                    }if(x[1].length >= 2){
                        var x2 = "."+x[1].substr(-x[1].length, 2);
                    }
                }
                var rgx = /(\d+)(\d{3})/;
                while (rgx.test(x1)) {
                    x1 = x1.replace(rgx, '$1' + ',' + '$2');
                }
                return x1 + x2;
            }
        </script>

        @yield('scripts')

        <script>
            $('.selectpicker').selectpicker({
                dropupAuto: false
            });
        </script>

        @include('notifications')
    </body>
</html>
