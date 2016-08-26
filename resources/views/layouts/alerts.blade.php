<div class="row">
    <div class="col-xs-12" id="alert">
        @if( session('message') )
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Success!</h4>
            <strong>{{session('item')}}</strong> {{session('message')}}
        </div>
        @endif
        @if( session('error') )
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-ban"></i> Error!</h4>
            <strong>{{session('item')}}</strong> {{session('error')}}
        </div>
        @endif
    </div>
</div>
