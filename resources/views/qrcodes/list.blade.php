

<div class="table-responsive mailbox-messages">

    <table class="table table-hover table-striped" id="datatable">
      <tbody>
        <tr>
            <th>
            <div class="icheck-primary">
                <input type="checkbox" value="" id="check1">
                <label for="check1"></label>
            </div>
            </th>
            <th class="mailbox-star">Id</th>
            <th class="mailbox-star">Qrcode</th>
            <th class="mailbox-name">Product Name</th>
            <th class="mailbox-name">Amount</th>
            <th class="mailbox-name">Product Url</th>
            <th class="mailbox-name">Action</th>
        </tr>
        @foreach ($qrcodes as $qrcode)
        <tr>
            <td>
            <div class="icheck-primary">
                <input type="checkbox" value="" id="check1">
                <label for="check1"></label>
            </div>
            </td>
            <td class="mailbox-star">{{ $qrcode->id }}</td>
            {{-- <td class="mailbox-star">{!! QrCode::format('png')->size(250)->generate($qrcode->productname.", ".$qrcode->amount.", ".$qrcode->producturl) !!}</td> --}}
            <td class="mailbox-star">{{ QrCode::size(100)->generate($qrcode->productname.", ".$qrcode->amount.", ".$qrcode->producturl) }}</td>
            <td class="mailbox-name">{{ $qrcode->productname }}</td>
            <td class="mailbox-name">{{ $qrcode->amount }}</td>
            <td class="mailbox-name">{{ $qrcode->producturl }}</td>
            <td>
             <div class="row">
                    <a class=" btn btn-default btn-sm" data-toggle="modal"
                    data-target="#updateqrcode{{ $qrcode->id }}"><i  class="far fa-edit"></i></a>
                <button type="submit" data-toggle="modal" data-target="#viewMore{{ $qrcode->id }}" class="btn btn-default btn-sm"><i class="far fa-eye"></i></button>
                <form action="{{ route('qrcodes.destroy', $qrcode->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are sure you want to delete it ?')"><i class="far fa-trash-alt"></i></button>
                </form>
            </div>
            </td>
        </tr>
        @include('qrcodes.update')
        @include('qrcodes.viewMore')
        @endforeach

      </tbody>
    </table>
    <!-- /.table -->
  </div>
