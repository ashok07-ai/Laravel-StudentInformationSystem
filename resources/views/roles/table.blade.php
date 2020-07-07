<div class="table-responsive">
    <table class="table" id="roles-table">
        <thead>
            <tr>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($roles as $role)
            <tr>
                <td>{{ $role->name }}</td>
                <td>
                    {!! Form::open(['route' => ['roles.destroy', $role->role_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('roles.show', [$role->role_id]) }}" class='btn btn-warning btn-md' style="padding-left: 10px; margin-right: 5px;"><i class="glyphicon glyphicon-eye-open"></i>&nbsp;&nbsp;&nbsp;VIEW</a>
                        <a href="{{ route('roles.edit', [$role->role_id]) }}" class='btn btn-info btn-md' style= "padding-left: 10px; margin-right: 5px;"><i class="glyphicon glyphicon-edit">&nbsp;EDIT</i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash">&nbsp;DELETE</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-md', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
