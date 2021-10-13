<div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New Product</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="custom-file">
                        <input type="file"
                            class="custom-file-input  @error('picture') is-invalid @enderror"
                            id="customFile" name="picture" multiple >
                        <label class="custom-file-label" for="customFile">picture</label>
                        @error('picture')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div><br>

                     <label>First Name: </label>
                     <div class="row">
                         <input type="text" name="firstname" id="firstname" class="form-control">
                     </div><br>

                     <label>Last Name: </label>
                     <div class="row">
                         <input type="text" name="lastname" id="lastname" class="form-control">
                     </div><br>
                     <label>Phone number: </label>
                     <div class="row">
                         <input type="numeric" name="phone" id="phone" class="form-control">
                     </div><br>
                     <label>Email: </label>
                     <div class="row">
                         <input type="email" name="email" id="email" class="form-control">
                     </div><br>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="role" id="inlineRadio1" value="trader" checked>
                        <label class="form-check-label" for="inlineRadio1">Trader</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="role" id="inlineRadio2" value="user">
                        <label class="form-check-label" for="inlineRadio2">user</label>
                      </div>
                 </div>
               </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                     <input type="submit" value="Save" class="btn btn-primary">
                 </div>
        </form>

      </div>
    </div>
  </div>
