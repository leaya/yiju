@if (count($errors) >0)
    <div class="alert alert-danger">
        <h4>有错误发生：</h4>
        <ul>
            @foreach($errors->all() as $error)
                <div><i class="icon-remove-circle"></i>{{ $error }}</div>
            @endforeach
        </ul>
    </div>
@endif