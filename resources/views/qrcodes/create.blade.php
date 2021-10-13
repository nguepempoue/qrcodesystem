<div class="modal fade" id="GenerateQrCode" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Generate QrCode</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div>
           {{-- <center>{{ QrCode::size(250)->generate('MyNotePaper') }}</center> --}}
        </div>
        <form action="{{ route('qrcodes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="container-fluid">
                    <label>Product Name: </label>
                     <div class="row">
                         <input type="text" name="productname" id="productname" class="form-control">
                     </div><br>
                     <label>Amount: </label>
                     <div class="row">
                         <input type="number" name="amount" id="amount" class="form-control">
                     </div><br>
                     <label>Product Url: </label>
                     <div class="row">
                         <input type="text" name="producturl" id="producturl" class="form-control">
                     </div><br>
                 </div>
               </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                     <input type="submit" value="Ok" class="btn btn-primary">
                 </div>
        </form>

      </div>
    </div>
  </div>
