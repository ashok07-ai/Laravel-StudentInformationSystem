
  <!-- Modal -->
  <div class="modal fade" id="add-role-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLabel"><i class="fa fa-registered"></i> New Role</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        {{-- <div class="modal-body">
          ...
        </div> --}}
       

<!-- Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

{{-- modal Footer --}}
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    {!! Form::submit('Create Role', ['class' => 'btn btn-success']) !!}
  </div>
</div>
</div>
</div>
