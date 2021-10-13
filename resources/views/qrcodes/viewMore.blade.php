<div class="modal fade" id="viewMore{{ $qrcode->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">View QrCode</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div>
           {{-- <center>{{ QrCode::size(250)->generate('MyNotePaper') }}</center> --}}
        </div>
            <div class="modal-body">
                <div class="container-fluid">
                  <div class="row">
                       <div class="col-md-6">
                           <div><strong>Product Name:</strong> {{ $qrcode->productname }}</div><br>
                           <div><strong>Amount: </strong> {{ $qrcode->amount }}</div><br>
                           <div><strong>Product Url: </strong> {{ $qrcode->producturl }}</div>
                       </div>
                       <div class="col-md-6">
                        {{ QrCode::size(200)->generate($qrcode->productname.", ".$qrcode->amount.", ".$qrcode->producturl) }}
                     </div>
                  </div>
                </div>
               </div>
                 <div class="modal-footer">
                     <input type="submit" value="Ok" class="btn btn-primary" data-dismiss="modal">
                 </div>
      </div>
    </div>
  </div>

