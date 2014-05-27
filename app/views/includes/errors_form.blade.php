<div class="row">
    <div class="col-md-12">
        @if ($errors->any())
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <ul class="list-unstyled">
                <% implode('', $errors->all('<li class="error"><i class="fa fa-exclamation-triangle"></i>&nbsp; :message</li>')) %>
            </ul>
        </div>
        @endif
    </div>
</div>