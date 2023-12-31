<div class="modal fade" id="confirm_delete" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    <i class="fas fa-exclamation-triangle"></i> {{ __('app.delete_record') }}?
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>{{ __('app.confirm_delete_record') }}?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    <i class="fas fa-times"></i> {{ __('Cancelar') }}
                </button>

                {!! Form::open(['route' => ['admin.types.destroy', $record->id], 'method' => 'delete', 'class' => '']) !!}
                <button type="submit" class="btn btn-danger">
                    <i class="fas fa-trash"></i> {{ __('Eliminar') }}
                </button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
