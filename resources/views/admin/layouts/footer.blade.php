<div class="modal fade" id="Delete" role="dialog">
    <div class="modal-dialog">

        <!-- Modal Delete-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Delete</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete?</p>
            </div>
            <div class="modal-footer">
                <form id="formDelete" method="POST">

                    {{method_field('delete')}}
                    {{csrf_field()}}
                    <button class="btn btn-danger" type="submit">Delete</button>

                </form>
                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                <button type="button" class="btn btn-default" data-id="" data-dismiss="modal">Cancel</button>
            </div>
        </div>

    </div>
</div>



<div class="modal fade" id="Message" role="dialog">
    <div class="modal-dialog">

        <!-- Modal Message-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Message</h4>
            </div>
            <div class="modal-body">
                @isset($message)
                <p>{{$message}}</p>
                @endisset
            </div>
        </div>

    </div>
</div>


@isset($message)
<script>
$('#Message').modal('show');
</script>
@endisset

<script>
function deleterow(action) {

    $('#Delete').modal('show');
    $('#formDelete').attr('action', action);
}
</script>